<h1>{L_uni_naming}: <!-- IF SYSTEM -->{L_sys_system} [{GALAXY}:{SYSTEM}]<!-- ELSE -->{L_sys_galaxy} {GALAXY}<!-- ENDIF --></h1>
<h2><!-- IF NAME -->{NAME}<!-- ENDIF --></h2>

<!-- INCLUDE _result_message.tpl -->

<form action="galaxy.php?mode=name&galaxy={GALAXY}&system={SYSTEM}" method="post">
<table>
  <tr><td>{L_uni_name} <input type="text" name="uni_name" value="{NAME}" maxlength="64" size="32"> {L_uni_for} <input type="text" name="uni_price" value="{PRICE}" size="10"> {L_sys_dark_matter_sh} <input type="submit" name="uni_name_submit" value="{L_uni_to_name}"></td></tr>
</table>
</form>

<!-- INCLUDE page_hint.tpl -->
