<?php
get_header();
        the_post();
        get_template_part('components/notes/notes');
        ?>
        <section class="container blank-container">
            <div class="blank-content">
                🐺 Howl are you doing?
            </div>
        </section>
        <?php

get_footer();
