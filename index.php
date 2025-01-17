<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirtho Mondal</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
<body>
    <!--header site-->
    <header>
        <div class="logo">
            <!-- <span>T</span>irtho -->
            <span><a href="#home"><img src="img/img/logo.png" height="80" width="80" alt=""></a></span>
        </div>
        <ul class=" navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div id="menu-icon" ><img src="img/menu.png" alt="" height="50" weight="50"></div>

        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            


            <div class="menu-links">
                <li><a href="#home" onclick="toggleMenu()">Home</a></li>
                <li><a href="#about" onclick="toggleMenu()">About</a></li>
                <li><a href="#timeline" onclick="toggleMenu()">Timeline</a></li>
                <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
                <li><a href="#skills" onclick="toggleMenu()">Skills</a></li>
                <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
            </div>
        </div>
        <div>
            <img src="img/moon.png" id ="icon">
        </div>

    </header>


    <!-- home section    -->

    <?php
// Define dynamic data (you can fetch this from a database or other sources)
$name = "Tirtho ";
$description = "I am an enthusiastic, self-motivated, reliable, responsible and hard working person. I am a mature team worker and adaptable to all challenging situations. I am able to work well both in a team environment as well as using own initiative. I am able to work well under pressure and adhere to strict deadlines.";
$email = "mondal2007117@stud.kuet.ac.bd";
$imageSrc = "img/tirthomain3 (1).png";
?>

<section id="home" class="home">
    <div class="home-content">
        <h1>
            Hi! I'm <?php echo $name; ?>
        </h1>
        <div class="change-text">
            <h3>And I'm</h3>
            <h3>
                <span class="word">Student</span>
                <span class="word">Youtuber</span>
                <span class="word">Photographer</span>
            </h3>
        </div>

        <p>
            <?php echo $description; ?>
        </p>

        <div class="info-box">
            <div class="mailto">
                <a href="mailto:<?php echo $email; ?>">Send Email</a>
            </div>
        </div>

        <div class="center-container">
            <div class="btn__container">
                <button class="btn btn-color-2" onclick="window.open('./img/cv_tirtho.pdf')">Download CV</button>
                <button class="btn btn-color-1" onclick="location.href='./#contact'">Contact Info</button>
            </div>
        </div>

        <div id="socials-container">
            <!-- Your social media icons here -->
        </div>
    </div>

    <div class="home-image">
        <div class="img-box">
            <img src="<?php echo $imageSrc; ?>" width="445" height="561" alt="">
        </div>
    </div>
</section>

    <!-- about section -->
    <section id="about" class="about">
        <div class="img-about">
            <img src="img/img/ttt.jpg" width="400" height="600" alt="">
        </div>
        <div class="about-content">
           
            <h2 align="center" style="color: blue;">About me</h2>
           
            <p> andjnjdnjdsndxjn dofiojnjd nfndf jdnfjunfd  jdnfjunfddfd
                dkjkfndnfdnf sokfnmds sdds
                dfiodsjf 
                sdfjidjf 
                dfjjfsmf dsjfisjfsm soidjfiok 
                 difjdf dfjiodfjsdl fiuh8dfhjgrjiogpjijsfnj89j
                 fngjfnglj ugnyhrf msint 
            </p>
            <div class="btn-box"> 
                <button  class="btnAboout">Read More!</a>    
            </div>
        </div>


    </section>

    <section id="timeline" class="timeline">
        <div class="my-timeline">
            <p ><h1 align="center">Explore me</h1></p>
        </div>
    <div class="container">
	
        <main class="row">
            
            <!--   *******  Education Section Starts  *******   -->
    
            <section class="col">
                
                <header class="title">
                    <h2>EDUCATION</h2>
                </header>
    
                <div class="contents">
                    
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>High School Degree</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
    
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>Bachelor's Degree</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
    
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>Master Degree</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
    
                </div>
            </section>
    
            <!--   *******  Education Section Ends  *******   -->
    
            <!--   *******  Experience Section Starts  *******  -->
    
            <section class="col">
                
                <header class="title">
                    <h2>EXPERIENCE</h2>
                </header>
    
                <div class="contents">
                    
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>UI/UX Designer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
    
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>Full-Stack Developer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
    
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>Frontend Developer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
    
                </div>
            </section>
    
            <!--   *******  Experience Section Ends   *******  -->
        </main>
    </div>
