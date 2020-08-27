<?php

if(isset($_SESSION['id'])){

    //est-ce que la clef img (name) existe ?
    if(isset($_FILES['img'])){

        //les différentes clef de $_FILES
        $fileName = $_FILES['img']['name']; //01.02.JPG
        $fileType = $_FILES['img']['type'];
        $fileTmp = $_FILES['img']['tmp_name'];
        $fileError = $_FILES['img']['error'];
        $fileSize = $_FILES['img']['size'];

        $id = $_SESSION['id'];

        //mes variable de config
        $limitSize = 4097152; //2 Mo
        $validExtention = array('png','jpeg','jpg','gif');

        //Trouver l'extention du fichier
        $nameArray = explode(".", $fileName); //array("01","JGP") -> 2 élements
        $lastIndex = count($nameArray) - 1;//total des éléments (2) mais je veux trouver le dernier index
        //array[0] = "01"
        //array[1] = "JPG"
        $extention = strtolower($nameArray[$lastIndex]);//deux elements dans le tb, mais -1 pour l'index du dernier element car index commence a zero

        //est-ce que l'extention est dans le tableau de mes extentions
        if(in_array($extention, $validExtention)){

            //nom de mon fichier
            $photoName = time().".".$extention;

            //la limite est elle valide ?
            if($limitSize > $fileSize){

                //fonction d'upload sur le serveur
                $img_blob = file_get_contents($fileTmp);

                //le formulaire avec action UPDATE
                $query = 'UPDATE adherent SET AVATAR = ?, AVATAR_TYPE = ? WHERE ID_ADHERENT = ?';

                $response = $bdd->prepare($query);
                $result = $response->execute(array($img_blob, $fileType, $id));

            }else{
                echo "Fichier trop gros (".($limitSize/1000000)." Mo max)";


            }



        }else{

            echo "extention non valide";

        }

    //    var_dump($_FILES);

    }



    ?>


    <section id="profil">
        <h1>Ma Page profil</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <!-- enctype détermine l'encodage des données du formulaire qui transitent sur le serveur, important pour les fichiers !-->
                    <form action="" method="post" enctype="multipart/form-data">
                        <label>Upload Avatar : </label>
                        <input type="file" name="img" />
                        <input type="submit" value="Envoyer">

                    </form>
                </div>
                <div class="col-6">
                    <img width="100" src="./includes/avatar.php?id=<?php echo $_SESSION['id']; ?>" />
                </div>
            </div>
        </div>
    </section>

<?php } ?>