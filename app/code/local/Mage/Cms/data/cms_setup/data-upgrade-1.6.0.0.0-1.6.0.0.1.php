<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Cms
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


$pageContent = <<<EOD
<div class="page-title">
    <h1 style="fontsize:1.5em;">Informativa estesa sull’uso dei cookie</h1>
</div>
<div class="std">
	<h2 style="fontsize:1.17em;" style="fontsize:1.17em;">Uso dei cookie</h2>
	<p>
	    {{config path="general/store_information/name"}} utilizza i Cookies per rendere i propri servizi semplici e efficienti per l’utenza che visiona le pagine di 
	    {{config path="general/store_information/name"}}.
	    Gli utenti che visionano il sito di {{config path="general/store_information/name"}}, vedranno inserite delle quantità minime di informazioni nei dispositivi in uso, 
		che siano computer e periferiche mobili, 
		in piccoli file di testo denominati “cookie” salvati nelle directory utilizzate dal browser web dell’Utente.
	    Vi sono vari tipi di cookie, alcuni per rendere più efficace l’uso del Sito, altri per abilitare determinate funzionalità.
		<p>Analizzandoli in maniera particolareggiata i nostri cookie permettono di:
			<ul>
				<li>memorizzare le preferenze inserite</li>
				<li>evitare di reinserire le stesse informazioni più volte durante la visita quali ad esempio nome utente e password</li>
				<li>analizzare l’utilizzo dei servizi e dei contenuti forniti da {{config path="general/store_information/name"}} 
					per ottimizzarne l’esperienza di navigazione e i servizi offerti</li>
			</ul>
		</p>
		<p>Per una lista esaustiva dei cookies che noi salviamo vedere la sezione 
		<a href="#list">Lista dei Cookies che memorizziamo</a>
		</p>
	</p>
	<h2 style="fontsize:1.17em;">Tipologie di Cookie utilizzati da {{config path="general/store_information/name"}}</h2>
	<p>A seguire i vari tipi di cookie utilizzati da {{config path="general/store_information/name"}} 
		in funzione delle finalità d’uso:
		<h3 style="fontsize:1.05em;">Cookie Tecnici</h3>
		<p>Questa tipologia di cookie permette il corretto funzionamento di alcune sezioni del Sito di {{config path="general/store_information/name"}}. 
		Sono di due categorie: persistenti e di sessione.
		<ul>
				<li><strong>persistenti:</strong> una volta chiuso il browser non vengono distrutti ma rimangono fino ad una data di scadenza preimpostata</li>
				<li><strong>di sessioni:</strong> vengono distrutti ogni volta che il browser viene chiuso</li>
		</ul>
		<p>Questi cookie, inviati sempre dal nostro dominio, <strong>sono necessari a visualizzare correttamente il sito</strong> e in 
		relazione ai servizi tecnici offerti, verranno quindi <strong>sempre utilizzati e inviati</strong>, a meno che l’utenza non 
		modifichi le impostazioni nel proprio browser (inficiando così la visualizzazione delle pagine del sito).</p>
		</p>
		<h3 style="fontsize:1.05em;">Cookie analitici</h3>
		<p>I cookie in questa categoria vengono utilizzati per <strong>collezionare informazioni sull’uso del sito.</strong> 
		{{config path="general/store_information/name"}} userà queste informazioni in merito ad <strong>analisi statistiche anonime</strong> al fine di migliorare 
		l’utilizzo del Sito e per rendere i contenuti più interessanti e attinenti ai desideri dell’utenza. 
		Questa tipologia di cookie raccoglie dati in forma anonima sull’attività dell’utenza e su come è arrivata sul Sito.
		 I cookie analitici sono inviati dal Sito Stesso o da domini di terze parti.</p>
		<h3 style="fontsize:1.05em;">Cookie di analisi di servizi di terze parti</h3>
		<p>Questi cookie sono utilizzati al fine di raccogliere informazioni sull'<strong>uso del Sito</strong> da parte degli utenti in <strong>forma anonima</strong> quali: pagine visitate, tempo di permanenza, origini del traffico di provenienza, provenienza geografica, età, 
		genere e interessi ai fini di campagne di marketing. Questi cookie sono inviati da domini di terze parti esterni al Sito.</p>
		<h3 style="fontsize:1.05em;">Cookie per integrare prodotti e funzioni di software di terze parti</h3>
		<p>Questa tipologia di cookie <strong>integra funzionalità sviluppate da terzi</strong> all'interno delle pagine 
		del Sito di {{config path="general/store_information/name"}}, come le icone e le preferenze espresse nei social 
		network, al fine di condivisione dei contenuti del sito o per l'uso di servizi software di terze parti 
		come i software per generare le mappe e ulteriori software che offrono servizi aggiuntivi). </br>
		Questi cookie sono inviati da <strong>domini di terze parti</strong> e da <strong>siti partner</strong> che offrono 
		le loro funzionalità tra le pagine del Sito di {{config path="general/store_information/name"}}.
		</p>
		<h3 style="fontsize:1.05em;">Cookie di profilazione</h3>
		<p>Sono quei cookies necessari a creare profili utenti al fine di inviare messaggi pubblicitari in linea con le preferenze 
		manifestate dall'utente all'interno delle pagine del Sito di {{config path="general/store_information/name"}}.
		</p>
	</p>

	<hr/>
	<p>{{config path="general/store_information/name"}}, secondo la normativa vigente, non è tenuto a chiedere consenso per i <strong>cookie tecnici</strong> 
		e di <strong>analytics</strong>, in quanto necessari a fornire i servizi richiesti.</p>
	<p>Per tutte le altre tipologie di cookie il consenso può essere espresso dall'Utente con una o più di una delle seguenti modalità:</p>
	<ul>
		<li><strong>Mediante specifiche configurazioni del browser</strong> utilizzato o dei relativi programmi informatici utilizzati per navigare le pagine che compongono il Sito.</li>
		<li><strong>Mediante modifica delle impostazioni</strong> nell'uso dei servizi di terze parti</li>
	</ul>
	<p>Entrambe queste soluzioni potrebbero <strong>impedire all'utente di utilizzare o visualizzare parti del Sito di {{config path="general/store_information/name"}}.</strong></p>	
	<p><strong>Siti Web e servizi di terze parti</strong></p>
