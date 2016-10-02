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

function prefix_send_email_to_admin() {
    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */

    if ( ! empty( $_POST ) ) {
        // TODO Sanitize the POST field
        // Generate email content
        // Send to appropriate email


        // TODO record_type can be an array
        // TODO record_additional_services can be an array
        if(isset($_POST["record_type"])) : $record_type =  $_POST["record_type"]; endif;
        if(isset($_POST["record_date_range"])) : $record_date_range = $_POST["record_date_range"]; endif;
        if(isset($_POST["record_day_date"])) : $record_day_date = $_POST["record_day_date"]; endif;
        if(isset($_POST["record_additional_services"])) : $record_additional_services = $_POST["record_additional_services"]; endif;
        if(isset($_POST["record_fname"])) : $record_fname = $_POST["record_fname"]; endif;
        if(isset($_POST["record_lname"])) : $record_lname = $_POST["record_lname"]; endif;
        if(isset($_POST["record_company"])) : $record_company = $_POST["record_company"]; endif;
        if(isset($_POST["record_tel"])) : $record_tel = $_POST["record_tel"]; endif;
        if(isset($_POST["record_email"])) : $record_email = $_POST["record_email"]; endif;


    } else {

        return;
    }

    $to = "h.k.vlaanderen@gmail.com";
    $subject = "Aufnahme airteam.camera";
    $template = file_get_contents(get_template_directory().'/email/email.html', FILE_USE_INCLUDE_PATH);
    $m = $_POST;
    if (preg_match_all("/{{(.*?)}}/", $template, $m)) {
        foreach ($m[1] as $i => $varname) {

            echo $i;
            $template = str_replace($m[0][$i], sprintf('%s', $varname), $template);
        }
    }

    echo $template;

    add_filter( 'wp_mail_content_type', 'set_html_content_type' );

    //$status = wp_mail($to, $subject, $template);
// Reset content-type to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
    remove_filter( 'wp_mail_content_type', 'set_html_content_type' );



// Database connection
// And send email

    $site_url = get_site_url();
    $succes_page = '/anfrage/vielen-dank';
    $url = $site_url.$succes_page;
    var_dump($_POST);

// Redirection to the success page
    //header("Location: $url");
}
add_action( 'admin_post_nopriv_request_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_request_form', 'prefix_send_email_to_admin' );

function set_html_content_type() {
    return 'text/html';
}

