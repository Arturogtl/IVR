
@extends('layouts.app');


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    Registro de Bloqueos Preventivos IVR
                </div>
                <div class="card-body">
                     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
               <div class="d-flex justify-content-center">
               <table class="table table-striped" align="center">
                        <thead>
                            <tr>
                             <th>Cédula</th>
                             <th>Código</th>
                             <th>Razón de Bloqueo</th>
                             <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($registers ?? '' as $register)
                            <tr>
                                <td>{{ $register->AF_Rif }}</td>
                                <td>{{ $register->codigo_transaccion }}</td>
                                <td>{{ $register->razon_bloqueo }}</td>
                                <td>{{ $register->accion }}</td>
                              
                                <td>
                         </form>
                                </td>
                            </tr>
                        @endforeach

                       
                        </tbody>
                    </table>
             <div>{{ $registers->render() }}</div>
                        </tbody>

            
          
                 
                       
            </div>


   

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Numero de Transacciones'],
          ['Bloqueo Preventivo Internet Banking',     {{$count61}}  ],
          ['Bloqueo SMS Mecanismo DetectID',          {{$count62}}     ]
        ]);

        var options = {
          title: 'Distribución en Log de opciones IVR',
          pieHole: 0.4,
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
          ['Bloqueo SMS Mecanismo DetectID',       {{$count61}}     ],
        ]);

        var options = {
          title: 'Distribución en Log de opciones IVR',
          pieHole: 0.4,
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

