<?php
get_header();
?>
<section>
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <div class="group-film">
            <h1><?php the_title(); ?></h1>
            <div class="content">
                <?php  the_content(); ?>
            </div>
        </div>
    <?php
    endwhile;
    ?>
</section>
<?php
get_footer();
?>
