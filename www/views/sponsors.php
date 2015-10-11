
<?php
if (Flight::has('data_sponsors')) {
     $data = Flight::get('data_sponsors');

     $c=1;
   foreach ($data as $p) {

   if ($c % 2 == 0) {
      echo "<div class='content-section-a'>";
      $class1 = "col-lg-5 col-sm-6";
      $class2 = "col-lg-5 col-lg-offset-2 col-sm-6";

   } else {
      echo "<div class='content-section-b'>";
      $class1 = "col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6";
      $class2 = "col-lg-5 col-sm-pull-6  col-sm-6";
   }
   echo "
        <div class='container'>
            <div class='row'>
                <div class='$class1'>
                    <hr class='section-heading-spacer'>
                    <div class='clearfix'></div>
                    <h2 class='section-heading'> $p[0] </h2>
                    $p[3]
                </div>
                <div class='$class2'>
                    <a href='$p[2]'> <img class='img-responsive' src='$p[1]' alt=''> </a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->";

    $c = $c + 1;
   } // foreach
} // if
?>
