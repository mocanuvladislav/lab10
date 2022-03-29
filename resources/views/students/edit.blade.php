@extends('layouts.guest')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <a href="{{ route('students.index') }}" class="btn btn-dark">Back</a>
            <form action="{{ route('students.update', ['student'=>$student->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nume" class="form-label">Nume</label>
                    <input type="text" class="form-control" id="nume" name="nume" value="{{ $student->nume }}">
                </div>
                <div class="mb-3">
                    <label for="prenume" class="form-label">Prenume</label>
                    <input type="text" class="form-control" id="prenume" name="prenume" value="{{ $student->prenume }}">
                </div>
                <div class="mb-3">
                    <label for="grupa" class="form-label">Gupa</label>
                    <select name="group_id" id="grupa" class="form-control">
                    @foreach ($groups as $key => $value)
                        @if($key === $student->group_id)
                            <option class="form-control" selected value="{{ $key }}">{{ $value }}</option>
                        @else
                            <option class="form-control" value="{{ $key }}">{{ $value }}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Edit</button>
            </form>
        </div>
    </div>
@endsection
