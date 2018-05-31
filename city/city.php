<?php include_once('script.php'); include_once('header2.php');
 login_check(); ?>

			 <SCRIPT type="text/javascript"  charset="utf-8"></script>
   <script language="JavaScript" >
  /*function phyhan()
  {
    var z=document.getElementById("city_id");
    var x=document.getElementById("image_select");
    x.style.display="none";
    if(z.value==-1){x.style.display="";}
      }*/
 
 </script>
 <div class="row">
				
				 <!-- Contegnt -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header>
									<h2>Add City  </h2>
									<span class="byline">&nbsp;</span>
								</header>
						      <form id="form1" name="form1" method="post" action="">
						        City Name 
						        <input type="text" name="c_name" id="c_name" />
						        <input type="submit" name="button" id="button" value="ADD" />
                              </form>
                              <?PHP
                              	if(isset($_POST['button']))
								{
									$con=connect();
									$rec="select c_name from city where c_name='{$_POST['c_name']}'";
									$res=mysqli_query($con,$rec);
									while($rows=mysqli_fetch_assoc($res)!=NULL)
									{
										$count[]=$rows;
									}
									$count=count($count);
									if($count>0)
									{
										echo "City Name Already Exist";
										echo " Choose This City From List</br>";
										echo "<a href='place_add.php'>BACK</a>";
									} 
										else
										{
											add_rec('city',$_POST,'button');
									
									
												header('location:place_add.php');
										}
								}
							  
							  ?>
                            </section>
				   </div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
                                <h2><a href="place_details.php" class="button">See Profile</a></h2>
									<span class="byline"><a href="#" class="image full"><img src="picture/IMG_20140308_095756.jpg" width="430" /></a>
                                    					<a href="#" class="image full">	<img src="picture/IMG_20140308_100425.jpg" width="430" /></a>
                                    </span>
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