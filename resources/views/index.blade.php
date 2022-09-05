@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @if(count($content)>0)
                @foreach($content as $c)
                <div class="col-sm-12 col-md-{{$c->divsize}}">
                    <div id="cnt_{{$c->id}}" class="area" style="height: {{$c->divheight}}px;">
                        <?php echo '<p>'.html_entity_decode($c->content).'</p>'; ?>
                    </div>
                </div>
                @endforeach
            @else
                <p>No records found</p>
            @endif
    </div>
</div>
@endsection
