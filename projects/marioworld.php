<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rishab Kiran</title>
	<link rel="icon" type="image/x-icon" href="../Images/favicon.ico">

	<link rel="stylesheet" href="../home.css">
	<link rel="stylesheet" href="../lightdark.css">
	<link rel="stylesheet" href="../playerproject.css">
	<link rel="stylesheet" href="../projects.css">
	<link rel="stylesheet" href="../header.css">
	<link rel="stylesheet" href="../preloader.css">





	<!--Font Family - Spotify Circular-->
	<link href="https://encore.scdn.co/fonts/CircularSp-Book-4eaffdf96f4c6f984686e93d5d9cb325.woff2" rel="preload" type="font/woff2">
	<link href="https://encore.scdn.co/fonts/CircularSp-Bold-fe1cfc14b7498b187c78fa72fb72d148.woff2" rel="preload" type="font/woff2">
	<link href="https://encore.scdn.co/fonts/CircularSpTitle-Bold-2fbf72b606d7f0b0f771ea4956a8b4d6.woff2" rel="preload" type="font/woff2">
	<link href="https://encore.scdn.co/fonts/CircularSpTitle-Black-3f9afb402080d53345ca1850226ca724.woff2" rel="preload" type="font/woff2">
	<link href="https://open.spotifycdn.com/cdn/fonts/spoticon_regular_2.d728648c.woff2" rel="preload" type="font/woff2">
	<!-- favicon -->
	<link rel="shortcut icon" href="" type="image/x-icon">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,200;1,300&family=Roboto:wght@100;300;400;500;700;900&display=swap');

		:root{
			--albumcover: url(../Images/Thumbnails/marioworld.webp);
			--phone-bg: #272727;
			--background-alpha: 0; /* Default alpha value, adjust as needed */
			--background-rgb: 235, 105, 37; /* Default RGB values, adjust as needed */
			--artist: 'Jeff'



		}

		#mariofinal {

    width: 50%;
    animation: moveUpDown 7s ease-in-out infinite; /* Adjust duration and timing function as needed */
}




@keyframes moveUpDown {
    0%, 100% {
        transform: translateY(0); /* Start and end position */
    }
    50% {
        transform: translateY(-50px); /* Middle position - adjust as needed */
    }
}

        .albumcover img{
            content: var(--albumcover);
        }

		@media  only screen and (max-width: 850px) {

		#mariosplit{
        flex-direction: column-reverse;

    }
    
    #mariofinal{
        width: 100%;


    }	

	.split{
        flex-direction: column; /* Change flex-direction to column */
        max-width: 100%;
   
    }




	
}

		
	  </style>
	  <script>
		document.addEventListener('DOMContentLoaded', function() {
  		console.log('Page has been loaded');
		var elements = document.querySelectorAll('[id="year"]');
		elements.forEach(function(element) {
			element.innerHTML = 'August 2021';
		});
		});

		document.addEventListener('DOMContentLoaded', function() {
		console.log('Page has been loaded');
		var elements = document.querySelectorAll('[id="atitle"]');
		elements.forEach(function(element) {
			element.innerHTML = 'Mario World';
 		 });
		});
		document.addEventListener('DOMContentLoaded', function() {
    console.log('Page has been loaded');

    // Get the filename from the URL
    var filename = window.location.pathname.split('/').pop(); // Extract filename from path

    // Remove file extension if present
    var projectID = filename.replace(/\.[^/.]+$/, ""); // Remove extension

    // Hide the specific project based on its ID
    var projectElement = document.getElementById(projectID);
    if (projectElement) {
        projectElement.style.display = 'none';
    }   
});


		document.addEventListener('DOMContentLoaded', function() {
		console.log('Page has been loaded');
		var elements = document.querySelectorAll('[id="aartist"]');
		elements.forEach(function(element) {
			element.innerHTML = 'Rishab Kiran';
 		 });
		});

	</script>

</head>


