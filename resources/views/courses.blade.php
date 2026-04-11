@extends('layouts.app')

@section('title', 'Courses - UCC IT')

@section('extra-css')
<style>
    .courses-wrapper {
        max-width: 1150px;
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
        gap: 28px 34px;
    }

    .course-folder {
        position: relative;
        padding-top: 18px;
    }

    .course-tab {
        position: absolute;
        top: 0;
        left: 0;
        background: #003366;
        color: #ffffff;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        padding: 10px 18px;
        border-radius: 16px 16px 0 0;
        min-width: 120px;
        text-align: center;
        box-shadow: 0 6px 14px rgba(0, 51, 102, 0.25);
        z-index: 2;
    }

    .course-card {
        background: #ffffff;
        border-radius: 0 24px 24px 24px;
        padding: 30px 26px 24px;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
        border-left: 3px solid #003366;
        text-align: left;
        min-height: 220px;
    }

    .course-title {
        margin: 12px 0 16px;
        font-size: 1.22rem;
        font-weight: 700;
        color: #1d1d1d;
        line-height: 1.35;
    }

    .course-meta-row {
        display: flex;
        gap: 10px;
        margin-bottom: 16px;
        flex-wrap: wrap;
    }

    .meta-pill {
        background: #eef4ff;
        border: 1px solid #dbe6ff;
        border-radius: 999px;
        padding: 8px 14px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .meta-label {
        font-size: 0.74rem;
        font-weight: 700;
        color: #5c6f9e;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .meta-value {
        font-size: 0.9rem;
        font-weight: 600;
        color: #003366;
    }

    .course-description {
        color: #555555;
        font-size: 0.96rem;
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

            <div class="course-folder">
                <div class="course-tab">{{ $course->code }}</div>

                <div class="course-card">
                    <h3 class="course-title">{{ $course->name }}</h3>

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