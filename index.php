<?php include 'header.php'; ?>
<?php

$db = mysqli_connect("localhost", "root", "", "toy_universe");
$sql = "SELECT * FROM featured_products";
$result = mysqli_query($db,$sql);

?>
<?PHP
include("core/db_conection.php");

 ?>
<!DOCTYPE HTML>
<html>
<head>
<link href="images/toy-universe-logo.png" rel="shortcut icon" type="image/x-icon" />
 



<script src="js/json2.js"/></script>
 <link rel="stylesheet" href="css/styleindex.css"/>
 <link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/font-awesome.css"/>

</head>
<body>



<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-wrap="true">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/train-bell.jpg" alt="...">
      
    </div>
    <div class="item">
      <img src="images/index3.jpg" alt="...">
      
    </div>
    <div class="item">
      <img src="images/kids.jpg" alt="...">
      
    </div>
    <div class="item">
      <img src="images/kids1.jpg" alt="...">
      
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->


  <!--<div id="background-image">
      <div id="image-1"></div>
      <div id="image-2"></div>
  </div>
-->
 <script type="text/javascript">
        (function($) {
            if(device.desktop() && $(window).width() >= 1200){
                // PARALLAX INIT
                $(window).load(function() {
                    $('.parallax_box1 a').parallax("20%", -0.4);
                });
            };
        })(jQuery);
    </script>
    
    
    
        <div class="best-sellers-home">
        <div class="widget widget_best_sellers">
   
      <div class="container">
      <div class="row">
    
        <h3 class="widget_header">Best <span>Sellers</span></h3>
    <div class="widget_content">
   
          
        
          	<div class="wow product col-sm-3 product__1">
            <div class="prod_inside animated fadeInLeft">
                    
                <div class="clearfix">   
                <div class="product_img">  
                    <a href="#">
                    <img src="images/batman-_the_penguin_face_off_76010_1_large.png" alt="Batman- The Penguin Face off 76010" />
                    </a>
                </div>

                <div class="product_info">
                    <div class="product_price animated fadeInLeft">
                        
                        <span class="money">Points:36.00</span>
                        
                    </div>
                    <div class="product_name">
                        <a href="#">Batman- The Penguin Face off 76010</a>
                    </div>
   					
                    <div class="product_links">
                        <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->
<form method="post" action="">
    <!-- We can leave this in, since the select comes later, 
        so it will override if user picks something different. -->
    
        <input type="hidden" name="id" value="7657319873" />
    

  	

	<!-- START BUY -->
	    		    
		    <button class="add-to-cart btn glyphicon btn-info glyphicon-shopping-cart" type="submit">Add to cart</button>
		
	<!-- END BUY -->
</form>         
                    </div>
                </div>

                </div>
            </div>
            </div>
        
          	<div class="wow product col-sm-3 product__2">
            <div class="prod_inside animated fadeInLeft">
                    
                <div class="clearfix">   
                <div class="product_img">  
                    <a href="#">
                    <img src="images/disney_princess_rapunzel_deluxe_styling_head_1_large.png" alt="Disney Princess Rapunzel Deluxe Styling Head" />
                    </a>
                </div>

                <div class="product_info">
                    <div class="product_price animated fadeInLeft">
                        
                        <span class="money">Points: 42.00</span>
                        
                    </div>
                    <div class="product_name">
                        <a href="#">Disney Princess Rapunzel Deluxe Styling Head</a>
                    </div>
   					
                    <div class="product_links">
                        <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->
<form method="post" action="">
    <!-- We can leave this in, since the select comes later, 
        so it will override if user picks something different. -->
    
        <input type="hidden" name="id" value="1103202309" />
    

  	

	<!-- START BUY -->
	    		    
		    <button class="add-to-cart btn glyphicon btn-info glyphicon-shopping-cart" type="submit">Add to cart</button>
		
	<!-- END BUY -->
</form>         
                    </div>
                </div>

                </div>
            </div>
            </div>
        
          	<div class="wow product col-sm-3 product__3">
            <div class="prod_inside animated fadeInLeft">
                    
                <div class="clearfix">   
                <div class="product_img">  
                    <a href="#">
                    <img src="images/disney_sofia_the_first_talking_sofia_and_animal_friends_1_large.png" alt="Disney Sofia The First Talking Sofia and Animal Friends" />
                    </a>
                </div>

                <div class="product_info">
                    <div class="product_price animated fadeInLeft">
                        
                        <span class="money">Points: 48.00</span>
                        
                                                
                    </div>
                    <div class="product_name animated fadeInLeft">
                        <a href="#">Disney Sofia The First Talking Sofia and Animal Friends</a>
                    </div>
   					
                    <div class="product_links">
                        <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->
<form method="post" action="#">
    <!-- We can leave this in, since the select comes later, 
        so it will override if user picks something different. -->
    
        <input type="hidden" name="id" value="1103202437" />
    

  	

	<!-- START BUY -->
	    		    
		    <button class="add-to-cart btn glyphicon btn-info glyphicon-shopping-cart" type="submit">Add to cart</button>
		
	<!-- END BUY -->
