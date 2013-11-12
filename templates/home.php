<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>bookStore Online</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery.bxslider.css" rel=" stylesheet" type="text/css"/>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-ui.js" ></script>
	<script src="js/gfscript.php" ></script>
    <script src="js/jquery.bxslider.js"></script>
	
    <script type="text/javascript">
        $(function() {
            $( "#tabs_products" ).tabs();
        });
		
    </script>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
</head>
<body>
    <div class="header">
        <div class="top">
            <div class="box">
                <ul>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div><!--.box-->
        </div><!--.top-->
        <div class="main_header">
            <div class="box_main_header">
                <h1><a href="home.html"><img src="images/logo.png" alt="logo" class="logo"/></a></h1>
                <form action="" method="POST">
                    <input type="text" name="txtsearch" placeholder='Search'/>
                    <input type="submit" name="search" value=''/>
                </form>
                <div class="cart">
                    <div class="col1">
						<?php 
							$count=0;$total=0; 
							$objmysql= new CLS_MYSQL();
							if(isset($_SESSION['CART'])){
								$count=count($_SESSION['CART']);
								/*for($i=0;$i<$count;$i++)
									$proid=$_SESSION['CART'][$i]['proid'];
									$sql="SELECT `pro_id`,`name`,`thumb`,`cur_price`  FROM tbl_products WHERE `pro_id`='$proid'";
									$objmysql->Query($sql);	
									$row=$objmysql->Fetch_Assoc();
									$amount=$row['cur_price']*$_SESSION['CART'][$i]['proid'];				
									$total+=$amount;*/
							}
						?>
                        <p class="y_cart"><span class="your_cart">Your cart</span> (<?php echo $count;?> items)</p>
                        <p><span class="price">$<?php echo $total.'.0';?></span> <a href="<?php echo ROOTHOST;?>index.php?com=products&&viewtype=cart" class="checkout">Checkout</a></p>
                    </div><!--.col1-->
                    <div class="col2">
                        <img src="images/star.png" alt="star"/>
                        <p class="p_20">20</p>
                        <p class="wish_list">Wish list</p>
                    </div><!--.col2-->
                </div><!--.cart-->
            </div><!--.box-->
        </div><!--.main_header-->
        <div class="nav_menu">
            <div class="box">
                <ul>
                    <li class="hover"><a href="home.html">Home</a></li>
                    <li ><a href="products.html">Products</a></li>
					<li ><a href="book1.html">Books 1$</a></li>
                    <li><a href="payment.html">Payment</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("li").click(function(){
                            $(this).addClass("hover").siblings().removeClass("hover");

                        })
                    })
                </script>
            </div><!--.box-->
        </div><!--.nav_menu-->
    </div><!--header-->
    <div class="content">
        <div class="box">
            <?php 
				$this->loadComponent(); 
			?>
        </div><!--.box-->
    </div><!--.content-->
    <div class="footer">
        <div class="main_footer">
            <div class="box">
               <div class="col" id="col1">
                   <h4>Question Common</h4>
                   <ul>
                       <li><a href="<?php echo ROOTHOST;?>index.php?com=contents&id=1">General</a><span class="border"></span></li>
                       <li><a href="#">Diaries, Letters & Journals</a><span class="border"></span></li>
                       <li><a href="#">Memoirs</a><span class="border"></span></li>
                       <li><a href="#">True Stories</a><span class="border"></span></li>
                       <li><a href="#">Generic Exams</a><span class="border"></span></li>
                       <li><a href="#">GK Titles</a><span class="border"></span></li>
                       <li><a href="#">Medical Entrance</a><span class="border"></span></li>
                       <li><a href="#">Other Entrance Exams</a><span class="border"></span></li>
                       <li><a href="#">PG Entrance Examinations</a><span class="border"></span></li>
                       <li><a href="#">Self-help Titles</a><span class="border"></span></li>
                       <li><a href="#">Sociology</a></li>
                   </ul>
               </div><!--.col-->
               <div class="col" id="col2">
                    <h4>Policy BookStore</h4>
                    <ul>
                        <li><a href="#">Academic and Referencel</a><span class="border"></span></li>
                        <li><a href="#">Business Trade</a><span class="border"></span></li>
                        <li><a href="#"> Engineering and Computer Science</a><span class="border"></span></li>
                        <li><a href="#">Humanities, Social Sciences and Languages</a><span class="border"></span></li>
                        <li><a href="#">Introduction to Computers</a><span class="border"></span></li>
                        <li><a href="#">Science and Maths</a><span class="border"></span></li>
                        <li><a href="#">Trade Business</a><span class="border"></span></li>
                        <li><a href="#"> English Language & Literature</a><span class="border"></span></li>
                        <li><a href="#"> English Language Teaching</a><span class="border"></span></li>
                        <li><a href="#">Environment Awareness</a><span class="border"></span></li>
                        <li><a href="#">Environment Protection</a></li>
                    </ul>

               </div><!--.col-->
                <div class="col" id="col3">
                    <h4>Handbook </h4>
                    <ul>
                        <li><a href="#">Earth Sciences</a><span class="border"></span></li>
                        <li><a href="#">Geography</a><span class="border"></span></li>
                        <li><a href="#">The Environment</a><span class="border"></span></li>
                        <li><a href="#">Regional & Area Planning</a><span class="border"></span></li>
                        <li><a href="#">Fantasy</a><span class="border"></span></li>
                        <li><a href="#">Gay</a><span class="border"></span></li>
                        <li><a href="#">Humorous</a><span class="border"></span></li>
                        <li><a href="#">Interactive</a><span class="border"></span></li>
                        <li><a href="#">Legal</a><span class="border"></span></li>
                        <li><a href="#">Lesbian</a><span class="border"></span></li>
                        <li><a href="#">Men'S Adventure</a></li>
                    </ul>


                </div><!--.col-->
                <div class="col" id="col4">
                    <h4 title="Bài vi?t m?i nh?t">Sharing On Social</h4>
					<div class="fb-like-box" data-href="https://www.facebook.com/thietkeweb.igf" data-width="200" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false"></div>
                </div><!--.col-->
            </div><!--box-->
        </div><!--.main_footer-->
        <div class="footer_info">
            <p> We accept all major Credit Card/Debit Card/Internet Banking </p>
            <a href="#"><img src="images/mastercard.png" alt="visa"/> </a>
            <a href="#"><img src="images/american.png" alt="visa"/> </a>
            <a href="#"><img src="images/visa.png" alt="visa"/> </a>

            <div class="footer_bottom">
                <p> Conditions of Use Privacy Notice © 2012-2013, Booksonline, Inc. or its affiliates </p>
            </div><!--.footer_bottom-->
        </div><!--.footer_info-->
    </div><!--.footer-->
</body>
</html> 