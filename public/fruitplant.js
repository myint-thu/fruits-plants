
$(document).ready(function(){
	getData();
	getTotal();

	count();		
  	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	function count(){
	    var myG = localStorage.getItem("G");
	    if (myG) {
	    	var myG_obj = JSON.parse(myG);
	    	if (myG_obj!=0) {
	    		var count = myG_obj.length;
				$(".cartNoti").html(count);
			}else{
	        	$(".cartNoti").html(0);    
	        }
	    }else {
	    	$(".cartNoti").html(0);    
	    }
	};
	$('.addtocartbtn').click(function(){
	// alert('ok');
		var id = $(this).data('id');
		var name =$(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var item = {id:id,name:name,photo:photo,price:price,qty:1};

		// console.log(item);
		var oldG = localStorage.getItem('G');
		if(oldG == null){
			var G=new Array();
		}else{
			var G = JSON.parse(oldG);
		}
		var exist;
		$.each(G,function(i,v){
			if (id == v.id){
				v.qty++;
				exist = true;
			}
		})
		if(!exist){
			G.push(item);
		}


		localStorage.setItem('G', JSON.stringify(G));
		//alert(name);
		getData();		


	});
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	function getData(){
		var myG = localStorage.getItem('G');
		var data= $("#fruitplant_table");
		var result = "";
		var total=0;
		if(myG!= null){
			G = JSON.parse(myG);
			
			$.each(G,function (i,v){
				subtotal=v.price*v.qty;
				total+=subtotal;
				result +=`
						<tr>	
							<td><img src="${v.photo} " width="100">${v.name}</td>
							<td><input type="number" value="${v.qty}" class="changeqty" data-id="${i}"></td>
							<td>$ ${v.price}</td>
							<td>${subtotal}</td>
							<td><button class="removebtn" data-id="${i}">X</button></td>
						</tr><hr>`;
			})
			result+=`<tr>
			 			<td colspan="4">Total:</td>
			 			<td colspan="2">${total}</td>
			 		</tr>`;
		}else{
			result += 'Cart is Empty';
		}
		data.html(result);
	}

	function getTotal(){
		var myG = localStorage.getItem('G');
		var data= $("#getTotal");
		var result = "";
		if(myG!=null){
		G = JSON.parse(myG);
		var total=0;
		var subtotal = 0;
		
		$.each(G,function (i,v){
			 
			subtotal=v.price*v.qty;
			total+=subtotal;
		})
	}

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.post('/order',{name:total},function(response){
			console.log(response);
		})	
	}
	$('#fruitplant_table').on('click','.removebtn',function(){
		let index=$(this).data('id');
		var myG=localStorage.getItem('G');
		G=JSON.parse(myG);
		G.splice(index,1);
		localStorage.setItem('G',JSON.stringify(G));
		getData();
	})
	$('#fruitplant_table').on('change','.changeqty',function(){
		let qty=$(this).val();
		let index=$(this).data('id');

		var myG=localStorage.getItem('G');
		G = JSON.parse(myG);
		if(qty==0){
			G.splice(index,1);
		}
		$.each(G,function(i,v){
			if(i == index){
				v.qty=qty;
			}
		})
		localStorage.setItem('G', JSON.stringify(G));
		getData();
	})


			// start order 
	$('.checkoutbtn').click(function(){
		var notes = $('.notes').val();
		if (notes == '') {
			alert('Please fill request message!');
		}else{
				// var total = $('.total').val();
			var shopString = localStorage.getItem("G"); // string
			if (shopString) {
			// var shopArray = JSON.parse(shopString);
				$.post('/orders',{shop_data:shopString,notes:notes},function(response){
					if(response){
						alert(response);
						// ajax section
						localStorage.clear();
						getData();
						location.href="/";
		         	}
	   					// console.log(response);
	         		// 	if (response) {
				        //     getData();
	          	// 		}

		       	})
	      	}
	   	}	
	});
	// end order
});
	
 
