<?php get_header() ?>

<main>
<main id="index">
    <div id="hero">
    <div id="herorow" class="row">
    <div id="heroimg" class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/logo.png" alt="logo" class="logoforside" width="85%"></div>
    <div id="herotext" class="col-sm-8"><h1 id=herotext2>Hello, welcome to TechHub Syd we're happy to see you. </h1>
    <button>SIGN UP HERE</button>
    </div></div></div>

    <div class="container-index">

    <h1>WHAT DO WE DO?</h1>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>

<h1>UPCOMING EVENTS</h1>
<!-- EVENTS 1 -->
<div class="container-fluid">
  <div class="row row gx-5">
    <div class="col-sm-4">
    <div id="events"><h4><?php the_field('date1'); ?></h4>
    <p id="eventsmonth"><?php the_field('month1'); ?></br>
    <p id="eventstime"><?php the_field('time+place1'); ?></br></p>

        <img width="100%" src="<?php the_field('event1'); ?>"/>
      
        <button onclick="<?php the_field('link1'); ?>">READ MORE</button></div>
<!-- EVENTS 2 -->
    </div>
    <div class="col-sm-4">
    <div id="events"><h4><?php the_field('date2'); ?></h4>
        <p id="eventsmonth"><?php the_field('month2'); ?></br>
        <p id=eventstime><?php the_field('time+place2'); ?></br></p>

        <img width="100%" src="<?php the_field('event2'); ?>"/>
      
        <button onclick="<?php the_field('link2'); ?>">READ MORE</button></div>
    </div>
    <!-- EVENTS 3 -->
    <div class="col-sm-4">
    <div id="events"><h><?php the_field('date3'); ?></h4>
        <p id="eventsmonth"><?php the_field('month3'); ?></br>
        <p id=eventstime><?php the_field('time+place3'); ?></br></p>

        <img width="100%" src="<?php the_field('event3'); ?>"/>
      
        <button onclick="<?php the_field('link3'); ?>">READ MORE</button></div>
    </div>
    </div>
  </div>
</div>

<h1>WHAT PEOPLE SAY ABOUT US</h1>
<?php echo do_shortcode('[sp_testimonial id="229"]');?>
<div id="">
    <div id="testimonials" class="row gx-5">
  <div id="kasser" class="col-sm">
  <div id="lillaboks">
                   <div id="textboks"> <?php echo do_shortcode('[sp_testimonial id="229"]');?>
          
                     </div>
          </div>
      </div>
    </div>
  <div id="kasser" class="col-sm">
      <div id="lillaboks">
          
      <div id="textboks"> 
      <div id=><img id="testimg" src="<?php the_field('testimonials_2'); ?>"/><h3><?php the_field('testimonials_overskrift_2'); ?></h3></br><p><?php the_field('testimonials_tekst_1'); ?></p>
                 </div>
          </div>
      </div>
    </div>
  <div id="kasser" class="col-sm">
  <div id="lillaboks">
          
          <div id="textboks"> 
          <div id=><img id="testimg" src="<?php the_field('testimonials_3'); ?>"/><h3><?php the_field('testimonials_overskrift_3'); ?></h3></br><p><?php the_field('testimonials_tekst_2'); ?></p>
                     </div>
                </div>
             </div>
  </div>
</div>
</div>

<?php get_footer() ?>

                </main>