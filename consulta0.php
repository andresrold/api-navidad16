<?php
$return = array();

// NOMBRE DE LA APP
$return['app_id'] = 1;
$return['app_name'] = "Navidad 16";

// MENÚ
$return["menu"] = [
	"num_items"			=> 1,
	"menu_background"	=> "",
	"menu_type"			=> "mosaic",
	"menu_title"		=> "CABALGATA2016 ATENEO",
	"menu_header"		=> [
		"menu_header_title"	=> "",
		"menu_header_background"	=> "http://fierce-beyond-9973.herokuapp.com/resources/menus/pastilla_logocabalgata.jpg"
	],
	"items"				=> [
		[
			"section_id"	=> 1,
			"section_order" => 1,
			"item_name"		=> "Belenes",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/pastilla_fotobelenes.jpg",
			"item_width"	=> 0.5
		],
		[
			"section_id"	=> 2,
			"section_order" => 2,
			"item_name"		=> "Dulces",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/pastilla_fotodulces.jpg",
			"item_width"	=> 0.5
		],
		[
			"section_id"	=> 3,
			"section_order" => 3,
			"item_name"		=> "Itinerarios",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/pastilla_fotorecorrcabalgata.jpg",
			"item_width"	=> 1
		],
		[
			"section_id"	=> 4,
			"section_order" => 4,
			"item_name"		=> "Cabalgata",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.5
		],
		[
			"section_id"	=> 5,
			"section_order" => 5,
			"item_name"		=> "Heraldo",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.5
		],
		[
			"section_id"	=> 6,
			"section_order" => 6,
			"item_name"		=> "Agenda de Navidad",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.33
		],
		[
			"section_id"	=> 7,
			"section_order" => 7,
			"item_name"		=> "Ateneo",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.33
		],
		[
			"section_id"	=> 8,
			"section_order" => 8,
			"item_name"		=> "Personajes 2015",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.33
		],
		[
			"section_id"	=> 9,
			"section_order" => 9,
			"item_name"		=> "Redes sociales",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.33
		],
		[
			"section_id"	=> 10,
			"section_order" => 10,
			"item_name"		=> "Carta a SS.MM.",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.33
		],
		[
			"section_id"	=> 11,
			"section_order" => 11,
			"item_name"		=> "Info App",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 0.33
		],

	]
];
// SECCIONES
$return["sections"] = [
	[
		"id"			=> 1,
		"name" 			=> "Belenes",
		"section_type"	=> "map",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta1.php",
		"colors_palette" => [
			"primary"				=> "#CC3366",
			"secondary"				=> "#FF33FF",
			"tertiary"				=> "#203320",
			"quaternary" 			=> "#AF33AF",
			"background_primary"	=> "#F433EE",
			"background_secondary"	=> "#F333EB"
		],
	],
	[
		"id"			=> 2,
		"name" 			=> "Dulces de Navidad",
		"section_type"	=> "map",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta2.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 3,
		"name" 			=> "Itinerarios",
		"section_type"	=> "itinerario",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta3.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 4,
		"name" 			=> "Cabalgata",
		"section_type"	=> "cortejo",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta4.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 5,
		"name" 			=> "Heraldo",
		"section_type"	=> "cortejo",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta5.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 6,
		"name" 			=> "Agenda de Navidad",
		"section_type"	=> "agenda",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta6.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 7,
		"name" 			=> "Ateneo",
		"section_type"	=> "webpage",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta7.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 8,
		"name" 			=> "Personajes 2016",
		"section_type"	=> "webpage",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta8.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 9,
		"name" 			=> "Redes Sociales",
		"section_type"	=> "redessociales",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta9.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 10,
		"name" 			=> "Carta a SS.MM",
		"section_type"	=> "carta",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta10.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
	[
		"id"			=> 11,
		"name" 			=> "Info APP",
		"section_type"	=> "webpage",
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta11.php",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_primary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
];


header('Content-type: application/json');
echo json_encode($return);
?>