<!DOCTYPE html>
<html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mnnit_notice_board</title>
   
   <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
   <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/styles.css"><!--My designed files-->
   <link rel="stylesheet" type="text/css" href="css/form.css"><!--My designed files-->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
   <style>
       
   </style>
 </head>

 <body class="body " >

    <!--This is top header section-->
    <div  class="div container-fluid header">
          
            <img class="div" src="images/mnnit_logo.png" alt="logo" style="background-color:#a16382">
         
       <h1> Motilal Nehru National Institute of Technology </br>Allahabad</h1>
      </div>
    
     <!--This section is Navigationbar section-->
    <ul class="un_list">
      <li class="list"><a href="#" style="color: black" class="list_a" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LogIn</a></li>

      <li class="list"><a href="#" style="color: black" class="list_a" onclick="document.getElementById('id02').style.display='block'" style="width:auto">Admins</a></li>

      <li class="list"><a href="dean.php" style="color: black" class="list_a">Dean</a></li>
      <li class="list"><a href="departments.php" style="color: black" class="list_a">Departments</a></li>
      <li class="list"><a href="stu_welfare.php" style="color: black" class="list_a">Stu.Welfare</a></li>
      <li class="list"><a href="tpo.php" style="color: black" class="list_a">TPO</a></li>
      <li class="list"><a href="index.php" style="color: black" class="list_a">Home</a></li>

    </ul>
  
   <!--Login form-->
  <div id="id01" class="modal">
         <form class="modal-content animate" method="POST" action="login.php">
     
            <div class="imgcontainer">
               <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><!--close button-->
            </div>
             <div class="container-fluid container">
                   <label for="uname">Registraion no.*</label>
                    <input type="text" placeholder="Enter Reg.No." class="login text" name="uname" required>

                   <label for="psw">Password*</label>
                     <input type="password" placeholder="Enter Password" class="login text" name="psw" required>
                    
                    <button type="submit" class="button">Login</button>
              </div>
           <div class="container" style="background-color:#f1f1f1">
            <!-- signup link -->
    <span class="psw" style="margin-left:55px" onclick="document.getElementById('id03').style.display='block'" style="width:auto;margin-right:60px "><a href="#">New Users</a></span>
    <!-- update password link-->
    <span class="psw" onclick="document.getElementById('id04').style.display='block'">Forgot <a href="#">password?</a></span>
  </div>
          </form>
          
     </div>
   </div>
        
    <!-- Admin login and managing -->
     <div id="id02" class="modal">
         <form class="modal-content animate" method="POST" action="adminlogin.php">
     
            <div class="imgcontainer">ss
               <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><!--close button-->
            </div>
             <div class="container-fluid container">
                   <label for="uname">Admin*</label>
                    <input type="text" placeholder="Admin" class="login text" name="uname1" required>

                   <label for="psw">Password*</label>
                     <input type="password" placeholder="Password" class="login text" name="psw1" required>
                    
                    <button type="submit" class="button">Login</button>
              </div>
          </form>
   </div>
      <!--forgot password updation -->
      <div id="id04" class="modal">
         <form class="modal-content animate" method="POST" action="update.php">
     
            <div class="imgcontainer">
               <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span><!--close button-->
            </div>
             <div class="container-fluid container">
                   <label for="email">Email Id*</label>
                    <input type="email"  class="login text" name="emailid2" required>
                   <label for="psw">New Password*</label>
                    <input type="password"  class="login text" name="newpsw2" required>

                   <label for="psw">Re-enter Password*</label>
                     <input type="password"  class="login text" name="repsw2" required>
                    
                    <button type="submit" class="button">Reset</button>
              </div>
          </form>
   </div>
        
       <!-- sign up form -->
        <div id="id03" class="modal2">
         <form class="modal-content2 animate" method="POST" action="signup.php">
     
            <div class="imgcontainer">
               <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span><!--close button-->
            </div>
             <div class="container-fluid container">
                      <div><h3 style="text-align:center;">Register Here</h3></div><hr>
                     <input type="text" placeholder="Enter Full Name" name="fname" class="login2 text2" required>
    
                     <input type="number" placeholder="Enter Registration No." class="login2 text2" name="regno" required>
                     <input type="password" placeholder="Enter Password" name="psw2" class="login2 text2" required>
                     <input type="password" placeholder="Repeat Password" name="repsw" class="login2 text2" required>
                     <input type="email" placeholder="Enter Email id" name="emailid" class="login2 text2"required>
                     <input type="date" placeholder="Enter Date of Birth" name="dob"class="login2 text2" required>
                     <input type="text" placeholder="Enter Branch" name="branch" class="login2 text2" required>
                     <input type="text" placeholder="Enter Mobile No." name="mobile" class="login2 text2" required>
                    <button type="submit" class="button2">SignUp</button>
              </div>
            </form>
         </div>
       </div>

    <!--popup forms animation script display="none" if cursor touch anywhere accept modal-->
    <script>
           // Get the modal
       var modal = document.getElementById('id01');
       var modal2 = document.getElementById('id02');
       var modal3 = document.getElementById('id03');
       var modal4 = document.getElementById('id04');
           // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
            if (event.target == modal)
                 modal.style.display = "none";
            else if (event.target==modal2)
                  modal2.style.display="none";      
            else if (event.target==modal3)
                  modal3.style.display = "none";
            else if (event.target==modal4)
                  modal4.style.display = "none";
            }
    </script>
