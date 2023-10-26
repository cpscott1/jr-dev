<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JR Dev Kids</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
       
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <div>
        <header class="header-container">
            <div class="header-grid">
                <div class="header-logo">
                    Logo
                </div>
                <div class="header-item-1">
                <h2>We help young minds become tech wizards!</h2>
                <p>Our mission is to empower kids with the skills they need to thrive in the digital age and become creators, problem solvers and innovators.</p>
                 <button class="yellow-button">Join Waitlist</button>
                </div>
                <div class="header-item-2">
                    <img src="{{ asset('images/waitlist1.svg')}}" alt="hero-image">
                </div>
            </div>
           
        </header>
        <section>
            <div class="second-section-grid">
                <div class="second-section-item-1">
                    <h3>
                    A well-rounded coding education that equips kids with a strong foundation in programming and web development.
                    </h3>
                </div>
                <div class="second-section-item-2">
                    <div class="program-card">
                        <p>HTML (Hypertext Markup Langauge)</p>
                    </div>
                     <div class="program-card">
                        <p>CSS (Cascading Style Sheets)</p>
                    </div>
                    <div class="program-card">
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="second-section-item-3">
                   <img src="{{ asset('images/vector.svg')}}" 
                </div>
            </div>
        </section>
        <section class="third-section-container">
            <div class="third-section-grid">
                <div class="third-section-item-1">
                    <div class="circle">
                         <img src="{{ asset('images/crown.svg')}}"> 
                    </div>
                    <p>Experienced Instructors</p>
                </div>
                <div class="third-section-item-2">
                    <div class="circle"><img src="{{ asset('images/video-camera.svg')}}"></div>
                    <p>Fun and interactive learning</p>
                </div>
                <div class="third-section-item-3">
                    <div class="circle"><img src="{{ asset('images/checkmark.svg')}}"></div>
                    <p>Cutting-Edge Cirriculum</p>
                </div>
            </div>
        </section>
        <section>
            <div class="fourth-section-grid">
                <div class="fourth-section-item-1">
                    <h3>Our coursework focuses on three pillars to ensure that the kids get the best learning experience</h3>
                </div>
                <div class="fourth-section-item-2">
                    <h4>Item 2</h4>
                    <p>Item 2</p>
                </div>
                <div class="fourth-section-item-3">
                    <h4>Item 3</h4>
                    <p>Item 3</p>
                </div>
                <div class="fourth-section-item-4">
                    <h4>Item 4</h4>
                    <p>Item 4</p>
                </div>
            </div>
        </section>
        <section>
            <div class="fifth-section-grid">
                <div class="fifth-section-item-1">
                    <h3>Item 1</h3>
                </div>
                <div class="fifth-section-item-2">
                    <h3>Item 2</h3>
                </div>
            </div>
        </section>
    </div>
    </body>
</html>