<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
require_once('./connection.php');


$sql = "SELECT * FROM proposals where STATUS  = 'request'";
$approve = "SELECT * FROM proposals where STATUS  = 'approved'";
$reject = "SELECT * FROM proposals where STATUS  = 'rejected'";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="./general.css">
</head>

<body class="">
  <div class="wrapper ">
    <?php include('./sidebar.php'); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Paper Dashboard 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" style="display:inline-block"> Proposals</h4>
                <button class="btn btn-primary dropdown-toggle mr-4 pull-right" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Batch</button>

                <div class="dropdown-menu" id="filter">
                  <option class="dropdown-item" value="all" name="">All </option>
                  <option class="dropdown-item" value="2019">2019</option>
                  <option class="dropdown-item" value="2018">2018</option>
                  <option class="dropdown-item" value="2017">2017</option>

                </div>
                <select class="btn btn-primary dropdown-toggle mr-4 pull-right"  id="filter" >
                  <option  value="all" name="">All </option>
                  <option  value="2019">2019</option>
                  <option  value="2018">2018</option>
                  <option  value="2017">2017</option>
                </select>
                
              </div>
              <div class="card-body">


                <section id="tabs">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Proposals</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Approved</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rejected</a>

                          </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <br>
                            <br>
                            <table class="table table-striped" id="table">

                            </table>


                           
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div>
                              <form action="generate_pdf.php" method="post">
                                <input type="submit" value="View All" name="submit_val" class="btn btn-primary pull-right" />
                              </form>
                            </div>
                            <br>
                            <br>
                         
                            <!-- <table class="table">
                              <thead class=" text-primary">
                                <th>
                                  Leader Name
                                </th>
                                <th>
                                  Roll No
                                </th>
                                <th>
                                  Department
                                </th>
                                <th>
                                  Supervisor
                                </th>
                                <th>
                                  Status
                                </th>
                                <th class="text-right">Action</th>

                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Dakota Rice
                                  </td>
                                  <td>
                                    Niger
                                  </td>
                                  <td>
                                    Oud-Turnhout
                                  </td>
                                  <td>
                                    $36,738
                                  </td>
                                  <td>
                                    Request
                                  </td>
                                  <td class="text-right"><button class="btn">View</button></td>

                                </tr>

                              </tbody>
                            </table> -->

                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                            occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                            dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                            consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                            tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                            non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                            occaecat ex.
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </section>






              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <!-- <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>


<script>
    $(document).ready(function() {
      function create_list(data) {
        console.log("hello");
        var table = $('#table');
        table.html('');
        var table_head = $('<tr>');
        table_head.append($('<th>').text('leader'))
        table_head.append($('<th>').text('leader roll #'))
        table_head.append($('<th>').text('dept'))
        table_head.append($('<th>').text('teacher'))
        table.append(table_head);
        for (var x in data) {
          var tr = $('<tr>');
          tr.append($('<td>').text(data[x].leader));
          tr.append($('<td>').text(data[x].lroll));
          tr.append($('<td>').text(data[x].dept));
          tr.append($('<td>').text(data[x].teacher));
          table.append(tr);
        };
      }
      $.ajax({
        url: 'pfetch.php?filter=all',
        type: 'GET',
        success: function(data) {
          var d = JSON.parse(data);
          create_list(d);
        }
      })
      $('#filter').on('change', function() {
        var filter = $(this).val();
        $.ajax({
          url: 'pfetch.php?filter=' + filter,
          type: 'GET',
          success: function(data) {
            var d = JSON.parse(data);
            create_list(d);
          }
        })
      })
    })
  </script>

<script>
  function viewProposal(e) {
    console.log(e.id)
    window.location = `./ProposalDetail.php?id=${e.id}`;
  }
</script>