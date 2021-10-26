<?= $this->extend('layouts/front') ?>

<?= $this->section('css') ?>
<!-- Simple Lightbox -->
<link rel="stylesheet" href="<?= base_url() ?>/js/vendor/simplelightbox-master/dist/simple-lightbox.css">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="banner-area-wrapper">
    <div class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2><?= isset($title) ? $title . ' | ' . APP_NAME : APP_NAME ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('components/prestasi') ?>

<?= $this->include('components/footer') ?>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- Simple Lightbox -->
<script src="<?= base_url() ?>/js/vendor/simplelightbox-master/dist/simple-lightbox.js"></script>

<script>
    $(document).ready(function() {
        var lightbox = new SimpleLightbox('.myLightbox a');
    });
</script>

<?= $this->endSection() ?>