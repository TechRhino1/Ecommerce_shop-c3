<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
   
        $this->load->helper(array('form', 'url'));
			$this->load->database();
			$this->load->library(array('session', 'form_validation', 'email', 'pagination'));
			$this->load->model('User_model');
			$this->load->library(array('session'));
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
	public function checkout()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/checkout');
        $this->load->view('user/footer');
	}
	public function account()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/account');
        $this->load->view('user/footer');
	}
	public function register()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/register');
        $this->load->view('user/footer');
	}
	public function contact()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/contact');
        $this->load->view('user/footer');
	}
	public function women()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/women');
        $this->load->view('user/footer');
	}
	public function men()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/men');
        $this->load->view('user/footer');
	}
	public function single($id)
	{
		
		// die();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
        {
			$data =[];
			$data['head']=$this->cartvalue;
			//$this->load->database();
			//$this->load->model('User_model');
			
			$data['items'] = $this->User_model->slct_cond1('items',array('id'=> $id));
            $data['sing'] = $this->User_model->get_sing($_SESSION['id'])->result();
            $this->load->view('user/header',$data);
            $this->load->view('user/single',$data);
            $this->load->view('user/footer');
            
        }
        else 
        {
            redirect('user/account', 'refresh');
        } 
	}
	public function products()
	{
		$data['head']=$this->cartvalue;
        $this->load->view('user/header',$data);
        $this->load->view('user/products');
        $this->load->view('user/footer');
	}
	public function addcart($id)
	{
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
		{
			$que=false;
			$que=$this->User_model->ex_query1("select * from ci_items where quantity > 0 and id ='$id'");
			// var_dump($que);
			// die();
			
			if($que==0){
			
			$chg=array('status'=>1,'nos'=>1);
			$con=array('product_id'=>$id,'status'=>1,'user'=>$_SESSION['id']);
			$sd=$this->User_model->slct_cond("ci_cart",$con);
			if(sizeof($sd)>0)
			{				
				$a=$this->User_model->ex_query("UPDATE ci_cart SET `nos`=`nos`+1 WHERE product_id='$id' and user='$_SESSION[id]' ");
				if($a)
				{
					$b=$this->User_model->ex_query("UPDATE ci_items SET `quantity`=`quantity`-1 WHERE id='$id' ");//redirect('User/prod_display/'.$prod_id, 'refresh');
					redirect('Home/index', 'refresh');
				}
				else
				{
					//redirect('User/prod_display/'.$prod_id, 'refresh');
					//redirect('User/viewcart/'.$id, 'refresh');
					redirect('Home/index', 'refresh');
				}
			}
							
			else
			{
				
				$data=array("cart_id"=>'',"product_id"=>$id,"user"=>$_SESSION['id'],"status"=>1,"nos"=>1);
				$a=$this->User_model->save('ci_cart',$data);
						
				if($a)
				{
					$b=$this->User_model->ex_query("UPDATE ci_items SET `quantity`=`quantity`-1 WHERE id='$id' ");
					//redirect('User/prod_display/'.$prod_id, 'refresh');
					//redirect('User/viewcart/'.$id, 'refresh');
					redirect('Home/index', 'refresh');
				}
				else
				{
					//redirect('User/prod_display/'.$prod_id, 'refresh');
					//redirect('User/index/'.$id, 'refresh');
					redirect('Home/index', 'refresh');
				}
			}	
			}
			else
			{
				echo"<script> alert ('out of stock'); </script>";
				redirect('Home/index', 'refresh');
				
			}
			
		}
		else 
        {
            redirect('Home/index', 'refresh');
        } 
		
		
	}
	////////////////////////////////////////////
	public function user_register()
		{
			
			$name=$this->input->post('t1');
			$user=$this->input->post('t2');
			$email=$this->input->post('t3');
			$pass=$this->input->post('t4');
			$ph=$this->input->post('t5');

			
			$enpass=$this->DB_model->encrypt_password($pass);

			$data=array("login_id"=>'',"uname"=>$user,"pwd"=>$enpass,"role"=>3,"role_des"=>"user");
			$slog=$this->User_model->save('tbl_login',$data);		
        
				if($slog)
					{
						$data=array("user_id"=>'',"user_logid"=>$slog,"name"=>$name,"email"=>$email,"mobile"=>$ph,"register_date"=>"CURRENT_TIMESTAMP","status"=>"");
		
						$slog=$this->User_model->save('tbl_user',$data);
					
						redirect('User/index');
						$this->session->set_flashdata('msg', '<div class=" text-center" style="color:green;"> Successfully Registered ..</div>');
					}
					else
						{
							redirect('User/index');
							$this->session->set_flashdata('msg', '<div class=" text-center" style="color:red;"> Something Went Wrong...</div>');
						}
		
		}	
		////////////////////////////////////////
		public function viewcart()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
        {
			$data['head'] = $this->cartvalue;
            $data['cart'] = $this->User_model->get_cart($_SESSION['id'])->result();
			 //var_dump($data['head']);
			//die();
            $this->load->view('user/header',$data);
            $this->load->view('user/checkout',$data);
            $this->load->view('user/footer');
            
        }
        else 
        {
            redirect('user/account', 'refresh');
        } 
        
        
    }
	public function plus()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
        {
           $id=$this->input->post('id');
		   $a=$this->User_model->ex_query("update ci_cart set nos = nos+1 where cart_id = $id"); 
		   $b=$this->User_model->ex_query("update ci_items set quantity = quantity-1 where id = $id"); 
		   $x=$this->User_model->slct_cond('ci_cart',array('cart_id'=>$id));
		   echo $x[0]['nos'];
        }
        else 
        {
            redirect('user/account', 'refresh');
        } 
        
        
    }
	public function min()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
        {  
			$id=$this->input->post('id');
			$k=$this->User_model->ex_query("select nos from ci_cart where cart_id = $id")->result_array();
			if ($k[0]['nos']>1) {
				
			
		   $a=$this->User_model->ex_query("update ci_cart set nos = nos-1 where cart_id = $id"); 
		   $b=$this->User_model->ex_query("update ci_items set quantity = quantity+1 where id = $id"); 
		   
		}
		$x=$this->User_model->slct_cond('ci_cart',array('cart_id'=>$id));
		echo $x[0]['nos'];
        }
        else 
        {
            redirect('user/account', 'refresh');
        } 
        
        
    }
	public function remove_cart($id)
    {    

		$x=$this->User_model->ex_query("select nos,product_id from ci_cart where cart_id=$id")->result_array();
		if($x[0]['nos']>0){
              
			$y=$x[0]['nos'];
			$z=$x[0]['product_id'];
			//var_dump($x);
			//die();
			$a=$this->User_model->ex_query("update ci_items set quantity = quantity+$y where id=$z");
			$b=$this->User_model->ex_query("update ci_cart set nos = 0, status=0 where cart_id =$id");


		}
		// $up_cart = array(
        //     'cart_id'         => $id,
        //     'nos'           => 0
        // );
		// $removed_cart = array(
        //     'cart_id'         => $id,
        //     'nos'           => 0
        // );
		// $a=$this->User_model->ex_query("update ci_cart set nos = nos-1 where cart_id = $id"); 
		// $x=$this->User_model->slct_cond('ci_cart',array('cart_id'=>$id));
        //  $this->User_model->update($removed_cart);
		redirect('user/viewcart');
	}
	public function changepass()
	{
		$data['head']=$this->cartvalue;
		$this->load->view('user/header',$data);
        $this->load->view('user/changepass');
        $this->load->view('user/footer');
	}
	// public function buy()
    // {    
	// 	$data['head']=$this->cartvalue;
		
	// 		$this->load->view('user/header',$data);
	// 		$this->load->view('user/billing');
	// 		$this->load->view('user/footer');

		

	// }
	//  public function billdata()
	// {
    //     $data['head']=$this->cartvalue;
    //     $viewData =[];

    //     $this->load->library('form_validation');

    //     $this->form_validation
    //     ->set_rules('first_name', 'first_name', 'required|trim|min_length[3]')
    //     ->set_rules('last_name', 'last_name', 'required|trim|min_length[1]')
    //     ->set_rules('email', 'Email', 'required|trim|valid_email')
    //     ->set_rules('address', 'address', 'required|trim|min_length[8]')
    //     ->set_rules('city', 'city', 'required|trim|min_length[3]')
    //     ->set_rules('landmark', 'landmark', 'required|trim|min_length[6]')
    //     ->set_rules('pincode', 'pincode', 'required|trim|min_length[6]')
    //     ->set_rules('phone', 'phone', 'required|trim|min_length[10]');
       
    //     if ($this->form_validation->run())
    //     { 
            
    //         $data = [
    //             'first_name'=> $this->input->post('first_name'),
    //             'last_name'=> $this->input->post('last_name'),
    //             'email'=> $this->input->post('email'),
    //             'address'=> $this->input->post('address'),
    //             'city'=> $this->input->post('city'),
    //             'landmark'=> $this->input->post('landmark'),
    //             'pincode'=> $this->input->post('pincode'),
    //             'phone'=> $this->input->post('phone')
                

    //         ];
    //         $insert = $this->db->insert('billing',$data);
    //         if($insert){
    //             $newdata =[
    //                 //'logged'  =>true,
    //                 //'user_id' =>$this->db->insert_id(),
    //                 'first_name'   =>$data['first_name'],
    //                 'last_name'   =>$data['last_name'],
    //                 'email'   =>$data['email'],
    //                 'address'   =>$data['address'],
    //                 'city'=>$data['city'],
    //                 'phone'=>$data['phone'],
    //                 // 'level'=>$data['level']

    //             ];
    //             $this->session->set_userdata($newdata);
    //             $viewData['success'] = true; 
	// 			redirect('User/orderdet', 'refresh');
    //         }
        
    //     }
    //     $this->load->view('user/header',$data);
    //    // $this->load->view('user/billing',$viewData);
	//    $this->load->view('user/billing');
    //     $this->load->view('user/footer');
       
   // }

	public function orderdet()
	{
		$data['head']=$this->cartvalue;
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
		{
			$this->form_validation
        ->set_rules('first_name', 'first_name', 'required|trim|min_length[3]')
        ->set_rules('last_name', 'last_name', 'required|trim|min_length[1]')
        ->set_rules('email', 'Email', 'required|trim|valid_email')
        ->set_rules('address', 'address', 'required|trim|min_length[8]')
        ->set_rules('city', 'city', 'required|trim|min_length[3]')
        ->set_rules('landmark', 'landmark', 'required|trim|min_length[6]')
        ->set_rules('pincode', 'pincode', 'required|trim|min_length[6]')
        ->set_rules('phone', 'phone', 'required|trim|min_length[10]');
		if ($this->form_validation->run())
	    { 
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
			$email=$this->input->post('email');
			$address=$this->input->post('address');
			$city=$this->input->post('city');
			$landmark=$this->input->post('landmark');
			$pincode=$this->input->post('pincode');
			$phone=$this->input->post('phone');
			
			//var_dump($first_name);
			//$tot=$this->input->post('total');	
			$fetch=$this->cartvalue;
			$sum=0;
			$valid=true;
			
			foreach($fetch as $rows)
			{
				$pt=$rows->price*$rows->nos;
				$sum=$sum+$pt;	
			}
			
				// order 
				$data1=array("order_id"=>"" ,"order_user"=>$_SESSION['id'],"status"=>1,"amount"=>$sum);
				$gk1=$this->User_model->save('ci_order',$data1);
				
				//order_details
				foreach($fetch as $row)
				{
					$data2=array("id"=>"","order_idd"=>$gk1,'item_id'=>$row->product_id,"nu"=>$row->nos,"pr"=>$row->price*$row->nos,"user_id"=>$_SESSION['id']);
					$gk2=$this->User_model->save('ci_order_details',$data2);
				}

				//billing
				$data3=array("id"=>'',"order_id"=>$gk1,"user_id"=>$_SESSION['id'],
				"first_name"=>$first_name,"last_name"=>$last_name,"email"=>$email,"address"=>$address,
				"city"=>$city,"pincode"=>$pincode,"phone"=>$phone,"landmark"=>$landmark,"status"=>1);
				$gk3=$this->User_model->save('ci_billing',$data3);
				//var_dump($data3);
				//die();
			
			$con=array("user"=>$_SESSION['id'],"status"=>1);
			$chg=array("status"=>2);
			$a=$this->User_model->upd("ci_cart",$con,$chg);
			?>
			<script>
				alert('Order Successfully Placed');
			</script>
            <?php
			  //$viewData['success'] = true; 
		  redirect('User/orderdetalss', 'refresh');
		} 

			 $this->load->view('user/header',$data);
			 $this->load->view('user/billing');
			 $this->load->view('user/footer');
		
	}
		else
		{?>
			<script>
				alert('error');
			</script>
         <?php
			redirect('home/index', 'refresh');
		}
	}
	// public function kg()
	// {
	// 	$data['head']=$this->cartvalue;
	// 	$this->load->view('user/header',$data);
	// 	$this->load->view('user/orderdet');
	// 	$this->load->view('user/footer');
	// }
	public function orderdetalss()
	{
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
		{
		$data['head']=$this->cartvalue;
		$this->load->database();
		$this->load->model('User_model');
		$result['data'] = $this->User_model->display_userrecords();
		$this->load->view('user/header',$data);
		$this->load->view('user/orderdet',$result);
		$this->load->view('user/footer');
		}
		else{
			
			redirect('User/account', 'refresh');
		}
	}
	public function orderdetail($a)
	{
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user')
		{
		$data['head']=$this->cartvalue;
		$this->load->database();
		$this->load->model('User_model');
		$result['data'] = $this->User_model->display_orderrecords($a);
		//var_dump($result);
		// die();
		$this->load->view('user/header',$data);
		$this->load->view('user/orderdetail',$result);
		$this->load->view('user/footer');
		}
		else{
			
			redirect('User/account', 'refresh');
		}
	}
	public function adminorderdetail($a)
	{
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '0' && $_SESSION['role_des'] === 'admin')
		{
		$data['head']=$this->cartvalue;
		$this->load->database();
		$this->load->model('User_model');
		$result['data'] = $this->User_model->display_orderrecords($a);
		//var_dump($result);
		// die();
		$this->load->view('admin/header');
		$this->load->view('admin/adminorderdetail',$result);
		$this->load->view('admin/footer');
		}
		else{
			
			redirect('admin/index', 'refresh');
		}
	}

}