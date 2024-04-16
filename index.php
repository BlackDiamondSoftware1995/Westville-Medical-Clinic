<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Westville Medical Clinic</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="description" content="Westville Medical Clinic offers top-tier medical services in Westville, Nova Scotia. Your health is our priority.">
<style>
    .hero {
        background: url('https://html.creativegigstf.com/images/home/2.jpg') no-repeat center center/cover;
        color: white;
        padding: 100px 0;
    }
    .feature {
        background: #f8f9fa;
        padding: 40px 0;
    }
    .cta {
        background: #0056b3;
        color: white;
        padding: 50px 20px;
        text-align: center;
    }
</style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="hero text-center">
    <h1>Welcome to Westville Medical Clinic</h1>
    <p>Your health is our top priority, offering a range of healthcare services right in the heart of Nova Scotia.</p>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>About Westville Medical Clinic</h2>
            <p>Located at 1886 N Main St, Westville, NS, our clinic is a collaborative healthcare facility, integrating advanced diagnostics with expert medical staff to cater to your healthcare needs.</p>
        </div>
        <div class="col-md-6">
            <img src="https://via.placeholder.com/500x300" alt="Clinic Interior" class="img-fluid">
        </div>
    </div>
</div>

<div class="feature text-center">
    <div class="container">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>General Medicine</h3>
                <p>Comprehensive medical care for adults and children, managing acute and chronic conditions effectively.</p>
            </div>
            <div class="col-md-4">
                <h3>Diagnostics</h3>
                <p>State-of-the-art diagnostic services including X-rays, MRIs, and comprehensive laboratory tests.</p>
            </div>
            <div class="col-md-4">
                <h3>Insert Service</h3>
                <p>Access to a wide range of medical specialists including cardiology, orthopedics, and women's health.</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2>Testimonials</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="lead">"The care and attention I received at Westville Medical Clinic were beyond excellent. Highly recommend this clinic!"</p>
                        <footer class="blockquote-footer">John Doe</footer>
                    </div>
                    <div class="carousel-item">
                        <p class="lead">"A professional team that genuinely cares about their patients. Thank you for your dedication!"</p>
                        <footer class="blockquote-footer">Jane Smith</footer>
                    </div>
                    <!-- Add more testimonials as needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="cta">
    <h2>Ready to Book an Appointment?</h2>
    <p>Call us at 902-123-4567 or visit our website to book online.</p>
    <a href="contact.php" class="btn btn-light">Book Now</a>
</div>

<footer class="text-center py-4 bg-dark text-light">
    © 2024 Westville Medical Clinic. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

