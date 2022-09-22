
					<!-- //header-ends -->
				
				<!--content-->
				<div class="content">
<div class="women_main">
	<!-- start content -->

	<table align="center" border="1" class="table">
    
    <tr>
      <th>Product id</th>
      <th>Cetegory id</th>
      <th>Name</th>
      <th>Cetegory</th>
      <th>price</th>
	  <th>offprice</th>
      <th>photo</th>

    </tr>

    <?php

    foreach ($data as $d) 

       { 
    ?>
      <tr>

        <td><?php echo $d->p_id;?></td>
        <td><?php echo $d->cet_id;?></td>
        <td><?php echo $d->name;?></td>
        <td><?php echo $d->cetegory;?></td>
        <td><?php echo $d->price;?></td>
		<td><?php echo $d->offprice;?></td>
		<td><?php echo $d->photo;?></td>
        <td>
        	<button class="btn" > <a href="delete?did=<?php echo $d ->p_id;?>">Delete</a></button> 
        	<button class="btn" > <a href="delete?eid=<?php echo $d ->id;?>">Edit</a></button> 

        </td>	







      </tr>
      <?php
   


      }



    ?>


	</table>

  			
		<!-- <div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table #03</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">Create Your Domain Name</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Id</th>
					        <th>Name</th>
					        <th>Email</th>
					        <th>Password</th>
					        <th>Mobile</th>
					        <th>Register</th>
					      </tr>
					    </thead>
					     <?php

    foreach ($data as $d) 

       { 
    ?>
					    <tbody>
					      <tr>
					      	<td><?php echo $d->id;?></td>
                  <td><?php echo $d->username;?></td>
                  <td><?php echo $d->email;?></td>
                  <td><?php echo $d->password;?></td>
                  <td><?php echo $d->mobile;?></td>
					       
					        <td class="border-bottom-0"><a href="#" class="btn btn-primary">Sign Up</a></td>
					        <td class="border-bottom-0"><a href="#" class="btn btn-primary">Sign Up</a></td>
					      </tr>
					    </tbody>
					    <?php
   


      }



    // ?>
	// 				  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>




 -->
			
		<!-- end grids_of_4 -->
		
		
	</div>
   <div class="clearfix"></div>
	<!-- end content -->
	<div class="foot-top">
	
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h1>follow us on</h1>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	
</div>
<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="contact.html">Help Center</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="details.html">How To Buy</a></li>
							<li><a href="checkout.html">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="products.html">Our Stories</a></li>
							<li><a href="products.html">Press</a></li>
							<li><a href="faq.html">Career</a></li>
							<li><a href="contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="register.html">Register</a></li>
							<li><a href="checkout.html">My Cart</a></li>
							<li><a href="checkout.html">Order History</a></li>
							<li><a href="details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
</div>

</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				


</body>
</html>