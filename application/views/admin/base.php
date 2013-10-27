<!doctype html>
<head>
  <meta charset="utf-8">
  
  <!-- DNS prefetch -->
  <link rel=dns-prefetch href="//fonts.googleapis.com">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?=$title?></title>

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS: implied media=all -->
  <link rel="stylesheet" href="/assets/admin/css/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="/assets/admin/css/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="/assets/admin/css/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="/assets/admin/css/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="/assets/admin/css/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="/assets/admin/css/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="/assets/admin/css/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="/assets/admin/css/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="/assets/admin/css/forms.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="/assets/admin/css/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="/assets/admin/css/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="/assets/admin/css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <!-- end CSS-->
  
  <!-- Fonts -->
  <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
  <script src="/assets/admin/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body id="top">

  <!-- Begin of #container -->
  <div id="container">
  	<!-- Begin of #header -->
    <div id="header-surround">
        <header id="header">
    	
    	<!-- Place your logo here -->
		<img src="/assets/admin/img/logo.png" alt="Grape" class="logo">
		
		<!-- Divider between info-button and the toolbar-icons -->
		<div class="divider-header divider-vertical"></div>
		
		<!-- Info-Button -->
		<a href="javascript:void(0);" onclick="$('#info-dialog').dialog({ modal: true });"><span class="btn-info"></span></a>
		
			<!-- Modal Box Content -->
			<div id="info-dialog" title="About" style="display: none;">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div> <!--! end of #info-dialog -->

		<!-- Begin of #user-info -->
		<div id="user-info">
			<p>
				<span class="messages">Hello <a href="javascript:void(0);">Administrator</a> ( <a href="javascript:void(0);"><img src="/assets/admin/img/icons/packs/fugue/16x16/mail.png" alt="Messages"> 3 new messages</a> )</span>
				<a href="javascript:void(0)" class="toolbox-action button">Settings</a> <a href="javascript:void(0);" class="button red">Logout</a>
			</p>
		</div> <!--! end of #user-info -->
		
        </header>
    </div> <!--! end of #header -->
    
    <div class="fix-shadow-bottom-height"></div>
	
	<!-- Begin of Sidebar -->
    <aside id="sidebar">
    	
    	<!-- Search -->
    	<div id="search-bar">
			<form id="search-form" name="search-form" action="search.php" method="post">
				<input type="text" id="query" name="query" value="" autocomplete="off" placeholder="Search">
			</form>
		</div> <!--! end of #search-bar -->
		
		<!-- Begin of #login-details -->
		<section id="login-details">
    		<img class="img-left framed" src="/assets/admin/img/misc/avatar_small.png" alt="Hello Admin">
    		<h3>Logged in as</h3>
    		<h2><a class="user-button" href="javascript:void(0);">Administrator&nbsp;<span class="arrow-link-down"></span></a></h2>
    		<ul class="dropdown-username-menu">
    			<li><a href="#">Profile</a></li>
    			<li><a href="#">Settings</a></li>
    			<li><a href="#">Messages</a></li>
    			<li><a href="#">Logout</a></li>
    		</ul>
    		
    		<div class="clearfix"></div>
  		</section> <!--! end of #login-details -->
    	
    	<!-- Begin of Navigation -->
    	<nav id="nav">
	    	<ul class="menu collapsible shadow-bottom">
	    		<li>
	    			<a href="javascript:void(0);" class=""><img src="/assets/admin/img/icons/packs/fugue/16x16/arrow-000-medium.png">Restaurantes</a>
	    			<ul class="sub">
                        <li><a href="<?=base_url('admin/restaurantes')?>">Lista</a></li>
                        <li><a href="<?=base_url('admin/restaurantes/cadastro')?>">Cadastrar</a></li>
	    			</ul>
	    		</li>
	    		<li>
	    			<a href="javascript:void(0);"><img src="/assets/admin/img/icons/packs/fugue/16x16/newspaper.png">Another Submenu</a>
	    			<ul class="sub">
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    			</ul>
	    		</li>
	    	</ul>
    	</nav> <!--! end of #nav -->
    	
    </aside> <!--! end of #sidebar -->

      <div id="main" role="main">

          <!-- Begin of #main-content -->
          <div id="main-content">
              <div class="container_12">

                  <?=$content?>

                  <div class="clear height-fix"></div>

              </div>
          </div> <!--! end of #main-content -->
      </div> <!--! end of #main -->
 

  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/assets/admin/js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="/assets/admin/js/plugins.js"></script> <!-- lightweight wrapper for consolelog, optional -->
  <script defer src="/assets/admin/js/mylibs/jquery-ui-1.8.15.custom.min.js"></script> <!-- jQuery UI -->
  <script defer src="/assets/admin/js/mylibs/jquery.notifications.js"></script> <!-- Notifications  -->
  <script defer src="/assets/admin/js/mylibs/jquery.uniform.min.js"></script> <!-- Uniform (Look & Feel from forms) -->
  <script defer src="/assets/admin/js/mylibs/jquery.validate.min.js"></script> <!-- Validation from forms -->
  <script defer src="/assets/admin/js/mylibs/jquery.dataTables.min.js"></script> <!-- Tables -->
  <script defer src="/assets/admin/js/mylibs/jquery.tipsy.js"></script> <!-- Tooltips -->
  <script defer src="/assets/admin/js/mylibs/excanvas.js"></script> <!-- Charts -->
  <script defer src="/assets/admin/js/mylibs/jquery.visualize.js"></script> <!-- Charts -->
  <script defer src="/assets/admin/js/mylibs/jquery.slidernav.min.js"></script> <!-- Contact List -->
  <script defer src="/assets/admin/js/common.js"></script> <!-- Generic functions -->
  <script defer src="/assets/admin/js/script.js"></script> <!-- Generic scripts -->
  
  <script type="text/javascript">
	$().ready(function() {
		
		/*
		 * Form Validation
		 */
		$.validator.setDefaults({
			submitHandler: function(e) {
				$.jGrowl("Form was successfully submitted.", { theme: 'success' });
				$(e).parent().parent().fadeOut();
	//			v.resetForm();
				v2.resetForm();
				v3.resetForm();
			}
		});
		var v = $("#validate-form").validate();
	//	jQuery("#reset-validate-form").click(function() { v.resetForm(); $.jGrowl("Formulário resetado!", { theme: 'error' }); });
		
		var v2 = $("#write-message-form").validate();
		jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });
		
		var v3 = $("#create-folder-form").validate();
		jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });
		
		/*
		 * Datepicker
		 */
		$( "#datepicker" ).datepicker();
		
		/*
		 * DataTables
		 */
		$('#table-example').dataTable();
		
		/*
		 * Charts
		 */
		$('#graph-data').visualize({type: 'line', height: 250}).appendTo('#tab-line').trigger('visualizeRefresh');
		$('#graph-data').visualize({type: 'area', height: 250}).appendTo('#tab-area').trigger('visualizeRefresh');
		$('#graph-data').visualize({type: 'pie', height: 250}).appendTo('#tab-pie').trigger('visualizeRefresh');
		$('#graph-data').visualize({type: 'bar', height: 250}).appendTo('#tab-bar').trigger('visualizeRefresh');
		
		/*
		 * Tabs
		 */
		$("#specify-a-unique-tab-name").createTabs();
		$("#tab-graph").createTabs();
		
		/*
		 * Contact List
		 */
		$('#slider').sliderNav();
		
	});
  </script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
