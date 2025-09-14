<?php include 'header.php'; ?>
<h1>Contact Us</h1>
<form action="data.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
<?php include 'footer.php'; ?>