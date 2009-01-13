<?php

/**
 * Croatian (Croatia) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('hr_HR', $lang) && is_array($lang['hr_HR'])) {
	$lang['hr_HR'] = array_merge($lang['en_US'], $lang['hr_HR']);
} else {
	$lang['hr_HR'] = $lang['en_US'];
}

$lang['hr_HR']['AssetAdmin']['CHOOSEFILE'] = 'Odaberite datoteku';
$lang['hr_HR']['AssetAdmin']['CONTENTMODBY'] = 'Sadržaj može mijenjati';
$lang['hr_HR']['AssetAdmin']['CONTENTUSABLEBY'] = 'Sadržaj može korisiti';
$lang['hr_HR']['AssetAdmin']['DELETEDX'] = 'Obrisano %s datoteka. %s';
$lang['hr_HR']['AssetAdmin']['FILESREADY'] = 'Datoteke spremne za upload:';
$lang['hr_HR']['AssetAdmin']['MENUTITLE'] = 'Datoteke & Slike';
$lang['hr_HR']['AssetAdmin']['MOVEDX'] = 'Premješteno %s datoteka';
$lang['hr_HR']['AssetAdmin']['NEWFOLDER'] = 'Novi direktorij';
$lang['hr_HR']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Nema ništa za upload';
$lang['hr_HR']['AssetAdmin']['NOWBROKEN'] = 'Stranica ima pogrešne linkove:';
$lang['hr_HR']['AssetAdmin']['OWNER'] = 'Vlasnik';
$lang['hr_HR']['AssetAdmin']['SAVEDFILE'] = 'Spremljena datoteka %s';
$lang['hr_HR']['AssetAdmin']['SAVEFOLDERNAME'] = 'Spremi ime direktorija';
$lang['hr_HR']['AssetAdmin']['UPLOAD'] = 'Uploadaj izlistane datoteke ';
$lang['hr_HR']['AssetAdmin']['UPLOADEDX'] = 'Uploadano %s datoteka';
$lang['hr_HR']['AssetAdmin_left.ss']['CREATE'] = 'Kreiraj';
$lang['hr_HR']['AssetAdmin_left.ss']['DELETE'] = 'Obriši';
$lang['hr_HR']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Obriši označene direktorije';
$lang['hr_HR']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Dozvoli drag &amp; drop mijenjanje redoslijeda ';
$lang['hr_HR']['AssetAdmin_left.ss']['FOLDERS'] = 'Direkorij';
$lang['hr_HR']['AssetAdmin_left.ss']['GO'] = 'Idi';
$lang['hr_HR']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Označite direktorije koje želite obrisati te kliknite gumb ispod';
$lang['hr_HR']['AssetAdmin_left.ss']['TOREORG'] = 'Za reorganizaciju direktorija, povucite (drag) ih na željeno mjesto.';
$lang['hr_HR']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Odaberite stranicu s lijeve strane';
$lang['hr_HR']['AssetAdmin_right.ss']['WELCOME'] = 'Dobrodošli na ';
$lang['hr_HR']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Nemate dozvolu za upload datoteka u ovaj direktorij';
$lang['hr_HR']['AssetTableField']['CREATED'] = 'Uploadano';
$lang['hr_HR']['AssetTableField']['DIM'] = 'Dimenzije';
$lang['hr_HR']['AssetTableField']['FILENAME'] = 'Ime datoteke';
$lang['hr_HR']['AssetTableField']['LASTEDIT'] = 'Zadnja promjena';
$lang['hr_HR']['AssetTableField']['NOLINKS'] = 'Datoteka nije vezana na nijednu stranicu';
$lang['hr_HR']['AssetTableField']['OWNER'] = 'Vlasnik';
$lang['hr_HR']['AssetTableField']['PAGESLINKING'] = 'Slijedeće stranice vezane su na ovu datoteku:';
$lang['hr_HR']['AssetTableField']['SIZE'] = 'Veličina';
$lang['hr_HR']['AssetTableField.ss']['DELFILE'] = 'Obriši ov datoteku';
$lang['hr_HR']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Odvucite u direktorij lijevo kako bi ste prenijeli datoteku';
$lang['hr_HR']['AssetTableField']['TITLE'] = 'Naslov';
$lang['hr_HR']['AssetTableField']['TYPE'] = 'Tip';
$lang['hr_HR']['CMSLeft.ss']['DELPAGE'] = 'Obriši stranice...';
$lang['hr_HR']['CMSLeft.ss']['DELPAGES'] = 'Obriši označene stranice';
$lang['hr_HR']['CMSLeft.ss']['GO'] = 'Idi';
$lang['hr_HR']['CMSLeft.ss']['NEWPAGE'] = 'Nova stranica...';
$lang['hr_HR']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Označite stranice koje želite obrisati i kliknite gumb ispod';
$lang['hr_HR']['CMSLeft.ss']['SITECONT'] = 'Sadržaj stranice';
$lang['hr_HR']['CMSMain']['CANCEL'] = 'Odustani';
$lang['hr_HR']['CMSMain']['CHOOSEREPORT'] = '(Odaberite izvještaj)';
$lang['hr_HR']['CMSMain']['COMPARINGV'] = 'Uspoređujete verzije #%d i #%d';
$lang['hr_HR']['CMSMain']['COPYPUBTOSTAGE'] = 'Želite li stvarno kopirati objavljeni sadržaj?';
$lang['hr_HR']['CMSMain']['DELETEFP'] = 'Obriši sa objavljene stranice';
$lang['hr_HR']['CMSMain']['EMAIL'] = 'Email';
$lang['hr_HR']['CMSMain']['GO'] = 'Idi';
$lang['hr_HR']['CMSMain']['MENUTITLE'] = 'Sadržaj stranice';
$lang['hr_HR']['CMSMain']['METADESCOPT'] = 'Opis';
$lang['hr_HR']['CMSMain']['METAKEYWORDSOPT'] = 'Ključne riječi';
$lang['hr_HR']['CMSMain']['NEW'] = 'Nova';
$lang['hr_HR']['CMSMain']['NOCONTENT'] = 'nema sadržaja';
$lang['hr_HR']['CMSMain']['NOTHINGASSIGNED'] = 'Ništa vam nije dodijeljeno.';
$lang['hr_HR']['CMSMain']['NOWAITINGON'] = 'Ne čekate nikoga.';
$lang['hr_HR']['CMSMain']['NOWBROKEN'] = 'Slijedeće stranice imaju pogrešne linkove:';
$lang['hr_HR']['CMSMain']['NOWBROKEN2'] = 'Njihovim vlasnicima je poslana obavijest i oni će popraviti te stranice';
$lang['hr_HR']['CMSMain']['OK'] = 'OK';
$lang['hr_HR']['CMSMain']['PAGEDEL'] = '%d stranica je obrisana';
$lang['hr_HR']['CMSMain']['PAGENOTEXISTS'] = 'Stranica ne postoji';
$lang['hr_HR']['CMSMain']['PAGEPUB'] = '%d stranica objavljena';
$lang['hr_HR']['CMSMain']['PAGESDEL'] = '%d stranice su obrisane';
$lang['hr_HR']['CMSMain']['PAGESPUB'] = '%d stranica objavljeno';
$lang['hr_HR']['CMSMain']['PAGETYPEOPT'] = 'Vrsta stranice';
$lang['hr_HR']['CMSMain']['PRINT'] = 'Print';
$lang['hr_HR']['CMSMain']['PUBALLCONFIRM'] = 'Molim objavi svaku stranicu, kopirajući sadržaj';
$lang['hr_HR']['CMSMain']['PUBALLFUN'] = '"Objavi sve"';
$lang['hr_HR']['CMSMain']['PUBALLFUN2'] = 'Ovaj gumb radi isto što i klikanje na "objavi" gumbe za svaku stranicu posebno. Koristi se nakon velikih promjena u sadržaju, kao npr. kod prve objave stranice.';
$lang['hr_HR']['CMSMain']['PUBPAGES'] = 'Obavljeno: Objavljeno %d stranica';
$lang['hr_HR']['CMSMain']['REMOVEDFD'] = 'Obrisano sa privremene stranice';
$lang['hr_HR']['CMSMain']['REMOVEDPAGE'] = '\'%s\' obrisano sa objavljene stranice';
$lang['hr_HR']['CMSMain']['RESTORE'] = 'Vrati u početno stanje';
$lang['hr_HR']['CMSMain']['RESTORED'] = '\'%s\' uspješno vraćen u početno stanje';
$lang['hr_HR']['CMSMain']['ROLLBACK'] = 'Vrati na ovu verziju';
$lang['hr_HR']['CMSMain']['ROLLEDBACKPUB'] = 'Vraćen na objavljenu verziju. Novi broj verzije je #%d';
$lang['hr_HR']['CMSMain']['ROLLEDBACKVERSION'] = 'Vraćen na verziju #%d. Novi broj verzije je #%d';
$lang['hr_HR']['CMSMain']['SAVE'] = 'Snimi';
$lang['hr_HR']['CMSMain']['SENTTO'] = 'Poslano %s %s na odobravanje';
$lang['hr_HR']['CMSMain']['STATUSOPT'] = 'Status';
$lang['hr_HR']['CMSMain']['TOTALPAGES'] = 'Ukupno stranica:';
$lang['hr_HR']['CMSMain']['VERSIONSNOPAGE'] = 'Ne mogu pronaći  stranicu #%d';
$lang['hr_HR']['CMSMain']['VIEWING'] = 'Pregledavate verziju #%d, kreiranu od %s';
$lang['hr_HR']['CMSMain']['VISITRESTORE'] = 'posjeti restorepage/(ID)';
$lang['hr_HR']['CMSMain']['WAITINGON'] = 'Pričekajte da drugi završe posao na <b>%d</b> stranicama.';
$lang['hr_HR']['CMSMain']['WORKTODO'] = 'Na <b>%d</b> stranicama imate posla.';
$lang['hr_HR']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Dodano u privremenu stranicu i još neobjavljeno';
$lang['hr_HR']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Dodaj kriterij...';
$lang['hr_HR']['CMSMain_left.ss']['BATCHACTIONS'] = 'Masovne akcije';
$lang['hr_HR']['CMSMain_left.ss']['CHANGED'] = 'promjenjeno';
$lang['hr_HR']['CMSMain_left.ss']['CLOSEBOX'] = 'kliknite za zatvaranje prozora';
$lang['hr_HR']['CMSMain_left.ss']['COMMENTS'] = 'Komentari';
$lang['hr_HR']['CMSMain_left.ss']['COMPAREMODE'] = 'Metoda usporedbe (klikni na dva ispod)';
$lang['hr_HR']['CMSMain_left.ss']['CREATE'] = 'Kreiraj';
$lang['hr_HR']['CMSMain_left.ss']['DEL'] = 'obrisano';
$lang['hr_HR']['CMSMain_left.ss']['DELETECONFIRM'] = 'Obriši označene stranice';
$lang['hr_HR']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Obrisano sa privremene stranice, ali još na \'live\' stranici';
$lang['hr_HR']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Promjenjeno na privremenj stranici ali još nije objavljeno';
$lang['hr_HR']['CMSMain_left.ss']['EDITEDSINCE'] = 'Uređeno od';
$lang['hr_HR']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Dozvoli drag&amp; drop reorganizaciju';
$lang['hr_HR']['CMSMain_left.ss']['GO'] = 'Idi';
$lang['hr_HR']['CMSMain_left.ss']['KEY'] = 'Ključ:';
$lang['hr_HR']['CMSMain_left.ss']['NEW'] = 'novo
';
$lang['hr_HR']['CMSMain_left.ss']['OPENBOX'] = 'kliknite za otvaranje ovog prozora';
$lang['hr_HR']['CMSMain_left.ss']['PAGEVERSIONH'] = 'povijest promjene stranice';
$lang['hr_HR']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Objavite označene stranice';
$lang['hr_HR']['CMSMain_left.ss']['SEARCH'] = 'Traži';
$lang['hr_HR']['CMSMain_left.ss']['SEARCHTITLE'] = 'Traži kroz URL, Naslov, Naslov Izbornika, &amp;  Sadržaj';
$lang['hr_HR']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Odaberite stranice koje želite promjeniti &amp;  kliknite na akciju:';
$lang['hr_HR']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Odaberite stranicu koju želite duplicirati, koje \'dijete\' želite, i gdje želite.';
$lang['hr_HR']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Pokaži samo izmjenjene stranice';
$lang['hr_HR']['CMSMain_left.ss']['SHOWUNPUB'] = 'Pokaži neobjavljene verzije';
$lang['hr_HR']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Sadržaj i Struktura Site-a';
$lang['hr_HR']['CMSMain_left.ss']['SITEREPORTS'] = 'Izvještaji';
$lang['hr_HR']['CMSMain_left.ss']['TASKLIST'] = 'Lista zadataka';
$lang['hr_HR']['CMSMain_left.ss']['WAITINGON'] = 'Čekam na';
$lang['hr_HR']['CMSMain_right.ss']['ANYMESSAGE'] = 'Imate li kakvu poruku za vašeg urednika? ';
$lang['hr_HR']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Molim odaberite stranicu s lijeve strane';
$lang['hr_HR']['CMSMain_right.ss']['LOADING'] = 'učitavam...';
$lang['hr_HR']['CMSMain_right.ss']['MESSAGE'] = 'Poruka';
$lang['hr_HR']['CMSMain_right.ss']['SENDTO'] = 'Poslati za';
$lang['hr_HR']['CMSMain_right.ss']['STATUS'] = 'Status';
$lang['hr_HR']['CMSMain_right.ss']['SUBMIT'] = 'podnešeno za odobrenje';
$lang['hr_HR']['CMSMain_right.ss']['WELCOMETO'] = 'Dobrodošli na';
$lang['hr_HR']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['hr_HR']['CMSMain_versions.ss']['NOTPUB'] = 'Nije izdano';
$lang['hr_HR']['CMSMain_versions.ss']['PUBR'] = 'Izdavač';
$lang['hr_HR']['CMSMain_versions.ss']['UNKNOWN'] = 'Nepoznato';
$lang['hr_HR']['CMSMain_versions.ss']['WHEN'] = 'Kada';
$lang['hr_HR']['CMSRight.ss']['CHOOSEPAGE'] = 'Odaberite stranicu s lijeve strane';
$lang['hr_HR']['CMSRight.ss']['ECONTENT'] = 'Uredi sadržaj';
$lang['hr_HR']['CMSRight.ss']['WELCOMETO'] = 'Dobrodošli na';
$lang['hr_HR']['CommentAdmin']['MENUTITLE'] = 'Komentari';
$lang['hr_HR']['CommentList.ss']['CREATEDW'] = 'Komentari se kreiraju za bilo koju od ovih akcija - Objavi, Otkaži, Podnesi';
$lang['hr_HR']['CommentList.ss']['NOCOM'] = 'Na ovoj stranici nema komentara';
$lang['hr_HR']['ImageEditor.ss']['CANCEL'] = 'odustani';
$lang['hr_HR']['ImageEditor.ss']['CROP'] = 'crop';
$lang['hr_HR']['ImageEditor.ss']['HEIGHT'] = 'visina';
$lang['hr_HR']['ImageEditor.ss']['REDO'] = 'redo';
$lang['hr_HR']['ImageEditor.ss']['ROT'] = 'rotiraj';
$lang['hr_HR']['ImageEditor.ss']['SAVE'] = 'snimi&nbsp;sliku';
$lang['hr_HR']['ImageEditor.ss']['UNDO'] = 'undo';
$lang['hr_HR']['ImageEditor.ss']['UNTITLED'] = 'Neimenovani dokument';
$lang['hr_HR']['ImageEditor.ss']['WIDTH'] = 'širina';
$lang['hr_HR']['LeftAndMain']['CHANGEDURL'] = 'URL promjenjen na \'%s\'';
$lang['hr_HR']['LeftAndMain']['HELP'] = 'Pomoć';
$lang['hr_HR']['LeftAndMain']['PAGETYPE'] = 'Tip Stranice:';
$lang['hr_HR']['LeftAndMain']['PERMAGAIN'] = 'Odjavili ste se sa CMS-a. Želite li se ponovno prijaviti, upišite korisničko ime i lozinku';
$lang['hr_HR']['LeftAndMain']['PERMALREADY'] = 'Nažalost, ne možete pristupiti tom dijelu CMS-a. Želite li se prijaviti kao netko drugi, učinite to ispod';
$lang['hr_HR']['LeftAndMain']['PERMDEFAULT'] = 'Odaberite metodu autorizacije te upišite svoje podatke za pristup CMS-u.';
$lang['hr_HR']['LeftAndMain']['PLEASESAVE'] = 'Molim spremite stranicu: Nemože biti ažurirano dok nije spremljeno.';
$lang['hr_HR']['LeftAndMain']['REQUESTERROR'] = 'Greška u zahtjevu';
$lang['hr_HR']['LeftAndMain']['SAVED'] = 'spremljeno';
$lang['hr_HR']['LeftAndMain']['SAVEDUP'] = 'Spremljeno';
$lang['hr_HR']['LeftAndMain']['SITECONTENTLEFT'] = 'Sadržaj stranice';
$lang['hr_HR']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Ovo je ';
$lang['hr_HR']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'verzija koju trenutno koristite, zapravo to je CVS faza';
$lang['hr_HR']['LeftAndMain.ss']['ARCHS'] = 'Arhivirana stranica';
$lang['hr_HR']['LeftAndMain.ss']['DRAFTS'] = 'Privremena stranica';
$lang['hr_HR']['LeftAndMain.ss']['EDIT'] = 'Editiraj';
$lang['hr_HR']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['hr_HR']['LeftAndMain.ss']['LOADING'] = 'Učitavam...';
$lang['hr_HR']['LeftAndMain.ss']['LOGGEDINAS'] = 'Prijavljen kao ';
$lang['hr_HR']['LeftAndMain.ss']['LOGOUT'] = 'Odjavi se';
$lang['hr_HR']['LeftAndMain.ss']['PUBLIS'] = 'Objavljena stranica';
$lang['hr_HR']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe Web stranica';
$lang['hr_HR']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Pregleda stranice:';
$lang['hr_HR']['LeftAndMain']['STATUSTO'] = 'Status promjenjen na \'%s\'';
$lang['hr_HR']['LeftAndMain']['TREESITECONTENT'] = 'Sadržaj stranice';
$lang['hr_HR']['MemberList']['ADD'] = 'Dodaj';
$lang['hr_HR']['MemberList']['EMAIL'] = 'Email';
$lang['hr_HR']['MemberList']['FILTERBYG'] = 'Filtriraj po grupi';
$lang['hr_HR']['MemberList']['FN'] = 'Ime';
$lang['hr_HR']['MemberList']['PASSWD'] = 'Lozinka';
$lang['hr_HR']['MemberList']['SEARCH'] = 'Traži';
$lang['hr_HR']['MemberList']['SN'] = 'Prezime';
$lang['hr_HR']['MemberList.ss']['FILTER'] = 'Filter';
$lang['hr_HR']['MemberList_Table.ss']['EMAIL'] = 'Email Adresa';
$lang['hr_HR']['MemberList_Table.ss']['FN'] = 'Ime';
$lang['hr_HR']['MemberList_Table.ss']['PASSWD'] = 'Lozinka';
$lang['hr_HR']['MemberList_Table.ss']['SN'] = 'Prezime';
$lang['hr_HR']['MemberTableField']['ADD'] = 'Dodaj';
$lang['hr_HR']['MemberTableField']['ADDEDTOGROUP'] = 'Dodaj člana u grupu';
$lang['hr_HR']['MemberTableField.ss']['ADDNEW'] = 'Dodaj ';
$lang['hr_HR']['MemberTableField.ss']['DELETEMEMBER'] = 'Obriši člana';
$lang['hr_HR']['MemberTableField.ss']['EDITMEMBER'] = 'Uredi člana';
$lang['hr_HR']['MemberTableField.ss']['SHOWMEMBER'] = 'Pokaži ovog člana';
$lang['hr_HR']['PageComment']['COMMENTBY'] = 'Komentar od \'%s\' na %s';
$lang['hr_HR']['PageCommentInterface.ss']['COMMENTS'] = 'Komentari';
$lang['hr_HR']['PageCommentInterface.ss']['NEXT'] = 'slijedeći';
$lang['hr_HR']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Na ovoj stranici nema komentara';
$lang['hr_HR']['PageCommentInterface.ss']['POSTCOM'] = 'Komentiraj';
$lang['hr_HR']['PageCommentInterface.ss']['PREV'] = 'prethodni';
$lang['hr_HR']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'ovaj komentar nije spam';
$lang['hr_HR']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'ovaj komentar je \'spam\'';
$lang['hr_HR']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Poslano od';
$lang['hr_HR']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'obriši ovaj komentar';
$lang['hr_HR']['ReportAdmin_left.ss']['REPORTS'] = 'Izvještaji';
$lang['hr_HR']['ReportAdmin_right.ss']['WELCOME1'] = 'Dobrodošli na';
$lang['hr_HR']['ReportAdmin_right.ss']['WELCOME2'] = 'Sekcija izvještaja. Molim odaberite izvještaj.';
$lang['hr_HR']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Izvještaji';
$lang['hr_HR']['SecurityAdmin']['ADDMEMBER'] = 'Dodaj člana';
$lang['hr_HR']['SecurityAdmin']['MENUTITLE'] = 'Sigurnost';
$lang['hr_HR']['SecurityAdmin']['NEWGROUP'] = 'Nova Grupa';
$lang['hr_HR']['SecurityAdmin']['SAVE'] = 'Spremi';
$lang['hr_HR']['SecurityAdmin']['SGROUPS'] = 'Sigurnosne grupe';
$lang['hr_HR']['SecurityAdmin_left.ss']['CREATE'] = 'Kreiraj';
$lang['hr_HR']['SecurityAdmin_left.ss']['DEL'] = 'Obriši';
$lang['hr_HR']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Obriši označene grupe';
$lang['hr_HR']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Dozvoli drag &amp; drop mijenjanje redoslijeda ';
$lang['hr_HR']['SecurityAdmin_left.ss']['GO'] = 'Idi';
$lang['hr_HR']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Sigurnosne Grupe';
$lang['hr_HR']['SecurityAdmin_left.ss']['SELECT'] = 'Označite stranice koje želite obrisati i kliknite na gumb';
$lang['hr_HR']['SecurityAdmin_left.ss']['TOREORG'] = 'Za reorganizaciju weba, povucite stranice na željeno mjesto';
$lang['hr_HR']['SecurityAdmin_right.ss']['WELCOME1'] = 'Dobrodošli na';
$lang['hr_HR']['SecurityAdmin_right.ss']['WELCOME2'] = 'Administracija sigurnosnih opcija. ';
$lang['hr_HR']['SideReport']['EMPTYPAGES'] = 'Prazne stranice';
$lang['hr_HR']['SideReport']['LAST2WEEKS'] = 'Stranice mijenjane u zadnja 2 tjedna';
$lang['hr_HR']['SideReport']['REPEMPTY'] = '%s izvještaj je prazan.';
$lang['hr_HR']['StaticExporter']['BASEURL'] = 'Osnovni URL';
$lang['hr_HR']['StaticExporter']['EXPORTTO'] = 'Izvezi u taj direktorij';
$lang['hr_HR']['StaticExporter']['FOLDEREXPORT'] = 'Direktorij za izvoz na';
$lang['hr_HR']['StaticExporter']['NAME'] = 'Statični exporter';
$lang['hr_HR']['StaticExporter']['ONETHATEXISTS'] = 'Molimo odredite direktorij koji postoji';
$lang['hr_HR']['TaskList.ss']['BY'] = 'by';
$lang['hr_HR']['ThumbnailStripField']['NOTAFOLDER'] = 'Ovo nije direktorij';
$lang['hr_HR']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Odaberite direktorij)';
$lang['hr_HR']['ViewArchivedEmail.ss']['CANACCESS'] = 'Na slijedećem linku možete pristupiti arhiviranoj stranici:';
$lang['hr_HR']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Zatražili ste sadržaj naše stranice ';
$lang['hr_HR']['WaitingOn.ss']['ATO'] = 'dodijeljeno ';

?>