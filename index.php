<?php get_header() ?>
<main>
<main id="index">
    <div id="hero">
    <div id="herorow" class="row">
    <div id="heroimg" class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/logo.png" alt="logo" class="logoforside" width="85%"></div>
    <div id="herotext" class="col-sm-8" class="slideanim"><h1 id=herotext2>Hello, welcome to TechHub Syd we're happy to see you. </h1>
    <a href="http://anch.guru/techhubsyd/join-us" class="button">SIGN UP HERE</a></div>
    </div></div></div>

    <section class="container-index">

    <h1>WHAT DO WE DO?</h1>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>
                </section>

<section class="container-index2">
<h1>UPCOMING EVENTS</h1>
<!-- EVENTS 1 -->
<div class="container-fluid">
  <div class="row row gx-5">
    <div class="col-sm-4">
    <div id="events"><h4><?php the_field('eventtitle1'); ?></h4>
    <p id="eventsmonth"><?php the_field('datetime1'); ?></br>
    <p id="eventstime"><?php the_field('place1'); ?></br></p>

        <img width="100%" src="<?php the_field('eventimg1'); ?>"/>
        </br>
        <div id=eventknap><button onclick="<?php the_field('link1'); ?>">READ MORE</button></div></div>
<!-- EVENTS 2 -->
    </div>
    <div class="col-sm-4">
    <div id="events"><h4><?php the_field('eventtitle2'); ?></h4>
        <p id="eventsmonth"><?php the_field('datetime2'); ?></br>
        <p id=eventstime><?php the_field('place2'); ?></br></p>

        <img width="100%" src="<?php the_field('eventimg2'); ?>"/>
        </br>
        <div id=eventknap><button onclick="<?php the_field('link2'); ?>">READ MORE</button></div></div>
    </div>
    <!-- EVENTS 3 -->
    <div class="col-sm-4">
    <div id="events"><h4><?php the_field('eventtitle3'); ?></h4>
        <p id="eventsmonth"><?php the_field('datetime3'); ?></br>
        <p id=eventstime><?php the_field('place3'); ?></br></p>

        <img width="100%" src="<?php the_field('eventimg3'); ?>"/>
                </br>
          <div id=eventknap><button onclick="<?php the_field('liink3'); ?>">READ MORE</button></div></div>
    </div>
    </div>
    </div>
  </div>
</div>
</section>

<div id="testimonials">
<h1>WHAT PEOPLE SAY ABOUT US</h1>
<?php echo do_shortcode('[sp_testimonial id="229"]');?>
  </div>
</div>
</div>

<div id="companies">
<h1>IN GREAT COMPANY</h1>
<div id="logos" class="container">
  <div class="row align-items-center justify-items-center">
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo1'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo2'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo3'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo4'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo5'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo6'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo7'); ?>"/></div>
  <div class="col-sm-3"><img id="logo" width="70%" src="<?php the_field('logo8'); ?>"/></div>
  </div>
</div>
</div>

<?php get_footer() ?>

                </main>