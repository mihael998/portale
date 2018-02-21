<div class="card border-light mb-3">
    <div class="card-body">
        <h4 class="card-title">{{$struttura->nome}} </h4>
        <h6 class="text-muted card-subtitle mb-2">{{$struttura->comune}} </h6>
    </div>
    <div class="card-footer">
        <a href="{{url('strutture/'.$struttura->id) }}" class="card-link active">Vai alla struttura</a>
    </div>
</div>