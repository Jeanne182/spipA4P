<?php

/*
 * Squelette : plugins/auto/crayons/v2.0.13/crayons.js.html
 * Date :      Thu, 11 Jun 2020 09:59:04 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/crayons/v2.0.13/crayons.js.html
// Temps de compilation total: 1.824 ms
//

function html_dc9e6e24bc5d82c83e9f4234f3d20dca($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header(' . _q('Content-Type: text/javascript') . '); ?'.'>' .
(table_valeur(@$Pile[0], (string)'debug_crayons', null) ? '<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>':'<'.'?php header("X-Spip-Cache: 604800"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=604800"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
'

/* cQuery est jQuery, renommee pour eviter tout conflit */

' .
pack_cQuery(find_in_path('js/jquery.js')) .
'

cQuery.noConflict();

' .
pack_cQuery(find_in_path('js/jquery.form.js')) .
'

' .
pack_cQuery(find_in_path('js/crayons.js')) .
'

' .
pack_cQuery(find_in_path('js/resizehandle.js')) .
'

' .
pack_cQuery(find_in_path('js/jquery.html5uploader.js')) .
'

' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'callback', null),true)) AND (interdire_scripts(((match(entites_html(table_valeur(@$Pile[0], (string)'callback', null),true),'\\W')) ?'' :' ')))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'callback', null),true))))!=='' ?
			($t2 . '();') :
			''))) :
		'') .
'
');

	return analyse_resultat_skel('html_dc9e6e24bc5d82c83e9f4234f3d20dca', $Cache, $page, 'plugins/auto/crayons/v2.0.13/crayons.js.html');
}
?>