<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Darussalam</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <div class="login-page">
        <!-- LEFT SIDE -->
        <div class="login-intro">

            <div class="login-intro-content">

                <div class="login-brand">

                    <div class="login-brand-icon">
                        <i class="bi bi-book"></i>
                    </div>

                    <div>
                        <h1>Darussalam</h1>
                        <p>Madrasa Management System</p>
                    </div>

                </div>


                <div class="login-intro-message">

                    <h2>
                        Manage your madrasa
                        <br>
                        with ease.
                    </h2>

                    <p>
                        Manage students, attendance, Hifz progress,
                        results and fees from one simple system.
                    </p>

                </div>


                <div class="login-intro-footer">

                    <i class="bi bi-shield-check"></i>

                    <span>
                        Secure &amp; Simple Management
                    </span>

                </div>

            </div>

        </div>


        <!-- RIGHT SIDE -->

        <div class="login-form-side">

            <div class="login-card">


                <!-- Logo -->

                <div class="login-card-logo">

                    <div class="login-logo-icon">
                        <i class="bi bi-moon-stars"></i>
                    </div>

                </div>


                <!-- Heading -->

                <div class="login-heading">

                    <h2>Welcome Back</h2>

                    <p>
                        Sign in to continue to your dashboard
                    </p>

                </div>


                <!-- Login Form -->

                <form id="loginForm" novalidate>


                    <!-- Username -->

                    <div class="login-form-group">

                        <label for="loginUsername">
                            Username or Email
                        </label>

                        <div class="login-input-wrapper">

                            <i class="bi bi-person"></i>

                            <input
                                type="text"
                                id="loginUsername"
                                name="username"
                                placeholder="Enter your username"
                                autocomplete="username"
                                required>

                        </div>

                        <small class="login-error" id="usernameError"></small>

                    </div>


                    <!-- Password -->

                    <div class="login-form-group">

                        <div class="login-password-label">

                            <label for="loginPassword">
                                Password
                            </label>

                            <a href="#" class="forgot-password">
                                Forgot Password?
                            </a>

                        </div>


                        <div class="login-input-wrapper">

                            <i class="bi bi-lock"></i>

                            <input
                                type="password"
                                id="loginPassword"
                                name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required>

                            <button
                                type="button"
                                class="password-toggle"
                                id="passwordToggle"
                                aria-label="Show password">
                                <i class="bi bi-eye"></i>
                            </button>

                        </div>
                        <small class="login-error" id="passwordError"></small>

                    </div>

                    <!-- Remember Me -->
                    <div class="login-options">

                        <label class="remember-me">

                            <input type="checkbox" id="rememberMe">
                            <span>Remember me</span>

                        </label>

                    </div>

                    <!-- Sign In -->
                    <button type="submit" class="login-submit-btn">
                        <span>Sign In</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>

                </form>

                <!-- Footer -->
                <div class="login-card-footer">

                    <p>Darussalam Madrasa Management System</p>

                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script>
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    </script>
    <!-- Login JS -->
    <script src="js/login.js"></script>
</body>

</html>