<!DOCTYPE html>
<html lang="en">
  <head>
   <?php
            $handle = fopen("data/header.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
      <style>
        <?php
            $handle = fopen("data/style.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
        body{
          margin-bottom: 100px;
          margin-top:70px;
          background-image:url('data/arc.jpg');
        }
        .border{
          border:1px solid lightgrey;
          border-radius: 4px;
          margin:2px;
        }
      </style>

  </head>

  <body>
<?php
            $handle = fopen("data/nav.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>
    <div class="container">
      <div class="row" >
      <div class="col-lg-9 col-md-9 col-sm-9">  
            <div class="col-lg-12 border">
              <h3>5TH SEMESTER BOOKS RECOMMENED IN COLLEGE BY SENIORS</h3>
              <p>Here are the list of best books recommened by seniors to read out which are according to UTU Syllabus as well as give you helps you to catchup the basic roots.</p>
              <p><a class="btn btn-default" href="blog/5th-semester-books-recommened-in.php" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-12 border">
              <h3>3RD SEMESTER RECOMMENED BOOKS IN COLLEGE BY SENIORS FOR ALL BRANCHES</h3>
              <p>Here are the list of best books recommened by seniors to read out which are according to UTU Syllabus as well as give you helps you to catchup the basic roots.</p>
              <p><a class="btn btn-default" href="blog/3rd-semester-recommened-books-in.php" role="button">View details &raquo;</a></p>
            </div>
            
      </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
          <h3><span class="glyphicon glyphicon-list"></span> Quick Links</h3>
          
          
          
          <ul class="list-group">
            <a href="Syllabus.php"> <li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-pencil"></span>  Syllabus for all branches.</li></a>
            <a href="data/ac.jpg"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-calendar"></span>  Academic Calendar.</li></a>
            <a href="https://play.google.com/store/apps/details?id=gbpec.snapup" target="blank"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-tags"></span> Snap-Up : Market at your doorstep.</li></a>
            <a href="https://www.youtube.com/channel/UCYLdkxVujZ43F4LwKvCNsMQ" target="blank"><li class="list-group-item" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-option-vertical"></span> Third Button Studios</li></a>
            <li class="list-group-item active" style="margin:-1px;border-radius: 0px;"><span class="glyphicon glyphicon-paperclip"></span> Archives</li>
            
            </ul>
          </div>
      </div>
    </div>
    
  <?php
            $handle = fopen("data/footer.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ($line); 
                   }             
            fclose($handle);
            ?>

  </body>
</html>
