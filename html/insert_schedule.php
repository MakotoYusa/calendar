<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'db.php';
require_once MODEL_PATH . 'schedule.php';
require_once MODEL_PATH . 'functions.php';

// データベースに接続
$db = get_db_connect();

// 日付を取得
$date = $_GET['date'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // データの受け取り
    $schedule_name = get_post('schedule_name');
    $start_time = get_post('start_time');
    $end_time = get_post('end_time');
    
    insert_schedule($db, $date, $schedule_name, $start_time, $end_time);
    redirect_to('day_calendar.php?date=' . $date);

}

include_once VIEW_PATH . 'insert_schedule_view.php';