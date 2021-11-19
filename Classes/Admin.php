<?php
/**
 *
 */
class Admin extends L_P_User
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
		$this->u_type = "admin";
		$db = DB_OP::get_connection();
	}
	public function approve_application($application)
	{
		$db->approve_application($application_id,"admin_level");
	}

}


?>
