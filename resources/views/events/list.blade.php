@include('layouts.admin_navigation')

<!-- DataTables & Dark Bootstrap -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-dark.min.css">
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
    <div class="button-container pb-5">
        <a href="{{ route('events.create') }}" class="btn btn-primary" style="background-color: brown;">Add New</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table id="example" class="table table-striped table-dark display">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->title }}</td>
                    <td class="truncate">{{ limitWords($data->description) }}</td>
                    <td>{{ $data->date }}</td>
                    <td><img src="{{ asset('uploads/images/events/' . $data->image1) }}" style="height: 100px" alt=""></td>
                    <td><img src="{{ asset('uploads/images/events/' . $data->image2) }}" style="height: 100px" alt=""></td>
                    <td><img src="{{ asset('uploads/images/events/' . $data->image3) }}" style="height: 100px" alt=""></td>
                    <td>
                        <div class="col d-flex">
                            <form method="POST" action="{{ route('events.edit', ['id' => $data->id]) }}" style="display:inline">
                                {{ method_field('POST') }}
                                @csrf
                                <button type="submit" class="btn p-2" title="Edit event" onclick="return confirm('Confirm edit?')">
                                    <span class="mdi mdi-database-edit text-primary fs-5"></span>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('events.delete', ['id' => $data->id]) }}" style="display:inline">
                                {{ method_field('POST') }}
                                @csrf
                                <button type="submit" class="btn p-2" title="Delete event" onclick="return confirm('Confirm delete?')">
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

<!-- jQuery & DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

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

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn span {
        margin-left: 5px;
    }

    .truncate {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
