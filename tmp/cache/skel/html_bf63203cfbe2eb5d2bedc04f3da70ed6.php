<?php

/*
 * Squelette : plugins/auto/scssphp/v2.4.4/prive/bouton/calculer_css.html
 * Date :      Thu, 04 Jun 2020 17:49:54 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/scssphp/v2.4.4/prive/bouton/calculer_css.html
// Temps de compilation total: 0.620 ms
//

function html_bf63203cfbe2eb5d2bedc04f3da70ed6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("minibando", "est_actif")) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(parametre_url(self(),'var_mode','css')))!=='' ?
			('<a href="' . $t2 . (	'" class="spip-admin-boutons" id="scssphp_calculer_css">' .
		_T('scssphp:bouton_calculer_css') .
		'</a>')) :
			'') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_bf63203cfbe2eb5d2bedc04f3da70ed6', $Cache, $page, 'plugins/auto/scssphp/v2.4.4/prive/bouton/calculer_css.html');
}
?>