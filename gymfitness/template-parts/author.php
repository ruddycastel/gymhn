<?php get_header();?>

<main class="pagina seccion no-sidebar contenedor">
<?php 
$autor = get_queried_object(); 

?>
<h2 class="text-center texto-primario">autor: <?php echo $autor->data->display_name;?></h2>
    <ul class ="listado-blog">
       
<?php   get_template_part( 'template-parts/loop', 'blog');?>
    </ul>


</main>

<?php get_footer();?>