<html>
    <body>
        <?php
            $x = 6;
            $y = 4;

            $sum = $x + $y;
            $sub = $x - $y;

            echo ("Sum is $sum <br>");
            echo ("Sub is $sub <br>");

            $count =0;

            for($i=5;$i<=15;$i++)
            {
                $count++;
            }

            echo ("Count is $count <br>");

            $billedunits = 64;
            $bill = 0;

            if($billedunits>=0 && $billedunits<=50){
                $bill = $billedunits * 3.50;
            }
            else if($billedunits>=51 && $billedunits<=100){
                $bill = $billedunits * 4;
            }else
            {
                $bill = $billedunits * 5.20;
            }

            echo ("YOur billed amount is $bill <br>");


            $day = 5;

            switch($day){
                case 1 : echo ("Monday <br>");
                break;
                case 2 : echo ("Tuesday <br>");
                break;
                default: echo "Enter a valid day <br>";
                break;
            }


            $fruits = array('Apple', 'orange', 'watermelon');

            foreach($fruits as $fruit)
            {
                echo("$fruit<br>");
            }
        ?>
    </body>
</html>