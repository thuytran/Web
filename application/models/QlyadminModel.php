 <?php
// class QlyadminModel extends CI_Model{
// 	
	// public function checkAdmin($admin)
	// {
		// $this->db->exist('qlyadmin', $admin);
	// }	
// }
// 
// f(isset($_POST['Login']))
			// {
			 // if(isset($_POST['User_Name']))
						// // $User=$_POST["User_Name"];
				// if(isset($_POST["Password"]))
						 // $Pass=$_POST["Password"];
// 		
			// $sql = "select * from qladmin where User_Name='$User' and Password='$Pass'";
			// $res = mysql_query($sql);
//  			
				// if($res!='')
				// echo "Dang nhap thanh cong";
				 // else {
					// echo "Ten dang nhap hoac mat khau sai";
				 // }
			 // }
			 class QlyadminModel extends CI_Model{
			 	public function checkAdmin(){
			 		 if(isset($_POST['Login']))
			 			if(isset($_POST['User_Name']))
						$User_Name=$_POST["User_Name"];
							if(isset($_POST['Password']))
						 	$Password=$_POST["Password"];
							// $sql = "select * from qlyadmin where User_Name='$User_Name' and Password='$Password'";
							// $res = mysql_query($sql);
							if($Password=='123456'&&$User_Name=='admin'){
							echo "Đăng nhập thành công! Hãy bắt đầu quản trị trang web";
								$this->load->view('quantrivien.php');
							}
							else{
								echo "fail!";
							}
			 		
			 	}
			 }
			 ?>
