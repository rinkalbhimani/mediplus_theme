<?php

/**
 * 
 * Template Name: TemplateContactUs
 */
get_header();
?>

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2><?php the_title(); ?></h2>
                    <ul class="bread-list">
                        <li><a href="<?php home_url(); ?>">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Us -->
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us-left">
                        <!--Start Google-map -->
                        <div id="myMap"></div>
                        <!--/End Google-map -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <?php
                        if (have_rows('contact')):
                            while (have_rows('contact')):
                                the_row();
                                if (get_row_layout() == 'form'):
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    $name = get_sub_field('name');
                                    $email = get_sub_field('email');
                                    $phone = get_sub_field('phone');
                                    $subject = get_sub_field('subject');
                                    $message = get_sub_field('message');
                                    $button_text = get_sub_field('button_text');
                                    $checkbox = get_sub_field('checkbox');
                                    $newsletter = get_sub_field('newsletter');

                                    ?>
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $description; ?></p>
                                    <!-- Form -->
                                    <form class="form" method="post" action="mail/mail.php">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $title; ?>" name="name" placeholder="Name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" value="<?php echo $email; ?>" name="email"
                                                        placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $phone; ?>" name="phone"
                                                        placeholder="Phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $subject; ?>" name="subject"
                                                        placeholder="Subject" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="message" value="<?php echo $message; ?>"
                                                        placeholder="Your Message" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group login-btn">
                                                    <button class="btn" type="submit"><?php echo $button_text; ?></button>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="checkbox-inline" for="2"><input name="news" id="2"
                                                            type="checkbox"><?php echo $newsletter; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/ End Form -->
                                    <?php
                                endif;
                            endwhile;
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <?php
                if (have_rows('contact')):
                    while (have_rows('contact')):
                        the_row();
                        if (get_row_layout() == 'contact_info'):
                            if (have_rows('info')):
                                while (have_rows('info')):
                                    the_row();

                                    $icon = get_sub_field('icon');
                                    $heading = get_sub_field('heading');
                                    $short_description = get_sub_field('short_description');
                                    ?>
                                    <!-- single-info -->
                                    <div class="col-lg-4 col-12 ">
                                        <div class="single-info">
                                            <i class="<?php echo $icon; ?>"></i>
                                            <div class="content">
                                                <h3><?php echo $heading; ?></h3>
                                                <p><?php echo $short_description; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/End single-info -->
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
<!--/ End Contact Us -->
<?php
// get_footer('inner');
get_footer();
?>