<?php
$a = array('item' => 1);
// $b = &$a;
// $b['item'] = 2;
function test(&$c){
    $c['item'] = 2;
}
test($a);

echo json_encode($a);

?>