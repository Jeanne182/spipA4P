<?php

/*
 * Squelette : plugins/engagements/js/ecole.js.html
 * Date :      Mon, 03 Aug 2020 09:42:38 GMT
 * Compile :   Mon, 03 Aug 2020 09:59:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/engagements/js/ecole.js.html
// Temps de compilation total: 0.382 ms
//

function html_de8f3762e611afd18bc2a4bddbdd35ab($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q((	'Content-Type: application/javascript; charset=' .
	interdire_scripts($GLOBALS['meta']['charset']))) . '); ?'.'>' .
'$(function(){
    $(\'select[name=session_pays]\').change(function(event) {
    event.preventDefault();
    
    if($(\'#session_pays\').val()!=""){

        $.ajax( {
            url: \'' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/?page=ajax_ecole\',
            dataType: \'html\',
            data: {id_pays: $(this).val()},
        }).done(function(data) {
            $(\'select[name=session_ecole]\').html(data);
            

            
            
            if($(\'select[name=session_ecole] option[value=""]\').attr(\'data-status\') != "empty"){
                $(\'select[name=session_ecole]\').prop(\'disabled\', false);
                var ecole_value = $(\'#session_ecole\').attr(\'data-value\');
                if($(\'select[name=session_ecole] option[value=\'+ecole_value+\']\').attr(\'value\')!=null){
                    $(\'#session_ecole\').val(ecole_value);
                }
                
            }
            else{
                $(\'select[name=session_ecole]\').prop(\'disabled\', true);

            }
            
        });
    }

    else{
        $(\'#session_ecole\').empty();
        $(\'#session_ecole\').append(new Option("' .
choisir_traduction(array('fr' => 'Veuillez selectionner un pays','en' => 'Please select a country')) .
'", "", true, true));
        $(\'select[name=session_ecole]\').prop(\'disabled\', true);
    }

    });
    
    var pays_value = $(\'#session_pays\').attr(\'data-value\');
    $(\'#session_pays\').val(pays_value);	

    var pays_entreprise_value = $(\'#session_pays_entreprise\').attr(\'data-value\');
    $(\'#session_pays_entreprise\').val(pays_entreprise_value);
    
    $(\'#session_pays\').change();    

    /* CSS input et select */
    var toVerify = new Object();
    toVerify.input = {0 : \'#session_nom\', 1 : \'#session_prenom\', 2 : \'#session_naissance\', 3 : \'#session_email\', 4 : \'#session_pays\', 5 : \'#session_ecole\', 6 : \'#session_ecole_ajout\', 7 : \'#session_entreprise\', 8 : \'#session_fonction\', 9 : \'#session_pays_entreprise\', 10 : \'#session_ville\', 11 : \'#session_linkedin\'};
    toVerify.container={0:\'#lastname-container\', 1:\'#firstname-container\', 2 :\'#birthday-container\', 3:\'#email-container\', 4:\'#country-container\', 5:\'#ecole-container\', 6:\'#ecole-ajout-container\', 7:\'#organisation-container\', 8:\'#fonction-container\', 9:\'#country-organisation-container\', 10:\'#ville-container\', 11:\'#linkedin-container\'};

    for(let i=0; i<12; i++){        
        if($(toVerify.input[i]).val()!=\'\'){
        $(toVerify.container[i]).toggleClass("floating-label-form-group-with-value");
        
        }
    }

    $(\'#location_inputs\').click(function(){
        console.log("click");
        $(\'.location-formular\').toggleClass(\'opacity-0\');
    });
});

');

	return analyse_resultat_skel('html_de8f3762e611afd18bc2a4bddbdd35ab', $Cache, $page, 'plugins/engagements/js/ecole.js.html');
}
?>