</section>

//
<section>
    
</section>



<!-- project section -->

<section id="projects" class ="projects">
    <div class="projectcontainer">
        <div class="containerprojecthead">
            <h2 class="project-heding">
                <span>P</span>
                <span>r</span>
                <span>o</span>
                <span>j</span>
                <span>e</span>
                <span>c</span>
                <span>t</span>
                <span>s</span>
                <span> </span>
                <span>A</span>
                <span>r</span>
                <span>e</span>
            </h2>
        </div>
        <!-- <h2 class="section-heading" data-outline="Projects">Projects</h2> -->
        <div class="all-items">
            <div class="item">
                <div class="left">
                    <div class="img">
                        <img src="img/img/mobile banking.jpg" width="500" height="400" alt="img banking">
                    </div>
                </div>
                <div class="right">
                    <h2 class="project-title">Mobile Banking</h2>
                    <h3 class="project-sub-title">Bank in Hand</h3>
                    <p class="project-desc">I created this application for a USA customer. It's an amazing platform where
                        you can chat with your friends in a secure environment, and no information is stored after the
                        session ends.</p>
                        <div class="btn-container-load">
                            <div class="tablecontainer">
                                <table>
                                    <th>
                                        <td  class="button-cell">
                                            <button class="charming-btn" onclick="window.open('https://github.com/Tirtho-Mondal/MobiCash')">Know More</button>

                                        </td>
                                    </th>
                                    <th>
                                        <td  class="preview-cell">
                                            <a href="#" class="primary-btn outline external-link">
                                                <span>Preview</span>
                                            </a>
                                        </td>
                                    </th>
                                </table>
                            </div>
                        </div>
                        
                </div>
            </div>
            <div class="item">
                <div class="left">
                    <div class="img">
                        <img src="img/cse family.jpeg" width="500" height="500" alt="cse family">
                    </div>
                </div>
                <div class="right">
                    <h2 class="project-title">CSE-Family </h2>
                    <h3 class="project-sub-title">Kuet CSE department</h3>
                    <p class="project-desc">Hotel Zaman is one of the famous hotels in Chittagong. We created their
                        website with a clean and smooth design, meeting the client's expectations.</p>
                        <div class="btn-container-load">
                            <div class="tablecontainer">
                                <table>
                                    <th>
                                        <td  class="button-cell">
                                            <button class="charming-btn" onclick="window.open('https://github.com/Tirtho-Mondal/CSE-Family/tree/master')">Know More</button>

                                        </td>
                                    </th>
                                    <th>
                                        <td  class="preview-cell">
                                            <a href="#" class="primary-btn outline external-link">
                                                <span>Preview</span>
                                            </a>
                                        </td>
                                    </th>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
</section>




