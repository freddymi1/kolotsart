<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tableau de bord
        <small><?= date('<b>d/m/Y</b> à <b>H:i:s</b>') ?></small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <?php

        $tables = [
            "Aporpos"               => "abouts",
            "Contacts"              => "contacts",
            "Gallery"           => "gallery",
            "Portfolio"         => "portfolio",
            "Services"          => "services",
            "Admins"                => "admins",
            //"Team techdev"          => "team"
        ];
        $class = [
            "abouts"        => "bg-aqua",
            "admins"        => "bg-red",
            "contacts"      => "bg-purple",
            "gallery"       => "bg-maroon",
            "portfolio"     => "bg-green",
            "services"      => "bg-blue",
        ];
        $font = [
            "abouts"        => "fa-info",
            "admins"        => "fa-lock",
            "contacts"      => "fa-users",
            "gallery"       => "fa-image",
            "portfolio"     => "fa-laptop",
            "services"      => "fa-list",
        ];
        $links = [
            "abouts"        => "index.php?page=about",
            "admins"        => "index.php?page=admins",
            "contacts"      => "index.php?page=contact",
            "gallery"       => "index.php?page=gallery",
            "portfolio"     => "index.php?page=portfolio",
            "services"      => "index.php?page=service",
            //"team"      => "index.php?page=team"
        ];
      ?>
      <?php
      foreach($tables as $table_name => $table){
      ?>
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box <?= get_classe($table, $class); ?>">
            <div class="inner">
              <?php $nbrinTable = inTable($table)  ?>
              <p><?= $table_name ?></p>
            </div>
            
            <div class="icon">
              <h3 class="text-dark-gray"><?= $nbrinTable[0] ?></h3>
            </div>
            
            <a href="<?= get_link($table, $links) ?>" class="small-box-footer">Plus d'information <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php
        }
        ?>

        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Recapitulation</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  
                </div>
                
               
              </div>
              <!-- /.row -->
            <!--</div>-->
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
   
</div>