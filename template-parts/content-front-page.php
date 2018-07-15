<?php
/**
 * Template part for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

?>

<div class="galleria-content">
	<?php
	get_galleria( 77 );
	// ponemos manualmente el id del post porque galleria toma las imágenes del custom post "página de inicio"
	// pero la página principal debe ser una página normal, en este caso "home" (id = 33)
	?>
</div> <!-- galleria -->

<article class="eventos">
	<h2>Eventos</h2>

	<?php
	get_eventos();
	?>

</article>
