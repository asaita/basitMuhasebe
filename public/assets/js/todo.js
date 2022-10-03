var script = document.createElement('script');
    script.src="http://code.jquery.com/jquery-3.3.1.min.js"
	script.integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	script.crossOrigin="anonymous"
	
	
		$(document).ready(function(){
			//$(".mark-all-tasks").css("background-color", "yellow");
			

			//alert(whatIsAllDuties);
			
			
			$('.task-action-btn').on( 'click','.action-box.large.complete-btn',function(){
				id = $(this).attr('data-id');
				let url2=route('update');
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

			$('.task-action-btn').on( 'click','.action-box.large.delete-btn',function(){
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
			//tüm görevlerin hepsi tamamlanmışsa hepsini tamamlanmamış yap aktif oluyor
			if (whatIsAllDuties==1) {//whatIsAllDuties veri tabanından tüm görevlerin bitip bitmediğini çekiyor
				$(".mark-all-btn.move-down").css("display", "contents");
				$(".mark-all-btn#mark-all-finished ").css("display", "none");
			} else{//tüm görevler tamamlanmışsa hepsini tamamlanmamış yap aktif oluyor
				$(".mark-all-btn#mark-all-finished ").css("display", "contents");;
				$(".mark-all-btn.move-down").css("display", "none");
			}
			//Mark All as Finished
			$('.mark-all-tasks-container').on( 'click','.mark-all-btn',function(){
				
				$(".mark-all-btn.move-down").css("display", "contents");
				$(".mark-all-btn#mark-all-finished ").css("display", "none");
							
				let url2=route('allUpdate');
				$.ajax({
					url: url2,
					headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
					method:"Get",
					data:{isDone:1},
					success:function(response){
						
						location.reload();
					}


				});
				
			});
			//Mark All As Unfinished
			$('.mark-all-tasks-container').on( 'click','.mark-all-btn.move-down',function(){
				
				$(".mark-all-btn#mark-all-finished ").css("display", "contents");;
				$(".mark-all-btn.move-down").css("display", "none");
				
				$(".mark-all-btn").css("background-color", "yellow");

				
				let url2=route('allUpdate');
				$.ajax({
					url: url2,
					headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
					method:"Get",
					data:{isDone:0 },
					success:function(response){
						
						location.reload();
					}


				});
				
			});
			

			
		}); 
	