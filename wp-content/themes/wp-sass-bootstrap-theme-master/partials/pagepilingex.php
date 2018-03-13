<?php ?>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	          	direction: 'horizontal',
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3', 'page4'],
			    sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
			    navigation: {
			    	'position': 'right',
			   		'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Pgae 4']
			   	},
			    afterRender: function(){
			    	$('#pp-nav').addClass('custom');
			    },
			    afterLoad: function(anchorLink, index){
			    	if(index>1){
			    		$('#pp-nav').removeClass('custom');
			    	}else{
			    		$('#pp-nav').addClass('custom');
			    	}
			    }
			});
	    });
    </script>


    <style>
	#section1 img{
		margin: 20px 0;
		opacity: 0.7;
	}
	/* colors
	 * --------------------------------------- */
	#colors2,
	#colors3{
		position: absolute;
		height: 163px;
		width: 362px;
		z-index: 1;
		background-repeat: no-repeat;
		left: 0;
		margin: 0 auto;
		right: 0;
	}
	#colors2{
		background-image: url(imgs/colors2.gif);
		top:0;
	}
	#colors3{
		background-image: url(imgs/colors3.gif);
		bottom:0;
	}


	/* Overwriting fullPage.js tooltip color
	* --------------------------------------- */
	#pp-nav.custom .pp-tooltip{
		color: #AAA;
	}

</style>

	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#page1">Page 1</a></li>
		<li data-menuanchor="page2"><a href="#page2">Page 2</a></li>
		<li data-menuanchor="page3"><a href="#page3">Page 3</a></li>
	</ul>


	<div id="pagepiling">
	    <div class="section" id="section1">
	    	<img src="imgs/pagePiling-plugin.gif" alt="pagePiling" />
			<br />

	    	<h1>Horizontal Scroll</h1>
			<p>pagePiling does it easy for you!</p>

	    </div>
	    <div class="section">
	    	<div class="intro">
	    		<h1>Simple to use</h1>
	    		<p>Just use the option direction: 'horizontal' to have it working!</p>
	    	</div>
	    </div>
	    <div class="section" id="section3">
	    	<div class="intro">
	    		<h1>Isn't it great?</h1>
	    		<p>Just as you expected!</p>
	    		<div id="colors2"></div>
	    		<div id="colors3"></div>
	    	</div>
	    </div>
	</div>