<p>Il Sito potrebbe contenere collegamenti ad altri siti Web che dispongono di una propria informativa sulla privacy che può essere diverse da quella adottata da posizionamento-seo e che che quindi <strong>non risponde</strong> di questi siti.</p>
<hr/>

	<h2 style="fontsize:1.17em;">Cookie utilizzati da {{config path="general/store_information/name"}}</h2>	
	<h3 style="fontsize:1.05em;"><a name="list"></a>Lista dei Cookie che memorizziamo</h2>
	<p>A seguire la lista di cookie tecnici e di analytics utilizzati da questo Sito:</p>
	<table class="data-table">
	    <thead>
	        <tr>
	            <th>COOKIE nome</th>
	            <th>COOKIE descrizione</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <th>CART</th>
	            <td>The association with your shopping cart.</td>
	        </tr>
	        <tr>
	            <th>CATEGORY_INFO</th>
	            <td>Stores the category info on the page, that allows to display pages more quickly.</td>
	        </tr>
	        <tr>
	            <th>COMPARE</th>
	            <td>The items that you have in the Compare Products list.</td>
	        </tr>
	        <tr>
	            <th>CURRENCY</th>
	            <td>Your preferred currency</td>
	        </tr>
	        <tr>
	            <th>CUSTOMER</th>
	            <td>An encrypted version of your customer id with the store.</td>
	        </tr>
	        <tr>
	            <th>CUSTOMER_AUTH</th>
	            <td>An indicator if you are currently logged into the store.</td>
	        </tr>
	        <tr>
	            <th>CUSTOMER_INFO</th>
	            <td>An encrypted version of the customer group you belong to.</td>
	        </tr>
	        <tr>
	            <th>CUSTOMER_SEGMENT_IDS</th>
	            <td>Stores the Customer Segment ID</td>
	        </tr>
	        <tr>
	            <th>EXTERNAL_NO_CACHE</th>
	            <td>A flag, which indicates whether caching is disabled or not.</td>
	        </tr>
	        <tr>
	            <th>FRONTEND</th>
	            <td>You sesssion ID on the server.</td>
	        </tr>
	        <tr>
	            <th>GUEST-VIEW</th>
	            <td>Allows guests to edit their orders.</td>
	        </tr>
	        <tr>
	            <th>LAST_CATEGORY</th>
	            <td>The last category you visited.</td>
	        </tr>
	        <tr>
	            <th>LAST_PRODUCT</th>
	            <td>The most recent product you have viewed.</td>
	        </tr>
	        <tr>
	            <th>NEWMESSAGE</th>
	            <td>Indicates whether a new message has been received.</td>
	        </tr>
	        <tr>
	            <th>NO_CACHE</th>
	            <td>Indicates whether it is allowed to use cache.</td>
	        </tr>
	        <tr>
	            <th>PERSISTENT_SHOPPING_CART</th>
	            <td>A link to information about your cart and viewing history if you have asked the site.</td>
	        </tr>
	        <tr>
	            <th>POLL</th>
	            <td>The ID of any polls you have recently voted in.</td>
	        </tr>
	        <tr>
	            <th>POLLN</th>
	            <td>Information on what polls you have voted on.</td>
	        </tr>
	        <tr>
	            <th>RECENTLYCOMPARED</th>
	            <td>The items that you have recently compared.</td>
	        </tr>
	        <tr>
	            <th>STF</th>
	            <td>Information on products you have emailed to friends.</td>
	        </tr>
	        <tr>
	            <th>STORE</th>
	            <td>The store view or language you have selected.</td>
	        </tr>
	        <tr>
	            <th>USER_ALLOWED_SAVE_COOKIE</th>
	            <td>Indicates whether a customer allowed to use cookies.</td>
	        </tr>
	        <tr>
	            <th>VIEWED_PRODUCT_IDS</th>
	            <td>The products that you have recently viewed.</td>
	        </tr>
	        <tr>
	            <th>WISHLIST</th>
	            <td>An encrypted list of products added to your Wishlist.</td>
	        </tr>
	        <tr>
	            <th>WISHLIST_CNT</th>
	            <td>The number of items in your Wishlist.</td>
	        </tr>
	    </tbody>
	</table>		
	</hr>
	<h2 style="fontsize:1.17em;">Come disabilitare i cookie mediante configurazione del browser</h2>
	<p><strong>Chrome</strong></p>
	<ol>
		<li>Eseguire il Browser Chrome</li>
		<li>Fare click sul menù <a href="http://www.posizionamento-seo.com/wp-content/uploads/2014/06/chrome-impostazioni.png"><img class="size-full wp-image-1005" src="http://www.posizionamento-seo.com/wp-content/uploads/2014/06/chrome-impostazioni.png" alt="chrome impostazioni" width="29" height="29"/></a> presente nella barra degli strumenti del browser a fianco della finestra di inserimento url per la navigazione</li>
		<li>Selezionare <strong>Impostazioni</strong></li>
		<li>Fare clic su <strong>Mostra Impostazioni Avanzate</strong></li>
		<li>Nella sezione "Privacy" fare clic su bottone "<strong>Impostazioni contenuti</strong>"</li>
		<li>Nella sezione "Cookie" è possibile modificare le seguenti impostazioni relative ai cookie:
			<ul>
				<li>Consentire il salvataggio dei dati in locale</li>
				<li>Modificare i dati locali solo fino alla chiusura del browser</li>
				<li>Impedire ai siti di impostare i cookie</li>
				<li>Bloccare i cookie di terze parti e i dati dei siti</li>
				<li>Gestire le eccezioni per alcuni siti internet</li>
				<li>Eliminazione di uno o tutti i cookie</li>
			</ul>
		</li>
	</ol>
	<p>Per maggiori informazioni visita la <a href="https://support.google.com/accounts/answer/61416?hl=en" target="_blank" rel="nofollow">pagina dedicata</a>.</p>
	<p><strong>Mozilla Firefox</strong></p>
	<ol>
		<li>Eseguire il Browser Mozilla Firefox</li>
		<li>Fare click sul menù <a href="http://www.posizionamento-seo.com/wp-content/uploads/2014/06/firefox-impostazioni.png"><img class="alignnone size-full wp-image-1009" src="http://www.posizionamento-seo.com/wp-content/uploads/2014/06/firefox-impostazioni.png" alt="firefox impostazioni" width="16" height="16"/></a> presente nella barra degli strumenti del browser a fianco della finestra di inserimento url per la navigazione</li>
		<li>Selezionare <strong>Opzioni</strong></li>
		<li>Seleziona il pannello <strong>Privacy</strong></li>
		<li>Fare clic su <strong>Mostra Impostazioni Avanzate</strong></li>
		<li>Nella sezione "Privacy" fare clic su bottone "<strong>Impostazioni contenuti</strong>"</li>
		<li>Nella sezione "<strong>Tracciamento</strong>" è possibile modificare le seguenti impostazioni relative ai cookie:
			<ul>
				<li>Richiedi ai siti di non effettuare alcun tracciamento</li>
				<li>Comunica ai siti la disponibilità ad essere tracciato</li>
				<li>Non comunicare alcuna preferenza relativa al tracciamento dei dati personali</li>
			</ul>
		</li>
		<li>Dalla sezione "<strong>Cronologia</strong>" è possibile:
			<ul>
				<li>Abilitando "Utilizza impostazioni personalizzate" selezionare di accettare i cookie di terze parti (sempre, dai siti più visitato o mai) e di conservarli per un periodo determinato (fino alla loro scadenza, alla chiusura di Firefox o di chiedere ogni volta)</li>
				<li>Rimuovere i singoli cookie immagazzinati</li>
			</ul>
		</li>
	</ol>
	<p>Per maggiori informazioni visita la <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences" target="_blank" rel="nofollow">pagina dedicata</a>.</p>
	<p><strong>Internet Explorer</strong></p>
	<ol>
		<li>Eseguire il Browser Internet Explorer</li>
		<li>Fare click sul pulsante <strong>Strumenti</strong> e scegliere <strong>Opzioni Internet</strong></li>
		<li>Fare click sulla scheda <strong>Privacy</strong> e nella sezione Impostazioni modificare il dispositivo di scorrimento in funzione dell&#8217;azione desiderata per i cookie:
			<ul>
				<li>Bloccare tutti i cookie</li>
				<li>Consentire tutti i cookie</li>
				<li>Selezione dei siti da cui ottenere cookie: spostare il cursore in una posizione intermedia in modo da non bloccare o consentire tutti i cookie, premere quindi su Siti, nella casella Indirizzo Sito Web inserire un sito internet e quindi premere su Blocca o Consenti</li>
			</ul>
		</li>
	</ol>
	<p>Per maggiori informazioni visita la <a href="http://windows.microsoft.com/it-it/windows-vista/block-or-allow-cookies" target="_blank" rel="nofollow">pagina dedicata</a>.</p>
	<p><strong>Safari 6</strong></p>
	<ol>
		<li>Eseguire il Browser Safari</li>
		<li>Fare click su <strong>Safari</strong>, selezionare <strong>Preferenze</strong> e premere su <strong>Privacy</strong></li>
		<li>Nella sezione <em>Blocca Cookie</em> specificare come Safari deve accettare i cookie dai siti internet.</li>
		<li>Per visionare quali siti hanno immagazzinato i cookie cliccare su <strong>Dettagli</strong></li>
	</ol>
	<p>Per maggiori informazioni visita la pagina dedicata.</p>
	<p><strong>Safari iOS (dispositivi mobile)</strong></p>
	<ol>
		<li>Eseguire il Browser Safari iOS</li>
		<li>Tocca su <strong>Impostazioni</strong> e poi <strong>Safari</strong></li>
		<li>Tocca su <strong>Blocca Cookie</strong> e scegli tra le varie opzioni: "Mai", "Di terze parti e inserzionisti" o "Sempre"</li>
		<li>Per cancellare tutti i cookie immagazzinati da Safari, tocca su <strong>Impostazioni</strong>, poi su <strong>Safari</strong> e infine su <strong>Cancella Cookie e dati</strong></li>
	</ol>
	<p>Per maggiori informazioni visita la <a href="http://support.apple.com/kb/HT1677?utm_source=Agillic%20Dialogue" target="_blank" rel="nofollow">pagina dedicata</a>.</p>
	<p><strong>Opera</strong></p>
	<ol>
		<li>Eseguire il Browser Opera</li>
		<li>Fare click sul Preferenze poi su Avanzate e infine su Cookie</li>
		<li>Selezionare una delle seguenti opzioni:
	<ul>
		<li>Accetta tutti i cookie</li>
		<li>Accetta i cookie solo dal sito che si visita: i cookie di terze parti e che vengono inviati da un dominio diverso da quello che si sta visitando verranno rifiutati</li>
		<li>Non accettare mai i cookie: tutti i cookie non verranno mai salvati</li>
	</ul>
	</li>
	</ol>
	<p>Per maggiori informazioni visita la <a href="http://windows.microsoft.com/it-it/windows-vista/block-or-allow-cookies" target="_blank" rel="nofollow">pagina dedicata</a>.</p>
	<hr/>
	<h2>Come disabilitare i cookie di servizi di terzi</h2>
	<ul>
	<li><a href="http://www.google.com/ads/preferences/?hl=it" rel="nofollow">Servizi di Google</a></li>
	<li><a href="https://www.facebook.com/help/cookies?ref_type=sitefooter" rel="nofollow">Facebook</a></li>
	<li><a href="https://support.twitter.com/articles/20170519-uso-dei-cookie-e-di-altre-tecnologie-simili-da-parte-di-twitter#" rel="nofollow">Twitter</a></li>
	</ul>
	<hr/>
	<p>Questa pagina è visibile, mediante link in calce in tutte le pagine del Sito ai sensi dell&#8217;art. 122 secondo comma del D.lgs. 196/2003 e a seguito delle modalità semplificate per l&#8217;informativa e l&#8217;acquisizione del consenso per l&#8217;uso dei cookie pubblicata sulla Gazzetta Ufficiale n.126 del 3 giugno 2014 e relativo registro dei provvedimenti n.229 dell&#8217;8 maggio 2014.</p>
</div>
EOD;

$privacyPageData = array(
    'title'           => 'Privacy Policy',
    'content_heading' => 'Privacy Policy',
    'root_template'   => 'one_column',
    'identifier'      => 'privacy-policy-cookie-restriction-mode',
    'content'         => $pageContent,
    'is_active'       => 1,
    'stores'          => array(0),
    'sort_order'      => 0
);

Mage::getModel('cms/page')->setData($privacyPageData)->save();

$footerLinksBlock = Mage::getModel('cms/block')->load('footer_links','identifier');

if ($footerLinksBlock->getId()) {
    $content = $footerLinksBlock->getContent();
    if (preg_match('/<ul>(.*?)<\\/ul>/ims',$content, $matches)) {
        $content = preg_replace('/<li class="last">/ims', '<li>',$content);
        $replacment = '<li class="last privacy">'
            . "<a href=\"{{store direct_url=\"privacy-policy-cookie-restriction-mode\"}}\">"
            . "Privacy Policy</a></li>\r\n</ul>";
        $content = preg_replace('/<\\/ul>/ims', $replacment, $content);
        $footerLinksBlock->setContent($content)->save();
    }
}
