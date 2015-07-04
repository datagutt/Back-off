<!doctype html>
<html>
<head>
	<title>GET AWAY FROM ME</title>
	<link href="css/base.css" rel="stylesheet">
</head>
<body class="bg-black white">
<div class="bg-wrapper">
	<div class="bg-center bg-cover absolute top-0 bottom-0 left-0 right-0 overflow-hidden">
		<div class="container clearfix px2 py3 table" id="loadingSpinner">
			<div class="p1 table-cell m0 px3 py4 center">
				<img src="loading.gif" class="mt4 mb0 regular center">
			</div>
		</div>
		<div id="gifgrid">
			<div class="col col-4 item">
				<img src="http://i.giphy.com/dqeSzRGGPdeGk.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/WlCR1h8RhBgJi.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/RFtQLFEP1FMKQ.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/JfTMQTTm5bHoc.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/pYsfSnOq29UY0.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/ePifZPCobDvW0.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/LhPbzBsj4snxC.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/11FzrRcjuFbWN2.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/1eoTjAFIXXqsU.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/Um7TeqbaS33Ww.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/BJLIKAvZVPqXS.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/bFwX0MKzEC3Hq.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/KhY6SCSMM2mWI.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/Ab6XryensbnLW.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/a6X164uUfz0Qg.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/110TrURLmdMJPy.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/HD3ukoAJQJmTu.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/FmMcHxkjDEUjS.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/ZpYshOEKYMHMQ.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/Abo3XyDtLd9C0.gif" class="col-12">
			</div>
			<div class="col col-4 item">
				<img src="http://i.giphy.com/bFwX0MKzEC3Hq.gif" class="col-12">
			</div>
			<div class="col col-4 item haters">
				<img src="http://i.giphy.com/nS6deiYJ6B3i0.gif" class="col-12">
			</div>
		</div>
	</div>
</div>
<div class="bg-overlay"></div>
<div class="container clearfix px2 py3 table z1" style="width:100%">
	<header class="p1 table-cell m0 px3 py4">
	  <h1 class="h1 h1-responsive caps mt4 mb0 regular center" id="message">GET AWAY FROM ME!</h1>
	</header>
</div>
<noscript>
	<style type="text/css">
		.bg-wrapper #gifgrid, 
		#message {
		  opacity: 1;
		}
		.bg-wrapper #loadingSpinner {
		  opacity: 0;
		  display: none;
		}
		img {
		}
	</style>
</noscript>
<!-- bleh jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- lel polyfills -->
<script src="https://cdn.polyfill.io/v1/polyfill.min.js"></script>
<!-- fancy grid stuff -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/packery/1.4.2/packery.pkgd.min.js"></script>
<!-- self-explanatory -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript">
var gifGrid = document.querySelector('#gifgrid');
var loadingSpinner = document.querySelector('#loadingSpinner');
var message = document.querySelector('#message');
var options = {
  // options
  itemSelector: '.col-4',
  gutter: 0
};
var shuffleGrid = function(pckry) {
	var shufflers = [];
	var nonShufflers = [];
	for ( var i=0, len = pckry.items.length; i < len; i++ ) {
		var item = pckry.items[i];
		var collection = shufflers;
		collection.push( item );
	}

	shufflers.sort(function() {
		return Math.random() > 0.5;
	});
	pckry.items = nonShufflers.concat(shufflers);
	pckry.layout();
};
var pckry;
var imgLoad = imagesLoaded(gifGrid);
imgLoad.on('progress', function(instance, image){
	if(image.isLoaded){
		//image.img.style.opacity = 1;
	}
});
imgLoad.on('done', function(){
	pckry = new Packery(gifGrid, options);
	shuffleGrid(pckry);
	loadingSpinner.parentNode.removeChild(loadingSpinner);
	loadingSpinner.style.opacity = 0;
	gifGrid.style.opacity = 1;
	message.style.opacity = 1;
});
document.body.onclick = function gifGridClick(){
	shuffleGrid(pckry);
	$('#message').text(texts[Math.floor(Math.random() * texts.length)])
};
</script>
<script type="text/javascript">
// TODO: Remove jQuery dependency
var texts = [
	'GET AWAY FROM ME!',
	'BACK OFF!',
	'GET OUT OF MY FACE!',
	'BACK THE HELL OFF!',
	'STAND BACK, YOU FOOL!'
];
var count = 0;
var interval = 1 * 60 * 60;

function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}
function addText() {
	$('#message').fadeTo(interval/2 -1, 0.01, function(){
		// this callback runs when fadeOut is finished
		// so that the text change is "invisible"
		$(this).text(texts[count]); 
		// Randomize
		texts = shuffle(texts);
	}).delay(1).fadeTo(interval/2, 1);
    // Note that arrays are zero indexed so "Four" would blink twice. 
	count < texts.length ? count++ : count = 0; 
}
//$('#message').text(texts[Math.floor(Math.random() * texts.length)])
var textChangeInterval = setInterval(addText, interval);
</script>
</body>
</html>