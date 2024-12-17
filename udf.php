<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <h1>ทดสอบการส้ราง function ที่สร้างโดบผู้พัฒนาโปรแกรม</h1>
       <?php

       $name = "ur name here";
       hello($name);
    //--------------------------------------------------
    echo"<h3>ทดสอบการใช้ Function </h3>";
    $a = 5;
    $b = 8;
    $c = sum($a,$b);
    echo "$a + $b = $c <br>";

    echo "<hr>";
    echo "<h3>ทดสอบการใช้ Function แบบมีพารามิเตอร์เป็น Refernece</h3>";

    $num = 2;
    echo "Before ==> \$num = $num";
    echo "<br>";
    add_5($num);
    add_5($num);
    echo "After ==> \$num = $num";
    echo "<hr>";


    echo "<h3>ทดสอบการใช้ Function แบบมีพารามิเตอร์หลายตัว/h3>";

    $sumMyNumber = sumMyNumber(1,2,3,4,5,6,7,8,9);
    echo "ผลรวมของ (1,2,3,4,5,6,7,8,9) = $sumMyNumber";
    echo "<hr>"; 



    


    //--------------------------------------------------
       bye() ;

       function sumMyNumber(...$x){
        $sum = 0;
        foreach ($x as $value) {
            $sum += $value;
        }
        return $sum;
       }
    
       function add_5(&$value){
        $value += 5;
       }


        function Hello($yourname) {
            echo "<h3>ผู้พัฒนาโปรแกรม</h3>";
            echo "". $yourname ."";
            echo "<hr>";

        }
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }

        function bye(){
            
            echo "<h4>หลักสูตรวิทยาการเทคโนโลยีสารสนเทศ</h4>";
            echo "<h4>สาขาวิชาเทคโนโลยรสารสนเทศ</h4>";
            echo "<hr>";
        }

        ?>
        
        <script src="" async defer></script>
    </body>
</html>