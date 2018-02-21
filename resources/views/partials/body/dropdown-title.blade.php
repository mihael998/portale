<div class="clearfix">
  <div class="hr-title {{$mt}}">
    <h3 class="titolo"><a class="btn btn-link {{$collapsed}}" data-toggle="collapse" role="button" href="#{{$idData}}" aria-expanded="{{$expandedTrue}}" aria-controls="{{$idData}}">{{$titolo}} </a></h3>
  </div>
  <div id="{{$idData}}" class="collapse {{$show}}" aria-labelledby="headingOne" data-parent="#accordion">
    {{$slot}}
  </div>
</div>
