<?php

/**
 * Italian (Italy) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('it_IT', $lang) && is_array($lang['it_IT'])) {
	$lang['it_IT'] = array_merge($lang['en_US'], $lang['it_IT']);
} else {
	$lang['it_IT'] = $lang['en_US'];
}

$lang['it_IT']['AssetAdmin']['CHOOSEFILE'] = 'Scegli file';
$lang['it_IT']['AssetAdmin']['CONTENTMODBY'] = 'Contenuto modificabile da';
$lang['it_IT']['AssetAdmin']['CONTENTUSABLEBY'] = 'Contenuto utilizzabile da';
$lang['it_IT']['AssetAdmin']['DELETEDX'] = 'Cancellati %s file.%s';
$lang['it_IT']['AssetAdmin']['FILESREADY'] = 'File pronti per il caricamento:';
$lang['it_IT']['AssetAdmin']['FOLDERDELETED'] = 'cartella cancellata.';
$lang['it_IT']['AssetAdmin']['FOLDERSDELETED'] = 'cartelle cancellate.';
$lang['it_IT']['AssetAdmin']['MENUTITLE'] = 'File & Immagini';
$lang['it_IT']['AssetAdmin']['MOVEDX'] = 'Spostati %s file';
$lang['it_IT']['AssetAdmin']['NEWFOLDER'] = 'NuovaCartella';
$lang['it_IT']['AssetAdmin']['NOTEMP'] = 'Non è presente una cartella temporanea per l\'upload. Configura upload_tmp_dir nel file php.ini.';
$lang['it_IT']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Non c\'è niente da caricare';
$lang['it_IT']['AssetAdmin']['NOWBROKEN'] = 'Queste pagine hanno ora link non funzionanti:';
$lang['it_IT']['AssetAdmin']['NOWBROKEN2'] = 'I rispettivi proprietari sono stati contattati via email e risolveranno i problemi riscontrati in quelle pagine.';
$lang['it_IT']['AssetAdmin']['OWNER'] = 'Proprietario';
$lang['it_IT']['AssetAdmin']['SAVEDFILE'] = 'Salvato file %s';
$lang['it_IT']['AssetAdmin']['SAVEFOLDERNAME'] = 'Salva il nome della cartella';
$lang['it_IT']['AssetAdmin']['THUMBSDELETED'] = 'Tutte le icone non utilizzate sono state cancellate';
$lang['it_IT']['AssetAdmin']['UPLOAD'] = 'Carica i file elencati di seguito';
$lang['it_IT']['AssetAdmin']['UPLOADEDX'] = 'Caricati %s file';
$lang['it_IT']['AssetAdmin_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['AssetAdmin_left.ss']['DELETE'] = 'Cancella';
$lang['it_IT']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Cancella le cartelle selezionate';
$lang['it_IT']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Permetti di riordinare con drag &amp; drop';
$lang['it_IT']['AssetAdmin_left.ss']['FOLDERS'] = 'Cartelle';
$lang['it_IT']['AssetAdmin_left.ss']['GO'] = 'Vai';
$lang['it_IT']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Seleziona le cartelle che vuoi rimuovere e clicca sul pulsante qui sotto';
$lang['it_IT']['AssetAdmin_left.ss']['TOREORG'] = 'Per riorganizzare le tue cartelle, selezionale e spostale dove desideri.';
$lang['it_IT']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Per favore scegli una pagina sulla sinistra.';
$lang['it_IT']['AssetAdmin_right.ss']['WELCOME'] = 'Benvenuto su';
$lang['it_IT']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Non hai i permessi per caricare file in questa cartella.';
$lang['it_IT']['AssetTableField']['CAPTION'] = 'Didascalia';
$lang['it_IT']['AssetTableField']['CREATED'] = 'Primo inserito';
$lang['it_IT']['AssetTableField']['DIM'] = 'Dimensioni';
$lang['it_IT']['AssetTableField']['DIMLIMT'] = 'Limita le dimensioni nella finestra di popup';
$lang['it_IT']['AssetTableField']['EDITIMAGE'] = 'Modifica questa immagine';
$lang['it_IT']['AssetTableField']['FILENAME'] = 'Nome del file';
$lang['it_IT']['AssetTableField']['GALLERYOPTIONS'] = 'Opzioni galleria';
$lang['it_IT']['AssetTableField']['IMAGE'] = 'Immagine';
$lang['it_IT']['AssetTableField']['ISFLASH'] = 'E\' un documento Flash';
$lang['it_IT']['AssetTableField']['LASTEDIT'] = 'Ultimo modificato';
$lang['it_IT']['AssetTableField']['MAIN'] = 'Principale';
$lang['it_IT']['AssetTableField']['NOLINKS'] = 'Questo file non è linkato da nessuna delle pagine.';
$lang['it_IT']['AssetTableField']['OWNER'] = 'Proprietario';
$lang['it_IT']['AssetTableField']['PAGESLINKING'] = 'Le seguenti pagine sono collegate a questo file:';
$lang['it_IT']['AssetTableField']['POPUPHEIGHT'] = 'Altezza popup';
$lang['it_IT']['AssetTableField']['POPUPWIDTH'] = 'Larghezza popup';
$lang['it_IT']['AssetTableField']['SIZE'] = 'Dimensione';
$lang['it_IT']['AssetTableField.ss']['DELFILE'] = 'Cancella questo file';
$lang['it_IT']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Portati nella cartella a sinistra per spostare il file';
$lang['it_IT']['AssetTableField.ss']['EDIT'] = 'Modifica risorsa';
$lang['it_IT']['AssetTableField.ss']['SHOW'] = 'Mostra risorsa';
$lang['it_IT']['AssetTableField']['SWFFILEOPTIONS'] = 'Opzioni file SWF';
$lang['it_IT']['AssetTableField']['TITLE'] = 'Titolo';
$lang['it_IT']['AssetTableField']['TYPE'] = 'Tipo';
$lang['it_IT']['AssetTableField']['URL'] = 'URL';
$lang['it_IT']['CMSLeft.ss']['DELPAGE'] = 'Cancella pagine...';
$lang['it_IT']['CMSLeft.ss']['DELPAGES'] = 'Cancella le pagine selezionate';
$lang['it_IT']['CMSLeft.ss']['GO'] = 'Vai';
$lang['it_IT']['CMSLeft.ss']['NEWPAGE'] = 'Nuova pagina...';
$lang['it_IT']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Seleziona le pagine che vuoi cancellare e clicca il bottone di seguito';
$lang['it_IT']['CMSLeft.ss']['SITECONT'] = 'Contenuto del sito';
$lang['it_IT']['CMSMain']['ACCESS'] = 'Accedi a %s nel CMS';
$lang['it_IT']['CMSMain']['CANCEL'] = 'Cancella';
$lang['it_IT']['CMSMain']['CHOOSEREPORT'] = '(Scegli un report)';
$lang['it_IT']['CMSMain']['COMPARINGV'] = 'Stai comparando le versioni #%d e #%d';
$lang['it_IT']['CMSMain']['COPYPUBTOSTAGE'] = 'Vuoi veramente copiare il contenuto pubblicato nel sito di stage?';
$lang['it_IT']['CMSMain']['DELETE'] = 'Cancella dal sito bozza';
$lang['it_IT']['CMSMain']['DELETEFP'] = 'Cancella dal sito di pubblicazione';
$lang['it_IT']['CMSMain']['DESCREMOVED'] = 'e %s discendenti';
$lang['it_IT']['CMSMain']['EMAIL'] = 'Email';
$lang['it_IT']['CMSMain']['GO'] = 'Vai';
$lang['it_IT']['CMSMain']['MENUTITLE'] = 'Contenuto del sito';
$lang['it_IT']['CMSMain']['METADESCOPT'] = 'Descrizione';
$lang['it_IT']['CMSMain']['METAKEYWORDSOPT'] = 'Parole chiavi';
$lang['it_IT']['CMSMain']['NEW'] = 'Nuova';
$lang['it_IT']['CMSMain']['NOCONTENT'] = 'nessun contenuto';
$lang['it_IT']['CMSMain']['NOTHINGASSIGNED'] = 'Non c\'è niente assegnato a te.';
$lang['it_IT']['CMSMain']['NOWAITINGON'] = 'Non stai aspettando nessuno.';
$lang['it_IT']['CMSMain']['NOWBROKEN'] = 'Le seguenti pagine hanno ora collegamenti non funzionanti:';
$lang['it_IT']['CMSMain']['NOWBROKEN2'] = 'I rispettivi proprietari sono stati contattati via email e risolveranno i problemi riscontrati in quelle pagine.';
$lang['it_IT']['CMSMain']['OK'] = 'OK';
$lang['it_IT']['CMSMain']['PAGEDEL'] = 'pagina %d cancellata';
$lang['it_IT']['CMSMain']['PAGENOTEXISTS'] = 'Questa pagina non esiste';
$lang['it_IT']['CMSMain']['PAGEPUB'] = 'Pagina %d pubblicata';
$lang['it_IT']['CMSMain']['PAGESDEL'] = 'pagine %d cancellate';
$lang['it_IT']['CMSMain']['PAGESPUB'] = '%d pagine pubblicate';
$lang['it_IT']['CMSMain']['PAGETYPEOPT'] = 'Tipo di pagina';
$lang['it_IT']['CMSMain']['PRINT'] = 'Stampa';
$lang['it_IT']['CMSMain']['PUBALLCONFIRM'] = 'Per favore pubblica ogni singola pagina nel sito, copiando i contenuti in \'stage\' su \'live\'.';
$lang['it_IT']['CMSMain']['PUBALLFUN'] = 'Funzione "Pubblica tutto"';
$lang['it_IT']['CMSMain']['PUBALLFUN2'] = 'Cliccare questo bottone equivale ad accedere a tutte le pagine e cliccare \'pubblica\'. Tale bottone è inteso per essere utilizzato dopo aver apportato modifiche di massa ai contenuti, come nella prima pubblicazione del sito.';
$lang['it_IT']['CMSMain']['PUBPAGES'] = 'Fatto: pubblicate %d pagine';
$lang['it_IT']['CMSMain']['REMOVED'] = 'Cancellato \'%s\'%s dal sito produzione';
$lang['it_IT']['CMSMain']['REMOVEDFD'] = 'Cancella dal sito bozza';
$lang['it_IT']['CMSMain']['REMOVEDPAGE'] = 'Rimossa \'%s\' dal sito di pubblicazione';
$lang['it_IT']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Cacellato \'%s\' dal sito bozza';
$lang['it_IT']['CMSMain']['REPORT'] = 'Report';
$lang['it_IT']['CMSMain']['RESTORE'] = 'Ripristina';
$lang['it_IT']['CMSMain']['RESTORED'] = '\'%s\' ripristinato correttamente';
$lang['it_IT']['CMSMain']['ROLLBACK'] = 'Ripristina a questa versione';
$lang['it_IT']['CMSMain']['ROLLEDBACKPUB'] = 'Ripristinata la versione di pubblicazione. Il nuovo numero di versione è #%d';
$lang['it_IT']['CMSMain']['ROLLEDBACKVERSION'] = 'Ripristinata la versione #%d. Il nuovo numero di versione è #%d';
$lang['it_IT']['CMSMain']['SAVE'] = 'Salva';
$lang['it_IT']['CMSMain']['SENTTO'] = 'Inviato a %s %s per l\'approvazione.';
$lang['it_IT']['CMSMain']['STATUSOPT'] = 'Stato';
$lang['it_IT']['CMSMain']['TOTALPAGES'] = 'Pagine totali:';
$lang['it_IT']['CMSMain']['VERSIONSNOPAGE'] = 'Impossibile trovare la pagina #%d';
$lang['it_IT']['CMSMain']['VIEWING'] = 'Stai visualizzando la versione #%d, creata %s';
$lang['it_IT']['CMSMain']['VISITRESTORE'] = 'visita restorepage/(ID)';
$lang['it_IT']['CMSMain']['WAITINGON'] = 'Stai aspettando altre persone per lavorare su queste <b>%d</b> pagine.';
$lang['it_IT']['CMSMain']['WORKTODO'] = 'Hai del lavoro da fare su queste <b>%d</b> pagine.';
$lang['it_IT']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Non è stato possibile trovare il nome del pulsante';
$lang['it_IT']['CMSMain_dialog.ss']['NOLINKED'] = 'Impossibile trovare window.linkedObject per far tornare il click del pulsante alla finestra principale';
$lang['it_IT']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Aggiunto al sito bozza e non ancora pubblicato';
$lang['it_IT']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Aggiungi criterio...';
$lang['it_IT']['CMSMain_left.ss']['BATCHACTIONS'] = 'Azioni di massa';
$lang['it_IT']['CMSMain_left.ss']['CHANGED'] = 'modificato';
$lang['it_IT']['CMSMain_left.ss']['CLOSEBOX'] = 'clicca per chiudere il box';
$lang['it_IT']['CMSMain_left.ss']['COMMENTS'] = 'Commenti';
$lang['it_IT']['CMSMain_left.ss']['COMPAREMODE'] = 'Modalità confronto';
$lang['it_IT']['CMSMain_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['CMSMain_left.ss']['DEL'] = 'cancellato';
$lang['it_IT']['CMSMain_left.ss']['DELETECONFIRM'] = 'Cancella le pagine selezionate';
$lang['it_IT']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Cancellato dal sito bozza ma ancora nel sito live';
$lang['it_IT']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Modificato nel sito bozza e non ancora pubblicato';
$lang['it_IT']['CMSMain_left.ss']['EDITEDSINCE'] = 'Modificato dal';
$lang['it_IT']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Consenti l\'ordinamento utilizzando il drag &amp; drop';
$lang['it_IT']['CMSMain_left.ss']['GO'] = 'Vai';
$lang['it_IT']['CMSMain_left.ss']['KEY'] = 'Chiave:';
$lang['it_IT']['CMSMain_left.ss']['NEW'] = 'nuovo';
$lang['it_IT']['CMSMain_left.ss']['OPENBOX'] = 'clicca per aprire questo box';
$lang['it_IT']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Cronologia delle modifiche';
$lang['it_IT']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Pubblica le pagine selezionate';
$lang['it_IT']['CMSMain_left.ss']['SEARCH'] = 'Cerca';
$lang['it_IT']['CMSMain_left.ss']['SEARCHTITLE'] = 'Cerca all\'interno degli URL, titoli, titoli dei menu e contenuti';
$lang['it_IT']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Seleziona le pagine che vuoi cambiare &amp; clicca su una azione:';
$lang['it_IT']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Seleziona le pagine che vuoi duplicare, se devono essere incluse le sottopagine, e dove vuoi posizionare i duplicati';
$lang['it_IT']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Visualizza solamente le pagine cambiate';
$lang['it_IT']['CMSMain_left.ss']['SHOWUNPUB'] = 'Visulizza le versioni non pubblicate';
$lang['it_IT']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Contenuto del sito e struttura';
$lang['it_IT']['CMSMain_left.ss']['SITEREPORTS'] = 'Report del sito';
$lang['it_IT']['CMSMain_left.ss']['TASKLIST'] = 'Lista dei compiti da fare';
$lang['it_IT']['CMSMain_left.ss']['WAITINGON'] = 'In attesa';
$lang['it_IT']['CMSMain_right.ss']['ANYMESSAGE'] = 'Hai alcun messaggio per il tuo editor?';
$lang['it_IT']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Per favore scegli una pagina sulla sinistra.';
$lang['it_IT']['CMSMain_right.ss']['LOADING'] = 'caricamento...';
$lang['it_IT']['CMSMain_right.ss']['MESSAGE'] = 'Messaggio';
$lang['it_IT']['CMSMain_right.ss']['SENDTO'] = 'Invia a';
$lang['it_IT']['CMSMain_right.ss']['STATUS'] = 'Stato';
$lang['it_IT']['CMSMain_right.ss']['SUBMIT'] = 'Inviato per l\'approvazione';
$lang['it_IT']['CMSMain_right.ss']['WELCOMETO'] = 'Benvenuto su';
$lang['it_IT']['CMSMain_versions.ss']['AUTHOR'] = 'Autore';
$lang['it_IT']['CMSMain_versions.ss']['NOTPUB'] = 'Non pubblicato';
$lang['it_IT']['CMSMain_versions.ss']['PUBR'] = 'Editore';
$lang['it_IT']['CMSMain_versions.ss']['UNKNOWN'] = 'Sconosciuto';
$lang['it_IT']['CMSMain_versions.ss']['WHEN'] = 'Quando';
$lang['it_IT']['CMSRight.ss']['CHOOSEPAGE'] = 'Per favore scegli una pagina sulla sinistra.';
$lang['it_IT']['CMSRight.ss']['ECONTENT'] = 'Modifica contenuto';
$lang['it_IT']['CMSRight.ss']['WELCOMETO'] = 'Benvenuto su';
$lang['it_IT']['CommentAdmin']['ACCEPT'] = 'Accetta';
$lang['it_IT']['CommentAdmin']['APPROVED'] = 'Accettati %s commenti.';
$lang['it_IT']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Commenti approvati';
$lang['it_IT']['CommentAdmin']['AUTHOR'] = 'Autore';
$lang['it_IT']['CommentAdmin']['COMMENT'] = 'Commento';
$lang['it_IT']['CommentAdmin']['COMMENTS'] = 'Commenti';
$lang['it_IT']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Commenti in attesa di approvazione';
$lang['it_IT']['CommentAdmin']['DATEPOSTED'] = 'Data Invio';
$lang['it_IT']['CommentAdmin']['DELETE'] = 'Cancella';
$lang['it_IT']['CommentAdmin']['DELETEALL'] = 'Cancella tutto';
$lang['it_IT']['CommentAdmin']['DELETED'] = 'Cancellati %s commenti.';
$lang['it_IT']['CommentAdmin']['MARKASNOTSPAM'] = 'Non è spam';
$lang['it_IT']['CommentAdmin']['MARKEDNOTSPAM'] = 'Marcati %s commenti come non-spam.';
$lang['it_IT']['CommentAdmin']['MARKEDSPAM'] = '%s commenti segnalati come spam.';
$lang['it_IT']['CommentAdmin']['MENUTITLE'] = 'Commenti';
$lang['it_IT']['CommentAdmin']['NAME'] = 'Nome';
$lang['it_IT']['CommentAdmin']['PAGE'] = 'Pagina';
$lang['it_IT']['CommentAdmin']['SPAM'] = 'Spam';
$lang['it_IT']['CommentAdmin']['SPAMMARKED'] = 'Segna come spam';
$lang['it_IT']['CommentAdmin_left.ss']['COMMENTS'] = 'Commenti';
$lang['it_IT']['CommentAdmin_right.ss']['WELCOME1'] = 'Benvenuti al';
$lang['it_IT']['CommentAdmin_right.ss']['WELCOME2'] = 'gestione del commento. Seleziona una cartella dall\'albero a sinistra.';
$lang['it_IT']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Approvato';
$lang['it_IT']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'In attesa di moderazione';
$lang['it_IT']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Commenti';
$lang['it_IT']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['it_IT']['CommentList.ss']['CREATEDW'] = 'I commenti vengono creati ogni qualvolta una delle seguenti azioni viene invocata: Pubblica, Rifiuta, Invia.';
$lang['it_IT']['CommentList.ss']['NOCOM'] = 'Non ci sono commenti in questa pagina.';
$lang['it_IT']['CommentTableField']['FILTER'] = 'Filtro';
$lang['it_IT']['CommentTableField']['SEARCH'] = 'Cerca';
$lang['it_IT']['CommentTableField.ss']['APPROVE'] = 'approva';
$lang['it_IT']['CommentTableField.ss']['APPROVECOMMENT'] = 'Approva questo commento';
$lang['it_IT']['CommentTableField.ss']['DELETE'] = 'cancella';
$lang['it_IT']['CommentTableField.ss']['DELETEROW'] = 'Cancella questa riga';
$lang['it_IT']['CommentTableField.ss']['EDIT'] = 'modifica';
$lang['it_IT']['CommentTableField.ss']['HAM'] = 'attore';
$lang['it_IT']['CommentTableField.ss']['MARKASSPAM'] = 'Segna questo commento come spam';
$lang['it_IT']['CommentTableField.ss']['MARKNOSPAM'] = 'Segna questo commento come non spam';
$lang['it_IT']['CommentTableField.ss']['NOITEMSFOUND'] = 'Nessun oggetto trovato';
$lang['it_IT']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['it_IT']['ComplexTableField']['CLOSEPOPUP'] = 'Chiudi Finestra';
$lang['it_IT']['ComplexTableField']['SUCCESSADD'] = 'Aggiunto %s %s %s';
$lang['it_IT']['ImageEditor.ss']['ACTIONS'] = 'azioni';
$lang['it_IT']['ImageEditor.ss']['APPLY'] = 'applica';
$lang['it_IT']['ImageEditor.ss']['CANCEL'] = 'cancella';
$lang['it_IT']['ImageEditor.ss']['CROP'] = 'ritaglia';
$lang['it_IT']['ImageEditor.ss']['CURRENTACTION'] = 'azione&nbsp;attuale';
$lang['it_IT']['ImageEditor.ss']['EDITFUNCTIONS'] = 'funzioni&nbsp;modifica';
$lang['it_IT']['ImageEditor.ss']['EXIT'] = 'esci';
$lang['it_IT']['ImageEditor.ss']['HEIGHT'] = 'altezza';
$lang['it_IT']['ImageEditor.ss']['REDO'] = 'rifai';
$lang['it_IT']['ImageEditor.ss']['ROT'] = 'ruota';
$lang['it_IT']['ImageEditor.ss']['SAVE'] = 'salva&nbsp;immagine';
$lang['it_IT']['ImageEditor.ss']['UNDO'] = 'annulla';
$lang['it_IT']['ImageEditor.ss']['UNTITLED'] = 'Documento senza titolo';
$lang['it_IT']['ImageEditor.ss']['WIDTH'] = 'larghezza';
$lang['it_IT']['LeftAndMain']['CHANGEDURL'] = 'Cambiato URL in \'%s\'';
$lang['it_IT']['LeftAndMain']['HELP'] = 'Aiuto';
$lang['it_IT']['LeftAndMain']['PAGETYPE'] = 'Tipo di pagina:';
$lang['it_IT']['LeftAndMain']['PERMAGAIN'] = 'Sei stato sloggato dal CMS. Se desideri autenticarti nuovamente, inserisci qui sotto nome utente e password.';
$lang['it_IT']['LeftAndMain']['PERMALREADY'] = 'Siamo spiacenti, ma non puoi accedere a questa sezione del CMS. Se desideri autenticarti come qualcun altro, fallo qui sotto.';
$lang['it_IT']['LeftAndMain']['PERMDEFAULT'] = 'Inserisci il tuo indirizzo email e password per accedere al CMS.';
$lang['it_IT']['LeftAndMain']['PLEASESAVE'] = 'Per favore salva la pagina: La stessa potrebbe non venire aggiornata se non si provvede quanto prima a salvarla.';
$lang['it_IT']['LeftAndMain']['REQUESTERROR'] = 'Errore nella richiesta';
$lang['it_IT']['LeftAndMain']['SAVED'] = 'salvato';
$lang['it_IT']['LeftAndMain']['SAVEDUP'] = 'Salvato';
$lang['it_IT']['LeftAndMain']['SITECONTENTLEFT'] = 'Contenuto del sito';
$lang['it_IT']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Questa è la';
$lang['it_IT']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versione che stai utilizzando al momento, tecnicamente è il ramo CVS';
$lang['it_IT']['LeftAndMain.ss']['ARCHS'] = 'Sito archiviato';
$lang['it_IT']['LeftAndMain.ss']['DRAFTS'] = 'Sito bozza';
$lang['it_IT']['LeftAndMain.ss']['EDIT'] = 'Modifica';
$lang['it_IT']['LeftAndMain.ss']['EDITINCMS'] = 'Modifica questa pagina nel CMS';
$lang['it_IT']['LeftAndMain.ss']['EDITPROFILE'] = 'Profilo';
$lang['it_IT']['LeftAndMain.ss']['LOADING'] = 'Caricamento...';
$lang['it_IT']['LeftAndMain.ss']['LOGGEDINAS'] = 'Autenticato come';
$lang['it_IT']['LeftAndMain.ss']['LOGOUT'] = 'scollegati';
$lang['it_IT']['LeftAndMain.ss']['PUBLIS'] = 'Sito pubblicato';
$lang['it_IT']['LeftAndMain.ss']['REQUIREJS'] = 'Il CMS necessita che tu abbia Javascript abilitato.';
$lang['it_IT']['LeftAndMain.ss']['SSWEB'] = 'Sito web Silverstripe';
$lang['it_IT']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Visualizza la pagina nel sito bozza';
$lang['it_IT']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Visualizza la pagina nel sito in produzione';
$lang['it_IT']['LeftAndMain.ss']['VIEWPAGEIN'] = 'vista pagina:';
$lang['it_IT']['LeftAndMain']['STATUSTO'] = 'Stato cambiato a \'%s\'';
$lang['it_IT']['LeftAndMain']['TREESITECONTENT'] = 'Contenuto del sito';
$lang['it_IT']['MemberList']['ADD'] = 'Aggiungi';
$lang['it_IT']['MemberList']['ANYGROUP'] = 'Qualsiasi gruppo';
$lang['it_IT']['MemberList']['ASC'] = 'Ascendente';
$lang['it_IT']['MemberList']['DESC'] = 'Discendente';
$lang['it_IT']['MemberList']['EMAIL'] = 'Email';
$lang['it_IT']['MemberList']['FILTERBYG'] = 'Filtra per gruppo';
$lang['it_IT']['MemberList']['FN'] = 'Nome';
$lang['it_IT']['MemberList']['ORDERBY'] = 'Ordina per';
$lang['it_IT']['MemberList']['PASSWD'] = 'Password';
$lang['it_IT']['MemberList']['SEARCH'] = 'Cerca';
$lang['it_IT']['MemberList']['SN'] = 'Cognome';
$lang['it_IT']['MemberList.ss']['FILTER'] = 'Filtro';
$lang['it_IT']['MemberList_PageControls.ss']['DISPLAYING'] = 'Mostra';
$lang['it_IT']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'membri';
$lang['it_IT']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'membri';
$lang['it_IT']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'membri';
$lang['it_IT']['MemberList_PageControls.ss']['OF'] = 'di';
$lang['it_IT']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'membri';
$lang['it_IT']['MemberList_PageControls.ss']['TO'] = 'A';
$lang['it_IT']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Mostra il primo';
$lang['it_IT']['MemberList_PageControls.ss']['VIEWLAST'] = 'Visualizza ultimo';
$lang['it_IT']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Mostra il successivo';
$lang['it_IT']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Mostra il precedente';
$lang['it_IT']['MemberList_Table.ss']['EMAIL'] = 'Indirizzo email';
$lang['it_IT']['MemberList_Table.ss']['FN'] = 'Nome';
$lang['it_IT']['MemberList_Table.ss']['PASSWD'] = 'Password';
$lang['it_IT']['MemberList_Table.ss']['SN'] = 'Cognome';
$lang['it_IT']['MemberTableField']['ADD'] = 'Inserisci';
$lang['it_IT']['MemberTableField']['ADDEDTOGROUP'] = 'Inserito membro al gruppo';
$lang['it_IT']['MemberTableField']['ADDINGFIELD'] = 'Inserimento non riuscito';
$lang['it_IT']['MemberTableField']['ANYGROUP'] = 'Qualsiasi gruppo';
$lang['it_IT']['MemberTableField']['ASC'] = 'Ascendente';
$lang['it_IT']['MemberTableField']['DESC'] = 'Discendente';
$lang['it_IT']['MemberTableField']['EMAIL'] = 'Email';
$lang['it_IT']['MemberTableField']['FILTER'] = 'Filtro';
$lang['it_IT']['MemberTableField']['FILTERBYGROUP'] = 'Filtra per gruppo';
$lang['it_IT']['MemberTableField']['FIRSTNAME'] = 'Nome';
$lang['it_IT']['MemberTableField']['ORDERBY'] = 'Ordina per';
$lang['it_IT']['MemberTableField']['SEARCH'] = 'Cerca';
$lang['it_IT']['MemberTableField.ss']['ADDNEW'] = 'Inserisci nuovo';
$lang['it_IT']['MemberTableField.ss']['DELETEMEMBER'] = 'Cancella questo membro';
$lang['it_IT']['MemberTableField.ss']['EDITMEMBER'] = 'Modifica questo membro';
$lang['it_IT']['MemberTableField.ss']['SHOWMEMBER'] = 'Visualizza questo membro';
$lang['it_IT']['MemberTableField']['SURNAME'] = 'Cognome';
$lang['it_IT']['ModelAdmin']['ADDBUTTON'] = 'Aggiungi';
$lang['it_IT']['ModelAdmin']['ADDFORM'] = 'Riempi questo form per aggiungere %s al database.';
$lang['it_IT']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Seleziona la colonna dei risultati...';
$lang['it_IT']['ModelAdmin']['CLASSTYPE'] = 'Tipo';
$lang['it_IT']['ModelAdmin']['CLEAR_SEARCH'] = 'Resetta Ricerca';
$lang['it_IT']['ModelAdmin']['DELETE'] = 'Cancella';
$lang['it_IT']['ModelAdmin']['DELETEDRECORDS'] = 'Cancellati %s records.';
$lang['it_IT']['ModelAdmin']['FOUNDRESULTS'] = 'La tua ricerca ha trovato %s oggetti corrispondenti';
$lang['it_IT']['ModelAdmin']['GOBACK'] = 'Indietro';
$lang['it_IT']['ModelAdmin']['IMPORT'] = 'Importa da CSV';
$lang['it_IT']['ModelAdmin']['IMPORTEDRECORDS'] = 'Importati %s records.';
$lang['it_IT']['ModelAdmin']['ITEMNOTFOUND'] = 'Non trovo questo oggetto';
$lang['it_IT']['ModelAdmin']['LOADEDFOREDITING'] = 'Caricato \'%s\' per modifiche.';
$lang['it_IT']['ModelAdmin']['NOIMPORT'] = 'Nulla da importare.';
$lang['it_IT']['ModelAdmin']['NORESULTS'] = 'La tua ricerca non ha prodotto nessun risultato';
$lang['it_IT']['ModelAdmin']['SAVE'] = 'Salva';
$lang['it_IT']['ModelAdmin']['SEARCHRESULTS'] = 'Risultati della Ricerca';
$lang['it_IT']['ModelAdmin']['SELECTALL'] = 'seleziona tutti';
$lang['it_IT']['ModelAdmin']['SELECTNONE'] = 'de-seleziona';
$lang['it_IT']['ModelAdmin']['UPDATEDRECORDS'] = 'Aggiornati %s records.';
$lang['it_IT']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Colonne database';
$lang['it_IT']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Mostra specifiche per %s';
$lang['it_IT']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Relazioni';
$lang['it_IT']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Specifiche per %s';
$lang['it_IT']['ModelAdmin_left.ss']['ADDLISTING'] = 'Aggiungi Gruppo';
$lang['it_IT']['ModelAdmin_left.ss']['ADD_TAB_HEADER'] = 'Aggiungi';
$lang['it_IT']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Importa';
$lang['it_IT']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Ricerca Gruppi';
$lang['it_IT']['ModelAdmin_right.ss']['WELCOME1'] = 'Benvenuto a %s. Seleziona una delle voci nel riquadro di sinistra.';
$lang['it_IT']['PageComment']['COMMENTBY'] = 'Commento da \'%s\' su %s';
$lang['it_IT']['PageCommentInterface']['POST'] = 'Invia';
$lang['it_IT']['PageCommentInterface']['SPAMQUESTION'] = 'Domanda di protezione anti-spam: %s';
$lang['it_IT']['PageCommentInterface.ss']['COMMENTS'] = 'Commenti';
$lang['it_IT']['PageCommentInterface.ss']['NEXT'] = 'prossimo';
$lang['it_IT']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Nessuno ha aggiunto ancora un commento in questa pagina.';
$lang['it_IT']['PageCommentInterface.ss']['POSTCOM'] = 'Inserisci il tuo commento';
$lang['it_IT']['PageCommentInterface.ss']['PREV'] = 'precedente';
$lang['it_IT']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'Feed RSS per i commenti in questa pagina';
$lang['it_IT']['PageCommentInterface']['YOURCOMMENT'] = 'Commenti';
$lang['it_IT']['PageCommentInterface']['YOURNAME'] = 'Il tuo nome';
$lang['it_IT']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Domanda di protezione spam: %s';
$lang['it_IT']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Il tuo commento è stato inviato e ora attende di essere approvato.';
$lang['it_IT']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Il messaggio che hai inviato era:';
$lang['it_IT']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Identificato spam!!';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'approva questo commento';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'questo commento non è spam';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'questo commento è spam';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Inserito da';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'rimuovi questo commento';
$lang['it_IT']['ReportAdmin_left.ss']['REPORTS'] = 'Report';
$lang['it_IT']['ReportAdmin_right.ss']['WELCOME1'] = 'Benvenuto su';
$lang['it_IT']['ReportAdmin_right.ss']['WELCOME2'] = 'Sezione di reporting. Per favore scegli un report specifico sulla sinistra.';
$lang['it_IT']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Report';
$lang['it_IT']['SecurityAdmin']['ADDMEMBER'] = 'Aggiungi membro';
$lang['it_IT']['SecurityAdmin']['EDITPERMISSIONS'] = 'Modifica i permessi e gli indirizzi IP in ogni gruppo';
$lang['it_IT']['SecurityAdmin']['MENUTITLE'] = 'Sicurezza';
$lang['it_IT']['SecurityAdmin']['NEWGROUP'] = 'Nuovo gruppo';
$lang['it_IT']['SecurityAdmin']['SAVE'] = 'Salva';
$lang['it_IT']['SecurityAdmin']['SGROUPS'] = 'Gruppi di sicurezza';
$lang['it_IT']['SecurityAdmin_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['SecurityAdmin_left.ss']['DEL'] = 'Cancella';
$lang['it_IT']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Cancella i gruppi selezioni';
$lang['it_IT']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Permetti di riordinare con drag &amp; drop';
$lang['it_IT']['SecurityAdmin_left.ss']['GO'] = 'Vai';
$lang['it_IT']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Gruppi di sicurezza';
$lang['it_IT']['SecurityAdmin_left.ss']['SELECT'] = 'Seleziona le pagine che vuoi cancellare e clicca il pulsante di seguito';
$lang['it_IT']['SecurityAdmin_left.ss']['TOREORG'] = 'Per riorganizzare il tuo sito, seleziona e sposta le pagine ove meglio desideri.';
$lang['it_IT']['SecurityAdmin_right.ss']['WELCOME1'] = 'Benvenuto su';
$lang['it_IT']['SecurityAdmin_right.ss']['WELCOME2'] = 'Sezione di amministrazione della sicurezza. Per favore scegli un gruppo sulla sinistra.';
$lang['it_IT']['SideReport']['EMPTYPAGES'] = 'Pagine vuote';
$lang['it_IT']['SideReport']['LAST2WEEKS'] = 'Pagine modificate nelle ultime 2 settimane';
$lang['it_IT']['SideReport']['REPEMPTY'] = 'Il report %s è vuoto.';
$lang['it_IT']['SideReport']['TODO'] = 'Da fare';
$lang['it_IT']['StaticExporter']['BASEURL'] = 'URL di base';
$lang['it_IT']['StaticExporter']['EXPORTTO'] = 'Esporta in questa cartella';
$lang['it_IT']['StaticExporter']['FOLDEREXPORT'] = 'Cartella dove esportare';
$lang['it_IT']['StaticExporter']['NAME'] = 'Sistema di esportazione statico';
$lang['it_IT']['StaticExporter']['ONETHATEXISTS'] = 'Per favore specifica una cartella esistente';
$lang['it_IT']['TaskList.ss']['BY'] = 'da';
$lang['it_IT']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Nessuna immagine trovata in';
$lang['it_IT']['ThumbnailStripField']['NOTAFOLDER'] = 'Questa non è una cartella';
$lang['it_IT']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Scegli una cartella qui sopra)';
$lang['it_IT']['ViewArchivedEmail.ss']['CANACCESS'] = 'Puoi accedere al sito archiviato da questo indirizzo:';
$lang['it_IT']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Hai chiesto di visualizzare il contenuto del nostro sito il';
$lang['it_IT']['WaitingOn.ss']['ATO'] = 'assegnato a';
$lang['it_IT']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Widgets disponibili';
$lang['it_IT']['WidgetAreaEditor.ss']['INUSE'] = 'Widgets utilizzati';
$lang['it_IT']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Non ci sono widgets disponibili.';
$lang['it_IT']['WidgetAreaEditor.ss']['TOADD'] = 'Per aggiungere dei widgets, trascinarli dall\'area di sinistra fin qui.';
$lang['it_IT']['WidgetEditor.ss']['DELETE'] = 'Cancella';

?>