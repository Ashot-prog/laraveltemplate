@extends('layout/index')
<div class="banner-area">
    <div class="banner-shape">
        <img src="{{asset('../img/home-one/banner/shape-bottom.png')}}" alt="Shape">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="banner-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h1>Find Thousand <span>Job</span> If You’re Ready To Get</h1>
                            <p>We have 280,000+ live jobs adverts on our site, helping you to find any type of job</p>
                            <div class="banner-form-area">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>
                                                    <i class='bx bx-search'></i>
                                                </label>
                                                <input type="text" class="form-control" placeholder="Search Your Job">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select>
                                                    <option>All Categories</option>
                                                    <option>Another option</option>
                                                    <option>A option</option>
                                                    <option>Potato</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group two">
                                                <label>
                                                    <i class='bx bx-location-plus'></i>
                                                </label>
                                                <input type="text" class="form-control" placeholder="Location">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn">
                                        Search Job
                                        <i class='bx bx-search'></i>
                                    </button>
                                </form>
                            </div>
                            <div class="banner-key">
                                <ul>
                                    <li>
                                        <span>Trending Keywords</span>
                                    </li>
                                    <li>
                                        <a href="#">Account Manager,</a>
                                    </li>
                                    <li>
                                        <a href="#">Administrative,</a>
                                    </li>
                                    <li>
                                        <a href="#">Android,</a>
                                    </li>
                                    <li>
                                        <a href="#">Angular,</a>
                                    </li>
                                    <li>
                                        <a href="#">appASP.NET</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-img">
                    <img src="{{asset('../img/home-one/banner/banner1.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner3.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner4.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner5.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner6.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner7.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner8.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner9.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner10.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner11.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner12.png')}}" alt="Shape">
                    <img src="{{asset('../img/home-one/banner/banner13.png')}}" alt="Shape">
                    <div class="inner">
                        <img src="{{asset('../img/home-one/banner/banner2.png')}}" alt="Shape">
                        <p>Outsourcing all or part of your personnel management function can bring real</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Work -->
<section class="work-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Working Process</span>
            <h2>See How It Works</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="work-item">
                    <i class="flaticon-verify"></i>
                    <span>STEP 01</span>
                    <h3>Register An Account</h3>
                    <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="work-item">
                    <i class="flaticon-file"></i>
                    <span>STEP 02</span>
                    <h3>Search Your Job</h3>
                    <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into</p>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="work-item">
                    <i class="flaticon-comment"></i>
                    <span>STEP 03</span>
                    <h3>Apply For Job</h3>
                    <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Work -->

