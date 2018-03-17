<?php
require 'db.php';

$propId = $_POST['pID'];
$Twin_count = $_POST['Twin_count'];
$FullCount = $_POST['FullCount'];
$Queen_count = $_POST['Queen_count'];
$King_count =  $_POST['King_count'];



$Shared_Place = 0;
$Vacant_House = 0;
$Guest_House = 0;	
$Apartment	 = 0;
$City	 = 0;
$Suburb	 = 0;
$Country = 0;
$Air_mattress = 0;	
$Futon	 = 0;
$Hide_a_bed	 = 0;
$Murphy_bed	 = 0;
$Couch	 = 0;
$Cable_TV	 = 0;
$Yard	 = 0;
$Swimming_Pool	 = 0;
$Library	 = 0;
$Video_games	 = 0;
$TrailAtHome	 = 0;
$Picnic_area	 = 0;
$Basketball	 = 0;
$Pool_table	 = 0;
$Soccer	 = 0;
$Porch	 = 0;
$Board_games = 0;	
$Sauna	 = 0;
$Hottub	 = 0;
$Piano	 = 0;
$Guitar	 = 0;
$Gym	 = 0;
$Patio	 = 0;
$Mall	 = 0;
$Local_events = 0;	
$Park	 = 0;
$TrailInArea = 0;	
$Bike_share	 = 0;
$Skiing	 = 0;
$Beach	 = 0;
$Lake	 = 0;
$Fishing	 = 0;
$Lra	 = 0;
$Air_condition	 = 0;
$Bathroom_Basics	 = 0;
$Heating	 = 0;
$Kitchen	 = 0;
$Bathrooms	 = 0;
$Wifi	 = 0;
$Computer	 = 0;
$Lawn	 = 0;
$Fire_pit	 = 0;
$Garden	 = 0;
$Barbeque	 = 0;
$Lawn_games	 = 0;
$Basketball_court = 0;	
$SoccerExterior	 = 0;
$volleyball_area	 = 0;
$Washer_and_Dryer	 = 0;
$Oven	 = 0;
$Stove	 = 0;
$Iron	 = 0;
$Ironing_board	 = 0;
$Toaster	 = 0;
$Hair_dryer	 = 0;
$Microwave	 = 0;
$Cooking_Basics	 = 0;
$Baking_basics	 = 0;
$Coffee_maker	 = 0;
$Coffee_grinder	 = 0;
$blender	 = 0;
$Crib	 = 0;
$Swing	 = 0;
$Slide	 = 0;
$Baby_Monitor = 0;	
$High_chair	 = 0;
$Sand_box	 = 0;
$Stair_gates	 = 0;
$Children_silverware = 0;	
$Window_guards	 = 0;
$Outlet_guards	 = 0;
$Child_proof	 = 0;
$Books	 = 0;
$Toys	 = 0;
$Wheelchair	 = 0;
$Elevator	 = 0;
$Stairs	 = 0;
$Handicap_bathrooms	 = 0;
$Street_parking	 = 0;
$Carport	 = 0;
$Garage	 = 0;
$Driveway	 = 0;
$Smoke_detector	 = 0;
$Fire_alarm	 = 0;
$Carbon_monoxide_detector	 = 0;
$Private_entrance	 = 0;
$Shared_entrance	 = 0;
$Buzzer	 = 0;
$have_pets	 = 0;
$Pets_Allowed = 0;



if (isset($_POST['Shared_Place'])) {
	$Shared_Place = 1;
}

if (isset($_POST['Vacant_House'])) {
	$Vacant_House = 1;
}

if (isset($_POST['Guest_House'])) {
	$Guest_House = 1;
}

if (isset($_POST['Apartment'])) {
	$Apartment = 1;
}

if (isset($_POST['City'])) {
	$City = 1;
}

if (isset($_POST['Suburb'])) {
	$Suburb = 1;
}

if (isset($_POST['Country'])) {
	$Country = 1;
}