<!-- skill section -->
<section id="skills" class="skills">
    <div class="containerSkillhead">
        <h2 class="colorful-heading">My Skills</h2>
    </div>

    <div class="myskill">
        <div class="containerskill left-container">
            <img src="img/img/c.png" alt="">
            <div class="text-box">
                <h2>
                    C
                </h2>
                <small>2012-2012</small>
                <p>This the the structure programming language</p>
                <span class="left-container-arrow"></span>
            </div>

        </div>

   

        <div class="containerskill right-container">
            <img src="img/img/c++.png" alt="">
            <div class="text-box">
                <h2>
                    C++
                </h2>
                <small>2012-2012</small>
                <p>the main this dbjfnjdnfkjfdnfnknhb dfjufhuh</p>
                <span class="right-container-arrow"></span>
            </div>

        </div>

  
        <div class="containerskill left-container">
            <img src="img/img/java.png" alt="">
            <div class="text-box">
                <h2>
                    Java
                </h2>
                <small>2012-2012</small>
                <p>the main this dbjfnjdnfkjfdnfnknhb dfjufhuh</p>
                <span class="left-container-arrow"></span>
            </div>

        </div>

        <div class="containerskill right-container">
            <img src="img/img/js.png" alt="">
            <div class="text-box">
                <h2>
                    Java Script
                </h2>
                <small>2012-2012</small>
                <p>the main this dbjfnjdnfkjfdnfnknhb dfjufhuh</p>
                <span class="right-container-arrow"></span>
            </div>

        </div>

        <div class="containerskill left-container">
            <img src="img/img/css.png" alt="">
            <div class="text-box">
                <h2>
                    CSS
                </h2>
                <small>2012-2012</small>
                <p>the main this dbjfnjdnfkjfdnfnknhb dfjufhuh</p>
                <span class="left-container-arrow"></span>
            </div>

        </div>

        <div class="containerskill right-container">
            <img src="img/img/android.png" alt="">
            <div class="text-box">
                <h2>
                    Android
                </h2>
                <small>2012-2012</small>
                <p>the main this dbjfnjdnfkjfdnfnknhb dfjufhuh</p>
                <span class="right-container-arrow"></span>
            </div>

        </div>

        <div class="containerskill left-container">
            <img src="img/img/html.png" alt="">
            <div class="text-box">
                <h2>
                   Html
                </h2>
                <small>2012-2012</small>
                <p>the main this dbjfnjdnfkjfdnfnknhb dfjufhuh</p>
                <span class="left-container-arrow"></span>
            </div>

        </div>

    </div>

</section>

<!-- contact secti0on -->

<section id="contact" class="contact">
    <div class="containercontact">
        <!-- Modified HTML code with changed class names -->
        <h2 class="new-section-text">Let's Connect</h2>

		<main class="row">
			
			<!--  *******   Left Section (Column) Starts   *******  -->

			<section class="col left">
				
				<!--  *******   Title Starts   *******  -->

				<div class="contactTitle">
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>

				<!--  *******   Title Ends   *******  -->

				<!--  *******   Contact Info Starts   *******  -->

				<div class="contactInfo">
					
					<div class="iconGroup">
						<div>
                            <img src="img/img/call.png" width="50" height="50" alt="">
						</div>
						<div class="details">
							<span>Phone</span>
							<span>+8801571421684</span>
						</div>
					</div>

					<div class="iconGroup">
						<div >
                            <img src="img/img/email.png" width="50" height="50" alt="">
						</div>
						<div class="details">
							<span>Email</span>
							<span>tirthomondal.2001@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class>
                            <!-- <img src="img/img/location.png" width="50" height="50" alt="">
						</div>
						<div class="details">
							<span>Location</span>
							<span>
                                <p>KUET</p>
                                <p>Khulna</p>
                                <p>Bangladesh</p>
                            </span> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107818.51632871179!2d89.19095129726564!3d22.696265000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff7ff383e53303%3A0x4d9428cfcfc7f7ab!2sTIRTHO%20MONDAL!5e1!3m2!1sen!2sbd!4v1709313344932!5m2!1sen!2sbd" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

				</div>

				<!--  *******   Contact Info Ends   *******  -->

				<!--  *******   Social Media Starts   *******  -->
