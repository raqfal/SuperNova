<?php

/**
 * db.php
 * Previously mysql.php
 *
 * @version 1.0
 * @copyright 2008 by Chlorel for XNova
 */

if(!defined('INSIDE'))
{
  die();
}

function sn_db_connect()
{
  global $link, $debug, $config, $lang, $db_prefix;

  if(!$link)
  {
    require(SN_ROOT_PHYSICAL . "config." . PHP_EX);

    $link = mysql_connect($dbsettings['server'], $dbsettings['user'], $dbsettings['pass']) or $debug->error(mysql_error(),'DB Error - cannot connect to server');

    mysql_query("/*!40101 SET NAMES 'utf8' */") or die('Error: ' . mysql_error());
//    mysql_query("SET SESSION TRANSACTION ISOLATION LEVEL SERIALIZABLE") or die('Error: ' . mysql_error());
    mysql_select_db($dbsettings['name']) or $debug->error(mysql_error(), 'DB error - cannot find DB on server');
    echo mysql_error();
    unset($dbsettings);
  }
//  $db_prefix = $config->db_prefix ? $config->db_prefix : $db_prefix;

//  return $db_prefix;
}

function doquery($query, $table = '', $fetch = false)
{
  global $numqueries, $link, $debug, $user, $tableList, $sn_cache, $is_watching, $config, $dm_change_legit, $db_prefix;

  if(!is_string($table))
  {
    $fetch = $table;
  }

  if($config->game_watchlist_array)
  {
    if(!$is_watching && in_array($user['id'], $config->game_watchlist_array))
    {
      if(!preg_match('/^(select|commit|rollback|start transaction)/i', $query))
      {
        $is_watching = true;
        $msg = "\$query = \"{$query}\"\n\rtable = '{$table}', fetch = '{$fetch}'";
        if(!empty($_POST))
        {
          $msg .= "\n\r" . dump($_POST,'$_POST');
        }
        if(!empty($_GET))
        {
          $msg .= "\n\r" . dump($_GET,'$_GET');
        }
        $debug->warning($msg, "Watching user {$user['id']}", 399, array('base_dump' => true));
        $is_watching = false;
      }
    }
  }

  $badword = false;
  if ((stripos($query, 'RUNCATE TABL') != FALSE) && ($table != 'logs')) {
    $badword = true;
  }elseif (stripos($query, 'ROP TABL') != FALSE) {
    $badword = true;
  }elseif (stripos($query, 'ENAME TABL') != FALSE) {
    $badword = true;
  }elseif (stripos($query, 'REATE DATABAS') != FALSE) {
    $badword = true;
  }elseif (stripos($query, 'REATE TABL') != FALSE) {
    $badword = true;
  }elseif (stripos($query, 'ET PASSWOR') != FALSE) {
    $badword = true;
  }elseif (stripos($query, 'EOAD DAT') != FALSE) {
    $badword = true;
  }elseif (stripos($query, 'RPG_POINTS') != FALSE && stripos(trim($query), 'UPDATE ') === 0 && !$dm_change_legit) {
    $badword = true;
  }elseif (stripos($query, 'AUTHLEVEL') != FALSE && $user['authlevel'] < 3 && stripos($query, 'SELECT') !== 0) {
    $badword = true;
  }

  if ($badword) {
    $message = 'Привет, я не знаю то, что Вы пробовали сделать, но команда, которую Вы только послали базе данных, не выглядела очень дружественной и она была заблокированна.<br /><br />Ваш IP, и другие данные переданны администрации сервера. Удачи!.';

    $report  = "Hacking attempt (".date("d.m.Y H:i:s")." - [".time()."]):\n";
    $report .= ">Database Inforamation\n";
    $report .= "\tID - ".$user['id']."\n";
    $report .= "\tUser - ".$user['username']."\n";
    $report .= "\tAuth level - ".$user['authlevel']."\n";
    $report .= "\tAdmin Notes - ".$user['adminNotes']."\n";
    $report .= "\tCurrent Planet - ".$user['current_planet']."\n";
    $report .= "\tUser IP - ".$user['user_lastip']."\n";
    $report .= "\tUser IP at Reg - ".$user['ip_at_reg']."\n";
    $report .= "\tUser Agent- ".$user['user_agent']."\n";
    $report .= "\tCurrent Page - ".$user['current_page']."\n";
    $report .= "\tRegister Time - ".$user['register_time']."\n";

    $report .= "\n";

    $report .= ">Query Information\n";
    $report .= "\tTable - ".$table."\n";
    $report .= "\tQuery - ".$query."\n";

    $report .= "\n";

    $report .= ">\$_SERVER Information\n";
    $report .= "\tIP - ".$_SERVER['REMOTE_ADDR']."\n";
    $report .= "\tHost Name - ".$_SERVER['HTTP_HOST']."\n";
    $report .= "\tUser Agent - ".$_SERVER['HTTP_USER_AGENT']."\n";
    $report .= "\tRequest Method - ".$_SERVER['REQUEST_METHOD']."\n";
    $report .= "\tCame From - ".$_SERVER['HTTP_REFERER']."\n";
    $report .= "\tPage is - ".$_SERVER['SCRIPT_NAME']."\n";
    $report .= "\tUses Port - ".$_SERVER['REMOTE_PORT']."\n";
    $report .= "\tServer Protocol - ".$_SERVER['SERVER_PROTOCOL']."\n";

    $report .= "\n--------------------------------------------------------------------------------------------------\n";

    $fp = fopen(SN_ROOT_PHYSICAL . 'badqrys.txt', 'a');
    fwrite($fp, $report);
    fclose($fp);

    die($message);
  }

  if(!$link)
  {
    sn_db_connect();
  }

//  $sql = str_replace('{{table}}', $db_prefix.$table, $query);
  $sql = $query;
  if(!(strpos($sql, '{{') === false) )
  {
    foreach($sn_cache->tables as $tableName)
    {
      $sql = str_replace("{{{$tableName}}}", $db_prefix.$tableName, $sql);
    }
  }
  $sqlquery = mysql_query($sql) or
    $debug->error(mysql_error()."<br />$sql<br />",'SQL Error');

  if($config->debug)
  {
    $numqueries++;
    $arr = debug_backtrace();
    $file = end(explode('/',$arr[0]['file']));
    $line = $arr[0]['line'];
    $debug->add("<tr><th>Query $numqueries: </th><th>$query</th><th>$file($line)</th><th>$table</th><th>$fetch</th></tr>");
  }

  if($fetch){
    $sqlrow = mysql_fetch_assoc($sqlquery);
    return $sqlrow;
  }else{
    return $sqlquery;
  }
}

