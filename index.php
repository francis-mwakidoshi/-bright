 <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from liniacle.com/backup/projects/essywriters/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2017 12:43:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
	<title>Sign Up  / Log In -Brightessaywriters.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/monthly.js"></script>
	<script type="text/javascript" src="js/linkify.js"></script>
	<script src="js/liniacle.js"></script>

    <link href="../../../../fonts.googleapis.com/css055a.css?family=Ceviche+One|Chewy|Creepster|Freckle+Face|Pattaya|Rock+Salt" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel = "stylesheet" type = "text/css" href = "css/Style.css" />

	<style>
table.table1 th {
    border: 1px solid black;
    padding: 20px;
    background-color: #2196f3;
}
table.table1 td {
    border: 1px solid black;
    padding: 20px;
}
table.table1  {
    background-color: #2196f3;
}
table.table2 th  {
    background-color: #2196f3;
    padding: 20px;
}
table.table2 td {
    padding: 20px;
}

</style>
</head><!--/head-->
<script>
$(function(){
	$(".draggable").draggable();
});
</script>
<body page_name="home_page">
 <header class="header col-sm-12  no_padding" id="header">
    <section class="container">
        <div class=" col-sm-12 logedTop no_padding">
            <a href=" " class="logo" style="text-decoration:none;">
               <img src="images/logo.png" id="logo_img">
            </a>
            <ul class="userMenu no_padding" id="MenuList">

 <li>
  <a href="javascript:;" class="logOut"  id="log_out_btn" name="logout">
  <i class="glyphicon glyphicon-home"> </i>
  Homepage
  </a>
</li>
<li>
  <a href="About.php">
     ABOUT US
  </a>
</li>
<li>
  <a href="how.php">
   HOW IT WORKS
  </a>
</li>
<li>
  <a href="prices.php">
  OUR PRICES
  </a>
</li>
<li>
  <a href="faq.php">
   FAQS
  </a>
</li>
<li>
  <a href="contact.php">
   CONTACT US
  </a>
</li>
<li>
  <a href="brightessaywritters.net">
   BLOG
  </a>
</li>
            </ul>
        </div>
    </section>
</header>
<section class="col-sm-12 no_padding" id="site_content">
	<div class="blocks sliderBlockWide col-sm-12" id="LogInPage">
	 <div class="col-sm-12 wrap" >
<div class="col-sm-2"></div>
	<div class=" col-sm-4">
	<div class="sign_up col-sm-12">
		 <h3 class="form_big_lbls">Place Your Order Here</h3>
	</div>
	 <!--place order module module-->
	 <style>
