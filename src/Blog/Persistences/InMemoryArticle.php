<?php
namespace Blog\Persistences;

use Blog\Interfaces\IArticle;
use Blog\Models\Article;

class InMemoryArticle implements IArticle{

    protected array $articles;

    public function __construct(){
        $this->articles = [
            1 => new Article(1,"Articulo 1", "Nuevo contenido del articulo 1", "https://source.unsplash.com/random/200x200"),
            2 => new Article(2,"Articulo 2", "Nuevo contenido del articulo 2", "https://source.unsplash.com/random/200x200"),
            3 => new Article(3,"Articulo 3", "Nuevo contenido del articulo 3", "https://source.unsplash.com/random/200x200"),
            4 => new Article(4,"Articulo 4", "Nuevo contenido del articulo 4", "https://source.unsplash.com/random/200x200")
        ];
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticle(int $id)
    {
        return $this->articles[$id];
    }
}