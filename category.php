<?php get_header(); ?>
<main>
            <section class="container-fluid blog-category-page">
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
                     <div class="row">
                     <?php 
                                        if ( have_posts() ) :
                                            while ( have_posts() ) : the_post(); ?>
                                               <div class="col-12 col-md-6 col-lg-3">            
                         <div class="blog-item">
                         <a href="<?php the_permalink(); ?>">
                         <?php echo get_the_post_thumbnail(); ?>                                                 <div class="item-body">
                                                   
                                                   <h2 class="item-title">
                                                    <?php the_title(); ?>

                                                </h2>
                                                   </a> 
                                                    <div class="item-details">
                                                        <span class="item-author">
                                                            <i class="mdi mdi-account-edit"></i>
                                                            <span href="<?php the_author_url() ?>">
                                                            <?php the_author(); ?>
                                                            </span>
                                                        </span>
                                                        <div class="item-date">
                                                            <i class="mdi mdi-clock-outline"></i>
                                                            <span>
                                                                12/11/98
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                         </div>
                                            <?php endwhile;
                                        else :
                                            _e( 'Sorry, no posts were found.', 'textdomain' );
                                        endif;
                             ?>
                        
                     </div>
                </div>
            </section>
  </main>
   
<?php get_footer(); ?>