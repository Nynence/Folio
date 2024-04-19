<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rishab Kiran</title>
	<link rel="icon" type="image/x-icon" href="/Images/favicon.ico">

	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="lightdark.css">
	<link rel="stylesheet" href="player.css">
	<link rel="stylesheet" href="typewriter.css">
	<link rel="stylesheet" href="preloader.css">



	<!--Font Family - Spotify Circular-->
	<link href="https://encore.scdn.co/fonts/CircularSp-Book-4eaffdf96f4c6f984686e93d5d9cb325.woff2" rel="preload" type="font/woff2">
	<link href="https://encore.scdn.co/fonts/CircularSp-Bold-fe1cfc14b7498b187c78fa72fb72d148.woff2" rel="preload" type="font/woff2">
	<link href="https://encore.scdn.co/fonts/CircularSpTitle-Bold-2fbf72b606d7f0b0f771ea4956a8b4d6.woff2" rel="preload" type="font/woff2">
	<link href="https://encore.scdn.co/fonts/CircularSpTitle-Black-3f9afb402080d53345ca1850226ca724.woff2" rel="preload" type="font/woff2">
	<link href="https://open.spotifycdn.com/cdn/fonts/spoticon_regular_2.d728648c.woff2" rel="preload" type="font/woff2">
	<link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait)" href="ipad-portrait.css" />
<link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:landscape)" href="ipad-landscape.css" />

	<!-- favicon -->
	<link rel="shortcut icon" href="" type="image/x-icon">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,200;1,300&family=Roboto:wght@100;300;400;500;700;900&display=swap');

		:root{
			--phone-bg: #272727;
			--background-alpha: 0; /* Default alpha value, adjust as needed */
			--background-rgb: 18, 18, 18; /* Default RGB values, adjust as needed */
			--banner: url(./Images/banner.png);
			--bannerphn: url(./Images/bannerphn.png);


		}

		.bannerbox img{
            content: var(--banner);
        }

		.bannerboxphn img{
            content: var(--bannerphn);
        }

			.sticky-top-bar::before, .backgradient::before {
    content: '';
    position: absolute;

    filter: saturate(100%) brightness(100%);; 
}

#content {
    visibility: hidden;
}


.bannerbox {
    position: relative;
    overflow: hidden;
	border-radius: 6px;

}

.banner {
    display: block;
}

.highlighting {
    position: absolute;
	top: 50%; /* Position from the middle vertically */
    left: 50%; /* Position from the middle horizontally */
    width: 350px; /* Adjust the size of the highlight */
    height: 350px; /* Adjust the size of the highlight */
    margin-top: -175px; /* Half of the height */
    margin-left: -175px; 
    pointer-events: none;
	mix-blend-mode: overlay; /* Blend mode for overlay effect */
	background-color: white;
	filter: blur(40px);

	
    border-radius: 100%; /* Make it circular */
    /* box-shadow: 0 0 10px 10px rgba(255, 255, 255, 0.5); Circular blur overlay */
    opacity: 0; /* Initially hidden */
    transition: opacity 0.5s ease-out; /* Smooth transition */
}


	
	  </style>

