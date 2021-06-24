<?php include('navbar.php') ?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>  
    <head>  
        <title>Live Poll System in PHP Mysql using Ajax</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
   <br />
   <h2 align="center">State Elections</h2><br />
   <div class="row">
    <div class="col-md-6">
      <?php include('errors.php'); ?>
     <form method="post" id="poll_form" action="vote.php">
      <h3>Select the party you want to vote for and press submit.</h3>
      <br />
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="2" />Bharatiya Jantha Party</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="5" />Indian National Congress</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="1" /> Aam Aadmi Part</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="3" /> Indian Communist Party</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="4" /> Indian Communist Party-Marxism</h4></label>
      </div>
      <br />
      <input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" />

     </form>
    




      
     <br />
    </div>
    <div class="col-md-6">
     <br />
     <br />
     <br />
     <h4></h4><br />
     <div id="poll_result"></div>
    </div>
   </div>
   
   
   <br />
   <br />
   <br />
  </div>
    </body>  
</html>
