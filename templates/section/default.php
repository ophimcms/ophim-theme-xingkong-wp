<div class="stui-pannel clearfix">
    <div class="stui-pannel-box padding-0">
        <div class="col-lg-wide-9.5 col-xs-1 padding-0">
            <div class="col-pd stui-pannel-bg">
                <div class="stui-pannel_hd">
                    <div class="stui-pannel__head bottom-line active clearfix">
                        <a class="more text-muted pull-right" href="<?= $slug; ?>">Xem thêm <i
                                class="icon iconfont icon-more"></i>
                        </a>
                        <h3 class="title">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icon_1.png" alt="<?= $title; ?>" />
                            <a href="<?= $slug; ?>"><?= $title; ?></a>
                        </h3>
                    </div>
                </div>
                <div class="stui-pannel_bd clearfix">
                    <ul class="stui-vodlist clearfix">
                    <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++; ?>
                            <li class="col-md-6 col-sm-4 col-xs-3 ">
                                <div class="stui-vodlist__box">
                                    <a class="stui-vodlist__thumb lazyload" href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" data-original="<?= op_get_thumb_url() ?>">
                                        <span class="play hidden-xs"></span>
                                        <span class="pic-text text-right"><?= op_get_episode() ?></span>
                                    </a>
                                    <div class="stui-vodlist__detail">
                                        <h4 class="title text-overflow">
                                            <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p class="text text-overflow text-muted hidden-xs"><?= op_get_original_title() ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                       <?php   endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
