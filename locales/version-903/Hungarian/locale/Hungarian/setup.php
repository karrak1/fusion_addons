<?php
$locale['setup_0000'] = "PHP-Fusion - Telepítő";
$locale['setup_0002'] = "Üdvözöllek a PHP-Fusion Telepítőben";
$locale['setup_0003'] = "A telepítő végigvezeti a szükséges lépéseken, hogy telepítse a PHP-Fusion CMS rendszert a szerveren. Amennyiben további segítségre van szüksége, kérjük látogasson el a <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page_id=216'>Online Telepítési Dokumentáció</a>.";
$locale['setup_0005'] = " Elolvastam és elfogadom a PHP-Fusion <a href='www.php-fusion.co.uk/licensing/?agpl'>használati feltételeit</a>.";
$locale['setup_0006'] = "PHP-Fusion 9 működéséhez MINIMUM PHP 7.0. Szükséges, Lásd a <a href='https://www.php-fusion.co.uk/infusions/wiki/documentation.php?page_id=215'> rendszer követelményei </a> oldalt további információkért.";
$locale['setup_0007'] = "Rendszerek OPCache-t telepíteni kell <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\"> opcache.save_comments </a> engedélyezése.";
$locale['setup_5000'] = "A PHP-Fusion használatához el kell olvasni és elfogadni a felhasználási feltételeket.";
$locale['setup_0010'] = "Aktuális verzió - ";
$locale['setup_0011'] = "hu";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "PHP-Fusion Frissítés";
$locale['setup_0022'] = "Üdvözöllek a PHP-Fusion Frissítő";
$locale['setup_0023'] = "A frissítési szolgáltatás végigvezet a szükséges lépéseken, hogy frissítse a PHP-Fusion CMS-t a szerverén. Kérjük, kövesse az alábbi lépéseket, és ellenőrizze a kötelező információkat.";
$locale['setup_0050'] = "Web Server";
$locale['setup_0051'] = "PHP Verzió";
$locale['setup_0052'] = "PHP Kiterjesztés";
$locale['setup_0053'] = "OPCache Támogatás";
$locale['setup_0054'] = "PDO Adatbázis Támogatás";
$locale['setup_0055'] = "PHP Memória Korlát";
$locale['setup_0056'] = "Fájlok Ellenőrzése";
$locale['setup_0101'] = "Bevezető";
$locale['setup_0102'] = "Fájlok és Mappák ellenőrzése";
$locale['setup_0103'] = "Adatbázis Beállítások";
$locale['setup_0104'] = "Adatbázis konfigurálás";
$locale['setup_0105'] = "Rendszer beállítások";
$locale['setup_0106'] = "Admin beállítások";
$locale['setup_0107'] = "Végső beállítások";
$locale['setup_0109'] = "A PHP-Fusion futtatásához szükséges Apache 2.4 vagy nagyobb verziója és a mod_rewrite engedélyezve legyen.";
$locale['setup_0110'] = "Mivel a beállításokat ServerTokens a httpd.conf, lehetetlen meghatározni a mod_rewrite nélkül, minimálisan Apache 2.4 verzióra van szükség.";
$locale['setup_0112'] = "A phpinfo() funkció le van tiltva biztonsági okokból. Ha látni szeretné a szerver phpinfo() információit, változtassa meg a PHP beállításait vagy lépjen kapcsolatba a kiszolgáló rendszergazdájával.";
$locale['setup_0113'] = "A PHP nagyon régi. PHP-Fusionnak szükség van legalább egy minimum 7.0 verzióra. PHP magasabb verziók 7.0 beépített SQL injection védelmet nyújtanak a mysql adatbázisoknak. Javasoljuk, hogy frissítse.";
$locale['setup_0114'] = "PHP-Fusion használatához engedélyeznie kell a PHP kiterjesztést a következő listában";
$locale['setup_0115'] = "Engedélyezve";
$locale['setup_0115a'] = "Nem Engedélyezve";
$locale['setup_0116'] = "PHP OPCode gyorsítótárazás javíthatja a webhelye teljesítményét. <strong>Javasoljuk</ strong> <a href='http://php.net/manual/opcache.installation.php' target='_blank'> a gyorsítótárazást </a> szerverén telepíteni.";
$locale['setup_0118'] = "A web szerver úgy tűnik nem támogja a PDO (PHP Data Objects)-t. Kérje tárhely szolgáltatóját a PDO támogatáshoz.";
$locale['setup_0119a'] = "Fontolja meg a PHP memória korlátjának %memory_minimum_limit növelését, amely segít megelőzni a hibákat a telepítés folyamán.";
$locale['setup_0119b'] = "Növelje a memória korlátot [CFG_FILE_PATH] fájl memory_limit paraméter szerkesztésével a majd indítsa újra a web szervert (vagy lépjen kapcsolatba a rendszergazdával vagy kérjen segítséget tárhely szolgáltatójától).";
$locale['setup_0119c'] = "Lépjen kapcsolatba a rendszergazdával, vagy a szolgáltató adhat segítséget a PHP memória korlát növeléséhez.";
// Buttons
$locale['setup_0120'] = "Beállítások befejezve";
$locale['setup_0121'] = "Tovább";
$locale['setup_0122'] = "Vissza";
$locale['setup_0124'] = "Tovább a helyreállítási beállításokhoz";
$locale['setup_0125'] = "Eltávolítási folyamat. Kérlek várj...";
$locale['setup_0130'] = "Xdebug beállítások";
$locale['setup_0131'] = "xdebug.max_nesting_level van beállítva";
$locale['setup_0132'] = "Állítsa {%code%} a PHP konfigurációban, a webhelye nem fog megfelelően működni, ha a beállítás túl alacsony.";
$locale['setup_0134'] = "Az Összes szükséges fájl megfelel a követelményeknek.";
$locale['setup_0135'] = "Annak érdekében, hogy a telepítés folytatódjon, a következő fájlok és mappák legyen írható. Kérjük a fájlok chmod értékét 755 ról 777 re módosítani a folytatásához";
$locale['setup_0136'] = "Nem Írható (Hibás)";
$locale['setup_0137'] = "Írható (Rendben)";
$locale['setup_0138'] = "Adatbázis kapcsolat létrejött";
$locale['setup_0139'] = "Adatbázis oszlop kiválasztás létrejött";
$locale['setup_0140'] = "Adatbázis rendelkezésre áll, és kész a telepítésre";
$locale['setup_0141'] = "Adatbázis jogosultságok és a hozzáférés ellenőrizve";
$locale['setup_0142'] = "config.php fájl elkészítve";
$locale['setup_0143'] = "A megadott tábla előtag már használatban van, és fut. A telepítés folytatódik, módosítása szükséges";
$locale['setup_0144'] = "Adatbázis diagnosztika Elvégezve";
// Step 1
$locale['setup_1000'] = "Kérjük válassza ki a kívánt nyelvet:";
$locale['setup_1001'] = "További nyelveket itt találhatsz: <a href='https://translations.phpfusion.com/'><strong>PHP-Fusion hivatalos támogatási oldal</strong></a>";
$locale['setup_1002'] = "Üdvözöllek a PHP-Fusion 9 helyreállítási módba.";
$locale['setup_1003'] = "Már installálva van egy rendszer.<br/>Kérjük válassz a következőkből a folytatáshoz.";
$locale['setup_1004'] = "Új Telepítés";
$locale['setup_1005'] = "Törölheted és tisztíthatod az adatbázisod majd folytathatod Új telepítéssel.";
$locale['setup_1006'] = "KÉRJÜK CSINÁLJ BIZTONSÁGI MÁSOLATOT A CONFIG.PHP FÁJLRÓL. A TÖRLÉS FOLYAMÁN TÖRLÉSRE FOG KERÜLNI EZ A FÁJL.";
$locale['setup_1007'] = "Törlés és Újraindítás";
$locale['setup_1008'] = "Rendszer Telepítése";
$locale['setup_1009'] = "Rendszer Beállításainak Módosítása.";
$locale['setup_1010'] = "Rendszer Telepítő";
$locale['setup_1011'] = "Elsődleges Felhasználó Adatainak Változtatása";
$locale['setup_1012'] = "Rendszer Admin adatainak változtatása, jelszó vissza állítás vagy admin hatály áthelyezése nélkül.";
$locale['setup_1013'] = "Rendszer Admin Adatainak Változtatása";
$locale['setup_1014'] = ".htaccess Újraépítése";
$locale['setup_1015'] = "Jelenlegi fájl törlése és egy alap .htaccess fájllal való helyettesítése";
$locale['setup_1017'] = "Változtatások elvetése és kilépés a Telepítőből";
$locale['setup_1018'] = "Kiléphetsz a telepítőből a lenti gombra kattintva. Ez átnevezi a config_temp.php fájlod config.php-ra.";
$locale['setup_1019'] = "Kilépés a Telepítőből";
$locale['setup_1020'] = ".htaccess fájl készítés/módosítás";
// Step 2
$locale['setup_1090'] = "Fájl";
$locale['setup_1091'] = "Státusz";
$locale['setup_1092'] = "Adatbázis felépítése és illesztőprogram";
$locale['setup_1106'] = "Fájlok/mappák ellenőrzése";
// Step 3 - Access criteria
$locale['setup_1200'] = "Adatbázis beállítások és Server beállítások";
$locale['setup_1201'] = "Add meg a MySQL adatbázisod beállításait.";
$locale['setup_1202'] = "Adatbázis hostnév:";
$locale['setup_1202a'] = "Adatbázis Port:";
$locale['setup_1202b'] = "Ha nem használ másik portot, hagyja üresen";
$locale['setup_1203'] = "Adatbázis felhasználónév:";
$locale['setup_1204'] = "Adatbázis jelszó:";
$locale['setup_1205'] = "Adatbázis neve:";
$locale['setup_1206'] = "Adattáblák előtagja:";
$locale['setup_1207'] = "Sütik (cookie) előtagja:";
$locale['setup_1208'] = "Adatbázis meghajtó";
// Step 4 - Database Setup
$locale['setup_1210'] = "PHP-Fusion telepítési hiba. Kérlek indítsd újra a telepítőt.";
$locale['setup_1211'] = "Az új PHP-Fusion telepítés kész. Kérjük, haladjon tovább a következő lépéssel.";
$locale['setup_1212'] = "Honlap és Főadminisztrátor konfigurációk";
$locale['setup_1213'] = "Oldal Információ";
$locale['setup_1214'] = "Oldal Neve";
$locale['setup_1215'] = "PHP-Fusion Powered Website";
$locale['setup_1216'] = "A PHP-Fusion egy könnyen kezelhető, nyílt forráskódú tartalomkezelő rendszer (CMS), PHP-ben.";
$locale['setup_1217'] = "Hozzáférésed Módosítva. Kérem mostantól az új adatokat használd.";
$locale['setup_1220'] = "Adatbázis Neve amit használ a PHP-Fusion.";
$locale['setup_1221'] = "A MYSQL Felhasználóneved";
$locale['setup_1222'] = "...és a MYSQL Jelszavad.";
$locale['setup_1223'] = "Legyen ez nagyon egyedi, hogy az adatbázis hozzáférés biztonságos legyen.";
$locale['setup_1224'] = "Cookie azonosító előtag";
$locale['setup_1225'] = "pl. localhost";
$locale['setup_1307'] = "Ellenőrizd, hogy a config.php írható-e.";
$locale['setup_1310'] = "Nem sikerült kapcsolatot létesíteni MySQL adatbázissal.";
$locale['setup_1311'] = "A megadott MySQL adatbázis nem létezik.";
$locale['setup_1313'] = "A megadott tábla előtag már használatban van, és fut. A tábla nem lesz telepítve. Kérjük kezdje újra, vagy folytassa a következő lépéssel.";
$locale['setup_1315'] = "Kérjük bizonyosodj meg róla, hogy a MySQL felhasználód rendelkezik olvasási, írási és törlési jogokkal is a megadott adatbázisban.";
$locale['setup_1317'] = "Kérjük ellenőrizd, hogy minden szükséges mezőt kitöltöttél-e.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Elsődleges főadminisztrátor létrehozása";
$locale['setup_1501'] = "Állítsd be a Rendszergazda fiók adatait.";
$locale['setup_1504'] = "Felhasználónév:";
$locale['setup_1505'] = "Bejelentkezési jelszó:";
$locale['setup_1506'] = "Jelszó ismét:";
$locale['setup_1507'] = "Admin jelszó:";
$locale['setup_1508'] = "Admin jelszó ismét:";
$locale['setup_1509'] = "E-mail cím:";
$locale['setup_1510'] = "Honlap E-mail címe:";
$locale['setup_1511'] = "Válassz Honlap régiót:";
$locale['setup_1512'] = "Az Oldalra telepített Nyelvek:";
$locale['setup_1513'] = "Tulajdonos neve";
// Progress Reports
$locale['setup_1600'] = "Telepít ";
$locale['setup_1601'] = "Tábla struktúra Frissítése ";
$locale['setup_1602'] = "Új Oszlop hozzáadása ";
$locale['setup_1603'] = "Helyi adat ";
// Step 6 - User details validation
$locale['setup_5010'] = "A felhasználónév nem engedélyezett karaktereket tartalmaz.";
$locale['setup_5011'] = "A felhasználónév mező nem lehet üres.";
$locale['setup_5012'] = "Nem egyezik meg a két bejelentkezési jelszó.";
$locale['setup_5013'] = "Hibás bejelentkezési jelszó. Csak alfanumerikus karaktereket használj!<br />A jelszónak legalább 8 karakter hosszúnak kell lennie.";
$locale['setup_5015'] = "Nem egyezik meg a két admin jelszó.";
$locale['setup_5016'] = " felhasználói és admin jelszónak különbözőnek kell lennie.";
$locale['setup_5017'] = "Hibás admin jelszó. Csak alfanumerikus karaktereket használj!<br />A jelszónak legalább 8 karakter hosszúnak kell lennie.";
$locale['setup_5020'] = "Kérjük add meg az e-mail címedet!";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Adminisztrátorok";
$locale['setup_3002'] = "Cikkek";
$locale['setup_3003'] = "Bannerek";
$locale['setup_3004'] = "BB kódok";
$locale['setup_3005'] = "Feketelista";
$locale['setup_3006'] = "Hozzászólások";
$locale['setup_3007'] = "Egyedi oldalak";
$locale['setup_3008'] = "Adatbázis";
$locale['setup_3010'] = "Letöltések";
$locale['setup_3011'] = "GyIK";
$locale['setup_3012'] = "Fórum";
$locale['setup_3013'] = "Képek";
$locale['setup_3014'] = "Infusion admin";
$locale['setup_3015'] = "Infusionok";
$locale['setup_3016'] = "Tagok";
$locale['setup_3018'] = "Hírek";
$locale['setup_3019'] = "Panelek";
$locale['setup_3020'] = "Galéria";
$locale['setup_3021'] = "PHP Infó";
$locale['setup_3022'] = "Szavazás";
$locale['setup_3023'] = "Navigáció";
$locale['setup_3024'] = "Hangulatjelek";
$locale['setup_3026'] = "Frissítés";
$locale['setup_3027'] = "Felhasználói csoportok";
$locale['setup_3029'] = "Web Linkek";
$locale['setup_3030'] = "Alapbeállítások";
$locale['setup_3031'] = "Dátum és idő";
$locale['setup_3033'] = "Regisztráció";
$locale['setup_3035'] = "További beállítások";
$locale['setup_3036'] = "Privát üzenetek";
$locale['setup_3037'] = "Profilmezők";
$locale['setup_3038'] = "Fórum rangok";
$locale['setup_3041'] = "Felhasználók";
$locale['setup_3044'] = "Védelem";
$locale['setup_3047'] = "Admin jelszó kezelő";
$locale['setup_3048'] = "Hibanapló";
$locale['setup_3049'] = "Felhasználónapló";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Nyelvi beállítások";
$locale['setup_3052'] = "Permalink";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Felület testreszabás";
$locale['setup_3057'] = "Migrációs eszköz";
$locale['setup_3058'] = "Felület Beállítások";
$locale['setup_3059'] = "Fusion Fájl Manager";
// Multilanguage table rights
$locale['setup_3200'] = "Cikkek";
$locale['setup_3201'] = "Egyedi oldalak";
$locale['setup_3202'] = "Letöltések";
$locale['setup_3203'] = "GyIK";
$locale['setup_3204'] = "Fórumok";
$locale['setup_3205'] = "Hírek";
$locale['setup_3206'] = "Galéria";
$locale['setup_3207'] = "Szavazások";
$locale['setup_3208'] = "Email sablonok";
$locale['setup_3209'] = "Web Linkek";
$locale['setup_3210'] = "Honlap linkek";
$locale['setup_3211'] = "Panelek";
$locale['setup_3212'] = "Fórum rangok";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Főoldal";
$locale['setup_3302'] = "Letöltések";
$locale['setup_3303'] = "GyIK";
$locale['setup_3304'] = "Fórum";
$locale['setup_3305'] = "Kapcsolatfelvétel";
$locale['setup_3307'] = "Web Linkek";
$locale['setup_3308'] = "Galéria";
$locale['setup_3309'] = "Keresés";
$locale['setup_3310'] = "Link beküldése";
$locale['setup_3311'] = "Hír beküldése";
$locale['setup_3312'] = "Cikk beküldése";
$locale['setup_3313'] = "Kép beküldése";
$locale['setup_3314'] = "Letöltés beküldése";
$locale['setup_3315'] = "Beküldések";
$locale['setup_3316'] = "Üzenőfal";
$locale['setup_3317'] = "Blog beküldése";
$locale['setup_3318'] = "Blog archív Panel";
$locale['setup_3319'] = "Legújabb Téma";
$locale['setup_3320'] = "Hozzászólásaid";
$locale['setup_3321'] = "Követett Téma";
$locale['setup_3322'] = "Megválaszolatlan Téma";
$locale['setup_3323'] = "Megoldatlan Kérdések";
$locale['setup_3324'] = "Új téma indítása";
$locale['setup_3325'] = "Legújabb Cikkek";
$locale['setup_3326'] = "Legújabb Letöltések";
$locale['setup_3327'] = "GyIK beküldése";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigáció";
$locale['setup_3401'] = "Online felhasználók";
$locale['setup_3402'] = "Fórumtémák";
$locale['setup_3404'] = "Üdvözlet";
$locale['setup_3405'] = "Utolsó aktív fórumtémák";
$locale['setup_3406'] = "Felhasználói Menü";
$locale['setup_3407'] = "Szavazás";
$locale['setup_3408'] = "Rss Hírek";
// Stage 6 - News Categories
$locale['setup_3500'] = "Bugok";
$locale['setup_3501'] = "Letöltések";
$locale['setup_3502'] = "Játékok";
$locale['setup_3503'] = "Grafika";
$locale['setup_3504'] = "Hardver";
$locale['setup_3505'] = "Írások";
$locale['setup_3506'] = "Tagok";
$locale['setup_3507'] = "Modok";
$locale['setup_3508'] = "Videók";
$locale['setup_3509'] = "Hálózat";
$locale['setup_3510'] = "Hírek";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Biztonság";
$locale['setup_3513'] = "Szoftver";
$locale['setup_3514'] = "Felületek";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Főadminisztrátor";
$locale['setup_3601'] = "Adminisztrátor";
$locale['setup_3602'] = "Moderátor";
$locale['setup_3603'] = "Kezdő fórumozó";
$locale['setup_3604'] = "Haladó fórumozó";
$locale['setup_3605'] = "Fórumozó tag";
$locale['setup_3606'] = "Rangidős tag";
$locale['setup_3607'] = "Veterán tag";
$locale['setup_3608'] = "Őstag";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Mosoly";
$locale['setup_3621'] = "Kacsint";
$locale['setup_3622'] = "Szomorú";
$locale['setup_3623'] = "Honlokát ráncolja";
$locale['setup_3624'] = "Megdöbben";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Közömbös";
$locale['setup_3627'] = "Vigyor";
$locale['setup_3628'] = "Dühös";
$locale['setup_3629'] = "Tetszik";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Elérhetőségek";
$locale['setup_3642'] = "Információk";
$locale['setup_3643'] = "Beállítások";
$locale['setup_3644'] = "Statisztika";
$locale['setup_3645'] = "Magán";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Honlap Információ";
$locale['setup_3661'] = "A honlap kezelésével kapcsolatos Témák";

