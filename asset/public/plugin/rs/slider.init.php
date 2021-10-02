






(function($){
	
	$(document).ready(function(){
		
                
		$('.caption_play').click(function(){
						
			//finally pause the camera slider
			$('.cameraslider_2').cameraPause();
			
		}).find('a').prettyPhoto({
			overlay_gallery: false,
			default_width: 960,
			default_height: 540,
			callback: function(){
				$('.cameraslider_2').cameraPlay();
			}
		});	
		
				
		$('.cameraslider_2').camera({		
		loaderColor : '#1A88C1',
		fx:"random", 
easing:"linear", 
height:"30%", 
time:2000, 
transPeriod:800, 
loader:"pie", 
piePosition:"rightTop", 
loaderOpacity:"1", 
navigationHover:true, 
pagination:true, 
thumbnails:true, 
		})
	})
	
})(jQuery);
