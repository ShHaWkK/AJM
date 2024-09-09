<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <link rel="stylesheet" href="/assets/CSS/login.css">
</head>
<body>
    <div class="wrapper">
        <section class="login-section">
            <div class="container">
                <h2>Login</h2>
                <form action="/api/login" method="POST" id="loginForm">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="cta-button">Login</button>
                </form>
                <p><a href="/forgot-password">Forgot your password?</a></p>
            </div>
        </section>
    </div>

    <script>
        const form = document.getElementById('loginForm');
        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const response = await fetch('/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email, password })
            });

            const data = await response.json();
            if (response.ok) {
                // Stocker le token JWT dans le localStorage ou les cookies
                localStorage.setItem('jwt', data.token);
                alert('Login successful!');
                // Redirection ou autre action après le login
            } else {
                alert(data.message || 'Login failed!');
            }
        });
    </script>
</body>
</html>
