@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
        @if(count($content)>0)
                @foreach($content as $c)
                <div id="cnt_{{$c->id}}" class="area"><?php echo '<p>'.html_entity_decode($c->content).'</p>'; ?></div>
                <a href="/edit_content/{{$c->id}}" class="btn btn-info"> <i class="fa fa-edit fa-lg"></i> Edit </a>
                @endforeach
            @else
                <p>No records found</p>
            @endif
        </div>
    </div>
</div>
@endsection