if (isset($_POST['Air_mattress'])) {
	$Air_mattress = 1;
}

if (isset($_POST['Futon'])) {
	$Futon = 1;
}

if (isset($_POST['Hide_a_bed'])) {
	$Hide_a_bed = 1;
}

if (isset($_POST['Murphy_bed'])) {
	$Murphy_bed = 1;
}

if (isset($_POST['Couch'])) {
	$Couch = 1;
}

if (isset($_POST['Cable_TV'])) {
	$Cable_TV = 1;
}

if (isset($_POST['Yard'])) {
	$Yard = 1;
}

if (isset($_POST['Swimming_Pool'])) {
	$Swimming_Pool = 1;
}

if (isset($_POST['Library'])) {
	$Library = 1;
}

if (isset($_POST['Video_games'])) {
	$Video_games = 1;
}

if (isset($_POST['TrailAtHome'])) {
	$TrailAtHome = 1;
}

if (isset($_POST['Picnic_area'])) {
	$Picnic_area = 1;
}

if (isset($_POST['Basketball'])) {
	$Basketball = 1;
}

if (isset($_POST['Pool_table'])) {
	$Pool_table = 1;
}

if (isset($_POST['Soccer'])) {
	$Soccer = 1;
}

if (isset($_POST['Porch'])) {
	$Porch = 1;
}

if (isset($_POST['Board_games'])) {
	$Board_games = 1;
}

if (isset($_POST['Sauna'])) {
	$Sauna = 1;
}

if (isset($_POST['Hottub'])) {
	$Hottub = 1;
}

if (isset($_POST['Piano'])) {
	$Piano = 1;
}

if (isset($_POST['Guitar'])) {
	$Guitar = 1;
}

if (isset($_POST['Gym'])) {
	$Gym = 1;
}

if (isset($_POST['Patio'])) {
	$Patio = 1;
}

if (isset($_POST['Mall'])) {
	$Mall = 1;
}

if (isset($_POST['Local_events'])) {
	$Local_events = 1;
}

if (isset($_POST['Park'])) {
	$Park = 1;
}

if (isset($_POST['TrailInArea'])) {
	$TrailInArea = 1;
}

if (isset($_POST['Bike_share'])) {
	$Bike_share = 1;
}

if (isset($_POST['Skiing'])) {
	$Skiing = 1;
}

if (isset($_POST['Beach'])) {
	$Beach = 1;
}

if (isset($_POST['Lake'])) {
	$Lake = 1;
}

if (isset($_POST['Fishing'])) {
	$Fishing = 1;
}

if (isset($_POST['Lra'])) {
	$Lra = 1;
}

if (isset($_POST['Air_condition'])) {
	$Air_condition = 1;
}

if (isset($_POST['Bathroom_Basics'])) {
	$Bathroom_Basics = 1;
}

if (isset($_POST['Heating'])) {
	$Heating = 1;
}

if (isset($_POST['Kitchen'])) {
	$Kitchen = 1;
}

if (isset($_POST['Bathrooms'])) {
	$Bathrooms = 1;
}

if (isset($_POST['Wifi'])) {
	$Wifi = 1;
}

if (isset($_POST['Computer'])) {
	$Computer = 1;
}

if (isset($_POST['Lawn'])) {
	$Lawn = 1;
}

if (isset($_POST['Fire_pit'])) {
	$Fire_pit = 1;
}

if (isset($_POST['Garden'])) {
	$Garden = 1;
}

if (isset($_POST['Barbeque'])) {
	$Barbeque = 1;
}

if (isset($_POST['Lawn_games'])) {
	$Lawn_games = 1;
}

if (isset($_POST['Basketball_court'])) {
	$Basketball_court = 1;
}

if (isset($_POST['SoccerExterior'])) {
	$SoccerExterior = 1;
}

if (isset($_POST['volleyball_area'])) {
	$volleyball_area = 1;
}

