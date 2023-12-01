<?php
if (!isset($_REQUEST['data'])) {
    $response = ['error' => 'no data recieved'];
    echo json_encode($response);
} else {
    include_once('../model/userModel.php');
    $data = $_REQUEST['data'];
    print_r($data);
}
