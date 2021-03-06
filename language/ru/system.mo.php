<?php

/*
#############################################################################
#  Filename: system.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Strategy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2009 MSW
#############################################################################
*/

/**
*
* @package language
* @system [Russian]
* @version #37c2#
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE'))
{
  exit;
}

if (empty($lang) || !is_array($lang))
{
  $lang = array();
}

// System-wide localization
$lang = array_merge($lang, array(
  // Dark Matter
  'sys_dark_matter_what_header' => 'Что такое Тёмная Материя',
  'sys_dark_matter_description_header' => 'Зачем нужна Тёмная Материя',
  'sys_dark_matter_description_text' => 'Тёмная Материя - это внутриигровой ресурс, за счет которой в игре вы можете совершать различные операции:
    <ul>
      <li>Покупать <a href="index.php?page=premium"><span class="link">Премиум-аккаунт</span></a></li>
      <li>Рекрутировать <a href="officer.php?mode=600"><span class="link">Наемников</span></a> в Империю </li>
      <li>Нанимать Губернаторов и покупать дополнительные сектора <a href="overview.php?mode=manage"><span class="link">на планеты</span></a></li>
      <li>Покупать <a href="officer.php?mode=1100"><span class="link">Чертежи</span></a></li>
      <li>Покупать <a href="artifacts.php"><span class="link">Артефакты</span></a></li>
      <li>Использовать <a href="market.php"><span class="link">Чёрный Рынок</span></a>: Обменивать один вид ресурсов на другой; продавать корабли; покупать Б/У корабли итд</li>
      <li>...и многое, многое другое</li>
    </ul>',
  'sys_dark_matter_obtain_header' => 'Где взять Тёмную Материю',
  'sys_dark_matter_obtain_text' => 'Вы получаете Тёмную Материю в процессе игры: набирая опыт за успешные рейды на чужие планеты, исследование новых технологий, а так же за постройку и разрушение зданий.
    Так же иногда исследовательские экспедиции могут принести ТМ.',

  'sys_dark_matter_purchase_url_description' => 'Кроме того вы можете приобрести ТМ за WebMoney.',
  'sys_dark_matter_purchase_url_get'  => 'Откройте эту ссылку, что бы узнать подробности.',


  'sys_dark_matter_purchase' => 'Купить Тёмную Материю',
  'sys_dark_matter_purchase_text_cost' => 'Стоимость',
  'sys_dark_matter_purchase_text_unit' => 'составляет',
  'sys_dark_matter_purchase_text_end' => 'При оптовой покупке ТМ предоставляются бонусы',
  'sys_dark_matter_purchase_text_bonus' => 'от %s ТМ - бонус %d%% к количеству ТМ',
  'sys_dark_matter_purchase_step1' => 'Шаг 1',
  'sys_dark_matter_purchase_step1_text' => 'Выберите количество ТМ, способ оплаты и подтвердите свой выбор',
  'sys_dark_matter_purchase_amount' => 'Количество Тёмной Материи',
  'sys_dark_matter_purchase_select' => 'Способ оплаты',
  'sys_dark_matter_purchase_confirm' => 'Подтвердить выбор',
  'sys_dark_matter_purchase_payment_selected' => 'Оплата будет произведена с использованием платежной системы',

  'sys_dark_matter_purchase_step2' => 'Шаг 2',
  'sys_dark_matter_purchase_step2_text' => 'Проверьте выбранное количество Тёмной Материи и способ оплаты. Если все правильно - нажмите кнопку "Оплатить Тёмную Материю". Если вы ошиблись - нажмите кнопку "Начать заново"',
  'sys_dark_matter_purchase_pay' => 'Оплатить Тёмную Материю',
  'sys_dark_matter_purchase_reset' => 'Начать заново',
  'sys_dark_matter_purchase_in_progress' => 'Происходит оплата...',
  'sys_dark_matter_purchase_conversion_cost' => 'Стоимость %d Тёмной Материи составит %s %s',

  'sys_dark_matter_purchase_exchange' => 'Внутренние курсы валют',
  'sys_currency_name' => 'Валюта',
  'sys_currency_symbol' => 'Символ',
  'sys_currency_exchange_direct' => 'Прямой курс',
  'sys_currency_exchange_reverse' => 'Обратный курс',
  'sys_currency_exchange_dm' => 'ТМ за 1 у.е.',
  'sys_currencies' => array(
    'RUB' => 'Российский рубль',
    'USD' => 'Доллар США',
    'EUR' => 'Евро',
    'UAH' => 'Украинская гривна',
    'WMR' => 'WebMoney рубль',
    'WMZ' => 'WebMoney доллар',
    'WME' => 'WebMoney евро',
    'WMU' => 'WebMoney гривна',
  ),
  'sys_dark_matter_purchase_exchange_note' => 'Внутренний курс используется для пересчета из основной валюты сервера в валюту плтаженой системы. Курс не включает комиссию посредников и/или платежных систем',

  'sys_dark_matter_purchase_result_complete' => 'Вы успешно заплатили за %d Тёмной Материи через сервис %s. Вам начислено %s Тёмной Материи',
  'sys_dark_matter_purchase_result_incomplete' => 'Ваш платеж за %d Тёмной Материи через сервис %s не закончен. Если вы считаете, что произошла ошибка - свяжитесь с Администрацией сервера',
  'sys_dark_matter_purchase_result_test' => 'На самом деле - шутка. Платеж был тестовый, поэтому ты ничего не получил ха-ха-ха! Если считаешь, что это ошибка - обратись к Администрации сервера',

  'pay_msg_request_user_found' => 'Пользователь найден',

  'pay_msg_request_unsupported' => 'Данный тип запроса не поддерживается',
  'pay_msg_request_signature_invalid' => 'Неправильная подпись запроса',
  'pay_msg_request_user_invalid' => 'Неправильный идентификатор пользователя',
  'pay_msg_request_server_wrong' => 'Неправильный сервер',
  'pay_msg_request_payment_amount_invalid' => 'Неправильная сумма платежа',
  'pay_msg_request_payment_id_invalid' => 'Неправильный идентификатор платежа',
  'pay_msg_request_payment_date_invalid' => 'Неправильная дата платежа',
  'pay_msg_request_internal_error' => 'Внутренняя ошибка сервера. Попробуйте повторить платеж позже',

  'pay_msg_request_dark_matter_amount_invalid' => 'Неправильное количество Тёмной Материи',
  'pay_msg_request_paylink_unsupported' => 'Данный тип платежной ссылке не поддерживается. Возможно используется устаревшая версия СН, не совместимая с данным платежным модулем',
  'pay_msg_request_dark_matter_config_invalid' => 'Ошибка в конфигурации модуля платежа. Свяжитесь с Администрацией сервера',

  'pay_msg_module_disabled' => 'Модуль платежа отключен',


  'sys_administration' => 'Администрация СверхНовой',
  'sys_birthday' => 'День рождения',
  'sys_birthday_message' => '%1$s! Администрация СверхНовой сердечно поздравляет тебя с твоим Днем Рождения, который пришелся на %2$s и преподносит тебе в качестве подарка %3$d %4$s! От всей души желаем тебе успехов в игре и высоких рангов в статистике! Может это поздравление и запоздало, но лучше раньше, чем позже.',

  'adm_err_denied' => 'Доступ запрещен. У вас не хватает прав, что бы пользоваться этой страницей интерфейса управления сервером',

  'sys_empire'          => 'Империя',
  'VacationMode'			=> "Ваше производство закрыто, так как вы в Отпуске",
  'sys_moon_destruction_report' => "Рапорт разрушения луны",
  'sys_moon_destroyed' => "Ваши Звёзды Смерти произвели мощную гравитационную волну, которая разрушила луну! ",
  'sys_rips_destroyed' => "Ваши Звёзды Смерти произвели мощную гравитационную волну, но её мощности оказалось не достаточно для уничтожения луны такого размера. Но гравитационная волна отразилась от лунной поверхности и разрушила ваш флот.",
  'sys_rips_come_back' => "Ваши Звёзды Смерти не имеют достаточно энергии, чтоб нанести ущерб этой луне. Ваш флот возвращается не уничтожив луну.",
  'sys_chance_moon_destroy' => "Изменение лунного уничтожения: ",
  'sys_chance_rips_destroy' => "Изменение разрывного уничтожения: ",

  'sys_impersonate' => 'Воплотиться',
  'sys_impersonate_done' => 'Развоплотиться',
  'sys_impersonated_as' => 'ВНИМАНИЕ! Вы сейчас Воплотились в игрока %1$s. Не забывайте, что на самом деле - вы %2$s! Развоплотиться можно выбрав соответствующий пункт меню.',

  'sys_day' => "дней",
  'sys_hrs' => "часов",
  'sys_min' => "минут",
  'sys_sec' => "секунд",
  'sys_day_short' => "д",
  'sys_hrs_short' => "ч",
  'sys_min_short' => "м",
  'sys_sec_short' => "с",

  'sys_ask_admin' => 'Вопросы и предложения направлять по адресу',

  'sys_wait'      => 'Запрос выполняется. Пожалуйста, подождите.',

  'sys_fleets'       => 'Флоты',
  'sys_expeditions'  => 'Экспедиции',
  'sys_fleet'        => 'Флот',
  'sys_expedition'   => 'Экспедиция',
  'sys_event_next'   => 'Следующее событие:',
  'sys_event_arrive' => 'прибудет',
  'sys_event_stay'   => 'закончит задание',
  'sys_event_return' => 'вернется',

  'sys_total'           => "ИТОГО",
  'sys_need'				=> 'Нужно',
  'sys_register_date'   => 'Дата регистрации',

  'sys_attacker' 		=> "Атакующий",
  'sys_defender' 		=> "Обороняющийся",

  'COE_combatSimulator' => "Симулятор боя",
  'COE_simulate'        => "Запуск симулятора",
  'COE_fleet'           => "Флот",
  'COE_defense'         => "Оборона",
  'sys_coe_combat_start'=> "Флоты соперников встретились",
  'sys_coe_combat_end'  => "Результаты боя",
  'sys_coe_round'       => "Раунд",

  'sys_coe_attacker_turn'=> 'Атакующий делает выстрелы общей мощностью %1$s. Щиты обороняющегося поглощают %2$s выстрелов<br />',
  'sys_coe_defender_turn'=> 'Обороняющийся делает выстрелы общей мощностью %1$s. Щиты атакующего поглощают %2$s выстрелов<br /><br /><br />',
  'sys_coe_outcome_win'  => 'Обороняющийся выиграл битву!<br />',
  'sys_coe_outcome_loss' => 'Атакующий выиграл битву!<br />',
  'sys_coe_outcome_loot' => 'Он получает %1$s металла, %2$s кристаллов, %3$s дейтерия<br />',
  'sys_coe_outcome_draw' => 'Бой закончился ничьёй.<br />',
  'sys_coe_attacker_lost'=> 'Атакующий потерял %1$s единиц.<br />',
  'sys_coe_defender_lost'=> 'Обороняющийся потерял %1$s единиц.<br />',
  'sys_coe_debris_left'  => 'Теперь на этих пространственных координатах находятся %1$s металла и %2$s кристаллов.<br /><br />',
  'sys_coe_moon_chance'  => 'Шанс появления луны составляет %1$s%%<br />',
  'sys_coe_rw_time'      => 'Время генерации страницы %1$s секунд<br />',

  'sys_resources'       => "Ресурсы",
  'sys_ships'           => "Корабли",
  'sys_metal'          => "Металл",
  'sys_metal_sh'       => "М",
  'sys_crystal'        => "Кристалл",
  'sys_crystal_sh'     => "К",
  'sys_deuterium'      => "Дейтерий",
  'sys_deuterium_sh'   => "Д",
  'sys_energy'         => "Энергия",
  'sys_energy_sh'      => "Э",
  'sys_dark_matter'    => "Тёмная Материя",
  'sys_dark_matter_sh' => "ТМ",

  'sys_reset'           => "Сбросить",
  'sys_send'            => "Отправить",
  'sys_characters'      => "символов",
  'sys_back'            => "Назад",
  'sys_return'          => "Вернуться",
  'sys_delete'          => "Удалить",
  'sys_writeMessage'    => "Написать сообщение",
  'sys_hint'            => "Подсказка",

  'sys_alliance'        => "Альянс",
  'sys_player'          => "Игрок",
  'sys_coordinates'     => "Координаты",

  'sys_online'          => "Онлайн",
  'sys_offline'         => "Оффлайн",
  'sys_status'          => "Статус",

  'sys_universe'        => "Вселенная",
  'sys_goto'            => "Перейти",

  'sys_time'            => "Время",
  'sys_temperature'		=> 'Температура',

  'sys_no_task'         => "нет задания",

  'sys_affilates'       => "Приглашенные игроки",

  'sys_fleet_arrived'   => "Флот прибыл",

  'sys_planet_type' => array(
    PT_PLANET => 'Планета', 
    PT_DEBRIS => 'Поле обломков', 
    PT_MOON   => 'Луна',
  ),

  'sys_planet_type_sh' => array(
    PT_PLANET => '(П)',
    PT_DEBRIS => '(О)',
    PT_MOON   => '(Л)',
  ),

  'sys_planet_expedition' => 'неисследованное пространство',

  'sys_capacity' 			=> 'Грузоподъёмность',
  'sys_cargo_bays' 		=> 'Трюмы',

  'sys_supernova' 		=> 'Сверхновая',
  'sys_server' 			=> 'Сервер',

  'sys_unbanned'			=> 'Разблокирован',

  'sys_date_time'			=> 'Дата и время',
  'sys_from_person'	   => 'От кого',
  'sys_from_speed'	   => 'от',

  'sys_from'		  => 'с',

// Resource page
  'res_planet_production' => 'Производство ресурсов на планете',
  'res_basic_income' => 'Естественное производство',
  'res_total' => 'ВСЕГО',
  'res_calculate' => 'Рассчитать',
  'res_hourly' => 'В час',
  'res_daily' => 'За день',
  'res_weekly' => 'За неделю',
  'res_monthly' => 'За месяц',
  'res_storage_fill' => 'Заполненность хранилища',
  'res_hint' => '<ul><li>Производство ресурсов <100% означает нехватку энергии. Постройте дополнительные электростанции или уменьшите производство ресурсов<li>Если ваше производство равно 0% скорее всего вы вышли из отпуска и вам нужно включить все заводы<li>Что бы выставить добычу для всех заводов сразу используйте дроп-даун в загловке таблицы. Особенно удобно использовать его после выхода из отпуска</ul>',

// Build page
  'bld_destroy' => 'Уничтожить',
  'bld_create'  => 'Построить',

// Imperium page
  'imp_imperator' => "Император",
  'imp_overview' => "Обзор Империи",
  'imp_fleets' => "Флоты в полете",
  'imp_production' => "Производство",
  'imp_name' => "Название",
  'imp_research' => "Исследования",
  'sys_fields' => "Сектора",

// Cookies
  'err_cookie' => "Ошибка! Невозможно авторизировать пользователя по информации в cookie.<br />Очистите куки браузера, затем еще раз попытайтесь <a href='login." . PHP_EX . "'>войти</a> в игру или <a href='reg." . PHP_EX . "'>зарегестрироваться</a>.",

// Supported languages
  'ru'              	  => 'Русский',
  'en'              	  => 'Английский',

  'sys_vacation'        => 'Вы же в отпуске до',
  'sys_vacation_leave'  => 'Я уже отдохнул - выйти из отпуска!',
  'sys_level'           => 'Уровень',
  'sys_level_short'     => 'Ур',

  'sys_yes'             => 'Да',
  'sys_no'              => 'Нет',

  'sys_on'              => 'Включен',
  'sys_off'             => 'Отключен',

  'sys_confirm'         => 'Подтвердить',
  'sys_save'            => 'Сохранить',
  'sys_create'          => 'Создать',
  'sys_write_message'   => 'Написать сообщение',

// top bar
  'top_of_year' => 'г.',
  'top_online'			=> 'Игроки',

  'sys_first_round_crash_1'	=> 'Контакт с атакованным флотом потерян.',
  'sys_first_round_crash_2'	=> 'Это означает что он был уничтожен в первом раунде боя.',

  'sys_ques' => array(
    QUE_STRUCTURES => 'Здания',
    QUE_HANGAR     => 'Верфь',
    QUE_RESEARCH   => 'Исследования',
  ),

  'eco_que' => 'Очередь',
  'eco_que_empty' => 'Очередь пуста',
  'eco_que_clear' => 'Очистить очередь',
  'eco_que_trim'  => 'Отменить последнее',
  'eco_que_artifact'  => 'Использовать Артефакт',

  'sys_cancel' => 'Отменить',

  'sys_overview'			=> 'Обзор',
  'mod_marchand'			=> 'Торговец',
  'sys_galaxy'			=> 'Галактика',
  'sys_system'			=> 'Система',
  'sys_planet'			=> 'Планета',
  'sys_planet_title'			=> 'Тип планеты',
  'sys_planet_title_short'			=> 'Тип',
  'sys_moon'			=> 'Луна',
  'sys_error'			=> 'Ошибка',
  'sys_done'				=> 'Готово',
  'sys_no_vars'			=> 'Ошибка инициализации переменных, обратитесь к администрации!',
  'sys_attacker_lostunits'		=> 'Атакующий потерял %s единиц.',
  'sys_defender_lostunits'		=> 'Обороняющийся потерял %s единиц.',
  'sys_gcdrunits' 			=> 'Теперь на этих пространственных координатах находятся %s %s и %s %s.',
  'sys_moonproba' 			=> 'Шанс появления луны составляет: %d %% ',
  'sys_moonbuilt' 			=> 'Благодаря огромной энергии огромные куски металла и кристалла соединяются и образуется новая луна %s %s!',
  'sys_attack_title'    		=> '%s. Произошёл бой между следующими флотами::',
  'sys_attack_attacker_pos'      	=> 'Атакующий %s [%s:%s:%s]',
  'sys_attack_techologies' 	=> 'Вооружение: %d %% Щиты: %d %% Броня: %d %% ',
  'sys_attack_defender_pos' 	=> 'Обороняющийся %s [%s:%s:%s]',
  'sys_ship_type' 			=> 'Тип',
  'sys_ship_count' 		=> 'Кол-во',
  'sys_ship_weapon' 		=> 'Вооружение',
  'sys_ship_shield' 		=> 'Щиты',
  'sys_ship_armour' 		=> 'Броня',
  'sys_destroyed' 			=> 'уничтожен',
  'sys_attack_attack_wave' 	=> 'Атакующий делает выстрелы общей мощностью %s по обороняющемуся. Щиты обороняющегося поглощают %s выстрелов.',
  'sys_attack_defend_wave'		=> 'Обороняющийся делает выстрелы общей мощностью %s по атакующему. Щиты атакующего поглащают %s выстрелов.',
  'sys_attacker_won' 		=> 'Атакующий выиграл битву!',
  'sys_defender_won' 		=> 'Обороняющийся выиграл битву!',
  'sys_both_won' 			=> 'Бой закончился ничьёй!',
  'sys_stealed_ressources' 	=> 'Он получает %s металла %s %s кристалла %s и %s дейтерия.',
  'sys_rapport_build_time' 	=> 'Время генерации страницы %s секунд',
  'sys_mess_tower' 		=> 'Транспорт',
  'sys_coe_lost_contact' 		=> 'Связь с вашим флотом потеряна',
  'sys_spy_maretials' 		=> 'Сырьё на',
  'sys_spy_fleet' 			=> 'Флот',
  'sys_spy_defenses' 		=> 'Оборона',
  'sys_mess_qg' 			=> 'Командование флотом',
  'sys_mess_spy_report' 		=> 'Шпионский доклад',
  'sys_mess_spy_lostproba' 	=> 'Погрешность информации, полученной спутником %d %% ',
  'sys_mess_spy_detect_chance' 	=> 'Шанс обнаружения вашего разведывательного флота %d%%',
  'sys_mess_spy_control' 		=> 'Контрразведка',
  'sys_mess_spy_activity' 		=> 'Шпионская активность',
  'sys_mess_spy_ennemyfleet' 	=> 'Чужой флот с планеты',
  'sys_mess_spy_seen_at'		=> 'был обнаружен возле планеты',
  'sys_mess_spy_destroyed'		=> 'Разведывательный флот был уничтожен',
  'sys_mess_spy_destroyed_enemy'		=> 'Вражеский шпионский флот уничтожен',
  'sys_object_arrival'		=> 'Прибыл на планету',
  'sys_stay_mess_stay' => 'Оставить флот',
  'sys_stay_mess_start' 		=> 'Ваш флот прибыл на планету',
  'sys_stay_mess_back'		=> 'Ваш флот вернулся ',
  'sys_stay_mess_end'		=> ' и доставил:',
  'sys_stay_mess_bend'		=> ' и доставил следующие ресурсы:',
  'sys_adress_planet' 		=> '[%s:%s:%s]',
  'sys_stay_mess_goods' 		=> '%s : %s, %s : %s, %s : %s',
  'sys_colo_mess_from' 		=> 'Колонизация',
  'sys_colo_mess_report' 		=> 'Отчёт о колонизации',
  'sys_colo_defaultname' 		=> 'Колония',
  'sys_colo_arrival' 		=> 'Флот достигает координат ',
  'sys_colo_maxcolo' 		=> ', но колонизировать планету нельзя, достигнуто максимальное число колоний для вашего уровня колонизации',
  'sys_colo_allisok' 		=> ', и колонисты начинают осваивать новую планету.',
  'sys_colo_badpos'  			=> ', и колонисты нашли среду мало выгодной для Вашей империи. Миссия колонизации возвращается обратно на планету отправки.',
  'sys_colo_notfree' 			=> ', и колонисты не нашли планету в этих координатах. Они вынуждены проложить дорогу обратно абсолютно обескураженными.',
  'sys_colo_no_colonizer'     => 'Во флоте нет колонизатора',
  'sys_colo_planet'  		=> ' Планета колонизирована!',
  'sys_expe_report' 		=> 'Отчёт экспедиции',
  'sys_recy_report' 		=> 'Системная информация',
  'sys_expe_blackholl_1' 		=> 'Ваш флот попал в чёрную дыру и частично потерян!',
  'sys_expe_blackholl_2' 		=> 'Ваш флот попал в чёрную дыру и полностью потерян!',
  'sys_expe_nothing_1' 		=> 'Ваш исследователи стали свидетелями СверхНовой Звезды! И ваши накопители успели принять часть высвободившейся энергии.',
  'sys_expe_nothing_2' 		=> 'Ваш исследователи ничего не обнаружили!',
  'sys_expe_found_goods' 		=> 'Ваш исследователи нашли планету, богатую сырьём!<br>Вы получили %s %s, %s %s и %s %s',
  'sys_expe_found_ships' 		=> 'Ваш исследователи нашли безупречно новый флот!<br>Вы получили: ',
  'sys_expe_back_home' 		=> 'Ваш флот возвращается обратно.',
  'sys_mess_transport' 		=> 'Транспорт',
  'sys_tran_mess_owner' 		=> 'Один из ваших флотов достигает планеты %s %s и доставляет %s %s, %s  %s и %s %s.',
  'sys_tran_mess_user'  		=> 'Ваш флот отправленный с планеты %s %s прибыл на %s %s и доставил %s %s, %s  %s и %s %s.',
  'sys_mess_fleetback' 		=> 'Возвращение',
  'sys_tran_mess_back' 		=> 'Один из ваших флотов возвращается на планету %s %s.',
  'sys_recy_gotten' 		=> 'Один из Ваших флотов добыл %s %s и %s %s Возвращается на планету.',
  'sys_notenough_money' 		=> 'Вам не хватает ресурсов, чтобы построить: %s. У Вас сейчас: %s %s , %s %s и %s %s. Для строительства необходимо: %s %s , %s %s и %s %s.',
  'sys_nomore_level'		=> 'Вы больше не можете совершенствовать это. Оно достигло макс. уровня ( %s ).',
  'sys_buildlist' 			=> 'Список построек',
  'sys_buildlist_fail' 		=> 'нет построек',
  'sys_gain' 			=> 'Добыча: ',
  'sys_debris' 			=> 'Обломки: ',
  'sys_noaccess' 			=> 'В доступе отказано',
  'sys_noalloaw' 			=> 'Вам закрыт доступ в эту зону!',
  'sys_governor'        => 'Губернатор',

  // News page & a bit of imperator page
  'news_title'      => 'Новости',
  'news_none'       => 'Нет новостей',
  'news_new'        => 'НОВАЯ',
  'news_future'     => 'АНОНС',
  'news_more'       => 'Подробнее...',
  'news_hint'       => 'Что бы убрать список последних новостей - прочтите их все, кликнув на заголовке "[ Новости ]"',

  'news_date'       => 'Дата',
  'news_announce'   => 'Содержание',
  'news_detail_url' => 'Ссылка на подробности',
  'news_mass_mail'  => 'Разослать новость всем игрокам',

  'news_total'      => 'Всего новостей: ',

  'news_add'        => 'Добавить новость',
  'news_edit'       => 'Редактировать новость',
  'news_copy'       => 'Скопировать новость',
  'news_mode_new'   => 'Новая',
  'news_mode_edit'  => 'Редактирование',
  'news_mode_copy'  => 'Копия',

  'sys_administration' => 'Администрация сервера',

  // Shortcuts
  'shortcut_title'     => 'Закладки',
  'shortcut_none'      => 'Нет закладок',
  'shortcut_new'       => 'НОВАЯ',
  'shortcut_text'      => 'Текст',

  'shortcut_add'       => 'Добавить закладку',
  'shortcut_edit'      => 'Редактировать закладку',
  'shortcut_copy'      => 'Скопировать закладку',
  'shortcut_mode_new'  => 'Новая',
  'shortcut_mode_edit' => 'Редактирование',
  'shortcut_mode_copy' => 'Копия',

  // Missile-related
  'mip_h_launched'			=> 'Запуск межпланетных ракет',
  'mip_launched'				=> 'Запущено межпланетных ракет: <b>%s</b>!',

  'mip_no_silo'				=> 'Недостаточен уровень ракетных шахт на планете <b>%s</b>.',
  'mip_no_impulse'			=> 'Необходимо исследовать импульсный двигатель.',
  'mip_too_far'				=> 'Ракета не может лететь так далеко.',
  'mip_planet_error'			=> 'Ошибка - больше одной планеты по одной координате',
  'mip_no_rocket'				=> 'Недостаточно ракет в шахте для проведения атаки.',
  'mip_hack_attempt'			=> ' Ты чо хакер? Еще один такой прикол и будешь забанен. ip адрес и логин я записал.',

  'mip_all_destroyed' 		=> 'Все межпланетные ракеты были уничтожены ракетами-перехватчиками<br>',
  'mip_destroyed'				=> '%s межпланетых ракет были уничтожены ракетами-перехватчиками.<br>',
  'mip_defense_destroyed'	=> 'Уничтожены следующие оборонительные сооружения:<br />',
  'mip_recycled'				=> 'Переработано из обломков защитных сооружений: ',
  'mip_no_defense'			=> 'На атакуемой планете не было защиты!',

  'mip_sender_amd'			=> 'Ракетно-космические войска',
  'mip_subject_amd'			=> 'Ракетная атака',
  'mip_body_attack'			=> 'Атака межпланетными ракетами (%1$s шт.) с планеты %2$s <a href="galaxy.php?mode=3&galaxy=%3$d&system=%4$d&planet=%5$d">[%3$d:%4$d:%5$d]</a> на планету %6$s <a href="galaxy.php?mode=3&galaxy=%7$d&system=%8$d&planet=%9$d">[%7$d:%8$d:%9$d]</a><br><br>',
  
  // Misc
  'sys_game_rules' => 'Правила игры',
  'sys_max' => 'макс',
  'sys_banned_msg' => 'Вы забанены. Для получения информации зайдите <a href="banned.php">сюда</a>. Срок окончания блокировки аккаунта: ',
  'sys_total_time' => 'Общее время',

  // Universe
  'uni_moon_of_planet' => 'планеты',

  // Combat reports
  'cr_view_title'  => "Просмотр боевых отчетов",
  'cr_view_button' => "Просмотреть отчет",
  'cr_view_prompt' => "Введите код",
  'cr_view_my'     => "Мои боевые отчеты",
  'cr_view_hint'   => '<ul><li>Свои боевые отчеты можно посмотреть, кликнув по ссылке "Мои боевые отчеты" в заголовке</li><li>Код боевого отчета указывается в его последней строке и является последовательностью 32 цифр и символов латинского алфавита</li></ul>',

  // Fleet
  'flt_gather_all'    => 'Свезти ресурсы',

  // Ban system
  'ban_title'      => 'Чёрный список',
  'ban_name'       => 'Имя',
  'ban_reason'     => 'Причина блокировки',
  'ban_from'       => 'Дата блокировки',
  'ban_to'         => 'Срок блокировки',
  'ban_by'         => 'Выдал',
  'ban_no'         => 'Нет заблокированных игроков',
  'ban_thereare'   => 'Всего',
  'ban_players'    => 'заблокировано',
  'ban_banned'     => 'Игроков заблокировано: ',

  // Contacts
  'ctc_title' => 'Администрация',
  'ctc_intro' => 'Здесь вы найдёте адреса всех администраторов и операторов игры для обратной связи',
  'ctc_name'  => 'Имя',
  'ctc_rank'  => 'Звание',
  'ctc_mail'  => 'eMail',

  // Records page
  'rec_title'  => 'Рекорды Вселенной',
  'rec_build'  => 'Постройки',
  'rec_specb'  => 'Специальные постройки',
  'rec_playe'  => 'Игрок',
  'rec_defes'  => 'Оборона',
  'rec_fleet'  => 'Флот',
  'rec_techn'  => 'Технологии',
  'rec_level'  => 'Уровень',
  'rec_nbre'   => 'Количество',
  'rec_rien'   => '-',

  // Credits page
  'cred_link'    => 'Интернет',
  'cred_site'    => 'Сайт',
  'cred_forum'   => 'Форум',
  'cred_credit'  => 'Авторы',
  'cred_creat'   => 'Директор',
  'cred_prog'    => 'Программист',
  'cred_master'  => 'Ведущий',
  'cred_design'  => 'Дизайнер',
  'cred_web'     => 'Вебмастер',
  'cred_thx'     => 'Благодарности',
  'cred_based'   => 'Основа для создания XNova',
  'cred_start'   => 'Место дебюта XNova',

  // Built-in chat
  'chat_common'   => 'Общий чат',
  'chat_ally'     => 'Чат Альянса',
  'chat_history'  => 'История',
  'chat_message'  => 'Сообщение',
  'chat_send'     => 'Отправить',
  'chat_page'     => 'Страница',
  'chat_timeout'  => 'Чат отключен из-за вашей неактивности. Обновите страницу.',

  // ----------------------------------------------------------------------------------------------------------
  // Interface of Jump Gate
  'gate_start_moon' => 'Начальная Луна',
  'gate_dest_moon'  => 'Конечная Луна',
  'gate_use_gate'   => 'Использовать врата',
  'gate_ship_sel'   => 'Выделить корабли',
  'gate_ship_dispo' => 'доступно',
  'gate_jump_btn'   => 'Выполнить прыжок!!',
  'gate_jump_done'  => 'врата находятся в стадии перезарядки!<br>Врата будут готовы к использованию через: ',
  'gate_wait_dest'  => 'Точка назначения врат в стадии подготовки! Врата будут готовы к использованию через: ',
  'gate_no_dest_g'  => 'На конечной точке назначения не обнаруженно врат для перемещения флота',
  'gate_no_src_ga'  => 'Нет врат для перемещения флота',
  'gate_wait_star'  => 'врата находятся в стадии перезарядки!<br>ворота будут готовы к использованию через: ',
  'gate_wait_data'  => 'Ошибка, нет данных для прыжка!',
  'gate_vacation'   => 'Ошибка, Вы не можете совершить прыжок т.к. находитесь в Режиме Отпуска !',
  'gate_ready'      => 'Врата готовы к прыжку',

  // quests
  'qst_quests'               => 'Квесты',
  'qst_msg_complete_subject' => 'Квест закончен',
  'qst_msg_complete_body'    => 'Вы выполнили квест "%s".',
  'qst_msg_your_reward'      => 'Ваша награда:',

  // Messages
  'msg_from_admin' => 'Администрация Вселенной',
  'msg_class' => array(
    MSG_TYPE_OUTBOX => 'Отправленные сообщения',
    MSG_TYPE_SPY => 'Шпионские отчёты',
    MSG_TYPE_PLAYER => 'Сообщения от игроков',
    MSG_TYPE_ALLIANCE => 'Сообщения альянса',
    MSG_TYPE_COMBAT => 'Военные отчёты',
    MSG_TYPE_RECYCLE => 'Отчеты переработки',
    MSG_TYPE_TRANSPORT => 'Прибытие флота',
    MSG_TYPE_ADMIN => 'Сообщения Администрации',
    MSG_TYPE_EXPLORE => 'Отчёты экспедиций',
    MSG_TYPE_QUE => 'Сообщения очереди построек',
    MSG_TYPE_NEW => 'Все сообщения',
  ),

  'msg_que_research_from'    => 'Научно-исследовательский институт',
  'msg_que_research_subject' => 'Новая технология',
  'msg_que_research_message' => 'Исследована новая технология \'%s\'. Новый уровень - %d',

  'msg_que_planet_from'    => 'Губернатор',

  'msg_que_hangar_subject' => 'Работа на верфи завершена',
  'msg_que_hangar_message' => "Верфь на %s завершила работу",

  'msg_que_built_subject'   => 'Планетарные работы завершены',
  'msg_que_built_message'   => "Завершено строительство здания '%2\$s' на %1\$s. Построено уровней: %3\$d",
  'msg_que_destroy_message' => "Завершено разрушение здания '%2\$s' на %1\$s. Разрушено уровней: %3\$d",

  'msg_personal_messages' => 'Личные сообщения',

  'sys_opt_bash_info'    => 'Настройки системы антибашинга',
  'sys_opt_bash_attacks' => 'Количество атак в одной волне',
  'sys_opt_bash_interval' => 'Интервал между волнами',
  'sys_opt_bash_scope' => 'Период расчета башинга',
  'sys_opt_bash_war_delay' => 'Мораторий после объявления войны',
  'sys_opt_bash_waves' => 'Количество волн за один период',
  'sys_opt_bash_disabled'    => 'Система антибашинга отключена',

  'sys_id' => 'ИД',
  'sys_identifier' => 'Идентификатор',

  'sys_email'   => 'Е-Мейл',
  'sys_ip' => 'IP',

  'sys_max' => 'Макс',
  'sys_maximum' => 'Максимум',
  'sys_maximum_level' => 'Максимальный уровень',

  'sys_user_name' => 'Имя пользователя',
  'sys_player_name' => 'Имя игрока',
  'sys_user_name_short' => 'Имя',

  'sys_planets' => 'Планеты',
  'sys_moons' => 'Луны',

  'sys_no_governor' => 'Нанять губернатора',

  'sys_quantity' => 'Количество',
  'sys_quantity_maximum' => 'Максимальное количество',
  'sys_qty' => 'К-во',

  'sys_buy_for' => 'Купить за',
  'sys_buy' => 'Купить',
  'sys_for' => 'за',

  'sys_eco_lack_dark_matter' => 'Не хватает Тёмной Материи',

  'time_local' => 'Локальное время',
  'time_server' => 'Серверное время',

  'sys_result' => array(
    'error_dark_matter_not_enough' => 'Не хватает Тёмной Материи для завершения операции',
    'error_dark_matter_change' => 'Ошибка изменения количества Тёмной Материи! Повторите операцию еще раз. Если ошибка повторится - сообщите Администрации сервера',
  ),

  // Arrays
  'sys_build_result' => array(
    BUILD_ALLOWED => 'Можно построить',
    BUILD_REQUIRE_NOT_MEET => 'Требования не удовлетворены',
    BUILD_AMOUNT_WRONG => 'Слишком много',
    BUILD_QUE_WRONG => 'Несуществующая очередь',
    BUILD_QUE_UNIT_WRONG => 'Неправильная очередь',
    BUILD_INDESTRUCTABLE => 'Нельзя уничтожить',
    BUILD_NO_RESOURCES => 'Не хватает ресурсов',
    BUILD_NO_UNITS => 'Нет юнитов',
    BUILD_UNIT_BUSY => array(
      0 => 'Строение занято',
      STRUC_LABORATORY => 'Идет исследование',
      STRUC_LABORATORY_NANO => 'Идет исследование',
    ),
  ),

  'sys_game_mode' => array(
    GAME_SUPERNOVA => 'Сверхновая',
    GAME_OGAME     => 'оГейм',
  ),

  'months' => array(
    01 =>'января',
    02 =>'февраля',
    03 =>'марта',
    04 =>'апреля',
    05 =>'мая',
    06 =>'июня',
    07 =>'июля',
    08 =>'августа',
    09 =>'сентября',
    10 =>'октября',
    11 =>'ноября',
    12 =>'декабря'
  ),

  'weekdays' => array(
    0 => 'Воскресенье',
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота'
  ),

  'user_level' => array(
    0 => 'Игрок',
    1 => 'Модератор',
    2 => 'Оператор',
    3 => 'Администратор',
    4 => 'Разработчик',
  ),

  'user_level_shortcut' => array(
    0 => 'И',
    1 => 'М',
    2 => 'О',
    3 => 'А',
    4 => 'Р',
  ),

  'sys_lessThen15min'   => '&lt; 15 мин',

  'sys_no_points'         => 'У вас недостаточно тёмной материи!',
  'sys_dark_matter_desc' => 'Тёмная материя - необнаружимая стандартными методами небарионная материя, на которую приходится 23% массы Вселенной. Из неё можно добывать невероятное количество энергии. Из-за этого, а так же из-за сложностей, связанных с её добычей, Тёмная Материя ценится очень высоко.',
  'sys_dark_matter_hint' => 'При помощи этой субстанции можно нанять офицеров и командиров.',

  'sys_msg_err_update_dm' => 'Ошибка обновления количества ТМ!',

  'sys_na' => 'Не доступен',
  'sys_na_short' => 'Н/Д',

  'sys_ali_res_title' => 'Ресурсы Альянса',

  'sys_bonus' => 'Бонус',

  'sys_of_ally' => 'Альянса',

  'sys_hint_player_name' => 'Поиск игрока может производиться по идентификатору или имени. Если имя игрока состоит из нечитаемых символов или только из цифр - для поиска нужно использовать идентификатор',
  'sys_hint_ally_name' => 'Поиск Альянса может производиться по идентификатору, тэгу или имени. Если тэг или название Альянса состоят из нечитаемых символов или только из цифр - для поиска нужно использовать идентификатор',

  'sys_fleet_and' => '+ флоты',

  'sys_on_planet' => 'На планете',
  'fl_on_stores' => 'На складе',

  'sys_ali_bonus_members' => 'Минимальное размер Альянса для получения бонуса',

  'sys_premium' => 'Премиум',

  'mrc_period_list' => array(
    PERIOD_MINUTE    => '1 минута',
    PERIOD_MINUTE_3  => '3 минуты',
    PERIOD_MINUTE_5  => '5 минут',
    PERIOD_MINUTE_10 => '10 минут',
    PERIOD_DAY       => '1 день',
    PERIOD_DAY_3     => '3 дня',
    PERIOD_WEEK      => '1 неделя',
    PERIOD_WEEK_2    => '2 недели',
    PERIOD_MONTH     => '30 дней',
    PERIOD_MONTH_2   => '60 дней',
    PERIOD_MONTH_3   => '90 дней',
  ),

  'sys_sector_buy' => 'Купить 1 сектор',

  'sys_select_confirm' => 'Подвердить выбор',

  'sys_capital' => 'Столица',

  'sys_result_operation' => 'Сообщения',

  'sys_password' => 'Пароль',
  'sys_password_length' => 'Длина пароля',
  'sys_password_seed' => 'Используемые символы',

  'sys_msg_ube_report_err_not_found' => 'Боевой отчет не найден. Проверьте правильность ключа. Так же есть вероятность, что отчет удален как устаревший',

  'sys_mess_attack_report' 	=> 'Боевой отчет',
  'sys_perte_attaquant' 		=> 'Атакующий потерял',
  'sys_perte_defenseur' 		=> 'Обороняющийся потерял',



  'ube_report_info_main' => 'Основная информация о бое',
  'ube_report_info_date' => 'Дата и время',
  'ube_report_info_location' => 'Место',
  'ube_report_info_rounds_number' => 'Количество раундов',
  'ube_report_info_outcome' => 'Результат боя',
  'ube_report_info_outcome_win' => 'Атакующий выиграл бой',
  'ube_report_info_outcome_loss' => 'Атакующий проиграл бой',
  'ube_report_info_outcome_draw' => 'Бой закончился ничьей',
  'ube_report_info_link' => 'Ссылка на боевой отчет',
  'ube_report_info_sfr' => 'Бой закончился за один раунд проигрышем атакующего<br />Вероятна РМФ',
  'ube_report_info_debris' => 'Обломки на орбите',
  'ube_report_info_loot' => 'Добыча',
  'ube_report_info_loss' => 'Боевые потери',
  'ube_report_info_generate' => 'Время генерации страницы',

  'ube_report_moon_was' => 'У этой планеты уже была луна',
  'ube_report_moon_chance' => 'Шанс образования луны',
  'ube_report_moon_created' => 'На орбите планеты образовалась луна диаметром',

  'ube_report_moon_reapers_none' => 'Все корабли с гравитационными двигателями были уничтожены в процессе боя',
  'ube_report_moon_reapers_wave' => 'Корабли атакующего создали сфокусированную гравитационную волну',
  'ube_report_moon_reapers_chance' => 'Шанс уничтожения луны',
  'ube_report_moon_reapers_success' => 'Луна уничтожена',
  'ube_report_moon_reapers_failure' => 'Мощности волны не хватило для уничтожения луны',

  'ube_report_moon_reapers_outcome' => 'Шанс взрыва двигателей',
  'ube_report_moon_reapers_survive' => 'Точная компенсация гравитационных полей системы позволила погасить отдачу от разрушения луны',
  'ube_report_moon_reapers_died' => 'Не сумев компенсировать добавочные гравитационные поля системы, флот был уничтожен',

  'ube_report_side_attacker' => 'Атакующий',
  'ube_report_side_defender' => 'Защитник',

  'ube_report_round' => 'Раунд',
  'ube_report_unit' => 'Боевая единица',
  'ube_report_attack' => 'Атака',
  'ube_report_shields' => 'Щиты',
  'ube_report_shields_passed' => 'Пробой',
  'ube_report_armor' => 'Броня',
  'ube_report_damage' => 'Урон',
  'ube_report_loss' => 'Потери',


  'ube_report_info_restored' => 'Восстановленно оборонительных сооружений',
  'ube_report_info_loss_final' => 'Итоговые потери боевых единиц',
  'ube_report_info_loss_resources' => 'Потери в пересчете на ресурсы',
  'ube_report_info_loss_dropped' => 'Потери ресурсов из-за уменьшения трюмов',
  'ube_report_info_loot_lost' => 'Увезено ресурсов со складов планеты',
  'ube_report_info_loss_gained' => 'Потери из-за вывоза ресурсов с планеты',
  'ube_report_info_loss_in_metal' => 'Общие потери в пересчете на металл',


  'ube_report_msg_body_common' => 'Бой состоялся %s на орбите %s [%d:%d:%d] %s<br />%s<br /><br />',
  'ube_report_msg_body_debris' => 'В результат боя на орбите планеты образовались обломки:<br />',
  'ube_report_msg_body_sfr' => 'Связь с флотом утеряна',

  'sys_kilometers_short' => 'км',

  'ube_simulation' => 'Симуляция',

  'sys_hire_do' => 'Нанять',

  'sys_captains' => 'Капитаны',

  'sys_fleet_composition' => 'Состав флота',

  'sys_continue' => 'Продолжить',

  'uni_planet_density_types' => array(
    PLANET_DENSITY_NONE => 'Не бывает',
    PLANET_DENSITY_ICE_WATER => 'Лёд',
    PLANET_DENSITY_SILICATE => 'Силикат',
    PLANET_DENSITY_STONE => 'Камень',
    PLANET_DENSITY_STANDARD => 'Стандарт',
    PLANET_DENSITY_METAL_ORE => 'Руда',
    PLANET_DENSITY_METAL_PRILL => 'Металл',
    PLANET_DENSITY_METAL_HEAVY => 'Тяжелый металл',
  ),

  'sys_planet_density' => 'Плотность',
  'sys_planet_density_units' => 'кг/м&sup3;',
  'sys_planet_density_core' => 'Тип ядра',

  'sys_change' => 'Изменить',
  'sys_show' => 'Показать',
  'sys_hide' => 'Скрыть',

  'ov_core_type_current' => 'Текущий тип ядра',
  'ov_core_change_to' => 'Изменить на',
  'ov_core_err_none' => 'Тип ядра планеты успешно изменен с "%s" на "%s".<br />Новая плотность планеты %d кг/м3',
  'ov_core_err_not_a_planet' => 'Только на планете можно менять плотность ядра',
  'ov_core_err_denisty_type_wrong' => 'Неправильный тип ядра',
  'ov_core_err_same_density' => 'Новый тип ядра не отличается от текущего - нечего менять',
  'ov_core_err_no_dark_matter' => 'Не хватает Тёмной Материи для смены типа ядра',

));
