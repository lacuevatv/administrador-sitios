<?php
// BASE DE DATOS
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'test');
//CARPETAS
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
define ( 'MODULOSDIR', dirname( __FILE__ ) . '/modulos' );
define ( 'UPLOADS', dirname( __FILE__ ) . '/../../contenido' );
define ( 'UPLOADSIMAGES', dirname( __FILE__ ) . '/../../contenido' );
define ( 'UPLOADSFILES', dirname( __FILE__ ) . '/../../contenido/archivos' );
//URL
define ('CARPETASERVIDOR', '/voces-de-sanidad' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('URLADMINISTRADOR', MAINURL . '/cargar-noticias/administrador-sitios' );
define ('UPLOADSURL', MAINURL . '/contenido');
define ('UPLOADSURLIMAGES', MAINURL . '/contenido');
define ('UPLOADSURLFILES', MAINURL . '/contenido/archivos');

//DEFINICIONES HEAD Y SCRIPTS
define ( 'SITENAME', 'titulo' );
define ( 'DATEPUBLISHED', '2018');
define ('LOGOSITE' , URLADMINISTRADOR . '/assets/images/logosite.png');
define ( 'SITETITLE', 'Nombre - Panel de control' );
define ( 'FAVICONICO', URLADMINISTRADOR . '/favicon.ico' );

//variables de definicion de administrador
global $categorias;
$categorias = array(
	array( 'slug' => 'agenda', 'nombre' => 'Agenda'),
	array( 'slug' => 'tramites', 'nombre' => 'Trámites y Servicios'),
	array( 'slug' => 'gestion', 'nombre' => 'Gestión'),
	array( 'slug' => 'empleo', 'nombre' => 'Bolsa de Empleo'),
	array( 'slug' => 'telefonos', 'nombre' => 'Teléfonos'),
);
