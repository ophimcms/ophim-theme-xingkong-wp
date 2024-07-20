<div class="col-lg-wide-2 col-xs-1 stui-pannel-side visible-lg">
    <?php
    if ( is_active_sidebar('left-sidebar') ) {
        dynamic_sidebar( 'left-sidebar' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    } ?>
</div>
