<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dynamic Site</title>
    <style>
        body { font-family: sans-serif; margin: 0; }
        header { background-color: #333; color: white; padding: 10px 20px; }
        .user-info a { color: white; text-decoration: none; padding: 0 10px; }
        nav a { color: white; text-decoration: none; padding: 0 10px; }
        .container { padding: 20px; }
        footer { background-color: #333; color: white; padding: 10px 20px; text-align: center; position: absolute; bottom: 0; width: 100%;}
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
            <a href="mortgage_calculator.php">Mortgage Calculator</a>
        </nav>
        <div class="user-info">
	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
	<span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
	<a href="logout.php">Logout</a>
	<?php else: ?>
	<a href="login.php">Login</a>
	<a href="signup.php">Sign Up</a>
	<?php endif; ?>
</div>
    </header>
    <div class="container">