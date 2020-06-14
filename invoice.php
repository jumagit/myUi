 <?php include "includes/mainHead.php"; ?>
     <div id="container">
<?php include "includes/mainSideNav.php"; ?>
          <div id="content">
                         <div class="container">
                              <?php "includes/mainNav.php"; ?>
                              <div class="page-header">
                                   <div class="page-title">
                                        <h3>Invoice</h3> <span>Good morning, John!</span>
                                   </div>
                                   <ul class="page-stats">
                                        <li>
                                             <div class="summary"> <span>New orders</span>
                                                  <h3>17,561</h3>
                                             </div>
                                             <div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                                        </li>
                                        <li>
                                             <div class="summary"> <span>My balance</span>
                                                  <h3>$21,561.21</h3>
                                             </div>
                                             <div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                                        </li>
                                   </ul>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="widget invoice">
                                             <div class="widget-header">
                                                  <div class="pull-left">
                                                       <h2>Company Name</h2>
                                                  </div>
                                                  <div class="pull-right">
                                                       <p class="invoice-nr"><strong>Invoice:</strong> #1631-17</h3>
                                                       </p>
                                                       <p class="invoice-date">17 September 2013</p>
                                                  </div>
                                             </div>
                                             <div class="widget-content">
                                                  <div class="row">
                                                       <div class="col-md-6">
                                                            <h3>Company Information</h3> <address> <strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890 </address>
                                                       </div>
                                                       <div class="col-md-6 align-right">
                                                            <h3>Client Information</h3> <address> <strong>John Doe</strong><br> 1111 N. Sample<br> Mt. Prospect, IL 60000<br> <abbr title="Phone">P:</abbr> (123) 456-7890 </address>
                                                       </div>
                                                       <div class="col-md-12">
                                                            <table class="table table-striped table-hover">
                                                                 <thead>
                                                                      <tr>
                                                                           <th>#</th>
                                                                           <th>Item</th>
                                                                           <th class="hidden-xs">Description</th>
                                                                           <th class="hidden-xs">Quantity</th>
                                                                           <th class="hidden-xs">Unit Cost</th>
                                                                           <th>Total</th>
                                                                      </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                      <tr>
                                                                           <td>1</td>
                                                                           <td>Hardware</td>
                                                                           <td class="hidden-xs">Lorem ipsum dolor sit amet</td>
                                                                           <td class="hidden-xs">3</td>
                                                                           <td class="hidden-xs">$239</td>
                                                                           <td>$717</td>
                                                                      </tr>
                                                                      <tr>
                                                                           <td>2</td>
                                                                           <td>Software</td>
                                                                           <td class="hidden-xs">Consetetur sadipscing elitr</td>
                                                                           <td class="hidden-xs">8</td>
                                                                           <td class="hidden-xs">$119</td>
                                                                           <td>$952</td>
                                                                      </tr>
                                                                      <tr>
                                                                           <td>3</td>
                                                                           <td>Licences</td>
                                                                           <td class="hidden-xs">Sed diam nonumy eirmod tempor</td>
                                                                           <td class="hidden-xs">100</td>
                                                                           <td class="hidden-xs">$79</td>
                                                                           <td>$7900</td>
                                                                      </tr>
                                                                      <tr>
                                                                           <td>3</td>
                                                                           <td>Drinks</td>
                                                                           <td class="hidden-xs">Invidunt ut labore et dolore magna</td>
                                                                           <td class="hidden-xs">500</td>
                                                                           <td class="hidden-xs">$3</td>
                                                                           <td>$1500</td>
                                                                      </tr>
                                                                 </tbody>
                                                            </table>
                                                       </div>
                                                  </div>
                                                  <div class="row padding-top-10px">
                                                       <div class="col-md-6">
                                                            <div class="well">
                                                                 <p><strong>Notes: </strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 align-right">
                                                            <ul class="list-unstyled amount padding-bottom-5px">
                                                                 <li><strong>Subtotal:</strong> $11,069</li>
                                                                 <li><strong>Delivery:</strong> $5</li>
                                                                 <li><strong>VAT (10%):</strong> $1107.40</li>
                                                                 <li class="total"><strong>Total:</strong> $12,181.40</li>
                                                            </ul>
                                                            <div class="buttons"> <a class="btn btn-default btn-lg" href="javascript:void(0);" onclick="javascript:window.print();"><i class="icon-print"></i> Print</a> <a class="btn btn-success btn-lg" href="javascript:void(0);">Proceed to Payment <i class="icon-angle-right"></i></a> </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <script type="text/javascript">
     if (location.host == "envato.stammtec.de" || location.host == "themes.stammtec.de") { var _paq = _paq || [];
          _paq.push(["trackPageView"]);
          _paq.push(["enableLinkTracking"]);
          (function() { var a = (("https:" == document.location.protocol) ? "https" : "http") + "://analytics.stammtec.de/";
               _paq.push(["setTrackerUrl", a + "piwik.php"]);
               _paq.push(["setSiteId", "17"]); var e = document,
                    c = e.createElement("script"),
                    b = e.getElementsByTagName("script")[0];
               c.type = "text/javascript";
               c.defer = true;
               c.async = true;
               c.src = a + "piwik.js";
               b.parentNode.insertBefore(c, b) })() };
               </script>
          </body>
          <!-- Mirrored from envato.stammtec.de/themeforest/melon/pages_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 05:15:27 GMT -->

     </html>