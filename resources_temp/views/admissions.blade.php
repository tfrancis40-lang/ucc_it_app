@extends('layouts.app')

@section('title', 'UCC Admissions')

@section('content')
    <!-- Admissions page container -->
    <div class="admissions-wrapper">
        <h1 class="admissions-title">Admissions</h1>

        <!-- Grid displaying different admission pathways -->
        <div class="admissions-grid">

            <!-- Standard entry requirements -->
            <div class="admission-card">
                <i class="bi bi-journal-text admission-icon"></i>
                <h4>Standard Entry</h4>
                <p>
                    The minimum standard for general admission against which all applications are assessed
                    requires passes in at least five (5) subjects at the GCE or CSEC level, including English
                    Language and Mathematics, at grades A, B, C or 1, 2, 3 respectively.
                </p>
            </div>

            <!-- Alternative entry pathway for applicants with fewer subjects -->
            <div class="admission-card">
                <i class="bi bi-pencil-square admission-icon"></i>
                <h4>4-Subject Pathway</h4>
                <p>
                    Candidates with four (4) CXC subjects may apply pending outstanding subjects or may
                    complete UCC replacement courses such as Core Mathematics, English for Academic
                    Purposes, and Fundamentals of Accounting.
                </p>
            </div>

            <!-- Entry option for experienced applicants without traditional qualifications -->
            <div class="admission-card">
                <i class="bi bi-briefcase-fill admission-icon"></i>
                <h4>Mature Entry</h4>
                <p>
                    Applicants must be at least 25 years old with a minimum of five (5) years of work
                    experience. Academic qualifications, résumé, job letter, and three professional
                    references are required.
                </p>
            </div>

        </div>

        <!-- External link to UCC application portal -->
        <div class="apply-wrapper">
            <a href="https://ucc.edu.jm/apply/undergraduate" target="_blank" class="apply-btn">
                Apply Now <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
@endsection