
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include ('nav.php')?>
<form  class = "formlr"  action = "<?php echo URLROOT . 'pages/submit' ?>" enctype="multipart/form-data" method = "post">

   
<div id="login-box">
<h1>Insert New Employee</h1>
  <div class="left">
    <input type="text" name="fname" placeholder="Enter first Name">
    
    <input type="text" name="address" placeholder="Enter address">
    <input type="text" name="pno" placeholder="Enter Phone No"  maxlength="10" minlength="10" pattern="[1-9]{1}[0-9]{9}"   autocomplete="off"  required>
   
    
    Country: <select name='country' id="country" size="1">
        <option value="" selected="selected">-- Select Country --</option>
    </select>
     <br>
    <br>
    State: <select name='state' id="state" size="1">
        <option value="" selected="selected">-- Select Country First--</option>
    </select>
    <br>    <br>
    <br>
  
    <div class="upload-btn-wrapper">
  <button class="btns"><span>Upload a file<span></button>
  <input type="file" name="upload" /></div>
  
  </div>
  
  <div class="right">

  <input type="text" name="lname" placeholder="Enter Last Name">
  <input type="Email" name="email" placeholder="Enter Email">
  <input type="number" name='zip' placeholder="Enter zip" value="0" >
  City:<select name='city' id="city" size="1">
        <option value="" selected="selected">-- Select State First--</option>
    </select>
    <br>
    <br>
    Street:<select name='street' id="street" size="1">
        <option value="" selected="selected">-- Select city First--</option>
    </select>
    <br>
    <br>
    
    <input type="Submit" name="Add" value="Submit" class="btn">


 <p class="success"> <?php  error_reporting(E_ALL ^ E_WARNING);  
  echo  $data['msg']."<br>";    echo $data['info'];?></p>
   <p class="error"> <?php  error_reporting(E_ALL ^ E_WARNING);  
   echo $data['error'];?>
  </div></p>
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>