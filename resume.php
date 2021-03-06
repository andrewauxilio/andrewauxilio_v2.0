<!DOCTYPE html>
<html>

<!----------------------------------------------------------------->
<!-------------------------RESUME PAGE----------------------------->
<!----------------------------------------------------------------->
<head>
    <title>Andrew Auxilio - Curriculum Vitae</title>

    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="The Curriculum Vitae of Andrew Auxilio." />
    <meta charset="UTF-8">

    <!-- link to custom resume CSS -->
    <link type="text/css" rel="stylesheet" href="styles/resume.css">

    <!-- link Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

    <!-- link to favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
</head>

<body id="top">

    <!-- link to navbar module-->
	<?php include("modules/navbar.php");?>
    <a href="https://docs.google.com/document/d/1WPzmPMmyEtU_zupMPiNBRNrp8PbAzr5pnT0uj61uCpU/edit?usp=sharing" target="_blank">
        <button class="dl_btn"><i class="fa fa-download"></i></button>
    </a>

    <!-- Resume Container-->
    <div id="cv" class="instaFade">

        <!-- Resume Header-->
        <div class="mainDetails">
            <div id="headshot" class="quickFade">
                <img src="images/headshot.jpg" alt="Andrew Auxilio" />
            </div>

            <div id="name">
                <h1 class="quickFade delayTwo">Andrew Auxilio</h1>
                <h2 class="quickFade delayThree">Website Developer</h2>
            </div>

            <div id="contactDetails" class="quickFade delayFour">
                <ul>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:andrew.auxilio@gmail.com"
                            target="_blank">andrew.auxilio@gmail.com</a></li>
                    <li><i class="fas fa-globe"></i> <a href="http://www.andrewauxilio.me">www.andrewauxilio.me</a></li>
                    <!-- <li><i class="fas fa-mobile-alt"></i> 01234567890</li> -->
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Resume About Me -->
        <div id="mainArea" class="quickFade delayFive">
            <section>
                <article>
                    <div class="sectionTitle">
                        <h1>About Me</h1>
                    </div>

                    <div class="sectionContent">
                        <p>I currently work for Dowell Windows as a junior website application 
							developer. I am an aspiring full-stack developer and I usually tinker 
							with front-end interfaces with JavaScriptand VuejS and server-side  
							architecture with PHP and Laravel. <br><br>

							When I'm not infront of my laptop working, I'm usually out working 
							on my Japanese-import car, playing with my troublesome Samoyed pup, or 
							be out on a roadtrip with family and friends.</p>
                    </div>
                </article>
                <div class="clear"></div>
            </section>

            <!-- Resume Work Experience -->
            <section>
                <div class="sectionTitle">
                    <h1>Work Experience</h1>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2>Dowell Windows</h2>
                        <p class="subDetails">May 2018 - Present</p>
						<p>
							<li>Supporting the Web Developer to code applications (Laravel & VueJS)</li>
							<li>Performing updates on all website applications using Git-Flow</li>
							<li>Creating website user interface designs using mock-up softwares </li>
							<li>Seeking more ideas and solutions for more efficient processes</li>
						</p>
                    </article>

                    <article>
                        <h2>Freelance Web Developer</h2>
                        <p class="subDetails">March 2019 - Present</p>
                        <p>
							<li>Developing websites using HTML, CSS, JavaScript PHP and MySQL</li>
							<li>Creating website user interface designs using Adobe XD</li>
							<li>Using Wordpress for eCommerce solutions and customising</li>
							<li>Hosting websites on VentraIP shared hosting servers</li>
							<li>Using Github and Bitbucket to keep track of all my work</li>
						</p>
                    </article>

                </div>
                <div class="clear"></div>
            </section>

            <!-- Resume Skills -->
            <section>
                <div class="sectionTitle">
                    <h1>Key Skills</h1>
                </div>

                <div class="sectionContent">
                    <ul class="keySkills">
                        <li>HTML5 & CSS</li>
                        <li>JavaScript & VueJS</li>
                        <li>PHP & Laravel</li>
                        <li>Wordpress</li>
                        <li>Git</li>
                        <li>UX & UI Design</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </section>

            <!-- Resume Education -->
            <section>
                <div class="sectionTitle">
                    <h1>Education</h1>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2>RMIT University</h2>
                        <p class="subDetails">Bachelor of Information Technology</p>
                    </article>

                    <article>
                        <h2>Brentwood Secondary College</h2>
                        <p class="subDetails">Victorian Certificate of Education</p>
                    </article>
                </div>
                <div class="clear"></div>
            </section>

        </div>
	</div>

	<!-- link to scripts module-->
    <?php include("modules/scripts.php");?>

</body>

</html>