<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include ('nav.php')?>
<form  class = "formlr"  action = "<?php echo URLROOT . 'pages/dispup' ?>"  enctype="multipart/form-data" method = "post">
<div id="login">
    <h2>Employee Data Edit</h2>
<input type=text name="id"  placeholder="Enter the Id To Edit" required>
<input type="Submit" name="fetch" value="fetch" class="btn">
<br><p class="error"><?php   error_reporting(E_ALL ^ E_WARNING); echo $data['msg']?></p>
</div>

</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>