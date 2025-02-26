<?php

namespace Geekbrains\Application1;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Render {

    private string $viewFolder = '/src/Views/';
    private FilesystemLoader $loader;
    private Environment $environment;


    public function __construct(){
        $this->loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . $this->viewFolder);
        $this->environment = new Environment($this->loader, [
        ]);
    }

    public function renderPage(string $contentTemplateName = 'page-index.twig',  array $templateVariables = []) {
        $template = $this->environment->load('main.twig');
        $templateVariables['content_template_name'] = $contentTemplateName;
        $templateVariables['time'] = 'Время: ' . date('h:i:s');
        return $template->render($templateVariables);
    }
}