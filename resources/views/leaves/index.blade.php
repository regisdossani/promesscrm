@extends('layouts.app')
{{-- @include('inc.styles') --}}
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Leaves</div>
                    <h1>
                        Leave
                        <small>@if($leave) Update @else Ajouter @endif</small>
                    </h1>
                    <div class="card-body">
                        <a href="{{ url('/leaves/create') }}" class="btn btn-success btn-sm" title="Add New leaf">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </a>

                        <form method="GET" action="{{ url('/leaves') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Document</th><th>Employee Id</th><th>Leave Type</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($leaves as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->document }}</td><td>{{ $item->employee_id }}</td><td>{{ $item->leave_type }}</td>
                                        <td>
                                            <a href="{{ url('/leaves/' . $item->id) }}" title="View leaf"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/leaves/' . $item->id . '/edit') }}" title="Edit leaf"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/leaves' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete leaf" onclick="return confirm(&quot;Confirmez-vous la suppression??&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $leaves->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
