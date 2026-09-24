<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Darussalam</title>
    <!-- ================= BOOTSTRAP CSS ================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ================= BOOTSTRAP ICONS ================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- ================= CUSTOM CSS ================= -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="dashboard-wrapper">

        <!-- ================= SIDEBAR ================= -->
        <aside class="sidebar">

            <div class="brand">

                <h3>Darussalam</h3>
                <p>Madrasa Management</p>

            </div>

            <nav class="sidebar-menu">

                <!-- Dashboard -->
                <a href="../index.php" class="menu-item">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>

                <!-- Students -->
                <a href="students.php" class="menu-item">
                    <i class="bi bi-people"></i>
                    <span>Students</span>
                </a>

                <!-- Attendance -->
                <a href="attendance.php" class="menu-item">
                    <i class="bi bi-calendar-check"></i>
                    <span>Attendance</span>
                </a>

                <!-- Hifz -->
                <a href="hifz.php" class="menu-item">
                    <i class="bi bi-book"></i>
                    <span>Hifz</span>
                </a>

                <!-- Results -->
                <a href="results.php" class="menu-item">
                    <i class="bi bi-bar-chart"></i>
                    <span>Results</span>
                </a>

                <!-- Fees -->
                <a href="fees.php" class="menu-item">
                    <i class="bi bi-cash-stack"></i>
                    <span>Fees & Payments</span>
                </a>

                <!-- Teachers -->
                <a href="teachers.php" class="menu-item">
                    <i class="bi bi-person-badge"></i>

                    <span>Teachers</span>
                </a>

            </nav>

            <!-- Sidebar Bottom -->
            <div class="sidebar-bottom">

                <!-- Settings Active -->
                <a href="settings.php" class="menu-item active">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>

            </div>
        </aside>

        <!-- ================= MAIN CONTENT ================= -->
        <main class="main-content">

            <!-- Top Navbar -->
            <div class="top-navbar">

                <div>

                    <h4>Settings</h4>
                    <p>Manage madrasa system settings</p>

                </div>
            </div>

            <!-- ================= PAGE CONTENT ================= -->
            <section class="content-section">

                <!-- ================= SETTINGS HEADER ================= -->

                <div class="settings-page-header">

                    <div class="settings-heading-box">

                        <h2>System Settings</h2>

                        <p>
                            Manage your madrasa system preferences and information
                        </p>

                    </div>

                </div>


                <!-- ================= SETTINGS CATEGORIES ================= -->

                <div class="settings-category-grid">

                    <!-- Profile -->

                    <div class="settings-category-card">

                        <div class="settings-category-icon profile">
                            <i class="bi bi-person"></i>
                        </div>

                        <div class="settings-category-info">

                            <h3>Profile Settings</h3>

                            <p>
                                Manage administrator profile information
                            </p>

                        </div>

                        <i class="bi bi-chevron-right settings-category-arrow"></i>

                    </div>


                    <!-- Madrasa -->

                    <div class="settings-category-card">

                        <div class="settings-category-icon madrasa">
                            <i class="bi bi-building"></i>
                        </div>

                        <div class="settings-category-info">

                            <h3>Madrasa Information</h3>

                            <p>
                                Manage madrasa name, address and contact details
                            </p>

                        </div>

                        <i class="bi bi-chevron-right settings-category-arrow"></i>

                    </div>


                    <!-- Fees -->

                    <div class="settings-category-card">

                        <div class="settings-category-icon fees">
                            <i class="bi bi-cash-stack"></i>
                        </div>

                        <div class="settings-category-info">

                            <h3>Fee Settings</h3>

                            <p>
                                Manage monthly fees, due dates and payment details
                            </p>

                        </div>

                        <i class="bi bi-chevron-right settings-category-arrow"></i>

                    </div>


                    <!-- Academic -->

                    <div class="settings-category-card">

                        <div class="settings-category-icon academic">
                            <i class="bi bi-book"></i>
                        </div>

                        <div class="settings-category-info">

                            <h3>Academic Settings</h3>

                            <p>
                                Manage Hifz levels, exams and academic year
                            </p>

                        </div>

                        <i class="bi bi-chevron-right settings-category-arrow"></i>

                    </div>


                    <!-- Notifications -->

                    <div class="settings-category-card">

                        <div class="settings-category-icon notifications">
                            <i class="bi bi-bell"></i>
                        </div>

                        <div class="settings-category-info">

                            <h3>Notification Settings</h3>

                            <p>
                                Manage fee, attendance and result notifications
                            </p>

                        </div>

                        <i class="bi bi-chevron-right settings-category-arrow"></i>

                    </div>


                    <!-- Security -->

                    <div class="settings-category-card">

                        <div class="settings-category-icon security">
                            <i class="bi bi-shield-lock"></i>
                        </div>

                        <div class="settings-category-info">

                            <h3>Security</h3>

                            <p>
                                Manage password and account security
                            </p>

                        </div>

                        <i class="bi bi-chevron-right settings-category-arrow"></i>

                    </div>

                </div>

                <!-- Profile Settings Details -->

                <div class="settings-detail-panel" id="profileSettingsPanel">

                    <div class="settings-detail-header">

                        <div>
                            <h3>Profile Settings</h3>
                            <p>Manage administrator profile information</p>
                        </div>

                        <button type="button" class="settings-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Settings
                        </button>

                    </div>


                    <div class="profile-settings-content">

                        <!-- Profile Photo -->

                        <div class="profile-photo-section">

                            <div class="profile-photo">
                                S
                            </div>

                            <button type="button" class="profile-photo-btn">
                                <i class="bi bi-camera"></i>
                                Add Photo
                            </button>

                        </div>


                        <!-- Profile Information -->

                        <div class="profile-form">

                            <div class="profile-form-row">

                                <div class="profile-form-group">

                                    <label for="adminName">
                                        Full Name
                                    </label>

                                    <input
                                        type="text"
                                        id="adminName"
                                        value="Salman">

                                </div>


                                <div class="profile-form-group">

                                    <label for="adminRole">
                                        Role
                                    </label>

                                    <input
                                        type="text"
                                        id="adminRole"
                                        value="Administrator"
                                        readonly>

                                </div>

                            </div>


                            <div class="profile-form-row">

                                <div class="profile-form-group">

                                    <label for="adminEmail">
                                        Email Address
                                    </label>

                                    <input
                                        type="email"
                                        id="adminEmail"
                                        value="salman@example.com">

                                </div>


                                <div class="profile-form-group">

                                    <label for="adminPhone">
                                        Phone Number
                                    </label>

                                    <input
                                        type="tel"
                                        id="adminPhone"
                                        value="98765 43210">

                                </div>

                            </div>


                            <div class="profile-form-actions">

                                <button
                                    type="button"
                                    class="settings-cancel-btn">
                                    Cancel
                                </button>

                                <button
                                    type="button"
                                    class="settings-save-btn">
                                    <i class="bi bi-check-lg"></i>
                                    Save Changes
                                </button>

                            </div>

                        </div>

                    </div>


                    <!-- Change Password -->

                    <div class="change-password-box">

                        <div class="change-password-info">

                            <div class="change-password-icon">
                                <i class="bi bi-lock"></i>
                            </div>

                            <div>

                                <h4>Change Password</h4>

                                <p>
                                    Update your administrator account password
                                </p>

                            </div>

                        </div>


                        <button type="button" class="change-password-btn">
                            Change Password
                        </button>

                    </div>

                </div>

                <!-- Madrasa Information -->

                <div class="settings-detail-panel madrasa-information-panel">

                    <div class="settings-detail-header">

                        <div>
                            <h3>Madrasa Information</h3>

                            <p>
                                Manage madrasa name, address and contact details
                            </p>
                        </div>

                        <button type="button" class="settings-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Settings
                        </button>

                    </div>


                    <div class="madrasa-form">

                        <div class="madrasa-form-row">

                            <div class="madrasa-form-group">

                                <label for="madrasaName">
                                    Madrasa Name
                                </label>

                                <input
                                    type="text"
                                    id="madrasaName"
                                    value="Darussalam Hifz Madrasa">

                            </div>


                            <div class="madrasa-form-group">

                                <label for="madrasaHead">
                                    Head / Principal Name
                                </label>

                                <input
                                    type="text"
                                    id="madrasaHead"
                                    placeholder="Enter head name">

                            </div>

                        </div>


                        <div class="madrasa-form-row">

                            <div class="madrasa-form-group">

                                <label for="madrasaPhone">
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    id="madrasaPhone"
                                    placeholder="Enter phone number">

                            </div>


                            <div class="madrasa-form-group">

                                <label for="madrasaEmail">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="madrasaEmail"
                                    placeholder="Enter email address">

                            </div>

                        </div>


                        <div class="madrasa-form-row">

                            <div class="madrasa-form-group">

                                <label for="madrasaYear">
                                    Established Year
                                </label>

                                <input
                                    type="number"
                                    id="madrasaYear"
                                    placeholder="Example: 2015">

                            </div>


                            <div class="madrasa-form-group">

                                <label for="madrasaWebsite">
                                    Website
                                </label>

                                <input
                                    type="text"
                                    id="madrasaWebsite"
                                    placeholder="www.example.com">

                            </div>

                        </div>


                        <div class="madrasa-form-group">

                            <label for="madrasaAddress">
                                Address
                            </label>

                            <textarea
                                id="madrasaAddress"
                                rows="3"
                                placeholder="Enter madrasa address"></textarea>

                        </div>


                        <div class="madrasa-form-group">

                            <label for="madrasaDescription">
                                Description
                            </label>

                            <textarea
                                id="madrasaDescription"
                                rows="4"
                                placeholder="Enter madrasa description"></textarea>

                        </div>


                        <div class="madrasa-form-actions">

                            <button
                                type="button"
                                class="settings-cancel-btn">
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="settings-save-btn">
                                <i class="bi bi-check-lg"></i>
                                Save Changes
                            </button>

                        </div>

                    </div>

                </div>

                <!-- Fee Settings -->

                <div class="settings-detail-panel fee-settings-panel">

                    <div class="settings-detail-header">

                        <div>
                            <h3>Fee Settings</h3>

                            <p>
                                Manage monthly fees, due dates and payment details
                            </p>
                        </div>

                        <button type="button" class="settings-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Settings
                        </button>

                    </div>


                    <div class="fee-settings-form">

                        <div class="fee-form-row">

                            <div class="fee-form-group">

                                <label for="monthlyFee">
                                    Monthly Fee
                                </label>

                                <div class="fee-input-wrapper">
                                    <span>₹</span>

                                    <input
                                        type="number"
                                        id="monthlyFee"
                                        value="1000"
                                        min="0">
                                </div>

                            </div>


                            <div class="fee-form-group">

                                <label for="feeDueDate">
                                    Fee Due Date
                                </label>

                                <select id="feeDueDate">

                                    <option value="5">5th of every month</option>
                                    <option value="10" selected>10th of every month</option>
                                    <option value="15">15th of every month</option>
                                    <option value="20">20th of every month</option>

                                </select>

                            </div>

                        </div>


                        <div class="fee-form-row">

                            <div class="fee-form-group">

                                <label for="lateFee">
                                    Late Fee
                                </label>

                                <div class="fee-input-wrapper">
                                    <span>₹</span>

                                    <input
                                        type="number"
                                        id="lateFee"
                                        value="0"
                                        min="0">
                                </div>

                            </div>


                            <div class="fee-form-group">

                                <label for="gracePeriod">
                                    Grace Period
                                </label>

                                <select id="gracePeriod">

                                    <option value="0">No Grace Period</option>
                                    <option value="3" selected>3 Days</option>
                                    <option value="5">5 Days</option>
                                    <option value="7">7 Days</option>

                                </select>

                            </div>

                        </div>


                        <div class="fee-form-group">

                            <label for="paymentMethods">
                                Accepted Payment Methods
                            </label>

                            <div class="fee-payment-methods">

                                <label class="fee-method-option">
                                    <input
                                        type="checkbox"
                                        checked>
                                    <span>
                                        <i class="bi bi-cash"></i>
                                        Cash
                                    </span>
                                </label>


                                <label class="fee-method-option">
                                    <input
                                        type="checkbox"
                                        checked>
                                    <span>
                                        <i class="bi bi-phone"></i>
                                        UPI
                                    </span>
                                </label>


                                <label class="fee-method-option">
                                    <input
                                        type="checkbox"
                                        checked>
                                    <span>
                                        <i class="bi bi-bank"></i>
                                        Bank Transfer
                                    </span>
                                </label>

                            </div>

                        </div>


                        <div class="fee-form-group">

                            <label for="feeNotes">
                                Fee Notes
                            </label>

                            <textarea
                                id="feeNotes"
                                rows="4"
                                placeholder="Enter any additional fee information..."></textarea>

                        </div>


                        <div class="fee-form-actions">

                            <button
                                type="button"
                                class="settings-cancel-btn">
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="settings-save-btn">
                                <i class="bi bi-check-lg"></i>
                                Save Changes
                            </button>

                        </div>

                    </div>

                </div>

                <!-- Academic Settings -->

                <div class="settings-detail-panel academic-settings-panel">

                    <div class="settings-detail-header">

                        <div>
                            <h3>Academic Settings</h3>

                            <p>
                                Manage Hifz levels, examinations and academic year
                            </p>
                        </div>

                        <button type="button" class="settings-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Settings
                        </button>

                    </div>


                    <div class="academic-settings-form">

                        <div class="academic-form-row">

                            <div class="academic-form-group">

                                <label for="academicYear">
                                    Academic Year
                                </label>

                                <select id="academicYear">

                                    <option value="2026-2027" selected>
                                        2026 - 2027
                                    </option>

                                    <option value="2025-2026">
                                        2025 - 2026
                                    </option>

                                    <option value="2027-2028">
                                        2027 - 2028
                                    </option>

                                </select>

                            </div>


                            <div class="academic-form-group">

                                <label for="currentTerm">
                                    Current Term
                                </label>

                                <select id="currentTerm">

                                    <option value="Term 1" selected>
                                        Term 1
                                    </option>

                                    <option value="Term 2">
                                        Term 2
                                    </option>

                                    <option value="Term 3">
                                        Term 3
                                    </option>

                                </select>

                            </div>

                        </div>


                        <div class="academic-form-group">

                            <label>
                                Hifz Levels
                            </label>

                            <div class="academic-level-list">

                                <div class="academic-level-item">

                                    <div>
                                        <strong>Hifz Level 1</strong>
                                        <span>Beginning Hifz students</span>
                                    </div>

                                    <button type="button" class="academic-edit-btn">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </button>

                                </div>


                                <div class="academic-level-item">

                                    <div>
                                        <strong>Hifz Level 2</strong>
                                        <span>Intermediate Hifz students</span>
                                    </div>

                                    <button type="button" class="academic-edit-btn">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </button>

                                </div>


                                <div class="academic-level-item">

                                    <div>
                                        <strong>Hifz Level 3</strong>
                                        <span>Advanced Hifz students</span>
                                    </div>

                                    <button type="button" class="academic-edit-btn">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </button>

                                </div>


                                <div class="academic-level-item">

                                    <div>
                                        <strong>Revision</strong>
                                        <span>Students revising completed Hifz</span>
                                    </div>

                                    <button type="button" class="academic-edit-btn">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </button>

                                </div>

                            </div>

                        </div>


                        <div class="academic-form-group">

                            <label>
                                Examination Types
                            </label>

                            <div class="academic-exam-list">

                                <div class="academic-exam-item">
                                    <i class="bi bi-journal-text"></i>
                                    <span>Monthly Test</span>
                                </div>

                                <div class="academic-exam-item">
                                    <i class="bi bi-journal-check"></i>
                                    <span>Quarterly Exam</span>
                                </div>

                                <div class="academic-exam-item">
                                    <i class="bi bi-book"></i>
                                    <span>Half Yearly Exam</span>
                                </div>

                                <div class="academic-exam-item">
                                    <i class="bi bi-award"></i>
                                    <span>Annual Exam</span>
                                </div>

                            </div>

                        </div>


                        <div class="academic-form-actions">

                            <button
                                type="button"
                                class="settings-cancel-btn">
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="settings-save-btn">
                                <i class="bi bi-check-lg"></i>
                                Save Changes
                            </button>

                        </div>

                    </div>

                </div>

                <!-- Notification Settings -->

                <div class="settings-detail-panel notification-settings-panel">

                    <div class="settings-detail-header">

                        <div>
                            <h3>Notification Settings</h3>

                            <p>
                                Manage fee, attendance and result notifications
                            </p>
                        </div>

                        <button type="button" class="settings-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Settings
                        </button>

                    </div>


                    <div class="notification-settings-form">

                        <div class="notification-section">

                            <div class="notification-section-header">

                                <div>
                                    <h4>Fee Notifications</h4>
                                    <p>Receive notifications related to student fees</p>
                                </div>

                            </div>


                            <div class="notification-option">

                                <div class="notification-option-info">

                                    <div class="notification-option-icon">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>

                                    <div>
                                        <strong>Fee Due Reminder</strong>
                                        <span>Notify when monthly fees are due</span>
                                    </div>

                                </div>

                                <label class="notification-switch">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>

                            </div>


                            <div class="notification-option">

                                <div class="notification-option-info">

                                    <div class="notification-option-icon">
                                        <i class="bi bi-exclamation-circle"></i>
                                    </div>

                                    <div>
                                        <strong>Pending Fee Alert</strong>
                                        <span>Notify when a student's fee is pending</span>
                                    </div>

                                </div>

                                <label class="notification-switch">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>

                            </div>

                        </div>


                        <div class="notification-section">

                            <div class="notification-section-header">

                                <div>
                                    <h4>Attendance Notifications</h4>
                                    <p>Receive notifications about student attendance</p>
                                </div>

                            </div>


                            <div class="notification-option">

                                <div class="notification-option-info">

                                    <div class="notification-option-icon">
                                        <i class="bi bi-calendar-check"></i>
                                    </div>

                                    <div>
                                        <strong>Absent Student Alert</strong>
                                        <span>Notify when a student is marked absent</span>
                                    </div>

                                </div>

                                <label class="notification-switch">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>

                            </div>


                            <div class="notification-option">

                                <div class="notification-option-info">

                                    <div class="notification-option-icon">
                                        <i class="bi bi-person-x"></i>
                                    </div>

                                    <div>
                                        <strong>Daily Attendance Summary</strong>
                                        <span>Receive daily attendance summary</span>
                                    </div>

                                </div>

                                <label class="notification-switch">
                                    <input type="checkbox">
                                    <span></span>
                                </label>

                            </div>

                        </div>


                        <div class="notification-section">

                            <div class="notification-section-header">

                                <div>
                                    <h4>Result Notifications</h4>
                                    <p>Receive notifications related to examination results</p>
                                </div>

                            </div>


                            <div class="notification-option">

                                <div class="notification-option-info">

                                    <div class="notification-option-icon">
                                        <i class="bi bi-bar-chart"></i>
                                    </div>

                                    <div>
                                        <strong>Result Published</strong>
                                        <span>Notify when examination results are published</span>
                                    </div>

                                </div>

                                <label class="notification-switch">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>

                            </div>

                        </div>


                        <div class="notification-form-actions">

                            <button
                                type="button"
                                class="settings-cancel-btn">
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="settings-save-btn">
                                <i class="bi bi-check-lg"></i>
                                Save Changes
                            </button>

                        </div>

                    </div>

                </div>

                <!-- Security Settings -->

                <div class="settings-detail-panel security-settings-panel">

                    <div class="settings-detail-header">

                        <div>
                            <h3>Security</h3>

                            <p>
                                Manage your password and account security
                            </p>
                        </div>

                        <button type="button" class="settings-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Settings
                        </button>

                    </div>


                    <div class="security-settings-form">

                        <!-- Change Password -->

                        <div class="security-section">

                            <div class="security-section-header">

                                <div class="security-section-icon">
                                    <i class="bi bi-key"></i>
                                </div>

                                <div>
                                    <h4>Change Password</h4>
                                    <p>Update your administrator account password</p>
                                </div>

                            </div>


                            <div class="security-password-form">

                                <div class="security-form-group">

                                    <label for="currentPassword">
                                        Current Password
                                    </label>

                                    <div class="security-password-input">

                                        <input
                                            type="password"
                                            id="currentPassword"
                                            placeholder="Enter current password">

                                        <button
                                            type="button"
                                            class="password-toggle-btn">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </div>

                                </div>


                                <div class="security-form-group">

                                    <label for="newPassword">
                                        New Password
                                    </label>

                                    <div class="security-password-input">

                                        <input
                                            type="password"
                                            id="newPassword"
                                            placeholder="Enter new password">

                                        <button
                                            type="button"
                                            class="password-toggle-btn">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </div>

                                </div>


                                <div class="security-form-group">

                                    <label for="confirmPassword">
                                        Confirm New Password
                                    </label>

                                    <div class="security-password-input">

                                        <input
                                            type="password"
                                            id="confirmPassword"
                                            placeholder="Confirm new password">

                                        <button
                                            type="button"
                                            class="password-toggle-btn">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Account Security -->

                        <div class="security-section">

                            <div class="security-section-title">
                                <h4>Account Security</h4>
                                <p>Review your account security options</p>
                            </div>


                            <div class="security-option">

                                <div class="security-option-info">

                                    <div class="security-option-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>

                                    <div>
                                        <strong>Secure Login</strong>
                                        <span>
                                            Keep your administrator account protected
                                        </span>
                                    </div>

                                </div>

                                <span class="security-status-badge">
                                    Active
                                </span>

                            </div>


                            <div class="security-option">

                                <div class="security-option-info">

                                    <div class="security-option-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </div>

                                    <div>
                                        <strong>Last Password Change</strong>
                                        <span>
                                            Password has not been changed recently
                                        </span>
                                    </div>

                                </div>

                                <span class="security-date">
                                    Not available
                                </span>

                            </div>

                        </div>


                        <!-- Security Actions -->

                        <div class="security-actions">

                            <button
                                type="button"
                                class="settings-cancel-btn">
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="settings-save-btn">
                                <i class="bi bi-check-lg"></i>
                                Update Password
                            </button>

                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>

    <!-- ================= BOOTSTRAP JS ================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ================= CUSTOM JS ================= -->
    <script src="../js/script.js"></script>
</body>

</html>