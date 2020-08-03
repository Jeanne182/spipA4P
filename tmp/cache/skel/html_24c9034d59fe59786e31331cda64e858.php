<?php

/*
 * Squelette : plugins/gis/formulaires/editer_gis.html
 * Date :      Mon, 03 Aug 2020 09:58:40 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/gis/formulaires/editer_gis.html
// Temps de compilation total: 7.314 ms
//

function html_24c9034d59fe59786e31331cda64e858($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
'<div class="flex-column mb-lg-4">
	<div class=\'form-group controls flex-row pb-2\'>
		<strong class="l-h-25 text-dark-blue">Ville de l\'entreprise :</strong>
		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'ville', null)) ,
	'nom' => 'ville' ,
	'class' => 'form-control disable' ,
	'defaut' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ville', null),true)) ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',6,$GLOBALS['spip_lang'])), _request('connect')) .
'					
		</div>



	<div class=\'form-group flex-row controls pb-2\'>
		<strong class="l-h-25 text-dark-blue">Pays de l\'entreprise :</strong>
		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'input' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'pays', null)) ,
	'nom' => 'pays' ,
	'class' => 'form-control' ,
	'defaut' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'pays', null),true)) ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',8,$GLOBALS['spip_lang'])), _request('connect')) .
'
	</div>

</div>

<fieldset>
	' .
recuperer_fond( 'saisies/_base' , array_merge($Pile[0],array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'carte' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)(	'editer_gis_' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_gis', null),true))), null)) ,
	'nom' => (	'editer_gis_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_gis', null),true))) ,
	'zoom' => '2' ,
	'autocenterandzoom ' => ' oui' )), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',7,$GLOBALS['spip_lang'])), _request('connect')) .
'
</fieldset>
			
			
<fieldset>
	
		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'hidden' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'lat', null)) ,
	'nom' => 'lat' ,
	'label' => _T('gis:lat') ,
	'defaut' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lat', null), interdire_scripts((include_spip('inc/config')?lire_config('gis/lat','0',false):''))),true)) ,
	'obligatoire' => 'oui' ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',7,$GLOBALS['spip_lang'])), _request('connect')) .
'
		
		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'hidden' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'lon', null)) ,
	'nom' => 'lon' ,
	'label' => _T('gis:lon') ,
	'defaut' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lon', null), interdire_scripts((include_spip('inc/config')?lire_config('gis/lon','0',false):''))),true)) ,
	'obligatoire' => 'oui' ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',3,$GLOBALS['spip_lang'])), _request('connect')) .
'

		
		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'hidden' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'region', null)) ,
	'nom' => 'region' ,
	'label' => _T('gis:label_region') ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',4,$GLOBALS['spip_lang'])), _request('connect')) .
'
		
			
		
		
			
		
		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'hidden' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'zoom', null)) ,
	'nom' => 'zoom' ,
	'label' => _T('gis:zoom') ,
	'defaut' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'zoom', null), interdire_scripts((include_spip('inc/config')?lire_config('gis/zoom','0',false):''))),true)) ,
	'size' => '2' ,
	'maxlength' => '2' ,
	'obligatoire' => 'oui' ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',8,$GLOBALS['spip_lang'])), _request('connect')) .
'

		' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'hidden' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'titre', null)) ,
	'nom' => 'titre' ,
	'label' => _T('public|spip|ecrire:info_titre') ,
	'obligatoire' => 'oui' ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',3,$GLOBALS['spip_lang'])), _request('connect')) .
'
	
	' .
recuperer_fond( 'saisies/_base' , array('erreurs' => @$Pile[0]['erreurs'] ,
	'type_saisie' => 'hidden' ,
	'valeur' => interdire_scripts(table_valeur(@$Pile[0], (string)'descriptif', null)) ,
	'nom' => 'descriptif' ,
	'label' => _T('public|spip|ecrire:info_descriptif') ,
	'rows' => '5' ), array('compil'=>array('plugins/gis/formulaires/editer_gis.html','html_24c9034d59fe59786e31331cda64e858','',3,$GLOBALS['spip_lang'])), _request('connect')) .
'
	
</fieldset>
			
			
		
		
		

');

	return analyse_resultat_skel('html_24c9034d59fe59786e31331cda64e858', $Cache, $page, 'plugins/gis/formulaires/editer_gis.html');
}
?>