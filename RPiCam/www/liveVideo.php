<body onload="setTimeout('init(<?php echo "$mjpegmode, $video_fps, $divider" ?>);', 100); upTime(); batteryLevel()">
<!-- Start your project here-->
<!--Main Navigation-->
<?php include_once 'navBar.php'; ?>

<!-- Background image -->
<!--   <div  class="bg-image vh-100"
       style="
              margin-top: -58.59px;
              background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/city/018.jpg');">
  </div> -->


</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
  <div class="container">


     <div class="container-fluid text-center liveimage">
    <div><img id="mjpeg_dest" <?php echo getLoadClass() . getImgWidth();?>
    </div>

  </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: hsla(0, 0%, 0%, 0.2);">
    &copy; 2023 Copyright:
    <a class="text-dark" href="https://philipmcgaw.com/">PhilipMcGaw.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--Footer-->
<!-- End your project here-->

      <?php if ($debugString != "") echo "$debugString<br>"; ?>





    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <script type="text/javascript">
function upTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('upTime').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(upTime, 500);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

<script type="text/javascript">
function batteryLevel() {
    let level = 81;
    let battery = "";

<!-- less than 15 % -->
  if (level < 20) {
      battery = "fa-battery-empty text-danger";
    }
    <!-- less than 30 % -->
   else if (level < 40) {
      battery = "fa-battery-quarter text-warning";
    }
<!-- less than 65 % -->
   else if (level < 60) {
      battery = "fa-battery-half";
    }
<!-- less than 90 -->
   else if (level < 80) {
       battery = "fa-battery-three-quarters";
    }
<!-- else -->
   else {
      battery = "fa-battery-full text-success";
    }

  document.getElementById('batteryLevel').innerHTML =  "<i class=\"fas " + battery + " fa-lg\"></i>";
  setTimeout(batteryLevel, 10000);
}

</script>


  </body>
</html>

