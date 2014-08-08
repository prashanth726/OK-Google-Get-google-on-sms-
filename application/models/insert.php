
<?php
class insert extends CI_Model
{
	
		
	
	public function check($arg1,$arg2,$arg3,$arg4,$arg5,$arg6)
	{   
		$this->load->database(); 
		$this->load->helper('string');
	    
	    
		$this -> db -> select('');
		$this -> db -> from('');
		$this -> db -> where(''); 
		
		$this -> db -> limit(1);

		$query = $this -> db -> get();
////echo "after".$query -> num_rows();
		
////echo "<hr></hr>";
		if($query -> num_rows() == 0)
		{
			$arg2="okgoogle";
			$date= date("Y-m-d h:i:s");
$date = date('Y-m-d h:i:s', strtotime(str_replace('/', '-', $date)));

			$this->db->query("INSERT INTO okgoogle (')");
		




		

		}
		else{
			$data = array(
               
               '' => $arg1,
               '' => $arg2,
			   '' => $arg3,
			   '' => $arg4,
               '' => $arg5,
               '' => $arg6
			    );

$this->db->where('', $arg1);
$this->db->update('', $data);
////echo "<hr></hr>Updated".$this->db->affected_rows();
			////echo "<hr></hr>";
			////echo "foundddd";
			////echo "<hr></hr>";
		}
		 
			
		
		

		 
	}
	
}
?>