if (isset($_POST['Washer_and_Dryer'])) {
	$Washer_and_Dryer = 1;
}

if (isset($_POST['Oven'])) {
	$Oven = 1;
}

if (isset($_POST['Stove'])) {
	$Stove = 1;
}

if (isset($_POST['Iron'])) {
	$Iron = 1;
}

if (isset($_POST['Ironing_board'])) {
	$Ironing_board = 1;
}

if (isset($_POST['Toaster'])) {
	$Toaster = 1;
}

if (isset($_POST['Hair_dryer'])) {
	$Hair_dryer = 1;
}

if (isset($_POST['Microwave'])) {
	$Microwave = 1;
}

if (isset($_POST['Cooking_Basics'])) {
	$Cooking_Basics = 1;
}

if (isset($_POST['Baking_basics'])) {
	$Baking_basics = 1;
}

if (isset($_POST['Coffee_maker'])) {
	$Coffee_maker = 1;
}

if (isset($_POST['Coffee_grinder'])) {
	$Coffee_grinder = 1;
}

if (isset($_POST['blender'])) {
	$blender = 1;
}

if (isset($_POST['Crib'])) {
	$Crib = 1;
}

if (isset($_POST['Swing'])) {
	$Swing = 1;
}

if (isset($_POST['Slide'])) {
	$Slide = 1;
}

if (isset($_POST['Baby_Monitor'])) {
	$Baby_Monitor = 1;
}

if (isset($_POST['High_chair'])) {
	$High_chair = 1;
}

if (isset($_POST['Sand_box'])) {
	$Sand_box = 1;
}

if (isset($_POST['Stair_gates'])) {
	$Stair_gates = 1;
}

if (isset($_POST['Children_silverware'])) {
	$Children_silverware = 1;
}

if (isset($_POST['Window_guards'])) {
	$Window_guards = 1;
}

if (isset($_POST['Outlet_guards'])) {
	$Outlet_guards = 1;
}

if (isset($_POST['Child_proof'])) {
	$Child_proof = 1;
}

if (isset($_POST['Books'])) {
	$Books = 1;
}

if (isset($_POST['Toys'])) {
	$Toys = 1;
}

if (isset($_POST['Wheelchair'])) {
	$Wheelchair = 1;
}

if (isset($_POST['Elevator'])) {
	$Elevator = 1;
}

if (isset($_POST['Stairs'])) {
	$Stairs = 1;
}

if (isset($_POST['Handicap_bathrooms'])) {
	$Handicap_bathrooms = 1;
}

if (isset($_POST['Street_parking'])) {
	$Street_parking = 1;
}

if (isset($_POST['Carport'])) {
	$Carport = 1;
}

if (isset($_POST['Garage'])) {
	$Garage = 1;
}

if (isset($_POST['Driveway'])) {
	$Driveway = 1;
}

if (isset($_POST['Smoke_detector'])) {
	$Smoke_detector = 1;
}

if (isset($_POST['Fire_alarm'])) {
	$Fire_alarm = 1;
}

if (isset($_POST['Carbon_monoxide_detector'])) {
	$Carbon_monoxide_detector = 1;
}

if (isset($_POST['Private_entrance'])) {
	$Private_entrance = 1;
}

if (isset($_POST['Shared_entrance'])) {
	$Shared_entrance = 1;
}

if (isset($_POST['Buzzer'])) {
	$Buzzer = 1;
}

if (isset($_POST['have_pets'])) {
	$have_pets = 1;
}

