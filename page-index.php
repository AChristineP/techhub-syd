<?php get_header() ?>

<main>
    <div id="hero" class="px-4 py-5 text-center">
                            <img src="img/Untitled-1.svg" class="frontlogo" alt="Techhub Syd">
                        </div>
    <img src="BG.png" alt="Techhub Syd">
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"></p>
            <h1 class="display-5 fw-bold"><?php bloginfo("name") ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"><?php bloginfo("description") ?></p>
        </div>
        </div>
    </div>
    <div class="container-index">

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>
                <h2><?php the_field('testimonys'); ?></h2>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


<?php get_footer() ?>