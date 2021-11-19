<?php
// include 'autoloader.php';
/**
 *
 */
class Applicant extends L_P_User implements Approvable
{
  


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
    $db = DB_OP::get_connection();

  }


  public function reqest_type(){

  }

  public function apply_NIC($division,$application_object)
  {
    if($row_id){
      $db->add_application($row_id,$division,$application_object);
    }
  }

    public function retrieve_row_id()
    {
      $row_id = $db->get_row_id("user_details","username",$uname,"user_id");
    }
    public function select_time_slot()
    {
    // code..
    }

  }


  ?>
