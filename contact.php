<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from liniacle.com/backup/projects/essywriters/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2017 12:43:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <meta charset="utf-8">
 <title>Contact Us-Bright Essay Writers</title>
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
 <style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
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
 <a href="index.php">
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
 <a target="_blank" href="brightessaywriters.net">
  BLOG
 </a>
</li>
           </ul>
       </div>
   </section>
</header>
<section class="col-sm-12 no_padding" id="site_content">
 <div class="blocks sliderBlockWide col-sm-12" id="LogInPage">
 <br>
 <br>
 <center> <h3 style="font-size:27px;">Contact Form</h3></center>
<br>
<br>
<br>
<div class="container1">
  <form action="/contact.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="usa">Britain</option>

          <option value="usa">South Africa</option>
          <option value="usa">Russia</option>

          <option value="usa">Other</option>

    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
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
<p class="col-sm-8 white" style="text-align:center;">&copy <?php echo date("Y"); ?>- brightessaywriters.com Designed by <a href="https://www.linkedin.com/in/francis-mwakidoshi-177b4887" target="_blank" style="color: #CDDC39;">Francis Mwakidoshi </p>
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