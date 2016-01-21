<?php

// Здесь происходит инициализация шаблонизатора Twig и других библиотек,
// используемых в проекте
// Помогает нам в этом функция getInstance()

class Templater
{
    protected static $instance = null;
    /**
     * @var Twig_Loader_Filesystem
     */
    protected $loader = null;
    /**
     * @var Twig_Environment
     */
    protected $twig = null;

    protected function __construct(){}
    protected function __clone(){}

    public static function getInstance(){
        if(is_null(self::$instance)) {
            self::$instance = new self();
            self::$instance->setTemplateSettings(); // импорт глобальных настроек
        }

        return self::$instance; // возвращаем настройки, тем самым запуская их на выполнение

    }

    // Сами настройки
    protected function setTemplateSettings() {
        $this->loader = new Twig_Loader_Filesystem(__DIR__.'../../views'); // папка с шаблонами
        $this->twig = new Twig_Environment($this->loader);
    }

    // Отображение шаблонов (а значит, и страниц)
    // Имя шаблона нужно передать в эту функцию.
    public function display($template, $data = array()){
        return $this->twig->render($template . '.twig', $data);
    }

}a