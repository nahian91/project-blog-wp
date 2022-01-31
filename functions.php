<?php

function belfast_setup() {
    load_theme_textdomain('belfast', get_template_directory() . '/languages');
    add_theme_support('title-tag');

    add_theme_support('post-formats', array('audio', 'vidoe'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'belfast')
    ));
}
add_action('after_setup_theme', 'belfast_setup');

function belfast_assets() {
    
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-belfast', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'belfast_assets');


/**
 * Add a sidebar.
 */
function belfast_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'belfast' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'belfast' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'belfast_widgets_init' );


// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

// Author Widget
class Author_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'author-widget',  // Base ID
            __('Author Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Author_Widget' );
        });
 
    }
 
    public function widget( $args, $instance ) {
 
        $widget_id = 'widget_'. $args['widget_id'];
        $author_img = get_field('author_image', $widget_id);
        $author_name = get_field('author_name', $widget_id);
        $author_description = get_field('author_description', $widget_id);
        $author_socials = get_field('author_socials', $widget_id);

        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        ?>
            <div class="sidebar-about centred">
                <figure class="img-box"><img src="<?php echo $author_img['url'];?>" alt="<?php echo $author_name;?>"></figure>
                <h5 class="name"><?php echo $author_name;?></h5>
                <div class="text"><p><?php echo $author_description;?></p></div>
                <ul class="social-link">
                    <?php
                        foreach($author_socials as $author_social){
                    ?>
                        <li>
                            <a href="<?php echo $author_social['icon_url'];?>"><i class="<?php echo $author_social['icon_name'];?>"></i></a> 
                        </li>   
                    <?php
                        }
                    ?>
                </ul>
            </div>
        <?php
        
 
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'belfast' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
}
$author_widget = new Author_Widget();



// Latest Post Widget
class Latest_Post extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'latest-post-widget',  // Base ID
            __('Latest Post Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Latest_Post' );
        });
 
    }
 
    public function widget( $args, $instance ) {
 
        $widget_id = 'widget_'. $args['widget_id'];
        $post_show_count = get_field('post_show_count', $widget_id);
        $post_order = get_field('post_order', $widget_id);
        $show_date = get_field('show_date', $widget_id);
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        ?>
            <div class="sidebar-post">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $post_show_count,
                    'order' => $post_order
                );
                $query = new WP_Query($args);
                while($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class="single-post">
                        <div class="img-box"><a href="<?php the_permalink();?>"><figure><img src="<?php the_post_thumbnail_url();?>" alt=""></figure></a></div>
                        <h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                        <?php if($show_date == true) {
                        ?>
                            <div class="text"><?php the_date();?></div>
                        <?php
                        } ?>
                        
                    </div>
                <?php
                }
            ?>
                
            </div>
        <?php
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'belfast' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
}
$latest_post = new Latest_Post();

// Newsletter Widget
class Newsletter extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'newsletter-widget',  // Base ID
            __('Newsletter Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Newsletter' );
        });
 
    }
 
    public function widget( $args, $instance ) {

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        ?>
            <div class="sidebar-newsletter centred">
                <?php echo do_shortcode('[contact-form-7 id="147" title="newsletter"]');?>
            </div>
        <?php
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'belfast' );
        $desc = ! empty( $instance['desc'] ) ? $instance['desc'] : esc_html__( '', 'belfast' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
}
$newsletter = new Newsletter();

// Belfast Category Widget
class Belfast_Category extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'category',  // Base ID
            __('Category Widget')   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Belfast_Category' );
        });
 
    }
 
    public function widget( $args, $instance ) {

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        ?>
            <div class="sidebar-categories">
                <ul class="categories-list"> 
                    <?php
                        $cats = get_categories();
                        foreach($cats as $cat) {
                    ?>
                        <li><a href="<?php echo $cat->slug;?>"><?php echo $cat->cat_name;?><span>(<?php echo $cat->category_count;?>)</span></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        <?php
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'belfast' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
}
$category = new Belfast_Category();


function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );