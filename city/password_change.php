<?php include_once('script.php'); include_once('header2.php');
login_check(); ?>
<div class="row">
				
					<!-- Contegnt -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header>
									<h2> Change Password </h2>
									<span class="byline">&nbsp;</span>
								</header>
								<form id="form1" name="form1" method="post" action="">
 
  <input type="hidden" name="email" id="email" />
  <table width="543" border="0">
    <tr>
      <td width="250">Old Password</td>
      <td width="283"><input type="password" name="old_pass" id="old_pass"  placeholder="enter old password" required="%required"/></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><input type="password" name="new_pass" id="new_pass" placeholder="enter new password"  /></td>
    </tr>
    <tr>
      <td>Confirm  Password</td>
      <td><input type="password" name="password" id="password" placeholder="confirm new password" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" />
      <a href="update.php" style="color:#000">BACK</a></td>
    </tr>
  </table>
</form>
<?php
	if(isset($_POST['button']))
	{
			$res=rec_update($_POST,$_SESSION['logid']);
			
	}	
?>

                            </section>
					  </div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									
                                    <span><a href="#" class="image full"><img src="picture/Goa03Nights-04Days.jpg" /></a></span>
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
	   