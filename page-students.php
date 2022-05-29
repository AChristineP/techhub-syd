<div class="header-container"> </div>
<?php get_header() ?>

<main>
<main class="students">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="herostudents" class="text-center">
    <h1>FOR STUDENTS</br></br></h1>
    <div class="text-center">
    <p>Are you a student in the southern region? 
And looking for a student job or a internship?
<br/>
This is your chance to meet with tech-focused startups looking for people like you, to join their company.</p>
    <button>SIGN UP HERE</button>
    </div></div>


    <section id="Students-info">
    <h2>WHY JOIN US?</h2>
    <p>tekst</p>
</section>


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