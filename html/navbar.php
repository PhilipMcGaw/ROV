<header>

  <!-- Navbar -->
  <nav  style="z-index: 1;
               min-height: 58.59px;
               "
       class="navbar navbar-expand-lg navbar-dark bg-dark .navbar-fixed-top">

    <!-- Container wrapper -->
    <div class="container">

        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <i class="fa-solid fa-robot fa-lg"></i> <?php echo CAM_STRING; ?>
        </a>

      <!-- Right elements -->

<!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">

<!-- Battery Level -->
<!-- MQTT System/Battery/Level -->
         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#batteryLevel" id="batteryLevel">Error</a>
        </li>

<!-- MQTT System/Battery/Voltage -->
        <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" id="batteryVoltage">--.-- V</a>
        </li>

<!-- seperater -->
        <li class="nav-item me-3 me-lg-0">
            <a class="nav-link">|</a>
        </li>
<!-- End Battery Level -->

<!-- MQTT System/Temperature -->

         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#Thermometer"><i class="fas fa-thermometer-half fa-lg"></i> nn &deg;C</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
            <a class="nav-link">|</a>
        </li>

<!-- heading -->

<!-- MQTT System/Heading -->
         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#Compass"><i class="far fa-compass fa-lg"></i> 180&deg;</a>
        </li>

        <li class="nav-item me-3 me-lg-0">
            <a class="nav-link">|</a>
        </li>

<!-- MQTT System/Uptime -->
         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#UpTime"><i class="fas fa-stopwatch fa-lg"></i></a>
        </li>
         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#UpTime" id="upTime">hh:mm:ss</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
            <a class="nav-link">|</a>
        </li>
         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="/"><i class="fa-solid fa-video fa-lg"></i> Live</a>
        </li>
         <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="/preview.php"><i class="fa-solid fa-film fa-lg"></i> Files</a>
        </li>
      </ul>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
<!-- Navbar -->
