


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Currency</title>
    <style>
        .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(24, 20, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bdb8b8;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03f40f;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03f40f,
              0 0 25px #03f40f,
              0 0 50px #03f40f,
              0 0 100px #03f40f;
}

.login-box a span {
  position: absolute;
  display: block;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }

  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(1) {
  bottom: 2px;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03f40f);
  animation: btn-anim1 2s linear infinite;
}
    </style>
</head>
<body>
<div class="login-box">
 
 <form method="post" action="">
   <div class="user-box">
     <input type="text" name="curnmame" required="">
     <label>Currency Name</label>
   </div>
   <div class="user-box">
     <input type="text" name="curvalue" required="">
     <label>Value</label>
   </div>
  
   
       <!-- <input type="submit" name="update" value="ADD"> -->
       <center>
      <a href="#">
      <input type="submit" name="update" value="ADD" style="background:none;color:white;border:none;" >
         <span></span>
      </a></center>
          
 
 </form>
</div>
    
</body>
</html>


<?php
include ("conn.php");

if(isset($_POST['update'])){
    
   

    $curname=$_POST['curnmame'];
    $curprice=$_POST['curvalue'];


    $sql="INSERT INTO `currency`( `cur_name`, `cur_price`) VALUES ('$curname','$curprice')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "addddddd successfully";
    }
    else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>