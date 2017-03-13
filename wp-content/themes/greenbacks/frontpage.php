<?php
/**
Template Name: Front Page
 **/
/**
 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header( 'two' );

global $post;
//$topTitleOne = get_post_meta($post->ID, '_one_front_one_top', true);
//project one vars
$staticHeroImg = get_post_meta($post->ID, '_greenbacks_static_hero_image', true);
$projectOneImg = get_post_meta($post->ID, '_greenbacks_project_one_image', true);
//$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
$projectOneTitle = get_post_meta($post->ID, '_greenbacks_project_one_title', true);
$projectOneUrl = get_post_meta($post->ID, '_greenbacks_project_one_url', true);

//project Two variables
$projectTwoImg = get_post_meta($post->ID, '_greenbacks_project_two_image', true);
//$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
$projectTwoTitle = get_post_meta($post->ID, '_greenbacks_project_two_title', true);
$projectTwoUrl = get_post_meta($post->ID, '_greenbacks_project_two_url', true);

//project Three variables
$projectThreeImg = get_post_meta($post->ID, '_greenbacks_project_three_image', true);
//$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
$projectThreeTitle = get_post_meta($post->ID, '_greenbacks_project_three_title', true);
$projectThreeUrl = get_post_meta($post->ID, '_greenbacks_project_three_url', true);

//project Four variables
$projectFourImg = get_post_meta($post->ID, '_greenbacks_project_four_image', true);
//$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
$projectFourTitle = get_post_meta($post->ID, '_greenbacks_project_four_title', true);
$projectFourUrl = get_post_meta($post->ID, '_greenbacks_project_four_url', true);

$team_id = get_post_meta($post->ID, '_one_front_team_id', true);

//end block variables
?>

    <div class="fullwidthbanner-container main-carousel">
        <?php
        //putRevSlider("home2")

        ?>

        <img src="<?= $staticHeroImg; ?>" class="img-responsive">
       
    </div> <!-- /.rev_slider_wrapper-->

    <div class="dark-section section-block">
        <div class="container">
            <!-- Service Title Only -->
            <div class="row">
                <div class="col-xs-12 section-title-wrapper" style="padding:15px 60px; text-align: center;">
                    <h1 class="section-title style-1">Greenbacks Theme, Inc.</h1>

                    <h2 class="section-title style-1">Protect our precious Greenbacks</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="grey-section section-block">
        <div class="container">
            <div class="row">
                <div class="mid-space"></div>
                <div class="col-sm-5 col-lg-6" style="padding:15px 60px; text-align: center;"><h2>Block One</h2>
                    <a class="btn btn-info btn-lg" href="">Learn More</a></div>
                <div class="col-sm-5 col-lg-6" style="padding:15px 60px; text-align: center;"><h2>Block Two</h2>
                    <a class="btn btn-info btn-lg" href="">Learn More</a></div>
            </div>
            <div class="mid-space"></div>
        </div>
    </div>

    <div class="dark-section section-block">
        <div class="section-bg" style="background-image: url('');"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.4s">
                    <h2 class="section-title style-1">Latest Projects</h2>
                    <p>Below are just a few of the latest projects we have completed.</p>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        <div class="projects-full-holder clearfix wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.5s">
            <article class="project-entry-1">
                <div class="image-holder">
                    <a href="project-single.html">
                        <img width="800" height="500" src="<?= $projectOneImg; ?>" alt="">
                        <h2 class="project-title"><?= $projectOneTitle; ?></h2>
                        <span class="project-overlay"></span>
                        <span class="overlay-triangle"></span>
                    </a>
                </div>
            </article> <!-- /.project-entry-1 -->
            <article class="project-entry-1">
                <div class="image-holder">
                    <a href="project-single.html">
                        <img width="800" height="500" src="<?= $projectTwoImg; ?>" alt="">
                        <h2 class="project-title"><?= $projectTwoTitle; ?></h2>
                        <span class="project-overlay"></span>
                        <span class="overlay-triangle"></span>
                    </a>
                </div>
            </article> <!-- /.project-entry-2 -->
            <article class="project-entry-1">
                <div class="image-holder">
                    <a href="project-single.html">
                        <img width="800" height="500" src="<?= $projectThreeImg; ?>" alt="">
                        <h2 class="project-title"><?= $projectThreeTitle; ?></h2>
                        <span class="project-overlay"></span>
                        <span class="overlay-triangle"></span>
                    </a>
                </div>
            </article> <!-- /.project-entry-3 -->
            <article class="project-entry-1">
                <div class="image-holder">
                    <a href="project-single.html">
                        <img width="800" height="500" src="<?= $projectFourImg; ?>" alt="">
                        <h2 class="project-title"><?= $projectFourTitle; ?></h2>
                        <span class="project-overlay"></span>
                        <span class="overlay-triangle"></span>
                    </a>
                </div>
            </article> <!-- /.project-entry-4 -->
        </div> <!-- /.projects-full-holder -->
    </div> <!-- /.dark-section -->

    <div class="call-to-action light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cta-inner clearfix">
                        <div class="cta-content">
                            <h3>Let's talk about your next project</h3>
                            <span>If you are interested in learning more about greenbacks Masonry, we'd love to tell you more.</span>
                        </div>
                        <div class="cta-button">
                            <a href="http://knssandbox.com/greenbacks2/contact-us/" class="button default">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="shadow-gradient"></div>-->
    </div>

<?php get_footer(); ?>