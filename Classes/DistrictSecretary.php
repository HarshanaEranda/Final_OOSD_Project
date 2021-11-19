<?php
/**
 *
 */
class DistrictSecretary extends R_A_P
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
   		$u_type = "ds";
	}
	public function approve_application($application_id)
	{
		$db->approve_application($application_id,"ds_level");
	}
}

?>