/*
// Adjust query depending on params
function db_change_units_adjust($user, $planet = array(), &$query){return sn_function_call('db_change_units_adjust', array($user, $planet, &$query));}
function sn_db_change_units_adjust($user, $planet, &$query)
{
  $query[LOC_USER] = $user['id'] ? $query[LOC_USER] : array();
  $query[LOC_PLANET] = $planet['id'] ? $query[LOC_PLANET] : array();
}
*/

function db_change_units_perform($query, $tablename, $object_id)
{
  $query = implode(',', $query);
  if($query && $object_id)
  {
    return doquery("UPDATE {{{$tablename}}} SET {$query} WHERE `id` = '{$object_id}' LIMIT 1;");
  }
}

// TODO: THIS FUNCTION IS OBSOLETE AND SHOULD BE REPLACED!
function db_change_units(&$user, &$planet, $unit_list = array(), $query = null)
// $unit_list should have unique entrances! Recompress non-uniq entrances before pass param!
{
  global $sn_data;

  $query = is_array($query) ? $query : array(
    LOC_USER => array(),
    LOC_PLANET => array(),
  );

  foreach($unit_list as $unit_id => $unit_amount)
  {
    if(!$unit_amount)
    {
      continue;
    }

    $unit_db_name = $sn_data[$unit_id]['name'];

    $unit_location = sys_get_unit_location($user, $planet, $unit_id);

    // Changing value in object
    switch($unit_location)
    {
      case LOC_USER:
        $user[$unit_db_name] += $unit_amount;
      break;
      case LOC_PLANET:
        $planet[$unit_db_name] += $unit_amount;
      break;
    }

    $unit_amount = $unit_amount < 0 ? $unit_amount : "+{$unit_amount}"; // Converting positive unit_amount to string '+unit_amount'
    $query[$unit_location][$unit_id] = "`{$unit_db_name}`=`{$unit_db_name}`{$unit_amount}";
  }

  db_change_units_perform($query[LOC_USER], 'users', $user['id']);
  db_change_units_perform($query[LOC_PLANET], 'planets', $planet['id']);
}

function sn_db_perform($table, $values, $type = 'insert', $options = false)
{
  $mass_perform = false;

  $field_set = '';
  $value_set = '';

  switch($type)
  {
    case 'delete':
      $query = 'DELETE FROM';
    break;

    case 'insert':
      $query = 'INSERT INTO';
      if(isset($options['__multi']))
      {
        // Here we generate mass-insert set
        break;
      }
    case 'update':
      if(!$query)
      {
        $query = 'UPDATE';
      }

      foreach($values as $field => &$value)
      {
        $value_type = gettype($value);
        if ($value_type == 'string')
        {
          $value = "'" . mysql_real_escape_string($value) . "'";
        }
        $value = "`{$field}` = {$value}";
      }
      $field_set = 'SET ' . implode(', ', $values);
    break;

  };

  $query .= " {$table} {$field_set}";
  return doquery($query);
}

