<?php get_header() ?>

<main>
<main id="index">
    <div id="hero">
    <div id="herorow" class="row">
    <div id="heroimg" class="col-sm-4"><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/logo.png" alt="logo" class="logoforside" width="85%"></div>
    <div id="herotext" class="col-sm-8"><h1 id=herotext2>Hello, welcome to TechHub Syd we're happy to see you. </h1>
    <button>SIGN UP HERE</button>
    </div></div></div>

        <div class="col-lg-6 mx-auto">
    </div>

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
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div id="events">One of three columns</div>
    </div>
    <div class="col-sm">
    <div id="events">One of three columns</div>
    </div>
    <div class="col-sm">
    <div id="events">One of three columns</div>
    </div>
  </div>
</div>

<h1>WHAT PEOPLE SAY ABOUT US</h1>
<div id="">
    <div id="testimonials" class="row gx-5">
  <div id="kasser" class="col-sm">
      <div id="lillaboks">
          <div id="textboks">
          <div id="testimg">
                 </div>
          </div>
      </div>
    </div>
  <div id="kasser" class="col-sm">
      <div id="lillaboks">
      <div id="textboks">
      <div id="testimg">
                 </div>
          </div>
      </div>
    </div>
  <div id="kasser" class="col-sm">
             <div id="lillaboks">
                <div id="textboks">
                <div id="testimg">
                         </div>
                </div>
             </div>
  </div>
</div>
</div>

<?php get_footer() ?>

                </main>