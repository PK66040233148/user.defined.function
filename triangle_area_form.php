<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</h2>
        <h3>คำนวณพื้นที่รูปสามเหลี่ยม</h3>
        <form action="triangle_area.php" method="post" class="form">
            <label for="height">ความสูง :</label>
            <input type="text" name="height" id="height" required>
            <br>
            <label for="width">ความยาวฐาน :</label>
            <input type="text" name="width" id="width" required>
            <br>
            <div class="buttons">
                <input type="submit" value="คำนวณ">
                <input type="reset" value="รีเซ็ต">
            </div>
        </form>
    </div>
</body>
</html>