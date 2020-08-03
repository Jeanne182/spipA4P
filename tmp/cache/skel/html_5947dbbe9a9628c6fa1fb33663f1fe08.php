<?php

/*
 * Squelette : squelettes/inclure/nav-bar.html
 * Date :      Thu, 30 Jul 2020 08:12:29 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   _langues, _sousRubriques, _rubriques
 */ 

function BOUCLE_langueshtml_5947dbbe9a9628c6fa1fb33663f1fe08(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'langues', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_langues';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('squelettes/inclure/nav-bar.html','html_5947dbbe9a9628c6fa1fb33663f1fe08','_langues',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
' 
            <p class="lien-langue-' .
interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
'"> 
                <a ' .
(($t1 = strval(interdire_scripts((((safehtml($Pile[$SP]['valeur']) == interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true)))) ?' ' :''))))!=='' ?
		($t1 . 'class="on"') :
		'') .
' href="' .
parametre_url(parametre_url(parametre_url(self(),'action','converser'),'var_lang',interdire_scripts(safehtml($Pile[$SP]['valeur']))),'redirect',url_absolue(self())) .
'" rel="alternate" title="' .
interdire_scripts(traduire_nom_langue(safehtml($Pile[$SP]['valeur']))) .
'"> 
                    ' .
interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
'
                </a>
            </p> 
        ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_langues @ squelettes/inclure/nav-bar.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_sousRubriqueshtml_5947dbbe9a9628c6fa1fb33663f1fe08(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sousRubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("0+rubriques.titre AS num",
		"rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/nav-bar.html','html_5947dbbe9a9628c6fa1fb33663f1fe08','_sousRubriques',38,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                                <li style="white-space: normal; float: none; width: 100%;">                        
                                        <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'" class="menu-item ' .
classe_boucle_crayon('rubriques','titre',$Pile[$SP]['id_rubrique']).' " style="float: none; width: auto;">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
                                </li>
                            ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sousRubriques @ squelettes/inclure/nav-bar.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubriqueshtml_5947dbbe9a9628c6fa1fb33663f1fe08(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num');
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'rubrique_principale'"), 
			array('=', 'rubriques.id_parent', 0));
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')), 'L2' => array('L1','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/nav-bar.html','html_5947dbbe9a9628c6fa1fb33663f1fe08','_rubriques',34,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger menu-pannel bg-secondary text-white text-uppercase">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a> <!--sf-with-ul -->
                        <ul style="display: none; float: none; width: 13em;">
                            ' .
BOUCLE_sousRubriqueshtml_5947dbbe9a9628c6fa1fb33663f1fe08($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                            <!-- <div class="separation-bar-menu-pannel"></div> -->                          
                        </ul>
                    </li>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubriques @ squelettes/inclure/nav-bar.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/nav-bar.html
// Temps de compilation total: 8.299 ms
//

function html_5947dbbe9a9628c6fa1fb33663f1fe08($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top flex-column" id="mainNav">
    <div id="langage-selection" class=\'flex-row\'>
        ' .
vide($Pile['vars'][$_zzz=(string)'langues'] = interdire_scripts(serialize(filtre_explode_dist((include_spip('inc/config')?lire_config('langues_multilingue',null,false):''),',')))) .
' 
        ' .
vide($Pile['vars'][$_zzz=(string)'langues'] = array('1' => 'fr', '2' => 'en')) .
BOUCLE_langueshtml_5947dbbe9a9628c6fa1fb33663f1fe08($Cache, $Pile, $doublons, $Numrows, $SP) .
'

    </div>
    <div class="container" id="top-menu">
        
        <span class="flex-row column-centered">
            <div class=\'logo_site-container mr-4\'>
                <img class="masthead-avatar" src="' .
extraire_attribut(
((!is_array($l = quete_logo('id_syndic', 'ON', @$Pile[0]['id_syndic'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src') .
'" alt="" />
            </div>
            <a class="navbar-brand js-scroll-trigger" href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">
                
                <div class=\'text-uppercase\'>' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</div>
                <h4 id="asso-description">' .
interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])) .
'</h4>
            </a>
        </span>
        <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto sf-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                
                ' .
BOUCLE_rubriqueshtml_5947dbbe9a9628c6fa1fb33663f1fe08($Cache, $Pile, $doublons, $Numrows, $SP) .
'

            </ul>
        </div>
    </div>
</nav>');

	return analyse_resultat_skel('html_5947dbbe9a9628c6fa1fb33663f1fe08', $Cache, $page, 'squelettes/inclure/nav-bar.html');
}
?>