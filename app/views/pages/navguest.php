<?php require APPROOT . '/views/inc/header.php'; ?>

  <div>
<form action="<?php echo URLROOT .'pages/gsearch' ?>"method="POST">
<nav class='list'>
<ul  class='list'> 
  <li><input type="text" name="ids" class="seachs" id="search"><li><input type ="submit" class="searchbtn"value="Search" ></li>
      <li > <a href="<?php echo URLROOT."pages/" ?>">Logout</a></li>
      </ul>
</nav>
</div>
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>