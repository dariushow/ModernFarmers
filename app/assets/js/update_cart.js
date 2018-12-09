$(document).ready(function() {
	

	$(this).on("click", ".add-cart", function(e) {
		e.stopPropagation(); //this will prevent parent elements to be triggered
		let item_id = $(e.target).attr("data-id");
		let item_quantity = Math.abs(parseInt($(e.target).prev().val()));

		$.ajax({
			"url": "../controllers/update_cart.php",
			"data": {
				"item_id": item_id,
				"item_quantity": item_quantity,
				"ifFromCatalogPage":1
			},

			"type": "POST",
			"success": function(dataFromController) {
				$("#cart-count").text(dataFromController);
				

			}
		});

	});
});