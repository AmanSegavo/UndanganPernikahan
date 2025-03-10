<!DOCTYPE html>
<html>
<head>
	<title>Butterfly</title>

	<style type="text/css">
		div {border:0px solid #FF0000;}

		#butterfly_wrapper
		{
			width:150px;
			height:150px;
			position:absolute;
		}

		.leftwings,.rightwings
		{
			position:absolute;
			width:50%;
			height:100%;
			top:0;
		}

		.leftwings
		{
			left:0;
		}

		.rightwings
		{
			right:0;
		}

		.perspective
		{
			position:relative;
			width:100%;
			height:50%;
			-webkit-perspective:150px;
			-webkit-perspective-origin:50% 50%;			
			perspective:150px;
			perspective-origin:50% 50%;
		}

		.upperwing,.lowerwing
		{
			/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#FF4400+0,FFEE00+50,FF4400+100 */
			background: #FF4400; /* Old browsers */
			background: -moz-radial-gradient(center, ellipse cover, #FF4400 0%, #FFEE00 50%, #FF4400 100%); /* FF3.6-15 */
			background: -webkit-radial-gradient(center, ellipse cover, #FF4400 0%,#FFEE00 50%,#FF4400 100%); /* Chrome10-25,Safari5.1-6 */
			background: radial-gradient(ellipse at center, #FF4400 0%,#FFEE00 50%,#FF4400 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FF4400', endColorstr='#FF4400',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
			-webkit-animation-duration: 0.3s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-direction: alternate;
			animation-duration: 0.3s;
			animation-iteration-count: infinite;
			animation-direction: alternate;
		}

		.upperwing
		{
			position:absolute;
			width:100%;
			height:100%;
		}

		.upperwing_left
		{
			border-top-left-radius: 10%;
			border-top-right-radius: 80%;
			border-bottom-right-radius: 0%;
			border-bottom-left-radius: 30%;
			-webkit-transform-origin:100% 50%;
			transform-origin:100% 50%;
			-webkit-animation-name: movewing_left;
			animation-name: movewing_left;
		}

		.upperwing_right
		{
			border-top-left-radius: 80%;
			border-top-right-radius: 10%;
			border-bottom-right-radius: 30%;
			border-bottom-left-radius: 0%;
			-webkit-transform-origin:0% 50%;
			transform-origin:0% 50%;
			-webkit-animation-name: movewing_right;
			animation-name: movewing_right;
		}

		.lowerwing
		{
			position:absolute;
			top:0;
			width:80%;
			height:80%;
		}

		.lowerwing_left
		{
			right:0;
			border-top-left-radius: 30%;
			border-top-right-radius: 0%;
			border-bottom-right-radius: 80%;
			border-bottom-left-radius: 10%;
			-webkit-transform-origin:100% 50%;
			transform-origin:100% 50%;
			-webkit-animation-name: movewing_left;
			animation-name: movewing_left;
		}

		.lowerwing_right
		{
			left:0;
			border-top-left-radius: 0%;
			border-top-right-radius: 30%;
			border-bottom-right-radius: 10%;
			border-bottom-left-radius: 80%;
			-webkit-transform-origin:0% 50%;
			transform-origin:0% 50%;
			-webkit-animation-name: movewing_right;
			animation-name: movewing_right;
		}

		@-webkit-keyframes movewing_left{
			from {-webkit-transform:rotateX(0deg);}
			to {-webkit-transform:rotateY(65deg);}
		}
			
		@keyframes movewing_left{
			from {transform:rotateY(0deg);}
			to {transform:rotateY(65deg);}
		}

		@-webkit-keyframes movewing_right{
			from {-webkit-transform:rotateX(0deg);}
			to {-webkit-transform:rotateY(-65deg);}
		}
			
		@keyframes movewing_right{
			from {transform:rotateY(0deg);}
			to {transform:rotateY(-65deg);}
		}
	</style>

	<script>
		var x=0;
		var y=0;
		var size=0;
		var rotation=0;
		var transitiontimer;
		var wingtimer;
		var nexttimer;

		function flutter(vartimer)
		{
			var wrapper=document.getElementById("butterfly_wrapper");

			nexttimer=vartimer+(generaterandomno(-200,200));
			nexttimer=(nexttimer<1500||nexttimer>3000?1500:nexttimer);

			x+=generaterandomno(-80,80);
			y+=generaterandomno(-80,80);

			x=(x<20?30:x);
			y=(y<20?30:y);
			x=(x>250?240:x);
			y=(y>250?240:y);

			size+=generaterandomno(-10,10);
			size=(size<10?20:size);
			size=(size>50?40:size);

			rotation+=generaterandomno(-10,10);
			rotation=(rotation<-20?0:rotation);
			rotation=(rotation>20?0:rotation);

			transitiontimer=generaterandomno(20,50)/10;

			wrapper.style.marginLeft=x+"px";
			wrapper.style.marginTop=y+"px";
			wrapper.style.width=size+"px";
			wrapper.style.height=size+"px";
			wrapper.style.transform="rotate("+rotation+"deg)";
			wrapper.style.webkitTransform="rotate("+rotation+"deg)";		
			wrapper.style.transition="all "+transitiontimer+"s";	
			wrapper.style.webkitTransition="all "+transitiontimer+"s";

			wingtimer=generaterandomno(1,5);
			var upperwings=document.getElementsByClassName("upperwing");
			var lowerwings=document.getElementsByClassName("lowerwing");

			for (var k=0;k<=1;k++)
			{
				upperwings[k].style.animationDuration="0."+wingtimer+"s";
				upperwings[k].style.webkitAnimationDuration="0."+wingtimer+"s";
				lowerwings[k].style.animationDuration="0."+wingtimer+"s";
				lowerwings[k].style.webkitAnimationDuration="0."+wingtimer+"s";		
			}

			setTimeout(function(){flutter(nexttimer);},vartimer);
		}

		function generaterandomno(varmin,varmax)
		{
			return Math.floor((Math.random() * (varmax-varmin+1)) + varmin);
		}
	</script>
</head>

<body onload="flutter(1500);">
	<div id="butterfly_wrapper">
		<div class="leftwings">
			<div class="perspective">
				<div class="upperwing upperwing_left">

				</div>
			</div>
			<div class="perspective">
				<div class="lowerwing lowerwing_left">

				</div>
			</div>
		</div>
		<div class="rightwings">
			<div class="perspective">
				<div class="upperwing upperwing_right">

				</div>
			</div>
			<div class="perspective">
				<div class="lowerwing lowerwing_right">

				</div>
			</div>
		</div>
	</div>
</body>
</html>