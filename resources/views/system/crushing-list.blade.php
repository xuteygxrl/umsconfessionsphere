@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 search-container">
                    <input type="text" class="search-box" placeholder="Search...">
                    <button class="search-button">Search</button>
                </div>
                <div class="col-12">
                    <div class="confession-form-container" style="width:100%">
                        <h2 class="text-start" style="color:white">Submit Your Confession</h2>
                        <form class="d-flex flex-column" action="{{ route('submit.confession') }}" method="POST">
                            @csrf <!-- Add CSRF token for security -->

                            <label for="confession" style="color:white">Your Confession:</label>
                            <textarea id="confession" name="confession" placeholder="Write your confession here..." required style="width:100%; height:10vh"></textarea>

                            <input type="hidden" name="confession_category_id" value="2">

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
                        <div class="confession-item py-4">
                            <div class="confession-text">
                                I’m so tired of pretending everything is okay when it’s not. I just needed to get this off my chest anonymously.
                            </div>
                            <div class="confession-footer">
                                <span>Posted 2 hours ago</span>
                                <div>
                                    <span class="icon comment-icon" onclick="toggleCommentSection(1)"><i class="fas fa-comment"></i> Comment</span>
                                    <span class="icon report-icon" onclick="reportConfession(1)"><i class="fas fa-flag"></i> Report</span>
                                </div>
                            </div>
                        </div>

                        <!-- Confession Item 2 -->
                        <div class="confession-item">
                            <div class="confession-text">
                                I’ve been struggling a lot lately, and I just needed to share it with someone.
                            </div>
                            <div class="confession-footer">
                                <span>Posted 5 hours ago</span>
                                <div>
                                    <span class="icon comment-icon" onclick="toggleCommentSection(2)"><i class="fas fa-comment"></i> Comment</span>
                                    <span class="icon report-icon" onclick="reportConfession(2)"><i class="fas fa-flag"></i> Report</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
