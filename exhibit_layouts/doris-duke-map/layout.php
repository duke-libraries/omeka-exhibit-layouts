<title>OpenLayers Example</title>
    <!-- <link rel="stylesheet" href="theme/default/style.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
	<link rel="stylesheet" href="http://library.duke.edu/css/common/960/960.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
<!-- <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>   -->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/dark-hive/jquery-ui.css" rel="stylesheet" type="text/css"/>

<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAyd8Ez46q598IKMNLNbUO9RTbHIotSlz7z8MSqWC_WMDTAjxWXxQ08mhs95XefmX1qPzksMdiZ4u7NQ" type="text/javascript"></script>       -->
<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>

<!-- <script type="text/javascript" src="http://openlayers.org/api/Open Layers.js"></script > -->
<script type="text/javascript" src="http://library.duke.edu/media/js/OpenLayers-2.11/OpenLayers.js"></script>
<script type="text/javascript" src="http://js.mapbox.com/ol/2.8/mapbox.js"></script>

<style type="text/css">    
a img {border:none;} 
a, a:link, a:active{
	color:#777888;
}
   
h1, h3, h4, h5, h6 {
    color: #003a6b;
    background-color: transparent;
    font: 100% Helvetica, Arial, sans-serif;
    margin: 0;
    padding-top: 0.5em;
}
h1 {
    font-size: 130%;
    margin-bottom: 0.5em;
    border-bottom: 1px solid #fcb100;
}
h2 {
    font-size: 120%;
    margin-bottom: 0.5em;
/*    border-bottom: 1px solid #aaa;*/
}
h3 {
    font-size: 110%;
    margin-bottom: 0.5em;
    text-decoration: none;
}

#col-left{
	background:#222;
	color:#fff;
	border:6px solid #000;
}

#legendText{
	background: #222222;
	color:#fff;
/*	text-shadow: #000 0px -1px 0px;	*/
}

#map{
	border-bottom:2px solid #aaa;
}  

#prevStop{
	float:left;
}

#photoControls{
/*	float:right;
	width:200px;*/
	padding-top:5px;
}

#popContent{
	margin:0px 0px 0px 10px;
}

#popContent img{
	width:450px;
}

#popContent h3{
	color:#fff;
}

#popMain{
	color:#fff;
	min-height:500px;
}

#popSide{
	background:#000;
}

#popSide li{
	background:#111;
	width:140px;
	padding:5px;
	overflow:hidden;
}

#popSide li.selected{
	border:2px solid #333;
	background:#a0a0a0 url('http://library.duke.edu/exhibits/dorisduke/img/back13.jpg') repeat-x scroll 0 -35px;
	width:140px;
	padding:5px;
	overflow:hidden;
}

#popSide li.hover{
	border:2px solid #333;
	background:#a0a0a0 url('http://library.duke.edu/exhibits/dorisduke/img/back13.jpg') repeat-x scroll 0 -35px;
	width:140px;
	padding:5px;
	overflow:hidden;
}

#popSide li a{
	display:block;
}

#popSide img{
	width:100px;
	border:2px solid #eee;
	margin: 0px 0px 0px 0px;
}

#sideImage{
	list-style-type:none;
	padding:0px;
	margin:0px;
}

#sliderOpacity{
	padding: 0px 20px 10px 0px;
}

#slider-id {
/*    width: 200px;
    margin: 0px;*/
}

#timeline{
	height:40px;
	background:#000;
	overflow:auto;
	margin-top:-5px;
}


#titleText{
	padding:5px;

}

#titleText h3{
	color:#999;
	font-weight:bold;
	font-size:20px;
}

#titleText p{
	margin:1em 0px;
	font-family:Helvetica, Arial, sans-serif;
	line-height:17px;
	font-size:13px;
}

#ul-photos{
	width:3000px;
	list-style-type:none;
	float:left;
	cursor:move;
}

#ul-photos li{
	display:inline;
	float:left;
	width: 120px;
	text-align:center;
	margin:2px 0px 0px 2px;
	background:#000;
}

#ul-photos li a{
	display:block;
	color:#fff;
	font-weight:bold;
	text-decoration:none;
}

#ul-timeline{
	width:2000px;
	list-style-type:none;
}

#ul-timeline li{
	display:inline;
	float:left;
	width: 120px;
	opacity:0.6;
	text-align:center;
	margin:2px 0px 0px 2px;
