@php
$_statoInput="";
$_statoPulsante="";
$_linkForm="strutture/".$struttura->id;
@endphp
@cannot('edit-property')
  @php
  $_statoInput="readonly";
  $_statoPulsante="disabled";
@endphp
@endcannot
<form method="POST" action="{{url($_linkForm)}}">
  {{ csrf_field() }}
  <div class="form-row">
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome Struttura:</label>
      <input type="text" name="nome" class="form-control" id="inputEmail4" value="{{$struttura->nome}}" {{$_statoInput}}>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" name="email" class="form-control" id="inputPassword4" value="{{$struttura->email}}" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Indirizzo</label>
    <input type="text" name="indirizzo" class="form-control" id="inputAddress" value="{{$struttura->indirizzo}}" {{$_statoInput}}>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Comune</label>
      <input type="text" name="comune" class="form-control" id="inputCity" value="{{$struttura->comune}}" {{$_statoInput}}>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select id="inputState" name="provincia" class="form-control"{{$_statoInput}}>
        <option selected>{{$struttura->provincia}}</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CAP</label>
      <input type="text" name="cap" class="form-control" id="inputZip" value="{{$struttura->cap}}" {{$_statoInput}}>
    </div>
  </div>
  <button type="submit" class="btn btn-primary {{$_statoPulsante}} float-right">Aggiorna Impostazioni</button>
</form>
