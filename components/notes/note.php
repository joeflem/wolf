<section class="container">
    <div class="content">
        <h1><?php the_title(); ?></h1>
        <br>
        <?php the_content(); ?>
        <div class="relative edit-posts-container">
            <?php
            edit_post_link( __( 'Edit Note', 'textdomain' ), '<p>', '</p>' . get_template_part('/components/tooltips/edit-note')  );
            ?>
        </div>
    </div>
</section>

<?php get_template_part('/components/controls/view-controller'); ?>