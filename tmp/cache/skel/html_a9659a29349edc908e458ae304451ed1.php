<?php

/*
 * Squelette : plugins/auto/saisies/v3.41.0/saisies/hidden.html
 * Date :      Sat, 13 Jun 2020 08:52:18 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/saisies/v3.41.0/saisies/hidden.html
// Temps de compilation total: 5.048 ms
//

function html_a9659a29349edc908e458ae304451ed1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
' class="editer editer_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'conteneur_class', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))),true))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(saisie_type2classe(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true)))))!=='' ?
		(' ' . $t1) :
		'') .
'" ' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_afficher', null),true) != 'oui') ? 'style="display:none;"':'')) .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_saisie', null),true))))!=='' ?
		(' data-id="' . $t1 . '"') :
		'') .
'>
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_debut', null)) .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'tout_afficher', null),true) != 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))), null),true))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
	<input type="hidden"' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	' name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'" id="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
	'" value="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true)) .
	'"' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'attributs', null))))!=='' ?
			(' ' . $t2) :
			'') .
	' />
	')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'tout_afficher', null),true) != 'oui')) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'label', null))))!=='' ?
			((	'<label for="champ_' .
		interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
		'">') . $t2 . (	(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'obligatoire', null),true)) ?' ' :''))))!=='' ?
				('<span class=\'obligatoire\'>' . $t3 . (	interdire_scripts((is_null(table_valeur(@$Pile[0], (string)'info_obligatoire', null)) ? _T('public|spip|ecrire:info_obligatoire_02'):interdire_scripts(table_valeur(@$Pile[0], (string)'info_obligatoire', null)))) .
			'</span>')) :
				'') .
		'</label>')) :
			'') .
	'
	' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))), null),true))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
	<input type="text"' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	' name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'" id="champ_' .
	interdire_scripts(saisie_nom2classe(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))) .
	'" value="' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur_forcee', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'valeur', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'defaut', null),true))),true))),true)) .
	'" readonly="readonly" />
	')) :
		'') .
'
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_fin', null)) .
'</' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'saisies_base_conteneur', null), ((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li')),true)) .
'>
');

	return analyse_resultat_skel('html_a9659a29349edc908e458ae304451ed1', $Cache, $page, 'plugins/auto/saisies/v3.41.0/saisies/hidden.html');
}
?>