<?php

$result = array( 
        'title'=>'Improve CSS',
        'status'=>'Open',
        'description'=>'improve site css',
        'importance'=>4
    );
$jsonstring = json_encode($result);
header('Content-Type:text/json;charset=utf-8');
echo $jsonstring;

?>