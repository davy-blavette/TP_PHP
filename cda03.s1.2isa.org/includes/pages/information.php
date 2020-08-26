<main>


    <!-- Breadcrumb Section Begin -->
    <?php include('./includes/tmpl/head_breadcrumb.php') ?>
    <!-- Breadcrumb Section End -->


        <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-text">
                        <div class="bd-title">
                                <?php echo $introduction; ?>
                        </div>
                        <div class="bd-pic">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <?php
                                    $img = !empty($image) ? $image : 'upload_news_detail_default.jpg';
                                    ?>
                                    <img src="<?php echo $directory_img_news.$img; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <?php echo $description; ?>
                        </div>
                        <div class="tag-share">
                            <div class="tags">
                                <a href="#">Camera</a>
                                <a href="#">Photography</a>
                                <a href="#">Tips</a>
                            </div>
                            <div class="social-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        <?php if($user_level == 2){ ?>
            <form action="./index.php?page=information&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="formulaire" value="update_news" />
                <input type="hidden" name="IdNouvelle" value="<?php echo $id; ?>" />
                <label>Changer image</label>
                <input type="file" name="image" />

                <div class="row single-blog-item">
                    <div class="col-12 text-center">
                        <input type="submit" class="primary-btn" value="Modifier News">
                    </div>
                </div>
            </form>

        <?php } ?>
        </div>


    </section>
    <!-- Blog Details Section End -->

</main>