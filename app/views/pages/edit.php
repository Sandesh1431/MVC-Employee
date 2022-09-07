<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include ('nav.php')?>  
<form  class = "forml"  action = "<?php echo URLROOT . 'pages/update' ?>" enctype="multipart/form-data" method = "post">


<div id="login-box">
<h1>Update Employee </h1>

<?php error_reporting(E_ALL ^ E_WARNING);foreach ($data as $post):?>
 
  <div class="left">
  <input type="text" name="searchid" value='<?= $post->empid?>'placeholder="Enter id">
    <input type="text" name="fname" value='<?= $post->fname?>'placeholder="Enter first Name">
    <input type="text" name="pno"value='<?= $post->email?>' placeholder="Enter Phone No" pattern="[1-9]{1}[0-9]{9}" maxlength="10" autocomplete="off"  >
    <input type="text" name='city'value='<?= $post->city ?>' placeholder="Enter City Name">
    <input type="text" name='country'value='<?= $post->country ?>' placeholder="Enter Country Name">
    
    <input type="Submit" name="update"value='Save' class="btn">
  </div>
  
  <div class="right">

  <input type="text" name="lname" value='<?= $post->lname?>'placeholder="Enter Last Name">
  <input type="Email" name="email"value='<?= $post->email ?>' placeholder="Enter Email">
  <input type="number" name='zip' value='<?= $post->zip ?>'placeholder="Enter zip">
  <input type="text" name='street'value='<?= $post->street ?>' placeholder="Enter Street Name">
  <input type="text" name='state' value='<?= $post->state ?>'placeholder="Enter State Name">
 <p style=width:100px;><img src='<?= $post->image?>' width='100px' height= '100px'></p>
  <input type="file" name='upload'>

     <p class="success"> <?php  error_reporting(E_ALL ^ E_WARNING);  
  echo  $data['msg']."<br>";    echo $data['info'];?></p>
   <p class="error"> <?php  error_reporting(E_ALL ^ E_WARNING);  
   echo $data['error'];?>
  </div><p>
  <?php endforeach?>
</form> 

    

<?php require APPROOT . '/views/inc/footer.php'; ?>