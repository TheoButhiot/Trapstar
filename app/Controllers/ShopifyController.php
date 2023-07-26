<?php

// définition des fonctions rout

namespace App\Controllers;

use App\Models\ArticleModel;
class ShopifyController
{
  public function index()
  {
    require './ressources/views/components/loginView.php';
  }

  public function signup()
  {
     require_once './ressources/views/components/signupView.php';
  }

  public function home()
  {
    $articles = new ArticleModel();
    $clothes = $articles->getArticleAll();
    

     require_once './ressources/views/components/homeView.php';

  }

  public function article()
  {
    $id = $_GET['id'];
    $articleById = new ArticleModel();
    $clothe = $articleById->getArticleById($id);
    require_once './ressources/views/components/articleView.php';
  
  }
}
