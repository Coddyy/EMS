
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.fasmall {
  padding: 10px;
  font-size: 11.5px;
  width: 32.5px;
  text-align: center;
  text-decoration: none;
  margin: 2.5px 1px;
  border-radius: 50%;
}
.fa {
  padding: 20px;
  font-size: 23px;
  width: 65px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa1:hover {
    opacity: 0.5;
    text-decoration: none;
    color: #FFF;
    font-size: 15px;
    padding: 24px;
	width: 65px;
	text-align: center; 
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
p {
	font-family: "Helvetica Neue";
	font-size: 18px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 21.6px;
}
	</style>
		<style type="text/css">
		.title{font-size: 26px;margin-top: 10px;font-weight: bold;}
		@media screen and (max-width: 768px){
			p.title{font-size:18px;margin-left: -5px;}
		}

		@media screen and (max-width: 768px){
			.title{font-size: 36px;margin-top: 10px;margin-left: 100px;}
		}	
			.advertise{height:360px;width: 360px;border:0px solid #999;}
			.advertise1{height:0px;}
			.desktop{visibility: visible;}
			.mobile{height: 0px;visibility: hidden;}
			@media screen and (max-width: 768px){
				.desktop{visibility: hidden;height: 0px;width: 0px;}
				.mobile{visibility: visible;height: auto;}
				.advertise1{height:360px;width: 370px;border:0px solid #999;}
			}
			
		}
	</style>

<?php foreach ($blog_details as $key) { 

	$blog_title=$key->blog_title;
	//echo $key->image_desc;
	$picture=$key->image;
	$pic="blogimage/".$picture;
?>
<!--Start Blog Container-->
	<div class="container" style="border:0px solid black;background-color: #E2E6E7;">
		<p style="" class="title" style=""><?php echo $blog_title; ?></p>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12" style="border:0px solid red;">
				<img src="<?php echo base_url($pic)?>" style="height: 360px;width: 100%;" class="img-responsive" >
			</div>
			<div class="col-md-2 col-lg-2 col-xs-12 desktop" style="border:0px solid green;">
				<div class="row" style="margin-left: 30px;"><p style="margin-left: 15px;">Follow Us</p>

					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://www.facebook.com/CADnaukri" class="fa1 fa fa-facebook"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://twitter.com/cadnaukri" class="fa1 fa fa-twitter"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://plus.google.com/+CADnaukri" class="fa1 fa fa-google"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://www.linkedin.com/company/cadnaukri-com" class="fa1 fa fa-linkedin"></a></div>
				</div>
			</div>

			<div class="col-md-4 col-lg-4 col-xs-12 desktop " style="border:0px solid green;"><p style="margin-top: -30px;margin-left: 0px;font-size: 18px;" class="small">Advertisement///</p>
				<img src="<?php echo base_url();?>assets/images/cadnaukri_blog_ad.jpg" alt="CADnaukri" class="advertise" style="" alt="CADnaukri">
				
			</div>
			<style type="text/css">
				
			</style>
			
			<span class="mobile" style="border:0px solid red;margin-left: -38px;"><?php echo $key->image_desc; ?></span>
			<div class="row mobile">
				<p style="margin-left: 32px;">Follow Us</p>
				<div class="col-xs-3 mobile"><a href="https://www.facebook.com/CADnaukri" class="fa1 fa fa-facebook"></a></div>
				<div class="col-xs-3 mobile"><a href="https://twitter.com/cadnaukri" class="fa1 fa fa-twitter"></a></div>
				<div class="col-xs-3 mobile"><a href="https://plus.google.com/+CADnaukri" class="fa1 fa fa-google"></a></div>
				<div class="col-xs-3 mobile"><a href="https://www.linkedin.com/company/cadnaukri-com" class="fa1 fa fa-linkedin"></a></div>
			</div>
		</div>
		
		<p class="desktop" style="margin-top: -50px;border:0px solid red;font-size: 16px;font-family: Garamond;"><?php echo $key->image_desc; ?></p>
		<h4>
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xs-12" style="border:0px solid red;height: 30px;font-size: 16px;font-family: Garamond;font-weight: bold;">Blogger Name:<span><?php echo $key->blogger_name; ?></span></div>
				<div class="col-md-4 col-lg-4 col-xs-12" style="border:0px solid red;height: 30px;font-size: 16px;font-family: Garamond;font-weight: bold;">Post Date:<span><?php 

					$date=explode(' ',$key->created);
					
					echo date("d F Y",strtotime($date[0])); 
				?></span></div>
			</div>
		</h4>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12">
				<h3 style="font-family: Helvetica Neue; font-weight: bold;" >Article Description : </h3>

					<p style="text-align: justify;"><?php echo $key->description; ?>
                		<span data-toggle="collapse" data-target="#view" align="right" id="h" style="color: #0055A5;cursor:progress" class="btn1">Read more..
                		</span>
            		</p>
			
            	<p id="view" class="collapse" style="text-align: justify;">
            		<!-- <?php echo $key->more_description; ?> -->
            		   <br><b style="text-align: left;">1.	Company Blogs, Financial Results, Product or Service that’s in News</b><br>
            		   Be it the company’s quarterly fin results if it were a public listed enterprise or any product that’s in the news. Way back in time when the Tatas declared the Rs.1 Lac Nano or the Mittal’s aggressive takeover of the Arcelor steel; they made news everywhere, suddenly Indians became hyper in global acquisitions that sky-rocketed their stocks overnight.<br>

Content in whatever form wins games these days and every startupbusiness poles the online world with their blog-posts about their products or services that benefits the mankind and makes a lot of money in this run. One such product that brought this world to standstill is the Apple’s iPhone and the Tesla’s electric car.<br>

There’s a very typical practice of some candidates going through the pages of the company website to know more about them or gather ideas how the company shall benefit him if he/she gets selected in the interview.<br>

My suggestion is just to assess where the company might reach after 3-5 years and how their product benefits the users and earns more in terms of gross revenues and how you can benefit them to improve their score in grey areas.<br>
<b style="text-align: left;">2.	Set Alerts</b>
<br>Google Alerts is an important tool that helps us keep a track of latest news from the companies where you are trying for a job or an interview is scheduled already. Most companies prefer well-informed employees who have a habit of keeping updated news of their own company.<br>
<b style="text-align: left;">3.	Ensure your social media timelines (Facebook/Twitter) remain clean and don’t have any posts that reflects a wrong character of yours</b><br>
With employers becoming so choosy in their new recruits that they never forget to cross-check with your various social-media profiles for any type vulgar posts or pictures. Once` a CV gets shortlisted, it has become routine task to scan profiles online to gain feedback about their candidates. It’s a very easy place to get caught if you have played some mischief either knowingly or unintentionally.<br>
<b style="text-align: left;">4.	Request for an early interview schedule</b><br>
According to some popular research avoid attending interviews on Mondays, Fridays & Saturdays; in-fact the interviewer remains packed most of the time on the above days with other official works. He/she hardly finds any time to interact with the interviewee properly to assess their actual qualities beyond any remarkable mention in the CV/resume. Therefore, try to schedule your interview early around 10:00 to 10:30 AM on Tuesdays, Wednesdays & Thursdays. They remain free till 11:30 AM after which they start their routine tasks of work-balancing, candidate search & company meetings, etc.<br>
<b style="text-align: left;">5.	Carve out a “Story-line”</b><br>
Most interviewers ask the candidates to briefly explain themselves so that the recruiter walks-along your resume to find something more interesting about your passion, goals of life. But, most of the candidates spoil it simply with crap which eventually irks him.We have often replied impromptu answers for a question like “Briefly describe you”, to which you speak withmonotonous and uninteresting facts “I am Mr. X, I am from so and place I have passed out from ABC institute and have an experience of one year…”
In this way, you always waste the 50% of the initial interview-time saying everything that’s available in the resume and tear-off important areas that could have impressed the recruiter.<br>
You should have emphasised more on why want to do this job. You leave out everything that gives meaning to why you want this job in the first place. What made you think of engineering design as a career? How you loved creating large assembly models using the 3d CAD softwares? How crazy you went on seeing the curves of a car during your school days that made dream to build a similar design as a design engineer in future. People lack such stuff which while being in front of the interviewer. This pushes the discussion to a low leaving him/her in despair; it convinces him that you are not the one who can keep the other team-members motivated to deliver their tasks efficiently. I can give an example of mine whereit turned out to be a life changer for me during the early days of my career as a CAD trainer.<br>
Being born and brought up in the capital of Bhubaneswar, which is popular for its thousands of years old temples, and mushrooming of technical institutions in the last 15 years. I came to know that most of the students after completing their technical studies here from prominent institutions, ITI’s & polytechnics flock to nearby states to gain knowledge of CAD-CAM and then look for a job in their native states. But, most often they miss out on opportunities due to lack of industry exposure in their education period itself and thus not job-ready. This gave me an immense career opportunity to train such people in engineering drawings, assembly designs, sections, etc. through cutting-edge software technologies like Creo, SolidWorks, Ansys, etc. Since, there were students but not ample trainers with the suitable quality that encouraged me to take up this profession and I started giving freelance trainings in different technical institutions as a career.<br>
Of course, I pitched differently for employers who were looking for consultant engineers for their companies where my highlights were the projects I did and not the number of students I trained. So, you must have a varied story-line for different types of employers.<br>
<b style="text-align: left;">6.	Wear your Fashion and not your Ego</b><br>
I have always believed that there is no perfect dressing for the interviews. On many occasions, we try to look unreasonably formal and in this process we lose our concentration for the interview.<br>
Most interviewers stare at the candidates in a playful mind if they are dressed in their traditional outfit; it gives a bright chance for a friendly interaction where in you can discuss something about your culture and parental upbringing and your love for your motherland.<br>
I used to carry my funky pair of sunglasses in some of the interviews and put them on the table in between, where the interviewers mockingly commented on them and gave a chance for me to share my fashion interests with them. Some of them relished very well and asked about my favourite Bollywood actors and even their own personal favourites with me. In this way, you can cut through their minds and make a positive & happy impact about yourself.<br>
<b style="text-align: left;">7.	Always expect this question “Tell me about your weaknesses”</b><br>
Get prepared to answer this question without which no interview seems to be complete in full terms. Never give any unrealistic answers like, “my parents are my weakness, or my pet is my weakness, etc.” Few people toss the coin and give blatant replies that they fully perfect. And some are so clueless that they talk about their weaknesses so openly without even realising that the interviewer was actually assessing their problem-solving abilities& the various ways they check their weaknesses.<br>
For example:<br>
Weak statement: “I lose my concentration when I fail to complete my design for the said project module”.
Optimistic statement: “Sometimes I lose my concentration on work due to some design fails. But I have learned how to tackle such situations by balancing my work-loads with my team-mates and team leader.<br>
<b style="text-align: left;">8.	Practice maketh a man perfect</b><br>
It is found that practice before any interview becomes gas when inside the chamber, which may sometimes tailspin our preparations if not rehearsed to perfection. Try to re-collect your past experiences when you have had some awkward moments in some interviews. Therefore, go through those experiences note them down to avoid any similar bad experiences. Prepare your model interview, hit your attitude and show your respect for the interviewer every time you cut through his questions and reply your answers with smartness you possess.<br>
Make three dots to work in your favour:<br>
•	Assess – Understand the present circumstances.<br>
•	Analyse - Perfect your analysis to turn the tide in your favour by swapping stories relevant to your domain, how you handled a tight situation with ease.<br>
•	React – Give a subtle reaction to the interviewers once you finish the above two dots and answer him/her to engage her with discussions which you want to continue. You may notice even the interviewer gets diverted to your topic if its well versed and described to his heart’s content.<br>
<b style="text-align: left;">9.	Be quite analytical to specific questions</b><br>
Many interviews turn towards few analytical questions to which you might not have fixed reply. Therefore, be careful in handling them and not just give a blunt reply without assessing the reasons thereof.<br>
For example: One interviewer asked “how many engineers come to Pune for a job search in product designing every year?”
Be patient to analyse and then reply after a pause of few seconds.<br>
Unreasonable answer: Replying with a pause of 40-50 seconds, you might reply 1Lac engineers.<br>
Analytical answer: Calculate for a few seconds that around 1.2 million engineers pass-out every year in India, almost 30% of them our mechanical engineers that is roughly around3-3.5 Lacs, out of them 10-12% prefer higher studies i.e almost 40,000. Almost 20-25% prepare for GATE/PSU which makes around 80000. Out of the rest 30-35% getsengaged in different organised & unorganised sectors. Therefore, around 22-25% only prefers design as a good career prospect and Pune being the R&D capital attracts nearly 60% of the engineers, which roughly makes around 45000 almost every year for employment.<br>
<b style="text-align: left;">10. Do a “one arrow and two shots”, by ask your questions</b><br>
Always develop a skill of asking questions in a positive tone at the end of your interview, in this way occasionally you get a chance in drawing the interviewer to those questions which can elaborate your qualities which might benefit the company as well. If you have some luck component to it, you may get two of your shots in that one arrow - that is, simply ask a question that might not be available elsewhere in the company website or any blog-post. It often impresses the keen interest within you to know more about the company and its business diversity or people working in certain domains which the company do not disclose in public very often. <br>
<b style="text-align: left;">11.	Be a sport in requesting for the Last Question of the Interview</b><br>
My boy, you must possess true guts for asking this- And to have this much you must develop the right attitude also.
Often, it’s found that the interviewer waits for the candidates to put forward their concerns or any topic of interest which might be beneficial for the company but, the candidates sit silently in the pursuit to be asked to leave. Instead, you should ask the recruiter whether he/she had any question for you to reply…<br>
You may try this – “Sir, do I possess the ability to work for your company and deliver the goods you expected from me?”
Sometimes, this bold but a confident yet honest question creates a sense of positivity in the interviewer for a second set of chance and ask something that you might reply correctly and with a little bit of luck you may crack the interview as well.<br>
<b style="text-align: left;">12.	Email a Personalized Thank You Note</b><br>
Develop a good habit of thanking the interviewer within 24 working hours of finishing your interview. You can email him/her by acknowledging for giving time for interacting with you. Sometimes, this small gesture impresses the interviewer and also convinces that you possess generosity for people whom you interact; it may further create a space in their mind for you if it were an interview with huge number of candidates. Occasionally, it generates a mild scope for you to remain in his/her mind even though you don’t succeed this time. So next time, upon having a new vacancy you have very high chances of an interview call once again.<br>
For example:<br>
To: hr@xyzabc.com<br>
Subject: Thank you for the opportunity<br>
Body:<br>
Hi Rashmi,<br>
Thank you very much for the time you spent for me during the interview today. The chat with shall be a memorable one where I could gain certain areas where I can improve my skills and personality to suit esteemed organisations like that of yours. It definitely, shows the employee friendly HR policies of your company are nurturing a true culture which helps its employees to developtheir professional skills very well.<br>
Wishing you good luck for the current project.<br>
Sincerely,<br>
Amit Narayan<br>
<br>











				    	<span data-toggle="collapse" data-target="#view" align="right" class="btn2" style="color: #0055A5;cursor:progress">less..</span>
				    </p>
					
            </div>
		</div>

<style type="text/css">
.fa2{font-size: 26px;}
.fa2:hover{text-decoration: none;font-size: 30px;}
</style>
		<div class="row mobile">
			<div class="col-xs-12 " style=""><img src="<?php echo base_url();?>assets/images/cadnaukri_blog_ad.jpg" alt="CADnaukri" class="advertise1" style="" alt="CADnaukri">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12" style="border: 0px solid;height: 150px;">
				<div class="col-md-4 col-lg-4 col-xs-12" style="margin-left: 0px;font-size: 18px;padding-top: 25px;text-align: ;">Share Now :</div>

				
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://www.facebook.com/CADnaukri" class="fa2 fa fa-facebook-square" style=""></a></div>

				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://twitter.com/cadnaukri" class="fa2 fa fa-twitter-square"></a></div>
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://plus.google.com/+CADnaukri" class="fa2 fa fa-google-plus"></a></div>
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://www.linkedin.com/company/cadnaukri-com" class="fa2 fa fa-linkedin-square"></a></div>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 desktop" style="border: 0px solid;">
				<h4>Comment :</h4>
				<textarea rows="5" cols="76" name="comment" form="usrform" class="desktop" >Enter text here...</textarea>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 mobile" style="border: 0px solid;">
				<h4>Comment :</h4>
				<textarea rows="5" cols="50" name="comment" form="usrform">Enter text here...</textarea>
			</div>
			
		</div>

		
<!-- Blog Bottom-->
	<style>
		div.gallery {
		    margin: 5px;
		    border: 1px solid red;
		    float:left;
		    width: 312px;
		}

		div.gallery:hover {
		    border: 1px solid blue;
		}

		div.gallery img {
		    width: 100%;
		    height: 120px;
		}

		div.des {
		    padding: 15px;
		    text-align: center;
		}

		.button {
		    background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding:10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		}

	</style>

		<!-- <div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/10.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/2.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/8.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>


		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/10.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<button class="button pull-right desktop">More Articles</button>

		<div class="row">
			<div class="col-xs-12 mobile"><img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri" class="" style="width: 100%;" alt="CADnaukri">
			</div>			
		</div>
		<button class="button pull-right mobile">More Articles</button> -->
	</div>
	<!--End Blog container-->
	<div class="container-fluid">
		<div class="footer">
		  	<a target="_blank" href="#">
		    	<img src="<?php echo base_url();?>assets/images/8.jpg" style="width: 100%;height: 120px;" alt="CADnaukri">
		  	</a>
		  	<!-- <div class="des">Banner</div> -->
		</div>
	</div>
<style type="text/css">
div.footer {
		    margin: 5px;
		    border: 1px solid red;
		    float:left;
		    width: 100%;
		}
</style>
<!--End Blog Container-->
<?php } ?> <!--End Foreach() -->
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $(".btn1").hide();
    });
    $(".btn2").click(function(){
        $(".btn1").show();
    });
});
</script>
