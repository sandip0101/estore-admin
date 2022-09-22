<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css1/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css1/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css1/icon-font.min.css" type='text/css' />

<link href="css1/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css1/style1.css" rel='stylesheet' type='text/css' />
	<title></title>
</head>
<body>

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Add Product</h3>
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="key">
							<!-- <i class="fa fa-user" ></i> -->
							<input  type="text" value="Products name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Name';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
						<select name="cetegory" >
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
							
							<?php
                        foreach($data as $c)
                        {
                  ?>
                     
                  <option  value="<?php echo $c->cet_id;?>"><?php echo $c->cetegory;?></option>
                    
                  <?php
                        }
                  ?>
                 
							<div class="clearfix"></div>
						</select>
						</div>
						<div class="key">
						<!-- 	<i class="fa fa-lock" aria-hidden="true"></i> -->
							<input  type="text" value="Price" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price';}" required="">
							<div class="clearfix"></div>
						</div>

						<div class="key">
						<!-- 	<i class="fa fa-lock" aria-hidden="true"></i> -->
							<input  type="text" value="off Price" name="offprice" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'OffPrice';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
						<!-- 	<i class="fa fa-lock" aria-hidden="true"></i> -->
							<input  type="file"  name="photo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '#';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit" name="submit" >
					</form>
				</div>
				
			</div>
		</div>

</body>
</html>