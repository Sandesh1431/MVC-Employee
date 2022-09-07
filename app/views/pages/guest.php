
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include ('navguest.php')?>
<div id="container">
  
  <div class="box">

 <table>
 
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
        
    </tr>

    <?php foreach ($data['posts'] as $post):?>

   <tr>

    <td ><img src='<?= $post->image?>' width='100px' height= '100px'></td>
  
   <td> <?= $post->fname?></td>
   <td><?= $post->lname?></td>
   <td><?= $post->email ?></td>
   <td><?= $post->pno ?></td>
   <td><?= $post->street ?></td>
   <td><?= $post->city ?></td>
   <td><?= $post->state ?></td>
   <td><?= $post->country ?></td>
   <td><?= $post->zip?></td>
   <br>
    </tr>

   <?php endforeach?>
   </table>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
          