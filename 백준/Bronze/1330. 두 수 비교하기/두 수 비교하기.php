<?php
$arr = explode(' ',fgets(STDIN));


$A = (int)$arr[0];
$B = (int)$arr[1];

if ($A > $B) {               
    echo '>';
} elseif ($A < $B) {          
    echo '<';
} else {                        
    echo '==';
}

?>