/*	background:#444;*/ 
	border:none;
}

#ul-timeline li a{
	display:block;
	color:#fff;
	font-weight:bold;
	text-decoration:none;
}

#OpenLayers_Control_MaximizeDiv{
	bottom: -50px !important;
	left:682px;
}
.olControlLayerSwitcher.olControlNoSelect{
	bottom: -50px;
	left:682px;
	position:absolute;	
}

.largemap{
	height:400px;
}

.olControlAttribution {
  	bottom: 13px !important;
	left:3px;
}

.olPopupContent{
/*	background:#ccc;*/
}

.popText p{
	margin:1em 0px;
}

.stop{
	font-weight:bold;
}

.timeline-highlight{
	background:#a0a0a0 url('http://library.duke.edu/exhibits/dorisduke/img/back03-01.jpg') no-repeat;
	
}

#ul-timeline li.timeline-highlight{
	opacity:1;
	background:#a0a0a0 url('http://library.duke.edu/exhibits/dorisduke/img/back03-01.jpg') no-repeat;
}
#ul-timeline li.timeline-highlight a{
	color:#000;
}

#ul-timeline li a:hover{
/*	color:#000;
	opacity:1;
	background:#a0a0a0 url('http://library.duke.edu/exhibits/dorisduke/img/back03-01.jpg') no-repeat;*/
}
</style>  

    <script type="text/javascript">   
	                   
$(document).ready(function (){        
	$('#prevStop').button( {icons: {primary:'ui-icon-triangle-1-w'},label: "Previous Stop" })
	$('#nextStop').button( {icons: {secondary:'ui-icon-triangle-1-e'},label: "Next Stop" }) 
	$('#timeline').mousedown(function(event){
		//creates a variable 'down' that is managed by jQuery
		$(this)
			.data('down', true)
			.data('x', event.clientX)
			.data('scroll', this.scrollLeft);
		return false;
	}).mouseup(function(event){
		$(this).data('down', false);
	}).mousemove(function(event){
		if($(this).data('down') == true){
			this.scrollLeft = $(this).data('scroll') + $(this).data('x') - event.clientX;
			//console.log($(this).data('x'));		
		}
	}).css({
		'overflow': 'hidden',
		'cursor': 'move'
	});
	$('#popSide').mousedown(function(event){
		//creates a variable 'down' that is managed by jQuery
		$(this)
			.data('down', true)
			.data('x', event.clientX)
			.data('scroll', this.scrollLeft);
		return false;
	}).mouseup(function(event){
		$(this).data('down', false);
	}).mousemove(function(event){
		if($(this).data('down') == true){
			this.scrollLeft = $(this).data('scroll') + $(this).data('x') - event.clientX;
			//console.log($(this).data('x'));		
		}
	}).css({
		'overflow': 'hidden',
		'cursor': 'move'
	});
}); 
// };      // end window.onload


$(window).mouseout(function (event) {
  if ($('#timeline').data('down')) {
    try {
      // *try* to get the element the mouse left the window by and if
      // we really did leave the window, then cancel the down flag
      if (event.originalTarget.nodeName == 'BODY' || event.originalTarget.nodeName == 'HTML') {
        $('#timeline').data('down', false);
      }                
    } catch (e) {}
  }
});

	
// making this a global variable so that it is accessible for
// debugging/inspecting in Firebug
var map = null; 
var mapImageList = new Array();
var selectControl, selectedFeature, popup1, globe, thmImage, oldSpan, lrgImage, newLayer, styleMap1;

// Use jQuery browser detection to find IE. Changing the ol.ImgPath breaks display of google layers in IE.
if (!$.browser.msie) {
    OpenLayers.IMAGE_RELOAD_ATTEMPTS = 3;
	OpenLayers.ImgPath = "http://js.mapbox.com/theme/dark/";
 }  

