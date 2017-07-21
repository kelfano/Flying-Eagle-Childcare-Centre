<?php /*Template Name: Contact Page*/ ?>

<?php get_header(); ?>


  <div class = "contact-form">
    <h1>Contact with us</h1>
    <p> If you have any questions, work inquiries or anything else, please don't hesitate to contact me using this form.</p>
    <p> I'm currently open to projects, contract work and full time positions.</p>
    <p>Hours <span> Monday to Friday 7:30am to 6:00pm</span> </p>

    <!--<h1><?php the_title(); ?></h1>
    <h1><?php the_content(); ?></h1>-->

      <!--<?php 
        $args = array(
          'post_type' => 'subway',
          'posts_per_page' => -1
        );

        $the_query = new WP_Query($args);

        // the the_titel
        // the_content
        // get the id
        // get post title with (idd)
        // while ($the_query -> have_posts() ) {
        // $the_query -> the_post();
        // var_dump(the_title());
        // }
        echo the_content(the_post());
      ?>-->



    <div class = "contact-info-form">
      <form action="submit">
        <span class= "firstname"> First name: </span>  <input type="text" name= "firstname"  > <br>
        <span class= "lastname">  Last name: </span> <input type="text" name= "lastname"> <br>
        <span class= "subject">    Subject: </span> <input type="text" name= "subject"> <br>
        <span class= "message">    Message: </span> <input type="text" name= "message">
      </form> 
    </div>
  </div>
  <div class ="form-submit">
    <button type="submit" class ="submit"> Submit</button>
  </div>

<?php get_footer(); ?>
