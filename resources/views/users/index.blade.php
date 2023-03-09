@extends("layouts.app")
@section("content")
    <div class="container">
        <table class="table">
            <thead>
                <th>Vardas</th>
                <th>Email</th>
                <th>Turimos uzduotys ir statusas</th>
                <th>Paskirti uzduoti</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{ $user->email }}</td>
                        <td>@foreach($user->tasks as $task)
                                {{ $task->name }}  Statusas: {{ $task->status }}<br>
                        @endforeach</td>
                        <td>
                        <form method="post" action="{{ route("users.addTask", $user->id) }}">
                            @csrf
                            <select class="form-select" name="task_id">
                                @foreach($tasks as $task)
                                    <option value="{{ $task->id }}"> {{ $task->name }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-dark mt-2">Priskirti</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
