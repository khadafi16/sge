<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonts do gloolge -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
       

        <!-- css do bootsatrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- css da aplicaçao -->

         <link rel="stylesheet" type="text/css" href="/css/Styles.css">

        <script type="text/javascript"  src = "/js/scripts.js"></script>

    
        
    </head>
    <body class="antialiased">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">

       <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
          <img id="logo" src="/img/eventoLogo.jpg" alt="Logo">   
          </a> 

          <ul class="navbar-nav">
            <li class="nav-item">
             <a href="/" class="nav-link">Eventos</a>
                
            </li>

            <li class="nav-item">
             <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>

            <li class="nav-item">
             <a href="/" class="nav-link">Entrar</a>
                
            </li>

            <li class="nav-item">
             <a href="/" class="nav-link">Cadastrar</a>
                
            </li>
              
          </ul>
         
       </div>
            
        </nav>
    </header>

    <main>
      <div class="container-fluid">
        <div class="row">

          @if(session('msg'))

          <p class="msg">{{ session('msg') }}</p>

          @endif
          @yield('content')
        </div>
      </div>
      
    </main>

        
        
   
    <footer>
        Sistema Gestão Eventos &copy;2021
    </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     </body>
</html>
