<?php
get_header();
global $product;

if (!$product) {
    $product = wc_get_product(get_the_ID());
}

if (!$product) {
    echo "Product object is not available.";
    exit;
}

?>
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Product Details</h2>
                    <ul class="bread-list">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Portfolio Details Area -->
<section class="pf-details section">
    <div class="container">
        <div class="row">
            <?php
            // $image_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            // $image_url = wp_get_attachment_url($product->get_image_id());
            
            ?>
            <div class="col-12">
                <div class="inner-content">
                    <div class="image-slider">
                        <img src="<?php echo $image_url; ?>" alt="h">
                    </div>
                    <div class="date">
                        <ul>
                            <li><span>Category :</span> Heart Surgery</li>
                            <li><span>Date :</span><?php echo get_the_date(); ?></li>
                            <li><span>Client :</span> Suke Agency</li>
                            <li><span>Ags :</span> Typo</li>
                        </ul>
                    </div>
                    <div class="body-text">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo get_the_content(); ?></p>
                        <div class="share">
                            <h4>Share Now -</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Details Area -->

<?php
// get_footer('inner');
get_footer();
?>