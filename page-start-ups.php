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
<section id="contact-form">
            <div class="row">
<div id="subox" class="col-sm-6">
    <div id="pitchcontainer"> <h2>SIGN UP</h2> <p><?php the_field('signup'); ?></p></div>
</div>
<div id="startupform" class="col-sm-6">
<form action="/techhubsyd/wordpress-6.0/wordpress/start-ups/#wpcf7-f131-p21-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="131">
<input type="hidden" name="_wpcf7_version" value="5.5.6.1">
<input type="hidden" name="_wpcf7_locale" value="en_GB">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f131-p21-o1">
<input type="hidden" name="_wpcf7_container_post" value="21">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<p><label> Your name<br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> Your email<br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><span class="wpcf7-form-control-wrap checkbox-153"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required" id="checkboxes"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-153[]" value="SaaS"><span class="wpcf7-list-item-label">SaaS</span></label></span><br><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-153[]" value="Mobile app"><span class="wpcf7-list-item-label">Mobile app</span></label></span><br><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-153[]" value="AI / AR / VR"><span class="wpcf7-list-item-label">AI / AR / VR</span></label></span><br><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-153[]" value="Other"><span class="wpcf7-list-item-label">Other</span></label></span></span></span></p>
<div class="wpcf7-response-output" aria-hidden="true">
<input id="SUbtn" type="submit" value="Sign up" class="wpcf7-form-control has-spinner wpcf7-submit" id="subtn">
</div></form></div></div>


                
            </div>
                </div>
            <?php get_footer() ?>