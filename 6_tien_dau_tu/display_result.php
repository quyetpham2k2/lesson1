<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả đầu tư</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        a {
            display: block;
        }

        body * {
            width: 100%;
            margin-top: 16px;
            padding: 12px;
        }

        h2 {
            text-align: center;
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
        <?php
        $investmentAmount = (float) $_POST["investmentAmount"];
        $interestRate = (float) $_POST["yearlyInterestRate"];
        $years = (int) $_POST["numberOfYears"];
        ?>

        <p>
            Inventment Amount (Lượng tiền đầu tư ban đầu):
            <strong> <?php echo $investmentAmount; ?> </strong>
        </p>
        <p>
            Yearly Interest Rate (Lãi suất năm):
            <strong> <?php echo $interestRate; ?></strong>
        </p>
        <p>
            Number of Years (Số năm đầu tư):
            <strong> <?php echo $years; ?> </strong>
        </p>
        <p>
            <?php $futureValue = $investmentAmount;
            for ($i = 1; $i <= $years; $i++) {
                $futureValue += $futureValue * ($interestRate / 100);
            } ?>

            Future Value (Giá trị tương lai):
            <strong> <?php echo $futureValue; ?> </strong>
        </p>

        <a href="index.php"
            style="text-align: center; border: 1px solid black; text-decoration: none; color: black; font-weight: bold">Trang
            chủ</a>
    </div>
</body>

</html>