<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ClientMaj - SuperVision</title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/datepicker3.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap-table.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url('assets/js/lumino.glyphs.js') ?>"></script>
<!--table-->
<link href="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.css') ?>" rel="stylesheet" />
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
						<a class="" href="<?php echo base_url('index.php/materielsControlleur/materielsMaj') ?>">
							<span class="glyphicon glyphicon-tags"></span> Mettre a jour
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url('index.php/materielsControlleur/ListMateriels') ?>">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Liste
						</a>
					</li>
				</ul>
			</li>
			
			<li class="active parent">
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
						<a class="" href="<?php echo base_url('index.php/interventionControlleur/interventionMaj') ?>">
							<span class="glyphicon glyphicon-tags"></span> Mettre a jour
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url('index.php/interventionControlleur/listintervention') ?>">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Liste
						</a>
					</li>
				</ul>
			</li>
			<li><a href="<?php echo base_url('index.php/interventionControlleur/facture') ?>"><span class="glyphicon glyphicon-file"></span> Facturation</a></li>
			<li class="parent">
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
						<a class="" href="<?php echo base_url('index.php/materielsControlleur') ?>">
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
						<a class="" href="<?php echo base_url('index.php/pieceControlleur/Piece') ?>">
							<span class="glyphicon glyphicon-download-alt"></span> Acheter
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url('index.php/pieceControlleur/Changer') ?>">
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
				<li><a href="<?php echo base_url('index.php/clientControlleur') ?>"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>.</a>.Clients</li>
				<li class="active"><a href="<?php echo base_url('index.php/clientControlleur/clientMaj') ?>"><span class="glyphicon glyphicon-tags"></span>..Mise a jour</a></li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Clients <span class="glyphicon glyphicon-tags"></span></h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Mettre à jour les clients</div>
					<div class="panel-body">
						
                            <div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="mydata">
										  <thead>
										  <tr>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-asterisk"></span> Identifiant</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Nom</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Adresse</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-earphone"></span> Contact</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> E-mail</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-wrench"></span> Action</th>
										  </tr>
										  </thead>
										  <tbody id="show_data">

										  </tbody>
								</table>
							</div>

		            <!--  Modals update-->
                        <div class="panel-body">
                            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    	<div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modifier le client</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="panel-body">
                                                <form role="form">
                                                    <div class="col-lg-8">					
													<div class="form-group">
														<input type="hidden" class="form-control" name="numero_cli_edit" id="numero_cli_edit" placeholder="">
														<label style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Nom :</label>
														<input class="form-control" name="nom_cli_edit" id="nom_cli_edit" placeholder="Nom du client">
													</div>
													<div class="form-group">
														<label style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Adresse :</label>
														<input class="form-control" name="prenom_cli_edit" id="prenom_cli_edit" placeholder="Adresse du client">
													</div>
													<div class="form-group">
														<label style="color: #333536;"><span class="glyphicon glyphicon-earphone"></span> Contact :</label>
														<input class="form-control" name="telephone_cli_edit" id="telephone_cli_edit" placeholder="Numero de telephone">
													</div>
													<div class="form-group">
														<label style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> E-Mail :</label>
														<input class="form-control" name="adresse_edit" id="adresse_edit" placeholder="E-Mail du client">
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

                    <!--  Modals alert modif-->
                        <div class="panel-body">
                            <div class="modal fade" id="Modal_Modif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                        	
                                            	<center>
                                            	<H1 style="color: green;"><span class=" glyphicon glyphicon-ok"></span></H1>
                                                <h1>Le client a été bien Modifier!!</h1>
                                                </center>

                                        </div>
                                        <div class="modal-footer">
                                        	<center>
                                        	<input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!--  Modals delete-->
                        <div class="panel-body">
                            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                        	<center>
                                            	<H1 style="color: red;"><span class="glyphicon glyphicon-question-sign"></span></H1>
                                                <h1>Etes-vous sur de vouloir supprimer?</h1>
                                            </center>                                            
                                            
                                        </div>
                                        <div class="modal-footer">
                                        	<center>
                                        	<input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                            <button type="button" type="submit" id="btn_delete" onClick="reload()" class="btn btn-success">OUI</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">NON</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
		</div><!--/.row-->


		<!--  Modals Champs-->
                    <div class="modal fade" id="Modal_num3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <center>
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Le numero doit contenir 10 chiffres!!
                                   </center>
                                </div>
                                <div class="modal-footer">
                                 <center>
                                 <input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Modal_num2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <center>
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Le numero n'est pas valide!!
                                   </center>
                                </div>
                                <div class="modal-footer">
                                 <center>
                                 <input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Modal_num1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <center>
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Cette Operateur n'existe pas à Madagascar!!
                                   </center>
                                </div>
                                <div class="modal-footer">
                                 <center>
                                 <input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Modal_num7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <center>
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Le nom ne doit pas contenir de chiffres!!
                                   </center>
                                </div>
                                <div class="modal-footer">
                                 <center>
                                 <input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

	</div>	<!--/.main-->

	<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/chart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/easypiechart.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/easypiechart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>	
	<script src="<?php echo base_url('assets/js/bootstrap-table.js') ?>"></script>
	

	<script type="text/javascript">
		  $(document).ready(function(){
		    show_client(); //call function show all client

		    
		    $('#mydata').dataTable();
		     
		    //function show all client
		    function show_client(){
		        $.ajax({
		            type  : 'ajax',
		            url   : '<?php echo site_url('clientControlleur/client_data')?>',
		            async : false,
		            dataType : 'json',
		            success : function(data){
		                var html = '';
		                var i;
		                for(i=0; i<data.length; i++){
		                    html += '<tr>'+
		                          '<td style="text-align:center;">'+data[i].CODE_CLIENT+'</td>'+
		                            '<td>'+data[i].NOM_CLIENT+'</td>'+
		                            '<td>'+data[i].E_MAIL+'</td>'+
		                                '<td>'+data[i].NUM_TELEPHONE+'</td>'+
		                                '<td>'+data[i].ADRESSE_CLIENT+'</td>'+
		                            '<td style="text-align:center;">'+
		                                    '<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Edit" class="btn btn-info btn-sm item_edit" data-numero_cli="'+data[i].CODE_CLIENT+'" data-nom_cli="'+data[i].NOM_CLIENT+'" data-prenom_cli="'+data[i].E_MAIL+'" data-telephone_cli="'+data[i].NUM_TELEPHONE+'" data-adresse="'+data[i].ADRESSE_CLIENT+'">Modifier</a>'+' '+
		                                    '<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Delete" class="btn btn-danger btn-sm item_delete" data-numero_cli="'+data[i].CODE_CLIENT+'">Supprimer</a>'+
		                                    //'<a href="<?php echo site_url('impressionControlleur/imprimmer/')?>'+data[i].numero_cli+'" class="btn btn-warning btn-sm" data-numero_cli="'+data[i].numero_cli+'">l</a>'+
		                                '</td>'+
		                            '</tr>';
		                }
		                $('#show_data').html(html);
		            }

		        });
		    }

		        //get data for update record
		        $('#show_data').on('click','.item_edit',function(){
		            var numero_cli = $(this).data('numero_cli');
		            var nom_cli = $(this).data('nom_cli');
		            var prenom_cli  = $(this).data('prenom_cli');
		            var telephone_cli = $(this).data('telephone_cli');
		            var adresse = $(this).data('adresse');
		            
		            
		            $('[name="numero_cli_edit"]').val(numero_cli);
		            $('[name="nom_cli_edit"]').val(nom_cli);
		            $('[name="prenom_cli_edit"]').val(prenom_cli);
		            $('[name="telephone_cli_edit"]').val(telephone_cli);
		            $('[name="adresse_edit"]').val(adresse);
		        });

		        //update record to database
		         $('#btn_update').on('click',function(){
		            var numero_cli = $('#numero_cli_edit').val();
		            var nom_cli = $('#nom_cli_edit').val();
		            var prenom_cli     = $('#prenom_cli_edit').val();
		            var telephone_cli = $('#telephone_cli_edit').val();
		            var adresse = $('#adresse_edit').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo site_url('clientControlleur/update')?>",
		                dataType : "JSON",
		                data : {CODE_CLIENT:numero_cli , NOM_CLIENT:nom_cli, E_MAIL:prenom_cli, NUM_TELEPHONE:telephone_cli, ADRESSE_CLIENT:adresse},
		                success: function(data){
		                    $('[name="numero_cli_edit"]').val("");
		                    $('[name="nom_cli_edit"]').val("");
		                    $('[name="prenom_cli_edit"]').val("");
		                    $('[name="telephone_cli_edit"]').val("");
		                    $('[name="adresse_edit"]').val("");
		                    $('#Modal_Edit').modal('hide');
		                    $('#Modal_Modif').modal('show');
		                    show_client();
		                }
		            });
		            return false;
		        });

		        //get data for delete record
		        $('#show_data').on('click','.item_delete',function(){
		            var numero_cli = $(this).data('numero_cli');
		            
		            $('[name="numero_cli_delete"]').val(numero_cli);
		        });

		        //delete record to database
		         $('#btn_delete').on('click',function(){
		            var numero_cli = $('#numero_cli_delete').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo site_url('clientControlleur/delete')?>",
		                dataType : "JSON",
		                data : {CODE_CLIENT:numero_cli},
		                success: function(data){
		                    $('[name="numero_cli_delete"]').val("");
		                    $('#Modal_Delete').modal('hide');
		                    show_client();
		                }
		            });
		            return false;
		        });

		  });

	</script>
	<script src="<?php echo base_url('assets/plugins/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
	<script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script type="text/javascript">
		$(function(){
			$("#nom_cli_edit").keyup(function(){
				showBtnSave();
			});
			$("#prenom_cli_edit").keyup(function(){
				showBtnSave();
			});
			$("#telephone_cli_edit").keyup(function(){
				showBtnSave();
			});
			$("#adresse_edit").keyup(function(){
				showBtnSave();
			});
		});

		function showBtnSave(){
			if(checkAll()){
				$("#btn_update").slideDown("speed");
			} else{
				$("#btn_update").slideUp("speed");
			}
		}

		function isEmpty(element){
			if(element.val() == ""){
				return true;
			} 
			return false;
		}

		function checkAll(){

			if((!isEmpty($("#nom_cli_edit"))) && (!isEmpty($("#prenom_cli_edit"))) && (!isEmpty($("#telephone_cli_edit"))) && (!isEmpty($("#adresse_edit")))){
				return true;
			}
		}
		function reload(){			
		    location.reload();
		}
	</script>
    <script>

        $('#nom_cli_edit').keyup(function () {
        	this.value = this.value.toUpperCase();
        	var num = this.value;
        	var reg = new RegExp("^[a-zA-ZÀ-ÿ]*$");
        	var test= reg.test(num);
        	if(!test){
        		$('#Modal_num7').modal('show');
        		$('#nom_cli_edit').val('');
        	}
        });

        $('#prenom_cli_edit').change(function () {
            var str = this.value;
            var tab = str.split(" ");
            var chaine = "";
            for (var i = 0; i < tab.length; i++) {
                chaine += tab[i].substring(0, 1).toUpperCase() + tab[i].substring(1, tab[i].length).toLowerCase() + " ";
            }
            $('#prenom_cli_edit').val(chaine);

        });


        $('#adresse_edit').blur(function () {
            var str = this.value;
            var tab = str.split(" ");
            var chaine = "";
            for (var i = 0; i < tab.length; i++) {
                chaine += tab[i].substring(0, 1).toUpperCase() + tab[i].substring(1, tab[i].length).toLowerCase() + " ";
            }
            $('#adresse_edit').val(chaine);
        });

	    $('#telephone_cli_edit').blur(function () {
	            var phon = this.value;
	            if (isNaN(phon) == false) {
	                var isa = phon.length;
	                if (isa == 10) {
	                    var cs = phon.substring(0, 3);
	                    if (cs == "032" || cs == "033" || cs == "034" || cs == "039") {
	                        this.value = phon.substring(0, 3) + " " + phon.substring(3, 5) + " " + phon.substring(5, 8) + " " + phon.substring(8, 10);
	                    } else {
	                        $('#Modal_num1').modal('show');
	                        $('#telephone_cli_edit').val("");
	                    }
	                } else {
	                    $('#Modal_num2').modal('show');
	                    $('#telephone_cli_edit').val("");
	                }
	            } else {
	                $('#Modal_num3').modal('show');
	                $('#telephone_cli_edit').val("");
	            }
	        });
	</script>	
</body>

</html>
