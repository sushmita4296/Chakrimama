<?php
class Login_model extends CI_Model
{
 function can_login($email, $password)
 {
  $this->db->where('email', $email);
  $query = $this->db->get('entrepreneur');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
    if($row->is_email_verified == 'yes')
    {
      //print_r($this->encryption);
      //exit();
      //$key = 'APANtByIGI1BpVXZTJgcsAG8GZl8pdwwa84';

     // $store_password = $this->encryption->decrypt($row->password);
     $store_password = $this->encryption->decrypt($row->password);


     //print_r($s)
     // $my_pass = "121212";
     // print_r($my_pass);
     // echo '</br>';
     // $encrypt_pass = $this->encryption->encrypt($my_pass);
     // print_r($encrypt_pass);
     // echo '</br>';
     // $decoded_pass = $this->encryption->decrypt($encrypt_pass);
     // echo '</br>';
     // print_r($decoded_pass);

     //exit();

     if($password === $store_password)
     {
       $this->session->set_userdata('id2', $row->id);
     }
     else
     {
      return 'Wrong Password';
     }
    }
    else
    {
     return 'First verified your email address';
    }
   }
  }
  else
  {
   return 'Wrong Email Address';
  }
 }
}

?>