@extends("base")

@section("title", $modelName)

@section("content")

    <table class="table">
        <thead class="thead-dark">
        <tr>
            @foreach($modelClass->getVisible() as $tableName)
                <td scope="col">{{$tableName}}</td>
            @endforeach
            <td scope="col">Редактировать</td>
            <td scope="col">Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($objects as $object)
            <tr>
                @foreach($modelClass->getVisible() as $tableName)
                    @if (is_iterable($object->{$tableName}))
                        <td scope="col">
                            <ul>
                        @foreach($object->{$tableName} as $manyToManyRel)
                            <li>{{$manyToManyRel}}</li>
                        @endforeach
                            </ul>
                        </td>
                    @else
                    <td scope="col">{{ $object->{$tableName} }}</td>
                    @endif
                @endforeach

                <td class="but" onclick="editInstance({{$object->id}})">🗒</td>
                <td class="but" onclick="deleteInstance({{$object->id}})">❌</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a type="button" class="btn btn-primary" href="{{$modelClass->getModelName()}}/form/">Create new</a>

@stop

