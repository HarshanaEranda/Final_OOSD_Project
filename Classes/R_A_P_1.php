<?php
/**
 *
 */
class R_A_P_1 extends R_A_P
{
	private $db;
	function __construct($fname,$uname,$address,$email,$mobile_no,$gender,$bday,$password)
  {
    $this->fname = $fname;
    $this->uname = $uname;
    $this->address = $address;
    $this->email = $email;
    $this->mobile_no = $mobile_no;
    $this->gender = $gender;
    $this->bday = $bday;
    $this->password = $password;
    	$db = DB_OP::get_connection();
    	$u_type = "rap1";
	}
	public function approve_application($application)
	{
		$db->approve_application($application_id,"rap1_level");
	}
}

?>
