<?php

/*
 * Squelette : squelettes/rubrique.html
 * Date :      Sun, 02 Aug 2020 08:48:58 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:47 GMT
 * Boucles :   _test_manifeste, _test_engagement, _test_engagements_pris, _test_alumni_proches, _mots, _principale
 */ 

function BOUCLE_test_manifestehtml_fd07a7f89574eb4a2d63dcebc36b35f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]) == 'rubrique_manifeste'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_manifeste';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('squelettes/rubrique.html','html_fd07a7f89574eb4a2d63dcebc36b35f2','_test_manifeste',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/rubriques/rubrique_manifeste') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP-2]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',26,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_test_manifeste @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_test_engagementhtml_fd07a7f89574eb4a2d63dcebc36b35f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]) == 'rubrique_engagement'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_engagement';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('squelettes/rubrique.html','html_fd07a7f89574eb4a2d63dcebc36b35f2','_test_engagement',29,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/rubriques/rubrique_engagement') . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP-2]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',30,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_test_engagement @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_test_engagements_prishtml_fd07a7f89574eb4a2d63dcebc36b35f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]) == 'rubrique_engagements_pris'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_engagements_pris';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('squelettes/rubrique.html','html_fd07a7f89574eb4a2d63dcebc36b35f2','_test_engagements_pris',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/rubriques/rubrique_engagements_pris') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP-2]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',34,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_test_engagements_pris @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_test_alumni_procheshtml_fd07a7f89574eb4a2d63dcebc36b35f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]) == 'rubrique_alumni_proches'));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_test_alumni_proches';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
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
		"CONDITION",
		$command,
		array('squelettes/rubrique.html','html_fd07a7f89574eb4a2d63dcebc36b35f2','_test_alumni_proches',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/rubriques/rubrique_alumni_proches') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP-2]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',38,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_test_alumni_proches @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_motshtml_fd07a7f89574eb4a2d63dcebc36b35f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'rubrique_manifeste';
	$in[]= 'rubrique_engagement';
	$in[]= 'rubrique_engagements_pris';
	$in[]= 'rubrique_alumni_proches';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre");
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in) OR sql_quote($in)==="''") ? 0 : ('FIELD(mots.titre,' . sql_quote($in) . ')')));
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('rubrique')), sql_in('mots.titre',sql_quote($in)));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/rubrique.html','html_fd07a7f89574eb4a2d63dcebc36b35f2','_mots',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'

		' .
BOUCLE_test_manifestehtml_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		' .
BOUCLE_test_engagementhtml_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		' .
BOUCLE_test_engagements_prishtml_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		' .
BOUCLE_test_alumni_procheshtml_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'


	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_principalehtml_fd07a7f89574eb4a2d63dcebc36b35f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_principale';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre",
		"rubriques.texte",
		"rubriques.descriptif");
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
		array('squelettes/rubrique.html','html_fd07a7f89574eb4a2d63dcebc36b35f2','_principale',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
	<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
	<title>' .
(($t1 = strval(interdire_scripts(textebrut(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')))))!=='' ?
		($t1 . ' - ') :
		'') .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
	' .
(($t1 = strval(interdire_scripts(attribut_html(filtre_introduction($Pile[$SP]['descriptif'], $Pile[$SP]['texte'], is_numeric('150')?intval('150'):600, $connect, !is_numeric('150')?'150':null)))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
	' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite(@$Pile[0]['id_article'], 'article', '', '', true))))))!=='' ?
		('<link rel="canonical" href="' . $t1 . '" />') :
		'') .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',14,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</head>

<body id="page-top">

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header-rubrique') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',19,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>


	' .
(($t1 = BOUCLE_motshtml_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/rubriques/rubrique_basique') . ', array(\'id_rubrique\' => ' . argumenter_squelette($Pile[$SP]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',43,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	'))) .
'


	<!-- SPIP -->
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/rubrique.html\',\'html_fd07a7f89574eb4a2d63dcebc36b35f2\',\'\',48,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

	<!-- Bootstrap core JS-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!-- Core theme JS-->
	' .
(($t1 = strval(find_in_path('js/scripts.js')))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'

</body>
</html>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_principale @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/rubrique.html
// Temps de compilation total: 20.793 ms
//

function html_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_principalehtml_fd07a7f89574eb4a2d63dcebc36b35f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_fd07a7f89574eb4a2d63dcebc36b35f2', $Cache, $page, 'squelettes/rubrique.html');
}
?>