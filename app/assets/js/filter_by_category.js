$(document).ready(function(){

	const listItems = $(".list-group-item");

	listItems.each(function(){
		$(this).click(function(){
			let obj = {
				"catId" : $(this).attr("id")
			};

			$.ajax({
				"url": "../controllers/show_by_category.php",
				"type": "POST",
				"data": obj,
				"success": filterByCatId


			});

		});

	});

	function filterByCatId(jsondata) {
		if(jsondata != ""){
			const filteredItems = JSON.parse(jsondata);
			let cardColumns = ``;
			let listItems = ``;
			filteredItems.forEach(function(items) {
				listItems += `
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="../app/assets/images/${items.image}" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title"><a href="product.php?id=${items.id}">${items.item_name}</a></h5>
				    <p class="card-text">Php ${items.price}</p>
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