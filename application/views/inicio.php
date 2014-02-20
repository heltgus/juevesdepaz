            <div class="container">
                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li>
                            <i class="icon-dashboard"></i>
                            <a href="#/Dashboard">Dashboard </a>
                        </li>
                        <!--
                        <li class="current">
                            <a href="pages_calendar.html" title="">Calendar</a>
                        </li>
                        -->
                    </ul>

                    <ul class="crumb-buttons">
                        <li><a href="charts.html" title=""><i class="icon-signal"></i><span>Estadistica Completa</span></a></li>

                        <!--
                        <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
                            <ul class="dropdown-menu pull-right">
                            <li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
                            <li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
                            </ul>
                        </li>
                        -->

                        <li class="range"><a href="#">
                            <i class="icon-calendar"></i>
                            <span></span>
                            <i class="icon-angle-down"></i>
                        </a></li>
                    </ul>
                </div>
                <!-- /Breadcrumbs line -->

                <!--=== Page Header ===-->
                <div class="page-header">
                    <div class="page-title">
                        <h3>Pantalla Principal</h3>
                        <h3>Resumen Estadistico</h3>
                        <h5>Dashboard - Total de Beneficiarios por Genero:</h5>
                        <span>Fecha: Jueves 31 de Octubre de 2013,</span>
                    </div>

                    <!-- Page Stats -->
                    <ul class="page-stats">
                        <li>
                            <div class="summary">
                                <span>Hombres</span>
                                <h3>17,561</h3>
                            </div>
                            
                            <div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>

                            <!-- Use instead of sparkline e.g. this: -->
                            <div class="graph circular-chart" data-percent="37">37%</div>
                            
                        </li>
                        <li>
                            <div class="summary">
                                <span>Mujeres</span>
                                <h3>21,561</h3>
                            </div>
                            <!-- -->
                            <div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>

                            <div class="graph circular-chart" data-percent="63">63%</div>
                        </li>
                    </ul>
                    <!-- /Page Stats -->
                </div>
                <!-- /Page Header -->

                <!--=== Page Content ===-->
                <!--=== Statboxes ===-->
                <div class="row row-bg"> <!-- .row-bg -->
                    <div class="col-sm-6 col-md-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual cyan">
                                    <div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
                                </div>
                                <div class="title">Raza y Étnita</div>
                                <div class="value">4 501</div>
                                <a class="more" href="javascript:void(0);">Ver más <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual green">
                                    <div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>
                                </div>
                                <div class="title">Ocupación</div>
                                <div class="value">714</div>
                                <a class="more" href="javascript:void(0);">Ver más <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-3 hidden-xs">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual yellow">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="title">Consultas Gerontología</div>
                                <div class="value">42,512</div>
                                <a class="more" href="javascript:void(0);">Ver más <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-3 hidden-xs">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual red">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="title">Consultas Psicologica</div>
                                <div class="value">25,217</div>
                                <a class="more" href="javascript:void(0);">Ver más <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
                <!-- /Statboxes -->

                <!--=== Blue Chart ===-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Recepción Sociolegal (<span class="blue">+90%</span>)</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div id="chart_filled_blue" class="chart"></div>
                            </div>
                            <div class="divider"></div>
                            <div class="widget-content">
                                <ul class="stats"> <!-- .no-dividers -->
                                    <li>
                                        <strong>4,853</strong>
                                        <small>Total Beneficiarios Registrados</small>
                                    </li>
                                    <li class="light hidden-xs">
                                        <strong>271</strong>
                                        <small>Beneficiarios en las ultimas 24 horas</small>
                                    </li>
                                    <li>
                                        <strong>1,025</strong>
                                        <small>Grupos Familiares</small>
                                    </li>
                                    <li class="light hidden-xs">
                                        <strong>105</strong>
                                        <small>Grupos Familiares en las ultimas 24 horas</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <!-- /Blue Chart -->
                
                <!-- /Page Content -->
            </div>
            <!-- /.container -->
