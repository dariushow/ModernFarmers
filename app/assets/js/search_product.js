$(document).ready(function() {
	const searchForm = $("#search-form");
	$("#showAll").click(function() {
		$.ajax({
			"url": "../controllers/show_products.php",
			"type": "POST",
			"data": {},
			"success": CatId
		});	
	});

	searchForm.keypress(function(e) {
		if(e.which == 13) {
			$.ajax({
				"url": "../controllers/search_product.php",
				"type": "POST",
				"data": {
					"search": searchForm.val()
				},
				"success": getResults
			});
		}

	});

	function getResults(jsondata) {
		console.log(jsondata);
		if (jsondata !== "") {
			const result = JSON.parse(jsondata);
			let cardColumns = ``;
			let listItems = ``;
			result.forEach(function(item) {
				listItems += `
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="../app/assets/images/${item.image}" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title"><a href="product.php?id=${item.id}">${item.item_name}</a></h5>
				    <p class="card-text">${item.price}</p>
				    <a href="#" class="btn btn-primary">Add to Cart</a>
				  </div>
				</div>


				`;

				cardColumns = `
				<div class="card-columns">
					${listItems}
				</div>
				`;

				$(".products-container").html(cardColumns);

			});
		}
	}
});