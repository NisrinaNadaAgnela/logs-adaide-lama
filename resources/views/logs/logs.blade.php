<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="text/css" href="{{ asset('/css/bootstrap-theme.min.css') }}">
    <title>Laravel</title>
</head>
<div>
    <body>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Instance</th>
                    <th>Identity</th>
                    <th>Date</th>
                </tr>
            </thead>
            @php $no = 1 @endphp
            @foreach ($logs as $row)
            <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->instance }}</td>
                    <td>{{ $row->identity }}</td>
                    <td>{{ $row->date }}</td>
                </tr>
            </tbody>
            @endforeach
    </body>
</div>
</html>