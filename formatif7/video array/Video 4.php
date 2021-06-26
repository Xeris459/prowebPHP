<?php
echo "<h1>Latihan Array</h1><hr>";

$data = array(18, 24, 30, 27, 39, 41, 22, 27, 30, 44);

for($i = 0; $i<count($data); $i++){
    if($i%2==1){
    echo $data[$i] ." ";
    }
}
?>