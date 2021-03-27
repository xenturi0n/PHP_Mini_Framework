<?php
namespace Blog\Controllers;

use Blog\Interfaces\IArticle;
use Blog\Persistences\InMemoryArticle;
use Twig\Environment;

class HomeController{
    protected IArticle $repository;
    protected Environment $twig;

    /**
     * HomeController constructor.
     * @param IArticle $repository
     * @param Environment $twig
     */
    public function __construct(IArticle $repository, Environment $twig)
    {
        $this->repository = $repository;
        $this->twig = $twig;
    }

    /**
     *
     */
    public function index(){
        //var_dump($this->repository->getArticles());
        echo $this->twig->render('home.twig',['articles'=>$this->repository->getArticles()]);
    }

    /**
     * @param string $nombre
     */
    public function hola(string $nombre){
        echo "Hola {$nombre} desde el metodo hola";
    }

    public function articulos(){
        $articles = $this->repository->getArticles();
    }

    public function articulo(int $id){
        $article = $this->repository->getArticle($id);

        var_dump($article);
    }
}