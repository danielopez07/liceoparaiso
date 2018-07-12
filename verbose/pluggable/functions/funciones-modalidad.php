<?php
/**
 * Template part for displaying posts
 *
 * @package liceoparaiso
 */

/**
 * https://www.w3schools.com/w3css/w3css_tabulators.asp
 */

 function get_funcionarios( $post_title = '' ) {
	 $funcionarios = '
	 <h1 id="getfuncionariostitle"> a' . $post_title . '</h1>
	 <div class="w3-container">
	
	<div class="w3-bar w3-black">
		<button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,' . "'Sociales'" . ')">Sociales</button>
		<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Paris'" . ')">Paris</button>
		<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Tokyo'" . ')">Tokyo</button>
	</div>
	
	<div id="Sociales" class="w3-container w3-border city">
		' . get_funcionarios_diurno_sociales( $post_title ) . '
	</div>

	<div id="Paris" class="w3-container w3-border city" style="display:none">
		<h2>Paris</h2>
		<p>Paris is the capital of France.</p> 
	</div>

	<div id="Tokyo" class="w3-container w3-border city" style="display:none">
		<h2>Tokyo</h2>
		<p>Tokyo is the capital of Japan.</p>
	</div>
	</div>
	 ';
	 echo $funcionarios;
 }

function get_funcionarios2(){
	$funcionarios = new WP_Query( array( 'post_type' => 'funcionarios', 'posts_per_page' => 10 ) );
	while ( $funcionarios->have_posts() ) : $funcionarios->the_post();
	// Set variables
	$title = get_the_title();
	?>

	<h3 style="margin-top: 0px;">
		<?php echo $title; ?>
	</h3>

	<?php
		endwhile;
}

function get_funcionarios_diurno_sociales( $post_type = '' ) {
	if ($post_type) {
		$funcionarios = new WP_Query( array( 'post_type' => 'funcionarios', 'posts_per_page' => -1, 'tag' => $post_type, 'tag' => 'Sociales' ) );
		$sociales = '';
		while ( $funcionarios->have_posts() ) : $funcionarios->the_post();
		// Set variables
		$title = get_the_title();
		$sociales = $sociales . '	<h4 style="margin-top: 0px;">' . $title . '</h4>';
		endwhile;
		return $sociales;
	}
	else{
		$no_post = '<h4> No se paso la modalidad correctamente </h4>';
		return $no_post;
	}
}
