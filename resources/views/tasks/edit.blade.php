@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
            {{__("Redagavimas")}}
            <a href="{{ route("tasks.index")}}" class="btn btn-danger float-end">{{__("Atgal")}} </a>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("tasks.update", $task->id) }}">
                @csrf
                @method("put")
                <label>{{__("Pavadinimas")}}</label>
                <input class="form-control" name="name" type="text" value="{{ $task->name }}">
                <label>{{__("Kategorija")}} </label>
                <select name="status" class="form-select">
                    @foreach($tasks as $task)
                        <option value="{{ $task->id }}">{{ $task->id }} </option>
                    @endforeach
                </select>
                <button class="btn btn-success mt-2" type="submit">{{__("Atnaujinti")}} </button>
            </form>
        </div>
    </div>
@endsection

