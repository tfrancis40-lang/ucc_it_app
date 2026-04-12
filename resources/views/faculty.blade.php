@extends('layouts.app')

@section('title', 'Faculty Directory - UCC IT')

@section('content')
    <!-- Faculty directory container -->
    <div class="directory-wrapper">
        <h1 class="directory-title">IT Faculty</h1>

        <!-- Grid layout displaying faculty members -->
        <div class="staff-grid">

            <!-- Individual staff card (structure reused for each faculty member) -->
            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/p_ndajah.jpg') }}" alt="Peter Ndajah">
                </div>
                <div class="staff-info">
                    <h3>Dr. Peter Ndajah</h3>
                    <p>Dean</p>

                    <!-- Contact actions -->
                    <div class="contact-links">
                        <a href="tel:8763391279,4037">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:deanmathscitech@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/o_osbourne.jpg') }}" alt="Otis Osbourne">
                </div>
                <div class="staff-info">
                    <h3>Mr. Otis Osbourne</h3>
                    <p>Head of Department</p>
                    <div class="contact-links">
                        <a href="tel:8769063000,4116">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:ithod@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/no_photo.png') }}" alt="Sherida Levy">
                </div>
                <div class="staff-info">
                    <h3>Ms. Sherida Levy</h3>
                    <p>Programme Coordinator</p>
                    <div class="contact-links">
                        <a href="tel:8762361895,4020">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:itprogcoordinator@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/c_wilmot.jpg') }}" alt="Craig Wilmot">
                </div>
                <div class="staff-info">
                    <h3>Mr. Craig Wilmot</h3>
                    <p>Programme Officer</p>
                    <div class="contact-links">
                        <a href="tel:8762361895,3937">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:itprogofficer4@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/j_johnson.jpg') }}" alt="Jonathan Johnson">
                </div>
                <div class="staff-info">
                    <h3>Mr. Jonathan Johnson</h3>
                    <p>Lecturer</p>
                    <div class="contact-links">
                        <a href="tel:8762361895">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:mstlecturer@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/no_photo.png') }}" alt="Karen Wilson">
                </div>
                <div class="staff-info">
                    <h3>Ms. Karen Wilson</h3>
                    <p>Lecturer</p>
                    <div class="contact-links">
                        <a href="tel:8762361895">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:itlecturer2@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/no_photo.png') }}" alt="Neil Williams">
                </div>
                <div class="staff-info">
                    <h3>Mr. Neil Williams</h3>
                    <p>Lecturer</p>
                    <div class="contact-links">
                        <a href="tel:8762361895">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:itlecturer@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/s_rizvi.jpg') }}" alt="Sajjad Rizvi">
                </div>
                <div class="staff-info">
                    <h3>Dr. Sajjad Rizvi</h3>
                    <p>Professor</p>
                    <div class="contact-links">
                        <a href="tel:8762361895">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:srizvi@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/s_watson.jpg') }}" alt="Stefan Watson">
                </div>
                <div class="staff-info">
                    <h3>Mr. Stefan Watson</h3>
                    <p>Lecturer</p>
                    <div class="contact-links">
                        <a href="tel:8762361895">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:swatson@faculty.ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection