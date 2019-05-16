<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="{{asset('css/app.css')}}" rel = "stylesheet">
        <link href="{{asset('css/style.css')}}" rel = "stylesheet">
        <link href="{{asset('css/side-bar.css')}}" rel = "stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content = "{{csrf_token()}}">
        <title>Gerenciador de Tarefas</title>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>
    </head>
    <body>
        <div>
            <ul class="nav nav-pills nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropusuario" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                      Usuario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Visualizar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="droptarefa" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                      Tarefas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('tarefas.create')}}">Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('tarefas.index')}}">Visualizar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="droptipo" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                      Tipos de Tarefas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('tipos.create')}}">Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('tipos.index')}}">Visualizar</a>
                    </div>
                </li>

                <ul class="nav justify-content-end cadastro">
                    <li class="nav-item">
                        {{Auth::user()->name}}
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-outline-primary" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </ul>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @hasSection('conteudo')
            @yield('conteudo')
        @endif
        @hasSection('body')
            @yield('body')
        @endif
    </body>
</html>