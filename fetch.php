<?php

 $connect = new mysqli('localhost','root','','mydb');
    $fetch = "select * from student";
    $run = $connect->query($fetch);
    while($datas = mysqli_fetch_array($run)){
       echo "id : " .$datas['id']. "<br>";
       echo "admission_no : " . $datas['admission_no']."<br>";
       echo  "assignment : ". $datas['assignment']."<br>";
       echo  "test : " .$datas['test']."<br>";
       echo "exam : " .$datas['exam']."<br>";
       echo "total : " .$datas['total']."<br>";
       echo "grade : " .$datas['grade']."<br><br>";
         
    }
 ?>