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
                Item 2
                </div>
            </div>
           
        </header>
        <section>
            <div class="second-section-grid">
                <h3 class="second-section-item-1">
                    Item 1
                </h3>
                <div class="second-section-item-2">
                    Item 2
                </div>
                <div class="second-section-item-3">
                    Item 3
                </div>
            </div>
        </section>
        <section>
            <div class="third-section-grid">
                <div class="third-section-item-1">
                    <p>Item 1</p>
                </div>
                <div class="third-section-item-2">
                    <p>Item 2</p>
                </div>
                <div class="third-section-item-3">
                    <p>Item 3</p>
                </div>
            </div>
        </section>
        <section>
            <div class="fourth-section-grid">
                <div class="fourth-section-item-1">
                    <h3>Item 1</h3>
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