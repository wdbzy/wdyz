<?php  
$data = array(  
    'birthDay' => '1216',  
    'isGuest' => 0,  
    'auth' => 1,  
    'idCard' => '130100198112167579',  
    'age' => 42  
);  
$status = 'success';  
$json = json_encode(array('data' => $data, 'status' => $status));  
echo $json;  
?>