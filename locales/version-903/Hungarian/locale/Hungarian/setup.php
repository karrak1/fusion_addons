<?php
$locale['setup_0000'] = "PHPFusion - Telepítő";
$locale['setup_0002'] = "Üdvözöllek a PHPFusion telepítőben";
$locale['setup_0003'] = "A telepítő végigvezeti a szükséges lépéseken, hogy telepítse a PHPFusion CMS rendszert a szerveren. Amennyiben további segítségre van szüksége, kérjük látogasson el az angol nyelvű <a class='strong' href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=216'>Online Telepítési Dokumentáció</a> oldalra.";
$locale['setup_0005'] = " Elolvastam és elfogadom a PHPFusion <a href='https://phpfusion.com/licensing/?agpl' target='_blank'>használati feltételeit</a>";
$locale['setup_0006'] = "PHPFusion 9 működéséhez MINIMUM PHP 7.0 szükséges. Lásd a <a href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=215'> rendszer követelményei </a> oldalt további információkért.";
$locale['setup_0007'] = "Rendszereknek, amelyekre telepítve van az OPCache, rendelkezniük kell <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\"> opcache.save_comments </a> engedélyezésével.";
$locale['setup_5000'] = "A PHPFusion használatához el kell olvasni és elfogadni a felhasználási feltételeket.";
$locale['setup_0010'] = "Aktuális verzió - ";
$locale['setup_0011'] = "hu";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "PHPFusion Frissítés";
$locale['setup_0022'] = "Üdvözöljük a PHPFusion Upgrading Service szolgáltatásban";
$locale['setup_0023'] = "A frissítési szolgáltatás végigvezet a szükséges lépéseken, hogy frissítve legyen a PHPFusion CMS a szerverén. Kérjük, kövesse az alábbi lépéseket és ellenőrizze a kötelező információkat.";
$locale['setup_0050'] = "Webszerver";
$locale['setup_0051'] = "PHP verzió";
$locale['setup_0052'] = "PHP kiterjesztés";
$locale['setup_0053'] = "OPCache támogatás";
$locale['setup_0054'] = "PDO adatbázis támogatás";
$locale['setup_0055'] = "PHP memória limit";
$locale['setup_0056'] = "Fájlok ellenőrzése";
$locale['setup_0101'] = "Bevezető";
$locale['setup_0102'] = "Rendszerkövetelmények";
$locale['setup_0103'] = "Adatbázis beállítások";
$locale['setup_0104'] = "Adatbázis konfigurálás";
$locale['setup_0105'] = "Rendszer beállítások";
$locale['setup_0106'] = "Főadminisztrátor beállításai";
$locale['setup_0107'] = "Végső beállítások";
$locale['setup_0109'] = "A PHPFusion futtatásához szükséges Apache 2.4 vagy nagyobb verziója és a mod_rewrite engedélyezve kell, hogy legyen.";
$locale['setup_0110'] = "A Szerver tokenek beállításait az Apache httpd.config fájlból lehetetlen kiolvasni mod_rewrite nélkül. Minimum 2.4-es Apache szükséges.";
$locale['setup_0112'] = "A phpinfo() funkció le van tiltva biztonsági okokból. Ha látni szeretné a szerver phpinfo() információit, változtassa meg a PHP beállításait vagy lépjen kapcsolatba a kiszolgáló rendszergazdájával.";
$locale['setup_0113'] = "A PHP verzió nagyon régi. PHPFusionnak szükség van legalább egy minimum 7.0-ás verzióra. PHP 7.0-nál magasabb verziók beépített SQL injection védelmet nyújtanak a mysql adatbázisoknak. Javasoljuk, hogy frissítse a php verziót a minimum szintre.";
$locale['setup_0114'] = "PHPFusion használatához engedélyeznie kell a PHP kiterjesztést a következő listában";
$locale['setup_0115'] = "Engedélyezve";
$locale['setup_0115a'] = "Nincs engedélyezve";
$locale['setup_0116'] = "PHP OPCode gyorsítótárazás javíthatja a webhelye teljesítményét. <strong>Javasoljuk</ strong> <a href='http://php.net/manual/opcache.installation.php' target='_blank'> a gyorsítótárazást </a> szerverén telepíteni.";
$locale['setup_0118'] = "A webszerver úgy tűnik nem támogatja a PDO (PHP Data Objects)-t. Kérje tárhely szolgáltatóját a PDO támogatás beállításához.";
$locale['setup_0119a'] = "Fontolja meg a PHP memória korlátjának %memory_minimum_limit növelését, amely segít megelőzni a hibákat a telepítés folyamán.";
$locale['setup_0119b'] = "Növelje a memória korlátot [CFG_FILE_PATH] fájl memory_limit paraméter szerkesztésével a majd indítsa újra a webszervert (vagy lépjen kapcsolatba a rendszergazdával vagy kérjen segítséget tárhely szolgáltatójától).";
$locale['setup_0119c'] = "Lépjen kapcsolatba a rendszergazdával, vagy a szolgáltató adhat segítséget a PHP memória korlát növeléséhez.";
// Buttons
$locale['setup_0120'] = "Beállítások befejezése";
$locale['setup_0121'] = "Mentés & Folytatás";
$locale['setup_0122'] = "Próbálja újra";
$locale['setup_0124'] = "Tovább a helyreállítási beállításokhoz";
$locale['setup_0125'] = "Eltávolítási folyamat. Kérlek várj...";
$locale['setup_0130'] = "Xdebug beállítások";
$locale['setup_0131'] = "xdebug.max_nesting_level van beállítva";
$locale['setup_0132'] = "Állítsa be a(z) {% code%} elemet a PHP konfigurációjában, mivel a PHPFusion webhely egyes oldalai nem fognak működni, ha ez a beállítás túl alacsony.";
$locale['setup_0134'] = "Minden szükséges fájl megfelelt az írható fájl követelményeinek.";
$locale['setup_0135'] = "Annak érdekében, hogy a telepítés folytatódjon a következő fájlok és mappák legyenek írható jogosultságúak. Kérjük a fájlok chmod értékét 755-ről 777-re módosítani a folytatásához";
$locale['setup_0136'] = "Nem írható (Hibás)";
$locale['setup_0137'] = "Írható (Rendben)";
$locale['setup_0138'] = "Adatbázis kapcsolat létrejött";
$locale['setup_0139'] = "Adatbázis oszlop kiválasztás létrejött";
$locale['setup_0140'] = "Adatbázis rendelkezésre áll és kész a telepítésre";
$locale['setup_0141'] = "Adatbázis jogosultságok és a hozzáférés ellenőrizve";
$locale['setup_0142'] = "config.php fájl létrehozva";
$locale['setup_0143'] = "A megadott tábla előtag már használatban van és fut. A telepítő szükség szerint folytatja a különbségek frissítését";
$locale['setup_0144'] = "Adatbázis diagnosztika elvégezve";
// Step 1
$locale['setup_1000'] = "Kérlek, válaszd ki a nyelvedet";
$locale['setup_1001'] = "További nyelveket itt találhatsz: <a href='https://phpfusion.com/translations/' target='_blank'><strong>PHPFusion hivatalos támogatási oldalon</strong></a>";
$locale['setup_1002'] = "Üdvözöllek a PHPFusion 9 - Helyreállítási módban.";
$locale['setup_1003'] = "Észleltük, hogy van egy meglévő rendszer telepítve. Kérjük, válassza a következők egyikét a folytatáshoz.";
$locale['setup_1004'] = "Friss - új telepítés";
$locale['setup_1005'] = "Eltávolíthatja és megtisztíthatja az adatbázisát és újra elindíthat egy tiszta telepítést.";
$locale['setup_1006'] = "KÉRJÜK CSINÁLJ BIZTONSÁGI MÁSOLATOT A CONFIG.PHP FÁJLRÓL. A TÖRLÉS FOLYAMÁN TÖRLÉSRE FOG KERÜLNI EZ A FÁJL IS.";
$locale['setup_1007'] = "Törlés és újrakezdés";
$locale['setup_1008'] = "Rendszer Telepítő";
$locale['setup_1009'] = "Rendszer beállításainak módosítása.";
$locale['setup_1010'] = "Rendszer telepítő";
$locale['setup_1011'] = "Főadminisztrátor adatainak változtatása";
$locale['setup_1012'] = "Módosítsa a Főadminisztrátor adatait anélkül, hogy vissza kellene állítania a jelszót, vagy át kellene adnia az SA-fiók tulajdonjogát másnak.";
$locale['setup_1013'] = "Főadminisztrátor adatainak változtatása";
$locale['setup_1014'] = ".htaccess újraépítése";
$locale['setup_1015'] = "Dobja el az aktuális fájlt, és cserélje le a .htaccess fájl szabványos változatára";
$locale['setup_1017'] = "Változtatások elvetése és kilépés a telepítőből";
$locale['setup_1018'] = "Kiléphetsz a telepítőből a lenti gombra kattintva. Ez átnevezi a config_temp.php fájlod config.php-ra.";
$locale['setup_1019'] = "Kilépés a telepítőből";
$locale['setup_1020'] = ".htaccess fájl készítés/módosítás";
// Step 2
$locale['setup_1090'] = "Fájlok";
$locale['setup_1091'] = "Státusz";
$locale['setup_1092'] = "Adatbázis-konfigurációk és illesztőprogram";
$locale['setup_1106'] = "Kiszolgáló és fájlszerkezet követelményeinek diagnosztikája";
// Step 3 - Access criteria
$locale['setup_1200'] = "Adatbázis beállítások és kiszolgáló útvonalak";
$locale['setup_1201'] = "Kérjük, adja meg MySQL adatbázis-hozzáférési beállításait.";
$locale['setup_1202'] = "Adatbázis hostnév:";
$locale['setup_1202a'] = "Adatbázis port:";
$locale['setup_1202b'] = "Ha nem használ másik portot, hagyja üresen";
$locale['setup_1203'] = "Adatbázis felhasználónév:";
$locale['setup_1204'] = "Adatbázis jelszó:";
$locale['setup_1205'] = "Adatbázis neve:";
$locale['setup_1206'] = "Tábla előtag:";
$locale['setup_1207'] = "Sütik (cookie) előtagja:";
$locale['setup_1208'] = "Adatbázis illesztő";
// Step 4 - Database Setup
$locale['setup_1210'] = "PHPFusion telepítési hiba. Kérlek indítsd újra a telepítőt.";
$locale['setup_1211'] = "Az új PHPFusion telepítése elkészült. Kérjük, haladjon tovább a következő lépéssel.";
$locale['setup_1212'] = "Honlap és Főadminisztrátor konfigurációk";
$locale['setup_1213'] = "Oldal Információ";
$locale['setup_1214'] = "Weboldal neve";
$locale['setup_1215'] = "PHPFusion Powered Website";
$locale['setup_1216'] = "A PHPFusion egy könnyen kezelhető, nyílt forráskódú tartalomkezelő rendszer (CMS), PHP-ben.";
$locale['setup_1217'] = "Fiókja frissült. Kérjük, mostantól használja az új hitelesítő adatokat.";
$locale['setup_1220'] = "Adatbázis neve amit használ a PHP-Fusion";
$locale['setup_1221'] = "A MYSQL felhasználónév";
$locale['setup_1222'] = "...és a MYSQL jelszavad";
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
$locale['setup_1500'] = "Főadminisztrátor létrehozása";
$locale['setup_1501'] = "Állítsd be a Főadminisztrátor fiók adatait.";
$locale['setup_1504'] = "Felhasználónév:";
$locale['setup_1505'] = "Bejelentkezési jelszó:";
$locale['setup_1506'] = "Jelszó ismét:";
$locale['setup_1507'] = "Admin jelszó:";
$locale['setup_1508'] = "Admin jelszó ismét:";
$locale['setup_1509'] = "E-mail cím:";
$locale['setup_1510'] = "Honlap e-mail címe:";
$locale['setup_1511'] = "Válassz honlap régiót:";
$locale['setup_1512'] = "A webhely nyelvének telepítése:";
$locale['setup_1513'] = "Tulajdonos neve";
// Progress Reports
$locale['setup_1600'] = "Telepítés ";
$locale['setup_1601'] = "Tábla struktúra frissítése ";
$locale['setup_1602'] = "Új oszlop hozzáadása ";
$locale['setup_1603'] = "Adatok feltöltése ";
// Step 6 - User details validation
$locale['setup_5010'] = "A felhasználónév nem engedélyezett karaktereket tartalmaz.";
$locale['setup_5011'] = "A felhasználónév mező nem lehet üres.";
$locale['setup_5012'] = "Nem egyezik meg a két bejelentkezési jelszó.";
$locale['setup_5013'] = "Hibás bejelentkezési jelszó. Csak alfanumerikus karaktereket használj!<br />A jelszónak legalább 8 karakter hosszúnak kell lennie.";
$locale['setup_5015'] = "Nem egyezik meg a két admin jelszó.";
$locale['setup_5016'] = "A felhasználói és admin jelszónak különbözőnek kell lennie.";
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
$locale['setup_3008'] = "Adatbázis mentés";
$locale['setup_3010'] = "Letöltések";
$locale['setup_3011'] = "GyIK";
$locale['setup_3012'] = "Fórumok";
$locale['setup_3013'] = "Képek";
$locale['setup_3014'] = "Infusion admin";
$locale['setup_3015'] = "Infusion panelek";
$locale['setup_3016'] = "Tagok";
$locale['setup_3018'] = "Hírek";
$locale['setup_3019'] = "Panelek";
$locale['setup_3020'] = "Galéria";
$locale['setup_3021'] = "Szerver információ";
$locale['setup_3022'] = "Szavazás";
$locale['setup_3023'] = "Navigáció";
$locale['setup_3024'] = "Hangulatjelek";
$locale['setup_3026'] = "Frissítés";
$locale['setup_3027'] = "Felhasználói csoportok";
$locale['setup_3029'] = "WebLinkek";
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
$locale['setup_3058'] = "Felület beállítások";
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
$locale['setup_3209'] = "WebLinkek";
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
$locale['setup_3307'] = "WebLinkek";
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
$locale['setup_3318'] = "Blog archív panel";
$locale['setup_3319'] = "Legújabb témák";
$locale['setup_3320'] = "Hozzászólásaid";
$locale['setup_3321'] = "Figyelt témáim";
$locale['setup_3322'] = "Megválaszolatlan témák";
$locale['setup_3323'] = "Megoldatlan kérdések";
$locale['setup_3324'] = "Új téma indítása";
$locale['setup_3325'] = "Legújabb cikkek";
$locale['setup_3326'] = "Legújabb letöltések";
$locale['setup_3327'] = "GyIK beküldése";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigáció";
$locale['setup_3401'] = "Online felhasználók";
$locale['setup_3402'] = "Fórumtémák";
$locale['setup_3404'] = "Üdvözlő üzenet";
$locale['setup_3405'] = "Utolsó aktív fórumtémák";
$locale['setup_3406'] = "Felhasználói menü";
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
$locale['setup_3511'] = "PHPFusion";
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
$locale['setup_3623'] = "Haragos";
$locale['setup_3624'] = "Megdöbben";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Klassz";
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
$locale['setup_3660'] = "Honlap információ";
$locale['setup_3661'] = "A honlap kezelésével kapcsolatos témák";

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
$locale['setup_1701'] = "PHPFusion 9 készen áll a használatra. Kattints a Befejezés gombra, hogy átírjam a config_temp.php fájlt config.php-ra.";
$locale['setup_1702'] = "<strong>Megjegyzés:</strong> az /install.php fájlt biztonsági okokból törölni kell a szerverről, és a 'config.php' fájl jogosultságait 0644-re kell állítani (Chmod)";
$locale['setup_1703'] = "Köszönjük, hogy a PHPFusion-t választotta.";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Email sablonok";
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
$locale['setup_3804'] = "Értesítés az új fórumbejegyzésekről";
$locale['setup_3805'] = "Új hozzászólás - [SUBJECT]";
$locale['setup_3806'] = "Helló [RECEIVER],

