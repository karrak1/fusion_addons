<?php
$locale['email_create_subject'] = "Felhasználó létrehozva - ";
$locale['email_create_message'] = "Szia [USER_NAME],\n
Létrehoztuk felhasználódat oldalunkon.\n
Az alábbi adatokkal tudsz bejelentkezni:\n
Felhasználónév: [USER_NAME]\n
Jelszó: [PASSWORD]\n\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_activate_subject'] = "Felhasználó aktiválva - ";
$locale['email_activate_message'] = "Szia [USER_NAME],\n
Aktiváltuk felhasználónevedet az oldalunkon.\n
A megadott felhasználóneveddel és jelszavaddal most be tudsz jelentkezni.\n\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_deactivate_subject'] = "Újraaktiválási kérelem - ".$settings['sitename'];
$locale['email_deactivate_message'] = "Szia [USER_NAME],\n
".$settings['deactivation_period']." napja nem léptél be oldalunkra. Felhasználóneved inaktívként lett megjelölve, de minden általad megadott adat és tartalom megmaradt.\n
Hozzáférésed újraaktiválásához kattints az alábbi linkre:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Üdvözlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_ban_subject'] = "Felhasználóneved kitiltva - ".$settings['sitename'];
$locale['email_ban_message'] = "Szia [USER_NAME],\n
Felhasználónevedet ".$userdata['user_name']." kitiltotta oldalunkról az alábbi okok miatt:\n
[REASON].\n
Ha további információt szeretnél megtudni a kitiltásod okáról, kérjük keresd meg oldalunk adminisztrátorát: ".$settings['siteemail'].".\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_secban_subject'] = "Felhasználóneved kitiltva - ".$settings['sitename'];
$locale['email_secban_message'] = "Szia [USER_NAME],\n
Felhasználónevedet ".$userdata['user_name']." kitiltotta oldalunkról, mivel tevékenységed veszélyeztette az oldal működését.\n
Ha további információt szeretnél megtudni a biztonsági kitiltásod okáról, kérjük keresd meg oldalunk adminisztrátorát: ".$settings['siteemail'].".\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_suspend_subject'] = "Felhasználóneved felfüggesztve - ".$settings['sitename'];
$locale['email_suspend_message'] = "Szia [USER_NAME],\n
Felhasználónevedet ".$userdata['user_name']." felfüggesztette oldalunkon az alábbi okok miatt:\n
[REASON].\n
Hozzáférésed az alábbi időponttól lesz újra használható: [DATE]\n
Ha további információt szeretnél megtudni a felfüggesztésed okáról, kérjük keresd meg oldalunk adminisztrátorát: ".$settings['siteemail'].".\n
".$settings['siteusername']."\n".$settings['sitename'];
