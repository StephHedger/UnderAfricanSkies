<p>1.0</p>
<?php
 $FamilyName=$_POST['FamilyName']; 
 $GivenName=$_POST['GivenName']; 
 $NickName=$_POST['NickName']; 
 $DOB=$_POST['DOB']; 
$con = mysql_connect("mysql1416.hostexcellence.com:3306","C245537_gerard", "Steph1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("C245537_education",$con) or die(mysql_error()); 
 mysql_query("INSERT INTO `student` (FamilyName, GivenName, NickName, DOB) VALUES ('$FamilyName', '$GivenName', '$NickName', '$DOB')",$con) or die(mysql_error());  

// some code

mysql_close($con);

 //mysql_connect("127.0.0.1", "C245537_gerard", "Steph1") or die(mysql_error()); 
// mysql_select_db("C245537_education",con$) or die(mysql_error()); 
// mysql_query("INSERT INTO `student` (FamilyName, GivenName, NickName, DOB) VALUES ('$FamilyName', '$GivenName', '$NickName', '$DOB')") or die(mysql_error());  

 //Print "Your information has been successfully added to the database."; 
 ?> 
<p> Your information has been successfully added to the database.</p>