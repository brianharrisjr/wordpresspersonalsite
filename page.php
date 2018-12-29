<?php

get_header();


?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center"><?php the_title();?></h1> 
  </div>
</div>

<div class="container pt-5 pb-5">
  <div class="row">
    <div class="col-6">
      <?php
        while (have_posts()){
          the_post();?> 
            <p> <?php the_content();?> <p>
       <?php } 
      ?> 
      <a class="pr-2" href="www.google.com">Google</a>
      <a class="pr-2" href="www.google.com">Twitter</a>
      <a class="pr-2" href="www.google.com">Facebook</a>
    </div>
    <div class="col-6">
      <img src="" alt="">
    </div>      
  </div>
</div>



<?php get_footer();?>