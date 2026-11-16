<?php
// ============================================================
// PERSONAL PROFILE WEBSITE
// Edit the values below to customize your own portfolio.
// ============================================================

$fullName = "Cris Charles Montes";
$course = "Bachelor of Science in Information Technology";
$yearLevel = "2nd Year College";
$school = "Mater Dei College";
$email = "crischals@gmail.com";
$phone = "+63 912 345 6789";
$location = "Philippines";

$aboutMe = "Hello! I am a college student who enjoys learning new things, exploring creative ideas, and improving my skills. I created this website to introduce myself, share my interests, and showcase what I can do.";

$profilePhoto = "pfp.jpg"; // Place your photo in the same folder as this file.

$skills = [
    "Communication",
    "Teamwork",
    "Time Management",
    "Problem Solving",
    "Basic HTML & CSS"
];

$hobbies = [
    ["icon" => "♫", "name" => "Listening to Music", "description" => "Enjoying different genres and discovering new songs."],
    ["icon" => "✦", "name" => "Digital Creativity", "description" => "Exploring designs, layouts, and creative projects."],
    ["icon" => "⌁", "name" => "Travel & Nature", "description" => "Appreciating beautiful places and new experiences."],
    ["icon" => "♡", "name" => "Personal Growth", "description" => "Learning, reflecting, and becoming a better version of myself."]
];

