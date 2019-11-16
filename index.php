<?php
    $connect = new mysqli('localhost','root','','eunicedb');
    $cus_firstname = 'Olasupo';
    $cus_surname = 'Eunice';
    $cus_age = '25';
    $stm = "insert into cus_tbl (cus_firstname, cus_surname, cus_age) values( '$cus_firstname', '$cus_surname', '$cus_age')";
    $run = $connect->query($stm);
    if($run){
        echo 'the query executed successfully and the data is inserted into database';
    }else{
        echo $connect->error;
    }
    
?>