Egy választ írtak a fórumtémára: \\'[SUBJECT]\\' amit itt követsz nyomon: [SITENAME].
A következő linkre kattintva megtekintheted:
[THREAD_URL]
Ha nem akarod tovább nyomon követni a témát kattints a \\'Téma nyomkövetésének kikapcsolása\\' linkre a téma alján.

Üdvözlettel,
[SENDER].";
$locale['setup_3807'] = "Kapcsolati űrlap";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Cikkek";
$locale['articles']['description'] = "Alap cikkek rendszer.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Alap blog rendszer.";
$locale['downloads']['title'] = "Letöltések";
$locale['downloads']['description'] = "Alap letöltés kezelő rendszer.";
$locale['faqs']['title'] = "GyIK";
$locale['faqs']['description'] = "Gyakran ismételt kérdések rendszer.";
$locale['forums']['title'] = "Fórum";
$locale['forums']['description'] = "Fórum rendszer.";
$locale['news']['title'] = "Hírek";
$locale['news']['description'] = "Híreket kezelő rendszer.";
$locale['photos']['title'] = "Galéria";
$locale['photos']['description'] = "Fénykép galéria rendszer.";
$locale['polls']['title'] = "Szavazás";
$locale['polls']['description'] = "Szavazó rendszer.";
$locale['weblinks']['title'] = "WebLinkek";
$locale['weblinks']['description'] = "WebLinkeket kezelő rendszer.";
$locale['install'] = "Telepítő";
