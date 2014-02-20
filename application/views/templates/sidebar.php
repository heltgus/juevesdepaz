        <!-- Sidebar -->
        <div id="sidebar" class="sidebar-fixed">
            <div id="sidebar-content">

                <!-- Search Input -->
                <form class="sidebar-search">
                    <div class="input-box">
                        <button type="submit" class="submit">
                            <i class="icon-search"></i>
                        </button>
                        <span>
                            <input type="text" placeholder="Bucar...">
                        </span>
                    </div>
                </form>

                <!-- Search Results -->
                <div class="sidebar-search-results">

                    <i class="icon-remove close"></i>
                    <!-- Documents -->
                    <div class="title">
                        Ejemplo Busqueda
                    </div>
                    <ul class="notifications">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="col-left">
                                    <span class="label label-info"><i class="icon-file-text"></i></span>
                                </div>
                                <div class="col-right with-margin">
                                    <span class="message"><strong>Formulario: </strong> Visita Psicologia</span>
                                    <span class="time">descargar.pdf</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="col-left">
                                    <span class="label label-success"><i class="icon-file-text"></i></span>
                                </div>
                                <div class="col-right with-margin">
                                    <span class="message">Formulario: <strong>Remisiones</strong> ...</span>
                                    <span class="time">informe.pdf</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /Documents -->
                    <!-- Persons -->
                    <div class="title">
                        Usuarios
                    </div>
                    <ul class="notifications">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="col-left">
                                    <span class="label label-danger"><i class="icon-female"></i></span>
                                </div>
                                <div class="col-right with-margin">
                                    <span class="message"><strong>María Ospina</strong></span>
                                    <span class="time">65 años</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> <!-- /.sidebar-search-results -->

                <!--=== Navigation ===-->
                <ul id="nav">
                    
                    <li class="current">
                        <a href="<?=base_url()?>dashboard">
                            <i class="icon-dashboard"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);">
                            <i class="icon-edit"></i>
                            SOCIOLEGAL
                            <!-- <span class="label label-info pull-right">4</span> -->
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?=base_url()?>dashboard/sociolegal">
                                <i class="icon-angle-right"></i>
                                Recepci&oacute;n Sociolegal
                                </a>
                            </li>
                            <li>
                                <a href="#/visitadomiciliaria">
                                <i class="icon-angle-right"></i>
                                Visita Domiciliaria Consejera
                                </a>
                            </li>
                            <li>
                                <a href="#/asesoria">
                                <i class="icon-angle-right"></i>
                                Asesoria Poblaci&oacute;n en Situaci&oacute;n Desplazamiento 
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="icon-angle-right"></i>
                                    Remisiones
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#/psicologia_infantil">
                                        <i class="icon-share-sign"></i>  A Psicolog&iacute;a Infantil</a></li>
                                    <li><a href="#/gerontologia">
                                        <i class="icon-share-sign"></i>  A Mejoramiento de la vida</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);">
                            <i class="icon-thumbs-up"></i>
                            MEJORAMIENTO
                            <!-- <span class="label label-info pull-right">4</span> -->
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Historia Gerontol&oacute;gica
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Visita Domiciliaria Gerontol&oacute;gica
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Psicolog&iacute;a Adulto mayor
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Historia Cl&iacute;nica
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);">
                            <i class="icon-smile"></i>
                            PSICOLOGIA INFANTIL
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Historia Cl&iacute;nica Infaltil
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Diagnostico Psicol&oacute;gico Inicial 
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Observaciones y Actualizaciones de la Historia
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Registro Individual de Evoluci&oacute;n Psicol&oacute;gica
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Visita Domiciliaria Psicol&oacute;gia Infantil
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Listado Asistencia a Atenci&oacute;n Psicol&oacute;gica Infantil
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);">
                            <i class="icon-bar-chart"></i>
                            Graficos &amp; Estadiscas
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Beneficiarios por Genero
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Beneficiarios Desplazados
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Beneficiarios Inscriptos
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Poblaci&oacute;n Infantil
                                </a>
                            </li>
                            <li>
                                <a href="#/Dashboard">
                                <i class="icon-angle-right"></i>
                                Inactivos
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                
                <!-- /Navigation -->
                <div class="sidebar-title">
                    <span>Notificaciones / Alertas</span>
                </div>

                <!--
                <ul class="notifications demo-slide-in"> <!-- .demo-slide-in is just for demonstration purposes. You can remove this. ->
                    <li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. ->
                        <div class="col-left">
                            <span class="label label-danger"><i class="icon-warning-sign"></i></span>
                        </div>
                        <div class="col-right with-margin">
                            <span class="message">Server <strong>#512</strong> crashed.</span>
                            <span class="time">few seconds ago</span>
                        </div>
                    </li>
                    <li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. ->
                        <div class="col-left">
                            <span class="label label-info"><i class="icon-envelope"></i></span>
                        </div>
                        <div class="col-right with-margin">
                            <span class="message"><strong>John</strong> sent you a message</span>
                            <span class="time">few second ago</span>
                        </div>
                    </li>
                    <li>
                        <div class="col-left">
                            <span class="label label-success"><i class="icon-plus"></i></span>
                        </div>
                        <div class="col-right with-margin">
                            <span class="message"><strong>Emma</strong>'s account was created</span>
                            <span class="time">4 hours ago</span>
                        </div>
                    </li>
                </ul>
                -->

                <!--
                <div class="sidebar-widget align-center">
                    <div class="btn-group" data-toggle="buttons" id="theme-switcher">
                        <label class="btn active">
                            <input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
                        </label>
                        <label class="btn">
                            <input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
                        </label>
                    </div>
                </div>
                -->

            </div>
            <div id="divider" class="resizeable"></div>
        </div>
        <!-- /Sidebar -->