<div class="posts desktop">
    <form class="search-form">
        <input class="form-control mr-sm-2 ion-ios-search" type="text" name="s" id="search" placeholder="Search"
               value="<?php the_search_query(); ?>"/>
    </form>

    <?php
    if (is_front_page()) { ?>
        <?php query_posts('posts_per_page=-1');
        if (have_posts()) { ?>
            <?php
            while (have_posts()) {
                the_post(); ?>
                <div class="post">
                    <a class="fillLink" href="<?php the_permalink(); ?>"></a>
                    <div class="post-body">
                        <p class="post-title"><?php the_title(); ?></p>
                        <div class="post-categories">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                    <time><?php the_time('d m y'); ?></time>
                </div>
            <?php } ?>
        <?php }
        wp_reset_query(); ?>
    <?php } else { ?>
        <?php
        $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;
        if ($categories) {
            $query = new WP_Query( 'cat=' . $category_id);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <div class="post">
                        <a class="fillLink" href="<?php the_permalink(); ?>"></a>
                        <div class="post-body">
                            <p class="post-title"><?php the_title(); ?></p>
                            <div class="post-categories">
                                <a href="<?php the_permalink(); ?>"></a>
                            </div>
                        </div>
                        <time><?php the_time('d m y'); ?></time>
                    </div>
                <?php } ?>
            <?php }
            wp_reset_query(); ?>
        <?php } else if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="post">
                    <a class="fillLink" href="<?php the_permalink(); ?>"></a>
                    <div class="post-body">
                        <p class="post-title"><?php the_title(); ?></p>
                        <div class="post-categories">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                    <time><?php the_time('d m y'); ?></time>
                </div>
            <?php } ?>
        <?php }
        wp_reset_query(); ?>
    <?php } ?>
</div>

<div class="posts mobile">
    <form class="search-form">
        <input class="form-control mr-sm-2 ion-ios-search" type="text" name="s" id="search" placeholder="Search"
               value="<?php the_search_query(); ?>"/>
    </form>
        <?php query_posts('posts_per_page=-1');
        if (have_posts()) { ?>
            <?php
            while (have_posts()) {
                the_post(); ?>
                <div class="post">
                    <a class="fillLink" href="<?php the_permalink(); ?>"></a>
                    <div class="post-body">
                        <p class="post-title"><?php the_title(); ?></p>
                        <div class="post-categories">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                    <time><?php the_time('d m y'); ?></time>
                </div>
            <?php } ?>
        <?php }
        wp_reset_query(); ?>
</div>