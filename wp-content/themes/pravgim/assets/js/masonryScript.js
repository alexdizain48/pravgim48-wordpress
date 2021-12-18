jQuery(window).load(function () {
	
    $('#containerMasonry').masonry({
      // указываем элемент-контейнер в котором расположены блоки для динамической верстки
      itemSelector: '.tem',
      // указываем класс элемента являющегося блоком в нашей сетке
          singleMode: true,
          // true - если у вас все блоки одинаковой ширины
      isResizable: true,
      // перестраивает блоки при изменении размеров окна
	  gutter: 15,
	  isFitWidth: true, 
      isAnimated: true,
      // анимируем перестроение блоков
          animationOptions: { 
          queue: false, 
          duration: 500 
      }
     // опции анимации - очередь и продолжительность анимации
    }); 
	
	$('#containerMasonry').masonry({
      itemSelector: '.temAllNews', 
          singleMode: false,
      isResizable: true,
	  gutter: 15,
	  isFitWidth: true, 
      isAnimated: true,
          animationOptions: { 
          queue: false,
          duration: 500 
      }
    });
	
	$('#containerMasonry').masonry({
      itemSelector: '.temNewsImg', 
          singleMode: false,
      isResizable: true,
	  gutter: 15,
	  isFitWidth: true, 
      isAnimated: true,
          animationOptions: { 
          queue: false, 
          duration: 500 
      }
    });
	
});

