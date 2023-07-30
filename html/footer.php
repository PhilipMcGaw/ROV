<!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="<?php BASE_DIR ?>/js/mdb.min.js"></script>

    <!-- Custom scripts -->
    <script type="text/javascript" src="<?php BASE_DIR ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php BASE_DIR ?>/js/mqtt.js"></script>

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