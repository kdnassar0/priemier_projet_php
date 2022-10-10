<!-- 
    Présentera un formulaire permettant de renseigner : 
    o Le nom du produit 
    o Son prix unitaire
    o La quantité désirée 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produits</title>
    <link rel="stylesheet" href="css/style1.css">
    
</head>
<body>
<a href="recap.php">VOIR LE RECAPITULATIF</a>

    
    <h1>Ajouter un produit</h1>
    <form action="traitement.php?action=ajouterPreduit" method="post"> 
        <p>
            <label>
                   <span> Nom du produit</span> 
                    <input type="text" name ="name">
            </label>
       </p>
       <p>
            <label>
                    <span>prix du produit</span>
                    <input type = "number" step="any" name ="price">
            </label>
            
       </p>        
        <p>  
            <label>
                    <span>quantité desiree : </span>
                    <input type = "number" name="qtt" value = "1">
            </label>
       </p>
       
        
       <input class='button' type = "submit" name = "submit" value =" Ajouter le produit" >
     
    </form>
    
</body>
</html>


