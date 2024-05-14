<?php

namespace App\Controllers;
use App\Models\ProfileModel;
use App\Models\StateModel;

class Profile extends BaseController
{
    public function index(){

      if (session()->get('isLoggedIn'))
      {
        $login_id= session()->get('id');
      }
      $data = [

        'page_title' => view( 'partials/page-title', [ 'title' => 'Profile','li_2' => 'profile' ] )
        ];
        $stateModel = new StateModel();
        $data['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll();


      return view( 'profile',$data );
    }

    public function update(){
        
      if($this->request->getMethod()=='POST'){
        $rules = [
          'company_name' => ['rules' => 'required|alpha_numeric'],
          'abbreviation' => ['rules' => 'required|alpha_numeric'],
          'email'  => ['rules' => 'required'],
          'phone_number'  => ['rules' => 'required|numeric'],
          'gst'  => ['rules' => 'required|alpha_numeric'],
          'pan_no'  => ['rules' => 'required|alpha_numeric'],
      ];
         

      if($this->validate($rules)){

          $profilemodel = new ProfileModel();
          $profiledata=[
            
            'company_name'=> $this->request->getVar('company_name'),
            'abbreviation'=> $this->request->getVar('abbreviation'),
            'email'=> $this->request->getVar('email'),
            'phone_number'=> $this->request->getVar('phone_number'),
            'gst'=> $this->request->getVar('gst'),
            'pan_no'=> $this->request->getVar('pan_no'),
            'company_business_address'=> $this->request->getVar('company_business_address'),
            'country'=> $this->request->getVar('country'),
            'state'=> $this->request->getVar('state'),
            'city'=> $this->request->getVar('city'),
            'pincode'=> $this->request->getVar('pincode'),
            'purchase_order_prefix'=> $this->request->getVar('purchase_order_prefix'),
            'invoice_prefix'=> $this->request->getVar('invoice_prefix'),
            'updated_at'            => date("Y-m-d h:i:sa")
          ];
          $profilemodel->save($profiledata); 
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Profile Added');
          return redirect()->to('/profile');
      }else{
        $data['validation'] = $this->validator;
        return view('profile', $data);
       }
      }
    }
    
 
}
