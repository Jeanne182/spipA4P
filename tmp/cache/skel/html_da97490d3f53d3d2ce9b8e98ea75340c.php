<?php

/*
 * Squelette : squelettes/inclure/head.html
 * Date :      Thu, 30 Jul 2020 08:12:30 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/head.html
// Temps de compilation total: 5.452 ms
//

function html_da97490d3f53d3d2ce9b8e98ea75340c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<meta http-equiv="Content-Type" content="text/html; charset=' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
' .
(($t1 = strval(interdire_scripts(attribut_html(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
        


' .
(($t1 = strval(interdire_scripts(generer_url_public('backend', ''))))!=='' ?
		((	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('public|spip|ecrire:syndiquer_site') .
	'" href="') . $t1 . '" />') :
		'') .
'

   
' .
(($t1 = strval(direction_css(find_in_path('css/reset.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/clear.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/font.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/links.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/typo.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/media.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/form.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/grid.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/layout.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Jaldi&display=swap" rel="stylesheet"> 


' .
(($t1 = strval(direction_css(find_in_path('css/spip.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'

<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
' .
pipeline('insert_head_css','<!-- insert_head_css -->') .
'


' .
(($t1 = strval(direction_css(find_in_path('css/theme.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/variante.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(direction_css(find_in_path('css/perso.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(find_in_path('css/styles.css')))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(find_in_path('css/rubriques.css')))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
<!-- Superfish navbar -->
<link href="' .
find_in_path('css/superfish/superfish.css') .
'" rel="stylesheet" media="screen">


' .
'<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->') .
'

' .
'
<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
' .
(($t1 = strval(find_in_path('js/script.js')))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'
<script src="' .
find_in_path('js/superfish/superfish.js') .
'"></script>
        <script src="' .
find_in_path('js/superfish/hoverIntent.js') .
'" type="text/javascript"></script>
        <script src="' .
find_in_path('js/superfish/supersubs.js') .
'" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
              $(\'ul.sf-menu\').supersubs({
                minWidth:	12,	 // minimum width of submenus in em units
                maxWidth:	27,	 // maximum width of submenus in em units
                extraWidth:	1	 // extra width can ensure lines don\'t sometimes turn over
                        // due to slight rounding differences and font-family
              }).superfish();		 // call supersubs first, then superfish, so that subs are
                        // not display:none when measuring. Call before initialising
                        // containing tabs for same reason.
            });
          </script>


<meta name="generator" content="SPIP' .
(($t1 = strval(spip_version()))!=='' ?
		(' ' . $t1) :
		'') .
'" />


' .
(($t1 = strval(find_in_path('favicon.ico')))!=='' ?
		('<link rel="icon" type="image/x-icon" href="' . $t1 . (	'" />
' .
	(($t2 = strval(find_in_path('favicon.ico')))!=='' ?
			('<link rel="shortcut icon" type="image/x-icon" href="' . $t2 . '" />') :
			''))) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'robots', null),true))))!=='' ?
		('<meta name="robots" content="' . $t1 . '" />') :
		'') .
'
');

	return analyse_resultat_skel('html_da97490d3f53d3d2ce9b8e98ea75340c', $Cache, $page, 'squelettes/inclure/head.html');
}
?>