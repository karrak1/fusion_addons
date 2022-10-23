<?php
// Created by Admin
$locale['email_create_name'] = "Regisztrációt megerősítő e-mail";
$locale['email_create_subject'] = "Felhasználó létrehozva a [SITENAME] oldalon";
$locale['email_create_message'] = "Kedves [USER_NAME]!<br/>Létrehoztuk hozzáférésed a [SITENAME] oldalunkhoz.<br/>Az alábbi adatokkal tudsz bejelentkezni:<br/>
Felhasználóneved: [USER_NAME]<br/>Jelszavad: [PASSWORD]<br/>Üdvözlettel,<br/>[SITEUSERNAME]<br/>[SITENAME]";

// Registered by User - activation link determines whether email is valid
$locale['email_verify_name'] = "Regisztráció aktiváló e-mail";
$locale['email_verify_subject'] = "Üdvözöljük a [SITENAME] oldalon. Kérjük, aktiválja fiókját";
$locale['email_verify_message'] = "Kedves [USER_NAME],<br/>
Üdvözöljük a [SITENAME] oldalon. Itt vannak a bejelentkezési adatai:<br/>
Felhasználónév: [USER_NAME]<br/>
Jelszó: [USER_PASSWORD]<br/>
Kérjük, aktiválja fiókját a következő linken keresztül: [LINK] Fiók aktiválása</a><br/>
Üdvözlettel:<br/>[SITEUSERNAME]";

// Verify New Email in update profile
$locale['email_change_name'] = "Új e-mail cím ellenőrző e-mail";
$locale['email_change_subject'] = "E-mail cím ellenőrzése – [SITENAME]";
$locale['email_change_message'] = "Kedves [USER_NAME],<br/>
Valaki beállította ezt az e-mail címet a webhelyünkön lévő fiókjában.<br/>
Ha valóban erre szeretné módosítani az e-mail címét, kattintson a következő linkre:<br/>
[EMAIL_VERIFY_LINK]<br/>
Megjegyzés: a folytatáshoz be kell jelentkeznie.<br/>
Üdvözlettel: [SITEUSERNAME]<br/>[SITENAME]";

// Password change notification
$locale['email_passchange_name'] = "Jelszóértesítés e-mail";
$locale['email_passchange_subject'] = "Új jelszóértesítés a [SITENAME] webhelyhez";
$locale['email_passchange_message'] = "Szia [USER_NAME]!
<br/>Új jelszót állítottunk be fiókjához a [SITENAME] webhelyen. Kérjük, jegyezze meg a mellékelt új bejelentkezési adatokat:<br/>
Felhasználónév: [USER_NAME]<br/>Jelszó: [PASSWORD]<br/>Üdvözlettel,<br/>[SITEUSERNAME]";

$locale['email_activate_name'] = "Fiókmegerősítő e-mail";
$locale['email_activate_subject'] = "Fiók aktiválva a [SITENAME] webhelyen";
$locale['email_activate_message'] = "Kedves [USER_NAME]!<br/>Fiókját a [SITENAME] webhelyen aktiváltuk.<br/>
Most már bejelentkezhet választott felhasználónevével és jelszavával.<br/>Üdvözlettel,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Fiók újraaktiválása szükséges a [SITENAME] webhelyen";
$locale['email_deactivate_message'] = "Kedves [USER_NAME]!<br/>[DEACTIVATION_PERIOD] nap telt el azóta, hogy utoljára bejelentkezett a [SITENAME] webhelyen. Felhasználóját inaktívként jelölték meg, de fiókjának összes adata és tartalma érintetlen marad.<br/>
Fiókja újraaktiválásához egyszerűen kattintson a következő linkre: [REACTIVATION_LINK]<br/>Üdvözlettel,<br/>[SITEUSERNAME]";

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

$locale['email_2fa_name'] = "2 faktoros hitelesítés PIN-kódja";
$locale['email_2fa_subject'] = "Az Ön [SITENAME] egyszeri jelszava";
$locale['email_2fa_message'] = "Ön megpróbál bejelentkezni a [SITENAME] webhelyre. Íme a 2FA PIN kód, amelyre szüksége van a fiókjához való hozzáféréshez: <strong>[OTP]</strong><br/>
Ezt az e-mailt azért küldtük, mert valaki megpróbált bejelentkezni [SITENAME] fiókjába. A bejelentkezési kísérlet tartalmazta a helyes felhasználónevét és jelszavát.<br/>
Ha nem próbál bejelentkezni, javasoljuk, hogy állítsa vissza [SITENAME] jelszavát, mivel a [SITENAME] fiók biztonsága veszélybe kerülhet. Az ebben az e-mailben található bejelentkezési PIN-kód szükséges a fiókjához való hozzáféréshez. Ne ossza meg senkivel a gombostűt.<br/><br/>
Üdvözlettel:<br/>[SITENAME]<br/><br/>Ezt az értesítést a [SITENAME] fiókjához társított e-mail címre küldtük. Ez az e-mail automatikusan jött létre. Kérlek ne reagálj. Ha további segítségre van szüksége, keresse fel a [SITENAME] ügyfélszolgálatát.";

