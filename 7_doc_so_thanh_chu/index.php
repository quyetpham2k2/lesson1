<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng đọc số thành chữ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;

            width: 100%;
            margin-top: 16px;
            padding: 12px;
        }

        h2 {
            text-align: center;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
            font-weight: bold;
        }

        .container {
            max-width: 500px;
            margin: 40px auto;
            border: 3px solid black;
        }
    </style>
    <script>
        window.onload = function () {
            document.getElementById("numberInput").focus();
        };
    </script>
</head>

<body>
    <h2>Chương trình có khả năng đọc các số nguyên không âm có tối đa 3 chữ số.</h2>
    <div class="container">
        <form method="post">
            <input type="number" focus name="number" id="numberInput" placeholder="Nhập số cần đọc" />
            <input type="submit" id="submit" value="Read Number" />
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            echo "<p>Số đã nhập: " . $_POST["number"] . "</p> ";
            $number = (int) $_POST["number"];

            if ($number < 0 || $number > 999) {
                echo "<strong style='color: red'>Số nhập quá phạm vi!</strong> ";
            } else if ($_POST["number"] === "") {
                echo "<strong style='color: red'>Nhập sai định dạng!</strong> ";
            } else {
                echo "<strong>Kết quả: " . convertNumberToWords($number) . "</strong> ";
            }
        }

        function convertNumberToWords($number)
        {
            $ones = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];

            if ($number < 10) {
                switch ($number) {
                    case 0:
                        return "zero";
                    case 1:
                        return "one ";
                    case 2:
                        return "two ";
                    case 3:
                        return "three ";
                    case 4:
                        return "four ";
                    case 5:
                        return "five ";
                    case 6:
                        return "six ";
                    case 7:
                        return "seven ";
                    case 8:
                        return "eight ";
                    case 9:
                        return "nine ";
                }
            } else if ($number >= 10 && $number < 20) {
                switch ($number) {
                    case 10:
                        return "ten ";
                    case 11:
                        return "eleven ";
                    case 12:
                        return "twelve ";
                    case 13:
                        return "thirteen ";
                    case 14:
                        return "fourteen ";
                    case 15:
                        return "fifteen ";
                    case 16:
                        return "sixteen ";
                    case 17:
                        return "seventeen ";
                    case 18:
                        return "eighteen ";
                    case 19:
                        return "nineteen ";
                }
            } else if ($number >= 20 && $number < 100) {
                $tenText = "";
                $ten = (int) ($number / 10);
                $behindNum = $number % 10;

                switch ($ten) {
                    case 2:
                        $tenText = "twenty ";
                        break;
                    case 3:
                        $tenText = "thirty ";
                        break;
                    case 4:
                        $tenText = "forty ";
                        break;
                    case 5:
                        $tenText = "fifty ";
                        break;
                    case 6:
                        $tenText = "sixty ";
                        break;
                    case 7:
                        $tenText = "seventy ";
                        break;
                    case 8:
                        $tenText = "eighty ";
                        break;
                    case 9:
                        $tenText = "ninety ";
                        break;
                }
                return $tenText .= $ones[$behindNum];
            } else if ($number >= 100) {
                return ($number % 100 === 0) ?
                    $ones[(int) ($number / 100)] .= " hundred" :
                    $ones[(int) ($number / 100)] .= " hundred and " . convertNumberToWords((int) ($number % 100));
            }
        }
        ?>

    </div>
</body>

</html>