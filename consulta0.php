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
		"menu_header_title"	=> "Cabalgata Ateneo de Sevilla 2016",
		"menu_header_background"	=> "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.0.jpg"
	],
	"items"				=> [
		[
			"section_id"	=> 1,
			"section_order" => 1,
			"item_name"		=> "Belenes",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.1.jpg",
			"item_width"	=> 1
		],
		[
			"section_id"	=> 2,
			"section_order" => 2,
			"item_name"		=> "Dulces",
			"item_background" => "http://fierce-beyond-9973.herokuapp.com/resources/menus/1.2.jpg",
			"item_width"	=> 1
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
		"section_detail_url" => "http://fierce-beyond-9973.herokuapp.com/consulta1.php",
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