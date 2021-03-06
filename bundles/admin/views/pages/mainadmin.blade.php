@layout('admin::templates.admintemplate')


@section('content')
<div class="page" id="page-dashboard">

        <!-- Panel Page Dashboard Content: -->

        <div class="hero-unit hero-special">
          <h1>MADMIN Dashboard <small>v 1.6</small></h1>
          <p>MADMIN is a Metro inspired fluid-adaptive admin theme that tries to be as light as posible and put your data and controls in focus, not the theme chrome. It features a highly configurable CSS based (mostly) sidebar menu that you will just love!</p>
          <p><a href="theme-docs.html" class="btn btn-primary btn-large">Learn more »</a></p>
        </div>

        <div class="panel" id="panel-101">
          <header>
            <i class="icon-asterisk"></i>
            <span>Shortcuts</span>
          </header>
          <div class="content tiles-container">
            
            <a href="#" class="tile-btn"><i class="icon-bar-chart"></i><span>Stats</span></a>
            <a href="#" class="tile-btn"><i class="icon-hdd"></i><span>Database</span></a>
            <a href="#" class="tile-btn"><i class="icon-dashboard"></i><span>VMs</span></a>
            <a href="#" class="tile-btn">
              <i class="icon-group"></i>
              <!-- <i class="icon-icomoon-grid-view"></i> -->
              <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
              <span>Users</span>
            </a>

            <a href="#" class="tile-btn"><i class="icon-tasks"></i><span>Monitoring</span></a>
            <a href="#" class="tile-btn"><i class="icon-flag"></i><span>Notices</span></a>
            <a href="#" class="tile-btn"><i class="icon-film"></i><span>Media</span></a>

          </div>
        </div>

        <div class="row-fluid">

          <div class="span6">

            <div class="panel" id="panel-24">
              <header>

                <i class="icon-bar-chart"></i>
                <span>At a glance</span>
                
              </header>
              <div class="content">

                <div class="accordion" id="accordion2">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        Server Load
                      </a>
                    </div>
                    <div id="collapseOne" class="accordion-body in collapse" style="height: auto; ">
                      <div class="accordion-inner">

                        <div id="dashboard-dynamic-chart"></div>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        Daily Numbers
                      </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">

                      <table class="table-key-numbers">
                        <tr>
                          <td>23</td>
                          <td>4</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th>New Subscriptions</th>
                          <th>Upgrades</th>
                          <th>Cancellation</th>
                        </tr>
                      </table>
                      <br />

                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                        Alerts
                      </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                      <div class="accordion-inner">
                        <p>No new alerts today.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="panel" id="panel-13">
              <header>
                <i class="icon-th-large"></i>
                <span>One more panel</span>
              </header>
              <div class="content">
                
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>

                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>

                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>

              </div>
            </div>

          </div>

          <div class="span6">

            <div class="panel" id="panel-102">
              <header>
                <i class="icon-trophy"></i>
                <!-- <i class="icon-icomoon-grid-view"></i> -->
                <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
                <span>Daily sales top</span>
              </header>
              <div class="content tiles-container">
                
                <table id="table0" class="tablesorter">
                  <thead>
                    <tr>
                      <th class="header">Service Name</th>
                      <th class="header">Category</th>
                      <th class="header">Price</th>
                      <th class="header headerSortDown"># Sold</th>
                    </tr>
                  </thead>
                  <tbody>             
                    <tr class="odd">
                      <td>Super Foo Service</td>
                      <td>Cloud Management</td>
                      <td>$987</td>
                      <td>25</td>
                    </tr><tr class="even">
                      <td>Super Bar Service</td>
                      <td>Remote Monitoring</td>
                      <td>$765</td>
                      <td>23</td>
                    </tr><tr class="odd">
                      <td>Standard Services</td>
                      <td>Cloud Management</td>
                      <td>$432</td>
                      <td>12</td>
                    </tr><tr class="even">
                      <td>Enterprise All Inclusive</td>
                      <td>Integrated Services</td>
                      <td>$6987</td>
                      <td>11</td>
                    </tr><tr class="odd">
                      <td>Royal Deluxe</td>
                      <td>Integrated Services</td>
                      <td>$9000</td>
                      <td>10</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>

            <div class="panel" id="panel-106">
              <header>
                <i class="icon-th-large"></i>
                <span>And another panel</span>
              </header>
              <div class="content">

                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>

                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>

                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>

                <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image.</p>

              </div>
            </div>

          </div>
        </div>

        <!-- /Panel Page Dashboard Content -->

      
      </div>

@endsection
