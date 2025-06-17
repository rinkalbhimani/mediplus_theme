<?php
get_header();
get_template_part('template-parts/content/hero', 'slider');
?>

<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <?php if (have_rows('flexible_content')):
                    while (have_rows('flexible_content')):
                        the_row();
                        if (get_row_layout() == 'info_cards'):
                            if (have_rows('cards')):
                                while (have_rows('cards')):
                                    the_row();
                                    $single_text = get_sub_field('single_text');
                                    $single_header = get_sub_field('single_header');
                                    $content = get_sub_field('content');
                                    $read_more = get_sub_field('read_more');
                                    $link_text = get_sub_field('link_text');
                                    $icon = get_sub_field('icon');
                ?>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <!-- single-schedule -->
                                        <div class="single-schedule middle">
                                            <div class="inner">
                                                <div class="icon">
                                                    <i class="<?php echo $icon; ?>"></i>
                                                </div>
                                                <div class="single-content">
                                                    <span><?php echo $single_text; ?></span>
                                                    <h4><?php echo $single_header; ?></h4>
                                                    <p><?php echo $content; ?></p>
                                                    <a href="<?php echo $read_more; ?>"><?php echo $link_text; ?><i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <?php
                                endwhile;
                            endif;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->

<!-- Start Feautes -->
<section class="Feautes section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'emergency_help'):
                        $header_text = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $section_image = get_sub_field('section_image');

            ?>
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2><?php echo $header_text; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $section_image['filename']; ?>"
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
            <?php if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'ready_to_help'):
                        $help_count = count(get_sub_field('emergency_help')); // Count the total items in the repeater
                        $item_index = 0; // Initialize the index
                        if (have_rows('emergency_help')):
                            while (have_rows('emergency_help')):
                                the_row();
                                $item_index++;
                                $help_name = get_sub_field('help_name');
                                $help_description = get_sub_field('help_description');
                                $icon = get_sub_field('icon');
                                $last_item_class = ($item_index === $help_count) ? 'last-item' : '';
            ?>
                                <div class="col-lg-4 col-12 ">
                                    <!-- Start Single features -->
                                    <div class="single-features <?php echo $last_item_class; ?>">
                                        <div class="signle-icon">
                                            <i class="icofont <?php echo $icon; ?>"></i>
                                        </div>
                                        <h3><?php echo $help_name; ?></h3>
                                        <p><?php echo $help_description; ?></p>
                                    </div>
                                    <!-- End Single features -->
                                </div>
            <?php
                            endwhile;
                        endif;
                    endif;
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>
<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'fun_facts'):

                        $counter = get_sub_field('counter');
                        $name = get_sub_field('name');
                        $icon = get_sub_field('icon');

            ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Start Single Fun -->
                            <div class="single-fun">
                                <i class="<?php echo $icon; ?>"></i>
                                <div class="content">
                                    <span class="counter"><?php echo $counter; ?></span>
                                    <p><?php echo $name; ?></p>
                                </div>
                            </div>
                            <!-- End Single Fun -->
                        </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div>
<!--/ End Fun-facts -->

