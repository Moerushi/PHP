<?php

namespace Geekbrains\Application1;

final class Application
{

    private const APP_NAMESPACE = 'Geekbrains\Application1\Controllers\\';

    private string $controllerName;
    private string $methodName;
    private static array $config;

    public static function config(): array
    {
        return Application::$config;
    }

    function error_404()
    {
        header("HTTP/1.0 404 Not Found");
        include 'src/Views/error_page.twig';
        exit;
    }

    public function run(): string
    {
        Application::$config = parse_ini_file('config.ini', true);

        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if (isset($routeArray[1]) && $routeArray[1] != '') {
            $controllerName = $routeArray[1];
        } else {
            $controllerName = "page";
        }

        $this->controllerName = Application::APP_NAMESPACE . ucfirst($controllerName) . "Controller";

        if (class_exists($this->controllerName)) {

            if (isset($routeArray[2]) && $routeArray[2] != '') {

                $methodName = $routeArray[2];
            } else {
                $methodName = "index";
            }

            $this->methodName = "action" . ucfirst($methodName);

            if (method_exists($this->controllerName, $this->methodName)) {

                $controllerInstance = new $this->controllerName();
                $method = $this->methodName;
                return $controllerInstance->$method();
                
            } else {
                $this->error_404();
            }
        } else {
            $this->error_404();
        }
    }
}
