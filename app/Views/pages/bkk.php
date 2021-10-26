<?= $this->extend('layouts/front') ?>

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

<?= $this->include('components/bkk') ?>

<?= $this->include('components/footer') ?>

<?= $this->endSection() ?>