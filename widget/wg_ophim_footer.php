<?php
class WG_oPhim_Footer extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_footer', // Base ID
            __( 'Ophim Footer', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu footer', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['footer'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('footer'); ?>"><?php _e('Footer', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"  ><?php if(isset($instance['footer']) && $instance['footer']){ echo $instance['footer'];}else{ ?> <footer>
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
                    </footer><?php } ?></textarea>
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['footer'] = $new_instance['footer'];
        return $instance;
    }

}
function register_new_widget_Footer() {
    register_widget( 'WG_oPhim_Footer' );
}
add_action( 'widgets_init', 'register_new_widget_Footer' );
