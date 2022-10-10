<!--
    Traitera la requête provenant de la page index.php (après soumission du 
    formulaire), ajoutera le produit avec son nom, son prix, sa quantité et le total calculé 
    (prix × quantité) en session. 
-->
<?php

session_start() ;
include "function.php" ;

$action = $_GET["action"];
$index = $_GET["index"] ;

switch($action) {
    case "ajouterPreduit":
        if(isset($_POST['submit']))
        {
            $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING)  ;
            $price = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION);  ;
            $qtt = filter_input(INPUT_POST,"qtt",FILTER_VALIDATE_INT)  ;

            if($name && $price && $qtt)

            {
            $product = ["name" => $name , 
                        "price" => $price , 
                        "qtt" => $qtt,
                      
                    ];
            $_SESSION['products'][] = $product ;      

        }

        header("LOCATION:index.php") ;

        }
    break;

    case "viderPanier":
        unset($_SESSION["products"]);
        header("LOCATION:recap.php") ;
    break;

    case "supprimerProduit":
       unset($_SESSION["products"][$index]);
       affichage();
        // header("LOCATION:recap.php") ;

    break;

    case "upQauntite":
        $_SESSION["products"][$index]["qtt"]++;
        header("Location:recap.php") ;
    break;
        

    case "downQauntite":
        $_SESSION["products"][$index]["qtt"]--;
         header("location:recap.php") ;
         if( $_SESSION["products"][$index]["qtt"]==0){
            unset($_SESSION["products"][$index]) ;
         }; 
    

    break;
}

?>