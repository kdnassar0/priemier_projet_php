<!--
    Traitera la requête provenant de la page index.php (après soumission du 
    formulaire), ajoutera le produit avec son nom, son prix, sa quantité et le total calculé 
    (prix × quantité) en session. 
-->
<?php

session_start() ; 
if(isset($_POST['submit'])){

    echo "bonjour";
}
//header("location:index.php") ; 

?>