<!-- Jobs -->
<section class="job-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-title">
                    <span class="sub-title">Desire Jobs</span>
                    <h2>Job You Will Love</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sorting-menu">
                    <ul>
                        <li class="filter" data-filter="all">All</li>
                        <li class="filter" data-filter=".m">Internship</li>
                        <li class="filter" data-filter=".n">Full Time</li>
                        <li class="filter" data-filter=".o">Part Time</li>
                        <li class="filter" data-filter=".p">Remote</li>
                        <li class="filter" data-filter=".u">Freelancer</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="container" class="row">
            <div class="col-sm-6 col-lg-12 mix n">
                <div class="job-item">
                    <a href="job-details.html">
                        <div class="feature-top-right">
                            <span>Featured</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="job-left">
                                    <img src="assets/img/home-one/job1.png" alt="Brand">
                                    <h3>Product Designer</h3>
                                    <p>Digital Radio</p>
                                    <ul>
                                        <li>$500 - $1,000 /</li>
                                        <li>month /</li>
                                        <li>
                                            <i class="flaticon-appointment"></i>
                                            8 months ago
                                        </li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Seoul, South Korea
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="job-right">
                                    <ul>
                                        <li>
                                            <i class="flaticon-customer"></i>
                                            Full Time
                                        </li>
                                        <li>
                                            <i class="flaticon-mortarboard"></i>
                                            Master
                                        </li>
                                        <li>
                                            <span>Add to bookmarks</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12 mix o">
                <div class="job-item">
                    <a href="job-details.html">
                        <div class="feature-top-right">
                            <span>Featured</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="job-left">
                                    <img src="assets/img/home-one/job2.png" alt="Brand">
                                    <h3>Construction Worker</h3>
                                    <p>Digital Vine</p>
                                    <ul>
                                        <li>$600 - $2,000 /</li>
                                        <li>month /</li>
                                        <li>
                                            <i class="flaticon-appointment"></i>
                                            6 months ago
                                        </li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Kabul, Afghanistan
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="job-right">
                                    <ul>
                                        <li>
                                            <i class="flaticon-customer"></i>
                                            Part Time
                                        </li>
                                        <li>
                                            <i class="flaticon-mortarboard"></i>
                                            Master
                                        </li>
                                        <li>
                                            <span>Add to bookmarks</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12 mix m">
                <div class="job-item">
                    <a href="job-details.html">
                        <div class="feature-top-right">
                            <span>Featured</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="job-left">
                                    <img src="assets/img/home-one/job3.png" alt="Brand">
                                    <h3>Sr. Shopify Developer</h3>
                                    <p>Codex Info</p>
                                    <ul>
                                        <li>$400 - $1,500 /</li>
                                        <li>month /</li>
                                        <li>
                                            <i class="flaticon-appointment"></i>
                                            1 months ago
                                        </li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Buenos Aires, Argentina
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="job-right">
                                    <ul>
                                        <li>
                                            <i class="flaticon-customer"></i>
                                            Internship
                                        </li>
                                        <li>
                                            <i class="flaticon-mortarboard"></i>
                                            Master
                                        </li>
                                        <li>
                                            <span>Add to bookmarks</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12 mix p">
                <div class="job-item">
                    <a href="job-details.html">
                        <div class="feature-top-right">
                            <span>Featured</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="job-left">
                                    <img src="assets/img/home-one/job4.png" alt="Brand">
                                    <h3>Tax Manager</h3>
                                    <p>Techno Vino</p>
                                    <ul>
                                        <li>$450 - $1,250 /</li>
                                        <li>month /</li>
                                        <li>
                                            <i class="flaticon-appointment"></i>
                                            4 months ago
                                        </li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Vienna, Australia
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="job-right">
                                    <ul>
                                        <li>
                                            <i class="flaticon-customer"></i>
                                            Remote
                                        </li>
                                        <li>
                                            <i class="flaticon-mortarboard"></i>
                                            Master
                                        </li>
                                        <li>
                                            <span>Add to bookmarks</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12 mix u">
                <div class="job-item">
                    <a href="job-details.html">
                        <div class="feature-top-right">
                            <span>Featured</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="job-left">
                                    <img src="assets/img/home-one/job5.png" alt="Brand">
                                    <h3>Senior Data Engineer</h3>
                                    <p>Jarmin Poin</p>
                                    <ul>
                                        <li>$700 - $1,500 /</li>
                                        <li>month /</li>
                                        <li>
                                            <i class="flaticon-appointment"></i>
                                            2 months ago
                                        </li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Tirana, Albania
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="job-right">
                                    <ul>
                                        <li>
                                            <i class="flaticon-customer"></i>
                                            Freelancer
                                        </li>
                                        <li>
                                            <i class="flaticon-mortarboard"></i>
                                            Master
                                        </li>
                                        <li>
                                            <span>Add to bookmarks</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="job-browse">
            <p>A tons of top tech jobs are waiting for you. <a href="jobs.html">Browse all jobs</a></p>
        </div>
    </div>
</section>
<!-- End Jobs -->

<!-- Explore -->
<section class="explore-area ptb-100">
    <div class="container">
        <div class="explore-item">
            <div class="section-title">
                <span class="sub-title">Explore New Life</span>
                <h2>Put Your Cv In Front Of Great Employers</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut tur incidunt laborequaerat voluptatem.</p>
            <ul>
                <li>
                    <a class="left-btn" href="#">
                        Upload Your Resume
                        <i class="flaticon-upload"></i>
                    </a>
                </li>
                <li>
                    <span>CEO Message</span>
                    <a class="right-btn popup-youtube" href="https://www.youtube.com/watch?v=07d2dXHYb94&t=88s">
                        <i class='bx bx-play'></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Explore -->

