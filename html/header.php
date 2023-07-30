<!DOCTYPE html>
<html lang="en" content="width=550, initial-scale=1">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo CAM_STRING; ?></title>

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php BASE_DIR ?>/static/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php BASE_DIR ?>/static/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php BASE_DIR ?>/static/favicon-16x16.png">
    <link rel="manifest" href="<?php BASE_DIR ?>/static/site.webmanifest">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/mdb.min.css" />

    <!-- Custom bits -->
    <link rel="stylesheet" href="<?php BASE_DIR ?>/css/style" />

  </head>
<body onload="setTimeout('init(<?php echo "$mjpegmode, $video_fps, $divider" ?>);', 100); upTime(); batteryLevel()">