<?php
get_header();
?>
<style type="text/css">
    .stui-vodlist__thumb.banner {
        padding-top: 30%;
    }

    @media (max-width:767px) {
        .stui-vodlist__thumb.banner {
            padding-top: 45%;
        }
    }
</style>
<?php if ( is_active_sidebar('widget-slider-poster') ) {
    dynamic_sidebar( 'widget-slider-poster' );
} else {
    _e('This is widget poster. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<?php if ( is_active_sidebar('widget-area') ) {
    dynamic_sidebar( 'widget-area' );
} else {
    _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>

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
