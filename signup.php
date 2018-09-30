<?php
$name=$_POST['fname'];
$regno=$_POST['regno'];
$psw=$_POST['psw2'];
$repsw=$_POST['repsw'];
$emailid=$_POST['emailid'];
$dob=$_POST['dob'];
$branch=$_POST['branch'];
$mobile=$_POST['mobile'];

if($name=="" ||$emailid=="" ||$dob==""||$regno==""||$psw==""||$repsw==""||$mobile==""||$branch=="")
{
  ?>
  <script type="text/javascript">alert('fill all entity')</script>
  <?php
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("mnnit_notice_board");

$query="SELECT * FROM signup WHERE reg_no='$regno' AND password='$psw'";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count==0)
   {
   	    $psw=md5($psw);/*here password is encryting*/
        $repsw=md5($repsw);/*here re-password is encryting*/
     $query1="INSERT INTO signup VALUES('$name','$regno','$psw','$repsw','$emailid','$dob','$branch','$mobile')";
     mysql_query($query1);
     echo"signup successful";
     header("location:index.php");
   }
else
   {
     ?><script type="text/javascript">alert('user already exists!')</script>
            <?php
   }
  }
?>