<!-- Counter -->
<div class="counter-area pt-100">
    <div class="counter-shape">
        <img src="{{asset('../img/home-one/banner/shape-bottom.png')}}" alt="Shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-hiring"></i>
                    <p>CANDIDATES</p>
                    <h3>
                        <span class="odometer" data-count="87,360">00</span>
                    </h3>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-candidate"></i>
                    <p>TOTAL JOBS</p>
                    <h3>
                        <span class="odometer" data-count="45,257">00</span>
                    </h3>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-working-at-home"></i>
                    <p>EMPLOYERS</p>
                    <h3>
                        <span class="odometer" data-count="9,650">00</span>
                    </h3>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <i class="flaticon-choice"></i>
                    <p>JOB APPLICATIONS</p>
                    <h3>
                        <span class="odometer" data-count="70,299">00</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter -->

<!-- Company -->
<section class="company-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <span class="sub-title">Employers Offering Job</span>
                    <h2>Company Offering Job</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cmn-link">
                    <a href="employers.html">
                        <i class="flaticon-right-arrow one"></i>
                        All Employers
                        <i class="flaticon-right-arrow two"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company1.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Pi Agency</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            10 min ago / Austria, Vienna
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Pay Relocation Free</li>
                            <li>Remote Work</li>
                            <li>Duration: 5 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>50K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company2.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Kn It</a>
                        </h3>
                        <span>Permanent Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            9 min ago / Tirana, Albania
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Graphic Designer</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>56K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company3.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Orbit Inc.</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            8 min ago / Doha, Qatar
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Product Manager</li>
                            <li>Remote Work</li>
                            <li>Duration: 5 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>70K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company4.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Dev Roside</a>
                        </h3>
                        <span>Full Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            15 min ago / UK, England
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Design & Developer</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>89K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company5.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Roshu.co</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            10 min ago / Cardiff, England
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Internet Operator</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>66K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company6.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Omti. Med</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            40 min ago / Tokyo, Japan
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Caring Officer</li>
                            <li>Remote Work</li>
                            <li>Duration: 2 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>50K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company7.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Rahbar</a>
                        </h3>
                        <span>Full Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            7 min ago / Washington, US
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Media Connector</li>
                            <li>Remote Work</li>
                            <li>Duration: 3 Years</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>87K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="company-item">
                    <div class="feature-top-right">
                        <span>Featured</span>
                    </div>
                    <div class="top">
                        <a href="employer-details.html">
                            <img src="assets/img/home-one/company8.png" alt="Brand">
                        </a>
                        <h3>
                            <a href="employer-details.html">Doblin. Fo</a>
                        </h3>
                        <span>Part Time Job</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            12 min ago / California, US
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>Private Officer</li>
                            <li>Remote Work</li>
                            <li>Duration: 1 Year</li>
                        </ul>
                        <span>Annual Salary</span>
                        <h4>50K</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Company -->

<!-- Location -->
<section class="location-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <span class="sub-title">Wanted Location</span>
                    <h2>The Places Near You</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cmn-link">
                    <a href="#">
                        <i class="flaticon-right-arrow one"></i>
                        Browse All Locations
                        <i class="flaticon-right-arrow two"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="location-slider owl-theme owl-carousel">
            <div class="location-item">
                <div class="top">
                    <a href="#">
                        <img src="assets/img/home-one/location1.jpg" alt="Location">
                    </a>
                </div>
                <span>8 Open Job</span>
                <h3>
                    <a href="#">New York</a>
                </h3>
            </div>
            <div class="location-item">
                <div class="top">
                    <a href="#">
                        <img src="assets/img/home-one/location2.jpg" alt="Location">
                    </a>
                </div>
                <span>6 Open Job</span>
                <h3>
                    <a href="#">Austria, Vienna</a>
                </h3>
            </div>
            <div class="location-item">
                <div class="top">
                    <a href="#">
                        <img src="assets/img/home-one/location3.jpg" alt="Location">
                    </a>
                </div>
                <span>2 Open Job</span>
                <h3>
                    <a href="#">Tirana, Albania</a>
                </h3>
            </div>
            <div class="location-item">
                <div class="top">
                    <a href="#">
                        <img src="assets/img/home-one/location4.jpg" alt="Location">
                    </a>
                </div>
                <span>4 Open Job</span>
                <h3>
                    <a href="#">Kabul, Afghanistan</a>
                </h3>
            </div>
            <div class="location-item">
                <div class="top">
                    <a href="#">
                        <img src="assets/img/home-one/location5.jpg" alt="Location">
                    </a>
                </div>
                <span>3 Open Job</span>
                <h3>
                    <a href="#">Cardiff, UK</a>
                </h3>
            </div>
        </div>
    </div>
