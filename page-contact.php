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
<div><img src="<?php the_field('emailicon'); ?>" class="contactimg" alt="contact"></div>
    </div>
    <div class="col-sm-6">
      <p>	
<?php echo apply_shortcodes( '[contact-form-7 id="1234" title="contact-form-7 id="96"]' ); ?>
                </p>
                </section>

                <section id="partners">
                <div class="row">
    <div class="col-sm-4"> 
    <div><img id="partner" src="<?php the_field('partner_1'); ?>"/></div>
    </div>
    <div class="col-sm-8">
    <h2><?php the_field('partner_overskrift_1'); ?></h2>
    <?php the_field('partner_info_1'); ?>
                </section>
                <section id="partners">
                <div class="row">
    <div class="col-sm-4">
    <div><img id="partner" src="<?php the_field('partner_2'); ?>"/></div>
    </div>
    <div class="col-sm-8">
   <h2> <?php the_field('partner_overskrift_2'); ?></h2>
    <?php the_field('partner_info_2'); ?>
                </section>
                <section id="partners">
                <div class="row">
    <div class="col-sm-4">
    <div><img id="partner" size="10%" src="<?php the_field('partner_3'); ?>"/></div>
    </div>
    <div class="col-sm-8">
    <h2><?php the_field('partner_overskrift_3'); ?></h2>
    <?php the_field('partner_info_3'); ?>
                </section>
        </div>
    </div> 
            <?php get_footer() ?>
