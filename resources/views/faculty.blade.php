@extends('layouts.app')

@section('title', 'Faculty Directory - UCC IT')

@section('extra-css')
<style>
    .directory-wrapper {
        max-width: 1200px;
        margin: 30px auto;
    }

    .directory-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #111111;
        margin-bottom: 30px;
    }

    .staff-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .staff-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 28px 22px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9e9e9;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .staff-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
    }

    .staff-photo {
        width: 95px;
        height: 95px;
        border-radius: 50%;
        background: #e2e2e2;
        margin: 0 auto 18px;
        overflow: hidden;
        border: 3px solid #f2f2f2;
    }

    .staff-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    
    .staff-info h3 {
        margin: 0 0 6px;
        color: #003366;
        font-size: 1.2rem;
        font-weight: 600;
        line-height: 1.3;
    }

    .staff-info p {
        margin: 0 0 22px;
        color: #8a8a8a;
        font-size: 0.98rem;
        font-weight: 500;
    }

    .contact-links {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .contact-links a {
        flex: 1;
        min-width: 120px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 14px;
        border: 1px solid #e4e4e4;
        border-radius: 12px;
        background: #ffffff;
        color: #003366;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.95rem;
        transition: all 0.25s ease;
        box-sizing: border-box;
    }

    .contact-links a:hover {
        background: #003366;
        color: #ffffff;
        border-color: #003366;
    }

    .contact-links i {
        font-size: 1rem;
        line-height: 1;
    }

    @media (max-width: 992px) {
        .staff-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .staff-grid {
            grid-template-columns: 1fr;
        }

        .contact-links {
            flex-direction: column;
        }

        .contact-links a {
            width: 100%;
        }
    }
</style>
@endsection

@section('content')
    <div class="directory-wrapper">
        <h1 class="directory-title">IT Faculty Directory</h1>

        <div class="staff-grid">

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="{{ asset('images/p-ndajah.jpg') }}" alt="Dr. Peter Ndajah">
                </div>
                <div class="staff-info">
                    <h3>Dr. Peter Ndajah</h3>
                    <p>Dean</p>
                    <div class="contact-links">
                        <a href="tel:8763391279">
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
                    <img src="{{ asset('images/o-osbourne.jpg') }}" alt="Otis Osbourne">
                </div>
                <div class="staff-info">
                    <h3>Mr. Otis Osbourne</h3>
                    <p>Head of Department</p>
                    <div class="contact-links">
                        <a href="tel:876906-3000,4116">
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
                    <img src="https://via.placeholder.com/150" alt="Sherida Levy">
                </div>
                <div class="staff-info">
                    <h3>Ms. Sherida Levy</h3>
                    <p>Program Coordinator</p>
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
                    <img src="{{ asset('images/Craig.jpg') }}" alt="Craig Wilmot">
                </div>
                <div class="staff-info">
                    <h3>Mr. Craig Wilmot</h3>
                    <p>Program Officer</p>
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
                    <img src="https://via.placeholder.com/150" alt="Dr. Peter Ndajah">
                </div>
                <div class="staff-info">
                    <h3>Dr. Peter Ndajah</h3>
                    <p>Dean</p>
                    <div class="contact-links">
                        <a href="tel:8769063000">
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
                    <img src="{{ asset('images/Otis.jpg') }}" alt="Otis Osbourne">
                </div>
                <div class="staff-info">
                    <h3>Otis Osbourne</h3>
                    <p>Head of Department (HOD)</p>
                    <div class="contact-links">
                        <a href="tel:8769063000">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call</span>
                        </a>
                        <a href="mailto:oosbourne@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-photo">
                    <img src="https://via.placeholder.com/150" alt="Sherida Levy">
                </div>
                <div class="staff-info">
                    <h3>Sherida Levy</h3>
                    <p>Program Coordinator</p>
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
                    <img src="{{ asset('images/Craig.jpg') }}" alt="Craig Wilmot">
                </div>
                <div class="staff-info">
                    <h3>Craig Wilmot</h3>
                    <p>Program Officer</p>
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
                    <img src="{{ asset('images/Support.jpg') }}" alt="IS&T Officer">
                </div>
                <div class="staff-info">
                    <h3>IS&amp;T Officer</h3>
                    <p>IT Systems Administrator</p>
                    <div class="contact-links">
                        <a href="mailto:isthelpdesk@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email 1</span>
                        </a>
                        <a href="mailto:smssupport@ucc.edu.jm">
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email 2</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection