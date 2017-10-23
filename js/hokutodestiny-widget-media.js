(function($){
	
	$(document).ready(function(){
		
		var imageupload;

		$('button#imageupload').on('click',function(e){
			
			
			e.preventDefault();
			
			if(imageupload){
				
				imageupload.open();
				
			}
			
			imageupload = wp.media({
				
				'title'	: 'Choose Your Profile Picture', 
				'button': {
					'text'	: 'Profile Picture Select '
				},
				multiple: true,
				
				
			});
			
			imageupload.on('select',function(){
				
				
			
				var imageurl = imageupload.state().get('selection').first().toJSON();
				
			
			$('input.imagelinkurl').val(imageurl.url);
				
				
				
			});
			
			
			imageupload.open();
			
			
		});
	});
})(jQuery)