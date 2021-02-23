<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Type Intervention</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/datepicker3.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">

</head>
<!--Icons-->
<script src="<?php echo base_url('assets/js/lumino.glyphs.js') ?>"></script>
<script type="text/javascript">
    function date_heure(id){
         date = new Date;
         annee = date.getFullYear();
         moi = date.getMonth();
         mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
         j = date.getDate();
         jour = date.getDay();
         jours = new Array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
         h = date.getHours();
         if(h<10)
            {
             h = "0"+h;
         }
            m = date.getMinutes();
         if(m<10)
         {
         m = "0"+m;
            }
         s = date.getSeconds();
         if(s<10)
         {
                s = "0"+s;
         }
         resultat ='<span class="date">' +jours[jour]+' '+j+' '+mois[moi]+' '+annee+'</span>'+'<br><br>'+'<span class="heure">'+h+':'+m+':'+s+'</span>';
         document.getElementById(id).innerHTML = resultat;
         setTimeout('date_heure("'+id+'");','1000');
         return true;
     }
 </script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Super</span>Vision</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url('assets/admin.png') ?>" class="profile" alt="User Image"> <?php echo $this->session->userdata("username") ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url() ?>index.php/homeControlleur/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Se deconnecter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <img  src="<?php echo base_url('assets/pic.png') ?>"  height="60px" width="180px"alt="">
            </div>
            <div id="div_horloge">
                <center>
                    <span id="date_heure"></span>
                    <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </center>
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="<?php echo base_url('index.php/homeControlleur') ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Acceuil</a></li>
                        <li class="parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><span class="glyphicon glyphicon-shopping-cart"></span> Materiels <span id="espace" class="glyphicon glyphicon-chevron-down"></span></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="<?php echo base_url('index.php/materielsControlleur') ?>">
                            <span class="glyphicon glyphicon-plus"></span> Nouveau
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/materielsControlleur/ProduitsMaj') ?>">
                            <span class="glyphicon glyphicon-tags"></span> Mettre a jour
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/materielsControlleur/ListProd') ?>">
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Liste
                        </a>
                    </li>
                </ul>
            </li>
                        <li class="parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-C"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Clients 
                    <span id="espace" class="glyphicon glyphicon-chevron-down"></span>
                    </span>
                </a>
                <ul class="children collapse" id="sub-item-C">
                    <li>
                        <a class="" href="<?php echo base_url('index.php/clientControlleur') ?>">
                            <span class="glyphicon glyphicon-plus"></span> Nouveau
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/clientControlleur/clientMaj') ?>">
                            <span class="glyphicon glyphicon-tags"></span> Mettre a jour
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/clientControlleur/listClient') ?>">
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Liste
                        </a>
                    </li>
                </ul>
            </li>

            <li class="parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Intervention <span id="espace" class="glyphicon glyphicon-chevron-down"></span></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="<?php echo base_url('index.php/interventionControlleur') ?>">
                            <span class="glyphicon glyphicon-plus"></span> Nouveau
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/interventionControlleur/commandeMaj') ?>">
                            <span class="glyphicon glyphicon-tags"></span> Mettre a jour
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/interventionControlleur/listcommande') ?>">
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Liste
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('index.php/interventionControlleur/facture') ?>"><span class="glyphicon glyphicon-file"></span> Facturation</a></li>
            <li class="active parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked internal hard drive"><use xlink:href="#stroked-internal-hard-drive"/></svg> Autres Type <span id="espace" class="glyphicon glyphicon-chevron-down"></span></span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li>
                        <a class="" href="<?php echo base_url('index.php/product') ?>">
                            <span class="glyphicon glyphicon-download-alt"></span> Intervention
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/materiels') ?>">
                            <span class="glyphicon glyphicon-stats"></span> Materiels
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked internal hard drive"><use xlink:href="#stroked-internal-hard-drive"/></svg> Piece <span id="espace" class="glyphicon glyphicon-chevron-down"></span> </span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li>
                        <a class="" href="<?php echo base_url('index.php/pieceControlleur/piece') ?>">
                            <span class="glyphicon glyphicon-download-alt"></span> Acheter
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url('index.php/produitControlleur/changer') ?>">
                            <span class="glyphicon glyphicon-stats"></span> Changer
                        </a>
                    </li>
                </ul>
            </li>

            <li role="presentation" class="divider"></li>

            <li>
                <a href="<?php echo base_url() ?>index.php/homeControlleur/logout">
                    <img src="<?php echo base_url('assets/admin.png') ?>" class="profile" alt="User Image">Deconnexion <span id="espace" class=" glyphicon glyphicon-log-out"></span>  
                </a>                
            </li>
        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/homeControlleur') ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>.</a>.Acceuil</li>
                <li><a href="<?php echo base_url('index.php/product') ?>"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>.</a>.Type Intervention</li>
                <li class="active"><a href="<?php echo base_url('index.php/product') ?>"><span class="glyphicon glyphicon-plus"></span>..Nouveau et Liste</a></li>

            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Type  Intervention <span class="glyphicon glyphicon-plus"></span></h1>
            </div>
        </div><!--/.row-->
        
        
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span>Nouveau</a></div>
                </h1>
            </div>
            
            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="mydata">
                                          <thead>
                                          <tr>
                                              <th style="color: #333536;"><span class="glyphicon glyphicon-asterisk"></span> Code Intervention</th>
                                              <th style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Designation</th>
                                              <th style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Prix (Ariary)</th>
                                              <th><span></span>
                                          </tr>
                                          </thead>
                                          <tbody id="show_data">

                                          </tbody>
                                </table>
                            </div>
        </div>
    </div>
        
