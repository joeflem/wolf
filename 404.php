<?php
get_header();

the_post();
get_template_part('components/notes/notes');
?>
    <section class="container blank-container">
        <div class="blank-content">
            😬 Oh dear. <br>
            <strong>You've hit a 404.</strong>
        </div>
    </section>
<?php

get_footer();
