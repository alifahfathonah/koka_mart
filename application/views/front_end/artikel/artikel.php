<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
                    <span>Artikel</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Informasi Kopi & Kakao</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data->result() as $a) :?>

                <div class="col-lg-4 col-md-6" style="margin-top: 20px;">
                    <div class="single-latest-blog">
                        <a href="<?php echo site_url('front_end/Artikel/detail_artikel/'.$a->artikel_id) ?>">
                            <img style="height: 250px; width: 410px;" src="<?php echo site_url('assets/upload/artikel/'.$a->artikel_gambar) ?>" alt="">
                        </a>
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <?php $date = date_create ($a->artikel_created); echo date_format ($date, "d F Y"); ?>
                                </div>
                                <!--
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>-->
                            </div>
                            <a href="<?php echo site_url('front_end/Artikel/detail_artikel/'.$a->artikel_id) ?>">
                                <h4><?php echo $a->artikel_judul ?></h4>
                            </a>
                            <p><?php echo htmlspecialchars_decode(htmlspecialchars_decode(substr($a->artikel_deskripsi,0,150))) ?>...</p>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </section>
    <!-- Latest Blog Section End -->
