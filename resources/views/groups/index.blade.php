@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('groups.create') }}" class="btn btn-dark">Add</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nume</th>
                    <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($groups as $group)
                        <tr class="text-end">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $group->name }}</td>
                            <td class="text-end">
                                <a href="{{route('groups.edit', ['group'=>$group->id])}}" 
                                class="btn btn-secondary">Edit</a>
                                <a class="btn btn-dark"
                                    data-bs-toggle="modal" data-bs-target="#deleteGroup">Delete</a>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteGroup" tabindex="-1" aria-labelledby="deleteGroupLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteGroupLabel">Delete group</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{route('groups.destroy', ['group'=>$group->id])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-body">
                                                    <h4>Esti sigur?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="subbmit" class="btn btn-dark">Da</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nu</button>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No groups</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
    