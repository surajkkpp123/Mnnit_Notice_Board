<?php
$regno=$_POST['uname'];
$psw=$_POST['psw'];

if($regno==""||$psw=="")
 {
   echo "fill all entity";
 }
else
 {
    mysql_connect("localhost","root","");
    mysql_select_db("mnnit_notice_board");
    $psw=md5($psw);/*here password is encryting*/
    $query="SELECT * FROM signup WHERE reg_no='$regno' AND password='$psw'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);

        if($count!=0)
          {
            ?>
            <script type="text/javascript">alert('login successful')</script>
           <?php
            //header("location:index.php");
          }
        else
          {
           ?>
            <script type="text/javascript">alert('Registration No. or password are not match')</script>
           <?php
          // header("location:index.php");
          }
  }
?>