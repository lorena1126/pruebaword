<?php /*if (!function_exists('weblizar_info_page')) {
	function weblizar_info_page() {
	$page1=add_theme_page(__('Welcome to Weblizar', 'weblizar'), __('Pro Themes & Plugin', 'weblizar'), 'edit_theme_options', 'weblizar', 'weblizar_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'weblizar_admin_info');
	}	
}
add_action('admin_menu', 'weblizar_info_page');

function weblizar_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.css');
	//JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/menu/bootstrap.min.js');
	wp_enqueue_script('script-menu', get_template_directory_uri().'/js/menu/menu.js');
	
} 
if (!function_exists('weblizar_display_theme_info_page')) {
	function weblizar_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
		
<!-- Header -->
<div class="wrap elw-page-welcome about-wrap seting-page">
    <div class="col-md-12 settings">
        <div class="col-md-3">

			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive logo-img" alt="img"/>
		
        </div>

        <div class="col-md-9">
            <h2><span class="elw_shortcode_heading">Responsive WordPress Themes & Plugins</span></h2>
        </div>
    </div>    
            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
                    <li class="active"><a data-toggle="tab" href="#themesd"> Themes </a></li>
                    <li><a data-toggle="tab" href="#pluginsd">Plugins</a></li>
					<li><a data-toggle="tab" href="#offers">Offers</a></li>
                </ul>

                <div class="tab-content">
                    <div id="themesd" class="tab-pane fade in active">
                        <div class="space  theme active">

                            <div class=" p_head theme">
                                <h1 class="section-title">WordPress Themes</h1>

                            </div>

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">

                                      
						<img src="<?php echo get_template_directory_uri(); ?>/images/BeautySpa.jpg" class="img-responsive" alt="img"/>
					
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <h2><a href="">BeautySpa- Beauty Salon Theme</a></h2>
                                        <p><strong>Tags: </strong>Customize Front Page, Multilingual, Complete Documentation, Theme Option Panel, Unlimited Color Skins, Multiple Background Patterns, Multiple Theme Templates, 5 Portfolio Layout, 3 Page Layout and many more.</p>
                                        <div>
                                            <p><strong>Description: </strong> BeautySpa is versatile health care business WordPress theme suitable for spa, spa salon, sauna, massage , medical business, massage center, beauty center, eCommerce and beauty salon websites.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>39</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/beautyspa-premium/">Demo</a>
                                        <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/beautyspa-premium/">Buy Now</a>
                                    </div>
                                </div>
                            </div>

							
				
							
                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
                                       
						<img src="<?php echo get_template_directory_uri(); ?>/images/personal.png" class="img-responsive" alt="img"/>
					

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <h2><a href="">Personal Premium Theme </a></h2>
                                        <p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business, WordPress, dark, real estate, shop, restaurant, etc</p>
                                        <div>
                                            <p><strong>Description: </strong> Personal Premium is a powerful and flexible, customizable and extensively developed, wonderfully lightweight and mobile friendly, easy to use and intuitively structured. Personal Premium is a highly customizable and SEO friendly responsive WordPress theme you have access to unlimited color variations, multiple different layout options, shortcode modules, and much more. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>17</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/personal-premium/">Demo</a>
                                        <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/personal-premium">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/explora.jpg" class="img-responsive" alt="img"/>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <h2><a href="">Explora- Ultimate Multi-Purpose WordPress Theme</a></h2>
                                        <p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant, etc</p>
                                        <div>
                                            <p><strong>Description: </strong> Explora Premium is a multi-purpose responsive theme coded & designed with a lot of care and love. You can use it for your business, portfolio, blogging or any type of site. </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>25</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/explora-premium/">Demo</a>
                                        <a class="btn btn-success btn-lg" href="https://weblizar.com/explora-premium/">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
                                        
						<img src="<?php echo get_template_directory_uri(); ?>/images/Guardian.jpg" class="img-responsive" alt="img"/>
					

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <h2><a href="">Guardian- Corporate Business Theme</a></h2>
                                        <p><strong>Tags: </strong>Multiple Background Patterns, Rich color changer, Boxed/wide layout styles, Additional Page, WPML & Woo Commerce.</p>
                                        <div>
                                            <p><strong>Description: </strong> Guardian Premium Theme is a super professional one page WordPress theme for modern businesses. Ideal for creative agencies, startups, small businesses, and freelancers and best of all it is so easy to use that you can have your website up in minutes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>39</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/guardian-premium-theme/">Detail</a>
                                        <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/guardian-premium-theme/">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/Enigma.jpg" class="img-responsive" alt="img"/>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <h2><a href="">Enigma- Modern & Clean Designed Multi-Purpose WordPress Theme</a></h2>
                                        <p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant.</p>
                                        <div>
                                            <p><strong>Description: </strong> Enigma is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page also present.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>39</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/enigma-premium/">Detail</a>
                                        <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/enigma-premium/">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!----Plugin----->

                    <div id="pluginsd" class="tab-pane fade">
                        <div class="p_head theme">
                          
                                <h1 class="section-title">WordPress Plugins</h1>
                           
                        </div>
						<div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Clockin-Pro.jpg" class="img-responsive" alt="Clockin"/>
					

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">Clockin Portal Pro</a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>Set Your TimeZone</li>
                                            <li>Salary status (Monthly or Hourly)</li>
                                            <li>IP Restriction</li>
                                            <li>Shift Management</li>
                                            <li>Holiday Listing</li>
                                            <li>Leave Management Module</li>
											<li>Event Management Module....etc many more.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number"><span>$14</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/clockin-pro-plugin/">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/clockin-pro-plugin/">Buy Now</a>
                                </div>
                            </div>
                        </div>
                  
                        <div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-feed.jpg" class="img-responsive" alt="img"/>
					

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">Facebook Feed Pro</a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>Profile, Page & Group Feeds</li>
                                            <li>Unlimited Feeds Per Page/Post</li>
                                            <li>Light-Box Layouts</li>
                                            <li>Tons of Feed Shortcodes</li>
                                            <li>Feed Widgets</li>
                                            <li>Auto-Update Feeds......etc many more.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number"><span>$19</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/facebook-feed-pro/">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/facebook-feed-pro/">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Pinterest-Feed.jpg" class="img-responsive" alt="img"/>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">Pinterest Feed Pro</a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>Pinterest Feed Shortcode</li>
                                            <li>Responsive Pinterest Plugin</li>
                                            <li>Pinterest Feed Widget</li>
                                            <li>Pinterest Profile</li>
                                            <li>Pinterest Pin Slider</li>
                                            <li>Setting Panel</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number"><span>$18</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/pinterest-feed-pro/">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/pinterest-feed-pro/">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Search-Engine-Optimizer-new.jpg" class="img-responsive" alt="img"/>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">SEO Image Optimizer Pro </a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>WooCommerce Product Images SEO</li>
                                            <li>Auto Fill Title & Alt Tag</li>
                                            <li>Custom Title & Alt Tag</li>
                                            <li>Featured Images SEO</li>
                                            <li>Magical Reset</li>
                                            <li>Delimiter Removal</li>
                                            <li>Image Compression</li>
                                            <li>Site Speed Up</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number"><span>$11</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/seo-image-optimizer-pro">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/seo-image-optimizer-pro/">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/newsletter.png" class="img-responsive" alt="img"/>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">Newsletter Subscription Form Pro </a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>Multiple Pro Template</li>
                                            <li>News Letter Subscription</li>
                                            <li>Download Subscriber List</li>
                                            <li>Auto & Manual Notification</li>
                                            <li>Major Browser Compatible</li>
                                            <li>Multi Site and Multilingual</li>
                                            <li>Customized Form</li>
                                            <li>Forms shotcode</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number"><span>$7</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/newsletter-subscription-form-pro/">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/newsletter-subscription-form-pro/">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Comingsoon.jpg" class="img-responsive" alt="img"/>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">Coming Soon Page & Maintenance Mode Pro </a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>Coming Soon Mode</li>
                                            <li>Under Construction Mode</li>
                                            <li>Pro Templates</li>
                                            <li>News Letter Subscriptions</li>
                                            <li>Automatic Website Launch</li>
                                            <li>News Letter Subscriber Forms</li>
                                            <li>Auto & Manual Notification</li>
                                            <li>Google Analytic Tracking</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number"><span>$24</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/coming-soon-page-maintenance-mode-pro/">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/coming-soon-page-maintenance-mode-pro/">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="row p_plugin blog_gallery">
                            <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                <div class="img-thumbnail">
                                   <img src="<?php echo get_template_directory_uri(); ?>/images/responsive-pro.jpg" class="img-responsive" alt="img"/>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2><a href="">Responsive Portfolio Pro- Perfect Responsive Portfolio Plugin</a></h2>
                                    <p><strong>Features: </strong>
                                        <ul>
                                            <li>Image Hover Animation</li>
                                            <li>Number of Hover Color</li>
                                            <li>Number of Font Style</li>
                                            <li>Number of Lightbox Styles</li>
                                            <li>Drag and Drop image Position</li>
                                            <li>Multiple Image uploader and so on..</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                <div class="price">
                                    <span class="currency">USD</span>
                                    <span class="price-number">$<span>19</span></span>
                                </div>
                                <div class="btn-group-vertical">
                                    <a class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/responsive-portfolio-pro/">Demo</a>
                                    <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/responsive-portfolio-pro/">Buy Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
					
					<!--offers-->
					<div id="offers" class="tab-pane fade">
							<div class=" p_head theme">
                                <h1 class="section-title">Weblizar Offers</h1>

                            </div>
						<div class="row p_plugin blog_gallery">
						 <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
							<div class="img-thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/images/offer.jpg" class="img-responsive" alt="offer"/>

							</div>
							
						</div>
						 <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                <div class="row p-box">
                                    <h2>Get the Exciting Deals here , Daily
                                    <a class="btn btn-primary title_offers" href="https://weblizar.com/offers/">Visit Here</a> 
                                    </h2>
                                </div>
                            </div>
							</div>
					</div>
					<style>
			.title_offers {color: #f5f1f1;}
			.col-md-12.settings{
				padding:0px;
			}
			.settings .product-main-cont {
				margin: 0 auto;
				float: none;
				clear: both;
			}
			
			
                .about-wrap .p_plugin_desc h2 {
                    margin: 15px -2px 0.6em;
                    font-size: 26px;
                }
                
                .row.p-box li {
                    color: #888;
                }
                
                .form_shortcodes {
					text-align: center;
					padding: 30px;
					margin-bottom: 40px;
					background-color: #eff4f8;
					border-bottom: 2px solid #00a0d2;
					margin-top: 15px;
				}
                
                .product-tbs.nav-tabs>li {
                    float: left;
                    text-align: center;
                    margin-bottom: -1px;
                    width: 33%;
                }
                
                .form_shortcodes input {
                    border-radius: 0px;
                    height: 45px;
                }
                
                input#google_api {
                    border-radius: 0px;
                    height: 45px;
                }
                
                .row.p-box {
                    display: block;
                }
                
                .p_plugin {
                    width: 100%;
                }
                
                .about-wrap img {
                    background-color: #ffffff!important;
                }
                
                .about-wrap h2 {
                    margin: 40px 0 .6em;
                    font-size: 2em;
                    line-height: 1.3;
                    text-align: left;
                }
                
                .about-wrap h1 {
					margin:0;
                    padding: 30px 0;
                    text-align: center;
                    font-weight: bold;
                    text-shadow: 2px 2px #ccc;
                    font-size: 2.9em;
                    /* font-weight: 400; 
                }
                
                .row.p-box ul {
                    margin-left: 30px;
                }
                
                .row.p-box li {
                    list-style: initial;
                    padding: 4px;
                }
                
                .p_plugin_desc p {
                    font-size: 16px;
                    letter-spacing: 0.2px;
                    line-height: 25px;
                    color: #6d6d6d;
                }
                
                .get_link-cont {
                    margin-top: 43px;
                }
				.wrap.elw-page-welcome.about-wrap.seting-page {
					max-width: 100%;
				}				
				.seting-page .col-md-12.settings {
					margin-bottom: 6%;
					margin-top: 2%;
					box-shadow: 1px 1px 10px -1px #acaaaa;
					border-radius: 8px;
				}
				.product-tbs.nav>li.active>a, .product-tbs.nav>li>a:focus, .product-tbs.nav>li>a:hover {
					text-decoration: none;
					color: #fff!important;
					background-color: #3fb6db!important;
				}
				.logo-img{
					width: 100%;
					padding: 24px;
					height: 155px;
				}
				span.elw_shortcode_heading {
					margin: 0;
					padding: 30px 0;
					text-align: center;
					font-weight: bold;
					text-shadow: 2px 2px #ccc;
					font-size: 39px;
					color: #3eabf6;
				}
				.product-main-cont .nav-tabs > li > a {
					font-size: 20px;
				}
				.col-md-12.settings {
					padding-bottom: 187px;
				}
            </style>
                </div>
            </div>	
<?php
	}
}
?>