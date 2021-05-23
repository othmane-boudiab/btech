<?php

// require_once 'Dashboard.php';

  class Pages extends Controller {

    // private $home;

    public function __construct(){
      // $this->home = new Dashboard;
      $this->postModel = $this->model('Dash');
      $this->userModel = $this->model('User');
    }
    
    public function index(){
      $posts = $this->postModel->getPosts();
      $data = [
        'posts' => $posts,
      ];
     
      $this->view('pages/index', $data);
    }

    public function show($id){
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);

      $data = [
        'post' => $post,
        'user' => $user
      ];

      $this->view('pages/show', $data);
    }

    // public function dashboard(){
    //   $data = [
    //     'title' => 'dashboardSharePosts',
    //     'description' => 'Simple social network built on the BoudiabMVC PHP framework'
    //   ];
     
    //   $this->view('pages/dashboard', $data);
    // }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }