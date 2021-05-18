<?php

include __DIR__.'/vendor/autoload.php';

use Raulr\GooglePlayScraper\Scraper;

$scraper = new Scraper();

$id = isset($argv[1]) ? $argv[1] : 'com.platinumVPN.v4vpn';
$app = $scraper->getApps([
    'com.platinumVPN.v4vpn',
    'com.mTelVPN.apps',
    'com.fastConnectVPN.v4vpn',
    'com.marking.apps',
    'com.hellovpn.apps',
    'com.v4vpn.samsolutionsltd',
    'com.kingBangla.vpn',
    'com.smartVPN.v4vpn',
    'com.pkvpn.v4vpn',
    'com.AlfaVPN.v4vpn',
    'com.only4du.v4vpn',
    'com.polovpn.apps',
    'com.ntVPN.apps',
    'com.vpn4voice.apps',
    'com.powerVPN.apps',
    'com.bahubali.vpn',
    'com.hdSpecial.apps',
    'com.snPlus.vpn',
    'com.hktunnel.apps',
    'com.shaplavpn.apps',
    'com.sakibvpn.apps',
    'com.kgfvpn.apps',
    'com.bholavpn.apps',
    'com.appletunnel.vpn',
    'com.srvpn.apps',
    'com.uaevpn.apps',
    'com.vpndigital.samsolutionsltd',
    'com.apptest.vpn',
    'com.mayagold.vpn',
    'com.xtremvpn.apps',
    'com.familyVPN.apps',
    'com.hellovpn.lite',
    'com.v4vpnSpecial.v4vpn',
    'com.rozaspecial.vpn',
    'com.DeshVPN.apps',
    'com.dhamakkahVPN.apps',
    'com.aplus.vpn',
    'com.LoveHistory.apps',
    'com.mplsumVPN.apps',
    'com.madeenaplus.vpn',
    'com.tecno.plus',
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>V4VPN Apps Statistics</title>
    <meta name="description" content="V4VPN all playstore apps download statistics">
    <meta name="author" content="Sam Solution Limited">
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <meta name="msapplication-config" content="./assets/img/favicons/browserconfig.xml">
    <link rel="icon" href="https://v4vpn.com/wp-content/uploads/2019/08/favicon.ico" sizes="192x192" />
    <meta name="theme-color" content="#563d7c">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .btn-sm {
            padding: 1px 4px 1px 4px !important;
            font-size: .700rem !important;
            text-transform: uppercase;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="./assets/offcanvas/offcanvas.css" rel="stylesheet">
</head>
<body class="bg-light">
<main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow-sm" style="background: #69baff;">
        <img class="mr-3" src="https://v4vpn.com/wp-content/uploads/2019/08/cropped-v4vpn-1.png" alt="" width="170" height="48">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">V4VPN Apps</h6>
            <small>&copy; <?php echo date('Y'); ?></small>
        </div>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">All apps statistics</h6>
        <?php foreach ($app as $item): ?>
        <div class="media text-muted pt-3">
            <img src="<?php echo $item['image']; ?>" class="mr-2 rounded" width="32" height="32"  alt="<?php echo $item['id']; ?>"/>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark"><a style="font-size:1rem;" href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['title']; ?></a></strong>
                <a href="#"><span class="badge badge-primary" style="font-size:100%;">Downloads <?php echo $item['downloads']; ?></span></a>
            </div>
                <span class="d-block">@<a href="<?php echo $item['author_link']; ?>"><?php echo $item['author']; ?></a> <span class="btn btn-dark btn-sm">Version <span class="badge badge-light"><?php echo $item['version'] ?></span></span> | Rating <?php echo $item['rating'] ?> (<?php echo $item['votes'] ?> votes) | Last updated <?php echo $item['last_updated'] ?> | Size <strong><?php echo $item['size'] ?></strong></span>
        </div>
        </div>
        <?php endforeach; ?>
        <small class="d-block text-right mt-3">
            All rights reserved by <a href="https://v4vpn.com" target="_blank">V4VPN.COM</a>
        </small>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="./assets/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="./assets/offcanvas/offcanvas.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var sum = 0;
        $(".online-users").each(function(){
            if(!isNaN(parseInt(this.innerText, 10))){
                sum = sum + (parseInt(this.innerText, 10));
            }
        });
        console.log(sum);
    });
</script>
</body>
</html>
