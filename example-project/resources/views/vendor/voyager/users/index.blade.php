@extends('voyager::master')

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                    <div class="panel-actions">
                        <a href="{{ route('users.print-pdf') }}" class="btn btn-primary">Print PDF</a>
                    </div>
                </div>
                <div class="panel-body">
                    @include('voyager::users.browse')
                </div>
            </div>
        </div>
    </div>
</div>
@stop