<body>
<!-- <div id="loading-screen">
    </div>
	<div id="content"> -->


	<div class="custom-cursor-container">
		<svg class="custom-cursor" id="Isolation_Mode" data-name="Isolation Mode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.02 22.96">
		  
			<style>
			 
			</style>
		 
		  <path  d="M29.02,11.49c0,6.33-5.14,11.47-11.47,11.47-4.98,0-9.21-3.17-10.79-7.6-3.72,2.55-6.49,5.75-6.76,6.06C4.64-1.32,17.55.01,17.55.01,23.88.01,29.02,5.15,29.02,11.49Z"/>
		</svg>
	  </div>
	
	<div class="container">
	<?php include 'sidebarp.php'; ?>

		<!-- rightside -->
		<section class="home-page">
			
			

			<span class="backgradient"></span>

			
			<div class="custom-scroll" onscroll="updateProgressBar()">
				<div class="sticky-top-bar" id="stickyTopBar">



					

					<div class="phonenav" >
	
						<div class="phonelogo">
						<svg viewBox="-2 0 40.18 31.68" >
	
					<path d="M20.39,0c-1.27,1.35-2.27,2.92-2.94,4.61-.67,1.7-1.03,3.52-1.03,5.38v12.41c0,5.67-4.59,10.27-10.26,10.27-1.74,0-3.45-.43-4.98-1.25l-1.18-.64c1.06-.39,1.93-1.09,2.55-1.97.61-.89.96-1.96.96-3.08v-12.82C3.51,5.79,9.29,0,16.42,0c0,0,3.97,0,3.97,0Z"/>
					<path d="M36.18,6.71c0,3.7-3,6.7-6.7,6.7-2.9,0-5.38-1.85-6.3-4.43-2.17,1.48-3.78,3.35-3.94,3.53C21.94-.77,29.48,0,29.48,0c3.7,0,6.7,3,6.7,6.7Z"/>
						</svg>
						</div>
						<a href="/index.html" class="phonebtn2" >Home</a>
						<a href="/me.html" class="phonebtn2" >About Me</a>
						<a href="/contact.html" class="phonebtn3">Contact</a>
					</div>
					
					<!-- Sticky content -->
					<div class="backforward">
						<button class="back" onclick="goBack()" data-title="Go back"  id="backButton" >
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

					<div class="scrolling-text hidden">
						<!-- Your scrolling text content here -->
						<div id="atitle">croissantrepresentation</div>
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


			
				<span class="gradient">
					

				</span>

				
				<div class="headerwork">

					<img style="content: var(--albumcover)"  alt="" >

					<div class="albumcontainer">
						<div class="titlebox"> 
							<div id="atitle">croissantrepresentation</div>
						</div>
						<div class="subtext">
							<!-- <h7 id="aartist">Rishab Kiran</h7> -->
							<span class="year" id="year" >2021</span>
						</div>
						
					
					</div>


				</div >

				<div class="projects" style="padding-bottom: 50px; background-color: ;">

				
					<div id="lb-back">
						<div id="lb-img"></div>
					  </div>

					<div class="intro">
						<div class="overview">
							<h8>Overview</h8>
							<p>This project explored the concept of flatness and projection which correlates to the spatial relation between 2-Dimensional and 3-Dimensional space. It explores axonometric projection and applies this to an assigned Mario world elevation. These elevations were flat in nature and lack perceivable depth. Being able to physically enter something and observe around objects adds to the immersion of a piece of work. Hence trying to project this as an axonometric drawing meant interpreting the hidden space behind the frontal perspective and ensuring measurements of objects were consistent in relation to the elevation. Creating this projection cohesively was a challenge as compositional considerations had to be made in relation to hierarchy, balance and negative space.</p>
						</div>
						<div class="tools">
							<h8>Tools</h8>
							<p >Adobe Illustrator</p>
							<img width="100px" src="../Images/marioworld/runningmario.gif" alt="">
						</div>


					</div>

					<img class="zoomD"    src="../Images/marioworld/elevation.webp" alt="">

					<div class="info">
						<div class="infotext">
							<h8>Elevation Extraction</h8>
							<p>The elevations that I was given  of the Mario world contained a lot of bright and warm tones due to the desert environment. This was quite a jarring elevation and I didn’t want this to be translated in the axonometric, as I felt it would overwhelm or distract the viewer. Hence, choosing which elements to extract was a well considered aspect, with the goal of achieving a pleasing experience to the viewer and reduce the apparent harshness from the elevations.
								<br><br>

								I specifically sought out objects that would contrast as well as neutralise the warm blocks in the composition. The chosen six elements were: a pipe, an arrow, a terracotta block, a brick block, an ice block, and a water element. I felt that the ice and water elements provided a good contrast to the pipe, arrow and terracotta blocks, as well gave me inspiration to explore how these elements would interact with each other. The brick block acted as a neutral element that would provide a bit of greenery which also complimented the warm and cool objects.
								<br><br>
								I aimed to really intertwine the six objects together and to create a more captivating composition. Additionally experimenting with scale, depth, rotation as well as cutting and joining was a great way to take advantage of the quirks of axonometric projection.</p>
						</div>

					</div>

					<div class="split">
						<img class="zoomD" src="../Images/marioworld/colours.webp" alt="">
						<img class="zoomD" src="../Images/marioworld/blocks.webp" alt="">


					</div>


					<div class="info">
						<div class="infotext">
							<h8>Axonometric Drawing</h8>
							<p>My projected space aimed to create a centralised composition that maintained contrast and balance. I was trying to achieve a dynamic and flowing framework to guide the viewer throughout the piece. This was approached by having a central tower to dominate the hierarchy of the composition, then coupled with falling water elements that naturally lead the viewer down, towards the bottom.
								<br><br>
								Additionally, I wanted to have some ambiguity to the composition by taking advantage of the natural hidden space in axonometric projection. Objects towards the back of the composition were obscured by using the central tower and elongating it. This allowed for me to adjust how the objects receded back  and enabled the composition at the back to be visualised and interpreted by the viewer.</p>
						</div>

					</div>
					
					<img class="zoomD" src="../Images/marioworld/drawing.webp" alt="">


					
					  

					


					<div class="split" id="mariosplit" style="background-color: rgb(0, 0, 0); max-width: 100%; "> 



						<!-- <div class='sector'> -->
						  
						<img class="zoomD" id="mariofinal" style="" src="../Images/marioworld/final.webp" alt="">



							<!-- </div> -->
					<div class="info" style="background-color: transparent;" >
						<div class="infotext" >
							<h8 class="lasttitle">Colours & Shading</h8>
							<p style="column-count: 1;"> The final axonometric projection translated the manual drawing to a vector format using Adobe Illustrator. This phase involved refining the positioning of objects and adding colour. I stayed as true as possible to the colour palette of the elevations. Where it differed was the shading and outline process. I opted for a more realistic representation and hence chose to exclude the strong black outlines of the elevations. By using gradients I was able to achieve a seamless transition of edges whilst being able to represent the light source. Gradients was also vital tool to convey texture of objects, such as the pipe and ice block which had a shiny/reflective aspect to them. Furthermore the representation of water was highly explored by incorporating transparent gradients which allowed the viewer to see how objects interacted with the water. This was especially evident with the down-scaled towers rising slightly above the water and a few ice-blocks that had water intersect halfway through them to convey buoyancy. Ultimately, the compositional choices and the colour process, created this cohesive and circular representation of the Mario world.</p>
						</div>

					</div>



				</div>

					<div class="list" id="card"   >
						
					</div>
				</div>
				<?php include '../related.php'; ?>

			</div>
		</section>
		<section class="bottomplayer">
		<div class="music-player">
			<div class="phoneprogress-container">
				<div class="phoneprogress-bar"></div>
			</div>
			<div class="song-details">
				<div class="image-backer">
				<div class="albumcover" style="background-color: none;"> <img src="" alt=""> </div>
				</div>
				<div class="song-info"> 
					<div id="atitle" class="song-title">Browse Projects</div>
					<div class="artist" id="year">Rishab Kiran</div>
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
	<script>
const intro = document.querySelector('.intro');
const zoomDs = document.querySelectorAll('.zoomD, .info');
const customScrollContainer = document.querySelector('.custom-scroll');

const fadeInOptions = {
  threshold: [0, 0.5, 0.1]
};

const fadeInObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible');
    }
  });
}, fadeInOptions);

fadeInObserver.observe(intro);
zoomDs.forEach(zoomD => {
  fadeInObserver.observe(zoomD);
});

	</script>
    <script src="../js/resize.js"></script>
	<script src="../js/backforward.js"></script>
	<script src="../js/colourmode.js"></script>
	<script src="../js/accent.js"></script> 
	<script src="../js/cardhover.js"></script> 
	<script src="../js/about.js"></script> 
	<script src="../js/phonescroll.js"></script> 
	<script src="../js/player.js"> </script>
	<script src="../js/playbtn.js"> </script>
	<script src="../js/fullscreen.js"> </script>
	<script src="../js/topbar.js"> </script>
	<script src="../js/imgzoom.js"> </script>
	<script src="../js/meswap.js"> </script>
	<script src="../js/preloader.js"> </script>
	<script src="../js/cursor.js"> </script>




	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>









</body>

