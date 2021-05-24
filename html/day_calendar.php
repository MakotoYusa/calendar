<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'db.php';
require_once MODEL_PATH . 'schedule.php';
require_once MODEL_PATH . 'functions.php';

$db= get_db_connect();

// 日付を取得
$date = $_GET['date'];
$timestamp = strtotime($date. '-01');

// 昨日、明日の年月日を取得
$prev = date('Y-m-j', strtotime('-1 day', $timestamp));
$next = date('Y-m-j', strtotime('+1 day', $timestamp));

// 予定を取得
$schedules = get_day_schedules($db, $date);

include_once VIEW_PATH . 'day_calendar_view.php';