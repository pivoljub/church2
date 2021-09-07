@section('header')
    <header>
        <div class="row justify-content-center mt-3 mx-0">
            <div class="col-8">
                <p class="ml-5"><strong >Добро пожаловать Гость!</strong>
                    <strong><a class="ml-2" href="<?php echo e(url('/')); ?>">Войти</a></strong></p>
            </div>
        </div>
        <img src="<?php echo e(asset('images/header3.png')); ?>" alt="logo" width="100%">


        <nav class="navbar navbar-expand-md navbar-dark justify-content-center">
            <button class="navbar-toggler  mr-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                <ul class="navbar-nav m-auto" id="navbar">
                    <li class="nav-item active">
                        <strong><a class="nav-link" href="<?php echo e(url('/')); ?>">ГЛАВНАЯ</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">О НАС</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link  text-white" href="<?php echo e(url('/')); ?>">РАСПИСАНИЕ БОГОСЛУЖЕНИЙ</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">ПУБЛИКАЦИИ</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">СТАТЬИ</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">ФОТО ГАЛЕРЕЯ</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link text-white" href="<?php echo e(url('/')); ?>">СВЯЗАТЬСЯ С НАМИ</a></strong>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