</section>
<!-- End Location -->

<!-- Feedback -->
<section class="feedback-area pt-100">
    <div class="feedback-shape">
        <img src="{{asset('../img/home-one/banner/shape-bottom.png')}}" alt="Shape">
    </div>
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Feedbacks</span>
            <h2>What Users Are Saying</h2>
        </div>
        <div class="feedback-slider owl-theme owl-carousel">
            <div class="feedback-item">
                <h3>Jubra Ward</h3>
                <span>CEO at Alfa School</span>
                <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                <h4>
                    <i class="flaticon-left-quote"></i>
                    Just Awesome
                </h4>
                <img src="assets/img/home-one/feedback1.jpg" alt="Feedback">
            </div>
            <div class="feedback-item">
                <h3>Robin William</h3>
                <span>Manager Support Act It</span>
                <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                <h4>
                    <i class="flaticon-left-quote"></i>
                    Very Reliable
                </h4>
                <img src="assets/img/home-one/feedback2.jpg" alt="Feedback">
            </div>
            <div class="feedback-item">
                <h3>Tom Henry</h3>
                <span>Director at Alfa School</span>
                <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                <h4>
                    <i class="flaticon-left-quote"></i>
                    Looking Nice
                </h4>
                <img src="assets/img/home-one/feedback3.jpg" alt="Feedback">
            </div>
        </div>
    </div>
</section>
<!-- End Feedback -->

<!-- Blog -->
<section class="blog-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <span class="sub-title">Our Blogs</span>
                    <h2>Recent News Post</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cmn-link">
                    <a href="blog.html">
                        <i class="flaticon-right-arrow one"></i>
                        Browse All Blogs
                        <i class="flaticon-right-arrow two"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/home-one/blog1.jpg" alt="Blog">
                        </a>
                    </div>
                    <span>Job skills. 12-09-2020</span>
                    <h3>
                        <a href="blog-details.html">The Internet Is A Job Seeker Most Crucial Success </a>
                    </h3>
                    <div class="cmn-link">
                        <a href="blog-details.html">
                            <i class="flaticon-right-arrow one"></i>
                            Learn More
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/home-one/blog2.jpg" alt="Blog">
                        </a>
                    </div>
                    <span>Career advice. 11-09-2020</span>
                    <h3>
                        <a href="blog-details.html">Today From Connecting With Potential Employers</a>
                    </h3>
                    <div class="cmn-link">
                        <a href="blog-details.html">
                            <i class="flaticon-right-arrow one"></i>
                            Learn More
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/home-one/blog3.jpg" alt="Blog">
                        </a>
                    </div>
                    <span>Future plan. 10-09-2020</span>
                    <h3>
                        <a href="blog-details.html">We’ve Weeded Through Hundreds Of Job Hunting</a>
                    </h3>
                    <div class="cmn-link">
                        <a href="blog-details.html">
                            <i class="flaticon-right-arrow one"></i>
                            Learn More
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->

