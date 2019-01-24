<?php
if (!is_page('login')) {
    if (is_user_logged_in()) {
        // you're good to go
    } else {
        wp_redirect('/login');
    };
}

get_template_part('components/header/head'); ?>
<body>
<span class="toggle-nav"></span>
<?php if (!is_page('login')) {
    ?>
    <nav>
        <a href="/wp-admin/post-new.php" class="new-post ion-ios-add-circle-outline">
            <?php get_template_part('components/tooltips/new-post'); ?>
        </a>
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
    <?php
} ?>
