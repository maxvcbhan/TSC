@extends('app')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    {!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'method' => 'PATCH']) !!}

    <div class="form-group">
        {!! Form::label('name', 'name') !!}
        {!! Form::text('name', $profile->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tel', 'tel') !!}
        {!! Form::text('tel', $profile->tel, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop