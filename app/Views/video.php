<!DOCTYPE html>
<html lang="en">
<?= view('head', $meta) ?>

<body>
    <?= view('menu') ?>
    <video autoplay muted loop id="tm-video">
    <source src="<?php echo base_url('video/ocean-sea-wave-video.mp4'); ?>" />
    </video>
    <?= view('footer') ?>

</body>

</html>