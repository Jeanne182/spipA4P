<?php

/*
 * Squelette : squelettes/inclure/header.html
 * Date :      Thu, 30 Jul 2020 08:12:29 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/header.html
// Temps de compilation total: 0.222 ms
//

function html_55cc52d6936be2203f2c672308770e2d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'



' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav-bar') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/inclure/header.html\',\'html_55cc52d6936be2203f2c672308770e2d\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>' .
'
<!-- <div id="nav-bar-height" class=\'bg-secondary\' style="top:0px;"></div> -->
<!-- <script>
	var navHeight = $(\'#mainNav\').outerHeight();
	$(\'#nav-bar-height\').innerHeight(navHeight);
	console.log(\'navHeight : \', navHeight);
</script> -->







');

	return analyse_resultat_skel('html_55cc52d6936be2203f2c672308770e2d', $Cache, $page, 'squelettes/inclure/header.html');
}
?>