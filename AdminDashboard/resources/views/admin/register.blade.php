@extends('layouts.master')

@section('title')
    Register Roles| Created by Obed
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title"> Register Roles </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Usertype</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td> - {{ $row->usertype }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">DELETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection