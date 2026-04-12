@extends('layouts.app')

@section('title', 'Courses - UCC IT')

@section('content')
    <!-- Courses page container -->
    <div class="courses-wrapper">
        <h1 class="courses-title">Courses Offered</h1>

        <!-- Loop through all courses retrieved from the database -->
        @forelse ($courses as $course)
            <!-- Open the grid container when the first course is loaded -->
            @if ($loop->first)
                <div class="courses-grid">
            @endif

            <!-- Individual course card styled as a folder layout -->
            <div class="course-folder">
                <div class="course-tab">{{ $course->code }}</div>

                <div class="course-card">
                    <h3 class="course-title">{{ $course->name }}</h3>

                    <!-- Course details -->
                    <div class="course-meta-row">
                        <div class="meta-pill">
                            <span class="meta-label">Credits:</span>
                            <span class="meta-value">{{ $course->credits }}</span>
                        </div>

                        <div class="meta-pill">
                            <span class="meta-label">Pre-Requisites:</span>
                            <span class="meta-value">{{ $course->pre_reqs ?: 'None' }}</span>
                        </div>
                    </div>

                    <div class="course-description">
                        {{ $course->description }}
                    </div>
                </div>
            </div>

            <!-- Close the grid container after the last course -->
            @if ($loop->last)
                </div>
            @endif
        @empty
            <!-- Displayed when no course records exist in the database -->
            <div class="empty-card">
                <h3>No courses to display!</h3>
                <p>All courses will appear here once they've been added to our database.</p>
            </div>
        @endforelse
    </div>
@endsection