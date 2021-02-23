<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Materiels - Super Vision</title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/datepicker3.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">

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
			<li class="active parent">
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
						<a class="" href="<?php echo base_url('index.php/produitControlleur/materielsMaj') ?>">
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
					<img src="<?php echo base_url('assets/admin.png') ?>" class="profile" alt="username">Deconnexion <span id="espace" class=" glyphicon glyphicon-log-out"></span>  
				</a>				
			</li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('index.php/homeControlleur') ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>.</a>.Acceuil</li>
				<li><a href="<?php echo base_url('index.php/materielsControlleur') ?>"><span class="glyphicon glyphicon-shopping-cart"></span>.</a>.Materiels</li>
				<li class="active"><a href="<?php echo base_url('index.php/produitControlleur') ?>"><span class="glyphicon glyphicon-plus"></span>..Nouveau</a></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Materiels <span class="glyphicon glyphicon-plus"></span></h1>
			</div>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Ajouter un nouveau Materiels</div>
					<div class="panel-body">
						<form role="form">
						<div class="col-lg-8">
							<div class="form-group">								
								<label style="color: #333536;"><span class="glyphicon glyphicon-user"></span>Numero Materiels :</label>
								<input type="number" class="form-control" name="NUM_MATERIELS" id="NUM_MATERIELS" placeholder="Numero Materiels" onkeypress="refuserToucheEntree(event);">
							</div>
							<div class="form-group">								
								<label style="color: #333536;"><span class="glyphicon glyphicon-user"></span>Type Materiels :</label>
								<select class="form-control" name="ID_TYPE" id='ID_TYPE' onkeypress="refuserToucheEntree(event);">
									<option value="">Select Type Materiels</option>
									<?php foreach($type_materiels as $type_materiels): ?>
									<option value="<?php echo $type_materiels->ID_TYPE; ?>"><?php echo $type_materiels->TYPE_MATERIELS; ?></option>
									<?php endforeach; ?>	
								</select>
							</div>
							<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Au nom de :</label>
								<select class="form-control" name="CODE_CLIENT" id='CODE_CLIENT' onkeypress="refuserToucheEntree(event);">
									<option value="">Nom Client</option>
									<?php foreach($client as $client): ?>
									<option value="<?php echo $client->CODE_CLIENT; ?>"><?php echo $client->NOM_CLIENT; ?></option>
									<?php endforeach; ?>
								</select>
							</div>	
						<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-calendar"></span> Date du commande :</label>
								<input type="date" class="form-control" name="DATE_ENTREE" id="DATE_ENTREE" placeholder="date du commande" onkeypress="refuserToucheEntree(event);">
						</div>
													<div class="form-group">								
								<label style="color: #333536;"><span class="glyphicon glyphicon-barcode"></span> Numero Serie du Materiels :</label>
								<input type="text" class="form-control" name="NUM_SERIE_MATERIELS" id="NUM_SERIE_MATERIELS" placeholder="Numero Serie Materiels" onkeypress="refuserToucheEntree(event);">
							</div>
							<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-shopping-cart"></span> Modeles Materiels :</label>
								<input type="text" class="form-control" name="MODELES_MATERIELS" id="MODELES_MATERIELS" placeholder="Modeles Materiels" onkeypress="refuserToucheEntree(event);">
							</div>
							<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-usd"></span> Marque Materiels</label>
								<input type="text" class="form-control" name="MARQUE_MATERIELS" id="MARQUE_MATERIELS" placeholder="Marque Materiels" onkeypress="refuserToucheEntree(event);">	
						</div>
						<div class="col-md-6">								
							<button type="submit" id="btn_save" name="btn_save" class="btn btn-success">Enregistrer</button>
							<button type="reset" id="" name="" onClick="reload()" class="btn btn-primary">Annuler</button>
						</div>
						</form>
					</div>
					</div>
				</div>				
			</div>
		</div>
		         <!--  Modals alert-->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="modal fade" id="Modal_Alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                        	<center>
                                            	<H1 style="color: green;"><span class=" glyphicon glyphicon-ok"></span></H1>
                                                <h1>Le Materiels a été bien enregistrer!!</h1>
                                            </center>                                            
                                            
                                        </div>
                                        <div class="modal-footer">
                                        	<center>
                                        	<input type="hidden" name="NUM_MATERIELS_delete" id="NUM_MATERIELS_delete" class="form-control">
                                            <button type="button" class="btn btn-primary" onClick="reload()" data-dismiss="modal">OK</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <!--  Modals Champs-->
                    <div class="modal fade" id="Modal_num2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <center>
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Le Numero Materiels doit être des chiffres!!
                                   </center>
                                </div>
                                <div class="modal-footer">
                                 <center>
                                 <input type="hidden" name="NUM_MATERIELS_delete" id="NUM_MATERIELS_delete" class="form-control">
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
		<script type="text/javascript">
		  $(document).ready(function(){		       

		        //Save client
		        $('#btn_save').on('click',function(){
		            var NUM_MATERIELS = $('#NUM_MATERIELS').val();
		            var ID_TYPE = $('#ID_TYPE').val();
		            var CODE_CLIENT = $('#CODE_CLIENT').val();
		            var DATE_ENTREE = $('#DATE_ENTREE').val();
		            var NUM_SERIE_MATERIELS = $('#NUM_SERIE_MATERIELS').val();
		            var MODELES_MATERIELS = $('#MODELES_MATERIELS').val();
		            var MARQUE_MATERIELS = $('#MARQUE_MATERIELS').val();		            
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo site_url('materielsControlleur/save')?>",
		                dataType : "JSON",
		                data : {NUM_MATERIELS:NUM_MATERIELS , ID_TYPE:ID_TYPE, CODE_CLIENT:CODE_CLIENT, DATE_ENTREE:DATE_ENTREE, NUM_SERIE_MATERIELS:NUM_SERIE_MATERIELS ,MARQUE_MATERIELS:MARQUE_MATERIELS, MODELES_MATERIELS:MODELES_MATERIELS },
		                success: function(data){
		                    $('[name="NUM_MATERIELS"]').val("");
		                    $('[name="ID_TYPE"]').val("");
		                    $('[name="CODE_CLIENT"]').val("");
		                    $('[name="DATE_ENTREE"]').val("");
		                    $('[name="NUM_SERIE_MATERIELS"]').val("");
		                    $('[name="MODELES_MATERIELS"]').val("");
		                    $('[name="MARQUE_MATERIELS"]').val("");
		              }
		        });
		    });
		});        
		</script> 

	<script type="text/javascript">

		function refuserToucheEntree(event){
		    // Compatibilité IE / Firefox
		    if(!event && window.event) {
		        event = window.event;
		    }
		    // IE
		    if(event.keyCode == 13) {
		        event.returnValue = false;
		        event.cancelBubble = true;
		    }
		    // DOM
		    if(event.which == 13) {
		        event.preventDefault();
		        event.stopPropagation();
		    }
		}

		$(function(){
			$("#NUM_MATERIELS").keyup(function(){
				showBtnSave();
			});
			$("#ID_TYPE").keyup(function(){
				showBtnSave();
			});
			$("#CODE_CLIENT").keyup(function(){
				showBtnSave();
			});
			$("#DATE_ENTREE").keyup(function(){
				showBtnSave();
			});
			$("#NUM_SERIE_MATERIELS").keyup(function(){
				showBtnSave();
			});
			$("#MODELES_MATERIELS").keyup(function(){
				showBtnSave();
			});
			$("#MARQUE_MATERIELS").keyup(function(){
				showBtnSave();
			});
		});

		function showBtnSave(){
			if(checkAll()){
				$("#btn_save").slideDown("speed");
			} else{
				$("#btn_save").slideUp("speed");
			}
		}

		function isEmpty(element){
			if(element.val() == ""){
				return true;
			} 
			return false;
		}

		function checkAll(){

			if((!isEmpty($("#NUM_MATERIELS"))) && (!isEmpty($("#ID_TYPE"))) && (!isEmpty($("#CODE_CLIENT"))) && (!isEmpty($("#DATE_ENTREE"))) && (!isEmpty($("#NUM_SERIE_MATERIELS")))&& (!isEmpty($("#MODELES_MATERIELS")))&& (!isEmpty($("#MARQUE_MATERIELS")))){
				return true;
			}
		}
		function reload(){			
		    location.reload();
		}
	</script>

	<script>

        $('#NUM_MATERIELS').blur(function () {
	        var phon = this.value;
	        if (isNaN(phon) == false) {
	        	return true;
	        } else {
	            $('#Modal_num2').modal('show');
	            $('#NUM_MATERIELS').val("");
	        }
	    });
	</script>	             

</body>

</html>
