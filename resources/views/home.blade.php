<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JR Dev Teens</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="header-container">
            <div class="header-grid">
                <div class="header-logo">
                    <h1 class="logo-text">Jr Dev Teens</h1>
                </div>
                <div class="header-item-1">
                    <h2>We help young minds become tech wizards!</h2>
                    <p>Our mission is to empower kids with the skills they need to thrive in the digital age and become
                        creators, problem solvers and innovators.</p>
                    <button class="yellow-button">Join Waitlist</button>
                </div>
                <div class="header-item-2">
                    <img src="{{ asset('images/waitlist1.svg') }}" alt="hero-image">
                </div>
            </div>

        </header>
        <section class="second-section-container">
            <div class="second-section-grid">
                <div class="second-section-item-1">
                    <h3>
                        A well-rounded coding education that equips kids with a strong foundation in programming and web
                        development.
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
                    <img src="{{ asset('images/vector.svg') }}" </div>
                </div>
        </section>
        <section class="third-section-container">
            <div class="third-section-grid">
                <div class="third-section-item-1">
                    <div class="circle">
                        <img src="{{ asset('images/crown.svg') }}">
                    </div>
                    <p>Experienced Instructors</p>
                </div>
                <div class="third-section-item-2">
                    <div class="circle"><img src="{{ asset('images/video-camera.svg') }}"></div>
                    <p>Fun and interactive learning</p>
                </div>
                <div class="third-section-item-3">
                    <div class="circle"><img src="{{ asset('images/checkmark.svg') }}"></div>
                    <p>Cutting-Edge Cirriculum</p>
                </div>
            </div>
        </section>
        <section class="fourth-section-container">
            <div class="fourth-section-grid">
                <div class="fourth-section-item-1">
                    <h3>Our coursework focuses on three pillars to ensure that the kids get the best learning experience
                    </h3>
                </div>
                <div class="fourth-section-item-2 learning-card">
                    <h4>Foundational Web </br> Development Skills</h4>
                    <p>Our program equips students with essential web development skills, including HTML, CSS, and
                        Javascript, empowering them to create and customize their own websites from scratch.</p>
                </div>
                <div class="fourth-section-item-3 learning-card">
                    <h4>Interactive Coding </br> Projects</h4>
                    <p>We foster creative and problem-solving by guiding students through interactive coding projects,
                        where they apply their knowledge to build games, animations and web applications.</p>
                </div>
                <div class="fourth-section-item-4 learning-card">
                    <h4>Mentorship and </br> Support</h4>
                    <p>We provide personalized mentorship and support throughout the learning journey, ensuring that
                        each students recieves the guidance they need to excel in coding and web development.</p>
                </div>
            </div>
        </section>
        <section class="fifth-section-container">
            <div class="fifth-section-grid">
                <div class="fifth-section-item-1">
                    <h3>Unlock Your Kid's </br>Technical Potential</h3>
                    <p>Kickstart the journey today!</p>
                    <img src="{{ asset('images/frame.svg') }}">
                </div>
                <div class="fifth-section-item-2">
                    <form action="submit.php" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="parentName">Parent's Name:</label>
                            <input type="text" id="parentName" name "parentName" required>
                        </div>

                        <div class="form-group">
                            <label for="studentName">Student's Name:</label>
                            <input type="text" id="studentName" name="studentName" required>
                        </div>

                        <div class="form-group">
                            <label for="class">Class:</label>
                            <input type="text" id="class" name="class" required>
                        </div>

                        <div class="join-btn-container"><button class="join-button" type="submit">Join Waitlist</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="copyright">
                &copy; 2023 Between Two Divs LLC. All Rights Reserved.
            </div>
        </footer>
    </div>
</body>

</html>