$locale['email_pass_name'] = "Jelszó-helyreállítási e-mail";
$locale['email_pass_subject'] = "Új jelszókérés a következőhöz: [USER_NAME]";
$locale['email_pass_message'] = "Kedves [USER_NAME]!<br/>Ön vagy valaki új jelszót kért a [SITENAME] fiókjához való hozzáféréshez.<br/>
Jelszava megváltoztatásához kattintson a következő linkre:<br/>[LINK]<br/>Üdvözlettel:<br/>[SITEUSERNAME]<br/><br/><br/><br/>Ez az értesítés az Ön [SITENAME] fiókjához társított e-mail címre küldve. Ez az e-mail automatikusan jött létre. Kérlek ne reagálj. Ha további segítségre van szüksége, kérjük, keresse fel a [SITENAME] ügyfélszolgálatát.";
$locale['email_pass_notify'] = "Kedves [USER_NAME]!<br/>Az új jelszavad a [SITENAME] fiókodhoz:<br/>
[SZÖVEG]<br/>Üdvözlettel,<br/>[SITEUSERNAME]";

// Flooding
$locale['email_secban_name'] = "Fiókbiztonsági kitiltási e-mail";
$locale['email_secban_subject'] = "Felhasználóneved kitiltva - [SITENAME]";
$locale['email_secban_message'] = "Szia [USER_NAME],<br />
Valaki a felhasználóneveddel túl sok hozzászólást küldött el rövid idő alatt az alábbi IP címről: [USER_IP].<br />A rendszerünk ezért kitiltotta az oldalról, hogy megelőzze az esetleges rosszindulatú robotok tevékenységét.<br />
Kérjük lépj kapcsolatba oldalunk adminisztrátorával az alábbi címen, ha nem te okoztad a problémát: [SITE_EMAIL]<br />
Üdvözlettel,<br />
[SITEUSERNAME]<br />[SITENAME]";
/**
 * $locale['global_441'] = "Your account on [SITENAME] has been banned";
 * $locale['global_442'] = "Hello [USER_NAME],<br/>
 * Your account on [SITENAME] was caught posting too many items to the system in very short time from the IP [USER_IP], and have therefor been banned. This is done to prevent bots from submitting spam messages in rapid succession.<br/>
 * Please contact the site administrator at [SITE_EMAIL] to have your account restored or report if this was not you causing this security ban.<br/>
 * Regards,<br/>[SITEUSERNAME]";
 */

$locale['email_reactivated_name'] = "Fiók újraaktiválási e-mail";
$locale['email_reactivated_subject'] = "Fiók újra aktiválása [SITENAME]"; // 454
$locale['email_reactivated_message'] = "Hello USER_NAME,<br/>
The suspension of your account at [SITEURL] has been lifted. Here are your login details:<br/>
Username: USER_NAME<br/>Password: Hidden for security reasons<br/>
If you have forgot your password you can reset it via the following link: LOST_PASSWORD<br/>
Regards,<br/>[SITEUSERNAME]";

/**
 * * $locale['global_454'] = "Account reactivated at [SITENAME]";
 * $locale['global_452'] = "Hello USER_NAME,<br/>
 * The suspension of your account at [SITEURL] has been lifted. Here are your login details:<br/>
 * Username: USER_NAME<br/>Password: Hidden for security reasons<br/>
 * If you have forgot your password you can reset it via the following link: LOST_PASSWORD<br/>
 * Regards,<br/>[SITEUSERNAME]";
 *
 * $locale['global_453'] = "Hello USER_NAME,<br/>The suspension of your account at [SITEURL] has been lifted.<br/>
 * Regards,<br/>[SITEUSERNAME]";
 */

$locale['email_unsuspend_name'] = "Fiók felfüggesztett e-mailje";
$locale['email_unsuspend_subject'] = "Felfüggesztésed feloldva - [SITENAME]"; // 451
$locale['email_unsuspend_message'] = "Szia USER_NAME,<br />
Legutóbbi bejelentkezésed alkalmával hozzáférésed aktiválva lett, így már nincs megjelölve inaktívként.<br />
Üdvözlettel,<br />
[SITEUSERNAME]<br />[SITENAME]";
/*
$locale['global_451'] = "Suspension lifted at [SITENAME]";
$locale['global_455'] = "Hello USER_NAME,<br/>
Last time you logged in your account was reactivated at [SITEURL] and your account is no longer marked as inactive.<br/>
Regards,<br/>[SITEUSERNAME]";
 */
