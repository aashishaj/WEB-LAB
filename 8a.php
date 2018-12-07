<!DOCTYPE html>
<html>

<body>
    <style>
        table, td, th
        {
        border: 1px solid black;
        border-collapse:collapse;
        text-align: center;
        background-color: darkgray;
        }
    </style>
    <table>
    <caption>Simple Calculator</caption>
    <form method="post">
        <tr>
            <td>Input 1<input type="text" name='v1' /></td>
            <td rowspan=2><input type="submit" name='submit' value="submit" /></td>
        </tr>
        <tr>
            <td>Input 2<input type="text" name ='v2' /></td>
        </tr>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            if(!is_numeric($v1) or !is_numeric($v2))
                echo '<script type="text/javascript">alert("Enter proper values")</script>';
            else
            {
                echo '<tr><td>Addition</td><td>'.($v1+$v2).'</td></tr>';
                echo '<tr><td>Subtraction</td><td>'.($v1-$v2).'</td></tr>';
                echo '<tr><td>Multiplication</td><td>'.($v1*$v2).'</td></tr>';
                echo '<tr><td>Division</td><td>'.($v1/$v2).'</td></tr>';
                echo '</table>';
            }
        }
    ?>
</body>
</html>