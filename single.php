<?php
get_header();
the_post();
?>
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Blog Single</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Blog Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Single News -->
<section class="news-single section">
    <div class="container">
        <div class="row">
            <?php 
            $ImagePath = wp_get_attachment_image_src(get_post_thumbnail_id());
            $comments_number = get_comments_number();
            ?>
            <div class="col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="<?php echo $ImagePath[0]; ?>" alt="#">
                            </div>
                            <!-- News Title -->
                            <h1 class="news-title"><a href="news-single.html"><?php the_title(); ?></a></h1>
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="author"><a href="#"><img
                                                src="<?php bloginfo('template_directory'); ?>/img/author1.jpg"
                                                alt="#"><?php the_author(); ?></a></span>
                                    <span class="date"><i class="fa fa-clock-o"></i><?php the_date(); ?></span>
                                </div>
                                <div class="meta-right">
                                    <span class="comments"><a href="#"><i
                                                class="fa fa-comments"></i><?php echo $comments_number; ?>
                                            Comments</a></span>
                                    <span class="views"><i class="fa fa-eye"></i>33K Views</span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <p><?php the_content(); ?></p>
                                <div class="image-gallery">
                                    <div class="row">
                                        <?php
                                        // Set up the query for recent posts
                                        $recent_posts_args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'posts_per_page' => 2, // Number of recent posts to show in the gallery
                                            'post__not_in' => array(get_the_ID()), // Exclude the current post
                                        );
                                        $recent_posts_query = new WP_Query($recent_posts_args);

                                        if ($recent_posts_query->have_posts()):
                                            while ($recent_posts_query->have_posts()):
                                                $recent_posts_query->the_post(); ?>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="single-image">
                                                        <?php if (has_post_thumbnail()): ?>
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php the_post_thumbnail(); ?>
                                                            </a>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            <?php endwhile;
                                            wp_reset_postdata();
                                        else: ?>
                                            <p>No recent posts available.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a href="#"><i
                                                class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="twitter"><a href="#"><i
                                                class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <!-- Next Prev -->
                                <ul class="prev-next">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                                <!--/ End Next Prev -->
                            </div>
                        </div>
                    </div>

                    <?php
                    // Check if comments are open or if there are comments
                    if (comments_open() || get_comments_number()):
                        comments_template(); // Display the comments template
                    endif;
                    ?>

                </div>
            
            <div class="col-md-4 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <input type="email" placeholder="Search Here...">
                            <a class="button" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <?php
                        $category = get_the_category(); ?>
                        <h3 class="title">Blog Categories</h3>
                        <ul class="categor-list">
                            <?php
                            foreach ($category as $cat):
                                ?>
                                <li><a href="<?php get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Recent post</h3>
                        <!-- Single Post -->
                        <?php
                        $recenet_post = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 2, // Number of recent posts to show in the gallery
                            'post__not_in' => array(get_the_ID()),
                        );
                        $query = new WP_Query($recenet_post);
                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                ?>
                                <div class="single-post">
                                    <div class="image">
                                        <?php
                                        if (has_post_thumbnail()):
                                            the_post_thumbnail();
                                        endif;
                                        ?>
                                    </div>
                                    <div class="content">
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <ul class="comment">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date(); ?>
                                            </li>
                                            <li><i class="fa fa-commenting-o"
                                                    aria-hidden="true"></i><?php echo $query->comment_count; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget side-tags">
                        <h3 class="title">Tags</h3>
                        <?php
                        $tags = get_the_tags();
                        ?>
                        <ul class="tag">
                            <?php
                            foreach ($tags as $tag): ?>
                                <li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
                                <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
               
                <!--/ End Single Widget -->
            </div>
        </div>
    </div>
    </div>
   
</section>
<!--/ End Single News -->
<?php //get_footer('inner'); ?>

<?php get_footer(); ?>