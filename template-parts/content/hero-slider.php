<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">

        <?php
        if (have_rows('slides')):
            while (have_rows('slides')):
                the_row();
                $header = get_sub_field('header');
                $desc = get_sub_field('description');
                $image = get_sub_field('image');
                $btn1 = get_sub_field('button_text');
                $btn2 = get_sub_field('button_second_text');

                // print_r($image['filename']);
                ?>
                <!-- Start Single Slider -->
                <div class="single-slider"
                    style="background-image:url('<?php bloginfo('template_directory'); ?>/img/<?php echo $image['filename'] ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1><?php echo $header; ?></h1>
                                    <p><?php echo $desc; ?></p>
                                    <div class="button">
                                        <a href="#" class="btn"><?php echo $btn1; ?></a>
                                        <a href="#" class="btn primary"><?php echo $btn2; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
                <?php
            endwhile;
        endif;

        ?>
    </div>
</section>
<!--/ End Slider Area -->