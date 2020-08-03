<?php

/*
 * Squelette : squelettes/inclure/footer.html
 * Date :      Thu, 30 Jul 2020 08:12:30 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/footer.html
// Temps de compilation total: 2.271 ms
//

function html_50b0d1e44087d9f54671f7c136f732de($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Footer-->
<footer class="footer text-center">
	<div class="container">
		<div class="row">
			<!-- Footer Location-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Location</h4>
				<p class="lead mb-0">
					2215 John Daniel Drive
					<br />
					Clark, MO 65243
				</p>
			</div>
			<!-- Footer Social Icons-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Around the Web</h4>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
			</div>
			<!-- Footer About Text-->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4">About Freelancer</h4>
				<p class="lead mb-0">
					Freelance is a free to use, MIT licensed Bootstrap theme created by
					<a href="http://startbootstrap.com">Start Bootstrap</a>
					.
				</p>
			</div>
		</div>
	</div>
	
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
	
	<p class="colophon">
		<br /><a rel="contents" href="' .
interdire_scripts(generer_url_public('plan', '')) .
'" class="first">' .
_T('public|spip|ecrire:plan_site') .
'</a>' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?'' :' ')))))!=='' ?
		('
		' . $t1 . (	' | <a href="' .
	interdire_scripts(parametre_url(generer_url_public('login', ''),'url',self())) .
	'" rel="nofollow" class=\'login_modal\'>' .
	_T('public|spip|ecrire:lien_connecter') .
	'</a>')) :
		'') .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ecrire')?" ":""))))!=='' ?
		('
		' . $t1 . (	'| <a href="' .
	(defined('_DIR_RESTREINT_ABS')?constant('_DIR_RESTREINT_ABS'):'') .
	'">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?' ' :'')))))!=='' ?
		('
		' . $t1 . (	' | <a href="' .
	executer_balise_dynamique('URL_LOGOUT',
	array(),
	array('squelettes/inclure/footer.html','html_50b0d1e44087d9f54671f7c136f732de','',3,$GLOBALS['spip_lang'])) .
	'" rel="nofollow">' .
	_T('public|spip|ecrire:icone_deconnecter') .
	'</a>')) :
		'') .
' | 
		<a rel="nofollow" href="' .
interdire_scripts(generer_url_public('contact', '')) .
'">' .
_T('public|spip|ecrire:contact') .
'</a> |
		<a href="' .
interdire_scripts(generer_url_public('backend', '')) .
'" rel="alternate" title="' .
_T('public|spip|ecrire:syndiquer_site') .
'" class="last">RSS&nbsp;2.0</a>
	</p>
	<div class="container"><small>Copyright © Alumni For The Planet 2020</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
');

	return analyse_resultat_skel('html_50b0d1e44087d9f54671f7c136f732de', $Cache, $page, 'squelettes/inclure/footer.html');
}
?>