<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Champion Real Estate</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>	
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/cover.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; min-height: 70vh;">
            
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mt-4 mt-12"><br>Find your dream house</h1>
                            
                            <form method="post" action="propertygrid.php">
                                
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Select Type</option>
												<option value="appartment">Appartment</option>
												<option value="flat">Flat</option>
												<option value="bunglow">Bunglow</option>
												<option value="house">House</option>
												<option value="villa">Villa</option>
												<option value="office">Office</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Select Status</option>
												<option value="rent">Rent</option>
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            
                                            <button type="submit" class="btn" style="background-color: #A81313; color: #FFFFFF; border-radius: 4px; padding: 10px 20px;font-size: 14px;
	                                       font-weight: 500;font-family: 'Comfortaa', cursive;line-height: 28px;">Search Property</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row bg-gray" style="background-color: #DCDCDC";>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-dark text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center "> 
								
                                <h5 class="text-dark hover-text-primary py-3 m-0">Selling Service</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								
                                <h5 class="text-dark hover-text-primary py-3 m-0">Rental Service</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								
                                <h5 class="text-dark py-3 m-0">Property Listing</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								
                                <h5 class="text-dark hover-text-primary py-3 m-0">Legal Investment</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="rowlist">
                    
                    <div class="col-md-12">
                        <h2 class="text-dark text-center my-4">Recent Property</h2>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="mt-4">  
                                <div class="rowlist">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
                                   
                                    <div class="single-box">   
                                        <div class="mb-4">
                                            
                                            <div class="overflow-hidden position-relative"> 
                                                <img class="img-area" src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                                
                                                <div class="sub-heading col-lg-2">New</div>
                                                
                                                <div class="SaleBtn">For <?php echo $row['5'];?>
                                                    
                                                </div>                                             
                                            </div>
                                            <div>
                                                <div class="p-3"> 
                                                    <h5 class="propname"><a style="color: #222222;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>                                      
                                                </div>
                                                
                                                
          <div  class="table-striped font-14 px-4 text-center">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td >Sqft</td>
                                            <td class="text-capitalize py-2 text-left"><?php echo $row['12'];?></td>
                                            <td>Bedroom</td>
                                            <td class="text-capitalize py-2"><?php echo $row['6'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Bathroom</td>
                                            <td class="text-capitalize py-2"><?php echo $row['7'];?></td>
                                            <td>Balcony</td>
                                            <td class="text-capitalize py-2"><?php echo $row['8'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Hall</td>
                                            <td class="text-capitalize py-2"><?php echo $row['10'];?></td>
                                            <td>Kitchen</td>
                                            <td class="text-capitalize py-2"><?php echo $row['9'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                                                
                            
                                                <div class="p-4 d-inline-block w-100">
                                                    
                                                    <div class="float-left text-capitalize" style=" font-family: 'Comfortaa', cursive;
                                                    font-size: 15px;line-height: 28px;">
                                                        
                                            
                                                        
                                                        By : <?php echo $row['uname'];?></div>
                                                    
                                                    <div class="float-right" style=" font-family: 'Comfortaa', cursive;font-size: 15px;line-height: 28px;">6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          
                               
									<?php } ?>                           
                            </div>                         
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
		
        <div class="full-row living overlay-secondary-half" style="background-color: #BAA360">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white"> 
								
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white"> 
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white"> 
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
									</div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6" style="background-image: url('images/cover.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; min-height: inherit;">
                        
                        
                    
                    
                    </div>
                    
                </div>
            </div>
        </div>
	
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center mb-5">
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mb-5">
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mb-5">           
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      
		<?php include("include/footer.php");?>
        
 


</body>

</html>