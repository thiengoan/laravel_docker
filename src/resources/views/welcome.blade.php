<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungry Tiger</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@500&display=swap" rel="stylesheet">
    <style>
        :root {
            --tiger-gold: #faae33;
            --ember-rust: #823513;
            --saffron-glow: #9f531b;
            --dark-spice: #402011;
            --charred-clove: #281006;
            --cardamom-brown: #6b2e12;
            --chili-red: #d1255c;

            --font-display: 'Bebas Neue', sans-serif;
            --font-body: 'Inter', sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--ember-rust);
            color: var(--tiger-gold);
            font-family: var(--font-body);
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            position: relative;
        }

        /* Botanical Watermark Simulation */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%236b2e12' fill-opacity='0.15' fill-rule='evenodd'/%3E%3C/svg%3E");
            z-index: -1;
            pointer-events: none;
        }

        /* Typography */
        h1, h2, h3, .brand-mark {
            font-family: var(--font-display);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 0.85;
            letter-spacing: -0.015em;
        }

        .display-text {
            font-size: clamp(100px, 15vw, 213px);
            margin: 0;
            text-align: center;
        }

        .display-left {
            font-size: clamp(80px, 12vw, 160px);
            text-align: left;
        }

        .body-text {
            font-size: 13px;
            font-weight: 500;
            line-height: 1.3;
            letter-spacing: 0;
            color: var(--dark-spice);
        }

        /* Components */
        .btn {
            display: inline-block;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.01em;
            text-decoration: none;
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-ghost {
            color: var(--tiger-gold);
            border: 1px solid var(--tiger-gold);
            padding: 8px 17px;
            background: transparent;
        }

        .btn-ghost:hover {
            background: var(--dark-spice);
        }

        .btn-filled {
            color: var(--charred-clove);
            background: var(--tiger-gold);
            border: 1px solid var(--tiger-gold);
            padding: 10px 20px;
        }

        .btn-filled:hover {
            background: var(--saffron-glow);
            border-color: var(--saffron-glow);
            color: var(--tiger-gold);
        }

        .pill-badge {
            font-family: var(--font-display);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.02em;
            border-radius: 9999px;
            padding: 6px 14px;
            background: var(--tiger-gold);
            color: var(--charred-clove);
            display: inline-block;
        }

        .pill-badge.secondary {
            background: var(--dark-spice);
            color: var(--tiger-gold);
        }

        .pill-badge.alert {
            background: var(--chili-red);
            color: #fff;
        }

        .divider {
            height: 1px;
            width: 100%;
            border-bottom: 1px dotted var(--tiger-gold);
            margin: 80px 0;
        }

        /* Layout */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 40px;
            position: relative;
        }

        .nav-left, .nav-right {
            display: flex;
            gap: 10px;
        }

        .brand-mark {
            font-size: 42px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            color: var(--tiger-gold);
        }

        .hero-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 40px 100px;
            position: relative;
        }

        .eyebrow {
            align-self: flex-start;
            font-family: var(--font-body);
            font-size: 13px;
            color: var(--tiger-gold);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .product-bottle {
            margin-top: 40px;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 0 20px rgba(159, 83, 27, 0.4)); /* highlight rim */
        }

        .product-bottle img {
            max-height: 500px;
            width: auto;
            display: block;
        }

        .hero-cta {
            margin-top: 40px;
            z-index: 3;
        }

        .split-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
            align-items: center;
        }

        .split-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        .split-image {
            display: flex;
            justify-content: center;
        }

        .split-image img {
            max-height: 400px;
        }

        .floating-actions {
            position: fixed;
            bottom: 40px;
            right: 40px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 50;
        }

        .icon-btn {
            width: 50px;
            height: 50px;
            border-radius: 9999px;
            border: 1.5px solid var(--tiger-gold);
            background: var(--ember-rust);
            color: var(--tiger-gold);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .icon-btn:hover {
            background: var(--tiger-gold);
            color: var(--charred-clove);
        }

        .icon-btn svg {
            width: 20px;
            height: 20px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.5px;
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-left">
            <a href="#" class="btn btn-ghost">SAUCE</a>
            <a href="#" class="btn btn-ghost">RECIPES</a>
        </div>
        <div class="brand-mark">HUNGRY TIGER</div>
        <div class="nav-right">
            <a href="#" class="btn btn-ghost">ABOUT</a>
            <a href="#" class="btn btn-ghost">CONTACT</a>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="eyebrow">Batch No. 004 &mdash; Hand Roasted</div>
            <h1 class="display-text">FIRE ROASTED<br>TANDOOR SAUCE</h1>
            
            <div class="product-bottle">
                <img src="/hungry_tiger_jar.png" alt="Hungry Tiger Sauce Jar">
            </div>

            <div class="hero-cta">
                <a href="#" class="btn btn-filled">BUY NOW - $12.00</a>
            </div>
        </section>

        <div class="divider"></div>

        <section class="split-section">
            <div class="split-content">
                <span class="pill-badge alert">EXTRA HOT</span>
                <h2 class="display-left">NOT YOUR<br>AVERAGE SPICE</h2>
                <div class="body-text" style="color: var(--tiger-gold); font-size: 16px; max-width: 400px; margin-top: 20px;">
                    A deep rust-brown canvas, a single searing Tiger Gold accent, and an absurdly oversized custom display face that swallows the viewport.
                </div>
                <a href="#" class="btn btn-ghost" style="margin-top: 10px;">READ THE STORY</a>
            </div>
            <div class="split-image">
                <img src="/hungry_tiger_jar.png" alt="Product Angle">
            </div>
        </section>

        <div class="divider"></div>
        
        <section class="split-section" style="direction: rtl;">
            <div class="split-content" style="direction: ltr; align-items: flex-end; text-align: right;">
                <div style="display: flex; gap: 10px;">
                    <span class="pill-badge secondary">VEGAN</span>
                    <span class="pill-badge secondary">GLUTEN FREE</span>
                </div>
                <h2 class="display-left" style="text-align: right;">PURE<br>INGREDIENTS</h2>
                <div class="body-text" style="color: var(--tiger-gold); font-size: 16px; max-width: 400px; margin-top: 20px;">
                    Tightly cropped, studio-lit jars of sauce centered against the Ember Rust canvas. The jar IS the hero.
                </div>
                <a href="#" class="btn btn-ghost" style="margin-top: 10px;">VIEW NUTRITION</a>
            </div>
            <div class="split-image" style="direction: ltr;">
                <img src="/hungry_tiger_jar.png" alt="Ingredients">
            </div>
        </section>
        
        <div class="divider" style="margin-bottom: 0;"></div>
    </main>

    <div class="floating-actions">
        <button class="icon-btn" aria-label="Search">
            <svg viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="icon-btn" aria-label="Cart">
            <svg viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
    </div>

</body>
</html>
