$(document).ready(function(){
	$(".item_quantity>input").on("input", function(e){
		let item_id = $(e.target).data("id");
		let new_quantity = parseInt($(e.target).val());
		let price = parseFloat($(e.target).parents("tr").find(".item_price").text());
		let subTotal = new_quantity * price;
		$(e.target).parents("tr").find(".item_subtotal").text(subTotal);
		
		//fomd the ancestor tr of the selected element and find the children named item_price
		// console.log("Item to edit" + item_id);
		// console.log("New Quantity" + new_quantity);
		// console.log("Price" + price);
		// console.log("New subtotal" + (new_quantity*price));

		$.ajax({
			"url": "../controllers/update_cart.php",
			"type": "POST",
			"data": {
				"item_id":item_id,
				"item_quantity":new_quantity,
				"ifFromCatalogPage":0
			},
			"success": function(dataFromController){
				$("#cart-count").text(dataFromController);
				let total = 0;
				$(".item_subtotal").each(function(e) {
					total += parseFloat($(this).text());
				});
				$("#total_price").text(total);

			}
		});
	});
});

