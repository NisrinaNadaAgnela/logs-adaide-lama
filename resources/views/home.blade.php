@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Logs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                            Kamu berhasil Login !
                        </div>
                    @endif

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Instance</th>
                                <th>Identity</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        @foreach ($logs as $row)
                        <tbody>
                            <tr>
                                <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->instance }}</td>
                                <td>{{ $row->identity }}</td>
                                <td>{{ $row->date }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <!-- <button type="button" name="button" class="btn btn-success"> <a href="logs" style="color: white;">Masuk</a> </button> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
