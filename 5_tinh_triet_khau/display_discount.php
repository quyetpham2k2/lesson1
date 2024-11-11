<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả chiết khấu</title>
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
    <h2>Ứng dụng Product Discount Calculator được sử dụng để tính chiết khấu cho sản phẩm khi mua hàng online</h2>
    <div class="container">
        <p>
            Inventment Amount (Lượng tiền đầu tư ban đầu):
            <strong><?php echo $_POST["productDescription"]; ?></strong>
        </p>
        <p>List Price (Giá niêm yết của sản phẩm): <strong><?php echo $_POST["listPrice"]; ?></strong></p>
        <p>
            Discount Percent (Tỷ lệ chiết khấu - phần trăm):
            <strong><?php echo $_POST["discountPercent"]; ?></strong>
        </p>

        <p>
            Discount Amount (Giá trị chiết khấu):
            <strong><?php echo (float) $_POST["listPrice"] * (float) $_POST["discountPercent"] / 100; ?></strong>
        </p>
        <p>
            Discount Price (Giá sau khi chiết khấu):
            <strong><?php echo (float) $_POST["listPrice"] - (float) $_POST["listPrice"] * (float) $_POST["discountPercent"] / 100; ?></strong>
        </p>
        <a href="index.php"
            style="text-align: center; border: 1px solid black; text-decoration: none; color: black; font-weight: bold">Trang
            chủ</a>
    </div>
</body>

</html>