.order_focus{
	position: absolute;
    margin-top: -27%;
    left: 72%;
    z-index: 100;
    height: 28%;
    box-shadow: 0px 0px 7px #8c8888;
    font-size: 10px;
    font-weight: bold;
    color: #666;
}
#close_desc{
	color:#f00;
}
#file_attachment{
	padding: 0px;
    width: 68px;
    margin: 1px;
    font-size: 9px;
    border-radius: 4px;
    background: #e6e3e3;
}
</style>
<script>
 $(document).ready(function(){

   /*lpre_order_form_order_type click*/
   $(".selTextRound").change(function(){
	   var id= $( this ).attr("id");
	   var input_value= this . value;
	   var option = $("#"+id+" option[value='"+ input_value +"']").text();
        $("#"+id) . next()  .text(option) ;
   });
    $("#order_description").focus(function(){
	    $(this).addClass(' order_focus ')
    })
	$("#order_description").change(function(){
	    $(this).removeClass(' order_focus ')
    });
	$(".selTextRound,.aboutUH").click(function(){
		$("#order_description").removeClass(" order_focus ")

	});
 });



 /*form calender*/
 $(document).ready(function(){

	$('#mycalendar').monthly({
			mode: 'event',
			xmlUrl: 'events.xml'
		});

		$('#mycalendar2').monthly({
			mode: 'picker',
			target: '#mytarget',
			setWidth: '100%',
			startHidden: true,
			showTrigger: '#mytarget',
			stylePast: true,
			disablePast: false,
			disablefuture: false
		});

     $(".m-d ,.monthly-day,.monthly-day-pick").click(function(){
		   var selected_date=$("#mytarget").val();
		   $("#mycalendar2,#close_calender").hide();

     });
	 $(".hasDatepicker").click(function(){
		 $("#mycalendar2,#close_calender").show();
      });

	  $(".close_x").click(function(){
		  var id=this . id;
		  $("#mycalendar2,#"+id).hide();
	  });

	  //show overly
	 $("#pre_order_form_order_pages").change(function(){
		  var pages=$( this ).val();
		  var new_val= pages * 1 * 275;
		  $("#order_form_words").text(new_val);
	});
	function getTotal(pages,level){
		   var total= Math .round(pages*1 * level *100)/100;
		   $("#auto_total_cost").text(total);
	}
	function  Culcurate(pages ,Days ,level){
		var Total;

		if(Days>=30)
		{
			switch (level){
				case "HighSchool" : getTotal(pages,7); break;
				case "College" : getTotal(pages,8); break;
				case "University" : getTotal(pages,9); break;
				case "Masters" : getTotal(pages,9); break;
				case "PHD" : getTotal(pages,9); break;
				default :alert("rates calurator failed , continue anyway");
			}

		}
		else if(Days >= 20 &&  Days <= 29)
		{
			switch (level){
				case "HighSchool" : getTotal(pages,7.5); break;
				case "College" : getTotal(pages,8.5); break;
				case "University" : getTotal(pages,10); break;
				case "Masters" : getTotal(pages,10); break;
				case "PHD" : getTotal(pages,11); break;
				default :alert("rates calurator failed , continue anyway");
			}

		}
		else if(Days >= 10 &&  Days <=19)

		{
			switch (level){
				case "HighSchool" : getTotal(pages,11); break;
				case "College" : getTotal(pages,12); break;
				case "University" : getTotal(pages,13); break;
				case "Masters" : getTotal(pages,13.5); break;
				case "PHD" : getTotal(pages,13.5); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else if(Days >= 7 &&  Days <=9)
		{
			switch (level){
				case "HighSchool" : getTotal(pages,15); break;
				case "College" : getTotal(pages,15.5); break;
				case "University" : getTotal(pages,16); break;
				case "Masters" : getTotal(pages,16); break;
				case "PHD" : getTotal(pages,16); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else if(Days >= 4 &&  Days <=6){
			switch (level){
				case "HighSchool" : getTotal(pages,16); break;
				case "College" : getTotal(pages,17); break;
				case "University" : getTotal(pages,17.5); break;
				case "Masters" : getTotal(pages,17.75); break;
				case "PHD" : getTotal(pages,17.99); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else if(Days >= 2 && Days <= 3){
			switch (level){
				case "HighSchool" : getTotal(pages,18); break;
				case "College" : getTotal(pages,20); break;
				case "University" : getTotal(pages,22); break;
				case "Masters" : getTotal(pages,23.5); break;
				case "PHD" : getTotal(pages,25); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else if(Days >= 1 &&   Days<= 2){
			switch (level){
				case "HighSchool" : getTotal(pages,18.5); break;
				case "College" : getTotal(pages,22); break;
				case "University" : getTotal(pages,23.5); break;
				case "Masters" : getTotal(pages,24); break;
				case "PHD" : getTotal(pages,27); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else if(Days >= 0.5 &&  Days <= 0.9){
			switch (level){
				case "HighSchool" : getTotal(pages,24); break;
				case "College" : getTotal(pages,25); break;
				case "University" : getTotal(pages,26); break;
				case "Masters" : getTotal(pages,228); break;
				case "PHD" : getTotal(pages,28); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else if(Days >= 0.25  &&  Days<= 0.49 ){
			switch (level){
				case "HighSchool" : getTotal(pages,30); break;
				case "College" : getTotal(pages,31); break;
				case "University" : getTotal(pages,31); break;
				case "Masters" : getTotal(pages,33); break;
				case "PHD" : getTotal(pages,33); break;
				default :alert("rates calurator failed , continue anyway");
			}
		}
		else{

		}

	}

	 $(".auto_culcurate_rates").focusout(function(){
	    var level=$("#writer_level").val();
		var pages=$("#pre_order_form_order_pages").val();
			  var OneDay=24*60*60*1000;
			  var today=new Date();
			  var EndDate=$("#mytarget").val()
			  var endDate=new Date(EndDate);
			  var diff=new Date(endDate-today);
		      var Days=Math . round(diff/1000/60/60/24*100)/100;
			  Culcurate(pages ,Days+1 ,level);

	 });


  function show_overly(return_val){
		       $(".overlay").show();
			   $("#modal_body").html(''+return_val+'').css({"text-align":"center","margin":"0px auto","font-weight":"bold"});
	  }
	  $("#OrderSignUpbtn").click(function(){
		 $("#option_status").val("verify_user");
		  var loader=$.trim($("#feltch_loader").html());
		  var paper_type=$.trim($("#pre_order_form_order_type").val());
		  var subject =$.trim($("#pre_order_form_order_subject").val());
		  var topic=$.trim($("#pre_order_form_order_topic").val());
		  var pages=$.trim($("#pre_order_form_order_pages").val());
		  var end_date=$.trim($("#mytarget").val());
		  var deadline=$.trim($("#pre_order_form_order_deadline_time").val());
		  var client_name=$.trim($("#pre_order_form_order_client_name").val());
		  var email=$.trim($("#pre_order_form_order_client_email").val());

		  var writer_level=$.trim($("#writer_level").val());
		  var format=$.trim($("#citation_format").val());
		  var file_attachment=$.trim($("#file_attachment").val());
		  var description=$.trim($("#order_description").val());


		   if(paper_type.length==0){
			   show_overly('paper type required!!!');
		   }else if(subject.length==0){
			   show_overly('paper subject needed');
		   }else if(topic.length==0){
			   show_overly('enter the topic');
		   }else if(pages.length==0){
			   show_overly('number of pages needs');
		   }else if(deadline.length==0){
			   show_overly('specify deadline please');
		   }else if(description.length==0){
			   show_overly('Description required!!!');
		   }else if(end_date.length==0){
			   show_overly('specify deadline date');
		   }else if(client_name.length==0){
			   show_overly('your name is required');
		   }else if(email.length==0){
			   show_overly('enter your email to receive your account password , you will be required to log in to manage your orders next time.');
		   }else if(!validateEmail(email)){
			   show_overly('Encorrect email.Type your active email.');
		   }else{
				   show_overly( loader +'<h3><br> ...saving ...please wait.');
					$("#pre_order_form").ajaxForm(
						{
						target:'#modal_body',
						success:function(){
							 //var status=$.trim($("#modal_body").text());
							 // if(status=="success"){ }else{ }
						}
						}).submit();
		   }

	  });


});
</script>

<form target="_parent" class="col-sm-12" id="pre_order_form" action="http://liniacle.com/backup/projects/essywriters/modules/sendorder/sendordermodule.php" method="POST" enctype="multi-part/formdata">
			      <table class="formTableUH col-sm-12" >
						<tbody>
						<tr>
							<td>
								<label for="pre_order_form_order_type">Paper Type:</label>
							</td>
							<td>
								<div class="select-wrapper">
									<select id="pre_order_form_order_type" name="paper_type" class="selTextRound select" style="z-index: 10; opacity: 0;">
									   <option value="">Select Type of paper</option>
									   <option value="Essay (any type)">Essay (any type)</option>
									   <option value="Admission Essay">Admission Essay</option>
									   <option value="Annotated Bibliography">Annotated Bibliography</option>
									   <option value="Argumentative Essay">Argumentative Essay</option>
									   <option value="Article Review">Article Review</option>
									   <option value="Book/Movie Review">Book/Movie Review</option>
									   <option value="Business Plan">Business Plan</option>
									   <option value="Case Study">Case Study</option>
									   <option value="Coursework">Coursework</option>
									   <option value="Creative Writing">Creative Writing</option>
									   <option value="Critical Thinking">Critical Thinking</option>
									   <option value="Presentation or speech">Presentation or speech</option>
									   <option value="Research Paper">Research Paper</option>
									   <option value="Research Proposal">Research Proposal</option>
									   <option value="Term Paper">Term Paper</option>
									   <option value="Thesis/Dissertation Chapter">Thesis/Dissertation Chapter</option>
									   <option value="Other">Other</option>
									 </select>
									  <span class="select" style="color: rgb(177, 169, 187);">Select Type of paper</span>
									</div>
								<div class="errorText"></div>
							</td>
						</tr>
						<tr>
							<td>
								<label for="pre_order_form_order_subject">Subject:</label>
							</td>
							<td>
								<div class="select-wrapper">
									<select id="pre_order_form_order_subject" name="subject" class="selTextRound select" style="z-index: 10; opacity: 0;">
									<option value="">Select Subject area</option>
									<option value="Accounting">Accounting</option>
									<option value="Advertising">Advertising</option>
									<option value="Aeronautics">Aeronautics</option>
									<option value="African-American Studies">African-American Studies</option>
									<option value="Agricultural Studies">Agricultural Studies</option>
									<option value="Alternative Medicine">Alternative Medicine</option>
									<option value="American History">American History</option>
									<option value="American Literature">American Literature</option>
									<option value="Anthropology">Anthropology</option>
									<option value="Antique Literature">Antique Literature</option>
									<option value="Application Essay">Application Essay</option>
									<option value="Architecture">Architecture</option>
									<option value="Art">Art</option>
									<option value="Asian Literature">Asian Literature</option>
									<option value="Asian Studies">Asian Studies</option>
									<option value="Astronomy">Astronomy</option>
									<option value="Aviation">Aviation</option>
									<option value="Biology">Biology</option>
									<option value="Business">Business</option>
									<option value="Canadian Studies">Canadian Studies</option>
									<option value="Case Study">Case Study</option>
									<option value="Chemistry">Chemistry</option>
									<option value="Communication Strategies">Communication Strategies</option>
									<option value="Communications and Media">Communications and Media</option>
									<option value="Company Analysis">Company Analysis</option>
									<option value="Computer Science">Computer Science</option>
									<option value="Creative Writing">Creative Writing</option>
									<option value="Criminology">Criminology</option>
									<option value="Dance">Dance</option>
									<option value="Design Analysis">Design Analysis</option>
									<option value="Drama">Drama</option>
									<option value="E-Commerce">E-Commerce</option>
									<option value="East European Studies">East European Studies</option>
									<option value="Economics">Economics</option>
									<option value="Education">Education</option>
									<option value="Education Theories">Education Theories</option>
									<option value="Engineering">Engineering</option>
									<option value="English">English</option>
									<option value="English Literature">English Literature</option>
									<option value="Environmental Issues">Environmental Issues</option>
									<option value="Ethics">Ethics</option>
									<option value="Finance">Finance</option>
									<option value="Geography">Geography</option>
									<option value="Geology">Geology</option>
									<option value="Healthcare">Healthcare</option>
									<option value="History">History</option>
									<option value="Holocaust">Holocaust</option>
									<option value="International Affairs/Relations">International Affairs/Relations</option>
									<option value="Internet">Internet</option>
									<option value="Investment">Investment</option>
									<option value="IT Management">IT Management</option>
									<option value="Journalism">Journalism</option>
									<option value="Latin-American Studies">Latin-American Studies</option>
									<option value="Law">Law</option>
									<option value="Legal Issues">Legal Issues</option>
									<option value="Linguistics">Linguistics</option>
									<option value="Literature">Literature</option>
									<option value="Logistics">Logistics</option>
									<option value="Management">Management</option>
									<option value="Marketing">Marketing</option>
									<option value="Mathematics">Mathematics</option>
									<option value="Medicine and Health">Medicine and Health</option>
									<option value="Movies">Movies</option>
									<option value="Music">Music</option>
									<option value="Native-American Studies">Native-American Studies</option>
									<option value="Nature">Nature</option>
									<option value="Nursing">Nursing</option>
									<option value="Nutrition">Nutrition</option>
									<option value="Painting">Painting</option>
									<option value="Pedagogy">Pedagogy</option>
									<option value="Pharmacology">Pharmacology</option>
									<option value="Philosophy">Philosophy</option>
									<option value="Physics">Physics</option>
									<option value="Political Science">Political Science</option>
									<option value="Psychology">Psychology</option>
									<option value="Public Relations">Public Relations</option>
									<option value="Religion and Theology">Religion and Theology</option>
									<option value="Shakespeare Studies">Shakespeare Studies</option>
									<option value="Sociology">Sociology</option>
									<option value="Sport">Sport</option>
									<option value="Teacher's Career">Teacher's Career</option>
									<option value="Technology">Technology</option>
									<option value="Theatre">Theatre</option>
									<option value="Tourism">Tourism</option>
									<option value="Trade">Trade</option>
									<option value="Web design">Web design</option>
									<option value="West European Studies">West European Studies</option>
									</select>
									<span class="select" style="color: rgb(177, 169, 187);">Select Subject area</span>
									</div>
								<div class="errorText"></div>
							</td>
						</tr>
						<tr>
							<td>
								<label for="pre_order_form_order_name">Topic:</label>
							</td>
							<td>
								<input type="text" id="pre_order_form_order_topic" name="topic" maxlength="255" placeholder="What is it about?" class="inputTextRound aboutUH">
								<div class="errorText"></div>
							</td>
						</tr>
						<tr>
							<td>
								<label>Format/Citation:</label>
							</td>
							<td>
								<div class="untilInputWrap">
									<div id="pre_order_form_order_deadline">
									<div class="select-wrapper customSelGum until">
										<select id="citation_format" name="format" class="inputTextRound untilInputL selTextRound select" style="z-index: 10; opacity: 0;">
											<option value="MLA">MLA</option>
											<option value="APA" selected>APA</option>
											<option value="Chicago/Turabian">Chicago/Turabian</option>
											<option value="Others">Others</option>
										</select>
									   <span class="select" style="color: rgb(177, 169, 187);">MLA</span>
									 </div>
								</div>
								<div class="errorText"></div>
							</td>
						</tr>
						<tr>
							<td>
								<label for="pre_order_form_order_pages">Pages:</label>
							</td>
							<td>
								<div>
									<input type="text" id="pre_order_form_order_pages" role="pages" name="pages" class="inputTextRound lengthUH auto_culcurate_rates" value="1">(<span id="order_form_words">275</span> Words)
									<div class="helpEl tooltipCss bidTotal">
										<div class="tooltipCustomMobile">
											Specify number of pages your paper should contain.
										</div>
									</div>
								</div>
								<div class="errorText"></div>
							</td>
						</tr>

						<tr>
							<td>
								<label>Writer Level:</label>
							</td>
							<td>
								<div class="untilInputWrap">
									<div id="pre_order_form_order_deadline">
									<div class="select-wrapper customSelGum until">
										<select id="writer_level" name="writer_level" role="level" class="inputTextRound untilInputL selTextRound select auto_culcurate_rates" style="z-index: 10; opacity: 0;">
											<option value="PHD">PHD</option>
											<option value="Masters">Masters</option>
											<option value="University" selected>University</option>
											<option value="College">College</option>
											<option value="HighSchool">HighSchool</option>
										</select>
									   <span class="select" style="color: rgb(177, 169, 187);">University</span>
									 </div>
								</div>
								<div class="errorText"></div>
							</td>
						</tr>

						<tr>
							<td>
								<label>Until:</label>
							</td>
							<td>
								<div class="untilInputWrap">
									<div id="pre_order_form_order_deadline">
									<div class="select-wrapper customSelGum until">
									<select id="pre_order_form_order_deadline_time" role="deadline" name="deadline_time" class="inputTextRound untilInputL selTextRound auto_culcurate_rates select" style="z-index: 10; opacity: 0;">
									    <option value="00:01 AM" selected>00:01 AM</option>
										<option value="01:00 AM">1 AM</option>
										<option value="02:00 AM">2 AM</option>
										<option value="03:00 AM">3 AM</option>
										<option value="04:00 AM">4 AM</option>
										<option value="05:00 AM">5 AM</option>
										<option value="06:00 AM">6 AM</option>
										<option value="07:00 AM">7 AM</option>
										<option value="08:00 AM">8 AM</option>
										<option value="09:00 AM">9 AM</option>
										<option value="10:00 AM">10 AM</option>
										<option value="11:00 AM">11 AM</option>
										<option value="12:00 PM">11:59 AM</option>
										<option value="01:00 PM">1 PM</option>
										<option value="02:00 PM">2 PM</option>
										<option value="03:00 PM">3 PM</option>
										<option value="04:00 PM">4 PM</option>
										<option value="05:00 PM">5 PM</option>
										<option value="06:00 PM">6 PM</option>
										<option value="07:00 PM">7 PM</option>
										<option value="08:00 PM">8 PM</option>
										<option value="09:00 PM">9 PM</option>
										<option value="10:00 PM">10 PM</option>
										<option value="11:00 PM">11 PM</option>
									</select>
										<span class="select" style="color: rgb(177, 169, 187);">00:01 AM</span>
										</div>
										<input type="text"   value="2017/04/03" id="mytarget" name="deadline_date" class="auto_culcurate_rates inputTextRound  untilInputR hasDatepicker" placeholder="Date"  style="z-index: 15; opacity: .46677;">
									  <span class="close_x" id="close_calender">x</span>
									</div>

									<div class="monthly " id="mycalendar2"></div>
								</div>
								<div class="errorText"></div>
							</td>
						</tr>
						<tr>
						  <td></td>
						  <td><h3 class="auto_price_lbl">Total Cost = $ <span id="auto_total_cost">9.00</span></h3></td>
						</tr>
						<tr>
							<td>
								<label for="pre_order_form_order_client_name">Description:</label>
							</td>
							<td>
									<textarea id="order_description" name="description" maxlength="255" style="width: 138px;" placeholder="Description?" class="inputTextRound "></textarea>
									<input type="file" id="file_attachment" name="file_attachment">
									<div class="errorText"></div>

							</td>
						</tr>
						<tr>
							<td>
								<label for="pre_order_form_order_client_name">Name:</label>
							</td>
							<td>
								<input type="text" id="pre_order_form_order_client_name" name="client_name" maxlength="255" placeholder="Your Name?" class="inputTextRound aboutUH">
								<div class="errorText"></div>
							</td>
						</tr>
						<tr>
							<td>
								<label for="pre_order_form_order_name"> Email:</label>
							</td>
							<td>
								<input type="text" id="pre_order_form_order_client_email" name="client_email" maxlength="255" placeholder="To receive log in password ?" class="inputTextRound aboutUH">
								<div class="errorText"></div>
							</td>
						</tr>

					    <tr>
							<td>
							</td>
							<td>
								<div class="duplexButtonOrangeWrap">
									<input type="button" value="Place an order  & Get Started" id="OrderSignUpbtn" name="preCreateOrder" class="btn signup_btn">
								</div>
							</td>

						</tr>

					</tbody>
					</table>
						<input type="text"  class="not_shown" name="option_status" id="option_status" value="verify_user">
						<input type="text"  class="not_shown" name="randowm_pass" id="randowm_pass" value="verify_user">
						<input type="text"  class="not_shown" name="carry_country" id="carry_country" value="">
				</form>
				            	</div>
	<div class="col-sm-1">
	   <h1 class="big_or col-sm-12 mobile_in_mobile">Or</h1>
	</div>
	<div class="textUH col-sm-4">
	 <!--login module-->
	   <script>
 $(document).ready(function(){
	 var email=getCookie('emailNew');
	 var pass=getCookie('passwordNew');

	  $("#logInEmail").val(email);
	  $("#LogInPassword").val(pass);

	/*reset password*/
   $("#forgot_pas_btn").click(function(){
	   $(".form_page").hide();
	   $("#forgot_pass_form").addClass("animated fadeIn").show();
   });
    //show overly
  function show_overly(return_val){
	      if(return_val=="hide"){
			  $(".overlay").hide();
		  }else{
		       $(".overlay").show();
			   $("#modal_body").html(''+return_val+'').css({"text-align":"center","margin":"0px auto","font-weight":"bold"});
		  }
	  }
   /*send password to email*/
   $("#remind_pass").click(function(){
	     var loader=$.trim($("#feltch_loader").html());
	     var email=$.trim($("#forgot_password_email").val());
		 if(email.length==0){
			  show_overly("Enter your email where your password will be sent.");
		 }else{
			 show_overly(loader+" sending... password ...wait..");
			 $.get("modules/LogInModule/RemindPassword.html",{
				 email:email
			 },function(data,status){
				 show_overly(data);
			 });
		 }
   });
   /*back to log in form*/
   $("#back_to_logIn_btn").click(function(){
	    $(".form_page").hide();
	    $("#login_form").show();
   });
   $("#LogInPassword").change(function(){

   });

   /*log in button click*/
   $("#login_btn").click(function(){

	   var email=$.trim($("#logInEmail").val());
	   var password=$.trim($("#LogInPassword").val());
	   var loader=$.trim($("#feltch_loader").html());

	   if(email.length==0 || password.length==0){
		   show_overly("Email And Password Required");

	   }else{
		       //confirm details
			   show_overly(loader + "..checking details....please wait");
			   $.get("modules/loginmodule/checkuser.html",{
				    email:email,
					password:password
			    },function(Ckdata,status){
					if($.trim(Ckdata)!="true"){
						 show_overly(Ckdata);
 					}else{
					  //after confirming true get header
					  show_overly(loader + "..loading headers...please wait");
						$.get("accounts/clients/clients_account_menu.html",{
							email:email,
							password:password
						},function(hdata,status){
							 if(hdata!=""){
								/*get pages*/
								show_overly(loader + "..loading pages ....please wait");
								$.get("accounts/clients/client_pages.html",{
									email:email,
									password:password
								},function(data,status){
									 show_overly("hide");
									 $("#live_chat_wrap,.blocks").fadeOut();
									 $("#MenuList").html(hdata);
								     $("#client_block").html(data).fadeIn(2000).css({"height":"100%","overflow":"auto"});;
									 setCookie("emailNew",email,30);
									 setCookie("passwordNew",password,30);
								});

							}else{

							}


						});

					}
				});

			 }

   });
 });

 </script>
 <div class="col-sm-12 form_page" id="login_form">
					<h3 class="form_big_lbls  login_lbl">Log In Here</h3>
						<table class="formTableUH" >
								<tbody>
								 <tr>
									<td>
										<label for="pre_order_form_order_name"> Email:</label>
									</td>
									<td>
										<input type="text" id="logInEmail" name="logInEmail" maxlength="255" placeholder="enter here" class="inputTextRound aboutUH">
										<div class="errorText"></div>
									</td>
								 </tr>
								 <tr>
									<td>
										<label for="pre_order_form_order_name"> Password:</label>
									</td>
									<td>
										<input type="password" id="LogInPassword" name="LogInPassword" maxlength="255" placeholder="password" class="inputTextRound aboutUH">
										<div class="errorText"></div>
									</td>
								</tr>

							</tbody>
						</table>
						 <div class="col-sm-8">
							 <p class="col-sm-12 forgot_pass_btn" id="forgot_pas_btn"> Forgort Password ?</p>
							 <h4 class="btn log_in_btn" id="login_btn">Log In</h4>
						  </div>
					  </div>
					<div class="col-sm-12 form_page not_shown" id="forgot_pass_form">
					<h3 class="form_big_lbls  login_lbl">Enter Your Account Email</h3>
						<table class="formTableUH " >
								<tbody>
								 <tr>
									<td>
										<label for="pre_order_form_order_name">  Email:</label>
									</td>
									<td>
										<input type="text" id="forgot_password_email" name="forgot_password_email" maxlength="255" placeholder="enter your email here" class="inputTextRound aboutUH">
										<div class="errorText"></div>
									</td>
								 </tr>

							</tbody>
						</table>

					  <div class="col-sm-8">
						 <p class="col-sm-12 forgot_pass_btn" id="back_to_logIn_btn">back to log in ?</p>
						 <input type="button" class="btn log_in_btn" id="remind_pass" value="Remind Me My Password">
					  </div>
				  </div>
				</div>
	<div class="col-sm-1"></div>


 </div>








	</div>
</section>

<section>
	<div class="blocks sliderBlockWide ">
	 <table class="table1">
	 	<tr>
		<th>10 days of free revisions</th>
		<th>Papers delivered on time</th>
		<th>24/7 Friendly Support</th>
	</tr>
	<tr>
		<td>Enjoy unlimited free revisions for 2 weeks after you’ve received your paper. Have your paper edited by your writer as many times as you need, until it’s perfect.</td>
		<td>No matter when your deadline is, you can trust us with your papers — we’ll deliver them right on time. We’ll find you a writer who will do your assignment the fastest &amp; best.</td>

		<td>Get timely and professional assistance from our Support team. They will gladly answer all your questions and resolve any issues, if you ever have any.</td>
	</tr>
   </table>
</br>
</br>
</br>
	   <h1 style="padding-left: 70px; font-size:23px;"><strong>Bright Essay Writers | Washington-U.S.A</strong></h1>
			</br>
			</br>
			</br>
	   <p style="padding-left: 70px; font-size:17px;">The Ultimate Custom Paper Writing Service that delivers top-notch academic paper for the lowest price!</p>
	        </br>
			</br>
			</br>
	   <p style="padding-left: 70px; font-size:14px;"> Bright Essay Writers is a company that has been offering academic services for several years and so no matter how difficult you think your academic work is or how complicated your instructions may be do not fear for we have seen and dealt with it all. We are here to assist reduce that load of academic stress and pressure you have so that you still have time for your social life. Our goal is to ensure that our clients excel in school or project they are undertaking for your success is our pride.</p>
	</br>
</br>
   <p style="padding-left: 70px; font-size:14px;">For we are experts in academic writing every client is important and so we ensure that when you make an order you have the choice and enjoy the following benefits:</p>
</br>
</br>
<ul style="padding-left: 96px;">
  <li>Bright Essay Writers guarantees you 100% origin work, plagiarism free information from our expert writers.</li>
</br>
  <li>Efficient and fast turn-around time.</li>
</br>
  <li>Free revision policy for a period of 10 days from the day the work was completed and uploaded to your account.</li></br>
  <li>24/7 available expert writers to cater for all your academic needs.</li>
</br>
  <li>100% privacy and confidentiality guarantee.</li
</ul>
</br>
</br>
<p style="font-size:14px;">Member clients enjoy unique services like discounts on all their work and priority for our members are special to us so they deserve the best services. Create an account and be a member client with us today and find out more on membership benefits. We are accessible from anywhere in the world on phones, so you can view your paperwork through your account and download it.</p>
</br>
</br>
<table class="table2">
	<tr>
		<th>Enjoy Work By Professionals</th>
		<th>Why choose us?</th>
	</tr>

	<tr>
		<td>

1. Place your order- Simply complete an order form and give the instructions that will be needed for the order

2. Chat with the support team if you need any clarifications

3. Your order is then assigned to one of our competent writers in your field of study</td>
		<td>

    Experienced writers with the highest satisfaction rates.
    Lowest prices on the market, no upfront payments.
    Security, confidentiality, and money back guaranteed!.
</td>
	</tr>
</table>
</br>
</br>
<hr>
<div class="row" style="background-color:#ad1457; ">
  <div class="col-sm-3 col-xs-4" style="background-color:#000;margin:20px auto;">
  <ul>
   <li>Essay writing help in Victoria</li>
   <li>Engineering material science essay help</li>
   <li>Economics quiz essay help </li>
   <li>College term paper tips </li>
   <li>Civil engineering essay writers</li>
    <li>Castigiano’s Theory essay help</li>
     <li>Best Trusted Assignment Help</li>
   </ul>
</div>
  <div class="col-sm-3 col-xs-4" style="background-color:blue; margin:20px 20px 20px 20px;">
  	<ul>
   <li>Online researchers Victoria</li>
   <li>Online dissertation writers</li>
   <li>Netflix research help</li>
   <li>Looking for quality essay writers? </li>
   <li>Help with essay writing</li>
    <li>Essay writing services Ottawa</li>
     <li>Essay writing service in Ontario</li>
   </ul>
  </div>
  <div class="col-sm-3 col-xs-4" style="background-color:yellow; margin:20px auto;">
  		<ul>
   <li>Trusted assignment help</li>
   <li>Toronto essay writing service</li>
   <li>Bright essay writers</li>
   <li>Student essay help in New South Wales </li>
   <li>Ryland vs. fletcher essay help</li>
    <li>Quick paper writing service</li>
     <li>Quality online thesis writers</li>
   </ul>
  </div>
</div>
	</div>
</section>
<style>
		  .modal_output{
			 width:300px;
             max-height:300px;
			 background:#fff;
			 box-shadow:0px 0px 5px #777;
			 position:fixed;
			 top: 20%;
			left: 38%;
			z-index: 100;
			height:auto;
		  }
		  .modal_head{
			  width:100%;
			  background:#666;
			  height:30px;
		  }
		  .modal_body{
			  max-height:270px;
			  overflow:auto;
			  height:auto;
			  min-height:50px;
		  }
		  .modal_foot{
			  width:100%;
			  height:30px;
			  background:#666;
		  }
		  .modal_head h3{
			      float: right;
					font-weight: bold;
					color: white;
					cursor:pointer;
					padding: 6px;
		  }
		.overlay{
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.48)  !important;;
			position: fixed;
			z-index: 99;
			left: 0px;
			right: 0px;
			top: 0px !important;
		}
		 </style>
		 <script>
		  $(document).ready(function(){
				   function show_overly(return_val){
						  if(return_val=="hide"){
							  $(".overlay").hide();
						  }else{
							   $(".overlay").show();
							   $("#modal_body").html(''+return_val+'').css({"text-align":"center","margin":"0px auto","font-weight":"bold"});
						  }
					  }

				  $(".close_float_btn").click(function(){
					  $(".overlay").hide();
				  });
			});
		 </script>
		<div class="overlay not_shown" title="CLICK ANYWHERE TO CLOSE POP UPS">
		 <div class="modal_output">
		    <div class="modal_head">
		     <h3 class="close_float_btn">close</h3>
		    </div>
		    <div class="modal_body" id="modal_body">

		    </div>

		 </div>
	   </div><section class="col-sm-12 footer" id="footer">
	  <div class="container" style="padding:15px;">
	     <style>

.maximize_live_chat{
	     bottom: -425px !important;
		 width:200px !important;
}
.live_chat_wrap {
    width: 400px;
    height: 455px;
    background: #fff;
    position: fixed;
    right: 0%;
    bottom: 0px;
    z-index: 99999;
}
.chat_hwrap{
	background:#777;

}
.live_chat_head{
	height:30px;
	cursor:pointer;
}
.live_chat_body{
	height:400px;
	outline: none !important;
    background: #fff;
    background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(255,255,255)), color-stop(1, rgb(235,235,235)));
    background: -moz-linear-gradient( center top, rgb(255,255,255) 0%, rgb(235,235,235) 100%);
}
.live_chat_footer{
	height:70px;
}
.live_chat_input{
    height: 100%;

    padding: 1em;
    overflow: auto;
}
.live_chat_head span{
	    padding: 7px;
    float: left;
    color: #ffffff;
    font-weight: bold;
}
.send_btn{

    height: 100%;
    font-size: 15px;
    text-align: center;
    padding: 18px;
    background: azure;
    cursor: pointer;
	float:right;
}
.chat_close_box{
	float:right;
}
.chat_close_box strong{
	    color: #fff;
    font-size: 19px;
    padding: 4px;
    float: left;
    font-weight: lighter;
    margin: 0px 11px;
    cursor: pointer;
}
#message_chat_area{
	height:100%;
}
.live_chat_loader{
	    width: 30px;
    position: absolute;
    height: 30px;
    top: -21px;
    left: 33%;
}
.live_chat_loader:before, .live_chat_loader:after {
    opacity: 0;
    box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    content: "\0020";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 45px;
    border: 2px solid #FF5722;
}
.live_chat_loader:before {
    z-index: 2;
    animation: cssload-gogoloader 2.3s infinite;
    -o-animation: cssload-gogoloader 1.3s infinite;
    -ms-animation: cssload-gogoloader 1.3s infinite;
    -webkit-animation: cssload-gogoloader 1.3s infinite;
    -moz-animation: cssload-gogoloader 1.3s infinite;
}
.errorText{
	color:red;
	text-align:center;
}
</style>
<script>

$(document).ready(function(){

	var loader=$.trim($("#feltch_loader").html());

	$(".chat_icons,.live_chat_head").click(function(){
		$( "#live_chat_wrap" ).toggleClass( 'maximize_live_chat' )
		var email=getCookie('client_email');
		var name=getCookie('client_name');
		$("#Live_Chat_email").val(email);
		$("#Live_chat_name").val(name);
		$("#start_chat").click()
	});

	$("#start_chat").click(function(){
		var email=$.trim($('#Live_Chat_email').val());
		    setCookie('client_email',email,30);
		var name=$.trim($('#Live_chat_name').val());
		    setCookie('client_name',name,30);
			if(name.length==0 || email.length==0){
				$("#returnError").html('fill all fields here');
			}else if(check_special_chars(name)){
				$("#returnError").html('remove characters in name');
			}else if(!validateEmail(email)){
				$("#returnError").html('invalid email format');
			}else if(has_number(name)){
				$("#returnError").html('remove numbers in name');
			}else{
				$("#returnError").html(loader+"..please wait");
				$.get("plugins/livechat/verify_user_for_chat.html",{
					email:email,
					name:name
				},function(data,status){
					if($.trim(data)=="success"){
						$("#message_start_form").hide();
						//get chats
						$("#message_chat_area").show().html(loader);
						$.get("plugins/livechat/chats.html",{
							email:email,
							name:name
						},function(Chatdata,status){
							$("#message_chat_area").html(Chatdata);
					    });

					}else{
						$("#returnError").html(data);
						$("#message_start_form").show();
						$("#message_chat_area").hide();
					}
				});
			}
			});


});
</script>
<div class="live_chat_wrap maximize_live_chat draggable" id="live_chat_wrap">
	<div class="live_chat_head chat_hwrap ui-widget-content">
      <span >Let's  Live Chat  <div class="cssload-loader live_chat_loader" ></div></span>
	  <div class="chat_close_box">
	    <strong class="chat_icons glyphicon glyphicon-zoom-in" id="maximize_chat_box"></strong>
		<strong class="chat_icons glyphicon glyphicon-zoom-out" id="minimize_chat_box"></strong>
	  </div>
	</div>
    <div class="live_chat_body">
        <div class="col-sm-12 form_page" id="message_start_form">
		  <h3 class="form_big_lbls  login_lbl" style="text-align:center;">Get started now</h3>
			<table class="formTableUH" >
					<tbody>
					<tr>
						<td>
							<label for="pre_order_form_order_name">  Name:</label>
						</td>
						<td>
							<input type="text" id="Live_chat_name" name="pre_order_form[order][name]" maxlength="255" placeholder="your name" class="inputTextRound aboutUH">
							<div class="errorText"></div>
						</td>
					</tr>
					 <tr>
						<td>
							<label for="Live_Chat_email"> Email:</label>
						</td>
						<td>
							<input type="text" id="Live_Chat_email" name="pre_order_form[order][name]" maxlength="255" placeholder="enter here" class="inputTextRound aboutUH">
							<div class="errorText"></div>
						</td>
					 </tr>


				</tbody>
			</table>
			 <div class="col-sm-8">
			    <div class="errorText" id="returnError"></div>
				 <input type="button" class="btn log_in_btn" id="start_chat" value="Start a chat">
			  </div>
		  </div>
		  <div class="col-sm-12 form_page not_shown" id="message_chat_area">

		  </div>
    </div>

</div><p class="col-sm-2"> </p>
<p class="col-sm-8 white" style="text-align:center;">&copy <?php echo date("Y"); ?>- brightessaywriters.com Designed and edited by <a href="https://www.linkedin.com/in/francis-mwakidoshi-177b4887" target="_blank" style="color: #CDDC39;">Francis Mwakidoshi </a> and <a target="blank" style="color: #CDDC39;" href="https://www.linkedin.com/in/nimrod-ambetsa-869323131/">Nimrod Ambetsa</a> </p>
<p class="col-sm-2"> </p>
<audio id="tone1" >
  <source src="tones/t1.mp3" type="audio/mp3">
</audio>
<audio id="tone2" >
  <source src="tones/t2.mp3" type="audio/mp3">
</audio>
<audio id="tone3" >
  <source src="tones/t3.mp3" type="audio/mp3">
</audio>
<audio id="tone4" >
  <source src="tones/t4.mp3" type="audio/mp3">
</audio>
<span  id="loader" class="not_shown">
     <span id="loader_content">
	    <div id="cssload-pgloading">
	    <div class="cssload-loadingwrap">
		<ul class="cssload-bokeh">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		</div>
	   </div>
	 </span>
</span>
<span  id="feltch_loader" class="not_shown">
     <span id="loader_content">
	   <div class="spinner">
		  <div class="bounce1"></div>
		  <div class="bounce2"></div>
		  <div class="bounce3"></div>
		</div>
	 </span>
</span>

 	  </div>
</section>
</body>
</html>