function init(){
          // Build the map   
		
	var options = {
        projection: new OpenLayers.Projection("EPSG:900913"),
		displayProjection: new OpenLayers.Projection("EPSG:4326"),
		units: "m",
		numZoomLevels: 20,
		maxResolution: 156543.0339,
		maxExtent: new OpenLayers.Bounds(-20037508, -20037508, 20037508, 20037508)
		//maxExtent:new OpenLayers.Bounds(-180, -90, 180, 90)
       };
    map = new OpenLayers.Map('map', options);
	var layername = "world-light";
	var file_extension = "png";    
	
	var gmap = new OpenLayers.Layer.Google(
	    "Google Streets", // the default
	    {numZoomLevels: 20,'sphericalMercator': true, isBaseLayer: true}
	    // default type, no change needed here
	);
    // map.addLayer(gmap); 
	// var osm = new OpenLayers.Layer.OSM( "Open Street Map");
	var proj = new OpenLayers.Projection("EPSG:4326");
	var bounds3 = new OpenLayers.Bounds(23.40,19.50,65.0978,44.3437);
	bounds3.transform(proj, new OpenLayers.Projection('EPSG:900913'));
          
	var options1 = {numZoomLevels: 20,
	                isBaseLayer: false,
					maxExtent:new OpenLayers.Bounds(-20037508, -20037508, 20037508, 20037508),
					maxResolution: 156543.0339,
					transparent: 'true'
	                };
	globe = new OpenLayers.Layer.Image(
		    'Middle East',
		    'http://library.duke.edu/exhibits/dorisduke/img/middle_east_map4.jpg',
		bounds3,
		    new OpenLayers.Size(800,400),
		options1
		);
				
	map.addLayer(globe); 

	//set to google maps when zooming in
	globe.events.on({
		    moveend: function(e) {
		              if (e.zoomChanged) {
		                  var zoom = parseInt(map.zoom);
		                  if(zoom >= 7){
		                  	map.setBaseLayer(map.layers[3]);                        
		                  } else if(zoom < 7){
						  	map.setBaseLayer(map.layers[1]); 
						}
		              }
		            }       
	          });     
					
	var style1 = OpenLayers.Util.applyDefaults(
    {
		pointRadius: "7",
		fillColor: "#679FD2", 
		fillOpacity: 0.8, 
		strokeColor: "#043A6B",
		strokeWidth: 1,
	    strokeOpacity: 1.0,
		cursor: "pointer",
		fontSize: "14px",
	    fontFamily: "Helvetica, Arial, sans-serif",
	    fontWeight: "bold",   
		label: "${name}",
		labelXOffset: -22,
	 	labelYOffset: 12,
		labelSelect: true,
		fontColor:"#000000"  
	},
		OpenLayers.Feature.Vector.style["default"]);  

	var styleMap = new OpenLayers.StyleMap(
	        {
				"default":style1,
				"select":
					{
						fillColor: "yellow", 
						fillOpacity: 0.8, 
						strokeColor: "#000000",
						cursor: "pointer"
					},
			   	"temporary":
					{
						fillColor: "yellow", 
						fillOpacity: 0.8, 
						strokeColor: "#000000",
						cursor: "pointer"
					}        
			});
			
	var newLayer = new OpenLayers.Layer.GML('Stops', 'http://exhibits.library.duke.edu/archive/files/dorisduke_567b26194a.kml', 
	{
		projection: new OpenLayers.Projection("EPSG:4326"),
		format: OpenLayers.Format.KML,
		styleMap: styleMap,
		eventListeners: { 'loadend': kmlLoaded }  
	}); 
					
	var layer = new OpenLayers.Layer.MapBox(
      "World light",
      { 'layername': layername,
        'osm': 0,
        'type': file_extension,
        'serverResolutions': [156543.0339,78271.51695,39135.758475,19567.8792375,9783.93961875,4891.96980938,2445.98490469,1222.99245234,611.496226172,305.748113086,152.874056543,76.4370282715,38.2185141357,19.1092570679,9.55462853394,4.77731426697,2.38865713348,1.19432856674,0.597164283371],
        'resolutions': [156543.0339,78271.51695,39135.758475,19567.8792375,9783.93961875,4891.96980938,2445.98490469,1222.99245234,611.496226172,305.748113086,152.874056543,76.4370282715]      }
	    );
		
		if(layer){
			map.addLayer(layer);
		}
	map.addLayers([newLayer, gmap]);
	map.events.register("mousemove", map, function(e) { 
           var position = this.events.getMousePosition(e);
		var lonlat = map.getLonLatFromViewPortPx(e.xy);
		var test = lonlat.transform(map.getProjectionObject(),proj)   
       });
          
	map.zoomToExtent(bounds3);
	selectControl = new OpenLayers.Control.SelectFeature(newLayer, {onSelect: onFeatureSelect, onUnselect: onFeatureUnselect});
	 
	
	var highlightCtrl = new OpenLayers.Control.SelectFeature(newLayer, {
	                hover: true,
	                highlightOnly: true,
	                renderIntent: "temporary"
	            }); 
	map.addControl(highlightCtrl);          
	highlightCtrl.activate(); 
	
	map.addControl(selectControl);
	selectControl.activate();
	
			
	function kmlLoaded(){
					for(k=0;k<newLayer.features.length;k++){
						$('#ul-timeline').append('<li class="button ui-button" id="list'+newLayer.features[k].attributes.name+'"><a href="javascript:onFeatureSelect(\''+newLayer.features[k].id+'\')">'+newLayer.features[k].attributes.name+'</a></li>')
									$('#list'+newLayer.features[k].attributes.name).button() 
					}
					$('#ul-timeline > li > a').click(function(event){
						var scrollTimeLine = $('#timeline').scrollLeft()+event.clientX - 400;	
					});
	}
			
	$("#slider-id").slider({
	    value: 100,
	    slide: function(e, ui) {
	        globe.setOpacity(ui.value / 100);
	    }
	});
	// $('#ul-timeline > li > a').bind('mouseover', function() {
	// 	  $(this).toggleClass('hover');
	// 	});
	// 	$('#ul-timeline > li > a').bind('mouseout', function() {
	// 	  $(this).toggleClass('hover');
	// 	});   
			
} // end init

