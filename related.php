
	<style>

	.related{
		width: 100vw;
		/* overflow: hidden; */
	}
	.rprojects {
		margin-top: 0px;
		padding: 0px 200px 20px 30px;
		overflow-x: scroll; 
		/* white-space: nowrap; Prevent grid items from wrapping */
		z-index: 100000;
		width: auto;
		display: flex;
    align-items: center;
    /* justify-content: center; */
		padding-right: 1000px;
	}

	.rprojects .list {
		padding-right: 200px;
		display: flex; /* Use flexbox to ensure items are in a single row */
		gap: 30px; /* Adjust the gap between items */
		/* width: max-content; Ensure the container expands to fit its content */

	}

	.rprojects .list .item {
		height: 290px;
		min-width: 160px; /* Set a minimum width for each item */
		max-width: 200px; /* Set a maximum width for each item */

		flex: 0 0 auto; /* Allow items to shrink or grow to fit the available space */
		padding: 15px;
		background-color: var(--c-color);
		border-radius: 6px;
		cursor: none !important;
		transition: all 0.3s ease;
		white-space: normal; /* Allow content to wrap within items */
		text-decoration-line: none;
	}

	.rprojects .list .item:hover {
		background-color: var(--c2-color);
	}

	.rprojects .list .item:hover h3 {
		color: var(--lighttext);
	}

	.rprojects .list .item:hover p {
		color: var(--lighttext2);
		text-decoration: none;
	}

	.rprojects .list .item img {
		width: 100%;
		padding-bottom: 0px;
		transition: transform 0.3s ease; /* Added transition property for smooth scaling */
	}

	.imgbox {
		overflow: hidden;
		height: auto;
		width: auto;
		aspect-ratio: 1;
		border-radius: 6px;
		margin-bottom: 40px;
		-webkit-box-shadow: 0 8px 24px rgba(0, 0, 0, .5);
		box-shadow: 0 8px 24px rgba(0, 0, 0, .5);
	}

	.rprojects .list .item:hover img {
		transform: scale(1.1); /* Changed scale to transform and adjusted value */
	}

	.rprojects .list .item .play {
		position: relative;
	}

	.rprojects .list .item svg {
		position: absolute;
		right: 10px;
		top: -85px;
		padding: 12px;
		fill: var(--svg-fill-color);
		background-color: var(--accent-color);
		border-radius: 100%;
		opacity: 0;
		transition: all ease 0.4s;
		-webkit-box-shadow: 0 8px 8px rgba(0, 0, 0, .3);
		box-shadow: 0 8px 8px rgba(0, 0, 0, .3);
	}

	.rprojects .list .item:hover .play svg {
		opacity: 1;
		transform: translateY(-11px);
	}

	.rprojects .list .item .play svg:hover {
		transition: transform 0.4s ease-in-out; /* Transition for transform */
		filter: brightness(1.03);
		scale: 1.04;
	}

	.rprojects .list .item .play svg:hover:not(:focus) {
		transition: none; /* Remove the transition for filter */
		filter: brightness(1.02);
	}

	.rprojects .list .item h3 {
		position: relative;
		top: -20px;
	}

	.rprojects .list .item p {
		position: relative;
		top: -28px;
		font-size: 0.88rem;
		font-weight: 500;
		font-family: cbook2;
		color: var(--t3-color);
	}


	.rprojects:hover {
		/* background-color: rgba(var(--back-hover)0.5); */

		transition: background-color 0.3s ease-in-out;
		/* background: linear-gradient(to top, var(--sec-color) 50%, black 90%); */

	}

	/* For WebKit (Safari/Chrome) */
	.rprojects::-webkit-scrollbar {
		cursor: pointer;
		height: 2px;
		radius: 16px;
		/* width: 10px; Width of the scrollbar */
		z-index: 10000;
		overflow: overlay;
		background-color: transparent;
		position: sticky;


	}
	
	/* For WebKit (Safari/Chrome) - Track */
	.rprojects::-webkit-scrollbar-track {
		cursor: pointer;

		background-color: transparent; /* Transparent background */
		z-index: 10000;

	}
	
	/* For WebKit (Safari/Chrome) - Handle */
	.rprojects::-webkit-scrollbar-thumb {
		background-color: transparent;
		/* background-color: var(--scroll-color);  */
		border-radius: 0px; /* Rounded corners for the scrollbar */
		z-index: 20000;
		cursor: pointer;
		


		
	}

	.rprojects::-webkit-scrollbar-thumb:hover{
		background-color: var(--t1-color); /* Color of the scrollbar */
	


		
	}


	.arrowback{
	position: absolute;
	left: 30px;
	vertical-align: middle;
	/* bottom: 100px; */
	align-items: center;
	z-index: 2000;
	width: 30px; /* Adjust width as needed */
    height: 30px; /* Adjust height as needed */
     /* Set the fill color */
	 transition: all 0.4s ease;

}

