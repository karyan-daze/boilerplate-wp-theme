<?php
/**
 * Admin Page
 * Holds all the functions that can be globally set
 *
 *
 */
function display_email_element()
{
    ?>
    <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}
function display_second_email_element()
{
    ?>
    <input type="text" name="cc-email" id="cc-email" value="<?php echo get_option('cc-email'); ?>" />
    <?php
}

function display_meta_element()
{
    ?>
    <input type="text" name="meta-tags" id="meta-tags" value="<?php echo get_option('meta-tags'); ?>" />
    <?php
}



function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("email", "Email where the contact forms go to", "display_email_element", "theme-options", "section");
    add_settings_field("cc-email", "CC Email where the contact forms go to", "display_second_email_element", "theme-options", "section");
    add_settings_field("meta-tags", "add default alt tags on some images or pages", "display_meta_element", "theme-options", "section");

    register_setting("section", "email");
    register_setting("section", "cc-email");
    register_setting("section", "meta-tags");
}

add_action("admin_init", "display_theme_panel_fields");


function theme_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");