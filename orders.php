  <?php include "includes/mainHead.php";?>
  <div id="container">
      <?php include "includes/mainSideNav.php";?>
      <div id="content">
          <div class="container">
              <?php "includes/mainNav.php";?>
              <div class="page-header">
                  <div class="page-title">
                      <h2>All Orders</h2> <span>Good morning, John!</span>
                  </div>
                  <ul class="page-stats">
                      <li>
                          <div class="summary"> <span>New orders</span>
                              <h3>17,561</h3>
                          </div>
                          <div id="sparkline-bar" class="graph sparkline hidden-xs">
                              20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                      </li>
                      <li>
                          <div class="summary"> <span>My balance</span>
                              <h3>$21,561.21</h3>
                          </div>
                          <div id="sparkline-bar2" class="graph sparkline hidden-xs">
                              20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                      </li>
                  </ul>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <p class="alert alert-info"> Please try to resize your browser window in order to see the tables
                          in responsive mode. </p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="widget box">
                          <div class="widget-header" style="background-color: #3D4E60;color:white;">
                              <h4 style="color:white;"><i class="icon-reorder" style="color:white;"></i> ALL ORDERS
                              </h4>
                              <div class="toolbar ">
                                  <a class="float-right btn btn-sm btn-success" href="add_order.php"> <i
                                          class="icon-plus"></i> Add New</a>
                                  <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                              class="icon-angle-down"></i></span> </div>
                              </div>
                          </div>
                          <div class="widget-content no-padding">
                              <table
                                  class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                                  <thead>
                                      <tr style="background-color: #3D4E60;color:white;">
                                          <th>S/N</th>
                                          <th data-class="expand">First Name</th>
                                          <th>Last Name</th>
                                          <th data-hide="phone">Username</th>
                                          <th data-hide="phone,tablet">Status</th>
                                          <th>

                                              <button class="btn btn-sm"><i class="icol-pencil"></i></button>
                                          </th>
                                          <th>
                                              <button class="btn btn-sm"><i class="icol-money"></i></button>

                                          </th>

                                          <th>
                                              <button class="btn btn-sm"><i class="icol-cross"></i></button>
                                          </th>
                                          <th>
                                              <button class="btn btn-sm"><i class="icol-printer"></i></button>
                                          </th>
                                          <th>
                                              <button class="btn btn-sm"><i class="icol-envelope"></i></button>
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>Joey</td>
                                          <td>Greyson</td>
                                          <td>joey123</td>
                                          <td><span class="label label-success">Approved</span></td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-pencil"></i></button>
                                          </td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-money"></i></button>

                                          </td>

                                          <td>
                                              <button class="btn btn-sm"><i class="icol-cross"></i></button>
                                          </td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-printer"></i></button>
                                          </td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-envelope"></i></button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Wolf</td>
                                          <td>Bud</td>
                                          <td>wolfy</td>
                                          <td><span class="label label-info">Pending</span></td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-pencil"></i></button>
                                          </td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-money"></i></button>

                                          </td>

                                          <td>
                                              <button class="btn btn-sm"><i class="icol-cross"></i></button>
                                          </td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-printer"></i></button>
                                          </td>
                                          <td>
                                              <button class="btn btn-sm"><i class="icol-envelope"></i></button>
                                          </td>
                                      </tr>

                                  </tbody>
                                  <tfoot>
                                      <tr style="background-color: #3D4E60;color:white;">
                                          <th>S/N</th>
                                          <th data-class="expand">First Name</th>
                                          <th>Last Name</th>
                                          <th data-hide="phone">Username</th>
                                          <th data-hide="phone,tablet">Status</th>
                                          <th>

                                              <button class="btn btn-sm"><i class="icol-pencil"></i></button>
                                          </th>
                                          <th>
                                              <button class="btn btn-sm"><i class="icol-money"></i></button>

                                          </th>

                                          <th>
                                              <button class="btn btn-sm"><i class="icol-cross"></i></button>
                                          </th>
                                          <th>
                                              <button class="btn btn-sm"><i class="icol-printer"></i></button>
                                          </th>
                                          <th>
                                              <button class="btn btn-sm"><i class="icol-envelope"></i></button>
                                          </th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </body>
  <!-- Mirrored from envato.stammtec.de/themeforest/melon/tables_responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 05:15:22 GMT -->

  </html>