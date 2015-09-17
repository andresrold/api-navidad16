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
	"items"				=> [
		[
			"section_id"	=> 1,
			"item_name"		=> "Belenes",
			"item_background" => ""
		],
		[
			"section_id"	=> 2,
			"item_name"		=> "Dulces",
			"item_background" => ""
		],
	]
];
// SECCIONES
$return["sections"] = [
	[
		"id"			=> 1,
		"name" 			=> "Belenes",
		"section_type"	=> "map",
		"colors_palette" => [
			"primary"				=> "",
			"secondary"				=> "",
			"tertiary"				=> "",
			"quaternary"			=> "",
			"background_primary" 	=> "",
			"background_secondary"	=> ""
		],
	],
	[
		"id"			=> 2,
		"name" 			=> "Dulces de Navidad",
		"section_type"	=> "map",
		"colors_palette" => [
			"primary"				=> "#CC0066",
			"secondary"				=> "#FFFFFF",
			"tertiary"				=> "#202020",
			"quaternary" 			=> "#AFAFAF",
			"background_secondary"	=> "#F4F3EE",
			"background_secondary"	=> "#F3F0EB"
		],
	],
];


header('Content-type: application/json');
echo json_encode($return);
?>