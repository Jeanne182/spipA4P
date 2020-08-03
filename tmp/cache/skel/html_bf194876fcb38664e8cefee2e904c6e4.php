<?php

/*
 * Squelette : squelettes/inclure/header-rubrique.html
 * Date :      Thu, 30 Jul 2020 08:12:29 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   _ariane, _principale
 */ 

function BOUCLE_arianehtml_bf194876fcb38664e8cefee2e904c6e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	include_spip('inc/rubriques');
	$hierarchie = calcul_hierarchie_in($id_rubrique,false);
	if (!$hierarchie) return "";
	
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ariane';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/header-rubrique.html','html_bf194876fcb38664e8cefee2e904c6e4','_ariane',19,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' &gt; 
                    <a class=\'text-white\' href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
'</a>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ariane @ squelettes/inclure/header-rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_principalehtml_bf194876fcb38664e8cefee2e904c6e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_principale';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.descriptif",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/header-rubrique.html','html_bf194876fcb38664e8cefee2e904c6e4','_principale',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
    ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/inclure/header-rubrique.html\',\'html_bf194876fcb38664e8cefee2e904c6e4\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>' .
'

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center rubrique-masthead flex-column row-centered" style="background-image: url(\'' .
extraire_attribut(
((!is_array($l = quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'],quete_parent($Pile[$SP]['id_rubrique']), 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src') .
'\');">
        
        <div class="container d-flex align-items-center flex-column">
            <!-- <div id="masthead-height" class="absolute"></div>
            <script>
                var height = $(\'.masthead\').outerHeight();
                $(\'#masthead-height\').innerHeight(height);
                console.log(\'height : \', height);
            </script> -->

            <!-- Masthead Heading-->
                
            <p class="arbo mt-3 absolute l-2 text-white">
                <a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/" class=\'text-white\'>' .
_T('public|spip|ecrire:accueil_site') .
'</a>
                ' .
BOUCLE_arianehtml_bf194876fcb38664e8cefee2e904c6e4($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = strval(interdire_scripts(couper(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80'))))!=='' ?
		(' &gt; 
                <strong class="on">
                    ' . $t1 . '
                </strong>') :
		'') .
'
            </p><!--.arbo-->
            <h1 class="masthead-heading text-uppercase ' .
classe_boucle_crayon('rubriques','titre',$Pile[$SP]['id_rubrique']).' ">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h1>  
            ' .
(($t1 = strval(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))))!=='' ?
		((	'<span class="' .
	classe_boucle_crayon('rubriques','descriptif',$Pile[$SP]['id_rubrique']).' lead">') . $t1 . '</span>') :
		'') .
'
          
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <script>
            var navHeight = $(\'#mainNav\').outerHeight();
            $(\'.arbo\').css(\'top\', navHeight);;
        </script>
    </header>
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_principale @ squelettes/inclure/header-rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/header-rubrique.html
// Temps de compilation total: 4.995 ms
//

function html_bf194876fcb38664e8cefee2e904c6e4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_principalehtml_bf194876fcb38664e8cefee2e904c6e4($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_bf194876fcb38664e8cefee2e904c6e4', $Cache, $page, 'squelettes/inclure/header-rubrique.html');
}
?>