<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_role') }}
            {{ Form::select('user_role', array('user' => 'User', 'admin' => 'Admin'), null, ['class' => 'form-control' . ($errors->has('user_role') ? ' is-invalid' : ''), 'placeholder' => 'User Role']) }}
            {!! $errors->first('user_role', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::select('title', array('nurse' => 'Nurse', 'doctor' => 'Doctor', 'HD'=>'Head of Department'), ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::number('phone', $user->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prefix') }}
            {{ Form::select('prefix', array('Mr.' => 'Mr.', 'Dr.' => 'Dr.', 'Miss.' => 'Miss.', 'Mrs.' => 'Mrs.'), ['class' => 'form-control' . ($errors->has('prefix') ? ' is-invalid' : ''), 'placeholder' => 'Prefix']) }}
            {!! $errors->first('prefix', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('image') }} <br>
            {{ Form::file('image', old('image'), ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('signature') }} <br>
            {{ Form::file('signature', old('image'), ['class' => 'form-control' . ($errors->has('signature') ? ' is-invalid' : ''), 'placeholder' => 'Signature']) }}
            {!! $errors->first('signature', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stamp') }} <br>
            {{ Form::file('stamp', old('stamp'), ['class' => 'form-control' . ($errors->has('stamp') ? ' is-invalid' : ''), 'placeholder' => 'Stamp']) }}
            {!! $errors->first('stamp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('annually_leave_days') }}
            {{ Form::number('annually_leave_days', $user->annually_leave_days, ['class' => 'form-control' . ($errors->has('annually_leave_days') ? ' is-invalid' : ''), 'placeholder' => 'Annually Leave Days']) }}
            {!! $errors->first('annually_leave_days', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('department_id') }}
            {{ Form::select('department_id', $departments, null, ['class' => 'form-control' . ($errors->has('department_id') ? ' is-invalid' : ''), 'placeholder' => 'Choose department']) }}
            {!! $errors->first('department_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('qualifications') }}
            {{ Form::textarea('qualifications', $user->qualifications, ['class' => 'form-control' . ($errors->has('qualifications') ? ' is-invalid' : ''), 'placeholder' => 'Qualifications']) }}
            {!! $errors->first('qualifications', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>