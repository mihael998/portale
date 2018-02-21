@extends('masters.master')

@section('header')
  @include('partials.header')
@endsection

@section('body')
  @component('partials.body')

    @slot('sinistra')
      @php
      $dash=true;
      @endphp
      @include('partials.sidebar')
    @endslot

    @slot('destra')
      {{-- inizio heading pagina --}}
      @component('partials.body.heading')
        @slot('titolo')
          @component('partials.body.titolo-heading')
            @slot('sottotitolo')
              bacheca
            @endslot Strutture
          @endcomponent
        @endslot
        <div class="icon">
          <a href="#" style="padding-top:0px;padding-bottom:0px;">
            <i class="fa fa-plus-circle align-text-bottom"></i>
          </a>
        </div>
      @endcomponent

      <hr>
      <!--Sezione card con strutture-->
      <div class="row">
        @foreach ($strutture as $struttura)
          <div class="col-md-4">
            @include('partials.body.property-card')
          </div>
        @endforeach
      </div>
    @endslot
  @endcomponent
@endsection
