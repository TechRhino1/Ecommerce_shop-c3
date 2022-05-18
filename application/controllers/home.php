<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
   
        $this->load->helper(array('form', 'url'));
			$this->load->database();
			$this->load->library(array('session', 'form_validation', 'email', 'pagination'));
			$this->load->model('User_model');
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
            {
                        $this->cartvalue = $this->User_model->ex_query("select * from ci_cart join ci_items on ci_cart.product_id = ci_items.id where user = '$_SESSION[id]' and status =1 ")->result();
                }else{
                    $this->cartvalue="";
                }
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
							{
        $data['head']=$this->cartvalue;
        $viewData =[];

        $viewData['items'] = $this->db->get('items')->result();
       // $viewData['items'] = $this->db->get('items')->result_array();
        //var_dump( $viewData['items']);
        $dat['category'] = $this->db->get('category')->result();
        // $this->load->view('comfile/header',['category'=>$category]);
        // $this->load->view('home',$viewData);
        // $this->load->view('comfile/footer');
        $this->load->view('user/header',$data);
        $this->load->view('user/index',$viewData);
        $this->load->view('user/footer');
                            }
                            else 
                           
							{
         $viewData['items'] = $this->db->get('items')->result();
        $this->load->view('user/header');
        $this->load->view('user/index',$viewData);
        $this->load->view('user/footer');
							} 
	}
    
    public function login()
	{
        $data['head']=$this->cartvalue;
        $viewData =[];

        $this->load->library('form_validation');

        $this->form_validation
        ->set_rules('email', 'Email', 'required|trim|valid_email')
        ->set_rules('password', 'password', 'required|trim');
        

        $this->load->view('user/header',$data);
        $this->load->view('user/account',$viewData);
        $this->load->view('user/footer');
    }
    public function logout()
	{
        $this->session->unset_userdata(['logged','user_id','email','first_name','last_name']);
    redirect(base_url());
    }
    public function loginn()
		{
			$t1=$this->input->post("email");
			$t2=$this->input->post("password");
            
				if ($this->User_model->resolve_user_login($t1, $t2))
					{                    
                 
                        $user_id = $this->User_model->get_user_id_from_username($t1);
						 $user    = $this->User_model->get_user($t1);
                        
					    if($user->level==0)
						{
                            
						  $this->load->library(array('session'));
						  $this->session->set_userdata(array(
							 'id' => $user->id,
							 'email' => (string) $user->email,
							 'logged_in' => (bool) true,
							 'role' => $user->level,
							 'role_des' => "admin"));
                             if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '0' && $_SESSION['role_des'] === 'admin')
							{
                        		//echo "admin";//
                                redirect('Admin/index', 'refresh');
							} 
                        }
                        else if($user->level==1)
						{
						  $this->load->library(array('session'));
						  $this->session->set_userdata(array(
                            'id' => $user->id,
                            'email' => (string) $user->email,
                            'logged_in' => (bool) true,
                            'role' => $user->level,
                            'role_des' => "user"));
                             if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
							{
                        		//echo "user";//
                                redirect('home/index', 'refresh');
							} 
                        }
					 					
					}
					else 
                    {?>
                        <script>
                            alert ('----Invalid User---')
                        </script>
                        <?php
                        redirect('Home/login', 'refresh');
                    }		
		}
    public function register()
	{
        $data['head']=$this->cartvalue;
        $viewData =[];

        $this->load->library('form_validation');

        $this->form_validation
        ->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]')
        ->set_rules('first_name', 'first_name', 'required|trim|min_length[3]')
        ->set_rules('last_name', 'last_name', 'required|trim|min_length[1]')
        ->set_rules('password', 'password', 'required|trim|min_length[4]|max_length[10]')
        ->set_rules('passconfm', 'password confirm', 'required|trim|matches[password]');
       
        if ($this->form_validation->run())
        { 
            $enpass=$this->User_model->hash_password($this->input->post('password'));
            $data = [
                'email'=> $this->input->post('email'),
                'first_name'=> $this->input->post('first_name'),
                'last_name'=> $this->input->post('last_name'),
                'password'=> $enpass,
                'level'=> '1',

            ];
            $insert = $this->db->insert('users',$data);
            if($insert){
                $newdata =[
                    'logged'  =>true,
                    'user_id' =>$this->db->insert_id(),
                    'email'   =>$data['email'],
                    'first_name'=>$data['first_name'],
                    'last_name'=>$data['last_name'],
                    'level'=>$data['level']

                ];
                $this->session->set_userdata($newdata);
                $viewData['success'] = true;
            }
        
        }
        $this->load->view('user/header',$data);
        $this->load->view('user/register',$viewData);
        $this->load->view('user/footer');
    }



    public function add_item()
	{
        $viewData =[];
        $this->load->library('form_validation');

        $this->form_validation
        ->set_rules('title', 'title', 'required|min_length[3]|max_length[30]')
        ->set_rules('description', 'description', 'required')
        ->set_rules('price', 'price', 'required|numeric|greater_than[0]')
        ->set_rules('quantity', 'quantity', 'required|numeric|greater_than[0]');


        if ($this->form_validation->run())
        {
            $upload = $this->do_upload();
            if(isset($upload['error'])){
                $viewData['error'] = $upload['error'];

            }else{
                $insertData = [ 
                    'title' => $this->input->post('title'),
                    'price' => $this->input->post('price'),
                    'discription' => $this->input->post('description'),
                    'image' => $upload['data'],
                    'quantity' => $this->input->post('quantity')
                ];
                $this->db->insert('items',  $insertData);
                ?>
                <script>
                    alert ('successfully !')
                //echo "Password changed successfully !";
                </script>
                <?php

            }
        }
        
		$this->load->view('admin/header');
        $this->load->view('add_item',$viewData);
        $this->load->view('admin/footer');
	}
    public function add_category()
	{
        
        $viewData =[];
        $this->load->library('form_validation');

        $this->form_validation
        ->set_rules('title', 'title', 'required|min_length[3]|max_length[30]');


        if ($this->form_validation->run())
        {
                $insertData = [ 
                    'title' => $this->input->post('title')
                ];
                $this->db->insert('category',  $insertData);
        
        }
        
		$this->load->view('admin/header');
        $this->load->view('add_category',$viewData);
        $this->load->view('admin/footer');
	}
    private function do_upload()
    {
        $config = [
            'upload_path'   => './uploads/',
            'allowed_types' => 'gif|jpg|png',
            'max_size'      =>  1024,
            'encrypt_name'  =>  true

            // 'max_width'   =>,
            // 'upload_path'   => 768;

         ];
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('image'))
            {
                    return array('error' => $this->upload->display_errors($this->config->item('error_prefix'),$this->config->item('error_suffix')));

                    // $this->load->view('upload_form', $error);
            }
            else
            {
                     return array('data' => $this->upload->data('file_name'));

                    // $this->load->view('upload_success', $data);
            }
    }

    public function change_pass()
	{
		if($this->input->post('change_pass'))
		{
			//$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->session->userdata('id');
			$que=$this->db->query("select * from ci_users where id='$session_id'");
			$row=$que->row();
			if(strcmp($new_pass, $confirm_pass)==0){
                $enpass=$this->User_model->hash_password($this->input->post('new_pass'));
				$this->User_model->change_pass($session_id,$enpass);
                ?>
                <script>
                    alert ('Password changed successfully !')
                //echo "Password changed successfully !";
                </script>
				
				<?php } else{
                
				    echo "Invalid";
				}
		}
        redirect('Admin/changepass', 'refresh');
	}
///////////////////////////////////////////billing////////////////////////////////////////////
public function search()
	{
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
							{
        $data['head']=$this->cartvalue;
        $viewData =[];
        
        $n= $this->input->post('search');
        $viewData['items'] = $this->db->query("SELECT * FROM ci_items WHERE (title LIKE '%$n%')")->result();
    //     if ($viewData==true) {
       
    //         echo "hello";
      
      
    //    } else{
    //        echo "Invalid";
    //     }
       
        $this->load->view('user/header',$data);
        $this->load->view('user/search',$viewData);
        $this->load->view('user/footer');
                            }
                            else 
                           
							{
         $viewData['items'] = $this->db->get('items')->result();
        $this->load->view('user/header');
        $this->load->view('user/search',$viewData);
        $this->load->view('user/footer');
							} 
	}


}