// Stage 6 - User Fields
require_once __DIR__."/user_fields/user_birthdate.php";
require_once __DIR__."/user_fields/user_icq.php";
require_once __DIR__."/user_fields/user_location.php";
require_once __DIR__."/user_fields/user_sig.php";
require_once __DIR__."/user_fields/user_skype.php";
require_once __DIR__."/user_fields/user_theme.php";
require_once __DIR__."/user_fields/user_web.php";
require_once __DIR__."/user_fields/user_timezone.php";
require_once __DIR__."/user_fields/user_blacklist.php";

// Welcome message
$locale['setup_3650'] = "Üdvözöllek oldalunkon.";
// Final message
$locale['setup_1700'] = "A telepítés befejeződött.";
$locale['setup_1701'] = "PHP-Fusion 9 készen áll a használatra. Kattints a Befejezés gombra, hogy átírjam a config_temp.php fájlt config.php-ra.";
$locale['setup_1702'] = "<strong>Megjegyzés:</strong> az /install.php fájlt biztonsági okokból törölni kell a szerverről, és a 'config.php' fájl jogosultságait 644-re kell állítani (CHMOD)";
$locale['setup_1703'] = "Köszönjük, hogy a PHP-Fusion-t választotta.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%Y.%m.%d";
$locale['setup_3701'] = "%Y %B %d %H:%M:%S";
$locale['setup_3702'] = "%Y-%m-%d %H:%M";
$locale['setup_3703'] = "%Y %B %d";
$locale['setup_3704'] = "%Y %B %d %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Email Minták";
$locale['setup_3801'] = "Értesítés új privát üzenetről";
$locale['setup_3802'] = "Új privát üzeneted van tőle: [USER] itt: [SITENAME]";
$locale['setup_3803'] = "Helló [RECEIVER],
Új privát üzenetet kaptál.
Címe: [SUBJECT]
Küldő: [USER]
itt: [SITENAME].
Üzeneteidet itt elolvashatod: [SITEURL]messages.php

