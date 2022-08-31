<?php
include_once '../database/db.php';
include_once '../utils/validators.php';
include_once '../utils/session.php';
include_once '../services/user.php';
include_once '../services/todo.php';

$status = $_POST['status'];
$title = $_POST['title'];
$description = $_POST['description'];
$planned_start_date = $_POST['planned_start_date'];
$created_at = $_POST['created_at'];
$planned_end_date = $_POST['planned_end_date'];
$actual_start_date = $_POST['actual_start_date'];
$actual_end_date = $_POST['actual_end_date'];
$user_id = $

if (isset($_POST['create_task'])) {

}
