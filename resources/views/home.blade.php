
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Monitoring Kolam Ikan Koi</title>
  <!-- MATERIAL ICON  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
        rel="stylesheet">
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="{{URL::to('assets/css/style2.css')}}" type="text/css">
  <script type="text/javascript" href="{{URL::to('assets/js/jquery-3.4.0.min.js')}}"></script>
  <script type="text/javascript" href="{{URL::to('assets/js/mdb.min.js')}}"></script>
  <script type="text/javascript" href="{{URL::to('jquery-latest.js')}}"></script>
  <script type="text/javascript" href="{{URL::to('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" href="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

</script>

</head>

  <body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="./assets/img/Meraki Studio.png">
          <h1>KO<span class="danger">IOT</span></h1>
        </div>
        <div class="close" id="close-btn">
        <span class="material-icons-sharp">close</span>
        </div>
      </div>

      <div class="sidebar">
        <a href="#" class="active">
          <span class="material-icons-sharp">grid_view</span>
          <h2>Dashboard</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">thermostat</span>
          <h2>Suhu</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">bloodtype</span>
          <h2>Kadar pH</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">water_drop</span>
          <h2>Kejernihan</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">opacity</span>
          <h2>Ketinggian</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">water</span>
          <h2>Larutan</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">history</span>
          <h2>History</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">person</span>
          <h2>Person</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">settings</span>
          <h2>Settings</h2>
        </a>
        <a href="#">
          <span class="material-icons-sharp">logout</span>
          <h2>Logout</h2>
        </a>
      </div>
    </aside>
    <main>
    <div class="right">
      <div class="top">
        <button id="menu-btn">
          <span class="material-icons-sharp">menu</span>
        </button>
        <div class="theme-toggler">
          <span class="material-icons-sharp active">light_mode</span>
          <span class="material-icons-sharp">dark_mode</span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Hey, <b>Hanif</b> </p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="./assets/img/Muhammad Hanif.jpg">
          </div>
        </div>
      </div>
    </div>
      <h1>Dashboard</h1>

      <div class="date">
        <input type="date">
      </div>

      <div class="insights">
        <div class="suhu">
          <span class="material-icons-sharp">thermostat</span>
          <div class="middle">
            <div class="left">
              <h3>Suhu Air</h3>
              <h1>26 C</h1>
            </div>
            <div class="progress">
              <!-- <svg> 
                <circle cx='38' cy='38' r='36'></circle>
              </svg> -->
              <!-- <div class="number">
                <p>90 C</p>
              </div> -->
            </div>
          </div>
          <small class="text-muted">Update setiap detik</small>
        </div>
        <!-- END OF SUHU -->

        <div class="ph">
          <span class="material-icons-sharp">bloodtype</span>
          <div class="middle">
            <div class="left">
              <h3>pH Air</h3>
              <h1>7,0</h1>
            </div>
            <div class="progress">
              <!-- <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg> -->
              <!-- <div class="number">
                <p>80 Am</p>
              </div> -->
            </div>
          </div>
          <small class="text-muted">Update setiap detik</small>
        </div>
        <!-- END OF pH -->

        <div class="kejernihan">
          <span class="material-icons-sharp">water_drop</span>
          <div class="middle">
            <div class="left">
              <h3>Kejernihan Air</h3>
              <h1>350 NTU</h1>
            </div>
            <div class="progress">
              <!-- <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg> -->
              <!-- <div class="number">
                <p>10 C</p>
              </div> -->
            </div>
          </div>
          <small class="text-muted">Update setiap detik</small>
        </div>
        <!-- END OF KEJERNIHAN -->

        <div class="ketinggian">
          <span class="material-icons-sharp">opacity</span>
          <div class="middle">
            <div class="left">
              <h3>Ketinggian Air</h3>
              <h1>1 M</h1>
            </div>
            <div class="progress">
              <!-- <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg> -->
              <!-- <div class="number">
                <p>1 M</p>
              </div> -->
            </div>
          </div>
          <small class="text-muted">Update setiap detik</small>
        </div>
        <!-- END OF KETINGGIAN -->

        <div class="larutan">
          <span class="material-icons-sharp">water</span>
          <div class="middle">
            <div class="left">
              <h3>Larutan Air</h3>
              <h1>150 ppm</h1>
            </div>
            <div class="progress">
              <!-- <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg>
              <div class="number">
                <p>49 C</p>
              </div> -->
            </div>
          </div>
          <small class="text-muted">Update setiap detik</small>
        </div>
        <!-- END OF LARUTAN -->

      </div>
      <!-- END OF INSIGHTS -->
      <div class="history">
        <h2>History Monitoring</h2>
        <table>
          <thead>
            <tr>
              <th>Hari, Tanggal</th>
              <th>Jam</th>
              <th>Suhu Air</th>
              <th>pH Air</th>
              <th>Kejernihan Air</th>
              <th>Ketinggian Air</th>
              <th>Larutan Air</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Senin , 01 Februari 2022</td>
              <td>12.00.01</td>
              <td class="danger">35 C</td>
              <td>7,0</td>
              <td>350 NTU</td>
              <td>1 M</td>
              <td>150 ppm</td>
              <td class="danger">Danger</td>
            </tr>
            <tr>
              <td>Senin , 01 Februari 2022</td>
              <td>12.00.05</td>
              <td>27 C</td>
              <td>8,0</td>
              <td>360 NTU</td>
              <td>1 M</td>
              <td>150 ppm</td>
              <td class="success">Save</td>
            </tr>
            <tr>
              <td>Senin , 01 Februari 2022</td>
              <td>12.00.10</td>
              <td>28 C</td>
              <td>7,0</td>
              <td>360 NTU</td>
              <td>1 M</td>
              <td>170 ppm</td>
              <td class="success">Save</td>
            </tr>
            <tr>
              <td>Senin , 01 Februari 2022</td>
              <td>12.00.15</td>
              <td>26 C</td>
              <td>7,0</td>
              <td>350 NTU</td>
              <td>1 M</td>
              <td>190 ppm</td>
              <td class="success">Save</td>
            </tr>
            <tr>
              <td>Senin , 01 Februari 2022</td>
              <td>12.00.20</td>
              <td>25 C</td>
              <td>7,0</td>
              <td>350 NTU</td>
              <td>1 M</td>
              <td>150 ppm</td>
              <td class="success">Save</td>
            </tr>
          </tbody>
        </table>
        <a href="#">Show All</a>
      </div>

      <div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Grafik Sensor</h2>
    </div>

    <div class="panel-body">
        <canvas id="myChart"></canvas>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
        <script type="text/javascript">
            var canvas = document.getElementById('myChart');

            var data = {
                labels : [
                  @foreach($sensor as $data)
                    '{{$data->tanggal}}',
                  @endforeach
                ],
                datasets : [
                {
                    label : "Suhu",
                    fill : true,
                    backgroundColor : "rgba(239, 82, 93, 0.2)",
                    borderColor : "rgba(239, 82, 93, 1)",
                    lineTension : 0.5,
                    pointRadius : 5,
                    data : [
                    @foreach($sensor as $data)
                      '{{$data->suhu}}',
                    @endforeach                      
                    ]
                },

                {
                    label : "pH",
                    fill : true,
                    backgroundColor : "rgba(0, 250, 154, 0.2)",
                    borderColor : "rgba(0, 250, 154, 1)",
                    lineTension : 0.5,
                    pointRadius : 5,
                    data : [
                    @foreach($sensor as $data)
                      '{{$data->ph}}',
                    @endforeach 
                    ]
                },

                {
                    label : "Kejernihan",
                    fill : true,
                    backgroundColor : "rgba(70, 130, 180, 0.2)",
                    borderColor : "rgba(70, 130, 180, 1)",
                    lineTension : 0.5,
                    pointRadius : 5,
                    data : [
                    @foreach($sensor as $data)
                      '{{$data->jernih}}',
                    @endforeach 
                    ]
                },

                {
                    label : "Ketinggian",
                    fill : true,
                    backgroundColor : "rgba(255, 215, 0, 0.2)",
                    borderColor : "rgba(255, 215, 0, 1)",
                    lineTension : 0.5,
                    pointRadius : 5,
                    data : [
                    @foreach($sensor as $data)
                      '{{$data->tinggi}}',
                    @endforeach 
                    ]
                },

                {
                    label : "Larutan",
                    fill : true,
                    backgroundColor : "rgba(138, 43, 226, 0.2)",
                    borderColor : "rgba(138, 43, 226, 1)",
                    lineTension : 0.5,
                    pointRadius : 5,
                    data : [
                    @foreach($sensor as $data)
                      '{{$data->larutan}}',
                    @endforeach 
                    ]
                }

                ]
            } ;

            var option = {
                showLines : true,
                animation : {duration : 0}
            };

            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option 
            
            }) ;
        </script>
    </div>
</div>

    </main>


  </div>
</body>
</html>
