<?php

include_once('settings.php');

?>

<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.css">
    <link rel="stylesheet" href="css/application.css">
	<script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- endinject -->

</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>

                <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification">
                    notifications_none
                </div>

                <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox">
                    mail_outline
                </div>

                <div class="avatar-dropdown" id="icon">
                    <span><?php echo @$_SESSION['FULLNAME']; ?></span>
                    <img src="https://graph.facebook.com/<?php echo @$_SESSION['FBID']; ?>/picture">
                </div>

                <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                    for="icon">
                    <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                        <span class="material-icons mdl-list__item-avatar"></span>
                        <span>Luke</span>
                        <span class="mdl-list__item-sub-title">Luke@skywalker.com</span>
                    </span>
                    </li>
                    <li class="list__item--border-top"></li>
                    <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        My account
                    </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">check_box</i>
                        My tasks
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label background-color--primary">3 new</span>
                    </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">perm_contact_calendar</i>
                        My events
                    </span>
                    </li>
                    <li class="list__item--border-top"></li>
                    <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">settings</i>
                        Settings
                    </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Log out
                    </span>
                    </li>
                </ul>

                <button id="more"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                    for="more">
                    <li class="mdl-menu__item">
                        Settings
                    </li>
                    <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                        Support
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
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Cargar apunte nuevo</h2>
                    <div class="mdl-card__subtitle">Por favor introduzca los datos de su apunte</div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form name ="formularioContacto" class="form" method="get" action="#">
                        <div class="form__article">
                            <h3>Datos principales</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="titulo" placeholder="Ingrese el título de su apunte"/>
                                    <label class="mdl-textfield__label" for="titulo">Título</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-textfield mdl-cell--12-col mdl-js-textfield mdl-textfield--floating-label">
									<textarea class="mdl-textfield__input" type="text" rows="3" id="descripcion"></textarea>
									<label class="mdl-textfield__label" for="descripcion">Descripción del apunte</label>
								</div>
                            </div>
							
							<div class="mdl-grid">
								<div>
									<label>Ingrese los temas tratados en su apunte</label>
								</div>
                            </div>
							
							<div class="mdl-grid">
                                <div class="chips" id="cosos"></div>
								<div class="chips chips-initial"></div>
								<div class="chips chips-placeholder"></div>
                            </div>
							
							<div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="enlace" placeholder="Ingrese el enlace de descarga de su apunte"/>
                                    <label class="mdl-textfield__label" for="enlace">Enlace</label>
                                </div>
                            </div>
                        </div>


                        <div class="form__action">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="isInfoReliable">
                                <input type="checkbox" id="isInfoReliable" class="mdl-checkbox__input" required/>
                                <span class="mdl-checkbox__label">Acepto los términos del contrato de licencia</span>
                            </label>
                            <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="registrar_apunte();">
                                Enviar
                            </button>
                        </div>
                    </form>
                    <?php
                    echo '
                    <form name="formularioContacto" id="apunteEnviado" class="form" method="get" action="'.$url.'/index.php" onsubmit="registrar_apunte(); return false;">
                    </form>';
                    ?>
                </div>
            </div>
        </main>
    </div>

<?php
echo '
<script type="text/javascript">
/*var id_user = "'.$_SESSION["FBID"].'";*/
var id_user = "2222";
</script>
';
?>

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
<script type="text/javascript">
function registrar_apunte() {
    var titulo=$("#titulo").val();
    var descripcion=$("#descripcion").val();
    var enlace=$("#enlace").val();
    var autor=id_user;
    
    $.ajax({
        type: 'POST',
        url: 'ajax/guardar-apunte.php',
        data: 'titulo=' + titulo + '&descripcion=' + descripcion + '&enlace=' + enlace + '&autor=' + autor + '',
        success: function(h) {
            alert('Apunte agregado exitosamente. ¡Gracias!');
            document.getElementById("apunteEnviado").submit();
        },
        error: function() {
            alert('Error al realizar la peticion. Reintente nuevamente.');
        }
    });
}

$(function(){


var chip = {
    tag: 'chip content',
    image: '', //optional
    id: 1, //optional
  };

$('.chips').material_chip();
  $('.chips-placeholder').material_chip({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
  });
});

</script>
<!-- endinject -->

</body>
</html>