</form>         
                    </div>
                </div>

                </div>
            </div>
            </div>
        
          	<div class="wow product col-sm-3 product__4">
            <div class="prod_inside animated fadeInLeft">
                    
                <div class="clearfix">   
                <div class="product_img">  
                    <a href="#">
                    <img src="images/emmas_lifeguard_post_41028_1_large.png" alt="Emma’s Lifeguard Post 41028" />
                    </a>
                </div>

                <div class="product_info">
                    <div class="product_price animated fadeInLeft">
                        
                        <span class="money">Points: 54.00</span>
                        
                    </div>
                    <div class="product_name animated fadeInLeft">
                        <a href="#">Emma’s Lifeguard Post 41028</a>
                    </div>
   					
                    <div class="product_links">
                        <!-- 
    This is just a regular add product form. 
    You should be able to add any valid input fields to it 
-->
<form method="post" action="#">
    <!-- We can leave this in, since the select comes later, 
        so it will override if user picks something different. -->
    
        <input type="hidden" name="id" value="1103202613" />
    

  	

	<!-- START BUY -->
	    		    
		    <button class="add-to-cart btn glyphicon btn-info glyphicon-shopping-cart" type="submit">Add to cart</button>
		
	<!-- END BUY -->
</form>         
                    </div>
                </div>

                </div>
            </div>
            </div>
        
   
    </div>
   
      </div>
      </div>
    
</div>
        </div>
    

</div>






<div class="container">
    <!-- SHOWCASE CUSTOM BLOCKS -->
    <div id="showcase">
<div class="row">
    <h2 class="page_heading">Featured <span>Categories</span></h2>



	
        <div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__1 animated fadeInDown">
            <a href="#" class="maxheight">
            <img src="images/custom_showcase1_img.jpg" alt="Riding Toys" />
            <div class="ins animated fadeInDown">
                <div class="title1">
                    Riding
                    <span>Toys</span>
                </div>
            </div>
            </a>
        </div>
  	
	
        <div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__2 animated fadeInDown">
            <a href="#" class="maxheight">
            <img src="images/custom_showcase2_img.jpg" alt="Arts Supplies" />
            <div class="ins animated fadeInDown">
                <div class="title1">
                    Arts
                    <span>Supplies</span>
                </div>
            </div>
            </a>
        </div>
  	
	
        <div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__3 animated fadeInDown">
            <a href="#" class="maxheight">
            <img src="images/custom_showcase3_img.jpg" alt="Games & Puzzles" />
            <div class="ins animated fadeInDown">
                <div class="title1">
                    Games
                    <span>& Puzzles</span>
                </div>
            </div>
            </a>
        </div>
 

	
        <div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__4 animated fadeInDown">
            <a href="#" class="maxheight">
            <img src="images/custom_showcase4_img.jpg" />
            <div class="ins animated fadeInDown">
                <div class="title1">
                    Building
                    <span>Sets</span>
                </div>
            </div>
            </a>
        </div>
  	
	
        <div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__5 animated fadeInDown">
            <a href="#" class="maxheight">
            <img src="images/custom_showcase5_img.jpg" />
            <div class="ins animated fadeInDown">
                <div class="title1">
                    Baby
                    <span>Shop</span>
                </div>
            </div>
            </a>
        </div>
  	
	
        <div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__6 animated fadeInDown">
            <a href="#" class="maxheight">
            <img src="images/custom_showcase6_img.jpg" alt="Dolls & Figures" />
            <div class="ins animated fadeInDown">
                <div class="title1">
                    Dolls
                    <span>& Figures</span>
                </div>
            </div>
            </a>
        </div>
  	



</div>
</div>
</div>
<div class = "align pull-left" style="background-color:#4169E1; color:#FFFFFF;"></div>
<div class="container"  style="background-color:#4169E1; color:#FFFFFF; width:1000px;">
    
   
        <div class="col-xs-8 col-md-8 footer_block footer_block__1  slideInLeft ">
            <h3><b>Information</h3>
            <ul>
                
                <li class="active"><a href="index.php" title="" style="color: #FFF5EE; ">Home</a></li>
                
                <li ><a href="librarytoys.php" title="" style="color: #FFF5EE; ">Search</a></li>
                
                <li ><a href="#" title="" style="color: #FFF5EE; ">Blog</a></li>
                
                <li ><a href="About Us.php" title="" style="color: #FFF5EE; ">About Us</a></li>
                
                <li ><a href="#" title="" style="color: #FFF5EE; ">Documentation</a></li>
                
                <li ><a href="#" title="" style="color: #FFF5EE; ">Contact us</a></li>
                
            </ul>
        </div>

        <div class="col-sm-3 col-xs-6 col-centered footer_block footer_block__2 wow animated slideInLeft">
            <h3>My account</h3>
            <ul>
                
                <li ><a href="Userdetails.php" title="" style="color: #FFF5EE; ">My account</a></li>
                
                <li ><a href="Userdetails.php" title="" style="color: #FFF5EE; ">My addresses</a></li>
                
                <li ><a href="viewCart.php" title="" style="color: #FFF5EE; ">My cart</a></li>
                
            </ul>
        </div>
        
        
        <div class="col-xs-6 col-md-4 footer_block footer_block__5 wow">
            <ul class="socials_block">
                <li><a href="//www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="//twitter.com/"><i class="fa fa-twitter"></i></a></li>
              
                       
                
                
            </ul>
        </div>          
        
    </div>

</div>

<div class="copyright">
    <div class="container">
        <p role="contentinfo" class="text-center">&copy; 2016 Toys Universe. All Rights Reserved.
    </div>
</div>



</footer>	
  
  <script>
	$('.carousel').carousel({
		interval: 3000
	});
</script>
</body>
</html>
