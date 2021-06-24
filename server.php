<?php
    session_start();

    #$username="";
    #$email="";
    #$aadhar="";
    $errors=array();
    $db =mysqli_connect("localhost","root","","ovs");
    mysqli_select_db($db,'ovs');
    
    if (Isset($_POST['login'])) {
        $username= $_POST['user1'];
        
        $password=$_POST['pass1'];
        $user=$_POST['usad'];

            
            if($user==2)
            {
            $query ="SELECT pass FROM user WHERE name ='$username' ";
            $result=mysqli_query($db,$query);
           
            if (mysqli_num_rows($result)) {
                //log user in.
                 $_SESSION['user'] = $username;
            $_SESSION['success'] = "You are now logged in";header('location: index.php');
                        }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
            else
            {
                $query ="SELECT pass FROM admin WHERE user ='$username' ";
            $result=mysqli_query($db,$query);
           
            if (mysqli_num_rows($result)) {
                //log user in.
                 $_SESSION['user'] = $username;
            $_SESSION['success'] = "You are now logged in";header('location: admin.php');
                        }else {
                array_push($errors, "Wrong username/password combination");
            }
            }
        


        }

    if(isset($_POST['register'])){
        $username= $_POST['user'];
        $email= $_POST['email'];
        $pnum= $_POST['phone'];
        $aadhar= $_POST['aadhar'];
        $password_1= $_POST['pass1'];
        $password_2= mysqli_real_escape_string($db, $_POST['pass2']);
        if(empty($username)) {
            array_push($errors, "Username is required");

        }
        if(empty($email)) {
            array_push($errors,"Email is required");
        }
        if(empty($pnum)) {
            array_push($errors,"Phone number is required");
        }
        if(empty($aadhar)) {
            array_push($errors, "Aadhar Card number is required");
        }
        if(empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if($password_1 != $password_2 ) {
           array_push($errors, "Two Passwords do not match");
        }
        
        if(count($errors)==0){
            $password=md5($password_1); //for security
            $sql ="INSERT INTO user(name,email,phone,aadhar,pass) 
            VALUES ('$username','$email','$pnum','$aadhar','$password_1')";
            mysqli_query($db,$sql);
            $_SESSION['user'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: LoginV.php');
        }
    }


     
      
   
          if(isset($_POST['poll_button']))
    {
    $username=$_SESSION['user'];
    $query1="SELECT flag FROM user WHERE name='$username'";
    $f=mysqli_query($db,$query1);
    $g = mysqli_fetch_array($f);
    if($g["flag"]==0)
    {
    $opt=$_POST["poll_option"];
    $query="SELECT votecount FROM count WHERE id='$opt'";
    $result=mysqli_query($db,$query);
    
    $query=" UPDATE count SET votecount=votecount+1 WHERE id='$opt'";
    mysqli_query($db,$query);
    //header("location:index.php");
        $query1=" UPDATE user SET flag=1 WHERE name='$username'";
    mysqli_query($db,$query1);
}
else
{
    array_push($errors,"ALREADY VOTED");
}

  }



 if(isset($_POST['fetch']))
  {
 
$strSQL = "SELECT * FROM user ";

// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($db,$strSQL);


  print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>Name</td> 
  <td width=100>Email</td> 
  <td width=100>Phone</td> 
  <td width=100>AAdhar</td> 
  <td width=100>Status</td>
  
  </tr>"; 
 while($row = mysqli_fetch_array($rs))
 { 
print "<tr>"; 
print "<td>" . $row['name'] . "</td>"; 
print "<td>" . $row['email'] . "</td>"; 
print "<td>" . $row['phone'] . "</td>"; 
print "<td>" . $row['aadhar'] . "</td>";
print "<td>" . $row['flag'] . "</td>";

print "</tr>"; 
} 
print "</table>"; 

  }
 







        //logout
        if (isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header('location: LoginV.php');
        }
    
?>