function onPopupClose(evt){
	$('#popMain').empty();
	selectControl.unselect(selectedFeature);
}

function onFeatureSelect(feature){
	var mainLayer;
	// console.log(feature)
	if(typeof feature == 'string'){
		mainLayer = map.getLayersBy("name", "Stops"); 
		// console.log(mainLayer[0].id);
		for(j=0;j<mainLayer[0].features.length;j++){
			if(mainLayer[0].features[j].id == feature){
				feature = mainLayer[0].features[j];
				selectedFeature = feature;
				selectControl.unselectAll(); 
				selectControl.select(feature);
				var bounds = feature.geometry.getBounds().clone();
				// console.log(bounds)
				map.zoomToExtent(bounds,false);
				map.zoomTo(6);
				break;
			}
		}
	}else{
		selectedFeature = feature;
		var bounds = feature.geometry.getBounds().clone();
		// console.log(bounds)
		map.zoomToExtent(bounds,false);
		map.zoomTo(6);
	}
	$('#ul-timeline > li').removeClass('timeline-highlight');
	$('#popSide').scrollLeft(0);
	$('#popMain').empty();
	$('#popSide').empty();
	$('#list'+feature.attributes.name).addClass('timeline-highlight');
	var scrollTimeLine = $('#timeline').scrollLeft()+$('#list'+feature.attributes.name).position().left - 300;
	$('#timeline').animate({scrollLeft: scrollTimeLine}, 'slow');
	//console.log($('#list'+feature.attributes.name).position().left)
	$('#popMain').append("<div id='popContent' class='grid_9 alpha'>"+feature.attributes.Images.value+"</div>");
	$('#titleText').replaceWith("<div id='titleText'><h3>"+feature.attributes.name+"</h3><p>"+feature.attributes.description+"</p></div>");
	popup1 = new OpenLayers.Popup.Anchored("anchored",
				feature.geometry.getBounds().getCenterLonLat(),
				null,
				"<div>Name: "+ feature.attributes.name+"<br/>"+feature.attributes.description+"</div>",
				null, true, onPopupClose);
	feature.popup = popup1;
	buildPopSide();
	var nextStop = $('#list'+feature.attributes.name).next('li') 
	nextStop = nextStop.find('a').attr("href"); 
	var prevStop = $('#list'+feature.attributes.name).prev('li')
	prevStop = prevStop.find('a').attr("href"); 
	$('#prevStop').attr("href", prevStop) 
	$('#nextStop').attr("href", nextStop)  
}

function onFeatureUnselect(feature){
	$('#popMain').empty();
	map.removePopup(feature.popup);
	selectControl.unhighlight(feature); 
	feature.popup.destroy()
	feature.popup = null;
}	

