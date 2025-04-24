<?php
session_start();

if (isset($_POST['submit'])) {
   // TEMPORARY BYPASS (REMOVE THIS WHEN DB IS READY)
   $_SESSION['admin_id'] = 1; // Dummy admin ID
   header('Location: dashboard.php');
   exit;

   // --- Uncomment this when DB is connected ---
   // include '../components/connect.php';
   // $name = $_POST['name'];
   // $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
   // $pass = $_POST['pass'];
   // $pass = filter_var($pass, FILTER_SANITIZE_SPECIAL_CHARS);

   // $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
   // $select_admin->execute([$name, $pass]);

   // if ($select_admin->rowCount() > 0) {
   //    $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
   //    $_SESSION['admin_id'] = $fetch_admin_id['id'];
   //    header('Location: dashboard.php');
   // } else {
   //    $message[] = 'incorrect username or password!';
   // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin login</title>
   <link rel="icon" href="images/LYgjKqzpQb.ico" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<section class="form-container" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 15px; padding: 20px; width: 300px; margin: auto; text-align: center;">

   <form action="" method="POST">
      <h3 style="color: #000000;">login now</h3>
      <input type="text" name="name" maxlength="20" required placeholder="enter your username" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" maxlength="20" required placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" name="submit" class="btn" style="background-color: #4CAF50; color: #fff; border: none; padding: 10px 15px; cursor: pointer;">
   </form>

</section>

</body>
</html>
