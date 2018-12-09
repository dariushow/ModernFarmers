import { displayCardItems, listCardItems } from "./function_templates.js";


$(document).ready(function(){

	const searchForm = $("#search-form");

	searchForm.keypress(function(e) {

		if(e.which == 13) {

			$.ajax({

				"url": "../controllers/search_product.php",
				"type": "POST",
				"data": {

					"search": searchForm.val().toLowerCase()
				},
				"success": getResults
			});
		}

	});


	function getResults(jsondata){
		console.log(jsondata);
		if(jsondata != "") {
			const results = JSON.parse(jsondata);

			let cardColumns = ``;
			listCardItems.template = ``;
			results.forEach(displayCardItems);
			cardColumns = `

			<div class="card-columns">
			${listCardItems.template}
			</div>
			`;

			$(".products-container").html(cardColumns);
		} else {
			$(".products-container").html(`

				<h1> No Product Found. </h1>
				`);
		}
	}
});