<?php


class BuffController
{

    /**
     * @return GenesisController
     */
    public static function RefGenesisController()
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }

    /**
     * @return BooksController
     */
    public static function RefBookController()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    public static function RefContactController()
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
    }

    /**
     * @return HomeController
     */
    public static function RefHomeController()
    {
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return $controller;
    }
}