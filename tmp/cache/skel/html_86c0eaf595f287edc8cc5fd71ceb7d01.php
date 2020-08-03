<?php

/*
 * Squelette : plugins/engagements/formulaires/signature.html
 * Date :      Mon, 03 Aug 2020 10:11:37 GMT
 * Compile :   Mon, 03 Aug 2020 10:12:06 GMT
 * Boucles :   _p
 */ 

function BOUCLE_phtml_86c0eaf595f287edc8cc5fd71ceb7d01(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'pays';
		$command['id'] = '_p';
		$command['from'] = array('pays' => 'spip_pays');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("pays.id_pays",
		"pays.nom");
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
		"SQL",
		$command,
		array('plugins/engagements/formulaires/signature.html','html_86c0eaf595f287edc8cc5fd71ceb7d01','_p',63,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
										<option value="' .
$Pile[$SP]['id_pays'] .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</option>
									');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_p @ plugins/engagements/formulaires/signature.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/engagements/formulaires/signature.html
// Temps de compilation total: 10.968 ms
//

function html_86c0eaf595f287edc8cc5fd71ceb7d01($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'		
		<div class="formulaire_spip formulaire_signature ajax page-padding" id="sp' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_petition', null),true)) .
'">

		' .
(($t1 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'message_ok', null), interdire_scripts(affiche_reponse_confirmation(table_valeur(@$Pile[0], (string)'_confirm', null)))))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok success">' . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur error">' . $t1 . '</p>') :
		'') .
'
		' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) .
'<form id="contactForm" class=\'no-gutters\' method="post" action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'#sp' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_petition', null),true)) .
'">
			' .
	'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>
			
				<input type="hidden" name="url_page" value="' .
url_absolue(self()) .
'" />
				<fieldset class="info">
					<h2 class="page-section-heading text-center text-dark-blue text-uppercase mb-0">' .
_T('petitions:titre_petition') .
'</h2>
					<div class="divider-custom">
						<div class="divider-custom-line"></div>
					</div>
				</fieldset>
				<fieldset id="engagement-form">
					<!-- <legend>' .
_T('public|spip|ecrire:form_forum_identifiants') .
'</legend> -->

					
					<div class="editer-groupe">

						<!-- Nom et prénom -->
						<div class=\'flex-row\'>
							<div id=\'firstname-container\' class=\'flex-column\'>
								<div class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_prenom' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_prenom')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
									<label for="session_prenom">' .
_T('petitions:form_pet_votre_prenom') .
_T('public|spip|ecrire:info_obligatoire_03') .
'</label>
									<input type="text" class="form-control" name="session_prenom" id="session_prenom" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_prenom', null),true)) .
'" size="30" />
								</div>
								' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_prenom'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
							</div>
							
							<div id=\'lastname-container\' class=\'flex-column\'>
								<div class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_nom_email' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_nom')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
									<label for="session_nom">' .
_T('petitions:form_pet_votre_nom') .
_T('public|spip|ecrire:info_obligatoire_03') .
'</label>
									<input type="text" class="form-control" name="session_nom" id="session_nom" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_nom', null),true)) .
'" size="30" />
								</div>
								' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_nom'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
							</div>

						</div>
										
						<!-- Année de naissance -->
						<div id=\'birthday-container\' class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_naissance' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_naissance')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
							<label for="session_naissance">' .
_T('petitions:form_pet_votre_annee_naissance') .
_T('public|spip|ecrire:info_obligatoire_03') .
'</label>
							<input type="text" class="form-control" name="session_naissance" id="session_naissance" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_naissance', null),true)) .
'" size="30" />
						</div>
						' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_naissance'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
						
						<div id=\'email-container\' class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_adresse_email' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_email')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
							<label for="session_email">' .
_T('petitions:form_pet_votre_email') .
_T('public|spip|ecrire:info_obligatoire_03') .
'</label>
							<input type="text" class="form-control" name="session_email" id="session_email" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_email', null),true)) .
