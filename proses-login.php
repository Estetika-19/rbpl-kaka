<?php
// include("koneksi.php");
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $conn->real_escape_string($_POST['username']);
//     $password = $conn->real_escape_string($_POST['password']);

//     $sql = "SELECT id, username, password FROM admin WHERE username = '$username'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         print_r($password);
//         print_r($row)['password'];
//         var_dump(password_verify($password, $row['password']));
//         if (password_verify($password, $row['password'])) {
//             $_SESSION['loggedin'] = true;
//             $_SESSION['id'] = $row['id'];
//             $_SESSION['username'] = $row['username'];

//             header("location: index.php");
//         } else {
//             echo "Invalid password.";
//         }
//     } else {
//         echo "No account found with that username.";
//         // header("location: login.php");
//     }
// }


?>

<?php
include("koneksi.php");
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT id, username, password FROM admin WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // set session
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("location: index.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that username.";
        // header("location: login.php");
    }
}