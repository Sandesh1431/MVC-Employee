<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include ('nav.php')?>
<form  action = "<?php echo URLROOT . 'pages/delete' ?>" class = "formlr"  enctype="multipart/form-data" method = "post">
<div  id="login">
    <h2>Employee Removal</h2>
<input type=text name="searchid"  placeholder="Enter the Id To delete" required>
<input type="Submit" name="delete" value="Delete" class="btn">
<br><p class="error" id="time"><?php   error_reporting(E_ALL ^ E_WARNING); echo $data['msg']?></p>
</div>

</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>