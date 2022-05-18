<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
   
        $this->load->helper(array('form', 'url'));
			$this->load->database();
			$this->load->library(array('session'));

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
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '0' && $_SESSION['role_des'] === 'admin')
		{
		$this->load->view('admin/header');
        $this->load->view('admin/home');
        $this->load->view('admin/footer');
		}else{
			redirect('home/index', 'refresh');
		}
	}
// 	public function login()
// 	{
// 	if($this->input->post('login'))
// { 
//       $username = $this->input->post('email');
//       $password = $this->input->post('password');

//       $this->db->from('client');
//       $this->db->where('email',$username);
//       $this->db->where('password',$password);
//       $query = $this->db->get();
//       $result = $query->result_array();

//       if($query->num_rows() > 0)
//       {
//             $this->session->set_userdata('users',$result);

//             if($query->row('user_type') == '1'){
//                 redirect('admins');
//             }elseif ($query->row('user_type') == '0') {
//                 redirect('home/index');
//             }else{
//                 redirect('home');
//             }

//       }else{
//             echo "<p style='color: red;font-weight: bold;'>Wrong username or password! </p>";
//       }
// }
// 	}  
    // public function products()
	// {
	// 	// foreach ($result as $row) {
	// 	// 	$sql="SELECT * from categories where id='".$row['categorie_id']." '";
	// 	// 	$result1=$conn->query($sql);
	// 	// 	$row1=$result1->fetch_assoc();
	// 	// }
	   
	// //    $sql="SELECT * from media where id='".$row['media_id']." '";
	// // 		$result2=$conn->query($sql);
	// // 		$row2=$result2->fetch_assoc();

	// 	$this->load->view('admin/header');
    //     $this->load->view('admin/products');
    //     $this->load->view('admin/footer');
	// } 
	// public function products()
    // {
    //     if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '0' && $_SESSION['role_des'] === 'admin')
    //     {
    //         $data['stock'] = $this->User_model->get_stock($_SESSION['id'])->result();
	// 		 var_dump($data['stock']);
	// 		 die();
    //         $this->load->view('admin/header');
    //         $this->load->view('admin/products',$data);
    //         $this->load->view('admin/footer');
            
    //     }
    //     else 
    //     {
    //         echo "login";
    //     } 
    //  }
	public function displaydata()
    {
		$this->load->database();
		$this->load->model('User_model');
		$result['data'] = $this->User_model->display_records();
		$this->load->view('admin/header');
		$this->load->view('admin/display_records',$result);
		$this->load->view('admin/footer');
	}
	public function updatedata()
    {
		$this->load->database();
		$this->load->model('User_model');
        $id = $this->input->get('id');
		$result['data'] = $this->User_model->displayrecordsById($id);
		$this->load->view('admin/header');
		$this->load->view('admin/update_records',$result);
		$this->load->view('admin/footer');
		if($this->input->post('update')){
			$title=$this->input->post('title');
			// $discription=$this->input->post('discription');
			$price=$this->input->post('price');
			// $image=$this->input->post('image');
			$quantity=$this->input->post('quantity');
			$this->User_model->update_records($title,$price,$quantity,$id);
			?>
				<script>
				alert("DATA UPDATED SUCCESSFULLY");
				</script><?php
			//echo "DATA UPDATED SUCCESSFULLY !!!";
		
		}
	}
	public function deletedata()
    {
		$this->load->database();
		$this->load->model('User_model');
		$id =$this->input->get('id');
		$a=$this->User_model->deleteRecordById($id);
		if ($a==true) {?>
			<script>
			alert("DELETED SUCCESSFULLY");
			</script><?php
			//echo "DELETED SUCCESSFULLY";
			redirect('Admin/displaydata','refresh');
		}else{?>
			<script>
			alert("FAILED TO DELETED");
			</script><?php
			redirect('Admin/displaydata','refresh');
		}

	}
	public function logout()
{
	$this->load->database();
		$this->load->model('User_model');
	$this->load->library('session');
	session_destroy();
	redirect('user/account', 'refresh');
}
public function displaydatas()
    {
		$this->load->database();
		$this->load->model('User_model');
		$result['data'] = $this->User_model->display_user();
		$this->load->view('admin/header');
		$this->load->view('admin/users',$result);
		$this->load->view('admin/footer');
	}
	public function deleteuser()
    {
		$this->load->database();
		$this->load->model('User_model');
		$id =$this->input->get('id');
		$a=$this->User_model->delete11($id);
		if ($a==true) {?>
			<script>
			alert("DELETED SUCCESSFULLY");
			</script><?php
			//echo "DELETED SUCCESSFULLY";
			redirect('Admin/displaydatas','refresh');
		}else{?>
			<script>
			alert("FAILED TO DELETED");
			</script><?php
			redirect('Admin/displaydata','refresh');
		}

	}
	public function adminview()
    {
		$this->load->database();
		$this->load->model('User_model');
		$result['data'] = $this->User_model->display_adminrecords();
		$this->load->view('admin/header');
		$this->load->view('admin/adminview',$result);
		$this->load->view('admin/footer');
	}

	///////////////////////////////////////////////not used
	public function deletepoductdata()
    {
		$this->load->database();
		$this->load->model('User_model');
		$id =$this->input->get('id');
		$a=$this->User_model->deleteRecordById($id);
		if ($a==true) {?>
			<script>
			alert("DELETED SUCCESSFULLY");
			</script><?php
			//echo "DELETED SUCCESSFULLY";
			redirect('Admin/displaydata','refresh');
		}else{?>
			<script>
			alert("FAILED TO DELETED");
			</script><?php
			redirect('Admin/displaydata','refresh');
		}

	}
///////////////////////////////////////////////not used
public function confirm_order($id)
    {
		$this->load->database();
		$this->load->model('User_model');
		//$id =$this->input->get('id');
		//$a=$this->db->query("UPDATE ci_order SET status='2' WHERE order_id='$id'");
		$a=$this->db->query("update ci_order SET status='2' where order_id='$id'");
		if ($a==true) {?>
			<script>
			alert("SUCCESSFULLY");
			</script><?php
			//echo "DELETED SUCCESSFULLY";
			redirect('Admin/adminview','refresh');
		}else{?>
			<script>
			alert("FAILED TO update");
			</script><?php
			redirect('Admin/adminview','refresh');
		}

	}
	public function cancelled_order($id)
    {
		$this->load->database();
		$this->load->model('User_model');
		//$id =$this->input->get('id');
		//$a=$this->db->query("UPDATE ci_order SET status='2' WHERE order_id='$id'");
		$a=$this->db->query("update ci_order SET status='0' where order_id='$id'");
		if ($a==true) {?>
			<script>
			alert("Cancelled SUCCESSFULLY");
			</script><?php
			//echo "DELETED SUCCESSFULLY";
			redirect('Admin/adminview','refresh');
		}else{?>
			<script>
			alert("FAILED TO Cancelled");
			</script><?php
			redirect('Admin/adminview','refresh');
		}

	}
	public function shipped_order($id)
    {
		$this->load->database();
		$this->load->model('User_model');
		//$id =$this->input->get('id');
		//$a=$this->db->query("UPDATE ci_order SET status='2' WHERE order_id='$id'");
		$a=$this->db->query("update ci_order SET status='3' where order_id='$id'");
		if ($a==true) {?>
			<script>
			alert("Delivered SUCCESSFULLY");
			</script><?php
			//echo "DELETED SUCCESSFULLY";
			redirect('Admin/adminview','refresh');
		}else{?>
			<script>
			alert("FAILED TO Delivered");
			</script><?php
			redirect('Admin/adminview','refresh');
		}

	}
}
