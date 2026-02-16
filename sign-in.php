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
                <button class="tab-btn active" onclick="showTab('signin')">Sign In</button>
                <button class="tab-btn" onclick="showTab('signup')">Create Account</button>
            </div>
            
            <!-- Sign In Form -->
            <form id="signinForm" class="tab-content active">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" id="signinEmail" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="signinPassword" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePassword('signinPassword')">👁️</span>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">Sign In</button>
            </form>
            
            <!-- Create Account Form -->
            <form id="signupForm" class="tab-content">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="fullName" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label>Student ID / Librarian ID</label>
                    <input type="text" id="userId" placeholder="Enter your ID" required>
                </div>
                
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Role</label>
                    <select id="role" required>
                        <option value="">Select your role</option>
                        <option value="student">Student</option>
                        <option value="librarian">Librarian</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                
                <button type="submit" class="submit-btn">Create Account</button>
            </form>
            
            <button type="button" class="back-btn" onclick="window.location.href='index.html'">Back to Home</button>
        </div>
    </div>
    
    <script src="sign-in.js"></script>
</body>
</html>
