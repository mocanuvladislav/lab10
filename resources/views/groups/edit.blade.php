@extends('layouts.guest')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <a href="{{ route('groups.index') }}" class="btn btn-dark">Back</a>
            <form action="{{ route('groups.update', ['group'=>$group->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="numeGrupa" class="form-label">Nume grupa</label>
                    <input type="text" class="form-control" id="numeGrupa" name="name" value="{{ $group->name }}">
                </div>
                <button type="submit" class="btn btn-secondary">Edit</button>
            </form>
        </div>
    </div>
@endsection
