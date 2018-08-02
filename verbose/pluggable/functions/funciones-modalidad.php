<?php
/**
 * Template part for displaying posts
 *
 * @package liceoparaiso
 */

/**
 * Sets the tabs for the Funcionarios with the Diurno Category.
 * https://www.w3schools.com/w3css/w3css_tabulators.asp
 */
function get_funcionarios_diurno() {
	$funcionarios = '
	<div class="w3-container">
	
		<div class="w3-bar w3-black">
			<button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,' . "'Administrativo'" . ')">Administrativo</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Ingles'" . ')">Inglés</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Ciencias'" . ')">Ciencias</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Matematicas'" . ')">Matemática</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Sociales'" . ')">Estudios Sociales</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Espanol'" . ')">Español</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Orientacion'" . ')">Orientación</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Biblioteca'" . ')">Biblioteca</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Jardineria'" . ')">Jardinería</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Seguridad'" . ')">Seguridad</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Comedor'" . ')">Comedor</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Miscelaneos'" . ')">Misceláneos</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Psicologia'" . ')">Psicología</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Plasticas'" . ')">Artes Plásticas</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Musica'" . ')">Música</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Frances'" . ')">Francés</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Informatica'" . ')">Informática</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Industriales'" . ')">Industriales</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'EdVida'" . ')">Vida Cotidiana</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'EdFisica'" . ')">Educación Física</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Religion'" . ')">Religión</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Filosofia'" . ')">Filosofía</button>
			<button class="w3-bar-item w3-button tablink" onclick="openCity(event,' . "'Tecnologia'" . ')">Tecnología</button>

		</div>
	
		<div id="Administrativo" class="w3-cont w3-border city">
			' . get_funcionarios_diurno_administrativo() . '
		</div>

		<div id="Ingles" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_ingles() . '
		</div>

		<div id="Ciencias" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_ciencias() . '
		</div>

		<div id="Matematicas" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_matematica() . '
		</div>

		<div id="Sociales" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_sociales() . '
		</div>

		<div id="Espanol" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_espa() . '
		</div>

		<div id="Orientacion" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_orientacion() . '
		</div>

		<div id="Biblioteca" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_biblioteca() . '
		</div>

		<div id="Jardineria" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_jardineria() . '
		</div>

		<div id="Seguridad" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_seguridad() . '
		</div>

		<div id="Comedor" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_comedor() . '
		</div>

		<div id="Miscelaneos" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_miscelaneos() . '
		</div>

		<div id="Psicologia" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_psicologia() . '
		</div>

		<div id="Plasticas" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_plasticas() . '
		</div>

		<div id="Musica" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_musica() . '
		</div>

		<div id="Frances" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_frances() . '
		</div>

		<div id="Informatica" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_informatica() . '
		</div>

		<div id="Industriales" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_industriales() . '
		</div>

		<div id="EdVida" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_edvida() . '
		</div>

		<div id="EdFisica" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_edfisica() . '
		</div>

		<div id="Religion" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_sociales() . '
		</div>

		<div id="Filosofia" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_filosofia() . '
		</div>

		<div id="Tecnologia" class="w3-cont w3-border city" style="display:none">
			' . get_funcionarios_diurno_tecnologia() . '
		</div>
	</div>
	 ';
	echo $funcionarios;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno that belong to the Management Function.
 */
function get_funcionarios_diurno_administrativo() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Administrativo',
	) );
	$admin = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title = get_the_title();
		$admin = $admin . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $admin;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno that teach english.
 */
function get_funcionarios_diurno_ingles() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Inglés',
	) );
	$ingles = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$ingles = $ingles . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $ingles;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno that teach ciencias.
 */
function get_funcionarios_diurno_ciencias() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Ciencias',
	) );
	$ciencias = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$ciencias = $ciencias . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $ciencias;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno that teach math.
 */
function get_funcionarios_diurno_matematica() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Matemáticas',
	) );
	$mate = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$mate = $mate . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $mate;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno that teach sociales.
 */
function get_funcionarios_diurno_sociales() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Sociales',
	) );
	$sociales = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$sociales = $sociales . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $sociales;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno that teach spanish.
 */
function get_funcionarios_diurno_espa() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Español',
	) );
	$espa = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$espa = $espa . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $espa;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - orientación.
 */
function get_funcionarios_diurno_orientacion() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Orientación',
	) );
	$orientacion = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$orientacion = $orientacion . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $orientacion;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - biblioteca.
 */
function get_funcionarios_diurno_biblioteca() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Biblioteca',
	) );
	$biblio = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$biblio = $biblio . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $biblio;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - jardineria.
 */
function get_funcionarios_diurno_jardineria() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Jardinería',
	) );
	$jardineria = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$jardineria = $jardineria . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $jardineria;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Seguridad.
 */
function get_funcionarios_diurno_seguridad() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Segeuridad',
	) );
	$seguridad = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$seguridad = $seguridad . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $seguridad;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Comedor.
 */
function get_funcionarios_diurno_comedor() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+a',
	) );
	$comedor = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$comerdor = $comedor . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $comedor;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - miscelaneo.
 */
function get_funcionarios_diurno_miscelaneos() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+misceláneos',
	) );
	$misc = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$misc = $misc . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $misc;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Psicología.
 */
function get_funcionarios_diurno_psicologia() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Psicología',
	) );
	$psi = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$psi = $psi . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $psi;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - artes plasticas.
 */
function get_funcionarios_diurno_plasticas() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Artes Plásticas',
	) );
	$art = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$art = $art . '	<p>' . $title . '</p>';
	endwhile;
	return $art;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Musica.
 */
function get_funcionarios_diurno_musica() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Musica',
	) );
	$musica = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$musica = $musica . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $musica;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Frances.
 */
function get_funcionarios_diurno_frances() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+a',
	) );
	$fra = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$fra = $fra . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $fra;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - informatica.
 */
function get_funcionarios_diurno_informatica() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Informática',
	) );
	$info = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$info = $info . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $info;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Industriales.
 */
function get_funcionarios_diurno_industriales() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Industriales',
	) );
	$a = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$a = $a . '	<p>' . $title . '</p>';
	endwhile;
	return $a;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Educación para la vida cotidiana.
 */
function get_funcionarios_diurno_edvida() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Educación para la vida cotidiana
		',
	) );
	$a = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$a = $a . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $a;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Educación Fisica.
 */
function get_funcionarios_diurno_edfisica() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Educación Física',
	) );
	$a = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$a = $a . '	<p>' . $title . '</p>';
	endwhile;
	return $a;
}


/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - religión.
 */
function get_funcionarios_diurno_religion() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Religión',
	) );
	$a = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$a = $a . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $a;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Filosofía.
 */
function get_funcionarios_diurno_filosofia() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Filosofía',
	) );
	$a = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$a = $a . '	<p>' . $title . '</p>';
	endwhile;
	return $a;
}

/**
 * Gets the lists of funcionarios from a unique category.
 *
 * @return string with the list of funcionarios from the diurno - Tecnología.
 */
function get_funcionarios_diurno_tecnologia() {
	$funcionarios = new WP_Query( array(
		'post_type'      => 'funcionarios',
		'tag'            => 'Diurno+Tecnología',
	) );
	$a = '';
	while ( $funcionarios->have_posts() ) :
		$funcionarios->the_post();
		// Set variables.
		$title    = get_the_title();
		$a = $a . '	<p>' . $title . '</p>';
	endwhile;
	wp_reset_postdata();
	return $a;
}