'" size="30" />
						</div>
						' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_email'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'

						<!-- Ecole et localisation -->
						<div class="flex-row">
							<div id="country-container"  class=\'flex-column\'>
								<div class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_pays' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_pays')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
									<label for="session_pays">' .
_T('petitions:form_pet_pays_ecole') .
_T('public|spip|ecrire:info_obligatoire_03') .
'</label>
									<select type="text" name="session_pays" id="session_pays" class="form-control" data-value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_pays', null),true)) .
'">
									<option value=""></option>
									' .
BOUCLE_phtml_86c0eaf595f287edc8cc5fd71ceb7d01($Cache, $Pile, $doublons, $Numrows, $SP) .
'
									</select>
								</div>	
								' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_pays'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
							</div>

							<div id="ecole-container">
								<div class=\'form-group select-label floating-label-form-group controls mb-0 pb-2 editer saisie_nom_ecole' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_ecole')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
									<label for="session_ecole">' .
_T('petitions:form_pet_votre_ecole_alumni') .
_T('public|spip|ecrire:info_obligatoire_03') .
'</label>
									<div id=\'selectEcole\'>
										<select type="text" class="form-control" name="session_ecole" id="session_ecole" data-value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_ecole', null),true)) .
'">
										</select>
									</div>
								</div>
								' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_ecole'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
							</div>
						</div>

						<div id=\'ecole-ajout-container\' class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_nom_ecole' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_ecole_ajout')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
							<label for="session_ecole_ajout">' .
choisir_traduction(array('fr' => 'Votre école n\'est pas présente dans la liste ? Ajoutez-la !','en' => 'Your school is not in the list ? Please register it!')) .
' </label>
							' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_ecole_ajout'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
							<input type="text" class="form-control" name="session_ecole_ajout" id="session_ecole_ajout" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_ecole_ajout', null),true)) .
'" size="30" />
						</div>
						
						<label class="container-checkbox agreement text-justify' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'validation_ajout_ecole')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'">En cochant cette case, vous comprenez que votre établissement ne sera visible qu\'après validation de notre part. Vous serez notifié·e de notre décision par email.' .
_T('public|spip|ecrire:info_obligatoire_03') .
'
							<input name="validation_ajout_ecole" aria-checked="true" type="checkbox" value="Validate">
							<span class="checkmark agreement-checkmark"></span>
							' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'validation_ajout_ecole'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
						</label>
						
						<!-- Engagement association d\'alumni -->
						<div id=\'adhesion-container\' class=\'form-group flex-row controls mb-0 pb-2' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_ecole_ajout')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
							<label for="session_adhesion" class=\'text-dark-blue\'>' .
choisir_traduction(array('fr' => 'Etes-vous adhérent à l\'association d\'alumni de votre école ? ','en' => 'Are you member of an alumni group ?')) .
' </label>
							' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_adhesion'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'
							
								<label class="container-checkbox selector text-black text-justify' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'validation_adhesion')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
'">' .
choisir_traduction(array('fr' => 'Oui','en' => 'Yes')) .
'
									<input name="membre_asso_alumni_oui" aria-checked="true" type="radio" value="oui">
									<span class="checkmark selector-checkmark"></span>
								</label>
								<label class="container-checkbox selector text-black text-justify">' .
choisir_traduction(array('fr' => 'Non','en' => 'No')) .
'
									<input name="membre_asso_alumni_non" aria-checked="true" type="radio" value="non">
									<span class="checkmark selector-checkmark"></span>
								</label>
							
						</div>

						<!-- LinkedIn -->
						<div id=\'linkedin-container\' class=\'form-group floating-label-form-group controls mb-0 pb-2 editer saisie_adresse_email' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_email')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'erreur') :
		'') .
' obligatoire\'>
							<label for="session_linkedin">' .
choisir_traduction(array('fr' => 'Votre compte LinkedIn','en' => 'Your LinkedIn account')) .
'</label>
							<input type="text" class="form-control" name="session_linkedin" id="session_linkedin" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_linkedin', null),true)) .
