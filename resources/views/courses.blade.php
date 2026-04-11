@extends('layouts.app')

@section('title', 'Courses - UCC IT')

@section('extra-css')
<style>
    .courses-wrapper {
        max-width: 1100px;
        margin: 30px auto;
    }

    .courses-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #111111;
        margin-bottom: 30px;
    }

    .courses-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .course-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 24px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9e9e9;
        text-align: left;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .course-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
    }

    .course-header {
        margin-bottom: 16px;
    }

    .course-title {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
        color: #003366;
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
        line-height: 1.4;
    }

    .course-code {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: 700;
        color: #003366;
        background: #eef4ff;
        padding: 6px 12px;
        border-radius: 999px;
        white-space: nowrap;
    }

    .course-meta-row {
        display: flex;
        gap: 10px;
        margin-bottom: 16px;
        flex-wrap: wrap;
    }

    .meta-pill {
        background: #f4f6fa;
        border: 1px solid #e6e6e6;
        border-radius: 999px;
        padding: 8px 14px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .meta-label {
        font-size: 0.75rem;
        font-weight: 700;
        color: #7a7a7a;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .meta-value {
        font-size: 0.9rem;
        font-weight: 600;
        color: #1f1f1f;
    }

    .course-description {
        color: #555555;
        font-size: 0.97rem;
        line-height: 1.6;
    }

    .empty-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 28px 24px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9e9e9;
        text-align: center;
        max-width: 600px;
    }

    .empty-card h3 {
        margin: 0 0 10px;
        color: #003366;
        font-size: 1.3rem;
    }

    .empty-card p {
        margin: 0;
        color: #666666;
        line-height: 1.5;
    }

    @media (max-width: 900px) {
        .courses-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
    <div class="courses-wrapper">
        <h1 class="courses-title">Courses Offered</h1>

        @forelse ($courses as $course)
            @if ($loop->first)
                <div class="courses-grid">
            @endif

            <div class="course-card">
                <div class="course-header">
                    <h3 class="course-title">
                        <span class="course-code">{{ $course->code }}</span>
                        {{ $course->name }}
                    </h3>
                </div>

                <div class="course-meta-row">
                    <div class="meta-pill">
                        <span class="meta-label">Credits</span>
                        <span class="meta-value">{{ $course->credits }}</span>
                    </div>

                    <div class="meta-pill">
                        <span class="meta-label">Pre-reqs</span>
                        <span class="meta-value">{{ $course->pre_reqs ?: 'None' }}</span>
                    </div>
                </div>

                <div class="course-description">
                    {{ $course->description }}
                </div>
            </div>

            @if ($loop->last)
                </div>
            @endif
        @empty
            <div class="empty-card">
                <h3>No courses added yet</h3>
                <p>The courses will appear here once they are inserted into the database.</p>
            </div>
        @endforelse
    </div>
@endsection