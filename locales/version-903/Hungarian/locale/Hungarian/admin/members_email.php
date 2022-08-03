<?php
$locale['email_create_subject'] = "Felhasználó létrehozva a [SITENAME] oldalon";
$locale['email_create_message'] = "Kedves [USER_NAME]!<br/>Létrehoztuk hozzáférésed a [SITENAME] oldalunkhoz.<br/>Az alábbi adatokkal tudsz bejelentkezni:<br/>
Felhasználóneved: [USER_NAME]<br/>Jelszavad: [PASSWORD]<br/>Üdvözlettel,<br/>[SITEUSERNAME]<br/>[SITENAME]";

$locale['email_activate_subject'] = "Felhasználó aktiválva a [SITENAME] oldalon";
$locale['email_activate_message'] = "Kedves [USER_NAME],<br/>Aktiváltuk hozzáférésed az oldalunkon.<br/>A megadott felhasználóneveddel és jelszavaddal most már be tudsz jelentkezni.<br/>Üdvözlettel,<br/>[SITEUSERNAME]<br/>[SITENAME]";

$locale['email_deactivate_subject'] = "Fiók újraaktiválása szükséges itt: [SITENAME]";
$locale['email_deactivate_message'] = "Kedves [USER_NAME]!<br/>[DEACTIVATION_PERIOD] napja nem léptél be oldalunkra. Felhasználóneved inaktívként lett megjelölve, de minden általad megadott adat és tartalom megmaradt.<br/>Hozzáférésed újraaktiválásához kattints az alábbi linkre:<br/>[REACTIVATION_LINK]<br/>Üdvözlettel,<br/>[SITEUSERNAME]<br/>[SITENAME]";

$locale['email_ban_subject'] = "Felhasználóneved kitiltásra került - [SITENAME]";
$locale['email_ban_message'] = "Kedves [USER_NAME]!<br/>Felhasználóneved kitiltottuk oldalunkról az alábbi okok miatt:<br/>[REASON].<br/>
Ha további információt szeretnél megtudni a kitiltásod okáról, kérjük keresd meg oldalunk adminisztrátorát: [ADMIN_USERNAME].<br/>
[SITEUSERNAME]<br/>[SITENAME]";

$locale['email_secban_subject'] = "Felhasználóneved kitiltásra került - [SITENAME]";
$locale['email_secban_message'] = "Kedves [USER_NAME]!<br/>Felhasználóneved kitiltottuk oldalunkról, mivel tevékenységed veszélyeztette az oldal működését.<br/>
Ha további információt szeretnél megtudni a biztonsági kitiltásod okáról, kérjük keresd meg oldalunk adminisztrátorát: [ADMIN_USERNAME].<br/>[SITEUSERNAME]<br/>[SITENAME]";

$locale['email_suspend_subject'] = "Felhasználóneved felfüggesztésre - [SITENAME]";
$locale['email_suspend_message'] = "Kedves [USER_NAME]!<br/>Hozzáférésed felfüggesztettük oldalunkon az alábbi okok miatt:<br/>[REASON].<br/>
Hozzáférésed az alábbi időponttól lesz újra használható: [DATE]<br/>
Ha további információt szeretnél megtudni a felfüggesztésed okáról, kérjük keresd meg oldalunk adminisztrátorát: [ADMIN_USERNAME].<br/>
[SITEUSERNAME]<br/>[SITENAME]";

$locale['email_resend_subject'] = "Aktiváló e-mail újraküldése - [SITENAME]";
$locale['email_resend_message'] = "Kedves [USER_NAME]!<br/>Ezt a levelet azért kaptad, mert nem jelentkeztél be regisztrálás után oldalunkra - [SITENAME].<br/>
Amennyiben 24 órán belül nem jelentkezel be oldalunkra, a regisztrációs kérelmed törlésre kerül.<br/>Az alábbi adatokkal regisztráltál:<br/>Felhasználónév: [USER_NAME]<br/>Az alábbi linken aktiválhatod hozzáférésed:<br/>[ACTIVATION_LINK]<br/>
Üdvözlettel,<br/>[SITENAME]";
