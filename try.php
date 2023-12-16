
<div id='login-form' class='login-page'>
    <div class="form-box">
        <div class='button-box'>
            <div id='btn'></div>
            <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
            <button type='button'onclick='register()'class='toggle-btn'>Register</button>
        </div>
        <form id='login' class='input-group-login' method="post">
            <input type='text'class='input-field'placeholder='Email Id' required >
            <input type='password'class='input-field'placeholder='Enter Password' required>
            <input type='checkbox'class='check-box'><span>Remember Password</span>
            <button type='submit'class='submit-btn'>Log in</button>
        </form>
        <form id='register' class='input-group-register' method="post">
            <input type='text'class='input-field'placeholder='First Name' name='firstname' id='firstname' required >
            <input type='text'class='input-field'placeholder='Last Name ' name='lastname' id='lastname' required>
            <input type='text'class='input-field'placeholder='Phone Number' name='phone' id='phone' required >
            <input type='email'class='input-field'placeholder='Email Id' name='emailid' id='emailid' required>
            <input type='password'class='input-field'placeholder='Enter Password' name='pass' id='pass' required>
            <input type='password'class='input-field'placeholder='Confirm Password' name='conpass' id="conpass" required>
            <input type='checkbox'class='check-box' name='check-box' ><span>I agree to the terms and conditions</span>
            <button type='submit'class='submit-btn' name="register">Register</button>
        </form>
    </div>
</div>

<?php
if(isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone=$_POST['phone'];
    $email= $_POST['emailid'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];
$x=1;
  if(is_numeric($firstname)){
      $x=0;
      echo'
        <style> 
        #firstname {
        border: 1px solid red;
        }
        </style>';

 }
  if(is_numeric($lastname)){
      $x=0;
      echo'
        <style> 
        #lastname {
        border: 1px solid red;
        }
        </style>';

  }
 if(!is_numeric($phone)){
     $x=0;
      echo'
        <style> 
        #phone {
        border: 1px solid red;
        }
        </style>';

  }
   if($pass !== $conpass){
       $x=0;
        echo'
<style> 
 #conpass ,#pass {
border: 1px solid red;
 }
</style>';
    }



}
?>
