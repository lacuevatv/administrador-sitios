<?php
// BASE DE DATOS
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'somosre_bd');
//CARPETAS
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
define ( 'MODULOSDIR', dirname( __FILE__ ) . '/modulos' );
define ( 'UPLOADS', dirname( __FILE__ ) . '/../../contenido' );
define ( 'UPLOADSIMAGES', UPLOADS . '' );
define ( 'UPLOADSFILES', UPLOADS . '' );
//URL
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('URLADMINISTRADOR', MAINURL . '/administrador' );//esta variable define la carpeta del administrador - también debe cambianser en el .js
define ('UPLOADSURL', MAINURL . '/contenido');//carpeta donde esta el contenido subido por el usuario
define ('UPLOADSURLIMAGES', UPLOADSURL . '');//carpeta  de imagenes (por si tiene distintas carpetas de contenido)
define ('UPLOADSURLFILES', UPLOADSURL . '');//carpeta de archivos (por si tiene distintas carpetas de contenido)

//DEFINICIONES HEAD Y SCRIPTS
define ( 'SITENAME', 'titulo' );
define ( 'DATEPUBLISHED', '2018');
define ('LOGOSITE' , URLADMINISTRADOR . '/assets/images/logosite.png');
define ( 'SITETITLE', 'Nombre - Panel de control' );
define ( 'FAVICONICO', URLADMINISTRADOR . '/favicon.ico' );
define ('POSTPERPAG', 2);

//variables tipo de usuario
global $usertype;
$usertype = array(
	array( 'status' => '0', 'nombre' => 'Administrador'),
	array( 'status' => '1', 'nombre' => 'Editor'),
	array( 'status' => 'a', 'nombre' => 'default'),
);

//variables de categorias de galeria de imagenes / si existen
global $categoriasGalerias;//define las categorias para cargar galerias
$categoriasGalerias = array(
	array( 'slug' => 'galeria1', 'nombre' => 'Galeria 1'),
	array( 'slug' => 'galeria2', 'nombre' => 'Galeria 2'),
);

global $archivos;
$archivos = array(
    array(
        'label' => 'PDF 1',
        'optionName' => 'pdf-1',
    ),
    
);

global $menuModulos;
$menuModulos = array(
	array(
		'titulo' => 'Posts',
		'texto' => 'Administrar los posts: Borrar, cargar y editar.',
		'template' => 'posts',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Galería de Imágenes',
		'texto' => 'Manipular las distintas galerias de imagenes.',
		'template' => 'galeria-imagenes',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Archivos descargas',
		'texto' => 'Administrar los archivos de descargas (pdfs).',
		'template' => 'archivos-descargas',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Slider Inicio',
		'texto' => 'Modificar los sliders actuales.',
		'template' => 'editar-slider',
		'slug' => 'home',
		'user' => 'a',
	),
	array(
		'titulo' => 'Popups',
		'texto' => 'Activar o desactivar popups.',
		'template' => 'editar-slider',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Biblioteca de medios',
		'texto' => 'Subir, borrar y manipular archivos e imagenes.',
		'template' => 'biblioteca-medios',
		'slug' => '',
		'user' => 'a',
	),
);