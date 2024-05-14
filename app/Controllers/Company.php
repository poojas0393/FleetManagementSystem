<?php
namespace App\Controllers;
use App\Models\CompanyModel;

class Company extends BaseController {

        public function index()
        {

          $companyModel = new CompanyModel();

          $data['company_data'] = $companyModel->orderBy('id', 'DESC')->paginate(10);

          $data['pagination_link'] = $companyModel->pager;

          $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
            ];
          return view('Company/index',$data);
        }

        public function create()
        {
          $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Company','li_2' => 'profile' ] )
            ];
          return view( 'Company/create',$data );
        }

        public function add_validation()
        {
          //print_r($_POST); die;
          helper(['form', 'url']);
          $error = $this->validate([
            'company_name'	=>	'required|min_length[3]|trim|is_unique[company.name]',
          ]);

          if(!$error)
          {
            echo view('Company/create', [
              'error' 	=> $this->validator
            ]);
          }
          else
          {
            $companyModel = new CompanyModel();
            $companyModel->save([
              'name'	=>	$this->request->getVar('company_name'),
              'status'  =>  'Active',
              'created_at'  =>  date("Y-m-d h:i:sa"),
              'creator_ip_address'=>	$_SERVER['REMOTE_ADDR'],
              'user_id'     => 1
            ]);
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Company Added');

            return $this->response->redirect(site_url('/company'));
          }
          
        }

        public function edit($id=null)
        {
           
          $companyModel = new CompanyModel();
          $data['company_data'] = $companyModel->where('id', $id)->first();
          
          $request = service('request');
          if($this->request->getMethod()=='POST'){
            $id = $this->request->getVar('id');
            $error = $this->validate([
              'company_name'	=>	'required',
            ]);
            if(!$error)
            {
              $data['error'] 	= $this->validator;
            }else {
              $officeModel = new CompanyModel();
              $officeModel->update($id,[
                'name'	=>	$this->request->getVar('company_name'), 
                'status'  => 'Active',
                'updated_at'  =>  date("Y-m-d h:i:sa"),
                'creator_ip_address'=>	$_SERVER['REMOTE_ADDR'],
                'user_id'     => 1
              ]);
              $session = \Config\Services::session();
  
              $session->setFlashdata('success', 'Company updated');
              return $this->response->redirect(site_url('/company'));
            }
  
            
          }

          return view('Company/edit', $data);

        }

        public function delete($id){
          $companyModel = new CompanyModel();

          $companyModel->where('id', $id)->delete($id);

          $session = \Config\Services::session();

          $session->setFlashdata('success', 'Company Deleted');

          return $this->response->redirect(site_url('/company'));
        }
}

?>