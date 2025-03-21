<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CVMaker</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Learn</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <main>
            <section>
                <h2>Log In</h2>
                <h3>Already have a account?</h3>
                <form action="/login" method="post">
                    <input type="text" name="email" placeholder="Type here you email"
                        required>
                    <input type="password" name="password" placeholder="Type here your password"
                        required>
                    <button type="submit">Log In</button>
            </section>
        </main>
        <aside>
            <section>
                <h1>Welcome to CVMaker</h1>
                <p>Build your Curriculum Vitae in minutes</p>
                <a href="#">Get Started</a>
            </section>
        </aside>
        
        <footer>
            <p>&copy; 2025 CVMaker by Tacio Kikuchi</p>
        </footer>
    </body>
</html>