<!-- Start Why choose -->
<section class="why-choose section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'services'):
                        $header_text = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $section_images = get_sub_field('service_section_image');
            ?>
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2><?php echo $header_text; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $section_image['filename']; ?>"
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
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <?php
                    if (have_rows('flexible_content')):
                        while (have_rows('flexible_content')):
                            the_row();
                            if (get_row_layout() == 'service_content'):
                    ?>
                                <h3><?php echo get_sub_field('header'); ?></h3>
                                <?php
                            endif;
                        endwhile;
                    endif;
                    if (have_rows('flexible_content')):
                        while (have_rows('flexible_content')):
                            the_row();
                            if (get_row_layout() == 'service_content'):
                                if (have_rows('content')):
                                    while (have_rows('content')):
                                        the_row();
                                ?>
                                        <p><?php echo get_sub_field('sub_content'); ?></p>
                    <?php
                                    endwhile;
                                endif;
                            endif;
                        endwhile;
                    endif;
                    ?>

                    <div class="row">
                        <?php
                        if (have_rows('flexible_content')):
                            while (have_rows('flexible_content')):
                                the_row();
                                if (get_row_layout() == 'service_content'):
                                    if (have_rows('list')):
                                        while (have_rows('list')):
                                            the_row();
                        ?>
                                            <div class="col-lg-6">
                                                <ul class="list">
                                                    <li><i class="fa fa-caret-right"></i><?php echo get_sub_field('list_item'); ?></li>
                                            </div>
                                        <?php
                                        endwhile;
                                    endif;
                                endif;
                            endwhile;
                        endif;
                        if (have_rows('flexible_content')):
                            while (have_rows('flexible_content')):
                                the_row();
                                if (get_row_layout() == 'service_content'):
                                    if (have_rows('list_second')):
                                        while (have_rows('list_second')):
                                            the_row();
                                        ?>
                                            <div class="col-lg-6">
                                                <ul class="list">
                                                    <li><i class="fa fa-caret-right"></i><?php echo get_sub_field('list_second_item'); ?>
                                                    </li>
                                            </div>
                        <?php
                                        endwhile;
                                    endif;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <?php
                if (have_rows('flexible_content')):
                    while (have_rows('flexible_content')):
                        the_row();
                        if (get_row_layout() == 'service_content'):
                            $bg_img = get_sub_field('bg_image');

                ?>
                            <div class="choose-right"
                                style="background-image: url('<?php bloginfo('template_directory'); ?>/img/<?php echo $bg_img['filename']; ?>');">
                                <div class="video-image">
                                    <!-- Video Animation -->
                                    <div class="promo-video">
                                        <div class="waves-block">
                                            <div class="waves wave-1"></div>
                                            <div class="waves wave-2"></div>
                                            <div class="waves wave-3"></div>
                                        </div>
                                    </div>
                                    <!--/ End Video Animation -->

                                    <a href="<?php echo esc_attr(get_sub_field('video')); ?>"
                                        class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>

                                </div>
                            </div>
                            <!-- End Choose Rights -->
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->

<!-- Start Call to action -->
<?php
if (have_rows('flexible_content')):
    while (have_rows('flexible_content')):
        the_row();
        if (get_row_layout() == 'help_line'):
            $header = get_sub_field('header');
            $description = get_sub_field('description');
            $btn_link_1 = get_sub_field('btn_link_1');
            $btn_text_1 = get_sub_field('btn_text_1');
            $btn_link_2 = get_sub_field('btn_link_2');
            $btn_text_2 = get_sub_field('btn_text_2');
            $bg_image = get_sub_field('bg_image');

?>
            <section class="call-action overlay" data-stellar-background-ratio="0.5"
                style="background-image: url('<?php bloginfo('template_directory'); ?>/img/<?php echo $bg_image['filename']; ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="content">

                                <h2><?php echo $header; ?></h2>
                                <p><?php echo $description; ?></p>
                                <div class="button">
                                    <a href="<?php echo $btn_link_1; ?>" class="btn"><?php echo $btn_text_1; ?></a>
                                    <a href="<?php echo $btn_link_2; ?>" class="btn second"><?php echo $btn_text_2; ?><i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>
<!--/ End Call to action -->

<!-- Start portfolio -->
<section class="portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <?php
                    if (have_rows('flexible_content')):
                        while (have_rows('flexible_content')):
                            the_row();
                            if (get_row_layout() == 'cleanliness_rules'):
                                $header = get_sub_field('header');
                                $desc = get_sub_field('description');
                                $section_image = get_sub_field('section_image'); ?>
                                <h2><?php echo $header; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $section_image['filename']; ?>"
                                    alt="#">
                                <p><?php echo $desc; ?></p>
                    <?php
                            endif;
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>No posts found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel portfolio-slider">
                    <?php
                    $array = array(
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                    );
                    $res = new WP_Query($array);
                    if ($res->have_posts()):
                        while ($res->have_posts()):
                            $res->the_post();
                            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                            <div class="single-pf">
                                <img src="<?php echo $featured_image_url; ?>" alt="#">
                                <a href="<?php the_permalink(); ?>" class="btn">View Details</a>
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
        </div>
    </div>
