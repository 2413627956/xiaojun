<?php
echo "<table border='1'>";
for($x=1;$x<=9;$x++){
    echo "<tr>";
    for($y=1;$y<=$x;$y++){
       echo '<td>'.$x.'*'.$y.'='.$x*$y.'</td>','&nbsp'; 
    }
    echo '</tr>';
}
echo "<table/>";

