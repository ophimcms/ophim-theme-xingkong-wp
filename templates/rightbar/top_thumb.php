<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="col-pd clearfix">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head bottom-line active clearfix">
                <h3 class="title"> <?= $title; ?> </h3>
            </div>
        </div>
        <div class="stui-pannel_bd">
            <ul class="stui-vodlist__media active col-pd clearfix">
                <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
                <li class="top-line-dot">
                    <div class="thumb">
                        <a class="stui-vodlist__thumb" href="<?php the_permalink(); ?>"
                           title="<?php the_title(); ?>"
                           style="width: 33.5px; background-image: url(<?= op_get_thumb_url() ?>);"></a>
                    </div>
                    <div class="detail detail-side" style="padding-top: 5px;">
                        <p class="margin-0 text_single-line">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        <div class="score">
                            <div class="star">
                                <span class="star-cur" id="score"></span>
                            </div>
                            <span class="branch"><?= op_get_rating() ?></span>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>