@include('includes.header')
@include('includes.navbar')

<!--Secures only logged in users can acces the system -->
@guest
 <!-- if guest -->
 @include('includes.loginInclude')
@else
<!-- if logged in -->
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-muted" href="#">
                            <span data-feather="home"></span>
                            Menu <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="http://stollmanagement.test/report">
                            <span data-feather="file"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="http://stollmanagement.test/employee">
                            <span data-feather="users"></span>
                            Employees
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="http://stollmanagement.test/customer">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-success"><b>Finans</b></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        Year
                    </button>
                </div>
            </div> 
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Dato</th>
                            <th>Fra</th>
                            <th>Til</th>
                            <th>Timer u. tillæg</th>
                            <th>Timer m. tillæg</th> 
                            <th>Timer i alt</th>
                            <br>
                            <th>Købte timer</th>
                            <th>Dato</th>
                            <th>Faktura nr.</th>
                            <th>Betalt(Ja/Nej)</th>
                            <th>Status</th>
                            <th>Priser</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- Dato -->
                            <td>14-Dec</td>
                            <!-- Fra -->
                            <td>8:00</td>
                            <!-- Til -->
                            <td>16:00</td>
                            <!--Timer u. tillæg-->
                            <td>0.75</td>
                            <!-- # -->
                            <td>0</td>
                            <!-- # -->
                            <td>0.75t</td>
                            <!-- # -->
                            <td>10</td>
                            <!-- # -->
                            <td>10-Oct</td>
                            <!-- # -->
                            <td>400</td>
                            <!-- # -->
                            <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Vælg
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Ja</a>
    <a class="dropdown-item" href="#">Nej</a>

  </div>
</div></td>
                        </tr>
                        <tr>
                            <td>10-Jan</td>
                            <td>8:00</td>
                            <td>16:00</td>
                            <td>1.45</td>
                            <td>0</td>
                            <td>1.45t</td>
                            <td>10</td>
                            <td>10-Jan</td>
                            <td>442</td>
                            <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Vælg
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Ja</a>
    <a class="dropdown-item" href="#">Nej</a>

  </div>
</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

            <h2>Staff</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><a href="index.php" class="text-success">Richard Lykkegaard</a></td>
                            <td>Developer</td>
                            <td>lykkegaardrichard@gmail.com</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td><a href="index.php" class="text-success">Anders la Cour</a></td>
                            <td>Developer</td>
                            <td>#</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2>Customers</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><a href="index.php" class="text-success">Sebastian Stoll</a></td>
                            <td>Customer</td>
                            <td>contact@sebastianstoll.com</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main> 
    </div>
</div>
<!-- Graphs -->

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                data: [11339, 24345, 18483, 11003, 23489, 25092, 32034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#2F4F4F',
                borderWidth: 4,
                pointBackgroundColor: '#2F4F4F'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });

</script>
-->
@include('includes.footer')

@endguest