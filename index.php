<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hi</title>
</head>
<body>
    <h1>Chào mừng đến với trang PHP của tôi!</h1>
    <?php
        echo "<p>Đây là đoạn văn bản được tạo bởi PHP.</p>";
        
        echo "<p>Thời gian hiện tại là: " . date("H:i:s d-m-Y") . "</p>";

        $a = 1;
        $b = 2;
        $c = 6;

        if($a == 1) echo "<p>giong 1</p>";
        if($b != 1) echo "<p>khac 1</p>";
        
        if($c == 3) echo "<p>giong $c</p>";
        elseif($c == $b) echo "<p>khac $c = $b</p>";
        else echo "<p>khong giong cai nao</p>";

        // đếm ký tự
        echo strlen("Ần") . "<br>"; // An = 2; Ân = 3; Ần = 4;

        // đếm số lượng từ
        echo str_word_count("trặt") . "<br>";

        // đảo ngược chuỗi
        echo strrev("Nguyen ronal do") . "<br>";

        // tìm giá trị trả về index
        echo strpos("123aa", "3") . "<br>";

        // thay chuoi Cú pháp => (chuỗi, từ muốn thay, chuỗi, từ cần thay, "chuỗi gốc")
        echo str_replace("nguyen ro", "tran va", "nguyen ronal do") . "<br>";
    ?>
</body>
</html>
