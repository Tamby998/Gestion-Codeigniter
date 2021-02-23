<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Client - tecno</title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/datepicker3.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap-table.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/manjavina.css') ?>" rel="stylesheet">

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
		<div class="row" id="manjavn">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('index.php/homeControlleur') ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>.</a>.Acceuil</li>
				<li class="active"><a href="<?php echo base_url('index.php/clientControlleur') ?>"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>.</a>.Clients</li>
				<li class="active"><a href="<?php echo base_url('index.php/clientControlleur/listClient') ?>"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>..Liste</a></li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Clients <span class=" glyphicon glyphicon-list-alt"></span></h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Listes des clients</div>
					<div class="panel-body">
						
                            <div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="mydata">
										  <thead>
										  <tr>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-asterisk"></span> Identifiant</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Nom</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Email</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-earphone"></span> Contact</th>
										      <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> Adresse Client</th>
										  </tr>
										  </thead>
										  <tbody id="show_data">

										  </tbody>
								</table>
								<br>
								<div align="right"><button id="manjavn" class="btn btn-primary" onClick="imprimer()"><span class="glyphicon glyphicon-print"></span> | Imprimer</button></div>

							</div>

					</div>
				</div>
			</div>
		</div><!--/.row-->

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
		                            '<td>'+data[i].ADRESSE_CLIENT+'</td>'+
		                                '<td>'+data[i].NUM_TELEPHONE+'</td>'+
		                                '<td>'+data[i].E_MAIL+'</td>'+
		                            '</tr>';
		                }
		                $('#show_data').html(html);
		            }

		        });
			}
		  });

	</script>
	<script src="<?php echo base_url('assets/plugins/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
	<script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script>
        function imprimer()
        {
            if (typeof(window.print) != 'undefined') {
        window.print();
            }
        }
    </script>	
</body>

</html>
