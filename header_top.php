
<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form  action="trangtimkiem.php" method="GET">
				    	<input onkeyup="showHint(this.value)" type="text" name="timkiem" value="Tìm kiếm sản phẩm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm';}"><input  type="submit" value="TÌM KIỂM">
				    </form>
			    </div>
			 <!--   <div>
			    	<?php var_dump($_SESSION);?>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Giỏ hàng</span>

								
								


								
									
						<span class="no_product "></span>
							</a>
						</div>
			      </div>-->
	    
			<div class="login">
		   	   <span><a href="quanlygiohang.php"><img style="width: 20px;height: 20px;" src="images/emptycart.png" alt="" title="Cart"/></a></span>
		   </div>
		   <div class="login">
		   	   <span><a href="login.php"><img src="images/<?php if(isset($_SESSION['makh'])) echo "login1.png";else echo"login.png";?>" alt="" title="<?php if(isset($_SESSION['makh'])) echo $_SESSION['ten'];else echo "login";?>"/></a></span>
		   </div>
		   <div class="login">
		   	   <span><a href="thoat.php"><img style="width: 20px;height: 20px;" src="images/logout.jpg" alt="" title="Exit"/></a></span>
		   </div>

		   
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
 <p><span id="txtHint"></span></p>
 <script>
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }
            else 
            {
               var xmlhttp = new XMLHttpRequest();
               
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "timkiemajax.php?q=" + str, true);
               xmlhttp.send();
            }
         }
      </script>