Üzenet: [MESSAGE]
Kikapcsolhatod az email értesítéseket a beállítások panelen, ha nem szeretnél értesítést az új üzenetekről.
Üdvözlettel,
[SENDER].";
$locale['setup_3804'] = "Új fórum hozzászólások értesítései";
$locale['setup_3805'] = "Válaszok értesítései - [SUBJECT]";
$locale['setup_3806'] = "Helló [RECEIVER],

Egy választ írtak a fórumtémára: \\'[SUBJECT]\\' amit itt követsz nyomon: [SITENAME].
A következő linkre kattintva megtekintheted:
[THREAD_URL]
Ha nem akarod tovább nyomon követni a témát kattints a \\'Téma nyomkövetésének kikapcsolása\\' linkre a téma alján.

Üdvözlettel,
[SENDER].";
$locale['setup_3807'] = "Kapcsolatok űrlap";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Cikkek";
$locale['articles']['description'] = "Alap cikkek rendszer.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Alap Blog rendszer.";
$locale['downloads']['title'] = "Letöltések";
$locale['downloads']['description'] = "Alap Letöltés kezelő Rendszer.";
$locale['faqs']['title'] = "GyIK";
$locale['faqs']['description'] = "Gyakran ismételt kérdések rendszer.";
$locale['forums']['title'] = "Fórum";
$locale['forums']['description'] = "Fórum rendszer.";
$locale['news']['title'] = "Hírek";
$locale['news']['description'] = "Hír kezelő rendszer.";
$locale['photos']['title'] = "Galéria";
$locale['photos']['description'] = "Fénykép galéria rendszer.";
$locale['polls']['title'] = "Szavazás";
$locale['polls']['description'] = "Szavazó rendszer.";
$locale['weblinks']['title'] = "Web linkek";
$locale['weblinks']['description'] = "Web Linkek rendszer.";
$locale['install'] = "Telepítő";
