<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

    <meta property="og:url" content="<?= $this->url() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
    <meta property="og:title" content="<?= $Wcms->page('title') ?>" />
    <meta name="twitter:site" content="<?= $this->url() ?>" />
    <meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <link rel="stylesheet" rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;700&display=swap">
    <?php if($_SESSION['loggedIn'] === true){ ?>
        <!-- CSS Style -->
        <link rel="stylesheet" rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php } ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" crossorigin="anonymous"/>
    <!-- site css -->
    <!--    <link rel="stylesheet" rel="preload" as="style" href="./css/style.css" />-->
    <link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('assets/css/style.min.css') ?>">

    <?= $Wcms->css() ?>
</head>
<body>
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<!-- nav bar -->
<?php if(empty($Wcms->get('pages', $Wcms->currentPage)) || ($Wcms->currentPage === $Wcms->get('config', 'login'))) { ?>
    <section class="uk-section">
        <div class="uk-container">
            <?= $Wcms->page('content') ?>
        </div>
    </section>
<?php } else { ?>
    <div class="uk-background-default">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="#">
                        <img data-src="<?= $Wcms->asset('assets/img/logo.jpg'); ?>" uk-img />
                    </a>
                </div>
                <?php if($Wcms->loggedIn) { ?>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <?= $Wcms->menu() ?>
                        </ul>
                    </div>
                <?php } ?>
            </nav>
        </div>
    </div>

    <!-- section head -->
    <section class="sec-head uk-background-cover uk-section" data-src="<?= $Wcms->asset('assets/img/header.jpg'); ?>" uk-img>
        <div class="uk-container">
            <h1><?= blockFixer('head_title')?></h1> <!-- head_title -->
            <div class="h1-u underText"><?= blockFixer('head_underText')?></div> <!-- head_underText -->
        </div>
        <div class="bg-line"><img data-src="<?= $Wcms->asset('assets/img/line.png');?>" uk-img></div>
    </section>

    <!-- section b0 -->
    <section class="sec-b0 uk-section">
        <div>
        <!-- <div class="uk-custom-cheat-bg uk-background-contain uk-background-center-right uk-background-image@m" data-src="<?= $Wcms->asset('assets/img/cheat-img-0.jpg'); ?>" uk-img> -->
            <div class="uk-container">
                <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                    <div>
                        <h2><?= blockFixer('b0_h2')?></h2> <!-- b0_h2 -->
                        <div class="h2-u underText"><?= blockFixer('b0_underText')?></div><!-- b0_underText -->
                        <ul class="uk-custom-ul uk-list uk-list-striped"><?= blockFixer('b0_ul')?></ul><!-- b0_ul -->
                        <div class="uk-custom-green-button uk-margin-top uk-button"><?= blockFixer('b0_button')?></div> <!-- b0_button -->
                    </div>
                    <div class="side-img-div uk-visible@m">
                        <div class="side-img">
                            <img data-src="<?= $Wcms->asset('assets/img/img_0.jpg'); ?>" uk-img>
                            <img data-src="<?= $Wcms->asset('assets/img/text-0.png'); ?>" uk-img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-sides">
            <?php /* <div class="bg-side-left" data-src="<?= $Wcms->asset('assets/img/bg_left.png');?>" uk-img></div> */ ?>
            <div class="bg-side-right" data-src="<?= $Wcms->asset('assets/img/bg_right.png');?>" uk-img></div>
        </div>
    </section>

    <!-- section b1 -->
    <section class="sec-b1 uk-section uk-background-cover" data-src="<?= $Wcms->asset('assets/img/bg-m-0.jpg'); ?>" uk-img>
        <div class="uk-custom-cheat-bg uk-background-contain uk-background-center-left uk-background-image@m" data-src="<?= $Wcms->asset('assets/img/bg-l-0.jpg'); ?>" uk-img>
            <div class="uk-container">
                <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                    <div class="side-img-div">
                        <div class="side-img">
                            <img data-src="<?= $Wcms->asset('assets/img/img_1.jpg'); ?>" uk-img>
                            <?php /*<img data-src="<?= $Wcms->asset('assets/img/text-0.png'); ?>" uk-img>*/ ?>
                        </div>
                    </div>
                    <div>
                        <h2><?= blockFixer('b1_h2')?></h2> <!-- b1_h2 -->
                        <div class="h2-u underText"><?= blockFixer('b1_underText')?></div> <!-- b1_underText -->
                        <ul class="uk-custom-ul uk-list uk-list-striped"><?= blockFixer('b1_ul')?></ul>
                        <div class="uk-custom-green-button uk-margin-top uk-button"><?= blockFixer('b1_button')?></div> <!-- b1_button -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-line"><img data-src="<?= $Wcms->asset('assets/img/line.png');?>" uk-img></div>
    </section>

    <!-- section b2 -->
    <section class="sec-b2 uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid uk-lightbox>
                <div class="uk-custom-self-center">
                    <div>
                        <h2><?= blockFixer('b2_h2')?></h2> <!-- b2_h2 -->
                        <div class="h2-u underText"><?= blockFixer('b2_underText')?></div><!-- b2_underText -->
                        <a href="<?= $Wcms->asset('assets/img/bg-l-0.jpg'); ?>" class="uk-visible@m uk-custom-green-button uk-margin-top uk-button"><?= blockFixer('b2_button')?></a> <!-- b2_button -->
                    </div>
                </div>
                <div class="uk-custom-gallery">
                    <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-text-center" uk-grid="parallax: 150">
                        <!-- first line -->
                        <div><?= blockFixer('b2_imagesL1')?></div><!-- b2_imagesL1 -->
                        <!-- second line -->
                        <div class="uk-visible@m"><?= blockFixer('b2_imagesL2')?></div><!-- b2_imagesL1 -->
                    </div>
                    <?php if(!$Wcms->loggedIn) { ?>
                        <div class="uk-hidden@m">
                            <a href="<?= $Wcms->asset('assets/img/img-0.jpg'); ?>" class="uk-custom-green-button uk-margin-top uk-button"><?= blockFixer('b2_button')?></a> <!-- b2_button -->
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="bg-sides">
            <div class="bg-side-left" data-src="<?= $Wcms->asset('assets/img/bg_left.png');?>" uk-img></div>
            <?php /* <div class="bg-side-right" data-src="<?= $Wcms->asset('assets/img/bg_right.png');?>" uk-img></div> */ ?>
        </div>
    </section>

    <!-- section b3 -->
    <section class="sec-b3 uk-section uk-background-cover" data-src="<?= $Wcms->asset('assets/img/bg-m-0.jpg'); ?>" uk-img>
        <div class="uk-container">
            <h2><?= blockFixer('b3_h2')?></h2> <!-- b3_h2 -->
            <div class="uk-custom-grid uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                <div>
                    <div><span><?= blockFixer('b3_block_a')?></span></div> <!-- b3_block_a -->
                </div>
                <div>
                    <div><span><?= blockFixer('b3_block_b')?></span></div> <!-- b3_block_b -->
                </div>
            </div>
            <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                <div>
                    <div class="uk-custom-green-button uk-margin-top uk-button"><?= blockFixer('b3_button')?></div> <!-- b3_button -->
                </div>
                <div class="uk-text-right uk-margin-top">
                    <img data-src="<?= $Wcms->asset('assets/img/text-0.png'); ?>" uk-img>
                </div>
            </div>
        </div>
        <?php /* <div class="bg-line"><img data-src="<?= $Wcms->asset('assets/img/line.png');?>" uk-img></div> */ ?>
    </section>

    <!-- section b4 -->
    <section class="sec-b4 uk-section">
        <div class="uk-container">
            <div class="h2"><?= blockFixer('b4_h2')?></div> <!-- b4_h2 -->
            <div class="h2-u underText"><?= blockFixer('b4_underText')?></div> <!-- b4_underText -->
            <div class="uk-text-center">
                <div class="uk-custom-green-button uk-margin-top uk-button"><?= blockFixer('b4_button')?></div> <!-- b4_button -->
            </div>
        </div>
        <div class="bg-sides">
            <div class="bg-side-top" data-src="<?= $Wcms->asset('assets/img/bg-top.png');?>" uk-img></div>
            <div class="bg-side-bottom" data-src="<?= $Wcms->asset('assets/img/bg-bottom.png');?>" uk-img></div>
        </div>
    </section>

<?php } ?>

<!-- JS Scripts -->
<?php if($_SESSION['loggedIn'] === true){ ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
<?php } ?>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js" crossorigin="anonymous" defer></script>

<?= $Wcms->js() ?>
</body>
</html>
