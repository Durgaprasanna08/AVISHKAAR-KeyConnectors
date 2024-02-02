<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Website</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    scroll-behavior: smooth; 
}
/*for navbar*/
.navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: center;
}

.navbar a {
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
} 
/*Style for the middle layer */
.content-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 100px;
}

.text-content {
    text-align: left;
}

.text-content h1 {
    margin-bottom: 10px;
}

.text-content h5 {
    margin-top: 0;
}

.image-container {
    padding-left: 20px;
    flex-shrink: 0;
}

.image-container img {
    max-width: 100%;
    height: auto;
    display: block;
}
/*this is for 2nd discription and image */
.section-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 20px auto;
}

.section {
    display: flex;
    text-align: left;
    padding: 20px;
}

.section img {
    max-width: 50%;
    height: auto;
    margin-right: 20px; 
}

.text-content {
    flex: 1;
}

.special-section {
    display: flex;
    gap: 20px;
    align-items: center;
}

.special-section .section {
    text-align: left;
    flex: 1;
}
/*bellow for footer */
.contact-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    margin: 0 auto;
    padding: 20px;
    background-color: black;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-box {
    width: 40%;
    color: white;
}

.form-box label,
.form-box textarea,
.form-box input,
.form-box button {
    width: 100%;
    margin-bottom: 10px;
    color: white;
}

.form-box textarea {
    height: 100px;
}

.form-box input {
    width: 100%;
}

.form-box button {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    border: none;
}

.message-box {
    width: 60%;
    padding-right: 200px;
    color: white;
}

.message-box h2 {
    text-align: right;
    margin-bottom: 10px;
}

.message-box p {
    text-align: right;
    margin-bottom: 20px;
}
</style>
</head>
<body>
    <div class="navbar">
        <a href="#home" onclick="homescroll()">Home</a>
        <a href="#about" onclick="scrollToSection()">About</a> 
        <a href="login.php">Login</a>
        <a href="registration.php">Register</a>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Website</title>
</head>
<body>
    <div class="header" id="home">
        <div class="content-container">
            <div class="text-content">
                <h1>Securing Power Infrastructure</h1>
                <h5>"Ashwat" Solution for Optimal Vegetation Management</h5>
            </div>
            <div class="image-container">
                <img src="https://ashwatdotblog.files.wordpress.com/2023/10/ashwat-2-3.png?w=1200" alt="Ashwat Solution Image">
            </div>
        </div>
    </div>
    <div class="section-container"  id="about">
    <section class="section">
        <img src="https://ashwatdotblog.files.wordpress.com/2023/10/whatsapp-image-2023-10-07-at-10.03.44-pm.jpeg?w=460" alt="Environmental Impact" />
        <div class="text-content">
            <h2>Environmental impact assessment</h2>
            <p>Evaluate the impact of infrastructure projects, such as highways or dams, on local vegetation.</p>
        </div>
    </section>

    <section class="section">
        <img src="https://ashwatdotblog.files.wordpress.com/2023/10/whatsapp-image-2023-10-07-at-10.03.43-pm.jpeg?w=468" alt="Wildfire Prevention" />
        <div class="text-content">
            <h2>Wildfire prevention</h2>
            <p>Identify areas with a high risk of wildfires based on vegetation density and dryness. Predict</p>
        </div>
    </section>
</div>

<div class="special-section">
    <section class="section">
        <img src="https://ashwatdotblog.files.wordpress.com/2023/10/whatsapp-image-2023-10-07-at-10.03.42-pm.jpeg?w=800" alt="Railway Maintenance" />
        <div class="text-content">
            <h2>Railway and pipeline maintenance</h2>
            <p>Identify vegetation near power lines, railways, and roads to plan for maintenance and prevent hazards.</p>
        </div>
    </section>

    <section class="section">
        <img src="https://ashwatdotblog.files.wordpress.com/2023/10/whatsapp-image-2023-10-07-at-10.03.40-pm.jpeg?w=1024" alt="Educational Research" />
        <div class="text-content">
            <h2>Educational research</h2>
            <p>It serves as a valuable tool to raise awareness about responsible vegetation management and its impact on the environment.</p>
        </div>
    </section>
</div>
<footer>
     
    <div class="contact-form">
        <div class="form-box">
            <label for="name">Name (required)</label>
            <input type="text" id="name"  name="name" required>

            <label for="email">Email (required)</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message"  placeholder="Type your message here..." required style="color: black"></textarea>

            <button type="submit">Send</button>
        </div>
        <div class="message-box">
            
            <h2>Let's chat</h2>
            <p>Questions, comments, or requests? Feel free to reach out; we’d love to hear from you.</p>
        </div>

    </div>
    </footer>
    
    </body>
</html>
<script>
        function scrollToSection() {
            document.getElementById('about').scrollIntoView({
                behavior: 'smooth'
            });
        }
        function homescroll() {
            document.getElementById('home').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
