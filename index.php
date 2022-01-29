<?php get_header();?>

    <section class="slider-style-six">
        <div class="container">
            <div class="row">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query($args);
                while($query->have_posts()) {
                    $query->the_post();
            ?>
                

                <?php
                    if( 1 > $query-> current_post) {
                ?>
                <div class="col-md-8 col-sm-12 col-xs-12 first-column">
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category();?></div>
                                            <div class="title"><h3><a href="<?php the_permalink();?>"> <?php the_title();?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date();?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author();?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 column">
                <?php
                    }
                    else if( 3 > $query->current_post) {
                ?>
                    
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category();?></div>
                                            <div class="title"><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date();?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author();?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                wp_reset_postdata();
            ?>

            </div>
        </div>
    </section>

    <?php
    $my_acf_checkbox_field_arr = get_field('is_featured');
    print_r($my_acf_checkbox_field_arr);
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key'   => 'is_featured',
                    'value' => 'yes',
                ),
            )
        );
        $query = new WP_Query( $args );
        while($query->have_posts()) {
            $query->the_post();
            the_title();
        }
    ?>

    <!-- carousel-style-one -->
    <section class="carousel-style-one mar-bottom-100">
        <div class="single-item-carousel-overlay owl-control-none">
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri();?>/images/home4/1.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                    <div class="title"><h6><a href="post2.html">Love Boat soon will be making<br /> another run</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri();?>/images/home4/2.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">BEAUTY</a></div>
                                    <div class="title"><h6><a href="post2.html">The professor and Mary Ann here<br /> on Gilligans</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri();?>/images/home4/3.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Lifestyle</a></div>
                                    <div class="title"><h6><a href="post2.html">Call him flipper flipper faster<br /> than lightning</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri();?>/images/home4/4.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Music</a></div>
                                    <div class="title"><h6><a href="post2.html">A maximum security stockade to<br /> Los Angeles</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-item-overlay">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri();?>/images/home4/5.jpg" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><a href="#">Fashion</a></div>
                                    <div class="title"><h6><a href="post2.html">East side to a deluxe apartment<br /> in the sky</a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carousel-style-one end -->


    <!-- blog side -->
    <section class="blog-side blog-style-one blog-style-three">
        <div class="container">
            <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/4.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Flying away on a wing</a></h4></div>
                                            <div class="date"><span>On</span> JANUARY 19, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/5.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">The kitchen and beans</a></h4></div>
                                            <div class="date"><span>On</span> JANUARY 30, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/6.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">LIFESTYLE</a></div>
                                            <div class="title"><h4><a href="post1.html">Five passengers set sail that day</a></h4></div>
                                            <div class="date"><span>On</span> February 10, 2017 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/7.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">TRAVEL</a></div>
                                            <div class="title"><h4><a href="post1.html">Smile from seven stranded</a></h4></div>
                                            <div class="date"><span>On</span> February 25, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/8.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">FASHION</a></div>
                                            <div class="title"><h4><a href="post1.html">Most of this beautiful day</a></h4></div>
                                            <div class="date"><span>On</span> March 07, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/9.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">MUSIC</a></div>
                                            <div class="title"><h4><a href="post1.html">Scream the addams family</a></h4></div>
                                            <div class="date"><span>On</span> March 19, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/10.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">LIFESTYLE</a></div>
                                            <div class="title"><h4><a href="post1.html">Take a step that is new</a></h4></div>
                                            <div class="date"><span>On</span> April 15, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?php echo get_template_directory_uri();?>/images/home2/11.jpg" alt=""></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="post1.html"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-three">
                                        <div class="top-content centred">
                                            <div class="meta-text"><a href="#">TRAVEL</a></div>
                                            <div class="title"><h4><a href="post1.html">Mister we could use a man</a></h4></div>
                                            <div class="date"><span>On</span> May 13, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                        </div>
                                        <div class="text">
                                            <p>The need no welfare states starship enterprise theatre Brady Bunch that's the way we all be came the Braden Bunch these days are all Happy and Free these days a fish do not fry in the kitchen and beans...</p>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 19</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 13</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-pagination centred">
                            <li><a href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                    <div class="sidebar-content">
                        <?php dynamic_sidebar('sidebar-1');?>
                        
                        <div class="sidebar-instagram">
                            <div class="sidebar-title">INSTAGRAM</div>
                            <ul class="img-list clearfix"> 
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i1.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i2.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i3.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i4.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i5.jpg" alt=""></a></figure></li>
                                <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/home/i6.jpg" alt=""></a></figure></li>
                            </ul>
                        </div>
                        
                        <div class="sidebar-img-content">
                            <div class="single-item">
                                <figure class="img-box"><img src="<?php echo get_template_directory_uri();?>/images/home/12.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <figure class="img-box"><img src="<?php echo get_template_directory_uri();?>/images/home/13.jpg" alt=""></figure>
                                 <div class="inner-box">
                                    <div class="content">
                                        <div class="meta-text"><a href="#">MUSIC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog side end -->
<?php get_footer();?>