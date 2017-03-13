<?php
/**
Template Name: Secondary Page
 **/
/**
 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header();  //remove for /berich2/.  this header only applies to /berich/

global $post;
$imageUrl = wp_get_attachment_url( get_post_thumbnail_id() );

?>

    <div class="fullwidthbanner-container">
        <div class="row">
            <div class="col-xs-12" style="background: url('/wp-content/uploads/2017/01/bmi-church1.jpg'); background-size:cover;min-height:600px;">

                <div id="secondary-overlay" class="tagline-copy">
                    <h1 style="color:#fff;text-align: center;">TRADITION: ours is masonry and it has been a part of who we are since 1887.</h1>
                </div>

            </div>

        </div>
    </div> <!-- /.rev_slider_wrapper-->
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="grey-section section-block">
        <div class="limit-width">
            <div class="row">
                <div class="col-12" style="font-weight:400;font-size:1.5em;padding:15px 60px;">
                        <p><?= the_content(); ?></p>

                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

<?php if( !is_page (array(2, 106)) ):?>
    <div class="call-to-action light section-block">
        <div class="limit-width">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cta-inner clearfix">
                        <div class="cta-content">
                            <h3>Let's talk about your next project</h3>
                            <span>If you are interested in learning more about Berich Masonry, we'd love to tell you more.</span>
                        </div>
                        <div class="cta-button">
                            <a href="/contact-us/" class="button default">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="shadow-gradient"></div>-->
    </div>
<?php endif;?>



<?php get_footer(); ?>