.arrowscroll{
	position: absolute;
	right: 30px;
	vertical-align: middle;
	/* bottom: 100px; */
	align-items: center;
	z-index: 2000;
	width: 30px; /* Adjust width as needed */
    height: 30px; /* Adjust height as needed */
     /* Set the fill color */
	 transition: all 0.4s ease;

}

.inarrow{
	/* fill: white; */
	vertical-align:middle;
	align-items: center;
}

.arrowscroll:hover, .arrowback:hover{
	scale: 1.5;
	/* width: 40px;
	height: 40px; */
	transition: all 0.3s ease;
}

@media only screen and (max-width: 1180px) {
	.arrowscroll, .arrowback{
display: none;


}

.rprojects {
		
	padding: 30px 15000px 20px 30px;

	
}

}
	</style>





	<h2 style="padding: 0px 0px 0px 30px" >More Projects</h2>

	<div class=related>
		<div class="rprojects">


			<div href="" class="arrowscroll">

<svg class="inarrow" id="Layer_1" data-name="Layer 1"  viewBox="0 0 67.96 67.96">

<circle style="fill: var(--black)" cx="33.98" cy="33.98" r="27.84"/>


  <path style="fill: var(--t1-color)"; d="M0,33.98c0,18.77,15.21,33.98,33.98,33.98s33.98-15.21,33.98-33.98S52.75,0,33.98,0C15.21,0,0,15.21,0,33.98ZM56.11,36.31s-.07.09-.1.13c-.06.08-.14.16-.21.23,0,0,0,0,0,0l-16.98,16.98c-1.49,1.49-3.91,1.49-5.41,0-1.49-1.49-1.49-3.91,0-5.41l10.46-10.46H14.87c-2.11,0-3.82-1.71-3.82-3.82s1.71-3.82,3.82-3.82h29l-10.45-10.46c-1.49-1.49-1.49-3.91,0-5.41,1.49-1.49,3.91-1.49,5.4,0l16.98,16.98c.08.08.15.16.22.24.03.03.06.07.08.1.02.03.04.06.06.09.47.63.75,1.42.75,2.27,0,.85-.28,1.64-.75,2.27-.01.02-.03.04-.05.06Z"/>
</svg></div>


<div href="" class="arrowback">

<svg class="inarrow" id="Layer_1" data-name="Layer 1"  viewBox="0 0 67.96 67.96">

<circle style="fill: var(--black)" cx="33.98" cy="33.98" r="27.84"/>


  <path style="fill: var(--t1-color)";  d="M67.96,33.98c0-18.77-15.21-33.98-33.98-33.98S0,15.21,0,33.98s15.21,33.98,33.98,33.98c18.77,0,33.98-15.21,33.98-33.98ZM11.85,31.64s.07-.09.1-.13c.06-.08.14-.16.21-.23,0,0,0,0,0,0L29.14,14.29c1.49-1.49,3.91-1.49,5.41,0,1.49,1.49,1.49,3.91,0,5.41l-10.46,10.46h29c2.11,0,3.82,1.71,3.82,3.82s-1.71,3.82-3.82,3.82h-29l10.45,10.46c1.49,1.49,1.49,3.91,0,5.41-1.49,1.49-3.91,1.49-5.4,0l-16.98-16.98c-.08-.08-.15-.16-.22-.24-.03-.03-.06-.07-.08-.1-.02-.03-.04-.06-.06-.09-.47-.63-.75-1.42-.75-2.27,0-.85.28-1.64.75-2.27.01-.02.03-.04.05-.06Z"/>

