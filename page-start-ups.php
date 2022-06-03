<div class="header-container"> </div>
<?php get_header() ?>

<main>
<main class="start-ups">
            <div id="herostartups" class="text-center">
    <h1>FOR START UPS</br></br></h1>
    <div><p id="startup" class="text-center">Are you a tech startup in the southern region? </br>
And looking for funding?</br>
</br>
This is your chance to meet with tech-focused investors
</br> looking for the most promising tech startups in the region.</p>
<a href="#contact-form" class="button">SIGN UP HERE</a></div>
    </div>


    <section id="SU-info">
    <h1>WHY JOIN US?</h1>
</br>
    <h4><?php the_field('whyjoinustitle1'); ?> </h4>
    </br>
    <p><?php the_field('whyjoinustext1'); ?></p>
    </br>
    <h4><?php the_field('whyjoinustitle2'); ?></h4>
    </br>
    <p><?php the_field('whyjoinustext2'); ?></p>
    </br>
    <h4><?php the_field('whyjoinustitle3'); ?></h4>
    </br>
    <p><?php the_field('whyjoinustext3'); ?></p>
    </br>
    <h4><?php the_field('whyjoinustitle4'); ?></h4>
    </br>
    <p><?php the_field('whyjoinustext4'); ?></p>
    </br>
</section>


<section id="SU-pitch">
    <h1>5 MIN PITCH</h1>
    <p>At our 5 min pitch, we will arrange a meeting with a solid group of investors and sharp VC’s, who are ready to hear your 5 minute pitch
</br></br>
After the pitch you can connect and network with investors and setup meetings to see if we have a match to scale your startup.
</br></br>
<b>Sign up for a 5 min pitch underneath.</b>

</p>
</section>
	
<?php echo apply_shortcodes( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>

<section id="contact-form">
            <div class="row">
<div id="subox" class="col-sm-6">
    <div id="pitchcontainer"> <h2>SIGN UP</h2> <p><?php the_field('signup'); ?></p></div>
</div>
<div id="startupform" class="col-sm-6"><p><?php echo apply_shortcodes( '[contact-form-7 id="131" title="For startups"]' ); ?></p>

</div></form></div></div>


                
            </div>
                </div>
            <?php get_footer() ?>