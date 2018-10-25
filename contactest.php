<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "grant.ab@outlook.com";
    $email_subject = "Form Submission";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Little London International</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="call-us">Telephone Enquiries: 0161 258 3628</div>
<div id="social">
    <ul>
      <li><a href="https://www.facebook.com/littlelondoninternational/"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_square_black-512.png"></a></li>
      <li><a href="https://twitter.com/littlelondonint"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_square_black-512.png"></a></li>
      <li><a href="https://www.instagram.com/littlelondoninternational/"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/instagram_square_black-512.png"></a></li>
      <li><a href="https://plus.google.com/108795595531946227686"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/google_square_black-512.png"></a></li>
      <li><a href="https://www.youtube.com/channel/UCgD5MV77ka3tZkmCtDTdbAw"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/youtbue_square_black-512.png"></a></li>
    </ul>
  </div>
  <div id="slideout-menu">
   <div class="btn" id="close-time">
    <i class="fa fa-times toggle-btn" aria-hidden="true"></i>
  </div>
  <ul class="menu">
    <li>
     <a href="index.html">Home</a>
   </li>
   <li>
     <a href="company.html">Company</a>
   </li>
   <li>
     <a href="programmes.html">Programmes</a>
   </li>
   <li>
     <a href="little-london.html">Little London</a>
   </li>
   <li>
     <a href="honder.html">Honder University</a>
   </li>
   <li>
     <a href="stories.html">Stories</a>
   </li>
   <li>
     <a href="announcements.html">Announcements</a>
   </li>
   <li>
     <a href="">Contact</a>
   </li>
 </ul>
 <ul id="contact-emails">
    <li><span>For General Enquiries Email:</span>
        <a href="mailto: mike@littlelondoninternational.co.uk"> mike@littlelondoninternational.co.uk</a></li>
<li>
    <span>For Application Enquiries Email:</span>
    <a href="mailto:&#10;        amanda@littlelondoninternational.co.uk">
        amanda@littlelondoninternational.co.uk</a></li>

</ul>
</div>
<div class="page-wrapper">
 <header>
  <i class="fa fa-bars toggle-btn" aria-hidden="true"></i>
  <div class="vertical bbc">
   <nav>
    <ul>
     <li class="home-a">
      <a href="index.html" class="active">Home</a>
    </li>
    <li class="small-a">
      <a href="company.html">Company</a>
    </li>
    <li>
      <a href="programmes.html">Programmes</a>
    </li>
    <li>
      <a href="little-london.html">Little London</a>
    </li>
    <li class="larger-a">
      <a href="honder.html">Honder University</a>
    </li>
    <li class="stories-a">
      <a href="stories.html">Stories</a>
    </li>
    <li class="small-a">
      <a href="#footer-hook">Contact</a>
    </li>
  </ul>
</nav>
</div>
</header>
         <section id="hero" class="">
            <div class="container">
               <div class="vertical">
                  <h1><span class="special-text">Welcome,</span> To<br>
                     <span class="special-red"> Little London</span><br>
                     International.
                  </h1>
                  <p class="lead">Study Mandarin, Teach English &amp; Explore China with<br>Little London International: Supporting Honder<br>University &amp; Little London English School.</p>
                  <div class="hero-links">
                     <ul>
                        <li><span class="list-title">
                           Look Inside</span>
                        </li>
                        <li><a href="honder.html">Honder University</a></li>
                        <li><a href="little-london.html">Little London English</a></li>
                        <li><a href="programmes.html">Programmes</a></li>
                     </ul>
                     <ul>
                        <li><span class="list-title" style="
                           opacity: 0;
                           ">
                           Look Inside</span>
                        </li>
                        <li><a href="stories.html">Stories</a></li>
                        <li><a href="#footer-hook">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="right-images move-right">
               <div class="image-one"><img src="./images/china/one.jpg"></div>
               <div class="image-two"></div>
               <div class="image-three move-down"><img src="./images/teaching/eight.jpg"></div>
            </div>
         </section>
         <section id="programmes">
  <div class="container vertical">
   <div class="section-title">
    <div class="list-title">WHAT WE OFFER</div></div>
    <ul>
      <li>
       <a href="programmes.html#teach-link"><span>TEACH</span>
         <div class="gradient-two"></div>
