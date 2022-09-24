var script = document.createElement('script');
    script.src="http://code.jquery.com/jquery-3.3.1.min.js"
	script.integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	script.crossOrigin="anonymous"
	
	
		$(document).ready(function(){
			$('.task-action-btn').click(function(){
				id = $(this).attr('data-id');
				$.ajax({
					url: "{{ route('sil') }}",
					headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
					type:'get',
					data:{rowId:id},
					success:function(response){
						alert(id)
					}


				});
				
			});
			
		}); 
	