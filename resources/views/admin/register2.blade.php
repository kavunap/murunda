{{-- Extends layout --}}
@extends('admin.layout')



{{-- Content --}}
@section('content')
	<div class="col-md-12">
        <div class="authincation-content">
            <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row no-gutters">
                
                <div class="col-xl-6">
                    <div class="auth-form">
                        <h4 class="text-center mb-4">Basic Information</h4>
                        
                            <div class="form-group">
                                <label class="mb-1"><strong>First and Last names</strong></label>
                                <input type="text" class="form-control" placeholder="username" name="name" value="{{ old('name') }}">
                                @error('name')
                                <span style="color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong>Email</strong></label>
                                <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span style="color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Phone number</strong></label>
                                        <input type="number" class="form-control" placeholder="07822...." name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Prefix</strong></label>
                                        <select name="prefix" id="" class="form-control">
                                            <option disabled selected value> -- select an Prefix -- </option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss.">Miss</option>
                                        </select>
                                        @error('prefix')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>User role</strong></label>
                                        <select name="user_role" id="" class="form-control">
                                            <option disabled selected value> -- Select an Role -- </option>
                                            <option value="user">User</option>
                                            <option value="hr">Human resource</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                        @error('user_role')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Title</strong></label>
                                        <select name="title" id="" class="form-control">
                                            <option disabled selected value> -- Select an Title -- </option>
                                            <option value="nurse">Nurse</option>
                                            <option value="department_h">Head of department</option>
                                            <option value="doctor">Doctor</option>
                                        </select>
                                        @error('title')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                        @error('password')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password confirmation</strong></label>
                                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                        @error('password_confirmarion')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="auth-form">
                        <h4 class="text-center mb-4">More details
                        {{-- <form action="{!! url('/index'); !!}"> --}} <br><br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Picture</strong></label>
                                        <input type="file" class="form-control" name="image" accept=".jpeg, .png, .gif, .jpg, .tiff" value="{{ old('image') }}">
                                        @error('image')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Signature</strong></label>
                                        <input type="file" class="form-control" name="signature">
                                        @error('signature')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Stamp</strong></label>
                                        <input type="file" class="form-control" name="stamp">
                                        @error('stamp')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Department</strong></label>
                                        {!! Form::select('department_id', $departments, null, ['class' => 'form-control']) !!}
                                        @error('department_id')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong>Qualifications</strong></label>
                                <textarea name="qualifications" class="form-control" cols="30" rows="10" placeholder="Describe your qualification or about you in short">{{ old('qualifications') }}</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block" id="toastr-success-top-right">Sign Me Up</button>
                            </div>
                            
                        
                        <div class="new-account mt-3">
                            <p>Already have an account? <a class="text-primary" href="{!! url('/login'); !!}">Sign in</a></p>
                        </div>
                    </div>
                </div>
            
            </div>
            </form>
        </div>
    </div>
@endsection