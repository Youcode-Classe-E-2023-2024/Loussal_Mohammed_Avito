<?php
  class Welcome extends Controller{
    public function __construct(){
      if(isset($_SESSION['user_id'])){
        redirect('posts');
      }
    }

    public function index(): void{
      $this->view('welcome', ['title' => 'Welcome']);
    }
  }

?>
