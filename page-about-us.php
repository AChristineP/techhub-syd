<?php get_header() ?>

<main>

<h1>ABOUT US</h1>
<div id="about" class="row gx-5">
<div class="col-sm-6"> <p><?php the_field('about_us_text'); ?> </p></div>
<div class="col-sm-6"><img width="60%" src="<?php the_field('esbjerg_map'); ?>"/>
</div></div>

<img id="abouthero" src="<?php the_field('logo'); ?>" width="100%">

<h1>OUR MISSION</h1>

<p>Our mission is to contribute and help expand the tech industry in southern Denmark, and create a community for people interested in technology.

We want to support the technology evolvement in the southern region and push forward on renewables, energy end green digitization.</p>

<h1>WHAT DO WE OFFER?</h1>
<div id="about-offer" class="row gx-5 gy-5">
<div class="col-sm-4"><img id="icon" width="30%" src="<?php the_field('icon1'); ?>"/> </div>
<div class="col-sm-8"><h5>EVENTS</h5><p>To facilitate events for tech start-ups and offer access to investors and students in the southern region.</p></div>
<div class="col-sm-4"><img id="icon" width="30%" src="<?php the_field('icon2'); ?>"/> </div>
<div class="col-sm-8"><h5>POWERFUL COMMUNITY</h5><p>To strengthen the startup and tech eco-system in the southern region through a powerful community.</p></div>
<div class="col-sm-4"><img id="icon" width="30%" src="<?php the_field('icon3'); ?>"/> </div>
<div class="col-sm-8"><h5>NEW TECH VENTURES</h5><p>Match commercial founders with tech founders to create new tech ventures.</p></div>
<div class="col-sm-4"><img id="icon" width="30%" src="<?php the_field('icon4'); ?>"/> </div>
<div class="col-sm-8"><h5>INSPIRATIONAL TALKS</h5><p>Inspire with inspirational talks from successful tech founders, industry leaders and business angels.</p></div>

            </div>
                </div>
            <?php get_footer() ?>