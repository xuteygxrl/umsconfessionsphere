@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Reports</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Category</th>
                        <th>Reason</th>
                        <th>Confession Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($report as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->user ? $item->user->id : 'N/A' }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->reasoning }}</td>
                            <td style="word-wrap: break-word; max-width: 300px;">
                                {{ $item->confession ? $item->confession->content : 'Confession Deleted' }}
                            </td>                        
                            <td>
                                @if ($item->actionTake == 1)
                                    <span class="badge bg-success">Resolved</span>
                                @else
                                    <form method="POST" action="{{ route('admin.resolveReport', $item->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-primary">Resolve</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $report->links() }}
        </div>
    </div>
</div>
@endsection