function buildPopSide(){
	var htmlSide, htmlMain, imageWidth;
	$('#photoControls').show();
	htmlSide = "<ul id='ul-photos'>";
	$.each($('#popContent span'), function(i, item){
		if(i ==0){
			thmImage = $('img', item).attr('src');
			lrgImage = $('a', item).attr('href'); 
			oldSpan = $('img', item);			
			htmlSide +="<li id='listItem"+i+"' class='selected'><a  href=javascript:switchMain("+i+")>"+$('a', item).html()+"</a></li>";  

			$('img', item).attr('src', lrgImage); 
			$(this).show(); 
		} else{
			htmlSide +="<li id='listItem"+i+"'><a href=javascript:switchMain("+i+")>"+$('a', item).html()+"</a></li>";
		}
		$(this).attr("id","span"+i);
	});
	htmlSide += "</ul>"
	$('#popSide').append(htmlSide);
	$('#sideImage > li').bind('mouseover', function() {
	  $(this).toggleClass('hover');
	});
	$('#sideImage > li').bind('mouseout', function() {
	  $(this).toggleClass('hover');
	}); 
	$('#scrollPrev').bind('mouseover', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_left_lightblue.png');
	}); 
	$('#scrollPrev').bind('mouseout', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_left_dark.png');
	}); 
	$('#scrollNext').bind('mouseover', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_right_lightblue.png');
	}); 
	$('#scrollNext').bind('mouseout', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_right_dark.png');
	});  
	
	$('#prevStop').bind('mouseover', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_left_lightblue.png');
	}); 
	$('#prevStop').bind('mouseout', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_left_dark.png');
	}); 
	$('#nextStop').bind('mouseover', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_right_lightblue.png');
	}); 
	$('#nextStop').bind('mouseout', function() {
	  $('img', this).attr('src','http://library.duke.edu/exhibits/dorisduke/img/navarrow_right_dark.png');
	});

}
function switchMain(spanId){
	$('#popContent > span').hide()
	oldSpan.attr('src', thmImage)
	thmImage = $('#span'+spanId+' img').attr('src');
	$('#ul-photos > li').removeClass('selected');
	lrgImage = $('#span'+spanId+' a').attr('href');
	$('#span'+spanId+' img').attr('src', lrgImage);
	// console.log('image='+thmImage);
	$('#span'+spanId).show()
	$('#listItem'+spanId).toggleClass('selected')
	var scroll = $('#popSide').scrollLeft()+ $('#listItem'+spanId).position().left - 300;
	$('#popSide').animate({scrollLeft:scroll}, 'slow');
	
}

function scrollPrev(){
	var scroll = $('#popSide').scrollLeft() - 300;
	// console.log(scroll);
	$('#popSide').animate({scrollLeft:scroll}, 'slow');
}

function scrollNext(){
	var scroll = $('#popSide').scrollLeft() + 300;
	// console.log(scroll);
	$('#popSide').animate({scrollLeft: scroll}, 'slow');
}

