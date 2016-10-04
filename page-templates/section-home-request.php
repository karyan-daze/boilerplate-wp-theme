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
<div class="row">
    <form role="form" name="record_information" method="POST" onsubmit="" action="<?php echo esc_url( site_url() . '/anfrage' ); ?>">

    <div class="form-group">
        <div class="col-md-4"><?php _e('Foto- Videoaufnahmen', '') ?><input name="record_type[]" type="checkbox" value="<?php _e('Foto- Videoaufnahmen', '') ?>"></div>
        <div class="col-md-4"><?php _e('360 Panorama', '') ?><input name="record_type[]" type="checkbox" value="<?php _e('360 Panorama', '') ?>"></div>
            <div class="col-md-4"><?php _e('3D Modell', '') ?><input name="record_type[]" type="checkbox" value="<?php _e('3D Modell', '') ?>"></div>

    </div>
    <div class="form-group">
        <label class="control-label"><?php _e('Ort der Aufnahmen ','airteam') ?></label>
        <input pattern="[a-zA-Z0-9 ]+" name="record_place" maxlength="100" type="text" required="required" class="form-control" placeholder="Stadt" />
    </div>


        <input type="hidden" name="action" value="redirect_request">
        <button class="btn btn-success btn-lg pull-right" type="submit"><?php _e('Anfrage absenden','airteam') ?></button>
        </form>
    </div>


    </div>
