<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            border-collapse: collapse;
        }

        .box {
            width: 100%;
            /* margin: auto; */
            /* background-color: gray; */
            text-align: center;
        }

        .table {
            width: 80%;
            margin: auto;
            /* background-color: red; */
            text-align: center;

        }

        .header {
            display: inline-block;
            width: 13%;
            height: 50px;
            text-align: center;
            background-color: green;
            margin: auto;
            border: 1px solid;

        }

        .data-holiday,
        .data-outsize-holiday {
            display: inline-block;
            width: 13%;
            background-color: pink;
        }

        .data-outsize,
        .data-outsize-holiday {
            display: inline-block;
            width: 13%;
            color: gray;
        }

        .data-real {
            display: inline-block;
            width: 13%;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="table">
            <form action="?" method="get">
                <label for="month">查詢月份</label>
                <input type="number" name="month" id="month" min=1 max=12>
                <input type="submit" value="送出">
            </form>
            <?php
            $month = $_GET['month'] ?? date("m");
            $year = $_GET['year'] ?? date("Y");
            $str = "日 一 二 三 四 五 六";
            $header = explode(" ", $str);

            // 取得當月第一天的日期
            $first_day = date("$year-$month-01");
            // 取得當月第一天的時間戳
            $first_day_stemp = strtotime($first_day);
            // 取得當月第一天是星期幾
            $first_day_is = date("w", $first_day_stemp);
            // 取得當月份有幾天
            $days_in_month = date("t", $first_day_stemp);
            // 取得當月的最後一天的日期
            $last_day = date("$year-$month-$days_in_month");
            $days = [];

            for ($i = 0; $i < 42; $i++) {
                $diff = $i - $first_day_is;
                $days[] = date("Y-m-d", strtotime("$diff days", $first_day_stemp));
            }
            echo "<div><h2>" . date("$year 年 $month 月") . "<h2></div>";
            foreach ($header as $key => $value) {
                echo "<div class='header'>$value</div>";
            }
            foreach ($days as $key => $day) {
                $data = explode("-", $day)[2];
                $what_day = date("w", strtotime($day));

                if ($what_day == 0 || $what_day == 6) {
                    if (date("Y-m", strtotime($day)) !== date("Y-m", $first_day_stemp)) {
                        echo "<div class='data-outsize-holiday'>$data</div>";
                    } else {
                        echo "<div class='data-holiday'>$data</div>";
                    }
                } else {
                    if (date("Y-m", strtotime($day)) !== date("Y-m", $first_day_stemp)) {
                        echo "<div class='data-outsize'>$data</div>";
                    } else {
                        echo "<div class ='data-real'>$data</div>";
                    }
                }
            }
            ?>
        </div>
    </div>

</body>

</html>