if (isset($_POST['Pets_Allowed'])) {
	$Pets_Allowed = 1;
}



    $sql = "UPDATE features SET Shared_Place = '$Shared_Place',	
			Vacant_House = '$Vacant_House',
			Guest_House	='$Guest_House',
			Apartment	='$Apartment',
			City	='$City',
			Suburb	='$Suburb',
			Country='$Country',
			Air_mattress	='$Air_mattress',
			Futon	='$Futon',
			Hide_a_bed	='$Hide_a_bed',
			Murphy_bed	='$Murphy_bed',
			Couch	='$Couch',
			Cable_TV='$Cable_TV',	
			Yard	='$Yard',
			Swimming_Pool	='$Swimming_Pool',
			Library	='$Library',
			Video_games	='$Video_games',
			TrailAtHome	='$TrailAtHome',
			Picnic_area	='$Picnic_area',
			Basketball	='$Basketball',
			Pool_table	='$Pool_table',
			Soccer	='$Soccer',
			Porch	='$Porch',
			Board_games	='$Board_games',
			Sauna	='$Sauna',
			Hottub	='$Hottub',
			Piano	='$Piano',
			Guitar	='$Guitar',
			Gym	='$Gym',
			Patio='$Patio',	
			Mall	='$Mall',
			Local_events	='$Local_events',
			Park	='$Park',
			TrailInArea	='$TrailInArea',
			Bike_share	='$Bike_share',
			Skiing	='$Skiing',
			Beach	='$Beach',
			Lake	='$Lake',
			Fishing	='$Fishing',
			Lra	='$Lra',
			Air_condition	='$Air_condition',
			Bathroom_Basics	='$Bathroom_Basics',
			Heating	='$Heating',
			Kitchen	='$Kitchen',
			Bathrooms='$Bathrooms',	
			Wifi	='$Wifi',
			Computer='$Computer',	
			Lawn	='$Lawn',
			Fire_pit='$Fire_pit',	
			Garden	='$Garden',
			Barbeque='$Barbeque',	
			Lawn_games	='$Lawn_games',
			Basketball_court	='$Basketball_court',
			SoccerExterior	='$SoccerExterior',
			volleyball_area	='$volleyball_area',
			Washer_and_Dryer='$Washer_and_Dryer',	
			Oven	='$Oven',
			Stove	='$Stove',
			Iron	='$Iron',
			Ironing_board	='$Ironing_board',
			Toaster	='$Toaster',
			Hair_dryer	='$Hair_dryer',
			Microwave	='$Microwave',
			Cooking_Basics	='$Cooking_Basics',
			Baking_basics	='$Baking_basics',
			Coffee_maker	='$Coffee_maker',
			Coffee_grinder	='$Coffee_grinder',
			blender	='$blender',
			Crib	='$Crib',
			Swing	='$Swing',
			Slide	='$Slide',
			Baby_Monitor	='$Baby_Monitor',
			High_chair	='$High_chair',
			Sand_box	='$Sand_box',
			Stair_gates	='$Stair_gates',
			Children_silverware	='$Children_silverware',
			Window_guards	='$Window_guards',
			Outlet_guards	='$Outlet_guards',
			Child_proof	='$Child_proof	',
			Books	='$Books',
			Toys	='$Toys',
			Wheelchair	='$Wheelchair',
			Elevator	='$Elevator',
			Stairs	='$Stairs',
			Handicap_bathrooms	='$Handicap_bathrooms',
			Street_parking	='$Street_parking',
			Carport	='$Carport',
			Garage	='$Garage',
			Driveway='$Driveway',	
			Smoke_detector	='$Smoke_detector',
			Fire_alarm	='$Fire_alarm',
			Carbon_monoxide_detector	='$Carbon_monoxide_detector',
			Private_entrance	='$Private_entrance',
			Shared_entrance	='$Shared_entrance',
			Buzzer	='$Buzzer',
			have_pets='$have_pets',	
			Pets_Allowed	='$Pets_Allowed'	
			WHERE property_id = '$propId'";
	
	$mysqli->query($sql);

	$sqlCount = "UPDATE features SET Twin_count = '$Twin_count', FullCount = '$FullCount', Queen_count = '$Queen_count', King_count = '$King_count' WHERE property_id = '$propId'";

	$mysqli->query($sqlCount);
?>