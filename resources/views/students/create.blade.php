@extends('layouts.guest')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            @include('partials.errors')
            <a href="{{ route('students.index') }}" class="btn btn-dark">Back</a>
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nume" class="form-label">Nume</label>
                    <input type="text" class="form-control" id="nume" name="nume">
                </div>
                <div class="mb-3">
                    <label for="prenume" class="form-label">Prenume</label>
                    <input type="text" class="form-control" id="prenume" name="prenume">
                </div>
                <div class="mb-3">
                    <label for="grupa" class="form-label">Gupa</label>
                    <select name="group_id" id="grupa" class="form-control">
                    @foreach ($groups as $key => $value)
                        <option class="form-control" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Save</button>
            </form>
        </div>
    </div>
@endsection
