    
        @extends('layouts.main')   


        @section('title','Página Inicial') 

        @section('content')

        <div id="search-container" class="col-md-12">
            <h2>Pesquise um evento</h2>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar evento">
            </form>
        </div>

        <div id="events-container" class="col-md-12">
        <h3>Próximos Eventos</h3>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">

            @foreach($events as $event)

            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">

                <div class="card-body">
                    <p class="card-date">29/11/2021</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participantes"> X Participantes</p>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
                
            </div>

            @endforeach
            
        </div>
            
        </div>


 


        @endsection