<img src="./images/teaching/nineteen.jpg">
       </a>
     </li>
     <li>
       <a href="programmes.html#teach-link"><span>TRAVEL &amp; TEACH</span>
         <div class="gradient-two"></div>
<img src="./images/china/eight.jpg">
       </a>
     </li>
     <li>
       <a href="programmes.html#study-link"><span>STUDY &amp; TEACH</span>
         <div class="gradient-two"></div><img src="./images/teaching/three.jpg">
       </a>
     </li>
     <li>
       <a href="programmes.html#study-link"><span>TRAVEL, STUDY &amp; TEACH</span>
         <div class="gradient-two"></div>
<img src="./images/china/four.jpg">
       </a>
     </li>
     
     <li>
       <a href="programmes.html#coaching-link"><span>COACHING &amp; TEACHING</span>
         <div class="gradient-two"></div>
<img src="./images/teaching/twenty.jpg">
       </a>
     </li>
     <li>
       <a href="company.html#exchange-link"><span>STUDENT EXCHANGE</span>
         <div class="gradient-two"></div>
<img src="./images/teaching/thirteen.jpg">
       </a>
     </li>
   </ul></div>
 </section>
         <section id="stories" style="display: none;">
            <div class="container vertical">
               <div class="section-title">
                  <div class="list-title">TEACHER STORIES</div>
               </div>
               <ul>
                  <li>
                     <a>
                        <img src="./images/people/one.jpg">
                        <h6>Person Name</h6>
                        <blockquote>Little London Offers A Great Opportunity To Gain Valuable Teaching Experience In China. The Ability &amp; Age Of The Children Can Vary From...</blockquote>
                        <span>Read Story Here</span>
                     </a>
                  </li>
                  <li>
                     <a>
                        <img src="./images/people/two.jpg">
                        <h6>Person Name</h6>
                        <blockquote>Little London Offers A Great Opportunity To Gain Valuable Teaching Experience In China. The Ability &amp; Age Of The Children Can Vary From...</blockquote>
                        <span>Read Story Here</span>
                     </a>
                  </li>
               </ul>
            </div>
         </section>
         <section id="message">
            <div class="images-left move-left">
               <div class="image-two"></div>
            </div>
            <div class="container">
               <div class="section-title">
                  <div class="list-title">ABOUT INNER MONGOLIA &amp; HONDER UNIVERSITY</div>
               </div>
               <div class="inner-message">
                  <div class="mongolia-message vertical">
                     <h1><span class="special-text">ABOUT</span><br>INNER MONGOLIA</h1>
                     <p>Why should I chose to study and work in Hohhot, Inner Mongolia<br>as opposed to some of the other more well known cities in China?</p>
                     <a>Discover</a>
                  </div>
                  <div class="gradient"></div>
                  <img src="./images/teaching/nine.jpg">
               </div>
            </div>
         </section>
         <section class="programme full-height">
           <div class="container">
             <div class="left-of-section">
              <h1>ABOUT INNER MONGOLIA<br><span class="special-red">&amp; HOHHOT</span></h1>
              <p>Inner Mongolia, an autonomous region of northern China, encompasses green steppe, arid desert and lengthy sections of the Great Wall of China. The Hulunbuir grasslands, a vast livestock grazing area with hundreds of rivers and popular fishing lakes, is distinguished by its mix of Russian and traditional Mongolian herder cultures. In the remote west is Badain Jaran Desert and its immense dunes.<br><br>&#8203;Hohhot, abbreviated in Chinese as Hushi, formerly known as Kweisui, is the capital of Inner Mongolia in the north of the People's Republic of China, serving as the region's administrative, economic and cultural center.<br><br>For our Little London International Students, Teachers and Coaches we want to promote a variety of things to do and places to go in Hohhot and across Inner Mongolia including SHOPPING at the Fantastic Wanda Plaza Shopping Centre in Hohhot. Please have a look at our social media pages for ongoing Inner Mongolia and Hohhot Inspiration.</p>
            </div>
          </div><div class="right-images move-right">
            <div class="image-one"><img src="./images/inner-mongolia/two.jpg"></div>
            <div class="image-two"></div>
            <div class="image-three"><img src="./images/inner-mongolia/five.jpg" class="" id="rob-image"></div>
          </div>
        </section>
         <section id="announcements">
            <div class="container">
               <div class="section-title">
                  <div class="list-title">SCHOOL ANNOUNCEMENTS</div>
                  <hr>
               </div>
               <ul>
                  <li>
                     <h6>27th July 2018</h6>
                     <h4>Enjoying Our New Website?</h4>
                     <a>
                        <img src="https://images.pexels.com/photos/238118/pexels-photo-238118.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span>Read More</span>
                     </a>
                  </li>
                  <li>
                     <h6>1st August 2018</h6>
                     <h4>10 Places to Eat In Hohhot</h4>
                     <a>
                        <img src="https://images.pexels.com/photos/76093/pexels-photo-76093.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span>Read More</span>
                     </a>
                  </li>
                  <li>
                     <h6>9th August 2018</h6>
                     <h4>How To Access Student Support</h4>
                     <a>
                        <img src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span>Read More</span>
                     </a>
                  </li>
                  <li>
                     <h6>11th September 2018</h6>
                     <h4>Routes To Hohhot University From Airport</h4>
                     <a>
                        <img src="https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span>Read More</span>
                     </a>
                  </li>
               </ul>
            </div>
         </section>
         <footer id="footer-hook">
            <div class="container footer-vert">
               <h1><span class="special-text">GETTING</span><br>STARTED</h1>
               <div class="contact-us-arrow">
                  <p>To begin your Chinese Adventure use the form to your right.<br>If you have any questions please use our live chat feature. <br>Places are limited for Winter 2018. </p>
               </div>
               <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 </td>
