<div class="col-lg-wide-8 col-xs-1 padding-0">
    <div class="stui-pannel stui-pannel-bg clearfix">
        <div class="stui-pannel-box clearfix">
            <div class="stui-pannel_bd clearfix">
                <div class="stui-content col-pd clearfix">
                    <div class="stui-content__thumb">
                        <a class="stui-vodlist__thumb picture v-thumb" href="<?= watchUrl() ?>"
                           title="<?php the_title(); ?>">
                            <img class="lazyload" src="<?= get_template_directory_uri() ?>/assets/img/load.gif"
                                 data-original="<?= op_get_thumb_url() ?>" />
                            <span class="play active hidden-xs"></span>
                            <span class="pic-text text-right"><?= op_get_episode() ?></span>
                        </a>
                    </div>
                    <div class="stui-content__detail">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <p class="data">
                        <h2><?= op_get_original_title() ?></h2>
                        </p>
                        <p class="movie-rating">
                            <span id="movies-rating-star"></span>
                        </p>
                        <p class="data">
                            <span class="text-muted hidden-xs">Thể Loại: </span>
                            <?= op_get_genres(', ') ?>
                            <span class="split-line"></span>
                            <span class="text-muted hidden-xs">Quốc gia: </span>

                            <?= op_get_regions(', ') ?>

                            <span class="split-line"></span>
                            <span class="text-muted hidden-xs">Năm: </span> <?= op_get_years(', ') ?>
                        </p>
                        <p class="data">

                        </p>
                        <p class="data">
                            <span class="text-muted">Ngôn ngữ: </span><?= op_get_lang() ?> <span
                                    class="split-line"></span>
                            <span class="text-muted hidden-xs">Chất lượng: </span><?= op_get_quality() ?>
                        </p>
                        <p class="data">
                            <span class="text-muted">Diễn viên: </span>
                            <?= op_get_actors(20,', ') ?>
                        </p>
                        <p class="data">
                            <span class="text-muted">Đạo diễn: </span>
                            <?= op_get_directors(10,', ') ?>
                        </p>
                        <p class="desc detail hidden-xs">
                            <span class="left text-muted">Nội dung:</span>
                            <span class="detail-sketch">
                        <?php the_excerpt();?>
                                </span>
                            <span class="detail-content" style="display: none;">
                       <?php the_content();?>
                                </span>
                            <a class="detail-more" href="javascript:;">Xem thêm <i
                                        class="icon iconfont icon-moreunfold"></i>
                            </a>
                        </p>
                        <div class="play-btn clearfix">
                            <div class="share bdsharebuttonbox hidden-sm hidden-xs pull-right"></div>
                            <?php if (watchUrl()) : ?>
                            <a class="btn btn-primary" href="<?= watchUrl() ?>">Xem Phim</a>
                            <?php endif ?>
                             <?php if (op_get_trailer_url()) : ?>
                            <a href="javascript:void(0);" class="btn btn-default" id="show-trailer">Trailer</a>
                             <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <div class="stui-pannel stui-pannel-bg clearfix">
        <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head bottom-line active clearfix">
                    <h3 class="title">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon_6.png" /> Có thể bạn sẽ thích?
                    </h3>
                </div>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist__bd clearfix">
                    <?php
                    $postType = 'ophim';
                    $taxonomyName = 'ophim_genres';
                    $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
                    if ($taxonomy) {
                        $category_ids = array();
                        foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                        $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 12, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                        $my_query = new wp_query($args);

                        if ($my_query->have_posts()):
                            while ($my_query->have_posts()):$my_query->the_post(); ?>
                                <li class="col-md-6 col-sm-4 col-xs-3 ">
                                    <div class="stui-vodlist__box">
                                        <a class="stui-vodlist__thumb lazyload" href="<?php the_permalink(); ?>"
                                           title="<?php the_title(); ?>" data-original="<?= op_get_thumb_url() ?>">
                                            <span class="play hidden-xs"></span>
                                            <span class="pic-text text-right"><?= op_get_episode() ?></span>
                                        </a>
                                        <div class="stui-vodlist__detail">
                                            <h4 class="title text-overflow">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <p class="text text-overflow text-muted hidden-xs"><?= op_get_original_title() ?></p>
                                        </div>
                                    </div>
                                </li>

                            <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="stui-pannel stui-pannel-bg clearfix">
        <div class="stui-pannel-box clearfix">
            <div class="stui-pannel_bd clearfix">
                <div class="stui-pannel_hd">
                    <div class="stui-pannel__head clearfix">
                        <h3 class="title">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icon_30.png" /> Bình luận
                        </h3>
                    </div>
                </div>
                <div class="stui-pannel_bd">
                    <div style="width: 100%; background-color: #fff">
                        <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_sidebar('ophim'); ?>
<?php if (op_get_trailer_url()) {
    parse_str( parse_url( op_get_trailer_url(), PHP_URL_QUERY ), $my_array_of_vars );
    $video_id = $my_array_of_vars['v'];

    ?>
<div class="stui-modal fade" id="modal-trailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="stui-modal__dialog">
        <div class="stui-modal__content">
            <div class="stui-pannel clearfix">
                <div class="stui-pannel-box clearfix">
                    <div class="stui-pannel_hd">
                        <div class="stui-pannel__head active bottom-line clearfix">
                            <a href="javascript:;" class="more close pull-right" data-dismiss="modal"
                               aria-hidden="true">
                                <i class="icon iconfont icon-close"></i>
                            </a>
                            <h3 class="title">Trailer phim <?php the_title(); ?></h3>
                        </div>
                    </div>
                    <div class="stui-pannel_bd clearfix">
                        <iframe src="https://www.youtube.com/embed/<?= $video_id ?>"
                                style="width: 100%;height: 100%;" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php     } ?>
<?php
add_action('wp_footer', function (){?>
    <script>

        $(function() {
            $("#show-trailer").click(function() {
                $("#modal-trailer").modal('show');
            })
            $(".detail-more").click(function() {
                $(this).parent().find(".detail-sketch").addClass("hide");
                $(this).parent().find(".detail-content").css("display","");
                $(this).remove();
            })
        })
    </script>
    <script src="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.js"></script>
    <link href="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.css" rel="stylesheet" type="text/css" />
    <script>
        var rated = false;
        $('#movies-rating-star').raty({
            score: <?= op_get_rating() ?>,
        number: 10,
            numberMax: 10,
            hints: ['quá tệ', 'tệ', 'không hay', 'không hay lắm', 'bình thường', 'xem được', 'có vẻ hay', 'hay',
            'rất hay', 'siêu phẩm'
        ],
            starOff: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-off.png',
            starOn: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-on.png',
            starHalf: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-half.png',
            click: function(score, evt) {
            if (rated) return
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php')?>',
                    type: 'POST',
                    data: {
                        action: "ratemovie",
                        rating: score,
                        postid: '<?php echo get_the_ID(); ?>',
                    },
                }).done(function (data) {
                    rated = true;
                    $('#movies-rating-star').data('raty').readOnly(true);
                    alert(`Bạn đã đánh giá ${score} sao cho phim này!`);

                });

        }
        });
    </script>
    

<?php }) ?>