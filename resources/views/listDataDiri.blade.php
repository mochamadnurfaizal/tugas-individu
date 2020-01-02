<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background: #00FFFF;
        }

        .container {
            background: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Data Diri</h1>
                </center>
            </div>
            <div class="card-body">
                <table id="list" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No KTP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listDataDiri as $list)
                        <tr>
                            <td>{{$list->no_ktp}}</td>
                            <td>{{$list->nama}}</td>
                            <td>{{$list->jenis_kelamin}}</td>
                            <td>{{$list->alamat}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#list').DataTable();
    });
</script>

</html>