</script>
 
  <body onload="init();">
	<div id="page" class="container_16">  
   		<div id="col-left" class="grid_12 alpha">
			<div class="grid_8">
				<div id='stopControls'><a id="prevStop" href="javascript:onFeatureSelect('OpenLayers.Feature.Vector_96')">Previous Stop</a><a id="nextStop" href="javascript:onFeatureSelect('OpenLayers.Feature.Vector_96')">Next Stop</a></div>
			</div>
			<div class="grid_4 alpha omega">	
				<div id="sliderOpacity">
					Slide to view current map:
					<div id="slider-id">
						<div class="ui-slider-handle"></div>
					</div>
				</div> <!-- end slider -->
			</div>
			<div class="clear"></div>  
			<div class="grid_12 alpha" id="timeline">
				<ul id="ul-timeline">
				</ul>
			</div>
			<div class="clear"></div>
    		<div id="map" class="largemap"></div>
			
		
		<div class="clear"></div>
		
		<div id="legendText"  class="grid_12 alpha omega">
			 <div id='photoControls' style="display:none;"><a id="scrollPrev" href="javascript:scrollPrev()"><img src="http://library.duke.edu/exhibits/dorisduke/img/navarrow_left_dark.png"/></a>&nbsp;<a id="scrollNext" href="javascript:scrollNext()"><img src="http://library.duke.edu/exhibits/dorisduke/img/navarrow_right_dark.png"/></a></div>
			<div id='popSide'></div>
			<div id="titleText" class="grid_12 alpha omega">
				<p>In the spring of 1938, Doris Duke Cromwell<a href="http://exhibits.library.duke.edu/archive/thumbnails/royal-dutch-air-lines0002_51cc0bbc4a.jpg"><img style="float:right;" align="right"   src="http://exhibits.library.duke.edu/archive/thumbnails/royal-dutch-air-lines0002_51cc0bbc4a.jpg" alt="1938_Jan25_Passengers"/></a>, accompanied by her husband James Cromwell and five companions, traveled nearly six weeks throughout the Middle East to acquire works of art for Shangri La, her Hawaiian estate which was under construction at the time.</p>
				<p><strong>Follow the Journey through the Middle East</strong></p>
				<p>Follow Doris and James’ journey throughout the Middle East by clicking the individual points on the map, the city names in the navigation bar above the map, or the Previous Stop and Next Stop arrows above the navigation bar. Start the journey by selecting Alexandria, Egypt.  Each succeeding destination on the navigation bar is in the same order the travelers followed. Find details, photographs, and artifacts for various stopovers below the map. To view a larger version of an image, scroll down the page and then click directly onto the image. A new browser tab will open.</p>
				<p>The map above is Bartholomew's General World Series Map of the Middle East, found in the Doris Duke Papers on the <a href="http://library.duke.edu/digitalcollections/rbmscl/uadukedorisshangrila/inv" target="_blank">Shangri La Residence.</a> It shows cities in the Middle East circled in blue pencil with dates next to them. These cities correspond very closely with the <a href="http://exhibits.library.duke.edu/archive/fullsize/1938_itinerary_page3_75e8e98e8f.jpg">final itinerary </a>of the trip. The Bartholomew map is layered over a present day Google map of the same region. Slide the transparency bar located above the map to move between the two views.</p>
				<p><strong>Why the Middle East?</strong></p>
				<p>While Doris' affluence likely afforded her the opportunity to make such a journey, one can only imagine the obstacles of such an excursion. Today traveling by air and automobile is ubiquitous, but in the 1930s no commercial flights were available in the Middle East nor were vehicles and qualified drivers easily accessible for side trips the travelers planned to take. Today we can book our trip to anywhere in the world via the Web, but in the 1930s telegrams and letters were the common method of communication. Food was another challenge. Dining at fine establishments in the larger cities such as Cairo or Damascus was likely unproblematic, but finding the same level of food quality in more remote areas could present a challenge. Knowing these potential hazards, what spurred Doris' travel throughout the Middle East in the 1930s?</p>
				<p>Her 1935 honeymoon tour of the world, which included eastern destinations such as Egypt, India, Indonesia and China, offers insight to her decision. Traveling throughout these countries, Doris became fascinated by the rich Islamic cultural traditions and began collecting works of art for a home in Florida she and her husband expected to occupy when they returned stateside. However, an extended stay in Hawaii at the end of their honeymoon changed these plans. Intrigued with the beauty and tranquility of the islands, Doris decided to build her own "Near Eastern" house in Honolulu and fill it with Islamic art and architecture. </p>
				<p><strong>Arranging the Tour</strong></p>
				<p>Doris was fortunate to have made the acquaintance of Arthur Upham Pope, one of the most distinguished scholars and vigorous advocates of Persian art and culture of the time. Using his knowledge of the region and connections with Persian scholars and government officials, he performed an invaluable service by facilitating the Cromwells travels. Pope arranged for the purchase and delivery of <a href="http://exhibits.library.duke.edu/archive/fullsize/1938_buickpurchase_7e62225485.jpg">two custom Buicks</a>, secured a private airplane which would fly the travelers to various locations, introduced the Cromwells to various art dealers who would assist in their purchases, and cleared the <a href="http://exhibits.library.duke.edu/archive/fullsize/1938_jan24_bac6b26e04.jpg">way</a> for the Cromwells to travel throughout the Middle East. </p>     
				<p>The images of the art objects in this interactive map are courtesy of the Doris Duke Foundation for Islamic Art.</p>
			</div>
			<div id="popMain" class="grid_12 alpha omega">
				<!-- <div id='popSide'></div> -->
			</div> <!-- end popMain -->
		</div> <!-- end legendText -->
		<div class="clear"></div>
	   </div> <!-- end col-left -->
   </div><!-- end page -->
  </body>
