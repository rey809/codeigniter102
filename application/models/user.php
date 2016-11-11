<?php

class User extends CI_Model {

	function validate() {

/*	 $this->db->where('alumni_email', $this->input->post('email'));
	 $this->db->where('alumni_password', $this->input->post('password'));
	 print_r($query = $this->db->get('alumni'));

	if($query->num_rows == 1){
			return true;
	 }
*/

   $this ->db->select('alumni_email, alumni_password');
   $this ->db->from('alumni');
   $this ->db->where('alumni_email', $this->input->post('email'));
   $this ->db->where('alumni_password', $this->input->post('password'));
   $this ->db->limit(1);
 
   $query = $this->db->get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   { 
     return false;
   }
}
}

?>
