<?php

/*
 * Squelette : plugins/gis/saisies/carte.html
 * Date :      Mon, 03 Aug 2020 10:04:01 GMT
 * Compile :   Mon, 03 Aug 2020 10:04:02 GMT
 * Boucles :   _layers
 */ 

function BOUCLE_layershtml_117b0f0185304a2a0f9704313b309458(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'layers', null));

	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((((((((((entites_html(sinon(table_valeur(@$Pile[0], (string)'control_type', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'controle_type', null),true))),true) != 'non')) AND (interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'no_control', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'aucun_controle', null),true))),true) != 'oui')))) ?' ' :'')) AND (interdire_scripts((((count((include_spip('inc/config')?lire_config('gis/layers',array(),false):'')) > '1')) ?' ' :'')))) ?' ' :'')) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_layers';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		"DATA",
		$command,
		array('plugins/gis/saisies/carte.html','html_117b0f0185304a2a0f9704313b309458','_layers',131,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(interdire_scripts(((((((((safehtml($Pile[$SP]['cle']) != table_valeur($Pile["vars"], (string)'layer_defaut', null))) ?' ' :'')) AND (interdire_scripts(((in_array(safehtml($Pile[$SP]['cle']),interdire_scripts((include_spip('inc/config')?lire_config('gis/layers',array(),false):'')))) ?' ' :'')))) ?' ' :'')) ?' ' :''))))!=='' ?
		('
		' . $t1 . (	'
		layers_control.addBaseLayer(' .
	(($t2 = strval(interdire_scripts(table_valeur(safehtml($Pile[$SP]['valeur']),'layer'))))!=='' ?
			('new ' . $t2) :
			'') .
	',"' .
	interdire_scripts(table_valeur(safehtml($Pile[$SP]['valeur']),'nom')) .
	'");')) :
		'') .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_layers @ plugins/gis/saisies/carte.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/gis/saisies/carte.html
// Temps de compilation total: 19.912 ms
//

function html_117b0f0185304a2a0f9704313b309458($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][$_zzz=(string)'init_lat'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lat', null), interdire_scripts((include_spip('inc/config')?lire_config('gis/lat','0',false):''))),true))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'init_lon'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lon', null), interdire_scripts((include_spip('inc/config')?lire_config('gis/lon','0',false):''))),true))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'init_zoom'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'zoom', null), interdire_scripts((include_spip('inc/config')?lire_config('gis/zoom','0',false):''))),true))) .
'

' .
(($t1 = strval(interdire_scripts((((((((((((((((((entites_html(table_valeur(@$Pile[0], (string)'lat', null),true)) OR (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lon', null),true)))) ?' ' :'')) ?'' :' ')) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'sw_lat', null),true)))) ?' ' :'')) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'sw_lon', null),true)))) ?' ' :'')) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ne_lat', null),true)))) ?' ' :'')) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ne_lon', null),true)))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'utiliser_bb'] = 'oui') .
	vide($Pile['vars'][$_zzz=(string)'init_sw_lat'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'sw_lat', null), moins(table_valeur($Pile["vars"], (string)'lat', null),'10')),true))) .
	vide($Pile['vars'][$_zzz=(string)'init_sw_lon'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'sw_lon', null), moins(table_valeur($Pile["vars"], (string)'lon', null),'10')),true))) .
	vide($Pile['vars'][$_zzz=(string)'init_ne_lat'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ne_lat', null), plus(table_valeur($Pile["vars"], (string)'lat', null),'10')),true))) .
	vide($Pile['vars'][$_zzz=(string)'init_ne_lon'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'ne_lon', null), plus(table_valeur($Pile["vars"], (string)'lon', null),'10')),true))))) :
		'') .
'

<' .
((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li') .
' class="pleine_largeur editer editer_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))))!=='' ?
		(' saisie_' . $t1) :
		'') .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_saisie', null),true))))!=='' ?
		(' data-id="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts(saisies_afficher_si_js(table_valeur(@$Pile[0], (string)'afficher_si', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_saisies', null),true))))))!=='' ?
		(' data-afficher_si="' . $t1 . '"') :
		'') .
