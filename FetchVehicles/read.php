<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../config/DatabaseHelper.php';
include_once '../models/Vehicle.php';


$database = new DatabaseHelper();
$db = $database->connect();


$post = new Vehicle($db);

$result = $post->getVehicles();

$num = $result->rowCount();


if($num > 0) {

    $vehicle_array = array();


    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $vehicles = array(
            'vehicle_id' => $vehicle_id,
            'vehicle_owner' => $vehicle_owner,
            'description' => html_entity_decode($description),
        );

        array_push($vehicle_array, $vehicles);
        // array_push($posts_arr['data'], $post_item);
    }


    echo json_encode($vehicle_array);

} else {

    echo json_encode(
        array('message' => 'No Vehicles Found')
    );
}
