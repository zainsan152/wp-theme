<?php
get_header();
?>

<style>
.MyClass{

    margin:20px;
    padding:20px;
}
</style>

<div>

<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
        <div class = "MyClass">
        <h3><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p>
        <?php the_content(); ?>
        </p>
        </div>

   <?php 
   }
}
?>
</div>

<?php
get_footer();
?>