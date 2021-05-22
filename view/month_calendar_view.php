<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カレンダー</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'month_calendar.css'); ?>">
</head>
<body>
<body>
    <div class="container">
        <h3><a href="?year_month=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?year_month=<?php echo $next; ?>">&gt;</a></h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
</body>
</html>