<?php
require('../stylesheets/DBConnection.php')
?>
<div class="bg-white rounded-lg shadow-lg p-8 max-w-md mx-auto">
  <h2 class="text-xl font-medium mb-4">Log In</h2>
  <form method="post" action="login.php">
    <div class="mb-4">
      <label class="block text-gray-700 font-medium mb-2" for="username">Username</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-lg" type="text" id="username" name="username" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 font-medium mb-2" for="password">Password</label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded-lg" type="password" id="password" name="password" required>
    </div>
    <div>
      <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg" type="submit">Log In</button>
    </div>
  </form>
</div>







<?php
// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the user information into the database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
  echo 'User created successfully';
} else {
  echo 'Error creating user: ' . $conn->error;
}

// Close the connection
$conn->close();
?>

?>