<!-- Partner -->
<div class="partner-area pt-100 pb-70">
    <div class="container">
        <div class="partner-slider owl-theme owl-carousel">
            <div class="partner-item">
                <img src="assets/img/home-one/partner1.png" alt="Partner">
                <img src="assets/img/home-one/partner1.png" alt="Partner">
            </div>
            <div class="partner-item">
                <img src="assets/img/home-one/partner2.png" alt="Partner">
                <img src="assets/img/home-one/partner2.png" alt="Partner">
            </div>
            <div class="partner-item">
                <img src="assets/img/home-one/partner3.png" alt="Partner">
                <img src="assets/img/home-one/partner3.png" alt="Partner">
            </div>
            <div class="partner-item">
                <img src="assets/img/home-one/partner4.png" alt="Partner">
                <img src="assets/img/home-one/partner4.png" alt="Partner">
            </div>
            <div class="partner-item">
                <img src="assets/img/home-one/partner5.png" alt="Partner">
                <img src="assets/img/home-one/partner5.png" alt="Partner">
            </div>
            <div class="partner-item">
                <img src="assets/img/home-one/partner1.png" alt="Partner">
                <img src="assets/img/home-one/partner1.png" alt="Partner">
            </div>
        </div>
    </div>
</div>
<!-- End Partner -->

<!-- App -->
<section class="app-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="app-content">
                    <div class="section-title">
                        <span class="sub-title">Download The App</span>
                        <h2>Get More In Our Application Sit Back And Enjoy</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <img src="assets/img/home-one/app1.png" alt="App">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <img src="assets/img/home-one/app2.png" alt="App">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="app-img">
                    <img src="{{asset('../img/home-one/app4.png.')}}" alt="App">
                    <img src="{{asset('../img/home-one/app3.png')}}" alt="Shape">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End App -->

<!-- Footer -->
<footer class="pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{asset('../img/logo.png')}}" alt="Logo">
                        </a>
                        <ul>
                            <li>
                                <span>Address: </span>
                                2659 Autostrad St, London, UK
                            </li>
                            <li>
                                <span>Message: </span>
                                <a href="mailto:hello@jecto.com">hello@jecto.com</a>
                            </li>
                            <li>
                                <span>Phone: </span>
                                <a href="tel:2151234567">215 - 123 - 4567</a>
                            </li>
                            <li>
                                <span>Open: </span>
                                Mon - Fri / 9:00 AM - 6:00 PM
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service">
                        <h3>Our Services</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">Accounting</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Teachers</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Customer Service</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Web & Software Dev</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Science & Analytics</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-service">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-conditions.html" target="_blank">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="jobs.html" target="_blank">Jobs</a>
                            </li>
                            <li>
                                <a href="candidates.html" target="_blank">Candidates</a>
                            </li>
                            <li>
                                <a href="blog.html" target="_blank">Blog</a>
                            </li>
                            <li>
                                <a href="{{asset('/jobregister')}}" target="_blank">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-newsletter">
                        <h3>Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed</p>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your email*" name="EMAIL" required autocomplete="off">

                            <button class="btn" type="submit">
                                <i class="flaticon-send"></i>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="copyright-item">
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="copyright-item">
                    <p>Copyright ©2021 Jecto. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->


<!-- Essential JS -->
<script src="{{asset('../js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('..resources/js/popper.min.js')}}"></script>
<script src="{{asset('..resources/js/bootstrap.min.js')}}"></script>
<!-- Form Validator JS -->
<script src="{{asset('../js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('../js/contact-form-script.js')}}"></script>
<!-- Ajax Chip JS -->
<script src="{{asset('../js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('../js/jquery.meanmenu.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('../js/jquery.nice-select.min.js')}}"></script>
<!-- Mixitup JS -->
<script src="{{asset('../js/jquery.mixitup.min.js')}}"></script>
<!-- Popup JS -->
<script src="{{asset('../js/jquery.magnific-popup.min.js')}}"></script>
<!-- Odometer JS -->
<script src="{{asset('../js/odometer.min.js')}}"></script>
<script src="{{asset('../js/jquery.appear.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('../js/owl.carousel.min.js')}}"></script>
<!-- Progressbar JS -->
<script src="{{asset('../js/progressbar.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('../js/custom.js')}}"></script>
</body>
</html>
