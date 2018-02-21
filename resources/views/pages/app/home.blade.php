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
              struttura
            @endslot
            {{$struttura->nome}}
          @endcomponent
        @endslot

      @endcomponent
      <hr>
    @endslot

  @endcomponent

@endsection
