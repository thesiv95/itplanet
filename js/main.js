$(document).ready(function(){

    // Формируем ссылку на 1й файл при загрузке страницы
    $('#link').html('<a href="docs/1.docx">Скачать документ</a>');

// Раздел ГТО - переключение таблиц и изменение заголовка
    $('.content__item-chooseblock').children('.content__item-choose').click(function(e){
        e.preventDefault();
        var $this = $(this),
            index = $this.data('index'), // номер ступени
            forWho = $this.data('for'), // фрагмент текста "для кого"
            replace = $this.data('replace'); // по этому атрибуту определяется пол
                                                            // если речь идет о женском поле, то он принимает значение TRUE
                                                            // и к имени файла добавляется префикс

        // Заносим в соответствующие ячейки
        $('#gtonum').text(index);
        $('#gtofor').text(forWho);
        // Переключаем css класс active, который используется для выделения выбранного пункта
        $this.addClass('active').siblings().removeClass('active');
        // Формируем ссылку на нужное имя файла, и вставляем ее в нужный див с id = link

        var link;
        if (replace) {
            link = '<a href="docs/' + index +'-woman.docx" title="">Скачать документ</a>';
        } else {
            link = '<a href="docs/' + index +'.docx" title="">Скачать документ</a>';
        }

        $('#link').html(link);

    });

});