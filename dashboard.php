<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicum Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header>
        <div class="profile-container">
            <div class="system-logo"> <!-- System logo here -->
                <img src="GCLogo.jpg" alt="Gordon College">
            </div>
            <div class="user-profile">
                <div class="profile-photo">
                    <img src="AppDev_System_Logo.png" alt="User Profile">
                </div>
                <div class="username">
                    <p>PractiEase</p>
                </div>
            </div>
        </div>
    </header>

    <section id="s1">
        <h1>Practicum Student:</h1>
        <form action="/action_page.php">
            <input type="text" id="student_name" placeholder="Enter name here.." name="search">
            <button type="submit">Search</button>
        </form>
        <!-- Add more details here -->
    </section>

    <section id="s2">
    <div class="container">
        <button class="icon-button">Icon 1</button>
        <button class="icon-button">Icon 2</button>
        <button class="icon-button">Icon 3</button>
    </div>
    </section>

    <section id="s3">
    <h1>Dash Board</h1>
    <table>
        <tr>
            <td>STUDENT NUMBER:</td>
            <td><span id="student-number">12345678</span></td>
        </tr>
        <tr>
            <td>PHONE NUMBER:</td>
            <td><span id="phone-number">(012) 345 6789 (MOB)</span></td>
        </tr>
        <tr>
            <td>EMAIL:</td>
            <td><span id="email">juanmagi@gmail.com</span></td>
        </tr>
        <tr>
            <td>WORKS AT:</td>
            <td><span id="works-at">JUANMAGI CO.</span></td>
        </tr>
        <!-- Add more rows here -->
    </table>
    </section>
    <table>
        <!-- Add your table here -->
    </table>
    <footer>
        <!-- Add your footer elements here -->
    </footer>
    <script>
        // Add your JavaScript here
        document.getElementById('student-name').innerText = 'New Student Name';
    </script>
</body>

</html>