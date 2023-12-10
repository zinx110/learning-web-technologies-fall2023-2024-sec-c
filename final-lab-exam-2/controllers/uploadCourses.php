<?php
if (!$isset($_COOKIE['user'])) {
    echo json_encode(['error' => 'user not logged in']);
} else if ($_COOKIE['user']['type'] != 'admin') {
    echo json_encode(['error' => 'user is not admin']);
} else if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'no data sent to server']);
} else {
    $data = json_decode($_REQUEST['data'], true);

    $subject = $data['subject'];
    $section = $data['section'];
    $maxCount = $data['maxCount'];
    $count = $data['count'];
    $day = $data['day'];
    $startTime = $data['startTime'];
    $endTime = $data['endTime'];

    require_once('../models/courseModel.php');
    echo json_encode(uploadCourse($subject, $section, $maxCount, $count, $day, $startTime, $endTime));
}
