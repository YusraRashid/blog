<?php

/* 
 * form to update profile
 *
 */

?>
<section style = "margin: 20px 100px 100px 100px">      
<h1>Update Account</h1>
<br>
<!--<h2>Change where need to be</h2>-->
<p>To change your password, enter and confirm your new password in the fields below.</p>
<br>
    <form  action="" method="post" >

        <p>First name: <input type="text" name="first_name" value="<?= $user->first_name ?>" /></p>
        <p>Last name: <input type="text" name="last_name" value="<?= $user->last_name ?>" /></p>
        <p>Email: <input type="email" name="email" value="<?= $user->email ?>" /></p>          
        <p>Password: <input type="password" name="password" id="password" ? /></p>
        <p>Confirm password: <input type="password" name="password-repeat" id="confirm_password" /></p>  
  
     
    <input type="submit" value = "Submit" href="?controller=user&action=update" />
    <!--not sure if it works -->
    <a type= "button" href="?controller=blog&action=viewAll">Cancel</a>
    </form>
 </section>
<script>
    var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value !== confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>        



