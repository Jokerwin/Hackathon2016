<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTNBook</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.css">
    <link rel="stylesheet" href="css/application.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- endinject -->

 </head>
  <body>
  


  <?php if ((@$_SESSION['FBID']) or (1==1)) { ?>      <!--  After user login  -->

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                        <i class="material-icons">search</i>
                    </label>

                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="search"/>
                        <label class="mdl-textfield__label" for="search">Enter your query...</label>
                    </div>
                </div>

                <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification">
                    notifications_none
                </div>

                <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
                    for="notification">
                    <li class="mdl-list__item">
                        You have 23 new notifications!
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">plus_one</i>
                        </span>
                        <span>You have 3 new orders.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">just now</span>
                    </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--secondary">
                            <i class="material-icons">error_outline</i>
                        </span>
                      <span>Database error</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">1 min</span>
                    </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">new_releases</i>
                        </span>
                      <span>The Death Star is built!</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">2 hours</span>
                    </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">mail_outline</i>
                        </span>
                      <span>You have 4 new mails.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">5 days</span>
                    </span>
                    </li>
                    <li class="mdl-list__item list__item--border-top">
                        <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
                    </li>
                </ul>

                <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox">
                    mail_outline
                </div>

                <div class="avatar-dropdown" id="icon">
                    <span><?php echo @$_SESSION['FULLNAME']; ?></span>
                    <img src="https://graph.facebook.com/<?php echo @$_SESSION['FBID']; ?>/picture">
                </div>

                <button id="more"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                    for="more">
                    <li class="mdl-menu__item">
                        Configuración
                    </li>
                    <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                        Soporte
                    </a>
                    <li class="mdl-menu__item">
                        <a href="logout.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </header>
    </div>
		
	
    <main class="mdl-layout__content">
	
		<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
			<div class="mdl-card mdl-shadow--2dp weather">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Actual</h2>

					<div class="mdl-layout-spacer"></div>
					<div class="mdl-card__subtitle-text">
						<i class="material-icons">room</i>
						UTN FRRE
					</div>
				</div>
				<div class="mdl-card__supporting-text mdl-card--expand">
					<p class="weather-temperature">Azure<sup>&deg;</sup></p>

					<p class="weather-description">
						Implementación de una base de datos de MySQL en Microsoft Azure
					</p>
				</div>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
			<div class="mdl-card mdl-shadow--2dp trending">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Lo más estudiado</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<ul class="mdl-list">
						<li class="mdl-list__item">
							<span class="mdl-list__item-primary-content list__item-text">Análisis de Sistemas</span>
							<span class="mdl-list__item-secondary-content">
								<i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
							</span>
							<span class="mdl-list__item-secondary-content trending__percent">1 %</span>
						</li>
						<li class="mdl-list__item list__item--border-top">
							<span class="mdl-list__item-primary-content list__item-text">SCRUM</span>
							<span class="mdl-list__item-secondary-content">
								<i class="material-icons trending__arrow-down" role="presentation">&#xE5C5</i>
							</span>
							<span class="mdl-list__item-secondary-content trending__percent">2 %</span>
						</li>
						<li class="mdl-list__item list__item--border-top">
							<span class="mdl-list__item-primary-content list__item-text ">SQL Server</span>
							<span class="mdl-list__item-secondary-content">
								<i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
							</span>
							<span class="mdl-list__item-secondary-content trending__percent">5 %</span>
						</li>
						<li class="mdl-list__item list__item--border-top">
							<span class="mdl-list__item-primary-content list__item-text">User eXperience</span>
							<span class="mdl-list__item-secondary-content">
								<i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
							</span>
							<span class="mdl-list__item-secondary-content trending__percent">18 %</span>
						</li>
						<li class="mdl-list__item list__item--border-top">
							<span class="mdl-list__item-primary-content">Smalltalk</span>
							<span class="mdl-list__item-secondary-content">
								<i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
							</span>
							<span class="mdl-list__item-secondary-content trending__percent">17 %</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--2-col-phone">
			<div class="mdl-card mdl-shadow--2dp cotoneaster">
				<div class="mdl-card__title mdl-card--expand">
					<h2 class="mdl-card__title-text">Programación Funcional</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<div>
						Sus orígenes provienen del Cálculo Lambda, una teoría matemática elaborada por
						Alonzo Church como apoyo a sus estudios sobre computabilidad.
					</div>
					<a href="https://en.wikipedia.org/wiki/Cotoneaster" target="_blank">Wikipedia</a>
				</div>
			</div>
		</div>
		
		<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp projects-table">
				<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Apunte</th>
					<th class="mdl-data-table__cell--non-numeric">Temas</th>
					<th class="mdl-data-table__cell--non-numeric">Autor</th>
					<th class="mdl-data-table__cell--non-numeric">Subido</th>
					<th class="mdl-data-table__cell--non-numeric">Calificación</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">Física I Teoría de Final</td>
					<td class="mdl-data-table__cell--non-numeric">
						<span class="label label--mini background-color--mint">Física I</span>
						<span class="label label--mini background-color--primary">Final</span>
						<span class="label label--mini background-color--cerulean">Teoría</span>
					</td>
					<td class="mdl-data-table__cell--non-numeric">Hectornauta</td>
					<td class="mdl-data-table__cell--non-numeric">1 de Julio</td>
					<td class="mdl-data-table__cell--non-numeric">
						<div id="task1" class="mdl-progress mdl-js-progress"></div>
						<div class="mdl-tooltip" for="task1">
							89%
						</div>
					</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">Smalltalk</td>
					<td class="mdl-data-table__cell--non-numeric">
						<span class="label label--mini background-color--baby-blue">Paradigmas de Programación</span>
					</td>
					<td class="mdl-data-table__cell--non-numeric">César Pizzi</td>
					<td class="mdl-data-table__cell--non-numeric">6 de septiembre</td>
					<td class="mdl-data-table__cell--non-numeric">
						<div id="task2" class="mdl-progress mdl-js-progress"></div>
						<div class="mdl-tooltip" for="task2">
							14%
						</div>
					</td>
				</tr>
				<tr class="is-selected">
					<td class="mdl-data-table__cell--non-numeric">Análisis de Sistemas</td>
					<td class="mdl-data-table__cell--non-numeric">
						<span class="label label--mini background-color--primary">Teoría</span>
						<span class="label label--mini background-color--baby-blue">Análisis de Sistemas</span>
					</td>
					<td class="mdl-data-table__cell--non-numeric">Paula Naranja</td>
					<td class="mdl-data-table__cell--non-numeric">24 de octubre</td>
					<td class="mdl-data-table__cell--non-numeric task-done">
						<i id="task3" class="material-icons">done</i>
					</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">Seguridad en Redes</td>
					<td class="mdl-data-table__cell--non-numeric">
						<span class="label label--mini background-color--secondary">Comunicaciones</span>
					</td>
					<td class="mdl-data-table__cell--non-numeric">Emanuel Huerga</td>
					<td class="mdl-data-table__cell--non-numeric">26 de agosto</td>
					<td class="mdl-data-table__cell--non-numeric">
						<div id="task4" class="mdl-progress mdl-js-progress"></div>
						<div class="mdl-tooltip" for="task4">
							31%
						</div>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
		
    </main>

    <?php } else { ?>     <!-- Before login --> 

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>

                <button id="more"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                    for="more">
                    <li class="mdl-menu__item">
                        Configuraciones
                    </li>
                    <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                        Soporte
                    </a>
                    <li class="mdl-menu__item">
                        F.A.Q.
                    </li>
                </ul>
            </div>
        </header>

        <div class="mdl-layout__drawer">
            <header>darkboard</header>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.html">
                    <i class="material-icons" role="presentation">dashboard</i>
                    Dashboard
                </a>
                <a class="mdl-navigation__link mdl-navigation__link--current" href="forms.html">
                    <i class="material-icons" role="presentation">person</i>
                    Account
                </a>

                <div class="mdl-layout-spacer"></div>
                <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                    <i class="material-icons" role="presentation">link</i>
                    GitHub
                </a>
            </nav>
        </div>

        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="logo">
              <img src="images/utnLogo100.png" alt="" style="width:100px;height:100px; margin:0 auto;" />
            </div>
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Iniciar sesión</h2>
                </div>

                <div class="mdl-card__supporting-text">
                    <div class="mdl-card__subtitle">UTNBook permite iniciar sesión con tu cuenta de Facebook.</div>
                    <br />
                    <a href="fbconfig.php" title="Iniciar sesión con Facebook">
                      <img src="images/fb_login.png" alt="FB Login" />
                    </a>
                </div>
            </div>
        </main>
    </div>



    <?php } ?>

    <!-- inject:js -->
    <script src="js/d3.js"></script>
    <script src="js/getmdl-select.min.js"></script>
    <script src="js/material.js"></script>
    <script src="js/nv.d3.js"></script>
    <script src="js/widgets/employer-form/employer-form.js"></script>
    <script src="js/widgets/line-chart/line-chart-nvd3.js"></script>
    <script src="js/widgets/pie-chart/pie-chart-nvd3.js"></script>
    <script src="js/widgets/table/table.js"></script>
    <script src="js/widgets/todo/todo.js"></script>
    <!-- endinject -->
  </body>
</html>
