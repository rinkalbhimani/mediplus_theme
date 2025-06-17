<?php
get_header();

?>

<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'medical_news'):
                        $header_text = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $medical_section_image = get_sub_field('medical_section_image');

                        ?>
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2><?php echo $header_text; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $medical_section_image['filename']; ?>"
                                    alt="#">
                                <p><?php echo $desc; ?></p>
                            </div>
                        </div>
                        <?php
                    endif;
                endwhile;
            endif;
            ?>
        </div>
        <div class="row">
            <?php
            // Query to get blog posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3, // Change this to the number of posts you want to display
                'post_status' => 'publish'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <a href="<?php the_permalink(); ?>">
                            <div class="single-news">
                                <div class="news-head">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date"><?php echo get_the_date('d M, Y'); ?></div>
                                        <h2><a href="blog-single.html"><?php the_title(); ?></a></h2>
                                        <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Single Blog -->
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<?php
// get_footer('inner');
get_footer();
?>