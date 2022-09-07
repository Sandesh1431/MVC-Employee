
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include ('nav.php')?>
<div id="container">
 
  <div class="box">
  <tr><a id='amp'  class='flex'href="<?php echo URLROOT."pages/display"?>">+ Add Employees</a></span></tr>
 <table>
 <button class="btns" onclick="exportReportToExcel()">EXPORT REPORT</button>
  <!-- Export using php from  data base link
     <a  href="<?php echo URLROOT.'pages/export'?>">Export</a> -->
    <tr>
        <th scope="col">Photo</th>
        <th scope="col">First Name </th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone No</th>
        <th scope="col">Street</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Country</th>
        <th scope="col">Zip</th>
        <th scope="col">Action</th>
    </tr>

    <?php error_reporting(E_ALL ^ E_WARNING); foreach ($data['posts'] as $post):?>

   <tr>
    <td ><img src='<?php echo URLROOT."img/". $post->image ;?>' width='100px' height= '100px'></td>
     <td> <?= $post->fname?></td>
   <td><?= $post->lname?></td>
   <td><?= $post->email ?></td>
   <td><?= $post->pno ?></td>
   <td><?= $post->street ?></td>
   <td><?= $post->city ?></td>
   <td><?= $post->state ?></td>
   <td><?= $post->country ?></td>
   <td><?= $post->zip?></td>
   <td><div class="edits"><a href="<?php echo URLROOT."pages/edits/".$post->empid?>">Edit</a>
        <a class="link" href="<?php echo URLROOT."pages/home"?>">View</a>
     <a href="<?php  echo URLROOT."pages/deletes/".$post->empid?>">Delete</a></td>
        </div>
  </td>
   <br>
    </tr>

   <?php endforeach?>
   </table>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
          