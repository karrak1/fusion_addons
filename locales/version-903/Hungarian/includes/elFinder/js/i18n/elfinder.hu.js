/**
 * magyar translation
 * @author Gáspár Lajos <info@glsys.eu>
 * @version 2016-06-29
 */
(function(root, factory) {
	if (typeof define === 'function' && define.amd) {
		define(['elfinder'], factory);
	} else if (typeof exports !== 'undefined') {
		module.exports = factory(require('elfinder'));
	} else {
		factory(root.elFinder);
	}
}(this, function(elFinder) {
	elFinder.prototype.i18.hu = {
		translator : 'Gáspár Lajos &lt;info@glsys.eu&gt;',
		language   : 'magyar',
		direction  : 'ltr',
		dateFormat : 'Y.F.d H:i:s', // Mar 13, 2012 05:27 PM
		fancyDateFormat : '$1 H:i', // will produce smth like: Today 12:25 PM
		messages   : {

			/********************************** errors **********************************/
			'error'                : 'Hiba',
			'errUnknown'           : 'Ismeretlen hiba.',
			'errUnknownCmd'        : 'Ismeretlen parancs.',
			'errJqui'              : 'Hibás jQuery UI konfiguráció. A "selectable", "draggable" és a "droppable" komponensek szükségesek.',
			'errNode'              : 'Az elFinder "DOM" elem létrehozását igényli.',
			'errURL'               : 'Hibás elFinder konfiguráció! "URL" paraméter nincs megadva.',
			'errAccess'            : 'Hozzáférés megtagadva.',
			'errConnect'           : 'Nem sikerült csatlakozni a kiszolgálóhoz.',
			'errAbort'             : 'Kapcsolat megszakítva.',
			'errTimeout'           : 'Kapcsolat időtúllépés.',
			'errNotFound'          : 'A backend nem elérhető.',
			'errResponse'          : 'Hibás backend válasz.',
			'errConf'              : 'Hibás backend konfiguráció.',
			'errJSON'              : 'PHP JSON modul nincs telepítve.',
			'errNoVolumes'         : 'Nem állnak rendelkezésre olvasható kötetek.',
			'errCmdParams'         : 'érvénytelen paraméterek a parancsban. ("$1")',
			'errDataNotJSON'       : 'A válasz nem JSON típusú adat.',
			'errDataEmpty'         : 'Nem érkezett adat.',
			'errCmdReq'            : 'A backend kérelem parancsnevet igényel.',
			'errOpen'              : '"$1" megnyitása nem sikerült.',
			'errNotFolder'         : 'Az objektum nem egy mappa.',
			'errNotFile'           : 'Az objektum nem egy fájl.',
			'errRead'              : '"$1" olvasása nem sikerült.',
			'errWrite'             : '"$1" írása nem sikerült.',
			'errPerm'              : 'Engedély megtagadva.',
			'errLocked'            : '"$1" zárolás alatt van, és nem lehet átnevezni, mozgatni vagy eltávolítani.',
			'errExists'            : '"$1" nevű fájl már létezik.',
			'errInvName'           : 'Érvénytelen fáljnév.',
			'errFolderNotFound'    : 'Mappa nem található.',
			'errFileNotFound'      : 'Fájl nem található.',
			'errTrgFolderNotFound' : 'Cél mappa nem található. ("$1")',
			'errPopup'             : 'A böngésző megakadályozta egy felugró ablak megnyitását. A fájl megnyitását tegye lehetővé a böngésző beállitásaiban.',
			'errMkdir'             : '"$1" mappa létrehozása sikertelen.',
			'errMkfile'            : '"$1" fájl létrehozása sikertelen.',
			'errRename'            : '"$1" átnevezése sikertelen.',
			'errCopyFrom'          : 'Fájlok másolása a kötetről nem megengedett. ("$1")',
			'errCopyTo'            : 'Fájlok másolása a kötetre nem megengedett. ("$1")',
			'errMkOutLink'         : 'Hivatkozás létrehozása a root köteten kívül nem megengedett.', // from v2.1 added 03.10.2015
			'errUpload'            : 'Feltöltési hiba.',  // old name - errUploadCommon
			'errUploadFile'        : 'Nem sikerült a fájlt feltölteni. ($1)', // old name - errUpload
			'errUploadNoFiles'     : 'Nem található fájl feltöltéshez.',
			'errUploadTotalSize'   : 'Az adat meghaladja a maximálisan megengedett méretet.', // old name - errMaxSize
			'errUploadFileSize'    : 'A fájl meghaladja a maximálisan megengedett méretet.', //  old name - errFileMaxSize
			'errUploadMime'        : 'A fájltípus nem engedélyezett.',
			'errUploadTransfer'    : '"$1" transzfer hiba.',
			'errUploadTemp'        : 'Sikertelen az ideiglenes fájl léterhezozása feltöltéshez.', // from v2.1 added 26.09.2015
			'errNotReplace'        : 'Az objektum "$1" már létezik ezen a helyen, és nem lehet cserélni másik típusra', // new
			'errReplace'           : '"$1" nem cserélhető.',
			'errSave'              : '"$1" mentése nem sikerült.',
			'errCopy'              : '"$1" másolása nem sikerült.',
			'errMove'              : '"$1" áthelyezése nem sikerült.',
			'errCopyInItself'      : '"$1" nem másolható saját magára.',
			'errRm'                : '"$1" törlése nem sikerült.',
			'errRmSrc'             : 'Forrásfájl(ok) eltávolítása sikertelen.',
			'errExtract'           : 'Nem sikerült kikibontani a "$1" fájlokat.',
			'errArchive'           : 'Nem sikerült létrehozni az archívumot.',
			'errArcType'           : 'Nem támogatott archívum típus.',
			'errNoArchive'         : 'A fájl nem archív, vagy nem támogatott archívumtípust tartalmaz.',
			'errCmdNoSupport'      : 'A backend nem támogatja ezt a parancsot.',
			'errReplByChild'       : 'Az „$1” mappát nem lehet helyettesíteni egy abban található elemmel.',
			'errArcSymlinks'       : 'Biztonsági okokból az archívumok kicsomagolásának megtagadása szimbolikus linkeket vagy fájlokat tartalmaz, amelyek nem engedélyezettek.', // edited 24.06.2012
			'errArcMaxSize'        : 'Az archív fájlok meghaladják a megengedett legnagyobb méretet.',
			'errResize'            : 'Nem lehet átméretezni a (z) "$1".',
			'errResizeDegree'      : 'Érvénytelen forgatási fok.',  // added 7.3.2013
			'errResizeRotate'      : 'Nem lehet elforgatni a képet.',  // added 7.3.2013
			'errResizeSize'        : 'Érvénytelen képméret.',  // added 7.3.2013
			'errResizeNoChange'    : 'A kép mérete nem változott.',  // added 7.3.2013
			'errUsupportType'      : 'Nem támogatott fájl típus.',
			'errNotUTF8Content'    : 'Az "$1" fájl nincs az UTF-8-ban, és nem szerkeszthető.',  // added 9.11.2011
			'errNetMount'          : 'Nem lehet beilleszteni a(z) "$1".', // added 17.04.2012
			'errNetMountNoDriver'  : 'Nem támogatott protokoll.',     // added 17.04.2012
			'errNetMountFailed'    : 'A csatlakozás nem sikerült.',         // added 17.04.2012
			'errNetMountHostReq'   : 'Host szükséges.', // added 18.04.2012
			'errSessionExpires'    : 'A session inaktivitás miatt lejárt.',
			'errCreatingTempDir'   : 'Nem lehet ideiglenes könyvtárat létrehozni: "$1"',
			'errFtpDownloadFile'   : 'Nem lehet letölteni a fájlt az FTP-ről: "$1"',
			'errFtpUploadFile'     : 'Nem lehet feltölteni a fájlt az FTP-re: "$1"',
			'errFtpMkdir'          : 'Nem sikerült távoli könyvtárat létrehozni az FTP-n: "$1"',
			'errArchiveExec'       : 'Hiba a fájlok archiválásakor: "$1"',
			'errExtractExec'       : 'Hiba a fájlok kibontásakor: "$1"',
			'errNetUnMount'        : 'Nem lehet leválasztani', // from v2.1 added 30.04.2012
			'errConvUTF8'          : 'Nem konvertálható UTF-8-ra', // from v2.1 added 08.04.2014
			'errFolderUpload'      : 'Próbálja ki a Google Chrome-ot, ha szeretné feltölteni a mappát.', // from v2.1 added 26.6.2015
			'errSearchTimeout'     : 'dőtúllépés a(z) "$1" keresése közben. A keresési eredmény részleges.', // from v2.1 added 12.1.2016
			'errReauthRequire'     : 'Új engedélyre van szükség.', // from v2.1.10 added 3.24.2016

			/******************************* commands names ********************************/
			'cmdarchive'   : 'Archívum létrehozása',
			'cmdback'      : 'Vissza',
			'cmdcopy'      : 'Másolás',
			'cmdcut'       : 'Kivágás',
			'cmddownload'  : 'Letöltés',
			'cmdduplicate' : 'Másolat készítés',
			'cmdedit'      : 'Szerkesztés',
			'cmdextract'   : 'Kibontás',
			'cmdforward'   : 'Előre',
			'cmdgetfile'   : 'Fájlok kijelölése',
			'cmdhelp'      : 'Erről a programról...',
			'cmdhome'      : 'Főkönyvtár',
			'cmdinfo'      : 'Tulajdonságok',
			'cmdmkdir'     : 'Új mappa',
			'cmdmkdirin'   : 'Új mappába', // from v2.1.7 added 19.2.2016
			'cmdmkfile'    : 'Új fájl',
			'cmdopen'      : 'Megnyitás',
			'cmdpaste'     : 'Beillesztés',
			'cmdquicklook' : 'Előnézet',
			'cmdreload'    : 'Frissítés',
			'cmdrename'    : 'Átnevezés',
			'cmdrm'        : 'Törlés',
			'cmdsearch'    : 'Keresés',
			'cmdup'        : 'Ugrás a szülőmappába',
			'cmdupload'    : 'Feltöltés',
			'cmdview'      : 'Nézet',
			'cmdresize'    : 'Átméretezés és forgatás',
			'cmdsort'      : 'Rendezés',
			'cmdnetmount'  : 'Csatlakoztassa a hálózat hangerejét', // added 18.04.2012
			'cmdnetunmount': 'Leválaszt', // from v2.1 added 30.04.2012
			'cmdplaces'    : 'Helyekhez', // added 28.12.2014
			'cmdchmod'     : 'Módváltás', // from v2.1 added 20.6.2015
			'cmdopendir'   : 'Mappa megnyitása', // from v2.1 added 13.1.2016
			'cmdcolwidth'  : 'Állítsa vissza az oszlop szélességét', // from v2.1.13 added 12.06.2016

			/*********************************** buttons ***********************************/
			'btnClose'  : 'Bezár',
			'btnSave'   : 'Ment',
			'btnRm'     : 'Töröl',
			'btnApply'  : 'Alkalmaz',
			'btnCancel' : 'Mégsem',
			'btnNo'     : 'Nem',
			'btnYes'    : 'Igen',
			'btnMount'  : 'Csatlakoztat',  // added 18.04.2012
			'btnApprove': 'Goto $1 & approve', // from v2.1 added 26.04.2012
			'btnUnmount': 'Leválaszt', // from v2.1 added 30.04.2012
			'btnConv'   : 'Átalakít', // from v2.1 added 08.04.2014
			'btnCwd'    : 'Itt',      // from v2.1 added 22.5.2015
			'btnVolume' : 'Hangerő',    // from v2.1 added 22.5.2015
			'btnAll'    : 'Összes',       // from v2.1 added 22.5.2015
			'btnMime'   : 'MIME Tipus', // from v2.1 added 22.5.2015
			'btnFileName':'Fájl név',  // from v2.1 added 22.5.2015
			'btnSaveClose': 'Mentés és Kilépés', // from v2.1 added 12.6.2015
			'btnBackup' : 'Biztonsági mentés', // fromv2.1 added 28.11.2015

			/******************************** notifications ********************************/
			'ntfopen'     : 'Mappa megnyitás',
			'ntffile'     : 'Fájl megnyitás',
			'ntfreload'   : 'A mappa tartalmának újratöltése',
			'ntfmkdir'    : 'Mappa létrehozása',
			'ntfmkfile'   : 'Fájlok létrehozása',
			'ntfrm'       : 'Fájlok törélse',
			'ntfcopy'     : 'Fájlok másolása',
			'ntfmove'     : 'Fájlok áthelyezése',
			'ntfprepare'  : 'Készüljön fel a fájlok másolására',
			'ntfrename'   : 'Fájlok átnevezése',
			'ntfupload'   : 'Fájlok feltöltése',
			'ntfdownload' : 'Fájlok letöltése',
			'ntfsave'     : 'Fájlok mentése',
			'ntfarchive'  : 'Archívum létrehozása',
			'ntfextract'  : 'Kibontás archívumból',
			'ntfsearch'   : 'Fájlok keresése',
			'ntfresize'   : 'Képek átméretezése',
			'ntfsmth'     : 'Csinál valamit >_<',
			'ntfloadimg'  : 'Kép betöltése',
			'ntfnetmount' : 'Hálózati meghajtó hozzáadása', // added 18.04.2012
			'ntfnetunmount': 'Hálózati meghajtó leválasztása', // from v2.1 added 30.04.2012
			'ntfdim'      : 'Képméret megállapítása', // added 20.05.2013
			'ntfreaddir'  : 'A mappa adatainak olvasása', // from v2.1 added 01.07.2013
			'ntfurl'      : 'A link URL-jének lekérdezése', // from v2.1 added 11.03.2014
			'ntfchmod'    : 'A fájlmód megváltoztatása', // from v2.1 added 20.6.2015
			'ntfpreupload': 'A feltöltött fájlnév ellenőrzése', // from v2.1 added 31.11.2015
			'ntfzipdl'    : 'Fájl létrehozása letöltésre', // from v2.1.7 added 23.1.2016

			/************************************ dates **********************************/
			'dateUnknown' : 'Ismeretlen',
			'Today'       : 'Ma',
			'Yesterday'   : 'Tegnap',
			'msJan'       : 'jan',
			'msFeb'       : 'febr',
			'msMar'       : 'márc',
			'msApr'       : 'ápr',
			'msMay'       : 'máj',
			'msJun'       : 'jún',
			'msJul'       : 'júl',
			'msAug'       : 'aug',
			'msSep'       : 'szept',
			'msOct'       : 'okt',
			'msNov'       : 'nov',
			'msDec'       : 'dec',
			'January'     : 'Január',
			'February'    : 'Február',
			'March'       : 'Március',
			'April'       : 'Április',
			'May'         : 'Május',
			'June'        : 'Június',
			'July'        : 'Július',
			'August'      : 'Augusztus',
			'September'   : 'Szeptember',
			'October'     : 'Október',
			'November'    : 'November',
			'December'    : 'December',
			'Sunday'      : 'Vasárnap',
			'Monday'      : 'Hétfő',
			'Tuesday'     : 'Kedd',
			'Wednesday'   : 'Szerda',
			'Thursday'    : 'Csütörtök',
			'Friday'      : 'Péntek',
			'Saturday'    : 'Szombat',
			'Sun'         : 'V',
			'Mon'         : 'H',
			'Tue'         : 'K',
			'Wed'         : 'Sz',
			'Thu'         : 'Cs',
			'Fri'         : 'P',
			'Sat'         : 'Szo',

			/******************************** sort variants ********************************/
			'sortname'          : 'név szerint',
			'sortkind'          : 'by kind',
			'sortsize'          : 'méret szerint',
			'sortdate'          : 'dátum szerint',
			'sortFoldersFirst'  : 'Először a mappák',
			'sortperm'          : 'engedély alapján', // from v2.1.13 added 13.06.2016
			'sortmode'          : 'mód szerint',       // from v2.1.13 added 13.06.2016
			'sortowner'         : 'tulajdonos alapján',      // from v2.1.13 added 13.06.2016
			'sortgroup'         : 'csoportok szerint',      // from v2.1.13 added 13.06.2016

			/********************************** new items **********************************/
			'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
			'untitled folder'   : 'NewFolder',   // added 10.11.2015
			'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015

			/********************************** messages **********************************/
			'confirmReq'      : 'Megerősítés szükséges',
			'confirmRm'       : 'Valóban törölni akarja a kijelölt adatokat?<br/>Ez később nem fordítható vissza!',
			'confirmRepl'     : 'Ki cserélje a régi fájlt újra?',
			'confirmConvUTF8' : 'Nem UTF-8.<br/>Átalakítsam UTF-8-ra?<br/>A tartalom mentés után UTF-8 lesz..', // from v2.1 added 08.04.2014
			'confirmNotSave'  : 'Megváltozott.<br/>Módosítások elvesznek, ha nem menti el azokat.', // from v2.1 added 15.7.2015
			'apllyAll'        : 'Mindenre vonatkozik',
			'name'            : 'Név',
			'size'            : 'Méret',
			'perms'           : 'Jogok',
			'modify'          : 'Módosítva',
			'kind'            : 'Típus',
			'read'            : 'olvasás',
			'write'           : 'írás',
			'noaccess'        : '-',
			'and'             : 'és',
			'unknown'         : 'ismeretlen',
			'selectall'       : 'Összes kijelölése',
			'selectfiles'     : 'Fájlok kijelölése',
			'selectffile'     : 'Első fájl kijelölése',
			'selectlfile'     : 'Utolsó fájl kijelölése',
			'viewlist'        : 'Lista nézet',
			'viewicons'       : 'Ikon nézet',
			'places'          : 'Helyek',
			'calc'            : 'Kiszámítja',
			'path'            : 'Útvonal',
			'aliasfor'        : 'Cél',
			'locked'          : 'Zárolt',
			'dim'             : 'Méretek',
			'files'           : 'Fájlok',
			'folders'         : 'Mappák',
			'items'           : 'Elemek',
			'yes'             : 'igen',
			'no'              : 'nem',
			'link'            : 'Parancsikon',
			'searcresult'     : 'Keresés eredménye',
			'selected'        : 'kijelölt elemek',
			'about'           : 'Névjegy',
			'shortcuts'       : 'Gyorsbillenytyűk',
			'help'            : 'Súgó',
			'webfm'           : 'Web file manager',
			'ver'             : 'Verzió',
			'protocolver'     : 'protokol verzió',
			'homepage'        : 'Projekt honlap',
			'docs'            : 'Dokumentáció',
			'github'          : 'Hozz létre egy új verziót a Github-on',
			'twitter'         : 'Kövess minket a twitter-en',
			'facebook'        : 'Csatlakozz hozzánk a facebook-on',
			'team'            : 'Csapat',
			'chiefdev'        : 'vezető fejlesztő',
			'developer'       : 'fejlesztő',
			'contributor'     : 'külsős hozzájáruló',
			'maintainer'      : 'karbantartó',
			'translator'      : 'fordító',
			'icons'           : 'Ikonok',
			'dontforget'      : 'törölközőt ne felejts el hozni!',
			'shortcutsof'     : 'Shortcuts disabled',
			'dropFiles'       : 'Fájlok dobása ide',
			'or'              : 'vagy',
			'selectForUpload' : 'fájlok böngészése',
			'moveFiles'       : 'Fájlok áthelyezése',
			'copyFiles'       : 'Fájlok másolása',
			'rmFromPlaces'    : 'Távolítsa el a helyekről',
			'aspectRatio'     : 'Oldalarány',
			'scale'           : 'Skála',
			'width'           : 'Szélesség',
			'height'          : 'Magasság',
			'resize'          : 'Átméretezés',
			'crop'            : 'Vág',
			'rotate'          : 'Forgat',
			'rotate-cw'       : 'Forgassa el 90 fokkal',
			'rotate-ccw'      : 'Forgassa el 90 fokkal CCW irányban',
			'degree'          : '°',
			'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
			'protocol'            : 'Protokoll', // added 18.04.2012
			'host'                : 'Host', // added 18.04.2012
			'port'                : 'Port', // added 18.04.2012
			'user'                : 'Felhasználó', // added 18.04.2012
			'pass'                : 'Jelszó', // added 18.04.2012
			'confirmUnmount'      : 'Leválasztod $1?',  // from v2.1 added 30.04.2012
			'dropFilesBrowser': 'Drop or Paste files from browser', // from v2.1 added 30.05.2012
			'dropPasteFiles'  : 'Drop or Paste files and URLs here', // from v2.1 added 07.04.2014
			'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
			'locale'          : 'Locale',   // from v2.1 added 19.12.2014
			'searchTarget'    : 'Target: $1',                // from v2.1 added 22.5.2015
			'searchMime'      : 'Search by input MIME Type', // from v2.1 added 22.5.2015
			'owner'           : 'Owner', // from v2.1 added 20.6.2015
			'group'           : 'Group', // from v2.1 added 20.6.2015
			'other'           : 'Other', // from v2.1 added 20.6.2015
			'execute'         : 'Execute', // from v2.1 added 20.6.2015
			'perm'            : 'Permission', // from v2.1 added 20.6.2015
			'mode'            : 'Mode', // from v2.1 added 20.6.2015
			'emptyFolder'     : 'Folder is empty', // from v2.1.6 added 30.12.2015
			'emptyFolderDrop' : 'Folder is empty\\A Drop to add items', // from v2.1.6 added 30.12.2015
			'emptyFolderLTap' : 'Folder is empty\\A Long tap to add items', // from v2.1.6 added 30.12.2015
			'quality'         : 'Quality', // from v2.1.6 added 5.1.2016
			'autoSync'        : 'Auto sync',  // from v2.1.6 added 10.1.2016
			'moveUp'          : 'Move up',  // from v2.1.6 added 18.1.2016
			'getLink'         : 'Get URL link', // from v2.1.7 added 9.2.2016
			'selectedItems'   : 'Selected items ($1)', // from v2.1.7 added 2.19.2016
			'folderId'        : 'Folder ID', // from v2.1.10 added 3.25.2016
			'offlineAccess'   : 'Allow offline access', // from v2.1.10 added 3.25.2016
			'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016
			'nowLoading'      : 'Now loading...', // from v2.1.12 added 4.26.2016
			'openMulti'       : 'Open multiple files', // from v2.1.12 added 5.14.2016
			'openMultiConfirm': 'You are trying to open the $1 files. Are you sure you want to open in browser?', // from v2.1.12 added 5.14.2016
			'emptySearch'     : 'Search results is empty', // from v2.1.12 added 5.16.2016
			'editingFile'     : 'You are editing a file.', // from v2.1.13 added 6.3.2016
			'hasSelected'     : 'You have selected $1 items.', // from v2.1.13 added 6.3.2016
			'hasClipboard'    : 'You have $1 items in the clipboard.', // from v2.1.13 added 6.3.2016

			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'Ismeretlen',
			'kindFolder'      : 'Mappa',
			'kindAlias'       : 'Parancsikon',
			'kindAliasBroken' : 'Hibás parancsikon',
			// applications
			'kindApp'         : 'Alkalmazás',
			'kindPostscript'  : 'Postscript dokumentum',
			'kindMsOffice'    : 'Microsoft Office dokumentum',
			'kindMsWord'      : 'Microsoft Word dokumentum',
			'kindMsExcel'     : 'Microsoft Excel dokumentum',
			'kindMsPP'        : 'Microsoft Powerpoint bemutató',
			'kindOO'          : 'Open Office dokumentum',
			'kindAppFlash'    : 'Flash alkalmazás',
			'kindPDF'         : 'Portable Document Format (PDF)',
			'kindTorrent'     : 'Bittorrent fájl',
			'kind7z'          : '7z archívum',
			'kindTAR'         : 'TAR archívum',
			'kindGZIP'        : 'GZIP archívum',
			'kindBZIP'        : 'BZIP archívum',
			'kindXZ'          : 'XZ archívum',
			'kindZIP'         : 'ZIP archívum',
			'kindRAR'         : 'RAR archívum',
			'kindJAR'         : 'Java JAR fájl',
			'kindTTF'         : 'True Type font',
			'kindOTF'         : 'Open Type font',
			'kindRPM'         : 'RPM csomag',
			// texts
			'kindText'        : 'Szöveges dokumentum',
			'kindTextPlain'   : 'Plain text',
			'kindPHP'         : 'PHP forráskód',
			'kindCSS'         : 'Cascading style sheet',
			'kindHTML'        : 'HTML dokumentum',
			'kindJS'          : 'Javascript forráskód',
			'kindRTF'         : 'Rich Text Format',
			'kindC'           : 'C forráskód',
			'kindCHeader'     : 'C header forráskód',
			'kindCPP'         : 'C++ forráskód',
			'kindCPPHeader'   : 'C++ header forráskód',
			'kindShell'       : 'Unix shell script',
			'kindPython'      : 'Python forráskód',
			'kindJava'        : 'Java forráskód',
			'kindRuby'        : 'Ruby forráskód',
			'kindPerl'        : 'Perl script',
			'kindSQL'         : 'SQL forráskód',
			'kindXML'         : 'XML dokumentum',
			'kindAWK'         : 'AWK forráskód',
			'kindCSV'         : 'Comma separated values',
			'kindDOCBOOK'     : 'Docbook XML dokumentum',
			'kindMarkdown'    : 'Markdown text', // added 20.7.2015
			// images
			'kindImage'       : 'Kép',
			'kindBMP'         : 'BMP kép',
			'kindJPEG'        : 'JPEG kép',
			'kindGIF'         : 'GIF kép',
			'kindPNG'         : 'PNG kép',
			'kindTIFF'        : 'TIFF kép',
			'kindTGA'         : 'TGA kép',
			'kindPSD'         : 'Adobe Photoshop kép',
			'kindXBITMAP'     : 'X bitmap image',
			'kindPXM'         : 'Pixelmator image',
			// media
			'kindAudio'       : 'Hangfájl',
			'kindAudioMPEG'   : 'MPEG hangfájl',
			'kindAudioMPEG4'  : 'MPEG-4 hangfájl',
			'kindAudioMIDI'   : 'MIDI hangfájl',
			'kindAudioOGG'    : 'Ogg Vorbis hangfájl',
			'kindAudioWAV'    : 'WAV hangfájl',
			'AudioPlaylist'   : 'MP3 playlist',
			'kindVideo'       : 'Film',
			'kindVideoDV'     : 'DV film',
			'kindVideoMPEG'   : 'MPEG film',
			'kindVideoMPEG4'  : 'MPEG-4 film',
			'kindVideoAVI'    : 'AVI film',
			'kindVideoMOV'    : 'Quick Time film',
			'kindVideoWM'     : 'Windows Media film',
			'kindVideoFlash'  : 'Flash film',
			'kindVideoMKV'    : 'Matroska film',
			'kindVideoOGG'    : 'Ogg film'
		}
	};
}));

