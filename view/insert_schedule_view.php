<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>予定を追加</title>
</head>
<body>
    <h2>予定を追加</h2>
    <p>日付：<?php echo $date ?></p>
    <form action="insert_schedule.php" method="post">
        <div class="form-group">
            <label for="schedule_name">予定：</label>
            <input class="form-control" type="text" name="schedule_name" id="schedule_name">
        </div>
        <div class="form-group">
            <label for="start_time">開始時間：</label>
            <input class="form-control" type="time" name="start_time" id="start_time">
        </div>
        <div class="form-group">
            <label for="end_time">終了時間：</label>
            <input class="form-control" type="time" name="end_time" id="end_time">
        </div>
        <input type="hidden" name="date" id="date" value="<?php echo $date ?>">
        <input type="submit" value="予定を追加">
    </form>
</body>
</html>