<!-- 
				<div class="socialMedia">
                    <table>
                        <th> <img src="img/img/facebook.jpeg" 
                            alt="My facebook Profile"
                            class="icon"
                            onclick="window.open('https://linkedin.com/in/saeedutsha')"
                            />
                        </th>
                        <th></th><th></th>
                        <th>
                            
                            <img src="img/img/twitter.jpg" 
                            alt="My facebook Profile"
                            class="icon"
                            onclick="window.open('https://linkedin.com/in/saeedutsha')"
                            />
                        </th>
                        <th></th><th></th>
                        <th>
                            <img src="img/img/githhub.png" 
                            alt="My Youtube Profile"
                            class="icon"
                            onclick="window.open('https://github.com/saeedutsha')"
                            />
                    </th>
                        
                       <th></th><th></th>
                            <th>
                                <img src="img/img/youtube.jpeg" 
                                alt="My Twitter Profile"
                                class="icon"
                                onclick="window.open('https://scholar.google.com/citations?user=mBL3_A8AAAAJ&hl=en')"
                                /> 
                        </th>
                    <th></th><th></th>
                    <th>
                        <img src="img/img/email.png" 
                        alt="My Youtube Profile"
                        class="icon"
                        onclick="window.open('https://github.com/saeedutsha')"
                        />
                </th>
                <th></th><th></th>
                <th>
                    <img src="img/img/link.png" 
                    alt="My Youtube Profile"
                    class="icon"
                    onclick="window.open('https://github.com/saeedutsha')"
                    />
            </th>
                    </table> -->
<!--                   
				</div> -->


			</section>

			<section class="col right">
				

				<!-- <form class="messageForm">
					
					<div class="inputGroup halfWidth">
						<input type="text" name="" required="required">
						<label>Your Name</label>
					</div>

					<div class="inputGroup halfWidth">
						<input type="email" name="" required="required">
						<label>Email</label>
					</div>

					<div class="inputGroup fullWidth">
						<input type="text" name="" required="required">
						<label>Subject</label>
					</div>

					<div class="inputGroup fullWidth">
						<textarea required="required"></textarea>
						<label>Say Something</label>
					</div>

					<div class="inputGroup fullWidth">
						<button>Send Message</button>
					</div>

				</form> -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Compose email message
        $to = "tirthomondal.2001@gmail.com"; //recipient email address
        $headers = "From: $name <$email>";
        $body = "Subject: $subject\n\n$message";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
    ?>

    <form class="messageForm" method="post">
        <div class="inputGroup halfWidth">
            <input type="text" name="name" required="required">
            <label>Your Name</label>
        </div>

        <div class="inputGroup halfWidth">
            <input type="email" name="email" required="required">
            <label>Email</label>
        </div>

        <div class="inputGroup fullWidth">
            <input type="text" name="subject" required="required">
            <label>Subject</label>
        </div>

        <div class="inputGroup fullWidth">
            <textarea name="message" required="required"></textarea>
            <label>Say Something</label>
        </div>

        <div class="inputGroup fullWidth">
            <button type="submit">Send Message</button>
        </div>
    </form>
    

			
			</section>


		</main>
	</div>



</section>

<section id="portfolio" class="portfolio">
   
    <div class="main-text">
        <p align="center">Explore My Projects</p>
    </div>
    <div calss ="container">
        <div class="fillter-buttons">
            <button class="btn" data-filter="all">All</button>
            <button class="btn" data-filter=".c">C</button>
            <button class="btn" data-filter=".cpp">C++</button>
            <button class="btn" data-filter=".java">Java</button>
        </div>
        <div class="portfolio-gallery">
            <div class="port-box mix c">
                <div class="port-imge">
                    <img src="img/call.jpeg" alt="">
                </div>
                <div class="port-content">
                    <h3>MobiCash</h3>
                    <p>
                        MobiCash is a mobile banking system that provides various banking operations such as cash in, cash out, mobile recharge, send money, check balance, and transaction details.
                    </p>
                    <a href="#"><img src="img/img/preview.png" height="38" width="38" alt=""></a>
                </div>
            </div>
            
                <div class="port-box mix java">
                    <div class="port-imge">
                        <img src="img/java.png" alt="">
                    </div>
                    <div class="port-content">
                        <h3>MobiCash</h3>
                        <p>
                            MobiCash is a mobile banking system that provides various banking operations such as cash in, cash out, mobile recharge, send money, check balance, and transaction details.
                        </p>
                        <a href="#"><img src="img/img/preview.png" height="38" width="38" alt=""></a>
                    </div>
                </div>
                    <div class="port-box mix c">
                        <div class="port-imge">
                            <img src="img/call.jpeg" alt="">
                        </div>
                        <div class="port-content">
                            <h3>MobiCash</h3>
                            <p>
                                MobiCash is a mobile banking system that provides various banking operations such as cash in, cash out, mobile recharge, send money, check balance, and transaction details.
                            </p>
                            <a href="#"><img src="img/img/preview.png" height="38" width="38" alt=""></a>
                        </div>
                    </div>
                        <div class="port-box mix java">
                            <div class="port-imge">
                                <img src="img/email.png" alt="">
                            </div>
                            <div class="port-content">
                                <h3>MobiCash</h3>
                                <p>
                                    MobiCash is a mobile banking system that provides various banking operations such as cash in, cash out, mobile recharge, send money, check balance, and transaction details.
                                </p>
                                <a href="#"><img src="img/img/preview.png" height="38" width="38" alt=""></a>
                            </div>
                        </div>
            <!-- More portfolio items with similar structure -->
        </div>
    </div>
