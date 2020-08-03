<?php

/*
 * Squelette : squelettes/inclure/rubriques/rubrique_engagement.html
 * Date :      Sun, 02 Aug 2020 08:50:53 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   _mots, _redirection, _numEngagement, _engagements, _rubrique_alumni_proches, _principale
 */ 

function BOUCLE_motshtml_b44257f57fbe3cae7dd9f662bf6f473f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("L1.id_objet AS id_rubrique");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'mots.titre', "'rubrique_manifeste'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques/rubrique_engagement.html','html_b44257f57fbe3cae7dd9f662bf6f473f','_mots',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'" class="submit btn btn-xxl text-black-50">
					' .
choisir_traduction(array('fr' => 'Lire le manifeste','en' => 'Read the manifesto')) .
'
				</a>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots @ squelettes/inclure/rubriques/rubrique_engagement.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_redirectionhtml_b44257f57fbe3cae7dd9f662bf6f473f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_redirection';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_parent'], '', '')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques/rubrique_engagement.html','html_b44257f57fbe3cae7dd9f662bf6f473f','_redirection',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			' .
BOUCLE_motshtml_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_redirection @ squelettes/inclure/rubriques/rubrique_engagement.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_numEngagementhtml_b44257f57fbe3cae7dd9f662bf6f473f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_numEngagement';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre AS titre_rang",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT 0')), ((isset($Pile[0]['id_rubrique'])?(is_array($Pile[0]['id_rubrique'])?count($Pile[0]['id_rubrique']):strlen($Pile[0]['id_rubrique'])):'') ? '' : 'articles.id_rubrique>0'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques/rubrique_engagement.html','html_b44257f57fbe3cae7dd9f662bf6f473f','_numEngagement',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_numEngagement']['compteur_boucle'] = 0;
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_numEngagement']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<h4 id="paragraph" class="text-black flex-row column-centered engagement-list-item text-justify" style="margin-left: ' .
alterner($Numrows['_numEngagement']['compteur_boucle'],'6vw','10vw') .
'; margin-right: ' .
alterner($Numrows['_numEngagement']['compteur_boucle'],'10vw','6rem') .
';">
					<div class=\'list-number text-yellow\'>
						' .
recuperer_numero($Pile[$SP]['titre_rang']) .
'.
					</div>
					<div class=\'engagements-list primary-font ' .
classe_boucle_crayon('articles','titre',$Pile[$SP]['id_article']).' ' .
'\'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</div>
				</h4>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_numEngagement @ squelettes/inclure/rubriques/rubrique_engagement.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_engagementshtml_b44257f57fbe3cae7dd9f662bf6f473f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_engagements';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
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
		array('squelettes/inclure/rubriques/rubrique_engagement.html','html_b44257f57fbe3cae7dd9f662bf6f473f','_engagements',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<h4 class="flex-row row-centered primary-font text-dark-blue ' .
classe_boucle_crayon('rubriques','titre',$Pile[$SP]['id_rubrique']).' ">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h4>
				' .
BOUCLE_numEngagementhtml_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_engagements @ squelettes/inclure/rubriques/rubrique_engagement.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubrique_alumni_procheshtml_b44257f57fbe3cae7dd9f662bf6f473f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubrique_alumni_proches';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_mots_liens','L2' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'L2.titre', "'rubrique_alumni_proches'"));
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
		array('squelettes/inclure/rubriques/rubrique_engagement.html','html_b44257f57fbe3cae7dd9f662bf6f473f','_rubrique_alumni_proches',29,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'" class="submit btn btn-xxl text-black-50">
						' .
choisir_traduction(array('fr' => 'Voir la liste et la carte des signataires','en' => 'See the map and list of signatures')) .
'
					</a>
				');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubrique_alumni_proches @ squelettes/inclure/rubriques/rubrique_engagement.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_principalehtml_b44257f57fbe3cae7dd9f662bf6f473f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_principale';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_parent",
		"rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/rubriques/rubrique_engagement.html','html_b44257f57fbe3cae7dd9f662bf6f473f','_principale',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	  
	<section class="section-padding-top flex-column column-centered">
		' .
BOUCLE_redirectionhtml_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</section>
	<div class="engagement-list-container section-padding-top">
		' .
BOUCLE_engagementshtml_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</div>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/petition') . ', array_merge('.var_export($Pile[0],1).',array(\'id_article\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/inclure/rubriques/rubrique_engagement.html\',\'html_b44257f57fbe3cae7dd9f662bf6f473f\',\'\',25,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

	<section class="section-padding-bottom flex-column column-centered">
		
				' .
BOUCLE_rubrique_alumni_procheshtml_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			
	</section>

</div>
</section>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_principale @ squelettes/inclure/rubriques/rubrique_engagement.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/rubriques/rubrique_engagement.html
// Temps de compilation total: 7.306 ms
//

function html_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_principalehtml_b44257f57fbe3cae7dd9f662bf6f473f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_b44257f57fbe3cae7dd9f662bf6f473f', $Cache, $page, 'squelettes/inclure/rubriques/rubrique_engagement.html');
}
?>