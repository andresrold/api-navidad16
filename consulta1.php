<?php
$return = array();

$return['categories'] = [
	[
		"category_id"	=> 1,
		"category_name"	=> "Convento",
		"category_marker"	=> "",
		"category_icon"	=> ""
	],
	[
		"category_id"	=> 2,
		"category_name"	=> "Iglesia",
		"category_marker"	=> "http://fierce-beyond-9973.herokuapp.com/resources/markers/marker-2.png",
		"category_icon"	=> "http://fierce-beyond-9973.herokuapp.com/resources/icons/icon-2.png"
	],
	[
		"category_id"	=> 3,
		"category_name"	=> "Ermita",
		"category_marker"	=> "http://fierce-beyond-9973.herokuapp.com/resources/markers/marker-3.png",
		"category_icon"	=> "http://fierce-beyond-9973.herokuapp.com/resources/icons/icon-3.png"
	]
];

$return['items'] = [
	[
		"item_id"			=> 1,
		"item_category"		=> 1,
		"item_title"		=> "Convento de Santa Ana",
		"item_description1"	=> "Yemas, pestiños, empanadillas, carmelitas, dulces de chocolate, dulces de almendra",
		"item_description2"	=> "Santa Ana, 34. 954 380 603",
		"item_description3"	=> "Algo",
		"latitude"			=> "37.398299",
		"longitude"			=> "-5.996108"
	],
	[
		"item_id"			=> 2,
		"item_category"		=> 2,
		"item_title"		=> "Convento de Santa Inés",
		"item_description1"	=> "Inés, magdalenas, roscos, torta de polvorón, pastas.",
		"item_description2"	=> "Doña María Coronel, 5. 954 223 145",
		"item_description3"	=> "Algo",
		"latitude"			=> "37.393242",
		"longitude"			=> "-5.989636"
	],
	[
		"item_id"			=> 3,
		"item_category"		=> 3,
		"item_title"		=> "Convento de San Leandro",
		"item_description1"	=> "Yemas de San Leandro.",
		"item_description2"	=> "Plaza de San Leandro, s/n. 954 224 195",
		"item_description3"	=> "Algo",
		"latitude"			=> "37.390609",
		"longitude"			=> "-5.988333"
	]
];

header('Content-type: application/json');
echo json_encode($return);
?>