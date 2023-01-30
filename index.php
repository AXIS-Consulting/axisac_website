<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available For Hire</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<section id="hero">

    <div>
        <h1>Welcome</h1>
        <div id="animatedText"><span class="auto-type"></span></div>
        <p>based in Venice, Florida.</p>
        <a class="button" href="#about">About Me</a>
    </div>

</section>

<section id="resume">

    <div class="section-title">
        <h2>Resume</h2>
        <span class="underline"></span>
    </div>

    <div class="resume-container">

        <div>
            <div class="badge">2022 - Present</div>
            <h3 class="item-title">Jr. Developer</h3>
            <h4 class="organization">VCG Network</h4>
            <p class="resume-description">Apprenticeship under Senior Architect/Lead Developer (20+ years experience), On-the-job training.
                Learning the art of programming and various languages and methodologies.</p>
        </div>

        <div>
            <div class="badge">2021 - 2022</div>
            <h3 class="item-title">Shipping Associate</h3>
            <h4 class="organization">The UPS Store</h4>
            <p class="resume-description">Managed Inventory, Customer Service, Followed strict protocols for shipping and handling.</p>
        </div>

        <div>
            <div class="badge">2019 - 2021</div>
            <h3 class="item-title">Shift Manager</h3>
            <h4 class="organization">Jersey Mike's Subs</h4>
            <p class="resume-description">Managed Inventory, Customer Service, Handled money and the deposit, delegated tasks to employees, Management.</p>
        </div>

    </div>

</section>

<section id="portfolio">

    <div class="section-title">
        <h2>Portfolio</h2>
        <span class="underline"></span>
    </div>

    <div class="portfolio-container">

        <div>
            <h3>Project</h3>
            <a href="#">Link to project</a>
        </div>

        <div>
            <h3>Project</h3>
            <a href="#">Link to project</a>
        </div>

        <div>
            <h3>Project</h3>
            <a href="#">Link to project</a>
        </div>

        <div>
            <h3>Project</h3>
            <a href="#">Link to project</a>
        </div>

    </div>

</section>

<section id="skills">

    <div class="section-title">
        <h2>Skills</h2>
        <span class="underline"></span>
    </div>

    <div class="skills-list">
        <ul>
            <li>HTML 5</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>JSON</li>
            <li>PHP</li>
            <li>Laravel</li>
            <li>Homebrew</li>
            <li>Terminal</li>
            <li>Github</li>
            <li>MySql</li>
            <li>TablePlus</li>
            <li>MacOS</li>
            <li>Windows</li>
            <li>General Graphics Editing</li>
            <li>Sublime Text</li>
            <li>PHP Storm</li>
            <li>Excel</li>
            <li>Word</li>
            <li>Bootstrap</li>
        </ul>
    </div>

</section>

<section id="about">

    <div class="about-container">

        <div>
            <h2>I'm <span class="highlight">Aaron Curtis,</span> a Web Developer</h2>
            <br>
            <p>I'm a self-taught developer. For a long time I was working in the food industry while in college. I was unhappy where my life was heading, and wanted to do something that was long-lasting, and had impact. That is when I discovered Programming. </p>
            <p>I'm a Junior Developer, looking for opportunities to keep learning, and delve into the professional space of programming and development.</p>
        </div>

        <div class="stats">
            <div><strong>Name:</strong> Aaron Curtis</div>
            <div><strong>Phone:</strong> (813) 481-5989</div>
            <div><strong>Email:</strong> <a href="mail:adcurtis01@gmail.com">adcurtis01@gmail.com</a></div>
        </div>

    </div>

</section>

<footer>
    <p>Copyright &copy; <?php echo date('Y') ?></p>
</footer>

<nav>
    <div><a class="nav-item" href="/"><i class="fa-solid fa-house-chimney"></i><span>Home</span></a></div>
    <div><a class="nav-item" href="#resume"><i class="fa-solid fa-scroll"></i><span>Resume</span></a></div>
    <div><a class="nav-item" href="#portfolio"><i class="fa-solid fa-toolbox"></i><span>Portfolio</span></a></div>
    <div><a class="nav-item" href="#skills"><i class="fa-solid fa-laptop-code"></i><span>Skills</span></a></div>
    <div><a class="nav-item" href="#about"><i class="fa-solid fa-id-card"></i><span>About</span></a></div>
</nav>

<script src="/js/all.min.js"></script>
<script src="/js/typedjs.js"></script>

<script>
    let typed = new Typed(".auto-type", {
        strings: ["I'm a Junior Developer", "Looking for Opportunities"],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
    });
</script>

</body>
</html>

