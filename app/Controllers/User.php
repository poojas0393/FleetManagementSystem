<?php
namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController {

        //   function __construct() { 
        //     parent::__construct(); 
            
        //     // Load form validation ibrary & user model 
        //     $this->load->library('form_validation'); 
        //     $this->load->model('user'); 
            
        //     // User login status 
        //     $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
        // }

        public function index()
        {
              
          $userModel = new UserModel();

          $data['user_data'] = $userModel->orderBy('id', 'DESC')->paginate(10);

          $data['pagination_link'] = $userModel->pager;

          $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
            ];
          return view('User/index',$data);
        }

        public function add_user()
        {
                echo 'User list';
        }
}