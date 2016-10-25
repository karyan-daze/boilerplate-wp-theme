<?php
/**
 * The form for sending Email
 *
 *
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

 *
 *
 *
 */
?>
<div class="overlay-desc">
    <div class="row">
        <div class="hero-block col-md-8 offset-md-2">
    <h1 class="hero-title text-xs-center">Ihr Drohnenservice mit qualitätsgarantie</h1>

    <h4 class="hero-subtitle text-xs-center">Drohnen Luftaufnahmen: professionell, schnell und sicher.</h4>
    </div>
        </div>
    <div class="row">
    <div class="col-md-8 text-xs-center offset-md-2 padding-0">
    <form role="form" class="home-request" name="record_information" method="POST" onsubmit="" action="<?php echo esc_url( site_url() . '/anfrage' ); ?>">

    <div class="form-group">
        <div class="col-md-4 checkbox abc-checkbox abc-checkbox-primary">
            <input id="record_type_1" class="styled" name="record_type[]" type="checkbox" checked value="<?php _e('Foto- Videoaufnahmen', '') ?>" />
            <label for="record_type_1"><?php _e('Foto- Videoaufnahmen', '') ?></label>
        </div>
        <div class="col-md-4 checkbox abc-checkbox abc-checkbox-primary"><input id="record_type_2" class="styled" name="record_type[]" type="checkbox" value="<?php _e('360 Panorama', '') ?>"><label for="record_type_2"><?php _e('360 Panorama', '') ?></label></div>
            <div class="col-md-4 checkbox abc-checkbox abc-checkbox-primary"><input id="record_type_3" class="styled" name="record_type[]" type="checkbox" value="<?php _e('3D Modell', '') ?>"><label for="record_type_3"><?php _e('3D Modell', '') ?></label></div>

    </div>
        <div class="input-group input-group-lg request-input">
            <span class="input-group-addon" id="sizing-addon1">
                <i class="fa fa-map-marker"></i>
            </span>

            <input pattern="[a-zA-Z0-9 ]+" name="record_place" maxlength="100" type="text" required="required" aria-describedby="sizing-addon1" class="form-control" placeholder="<?php _e('Adresse', 'airteam') ?>" />
      <span class="input-group-btn">
        <button class="btn btn-success btn-lg pull-right" type="submit"><?php _e('Anfrage absenden','airteam') ?></button>
      </span>
        </div>

        <input type="hidden" name="action" value="redirect_request">
        </form>
    </div>
    </div>


    </div>
