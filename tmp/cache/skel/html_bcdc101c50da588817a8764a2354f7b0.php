<?php

/*
 * Squelette : squelettes/formulaires/administration.html
 * Date :      Thu, 30 Jul 2020 08:10:21 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/formulaires/administration.html
// Temps de compilation total: 2.632 ms
//

function html_bcdc101c50da588817a8764a2354f7b0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
' <div' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'divclass', null), 'spip-admin-bloc'),true))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
' id=\'spip-admin\' dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'">' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'analyser', null),true))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="analyser">' .
	_T('public|spip|ecrire:analyse_xml') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'xhtml_error', null),true))))!=='' ?
			(' (' . $t2 . ')') :
			'') .
	'</a>')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true))))!=='' ?
			((	'<a href="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'voir_' .
			interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true))), null),true)) .
		'" class="spip-admin-boutons"
		id="voir_' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) .
		'">' .
		interdire_scripts(_T(objet_info(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true),'texte_objet'))) .
		'
			(') . $t2 . ')</a>') :
			'') .
	'
	')) :
		'') .
'<!--extra-->' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ecrire', null),true))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="ecrire">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
'
	<a href="' .
parametre_url(self(),'var_mode',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'calcul', null),true))) .
'" class="spip-admin-boutons"
		id="var_mode">' .
_T('public|spip|ecrire:admin_recalculer') .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'use_cache', null),true)) .
'</a>' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'preview', null),true))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="preview">' .
	_T('public|spip|ecrire:previsualisation') .
	'</a>')) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'debug', null),true))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="debug">' .
	_T('public|spip|ecrire:admin_debug') .
	'</a>')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_bcdc101c50da588817a8764a2354f7b0', $Cache, $page, 'squelettes/formulaires/administration.html');
}
?>