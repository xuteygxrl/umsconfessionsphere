@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <form method="GET" action="{{ url()->current() }}">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="search" class="form-control" placeholder="Search by content or user ID" value="{{ request('search') }}">
                        </div>
                        <div class="col-md-6">
                            <select name="filter" class="form-select" onchange="toggleDateInputs(this.value)">
                                <option value="">Filter by</option>
                                <option value="latest" {{ request('filter') == 'latest' ? 'selected' : '' }}>Latest</option>
                                <option value="oldest" {{ request('filter') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                                <option value="single_date" {{ request('filter') == 'single_date' ? 'selected' : '' }}>Single Date</option>
                                <option value="date_range" {{ request('filter') == 'date_range' ? 'selected' : '' }}>Date Range</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2" id="date-inputs">
                        <div class="col-md-6" id="single-date-input" style="display: none;">
                            <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                        </div>
                        <div class="col-md-3" id="start-date-input" style="display: none;">
                            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-3" id="end-date-input" style="display: none;">
                            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Search</button>
                </form>
                <div class="col-12">
                    <div class="confession-form-container" style="width:100%">
                        <h2 class="text-start" style="color:white">Submit Your Confession</h2>
                        <form class="d-flex flex-column" action="{{ route('submit.confession') }}" method="POST">
                            @csrf <!-- Add CSRF token for security -->

                            <label for="confession" style="color:white">Your Confession:</label>
                            <textarea id="confession" name="confession" placeholder="Write your confession here..." required style="width:100%; height:10vh"></textarea>

                            <input type="hidden" name="confession_category_id" value="3">

                            <!-- Switch for commentSwitch -->
                            <div class="form-group">
                                <label for="commentSwitch" style="color:white">Allow Comments:</label>
                                <label class="switch">
                                    <input type="checkbox" name="commentSwitch" id="commentSwitch" value="1">
                                    <span class="slider"></span>
                                </label>
                            </div>

                            <button type="submit" class="submit-button align-self-end">Submit Confession</button>
                        </form>
                    </div>
                </div>
            </div>

            <h1 class="text-center py-4">
                <span style="" data-text="UMS">Confession Section</span>
            </h1>

            <div class="row">
                <div class="col-12">
                    <div class="confessionList">
                        @foreach ($confession as $item)
                            <div class="confession-item py-4">
                                <div class="confession-text">
                                    <p>{{ $item->content }}</p>
                                </div>
                                <div class="confession-footer">
                                    <span>{{ $item->updated_at }}</span>
                                    <div>
                                        <a href="{{ route('confession', ['confessionId' => $item->id]) }}" class="comment-button">
                                            <i class="fas fa-comment"></i>See More
                                        </a>
                                        <a class="icon report-icon" onclick="setReportConfessionId({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#Report">
                                            <i class="fas fa-flag"></i> Report
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    {{ $confession->links() }}
                    
                    <div class="modal fade" id="Report" tabindex="-1" aria-labelledby="ReportLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('report.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ReportLabel">Report Confession: <span id="confessionIdDisplay"></span></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="confessionId" id="reportConfessionId">
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select name="category" id="report-category" class="form-select" required>
                                                <option value="Spam">Spam</option>
                                                <option value="Inappropriate">Inappropriate</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reasoning" class="form-label">Reason</label>
                                            <textarea name="reasoning" id="reasoning" class="form-control" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit Report</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->any())
                var reportModal = new bootstrap.Modal(document.getElementById('Report'), {});
                reportModal.show();
            @endif
        });

        function setReportConfessionId(confessionId) {
            // Set the value of the hidden input field in the modal
            document.getElementById('reportConfessionId').value = confessionId;
            document.getElementById('confessionIdDisplay').textContent = confessionId;
        }
    </script>
    <script>
        function toggleDateInputs(filter) {
            document.getElementById('single-date-input').style.display = filter === 'single_date' ? 'block' : 'none';
            document.getElementById('start-date-input').style.display = filter === 'date_range' ? 'block' : 'none';
            document.getElementById('end-date-input').style.display = filter === 'date_range' ? 'block' : 'none';
        }
        toggleDateInputs("{{ request('filter') }}");
    </script>
@endsection