</section>





<footer class="footer-distributed">

    <div class="footer-left">
       
        <img src="img/img/logo.png" width="100" height="100" alt="" style="margin-left: 10%;">
       

        <p class="footer-links">
            <a href="#home">Home</a>
            |
            <a href="#about">About</a>
            |
            <a href="#timeline">Timeline</a>
            |
            <a href="#projects">Projects</a>
            |
            <a href="#skills">Skills</a>
            |
            <a href="#contact">Contact</a>
        </p>

       
    </div>
    <div class="footer-center">

       
        <table>
            <th> <img src="img/img/location2.png" height="40"width="40" alt=""></th>
            <th><p align="center" >Khulna,Bangladesh</p></th>
        </table>
        <table>
            <th> <img src="img/img/call2.png"height="40"width="50"  alt=""></th>
            <th> <p>+880174**9**258</p></p></th>
        </table>
        <table>
            <th> <img src="img/img/emai2.png"height="40"width="50"  alt=""></th>
            <th><p><a href="tirthomonda.2001@gmail.com">tirthomonda.2001@gmail.com</a></p></th>
        </table>
       
    
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>Thanks For visiting my Kingdome</span>
            <strong>Titho</strong> is a Youtube channel where you can find more creative CSS Animations
            and
            Effects along with
            HTML, JavaScript and Projects using C/C++.
        </p>
    
        <table>
            <th> <img src="img/img/facebook.jpeg" 
                alt="My facebook Profile"
                class="icon"
                onclick="window.open('https://linkedin.com/in/saeedutsha')"
                />
            </th>
            <th></th><th></th>
            <th>
                
                <img src="img/img/twitter.jpg" 
                alt="My facebook Profile"
                class="icon"
                onclick="window.open('https://linkedin.com/in/saeedutsha')"
                />
            </th>
            
           <th></th><th></th>
                <th>
                    <img src="img/img/youtube.jpeg" 
                    alt="My Twitter Profile"
                    class="icon"
                    onclick="window.open('https://scholar.google.com/citations?user=mBL3_A8AAAAJ&hl=en')"
                    /> 
            </th>
        <th></th><th></th>
        <th>
            <img src="img/img/email.png" 
            alt="My Youtube Profile"
            class="icon"
            onclick="window.open('https://github.com/saeedutsha')"
            />
    </th>
  
</th>
<th></th><th></th>
<th>
    <img src="img/img/githhub.png" 
    alt="My Youtube Profile"
    class="icon"
    onclick="window.open('https://github.com/saeedutsha')"
    />
</th>
<th></th><th></th>
<th>
    <img src="img/img/link.png" 
    alt="My Youtube Profile"
    class="icon"
    onclick="window.open('https://github.com/saeedutsha')"
    />
</th>
        </table>
    </div>
    <p class="footer-company-name" align ="center">Copyright © 2024 <strong>Tirtho Mondal</strong> All rights reserved</p>
</footer>


    <script src="script.js"></script>
    <script src="mixitup.min.js"></script>
</body>
</html>