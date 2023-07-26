<?php
use App\Controllers\BagController;
session_start();

use App\Controllers\ShopifyController;
use App\Controllers\UserController;
use App\Middlewares\Authentification;

require_once './vendor/autoload.php';



switch (getUri()) {

    
    case '/':
        $shopify = new ShopifyController();
        $shopify->index();
        break;

    case '/signup':
        $shopify = new ShopifyController();
        $shopify->signup();
        break;

    case '/home':
        $authentification = new Authentification();
        $authentification->noAuth();
        $shopify = new ShopifyController();
        $shopify->home();
        break;

    case '/article':
        $authentification = new Authentification();
        $authentification->noAuth();
        $shopify = new ShopifyController();
        $shopify->article();
        break;

    case '/articleBag':
        $form = new BagController();
        $form->addArticleBag();
        break;

    case '/form_signup':
        $form = new UserController();
        $form->formSignup();
        break;
    case '/form_login':
        $form = new UserController();
        $form->formLogin();
        break;
    case '/logout':
        $form = new UserController();
        $form->logout();
        break;

}