<?php get_header() ?>

<main>

<h1>ABOUT US</h1>
<div id="about" class="row gx-5">
<div class="col-sm-6"> <p>Techhub Syd is a company consisting fully of volunteers, based in Esbjerg, Denmark. We support tech startups, students and investors to grow the tech eco-system in southern Denmark. 
</br></br>
Our goal is to strengthen the startup and tech eco-system through a powerful community to fuel the next generation of tech winner companies. 
</br></br>
We want to keep the brightest young minds and future startups in Esbjerg and
the region. And to put Esbjerg on the landmark for tech, green innovation and
energy efficiency. </p></div>
<div class="col-sm-6"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/DK.png" width="85%">
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