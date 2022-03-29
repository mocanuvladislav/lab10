@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('students.create') }}" class="btn btn-dark">Add</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nume</th>
                    <th scope="col">Prenume</th>
                    <th scope="col">Grupa</th>
                    <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $student->nume }}</td>
                            <td>{{ $student->prenume }}</td>
                            <td>{{ $student->group->name }}</td>
                            <td class="text-end">
                                <a href="{{route('students.edit', ['student'=>$student->id])}}" 
                                class="btn btn-secondary">Edit</a>
                                <a class="btn btn-dark"
                                    data-bs-toggle="modal" data-bs-target="#deleteStudent">Delete</a>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteStudent" tabindex="-1" aria-labelledby="deleteStudentLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteStudentLabel">Delete student</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{route('students.destroy', ['student'=>$student->id])}}" method="post">
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
                            <td colspan="5">No students</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

