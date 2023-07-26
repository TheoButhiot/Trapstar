<?php 

    namespace App\Controllers;

    use App\Models\BagModel;
    class BagController
    {
    public function addArticleBag()
        {
            $bag = new BagModel();

            // var_dump($_POST, $_SESSION);
            // die;
            $quantity = $_POST['quantity'];
            $size = $_POST['size'];
            $color= $_POST['color'];
            $user_id = $_SESSION["user_id"];
            $article_id= $_POST['article_id'];

            if( isset($quantity) && !empty($quantity) && isset($size) && !empty($size) && 
            isset($color) && !empty($color) && isset($user_id) && !empty($user_id) && 
            isset($article_id) && !empty($article_id))
            {
                $countBags= $bag->countArticleBag($article_id, $user_id, $color, $size);
            //                         var_dump($countBags);
            // die;
            }
            if(count($countBags) === 0){
                $addBag = $bag->addArticleBag($article_id,$user_id, $color, $size,$quantity);
                header('Location: /bag');
            }else{
                $bag ->updateArticleBag($article_id,$user_id, $color, $size,$quantity);
                header('Location: /bag');

            }
    
  
        }
    }
