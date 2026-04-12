@extends('layouts.app')

@section('title', 'UCC Social Media')

@section('content')
    <!-- Social media page container -->
    <div class="socials-wrapper">
        <h1 class="socials-title">Social Media</h1>

        <p class="socials-subtitle">
            Stay connected with updates, announcements, and student life across UCC’s social platforms.
        </p>

        <!-- Grid of social media cards -->
        <div class="socials-grid">

            <!-- Social media card (reused structure for each platform) -->
            <div class="social-card">
                <div class="social-icon-wrap facebook-wrap">
                    <i class="bi bi-facebook social-icon"></i>
                </div>
                <h3>Facebook</h3>
                <a href="https://www.facebook.com/uccjamaica" target="_blank" class="social-btn facebook-btn">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Open Facebook
                </a>
            </div>

            <div class="social-card">
                <div class="social-icon-wrap twitter-wrap">
                    <i class="bi bi-twitter social-icon"></i>
                </div>
                <h3>Twitter</h3>
                <a href="http://www.twitter.com/uccjamaica" target="_blank" class="social-btn twitter-btn">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Open Twitter
                </a>
            </div>

            <div class="social-card">
                <div class="social-icon-wrap instagram-wrap">
                    <i class="bi bi-instagram social-icon"></i>
                </div>
                <h3>Instagram</h3>
                <a href="https://www.instagram.com/uccjamaica" target="_blank" class="social-btn instagram-btn">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Open Instagram
                </a>
            </div>

        </div>
    </div>
@endsection