</svg></div>




					


					<h2></h2>
					<!-- <div class="list" id="card"   > -->

						<div class="list" id=""  style="" >
							<a href="/projects/bartr.php" id="bartr" class="item"  data-tags="November 2023, app, ui, ux" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/bartr.webp" alt="" >
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
							<a href="/projects/buxton.php" id="buxton" class="item"  data-tags="2022" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/bux.webp" alt="" >
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
							<a href="/projects/mandala.php" id="mandala" class="item"  data-tags="November 2023, AR, VR, augmented reality. " >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/man.webp" alt="" >
								</div>

								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>The Mandala Journal</h3>
								<p>Rishab Kiran</p> 
							</a>

							<a href="/projects/black-orpheus.php" id="black-orpheus" class="item"  data-tags="2022, ux, ui, website, app" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/black.webp" alt="" >
								</div>

								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>Black Orpheus</h3>
								<p>Rishab Kiran</p> 
							</a>

							<a href="/projects/transurban.php" id="transurban"  class="item"  data-tags="May 2018, transurban, ui, ux, app" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/transurban.webp" alt="" >
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
							<a href="/projects/eye.php"  id="eye" class="item"  data-tags="April 2022, Movie, shortfilm, book," >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/eye.webp" alt="" >
								</div>

								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>Eye of the Lacquer</h3>
								<p>Rishab Kiran</p> 
							</a>
							<a href="/projects/vsi.php"  id="vsi" class="item"  data-tags="October 2023, book, print" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/vsi.webp" alt="" >
								</div>

								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>Very Short Introductions</h3>
								<p>Rishab Kiran</p> 
							</a>
							<a href="/projects/marioworld.php"  id="marioworld"class="item"  data-tags="August 2021, mario, world, axonometric, Illustrator" >
								<div class="imgbox">
									<img id="mgImage"  src="../Images/Thumbnails/marioworld.webp" alt="" >
								</div>
								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>Mario World</h3>
								<p>Rishab Kiran</p> 
							</a>
							<a href="/projects/pattern-surface.php" id="pattern-surface" class="item"  data-tags="September 2021, pattern, surface, fabrication, 3d, render" >
								<div class="imgbox">
								<img id="mgImage" src="../Images/Thumbnails/pattern.webp" alt="" >
									</div>
								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>Raphael 2.0</h3>
								<p>Rishab Kiran</p> 
							</a>
							<a href="/projects/isidora.php" id="isidora" class="item"  data-tags="October 2021, frame, field, 3d" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/isidora.webp" alt="" >
								</div>

								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>City of Isidora</h3>
								<p>Rishab Kiran</p> 
							</a>
							<a href="/projects/sydneysamurais.php"  id="sydneysamurais" class="item"  data-tags="2020" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/sydney.webp" alt="" >
								</div>

								<div class="play">
									<span>
										<svg width="24" height="24" viewBox="0 0 24 24"><path class="colored-path" d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z"></path></svg>
									</span>
								</div>
								<h3>Sydney Samurais</h3>
								<p>Rishab Kiran</p> 
							</a>
							<a href="/projects/esports-social.php" id="esports-social" class="item"  data-tags="2016, 2017, 2018, 2019" >
								<div class="imgbox">
									<img id="mgImage" src="../Images/Thumbnails/essm.webp" alt="" >
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

	<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.rprojects');
    const scrollButton = document.querySelector('.arrowscroll');

    scrollButton.addEventListener('click', function() {
        const containerWidth = scrollContainer.offsetWidth;
        scrollContainer.scrollBy({
            left: containerWidth * 0.5, // Scroll by half the width of the container
            behavior: 'smooth'
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.rprojects');
    const arrowBack = document.querySelector('.arrowback');

    // Set initial opacity to 0
    arrowBack.style.opacity = '0';

    scrollContainer.addEventListener('scroll', function() {
        // Check if scroll position is past the initial point
        if (scrollContainer.scrollLeft > 0) {
            // Show the arrow back button with smooth opacity transition
            arrowBack.style.opacity = '1';
        } else {
            // Hide the arrow back button with smooth opacity transition
            arrowBack.style.opacity = '0';
        }
    });

    arrowBack.addEventListener('click', function() {
        const containerWidth = scrollContainer.offsetWidth;
        scrollContainer.scrollBy({
            left: -containerWidth * 0.5,
            behavior: 'smooth'
        });
    });
});







	</script>