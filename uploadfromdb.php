<?php
   $username='root';
   $password='';
   $conn=new PDO('mysql:host=localhost;dbname=teacher', $username, $password);

   $sql1="SELECT * FROM `teacher`";
   $retval1 = $conn->query($sql1);

   if(!$retval1)
   {
      die('Không thể lấy dữ liệu: ' . mysql_error());
   }
   $teacher=$retval1->fetchAll(PDO::FETCH_ASSOC);
   $conn=null;
?>