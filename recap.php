<!--
    Affichera tous les produits en session (et en détail) et présentera le total général de 
    tous les produits ajoutés 
-->


<?php 
session_start() ; 
?>
<a href="index.php">Revenir</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
    <!-- <style>table, th, td{border:1px solid;} </style> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
 <?php
   if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
    echo "<p>Aucan produit en session</p>" ;
   }else{
    // echo "<table style='border : 1px solid'>",
    echo "<table style='border : 1px solid'>",
                "<thead>",
                    "<tr>",
                        "<th>#</th>",
                        "<th>Nom</th>",
                        "<th>Prix</th>",
                        "<th>Quantité</th>",
                        "<th>Total</th>",
                    "</tr>",
                "</thead>" ,
                    "<tbody>" ; 


 $totalGeneral = 0 ; 
foreach($_SESSION['products'] as $index =>$product){

   echo "<tr>" ,
            "<td>".$index."</td>" ,
            "<td>".$product['name']."</td>" , 
            "<td>".number_format($product['price'], 2 , ",", "&nbsp;") ."&nbsp;£</td>",   
            "<td>".$product['qtt']."</td>" ,
            "<td>".number_format($product['total'], 2 , ",", "&nbsp;") ."&nbsp;£</td>",
       "</tr>" ;
       $totalGeneral +=$product['total'] ; 


}
   }
//    echo "<tr>",
//            "<td colspan=4>Total general : </td>"
//            "<td><strong>" .number_format($totalGeneral, 2 "," , "&nbsp;"). "&nbsp;£</strong></td>",
//         "</tr>" ,
    echo "</tbody>" ,"</table>" ;

 ?>



    
</body>
</html>


