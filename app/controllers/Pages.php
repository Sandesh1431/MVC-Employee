<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
// Export data from data Base using Php
// public function export(){


//   $filename = 'users_'.date('Ymd').'.csv'; 
//   header("Content-Description: File Transfer"); 
//   header("Content-Disposition: attachment; filename=$filename"); 
//   header("Content-Type: application/csv; ");
//   $model = $this->model('Model');
//   $sheet=$model->get_records();
//    $file = fopen('php://output','w');
//   $header = array("Employee_id","First Name","Last Name","Email","Phone No","Street","City","State","Country","Zip Code","Image"); 
//   fputcsv($file,$header);
//           foreach ($sheet as $line) {    
          
//            fputcsv($file,array($line->empid,$line->fname,$line->lname,$line->email,$line->pno,$line->street,$line->city,$line->state,$line->country,$line->zip,$line->image)); 
//           }
//              fclose($file); 
//          exit; 
       
//        }
  

    public function index(){
      if(isset($_SESSION['name'])){
       header('Location:home');
          exit();}
          else{
      $data = [
        'title' => 'Employee Data',
      ];
     
      $this->view('pages/index', $data);
    }
    }
    public function home(){

      if(!isset($_SESSION['name'])){
        header('Location:index');
       exit();}else{

      $model = $this->model('Model');
      $post  = $model->disp();
      $data  = [
      'posts' => $post,
      'title' => 'Employee Data',
    ];
      $this->view('pages/home',$data);
  }
  }
   
public function display(){
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();}
  $this->view('pages/insert');
}
public function edit(){
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();}
  $this->view('pages/edit');
}
    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function login(){
      if(isset($_SESSION['name'])){
        header('Location:home');
      }
      error_reporting(E_ALL ^ E_WARNING);
   
      $admin = $_POST['admid'];
      $pass  = $_POST['admpass'];
      $model = $this->model('Model');
      if(Adminname==$admin&&password==$pass){
        $_SESSION['name'] = $admin;
        $_SESSION['pass'] = $pass;
                  $post   = $model->disp();
  
      
        $data=['data'=>'success',
        'posts' => $post,
        'title' => 'Employee Data',
      ];
        $this->view('pages/home',$data);
      }
      else{
        $data = [  'title' => 'Employee Data',
          'error'=>'wrong password/admin name'];
        $this->view('pages/index',$data);
      }

      }
    
    public function submit(){
      if(!isset($_SESSION['name'])){
        header('Location:index');
       exit();}
 if (isset($_POST['Add'])){
  $model       = $this->model('Model');
  $target_dir  = "../public/img/";
  $target_file = $target_dir . basename($_FILES["upload"]["name"]);
  $image       = $_FILES['upload']['name'];
  $extension   = pathinfo($image, PATHINFO_EXTENSION );
  if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif'){
      (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file));
      // echo "The file " . htmlspecialchars(basename($_FILES["upload"]["name"])) . " has been uploaded" . "<br>";
      $model->submit();
      $data=['msg'=>'File uploaded',
      'info' => 'Registered successfully!'];
      $this->view('pages/insert' , $data);
  // }
}else{
  $data=['error'=>"Please upload only 'jpg' or'jpeg'or'png'or'gif'",
];
    $this->view('pages/insert' , $data);
}
}
else
{   
  $data =[
    'title' => 'Employee Data',
    'error' => 'Try again later!'
    
  ];
  $this->view('pages/insert' , $data);
}
    }   
 public function up(){
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();
  }
  $this->view('pages/update');
   }
 
 public function dispup(){
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();}else{
  $model = $this->model('Model');
  $post  = $model->dispup();
  if(empty($post)){
    $data = ['msg'=>'Data not found '];
    $this->view('pages/update',$data);
  }else{
   $data = ['posts'=>$post];
  $this->view('pages/edit',$data);
  }
}
 }  public function gsearch(){
  $model = $this->model('Model');
  $post  = $model->search();
  $data  = ['posts'=>$post];
  $this->view('pages/guest',$data);
 }
 public function logout()

    {
      session_destroy();
    //   session_start();
    //  unset($_SESSION['user']);
    //  unset($_SESSION['pass']);
 header('Location:index');
    }
 public function search(){
  
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();}
   else{
  $model = $this->model('Model');
  $post  = $model->search();
  $data  = ['posts'=>$post];
  $this->view('pages/home',$data);
 }
}
 public function deletes($emp_id){
  if(isset($_SESSION['name'])){
    header('Location:home');
   exit();}else{

     $model = $this->model('Model');
$model->deletes($emp_id);
$post =$model->disp();  
$data  = ['posts'=>$post];
$this->view('pages/home',$data);
   }
 }


 public function edits($empid){
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();
  }else{ 
  $model = $this->model('Model');
  $post  = $model->fetch($empid);
  var_dump($post);
   }
  $this->view('pages/edit',$post);
 }

 public function guest(){
 
  $model = $this->model('Model');
  $post  = $model->disp();
  $data  = ['posts'=>$post];
  $this->view('pages/guest',$data);
 }
 
 public function update(){
  
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();}else{
 
  $model       = $this->model('Model');
  $target_dir  = "../public/img/";
  $target_file = $target_dir . basename($_FILES["upload"]["name"]);
  $image       = $_FILES['upload']['name'];
  $extension   = pathinfo($image, PATHINFO_EXTENSION );
  if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif'){
      (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file));
      // echo "The file " . htmlspecialchars(basename($_FILES["upload"]["name"])) . " has been uploaded" . "<br>";
      $model->update();
  
      $data=['msg'=>'File uploaded',
      'info' => 'Registered successfully!'];
      $this->view('pages/edit',$data);
  // }
  

 }
else{
  $data=['error'=>"Please upload only 'jpg' or'jpeg'or'png'or'gif'",
];
    $this->view('pages/edit' , $data);
}
   }
  
}
public function del(){
  if(!isset($_SESSION['name'])){
    header('Location:index');
   exit();}

  $this->view('pages/delete');
}
public function delete(){
  if(!isset($_SESSION['name'])){
    header('Location:index');
    echo ($_SESSION['name']);
   exit();}
  $model = $this->model('Model');
  $model->delete();
  $data = ['msg'=>'Employee data has been removed'];
  $this->view('pages/delete',$data);
}

 }


  