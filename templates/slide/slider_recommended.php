<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box clearfix">
        <div class="stui-pannel-bd">
            <div class="carousel carousel_default flickity-page">
                <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
                <div class="col-xs-1">
                    <a href="<?php the_permalink(); ?>" class="stui-vodlist__thumb banner" title="<?php the_title(); ?>"
                       style="background: url(<?= op_get_poster_url() ?>) no-repeat; background-position:50% 50%; background-size: cover;">
                        <span class="pic-text text-center"><?php the_title(); ?></span>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
