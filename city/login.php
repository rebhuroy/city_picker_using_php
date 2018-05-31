<?php include_once('script.php'); include_once('header.php'); ?>

				<div class="row">
				
					<!-- Contegnt -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header>
									<h2>User Login</h2>
									<span class="byline">&nbsp;</span>
								</header>
								<form id="form1" name="form1" method="post" action="">
 
<p>&nbsp;</p>
  <table width="614" border="0" align="center">
    <tr>
      <td width="330" height="36"><div align="left">Email Id:</div></td>
      <td width="274"><div align="left">
        <input type="text" name="email" id="email" placeholder="Enter Email ID" />
      </div></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="password" id="password" placeholder="Enter password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="login" /></td>
    </tr>
  </table>
 </form>
  <?php 
  
  	if(isset($_POST['button']))
	{
		$res=login($_POST['email'],$_POST['password'],'place_add.php');
		
		
		}
	?>


                            </section>
					  </div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									
									<span class="byline"><a href="#" class="image full"><img src="picture/Victoria-Memorial-1.jpg" width="420"/></a></span>
								</header>
								<p>&nbsp;</p>
							</section>
						</div>
					<!-- Sidebar -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

<?php include_once('footer.php'); ?>