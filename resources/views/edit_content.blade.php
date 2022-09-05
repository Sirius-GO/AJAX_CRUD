@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            @if(count($content)>0)
                @foreach($content as $c)
                    <div style="background-color: #eee; padding: 20px;">
                        @include('inc.cms')
                    </div>
                @endforeach
            @else
                <p>No records found</p>
            @endif
        </div>
    </div>
</div>

@endsection
