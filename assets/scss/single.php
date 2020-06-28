<?php get_header();?>
    <main>
        <section class="container mx-auto my-5" id="blog-content">
            <div class="row py-5">
                <div class="col-12 col-md-3">
                    <?php dynamic_sidebar('first_sidbar');?>

                    <?php dynamic_sidebar('second_sidbar');?>
                </div>
                <div class="col-12 col-md-9">
                    <?php while (have_posts()):the_post(); ?>
                        <div class="blog-resume-content">
                            <p><?php the_title(); ?></p>
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                            <article>

                                <span><?php the_content(); ?></span>
                            </article>
                        </div>
                        <div class="blog-resume-footer">

                            <p class="blog-resume-categories">
                                <i class="fa fa-folder-open"></i>
                                <span>دسته بندی</span>
                                <?php  the_category(); ?>
                            </p>
                            <p class="blog-resume-categories">
                                <i class="fa fa-flag"></i>
                                <?php the_tags(); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>