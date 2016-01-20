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
        return $templater->display('_pages/index', $data);
    });
    $router->respond('GET', '/areas/?', function () use ($templater, $config) {
       $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Площадки';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/areas', $data);
    });
    $router->respond('GET', '/secs/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Секции';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/secs', $data);
    });
    $router->respond('GET', '/gto/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'ГТО';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/gto', $data);
    });
    $router->respond('GET', '/iwannatrain/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Хочу тренироваться!';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/iwannatrain', $data);
    });
    $router->respond('GET', '/calendar/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Календарь';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/calendar', $data);
    });
    $router->respond('GET', '/info/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Материалы';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/info', $data);
    });
    $router->respond('GET', '/equipment/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'Экипировка';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/equipment', $data);
    });
    $router->respond('GET', '/about/?', function () use ($templater, $config) {
        $data = array();
        $data['config'] = $config; // импорт настроек из файла конфигурации
        $data['sitename'] = 'Здоровый образ жизни';
        $data['pagename'] = 'О проекте';
        $data['title'] = $data['pagename'] . ' | ' . $data['sitename'];
        return $templater->display('_pages/about', $data);
    });
    $router->dispatch();