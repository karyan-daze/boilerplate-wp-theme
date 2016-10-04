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

<?php

if(isset($_POST["record_type"])) :
foreach($_POST["record_type"] as $record) :
    if($record == "Foto- Videoaufnahmen") :
        $record_1 = "Foto- Videoaufnahmen";
    elseif($record == "360 Panorama") :
        $record_2 = "360 Panorama";
    elseif($record == "3D Modell") :
        $record_3 = "3D Modell";
    endif;

endforeach;

endif;
?>


<div class="row">
    <div class="container">

        <div class="stepwizard col-md-offset-3">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Step 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Step 2</p>
                </div>
            </div>
        </div>

        <form role="form" name="record_information" method="POST" onsubmit="return form_validation()" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h3> Step 1</h3>
                        <div class="form-group">
                            <label class="control-label"><?php _e('Art der Aufnahmen','airteam') ?></label>
                            <?php _e('Foto- Videoaufnahmen', '') ?><input name="record_type[]" type="checkbox" value="<?php _e('Foto- Videoaufnahmen', '') ?>" <?php if(isset($record_1)): echo 'checked'; endif;?>>
                            <?php _e('360 Panorama', '') ?><input name="record_type[]" type="checkbox" value="<?php _e('360 Panorama', '') ?>" <?php if(isset($record_2)): echo 'checked'; endif;?>>
                            <?php _e('3D Modell', '') ?><input name="record_type[]" type="checkbox" value="<?php _e('3D Modell', '') ?>" <?php if(isset($record_3)): echo 'checked'; endif;?>>

                        </div>
                        <div class="form-group">
                            <label class="control-label"><?php _e('Ort der Aufnahmen ','airteam') ?></label>
                            <input pattern="[a-zA-Z0-9 ]+" name="record_place" maxlength="100" type="text" required="required" class="form-control" placeholder="Stadt" value="<?php if(isset($_POST["record_place"])) : echo $_POST["record_place"]; endif; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label"><?php _e('Ausführungszeitraum','airteam') ?></label>
                            <input maxlength="100" name="record_date_range" type="text" class="form-control" placeholder="" />
                            <?php _e('Genauer Tag', 'airteam') ?><input name="record_day" type="checkbox" value="<?php _e('3D Modell', 'airteam') ?>"><input name="record_day_date" type="text">


                        </div>

                        <div class="form-group">
                            <label class="control-label"><?php _e('Zusätzliche Anforderungen','airteam') ?></label>
                            <?php _e('Filmschnitt/Imagefilm', 'airteam') ?><input name="record_additional_services[]" type="checkbox" value="<?php _e('Filmschnitt/Imagefilm', 'airteam') ?>">
                            <?php _e('Bildbearbeitung', 'airteam') ?><input name="record_additional_services[]" type="checkbox" value="<?php _e('Bildbearbeitung', 'airteam') ?>">
                        </div>

                        <div class="form-group">

                            <label for="record_description"><?php _e('Beschreibung', 'airteam'); ?></label>
                            <textarea rows="10" name="record_description" cols="35" maxlength="100" required="required" class="form-control" placeholder=""></textarea>

                        </div>

                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><?php _e('Weiter','airteam') ?></button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h3> Step 2</h3>
                        <div class="form-group">
                            <label class="control-label"><?php _e('Vorname', 'airteam') ?></label>
                            <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="record_fname" type="text" required="required" class="form-control" placeholder="" />
                            <label class="control-label"><?php _e('Nachname', 'airteam') ?></label>
                            <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="record_lname" type="text" required="required" class="form-control" />

                        </div>
                        <div class="form-group">
                            <label class="control-label"><?php _e('Firma','airteam') ?></label>
                            <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="record_company" type="text" required="required" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="control-label"><?php _e('Telefonnummer', 'airteam') ?></label>
                            <input maxlength="200" name="record_tel" type="text" required="required" class="form-control" placeholder="" />
                            <label class="control-label"><?php _e('E-mail-adresse', 'airteam') ?></label>
                            <input maxlength="200" name="record_email" type="email" required="required" class="form-control" />

                        </div>
                        <input type="hidden" name="action" value="request_form">
                        <button class="btn btn-success btn-lg pull-right" type="submit"><?php _e('Anfrage absenden','airteam') ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    </div>

<script>
    $ = jQuery;


    function form_validation() {
        /* Check the Customer Name for blank submission*/
        var customer_name = document.forms["record_information"]["record_fname"].value;
        if (customer_name == "" || customer_name == null) {
            alert("Bitte das Name feld einfüllen");
            return false;
        }
        var customer_name = document.forms["record_information"]["record_lname"].value;
        if (customer_name == "" || customer_name == null) {
            alert("Bitte die Name Feld einfüllen");
            return false;
        }
        var customer_email = document.forms["record_information"]["record_email"].value;
        if (customer_email == "" || customer_email == null) {
            alert("Bitte das Email Feld einfüllen.");
            return false;
        }

        /* Check the Customer Email for invalid format */
        var customer_email = document.forms["record_information"]["record_email"].value;
        var at_position = customer_email.indexOf("@");
        var dot_position = customer_email.lastIndexOf(".");
        if (at_position<1 || dot_position<at_position+2 || dot_position+2>=customer_email.length) {
            alert("Given email address is not valid.");
            return false;
        }
    }

    $(document).ready(function () {
        $(function() {
            $('input[name="record_day_date"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                });
        });


        $('input[name="record_date_range"]').daterangepicker();

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });

</script>