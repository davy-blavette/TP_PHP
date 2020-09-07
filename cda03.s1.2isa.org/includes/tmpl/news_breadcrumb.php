<div class="col-lg-4 col-md-6">
    <div class="single-blog-item">
        <?php
        $img = !empty($donnees['Image']) ? $donnees['Image'] : '001.jpg';
        ?>
        <img src="<?php echo './img/news/'.$img; ?>" alt="">
        <div class="blog-widget">
            <div class="bw-date">February 17, 2019</div>
            <a href="#" class="tag">#Sport</a>
        </div>
        <h4><a href="./index.php?page=information&id=<?php echo $donnees['IdNouvelle']; ?>"><?php echo $donnees['Titre']; ?></a></h4>
    </div>
</div>