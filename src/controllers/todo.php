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

if (isset($_POST['create_task'])) {
  $id = getLoginSession();
  createTask($id, $status, $title, $description, $created_at, 
  $planned_start_date, $planned_end_date, $actual_start_date, 
  $actual_end_date);
}

if (isset($_POST['edit'])) {
  $task_id = $_POST['task_id'];
  edit($task_id, $title, $description, $planned_start_date, 
    $planned_end_date);
}

if (isset($_POST['delete_task'])) {
  $task_id = $_POST['task_id'];
  deleteTask($task_id);
}

if (isset($_POST['update_status'])) {
  $task_id = $_POST['task_id'];
  updatStatus($task_id,$status);
}

if (isset(['get_task'])) {
  $user_id = getLoginSession();
  getTask($user_id);
}

if (isset(['get_not_completed_tasks'])) {
  getNotCompletedTasks($user_id);
}

if (isset(['get_completed_tasks'])) {
  $user_id = getLoginSession();
  getCompletedTasks($user_id);
}

if (isset($_POST['add_feedback'])) {
  $comment = $_POST['comments'];
  $task_id = $_POST['task_id'];
  addFeedback($comment, $task_id);
}
