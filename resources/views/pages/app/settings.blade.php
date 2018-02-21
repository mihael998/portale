@extends('masters.master')
@section('header')
  @include('partials.header')
@endsection
@section('body')
  @component('partials.body')

    @slot('sinistra')
      @php $dash=false;
      @endphp
      @include('partials.sidebar')
    @endslot

    @slot('destra')
      @component('partials.body.heading')
        @slot('titolo')
          @component('partials.body.titolo-heading')
            @slot('sottotitolo')
              {{$struttura->nome}}
            @endslot
            Impostazioni
          @endcomponent
        @endslot
      @endcomponent
      {{--  //sezione impostazioni generali  --}}
      <div id="accordion">
        @component('partials.body.dropdown-title')
          @slot('mt')
            mt-1
          @endslot
          @slot('titolo')
            Generali
          @endslot
          @slot('idData')
            collapseOne
          @endslot
          @slot('expandedTrue')
            true
          @endslot
          @slot('show')
            show
          @endslot
          @slot('collapsed')

          @endslot
          @include('partials.forms.general-settings')
        @endcomponent

        @component('partials.body.dropdown-title')
          @slot('mt')
            mt-4
          @endslot
          @slot('titolo')
            Camere
          @endslot
          @slot('idData')
            collapseTwo
          @endslot
          @slot('expandedTrue')
            false
          @endslot
          @slot('show')

          @endslot
          @slot('collapsed')
            collapsed
          @endslot
          
        @endcomponent
      </div>
    @endslot

  @endcomponent
@endsection
