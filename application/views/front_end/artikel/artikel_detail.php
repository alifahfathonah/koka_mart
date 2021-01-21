<?php foreach($detail_artikel as $row){?>

<?php } ?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo base_url('artikel') ?>">Artikel</a>
                    <span><?php echo $row->artikel_judul; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2><?php echo $row->artikel_judul; ?></h2>
                            <p>Artikel <span>- <?php $date = date_create ($row->artikel_created); echo date_format ($date, "d F Y"); ?></span></p>
                        </div>
                        <div class="blog-large-pic">
                            <a href="<?= base_url('assets/upload/artikel/'.$row->artikel_gambar) ?>" data-fancybox data-caption="<?php echo $row->artikel_judul; ?>"><img style="height: auto; width: auto; padding: 10px;" src="<?= base_url('assets/upload/artikel/'.$row->artikel_gambar) ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog-detail-desc">
                            <p><?php echo htmlspecialchars_decode(htmlspecialchars_decode($row->artikel_deskripsi)); ?>
                            </p>
                        </div>
                        <!--
                        <div class="blog-quote">
                            <p>“ Technology is nothing. What's important is that you have a faith in people, that
                                they're basically good and smart, and if you give them tools, they'll do wonderful
                                things with them.” <span>- Steven Jobs</span></p>
                        </div>

                        <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="img/blog/blog-detail-1.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="img/blog/blog-detail-2.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="img/blog/blog-detail-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <p>Sum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        -->
                        
                        <!--
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="#" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="img/blog/prev-blog.png" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>The Personality Trait That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 offset-lg-2 col-md-6">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="img/blog/next-blog.png" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post:</span>
                                            <h5>The Personality Trait That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>-->
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img style="height: 89px; width: 91px;" src="<?= base_url('assets/front_end/img/png/man.png') ?>" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5>Penulis : <?php echo $row->artikel_penulis; ?></h5>
                                </a>
                                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa.</p>
                            </div>
                        </div>

                        <div class="tag-share"><!--
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Travel</li>
                                    <li>Beauty</li>
                                    <li>Fashion</li>
                                </ul>
                            </div>-->
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div style="float: right; margin-top: 10px">
                            <p style="color: #FBAC03">
                            <?php if (empty($row->artikel_update)) {
                                echo "";
                            }else{
                                ?>Last Update :
                                <?php $date = date_create ($row->artikel_update); echo date_format ($date, "d F Y"); ?>
                                <?php
                            } ?>
                            </p>
                        </div>
                        <!--
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->