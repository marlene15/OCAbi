    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar nav-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->        
            <ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true" data-keep-expanded="false">
                <br/><br/>
                <li >
                    <a href="<?php echo site_url('inicio');?>">
                        <i class="icon-home"></i> 
                        <span class="title">Principal</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li >
                    <a href="javascript:;">
                        <i class="icon-table"></i> 
                        <span class="title">Cargo</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">                        
                        <li >
                            <a href="javascript:;">
                                <i class="icon-facebook"></i> 
                                <span class="title">Facebook</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="<?php echo site_url('facebook/controlador_inicio/gobernadores');?>">
                                        <span class="title">Gobernador</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <!-- <li >
                                    <a href="<?php //echo site_url('facebook/controlador_inicio/DFDistritoI');?>">
                                        <span class="title">Diputado Federal</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php //echo site_url('facebook/controlador_inicio/CDLDISTRITOIALXVI');?>">
                                        <span class="title">Diputado Local</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php //echo site_url('facebook/controlador_inicio/CAlcaldias');?>">
                                        <span class="title">Presidente Municipal</span>
                                        <span class="selected"></span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li >
                            <a href="javascript:;">
                                <i class="icon-twitter"></i> 
                                <span class="title">Twitter</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="<?php echo site_url('twitter/controlador_inicio/gobernadores');?>"> 
                                        <span class="title">Gobernador</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <!-- <li >
                                    <a href="<?php //echo site_url('twitter/controlador_inicio/dip_federales');?>"> 
                                        <span class="title">Diputado Federal</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php //echo site_url('twitter/controlador_inicio/dip_locales');?>"> 
                                        <span class="title">Diputado Local</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php //echo site_url('twitter/controlador_inicio/alcaldias');?>"> 
                                        <span class="title">Presidente Municipal</span>
                                        <span class="selected"></span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                        <i class="icon-user"></i> 
                        <span class="title">Candidato</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-facebook"></i> 
                                <span class="title">Facebook</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="<?php echo site_url('facebook/controlador_inicio/valoracion_gobernadores');?>"> 
                                        <span class="title">Gobernador</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-twitter"></i> 
                                <span class="title">Twitter</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_gobernadores');?>"> 
                                        <span class="title">Gobernador</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                        <i class="icon-map-marker"></i> 
                        <span class="title">Entidad</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo site_url('twitter/controlador_consultas/mapas');?>">
                                <i class="icon-twitter"></i> 
                                <span class="title">Twitter</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                        <i class="icon-flag"></i> 
                        <span class="title">Partido</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <!--
                        <li>
                            <a href="<?php echo site_url('facebook/controlador_inicio/partidost');?>">
                                <i class="icon-facebook"></i> 
                                <span class="title">Facebook</span>
                                <span class="selected"></span>
                            </a>
                        </li>-->
                        <li>
                            <a href="<?php echo site_url('twitter/controlador_inicio/partidos');?>">
                                <i class="icon-twitter"></i> 
                                <span class="title">Twitter</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                        <i class="icon-tags"></i> 
                        <span class="title">Sitios de Interés</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-facebook"></i> 
                                <span class="title">Facebook</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="<?php echo site_url('');?>"> 
                                        <span class="title">Afmedios Noticia</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php echo site_url('');?>"> 
                                        <span class="title">Ángel Guardián</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php echo site_url('');?>"> 
                                        <span class="title">¿Cómo Vamos Colima?</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php echo site_url('');?>"> 
                                        <span class="title">José Manuel Romero Coellón</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>     
                                <li >
                                    <a href="<?php echo site_url('');?>"> 
                                        <span class="title">Soy Nachista</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>                                                             
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-twitter"></i> 
                                <span class="title">Twitter</span>
                                <span class="arrow "></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="<?php echo site_url('inicio/mineria_deDatos');?>">
                        <i class="icon-eye-open"></i> 
                        <span class="title">Minería de datos</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone" title="Expande menú" onclick="recarga()"></div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </div>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
