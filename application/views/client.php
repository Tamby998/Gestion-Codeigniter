<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Client - Super Vision</title>

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
				<li><a href="<?php echo base_url('index.php/clientControlleur') ?>"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>.</a>.Clients</li>
				<li class="active"><a href="<?php echo base_url('index.php/clientControlleur') ?>"><span class="glyphicon glyphicon-plus"></span>..Nouveau</a></li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Clients <span class="glyphicon glyphicon-plus"></span></h1>
			</div>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Ajouter un nouveau client</div>
					<div class="panel-body">
						<form role="form">
							<div class="col-lg-8">					
							<div class="form-group">
								<input type="hidden" class="form-control" name="CODE_CLIENT" id="CODE_CLIENT" placeholder="">
								<label style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Nom Client :</label>
								<input type="text" class="form-control" name="NOM_CLIENT" id="NOM_CLIENT" placeholder="nom du client" onkeypress="refuserToucheEntree(event);">
							</div>
							<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Adresse Client :</label>
								<input type="text" class="form-control" name="ADRESSE_CLIENT" id="ADRESSE_CLIENT" placeholder="Adresse du Cient" onkeypress="refuserToucheEntree(event);">
							</div>
							<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-earphone"></span> Contact Client :</label>
								<input class="form-control" name="NUM_TELEPHONE" id="NUM_TELEPHONE" placeholder="Numero de téléphone" onkeypress="refuserToucheEntree(event);">
							</div>
							<div class="form-group">
								<label style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> E-Mail :</label>
								<input class="form-control" name="E_MAIL" id="E_MAIL" placeholder="Adresse E-Mail" onkeypress="refuserToucheEntree(event);">
							</div>					
								
							
							<div>								
								<button type="submit" id="btn_save" name="btn_save" class="btn btn-success">Enregistrer</button>
								<button type="reset" id="" name="" onClick="reload()" class="btn btn-primary">Annuler</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->

		            <!--  Modals alert-->
                        <div class="panel-body">
                            <div class="modal fade" id="Modal_Alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                        	
                                            	<center>
                                            	<H1 style="color: green;"><span class=" glyphicon glyphicon-ok"></span></H1>
                                                <h1>Le client a été bien enregistrer!!</h1>
                                                </center>

                                        </div>
                                        <div class="modal-footer">
                                        	<center>
                                        	<input type="hidden" name="numero_cli_delete" id="numero_cli_delete" class="form-control">
                                            <button type="button" class="btn btn-primary" onClick="reload()" data-dismiss="modal">OK</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!--  Modals Champs-->
                    <div class="modal fade" id="Modal_num3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <center>
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Le contact doit contenir 10 chiffres!!
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
                                      <h1 style="color: red;"><span class="glyphicon glyphicon-warning-sign"></span></h1> Le numero n'est pas acceptable!!
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
                                   <center>
                                   <table>
                                   	<tr>Choisir parmi :</tr>
                                   	<tr>
                                   		<td>Orange</td>
                                   		<td>:</td>
                                   		<td>032</td>
                                   	</tr>
                                   	<tr>                                   		
                                   		<td>Airtel</td>
                                   		<td>:</td>
                                   		<td>033</td>
                                   	</tr>
                                   	<tr>                                   		
                                   		<td>Telma</td>
                                   		<td>:</td>
                                   		<td>034</td>
                                   	</tr>
                                   	<tr>                                   		
                                   		<td>Bip</td>
                                   		<td>:</td>
                                   		<td>039</td>
                                   	</tr>
                                   </table> 
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
			$("#CODE_CLIENT").keyup(function(){
				showBtnSave();
			});
			$("#NUM_TELEPHONE").keyup(function(){
				showBtnSave();
			});
			$("#E_MAIL").keyup(function(){
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

			if((!isEmpty($("#NOM_CLIENT"))) && (!isEmpty($("#NUM_TELEPHONE"))) && (!isEmpty($("#E_MAIL")))){
				return true;
			}
		}

		function reload(){			
		    location.reload();
		}
	</script>

	<script type="text/javascript">
		  $(document).ready(function(){		       

		        //Save client
		        $('#btn_save').on('click',function(){
		            var CODE_CLIENT = $('#CODE_CLIENT').val();
		            var NOM_CLIENT = $('#NOM_CLIENT').val();
		            var ADRESSE_CLIENT   = $('#ADRESSE_CLIENT').val();
		            var NUM_TELEPHONE = $('#NUM_TELEPHONE').val();
		            var E_MAIL = $('#E_MAIL').val();
		            $.ajax({
		                type : "POST",
		                url  : "<?php echo site_url('clientControlleur/save')?>",
		                dataType : "JSON",
		                data : {CODE_CLIENT: CODE_CLIENT, NOM_CLIENT:NOM_CLIENT, ADRESSE_CLIENT: ADRESSE_CLIENT, NUM_TELEPHONE:NUM_TELEPHONE, E_MAIL:E_MAIL},
		                success: function(data){
		                    $('[name="CODE_CLIENT"]').val("");
		                    $('[name="NOM_CLIENT"]').val("");
		                    $('[name="ADRESSE_CLIENT"]').val("");
		                    $('[name="NUM_TELEPHONE"]').val("");
		                    $('[name="E_MAIL"]').val("");
		                    $('#Modal_Alert').modal('show');
		                    //show_client()
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

        $('#NOM_CLIENT').keyup(function () {
        	this.value = this.value.toUpperCase();
        	var num = this.value;
        	var reg = new RegExp("^[a-zA-ZÀ-ÿ]*$");
        	var test= reg.test(num);
        	if(!test){
        		$('#Modal_num7').modal('show');
        		$('#nom_cli').val('');
        	}
        });

        $('#ADRESSE_CLIENT').change(function () {
            var str = this.value;
            var tab = str.split(" ");
            var chaine = "";
            for (var i = 0; i < tab.length; i++) {
                chaine += tab[i].substring(0, 1).toUpperCase() + tab[i].substring(1, tab[i].length).toLowerCase() + " ";
            }
            $('#ADRESSE_CLIENT').val(chaine);

        });


        $('#E_MAIL').blur(function () {
            var str = this.value;
            var tab = str.split(" ");
            var chaine = "";
            for (var i = 0; i < tab.length; i++) {
                chaine += tab[i].substring(0, 1).toUpperCase() + tab[i].substring(1, tab[i].length).toLowerCase() + "";
            }
            $('#E_MAIL').val(chaine);
        });

	    $('#NUM_TELEPHONE').blur(function () {
	            var phon = this.value;
	            if (isNaN(phon) == false) {
	                var isa = phon.length;
	                if (isa == 10) {
	                    var cs = phon.substring(0, 3);
	                    if (cs == "032" || cs == "033" || cs == "034" || cs == "039") {
	                        this.value = phon.substring(0, 3) + " " + phon.substring(3, 5) + " " + phon.substring(5, 8) + " " + phon.substring(8, 10);
	                    } else {
	                        $('#Modal_num1').modal('show');
	                        $('#NUM_TELEPHONE').val("");
	                    }
	                } else {
	                    $('#Modal_num2').modal('show');
	                    $('#NUM_TELEPHONE').val("");
	                }
	            } else {
	                $('#Modal_num3').modal('show');
	                $('#NUM_TELEPHONE').val("");
	            }
	        });
	</script>
</body>

</html>
