<?php 

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

unset($_SESSION['login_error'], $_SESSION['register_error'], $_SESSION['active_form']);

function showError($error) {
    return !empty($error) ? "<div class='error-message'>$error</div>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign In - Library Book Tracker</title>
    <link rel="stylesheet" href="sign-in.css">
</head>
<body>
    <div class="signin-container">
        <div class="signin-card">
            <h1>📚 Library Book Tracker</h1>
            
            <div class="tabs">
                <button class="tab-btn <?= isActiveForm('login', $activeForm); ?>" onclick="showTab('signin')">Sign In</button>
                <button class="tab-btn <?= isActiveForm('register', $activeForm); ?>" onclick="showTab('signup')">Create Account</button>
            </div>
            
            <!-- Sign In Form -->
            <form action="login_register.php" method="POST" id="signinForm" class="tab-content <?= isActiveForm('login', $activeForm); ?>">
                <?= showError($errors['login']); ?>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" id="signinEmail" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <input type="password" name="password" id="signinPassword" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePassword('signinPassword')">👁️</span>
                    </div>
                </div>
                
                <button type="submit" name="login" class="submit-btn">Sign In</button>
            </form>
            
            <!-- Create Account Form -->
            <form action="login_register.php" method="POST" id="signupForm" class="tab-content <?= isActiveForm('register', $activeForm); ?>">
                <?= showError($errors['register']); ?>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label>Student ID / Librarian ID</label>
                    <input type="text" name="id" id="id" placeholder="Enter your ID" required>
                </div>
                
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" id="role" required>
                        <option value="">Select your role</option>
                        <option value="student">Student</option>
                        <option value="librarian">Librarian</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                
                <button type="submit" name="register" class="submit-btn">Create Account</button>
            </form>
            
            <button type="button" class="back-btn" onclick="window.location.href='index.php'">Back to Home</button>
        </div>
    </div>
    
    <script src="sign-in.js"></script>
</body>
</html>
