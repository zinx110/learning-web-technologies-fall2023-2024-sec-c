<?php
require_once('db.php');

function getCourses()
{
    $con = getConnection();
    $sql = "select * from courses";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    $courses = [];
    if ($count == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($courses, $row);
        }
        return ['success' => true, 'data' => $courses];
    } else {
        return ['error' => "Invalid username or password"];
    }
}


function uploadCourse($subject, $section, $maxCount, $count, $day, $startTime, $endTime)
{

    $con = getConnection();

    $sql = "insert into courses (
        subject, section, maxCount, count, day, startTime, endTime

        ) values (

           ' $subject', '$section', '$maxCount', '$count', '$day', '$startTime', '$endTime'
        
        )";
    $result = mysqli_query($con, $sql);


    if ($result) {
        return ['success' => "success"];
    } else {

        return ['error' => "Database error!"];
    }
}
