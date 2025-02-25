<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: #f4f4f4;
            color: #333;
            text-align: center;
        }
        header {
            background: #333;
            color: white;
            padding: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background: #555;
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .project {
            width: 30%;
            background: #ddd;
            padding: 15px;
            margin: 10px;
            border-radius: 5px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .footer {
            background: #333;
            color: white;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>My Portfolio</h1>
    <nav>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section id="about" class="container">
    <h2>About Me</h2>
    <p>Hello! I'm a web developer passionate about building modern and responsive websites.</p>
</section>

<section id="projects" class="container">
    <h2>My Projects</h2>
    <div class="projects">
        <div class="project">
            <h3>Project One</h3>
            <p>A web app built with HTML, CSS, and JavaScript.</p>
        </div>
        <div class="project">
            <h3>Project Two</h3>
            <p>A modern portfolio website with animations.</p>
        </div>
        <div class="project">
            <h3>Project Three</h3>
            <p>A business landing page with a sleek UI.</p>
        </div>
    </div>
</section>

<section id="contact" class="container">
    <h2>Contact Me</h2>
    <form class="contact-form">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea rows="4" placeholder="Your Message" required></textarea>
        <button class="btn" type="submit">Send</button>
    </form>
</section>

<footer class="footer">
    <p>&copy; 2025 My Portfolio. All rights reserved.</p>
</footer>

</body>
</html>
