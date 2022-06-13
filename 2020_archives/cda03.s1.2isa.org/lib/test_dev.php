<?php

$dest = htmlspecialchars(str_replace('/n', '','/n <div>test</div>'));

echo $dest;

/*
include('../config/config.php');
//include('./functions.php');




if (!empty($_POST['name_img']) && !empty($_FILES['news_img'])) {
    if (0 == $_FILES['news_img']['error']) {
        //varialbles de configuration :
        $limitSize = 2097152;//votre limitte d'acception de la taille du fichier
        $validExtention = array('png', 'jpeg', 'jpg', 'gif');
        $fileSize = $_FILES['news_img']['size'];
        $today = date("Y:m:d");
        //déplacer le fichier
        $upload_news_img = './img/upload/news/';
        $img_info = new SplFileInfo($_FILES['news_img']['name']);
        $extension = $img_info->getExtension();
        $new_img = $_POST['name_img'] . '.' . $extension;

        if (in_array($extension, $validExtention)) {
            if ($limitSize > $fileSize) {
                move_uploaded_file($_FILES['news_img']['tmp_name'], $upload_news_img . $new_img);
                //TODO : Upload OK
                //TODO : BUG REQUETE Ne part pas jusqu'à la BDD.
                $req_insertimg_news = $bdd->prepare('INSERT INTO photo (Titre, DPhoto, Fichier, IdAdherent, IdActivite, Code) VALUES ( :titre, :dphoto, :fichier, :idadherent, :idactivite, :code)');
                try {
                    $result = $req_insertimg_news->execute(array(
                        'titre' => $_POST['name_img'],
                        'dphoto' => $today,
                        'fichier' => $upload_news_img,
                        'idadherent' => 7,
                        'idactivite' => 12,
                        'code' => 1));
                    echo "Résultat de la requête  : " . var_dump($result) . "<br>";
                } catch (Exception $e) {
                    echo $e;
                }
            } else {
                //fichier trop grand.
            }

        } else {
            //Extension non valide.
        }
    } else {
        //Il n'y a pas de fichier là dedans :
        var_dump($_FILES['news_img']);
    }
}

/*
//la requete de la table page
$reponse = $bdd->query('SELECT * FROM adherent');


//boucle les données récupérées
while ($donnees = $reponse->fetch()) {

    $query = 'UPDATE adherent SET Password = ? WHERE IdAdherent = ?';

    //prepare execute c'est beaucoup mieux, voir injection SQL !
    $response = $bdd->prepare($query);
    $result = $response->execute(array(My_Crypt($donnees["Password"]), $donnees["IdAdherent"]));


}
*/

?>

<form class="form-contact comment_form" action="" id="Post_Img_Form" enctype="multipart/form-data" method="post">
    <input type="hidden" name="post_img" value="add_img"/>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <div class="form-box mb-30">
                    <input type="text" name="name_img" placeholder="Nom du Fichier">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div  class="form-box mb-30">
                    <label>Téléverser une image : </label>
                    <input type="file" name="news_img" id="this_img" placeholder="Votre image"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Poster une Photo</button>
        </div>
    </div>
</form>
