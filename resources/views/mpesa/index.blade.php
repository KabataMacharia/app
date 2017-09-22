<!-- index.blade.php -->
@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 well well-sm">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Conversation Id</th>
                        <th>Transaction Id</th>
                        <th>Mpesa Transaction Id</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cruds as $post)

                        <tr>
                            <td>{{$post['id']}}</td>

                            <td>{{$post['conversation_id']}}</td>

                            <td>{{$post['transaction_id']}}</td>

                            <td>{{$post['mpesa_transaction_id']}}</td>

                            <td>{{$post['amount']}}</td>

                            <td>{{$post['status']}}</td>

                            <td>{{$post['created_date']}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>


                    </tfoot>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-primary pull-right" href="/mpesa/create/"><i class="fa fa-plus"></i> New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection