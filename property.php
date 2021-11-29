<?php 
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
       
		<?php include("include/header.php");?>
        
         <div class="banner-full-row page-banner" style="background-color: #181C21">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Recent Properties</b></h2>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<div class="col-lg-8">
                        <div class="row">
						
							<?php 
							$query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid");
								while($row=mysqli_fetch_array($query))
								{
							?>
									
                            <div class="single-box-sml">   
                                        <div class="mb-4">
                                            
                                            <div class="overflow-hidden position-relative"> 
                                                <img class="img-area" src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                                
                                                <div class="sub-heading col-lg-2">New</div>
                                                
                                                <div class="SaleBtn">For <?php echo $row['5'];?>
                                                    
                                                </div>                                             
                                            </div>
                                            <div>
                                                <div class="p-3"> 
                                                    <h5 class=""><a style="color: #222222;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>                                      
                                                </div>
                                                
                            
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize" style=" font-family: 'Comfortaa', cursive;
                                                    font-size: 15px;line-height: 28px;">By : <?php echo $row['uname'];?></div>
                                                    
                                                    <div class="float-right" style=" font-family: 'Comfortaa', cursive;font-size: 15px;line-height: 28px;">6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>
                            

                        </div>
                    </div>
					
                    <div class="col-lg-4">
                        <h4 class=" text-dark position-relative pb-4 ml-5">Instalment Calculator</h4>
                        
                        <form class="d-inline-block w-100 ml-5" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend">
                                     <div class="input-group-text">Yr</div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="calcBtn">Calclute Instalment</button>
                        </form>
                       
                        
                         <div class="sidebar-widget mt-5 ml-5">
                            <h4 class="text-dark position-relative pb-4 mb-4">Recent Property Added</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage" style="object-fit: cover;background position: center;filter: contrast(80%);    width: 50%;height: 50%;">
                                    <h6 class="text-dark text-capitalize">
                                        <a style="color: #222222;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                   
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        
       
		<?php include("include/footer.php");?>

    </div>
</div>
</body>

</html>