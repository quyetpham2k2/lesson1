<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin đầu tư</title>
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
</head>

<body>
    <h2>Ứng dụng Future Value Calculator được sử dụng để tính giá trị tương lai đối với các khoản tiền đầu tư.</h2>
    <div class="container">
        <form method="post" action="display_result.php">
            <input type="text" name="investmentAmount" placeholder="Nhập Lượng tiền đầu tư ban đầu" />
            <input type="text" name="yearlyInterestRate" placeholder="Nhập Lãi suất năm" />
            <input type="number" name="numberOfYears" placeholder="Nhập Số năm đầu tư" />
            <input type="submit" id="submit" value="Calculate" />
        </form>
    </div>
</body>

</html>