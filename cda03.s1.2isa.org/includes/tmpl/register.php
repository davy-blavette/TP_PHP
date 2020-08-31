<!-- Register Section Begin -->
<section class="register-section classes-page spad contact-form">
    <form action="./index.php?page=<?php echo $page ?><?php echo isset($id) ? '&id='.$id : ''; ?>" method="post" class="register-form" enctype="multipart/form-data">
        <input type="hidden" name="formulaire" value="<?php echo $action; ?>" />
        <input type="hidden" name="IdAdherent" value="<?php echo isset($id) ? $id : ''; ?>" />

        <div class="container">
            <div class="classes-page-text">
                <div class="row">
                        <div class="col-lg-8">
                        <div class="register-text">
                            <div class="section-title">
                                <h2><?php echo $title_register; ?></h2>
                                <p>La cotisation est de septembre à août</p>
                            </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">Identifiant</label>
                                        <input type="text" id="login" name="login" value="<?php echo isset($identifiant) ? $identifiant : 'login'.time() ?>" placeholder="" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Mot de passe</label>
                                        <input type="password" id="password" name="password" value="" placeholder="" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Prénom</label>
                                        <input type="text" id="firstname" name="prenom" required value="<?php echo isset($prenom) ? $prenom : 'test prenom' ?>" placeholder="" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Nom</label>
                                        <input type="text" id="name" name="nom" required value="<?php echo isset($nom) ? $nom : 'test nom' ?>" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Date de naissance</label>
                                        <input type="date" id="birth" name="dnaiss" value="1980-01-22" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Adresse</label>
                                        <input type="text" id="adress" name="adresse1" value="test adresse" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="cp">CP</label>
                                        <input type="text" id="zip" name="cdpost" value="Test cp" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Ville</label>
                                        <input type="text" id="city" name="ville" value="test ville" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" value="test@test.com" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="mobile">Mobile No*</label>
                                        <input type="text" id="mobile" name="tel" value="test tel" required />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="mobile">Certificat medical (-6 mois)*</label>
                                        <!--
                                        <input type="file" id="certificat" name="certificat" required />
                                        -->
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="mobile">Votre cylindrée</label>
                                        <label for="mobile">125 cm3</label>
                                        <input type="radio" name="cylindree" value="125 cm3" <?php echo isset($cylindree) && $cylindree == "125 cm3" ? 'checked' : '';  ?>/>
                                        <label for="mobile">250 cm3</label>
                                        <input type="radio" name="cylindree" value="250 cm3" <?php echo isset($cylindree) && $cylindree == "250 cm3" ? 'checked' : '';  ?>  />
                                        <label for="mobile">> 250 cm3</label>
                                        <input type="radio" name="cylindree" value="> 250 cm3" <?php echo isset($cylindree) && $cylindree == "> 250 cm3" ? 'checked' : '';  ?>/>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="register-pic">
                            <?php
                            //$img = !empty($image) ? $image : 'upload_profil_default.jpg';
                            ?>
                            <img src="./lib/blob.php?user=<?php echo $id; ?>" alt="">
                            <label>Changer photo profil</label>
                            <input type="file" name="image" />
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <label for="mobile">Vous acceptez que votre image soit utilisée sur le site internet</label>
                        <input type="checkbox" id="droit" name="droit_image" checked />
                    </div>

                    <div class="col-12 text-center pb-4">
                        <button type="submit" class="register-btn"><?php echo $btn_register; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- Register Section End -->