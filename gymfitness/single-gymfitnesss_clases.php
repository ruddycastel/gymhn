<h1>hols desde single</h1>


<?php get_header(); ?>

<main class='contenedor pagina seccion con-sidebar'>
    <div class='contenido-principal'>
        <header class="site-header">
        </header>

        <?php while (have_posts()) : the_post(); ?>
            <h1> <?php the_title(); ?></h1>

            <?php 
            if (has_post_thumbnail() );
            the_post_thumbnail('blog',array('class'=> 'imagen-destacada'));
             
            
            ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    </div>

    <?php get_sidebar('clases'); ?>
</main>

<?php get_footer(); ?>