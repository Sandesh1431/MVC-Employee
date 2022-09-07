<?php require APPROOT . '/views/inc/header.php'; ?>

  <div>
<form action="<?php echo URLROOT .'pages/search' ?>"method="POST">
<nav class='list'>
<ul  class='list'> 
<input type="text" name="ids"class="searchbox" id="search" >
  <input type ="submit" value="Search" class='searchbtn' id="searchbtn">
      <li > <a href="<?php echo URLROOT."pages/logout" ?>">Logout</a></li>
      <li id='edit'>  <a href="<?php echo URLROOT."pages/up"?>">Edit</a></li>
      <li>  <a class="link" href="<?php echo URLROOT."pages/home"?>">View</a></li>
      <li >  <a href="<?php echo URLROOT."pages/del"?>">Delete</a></li>
      </ul>
</nav>
</div>
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>