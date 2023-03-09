@extends("layouts.app")
@section("content")
    <div class="container">
        <table class="table">
            <a href="{{ route("tasks.create") }}" class="btn btn-info float-end mb-2">Prideti nauja uzduoti</a>
            <thead>
                <th>Pavadinimas</th>
                <th>Statusas</th>
                <th>Priskirti vartototjai</th>
                <th>Veiksmai</th>
            </thead>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->status }}</td>
                    <td>@foreach($task->users as $user)
                            {{ $user->name }}
                    @endforeach</td>
                    <td><a href="{{ route("tasks.edit", $task->id) }}" class="btn btn-outline-warning">{{__("Redaguoti")}} </a>
                        <form method="post" action="{{ route("tasks.destroy", $task->id)}}">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-outline-danger mt-2">{{__("Istrinti")}} </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
