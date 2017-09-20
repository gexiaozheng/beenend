<?php
date_default_timezone_set("ETC/GMT-8");
$conn=mysqli_connect('bdm275410123.my3w.com','bdm275410123','3539ymhd','bdm275410123_db',3306);
  $sql="SET NAMES UTF8";//如果不设置从数据库出来的中文字符乱码
  mysqli_query($conn,$sql);
  