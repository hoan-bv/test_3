<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeMoney.vn - Sàn kết nối tài chính hàng đầu Việt Nam</title>
    <base href="http://127.0.0.1:9900/">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=vietnamese"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/f2946221e8.js"></script>
    <link rel="stylesheet" href="assets/css/package/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= asset('css/select2.min.css') ?>" rel="stylesheet"/>
    <link href="<?= asset('css/style.css') ?>" rel="stylesheet"/>

    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/popper.min.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('js/select2.min.js') ?>"></script>


</head>
<body>

<?php require('header.html.php');?>

    <?php echo $dataShow ;?>

<?php require('footer.html.php'); ?>

</body>
</html>
