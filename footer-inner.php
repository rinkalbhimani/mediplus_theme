<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <?php
                if (have_rows('footer_details')):
                    while (have_rows('footer_details')):
                        the_row(); ?>
                        <?php
                        if (get_row_layout() == 'about_us'):
                            $header = get_sub_field('header');
                            $desc = get_sub_field('description');
                        ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer">
                                    <h2><?php echo $header; ?></h2>
                                    <p><?php echo $desc; ?></p>
                                    <!-- Social -->
                                    <ul class="social">
                                        <?php
                                        if (have_rows('social_links')):
                                            while (have_rows('social_links')):
                                                the_row();
                                                $Links = get_sub_field('links');
                                        ?>
                                                <li><a href="#"><i class="<?php echo $Links; ?>"></i></a></li>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                    <!-- End Social -->
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        if (get_row_layout() == 'quick_links'):
                            $header = get_sub_field('header');
                        ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer f-link">
                                    <h2><?php echo $header; ?></h2>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <ul>
                                                <?php
                                                if (have_rows('page_link')):
                                                    while (have_rows('page_link')):
                                                        the_row();
                                                        $links = get_sub_field('links');
                                                        $icon = get_sub_field('icon');
                                                ?>
                                                        <li><a href="#"><i class="fa <?php echo $icon; ?>"
                                                                    aria-hidden="true"></i><?php echo $links; ?></a></li>
                                                <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <ul>
                                                <?php
                                                if (have_rows('another_quick_link')):
                                                    while (have_rows('another_quick_link')):
                                                        the_row();
                                                        $links = get_sub_field('another_link');
                                                        $icon = get_sub_field('another_link_icon');
                                                ?>
                                                        <li><a href="#"><i class="fa <?php echo $icon; ?>"
                                                                    aria-hidden="true"></i><?php echo $links; ?></a></li>
                                                <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endif;
                        ?>

                        <?php
                        if (get_row_layout() == 'timing'):
                            $header = get_sub_field('header');
                            $desc = get_sub_field('description');

                        ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer">
                                    <h2><?php echo $header; ?></h2>
                                    <p><?php echo $desc; ?></p>
                                    <ul class="time-sidual">
                                        <?php
                                        if (have_rows('time_sidual')):
                                            while (have_rows('time_sidual')):
                                                the_row();
                                                $timing = get_sub_field('timing');
                                                $day = get_sub_field('day');
                                        ?>
                                                <li class="day"><?php echo $timing; ?><span><?php echo $day; ?></span></li>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        endif;
                        ?>

                        <?php
                        if (get_row_layout() == 'newsletter'):
                            $header = get_sub_field('header');
                            $newsletter_content = get_sub_field('newsletter_content');
                            $email_address = get_sub_field('email_address');
                            $icon = get_sub_field('icon');

                        ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer">
                                    <h2><?php echo $header; ?></h2>
                                    <p><?php echo $newsletter_content; ?></p>
                                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                        <input name="email" placeholder="Email Address" class="common-input"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                            required="" type="email" value="<?php echo $email_address; ?>">
                                        <button class="button"><i class="icofont <?php echo $icon; ?>"></i></button>
                                    </form>
                                </div>
                            </div>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <?php
                        if (have_rows('footer')):
                            while (have_rows('footer')):
                                the_row();
                                if (get_row_layout() == 'copyright_content'):
                                    $content = get_sub_field('content');
                                    $link_text = get_sub_field('link_text');
                                    $link = get_sub_field('link');
                        ?>
                                    <p><?php echo $content; ?><a href="<?php echo $link; ?>"
                                            target="_blank"><?php echo $link_text; ?></a> </p>
                        <?php
                                endif;
                            endwhile;
                        endif;

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->