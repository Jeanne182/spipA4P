<?php

/*
 * Squelette : ../prive/squelettes/inclure/admin_vider_images.html
 * Date :      Mon, 22 Jun 2020 14:16:36 GMT
 * Compile :   Mon, 03 Aug 2020 07:59:44 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/admin_vider_images.html
// Temps de compilation total: 5.028 ms
//

function html_8bd3e095f03e856bf7efc75e0c91ad2d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_admin_vider')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'

' .
	boite_ouvrir(interdire_scripts(wrap(concat(filtre_balise_img_dist(chemin_image('image-24.png'),'','cadre-icone'),_T('info_images_auto')),'<h3>')), 'simple', 'titrem') .
	'<div id="placehoder_taille_cache_images"><p>&nbsp;<br />&nbsp;<br />&nbsp;<br /></p></div>
	<script type="text/javascript">
		jQuery(function($){
			$(\'#placehoder_taille_cache_images\').animateLoading().load(\'' .
	invalideur_session($Cache, replace(generer_action_auteur('calculer_taille_cache','images'),'&amp;','&')) .
	'\');
		});
	</script>
	<noscript>
		<iframe src="' .
	invalideur_session($Cache, generer_action_auteur('calculer_taille_cache','images')) .
	'" style="width: 100%;height: 3em;overflow: hidden;"></iframe>
	</noscript>

' .
	boite_pied() .
	'
	' .
	bouton_action(_T('public|spip|ecrire:bouton_vider_cache'),invalideur_session($Cache, generer_action_auteur('purger','vignettes',invalideur_session($Cache, self()))),'ajax') .
	'
' .
	boite_fermer() .
	'
')) :
		'');

	return analyse_resultat_skel('html_8bd3e095f03e856bf7efc75e0c91ad2d', $Cache, $page, '../prive/squelettes/inclure/admin_vider_images.html');
}
?>