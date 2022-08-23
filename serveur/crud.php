<?php
// creation 
// if(isset($_POST['valide'])){
        
//         $ = $_POST[''];
//         $ = $_POST[''];
//         $ = $_POST[''];
//         $ = $_POST[''];
//         $ = $_POST[''];

//     $sql="INSERT INTO articles (id, categorie, titre, image, contenu, date) VALUES (NULL,'$category', '$title', '$img', '$content', '$datetime')";
//     $result = $bdd->query($sql);
    
//     if($result){
//       //echo"informations ajoutées avec succès";
//       header('location:accueil.php');
//     }else{
//       die('Erreur : '.$e->getMessage());
//     }

// }
// supression 

// if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
//     die("Ho ?! Tu n'as pas précisé l'id de l'article !");
// }

// $id = $_GET['id'];
// $query = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
// $query->execute(['id' => $id]);
// if ($query->rowCount() === 0) {
//     die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
// }
// $query = $bdd->prepare('DELETE FROM articles WHERE id = :id');
// $query->execute(['id' => $id]);
// header("Location: accueil.php");
// exit();
// 

// la modification
// if(isset($_POST['modifier'])  ) {
//     $ = $_POST[''];
//     $title = $_POST[''];
//     $ = $_POST[''];
//     $ = $_POST[''];
//     $ = $_POST[''];

// $sql= "UPDATE articles SET '$title, '$img, '$content', '$datetime' WHERE id= '$id'";
// $results = $bdd->query($sql);
// header("location:accueil.php");
// }
// if(isset($_GET['id'])){
// $id = $_GET['id'];
// $formUpdatearticle = $bdd->query("SELECT * FROM `articles` WHERE `id`= $id");
// $ok = $formUpdatearticle->fetch();
// }

