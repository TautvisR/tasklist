@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
            {{__("Pridėti meno uzduoti")}}
            @if($errors->any())
                <div class=" alert alert-info">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{ route("tasks.index")}}" class="btn btn-danger float-end">{{__("Atgal")}} </a>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("tasks.store") }}">
                @csrf
                <label>{{__("Pavadinimas")}} </label>
                <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name') }}">
                <button class="btn btn-success mt-2" type="submit">{{__("Sukurti")}} </button>
            </form>
        </div>
    </div>
@endsection