function sn_db_unit_changeset_prepare($unit_id, $unit_value, $user, $planet_id = null)
{
  global $sn_data;
  $db_changeset = array();
  $temp = doquery("SELECT `unit_id` FROM {{unit}} WHERE `unit_player_id` = {$user['id']} AND `unit_snid` = {$unit_id} LIMIT 1 FOR UPDATE", true);
//pdump($temp, '$temp');
  if($temp['unit_id'])
  {
    // update
    $db_changeset = array(
      'action' => SQL_OP_UPDATE,
      'where' => array(
        "`unit_id` = {$temp['unit_id']}",
      ),
      'fields' => array(
        'unit_level' => array(
          'delta' => $unit_value
        ),
      ),
    );
  }
  else
  {
    $unit_location = sys_get_unit_location($user, array(), $unit_id);
    // insert
    $db_changeset = array(
      'action' => SQL_OP_INSERT,
      'fields' => array(
        'unit_player_id' => array(
          'set' => $user['id'],
        ),
        'unit_location_type' => array(
          'set' => $unit_location,
        ),
        'unit_location_id' => array(
          'set' => $unit_location == LOC_USER ? $user['id'] : $planet_id,
        ),
        'unit_type' => array(
          'set' => $sn_data[$unit_id]['type'],
        ),
        'unit_snid' => array(
          'set' => $unit_id,
        ),
        'unit_level' => array(
          'set' => $unit_value,
        ),
      ),
    );
  }

  return $db_changeset;
}



function sn_db_changeset_apply($db_changeset)
{
  foreach($db_changeset as $table_name => $table_data)
  {
    foreach($table_data as $record_id => $conditions)
    {
      $where = '';
      if(!empty($conditions['where']))
      {
        $where = 'WHERE ' . implode(' AND ', $conditions['where']);
      }

      $fields = array();
      if($conditions['fields'])
      {
        foreach($conditions['fields'] as $field_name => $field_data)
        {
          $condition = "`{$field_name}` = ";
          $value = '';
          if($field_data['delta'])
          {
            $value = "`{$field_name}`" . ($field_data['delta'] >= 0 ? '+' : '') . $field_data['delta'];
          }
          elseif($field_data['set'])
          {
            $value = (is_string($field_data['set']) ? "'{$field_data['set']}'": $field_data['set']);
          }
          if($value)
          {
            $fields[] = $condition . $value;
          }
        }
      }
      $fields = implode(',', $fields);

      switch($conditions['action'])
      {
        case SQL_OP_DELETE:
          doquery("DELETE FROM {{{$table_name}}} {$where}");
          break;

        case SQL_OP_UPDATE:
          if($fields)
          {
            doquery("UPDATE {{{$table_name}}} SET {$fields} {$where}");
          }
          break;

        case SQL_OP_INSERT:
          if($fields)
          {
            doquery("INSERT INTO {{{$table_name}}} SET {$fields}");
          }
          break;

        case SQL_OP_REPLACE:
          if($fields)
          {
            doquery("REPLACE INTO {{{$table_name}}} SET {$fields}");
          }
          break;

      }
    }
  }
}

/*
 * Эта функция проверяет статус транзакции
 * Это - низкоуровневая функция. В нормальном состоянии движка её сообщения никогда не будут видны
 *
 * $transaction_status
 *   true - транзакция должна быть запущена
 *   false - всё равно
 *   null - транзакция НЕ должна быть запущена
 *
 */
function sn_db_transaction_check($transaction_should_be_started = null)
{
  global $supernova;

  $error_msg = false;
  if($transaction_should_be_started && !$supernova->db_in_transaction)
  {
    $error_msg = 'No transaction started for current operation';
  }
  elseif($transaction_should_be_started === null && $supernova->db_in_transaction)
  {
    $error_msg = 'Transaction is already started';
  }

  if($error_msg)
  {
    $backtrace = debug_backtrace();
    array_shift($backtrace);
    pdump($backtrace);
    die($error_msg);
  }

  return $supernova->db_in_transaction;
}

function sn_db_transaction_start()
{
  global $supernova;
  sn_db_transaction_check();
  doquery('START TRANSACTION');
  $supernova->db_in_transaction = true;
}


function sn_db_transaction_commit()
{
  global $supernova;
  sn_db_transaction_check(true);
  doquery('COMMIT');
  $supernova->db_in_transaction = false;
}

function sn_db_transaction_rollback()
{
  global $supernova;
  doquery('ROLLBACK');
  $supernova->db_in_transaction = false;
}
