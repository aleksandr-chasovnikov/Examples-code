window.onload = function() {

	var items = document.querySelectorAll('.items .item');

	function activeItem() {
		this.classList.toggle('item-active'); //class="item-active"
	}

	setInterval(function() {
		var rand = mtRand(0, items.length - 1);
		activeItem.call(items[rand]); // call - подстановка items[rand] в this
	}, 500);
	
}

function mtRand(min, max) {
	return Math.floor(Math.random() * (max - min + 1));
}