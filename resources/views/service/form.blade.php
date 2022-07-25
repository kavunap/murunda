<div class="box box-info padding-1 col-sm-8">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('days') }}
            {{ Form::number('days', $service->days, ['class' => 'form-control' . ($errors->has('days') ? ' is-invalid' : ''), 'placeholder' => 'Days', 'max' => $annually_leave_days]) }}
            {!! $errors->first('days', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_date') }}
            {{ Form::date('start_date', $service->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date', 'min' => date('18-10-2021')]) }}
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</p>') !!}
        </div> <br>
        <select class="form-select" id="example-select-floating" name="request_type" aria-label="Floating label select example" onchange="yesnoCheck(this);">
            <option selected>What are you requesting?</option>
            <option value="Leave/permission">Leave/Permission </option>
            <option value="Mission Order">Mission</option>
          </select><br>
        <div id="mission" style="display: none">
            <div class="form-group">
                {{ Form::label('purpose') }}
                {{ Form::text('purpose', $service->purpose, ['class' => 'form-control' . ($errors->has('purpose') ? ' is-invalid' : ''), 'placeholder' => 'Purpose']) }}
                {!! $errors->first('purpose', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('results') }}
                {{ Form::text('results', $service->results, ['class' => 'form-control' . ($errors->has('results') ? ' is-invalid' : ''), 'placeholder' => 'Results']) }}
                {!! $errors->first('results', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('destination') }}
                {{ Form::text('destination', $service->destination, ['class' => 'form-control' . ($errors->has('destination') ? ' is-invalid' : ''), 'placeholder' => 'Destination']) }}
                {!! $errors->first('destination', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('means_of_transport') }}
                {{ Form::text('m_transport', $service->m_transport, ['class' => 'form-control' . ($errors->has('m_transport') ? ' is-invalid' : ''), 'placeholder' => 'M Transport']) }}
                {!! $errors->first('m_transport', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('daily_amount') }}
                {{ Form::number('daily_amount', $service->daily_amount, ['class' => 'form-control' . ($errors->has('daily_amount') ? ' is-invalid' : ''), 'placeholder' => 'Daily Amount']) }}
                {!! $errors->first('daily_amount', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        
        <div class="form-group">
            {{ Form::label('successor') }}
            {{ Form::text('successor', $service->successor, ['class' => 'form-control' . ($errors->has('successor') ? ' is-invalid' : ''), 'placeholder' => 'Successor']) }}
            {!! $errors->first('successor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        @if(auth()->user()->user_role=="admin")
        <div class="form-group">
            {{ Form::label('status') }} <br>
            {{ Form::select('status', array('Pending' => 'Pending', 'approved' => 'Approved','rejected'=>'Rejected'), ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        @endif
        <div class="form-group">
            {{ Form::hidden('user_id', auth()->user()->id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

<script>
    function yesnoCheck(that) {
        if (that.value == "mission") {
      alert("You said you are requesing mission, please enter more details");
            document.getElementById("mission").style.display = "block";
        } else {
            document.getElementById("mission").style.display = "none";
        }
    }
  </script>