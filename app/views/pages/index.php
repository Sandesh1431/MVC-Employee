<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <div>

<nav>
<Button type="Submit" id="hide" onclick='fun()'>Login</Button>
        <a  onclick="click()" href="<?php echo URLROOT."pages/guest"?>">Guest</a> 
   
</nav>



<form  class = "formlr"  id='form'action = "<?php echo URLROOT . 'pages/login' ?>" method = "post">
<div id="login">
   <h1    class = "login-title">Login</h1>
   <input type  = "text" class     = "log" name   = "admid" placeholder  = "AdminID" autofocus = "true" required/>
   <input type  = "password" class = "log" name  = "admpass" placeholder = "Password" required/>
   <input type  = "submit" value   = "Login" name = "submit" class="btn" id = "btnlog"/>
  
</div>
</form>
<p class="error" id="time"> <?php  error_reporting(E_ALL ^ E_WARNING);   echo $data['error']?></p>


</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
