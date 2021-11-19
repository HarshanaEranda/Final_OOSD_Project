<?php
/**
 *
 */
class DatabaseManager extends User
{
	private $db;
	private $u_type;

	public function __construct($fname,$uname,$address,$email,$mobile_no,$gender,$bday,$password)
	{
		$this->fname = $fname;
		$this->uname = $uname;
		$this->address = $address;
		$this->email = $email;
		$this->mobile_no = $mobile_no;
		$this->gender = $gender;
		$this->bday = $bday;
		$this->password = $password;
		$u_type = "db_manager";
		$db = DB_OP::get_connection();
	}
	public function add_L_P_User($staff_id,$u_type,$username,$email,$pwd,$u_object)
	{
		$db->create_staff_acc($staff_id,$u_type,$username,$email,$pwd,$u_object);
	}
	public function remove_L_P_User($staff_id)
	{
		$db->remove_staff_acc($staff_id);
	}

}

?>
