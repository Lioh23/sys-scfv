@extends('layout.layout_default')

@section('content')
  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      Link with href
    </a>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
    </div>
  </div>
@endsection

@section('name')
    
@endsection