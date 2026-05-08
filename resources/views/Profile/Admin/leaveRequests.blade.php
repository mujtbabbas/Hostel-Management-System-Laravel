@extends('layouts.app')

@section('main_content_sidebar')
    @php
        $admin = env('ADMIN');
    @endphp
    @if(Auth::user()->email == $admin)
        <h1 class="d-flex justify-content-center align-items-center p-3">Leave Requests</h1>
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <input type="search" class="form-control col-md-3 col-sm-12 m-3" style="padding-left: 20px;"
                               placeholder="Search Leave Requests ........." name="search_table" id="search_table"/>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Leave From</th>
                            <th scope="col">Leave To</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <p style="display: none;">{{ $len = 0 }}</p>
                        @foreach($data as $leave)
                            <p style="display: none;">{{ $len++ }}</p>
                            <tr>
                                <th scope="row">{{$len}}</th>
                                <td>{{$leave->user->first_name}} {{ $leave->user->last_name }}</td>
                                <td>{{$leave->user->email}}</td>
                                <td>{{ \Carbon\Carbon::parse($leave->startfrom)->format('d/m/Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($leave->startfrom)->addDays($leave->duration)->format('d/m/Y') }}</td>
                                <td>{{ $leave->reason }}</td>
                                <td>
                                    @if($leave->isApproved === null)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($leave->isApproved == 1)
                                        <span class="badge badge-success">Approved</span>
                                    @else
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    @if($leave->isApproved === null)
                                        <form action="/admin/approve-leave/{{$leave->id}}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                        </form>
                                        <form action="/admin/reject-leave/{{$leave->id}}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                        </form>
                                    @else
                                        <span class="text-muted">Processed</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection