 <?php
  include('header.php');
?> 
   <!--This is after header section-->
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
           <!-- Notification panel -->
        <div  style="border:2px solid green; border-radius: 2px">
              <div  style="text-align:center; border: 0.5px solid green;"><h3>Latest news</h3></div>
              <div >
                <p>This is the best website
                 you can search anything here
                 the best thumfjdfug</p>
              </div>
              <hr>
              <div >
                   this is the best website
                 you can search anything here
                 the best thumfjdfug
              </div><hr>
              <div >
                   this is the best website
                 you can search anything here
                 
              </div><hr>
              <div>
                   this is the best website
                 you can search anything here
                 the best thumfjdfug
              </div><hr>
              <div>
                   this is the best website
                 you can search anything here
                 the best thumfjdfug
              </div><hr>
              <div>
                   this is the best website
                 you can search anything here
                 the best thumfjdfug
              </div>
                </div>
      </div>

      <!-- image sliding -->
      <div class="slides2 col-sm-8">
        <div>
         <img class="slides" src="images/m2.jpeg" style="max-width:100%;height:auto;">
         <img class="slides" src="images/m4.jpeg" style="max-width:100%;height:auto;">
         <img class="slides" src="images/m3.jpeg" style="max-width:100%;height:auto;">
         <img class="slides" src="images/m5.jpeg" style="max-width:100%;height:auto;">
       </div>
        <div style="margin-top: 40px;font-size:18px;">
          <p><b style="font-size: 25px;color:blue;">About:- </b> This is notice board portal of Mnnit Allahabad. You can get all news related to Mnnit Allahabad.In this website all Departments,Training and Placement office,Dean,Student Activity centre's all the latest news are shown in various section.
          </p>
        </div>

      </div>
  </div>
 </div>

    <!--Javascript for slides changing section-->
    <script>
          var idx = 0;
          fun();

         function fun()
          {
             var i;
             var x = document.getElementsByClassName("slides");
             
             for (i = 0; i < x.length; i++) 
                    x[i].style.display = "none";  
             idx++;
             if (idx > x.length)
               idx = 1;    
            
            x[idx-1].style.display = "block";  
            setTimeout(fun, 5000);
           }
     </script>

    
 </body>

</html>