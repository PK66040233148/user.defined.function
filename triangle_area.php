<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>ผลการคำนวณพื้นที่รูปสามเหลี่ยม</h2>
        <div class="result">
            <?php
                $height = $_POST['height'];  // รับค่าความสูงสามเหลี่ยม
                $width = $_POST['width'];   // รับค่าความยาวฐานจากฟอร์มที่ส่งมา
                $area = 0.5 * $height * $width;
                echo "<p>รูปสามเหลี่ยมที่มี <strong>ความสูง</strong> $height และ <strong>ความยาวฐาน</strong> $width</p>";
                echo "<p><strong>พื้นที่:</strong> $area ตารางหน่วย</p>";
            ?>
        </div>
        <div class="actions">
            <a href="triangle_area_form.php" class="btn">กลับไปหน้าแรก</a>
        </div>
    </div>

    <?php 

    function triangleArea($h,$w){
        $a = 0.5 * $h * $w; //คำนวณพื้นที่
        return $a;
    }
    ?>

</body>
</html>
