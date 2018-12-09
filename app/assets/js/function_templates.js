const listCardItems = {
	template: ``
};




function displayCardItems(item) {	
	listCardItems.template += `
	<div class="card p-3">
		<img class="card-img-top" src="../app/assets/images/${item.image}" alt="Card image cap">
		<div class="card-body p-0 pt-2">
			<h3 class="card-title mb-1"><a href="product.php?id=${item.id}">${item.item_name}</a></h3>
			<p class="card-text mb-1">PHP ${item.price}</p>
			<input type="number" class="form-control mb-2" value=1>
			<button class="btn btn-sm btn-outline-primary add-cart" data-id="${item.id}">Add To Cart</button>
	</div>
</div>
	`;
	
}

export {displayCardItems, listCardItems};