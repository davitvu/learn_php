<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang PHP Đơn Giản</title>
</head>
<body>
    <h1>Chào mừng đến với trang PHP của tôi!</h1>
    <?php
        echo "<p>Đây là đoạn văn bản được tạo bởi PHP.</p>";
        
        echo "<p>Thời gian hiện tại là: " . date("H:i:s d-m-Y") . "</p>";

        $a = 1;
        $b = 2;

        if($a == 1) echo "<p>giong 1</p>";
        if($b != 1) echo "<p>khac 1</p>";
    ?>
</body>
</html>
