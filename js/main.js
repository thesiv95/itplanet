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

    // Показ и скрытие элементов меню на маленьких экранах

    $('.header__togglemenu').click(function(){

        var menu = $('.header__menu'),
                sidebar = $('.sidebar');


        // Если нету класса hidden, т.е. если меню не скрыто:

        if (!(menu.hasClass('hidden'))) {
            menu.hide();
            sidebar.css('margin-top', 0 + 'px');
            menu.addClass('hidden'); // добавляем класс, который и будет обозначать, что меню скрыто
        } else {
            menu.show();
            sidebar.css('margin-top', 230 + 'px');
            menu.removeClass('hidden');
        }

    });

    // Отправка результатов опроса

    $('#poll-form').submit(function(e){
        e.preventDefault();
        var $this = $(this),
              data = $this.serialize(), // выбранное значение
              url = '../php/poll.php'; // файл - php-обработчик

        $.ajax({
            type: 'POST',
            url: url,
            dataType : 'JSON',
            data: data
        }).success(function(){
            console.log('Success');
        }).fail(function(){
            console.log('Fail');
        });

        console.log(data);
    });

});