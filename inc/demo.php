<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<footer>
                    <div class="container">
                    <div class="row">
                    <div class="stui-foot clearfix">
                    <p class="text-center hidden-xs">
                    <a class="fed-font-xiv" href="#" target="_blank">Textlink</a>
                    <span class="fed-font-xiv"> - </span>
                    <a class="fed-font-xiv" href="#" target="_blank">Textlink</a>
                    <span class="fed-font-xiv fed-hide-xs"> - </span>
                    <a class="fed-font-xiv fed-hide-xs" href="#" target="_blank">Textlink</a>
                    <span class="fed-font-xiv fed-hide-xs"> - </span>
                    <a class="fed-font-xiv fed-hide-xs" href="#" target="_blank">Textlink</a>
                    <span class="fed-font-xiv fed-hide-xs"> - </span>
                    <a class="fed-font-xiv fed-hide-xs" href="#" target="_blank">Textlink</a>
                    <span class="fed-font-xiv fed-hide-xs"> - </span>
                    <a class="fed-font-xiv fed-hide-xs" href="#" target="_blank">Textlink</a>
                    <span class="fed-font-xiv fed-hide-xs"> - </span>
                    <a class="fed-font-xiv fed-hide-xs" href="#" target="_blank">Textlink</a>
                    </p>
                    </div>
                    <div class="stui-foot clearfix">
                    <div class="col-pd text-center hidden-xs">
                    Dữ liệu phim miễn phí vĩnh viễn. Cập nhật nhanh, chất lượng cao, ổn định và lâu dài. Tốc độ phát cực nhanh với đường truyền băng thông cao, đảm bảo đáp ứng được lượng xem phim trực tuyến lớn. Đồng thời giúp nhà phát triển website phim giảm thiểu chi phí của các dịch vụ lưu trữ và stream.
                    </div>
                    <p class="share bdsharebuttonbox text-center margin-0 hidden-sm hidden-xs"></p>
                    <p class="text-muted text-center visible-xs">Copyright © 2015-2024 <a href="/" target="_blank">OPHIMCMS</a>
                    </p>
                    </div>
                    </div>
                    </div>
                    </footer>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);