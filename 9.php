<!DOCTYPE html>
<html>
<body>
    <?php
        $states = "Mississippi Alabama Texas Massachusetts Kansas";
        $arr = explode(' ', $states);
        $statesList = array();
        $statesList[0] = reset(preg_grep('/xas$/', $arr));
        $statesList[1] = reset(preg_grep('/^k.*s$/i', $arr));
        $statesList[2] = reset(preg_grep('/^M.*s$/', $arr));
        $statesList[3] = reset(preg_grep('/a$/', $arr));
        
        echo 'Input String: '.$states.'<br />';
        for($i=0;$i<4;$i++)
            echo "stateList[$i]: ".$statesList[$i].'<br />'
    ?>
</body>
</html>