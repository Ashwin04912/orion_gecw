@include('layouts.admin_navigation')

<!-- Include DataTables Bootstrap 5 Dark Theme CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-dark.min.css">

<!-- Optional: Material Design Icons (if you're using them in the actions) -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.4.95/css/materialdesignicons.min.css">

@php
    function limitWords($text, $limit = 10)
    {
        $words = explode(' ', $text);
        if (count($words) > $limit) {
            $words = array_slice($words, 0, $limit);
            return implode(' ', $words) . '...';
        }
        return $text;
    }
@endphp

<div class="container-fluid p-5" style="width: 85%; position: relative;">
    <!-- Add New Button -->
    <div class="button-container pb-5">
        <a href="{{ route('execom.create') }}" class="btn btn-primary" style="background-color: brown;">Add New</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table id="example" class="table table-striped table-dark display" style="color: white;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Image</th>
                <th>Socials</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->title }}</td>
                    <td>
                        <img src="{{ asset('uploads/images/execoms/' . $data->image) }}" style="height: 100px" alt="">
                    </td>
                    <td>
                        {{ $data->github }}<br>
                        {{ $data->insta }}<br>
                        {{ $data->linkedin }}<br>
                    </td>
                    <td>
                        <div class="d-flex">
                            <form method="GET" action="{{ route('execom.edit', ['id' => $data->id]) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn p-2" title="Edit execom" onclick="return confirm('Confirm edit?')">
                                    <span class="mdi mdi-database-edit text-primary fs-5"></span>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('execom.delete', ['id' => $data->id]) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn p-2" title="Delete execom" onclick="return confirm('Confirm delete?')">
                                    <span class="mdi mdi-delete-empty-outline text-danger fs-5"></span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<!-- Custom dark styling to support Bootstrap Dark + DataTables -->
<style>
    body {
        background-color: #121212;
        color: #fff;
    }

    .dataTables_wrapper .dataTables_filter input,
    .dataTables_wrapper .dataTables_length select {
        background-color: #2a2a2a;
        color: #fff;
        border: 1px solid #555;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #fff !important;
        background-color: #2a2a2a !important;
        border: 1px solid #444;
        margin: 0 2px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #444 !important;
        color: #fff !important;
    }

    table.dataTable thead {
        background-color: #1f1f1f;
    }

    table.dataTable tbody tr:hover {
        background-color: #2e2e2e;
    }

    .alert-success {
        background-color: #1e3d1e;
        color: #adf7ad;
        border: 1px solid #37a837;
    }

    .button-container {
        position: relative;
        z-index: 1000;
    }
</style>