</div>

        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Code Intervention</label>
                            <div class="col-md-10">
                              <input type="text" name="CODE_INTERVENTION" id="CODE_INTERVENTION" class="form-control" placeholder="Code Intervention">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Designation</label>
                            <div class="col-md-10">
                              <input type="text" name="DESIGNATION" id="DESIGNATION" class="form-control" placeholder="Designation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Prix du Cout</label>
                            <div class="col-md-10">
                              <input type="text" name="PRIX_COUT" id="PRIX_COUT" class="form-control" placeholder="Prix du Cout">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

                    <!--  Modals update-->
                        <div class="panel-body">
                            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modifier le Liste</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="panel-body">
                                                <form role="form">
                                                    <div class="col-lg-8">                  
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="numero_cli_edit" id="numero_cli_edit" placeholder="">
                                                        <label style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Designation :</label>
                                                        <input class="form-control" name="nom_cli_edit" id="nom_cli_edit" placeholder="Nom du client">
                                                    </div>
                                                    <div class="form-group">
                                                        <label style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Prix (Ariary) :</label>
                                                        <input class="form-control" name="prenom_cli_edit" id="prenom_cli_edit" placeholder="Adresse du client">
                                                    </div>                  
                                                        
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" type="submit" id="btn_update" class="btn btn-success">Modifier</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        show_type_intervention(); //call function show all product
        
        $('#mydata').dataTable();
         
        //fonction affichage 
        function show_type_intervention(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('product/product_data')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].CODE_INTERVENTION+'</td>'+
                                '<td>'+data[i].DESIGNATION+'</td>'+
                                '<td>'+data[i].PRIX_COUT+'</td>'+
                                        '<td style="text-align:center;">'+
                                            //'<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Edit" class="btn btn-info btn-sm item_edit" data-numero_cli="'+data[i].CODE_INTERVENTION+'" data-nom_cli="'+data[i].DESIGNATION+'" data-prenom_cli="'+data[i].PRIX_COUT+'" data-telephone_cl>Modifier</a>'+' '+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_update').on('click',function(){
            var CODE_INTERVENTION = $('#CODE_INTERVENTION').val();
            var DESIGNATION = $('#DESIGNATION').val();
            var PRIX_COUT        = $('#PRIX_COUT').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save')?>",
                dataType : "JSON",
                data : {CODE_INTERVENTION:CODE_INTERVENTION , DESIGNATION:DESIGNATION, PRIX_COUT:PRIX_COUT},
                success: function(data){
                    $('[name="CODE_INTERVENTION"]').val("");
                    $('[name="DESIGNATION"]').val("");
                    $('[name="PRIX_COUT"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_type_intervention();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var CODE_INTERVENTION = $(this).data('CODE_INTERVENTION');
            var DESIGNATION = $(this).data('DESIGNATION');
            var PRIX_COUT        = $(this).data('PRIX_COUT');
            
            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(CODE_INTERVENTION);
            $('[name="product_name_edit"]').val(DESIGNATION);
            $('[name="price_edit"]').val(PRIX_COUT);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var CODE_INTERVENTION = $('#product_code_edit').val();
            var DESIGNATION = $('#product_name_edit').val();
            var PRIX_COUT        = $('#price_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/update')?>",
                dataType : "JSON",
                data : {CODE_INTERVENTION:CODE_INTERVENTION , DESIGNATION:DESIGNATION, PRIX_COUT:PRIX_COUT},
                success: function(data){
                    $('[name="product_code_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="price_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_type_intervention();
                }
            });
            return false;
        });

    });

</script>
</body>
</html>