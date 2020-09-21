$(document).ready(function(){
			getDataone();
			$('#detail').click(function(){
				// alert('ok');
				var id = $(this).data('id');
				var photo = $(this).data('photo');
				var name =$(this).data('name');
				
				var price = $(this).data('price');
				var description = $(this).data('description');
				var technology = $(this).data('technology');

				var item = {id:id,photo:photo,name:name,price:price,description:description,technology:technology};
				
				
			
				var oldG = localStorage.getItem('G');
				if(oldG == null){
				var G=new Array();
					}else{
						var G = JSON.parse(oldG);
					}
						// var exist;
						// $.each(G,function(i,v){
						// 	if (id == v.id){
						// 		v.qty++;
						// 		exist = true;
						// 	}
						// })
						// if(!exist){
						// 	G.push(item);
						// }

						
						localStorage.setItem('G', JSON.stringify(G));
				//alert(name);
						getDataone();		
				
				
			});
			function getDataone(){
				var myG = localStorage.getItem('G');
				var data= $("#detailpage");
				var result = "";
				
				if(myG!= null){
					G = JSON.parse(myG);
					
					$.each(G,function (i,v){
						 
						
						result +=`
									
										
										<img src="${v.photo} " width="100"><br>
										${v.name}<br>
										$ ${v.price}<br>
										${v.description}
										${v.technology}
									`;
					})
					

				}
				data.html(result);
		}






});