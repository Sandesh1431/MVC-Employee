<?php 
class Model Extends Database{
    public function submit(){
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pno=$_POST['pno'];
        $street=$_POST['street'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $zip=   $_POST['zip'];
        $image = $_FILES['upload']['name'];
        // $target_dir = "../public/img/";
        // $target_file = $target_dir . basename($_FILES["upload"]["name"]);
        // $image = $_FILES['upload']['name'];
        // $extension = pathinfo($image, PATHINFO_EXTENSION );
        // if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif'){
    //     if (file_exists($target_file)) {
    //      $rawBaseName = pathinfo($image, PATHINFO_FILENAME );
    //     $extension = pathinfo($image, PATHINFO_EXTENSION );
        
    //     $counter =  0;
    // while(file_exists($target_file)) {
    //     $file = $rawBaseName . $counter . '.' . $extension;
    //     $counter++;
    // }
    // $hi=move_uploaded_file($_FILES["upload"]['tmp_name'],"../public/img/".$file);  
    // $files=$target_dir .basename($file);
    // $this->query("INSERT INTO emp_data(adminid,fname,lname,email,pno,street,city,state,country,image)VALUES('$eid','$fname','$lname','$email','$pno','$street','$city','$state','$country','$image')");
    // return $this->execute();
    // var_dump($hi);

  
          
    //     } else {
        $target_dir = "../public/img/";
     $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $this->query("INSERT INTO emp_data(fname,lname,email,pno,street,city,state,country,image,zip)VALUES('$fname','$lname','$email','$pno','$street','$city','$state','$country','$target_file',$zip)");
    return $this->execute();
    
     //  print_r( $this->query("INSERT INTO emp_data(adminid,fname,lname,email,pno,street,city,state,country,image)VALUES('$eid','$fname','$lname','$email','$pno','$street','$city','$state','$country','$image')"));
     // $ql= $this->query("INSERT INTO emp_data(adminid,fname,lname,email,pno,street,city,state,country,image)VALUES('$eid','$fname','$lname','$email','$pno','$street','$city','$state','$country','$image')");
     
     // return $this->execute();
     // var_dump($this->execute());
    } 

public function fetch($empid){
  try{
    $this->query("SELECT * FROM `emp_data` where empid=$empid");
    return $this->single();
}
    catch(exception $e){
        
   }
}
public function disp(){
        $this->query("SELECT * FROM `emp_data`");
        return $this->resultSet();
}

public function dispup(){
    $id=$_POST['id'];
         $this->query("SELECT * FROM `emp_data` where empid=$id");
        return $this->single();
}
        public function edits($empid){
           try{
                 $this->query("SELECT * FROM `emp_data` where empid=$empid");
                return $this->resultSet();
        }
                catch(exception $e){
                    return $e;
               }
}public function search(){
    $name=$_POST['ids'];
         $this->query("SELECT * FROM `emp_data` where fname LIKE'%$name%'");
        return $this->resultSet();
        
}
public function update(){
    $id=$_POST['searchid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $zip=   $_POST['zip'];
    $image = $_FILES['upload']['name'];
    $target_dir = "../public/img/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $this->query("UPDATE emp_data SET fname = '$fname', lname = '$lname', email='$email',pno='$pno',street='$street',city='$city',state='$state',country='$country',image='$target_file',zip='$zip' WHERE empid=$id;");
    return $this->execute();
}
public function delete(){
    try{     $id=$_POST['searchid'];
        $this->query("DELETE FROM emp_data WHERE empid=$id");
    return $this->execute();
    }
   catch(exception $e){
        return $e;
   }

   

}

public function deletes($emp_id){
    try{
   $this->query("DELETE from emp_data WHERE empid=$emp_id");
   $this->execute();
}
catch(exception $e){
    return $e;
}
// Export data from data base using php

// public function get_records()
//     {
//        $this->query("SELECT * FROM `emp_data`");
//        return $this->resultSet();
//     }
}
}
?>