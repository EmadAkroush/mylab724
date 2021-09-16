<?php /* Template Name: blog */ ?>

<?php get_header(); ?>
 
     <div class="container">
          
                 <div class="row">

                     <div class="col-md-3 side-right-blog">


                         <div class="row">
                            
                             <div class="col-md-12">
                                 <div class="row box-shadow-blog">
                                     <p class="side-menu-p"> دسته بندی مطالب وبلاگ </p>
                                     <nav class="navigation">
                                         <ul class="mainmenu">
                                             <li><a href="">لورم اپیسوم متن</a>
                                                 <ul class="submenu">
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="">لورم اپیسوم متن</a>
                                                 <ul class="submenu">
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="">لورم اپیسوم متن</a>
                                                 <ul class="submenu">
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="">لورم اپیسوم متن</a>
                                                 <ul class="submenu">
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                     <li><a href="">لورم اپیسوم متن</a></li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </nav>
                                 </div>


                                 <div class="row box-shadow-blog">
                                     <div class="col-md-6">
                                         <p class="maghalate-pish"> مقالات پیشنهادی </p>

                                     </div>

                                     <div class="col-md-6">
                                         <hr class="blog-hr-bottom">

                                     </div>
                                     <?php 
                $_arges = array(
                    'post_per_page' => 2,
                    'offset' =>0,
                    'category' =>'',
                    'category_name' => '',
                    'orderby' => 'post_date',
                    'order' => 'desc',
                    'include' =>'',
                    'exclude' =>'',
                    'meta_key' =>'',
                    'meta_value' =>'post',
                    'post_type' => '',
                    'post_name_type' => '',
                    'post_parent' => '',
                    'post_status' => 'publish',
                    'suppress_filters' =>true,
                );
                $my_post=get_posts('$arges');
          foreach($my_post as $post)
          {
                ?>

                                     <div class="row inside-side-menu">
                                         <img src="assets/image/body/post-19--slide_01.jpg" class="img-bottom-blog-side">
                                         <p class="onvan-maghale"> عنوان مقاله </p>
                                         <p class="blog-date">date</p>
                                         <button class="blog-botton">ادامه مطلب </button>
                                     </div>
                                     <?php } ?>
                                 </div>
                             </div>
                         </div>
                     </div>


                     <div class="col-md-9">

                         <div class="row">
                          
                          <div class="col-md-12 col">       

                             
                          
                             





                         <div class="row">
                         <?php 
                $_arges = array(
                    'post_per_page' => 4,
                    'offset' =>0,
                    'category' =>'',
                    'category_name' => '',
                    'orderby' => 'post_date',
                    'order' => 'desc',
                    'include' =>'',
                    'exclude' =>'',
                    'meta_key' =>'',
                    'meta_value' =>'post',
                    'post_type' => '',
                    'post_name_type' => '',
                    'post_parent' => '',
                    'post_status' => 'publish',
                    'suppress_filters' =>true,
                );
                $my_post=get_posts('$arges');
          foreach($my_post as $post)
          {
                ?>
                             <div class="col-md-6">
                                 <div data-aos="fade-down" data-aos-duration="4000">

                                     <div class="event-blog">
                                     <?php   the_post_thumbnail( 'medium', array('class' => 'img-blog , img-body-blog')); ?>
                                        
                                         <p class="categori-blog"> <?php  the_category( ' ' ); ?>  </p>
                                         <h3 class="onvan-blog-post"> <?php echo get_the_title();  ?>  </h3>
                                         <p>
                                         <?php  the_excerpt();    ?>
                                         </p>
                                         <div class="row">
                                             <div class="col-md-4 col">
                                                 <p class="blog-write">
                                                 <?php ?>


                                                 </p>
                                             </div>
                                             <div class="col-md-4 col">
                                                 <p class="blog-date"> 
                                                <?php echo get_the_date();?>     
                                                </p>
                                             </div>
                                             <div class="col-md-4 col">
                                                 <a href="<?php the_permalink();  ?>" class="buttun_link_product">
                                                 <button class="blog-botton">ادامه مطلب </button>
                                                 </a>
                                             </div>
                                             <div class="row">
                                                 <hr class="blog-hr">
                                             </div>
                                             <div class="row">

                                                 <div class="col-md-8 sharing-icon-blog">
                                                     <div class="row">
                                                         <div class="col-md-3 col">
                                                             <img src="assets/image/body/blog-icon1%20(1).svg" class="blog-sharing-icon">
                                                         </div>



                                                         <div class="col-md-3 col ">
                                                             <img src="assets/image/body/blog-icon1%20(2).svg" class="blog-sharing-icon">
                                                         </div>



                                                         <div class="col-md-3 col">
                                                             <img src="assets/image/body/blog-icon1%20(3).svg" class="blog-sharing-icon">
                                                         </div>



                                                         <div class="col-md-3 col">
                                                             <img src="assets/image/body/blog-icon1%20(4).svg" class="blog-sharing-icon">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>
                         </div>
                          </div>
                         </div>
                     


                             



                                 <div class="row">
                                     <div class="col-md-3  col-6 ddddd">

                                         <nav aria-label="Page navigation example">
                                             <ul class="pagination">
                                                 <li class="page-item">
                                                     <a class="page-link" href="#" aria-label="Previous">
                                                         <span aria-hidden="true">&laquo;</span>
                                                     </a>
                                                 </li>
                                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                 <li class="page-item">
                                                     <a class="page-link" href="#" aria-label="Next">
                                                         <span aria-hidden="true">&raquo;</span>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </nav>
                                     </div>
                                 </div>

                                 <div class="row">

                                     <div class="col-md-4 col div-search-blog">
                                         <button class="button-blog-bottom"> به دنبال چه مطلبی هستی </button>
                                     </div>

                                     <div class="col-md-8 col">
                                         <div class="main">

                                             <!-- Actual search box -->
                                             <div class="form-group has-search">
                                                 <span class="fa fa-search form-control-feedback"></span>
                                                 <input type="text" class="form-control" placeholder="Search">
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="row box-shadow-blog">
                                     <div class="row up-bottom-blog">
                                         <div class="col-md-2">
                                             <p class="akharin-maghalate-blog"> آخرین مقالات </p>
                                         </div>
                                         <div class="col-md-10">
                                             <hr class="blog-hr-bottom">
                                         </div>

                                     </div>

                                     <div class="row footer-blog-bottum">
                                     <?php 
                $_arges = array(
                    'post_per_page' => 4,
                    'offset' =>0,
                    'category' =>'',
                    'category_name' => '',
                    'orderby' => 'post_date',
                    'order' => 'desc',
                    'include' =>'',
                    'exclude' =>'',
                    'meta_key' =>'',
                    'meta_value' =>'post',
                    'post_type' => '',
                    'post_name_type' => '',
                    'post_parent' => '',
                    'post_status' => 'publish',
                    'suppress_filters' =>true,
                );
                $my_post=get_posts('$arges');
          foreach($my_post as $post)
          {
                ?>
                                         <div class="col-md-3">
                                             <div data-aos="zoom-out-left" data-aos-duration="5000">
                                                 <?php   the_post_thumbnail( 'medium', array('class' => 'img-bottom-blog')); ?>
                                                 <p class="onvan-maghale"> <?php echo get_the_title();  ?> </p>
                                                 <p class="blog-date">date</p>
                                                 <a href="<?php the_permalink();  ?>" class="buttun_link_product">

                                                 <button class="blog-botton">ادامه مطلب </button>
                                                 </a>
                                             </div>
                                         </div>
                <?php } ?>
             
                                          

                                     </div>

                                 </div>

                                 <div class="row">
                                     <div class="col-md-3 col">
                                         <button class="button-blog-bottom"> عضویت در خبر نامه </button>
                                     </div>
                                     <div class="col-md-6 col">


                                         <div class="">
                                             <div class="main">

                                                 <!-- Actual search box -->
                                                 <div class="form-group has-search">
                                                     <span class="fa fa-search form-control-feedback"></span>
                                                     <input type="text" class="form-control" placeholder="Search">
                                                 </div>
                                             </div>
                                         </div>


                                     </div>
                                     <div class="col-md-2">
                                         <div class="row">
                                             <div class="col-md-4 col">
                                                 <img src="" class="blog-icon-bottom">
                                             </div>
                                             <div class="col-md-4 col">
                                                 <img src="assets/image/body/blog-icon1%20(3).svg" class="blog-icon-bottom">
                                             </div>
                                             <div class="col-md-4 col">
                                                 <img src="assets/image/body/blog-icon1%20(4).svg" class="blog-icon-bottom">
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="row">
                                     <hr class="blog-hr-bottom">
                                     <p class="blog-copy-rights">copy rights 2021</p>
                                 </div>



                             </div>



             </div>
         </div>
     </div>

         <script defer src="assets/FontAwesome.Pro.5.15.2.Web/js/all.js"></script>
         <script src="assets/jquery-3.6.0.min.js"> </script>
         <script src="assets/custom.js"></script>
         <script src="assets/bootstrap-5.0.1-dist/js/bootstrap.min.js"> </script>
         <script src="assets/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js.map"> </script>
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script>
             AOS.init();

         </script>


 </body>

 </html>
