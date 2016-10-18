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


$prefix = 'pilot_'
?>
<div class="row">
    <div class="container">

        <div class="<?= $prefix ?>form col-md-6 offset-md-2">
            <h1 class="text-xs-center"><?php _e('Du willst Drohnenpilot bei AIRTEAM werden?', 'airteam') ?></h1>
            <p class="text-xs-center"><?php _e('Dann schicke uns hier und jetzt direkt deine Anfrage oder greif einfach zum Hörer +49 30 123456789', 'airteam'); ?></p>

        <form role="form" name="<?= $prefix ?>request" method="POST" onsubmit="return form_validation()" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
            <div class="form-group col-md-6">
                <p class="text-xs-center big-label"><?php _e('Vorname', 'airteam') ?></p>
                <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="<?= $prefix ?>fname" type="text" required="required" class="form-control" placeholder="" />
            </div>
            <div class="form-group col-md-6">
                <p class="text-xs-center big-label"><?php _e('Nachname', 'airteam') ?></p>
                <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="<?= $prefix ?>lname" type="text" required="required" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <p class="text-xs-center big-label"><?php _e('Telefonnummer', 'airteam') ?></p>
                <input maxlength="200" name="<?= $prefix ?>tel" type="text" required="required" class="form-control" placeholder="" />
            </div>
            <div class="form-group col-md-6">
                <p class="text-xs-center big-label"><?php _e('E-mail-adresse', 'airteam') ?></p>
                <input maxlength="200" name="<?= $prefix ?>email" type="email" required="required" class="form-control" />
            </div>

            <div class="form-group center-block col-md-8 offset-md-2">
                <p class="text-xs-center big-label"><?php _e('Wohnort','airteam') ?></p>
                <input pattern="[a-zA-Z0-9 ]+" name="<?= $prefix ?>place" maxlength="100" type="text" required="required" class="form-control" />

            </div>

            <div class="form-group center-block col-md-12">
                <p class="big-label text-xs-center"><?php _e('Hast du','airteam') ?></p>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="<?= $prefix ?>required_info[]" value="<?php _e('eine gewerbliche Drohnen Haftpﬂichtversicherung', 'airteam') ?>">
                        <?php _e('eine gewerbliche Drohnen Haftpﬂichtversicherung', 'airteam') ?>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="<?= $prefix ?>required_info[]" value="<?php _e('eine Aufstiegsgenehmigung', 'airteam') ?>">
                        <?php _e('eine Aufstiegsgenehmigung', 'airteam') ?>
                    </label>
                </div>
                <input pattern="[a-zA-Z0-9 ]+" name="<?= $prefix ?>required_region" maxlength="100" type="text" required="required" class="form-control" placeholder="Fals ja, welches Bundesland" />

            </div>

            <div class="form-group center-block">
                <p class="big-label text-xs-center"><?php _e('Deine Nachricht an uns', 'airteam'); ?></p>
                <textarea rows="10" name="<?= $prefix ?>message" cols="35" maxlength="100" required="required" class="form-control" placeholder=""></textarea>
                </div>


            <input type="hidden" name="action" value="pilot_form">
            <div class="center-block">
            <button class="btn btn-success btn-lg submitBtn" type="submit"><?php _e('Anfrage absenden','airteam') ?></button>
            </div>
        </form>
        </div>

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