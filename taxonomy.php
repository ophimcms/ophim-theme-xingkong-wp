<?php
get_header();
?>
<div class="col-lg-wide-8 col-xs-1 padding-0">
    <div class="stui-pannel stui-pannel-bg clearfix">
        <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
                <div>
                    <h2 class="title">Bộ lọc phim</h2>
                    <form action="/" method="GET" id="form-filter">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-3 col-xs-2">
                                <select class="form-control" id="type" name="filter[categories]" form="form-filter">
                                    <option value="">Mọi định dạng</option>
                                    <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                                    <?php foreach($categories as $category) { ?>
                                        <option value='<?php echo $category->name; ?>' ><?php echo $category->name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-3 col-xs-2">
                                <select class="form-control" id="category" name="filter[genres]" form="form-filter">
                                    <option value="">Tất cả thể loại</option>
                                    <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                                    <?php foreach($genres as $genre) { ?>
                                        <option value='<?php echo $genre->name; ?>' ><?php echo $genre->name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-3 col-xs-2">
                                <select class="form-control" name="filter[regions]" form="form-filter">
                                    <option value="">Tất cả quốc gia</option>
                                    <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                                    <?php foreach($regions as $region) { ?>
                                        <option value='<?php echo $region->name; ?>' ><?php echo $region->name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-3 col-xs-2">
                                <select class="form-control" name="filter[years]" form="form-filter">
                                    <option value="">Tất cả năm</option>
                                    <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                                    <?php foreach($years as $year) { ?>
                                        <option value='<?php echo $year->name; ?>'><?php echo $year->name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-3 col-xs-2 text-center">
                                <button type="submit" form="form-filter" class="btn btn-primary">Lọc</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <div class="stui-pannel_hd">
                <h1><?= single_tag_title(); ?></h1>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist clearfix">
                    <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                    <li class="col-md-5 col-sm-4 col-xs-3">
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
                                <p class="text text-overflow text-muted hidden-xs"><?= op_get_original_title() ?></p>
                            </div>
                        </div>
                    </li>
                    <?php } wp_reset_postdata();  } ?>
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
