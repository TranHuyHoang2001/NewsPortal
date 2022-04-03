<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Weather</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
</head>
<body>
    <?php include('includes/header.php');?>
     <br>
     <br>
    <div class="weather">
        <a class="weatherwidget-io" href="https://forecast7.com/en/20d44106d16/nam-dinh/" data-label_1="NAM DINH" data-label_2="WEATHER" data-font="Times New Roman" data-theme="pure" data-basecolor="transparent" >NAM DINH WEATHER</a>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
    </div>
    <hr>
    <a class="weatherwidget-io" href="https://forecast7.com/en/21d00105d82/hanoi/" data-label_1="HANOI" data-label_2="WEATHER" data-font="Times New Roman" data-theme="pure" data-basecolor="transparent" >HANOI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
   <hr>
   <a class="weatherwidget-io" href="https://forecast7.com/en/16d05108d07/da-nang/" data-label_1="DANANG" data-label_2="WEATHER" data-font="Times New Roman" data-theme="pure" data-basecolor="transparent" >DANANG WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
   <hr>
   <a class="weatherwidget-io" href="https://forecast7.com/en/10d82106d63/ho-chi-minh-city/" data-label_1="HỒ CHÍ MINH" data-label_2="WEATHER" data-font="Times New Roman" data-theme="pure" >HỒ CHÍ MINH WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
   <hr>
<a class="weatherwidget-io" href="https://forecast7.com/en/16d45107d56/hue/" data-label_1="HUE" data-label_2="WEATHER" data-font="Times New Roman" data-theme="pure" >HUE WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
     <!-- Footer -->
 <?php include('includes/footer.php');?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

