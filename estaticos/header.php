<?php
# Header section
require_once('estaticos/header.php');
$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$claseEstaticaGlobal = 'active open';
$claseEstatica = 'active';


?>

<script>
    alert('<?php echo $enlace_actual?>');
</script>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="../index.html" class="app-brand-link">
              <span class="app-brand-logo demo">

              </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Hugo Learning</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php if (str_contains($enlace_actual, 'index')) {echo $claseEstatica;}?>>">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Inicio</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Capacitaciones</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chip"></i>
                <div data-i18n="Account Settings">RH</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Nominas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Relaciones laborales</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Entrenamiento</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?php if (str_contains($enlace_actual, 'trafico')) {echo $claseEstaticaGlobal;}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Logistica</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if (str_contains($enlace_actual, 'trafico')) {echo $claseEstatica;}?>">
                    <a href="capacitacion.php?trafico" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Trafico</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Planeadores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link">
                        <div data-i18n="Basic">Almacen</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">GPS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Ingeniero de GPS</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Practicante de GPS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Misc">Calidad</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Misc">Ingenieria</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy-alt"></i>
                <div data-i18n="Misc">IT</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Perfil</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="../cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cartilla</div>
            </a>
        </li>

    </ul>
</aside>