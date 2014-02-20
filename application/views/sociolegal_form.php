            <div class="container">
                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="#/Dashboard">Dashboard</a>
                        </li>
                        <li class="current">
                            <a href="#/sociolegal" title="">Recepcion Sociolegal</a>
                        </li>
                    </ul>

                    <ul class="crumb-buttons">
                        <li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
                        <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
                            <ul class="dropdown-menu pull-right">
                            <li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
                            <li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
                            </ul>
                        </li>
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
                        <h3>RECEPCION SOCIO LEGAL</h3>
                        <span>Proyecto: Asistencia humanitaria y protección para la población en situación de <br/>desplazamiento en Colombia con un enfoque  diferencial para los Adultos Mayores</span>
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
                            
                        </li>
                        <li>
                            <div class="summary">
                                <span>Mujeres</span>
                                <h3>21,561</h3>
                            </div>
                            <!-- -->
                            <div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>

                        </li>
                    </ul>
                    <!-- /Page Stats -->
                </div>
                <!-- /Page Header -->

                <!--=== Page Content ===-->
                <!--=== Sliders ===-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> I. DATOS GENERALES </h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content form-horizontal row-border">
                                <form class="form-horizontal row-border" id="validate-1" action="#">
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Ciudad y Fecha:</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="ciudad" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="fecha" class="form-control datepicker">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Apellidos:</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="apellido1" class="form-control">
                                                    <span class="help-block">1er Apellido</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="apellido2" class="form-control">
                                                    <span class="help-block">2do Apellido</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nombres:</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="apellido1" class="form-control">
                                                    <span class="help-block">1er Nombre</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="apellido2" class="form-control">
                                                    <span class="help-block">2do Nombre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Documento de Identificación:</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select class="form-control" name="tipoidentificacion">
                                                        <option value="1">Cedula de Ciudadania</option>
                                                        <option value="2">Tarjeta de Identidad</option>
                                                        <option value="3">Cedula de Extranjeria</option>
                                                        <option value="4">Registro Civil</option>
                                                        <option value="5">Pasaporte</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="idbeneficiario" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Dirección de la residencia</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="direccion" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control ui-spinner-input" id="spinner-default" value="10" aria-valuenow="11" autocomplete="off" role="spinbutton">
                                                    <span class="help-block">Comuna</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="barrio" class="form-control">
                                                    <span class="help-block">Barrio</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        completando...
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sliders -->

                
                <!-- /Page Content -->
            </div>
            <!-- /.container -->
