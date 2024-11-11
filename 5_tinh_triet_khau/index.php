<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin chiết khấu</title>
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
    <h2>Ứng dụng Product Discount Calculator được sử dụng để tính chiết khấu cho sản phẩm khi mua hàng online</h2>
    <div class="container">
        <form method="post" action="display_discount.php">
            <input type="text" name="productDescription" placeholder="Nhập mô tả của sản phẩm" />
            <input type="text" name="listPrice" placeholder="Nhập giá niêm yết của sản phẩm" />
            <input type="number" name="discountPercent" placeholder="Nhập tỷ lệ chiết khấu (phần trăm)" />
            <input type="submit" id="submit" value="Calculate Discount (Tính chiết khấu)" />
        </form>
    </div>
</body>

</html>