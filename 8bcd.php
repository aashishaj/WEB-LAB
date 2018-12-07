<!DOCTYPE html>
<html>
<body>
    <?php
        function print_matrix($mat, $m, $n)
        {
            for($i=0;$i<$m;$i++)
            {
                for($j=0;$j<$n;$j++)
                    echo $mat[$i][$j]." ";
                echo "<br>";
            }
        }

        $mat1 = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
        $mat2 = array(array(7, 8, 9), array(4, 5, 6), array(1, 2, 3));
        $m = sizeof($mat1);
        $n = sizeof($mat1[0]);
        $p = sizeof($mat2);
        $q = sizeof($mat2[0]);

        echo 'Matrix 1<br>';
        print_matrix($mat1, $m, $n);

        echo '<br /> Matrix 2<br>';
        print_matrix($mat2, $p, $q);

        echo '<br> Sum <br>';
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
                echo ($mat1[$i][$j] + $mat2[$i][$j])." ";
            echo "<br>";
        }
        $res = array();
        echo '<br> Product <br>';
        for($i=0;$i<3;$i++)
            for($j=0;$j<3;$j++)
            {
                $res[$i][$j] = 0;
                for($k=0;$k<3;$k++)
                    $res[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
            }
        print_matrix($res, 3, 3);
    ?>
</body>
</html>