</head>
<body>

	<div id="loading-spinner">
		<div class="spinner"></div>

	</div>

	<div id="lcontent" style="display:none;">
	<div id="loading-screen" style="background-color: var(--sec-color);" width="100%" height="100%">
		
		
	
    </div>
	<div id="content">

	
	
	<div class="custom-cursor-container">
		<svg class="custom-cursor" id="Isolation_Mode" data-name="Isolation Mode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.02 22.96">
		  
			<style>
			 
			</style>
		 
		  <path  d="M29.02,11.49c0,6.33-5.14,11.47-11.47,11.47-4.98,0-9.21-3.17-10.79-7.6-3.72,2.55-6.49,5.75-6.76,6.06C4.64-1.32,17.55.01,17.55.01,23.88.01,29.02,5.15,29.02,11.49Z"/>
		</svg>
	  </div>


	
	<div class="container">
	
		<div class="sidebar" id="sidebar">
			<!-- top navigation -->
			<div class="navigation">
				
					<ul class="navpadding">
						<!-- page logo on side bare -->
						<a href="" style="cursor: none;">
							<svg  id="Layer 1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="-20 -20 600 90" width="400" height="100%" class="logo">
							

							  <path class="cls-1" d="M20.39.01c-1.27,1.35-2.27,2.92-2.94,4.61-.67,1.7-1.03,3.52-1.03,5.38v12.41c0,5.67-4.59,10.27-10.26,10.27-1.74,0-3.45-.43-4.98-1.25l-1.18-.64c1.06-.39,1.93-1.09,2.55-1.97.61-.89.96-1.96.96-3.08v-12.82C3.51,5.79,9.29.01,16.42.01h3.97Z"/>
							  <circle class="cls-1" cx="116.26" cy="6.27" r="5.34"/>
							  <path class="cls-1" d="M36.18,6.71c0,3.7-3,6.7-6.7,6.7-2.9,0-5.38-1.85-6.3-4.43-2.17,1.48-3.78,3.35-3.94,3.53C21.94-.77,29.48.01,29.48.01c3.7,0,6.7,3,6.7,6.7Z"/>
							  <path class="cls-1" d="M48.33,32.68h-8.75l.7-.49V.53l-.7-.49h8.71l-.65.45v31.7l.7.49Z"/>
							  <path class="cls-1" d="M26.43,19.01s.44.02,1.12,0h-1.12Z"/>
							  <path class="cls-1" d="M27.13,19.5l-.7-.49s.44.02,1.12,0c1.82-.08,5.38-.51,6.94-2.67v53.34l.69.5h-8.75l.7-.5V19.5Z"/>
							  <path class="cls-1" d="M74.87,22.7c-.16,2.99-1.35,5.73-3.35,7.73-1.02,1.02-1.92,1.72-2.86,2.25.78-.45,2.82-5.97.33-9.45-1.27-1.8-3.35-2.78-5.32-3.52-2.58-1.02-5.32-1.72-7.57-3.4-2.13-1.51-3.44-3.93-3.64-6.54-.16-2,.29-4.13,1.31-5.89.74-1.31,2.21-2.74,4.13-3.84,0,0-.86,1.15-.94,3.19-.08,2.66.98,4.79,2.78,6.3,1.1.9,2.41,1.43,3.72,1.88,2.86.9,5.93,1.51,8.3,3.52.98.82,1.76,1.8,2.25,2.95.65,1.39.9,3.03.86,4.83ZM53.77,21.23v.9l.08,10.55c1.1-3.11,8.55-.33,8.67-.25-7.24-3.76-8.75-11.21-8.75-11.21ZM73.69.04c-1.15,2.54-8.02,0-8.1-.04,7.61,4.21,8.14,10.63,8.14,10.63V3.64l-.04-3.6Z"/>
							  <path class="cls-1" d="M79.66,32.19V.53l-.7-.49h8.71l-.65.45v31.7l.7.49h-8.75l.7-.49ZM98.76,32.19l-.04-8.79c0-3.6-3.52-6.75-8.1-7.61h8.14V.53l-.7-.49h8.71l-.65.45v31.7l.7.49h-8.75l.7-.49Z"/>
							  <path class="cls-1" d="M148.39,32.68h-8.1l.7-.49V.53l-.7-.49h8.1v32.64ZM165.52,23.93c0,8.26-8.92,8.75-11.94,8.75,1.31-.45,3.07-.98,3.35-5.19,0,0,.16-1.8.16-3.56s-.16-3.64-.16-3.64c-.25-3.93-3.84-5.03-3.93-5.03,1.06-.41,2.82-.86,3.03-4.5,0,0,.12-1.6.12-3.11s-.12-3.19-.12-3.19c-.16-3.52-2.09-4.09-2.86-4.42,2.45,0,10.59.94,10.59,7.61,0,5.6-5.48,7.24-8.55,7.49,3.68.16,10.31,2,10.31,8.79Z"/>
							  <path class="cls-1" d="M133,8.83v19.1c0,1.53,1.13,2.82,2.65,3.03h0s-.09.06-.09.06c-1.67,1.09-3.62,1.67-5.61,1.67h0c-2.41,0-4.36-1.95-4.36-4.36V5.13c0-2.27-1.42-4.31-3.55-5.09h0s2.17,0,2.17,0c4.85,0,8.79,3.94,8.79,8.79Z"/>
							  <path class="cls-1" d="M61,70.16h-7.95c-4.74,0-5.28-.85-9.97-7.65-2.59-3.66-4.51-6.3-4.51-6.3l5.82-6.16c10.35,13.86,12.1,16.44,12.1,16.44,1.16,1.54,2,2.44,2.69,2.96.69.52,1.24.66,1.82.71Z"/>
							  <path class="cls-1" d="M60.47,37.7h0c-2.39,0-7.47,3.03-13.56,8.95,2.31-3.54,1.37-8.95-1.19-8.95h14.75Z"/>
							  <path class="cls-1" d="M110.08,24.05c0,8.26,8.92,8.75,11.94,8.75-1.3-.45-3.06-.98-3.35-5.19,0,0-.16-1.8-.16-3.56s.16-3.64.16-3.64c.25-3.93,3.84-5.03,3.93-5.03-3.68.16-12.52,1.88-12.52,8.67Z"/>
							  <g>
								<path class="cls-1" d="M73.66,70.16h-8.73l.69-.49v-31.58l-.69-.49h8.69l-.65.45v31.62l.69.49Z"/>
								<path class="cls-1" d="M79.66,69.69v-31.58l-.69-.49h8.08v32.07l.61.49h-8.69l.69-.49ZM94.75,62.47c0-4.24-.2-7.83-2.45-8.85.94-.45,2.28-.94,2.49-4.77,0,0,.12-1.67.12-3.26s-.12-3.35-.12-3.35c-.16-3.75-1.8-4.32-2.49-4.65,2.16,0,10.77.98,10.77,8,0,6.32-6.69,7.75-9.59,7.96,1.75.2,7.75,1.1,9.02,6.57.73,3.14-.57,5.1.69,6.85,1.06,1.47,2.94,1.39,4.32.65-.29.33-3.39,3.18-7.63,2.57-4.12-.61-5.14-4.57-5.14-7.71Z"/>
								<path class="cls-1" d="M161.83,70.26h-4.94l-19.38-32.11-1.06-.45h9.67l14.4,24.44,1.31-5.14v13.26ZM145.06,70.26h-8.12c4.04-2.37,4.2-9.79,4.2-9.79.33,7.34,3.92,9.79,3.92,9.79ZM161.83,46.72c-.29-6.41-3.83-9.02-3.83-9.02h8.04c-4,2.08-4.2,9.02-4.2,9.02Z"/>
								<circle class="cls-1" cx="116.26" cy="43.83" r="5.34"/>
								<path class="cls-1" d="M133,46.39v19.1c0,1.53,1.13,2.82,2.65,3.03h0s-.09.06-.09.06c-1.67,1.09-3.62,1.67-5.61,1.67h0c-2.41,0-4.36-1.95-4.36-4.36v-23.19c0-2.27-1.42-4.31-3.55-5.09h0s2.17,0,2.17,0c4.85,0,8.79,3.94,8.79,8.79Z"/>
								<path class="cls-1" d="M110.08,61.61c0,8.26,8.92,8.75,11.94,8.75-1.3-.45-3.36-1.47-3.49-6.34,0,0-.02-.65-.02-2.41s.16-3.64.16-3.64c.25-3.93,3.84-5.03,3.93-5.03-3.68.16-12.52,1.88-12.52,8.67Z"/>
							  </g>
							  <polygon class="cls-1" points="27.13 19.5 27.13 19.52 26.43 19.01 27.13 19.5"/>
							</svg>								
						</a>	
						<li class="paddinghome">
							
						</li>
						<li id="homeItem" class="paddinghome">
							<a href="/index.html" class="home" >
								<svg data-encore-id="icon" role="img" aria-hidden="true" class="home-active" viewBox="0 0 24 24">
									<path  d="M13.5 1.515a3 3 0 0 0-3 0L3 5.845a2 2 0 0 0-1 1.732V21a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V7.577a2 2 0 0 0-1-1.732l-7.5-4.33z"></path>
								</svg>
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="" class="search" id="searchButton">
								<svg data-encore-id="icon" role="img" aria-hidden="true" class="search-inactive" viewBox="0 0 24 24">
									<path d="M15.356 10.558c0 2.623-2.16 4.75-4.823 4.75-2.664 0-4.824-2.127-4.824-4.75s2.16-4.75 4.824-4.75c2.664 0 4.823 2.127 4.823 4.75z"></path>
									<path d="M10.533 1.279c-5.18 0-9.407 4.14-9.407 9.279s4.226 9.279 9.407 9.279c2.234 0 4.29-.77 5.907-2.058l4.353 4.353a1 1 0 1 0 1.414-1.414l-4.344-4.344a9.157 9.157 0 0 0 2.077-5.816c0-5.14-4.226-9.28-9.407-9.28zm-7.407 9.279c0-4.006 3.302-7.28 7.407-7.28s7.407 3.274 7.407 7.28-3.302 7.279-7.407 7.279-7.407-3.273-7.407-7.28z"></path>
								</svg>
								<span>Search</span>
							</a>
						</li>
					</ul>
			
			</div>
			<div class="resize-handle" id="resizeHandle"></div>
			<!-- bottom navigation -->
			<div class="bottomnav">
				<a href="" class="about">
					<svg data-encore-id="icon" role="img" aria-hidden="true" class="home-active" viewBox="-3 0 80 70">
							  <path  d="M60,0H14C6.28,0,0,6.28,0,14v46c0,7.72,6.28,14,14,14h46c7.72,0,14-6.28,14-14V14c0-7.72-6.28-14-14-14ZM37,12.5c6.08,0,11,4.92,11,11s-4.92,11-11,11-11-4.92-11-11,4.92-11,11-11ZM58,62H16v-7.5c0-6.63,5.37-13.5,12-13.5h18c6.63,0,12,6.87,12,13.5v7.5Z"/>
					</svg>
					<span>About</span>
				</a>
				<div class="buttons">
					<button class="me" onclick="toggleButtons(this)">Me</button>
					<button class="contact" onclick="toggleButtons(this)">Contact</button>
				</div>
				<?php include 'about_me.php'; ?>

				<div class="metext" >

					<h5> 
						HEY THERE!
					</h5>
					<h4 class="pointer" id="toggleText" onclick="toggleContent()">
						I'm Rish.
					</h4>
				
					<p id="p"  class="typewriter">
						A passionate  designer and recent graduate from the University of Melbourne with a Bachelor of Design, majoring in Graphic Design and User Experience. Hailing from Melbourne, Australia, I thrive on challenges that enable me to acquire new skills and integrate them into my future works.
						<br>
						<br>
						My expertise spans the Adobe Suite, motion design, and a touch of 3D, with a keen interest in expanding my proficiency. As a design enthusiast, I am excited about leveraging my skills to create impactful and visually engaging experiences. Let's connect and explore the endless possibilities of design together!
					</p>

					<p id="p2">
						When I'm not designing, you'll find me lost playing video games like Valorant. Whilst I am an avid sport watcher - most recently getting into Formula 1 - I also make time to play cricket and tennis weekly. And if you catch me randomly wielding a lawnmower, don't be surprised; there's something oddly therapeutic about transforming my lawn.
						<br>
						<br>
						If this Spotify-inspired portfolio didn't give it away,  I've got a serious love affair with music. It is my trusty companion while I am designing. Oh, and when I need to release some pent-up frustration, you'll catch me letting it all out on the drums. It's my way of adding a beat to the creative process.
					</p>

				</div>

				



				<form  action="https://formsubmit.co/rishabkiran.creative@gmail.com" method="POST" class="contactform">
					
					
					<div class="form-group">
						<label for="name">Name <span class="required-indicator">*</span></label>
						<input type="text" id="name" name="FNAME" placeholder="John Doe" required>
					</div>
			
					<div class="form-group">
						<label for="email">Email <span class="required-indicator">*</span></label>
						<input type="email" id="email" name="EMAIL" placeholder="john@example.com" required>
					</div>
			
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="tel" id="phone" name="PHONE" placeholder="(+61) 412-345-567">
					</div>
			
					<div class="form-group">
						<label for="message">Message <span class="required-indicator">*</span></label>
						<textarea id="message" name="MESSAGE" placeholder="Type your message here" rows="4" required></textarea>
					</div>
			
					<button type="submit" name="Submit" >Submit</button>

					<input type="hidden" name="_captcha" value="false">
					<input type="hidden" name="_template" value="box">
					<input type="hidden" name="_next" value="https://rishabkiran.com/success.html">




				</form>
				
				
			</div>
		</div>
		<!-- rightside -->
		<section class="home-page">
			<div class="backgradient" id="backgradient"></div>

			

			
			
			<div class="custom-scroll" onscroll="updateProgressBar()">
				<div class="sticky-top-bar" id="stickyTopBar" data-color="18, 18, 18" >

					

					<div class="phonenav" >
	
						<div class="phonelogo">
						<svg viewBox="-2 0 40.18 31.68" >
	
					<path d="M20.39,0c-1.27,1.35-2.27,2.92-2.94,4.61-.67,1.7-1.03,3.52-1.03,5.38v12.41c0,5.67-4.59,10.27-10.26,10.27-1.74,0-3.45-.43-4.98-1.25l-1.18-.64c1.06-.39,1.93-1.09,2.55-1.97.61-.89.96-1.96.96-3.08v-12.82C3.51,5.79,9.29,0,16.42,0c0,0,3.97,0,3.97,0Z"/>
					<path d="M36.18,6.71c0,3.7-3,6.7-6.7,6.7-2.9,0-5.38-1.85-6.3-4.43-2.17,1.48-3.78,3.35-3.94,3.53C21.94-.77,29.48,0,29.48,0c3.7,0,6.7,3,6.7,6.7Z"/>
						</svg>
						</div>
						<a href="/index.html" class="phonebtn1">Home</a>
						<a href="/me.html" class="phonebtn2" >About Me</a>
						<a href="/contact.html" class="phonebtn3">Contact</a>
					</div>
					
					<!-- Sticky content -->
					<div class="backforward"  ;
					opacity: 0.6;>
						<button class="back" onclick="goBack()"   data-title="Go back" id="backButton" aria-hidden="true">
							<svg data-encore-id="icon" role="img" aria-hidden="true" class="backarrow" viewBox="0 0 16 16">
								<path d="M11.03.47a.75.75 0 0 1 0 1.06L4.56 8l6.47 6.47a.75.75 0 1 1-1.06 1.06L2.44 8 9.97.47a.75.75 0 0 1 1.06 0z"></path>
							</svg>
						</button>
						<button class="forward" onclick="goForward()" data-title="Go forward" id="forwardButton">
							<svg data-encore-id="icon" role="img" aria-hidden="true" class="forwardarrow" viewBox="0 0 16 16">
								<path d="M4.97.47a.75.75 0 0 0 0 1.06L11.44 8l-6.47 6.47a.75.75 0 1 0 1.06 1.06L13.56 8 6.03.47a.75.75 0 0 0-1.06 0z"></path>
							</svg>
						</button>
					</div>
					<div class="search-box" id="searchBox">
						<div class="search-icon">
							<svg data-encore-id="icon" role="img" aria-hidden="true" class="search-icon-svg" viewBox="0 0 24 24">
								<path d="M10.533 1.279c-5.18 0-9.407 4.14-9.407 9.279s4.226 9.279 9.407 9.279c2.234 0 4.29-.77 5.907-2.058l4.353 4.353a1 1 0 1 0 1.414-1.414l-4.344-4.344a9.157 9.157 0 0 0 2.077-5.816c0-5.14-4.226-9.28-9.407-9.28zm-7.407 9.279c0-4.006 3.302-7.28 7.407-7.28s7.407 3.274 7.407 7.28-3.302 7.279-7.407 7.279-7.407-3.273-7.407-7.28z"></path>
							</svg>
						</div>
						<input type="text" id="searchInput" placeholder="Search projects...">
					</div>
					
					<span class="colourbtns">
					
	
						<label class="toggle-switch" for="modeToggle" title="Mode">
							<input type="checkbox" id="modeToggle" checked />
							<span class="slider"></span>
						</label>
						
	
						
						<div class="color-picker-container" title="Accent">
							<div id="colorSwatch"></div>
							<input type="color" id="accentColorPicker" style="position: absolute; top: 50; opacity: 0; pointer-events: none;">
							<div id="svgOverlay" class="svg-overlay">
								<svg width="30" height="30" viewBox="0 -12 40 80">
									<!-- Give your SVG path an id -->
									<!-- <path class="colored-path" id="svgPath" d="M21.49.63c-.76-.84-2.22-.84-2.98,0C16.62,2.75,0,21.56,0,31.97c0,11.03,8.97,20,20,20s20-8.97,20-20C40,21.56,23.38,2.75,21.49.63ZM20,43.97c-6.62,0-12-5.38-12-12,0-1.1.9-2,2-2s2,.9,2,2c0,4.41,3.59,8,8,8,1.1,0,2,.9,2,2s-.9,2-2,2Z"/> -->
								</svg>
							</div>
						</div>
						
	
						
						
						
						
						
					</span>		
					
					
					
	
	
	
						
				
				</div>
				

				<div class="projects" >
					<div class="bannerbox"> 
					
					<img width="100%" class="banner" src="" alt="">
					<div class="highlighting"></div>

					</div>
					<div class="bannerboxphn"> 

					<img width="100%" class="bannerphn" src="./Images/bannerphn.png" alt="">
					</div>


				<!-- <h2>Browse projects</h2> -->
				<!-- <div class="list" id="card"   > -->

					<div class="list" id=""  style="margin-top: 40px;" >
						<a href="/projects/bartr.html"  class="item"  data-tags="November 2023, app, ui, ux" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/bartr.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Bartr App</h3>
							<style>
								 .truncate {
									display: -webkit-box;
									-webkit-line-clamp: 2;
									-webkit-box-orient: vertical;
									overflow: hidden;
								}
							  </style>
							<p class="truncate">Rishab Kiran, Stephanie Cheng, Miranda Prestage, Freya Rush, Xinyu Choot, Ed Gu</p>



						</a>
						<a href="/projects/buxton.html"  class="item"  data-tags="2022" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/bux.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Buxton Contemporary</h3>
							<p class="truncate" style="-webkit-line-clamp: 1;
							">Rishab Kiran, Ronald Liao, Xinyu Choot</p> 
						</a>
						<a href="/projects/mandala.html"  class="item"  data-tags="November 2023, AR, VR, augmented reality. " >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/man.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>The Mandala Journal</h3>
							<p>Rishab Kiran</p> 
						</a>

						<a href="/projects/black-orpheus.html"  class="item"  data-tags="2022, ux, ui, website, app" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/black.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Black Orpheus</h3>
							<p>Rishab Kiran</p> 
						</a>

						<a href="/projects/transurban.html"  class="item"  data-tags="May 2018, transurban, ui, ux, app" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/transurban.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Transurban T5</h3>
							<style>
								 .truncate {
									display: -webkit-box;
									-webkit-line-clamp: 2;
									-webkit-box-orient: vertical;
									overflow: hidden;
								}
							  </style>
							<p class="truncate">Rishab Kiran</p>



						</a>
						<a href="/projects/eye.html"  class="item"  data-tags="April 2022, Movie, shortfilm, book," >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/eye.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Eye of the Lacquer</h3>
							<p>Rishab Kiran</p> 
						</a>
						<a href="/projects/vsi.html"  class="item"  data-tags="October 2023, book, print" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/vsi.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Very Short Introductions</h3>
							<p>Rishab Kiran</p> 
						</a>
						<a href="/projects/marioworld.html"  class="item"  data-tags="August 2021, mario, world, axonometric, Illustrator" >
							<div class="imgbox">
								<img id="mgImage"  src="./Images/Thumbnails/marioworld.webp" alt="" >
							</div>
							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Mario World</h3>
							<p>Rishab Kiran</p> 
						</a>
						<a href="/projects/pattern-surface.html"  class="item"  data-tags="September 2021, pattern, surface, fabrication, 3d, render" >
							<div class="imgbox">
							<img id="mgImage" src="./Images/Thumbnails/pattern.webp" alt="" >
								</div>
							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Raphael 2.0</h3>
							<p>Rishab Kiran</p> 
						</a>
						<a href="/projects/isidora.html"  class="item"  data-tags="October 2021, frame, field, 3d" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/isidora.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>City of Isidora</h3>
							<p>Rishab Kiran</p> 
						</a>
						<a href="/projects/sydneysamurais.html"  class="item"  data-tags="2020" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/sydney.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Sydney Samurais</h3>
							<p>Rishab Kiran</p> 
						</a>
						<a href="/projects/esports-social.html"  class="item"  data-tags="2016, 2017, 2018, 2019" >
							<div class="imgbox">
								<img id="mgImage" src="./Images/Thumbnails/essm.webp" alt="" >
							</div>

							<div class="play">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
								</span>
							</div>
							<h3>Esports & Social Media</h3>
							<p>Rishab Kiran</p> 
						</a>
						
						
					</div>
				</div>
	   
			</div>
		</section>
		<section class="bottomplayer">
		<div class="music-player">
			<div class="phoneprogress-container">
				<div class="phoneprogress-bar"></div>
			</div>
			<div class="song-details">
				<div class="image-backer">
				<div class="albumcover" style="background-color: var(--accent-color)"> <img src="./Images/home-r-album.png" alt=""> </div>
				</div>
				<div class="song-info"> 
					<div class="song-title">Browse Projects</div>
					<div class="artist">Rishab Kiran</div>
				</div>
				
			</div>
			<div class="player">
				<div class="controls" >
				
					<div class="sharetitle" id="phonesharetitle">

						<svg id="phoneshare" viewBox="0 0 98.89 73.83">
						
							<path  d="M98.89,26.2c0,1.22-.54,2.37-1.48,3.15l-26.9,22.13c-1.74,1.43-4.3,1.18-5.73-.56-.6-.73-.93-1.64-.93-2.59v-10.88l-16.16-.12c-21.55-.11-40.26,14.83-44.92,35.87-.08.37-.41.63-.79.63h0c-.38,0-.7-.26-.79-.63C.39,69.74,0,66.2,0,62.64.03,36.32,21.37,14.98,47.69,14.95h16.15V4.07C63.84,1.82,65.67,0,67.91,0c.94,0,1.86.33,2.59.93l26.9,22.13c.94.77,1.49,1.93,1.48,3.15Z"/>
						</svg>
						</div>
					

				<button style="--button-size: 32px;" class="rightbtn" data-title="Scroll to top">
						<svg  data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 16 16" class="totop">
							<path d="M3.3 1a.7.7 0 0 1 .7.7v5.15l9.95-5.744a.7.7 0 0 1 1.05.606v12.575a.7.7 0 0 1-1.05.607L4 9.149V14.3a.7.7 0 0 1-.7.7H1.7a.7.7 0 0 1-.7-.7V1.7a.7.7 0 0 1 .7-.7h1.6z"></path>						</svg>
						</button>

						
					
				<input type="checkbox" id="play-toggle" class="play-toggle">
				<label for="play-toggle" class="play-button">
					<svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 -1 18 18" class="start">
						<path d="M3 1.713a.7.7 0 0 1 1.05-.607l10.89 6.288a.7.7 0 0 1 0 1.212L4.05 14.894A.7.7 0 0 1 3 14.288V1.713z"></path>
					</svg>
					<svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="1 0 16 16" class="swap">
						<path d="M2.7 1a.7.7 0 0 0-.7.7v12.6a.7.7 0 0 0 .7.7h2.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7H2.7zm8 0a.7.7 0 0 0-.7.7v12.6a.7.7 0 0 0 .7.7h2.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7h-2.6z"></path>
					</svg>
					<span class="tooltip-text">Auto Scroll</span>

				</label>


				<input type="checkbox" id="phone-toggle" class="phone-toggle">
				<label for="phone-toggle" class="phone-button">
					<svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 -1 18 18" class="phone-start">
						<path d="M3 1.713a.7.7 0 0 1 1.05-.607l10.89 6.288a.7.7 0 0 1 0 1.212L4.05 14.894A.7.7 0 0 1 3 14.288V1.713z"></path>
					</svg>
					<svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="1 0 16 16" class="phone-swap">
						<path d="M2.7 1a.7.7 0 0 0-.7.7v12.6a.7.7 0 0 0 .7.7h2.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7H2.7zm8 0a.7.7 0 0 0-.7.7v12.6a.7.7 0 0 0 .7.7h2.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7h-2.6z"></path>
					</svg>
				</label>
				

				<button style="--button-size: 32px;" class="leftbtn" data-title="Scroll to bottom">
				<svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 16 16" class="tobottom">
					<path d="M12.7 1a.7.7 0 0 0-.7.7v5.15L2.05 1.107A.7.7 0 0 0 1 1.712v12.575a.7.7 0 0 0 1.05.607L12 9.149V14.3a.7.7 0 0 0 .7.7h1.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7h-1.6z"></path>
				</svg>
				
				</button>

			

					

					
					<!-- <button class="control-button">Previous</button>
					<button class="play-button">					
						<svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 -1 18 18" class="start">
							<path d="M3 1.713a.7.7 0 0 1 1.05-.607l10.89 6.288a.7.7 0 0 1 0 1.212L4.05 14.894A.7.7 0 0 1 3 14.288V1.713z"></path></svg>
					</button>
					<button class="control-button">Next</button> -->
				</div>




				
				<div class="progress-bar-container" onmousedown="startDrag(event)" >
					<div class="progress-bar"></div>
					<div class="circle"></div>
				</div>
				<div class="time">
					<span id="startTime">0:00</span>
					<span id="endTime">3:15</span>
				</div>
				
				
			</div>
			
			<div class="sideplayer">
				<!-- <div> -->

					<div class="sharetitle" >
						<svg class="share" id="share" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 34.16">
							<path d="M32.53,4.25l9.58,7.88-9.58,7.87v-2.66c0-1.65-1.33-2.99-2.98-3l-7.49-.06h-.11c-6.8,0-13.11,2.91-17.58,7.63,2.82-7.01,9.69-11.97,17.69-11.98h7.47c1.66,0,3-1.34,3-3v-2.67M31.42,0c-1.04,0-1.89.85-1.89,1.89v5.03h-7.47C9.88,6.93,.01,16.8,0,28.98c-.01,1.65.18,3.29.54,4.89.04.17.20.29.37.29.18,0,.33-.12.37-.29,2.14-9.7,10.75-16.6,20.67-16.6h.11l7.47.06v5.03c0,.44.15.86.43,1.20.37.45.91.68,1.46.68.42,0,.84-.14,1.19-.43l12.45-10.23c.43-.36.69-.89.69-1.46s-.26-1.09-.69-1.45L32.61.43c-.34-.28-.76-.43-1.19-.43h0Z"/>
						</svg>
						<span class="tooltip-text">Share</span>
					</div>
					

					<div class="rabbitslider">
					<div class="rabbittitle">

				<svg id="rabbit" class="rabbit" role="img" aria-hidden="true" viewBox="0 0 53 35">
					  <path  d="M34.2,3c.22,0,.49.04.8.11,1.24.27,2.31.9,2.89,2,1.43,2.7,3.7,4.37,6.38,5.61.67.31,1.26.79,1.88,1.22,1.63,1.15,2.12,2.93,2.5,4.73.18.84-.43,1.69-1.28,1.95-.59.18-1.23.24-1.85.3-.67.07-1.35.1-2.02.13-1.37.05-2.4.69-3.06,1.86-1.44,2.56-3.81,3.95-6.35,5.14-.06.03-.14.02-.21.03.5-5.83-2.7-9.33-5.93-9.4.57.37,1.2.68,1.73,1.12,2.17,1.81,2.86,4.2,2.62,6.93-.09.98-.22,1.96-.29,2.95-.04.58.06.74.48.74.1,0,.22,0,.36-.02,2.73-.29,5.46-.56,8.19-.81.16-.01.31-.02.47-.02.81,0,1.59.2,2.28.72.47.35.97.75.8,1.41-.18.67-.76.98-1.4,1.1-.15.03-.32.04-.48.04-.18,0-.36-.02-.53-.06-1.42-.37-2.83-.55-4.23-.55-1.87,0-3.74.32-5.6.9-.68.21-1.2.41-1.64.41-.65,0-1.13-.44-1.75-1.91-.65-1.56-2-2.2-3.54-2.56-1.17-.27-2.33-.59-3.5-.87-.2-.05-.41-.05-.61-.05-.03,0-.05,0-.08,0,0,0-.02,0-.03,0-2.44,0-4.87,0-7.31,0h0c-.11,0-.22,0-.34,0-.08,0-.16,0-.24,0-.69-.06-1.1-.48-1.08-1.11.02-.63.44-1.03,1.14-1.04.72,0,1.45,0,2.17,0,.68,0,1.36,0,2.04,0,.09,0,.19,0,.28,0,.09,0,.18,0,.27,0,.15,0,.32,0,.51,0-.38-.69-.67-1.3-1.04-1.85-.12-.18-.46-.3-.7-.3-1.87-.01-3.73-.01-5.6-.01-1.09,0-2.17,0-3.26,0-.11,0-.22,0-.33,0-.11,0-.22,0-.33,0-.08,0-.17,0-.25-.02-.6-.09-.97-.43-.98-1.05-.01-.63.35-1,.95-1.08.18-.02.36-.03.55-.03.25,0,.5.01.75.01h0c1.25,0,2.49,0,3.74,0,1.36,0,2.72,0,4.08,0h.81c.06-.74.1-1.4.16-2.18-.16,0-.31,0-.45,0s-.28,0-.42,0c-2.89,0-5.78,0-8.68,0-1.02,0-2.03,0-3.05,0-.11,0-.23,0-.34,0-.1,0-.21,0-.31-.02-.53-.09-.88-.41-.92-.96-.05-.58.25-.97.81-1.13.17-.05.34-.05.52-.05.06,0,.13,0,.19,0h0c2.06,0,4.12,0,6.18,0,2.18,0,4.37,0,6.55,0,0,0,0,0,0,0,.42,0,.69-.11.94-.48.39-.57.88-1.07,1.36-1.65-.22-.02-.42-.04-.63-.04-3.55,0-7.09,0-10.64,0h0c-.11,0-.21,0-.32,0s-.22,0-.33-.02c-.54-.08-.87-.41-.91-.96-.04-.55.21-.94.74-1.09.2-.06.43-.08.64-.08,4.85,0,9.7-.02,14.55-.02,1.35,0,2.7,0,4.05,0,2.26,0,4.37.62,6.4,1.59,1.06.51,2.13,1.02,3.22,1.45.26.1.52.16.77.16.39,0,.78-.14,1.12-.46.71-.69.75-1.63,0-2.46-.76-.84-1.58-1.62-2.38-2.42-1.18-1.19-2-2.58-2.4-4.22-.29-1.15-.09-1.65.73-1.65M34.2,0c-1.71,0-2.66.88-3.07,1.41-1.19,1.52-.73,3.36-.58,3.97.32,1.28.83,2.46,1.53,3.55-1.8-.61-3.57-.92-5.34-.92-1.35,0-2.7,0-4.05,0-3.59,0-7.18,0-10.76.01h-3.79c-.54,0-1.02.07-1.48.2-1.86.54-3.02,2.21-2.9,4.15-.23.02-.48.06-.75.14C1.05,13.05-.16,14.77.02,16.78c.16,1.81,1.38,3.2,3.14,3.61-.01.14-.02.29-.01.44.03,2.08,1.46,3.67,3.56,3.97.21.03.43.05.67.05.08,0,.16,0,.24,0h.09s.33,0,.33,0h1.2s0,.09,0,.14c-.05,2.23,1.56,3.99,3.84,4.17.16.01.32.02.49.02h.22s.12,0,.12,0h1.79c1.84,0,3.68,0,5.51,0,0,0,.07,0,.07,0,.03,0,.06,0,.08,0,0,0,0,0,0,0,.47.11.95.23,1.42.35.65.17,1.31.33,1.97.48,1.24.29,1.37.59,1.45.79.43,1.03,1.57,3.75,4.51,3.75.83,0,1.53-.23,2.2-.44l.34-.11c1.64-.51,3.18-.76,4.7-.76,1.16,0,2.33.15,3.46.45.41.11.84.16,1.29.16.34,0,.69-.03,1.03-.1,1.93-.36,3.3-1.56,3.75-3.29.31-1.2.24-2.97-1.9-4.57-1.17-.87-2.54-1.31-4.07-1.31,0,0-.02,0-.03,0,.58-.64,1.11-1.37,1.57-2.19.16-.28.24-.33.56-.34.7-.03,1.46-.06,2.23-.14h.11c.68-.08,1.45-.17,2.27-.41,2.38-.71,3.86-3.1,3.36-5.45-.48-2.25-1.2-4.8-3.71-6.56-.12-.08-.24-.17-.36-.26-.56-.4-1.19-.86-1.98-1.23-2.49-1.15-4.03-2.48-4.99-4.3-.95-1.79-2.69-3.04-4.9-3.52-.54-.12-1.01-.18-1.45-.18h0Z"/>

					   </svg>
					   <span class="tooltip-text">Scroll speed</span>

					</div>

				<!-- </div> -->
				<div class="slider-container" onmousedown="startDragEvent(event)">
					<div class="slider-bar"></div>
					<div class="slider-handle" onmousedown="startDragEvent(event)"></div>
				</div>
				<!-- <svg id="fullscreen-icon" role="img" aria-hidden="true" viewBox="0 0 20 20" class="fullscreen"><path d="M6.53 9.47a.75.75 0 0 1 0 1.06l-2.72 2.72h1.018a.75.75 0 0 1 0 1.5H1.25v-3.579a.75.75 0 0 1 1.5 0v1.018l2.72-2.72a.75.75 0 0 1 1.06 0zm2.94-2.94a.75.75 0 0 1 0-1.06l2.72-2.72h-1.018a.75.75 0 1 1 0-1.5h3.578v3.579a.75.75 0 0 1-1.5 0V3.81l-2.72 2.72a.75.75 0 0 1-1.06 0z"></path></svg> -->
			</div>

				<div class="fstitle">

					<svg id="fullscreen-icon" role="img" aria-hidden="true" viewBox="0 0 24 16" class="fullscreen" title="Fullscreen">
						<!-- Single path element with dynamic path data -->
						<path id="togglePath" class="normal-size" d="M6.53 9.47a.75.75 0 0 1 0 1.06l-2.72 2.72h1.018a.75.75 0 0 1 0 1.5H1.25v-3.579a.75.75 0 0 1 1.5 0v1.018l2.72-2.72a.75.75 0 0 1 1.06 0zm2.94-2.94a.75.75 0 0 1 0-1.06l2.72-2.72h-1.018a.75.75 0 1 1 0-1.5h3.578v3.579a.75.75 0 0 1-1.5 0V3.81l-2.72 2.72a.75.75 0 0 1-1.06 0z"></path>

					</svg>
					

					<span class="fs-text">Full screen</span>		
				</div>


				

			</div>

			
			


			

		
			

			
		</div>
		<span class="lowerphonegrad">

		</span>
		</section>



		

		
	</div>

