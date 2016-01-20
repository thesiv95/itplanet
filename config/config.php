<?php

    // Файл конфигурации

    return array(
        'base_url' => $_SERVER['REMOTE_HOST'].'/', // Основной УРЛ, относительно которого прописываются пути к файлам/картинкам
        'database' => array(
            'host' => 'localhost', // Сервер БД
            'user' => 'root', // Пользователь БД
            'password' => '', // Пароль БД
            'dbname' => 'hlssite' // Имя БД
        )
    );