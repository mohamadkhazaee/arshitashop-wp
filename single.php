<?php get_header(); ?>
<main>
            <section class="container-fluid blog-single-page">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="blog-page-sidebar-container">
                            <div class="blog-page-slidebar-categories">
                                <h3 class="title">
                                    <i class="mdi mdi-format-list-bulleted mdi-rotate-180"></i>
                                    دسته ها</h3>
                                <ul class="categories">
                                    <?php
                                    $categories_blogs_args = array(
                                        'hierarchical' => 1,
                                        'show_option_none' => '',
                                        'hide_empty' => 0,
                                        'parent' => 64,
                                    );
                                 
                                 $categories_blog =  get_categories( $categories_blogs_args);
                                 foreach($categories_blog as $category){
                                    $category_link = get_category_link($category->cat_ID);

                                        ?>
                                        <li>
                                        <a href="<?php echo $category_link ?>"><?php echo $category->name; ?></a>
                                            </li>
                                   <?php  };
                                     
                                    ?>
                                </ul>
                            </div>
                            <div class="blog-page-sidebar-recents">
                                <h3 class="title">
                                    <i class="mdi mdi-new-box"></i>
                                    آخرین مطالب
                                </h3>
                                <?php $recent_posts_args = array(
                                            'post_type' => 'post' ,
                                            'category_name' => 'blog',
                                            'posts_per_page' => 5,
                                        );
                                        $recent_posts_query = new WP_Query($recent_posts_args);
                                        
                                         ?>
                                <ul class="recents">
                                    <?php while($recent_posts_query->have_posts()) :
                                        $recent_posts_query->the_post(); ?>
                                    
                                    <li>
                                        <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail() ?>
                                            <?php the_title( ); ?>
                                        </a>
                                    </li>
                                    <?php endwhile; wp_reset_postdata() ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                       <div class="blog-page-content">
                        <nav>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">خانه</a></li>
                              <li class="breadcrumb-item"><a href="#">وبلاگ</a></li>
                              <li class="breadcrumb-item active" aria-current="page">مطلب 3</li>
                            </ol>
                          </nav>       
                          <div class="post-container">
                          <?php while (have_posts()):the_post(); ?>
                              <div class="post-header">
                                  <h1><?php the_title(); ?></h1>
                                <div class="post-time">
                                    <i class="mdi mdi-clock-outline"></i>
                                   <?php echo get_the_date( ' d / m / y ') ?>
                                </div>
                                </div>
                                <div class="post-content">
                               <?php the_content(); ?>
                                </div>
                                <div class="post-footer">
                                    <div class="footer-row">
                                        <i class="mdi mdi-pen"></i>

                                         نویسنده :
                                        <a href="<?php echo get_the_author_url( ) ?>"><?php the_author() ?></a>
                                    </div>
                                    <div class="footer-row">
                                        <i class="mdi mdi-folder-open-outline"></i>
                                        دسته ها :
                                        <?php  the_category( ' , '); ?>
                                    </div>
                                    <div class="footer-row">
                                        <i class="mdi mdi-code-tags"></i>
                                        تگ ها :
                                                <?php the_tags(' , '); ?>
                                  </div>
                                </div>
                          </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </section>
  </main>
   
<?php get_footer(); ?>