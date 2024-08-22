<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRUD com Bootstrap</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
            .btn-light {
                background-color: #BBB;
                color: #FFFFFF;
                border-color: #BBB;
            }
            .btn-light:hover {
                background-color: #999;
                color: #FFFFFF;
                border-color: #999;
            }
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class="fa-solid fa-home"></i> CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-users"></i> Clientes
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?php echo BASEURL; ?>customers">
                                        <i class="fa-solid fa-users"></i> Gerenciar Clientes
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">
                                        <i class="fa-solid fa-user-plus"></i>Novo Cliente
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-users"></i> Tema
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?php echo BASEURL; ?>customers">
                                        <i class="fa-solid fa-users"></i> Gerenciar Clientes
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">
                                        <i class="fa-solid fa-user-plus"></i>Novo Cliente
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container">