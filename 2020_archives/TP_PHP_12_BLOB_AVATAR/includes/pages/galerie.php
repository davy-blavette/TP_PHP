<?php

//est-ce que la clef img (name) existe ?
if(isset($_FILES['img'])){

    //les différentes clef de $_FILES
    $fileName = $_FILES['img']['name']; //01.02.JPG
    $fileType = $_FILES['img']['type'];
    $fileTmp = $_FILES['img']['tmp_name'];
    $fileError = $_FILES['img']['error'];
    $fileSize = $_FILES['img']['size'];

    //mes variable de config
    $limitSize = 4097152; //2 Mo
    $directory = "./img/galerie/";
    $validExtention = array('png','jpeg','jpg','gif');

    //Trouver l'extention du fichier
    $nameArray = explode(".", $fileName); //array("01","JGP") -> 2 élements
    $lastIndex = count($nameArray) - 1;//total des éléments (2) mais je veux trouver le dernier index
        //array[0] = "01"
        //array[1] = "JPG"
    $extention = strtolower($nameArray[$lastIndex]);//deux elements dans le tb, mais -1 pour l'index du dernier element car index commence a zero

        //est-ce que l'extention est dans le tableau de mes extentions
        if(in_array($extention,$validExtention)){

            //nom de mon fichier
            $photoName = time().".".$extention;

            //la limite est elle valide ?
            if($limitSize > $fileSize){
                echo "upload";

                //fonction d'upload sur le serveur
                move_uploaded_file($fileTmp,$directory.$photoName);

                //requete d'insertion dans la BD
                $query = "INSERT INTO GALERIE (name, description, title ) VALUES ('".$photoName."','".$_POST['alt']."','".$_POST['title']."')";

                $bdd->query($query);

        }else{
                echo "Fichier trop gros (".($limitSize/1000000)." Mo max)";


        }



    }else{

            echo "extention non valide";

    }

//    var_dump($_FILES);

}

?>

<h1>Galerie photo de la chorale</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- enctype détermine l'encodage des données du formulaire qui transitent sur le serveur, important pour les fichiers !-->
            <form action="" method="post" enctype="multipart/form-data">
                <label>Titre du fichier : </label>
                <input type="text" name="title" value="" />
                <label>Description du fichier : </label>
                <input type="text" name="alt" />
                <label>Upload : </label>
                <input type="file" name="img" />
                <input type="submit" value="Envoyer">

            </form>
        </div>
    </div>
    <div class="row">

        <?php

        $query = "SELECT * FROM galerie";

        $reponse = $bdd->query($query);

        while($donnee = $reponse->fetch()){

            echo '<div class="col-sm-6 col-md-3"><img class="w-100" src="./img/galerie/'.$donnee['name'].'" alt="'.$donnee['description'].'" title="'.$donnee['title'].'" /></div>';

        }

        ?>

    </div>
</div>