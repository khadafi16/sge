    
        @extends('layouts.main')   


        @section('title','Página Inicial') 

        @section('content')

        <div id="search-container" class="col-md-12">
            <h2>Pesquise um evento</h2>
            <form action="/" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar evento">
            </form>
        </div>

        <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h3>Próximos Eventos</h3>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">

            @foreach($events as $event)

            <div class="cards col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">

                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y',strtotime($event->date))}}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participantes"> {{count($event->users)}} Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saiba Mais</a>
                </div>
                
            </div>

            @endforeach

            @if(count($events)==0 )
                <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
            @elseif(count($events)==0)
                 <p>Não há eventos disponíveis</p>
            @endif

            
        </div>
            
        </div>


 


        @endsection
