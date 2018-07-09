
						<?php
							$con=mysqli_connect('127.0.0.1','root','');
							if(!$con)
							{
								echo "not connected to server";
								
							}
							if(!mysqli_select_db($con,'sae_cbit'))
							{
								echo "db not selected";
								
							}
							$uname=isset($_POST['first_name'])?$_POST['first_name']:'';
							$mail=isset($_POST['email'])?$_POST['email']:'';
							$cont=isset($_POST['message'])?$_POST['message']:'';
							$sql="INSERT INTO contact (name,email,content) VALUES('$uname','$mail','$cont')";
							
							if(!mysqli_query($con,$sql))
							{
								echo "not inserted";
								
							}
							else
							{
								echo "inserted";
								
							}
							
								header("reset:2; url=contact1.html");
						
						?>
				