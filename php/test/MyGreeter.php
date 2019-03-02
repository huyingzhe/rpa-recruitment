<?php

class Client {
    function getGreeting(){
        $h=date('G');
        if ($h<11) echo '早上好';
        else if ($h<13) echo '中午好';
        else if ($h<17) echo '下午好';
        else echo '晚上好';
    }

}




