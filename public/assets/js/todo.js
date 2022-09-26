var script = document.createElement('script');
    script.src="http://code.jquery.com/jquery-3.3.1.min.js"
	script.integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	script.crossOrigin="anonymous"
	
	
		$(document).ready(function(){
			$(".action-box").css("background-color", "yellow");
			$('.task-action-btn').on( 'click','.delete-btn',function(){
				id = $(this).attr('data-id');
				let url2=route('sil');
				$.ajax({
					url: url2,
					headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
					method:"Get",
					data:{rowId:id},
					success:function(response){
						alert(id)
						location.reload();
					}


				});
				
			});
			
		}); 
	