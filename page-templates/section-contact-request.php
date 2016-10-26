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


$prefix = 'contact_'
?>
        <div class="<?= $prefix ?>form col-md-12">

            <form role="form" name="<?= $prefix ?>request" method="POST" onsubmit="return form_validation()" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                <div class="form-group col-md-6">
                    <p class="text-xs-center big-label"><?php _e('Vorname', 'airteam') ?></p><span></span>
                    <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="fname" type="text" required="required" class="form-control" placeholder="" />
                </div>
                <div class="form-group col-md-6">
                    <p class="text-xs-center big-label"><?php _e('Nachname', 'airteam') ?></p>
                    <input pattern="[a-zA-Z0-9 ]+" maxlength="200" name="lname" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <p class="text-xs-center big-label"><?php _e('E-mail-adresse', 'airteam') ?></p>
                    <input maxlength="200" name="email" type="email" required="required" class="form-control" />
                </div>

                <div class="form-group col-md-12">
                    <p class="big-label text-xs-center"><?php _e('Ihre Nachricht', 'airteam'); ?></p>
                    <textarea rows="6" name="message" cols="35" maxlength="100" required="required" class="form-control" placeholder=""></textarea>
                </div>


                <input type="hidden" name="action" value="contact_form">
                <div class="center-block">
                    <button class="btn btn-success btn-lg submitBtn" type="submit"><?php _e('Anfrage absenden','airteam') ?></button>
                </div>
            </form>
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