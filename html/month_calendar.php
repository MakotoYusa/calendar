<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'db.php';


// セッションの開始
session_start();

// データベースへ接続
$db = get_db_connect();

// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

// 年月を取得、次月、先月リンクが押された場合、GETパラメーターから取得
if(isset($_GET['year_month'])){
    $year_month = $_GET['year_month'];
}else{
    $year_month = date('Y-m');
}

// タイムスタンプの作成、フォーマットのチェック
$timestamp = strtotime($year_month. '-01');
if($timestamp === false){
    $year_month = date('Y-m');
    $timestamp = strtotime($year_month. '-01');
}

// カレンダーのタイトルを作成　例）2017年7月
$html_title = date('Y年n月', $timestamp);

// 先月、次月の年月を取得
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// 該当月の日数を取得
$day_count = date('t', $timestamp);

// 1日が何曜日か取得
$day_of_the_week = date('w', $timestamp);

// 今日の日付を取得
$today = date('Y-m-j');

$weeks = [];
$week = '';

// 1週目に空のセルを追加
$week .= str_repeat('<td></td>', $day_of_the_week);

// 日にちごとのセルを追加
for($day = 1; $day <= $day_count; $day++, $day_of_the_week++){
    $date = $year_month . '-' . $day;
    // 今日の日付の場合、class="today"を追加
    if($today == $date){
        $week .= '<td class="today">' . $day;
    }else{
        $week .= '<td>' . $day;
    }
    $week .= '</td>';

    // 週終り、または月終りの場合
    if($day_of_the_week % 7 == 6 || $day == $day_count){
        // 月の最終日の場合、残りに空セルを地価
        if($day == $day_count){
            $week .= str_repeat('<td></td>', 6 - ($day_of_the_week % 7));
        }
    
        // weeks配列にtrと$weekを追加
        $weeks[] = '<tr>' . $week . '</tr>';
    
        // weekをリセット
        $week = '';
    }
}

include_once VIEW_PATH . 'month_calendar_view.php';