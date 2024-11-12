<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị các số nguyên tố nhỏ hơn 100.</title>
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

        .container {
            max-width: 800px;
            margin: 40px auto;
            border: 3px solid black;
        }
    </style>
</head>

<body>
    <h2>Chương trình ứng dụng cho phép hiển thị các số nguyên tố nhỏ hơn 100.</h2>
    <div class="container">
        <?php
        function isPrime($number)
        {
            if ($number < 2)
                return false;

            for ($i = 2; $i <= sqrt($number); $i++)
                if ($number % $i == 0)
                    return false;
            return true;
        }

        $primeNumbers = [];
        for ($i = 2; $i < 100; $i++)
            if (isPrime($i))
                $primeNumbers[] = $i;

        echo implode(", ", $primeNumbers) . '.';
        ?>

    </div>
</body>

</html>