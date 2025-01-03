@extends('layouts.app')

@section('content')
<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Single Blog</h1>
				<ul>
					<li><a href="{{ route('home') }}">Home</a></li>
					<li> / Single Blog</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END SECTION TOP -->
	
<!-- START BLOG -->
<section class="blog-page section-padding">
	<div class="container">	
		<div class="row">
			<div class="col-lg-7 col-sm-12 col-xs-12">
				<div class="arti_single">
					<div class="arti_img_two">
						<img src="assets/images/blog/3.png" class="img-fluid" alt="Blog image" />
					</div>
					<div class="arti_content ">
						<p>I almost couldn’t believe it was real! For my first test I had generate some website copy for me. I provided about 50 words to describe my business along with my business name. generated two variants of copy each with several paragraphs of professional sounding copy. I immediately shared the results with a friend who couldn’t believe it was written by an AI. is worth every penny and then some. Describe my business along with my business name. generated two variants of copy each with several paragraphs of professional sounding copy. I immediately shared the results with a friend who couldn’t believe it was written by an AI. is worth every penny and then some!</p>
					</div>
					<div class="arti_sp">
						<h2>Enhancing Your E-commerce Store With AI Writing Assistants</h2>
						<img src="assets/images/blog/1.png" class="img-fluid" alt="Blog image" />
						<p>I immediately shared the results with a friend who couldn’t believe it was written by an AI. is worth every penny and then some. Describe my business along with my business name. generated two variants of copy each with several paragraphs of professional sounding copy. I immediately shared the results with a friend who couldn’t believe it was written by an AI. is worth every penny and then some!</p>
					</div>
					<div class="share_sp">
						<h4>Share</h4>
						<ul>
							<li><a href="#"><span class="ti-facebook"></span> Facebook</a></li>
							<li><a href="#"><span class="ti-twitter"></span> Twitter</a></li>
							<li><a href="#"><span class="ti-instagram"></span> Instagram</a></li>
							<li><a href="#"><span class="ti-linkedin"></span> Linkedin</a></li>
						</ul>
					</div>
				</div><!-- END ARTI SINGLE  -->	
				<div class="author_part">
					<h3 class="blog_head_title">About the author</h3>
					<div class="single_author">
						<img src="assets/images/blog/author.jpg" alt="" />
						<h4>Marina Mojo</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p> 
					</div>
				</div><!--- END AUTHOR PART -->
				<div class="comments_part">
					<h3 class="blog_head_title">Comments</h3>
					<div class="single_comment">
						<img src="assets/images/blog/c1.jpg" alt="" />
						<h4>Ayoub Fennouni</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div><!--- END SINGLE COMMENT -->
					<div class="single_comment sc_left">
						<img src="assets/images/blog/c3.jpg" alt="" />
						<h4>Kader Bhai</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div><!--- END SINGLE COMMENT -->
					<div class="single_comment single_comment_mbnone">
						<img src="assets/images/blog/c2.jpg" alt="" />
						<h4>Mark Linomi</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div><!--- END SINGLE COMMENT -->
				</div><!--- END COMMENTS PART -->	
				<div class="comment_form">
					<h3 class="blog_head_title">Add a Comment</h3>
					<div class="contact comment-box">
						<form id="contact-form" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" id="first-email" placeholder="Email" required="required">
								</div>
								<div class="form-group col-md-12">
									<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
								</div>
								<div class="form-group col-md-12">
									<textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
								</div>
								<div class="col-md-12">
									<div class="actions">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn_one" title="Submit Your Message!">Submit Comment</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div><!--- END COMMENT FORM -->						
			</div><!-- END COL-->		
			<div class="col-lg-5 col-sm-12 col-xs-12">
				<div class="sidebar-post">
					<div class="blog_search">
						<input type="text" class="form-control" placeholder="Type & Press Enter">
					</div>				
				</div><!-- END SINGLE POST -->
				<div class="sidebar-post">
					<div class="newsletter-form">
						<h4>Subscribe for get updates</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi my business</p>
						<form action="#" class="subscribe">
							<input type="text" class="subscribe__input" placeholder="Email Address">
							<button type="button" class="sub_btn">Subscribe</button>
						</form>
					</div>						
				</div><!-- END SINGLE POST -->
				<div class="sidebar-post">
					<div class="sidebar_title"><h4>Popular post</h4></div>
					<div class="single_popular">
						<a href="single_blog"><img src="assets/images/blog/blog-1.png" alt="" /></a>
						<h5><a href="single_blog">Supercharging Your SEO Game with AI Writing Assistants</a></h5>
					</div><!-- END SINGLE POPULAR POST -->
					<div class="single_popular">
						<a href="single_blog"><img src="assets/images/blog/blog-2.png" alt="" /></a>
						<h5><a href="single_blog">AI Writing Assistants and the Future of Content Marketing</a></h5>
					</div><!-- END SINGLE POPULAR POST -->
					<div class="single_popular">
						<a href="single_blog"><img src="assets/images/blog/blog-3.png" alt="" /></a>
						<h5><a href="single_blog">Enhancing Your E-commerce Store With AI Writing Assistants.</a></h5>
					</div><!-- END SINGLE POPULAR POST -->
					<div class="single_popular">
						<a href="single_blog"><img src="assets/images/blog/blog-4.png" alt="" /></a>
						<h5><a href="single_blog">Building your content strategy cannot get easier than this.</a></h5>
					</div><!-- END SINGLE POPULAR POST -->
					<div class="single_popular">
						<a href="single_blog"><img src="assets/images/blog/blog-5.png" alt="" /></a>
						<h5><a href="single_blog">This is the only read you would need before sitting down to prepare</a></h5>
					</div><!-- END SINGLE POPULAR POST -->	
				</div><!-- END SIDEBAR POST -->					
				<div class="sidebar-post">
					<div class="sidebar_title"><h4>Follow us</h4></div>
					<div class="single_social">
						<ul>
							<li><div class="social_item b_facebook"><a href="#" title="facebook"><i class="fa fa-facebook"></i><span class="item-list">150K Likes</span></a></div></li>
							
							<li><div class="social_item b_twitter"><a href="#" title="twitter"><i class="fa fa-twitter"></i><span class="item-list">138K Followers</span></a></div></li>
							
							<li><div class="social_item b_youtube"><a href="#" title="youtube"><i class="fa fa-youtube"></i><span class="item-list">90K Subscribers</span></a></div></li>
							
							<li><div class="social_item b_pinterest"><a href="#" title="pinterest"><i class="fa fa-pinterest"></i><span class="item-list">350K Followers</span></a></div></li>
							
							<li><div class="social_item b_tumblr"><a href="#" title="rss"><i class="fa fa-tumblr"></i><span class="item-list">901 Followers</span></a></div></li>
							
							<li><div class="social_item b_rss"><a href="#" title="rss"><i class="fa fa-rss"></i><span class="item-list">411 Followers</span></a></div></li>
						</ul>
					</div><!-- END SOCIAL MEDIA POST -->
				</div><!-- END SIDEBAR POST -->							
				<div class="sidebar-post">
					<div class="sidebar_title"><h4>CATEGORIES</h4></div>
					<div class="single_category">
						<ul>
							<li><a href="#">Education <sup>11</sup></a></li>
							<li><a href="#">Ai Content <sup>44</sup></a></li>
							<li><a href="#">New Course <sup>33</sup></a></li>
							<li><a href="#">Marketing <sup>14</sup></a></li>
							<li><a href="#">Software <sup>21</sup></a></li>
							<li><a href="#">Design <sup>01</sup></a></li>
						</ul>
					</div><!-- END SOCIAL MEDIA POST -->
				</div><!-- END SIDEBAR POST -->
				<div class="sidebar-post">
					<div class="tag">
						<div class="sidebar_title"><h4>Popular Tag</h4></div>
						<a href="#">Education</a>
						<a href="#">Course</a>
						<a href="#">Event</a>
						<a href="#">copywriting</a>
						<a href="#">Graphic</a>
						<a href="#">Clean Design</a>
						<a href="#">Digital Marketing</a>
						<a href="#">All project</a>
						
					</div>					
				</div>					
				<div class="sidebar-post">
					<div class="sidebar_title"><h4>Ad Banner</h4></div>
					<div class="sidebar-banner">
						<a href="#"><img src="assets/images/blog/banner.jpg" class="img-fluid" alt="" /></a>
					</div><!-- END SOCIAL MEDIA POST -->
				</div><!-- END SIDEBAR POST -->		
			</div><!--- END COL -->					
		</div><!-- END ROW-->
	</div><!-- END CONTAINER-->
</section>
<!-- END BLOG -->	
@endsection