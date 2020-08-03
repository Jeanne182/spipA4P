<?php

/*
 * Squelette : squelettes/inclure/petition.html
 * Date :      Sun, 02 Aug 2020 08:51:21 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   _signature-message-th, _signature-message-td, _signatures
 */ 

function BOUCLE_signature_message_thhtml_d002c3b734c62dc8f41827e89027de74(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'petitions';
		$command['id'] = '_signature-message-th';
		$command['from'] = array('petitions' => 'spip_petitions');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('petitions.statut','publie,off','publie,off',''), 
			array('=', 'petitions.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('=', 'petitions.message', "'oui'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/petition.html','html_d002c3b734c62dc8f41827e89027de74','_signature-message-th',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:message');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			<th class="signature-message">' .
$l1 .
'</th>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_signature-message-th @ squelettes/inclure/petition.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_signature_message_tdhtml_d002c3b734c62dc8f41827e89027de74(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'petitions';
		$command['id'] = '_signature-message-td';
		$command['from'] = array('petitions' => 'spip_petitions');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('petitions.statut','publie,off','publie,off',''), 
			array('=', 'petitions.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('=', 'petitions.message', "'oui'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/petition.html','html_d002c3b734c62dc8f41827e89027de74','_signature-message-td',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_signature-message-td']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_signature-message-td']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_signature-message-td @ squelettes/inclure/petition.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_signatureshtml_d002c3b734c62dc8f41827e89027de74(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	static $champs__signatures = array('id_signature','id_petition','date_time','nom_email','prenom_email','ad_email','annee_naissance','ecole_alumni','pays_alumni','membre_asso_alumni','linkedin','organisation','fonction_organisation','pays_organisation','id_gis_organisation','autorisation_infos_publiques','nom_site','url_site','message','statut','maj');
	$command['pagination'] = array((isset($Pile[0]['debut_signatures']) ? $Pile[0]['debut_signatures'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10));
	// RECHERCHE
	if (!strlen(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche_signatures', null),true)))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche_signatures', null),true)), "signatures", "?","",array (
  'lien' => true,
  'debut_nom' => '\'_signatures\'',
),"id_signature");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'signatures';
		$command['id'] = '_signatures';
		$command['from'] = array('signatures' => 'spip_signatures','L1' => 'spip_petitions','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array('L1' => array('signatures','id_petition'), 'resultats' => array('signatures','id','id_signature'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("signatures.id_signature",
		"$rech_select",
		"rand() AS hasard",
		"signatures.date_time AS date",
		"signatures.nom_email AS nom",
		"signatures.url_site",
		"signatures.nom_site",
		"signatures.message");
	$command['orderby'] = array((($x = preg_replace("/\W/",'', interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri', null),true)))) ? (in_array($x, $champs__signatures)  ? ('signatures.' . $x . ' DESC') :($x . ' DESC')) : ''), (($x = preg_replace("/\W/",'', interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_inverse', null),true)))) ? (in_array($x, $champs__signatures)  ? ('signatures.' . $x) :($x)) : ''), (($x = preg_replace("/\W/",'', interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'tri', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'tri_inverse', null),true))),true) ? '':'date_time')))) ? (in_array($x, $champs__signatures)  ? ('signatures.' . $x . ' DESC') :($x . ' DESC')) : ''));
	$command['where'] = 
			array(
quete_condition_statut('signatures.statut','publie','publie',''), 
			array('=', 'L1.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT 0')), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/petition.html','html_d002c3b734c62dc8f41827e89027de74','_signatures',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_signatures']['compteur_boucle'] = 0;
	$Numrows['_signatures']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_signatures']) ? $Pile[0]['debut_signatures'] : _request('debut_signatures');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_signatures'] = quete_debut_pagination('id_signature',$Pile[0]['@id_signature'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_signatures']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_signatures']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10) - 1), $Numrows['_signatures']['total'] - 1);
	$Numrows['_signatures']['grand_total'] = $Numrows['_signatures']['total'];
	$Numrows['_signatures']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_signatures']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_signatures']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:site_web');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_signatures']['compteur_boucle']++;
		if ($Numrows['_signatures']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_signatures']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr' .
(($t1 = strval(alterner($Numrows['_signatures']['compteur_boucle'],'odd','even')))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
' id=\'id_signature' .
$Pile[$SP]['id_signature'] .
'\'>
			<td class="signature-date"><small>' .
interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
'</small></td>
			<td class="signature-nom"><strong class="' .
classe_boucle_crayon('signatures','qui',$Pile[$SP]['id_signature']).' ">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</strong>' .
(($t1 = strval(liens_nofollow(safehtml(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))))!=='' ?
		((	' <small class="' .
	classe_boucle_crayon('signatures','hyperlien',$Pile[$SP]['id_signature']).' "><a href="') . $t1 . (	'"' .
	(($t2 = strval(interdire_scripts(couper(attribut_html(liens_nofollow(safehtml(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false))))),'80'))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	' class="spip_out">' .
	$l1 .
	'</a></small>')) :
		'') .
'</td>
			
			' .
(($t1 = BOUCLE_signature_message_tdhtml_d002c3b734c62dc8f41827e89027de74($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
			<td class="signature-message ' .
		classe_boucle_crayon('signatures','message',$Pile[$SP]['id_signature']).' ">' .
		interdire_scripts(PtoBR(liens_nofollow(safehtml($Pile[$SP]['message'])))) .
		'</td>
			')) :
		'') .
'
		</tr>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_signatures @ squelettes/inclure/petition.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/petition.html
// Temps de compilation total: 29.905 ms
//

function html_d002c3b734c62dc8f41827e89027de74($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
executer_balise_dynamique('FORMULAIRE_SIGNATURE',
	array(@$Pile[0]['id_article'],quete_petitions(@$Pile[0]['id_article'],'','','', $Cache)),
	array('squelettes/inclure/petition.html','html_d002c3b734c62dc8f41827e89027de74','',2,$GLOBALS['spip_lang'])) .
'




<!-- ' .
(($t1 = BOUCLE_signatureshtml_d002c3b734c62dc8f41827e89027de74($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<form method=\'get\' action=\'' .
		self() .
		'\'>
<div id="signatures">' .
		form_hidden(self()) .
		'
	' .
		filtre_pagination_dist($Numrows["_signatures"]["grand_total"],
 		'_signatures',
		isset($Pile[0]['debut_signatures'])?$Pile[0]['debut_signatures']:intval(_request('debut_signatures')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10), false, '', '', array()) .
		'
	<h2 class="offscreen">' .
		_T('public|spip|ecrire:signatures_petition') .
		'</h2>
	<table summary="' .
		_T('public|spip|ecrire:signatures_petition') .
		'" class="spip">
	<caption>' .
		(isset($Numrows['_signatures']['grand_total'])
			? $Numrows['_signatures']['grand_total'] : $Numrows['_signatures']['total']) .
		' ' .
		_T('public|spip|ecrire:signatures_petition') .
		'</caption>
		<thead>
			<th class="signature-date"><a href=\'' .
		parametre_url(parametre_url(self(),'tri','date_time'),'tri_inverse','') .
		'#signatures\' title="' .
		_T('public|spip|ecrire:lien_trier_date') .
		'">' .
		_T('public|spip|ecrire:date') .
		'</a></th>
			<th class="signature-nom"><a href=\'' .
		parametre_url(parametre_url(self(),'tri','nom_email'),'tri_inverse','') .
		'#signatures\' title="' .
		_T('public|spip|ecrire:lien_trier_nom') .
		'">' .
		_T('public|spip|ecrire:nom') .
		'</a></th>
			
			' .
		BOUCLE_signature_message_thhtml_d002c3b734c62dc8f41827e89027de74($Cache, $Pile, $doublons, $Numrows, $SP) .
		'
		</thead>
		') . $t1 . (	'
	</table>
	' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_signatures"]["grand_total"],
 		'_signatures',
		isset($Pile[0]['debut_signatures'])?$Pile[0]['debut_signatures']:intval(_request('debut_signatures')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'pagination', null), '20'),true)))) ? $a : 10), true, '', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
	
	' .
		(($t3 = strval(interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'recherche_signatures', null),true) ? '31':(isset($Numrows['_signatures']['grand_total'])
			? $Numrows['_signatures']['grand_total'] : $Numrows['_signatures']['total'])) > '50')) ?' ' :''))))!=='' ?
				($t3 . (	'
	<div class="formulaire_spip formulaire_recherche" id="formulaire_recherche_signatures"><label for="recherche_signatures">' .
			_T('petitions:signatures_recherche_label') .
			'</label> <input type="text" class="text" size="10" name="recherche_signatures" id="recherche_signatures" value=""/> <input type="submit" class="submit" value="' .
			_T('public|spip|ecrire:info_rechercher') .
			'" /></div>
	')) :
				'') .
		'
</div>
</form>
')) :
		'') .
' -->');

	return analyse_resultat_skel('html_d002c3b734c62dc8f41827e89027de74', $Cache, $page, 'squelettes/inclure/petition.html');
}
?>