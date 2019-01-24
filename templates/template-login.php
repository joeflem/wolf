<?php
// Template Name: Login
get_header();
?>
    <section class="login">
        <div class="login-inner">
            <span class="ion-ios-paw"></span>
            <?php
            $args = array(
                'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'],
            );
            wp_login_form($args); ?>
        </div>
    </section>
<?php

get_footer();

