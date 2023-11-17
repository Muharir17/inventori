<style>
/* CSS for table */
.table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

/* Make table look beautiful */
.table {
  background-color: #f8f9fa;
  color: #212529;
}

.table th {
  background-color: #343a40;
  color: #fff;
}

.table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>NO.</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($user as $u)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
