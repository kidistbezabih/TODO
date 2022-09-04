<?php
include_once "../database/db.php";
include_once '../utils/session.php';

function createTask($user_id, $status, $title, $description, 
                    $created_at, $planned_start_date, 
                    $planned_end_date, $actual_start_date, 
                    $actual_end_date) 
{
    global $con;
    $query = "INSERT INTO Tasks
        (user_id, status, title, description,
        created_at, planned_start_date, 
        planned_end_date, actual_start_date, actual_end_date)
        VALUES ($user_id, $status, $title, $description, 
        $created_at, $planned_start_date, 
        $planned_end_date, $actual_start_date, 
        $actual_end_date);";
    $result = mysqli_query($con, $query);
    $task = mysqli_fetch_assoc($result);
    return $task;
}

function edit($task_id, $title, $description, 
            $planned_start_date, $planned_end_date) {
    global $con;
    $query = "UPDATE Tasks set title = $title, description = $description, 
        planned_start_date = $planned_start_date, 
        planned_end_date = $planned_end_date WHERE id = $task_id;";
    $result = mysqli_query($con, $query);
    $task = mysqli_fetch_assoc($result);
    return $task; 
}

function deleteTask($task_id) {
    global $con;
    $query = "DELETE FROM Tasks WHERE id = $task_id;";
    $result = mysqli_query($con, $query);
    $task = mysqli_fetch_assoc($result);
    return $task;
}

function updatStatus($task_id,$status) {
    global $con;
    $query = "UPDATE Tasks SET status=$status WHERE id=$task_id;";
    $result = mysqli_query($con, $query);
    $task = mysqli_fetch_assoc($result);
    return $task;
}

function getTask($user_id) {
    global $con;
    $query = "SELECT * FROM WHERE id= $user_id";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function getNotCompletedTasks($user_id) {
    global $con;
    $query = "SELECT * FROM WHERE id= $user_id and status='not completed'";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function getCompletedTasks($user_id) {
    global $con;
    $query = "SELECT * FROM Tasks WHERE id= $user_id and status='completed'";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function addFeedback($comment, $task_id) {
    global $con;
    $query = "UPDATE Tasks SET comment=$comment 
    WHERE id=$task_id;";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}