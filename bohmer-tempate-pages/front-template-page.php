<?php /* Template Name: Front Page */ ?>

<?php get_header() ?>

<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">



    <!-- Fullwide Banner area Start Here -->
    <section class="fullwide-banner-area fullwide-banner-bg-2 pt--100 pt-md--70 pb--110 pb-md--80">
        <div class="container-fluid p-0">
            <div class="row no-gutters center-tt">
                <div class="col-xl-6 col-lg-8 text-center">
                    <h3 class="heading-tertiary heading-color-white-t">Cotton cashmere-blend sweater</h3>
                    <h1 class="heading-bigger heading-color-white-t font-weight-300 mb--40 mb-md--30">SALE 30%</h1>
                    <a href="shop-sidebar.html" class="btn btn-3 btn-style-1 btn-medium">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Fullwide Banner area End Here -->


    <div class="notice-board bg--dark-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="notice-text-wrapper notice-text-wrapper-2">
                        <p class="notice-text notice-text-2">Weekend Sale 70% All items – Don’t miss this chance</p>
                        <a href="#" class="close-notice"><i class="dl-icon-close"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product tab area Start Here -->
    <section class="product-tab-area pt--60 pt-md--45 pt-sm--30 pb--80 pb-md--60">
        <div class="container-fluid">
            <div class="row mb--40 mb-md--30 mb-sm--25">
                <div class="col-12 text-center">
                    <h2 class="heading-secondary">Featured Products</h2>
                    <hr class="separator center mt--25 mt-md--15">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-tab tab-style-3">
<!--                                 <div class="nav nav-tabs product-tab__head justify-content-center align-items-center flex-md-row flex-column mb--40 mb-md--30"
                            id="product-tab" role="tablist">
                            <a class="product-tab__link nav-link active" id="nav-all-tab" data-toggle="tab"
                                href="#nav-all" role="tab" aria-selected="true">
                                <span>All</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-men-tab" data-toggle="tab"
                                href="#nav-men" role="tab" aria-selected="true">
                                <span>Men</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-women-tab" data-toggle="tab"
                                href="#nav-women" role="tab" aria-selected="true">
                                <span>Women</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-kids-tab" data-toggle="tab"
                                href="#nav-kids" role="tab" aria-selected="true">
                                <span>Kids</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-accessories-tab" data-toggle="tab"
                                href="#nav-accessories" role="tab" aria-selected="true">
                                <span>Accesories</span>
                            </a>
                            <a class="product-tab__link nav-link" id="nav-bags-shoes-tab" data-toggle="tab"
                                href="#nav-bags-shoes" role="tab" aria-selected="true">
                                <span>Bags &amp; Shoes</span>
                            </a>
                        </div> -->
                        <div class="tab-content product-tab__content fadeInUp" id="product-tabContent">
                            <div class="tab-pane show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">
                                <div class="row">
                                    <?php

                                    
                                    $meta_query  = WC()->query->get_meta_query();
                                    $tax_query   = WC()->query->get_tax_query();
                                    $tax_query[] = array(
                                    'taxonomy' => 'product_visibility',
                                    'field'    => 'name',
                                    'terms'    => 'featured',
                                    'operator' => 'IN',
                                    );

                                    $args = array(
                                    'post_type'           => 'product',
                                    'post_status'         => 'publish',
                                    'ignore_sticky_posts' => 1,
                                    'posts_per_page'      => $atts['per_page'],
                                    'orderby'             => $atts['orderby'],
                                    'order'               => $atts['order'],
                                    'meta_query'          => $meta_query,
                                    'tax_query'           => $tax_query,
                                    );

                                    global $post, $product;

                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>


                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="<?php echo esc_url(get_permalink()); ?>">
                                                            <img src="<?php echo get_field('first_image'); ?>"
                                                                alt="Product Image" class="primary-image">
                                                            <img src="<?php echo get_field('second_image'); ?>"
                                                                alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Quick Shop">
                                                                <span data-toggle="modal"
                                                                    data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                                href="?add-to-cart=<?php echo get_the_ID(); ?>" data-toggle="tooltip"
                                                                data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?php echo $product->get_price_html();  ?></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                    endwhile;
                                    wp_reset_query(); 
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 text-center">
                    <a href="shop-sidebar.html" class="heading-button">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab area End Here -->

</div>

<?php get_footer() ?>