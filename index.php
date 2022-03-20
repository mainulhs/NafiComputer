<?php 
    include 'core/dbe.inc.php';
    include 'core/core.inc.php';
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="public/UI/style/css/style-main07.css"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
		<script type="text/javascript" src="public/UI/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="public/UI/style/bootstrap/js/bootstrap.min.js"></script>
		<script src="public/UI/js/galary-image/js/jquery.blueimp-gallery.min.js"></script>
		<script src="public/UI/js/galary-image/js/bootstrap-image-gallery.js"></script>
		<script type="text/javascript" src="public/UI/js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="public/UI/js/jquery.plugin.js"></script>
		<script type="text/javascript" src="public/UI/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="public/UI/js/slideshow/jquery.themepunch.revolution.js"></script>
		<script type="text/javascript" src="public/UI/js/slideshow/jquery.themepunch.plugins.min.js"></script> 
		<script type="text/javascript" src="public/UI/js/theme.js"></script> 
		<title>Nafi Computer</title>
	</head>
	<body class="home07">
        <!--begin header-->
        <div id="box-header">
			<div class="header-container">
				<div class="header">
					<div class="box-header-01">
						<div class="container">
							<div class="row">
								<div class="row">
									<div class="block-left col-lg-6 col-md-6 col-sm-5 col-xs-6">
										<div class="block box-left">
											<ul>
												<li><a href="#">About</a></li>
												<li><a href="#">Contact</a></li>
												<li><a href="#">Blog</a></li>
											</ul>
										</div>
										<div class="block box-right">
											<div class="block block-language">
												<div class="lg-cur">
													<span>Language</span>
													<img src="public/UI/images/flags/flag-default.jpg" alt="flag">
												</div>
												<ul>
													<li>
														<a class="selected" href="#">                  
														<img src="public/UI/images/flags/flag-french.jpg" alt="flag">
														<span>French</span>
														</a>
													</li>
													<li>
														<a href="#">                    
														<img src="public/UI/images/flags/flag-german.jpg" alt="flag">
														<span>German</span>
														</a>
													</li>
													<li>
														<a href="#">                    
														<img src="public/UI/images/flags/flag-brazil.jpg" alt="flag">
														<span>Brazil</span>
														</a>
													</li>
												</ul>
											</div>
											<div class="block block-currency">
												<div class="item-cur">
													<span>usd</span>           
												</div>
												<ul>
													<li>
														<a href="#"><span class="cur_icon">$</span> EUR</a>
													</li>
													<li>
														<a href="#"><span class="cur_icon">$</span> JPY</a>
													</li>
													<li>
														<a class="selected" href="#"><span class="cur_icon">$</span> USD</a>
													</li>
												</ul>
											</div>
										</div>
								 </div>
								<div class="block-right col-lg-6 col-md-6 col-sm-7 col-xs-6">
								    <div class="my-account">
								        <span class="my-account-title">Sign in</span>
											<div class="content">
												<ul class="left">
													<li><a href="#" class="top-link-myaccount">My Account</a></li>
													<li><a href="#" class="top-link-wishlist">My Wishlist</a></li>
													<li><a href="#" class="top-link-checkout">Checkout</a></li>
													<li><a href="#" class="top-link-login">Log In</a></li>
												</ul>
								            </div>
								    </div>
								    <div class="box-search">
								        <form action="index/html/mello/home-07.html?q=exp" method="POST">
								            <button><span>search</span></button>
												<ul class="drop-search">
													<li>
														<span class="selected">All Categories </span>
														<ul>
															<li>All Categories </li>
															<li>Cate 1</li>
															<li>Cate 2</li>
															<li>Cate 3</li>
														</ul>
													</li>
												</ul>
								             <input name="search" type="text" value="" placeholder="search this site..."/>
								        </form>
								    </div>
								  </div>
								  <script type="text/javascript">                
										 jQuery(document).ready(function($){
											w = $( window ).width(); 
											if(w<768){
												$('.my-account .content').hide();
												$('.my-account').click(function(){
													$('.content').slideToggle();
												});
												$('.cart-mini .block-content').hide();
												$('.cart-mini').click(function(){
													$('.cart-mini .block-content').slideToggle();
												});

												$('.block-language ul').hide();
												$('.block-language').click(function(){
													$('.block-language ul').slideToggle();
												});
												$('.block-currency ul').hide();
												$('.block-currency').click(function(){
													$('.block-currency ul').slideToggle();
												}); 
											}
										})
									</script>
								</div>
							</div>
						</div>
					</div>
					<div class="box-header-02">
						<div class="container">
							<div class="row">
							    <?php
                                    $queryPic = "SELECT * FROM `slide` WHERE category = 'logo'"; 
                                    $pic_list  = fetchData($queryPic);
                                    foreach ($pic_list as $pl) {
                                ?>
								<div class="logo">
									<a href="index.php"><img src="public/upload/<?php echo $pl['name'] ?>" alt="Image Error"/></a>
								</div>
								<?php 
                                    }
                                ?>
								<div id="mobile-nav">
									<button class="btn-sidebar" type="button"><span>menu</span></button> 
										 <script type="text/javascript">
											jQuery(document).ready(function($){ 
												$('.block-slidebar').html($('.mobile-sidebar').html());
												$('.mobile-sidebar').remove();            
												$('.btn-sidebar').click(function(){
													if($('body').hasClass('show-menu')){
														$('body').removeClass('show-menu');
													}else{
														$('body').addClass('show-menu');
													}
												});
												$('.close-menu').click(function(){
													if($('body').hasClass('show-menu')){
														$('body').removeClass('show-menu');
													}else{
														$('body').addClass('show-menu');
													}
												});
											});
										</script>
								</div>
								<div class="menu">
								    <div class="box-main-menu">
										<div class="main-menu">
											<ul>
								                <li class="item1 first"><a href="home-07.html">Home</a></li>
												<li class="item2 megamenu-parent">
												<a href="grid.html">Tablets</a>
												<img class="stick-07" src="public/UI/images/stick/sale07.png" alt="" />
												<div class="vt_megamenu_content">
												    <div class="mega-menu-01">
												        <div class="menu-01 menu-01-cate">
												          <div class="title"><span>Categories</span></div>
												           <ul class="content-col">
												             <li class="first"><a class="mega-lap" href="#"><span>Laptop</span></a></li>
												              <li><a class="mega-tvi" href="#"><span>TV</span></a></li>
												              <li><a class="mega-mob" href="#"><span>Mobile</span></a></li>
												              <li><a class="mega-tab" href="#"><span>Tablet</span></a></li>
												              <li><a class="mega-cam" href="#"><span>Camera</span></a></li>
												              <li class="last"><a class="mega-rad" href="#"><span>Radio</span></a></li>
												            </ul>
												    </div>
												    <div class="menu-01 menu-01-top">
												        <div class="title"><span>Tops</span><span class="hot">Hot</span></div>
												            <ul class="content-col">
																<li class="first"><a href="#"><span>Smartphones</span></a></li>
																<li><a href="#"><span>Accessories</span></a></li>
																<li><a href="#"><span>Headsets</span></a></li>
																<li><a href="#"><span>Batteries</span></a></li>
																<li><a href="#"><span>Screen Protectors</span></a></li>
																<li class="last"><a href="#"><span>Memmory Cards</span></a></li>
												             </ul>
												     </div>
												     <div id="feature" class="menu-01 menu-01-feature carousel-feature">
												        <div class="title"><span>Featured</span><span class="new">New</span></div>
												            <div class="carousel-inner">
																<div class="item active">
																    <div class="image"><img alt="" src="public/UI/images/feature-mega01.png" /></div>
																  <div class="carousel-caption-feature">
																    <div class="title-advan">
																    <span class="name-advan">Ipad Air and iOS7</span>
																    <div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span>
																    </div>
																    </div>
																  </div>
																</div>
																<div class="item">
																    <div class="image"><img alt="" src="public/UI/images/feature-mega01.png" /></div>
																      <div class="carousel-caption-feature">
																        <div class="title-advan">
																         <span class="name-advan">Ipad Air and iOS7</span>
																            <div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
																        </div>
																     </div>
																	</div>
																	<div class="item">
																		<div class="image"><img alt="" src="public/UI/images/feature-mega01.png" /></div>
																		<div class="carousel-caption-feature">
																			<div class="title-advan">
																				<span class="name-advan">Ipad Air and iOS7</span>
																				<div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="menu-01 menu-01-sale">
																<div class="title"><span>Sale</span></div>
																<div class="content">
																	<img alt="" src="public/UI/images/sale-mega-01.png" />
																	<p class="description">At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</p>
																	<div class="shop-now"><a title="Shop now" href="#"><span>Shop now</span></a></div>
																</div>
															</div>
														</div>
													</div>
												</li>
								                <li class="item3 megamenu-parent">
												    <a href="grid.html">smart phone</a>
													<img class="stick-07" src="public/UI/images/stick/new07.png" alt=""/>
													<div class="vt_megamenu_content">
												       <div class="mega-menu-02">
												         <h1 class="title">MOST POPULAR</h1>
												         
															<div class="block row vt-slider vt-slider67">
												               <div class="slider-inner">
																<div class="container-slider">
																 <div class="products-grid">
																 <?php
                                                                    $queryPic = "SELECT * FROM `productimage` WHERE category = 'mobile' ORDER BY id DESC LIMIT 7"; 
                                                                    $pic_list  = fetchData($queryPic);
                                                                    foreach ($pic_list as $pl) {
                                                                 ?>
																  <div class="item">
																    <div class="item-wrap">
																      <div class="item-image">
																        <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
																        <img class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo" /> 
																        </a>
																    <div class="item-btn">
																      <div class="box-inner">
																       <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
																       <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
																       <span class="qview">
																        <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
																       </span>
																      </div>
																   </div>
																   <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
																</div>
												               <div class="pro-info">
												               <div class="pro-inner">
												               <div class="pro-title product-name">
												                <a href="detail.php"><?php echo $pl['productName'] ?></a>
												              </div>
												              <div class="pro-content">
                                                                  <div class="wrap-price">
                                                                      <div class="price-box">
                                                                       <span class="regular-price">
                                                                       <span class="price"><?php echo $pl['price']; ?></span></span>
                                                                      </div>
                                                                  </div>
                                                                  <div class="ratings">
                                                                    <div class="rating-box">
                                                                      <div class="rating" style="width:80%"></div>
                                                                    </div>
                                                                    <span class="amount"><a href="#">1(s)</a></span>
                                                                  </div>
												                </div>
												               </div>
												              </div>
												             </div>
												        <!--end item wrap -->
												           </div>
                                                            <?php 
                                                                }
                                                            ?>                              
                                                        </div>
                                                     </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                             </li>
								              <li class="item4">
													<a href="grid.html">laptops </a>
													<img class="stick-07" src="public/UI/images/stick/hot07.png" alt=""/>
												</li>
												<li class="item5"><a href="grid.html">Desktops</a></li>
												<li class="item6"><a href="#">Computer Accessories</a></li>
												<li class="item7 last"><a href="grid.html">Cameras & Photo</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="account-and-cart">
									<div class="box-cart">
										<div class="cart-mini">
											<div class="title">
												<span class="item">0</span>
											</div>
											<div class="block-content">
												<div class="inner">
													<p class="block-subtitle">Recently added item(s)</p>
													<ol id="cart-sidebar" class="mini-products-list">
														<li class="item">
															<a href="#" title="Fashion Product 09" class="product-image">
															<img src="public/UI/images/product/small/image-demo-1.jpg" alt="Fashion Product 09" />
															</a>
															<a href="#" class="btn-remove">Remove This Item</a>
															<a href="#" title="Edit item" class="btn-edit">Edit item</a>
															<div class="product-details">
																<p class="product-name"><a title="Fashion Product 09" href="#">Fashion Product 09</a></p>
																<span class="price">$200.00</span>       
																<div class="qty-abc">
																	<a title="Decrement" class="qty-change-left" href="#">down</a>
																	<input class="input-text qty" type="text" value="1" />
																	<a title="Increment" class="qty-change-right" href="#">up</a>
																</div>
															</div>
														</li>
													</ol>
													<div class="summary">
														<p class="subtotal">
															<span class="label">Subtotal:</span> <span class="price">$200.00</span>                                                                        
														</p>
													</div>
													<div class="actions">
														<div class="a-inner">
															<a class="btn-mycart" href="#" title="View my cart">view my cart</a>
															<a href="#" title="Checkout" class="btn-checkout">Checkout</a>
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
			</div>
		</div>
		<!--end header-->
		<!--begin content-->
		<div id="box-content">
			<div class="container">
				<div class="row">
					<div class="row">
						<div class="box-menu col-lg-3 col-md-3 col-sm-5 col-xs-5">
							<div class="wrap-vertical-menu">
								<div class="box-vertical-menu">
									<div class="vertical-menu">
										<div class="title">
											<a href="#"><span class="subtitle">Nafi Computer</span></a>
										</div>
										 <?php
                                        $queryPic = "SELECT * FROM `category`"; 
                                        $pic_list  = fetchData($queryPic);
                                        foreach ($pic_list as $pl) {
                                  ?>
										<ul class="show">
											<li class="icon-1 parent">
												<a href="#"><span><?php echo $pl['categoryName']; ?></span></a>
											</li>
										</ul>
										<?php 
                                        }
                                    ?>
									</div>
								</div>
							</div>
							<div class="wrap-banner-07">
							       <?php
                                        $queryPic = "SELECT * FROM `productimage` WHERE category = 'headphone'"; 
                                        $pic_list  = fetchData($queryPic);
                                        foreach ($pic_list as $pl) {
                                  ?>
                                  <img src="public/upload/<?php echo $pl['name']; ?>"/>
								<div class="info">
									<h2><?php echo $pl['description']; ?></h2>
									<h3>Starting at<span><?php echo $pl['price']; ?></span></h3>
									<a class="btn-shopnow" href="#"><span>shop now</span></a>
								</div>
								<?php
                                    }
                                ?> 
                                
							</div>
							<div class="block block-newarrival">
								<div class="title">
									<span>new arrivals</span> 
								</div>
								<div class="content">
								    <?php
                                        $queryPic = "SELECT * FROM `productimage` ORDER BY id DESC LIMIT 4"; 
                                        $pic_list  = fetchData($queryPic);
                                        foreach ($pic_list as $pl) {
                                    ?>
									<div class="item frist">
										<div class="item-wrap">
											<div class="item-image">
												<a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
												<img alt="Product demo" src="public/upload/<?php echo $pl['name'] ?>" class="first_image"> 
												</a>
												<div class="item-btn">
													<div class="box-inner">
														<div class="left">
															<a class="link-wishlist" href="#" title="Add to wishlist">add to wishlist</a>
															<a class="link-compare" href="#" title="Add to compare">add to compare</a>
														</div>
														<div class="right">
															<span class="qview">
															<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a>
															</span>
															<a href="#" class="btn-cart" title="Add to cart">add to cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="pro-info">
												<div class="pro-inner">
													<div class="pro-title product-name"><a href="detail.php"><?php echo $pl['productName']; ?></a></div>
													<div class="pro-content">
														<div class="wrap-price">
															<div class="price-box">
																<span class="regular-price">
																<span class="price"><?php echo $pl['price']; ?></span></span>
																<p class="special-price">
																	<span class="price">$1.459.00</span>
																</p>
															</div>
														</div>
														<div class="ratings">
															<div class="rating-box">
																<div class="rating" style="width:100%"></div>
															</div>
															<span class="amount"><a href="#">1(s)</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end item wrap -->
									</div>
									<?php
                                     }
                                    ?>
									<div class="view-all">
										<a href="#">All New Arrivals</a>
									</div>
								</div>
							</div>
						</div>
                <!--Slide-->
						<div class="box-center col-lg-6 col-md-6 col-sm-7 col-xs-7">
							<div class="sliderhome7"  id="sliderhome7">
                                <div class="wrap-item">
                                     <?php
                                        $queryPic = "SELECT * FROM `slide` WHERE category = 'slide'"; 
                                        $pic_list  = fetchData($queryPic);
                                        foreach ($pic_list as $pl) {
                                    ?>
                                    <div class="item">
                                        <img src="public/upload/<?php echo $pl['name']; ?>" alt="No Slide Image"/>
                                        <a href="#" class="btn-shopnow"><span>shop now</span></a> 
                                    </div>
                                     <?php
                                    }
                                    ?>
                                </div>
							<div class="navslider">
								<a href="#" class="prev">Prev</a>
								<a href="#" class="next">Next</a>
							</div>
							<script type="text/javascript">
								//<![CDATA[
									jQuery(document).ready(function($) {		
										$('#sliderhome7 .wrap-item').owlCarousel({
											items: 1,
											itemsCustom: [ 
												[0, 1], 
												[480, 1], 
												[768, 1], 
												[992, 1],
												[1200,1] 
											],
											pagination: false,
											slideSpeed : 800,
											addClassActive: true,
											scrollPerPage: false,
											touchDrag: false,
											afterAction: function (e) {
												if(this.$owlItems.length > this.options.items){
													$('#sliderhome7 .navslider').show();
												}else{
													$('#sliderhome7 .navslider').hide();
												}
											}
											//scrollPerPage: true,
										});
										$('#sliderhome7 .navslider .prev').on('click', function(e){
											e.preventDefault();
											$('#sliderhome7 .wrap-item').trigger('owl.prev');
										});
										$('#sliderhome7 .navslider .next').on('click', function(e){
											e.preventDefault();
											$('#sliderhome7 .wrap-item').trigger('owl.next');
										});
									});
								//]]>
							</script>
							</div>
				<!--End Slide -->
							<div class="banner-adv-07">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a class="image" href="#">
											<img src="public/UI/images/banner/banner-home072.png" alt="" />
											<div class="gk-img-overlay"></div>
										</a>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a class="image" href="#">
											<img src="public/UI/images/banner/banner-home073.png" alt="" />
											<div class="gk-img-overlay"></div>
										</a>
									</div>
								</div>
							</div>
                    <!--Offers-->
							<div class="block-layout block-offers" id="block-offers">
								<div class="title">
									<a href="#">smartphone offers</a>
								</div>
								<div class="wrap-content">
									<div class="content">
									   <?php
                                            $queryPic = "SELECT * FROM `slide` WHERE category = 'offers' ORDER BY id DESC LIMIT 3"; 
                                            $pic_list  = fetchData($queryPic);
                                            foreach ($pic_list as $pl) {
                                        ?>
										<div class="item">
											<div class="item-wrap">
												<div class="upsell"><span><?php echo $pl['caption']; ?></span></div>
												<div class="item-image">
													<a class="product-image" href="#" title="Ipad Air and iOS7">
													<img width="160" class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo"> 
													</a>
													<div class="item-btn">
														<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a> 
													</div>
												</div>
												<div class="pro-info">
													<div class="pro-inner">
														<div class="product-name"><a href="detail.php"><?php echo $pl['title']; ?></a></div>
														<div class="pro-content">
															<div class="ratings">
																<div class="rating-box">
																	<div style="width:100%" class="rating"></div>
																</div>
																<span class="amount"><a href="#">1(s)</a></span>
															</div>
														</div>
														<div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
													</div>
												</div>
											</div>
											<!--end item wrap -->
										</div>
								        <?php 
                                            }
                                        ?>
									</div>
								</div>
								<div class="navslider">
									<a href="#" class="prev">Prev</a>
									<a href="#" class="next">Next</a>
								</div>
								<script type="text/javascript">
									//<![CDATA[
										jQuery(document).ready(function($) {		
											$('#block-offers div.content').owlCarousel({
												items: 2,
												itemsCustom: [ 
													[0, 1], 
													[480, 2], 
													[768, 2], 
													[992, 3],
													[1200,3] 
												],
												pagination: false,
												slideSpeed : 800,
												addClassActive: true,
												scrollPerPage: false,
												touchDrag: false,
												afterAction: function (e) {
													if(this.$owlItems.length > this.options.items){
														$('#block-offers .navslider').show();
													}else{
														$('#block-offers .navslider').hide();
													}
												}
												//scrollPerPage: true,
											});
											$('#block-offers .navslider .prev').on('click', function(e){
												e.preventDefault();
												$('#block-offers div.content').trigger('owl.prev');
											});
											$('#block-offers .navslider .next').on('click', function(e){
												e.preventDefault();
												$('#block-offers div.content').trigger('owl.next');
											});
										});
									//]]>
								</script>
							</div>
            <!--Tablets-->
							<div class="block-layout block-tab" id="block-tab">
								<div class="tab-item1">
									<div class="title">
										<a href="#">Tablets</a> 
										<ul>
											<li class="active"><a data-toggle="tab" href="#tab4"><span>Apple</span></a></li>
											<li><a data-toggle="tab" href="#tab5"><span>Sangsung</span></a></li>
											<li><a data-toggle="tab" href="#tab6"><span>Sony</span></a></li>
											<li class="last"><a data-toggle="tab" href="#tab7"><span>LG</span></a></li>
										</ul>
									</div>
								</div>
								<div class="tab-content">
									<div id="tab4" class="tab-pane active">
										<div class="wrap-content">
											<div class="content">
											     <?php
                                                    $queryPic = "SELECT * FROM `productimage` ORDER BY id DESC LIMIT 5"; 
                                                    $pic_list  = fetchData($queryPic);
                                                    foreach ($pic_list as $pl) {
                                                  ?>
												<div class="item">
													<div class="item-wrap">
														<div class="item-image">
															<a class="product-image" href="#" title="Ipad Air and iOS7">
															<img width="130" class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo"> 
															</a>
															<div class="item-btn">
																<a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
																<a title="Add to compare" href="#" class="link-compare">add to compare</a> 
																<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
															</div>
														</div>
														<div class="pro-info">
															<div class="pro-inner">
																<div class="product-name"><a href="detail.php"><?php echo $pl['productName']; ?></a></div>
																<div class="pro-content">
																	<div class="wrap-price">
																		<div class="price-box">
																			<span class="regular-price">
																			<span class="price"><?php echo $pl['price']; ?></span></span>
																			<p class="special-price">
																				<span class="price">$1.459.00</span>
																			</p>
																		</div>
																	</div>
																	<div class="ratings">
																		<div class="rating-box">
																			<div style="width:100%" class="rating"></div>
																		</div>
																		<span class="amount"><a href="#">1(s)</a></span>
																	</div>
																</div>
																<div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
															</div>
														</div>
													</div>
													<!--end item wrap -->
												</div>
													<?php
                                                    }
                                                ?>
											</div>
										</div>
										<div class="navslider">
											<a href="#" class="prev">Prev</a>
											<a href="#" class="next">Next</a>
										</div>
									</div>
									<div id="tab5" class="tab-pane">
										<div class="wrap-content">
											<div class="content">
											     <?php
                                                    $queryPic = "SELECT * FROM `productimage` ORDER BY id DESC LIMIT 5"; 
                                                    $pic_list  = fetchData($queryPic);
                                                    foreach ($pic_list as $pl) {
                                                  ?>
												<div class="item">
													<div class="item-wrap">
														<div class="item-image">
															<a class="product-image" href="#" title="Ipad Air and iOS7">
															<img width="130" class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo"> 
															</a>
															<div class="item-btn">
																<a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
																<a title="Add to compare" href="#" class="link-compare">add to compare</a> 
																<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
															</div>
														</div>
														<div class="pro-info">
															<div class="pro-inner">
																<div class="product-name"><a href="detail.php"><?php echo $pl['productName']; ?></a></div>
																<div class="pro-content">
																	<div class="wrap-price">
																		<div class="price-box">
																			<span class="regular-price">
																			<span class="price"><?php echo $pl['price']; ?></span></span>
																			<p class="special-price">
																				<span class="price">$1.459.00</span>
																			</p>
																		</div>
																	</div>
																	<div class="ratings">
																		<div class="rating-box">
																			<div style="width:100%" class="rating"></div>
																		</div>
																		<span class="amount"><a href="#">1(s)</a></span>
																	</div>
																</div>
																<div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
															</div>
														</div>
													</div>
													<!--end item wrap -->
												</div>
													<?php
                                                    }
                                                ?>
											</div>
										</div>
										<div class="navslider">
											<a href="#" class="prev">Prev</a>
											<a href="#" class="next">Next</a>
										</div>
									</div>
									<div id="tab6" class="tab-pane">
										<div class="wrap-content">
											<div class="content">
											     <?php
                                                    $queryPic = "SELECT * FROM `productimage` ORDER BY id DESC LIMIT 5"; 
                                                    $pic_list  = fetchData($queryPic);
                                                    foreach ($pic_list as $pl) {
                                                  ?>
												<div class="item">
													<div class="item-wrap">
														<div class="item-image">
															<a class="product-image" href="#" title="Ipad Air and iOS7">
															<img width="130" class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo"> 
															</a>
															<div class="item-btn">
																<a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
																<a title="Add to compare" href="#" class="link-compare">add to compare</a> 
																<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
															</div>
														</div>
														<div class="pro-info">
															<div class="pro-inner">
																<div class="product-name"><a href="detail.php"><?php echo $pl['productName']; ?></a></div>
																<div class="pro-content">
																	<div class="wrap-price">
																		<div class="price-box">
																			<span class="regular-price">
																			<span class="price"><?php echo $pl['price']; ?></span></span>
																			<p class="special-price">
																				<span class="price">$1.459.00</span>
																			</p>
																		</div>
																	</div>
																	<div class="ratings">
																		<div class="rating-box">
																			<div style="width:100%" class="rating"></div>
																		</div>
																		<span class="amount"><a href="#">1(s)</a></span>
																	</div>
																</div>
																<div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
															</div>
														</div>
													</div>
													<!--end item wrap -->
												</div>
													<?php
                                                    }
                                                ?>
											</div>
										</div>
										<div class="navslider">
											<a href="#" class="prev">Prev</a>
											<a href="#" class="next">Next</a>
										</div>
									</div>
									<div id="tab7" class="tab-pane">
										<div class="wrap-content">
											<div class="content">
											     <?php
                                                    $queryPic = "SELECT * FROM `productimage` ORDER BY id DESC LIMIT 5"; 
                                                    $pic_list  = fetchData($queryPic);
                                                    foreach ($pic_list as $pl) {
                                                  ?>
												<div class="item">
													<div class="item-wrap">
														<div class="item-image">
															<a class="product-image" href="#" title="Ipad Air and iOS7">
															<img width="130" class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo"> 
															</a>
															<div class="item-btn">
																<a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
																<a title="Add to compare" href="#" class="link-compare">add to compare</a> 
																<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
															</div>
														</div>
														<div class="pro-info">
															<div class="pro-inner">
																<div class="product-name"><a href="detail.php"><?php echo $pl['productName']; ?></a></div>
																<div class="pro-content">
																	<div class="wrap-price">
																		<div class="price-box">
																			<span class="regular-price">
																			<span class="price"><?php echo $pl['price']; ?></span></span>
																			<p class="special-price">
																				<span class="price">$1.459.00</span>
																			</p>
																		</div>
																	</div>
																	<div class="ratings">
																		<div class="rating-box">
																			<div style="width:100%" class="rating"></div>
																		</div>
																		<span class="amount"><a href="#">1(s)</a></span>
																	</div>
																</div>
																<div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
															</div>
														</div>
													</div>
													<!--end item wrap -->
												</div>
													<?php
                                                    }
                                                ?>
											</div>
										</div>
										<div class="navslider">
											<a href="#" class="prev">Prev</a>
											<a href="#" class="next">Next</a>
										</div>
									</div>
								</div>
								<script type="text/javascript">
									//<![CDATA[
										jQuery(document).ready(function($) {		
											$('#block-tab div.content').owlCarousel({
												items: 2,
												itemsCustom: [ 
													[0, 2], 
													[480, 2], 
													[768, 3], 
													[992, 4],
													[1200,4] 
												],
												pagination: false,
												slideSpeed : 800,
												addClassActive: true,
												scrollPerPage: false,
												touchDrag: false,
												afterAction: function (e) {
													if(this.$owlItems.length > this.options.items){
														$('#block-tab .navslider').show();
													}else{
														$('#block-tab .navslider').hide();
													}
												}
												//scrollPerPage: true,
											});
											$('#block-tab .navslider .prev').on('click', function(e){
												e.preventDefault();
												$('#block-tab div.content').trigger('owl.prev');
											});
											$('#block-tab .navslider .next').on('click', function(e){
												e.preventDefault();
												$('#block-tab div.content').trigger('owl.next');
											});
										});
									//]]>
								</script> 
							</div>
						</div>
						<div class="box-right col-lg-3 col-md-3 col-sm-7 col-xs-7">
							<div class="block block-deals" id="block-deals">
								<div class="title">
									<span>deals</span>
									<div class="countdown">
										<div class="defaultCountdown"></div>
									</div>
									<script type="text/javascript"> 
										jQuery(document).ready(function($){
											var y = 2017;
											var m = 03;
											var d = 20;
											var h = 00;
											var mi =00;
											var s = 00;
											$('.defaultCountdown').countdown({    	
												until: new Date(y, m, d, h, mi, s),
												labels: ['YEA', 'MON', 'WEE', 'DAY', 'HOU', 'MIN','SEC'],
												labels1: ['YEA', 'MON', 'WEE', 'DAY', 'HOU', 'MIN', 'SEC'],     
												alwaysExpire: false,
												onExpiry: function(){
												},						
												serverSync: 'Aug 13, 2014 08:39:29 +0000'
											});
										}); 
									</script> 
								</div>
								<div class="content">
								     <?php
                                        $queryPic = "SELECT * FROM `productimage` ORDER BY id DESC LIMIT 2"; 
                                        $pic_list  = fetchData($queryPic);
                                        foreach ($pic_list as $pl) {
                                      ?>
									<div class="item">
										<div class="item-wrap">
											<div class="item-image">
												<a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
												<img alt="Product demo" src="public/upload/<?php echo $pl['name'] ?>" class="first_image"> 
												</a>
												<div class="item-btn">
													<div class="box-inner">
														<div class="left">
															<a class="link-wishlist" href="#" title="Add to wishlist">add to wishlist</a>
															<a class="link-compare" href="#" title="Add to compare">add to compare</a>
														</div>
														<div class="right">
															<span class="qview">
															<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a>
															</span>
															<a href="#" class="btn-cart" title="Add to cart">add to cart</a>
														</div>
													</div>
												</div>
											</div>
											<div class="pro-info">
												<div class="pro-inner">
													<div class="pro-title product-name"><a href="detail.php"><?php echo $pl['productName'] ?></a></div>
													<div class="pro-content">
														<div class="wrap-price">
															<div class="price-box">
																<span class="regular-price">
																<span class="price"><?php echo $pl['price']; ?></span></span>
																<p class="special-price">
																	<span class="price">$1.459.00</span>
																</p>
															</div>
														</div>
														<div class="ratings">
															<div class="rating-box">
																<div class="rating" style="width:100%"></div>
															</div>
															<span class="amount"><a href="#">1(s)</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end item wrap -->
									</div>
									<?php 
                                    }
                                    ?>
								</div>
								<div class="navslider">
									<a href="#" class="prev">Prev</a>
									<a href="#" class="next">Next</a>
								</div>
								<script type="text/javascript">
									//<![CDATA[
										jQuery(document).ready(function($) {		
											$('#block-deals div.content').owlCarousel({
												items: 1,
												itemsCustom: [ 
													[0, 1], 
													[480, 1], 
													[768, 1], 
													[992, 1],
													[1200,1] 
												],
												pagination: false,
												slideSpeed : 800,
												addClassActive: true,
												scrollPerPage: false,
												touchDrag: false,
												afterAction: function (e) {
													if(this.$owlItems.length > this.options.items){
														$('#block-deals .navslider').show();
													}else{
														$('#block-deals .navslider').hide();
													}
												}
												//scrollPerPage: true,
											});
											$('#block-deals .navslider .prev').on('click', function(e){
												e.preventDefault();
												$('#block-deals div.content').trigger('owl.prev');
											});
											$('#block-deals .navslider .next').on('click', function(e){
												e.preventDefault();
												$('#block-deals div.content').trigger('owl.next');
											});
										});
									//]]>
								</script>
								<div class="wrap-viewall">
									<div class="view-all">
										<a href="#">all deal</a>
									</div>
								</div>
							</div>
				<!--Best Sellers-->
							<div class="block wrap-bestseller" id="bestseller">
								<div class="title">
									<span>best sellers</span> 
								</div>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<a class="accordion-toggle item1 active" data-toggle="collapse" data-parent="#accordion" href="#item1">
										1
										</a> 
										<div id="item1" class="panel-collapse collapse in">
											<div class="item">
											     <?php
                                                    $queryPic = "SELECT * FROM `productimage` WHERE category = 'mobile' ORDER BY id DESC LIMIT 1"; 
                                                    $pic_list  = fetchData($queryPic);
                                                    foreach ($pic_list as $pl) {
                                                  ?>
												<div class="item-wrap">
													<div class="item-image">
														<a class="product-image no-touch" href="detail.php" title="Ipad Air and iOS7">
														<img class="first_image" src="public/upload/<?php echo $pl['name']; ?>" alt="Product demo"> 
														</a>
														<div class="item-btn">
															<div class="box-inner">
																<div class="left">
																	<a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
																	<a title="Add to compare" href="#" class="link-compare">add to compare</a>
																</div>
																<div class="right">
																	<span class="qview">
																	<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
																	</span>
																	<a title="Add to cart" class="btn-cart" href="#">add to cart</a>
																</div>
															</div>
														</div>
													</div>
													<div class="pro-info">
														<div class="pro-inner">
															<div class="pro-title product-name"><a href="detail.php"><?php echo $pl['productName']; ?></a></div>
															<div class="pro-content">
																<div class="wrap-price">
																	<div class="price-box">
																		<span class="regular-price">
																		<span class="price"><?php echo $pl['price']; ?></span></span>
																		<p class="special-price">
																			<span class="price">$1.459.00</span>
																		</p>
																	</div>
																</div>
																<div class="ratings">
																	<div class="rating-box">
																		<div style="width:100%" class="rating"></div>
																	</div>
																	<span class="amount"><a href="#">1(s)</a></span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php 
                                                    }
                                                ?>
												<!--end item wrap -->
											</div>
										</div>
									</div>
								</div>
								<div class="wrap-viewall">
									<div class="view-all">
										<a href="#">All Best Sellers</a>
									</div>
								</div>
								<script type="text/javascript">
									$('.panel-default a').click(function(e) {
									e.preventDefault();
									$('a')\.removeClass('active');
									$(this).addClass('active');
									});
								</script>
							</div>
				<!--End Best Sellers-->
                <!--Top Brand-->
							<div class="block block-brand">
								<div class="title">
									<span>Top brands</span> 
								</div>
								<div class="content">
									<div class="item frist">
									     <?php
                                                $queryPic = "SELECT * FROM `slide` WHERE category = 'brands' ORDER BY id DESC LIMIT 4"; 
                                                $pic_list  = fetchData($queryPic);
                                                foreach ($pic_list as $pl) {
                                              ?>
										<div class="item-wrap">
                                            <div class="item-image">
												<a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
												<img alt="Product demo" src="public/upload/<?php echo $pl['name']; ?>" class="first_image"> 
												</a>
											</div>
											<div class="pro-info">
												<div class="pro-inner">
													<div class="desc">
														<p><?php echo $pl['caption']; ?>-</p>
														<a class="brandphilip" href="#"><?php echo $pl['title']; ?></a>
													</div>
												</div>
											</div>
										</div>
										<?php
                                            }
                                        ?>
										<!--end item wrap -->
									</div>
									<div class="view-all">
										<a href="#">All Brands</a>
									</div>
								</div>
							</div>
				<!--End Top Brand-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end content-->
		<!--begin footer-->
		<div id="box-footer">
			<div class="box-footer-top">
				<div class="container">
					<div class="row">
						<div class="row">
							<div class="box-connect col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="block-title"><span>Connect with</span></div>
								<a href="#" class="face-book">face book</a>
								<a href="#" class="tweeter">tweeter</a>
								<a href="#" class="no-name">no-name</a>
								<a href="#" class="pinseter">pinseter</a>
								<a href="#" class="google">google+</a>
								<a href="#" class="init">init</a>
							</div>
							<div class="box-tweeter col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="block-title"><span>tweeter</span></div>
								<div class="content">
									A Complete IT Solution. 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer-middle">
				<div class="container">
					<div class="row">
						<div class="row">
							<div class="block block-cu col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="block-title"><span>GET IN TOUCH</span></div>
								<div class="block-content">
									<ul>
										<li class="item1"><span>Address: Magnolia(2nd Floor),168<br />Lalkhan Bazar (Infront of Public Health, Stuff Quarter), Chittagong</span></li>
										<li class="item2"><span>Cell:</span> <span>+88 01819-892635</span></li>
										<li class="item2"><span>Email:</span> <span>naficomputer@gmail.com</span></li>
										
									</ul>
									<div class="phone-nb"><a href="tel:031-623422">031-623422</a></div>
								</div>
                            </div>
							<div class="block block-cu col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="block-title"><span>LOCATION IN MAP</span></div>
								<div class="block-content">
                                 <!-- Set height and width with CSS -->
                                 <div id="googleMap" style="height:200px;width:100%;"></div>
                                    <!-- Add Google Maps -->
                                    <script src="http://maps.googleapis.com/maps/api/js"></script>
                                    <script>
                                    var myCenter = new google.maps.LatLng(22.348740, 91.818827);

                                    function initialize() {
                                    var mapProp = {
                                    center:myCenter,
                                    zoom:16,
                                    scrollwheel:false,
                                    draggable:false,
                                    mapTypeId:google.maps.MapTypeId.ROADMAP
                                    };

                                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                                    var marker = new google.maps.Marker({
                                    position:myCenter,
                                    });

                                    marker.setMap(map);
                                    }

                                    google.maps.event.addDomListener(window, 'load', initialize);
                                    </script>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="box-footer-bottom">
				<div class="container">
					<div class="row">
						<div class="box-left">
							<ul>
								<li class="home"><a>Nafi Computer</a></li>
								<li><a href="#">About Us   </a><span>|</span></li>
								<li><a href="#">Delivery & Returns</a><span>|</span></li>
								<li><a href="#">Terms & Conditions</a><span>|</span></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<h6>Nafi Computer &copy; 2016. All Rights Reserved. Designed by <a>Mainul Hassan</a></h6>
						</div>
				        <?php
                                $queryPic = "SELECT * FROM `slide` WHERE category = 'payment'"; 
                                $pic_list  = fetchData($queryPic);
                                foreach ($pic_list as $pl) {
                            ?>
                            <div class="box-right">
                                <ul>
                                    <li><img src="public/upload/<?php echo $pl['name'] ?>" alt="" /></li>
                                </ul>
                            </div>
				        <?php 
                            }
                        ?>
					</div>
				</div>
			</div>
			<a id="gototop">Top</a>
			<!--js-->
		</div>
		<!--end footer-->
	</body>
</html>