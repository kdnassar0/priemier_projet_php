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

  <div class ="tableau">
    <?php
    
  

        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "<p>Aucan produit en session</p>" ;
        }else{
           
            echo "<table style='border : 1px solid'>",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Total</th>",
                                "<th>control</th>" ,
                            "</tr>",
                        "</thead>" ,
                         


        $totalGeneral = 0 ; 
        $qtt=0 ;
        $price=0;
        foreach($_SESSION['products'] as $index =>$product){
            $total =$product['price']*$product['qtt'] ;

            echo "<tr>" ,
                        "<td>".$index."</td>" ,
                        "<td>".$product['name']."</td>" , 
                        "<td>".number_format($product['price'], 2 , ",", "&nbsp;") ."&nbsp;£</td>",   
                        "<td>"."<a class='button1' href=traitement.php?action=downQauntite&index=$index>-</a>".$product['qtt']."<a class='button1' href=traitement.php?action=upQauntite&index=$index>+</a>"."</td>" ,
                        "<td>".number_format($total, 2 , ",", "&nbsp;") ."&nbsp;£</td>",
                        "<td>"."<a class='button1' href=traitement.php?action=supprimerProduit&index=$index>Supprimer le pruduit</a>"."</td>",
                       "<tr>",
                        
                       
                "</tr>" ;
                $totalGeneral += $total ; 
                $qtt += $product['qtt'] ; 
             
                

            }
        
        
        echo "<tr>",
                "<td colspan=4>Total general : </td>",
                "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;£</strong></td>",
            "</tr>"   ;

 
        echo "<tr>",
                "<td colspan=4>Nombre du produits : </td>",
                "<td><strong>".number_format($qtt, 0, ",", "&nbsp;")."&nbsp;</strong></td>",
                "</tr>" ;
        echo  "</tr>" ,
            "<td>"."<a class='button1' href=traitement.php?action=viderPanier>vider le panier</a>"."</td>",
            "</tr>"   ;
        
   
  
            echo "</tbody>","</table>" ;
        }
        
?> 



</div>





    
</body>
</html>


