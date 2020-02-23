<?php
function getBaseUrl(){

    //Return localhost-domain name
    $hostName = $_SERVER['HTTP_HOST'];

    //uri-> return path of file
    $uri = $_SERVER['REQUEST_URI'];

    //explode uri path from '/'
    $parts = explode('/', $uri);


    for ($i=0; $i < count($parts) - 1 ; $i++) {
        //explode path from last '/' 
        $parts_arr = '/'.$parts[$i].'/';
    }

    //protocol-> return http
   $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
    return $protocol.'://'.$hostName.$parts_arr;
}
?>