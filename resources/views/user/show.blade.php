@extends('admin.layout')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>User Role:</strong>
                            {{ $user->user_role }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $user->title }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $user->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Prefix:</strong>
                            {{ $user->prefix }}
                        </div>
                        <div class="form-group">
                            <strong>Qualifications:</strong>
                            {{ $user->qualifications }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $user->image }}
                        </div>
                        <div class="form-group">
                            <strong>Signature:</strong>
                            {{ $user->signature }}
                        </div>
                        <div class="form-group">
                            <strong>Stamp:</strong>
                            {{ $user->stamp }}
                        </div>
                        <div class="form-group">
                            <strong>Annually Leave Days:</strong>
                            {{ $user->annually_leave_days }}
                        </div>
                        <div class="form-group">
                            <strong>Department Id:</strong>
                            {{ $user->department_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
