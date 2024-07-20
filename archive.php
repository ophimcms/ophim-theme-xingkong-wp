<?php
get_header();
?>
<div class="col-lg-wide-8 col-xs-1 padding-0">
    <div class="stui-pannel stui-pannel-bg clearfix">
        <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
                <h1><?= single_tag_title(); ?></h1>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist clearfix">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post(); ?>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-12 blogShort">

                                    <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                             alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                                    <br>
                                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <article>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p></article>
                                    <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                                </div>

                            </div>
                        <?php }
                        wp_reset_postdata();
                    } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php ophim_pagination(); ?>
</div>
<?php get_sidebar('ophim'); ?>
<?php
add_action('wp_footer', function (){?>

    <script type="text/javascript">
        $(".score").each(function() {
            var star = $(this).find(".branch").text().replace(".", "0.");
            $(this).find("#score").css("width", "" + star + "%");
        });
    </script>
<?php }) ?>
<?php
get_footer();
?>
