<div class="header-container"> </div>
<?php get_header() ?>
<main>
<main class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No content found</p>
                <?php endif; ?>
            </div>
            <section id="contact-form">
            <div class="row">
    <div class="col-sm-6">
      <h2>CONTACT US</h2>
      <p>Please contact us if you have any questions, we will get back to you within 48 hours. 
</p>
<div><img src="http://localhost:5114/techhubsyd/wordpress-6.0/wordpress/wp-content/uploads/2022/05/contact-form-illustration.png" class="contactimg" alt="contact"></div>
    </div>
    <div class="col-sm-6">
      <p><div class="wp-block-contact-form-7-contact-form-selector contact-form"><div role="form" class="wpcf7" id="wpcf7-f96-p25-o1" lang="en-GB" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/techhubsyd/wordpress-6.0/wordpress/contact/#wpcf7-f96-p25-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="96">
<input type="hidden" name="_wpcf7_version" value="5.5.6.1">
<input type="hidden" name="_wpcf7_locale" value="en_GB">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f96-p25-o1">
<input type="hidden" name="_wpcf7_container_post" value="25">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<p id="contactform"><label> Your name<br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p id="contactform"><label> Your email<br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p id="contactform"><label> Subject<br>
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p id="contactform"><label> Your message (optional)<br>
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p id="contactform"><input type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div></p>
                </section>

                <section id="partners">
                <div class="row">
    <div class="col-sm-4"> 
    <div class="partner1"><img src="<?php the_field('PLACEHOLDER BILLEDE'); ?>"/></div>
    </div>
    <div class="col-sm-8">
    <?php the_field('PLACEHOLDER TEKST'); ?>
                </section>
                <section id="partners">
                <div class="row">
    <div class="col-sm-4">
    <div class="partner2"><img src="<?php the_field('PLACEHOLDER BILLEDE'); ?>"/></div>
    </div>
    <div class="col-sm-8">
    <?php the_field('PLACEHOLDER TEKST'); ?>
                </section>
                <section id="partners">
                <div class="row">
    <div class="col-sm-4">
    <div class="partner3"><img src="<?php the_field('PLACEHOLDER BILLEDE'); ?>"/></div>
    </div>
    <div class="col-sm-8">
    <?php the_field('PLACEHOLDER TEKST'); ?>
                </section>
        </div>
    </div> 
            <?php get_footer() ?>
