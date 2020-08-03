<?php

/*
 * Squelette : plugins/gis/javascript/gis.js.html
 * Date :      Tue, 09 Jun 2020 08:07:54 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/gis/javascript/gis.js.html
// Temps de compilation total: 7.429 ms
//

function html_2c4db9a8866cbdb5e22be15cac8ce33f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-type:text/javascript') . '); ?'.'>' .
charge_scripts('lib/leaflet/dist/leaflet-src.js',false) .
'
' .
vide($Pile['vars'][$_zzz=(string)'plugins_desactives'] = interdire_scripts((include_spip('inc/config')?lire_config('gis/plugins_desactives',array(),false):''))) .
'
' .
(($t1 = strval(url_absolue(find_in_path('lib/leaflet/dist/images/'))))!=='' ?
		('L.Icon.Default.imagePath = \'' . $t1 . '\';') :
		'') .
'

(function() {

L.gisConfig = {
	\'gis_layers\': ' .
interdire_scripts(eval('return '.'json_encode($GLOBALS[\'gis_layers\'])'.';')) .
',
	\'default_layer\': \'' .
gis_layer_defaut('') .
'\',
	\'affiche_layers\': ' .
interdire_scripts(json_encode((include_spip('inc/config')?lire_config('gis/layers',array(),false):''))) .
'
};

L.geocoderConfig = {
	\'forwardUrl\': \'' .
html_entity_decode(generer_url_action('gis_geocoder_rechercher','mode=search')) .
'\',
	\'reverseUrl\': \'' .
html_entity_decode(generer_url_action('gis_geocoder_rechercher','mode=reverse')) .
'\'
};

})();

' .
charge_scripts('javascript/gis_geocoder.js',false) .
'

' .
charge_scripts('javascript/gis_utils.js',false) .
'

' .
(!(in_array('KML.js',sinon(table_valeur($Pile["vars"], (string)'plugins_desactives', null), array())))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/KML.js',false))) :
		'') .
'
' .
(!(in_array('GPX.js',sinon(table_valeur($Pile["vars"], (string)'plugins_desactives', null), array())))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/GPX.js',false))) :
		'') .
'
' .
(!(in_array('TOPOJSON.js',sinon(table_valeur($Pile["vars"], (string)'plugins_desactives', null), array())))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/TOPOJSON.js',false))) :
		'') .
'

' .
charge_scripts('lib/leaflet/plugins/leaflet-providers.js',false) .
'
' .
(!(in_array('Control.FullScreen.js',sinon(table_valeur($Pile["vars"], (string)'plugins_desactives', null), array())))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/Control.FullScreen.js',false))) :
		'') .
'

' .
(!(in_array('Control.MiniMap.js',sinon(table_valeur($Pile["vars"], (string)'plugins_desactives', null), array())))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/Control.MiniMap.js',false))) :
		'') .
'



' .
vide($Pile['vars'][$_zzz=(string)'layers'] = interdire_scripts((include_spip('inc/config')?lire_config('gis/layers',array('0' => 'openstreetmap_mapnik'),false):''))) .
(!(in_array(gis_layer_defaut(''),table_valeur($Pile["vars"], (string)'layers', null)))  ?
		(' ' . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'layers'] = filtre_push(table_valeur($Pile["vars"], (string)'layers', null),gis_layer_defaut(''))))) :
		'') .
'

' .
(((count(array_intersect(array('google_roadmap', 'google_satellite', 'google_terrain'),table_valeur($Pile["vars"], (string)'layers', null))) > '0'))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/Leaflet.GoogleMutant.js',false) .
	'
')) :
		'') .
'

' .
((in_array('bing_aerial',table_valeur($Pile["vars"], (string)'layers', null)))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/Bing.js',false) .
	'
')) :
		'') .
'
' .
(!(in_array('leaflet.markercluster-src.js',sinon(table_valeur($Pile["vars"], (string)'plugins_desactives', null), array())))  ?
		(' ' . (	'
' .
	charge_scripts('lib/leaflet/plugins/leaflet.markercluster-src.js',false))) :
		'') .
'

' .
charge_scripts('javascript/leaflet.gis.js',false) .
'

' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('auto_compress_js',null,false):'') == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'
// gis.js
' .
	'<' . '?php header("X-Spip-Filtre: '.'trim|compacte' . '"); ?'.'>')) :
		''));

	return analyse_resultat_skel('html_2c4db9a8866cbdb5e22be15cac8ce33f', $Cache, $page, 'plugins/gis/javascript/gis.js.html');
}
?>