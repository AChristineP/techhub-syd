<div class="header-container"> </div>
<?php get_header() ?>

<main>
<main class="investors">
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