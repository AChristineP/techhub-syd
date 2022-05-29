<div class="header-container"> </div>
<?php get_header() ?>

<main>
<main class="gallery">
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
            <h2><?php the_field('Testimonys'); ?></h2>
                </div>
            <?php get_footer() ?>