<?php

$game_id = array (	
	"players" => array (
		array(
			"id" => 0,
			"name" => "Brian",
			),
		array(
			"id" => 1,
			"name" => "Bastien",
			),
		),
	"shipModels" => array(
		array(
			"id" => 1,
			"name" => "assault/space_marine",
			"width" => 3,
			"height" => 1,
			"sprite" => "a",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			),
		
		array(
			"id" => 2,
			"name" => "chaplain/sorcerer",
			"width" => 3,
			"height" => 1,
			"sprite" => "b",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			),
		array(
			"id" => 3,
			"name" => "d/raptor",
			"width" => 3,
			"height" => 1,
			"sprite" => "c",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			),
		array(
			"id" => 4,
			"name" => "force_commander/aspiring",
			"width" => 3,
			"height" => 1,
			"sprite" => "d",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			),
			array(
			"id" => 5,
			"name" => "greyknights/tanks",
			"width" => 3,
			"height" => 1,
			"sprite" => "e",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			)
		),
	"ships" => array(
		array(
			"id" => 1,
			"player" => 1,
			"posX" => 139,
			"posY" => 94,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
				array(
			"id" => 2,
			"player" => 1,
			"posX" => 124,
			"posY" => 92,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
						array(
			"id" => 3,
			"player" => 1,
			"posX" => 111,
			"posY" => 88,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
								array(
			"id" => 4,
			"player" => 1,
			"posX" => 136,
			"posY" => 66,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
		array(
			"id" => 5,
			"player" => 1,
			"posX" => 10,
			"posY" => 30,
			"width" => 2,
			"height" => 6,
			"active" => 1,
			"state" => 1,
			"weapons" => array(70, 71),
			),
		array(
			"id" => 1,
			"player" => 0,
			"posX" => 1,
			"posY" => 1,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
				array(
			"id" => 2,
			"player" => 0,
			"posX" => 23,
			"posY" => 1,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
						array(
			"id" => 3,
			"player" => 0,
			"posX" => 42,
			"posY" => 1,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
			array(
			"id" => 4,
			"player" => 0,
			"posX" => 2,
			"posY" => 13,
			"active" => 1,
			"state" => 1,
			"weapons" => array(54, 56, 60, 64),
			),
		array(
			"id" => 5,
			"player" => 0,
			"posX" => 30,
			"posY" => 17,
			"width" => 2,
			"height" => 6,
			"active" => 1,
			"state" => 1,
			"weapons" => array(70, 71),
			)
		),
	"elements" => array(
		array(
			"type" => "asteroid",
			"posX" => 700,
			"posY" => 25,
			"width" => 10,
			"height" => 10,
			),
		array(
			"type" => "asteroid",
			"posX" => 800,
			"posY" => 500,
			"width" => 10,
			"height" => 10,
			),
		array(
			"type" => "asteroid",
			"posX" => 500,
			"posY" => 900,
			"width" => 10,
			"height" => 10,
			),
		),
	"weaponModels" => array(
		array(
			"id" => 100,
			"name" => "weapon1",
			"shortRange" => 10,
			"MediumRange" => 20,
			"LongRange" => 30,
			"dispersion" => 0,
			"width" => 1,
			),
			array(
			"id" => 100,
			"name" => "weapon2",
			"shortRange" => 10,
			"MediumRange" => 20,
			"LongRange" => 30,
			"dispersion" => 0,
			"width" => 1,
			)
		)
	);


$array = array (
	"elements" => array(
		array(
			"type" => "asteroid",
			"posX" => 25,
			"posY" => 25,
			"width" => 2,
			"height" => 3,
			),
		array(
			"type" => "asteroid",
			"posX" => 25,
			"posY" => 25,
			"width" => 2,
			"height" => 3,
			),
		array(
			"type" => "asteroid",
			"posX" => 25,
			"posY" => 25,
			"width" => 2,
			"height" => 3,
			),
		),
	"players" => array (
		array(
			"id" => 0,
			"name" => "jean",
			),
		array(
			"id" => 1,
			"name" => "marcel",
			),
		),
	"ships" => array(
		array(
			"id" => 21,
			"player" => 0,
			"model" => 44,
			"posX" => 100,
			"posY" => 65,
			"width" => 1,
			"height" => 3,
			"hull" => 10,
			"shield" => 3,
			"active" => 1,
			"state" => 0,
			"weapons" => array(54, 56, 60, 64),
			),
		array(
			"id" => 42,
			"player" => 1,
			"model" => 46,
			"posX" => 10,
			"posY" => 30,
			"width" => 2,
			"height" => 6,
			"hull" => 10,
			"shield" => 3,
			"active" => 0,
			"state" => 1,
			"weapons" => array(70, 71),
			),
		),
	"weapons" => array(
		array(
			"id" => 54,
			"model" => 100,
			"charge" => 0,
			"posX" => 10,
			"posY" => 30,
			"rotation" => 90,
			),
		),
	"weaponModels" => array(
		array(
			"id" => 100,
			"name" => "ewfp",
			"shortRange" => 10,
			"MediumRange" => 20,
			"LongRange" => 30,
			"dispersion" => 0,
			"width" => 1,
			),
		),
	"shipModels" => array(
		array(
			"id" => 44,
			"name" => "bigDestroyer",
			"width" => 3,
			"height" => 1,
			"sprite" => "sprite1.jpg",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			),
			array(
			"id" => 44,
			"name" => "bigDestroyer",
			"width" => 3,
			"height" => 1,
			"sprite" => "sprite1.jpg",
			"defaultPP" => 5,
			"defaultHull" => 10,
			"defaultShield" => 5,
			"inerty" => 2,
			"speed" => 5,
			),
		
		),
	
	"events" => array(
		array(
			"name" => "ship_moved",
			"datas" => array(
					"posX" => 17,
					"posY" => 20,
					"rotation" => 90,
					"moving" => 0,
				),
			),
		),
		array(
			"name" => "ship_damaged",
			"datas" => array(
					"shipId" => 10,
					"damages" => 9,
			),
		),
		array(
			"name" => "game_start",
			"datas" => array(
					"players" => array(1, 2, 56),
					"ships" => array(3, 4, 5),
					"weapons" => array(14, 35, 56, 78, 90),
				),
		),
		array(
			"name" => "game_end",
			"datas" => array(
					"winnerId" => 56,
				),
		),
);

echo json_encode($game_id);

?>