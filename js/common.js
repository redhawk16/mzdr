$(document).ready(function(){
	nav_item = document.querySelectorAll('.header-bottom__nav-item');
	dropdown = document.querySelector('#dropdown-menu-items');

	nav_item.forEach(item => {
		item.addEventListener('click', () => { // Обработчик нажатия для эементов меню nav>li
			if(item.classList.contains('active')){
				remove_class(nav_item);
			 	remove_class(dropdown.children);
			} else {
			remove_class(nav_item);
			item.classList.toggle('active'); // Присваиваем класс .active выбранному элементу

			remove_class(dropdown.children);
			if(item.hasAttribute('data-dropdown-to')) dropdown.children[item.dataset.dropdownTo].classList.toggle('active'); // Присваиваем класс .active соответствующему выбранному элементу
			}
		});
	});

	//Blind function
	blind = document.querySelector('.header-top__blind-text')

	blind.addEventListener('click', () => {
		document.querySelectorAll('a,p,td,th,span,li').forEach(item => {
			item.style.fontSize=(item.style.fontSize == '28px')? '16px': '28px';
		});
	});

	// Owl-Carousel
	$('.owl-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		margin: 50,
		nav: false,
		dots: false,
		responsive:{
			0:{
				items: 1
			},
			480:{
				items: 2
			},
			768:{
				items: 3
			},
			1240:{
				items: 4
			}
		}
	})
});

function remove_class(element){ 
	// Находим существующий класс .active (у переданного элемента) и удаляем его
	for(i = 0; i<element.length; i++) { 
		if(element[i].classList.contains('active')) {
			element[i].classList.toggle('active');
		}
	} 
}

/* function change_fsize(element, type){
	currentSize = parseInt((window.getComputedStyle(element, null).getPropertyValue('font-size')).replace('px', ''));
	if(currentSize < 20) {
		newSize = currentSize + 6;
	} 
	else if(type == 'h' && currentSize < 25) {
		newSize = currentSize + 6;
	} else {
		newSize = currentSize;
	}

	if(currentSize >= newSize) {
		element.style.fontSize = newSize - 6 + 'px';
	} else {
		element.style.fontSize = newSize + 'px';
	}
} */

ymaps.ready(function (){ 
    var myMap = new ymaps.Map("map", {
        center: [54.990215, 73.365535],
        controls: ['zoomControl'],
        zoom: 10 //Уровень масштабирования от 0 (весь мир) до 19.
    });
});