<?php

function insert_schedule($db, $date, $schedule_name, $start_time, $end_time)
{
  $sql = "
    INSERT INTO
      day_schedule(
        date,
        schedule_name,
        start_time,
        end_time,
        create_datetime,
        update_datetime
      )
    VALUES(?, ?, ?, ?, NOW(), NOW());
  ";

  return execute_query($db, $sql, [$date, $schedule_name, $start_time, $end_time]);
}

function get_day_schedules($db, $date){
    $sql = "
        SELECT
            schedule_name,
            start_time,
            end_time
        FROM
            day_schedule
        WHERE
            date = ?
    ";

    return fetch_all_query($db, $sql, [$date]);
}