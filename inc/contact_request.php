<?php
/**
record_type:3D Modell
record_date_range:10/14/2016 - 11/24/2016
record_day:3D Modell
record_day_date:10/19/2016
record_additional_services:Bildbearbeitung
record_fname:Ahed
record_lname:Aly
record_lname:Firma
record_tel:Tel
record_email:email@email.com
 */


$GLOBALS['email'] = 'h.k.vlaanderen@gmail.com';

function airteam_redirect_request(){
    if ( ! empty( $_POST ) ) :
        // TODO Sanitize the POST field





    if(isset($_POST["record_type"])) :

        endif;
    if(isset($_POST["record_place"])) :
        $record_place = $_POST["record_place"];
    else : $record_place = 'keine';
    endif;


        $location = site_url() . '/anfrage';

        //header("Location: $location");

        //wp_safe_redirect($location);


    else :
        return;



        endif;
}

add_action( 'admin_post_nopriv_redirect_request', 'airteam_redirect_request' );
add_action( 'admin_post_redirect_request', 'airteam_redirect_request' );

function airteam_send_email_to_admin() {
    require get_template_directory() . '/inc/emailTemplateParser.php';

    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */

    if ( ! empty( $_POST ) ) {
        // TODO Sanitize the POST field
        //

        // Generate email content
        // Send to appropriate email


        // TODO record_type can be an array DONE
        // TODO record_additional_services can be an array DONE


        if(isset($_POST["record_day_date"])) : $record_day_date = $_POST["record_day_date"]; else : $record_day_date = 'keine'; endif;
        if(isset($_POST["record_date_range"])) :
            $record_date_range = $_POST["record_date_range"];
        else :  $record_date_range = 'keine'; endif;

        // print array as comma separated values

        if(isset($_POST["record_type"])) :

            $record_types = $_POST["record_type"];
        //this is an array so let's create a string
            $record_types = implode(', ', $record_types);
        else :
            $record_types = 'keine';
        endif;



        if(isset($_POST["record_description"])) : $record_description = $_POST["record_description"]; else : $record_description = 'keine'; endif;
        if(isset($_POST["record_place"])) : $record_place = $_POST["record_place"]; else : $record_place = 'keine';  endif;


            if(isset($_POST["record_additional_services"])) :
                $record_additional_services = $_POST["record_additional_services"];
                $record_additional_services = implode(', ', $record_additional_services);
            else :
                $record_additional_services = 'keine';
            endif;

        if(isset($_POST["record_fname"])) : $record_fname = $_POST["record_fname"]; else : $record_fname = 'leer'; endif;
        if(isset($_POST["record_lname"])) : $record_lname = $_POST["record_lname"]; else : $record_lname = 'leer'; endif;
        if(isset($_POST["record_company"])) : $record_company = $_POST["record_company"]; else : $record_compnay = 'leer'; endif;
        if(isset($_POST["record_tel"])) : $record_tel = $_POST["record_tel"]; else : $record_tel = 'leer'; endif;
        if(isset($_POST["record_email"])) : $record_email = $_POST["record_email"]; else : $record_email = 'leer'; endif;


    } else {

        return;
    }

    $to = $GLOBALS['email'];
    $subject = "Aufnahme airteam.camera";
    $emailTemplate = get_template_directory().'/email/email.tpl';




    $emailValues =  array(
        'record_types' => $record_types,
        'record_date_range' => $record_date_range,
        'record_day_date' => $record_day_date,
        'record_description' => $record_description,
        'record_place' => $record_place,
        'record_additional_services' => $record_additional_services,
        'record_fname' => $record_fname,
        'record_lname' => $record_lname,
        'record_company' => $record_company,
        'record_tel' => $record_tel,
        'record_email' => $record_email,
        'logo_path' => get_template_directory_uri() . '/assets/static/airy_logo.png',
    );



    $emailHtml = new EmailTemplateParser($emailTemplate);

    $emailHtml->setVars($emailValues);

    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
    $emailHtml->output();
    $status = wp_mail($to, $subject, $emailHtml->output());
    // Reset content-type to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
    remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

    //TODO add something in a database to make sure data is backed up if something is missed



    // Database connection
    // And send email

    $site_url = get_site_url();
    $succes_page = '/anfrage/vielen-dank';
    $url = $site_url.$succes_page;

    // Redirection to the success page
    if ($status == true):
        wp_safe_redirect( $url);


    else :
        var_dump($status);
        //wp_safe_redirect( $url, $status );
        endif;

    exit;
}
add_action( 'admin_post_nopriv_request_form', 'airteam_send_email_to_admin' );
add_action( 'admin_post_request_form', 'airteam_send_email_to_admin' );


