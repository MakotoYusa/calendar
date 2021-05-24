<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>日付</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'day_calendar.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9"><h2><a href="?date=<?php echo $prev; ?>">&lt;</a> <?php echo $date; ?> <a href="?date=<?php echo $next; ?>">&gt;</a></h2></div>
            <div class="col-3"><a href="insert_schedule.php?date=<?php echo $date; ?>" class="btn-success btn-lg">予定を追加</a></div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>予定</th>
                    <th>開始時間</th>
                    <th>終了時間</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($schedules as $schedule){ ?>
                <tr>
                    <td><?php print (h($schedule['schedule_name'])) ?></td>
                    <td><?php print (h($schedule['start_time'])) ?></td>
                    <td><?php print (h($schedule['end_time'])) ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>