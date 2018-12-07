<!DOCTYPE html>
<html>
<body>
    <style>
        td,th,table
        {
            border-collapse:collapse;
            background-color:light  blue;
        }
    </style>
    <?php
    $conn = mysqli_connect('localhost', 'root', 'root','student');
    if($conn->connect_error)
        die("Error".$conn->connect_error);
    $sql = "SELECT * FROM students;";
    $res = $conn->query($sql);
    $students = array();
    $n = $res->num_rows;
    while($r = $res->fetch_assoc())
        $students[] = $r;
    
    echo '<h2>Before sorting</h2>';
    echo '<table border=2>';
    echo '<tr><th>USN</th><th>Name</th><th>Address</th></tr>';
    for($i=0;$i<$n;$i++)
    {
        echo '<tr>';
        echo '<td>'.$students[$i]['usn'].'</td>';
        echo '<td>'.$students[$i]['name'].'</td>';
        echo '<td>'.$students[$i]['addr'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    for($i=0;$i<$n;$i++)
    {
        $min=$i;
        for($j=$i+1;$j<$n;$j++)
            if($students[$min]['usn']>$students[$j]['usn'])
                $min = $j;
        $temp = $students[$min];
        $students[$min] = $students[$i];
        $students[$i] = $temp;
    }

    echo '<h2>After sorting</h2>';
    echo '<table border=2>';
    echo '<tr><th>USN</th><th>Name</th><th>Address</th></tr>';
    for($i=0;$i<$n;$i++)
    {
        echo '<tr>';
        echo '<td>'.$students[$i]['usn'].'</td>';
        echo '<td>'.$students[$i]['name'].'</td>';
        echo '<td>'.$students[$i]['addr'].'</td>';
        echo '</tr>';
    }
    echo '</table>'
    ?>
</body>
</html>