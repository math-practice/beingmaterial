
<?= css(['assets/css/objectClassifier.css']) ?>

<?= js([
	'https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.min.js',
	'https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/addons/p5.dom.min.js',
	'https://unpkg.com/ml5@0.3.1/dist/ml5.min.js',
	'assets/js/ObjectClassifier-v1.js'
]) ?>

<!-- start live video -->
<script>

	let startVideo = () => {
    Site.classifier = new p5( ObjectClassifier, 'sketch');
    const banner = document.querySelector("#camera_banner");
    banner.classList.add("active");
  }


	document.addEventListener('DOMContentLoaded', function(event) {

		console.log("user agent \n", navigator.userAgent);
		// alert(navigator.userAgent);
		Site.userAgent = navigator.userAgent.toLowerCase();

		if(Site.userAgent.includes("iphone")){ // check if mobile is running iOS
			console.log("Device: iOS");
			
			if(Site.userAgent.includes("crios") || Site.userAgent.includes("fxios")){  // check if running chrome or firefox: 
				Site.browserBanner();
			}else if(Site.userAgent.includes("version") && Site.userAgent.includes("safari")){
				// alert("maybe safari? \n" + navigator.userAgent);
				const cameraButton = document.querySelector("#btn-camera");
				cameraButton.addEventListener("click", startVideo);


			}else{
				Site.browserBanner();
			}
			
		}else{
			console.log("User agent suggests device: not iOS");
		}
	})

</script>