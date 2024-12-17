<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณ BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            padding-top: 20px;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 8px;
            display: inline-block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .footer {
            text-align: center;
            color: #888;
            margin-top: 40px;
        }

        .result {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

    <h2>คำนวณ BMI</h2>

    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="weight">น้ำหนัก (กิโลกรัม)</label>
                <input type="text" name="weight" id="weight" required>
            </div>

            <div class="form-group">
                <label for="height">ส่วนสูง (เซนติเมตร)</label>
                <input type="text" name="height" id="height" required>
            </div>

            <input type="submit" value="คำนวณ">
        </form>

        <?php
        
        function calculateBMI($weight, $height) {
            return $weight / ($height * $height);
        }
        
        function getBMICategory($bmi) {
            if ($bmi < 18.5) {
                return "คุณมีน้ำหนักน้อยเกินไป";
            } elseif ($bmi >= 18.5 && $bmi < 25.0) {
                return "คุณมีน้ำหนักปกติ";
            } elseif ($bmi >= 25.0 && $bmi < 30.0) {
                return "คุณเริ่มอ้วน";
            } elseif ($bmi >= 30.0 && $bmi < 35.0) {
                return "คุณอ้วน";
            } else {
                return "คุณอ้วนมากผิดปกติ";
            }
        }

        
        function displayBMIResults($weight, $height) {
           
            $heightInMeters = $height / 100;

            
            $bmi = calculateBMI($weight, $heightInMeters);
            $bmi = number_format($bmi, 2);

           
            $category = getBMICategory($bmi);

            
            echo "<div class='result'>";
            echo "<p><strong>น้ำหนัก:</strong> $weight กิโลกรัม</p>";
            echo "<p><strong>ส่วนสูง:</strong> $height เซนติเมตร</p>";
            echo "<p><strong>BMI ของคุณคือ:</strong> $bmi</p>";
            echo "<p><strong>คำแนะนำ:</strong> $category</p>";
            echo "</div>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = floatval($_POST['weight']);
            $height = floatval($_POST['height']);

            
            if ($weight > 0 && $height > 0) {
                displayBMIResults($weight, $height);
            } else {
                echo "<div class='result'><p>กรุณากรอกน้ำหนักและส่วนสูงที่ถูกต้อง</p></div>";
            }
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>ค่า BMI</th>
                    <th>หมวดหมู่</th>
                    <th>คำแนะนำ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>น้อยกว่า 18.5</td>
                    <td>ผอมเกินไป</td>
                    <td>น้ำหนักน้อยกว่าปกติ เสี่ยงต่อการขาดสารอาหาร ควรปรับพฤติกรรมการรับประทานอาหารและออกกำลังกาย</td>
                </tr>
                <tr>
                    <td>18.5 - 25.0</td>
                    <td>น้ำหนักปกติ</td>
                    <td>น้ำหนักเหมาะสม ควรรักษาระดับ BMI นี้ให้นานที่สุด และตรวจสุขภาพประจำปี</td>
                </tr>
                <tr>
                    <td>25.0 - 30.0</td>
                    <td>เริ่มอ้วน</td>
                    <td>เริ่มมีความเสี่ยงต่อโรคอ้วน ควรปรับพฤติกรรมการกินและออกกำลังกาย</td>
                </tr>
                <tr>
                    <td>30.0 - 35.0</td>
                    <td>อ้วน</td>
                    <td>เสี่ยงต่อโรคร้ายแรง ควรปรึกษาแพทย์และตรวจสุขภาพ</td>
                </tr>
                <tr>
                    <td>มากกว่า 35.0</td>
                    <td>อ้วนมากผิดปกติ</td>
                    <td>เสี่ยงสูงต่อโรคร้ายแรง ควรพบแพทย์ทันที</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>© 2024 BMI</p>
    </div>

</body>

</html>
