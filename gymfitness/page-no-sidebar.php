<?php get_header(); ?>



<main class='contenedor pagina seccion '>
    <div class='contenido-principal'>
        

        <?php while (have_posts()) : the_post(); ?>
            <h1> <?php the_title(); ?></h1>

            <?php 
            if (has_post_thumbnail() );
            the_post_thumbnail('blog',array('class'=> 'imagen-destacada'));
             
            
            ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    </div>

    
</main>

<?php get_footer(); ?>