<?php
    $conn = mysql_connect('localhost', 'root', 'rajeev');    
    if(!$conn)
    { 
        echo "connection failed";
    }
    $connected = mysql_select_db("Ryan", $conn);
    $query = "select main_menu from page_content";
    $result = mysql_query($query);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ryne Global School</title>
		<link rel="stylesheet" type="text/css" href="css/site.css">
	</head>
	<body>
		<header>
			<div id="logo">
				<img src="images/logo.gif"  alt="logo" />
			</div>
			<div id="toprightnav">
				<ul>
					<li>
						<a href="#" title="Ryan Group">Ryan Group</a>
					</li>
                    <li>
                        |
                    </li>
					<li>
						<a href="#" title="Ryan International">Ryan International</a>
					</li>
                    <li>
                        |
                    </li>
					<li>
						<a href="#" title="Careers">Careers</a>
					</li>
                    <li>
                        |                 
                    </li>
					<li>
						<a href="#" title="Support">Support</a>
					</li>
				</ul>
			</div>
			<div class="fix">
			</div>
		</header>
		<nav>
            <?php                
                while($row = mysql_fetch_array($result))
                {
                    $menu = $row['main_menu']; ?>
                    <a href="#" title="home"><?php echo $menu ?></a>
                <?php }
            ?>
  			  			
		</nav>
		<section>
			<div id="slider">
				<ul id="slider_list">
					<li>
						<a href="#" title="img1"><img id="img_1" src="images/slider_pic.jpg" alt="img1" /></a>
					</li>
					<li>
						<a href="#" title="img1"><img id="img_1" src="images/slider_pic.jpg" alt="img1" /></a>
					</li>
					<li>
						<a href="#" title="img1"><img id="img_1" src="images/slider_pic.jpg" alt="img1" /></a>
					</li>
					<li>
						<a href="#" title="img1"><img id="img_1" src="images/slider_pic.jpg" alt="img1" /></a>
					</li>
				</ul>
				<div class="controler">
					<div class="prev"><a href="#" title="prev"><</a></div>
					<ul class="pager">
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
					</ul>
					<div class="next"><a href="#" title="next">></a></div>
				</div>
			</div>
			<div class="clearfix">
			<aside>
				<div class="admission">
					<p id="admission_p1">Admissions 2013-2014</p>
					<p id="admission_p2">Form will be available from</p>
					<p id="admission_p3">10<sup>th</sup> September to 5<sup>th</sup> October</p>
					<p id="admission_p4">Last date for the form submission</p>
					<p id="admission_p5">5<sup>th</sup> October</p>
					<hr style="width: 70%" />
					<p id="admission_p6">For further admission queries,</p>
					<p id="admission_p7">xyz@ryangroup.com</p>
					<p id="admission_p8">91-22-61033222</p>
					<hr style="width: 50%" />

					<button id="submit" type="submit">Register</button>
				</div>
			</aside>
			<article>
				<div id="article_1">
					<div><img alt="news_icon" src="images/icon_news.gif" id="img_news" /></div>
				<div class="activity">
						<h1>news & announcements <a class="more" href="#" title="more">more</a></h1>
					<div class="activity_slider">
						<ul>
						<li>
						<p style="font: 14px bold Arial;">ITC Classmate Event held at Ryan International School</p>
						<p style="font-size: 14px;">ITC Classmate organized an event at RIS Malad. Actress Soha Ali Khan was the chief guest on the occasion.</p>
						<a class="read_more" href="#" title="read more">Read More</a>
						</li>
						</ul>
						<div class="prev1">
							<a href="#" title="prev"><img src="images/arrow_lt.gif" alt="img1"/></a>
						</div>
						<div class="next1">
							<a href="#" title="next"><img src="images/arrow_rt.gif" alt="img1" /></a>
						</div>
					</div>
				</div>
				</div>
				<div id="article_2">
					<div><img alt="awards_icon" src="images/icon_awards.gif" id="img_awards" /></div>
				<div class="activity">					
						<h1>awards & recognitions <a class="more" href="#" title="more">more</a></h1>					
					<div class="activity_slider">
						<ul>
						<li>
						<p style="font: 14px bold Arial;">Over 200 Ryan Students Visited NASA in 2012</p>
						<p style="font-size: 14px;">Over 200 students from the Ryan Group visited the NASA Station to experience scientific...</p>
						<a class="read_more" href="#" title="read more">Read More</a>
						</li>
						</ul>
						<div class="prev1">
							<a href="#" title="prev"><img src="images/arrow_lt.gif" alt="img1"/></a>
						</div>
						<div class="next1">
							<a href="#" title="next"><img src="images/arrow_rt.gif" alt="img1" /></a>
						</div>
					</div>
				</div>
				</div>
			</article>
			</div>
			<div id="gallery" >
				<div>
					<img alt="gallery_icon" src="images/icon_gallery.gif" id="img_gallery"></div>
						<h1 id="gallery_title">gallery</h1>
				<div id="gallery_pic">
					<ul>
						<li>
							<a href="#" title="gallery"><img src="images/gallery_pic1.jpg" alt="gallery_pic1" /></a>
						</li>
						<li>
							<a href="#" title="gallery"><img src="images/gallery_pic2.jpg" alt="gallery_pic2" /></a>
						</li>
						<li>
							<a href="#" title="gallery"><img src="images/gallery_pic3.jpg" alt="gallery_pic3" /></a>
						</li>
						<li>
							<a href="#" title="gallery"><img src="images/gallery_pic3.jpg" alt="gallery_pic3" /></a>
						</li>
					</ul>
					<div class="prev2">
							<a href="#" title="prev"><img src="images/arrow_lt.gif" alt="img1"/></a>
						</div>
						<div class="next2">
							<a href="#" title="next"><img src="images/arrow_rt.gif" alt="img1" /></a>
						</div>
				</div>
				</div>
			
		</section>
		<footer>
			<div class="reference">
				<div>
					<ul>
						<li>
							<a id="reference_head1" href="#">about us</a>
						</li>
						<li>
							<a href="#">The Group</a>
						</li>
						<li>
							<a href="#">The Management</a>
						</li>
						<li>
							<a href="#">Career</a>
						</li>
						<li>
							<a href="#">Location</a>
						</li>
						<li>
							<a href="#">Future Plan</a>
						</li>
						<li>
							<a href="#">School Song</a>
						</li>
					</ul>
				</div>
				<div>
					<ul>
						<li>
							<a id="reference_head2" href="#" >other links</a>
						</li>
						<li>
							<a href="#">Events</a>
						</li>
						<li>
							<a href="#">Curriculum</a>
						</li>
						<li>
							<a href="#">Seminars</a>
						</li>
						<li>
							<a href="#">News</a>
						</li>
						<li>
							<a href="#">Admissions</a>
						</li>
						
					</ul>
				</div>
				<div>
					<ul>
						<li>
							<a id="reference_head3" href="#">office</a>
						</li>
						<li>
							<p>Ryan International Group of Institutions
                                <br>
                                Aeneam blandit, auctor ullamcorper.
                                <br>
                                Mauris eu enim vitae tellu
                                <br>
                                ultrices vultrices vulputate in ac nibh.</p>
						</li>
					</ul>
				</div>
				<div>
					<ul>
						<li>
							<a id="reference_head4" href="#">connect with us</a>
						</li>
						<li>
							<p>For more information related to academics, admissions, <br> student life or any other query, you can get in touch:</p>
						</li>
						<li>
							<div id="connect">
								<div style="float: left; width: 160px;">
								    <input type="text" placeholder="Name">
                                    <input type="text" placeholder="E-mail">
                                    <input type="text" placeholder="Subject">	
								</div>
								<div style="float: right; width: 160px; padding-left: 5px; padding-top: 5px;">
			                        <textarea></textarea>
                                    <input type="submit" value="Send" id="send">
					            </div>
								<div class="fix">
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="copy_right">
				<div style="float: left;">
					<p style="font: 14px arial; color: #251474;">@ 2012. Ryan International Group of Institutions. All Rights Reserved</p>
				</div>
				<div style="float: right;">
					<ul>
						<li>
							<a style="color: #038FDE; font: 14px arial;" href="#">Privacy Policy </a>
						</li>
                        <li>
                            |
                        </li>
						<li>
							<a href="#" style="color: #038FDE; font: 14px arial;">Terms & Condition</a>
						</li>
					</ul>
				</div>
				<div class="fix">
				</div>
			</div>
		</footer>
	</body>
</html>