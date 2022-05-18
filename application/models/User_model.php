<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * hash_password function.
     * 
     * @access private
     * @param mixed $password
     * @return string|bool could be a string on success, or bool false on failure
     */
    public function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    /**
     * resolve_user_login function.
     * 
     * @access public
     * @param mixed $username
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function resolve_user_login($username, $password)
    {       
        $this->db->select('password');
        $this->db->from('ci_users');
        $this->db->where('email', $username);
        $hash = $this->db->get()->row('password');
        return $this->verify_password_hash($password, $hash);
    }
    private function verify_password_hash($password, $hash)
    {
        
        return password_verify($password, $hash);
        
    }
	public function get_user($user_id)
    {
        $this->db->from('ci_users');
        $this->db->where('email', $user_id);
        return $this->db->get()->row();       
    }
    /**
     * get_user_id_from_username function.
     * 
     * @access public
     * @param mixed $username
     * @return int the user id
     */
    public function get_user_id_from_username($username)
    {
        $this->db->select('email');
        $this->db->from('ci_users');
        $this->db->where('email', $username);
        return $this->db->get()->row('email');
    }
    /**
     * get_user function.
     * 
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
public function change_userpassword($data,$id)
    {
        $this->db->where('login_id',$id);
        $this->db->update('tbl_login', $data);
		 return true;
	}	 
	
	public function slct_cond($tbl,$con)
	{
	$this->db->select('*');
    $this->db->from($tbl);
	$this->db->where($con);
	$query = $this->db->get();
    return $query->result_array();///$row ['name'];
	}
    public function slct_cond1($tbl,$con)
	{
	$this->db->select('*');
    $this->db->from($tbl);
	$this->db->where($con);
	$query = $this->db->get();
    return $query->result();    ///$row->name;
	}
	public function ex_query($q)
	{
		$y=$this->db->query($q);
    	return $y;
	}
    public function ex_query1($q)
	{
		$y=$this->db->query($q)->result_array();
    	return $y;
	}
	// public function save($tbl,$q)
	// {
	// $y=$this->db->insert($tbl,$q);
    // return $y;
	// }
	public function save($tbl,$data)
	{
		$r=$this->db->insert($tbl,$data);
		$lid=$this->db->insert_id();
		return $lid;
	}
    public function get_cart($id)
    {
    $this->db->select('*');
    $this->db->from('ci_cart');
    $this->db->join('ci_items','ci_cart.product_id=ci_items.id','inner');
    $this->db->where('ci_cart.status',1);
    $this->db->where('ci_cart.user',$id);
    $query = $this->db->get();
    return $query;
    }
    ///////////////admin///////
    public function get_stock()
    {
    $this->db->select('*');
    $this->db->from('ci_items');
    $this->db->where('delete_status=0');
    $query = $this->db->get();
    return $query;
    }
    public function get_sing($id)
    {
    $this->db->select('*');
    $this->db->from('ci_items');
    $this->db->where('ci_items.id',$id);
    $query = $this->db->get();
    return $query;
    }
    public function display_records()
    {
      $query = $this->db->get('ci_items');
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
    return $query->result();
    }
    public function displayrecordsById($id)
    {
      $query = $this->db->query("select * from ci_items where id='".$id."'");
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
    return $query->result();
    }
    public function update_records($title,$price,$quantity,$id)
    {
      $query = $this->db->query("update ci_items SET title='$title',price='$price',quantity='$quantity' where id='".$id."'");
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
    //return $query->result();
    }
    public function deleteRecordById($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('ci_items');
        return true;
    }
    public function upd($tbl,$con,$chg)
    {
        $this->db->where($con);
        $this->db->update($tbl,$chg);
        return true;
    }
    function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from ci_users where id='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE ci_users set password='$new_pass'  where id='$session_id'");
	}

    public function display_user()
    {
     $this->db->from('ci_users');
    // $query = $this->db->from('ci_users');
     $this->db->where('level',1);
     $query = $this->db->get();
    return $query->result();
    }
    public function displayuserrecordsById($id)
    {
      $query = $this->db->query("select * from ci_users where id='".$id."'");
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
    return $query->result();
    }
    function selectall($tbl,$col)
	{
		
		$this->db->select($col);
		$this->db->from($tbl);
		$result=$this->db->get();
		return $result;
	}
    public function display_adminrecords()
    {
     // $query = $this->db->get('ci_billing');
     $query = $this->db->query("select * from ci_billing join ci_order on ci_order.order_id = ci_billing.order_id");
     //$query = $this->db->query("select * from ci_billing join ci_oder on ci_order.order_user = ci_billing.user_id");
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
    return $query->result();
    }
    public function display_userrecords()
    {
     // $query = $this->db->get('ci_billing');
     $query = $this->db->query("select * from ci_billing join ci_order on ci_order.order_id = ci_billing.order_id where user_id = '$_SESSION[id]'");
     //$query = $this->db->query("select * from ci_billing join ci_oder on ci_order.order_user = ci_billing.user_id");
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
    return $query->result_array();
    }
    public function delete11($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('ci_Users');
        return true;
    }

    //////////////////////////////not working///////////////
   /// public function display_orderrecords()
   // {
     // $query = $this->db->get('ci_billing');
    // $query = $this->db->query("select * from ci_billing join ci_order on ci_order.order_id = ci_billing.order_id where user_id = '$_SESSION[id]'");
     //$query = $this->db->query("select * from ci_billing join ci_oder on ci_order.order_user = ci_billing.user_id");
    // $this->db->from('ci_items');
    // $this->db->where('ci_items.id',$id);
    // $query = $this->db->get();
   // return $query->result_array();
   // }
    //////////////////////////////////////////////////////
    public function display_orderrecords($a)
	{
	$this->db->select('*');
    $this->db->from('ci_order');
    $this->db->join('ci_order_details','ci_order_details.order_idd=ci_order.order_id','inner');
   // $this->db->join('ci_billing','ci_billing.user_id=ci_order.order_user','inner');
    $this->db->join('ci_billing','ci_billing.order_id=ci_order.order_id','inner');
    $this->db->join('ci_items','ci_items.id=ci_order_details.item_id','inner');
	$this->db->join('ci_users','ci_users.id=ci_order.order_user','inner');
	$this->db->where('ci_order.order_id',$a);
    ////////////////////////////
    // $this->db->select('*');
	// 	$this->db->from('tbl_order');
	//    	$this->db->join('tbl_login','tbl_order.order_user_id=tbl_login.login_id','inner');
	// 	$this->db->join('tbl_shipping','tbl_order.order_id= tbl_shipping.ship_order_id','inner');
    //     $this->db->join('tbl_user','tbl_user.user_logid=tbl_login.login_id','inner');
	// 	$this->db->where($data);
    ///////////////////////////
	$query = $this->db->get();
    return $query->result(); 
	} 
//     SELECT `id`, `email`, `password`, `first_name`, `last_name`, `level` FROM `ci_users` WHERE 1
// SELECT `id`, `order_idd`, `user_id`, `item_id`, `nu`, `pr` FROM `ci_order_details` WHERE 1
// SELECT `order_id`, `order_user`, `amount`, `status`, `order_date` FROM `ci_order` WHERE 1
//SELECT `id`, `title`, `discription`, `price`, `image`, `quantity`, `category_id`, `delete_status` FROM `ci_items` WHERE 1
// SELECT `id`, `first_name`, `last_name`, `email`, `address`, `city`, `landmark`, `pincode`, `phone`, `order_id`, `status`, `user_id` FROM `ci_billing` WHERE 1
 }
//  public function display_adminorderrecords($a)
//  {
//  $this->db->select('*');
//  $this->db->from('ci_order');
//  $this->db->join('ci_order_details','ci_order_details.order_idd=ci_order.order_id','inner');
// // $this->db->join('ci_billing','ci_billing.user_id=ci_order.order_user','inner');
//  $this->db->join('ci_billing','ci_billing.order_id=ci_order.order_id','inner');
//  $this->db->join('ci_items','ci_items.id=ci_order_details.item_id','inner');
//  $this->db->join('ci_users','ci_users.id=ci_order.order_user','inner');
//  $this->db->where('ci_order.order_id',$a);
//  $query = $this->db->get();
//  return $query->result(); 
//  } 



//  $this->db->select('*');
//     $this->db->from('ci_order');
// 	$this->db->join('ci_users','ci_users.id=ci_order.order_user','inner');
//     $this->db->join('ci_order_details','ci_order_details.order_idd=ci_order.order_id','inner');
//     $this->db->join('ci_billing','ci_billing.user_id=ci_order.order_user','inner');//$this->db->join('ci_billing','ci_billing.order_id=ci_order.order_id','inner');
//     $this->db->join('ci_items','ci_items.id=ci_order_details.item_id','inner');
// 	$this->db->where('ci_order.order_id',$a);

?>