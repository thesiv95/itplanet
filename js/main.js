$(document).ready(function(){

    // Формируем ссылку на 1й файл при загрузке страницы
    $('#link').html('<a href="docs/1.docx">Скачать документ</a>');

// Раздел ГТО - переключение таблиц и изменение заголовка
    $('.content__item-chooseblock').children('.content__item-choose').click(function(e){
        e.preventDefault();
        var $this = $(this),
            index = $this.data('index'), // номер ступени
            forWho = $this.data('for'); // фрагмент текста "для кого"


        // Заносим в соответствующие ячейки
        $('#gtonum').text(index);
        $('#gtofor').text(forWho);
        // Переключаем css класс active, который используется для выделения выбранного пункта
        $this.addClass('active').siblings().removeClass('active');
        // Формируем ссылку на нужное имя файла, и вставляем ее в нужный див с id = link

        $('#link').html('<a href="docs/' + index +'.docx">Скачать документ</a>');

    });

});