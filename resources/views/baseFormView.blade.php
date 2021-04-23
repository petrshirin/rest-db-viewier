@extends("base")

@section("content")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    <h2>Create New</h2>
    <div class="base-form">
    @if ($obj->id)
        <form action='/{{$obj->getModelName()}}/form/{{$obj->id}}' method='post'>
    @else
        <form action="/{{$obj->getModelName()}}/form/" method="post">
    @endif
            {!! $modelForm->asDiv() !!}

            <div class="button-control-panel">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            @csrf
        </form>
        <div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

@stop
