@extends('layouts.main')

@section('title', 'HDC Events')
    
@section('content')

    <div id="search-container" class="col-md-12">
        <form action="/" method="GET">
            <h1>Pesquisar eventos</h1>
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">

                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">{{date('d/m/y', strtotime($event->date))}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">{{count($event->users)}} participantes</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
                    </div>

                </div>
            @endforeach
        </div>
        @if(count($events) == 0 && $search)
            <p>Não foi possível enconrar nenhum evento com {{$search}}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
@endsection