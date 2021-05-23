<?php

    class Dashboard extends Controller {

        public function __construct()
        {
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->postModel = $this->model('Dash');
            $this->userModel = $this->model('User');
        }

        public function index(){
            // Get posts
            $posts = $this->postModel->getPosts();

            $data = [
                'posts' => $posts
            ];
           
            $this->view('dashboard/index', $data);
        }

        public function add(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Sanitize POST array
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             
      
              $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'post_image_name' =>  $_FILES['post_image']['name'],
                'post_image_size' => $_FILES['post_image']['size'],
                'tmp_name_image' => $_FILES['post_image']['tmp_name'],
                'post_image' => $_FILES['post_image'],
                'post_image_err' => '',
                'post_image_size_err' => '',
                'post_image_size_err' => '',
                'title_err' => '',
                'body_err' => ''
              ];


              


              // Validate data
              if(empty($data['title'])){
                $data['title_err'] = 'Please enter title';
              }
              if(empty($data['body'])){
                $data['body_err'] = 'Please enter body text';
              }
              if(empty($data['post_image'])){
                $data['post_image_err'] = 'Please upload image';
              }
            //   if ($data['post_image_size'] > 125000) {
            //     $data['post_image_err'] = 'Sorry, your file is too large';
            //   }

      
              // Make sure no errors
              if(empty($data['title_err']) && empty($data['body_err']) && empty($data['post_image_err'])){
                move_uploaded_file($data['tmp_name_image'], '..\public\upload\\' . $data['post_image_name']);
                // Validated
                if($this->postModel->addPost($data)){
                    
                 
                
                  flash('post_message', 'Post Added');
                  redirect('dashboard');
                } else {
                  die('Something went wrong');
                }
              } else {
                // Load view with errors
                $this->view('dashboard/add', $data);
              }
      
            } else {
              $data = [
                'title' => '',
                'body' => '',
                'post_image' => '',

              ];
        
              $this->view('dashboard/add', $data);
            }
          }

          public function edit($id){

      
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Sanitize POST array
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              
              $data = [
                
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'post_image_name' =>  $_FILES['post_image']['name'],
                'post_image_size' => $_FILES['post_image']['size'],
                'tmp_name_image' => $_FILES['post_image']['tmp_name'],
                'post_image' => $_FILES['post_image'],
                'post_image_err' => '',
                'post_image_size_err' => '',
                'post_image_size_err' => '',
                // 'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
              ];
      
              // Validate data
              if(empty($data['title'])){
                $data['title_err'] = 'Please enter title';
              }
              if(empty($data['body'])){
                $data['body_err'] = 'Please enter body text';
              }
              if(empty($data['post_image'])){
                $data['post_image_err'] = 'Please upload image';
              }
      
              // Make sure no errors
              if(empty($data['title_err']) && empty($data['body_err']) && empty($data['post_image_err'])){
                move_uploaded_file($data['tmp_name_image'], '..\public\upload\\' . $data['post_image_name']);
                // Validated
                if($this->postModel->updatePost($data)){
                  flash('post_message', 'Post Updated');
                  redirect('dashboard');
                } else {
                  die('Something went wrong');
                }
              } else {
                // Load view with errors
                $this->view('dashboard/edit', $data);
              }
      
            } else {
              // Get existing post from model
              $post = $this->postModel->getPostById($id);
      
              // Check for owner
              if($post->user_id != $_SESSION['user_id']){
                redirect('dashboard');
              }
      
              $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body,
                'post_image' => $post->post_image
              ];
        
              $this->view('dashboard/edit', $data);
            }
          }
      


        //   public function show($id){
            // $post = $this->postModel->getPostById($id);
            // $user = $this->userModel->getUserById($post->user_id);
      
        //     $data = [
        //       'post' => $post,
        //       'user' => $user
        //     ];
      
        //     $this->view('dashboard/show', $data);
        //   }
       

        public function delete($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Get existing post from model
              $post = $this->postModel->getPostById($id);
              
              // Check for owner
              if($post->user_id != $_SESSION['user_id']){
                redirect('dashboard');
              }
      
              if($this->postModel->deletePost($id)){
                flash('post_message', 'Post Removed');
                redirect('dashboard');
              } else {
                die('Something went wrong');
              }
            } else {
              redirect('dashboard');
            }
          }
    }