</section>
<!--/ End portfolio -->

<!-- Start service -->
<section class="services section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'offer_services'):
                        $header_text = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $offer_section_image = get_sub_field('offer_section_image');

            ?>
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2><?php echo $header_text; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $offer_section_image['filename']; ?>"
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
            if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'service_section'):
                        if (have_rows('service_content')):
                            while (have_rows('service_content')):
                                the_row();
                                $icon = get_sub_field('icon');
                                $header = get_sub_field('header');
                                $content = get_sub_field('content');
            ?>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Start Single Service -->
                                    <div class="single-service">
                                        <i class="icofont <?php echo $icon; ?>"></i>
                                        <h4><a href="service-details.html"><?php echo $header; ?></a></h4>
                                        <p><?php echo $content; ?></p>
                                    </div>
                                    <!-- End Single Service -->
                                </div>
            <?php
                            endwhile;
                        endif;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!--/ End service -->

<!-- Pricing Table -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'treatment_price'):
                        $header_text = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $price_section_image = get_sub_field('price_section_image');

            ?>
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2><?php echo $header_text; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $price_section_image['filename']; ?>"
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

            $args = array(
                'post_type' => 'product',
                'post_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $products = new wp_Query($args);
            // echo '<pre>';
            // print_r($products);

            if ($products->have_posts()):
                while ($products->have_posts()):
                    $products->the_post();
                    global $product;

                    if (have_rows('products')):
                        while (have_rows('products')):
                            the_row();
                            if (get_row_layout() == 'pricing_section'):
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $amount = get_sub_field('amount');
                                $per_visit = get_sub_field('per_visit');
                                $btn_text = get_sub_field('btn_text');
            ?>
                                <div class="col-lg-4 col-md-12 col-12">
                                    <div class="single-table">
                                        <!-- Table Head -->
                                        <div class="table-head">
                                            <div class="icon">
                                                <i class="icofont <?php echo $icon; ?>"></i>
                                            </div>
                                            <h4 class="title"><?php echo $title; ?></h4>
                                            <div class="price">
                                                <p class="amount">$<?php echo $amount ?><span>/ <?php echo $per_visit; ?></span></p>
                                            </div>
                                        </div>
                                        <ul class="table-list">
                                            <!-- Table List -->
                                            <?php if (have_rows('table_list')):
                                                while (have_rows('table_list')):
                                                    the_row();
                                                    $icon = get_sub_field('icon');
                                                    $list_item = get_sub_field('list_item');
                                            ?>
                                                    <li><i class="icofont <?php echo $icon; ?>"></i><?php echo $list_item; ?></li>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </ul>
                                        <div class="table-bottom">
                                            <a class="btn"
                                                href="<?php get_permalink($product->get_id()); ?>"><?php echo $btn_text; ?></a>
                                        </div>
                                        <!-- Table Bottom -->
                                    </div>
                                </div>
            <?php
                            endif;
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!--/ End Pricing Table -->



<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <?php if (have_rows('flexible_content')):
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

<!-- Start clients -->
<?php
if (have_rows('flexible_content')):
    while (have_rows('flexible_content')):
        the_row();
        if (get_row_layout() == 'carousel'):
            $bg_img = get_sub_field('bg_image');
?>
            <div class="clients overlay"
                style="background-image:url('<?php bloginfo('template_directory') ?>/img/<?php echo $bg_img['filename']; ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="owl-carousel clients-slider">
                                <?php
                                if (have_rows('carousel_image')):
                                    while (have_rows('carousel_image')):
                                        the_row();
                                        $img = get_sub_field('image');
                                ?>
                                        <div class="single-clients">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $img['filename']; ?>" alt="#">
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endif;
    endwhile;
endif;
?>

<!--/Ens clients -->

<!-- Start Appointment -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <?php if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'book_appointment'):
                        $header_text = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $book_section_image = get_sub_field('book_section_image');

            ?>
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2><?php echo $header_text; ?></h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $book_section_image['filename']; ?>"
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
            if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'appointment_form'):
                        $name = get_sub_field('name');
                        $email = get_sub_field('email');
                        $phone = get_sub_field('phone');
                        $date = get_sub_field('date');
                        $message = get_sub_field('message');
                        $btn_text = get_sub_field('btn_text');
                        $short_note = get_sub_field('short_note');
                        $bg_image = get_sub_field('bg_image');
                        $img = get_sub_field('bg_image');
            ?>
                        <div class="col-lg-6 col-md-12 col-12">
                            <form class="form" action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Name" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Email" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Phone" value="<?php echo $phone; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="nice-select form-control wide" tabindex="0"><span
                                                    class="current">Department</span>
                                                <ul class="list">
                                                    <?php
                                                    if (have_rows('department')):
                                                        $data_value = 0;
                                                        while (have_rows('department')):
                                                            the_row();
                                                            $list = get_sub_field('list');
                                                            $data_value += 1;
                                                    ?>

                                                            <li data-value="<?php echo $data_value; ?>" class="option"><?php echo $list; ?>
                                                            </li>

                                                    <?php
                                                        endwhile;
                                                    endif;
                                                    ?>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="nice-select form-control wide" tabindex="0"><span
                                                    class="current">Doctor</span>
                                                <ul class="list">
                                                    <?php
                                                    if (have_rows('doctor')):
                                                        $data_value = 0;
                                                        while (have_rows('doctor')):
                                                            the_row();
                                                            $list = get_sub_field('doctor_list');
                                                            $data_value += 1;
                                                    ?>

                                                            <li data-value="<?php echo $data_value; ?>" class="option"><?php echo $list; ?>
                                                            </li>

                                                    <?php
                                                        endwhile;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Date" id="datepicker" value="<?php echo $date; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message"
                                                placeholder="Write Your Message Here....."><?php echo $message; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 col-12">
                                        <div class="form-group">
                                            <div class="button">
                                                <button type="submit" class="btn"><?php echo $btn_text; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-12">
                                        <p><?php echo $short_note; ?></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-12 ">
                            <div class="appointment-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $bg_image['filename']; ?>"
                                    alt="#">
                            </div>
                        </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>
<!-- End Appointment -->

<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <?php
            if (have_rows('flexible_content')):
                while (have_rows('flexible_content')):
                    the_row();
                    if (get_row_layout() == 'newsletter'):
                        $header = get_sub_field('header');
                        $desc = get_sub_field('description');
                        $email = get_sub_field('email');
                        $btn = get_sub_field('subscribe');
            ?>
                        <div class="col-lg-6  col-12">
                            <!-- Start Newsletter Form -->
                            <div class="subscribe-text ">
                                <h6><?php echo $header; ?></h6>
                                <p class=""><?php echo $desc; ?></p>
                            </div>
                            <!-- End Newsletter Form -->
                        </div>
                        <div class="col-lg-6  col-12">
                            <!-- Start Newsletter Form -->
                            <div class="subscribe-form ">
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" class="common-input"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required=""
                                        type="email" value="<?php echo $email; ?>">
                                    <button class="btn"><?php echo $btn; ?></button>
                                </form>
                            </div>
                            <!-- End Newsletter Form -->
                        </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>
<!-- /End Newsletter Area -->

<?php
// get_footer('inner');
get_footer();
?>