' >
' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_debut', null)) .
'<' .
((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li') .
' class="rechercher_adresse flex-row editer editer_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'">
	<label for="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'_geocoder" class="primary-font text-dark-blue mt-5">' .
_T('gis:label_rechercher_address') .
'</label>
	<input type="text" class="text" name="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'_geocoder" id="champ_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'_geocoder" placeholder="' .
attribut_html(_T('gis:placeholder_geocoder')) .
'" value="" />	
	<a class="btn btn-primary btn-xl mt-4 text-white" id="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'_rechercher_geocodage">' .
_T('public|spip|ecrire:info_rechercher') .
'</a>
</' .
((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li') .
'>
<div id="map_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'" name="formMap" class="formMap" style="width: ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'largeur', null), '100%'),true)) .
'; height: ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'hauteur', null), '50vh'),true)) .
'; min-height: ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'hauteur_min', null), '350px'),true)) .
';"></div>

<script type="text/javascript">
/*<![CDATA[*/
var form_map,
	annuler_geocoder = 0;
' .
(($t1 = strval(interdire_scripts(((((((entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true) != 'non')) ?' ' :'')) AND (interdire_scripts((((include_spip('inc/config')?lire_config('gis/geocoder',null,false):'')) ?' ' :'')))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][$_zzz=(string)'geocoder'] = 'oui') .
	'
var geocoder;')) :
		'') .
'

(function($){
	var marker;

	var maj_inputs = function(map,data,action) {
		' .
((table_valeur($Pile["vars"], (string)'geocoder', null))  ?
		(' ' . '
		if (action != \'geocoding\') {
			var f = geocoder.geocode(data);
		}') :
		'') .
'
		var zoom = map.getZoom();
		if (data.lng <= -180) {
			data.lng = data.lng+360;
		} else if (data.lng > 180) {
			data.lng = data.lng-360;
		}
		$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_zoom', null), 'zoom'),true)) .
'\').val(zoom);
		if (action == \'click\') {
			$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lat', null), 'lat'),true)) .
'\').val(data.lat);
			$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lon', null), 'lon'),true)) .
'\').val(data.lng);
			annuler_geocoder = 1;
			form_map.panTo(data);
			marker.setLatLng(data);
		}
		else if (annuler_geocoder != 1) {
			if (data.point == \'undefined\') {
				$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lat', null), 'lat'),true)) .
'\').val(data.lat);
				$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lon', null), 'lon'),true)) .
'\').val(data.lng);
				form_map.panTo(data);
				marker.setLatLng(data);
			} else {
				$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lat', null), 'lat'),true)) .
'\').val(data.point.lat);
				$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lon', null), 'lon'),true)) .
'\').val(data.point.lng);
				form_map.panTo(data.point);
				marker.setLatLng(data.point);
			}
		}
		if (!marker._map) {
			form_map.addLayer(marker);
		}
	}

	' .
((table_valeur($Pile["vars"], (string)'geocoder', null))  ?
		(' ' . (	'
	function geocode(query) {
		if (! query.error) {
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_adresse', null), 'adresse'),true)) .
	'\').val(query.street).change();
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_code_postal', null), 'code_postal'),true)) .
	'\').val(query.postcode).change();
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_ville', null), 'ville'),true)) .
	'\').val(query.locality).change();
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_departement', null), 'departement'),true)) .
	'\').val(query.departement).change();
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_region', null), 'region'),true)) .
	'\').val(query.region).change();
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_pays', null), 'pays'),true)) .
	'\').val(query.country).change();
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_code_pays', null), 'code_pays'),true)) .
	'\').val(query.country_code).change();
			maj_inputs(form_map,query,\'geocoding\');
		} else {
			alert(\'' .
	_T('gis:erreur_geocoder') .
	' \'+query.search);
		}
	}')) :
		'') .
'

	var init_map = function(callback) {
		// creer la carte
		var map_container = \'map_' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
'\';
		form_map = new L.Map(map_container);

		// affecter sur l\'objet du DOM
		jQuery("#"+map_container).get(0).map=form_map;

		// appeler l\'éventuelle fonction de callback
		if (callback && typeof(callback) === "function") {
			form_map.on(\'load\',function(e){
				callback(e.target);
			});
		}

		form_map.attributionControl.setPrefix(\'\');

		marker = new L.Marker(new L.LatLng(' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lat', null), '0'),true)) .
', ' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'lon', null), '0'),true)) .
'), {draggable: true});

		//default layer
		' .
vide($Pile['vars'][$_zzz=(string)'layer_defaut'] = gis_layer_defaut('')) .
vide($Pile['vars'][$_zzz=(string)'layers'] = interdire_scripts(eval('return '.'$GLOBALS[\'gis_layers\']'.';'))) .
'var ' .
table_valeur($Pile["vars"], (string)'layer_defaut', null) .
' = ' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'layers', null),(	table_valeur($Pile["vars"], (string)'layer_defaut', null) .
	'/layer'))))!=='' ?
		('new ' . $t1) :
		'') .
';
		form_map.addLayer(' .
table_valeur($Pile["vars"], (string)'layer_defaut', null) .
');

		' .
(($t1 = BOUCLE_layershtml_117b0f0185304a2a0f9704313b309458($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		var layers_control = new L.Control.Layers();
		layers_control.addBaseLayer(' .
		table_valeur($Pile["vars"], (string)'layer_defaut', null) .
		',' .
		(($t3 = strval(table_valeur(table_valeur($Pile["vars"], (string)'layers', null),(	table_valeur($Pile["vars"], (string)'layer_defaut', null) .
			'/nom'))))!=='' ?
				('"' . $t3 . '"') :
				'') .
		');
		') . $t1 . '
		form_map.addControl(layers_control);
		// ajouter l\'objet du controle de layers à la carte pour permettre d\'y accéder depuis le callback
		form_map.layersControl = layers_control;
		// classe noajax sur le layer_control pour éviter l\'ajout de hidden par SPIP
		$(layers_control._form).addClass(\'noajax\');
		') :
		'') .
'

		' .
(!(table_valeur($Pile["vars"], (string)'utiliser_bb', null))  ?
		(' ' . (	'
		form_map.setView(new L.LatLng(' .
	table_valeur($Pile["vars"], (string)'init_lat', null) .
	', ' .
	table_valeur($Pile["vars"], (string)'init_lon', null) .
	'), ' .
	table_valeur($Pile["vars"], (string)'init_zoom', null) .
	');
		')) :
		'') .
'
		' .
((table_valeur($Pile["vars"], (string)'utiliser_bb', null))  ?
		(' ' . (	'
		form_map.fitBounds(
			new L.LatLngBounds(
				new L.LatLng(' .
	table_valeur($Pile["vars"], (string)'init_sw_lat', null) .
	', ' .
	table_valeur($Pile["vars"], (string)'init_sw_lon', null) .
	'),
				new L.LatLng(' .
	table_valeur($Pile["vars"], (string)'init_ne_lat', null) .
	', ' .
	table_valeur($Pile["vars"], (string)'init_ne_lon', null) .
	')
			)
		);
		// mettre à jour les champs de latitude et longitude quand la carte est chargée
		// a voir si on le fait dans tous les cas, pas seulement pour la boundingbox, comme pour le zoom
		form_map.on(\'load\', function(e) {
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lat', null), 'lat'),true)) .
	'\').val(e.latlng.lat);
			$(\'#champ_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_lon', null), 'lon'),true)) .
	'\').val(e.latlng.lon);
		});
		')) :
		'') .
'

		' .
((table_valeur($Pile["vars"], (string)'geocoder', null))  ?
		(' ' . (	'
		geocoder = new L.Geocoder(geocode,{acceptLanguage:\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true)) .
	'\'});')) :
		'') .
'

		
		' .
(($t1 = strval(interdire_scripts((((((entites_html(table_valeur(@$Pile[0], (string)'lat', null),true)) AND (interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lon', null),true)))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
		var data = {
			"type": "FeatureCollection",
			"features": [
				{"type": "Feature",
					"geometry": {"type": "Point", "coordinates": [' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lon', null),true)) .
	', ' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lat', null),true)) .
	']},
					"id":"' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_gis', null), 'oui'),true)) .
	'",
					"properties": {
						"title":' .
	interdire_scripts(json_encode(supprimer_numero(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre', null), ''),true)))) .
	',
						"description":' .
	interdire_scripts(json_encode(entites_html(sinon(table_valeur(@$Pile[0], (string)'descriptif', null), ''),true))) .
	(($t2 = strval(gis_icon_properties(
((!is_array($l = quete_logo('id_gis', 'ON', @$Pile[0]['id_gis'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))))!=='' ?
			('
						' . $t2) :
			'') .
	'
					}
				}]
		}

		var geojson = new L.geoJson(\'\', {
			onEachFeature: function (feature, layer) {
				marker = layer;
				layer.options.draggable = true;
				if (feature.properties && feature.properties.icon){
					layer.setIcon(new L.Icon({
						iconUrl: feature.properties.icon,
						iconSize: new L.Point( feature.properties.icon_size[0], feature.properties.icon_size[1] ),
						iconAnchor: new L.Point( feature.properties.icon_anchor[0], feature.properties.icon_anchor[1] ),
						popupAnchor: new L.Point( feature.properties.popup_anchor[0], feature.properties.popup_anchor[1] )
					}));
				}
				if (feature.properties && feature.properties.title){
					layer.bindPopup(feature.properties.title);
				}
			}
		}).addTo(form_map);
		geojson.addData(data);')) :
		'') .
'

		// mettre a jour les coordonnees quand on clique la carte
		form_map.on(\'click\', function(e) {
			annuler_geocoder = 0;
			maj_inputs(form_map,e.latlng,\'click\');
		});

		marker.on(\'dragend\', function(e) {
			maj_inputs(form_map,e.target._latlng,\'click\');
		});

		// mettre à jour le zoom quand on le modifie
		form_map.on(\'zoomend\', function(e) {
			$(\'#champ_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'champ_zoom', null), 'zoom'),true)) .
'\').val(e.target._zoom);
		});

		' .
((table_valeur($Pile["vars"], (string)'geocoder', null))  ?
		(' ' . (	'
		// geocoder si clic...
		$(\'a#' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_rechercher_geocodage\').css("cursor","pointer").on(\'click\',function(){
			var address = $("#champ_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_geocoder").val();
			annuler_geocoder = 0;
			geocoder.geocode(address);
		});

		// ne pas soumettre le formulaire si on presse Entree depuis le champ de recherche
		$(\'#champ_' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_geocoder\').on(\'keypress\', function(e){
			if (e.which == 13) {
				$(\'a#' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'_rechercher_geocodage\').trigger("click");
				return false;
			}
		});')) :
		'') .
'

		' .
(($t1 = strval(interdire_scripts(((((((((((entites_html(table_valeur(@$Pile[0], (string)'id_gis', null),true)) ?'' :' ')) OR (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_gis', null),true) == 'oui')))) ?' ' :'')) AND (interdire_scripts(((include_spip('inc/config')?lire_config('gis/geolocaliser_user_html5',null,false):'') == 'on')))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
		form_map.locate({setView: true, maxZoom: ' .
	table_valeur($Pile["vars"], (string)'init_zoom', null) .
	'});')) :
		'') .
'

	};

	$(function(){
		jQuery.getScript(\'' .
produire_fond_statique( 'javascript/gis.js' , array(), array('compil'=>array('plugins/gis/saisies/carte.html','html_117b0f0185304a2a0f9704313b309458','',200,$GLOBALS['spip_lang'])), _request('connect')) .
'\',function(){
			if (typeof(callback_form_map) === "function") {
				init_map(callback_form_map);
			} else {
				init_map();
			}
		});
	});

})(jQuery);
/*]]>*/
</script>
' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_fin', null)) .
'</' .
((($a = 'div') OR (is_string($a) AND strlen($a))) ? $a : 'li') .
'>


');

	return analyse_resultat_skel('html_117b0f0185304a2a0f9704313b309458', $Cache, $page, 'plugins/gis/saisies/carte.html');
}
?>