</tr>
</table>
</form>
               <form id="apply-form">
                  <h2>FILL OUT THIS FORM TO GET STARTED...</h2>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Enter Your Full Name</label>
                     <input type="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Enter Your Email, Confirmation Required.</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-check">
                     <label class="form-check-label" for="exampleCheck1">By click submit you agree to this websites Terms &amp; Conditions.</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
            <div class="no-container">
               <div class="container">
                  <div class="vertical">
                     <ul>
                        <li><span class="list-title">HEAD OFFICE</span>
                        </li>
                        <li><a>Little London International
                           </a>
                        </li>
                        <li><a>Liverpool Waterfront
                           </a>
                        </li>
                        <li><a>Avenue HQ
                           </a>
                        </li>
                        <li><a>17 Mann Island</a></li>
                        <li><a>L3 1BP</a></li>
                     </ul>
                     <ul>
                        <li><span class="list-title">
                           Site Links</span>
                        </li>
                        <li><a href="honder.html">Honder University</a></li>
                        <li><a href="little-london.html">Little London</a></li>
                        <li><a href="programmes.html">Programmes</a></li>
                        <li><a href="stories.html">Stories</a></li>
                     </ul>
                     <ul>
                        <li><span class="list-title">
                           Social Media</span>
                        </li>
                        <li><a>Facebook</a></li>
                        <li><a>Instagram</a></li>
                        <li><a>Twitter</a></li>
                        <li><a href="https://plus.google.com/108795595531946227686">Google Plus</a></li>
                        <li><a href="https://www.youtube.com/channel/UCgD5MV77ka3tZkmCtDTdbAw">YouTube</a></li>
                     </ul>
                     <ul>
                        <li><span class="list-title">
                           Common Questions</span>
                        </li>
                        <li><a>Thing's To Do</a></li>
                        <li><a>Places To Eat</a></li>
                        <li><a>Flight Times</a></li>
                        <li><a>Staff Support</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="images-footer">
               <div class="image-one"><img src="./images/china/one.jpg"></div>
            </div>
         </footer>
      </div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script type="text/javascript">
         var open = $(".toggle-btn");
         var menu = $("#slideout-menu");
         var page = $(".page-wrapper")
         
         open.click(function(){
         menu.toggleClass("open");
         page.toggleClass("page-slide");
         });
         
      </script>
   </body>
</html>
</html>