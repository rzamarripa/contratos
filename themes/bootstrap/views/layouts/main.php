<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
 
    <title>Contratos</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    name="viewport"><!-- Basic Styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/bootstrap.min.css';?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/zama.css';?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/font-awesome.min.css';?>" media="screen" rel="stylesheet" type="text/css">
    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/smartadmin-production.css';?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/smartadmin-skins.css';?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/summernote.css';?>" media="screen" rel="stylesheet" type="text/css">
    <link href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css" media="screen" rel="stylesheet" type="text/css">
    <!-- Full Calendar -->
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/fullcalendar.css';?>" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/css/fullcalendar.print.css';?>" media="print" rel="stylesheet" type="text/css">
    <!-- FAVICONS -->
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/favicon/favicon.ico';?>" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/favicon/favicon.ico';?>" rel="icon" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700" rel="stylesheet"><!-- Specifying a Webpage Icon for Web Clip 
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/sptouch-icon-iphone.png';?>" rel="apple-touch-icon">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/touch-icon-ipad.png';?>" rel="apple-touch-icon" sizes=
    "76x76">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/touch-icon-iphone-retina.png';?>" rel="apple-touch-icon"sizes="120x120">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/touch-icon-ipad-retina.png';?>" rel="apple-touch-icon"sizes="152x152">
    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <!-- Startup image for web apps -->
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/ipad-landscape.png';?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)"
    rel="apple-touch-startup-image">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/ipad-portrait.png';?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)"
    rel="apple-touch-startup-image">
    <link href="<?php echo Yii::app()->theme->baseUrl . '/img/splash/iphone.png';?>" media="screen and (max-device-width: 320px)" rel="apple-touch-startup-image">
    <script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery.min.js';?>"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  </head>

  <body class="">
		<?php $usuarioActual = Usuario::model()->obtenerUsuarioActual(); ?>
      <header id="header">
				 <div id="logo-group">
		        <!-- PLACE YOUR LOGO HERE -->
		         <span id="logo"><strong>H. Ayuntamiento</strong></span> 
		        <!-- END LOGO PLACEHOLDER -->        

		 
		    <div id="project-context">
		        		 
		    </div><!-- end projects dropdown -->
		    <!-- pulled right: nav area -->
		 
		 
		    <div class="pull-right">
		        <!-- collapse menu button -->
		 
		        <div class="btn-header pull-right" id="hide-menu">
		            <span><a href="javascript:void(0);" title="Encoger Menú"><i class="fa fa-reorder"></i></a></span>
		        </div><!-- end collapse menu -->
		 
		        <!-- logout button -->
		 
		        <div class="btn-header transparent pull-right" id="logout">
		            <span><?php echo CHtml::link('<i class="fa fa-sign-out"></i>',array('site/logout'),array('data-logout-msg'=>"Está seguro que desea cerrar sesión")); ?></span>
		        </div><!-- end logout button -->
		 
		        <!-- fullscreen button -->
		        <div class="btn-header transparent pull-right" id="fullscreen">
		            <span><a href="javascript:void(0);" onclick="launchFullscreen(document.documentElement);" title="Pantalla completa"><i class="fa fa-desktop"></i></a></span>
		        </div><!-- end fullscreen button -->
		 
		        <!-- multiple lang dropdown : find all flags in the image folder -->
		        
		 
		    </div><!-- end pulled right: nav area -->
      </header>

      <aside id="left-panel">
        <!-- User info -->
		    <div class="login-info">
		        <span>
		        <!-- User image size is adjusted inside CSS, it should stay as it -->
		        <?php $usuarioActual = Usuario::model()->obtenerUsuarioActual(); ?>
		         <a href="<?php array("usuario/view",'id'=>$usuarioActual->id)?>" id="show-shortcut"><img alt="me"
		        class="online" src="<?php echo Yii::app()->theme->baseUrl . '/img/avatars/male.png';?>">
		        <span><?php echo $usuarioActual->nombre; ?></span></a></span>
		    </div>
		    <!-- end user info -->
		    
		    <nav>
		        <ul>		            
							<li class="active"><?php echo CHtml::link('<i class="fa fa-dashboard"></i> Cuadro de mando',array('site/index')); ?></li>           
			        <li><?php echo CHtml::link('<i class="fa fa-folder-open-o"></i> Contratos Pendientes',array('doctoenproceso/index')); ?></li>
			        <li><?php echo CHtml::link('<i class="fa fa-folder-open"></i> Contratos Terminados',array('documento/terminados')); ?></li>	
			        <li><?php echo CHtml::link('<i class="fa fa-plus"></i> Crear Contrato',array('documento/create')); ?></li>
			        <li><?php echo CHtml::link('<i class="fa fa-plus"></i> Agregar Area Generadora',array('areageneradora/create')); ?></li>
		        </ul>
		    </nav>
      </aside>

      <!-- MAIN PANEL -->
      <div id="main">     
          <!-- RIBBON -->
		    <div id="ribbon">
		        <span class="ribbon-button-alignment btn btn-ribbon" data-html="true" data-original-title="message..." data-placement="bottom" data-title="refresh" id="refresh"></span> 
		        <!-- breadcrumb -->
           <?php if(isset($this->breadcrumbs)):
							$this->widget('BBreadcrumbs', array(
								'links'=>$this->breadcrumbs,
								'separator'=>'',
							)); 
						endif ?>
		        <!-- end breadcrumb -->
		 
		    </div><!-- END RIBBON -->
		    <!-- MAIN CONTENT -->
		 
		    <div id="content"> 		    	
		    	<?php echo $content; ?> 
		    </div><!-- END MAIN CONTENT -->
      </div>

      <div id="shortcut">
          <div id="shortcut" style="display: block;">
          	<?php if(!Yii::app()->user->isGuest){ ?>
						<ul>
							<li>
								<a href="#inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mensajes <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
							</li>
							<li>
								<a href="#calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendario</span> </span> </a>
							</li>
							<li>
								<a href="#gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Mapa</span> </span> </a>
							</li>
							<li>
								<a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Galería </span> </span> </a>
							</li>
							<li>
								<?php echo CHtml::link('<span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>Cerrar Sesión</span> </span>', array('site/logout'), 
								array('class'=>'jarvismetro-tile big-cubes selected bg-color-pinkDark')); ?>
							</li>
						</ul>
						<?php } ?>
					</div>
      </div>			
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/summernote.min.js';?>"></script>
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery.datatable.js';?>"></script>
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/bootstrap/bootstrap.min.js';?>"></script>
			
			<!-- CUSTOM NOTIFICATION -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/notification/SmartNotification.js';?>"></script>
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/notificaciones.js';?>"></script>
			
			<!-- FULL CALENDAR -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/fullcalendar.min.js';?>"></script>
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery-ui.custom.min.js';?>"></script>			
			 
			<!-- JARVIS WIDGETS -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/smartwidgets/jarvis.widget.min.js';?>"></script>
			 
			<!-- EASY PIE CHARTS -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js';?>"></script>
			 
			<!-- SPARKLINES -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/sparkline/jquery.sparkline.min.js';?>"></script>
			 
			<!-- JQUERY VALIDATE -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/jquery-validate/jquery.validate.min.js';?>"></script>
			 
			<!-- JQUERY MASKED INPUT -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/masked-input/jquery.maskedinput.min.js';?>"></script>
			 
			<!-- JQUERY SELECT2 INPUT -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/select2/select2.min.js';?>"></script>
			 
			<!-- JQUERY UI + Bootstrap Slider -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/bootstrap-slider/bootstrap-slider.min.js';?>"></script>
			 
			<!-- browser msie issue fix -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/msie-fix/jquery.mb.browser.min.js';?>"></script>
			 
			<!-- FastClick: For mobile devices: you can disable this in app.js -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/plugin/fastclick/fastclick.js';?>"></script>

			<!-- MAIN APP JS FILE -->
			<script src="<?php echo Yii::app()->theme->baseUrl . '/js/app.js';?>"></script>
			 
			<!-- Your GOOGLE ANALYTICS CODE Below -->
			<script type="text/javascript">
	      var _gaq = _gaq || [];
	      _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
	      _gaq.push(['_trackPageview']);
	    
	      (function() {
	        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	      })();  
	      $(document).ready(function() {
	      	
				  
				  $('table.display').dataTable();
				  
				  $('#myTable').dataTable({
				      "paging":   true,
				      "ordering": true,
				      "info":     true,
				      "stateSave": false,
				  });
				  $('#summernote').summernote({
					  height: 150,
				  });
				  
				  
				  var date = new Date();
					var d = date.getDate();
					var m = date.getMonth();
					var y = date.getFullYear();
				  var calendar = $('#calendar').fullCalendar({
				  	height: 700,
					  header: {
				      left: 'prev, next today',
				      center: 'title',
				      right: 'month, basicWeek, basicDay'
				    },
						events: "<?php echo Yii::app()->createUrl('evento/geteventos'); ?>",
						selectable: true,
						selectHelper: true,
						select: function(start, end, allDay) {
						 var title = prompt('Título del Evento:');
						 if (title) {
						 start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
						 end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
						 $.ajax({
							 url: "<?php echo Yii::app()->createUrl('evento/create'); ?>",
							 data: 'title='+ title+'&start='+ start +'&end='+ end,
							 type: "POST",
							 success: function(json) {
							 	$.smallBox({
									title : "Acción correcta",
									content : "Se creó el evento correctamente",
									color : "#296191",
									iconSmall : "fa fa-thumbs-up bounce animated",
									timeout : 4000
								})
							 }
						 });
						 calendar.fullCalendar('renderEvent',{
								 title: title,
								 start: start,
								 end: end,
								 allDay: allDay
								},
								false // make the event "stick"
							);
						 }
						 calendar.fullCalendar('unselect');
						},
						editable: true,
						eventDrop: function(event, delta) {
						 start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
						 end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
						 $.ajax({
						 url: "<?php echo Yii::app()->createUrl('evento/update'); ?>",
						 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
						 type: "POST",
						 success: function(json) {
						 	$.smallBox({
								title : "Modificación",
								content : "Se movió de fecha correctamente el evento: " + event.title,
								color : "#739E73",
								iconSmall : "fa fa-thumbs-up bounce animated",
								timeout : 4000
							});
						 }
						 });
						},
						eventResize: function(event) {
						 start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
						 end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
						 $.ajax({
							 url: "<?php echo Yii::app()->createUrl('evento/update'); ?>",
							 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
							 type: "POST",
							 success: function(json) {
							 	$.smallBox({
									title : "Modificación",
									content : "Se modificó correctamente el evento: " + event.title,
									color : "#739E73",
									iconSmall : "fa fa-thumbs-up bounce animated",
									timeout : 4000
								});
							 }
						 });							 
						},
						eventClick: function (event) {
							if (confirm("¿Realmente quiere eliminar este evento?")) { 
								$.ajax({
									url: '<?php echo Yii::app()->createUrl("evento/delete"); ?>',
									data: 'id =' + event.id, 
									type: "POST", 
									success: function(json) { 
										 $.smallBox({
											title : "Ups",
											content : "Se dejó de publicar el evento correctamente",
											color : "#a90329",
											iconSmall : "fa fa-thumbs-down bounce animated",
											timeout : 4000
										});
									} 
								});
							}							
						}
				  });
				  
				  					  
				});
				
			</script>
			<?php 
			foreach(Yii::app()->user->getFlashes() as $key => $message) { 

				$key = explode("-", $key);
				$key = $key[0];
				if($key == "danger"){ 
					Yii::app()->clientScript->registerScript(
					   'danger',
					   '$.smallBox({
								title : "Ups",
								content : "' . $message . '",
								color : "#a90329",
								iconSmall : "fa fa-thumbs-down bounce animated",
								timeout : 4000
							})',
					   CClientScript::POS_READY
					);
				} else if($key == "info"){ 
					Yii::app()->clientScript->registerScript(
					   'info',
					   '$.smallBox({
								title : "Información",
								content : "' . $message . '",
								color : "#57889c",
								iconSmall : "fa fa-thumbs-up bounce animated",
								timeout : 4000
							})',
					   CClientScript::POS_READY
					);
				} else if($key == "success"){ 
					Yii::app()->clientScript->registerScript(
					   'success',
					   '$.smallBox({
								title : "Modificación",
								content : "' . $message . '",
								color : "#739E73",
								iconSmall : "fa fa-thumbs-up bounce animated",
								timeout : 4000
							})',
					   CClientScript::POS_READY
					);
				} else if($key == "warning"){ 
					Yii::app()->clientScript->registerScript(
					   'warning',
					   '$.smallBox({
								title : "Ojo",
								content : "' . $message . '",
								color : "#c79121",
								iconSmall : "fa fa-thumbs-down bounce animated",
								timeout : 4000
							})',
					   CClientScript::POS_READY
					);
				} else if($key == "primary"){ 
					Yii::app()->clientScript->registerScript(
					   'primary',
					   '$.smallBox({
								title : "Acción correcta",
								content : "' . $message . '",
								color : "#296191",
								iconSmall : "fa fa-thumbs-up bounce animated",
								timeout : 4000
							})',
					   CClientScript::POS_READY
					);
				}
			}?>
			
  </body>
</html>