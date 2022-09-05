@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/create_content" class="btn btn-info btn-lg text-center"> Create Div </a>
    <div class="row">
        @if(count($content)>0)
                @foreach($content as $c)
                <div class="col-sm-12 col-md-{{$c->divsize}}">
                    <div id="cnt_{{$c->id}}" class="area" style="height: {{$c->divheight}}px;">
                        <?php echo '<p>'.html_entity_decode($c->content).'</p>'; ?>
                    </div>
                    <a href="/edit_content/{{$c->id}}" class="btn btn-info"> <i class="fa fa-edit fa-lg"></i> Edit Area {{$c->id}}</a>
                </div>
                @endforeach
            @else
                <p>No records found</p>
            @endif
    </div>
</div>
@endsection