</div>

	

	<!-- javascrips -->
    <script src="/js/resize.js"></script>
	<script src="/js/backforward.js"></script>
	<script src="/js/colourmode.js"></script>
	<script src="/js/accent.js"></script> 
	<script src="/js/search.js"></script> 
	<script src="/js/cardhover.js"></script> 
	<script src="/js/about.js"></script> 
	<script src="/js/phonescroll.js"></script> 
	<script src="/js/player.js"> </script>
	<script src="/js/playbtn.js"> </script>
	<script src="/js/fullscreen.js"> </script>
	<script src="/js/topbar.js"> </script>
	<script src="/js/meswap.js"> </script>
	<script src="/js/preloader.js"> </script>
	<script src="/js/cursor.js"> </script>




	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var items = document.querySelectorAll('.item');
			items.forEach(function(item, index) {
				item.style.animationDelay = (index * 0.1) + 's';
			});
		});
		
// Select the container element
const container = document.getElementById('card');

// Select all items inside the container
const items = Array.from(container.getElementsByClassName('item'));

// Sort the items based on the date in data-tags attribute
items.sort((a, b) => {
    const dateA = new Date(a.getAttribute('data-tags').split(',')[0]);
    const dateB = new Date(b.getAttribute('data-tags').split(',')[0]);
    return dateB - dateA;
});

// Remove all items from the container
while (container.firstChild) {
    container.removeChild(container.firstChild);
}

// Append the sorted items back to the container
items.forEach(item => {
    container.appendChild(item);
});

		
		</script>

	





<script src="about_me.js"></script>




</body>

