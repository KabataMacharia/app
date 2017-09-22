<!-- create.blade.php -->
@extends('master')
@section('content')
    <style>
        .form-control { margin-bottom: 10px; }
    </style>
    {{--     --}}
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 well well-sm">
                <legend><i class="fa fa-plus" aria-hidden="true"></i> Generate Transaction</legend>
                {!! Form::open(['url' => 'mpesa', 'method' => 'post/']) !!}
                {!! Form::label('conversation_id', 'Conversation Id') !!}
                {!! Form::text('conversation_id',null,['class' => "form-control"]) !!}

                {!! Form::label('transaction_id', 'Transaction Id') !!}
                {!! Form::text('transaction_id',null,['class' => "form-control"]) !!}

                {!! Form::label('mpesa_transaction_id', 'Mpesa Transaction Id') !!}
                {!! Form::text('mpesa_transaction_id',null,['class' => "form-control"]) !!}

                {!! Form::label('amount', 'Amount') !!}
                {!! Form::text('amount',null,['class' => "form-control"]) !!}

                {!! Form::label('status', 'Status') !!}
                <br/>
                <label class="radio-inline">
                    {{ Form::radio('status', 1, true, ['class' => '']) }}
                    {!! Form::label('', 'Active',['class' => 'radio-inline']) !!}
                </label>
                <label class="radio-inline">
                    {{ Form::radio('status', 1, false, ['class' => '']) }}
                    {!! Form::label('', 'Inactive',['class' => 'radio-inline']) !!}
                </label>
                <br>

                {!! Form::label('created_date', 'Created Date') !!}
                {!! Form::date('created_date',null,['class' => "form-control"], Carbon::now()) !!}

                {!! Form::button('<i class="fa fa-save"></i> Save',['type' => 'submit','class' => "btn btn-primary btn-block"]) !!}

                {!! Form::close() !!}


                {{--<form method="post" class="form" role="form" action="{{url('mpesa')}}">
                    {{csrf_field()}}


                    <input class="form-control" name="amount" type="tel" />
                    <label>Status</label>
                    <label class="radio-inline">
                        <input type="radio" name="status" id="inlineCheckbox1" value="1" />
                        Active
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" id="inlineCheckbox2" value="0" />
                        Inactive
                    </label>
                    <br/>
                    <label for="">
                        </label>
                    <input class="form-control" name="" type="datetime-local" />
                    --}}{{--<div class="form-group">
                        <label for="conversation_id" class="">Conversation id:</label>
                        <input type="text" class="form-control form-control-lg" id="conversation_id" placeholder="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Transaction Id:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-lg" name="post" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12"></div>

                    </div>--}}{{--
                    <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save"></i> Save </button>


                </form>
                <label></label>
                <a class="btn btn-default btn-block" href="/mpesa/"><i class="fa fa-home"></i> Home</a>
--}}
            </div>
        </div>
    </div>
    {{--<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 well well-sm">
                <legend><i class="glyphicon glyphicon-globe"></i> Sign up!</legend>
                <form action="#" method="post" class="form" role="form">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>First Name</label>
                            <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                   required autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label>Second Name</label>
                            <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                        </div>
                    </div>
                    <label>Email</label>
                    <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                    <label>Confirm Email</label>
                    <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                    <label>Password</label>
                    <input class="form-control" name="password" placeholder="New Password" type="password" />
                    <label for="">
                        Created Date</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control">
                                <option value="Month">Month</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control">
                                <option value="Day">Day</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control">
                                <option value="Year">Year</option>
                            </select>
                        </div>
                    </div>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                        Female
                    </label>
                    <br />
                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign up</button>
                </form>
            </div>
        </div>
    </div>--}}
@endsection