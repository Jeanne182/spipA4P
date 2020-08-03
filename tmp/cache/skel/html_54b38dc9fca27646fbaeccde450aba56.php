<?php

/*
 * Squelette : squelettes/inclure/formulaire_localisation.html
 * Date :      Sun, 02 Aug 2020 08:56:32 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/formulaire_localisation.html
// Temps de compilation total: 6.108 ms
//

function html_54b38dc9fca27646fbaeccde450aba56($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
		
' .
((@$Pile[0]['id_gis'])  ?
		(' ' . (	'
' .
	invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'gis', invalideur_session($Cache, @$Pile[0]['id_gis']))?" ":"")) .
	'
')) :
		'') .
(!(@$Pile[0]['id_gis'])  ?
		(' ' . (	'
' .
	invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'gis', invalideur_session($Cache, @$Pile[0]['id_gis']), '', '', invalideur_session($Cache, array('associer_objet' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true))))))?" ":"")) .
	'
')) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'redirect', null), interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_gis', null),true) ? generer_url_ecrire('gis',(	'id_gis=' .
				@$Pile[0]['id_gis'])):generer_url_ecrire('gis_tous')))),true))) .
vide($Pile['vars'][$_zzz=(string)'objet'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'objet', null), ''),true))) .
vide($Pile['vars'][$_zzz=(string)'id_objet'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_objet', null), '0'),true))) .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'array_objet'] = interdire_scripts(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true),'|'))) .
	'
' .
	vide($Pile['vars'][$_zzz=(string)'objet'] = table_valeur(table_valeur($Pile["vars"], (string)'array_objet', null),'0')) .
	vide($Pile['vars'][$_zzz=(string)'id_objet'] = table_valeur(table_valeur($Pile["vars"], (string)'array_objet', null),'1')))) :
		'') .
'
<div class=\'cadre-formulaire-editer\'>
<div class="entete-formulaire">
' .
((@$Pile[0]['id_gis'])  ?
		(' ' . (	'
' .
	filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'redirect', null),_T('public|spip|ecrire:icone_retour'),'gis','',(	'left retour' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
				($t3 . 'ajax preload') :
				''))) .
	'
')) :
		'') .
'

</div>

' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'redirect', null), generer_url_entite(@$Pile[0]['id_gis'],'gis')),true))) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . '

<div class="ajax">
') :
		'') .
'
    ' .
executer_balise_dynamique('FORMULAIRE_EDITER_GIS',
	array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_gis', null), 'oui'),true)),table_valeur($Pile["vars"], (string)'objet', null),table_valeur($Pile["vars"], (string)'id_objet', null),'',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true))),
	array('squelettes/inclure/formulaire_localisation.html','html_54b38dc9fca27646fbaeccde450aba56','',15,$GLOBALS['spip_lang'])) .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . '
</div>

') :
		''));

	return analyse_resultat_skel('html_54b38dc9fca27646fbaeccde450aba56', $Cache, $page, 'squelettes/inclure/formulaire_localisation.html');
}
?>