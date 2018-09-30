<?php

$emailid=$_POST['emailid2'];
$newpsw=$_POST['newpsw2'];
$repsw=$_POST['repsw2'];

  echo $emailid;
  echo $newpsw;
  echo $repsw;
if($newpsw==""||$renew==""||$emailid=="")
 {
   echo "fill all entity";
  
 }
else if ($newpsw!=$repsw) 
{
  echo "Password are not matching! re-enter correct password";
}
else
 {
    mysql_connect("localhost","root","");
    mysql_select_db("mnnit_notice_board");
    $query="SELECT * FROM signup WHERE email_id='$emailid' ";
    $result=mysql_query($query);//to run query
    $count=mysql_num_rows($result);//check in number of row that have user

        if($count!=0)
          {
            $query1="UPDATE signup set password='$newpsw' WHERE email_id='$emailid'";
            mysql_query($query1);
            $query2="UPDATE signup set re-password='$repsw' WHERE email_id='$emailid'";
            mysql_query($query2);
            echo"password successfully updated";
          }
        else
          {
            ?><script type="text/javascript">alert('User not exists!')</script>
            <?php
          }
  }
?>