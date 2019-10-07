
@extends('layouts.app');


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="min-width: 60rem;">
                <div class="card-header">

                    Distribución de opciones IVR utilizadas por usuarios - Vista General
                </div>
                <div class="card-body">
                     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
       
          

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Numero de Transacciones'],
          ['Bloqueo Preventivo Internet Banking',     {{$count61}}  ],
          ['Bloqueo SMS Mecanismo DetectID',       {{$count62}}     ],
        ]);

        var options = {
          title: 'Distribución en Log de opciones IVR',
          pieHole: 0.4,
            colors: ['#32CEB9', '#10C7EC'],
              is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Numero de Transacciones'],
          ['Bloqueo Preventivo Internet Banking',     {{$count61}}  ],
          ['Bloqueo SMS Mecanismo DetectID',       {{$count62}}     ],
        ]);

        var options = {
          title: 'Distribución en Log de opciones IVR',
          colors: ['#32CEB9', '#10C7EC'],
          pieHole: 0.2,
           is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutcharts'));
        chart.draw(data, options);
      }
    </script>

   
  </head>
  <body>



  <div class="d-flex justify-content-center">
   <div id="donutchart" style="width: 900px; height: 500px;"></div>
   <div id="donutcharts" style="width: 900px; height: 500px;"></div>
</div>

  





  </body>
</html>
               
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

