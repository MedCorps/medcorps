<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127204491-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-127204491-1');
    </script>

    <title>
        <? echo $title_tag; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $pageMeta; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link REL=”SHORTCUT ICON” HREF=”https://www.medcorpsusa.com/favicon.ico”>
    <link rel="apple-touch-icon" href="https://www.medcorpsusa.com/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.medcorpsusa.com/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.medcorpsusa.com/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.medcorpsusa.com/touch-icon-ipad-retina.png">


</head>

<body>
    <div class="header">
        <div class="headerWrap">
            <div id="logoHeader"><a href="index.php"><img src="img/logo.png" alt="medcorp logo" /></a></div>
            <div id="title_block">
                <div id="titleName"><a href="staff.php#allen" title="Click for Bio">Allen L. Silvey, Jr. - DO</a></div>
                <div id="titleName"><a href="staff.php#peter" title="Click for Bio">Peter J. Saccone - DO</a></div>
                <div id="titleName"><a href="staff.php#michelle" title="Click for Bio">Michelle Hathaway - PA-C</a></div>
                <div id="titleName">Asthma &amp; Pulmonary Specialists</div><br>
            </div>
            <div id="title_block">
                <div id="titlePhone">(856) 352-6572 - Sewell</div>
                <div id="titlePhone">(609) 788-8953 - Linwood</div>
                <div id="titlePhone">(609) 778-2744 - Cape May Court House</div>
                <div id="titlePhone">(606) 759-9424 - Maysville KY</div>
            </div>
        </div>
    </div>

    <?php include '_nav.php'; ?>