function airteam_pilot_request_to_admin() {

    /**
     *
     *
    pilot_fname:hendrik
    pilot_lname:vlaanderen
    pilot_tel:90349
    pilot_email:hendrik@karyandaze.com
    pilot_place:berlin
    pilot_required_info[]:eine gewerbliche Drohnen Haftpﬂichtversicherung
    pilot_required_info[]:eine Aufstiegsgenehmigung
    pilot_required_region:achja
    pilot_message:ja dann noch
    action:pilot_form
     *
     */

    require get_template_directory() . '/inc/emailTemplateParser.php';

    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */

    if ( ! empty( $_POST ) ) {
        // TODO Sanitize the POST field
        //

        // Generate email content
        // Send to appropriate email


        // TODO record_type can be an array DONE
        // TODO record_additional_services can be an array DONE


        if(isset($_POST["pilot_required_region"])) : $record_region = $_POST["pilot_required_region"]; else : $record_region = 'keine'; endif;


        // print array as comma separated values

        if(isset($_POST["pilot_required_info"])) :

            $info = $_POST["pilot_required_info"];
            //this is an array so let's create a string
            $record_info = implode(', ', $info);
        else :
            $record_info = 'keine';
        endif;



        if(isset($_POST["pilot_message"])) : $record_message = $_POST["pilot_message"]; else : $record_message = 'keine'; endif;
        if(isset($_POST["pilot_place"])) : $record_place = $_POST["pilot_place"]; else : $record_place = 'keine';  endif;


        if(isset($_POST["pilot_fname"])) : $record_fname = $_POST["pilot_fname"]; else : $record_fname = 'leer'; endif;
        if(isset($_POST["pilot_lname"])) : $record_lname = $_POST["pilot_lname"]; else : $record_lname = 'leer'; endif;
        if(isset($_POST["pilot_tel"])) : $record_tel = $_POST["pilot_tel"]; else : $record_tel = 'leer'; endif;
        if(isset($_POST["pilot_email"])) : $record_email = $_POST["pilot_email"]; else : $record_email = 'leer'; endif;


    } else {

        return;
    }

    $to = $GLOBALS['email'];
    $subject = "Pilot Anfrage";
    $emailTemplate = get_template_directory().'/email/email-pilot.tpl';




    $emailValues =  array(
        'record_infos' => $record_info,
        'record_message' => $record_message,
        'record_region' => $record_region,
        'record_place' => $record_place,
        'record_fname' => $record_fname,
        'record_lname' => $record_lname,
        'record_tel' => $record_tel,
        'record_email' => $record_email,
        'logo_path' => get_template_directory_uri() . '/assets/static/airy_logo.png',
    );



    $emailHtml = new EmailTemplateParser($emailTemplate);

    $emailHtml->setVars($emailValues);

    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
    $emailHtml->output();
    $status = wp_mail($to, $subject, $emailHtml->output());
    // Reset content-type to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
    remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

    //TODO add something in a database to make sure data is backed up if something is missed



    // Database connection
    // And send email

    $site_url = get_site_url();
    $succes_page = '/pilot-werden/vielen-dank';
    $url = $site_url.$succes_page;

    // Redirection to the success page
    if ($status == true):
        wp_safe_redirect( $url);


    else :
        var_dump($status);
        //wp_safe_redirect( $url, $status );
    endif;

    exit;
}



add_action( 'admin_post_nopriv_pilot_form', 'airteam_pilot_request_to_admin' );
add_action( 'admin_post_pilot_form', 'airteam_pilot_request_to_admin' );

function set_html_content_type() {
    return 'text/html';
}

function replace_tags($template, $placeholders){
    $placeholders = array_merge($placeholders, array('<?'=>'', '?>'=>''));
    return str_replace(array_keys($placeholders), $placeholders, $template);
}


