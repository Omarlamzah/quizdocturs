
<?php
  if(isset($_POST["quistionnumber"])){
     $Nq=$_POST["quistionnumber"];

    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "quizevent"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
     die("Connection failed: " . mysqli_connect_error());
    }

    $chartQuery = "SELECT * FROM analytique where id=$Nq";
    $chartQueryRecords = mysqli_query($con,$chartQuery);
  }

  
 

?>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['question ', 'Percentage'],
          <?php
                    $qptotoal;
                    $qpa;
                    $qpb;
                    $qpc;
                    $qpd;

                    

                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                    $qptotoal=$row['QA']+$row['QB']+$row['QC']+$row['QD'];

                    $qpa =($row['QA']*100)/$qptotoal;
                    $qpb=($row['QB']*100)/$qptotoal;
                    $qpc=($row['QC']*100)/$qptotoal;
                    $qpd=($row['QD']*100)/$qptotoal;

                    echo "['".$row['QA']."', ". $qpa."],";
                    echo "['".$row['QB']."', ". $qpb."],";
                    echo "['".$row['QC']."', ". $qpc."],";
                    echo "['".$row['QD']."', ". $qpd."],";

                }
            ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'votre reponse de la question '+<?php echo $_POST["quistionnumber"]?>,
            },
          axes: {
            x: {
              0: { side: 'top', label: 'question'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <style>
    path:nth-child(1){
        fill: #a73434;
    }
    path:nth-child(2){
        fill: green;
    }
    path:nth-child(3){
        fill: black;
    }
    path:nth-child(4){
        fill: yellow;
    }


    line{
    stroke: black;
}

  </style>
  <body>
    <div id="top_x_div" style="width: 800px; height: 600px;"></div>
  </body>
</html>
