<?php

    // Подключение библиотек
    require_once "vendor-php/autoload.php";

    $router = new \Klein\Klein(); // перенаправление по url с помощью виртуального "роутера"
    $templater = Templater::getInstance(); // привязка шаблонизатора к этому роутеру
    $config = include_once 'config/config.php'; // подключение файла конфигурации



    // Перенаправление на страницы по ссылкам

    $router->respond('GET', '/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Главная страница';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'index'; // название текущей страницы, чтобы переключать классы в пунктах меню

        // Получение данных из БД с помощью библиотеки Idiorm
        // Подключение к БД
        ORM::configure(array(
            'connection_string' => 'mysql:host='. $config['database']['host'] .';dbname='. $config['database']['dbname'],
            'username' => $config['database']['user'],
            'password' => $config['database']['password']
        )
        );
        // Сбор значений таблицы
        $newsItems = ORM::for_table('news')->find_many();
        $data['newsitems'] = $newsItems;
        return $templater->display('_pages/index', $data);
    });
    $router->respond('GET', '/areas/?', function () use ($templater, $config) {
       $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Площадки';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'areas';

        ORM::configure(array(
                'connection_string' => 'mysql:host='. $config['database']['host'] .';dbname='. $config['database']['dbname'],
                'username' => $config['database']['user'],
                'password' => $config['database']['password']
            )
        );
        $areasItems = ORM::for_table('areas')->find_many();
        $data['areasitems'] = $areasItems;

        return $templater->display('_pages/areas', $data);
    });
    $router->respond('GET', '/secs/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Секции';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'secs';

        ORM::configure(array(
                'connection_string' => 'mysql:host='. $config['database']['host'] .';dbname='. $config['database']['dbname'],
                'username' => $config['database']['user'],
                'password' => $config['database']['password']
            )
        );
        $secsItems = ORM::for_table('secs')->find_many();
        $data['secsitems'] = $secsItems;

        return $templater->display('_pages/secs', $data);
    });
    $router->respond('GET', '/gto/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'ГТО';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'gto';
        return $templater->display('_pages/gto', $data);
    });
    $router->respond('GET', '/iwannatrain/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Хочу тренироваться!';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'iwannatrain';
        return $templater->display('_pages/iwannatrain', $data);
    });
    $router->respond('GET', '/calendar/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Календарь';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'calendar';

        ORM::configure(array(
                'connection_string' => 'mysql:host='. $config['database']['host'] .';dbname='. $config['database']['dbname'],
                'username' => $config['database']['user'],
                'password' => $config['database']['password']
            )
        );
        $calendarItems = ORM::for_table('calendar')->find_many();
        $data['calendaritems'] = $calendarItems;

        return $templater->display('_pages/calendar', $data);
    });
    $router->respond('GET', '/info/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Материалы';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'info';

        ORM::configure(array(
                'connection_string' => 'mysql:host='. $config['database']['host'] .';dbname='. $config['database']['dbname'],
                'username' => $config['database']['user'],
                'password' => $config['database']['password']
            )
        );
        $infoItems = ORM::for_table('info')->find_many();
        $data['infoitems'] = $infoItems;

        return $templater->display('_pages/info', $data);
    });
    $router->respond('GET', '/equipment/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Экипировка';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'equipment';

        ORM::configure(array(
                'connection_string' => 'mysql:host='. $config['database']['host'] .';dbname='. $config['database']['dbname'],
                'username' => $config['database']['user'],
                'password' => $config['database']['password']
            )
        );
        $equipmentItems = ORM::for_table('equipment')->find_many();
        $data['equipmentitems'] = $equipmentItems;
        $data['equipmentitems'];

        return $templater->display('_pages/equipment', $data);
    });
    $router->respond('GET', '/about/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'О проекте';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        $data['current'] = 'about';
        return $templater->display('_pages/about', $data);
    });
    $router->dispatch();