'" size="30" />
						</div>
						<span id="for-info-message-linkedin" class="h7">Pour renseigner cette information, rendez-vous sur <a class=\'link\' href="https://www.linkedin.com/in/" target="_blank">votre compte LinkedIn</a> et copiez-collez l\'URL de la barre de navigation.</span>
						' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'session_linkedin'))))!=='' ?
		('<span class="erreur_message">' . $t1 . '</span>') :
		'') .
'

						<!-- Entreprise/organisation -->
						<div class="flex-row mb-lg-4">
							<div id="organisation-container"  class=\'flex-column\'>
								<div class=\'form-group floating-label-form-group controls mb-0 pb-2\'>
									<label for="session_entreprise">' .
choisir_traduction(array('fr' => 'Le nom de votre entreprise/organisation','en' => 'The name of your company/organization')) .
'</label>
									<input type="text" class="form-control" name="session_entreprise" id="session_entreprise" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_entreprise', null),true)) .
'" size="30" />
								</div>
							</div>

							<div id=\'fonction-container\' class=\'flex-column\'>
								<div class=\'form-group floating-label-form-group controls mb-0 pb-2\'>
									<label for="session_fonction">' .
choisir_traduction(array('fr' => 'La fonction que vous occupez dans votre entreprise/organisation','en' => 'Your role in your company')) .
'</label>
									<input type="text" class="form-control" name="session_fonction" id="session_fonction" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'session_fonction', null),true)) .
'" size="30" />
								</div>
							</div>
						</div>
					
						<!-- Localisation entreprise -->
						<h6 class="primary-font text-dark-blue font-weight-light">
							<span>Pays et ville de votre entreprise :</span>
							<span class="link primary-font pointer" id="location_inputs">
								Rechercher votre localisation
							</span>
						</h6>
						
						<div class="location-formular opacity-0">
							<div role="document">
								<div class="flex-row">
									' .
recuperer_fond( 'inclure/formulaire_localisation' , array_merge($Pile[0],array()), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('plugins/engagements/formulaires/signature.html','html_86c0eaf595f287edc8cc5fd71ceb7d01','',145,$GLOBALS['spip_lang'])), _request('connect')) .
'
								</div>
							</div>
						</div>
						
					</div>
					<label class="container-checkbox agreement text-justify">' .
choisir_traduction(array('fr' => 'En cochant cette case, vous acceptez que vos informations soient visibles sur le site publique Alumni For The Planet. Cela permettra à d\'autres alumni de vous contacter.')) .
'
						<input name="validation_info_publiques" aria-checked="true" type="checkbox" value="Validate">
						<span class="checkmark agreement-checkmark"></span>
					</label>
				</fieldset>
				
				<p style="display: none;">
					<label for="nobot">' .
_T('public|spip|ecrire:antispam_champ_vide') .
'</label>
					<input type="text" class="text" name="nobot" id="nobot" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nobot', null),true)) .
'" size="10" />
				</p>

				' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_message', null),true))))!=='' ?
		($t1 . (	'
				<fieldset>
					<legend>' .
	_T('petitions:form_pet_message_commentaire') .
	'</legend>
					<div class="editer-groupe">
						<div class=\'editer saisie_message\'>
							<label for="message">' .
	_T('petitions:info_texte_message') .
	'</label>
							<textarea name="message" id="message" rows="6" cols="60">' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'message', null),true)) .
	'</textarea>
						</div>
					</div>
				</fieldset>')) :
		'') .
'
				<p class="boutons"><input id="sendMessageButton" type="submit" class="submit btn btn-primary btn-xl" value="' .
_T('public|spip|ecrire:bouton_valider') .
'" /></p>

		</form>
		</div>
		' .
(($t1 = strval(produire_fond_statique( 'js/ecole.js' , array(), array('compil'=>array('plugins/engagements/formulaires/signature.html','html_86c0eaf595f287edc8cc5fd71ceb7d01','',137,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<script type="text/javascript" src="' . $t1 . '"></script>') :
		'') .
'
');

	return analyse_resultat_skel('html_86c0eaf595f287edc8cc5fd71ceb7d01', $Cache, $page, 'plugins/engagements/formulaires/signature.html');
}
?>