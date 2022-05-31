<?php get_header() ?>

<main>

<h1>ABOUT US</h1>
<div id="about" class="row gx-5">
<div class="col-sm-6"> <p><?php the_field('about_us_text'); ?> </p></div>
<div class="col-sm-6"><img width="60%" src="<?php the_field('esbjerg_map'); ?>"/>
</div></div>

<img id="abouthero" src=http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/Techhubevent.jpg width="100%">

<h1>OUR MISSION</h1>

<p>Our mission is to contribute and help expand the tech industry in southern Denmark, and create a community for people interested in technology.

We want to support the technology evolvement in the southern region and push forward on renewables, energy end green digitization.</p>

<h1>WHAT DO WE OFFER?</h1>
<div id="about-offer" class="row gx-5">
<div class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/image-2.png" width="40%"> </div>
<div class="col-sm-8">To facilitate events for tech start-ups and offer access to investors and students in the southern region.</div>
<div class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/image-3.png" width="40%"> </div>
<div class="col-sm-8">To strengthen the startup and tech eco-system in the southern region through a powerful community.</div>
<div class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/image-5.png" width="40%"> </div>
<div class="col-sm-8">To strengthen the startup and tech eco-system in the southern region through a powerful community.</div>
<div class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/image-4.png" width="40%"> </div>
<div class="col-sm-8">To strengthen the startup and tech eco-system in the southern region through a powerful community.</div>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No content found</p>
                <?php endif; ?>
            </div>
                </div>
            <?php get_footer() ?>