// Escape dynamic text before displaying it in HTML.
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A personal profile and student portfolio website.">
    <title><?php echo e($fullName); ?> | Personal Profile</title>

    <style>
        /* -------------------- Base styles -------------------- */
        :root {
            --coffee: #4b3428;
            --espresso: #30231d;
            --mocha: #795b49;
            --latte: #b99b7d;
            --khaki: #c8b995;
            --cream: #f7f3eb;
            --paper: #fffdf8;
            --text: #40352e;
            --muted: #82766b;
            --line: #e8dfd1;
            --shadow: 0 14px 38px rgba(62, 43, 31, 0.09);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: var(--cream);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1100px, 90%);
            margin: 0 auto;
        }

        /* -------------------- Header / navigation -------------------- */
        header {
            background: rgba(255, 253, 248, 0.94);
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 10;
            backdrop-filter: blur(12px);
        }

        .nav {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            color: var(--coffee);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 1.35rem;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            list-style: none;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 0.9rem;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--mocha);
        }

        /* -------------------- Hero / profile section -------------------- */
        .hero {
            padding: 76px 0 58px;
            background:
                radial-gradient(circle at 85% 15%, rgba(200, 185, 149, 0.27), transparent 28%),
                linear-gradient(135deg, #eee5d7, #f7f3eb 62%);
        }

        .hero-card {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            align-items: center;
            gap: 50px;
            background: var(--paper);
            border: 1px solid rgba(185, 155, 125, 0.25);
            border-radius: 26px;
            padding: clamp(28px, 5vw, 58px);
            box-shadow: var(--shadow);
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 14px;
            color: var(--mocha);
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3 {
            font-family: Georgia, "Times New Roman", serif;
            color: var(--coffee);
            line-height: 1.2;
        }

        h1 {
            max-width: 650px;
            margin-bottom: 14px;
            font-size: clamp(2.4rem, 5vw, 4.2rem);
        }

        .hero-subtitle {
            margin-bottom: 20px;
            color: var(--mocha);
            font-size: 1.05rem;
            font-weight: 600;
        }

        .hero-description {
            max-width: 590px;
            color: var(--muted);
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .button {
            display: inline-block;
            padding: 11px 20px;
            border: 1px solid var(--coffee);
            border-radius: 999px;
            background: var(--coffee);
            color: #fffdf8;
            font-size: 0.9rem;
            font-weight: 700;
            transition: transform 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
        }

        .button:hover {
            background: var(--mocha);
            box-shadow: 0 8px 18px rgba(75, 52, 40, 0.18);
            transform: translateY(-3px);
        }

        .button-outline {
            background: transparent;
            color: var(--coffee);
        }

        .button-outline:hover {
            color: #fffdf8;
        }

        .photo-wrap {
            justify-self: center;
            width: min(290px, 100%);
            aspect-ratio: 1 / 1;
            padding: 12px;
            border: 1px solid var(--khaki);
            border-radius: 50%;
            background: #eee5d7;
            box-shadow: 0 18px 35px rgba(62, 43, 31, 0.12);
        }

        .photo-wrap img {
            display: block;
            width: 100%;
            height: 100%;
            border: 5px solid var(--paper);
            border-radius: 50%;
            object-fit: cover;
        }

        /* -------------------- General section styles -------------------- */
        section.content-section {
            padding: 68px 0;
        }

        .section-heading {
            margin-bottom: 30px;
            text-align: center;
        }

        .section-heading h2 {
            margin-bottom: 9px;
            font-size: clamp(1.8rem, 3vw, 2.5rem);
        }

        .section-heading p {
            color: var(--muted);
        }

        .card {
            height: 100%;
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: var(--paper);
            box-shadow: 0 8px 24px rgba(62, 43, 31, 0.045);
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            border-color: var(--khaki);
            box-shadow: var(--shadow);
        }

        .card h3 {
            margin-bottom: 12px;
            font-size: 1.3rem;
        }

        .card p {
            color: var(--muted);
        }

        /* -------------------- About section -------------------- */
        .about-card {
            max-width: 850px;
            margin: 0 auto;
            text-align: center;
        }

        /* -------------------- Education section -------------------- */
        .education-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .education-card {
            position: relative;
            padding-left: 62px;
        }

        .education-icon {
            position: absolute;
            top: 27px;
            left: 25px;
            display: grid;
            width: 24px;
            height: 24px;
            place-items: center;
            border-radius: 50%;
            background: #eee5d7;
            color: var(--coffee);
            font-weight: 800;
        }

        .education-card .school {
            margin-top: 5px;
            color: var(--mocha);
            font-weight: 700;
        }

        .education-card .year {
            display: inline-block;
            margin-top: 12px;
            padding: 4px 11px;
            border-radius: 999px;
            background: #f0eadf;
            color: var(--mocha);
            font-size: 0.78rem;
            font-weight: 700;
        }

        /* -------------------- Skills section -------------------- */
        .skills-panel {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: var(--paper);
            box-shadow: var(--shadow);
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            list-style: none;
        }

        .skills-list li {
            padding: 10px 17px;
            border: 1px solid #dfd1bd;
            border-radius: 999px;
            background: #f3ede3;
            color: var(--coffee);
            font-size: 0.9rem;
            font-weight: 700;
            transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease;
        }

        .skills-list li:hover {
            transform: translateY(-3px);
            background: var(--coffee);
            color: #fffdf8;
        }

        /* -------------------- Hobbies section -------------------- */
        .hobby-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .hobby-card {
            text-align: center;
        }

        .hobby-icon {
            display: grid;
            width: 52px;
            height: 52px;
            margin: 0 auto 16px;
            place-items: center;
            border-radius: 16px;
            background: #eee5d7;
            color: var(--coffee);
            font-size: 1.5rem;
        }

        /* -------------------- Contact section -------------------- */
        .contact-section {
            background: #eee5d7;
        }

        .contact-card {
            max-width: 760px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin: 22px 0 26px;
        }

        .contact-details a,
        .contact-details span {
            padding: 9px 15px;
            border: 1px solid #dfd1bd;
            border-radius: 999px;
            background: var(--paper);
            color: var(--mocha);
            font-size: 0.9rem;
            overflow-wrap: anywhere;
        }

        /* -------------------- Footer -------------------- */
        footer {
            padding: 23px 0;
            background: var(--espresso);
            color: #e9dfd2;
            text-align: center;
            font-size: 0.85rem;
        }

        footer span {
            color: var(--khaki);
        }

        /* -------------------- Responsive layout -------------------- */
        @media (max-width: 800px) {
            .hero-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-copy {
                order: 2;
            }

            .photo-wrap {
                order: 1;
                width: min(230px, 70%);
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-description {
                margin: 0 auto;
            }

            .hobby-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {
            .nav {
                padding: 15px 0;
                flex-direction: column;
                gap: 10px;
            }

            .nav-links {
                justify-content: center;
                gap: 10px 17px;
            }

            .hero {
                padding: 38px 0;
            }

            section.content-section {
                padding: 48px 0;
            }

            .education-grid,
            .hobby-grid {
                grid-template-columns: 1fr;
            }

            .card,
            .skills-panel {
                padding: 23px;
            }

            .education-card {
                padding-left: 58px;
            }

            .education-icon {
                left: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Page header and navigation -->
    <header>
        <div class="container nav">
            <a class="brand" href="#home">My Personal Profile</a>
            <nav aria-label="Main navigation">
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#hobbies">Interests</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Profile photo, name, and introduction -->
        <section class="hero" id="home">
            <div class="container">
                <div class="hero-card">
                    <div class="hero-copy">
                        <span class="eyebrow">Welcome to my personal page</span>
                        <h1><?php echo e($fullName); ?></h1>
                        <p class="hero-subtitle">
                            <?php echo e($course); ?> · <?php echo e($yearLevel); ?>
                        </p>
                        <p class="hero-description"><?php echo e($aboutMe); ?></p>
                        <div class="hero-buttons">
                            <a class="button" href="#contact">Get in Touch</a>
                            <a class="button button-outline" href="#about">Learn More</a>
                        </div>
                    </div>

                    <div class="photo-wrap">
                        <img src="<?php echo e($profilePhoto); ?>" alt="Profile photo of <?php echo e($fullName); ?>"
                            onerror="this.style.display='none'; this.parentElement.style.background='#c8b995';">
                    </div>
                </div>
            </div>
        </section>

        <!-- About me -->
        <section class="content-section" id="about">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">A little introduction</span>
                    <h2>About Me</h2>
                    <p>Get to know more about who I am.</p>
                </div>
                <div class="card about-card">
                    <p><?php echo e($aboutMe); ?></p>
                </div>
            </div>
        </section>

        <!-- Educational background -->
        <section class="content-section" id="education">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">My learning journey</span>
                    <h2>Educational Background</h2>
                    <p>My academic experience and current studies.</p>
                </div>

                <div class="education-grid">
                    <article class="card education-card">
                        <span class="education-icon">01</span>
                        <h3>College</h3>
                        <p class="school"><?php echo e($school); ?></p>
                        <p><?php echo e($course); ?></p>
                        <span class="year"><?php echo e($yearLevel); ?></span>
                    </article>

                    <article class="card education-card">
                        <span class="education-icon">02</span>
                        <h3>Previous Education</h3>
                        <p class="school">San Agustin National High School</p>
                        <p>ICT</p>
                        <span class="year">Senior High School Graduate</span>
                    </article>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class="content-section" id="skills">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">What I can do</span>
                    <h2>My Skills</h2>
                    <p>Some skills I have developed through school and experience.</p>
                </div>

                <div class="skills-panel">
                    <ul class="skills-list">
                        <?php foreach ($skills as $skill): ?>
                            <li><?php echo e($skill); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Hobbies and interests -->
        <section class="content-section" id="hobbies">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Things I enjoy</span>
                    <h2>Hobbies & Interests</h2>
                    <p>Activities that inspire me and make my free time meaningful.</p>
                </div>

                <div class="hobby-grid">
                    <?php foreach ($hobbies as $hobby): ?>
                        <article class="card hobby-card">
                            <div class="hobby-icon" aria-hidden="true"><?php echo e($hobby["icon"]); ?></div>
                            <h3><?php echo e($hobby["name"]); ?></h3>
                            <p><?php echo e($hobby["description"]); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Contact information -->
        <section class="content-section contact-section" id="contact">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Let's connect</span>
                    <h2>Contact Information</h2>
                    <p>Feel free to reach out for questions or opportunities.</p>
                </div>

                <div class="card contact-card">
                    <h3><?php echo e($fullName); ?></h3>
                    <div class="contact-details">
                        <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
                        <a href="tel:<?php echo e($phone); ?>"><?php echo e($phone); ?></a>
                        <span><?php echo e($location); ?></span>
                    </div>
                    <a class="button" href="mailto:<?php echo e($email); ?>">Send Me an Email</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Page footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <span><?php echo e($fullName); ?></span>. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>