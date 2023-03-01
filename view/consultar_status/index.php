<?php 
    
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){

        ?>

<!doctype html>

<html lang="en" class="no-focus">
    <head>
        
    <?php require_once("../mainhead/mainhead.php"); ?>
        <title>Consultar Status | Mesa de Partes</title>

    </head>
    <body>
       
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed sidebar-inverse">
          
            <aside id="side-overlay">
               
                <div id="side-overlay-scroll">
                   
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                          
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                           
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                            </div>
                         
                        </div>
                    </div>
                   
                   
                  
                </div>
              
            </aside>
           
            <nav id="sidebar">
              
                <div id="sidebar-scroll">
                   
                    <div class="sidebar-content">
                       
                        <?php require_once("../sidebar/sidebar.php"); ?>
                      
                        <?php require_once("../menu-navegacion/menu-navegacion.php"); ?>
                      
                    </div>
                   
                </div>
               
            </nav>
          

            <?php require_once("../header/header.php"); ?>
            
        <!--TODO EL CONTENIDO AQUI -->
            <main id="main-container">
              
                <div class="content">
                   
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Listado de Registros <small>Mesa de Partes</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                                        <th class="text-center" style="width: 15%;">Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td class="text-center">18</td>
                                        <td class="font-w600">David Fuller</td>
                                        <td class="d-none d-sm-table-cell">customer18@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Personal</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">19</td>
                                        <td class="font-w600">Lori Moore</td>
                                        <td class="d-none d-sm-table-cell">customer19@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              
            </main>
             <!--FIN DE CONTENIDO -->

            <?php require_once("../footer/footer.php"); ?>
           
        </div>
      
        <?php require_once("../mainjs/mainjs.php"); ?>
    </body>
</html>


<?php  }else{

header("Location: ".Conectar::ruta()."index.php");
}