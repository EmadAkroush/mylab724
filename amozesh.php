<?php /* Template Name: amozesh */ ?>

<?php get_header(); ?>

<div class="" id="main-content">
        <div class="row first-row-amozesh">
            <div class="background-header-azmayesh">
            </div>
            <div class="col-md-10 header-azmayesh-components">
                <div class="row">
                    <div class="col-md-6  col-inside-header-azmayesh">
                        <div data-aos="zoom-out-left" data-aos-duration="4000">

                            <div class="inside-amozesh-middle">
                                <h2 class="h2-header-azmayesh"> لورم اپیسوم متن ساختگی </h2>
                                <p class="p-header-azmayesh"> شما را با تکنولوژی هوش مصنوعی به آینده می بریم </p>



                                <div class="" onclick="scrollupamozesh()">
                                    <i class="fas fa-angle-down move-to-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div data-aos="zoom-out-right" data-aos-duration="4000">

                            <img src="<?php bloginfo('template_url'); ?>/assets/image/header/sliderbig.png" class="slider-azmayesh">
                        </div>
                    </div>

                    <div class="col-md-6  col-inside-header-azmayesh-mobile">
                        <div class="inside-amozesh-middle">
                            <h2 class="h2-header-azmayesh"> لورم اپیسوم متن ساختگی </h2>
                            <p class="p-header-azmayesh"> شما را با تکنولوژی هوش مصنوعی به آینده می بریم </p>


                            <div class="move-to-down">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-10 col-sm-10 col div-azmayesh-video">
                <h2> لورم اپیسوم متن ساختگی </h2>
                <div data-aos="zoom-in-up" data-aos-duration="4000">
                    <video id="video-azmayesh" class="video-js vjs-big-play-centered" controls preload="auto" poster="<?php bloginfo('template_url')?>/assets/image/body/lab.jpg" data-setup="{}" border-radius="25px 25px 0px 0px">
                        <source src="<?php bloginfo('template_url')?>/assets/video/labmovie.mp4" type="video/mp4" type="video/mp4" />
                        <source src="<?php bloginfo('template_url')?>/MY_VIDEO.webm" type="video/webm" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 div-text-titre-azmayesh">
                <p> لورم اپیسوم متن ساختگی از صنعت چاپ و با استفاده از طراحان گرافیکی است </p>
            </div>
        </div>



        <div class="row div-azmayesh-colyavi-mother">
            <div class="col-md-10 div-azmayesh-colyavi">
                <div class="row">
                    <div class="col-md-6 col">
                        <div data-aos="zoom-out-left" data-aos-duration="4000">

                            <video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto" poster="<?php bloginfo('template_url')?>/assets/image/body/lab.jpg" data-setup="{}" border-radius="25px 25px 0px 0px">
                                <source src="<?php bloginfo('template_url')?>/assets/video/labmovie.mp4" type="video/mp4" type="video/mp4" />
                                <source src="<?php bloginfo('template_url')?>/MY_VIDEO.webm" type="video/webm" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>
                        </div>
                    </div>
                    <?php
                                   $args = array(
                                    'p'         => 84 , // ID of a page, post, or custom type
                                    'posts_per_page' => 5,
                                    

                                  );
                                  $my_posts = new WP_Query($args);
                                  if ($my_posts->have_posts()) : 
                                    while ($my_posts->have_posts()) :
                                        $my_posts->the_post(); 
                                      ?>
                                      
                    <div class="col-md-6 col">
                        <div data-aos="zoom-out-right" data-aos-duration="4000">

                            <img src="<?php bloginfo('template_url'); ?>/assets/image/body/koliye.svg" class="icon-koliyavi-azmayesh">
                            <p class="p-moshkelat-koliyavi"> مشکلات کلیوی </p>
                            <h3>  <?php the_title(); ?> </h3>
                            <p>  <?php echo get_the_excerpt();  ?> </p>
                            <a href="<?php the_permalink();  ?>" class="buttun_link_product">
                            <button class="botton-azmayesh">
                               
                                ادامه مطلب
                            </button>
                            </a>
                        </div>
                    </div>

                    <?php
                                    endwhile;
                                   ?>
                                  <?php else:  ?>
         <?php _e( 'No Products' ); ?>
    <?php endif; ?>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 div-text-titre-azmayesh">
                <p> لورم اپیسوم متن ساختگی از صنعت چاپ و با استفاده از طراحان گرافیکی است </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-10 div-azmayesh-colyavi">
                <div class="row">
                <?php
                                   $args = array(
                                    'p'         => 84 , // ID of a page, post, or custom type
                                    'posts_per_page' => 5,
                                    

                                  );
                                  $my_posts = new WP_Query($args);
                                  if ($my_posts->have_posts()) : 
                                    while ($my_posts->have_posts()) :
                                        $my_posts->the_post(); 
                                      ?>
                    <div class="col-md-6 col">
                        <div data-aos="zoom-out-left" data-aos-duration="4000">

                            <img src="<?php bloginfo('template_url'); ?>/assets/image/body/koliye.svg" class="icon-koliyavi-azmayesh">
                            <p class="p-moshkelat-koliyavi"> مشکلات کلیوی </p>
                            <h3> <?php the_title(); ?> </h3>
                            <p> <?php echo get_the_excerpt();  ?> </p>
                            <a href="<?php the_permalink();  ?>" class="buttun_link_product">

                            <button class="botton-azmayesh">
                                ادامه مطلب
                            </button>

                            </a>

                        </div>
                    </div>
                    <?php
                                    endwhile;
                                   ?>
                                  <?php else:  ?>
         <?php _e( 'No Products' ); ?>
    <?php endif; ?>

                    <div class="col-md-6 col">
                        <div data-aos="zoom-out-right" data-aos-duration="4000">

                            <video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto" poster="<?php bloginfo('template_url')?>/assets/image/body/lab.jpg" data-setup="{}" border-radius="25px 25px 0px 0px">
                                <source src="<?php bloginfo('template_url')?>/assets/video/labmovie.mp4" type="video/mp4" type="video/mp4" />
                                <source src="<?php bloginfo('template_url')?>/MY_VIDEO.webm" type="video/webm" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>
                        </div>
                    </div>

                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-md-4 inside-azmayesh-icons">

                <h3 class="h3"> به راحتی تست ادرار بد! </h3>

            </div>
        </div>

        <div class="div">
            <div class="col-md-11 col-azmayesh-icons">
                <div class="event">
                    <div class="row">
                        <div class="col-md-10 col-azmayesh-icons-inside">
                            <div class="row">
                                <div class="col-md-3">
                                    <div data-aos="zoom-out-left" data-aos-duration="5000">
                             

                                        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_eukxp6uj.json" background="transparent" speed="1" class="img-botton-azmayesh" loop autoplay></lottie-player>
                                        <p class="p-icons-botton-azmayesh"> نمونه گیری </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div data-aos="zoom-out-left" data-aos-duration="4000">

                                         <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_ual7d1w6.json" background="transparent" speed="1" class="img-botton-azmayesh" loop autoplay></lottie-player>
                                         
                                        <p class="p-icons-botton-azmayesh"> اسکن نوار </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div data-aos="zoom-out-left" data-aos-duration="3000">

                                        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_mtza3gce.json" background="transparent" speed="1" class="img-botton-azmayesh" loop autoplay></lottie-player>
                                        <p class="p-icons-botton-azmayesh"> نتیجه تست </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div data-aos="zoom-out-left" data-aos-duration="2000">

                                        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_cszr3odk.json" background="transparent" speed="1" class="img-botton-azmayesh" loop autoplay></lottie-player>

                                        <p class="p-icons-botton-azmayesh"> خرید بسته نوار </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-md-10 div-up">
            <div onclick="scrollup()"><i class="fas fa-angle-up up "></i></div>
        </div>
    </div>






    
        <?php get_footer(); ?>

gtuyut
a
