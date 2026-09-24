<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees & Payments - Darussalam</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
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

                <a href="../index.php" class="menu-item">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>

                <a href="students.php" class="menu-item">
                    <i class="bi bi-people"></i>
                    <span>Students</span>
                </a>

                <a href="attendance.php" class="menu-item">
                    <i class="bi bi-calendar-check"></i>
                    <span>Attendance</span>
                </a>

                <a href="hifz.php" class="menu-item">
                    <i class="bi bi-book"></i>
                    <span>Hifz</span>
                </a>

                <a href="results.php" class="menu-item">
                    <i class="bi bi-bar-chart"></i>
                    <span>Results</span>
                </a>

                <!-- Fees Active -->
                <a href="fees.php" class="menu-item active">
                    <i class="bi bi-cash-stack"></i>
                    <span>Fees & Payments</span>
                </a>

                <a href="teachers.php" class="menu-item">
                    <i class="bi bi-person-badge"></i>
                    <span>Teachers</span>
                </a>

            </nav>

            <div class="sidebar-bottom">

                <a href="#" class="menu-item">
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
                    <h4>Fees & Payments</h4>
                    <p>Manage monthly student fees and payments</p>
                </div>

            </div>
            <!-- ================= PAGE CONTENT ================= -->
            <section class="content-section">

                <div class="fees-page-header">

                    <div class="fees-heading-box">
                        <h2>Student Fees & Payments</h2>
                        <p>Manage monthly fees and payment records</p>
                    </div>

                    <button
                        type="button"
                        class="fees-add-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#collectPaymentModal">
                        <i class="bi bi-cash-coin"></i>
                        Collect Payment
                    </button>

                </div>

                <div class="fees-summary-cards">

                    <!-- Total Fees -->
                    <div class="fees-summary-card">

                        <div class="fees-summary-icon total">
                            <i class="bi bi-wallet2"></i>
                        </div>

                        <div class="fees-summary-info">
                            <span>Total Fees</span>
                            <strong>₹1,20,000</strong>
                            <small>This month</small>
                        </div>

                    </div>


                    <!-- Collected -->
                    <div class="fees-summary-card">

                        <div class="fees-summary-icon collected">
                            <i class="bi bi-check-circle"></i>
                        </div>

                        <div class="fees-summary-info">
                            <span>Collected</span>
                            <strong>₹98,000</strong>
                            <small>82% collected</small>
                        </div>

                    </div>


                    <!-- Pending -->
                    <div class="fees-summary-card">

                        <div class="fees-summary-icon pending">
                            <i class="bi bi-clock-history"></i>
                        </div>

                        <div class="fees-summary-info">
                            <span>Pending</span>
                            <strong>₹22,000</strong>
                            <small>18% pending</small>
                        </div>

                    </div>


                    <!-- This Month -->
                    <div class="fees-summary-card">

                        <div class="fees-summary-icon month">
                            <i class="bi bi-calendar-month"></i>
                        </div>

                        <div class="fees-summary-info">
                            <span>This Month</span>
                            <strong>₹98,000</strong>
                            <small>September 2026</small>
                        </div>

                    </div>

                </div>

                <div class="fees-filter-card">

                    <!-- Search -->
                    <div class="fees-search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" id="feeSearch" placeholder="Search student name or roll number...">
                    </div>

                    <!-- Month -->
                    <select id="feeMonthFilter">

                        <option value="September 2026">September 2026</option>
                        <option value="August 2026">August 2026</option>
                        <option value="July 2026">July 2026</option>
                        <option value="June 2026">June 2026</option>

                    </select>


                    <!-- Hifz Level -->
                    <select id="feeLevelFilter">

                        <option value="">All Hifz Levels</option>
                        <option value="Hifz Level 1">Hifz Level 1</option>
                        <option value="Hifz Level 2">Hifz Level 2</option>
                        <option value="Hifz Level 3"> Hifz Level 3</option>
                        <option value="Revision">Revision</option>

                    </select>


                    <!-- Payment Status -->
                    <select id="feeStatusFilter">

                        <option value="">All Status</option>
                        <option value="Paid">Paid</option>
                        <option value="Partial">Partial</option>
                        <option value="Pending">Pending</option>

                    </select>


                    <!-- Reset -->
                    <button
                        type="button"
                        class="fees-filter-reset">
                        <i class="bi bi-arrow-clockwise"></i>
                        Reset
                    </button>

                </div>

                <!-- ================= STUDENT FEES TABLE ================= -->

                <div class="fees-table-card">

                    <!-- Table Header -->
                    <div class="fees-table-header">

                        <div>
                            <h3>Student Fees</h3>
                            <p>Monthly fee collection and payment status</p>
                        </div>

                        <span class="fees-count">
                            120 Students
                        </span>

                    </div>


                    <!-- Table -->
                    <div class="table-responsive">

                        <table class="fees-table">

                            <thead>

                                <tr>
                                    <th>ROLL NO</th>
                                    <th>STUDENT</th>
                                    <th>MONTHLY FEE</th>
                                    <th>PAID</th>
                                    <th>BALANCE</th>
                                    <th>DUE DATE</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>


                            <tbody>

                                <!-- Student 1 -->

                                <tr>

                                    <td>
                                        <strong>001</strong>
                                    </td>

                                    <td>

                                        <div class="fee-student-info">

                                            <div class="fee-student-avatar">
                                                A
                                            </div>

                                            <div>
                                                <strong>Abdullah</strong>
                                                <span>Hifz Level 2</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        ₹1,000
                                    </td>

                                    <td>
                                        <strong>₹1,000</strong>
                                    </td>

                                    <td>
                                        ₹0
                                    </td>

                                    <td>
                                        10 Sep 2026
                                    </td>

                                    <td>
                                        <span class="fee-status paid">
                                            Paid
                                        </span>
                                    </td>

                                    <td>

                                        <div class="fee-action-buttons">

                                            <button
                                                type="button"
                                                class="fee-action-btn view"
                                                title="View Payment">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="fee-action-btn collect"
                                                title="Collect Payment">
                                                <i class="bi bi-cash-coin"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>


                                <!-- Student 2 -->

                                <tr>

                                    <td>
                                        <strong>002</strong>
                                    </td>

                                    <td>

                                        <div class="fee-student-info">

                                            <div class="fee-student-avatar">
                                                M
                                            </div>

                                            <div>
                                                <strong>Muhammad</strong>
                                                <span>Hifz Level 1</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        ₹1,000
                                    </td>

                                    <td>
                                        <strong>₹500</strong>
                                    </td>

                                    <td>
                                        ₹500
                                    </td>

                                    <td>
                                        10 Sep 2026
                                    </td>

                                    <td>
                                        <span class="fee-status partial">
                                            Partial
                                        </span>
                                    </td>

                                    <td>

                                        <div class="fee-action-buttons">

                                            <button
                                                type="button"
                                                class="fee-action-btn view"
                                                title="View Payment">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="fee-action-btn collect"
                                                title="Collect Payment">
                                                <i class="bi bi-cash-coin"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>


                                <!-- Student 3 -->

                                <tr>

                                    <td>
                                        <strong>003</strong>
                                    </td>

                                    <td>

                                        <div class="fee-student-info">

                                            <div class="fee-student-avatar">
                                                I
                                            </div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <span>Revision</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        ₹1,000
                                    </td>

                                    <td>
                                        <strong>₹0</strong>
                                    </td>

                                    <td>
                                        ₹1,000
                                    </td>

                                    <td>
                                        10 Sep 2026
                                    </td>

                                    <td>
                                        <span class="fee-status pending">
                                            Pending
                                        </span>
                                    </td>

                                    <td>

                                        <div class="fee-action-buttons">

                                            <button
                                                type="button"
                                                class="fee-action-btn view"
                                                title="View Payment">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="fee-action-btn collect"
                                                title="Collect Payment">
                                                <i class="bi bi-cash-coin"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>


                                <!-- Student 4 -->

                                <tr>

                                    <td>
                                        <strong>004</strong>
                                    </td>

                                    <td>

                                        <div class="fee-student-info">

                                            <div class="fee-student-avatar">
                                                Y
                                            </div>

                                            <div>
                                                <strong>Yusuf</strong>
                                                <span>Hifz Level 3</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        ₹1,000
                                    </td>

                                    <td>
                                        <strong>₹1,000</strong>
                                    </td>

                                    <td>
                                        ₹0
                                    </td>

                                    <td>
                                        10 Sep 2026
                                    </td>

                                    <td>
                                        <span class="fee-status paid">
                                            Paid
                                        </span>
                                    </td>

                                    <td>

                                        <div class="fee-action-buttons">

                                            <button
                                                type="button"
                                                class="fee-action-btn view"
                                                title="View Payment">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="fee-action-btn collect"
                                                title="Collect Payment">
                                                <i class="bi bi-cash-coin"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <!-- Table Footer -->

                    <div class="fees-table-footer">

                        <span>
                            Showing 1–4 of 120 students
                        </span>

                        <div class="fees-pagination">

                            <button
                                type="button"
                                class="fees-pagination-btn"
                                disabled>
                                <i class="bi bi-chevron-left"></i>
                                Previous
                            </button>

                            <button
                                type="button"
                                class="fees-pagination-number active">
                                1
                            </button>

                            <button
                                type="button"
                                class="fees-pagination-number">
                                2
                            </button>

                            <button
                                type="button"
                                class="fees-pagination-number">
                                3
                            </button>

                            <span class="fees-pagination-dots">
                                ...
                            </span>

                            <button
                                type="button"
                                class="fees-pagination-number">
                                30
                            </button>

                            <button
                                type="button"
                                class="fees-pagination-btn">
                                Next
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

                <!-- ================= PAYMENT HISTORY ================= -->

                <div class="payment-history-card">

                    <!-- Header -->
                    <div class="payment-history-header">

                        <div>
                            <h3>Payment History</h3>
                            <p>Recent student fee payment records</p>
                        </div>

                        <button type="button" class="payment-history-export-btn">
                            <i class="bi bi-download"></i>
                            Export
                        </button>

                    </div>


                    <!-- History Table -->
                    <div class="table-responsive">

                        <table class="payment-history-table">

                            <thead>
                                <tr>
                                    <th>PAYMENT ID</th>
                                    <th>STUDENT</th>
                                    <th>MONTH</th>
                                    <th>AMOUNT</th>
                                    <th>PAYMENT DATE</th>
                                    <th>METHOD</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>


                            <tbody>

                                <!-- Payment 1 -->
                                <tr>

                                    <td>
                                        <strong>PAY001</strong>
                                    </td>

                                    <td>
                                        <div class="payment-student-info">

                                            <div class="payment-student-avatar">
                                                A
                                            </div>

                                            <div>
                                                <strong>Abdullah</strong>
                                                <span>Roll No: 001</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        September 2026
                                    </td>

                                    <td>
                                        <strong>₹1,000</strong>
                                    </td>

                                    <td>
                                        10 Sep 2026
                                    </td>

                                    <td>
                                        <span class="payment-method cash">
                                            <i class="bi bi-cash"></i>
                                            Cash
                                        </span>
                                    </td>

                                    <td>
                                        <span class="payment-history-status success">
                                            Paid
                                        </span>
                                    </td>

                                    <td>

                                        <button
                                            type="button"
                                            class="payment-history-view-btn"
                                            title="View Payment">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- Payment 2 -->
                                <tr>

                                    <td>
                                        <strong>PAY002</strong>
                                    </td>

                                    <td>
                                        <div class="payment-student-info">

                                            <div class="payment-student-avatar">
                                                M
                                            </div>

                                            <div>
                                                <strong>Muhammad</strong>
                                                <span>Roll No: 002</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        September 2026
                                    </td>

                                    <td>
                                        <strong>₹500</strong>
                                    </td>

                                    <td>
                                        08 Sep 2026
                                    </td>

                                    <td>
                                        <span class="payment-method upi">
                                            <i class="bi bi-phone"></i>
                                            UPI
                                        </span>
                                    </td>

                                    <td>
                                        <span class="payment-history-status success">
                                            Paid
                                        </span>
                                    </td>

                                    <td>

                                        <button
                                            type="button"
                                            class="payment-history-view-btn"
                                            title="View Payment">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- Payment 3 -->
                                <tr>

                                    <td>
                                        <strong>PAY003</strong>
                                    </td>

                                    <td>
                                        <div class="payment-student-info">

                                            <div class="payment-student-avatar">
                                                I
                                            </div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <span>Roll No: 003</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        August 2026
                                    </td>

                                    <td>
                                        <strong>₹1,000</strong>
                                    </td>

                                    <td>
                                        12 Aug 2026
                                    </td>

                                    <td>
                                        <span class="payment-method cash">
                                            <i class="bi bi-cash"></i>
                                            Cash
                                        </span>
                                    </td>

                                    <td>
                                        <span class="payment-history-status success">
                                            Paid
                                        </span>
                                    </td>

                                    <td>

                                        <button
                                            type="button"
                                            class="payment-history-view-btn"
                                            title="View Payment">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- Payment 4 -->
                                <tr>

                                    <td>
                                        <strong>PAY004</strong>
                                    </td>

                                    <td>
                                        <div class="payment-student-info">

                                            <div class="payment-student-avatar">
                                                Y
                                            </div>

                                            <div>
                                                <strong>Yusuf</strong>
                                                <span>Roll No: 004</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        September 2026
                                    </td>

                                    <td>
                                        <strong>₹1,000</strong>
                                    </td>

                                    <td>
                                        09 Sep 2026
                                    </td>

                                    <td>
                                        <span class="payment-method bank">
                                            <i class="bi bi-bank"></i>
                                            Bank Transfer
                                        </span>
                                    </td>

                                    <td>
                                        <span class="payment-history-status success">
                                            Paid
                                        </span>
                                    </td>

                                    <td>

                                        <button
                                            type="button"
                                            class="payment-history-view-btn"
                                            title="View Payment">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <!-- Footer -->

                    <div class="payment-history-footer">

                        <span>
                            Showing 1–4 of 86 payments
                        </span>

                        <div class="payment-history-pagination">

                            <button
                                type="button"
                                class="payment-history-pagination-btn"
                                disabled>
                                <i class="bi bi-chevron-left"></i>
                                Previous
                            </button>

                            <button
                                type="button"
                                class="payment-history-pagination-number active">
                                1
                            </button>

                            <button
                                type="button"
                                class="payment-history-pagination-number">
                                2
                            </button>

                            <button
                                type="button"
                                class="payment-history-pagination-number">
                                3
                            </button>

                            <span class="payment-history-pagination-dots">
                                ...
                            </span>

                            <button
                                type="button"
                                class="payment-history-pagination-number">
                                22
                            </button>

                            <button
                                type="button"
                                class="payment-history-pagination-btn">
                                Next
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

                <!-- ================= FEE COLLECTION OVERVIEW ================= -->

                <div class="fee-overview-card">

                    <!-- Header -->
                    <div class="fee-overview-header">

                        <div>
                            <h3>Monthly Fee Collection</h3>
                            <p>September 2026 fee collection overview</p>
                        </div>

                        <div class="fee-overview-month">
                            <i class="bi bi-calendar-month"></i>
                            September 2026
                        </div>

                    </div>


                    <!-- Overview Content -->
                    <div class="fee-overview-content">

                        <!-- Collection Progress -->
                        <div class="fee-progress-section">

                            <div class="fee-progress-top">

                                <div>
                                    <span>Collection Progress</span>
                                    <strong>82%</strong>
                                </div>

                                <div class="fee-progress-amount">
                                    ₹98,000 / ₹1,20,000
                                </div>

                            </div>

                            <div class="fee-progress-bar">

                                <div
                                    class="fee-progress-fill"
                                    style="width: 82%;">
                                </div>

                            </div>

                            <p>
                                ₹22,000 remaining to collect
                            </p>

                        </div>


                        <!-- Collection Statistics -->
                        <div class="fee-overview-stats">

                            <div class="fee-overview-stat">

                                <div class="fee-overview-stat-icon collected">
                                    <i class="bi bi-check-circle"></i>
                                </div>

                                <div>
                                    <span>Paid Students</span>
                                    <strong>98</strong>
                                </div>

                            </div>


                            <div class="fee-overview-stat">

                                <div class="fee-overview-stat-icon partial">
                                    <i class="bi bi-hourglass-split"></i>
                                </div>

                                <div>
                                    <span>Partial Payments</span>
                                    <strong>12</strong>
                                </div>

                            </div>


                            <div class="fee-overview-stat">

                                <div class="fee-overview-stat-icon pending">
                                    <i class="bi bi-exclamation-circle"></i>
                                </div>

                                <div>
                                    <span>Pending Students</span>
                                    <strong>10</strong>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ================= ONLINE FEE PAYMENT ================= -->

                <div class="online-fee-payment-card">

                    <div class="online-fee-payment-header">
                        <div>
                            <h3>Pay Fees Online</h3>
                            <p>Students and parents can pay monthly fees online</p>
                        </div>

                        <span class="online-payment-badge">
                            <i class="bi bi-shield-check"></i>
                            Secure Payment
                        </span>
                    </div>


                    <div class="online-fee-payment-content">

                        <!-- QR PAYMENT -->
                        <div class="online-payment-qr-section">

                            <h4>Scan & Pay</h4>

                            <p>
                                Scan the QR code using any UPI app
                            </p>

                            <div class="payment-qr-box">

                                <!-- Temporary QR placeholder -->
                                <div class="payment-qr-placeholder">
                                    <i class="bi bi-qr-code"></i>
                                    <span>UPI QR Code</span>
                                </div>

                            </div>

                            <small>
                                Google Pay / PhonePe / Paytm / Any UPI App
                            </small>

                        </div>


                        <!-- PAYMENT DETAILS -->
                        <div class="online-payment-details">

                            <div class="online-payment-info-box">

                                <span>Madrasa UPI ID</span>

                                <strong>
                                    darussalam@upi
                                </strong>

                                <button
                                    type="button"
                                    class="copy-upi-btn">
                                    <i class="bi bi-copy"></i>
                                    Copy
                                </button>

                            </div>


                            <div class="online-payment-info-box">

                                <span>Payment Number</span>

                                <strong>
                                    98765 43210
                                </strong>

                                <button
                                    type="button"
                                    class="copy-upi-btn">
                                    <i class="bi bi-copy"></i>
                                    Copy
                                </button>

                            </div>


                            <div class="online-payment-instruction">

                                <h4>
                                    <i class="bi bi-info-circle"></i>
                                    How to Pay
                                </h4>

                                <ol>
                                    <li>Scan the QR code using your UPI app.</li>
                                    <li>Enter the monthly fee amount.</li>
                                    <li>Complete the payment.</li>
                                    <li>Save your UPI transaction ID.</li>
                                    <li>Submit the transaction details to the madrasa.</li>
                                </ol>

                            </div>


                            <button
                                type="button"
                                class="online-payment-submit-btn">
                                <i class="bi bi-check-circle"></i>
                                Submit Payment Details
                            </button>

                        </div>

                    </div>

                </div>

                <!-- ================= PENDING FEES ================= -->

                <div class="pending-fees-card">

                    <!-- Header -->
                    <div class="pending-fees-header">

                        <div>
                            <h3>Pending Fees</h3>
                            <p>Students with pending or partial fee payments</p>
                        </div>

                        <span class="pending-fees-count">
                            22 Students
                        </span>

                    </div>


                    <!-- Pending Fees Table -->
                    <div class="table-responsive">

                        <table class="pending-fees-table">

                            <thead>
                                <tr>
                                    <th>STUDENT</th>
                                    <th>ROLL NO</th>
                                    <th>MONTH</th>
                                    <th>MONTHLY FEE</th>
                                    <th>PAID</th>
                                    <th>BALANCE</th>
                                    <th>DUE DATE</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- Student 1 -->
                                <tr>

                                    <td>
                                        <div class="pending-student-info">

                                            <div class="pending-student-avatar">
                                                M
                                            </div>

                                            <div>
                                                <strong>Muhammad</strong>
                                                <span>Hifz Level 1</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <strong>002</strong>
                                    </td>

                                    <td>September 2026</td>

                                    <td>₹1,000</td>

                                    <td>
                                        <strong>₹500</strong>
                                    </td>

                                    <td>
                                        <strong class="pending-balance">
                                            ₹500
                                        </strong>
                                    </td>

                                    <td>10 Sep 2026</td>

                                    <td>
                                        <span class="pending-fee-status partial">
                                            Partial
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="pending-collect-btn">
                                            <i class="bi bi-cash-coin"></i>
                                            Collect
                                        </button>
                                    </td>

                                </tr>


                                <!-- Student 2 -->
                                <tr>

                                    <td>
                                        <div class="pending-student-info">

                                            <div class="pending-student-avatar">
                                                I
                                            </div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <span>Revision</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <strong>003</strong>
                                    </td>

                                    <td>September 2026</td>

                                    <td>₹1,000</td>

                                    <td>
                                        <strong>₹0</strong>
                                    </td>

                                    <td>
                                        <strong class="pending-balance">
                                            ₹1,000
                                        </strong>
                                    </td>

                                    <td>10 Sep 2026</td>

                                    <td>
                                        <span class="pending-fee-status pending">
                                            Pending
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="pending-collect-btn">
                                            <i class="bi bi-cash-coin"></i>
                                            Collect
                                        </button>
                                    </td>

                                </tr>


                                <!-- Student 3 -->
                                <tr>

                                    <td>
                                        <div class="pending-student-info">

                                            <div class="pending-student-avatar">
                                                A
                                            </div>

                                            <div>
                                                <strong>Ahmed</strong>
                                                <span>Hifz Level 3</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <strong>007</strong>
                                    </td>

                                    <td>September 2026</td>

                                    <td>₹1,000</td>

                                    <td>
                                        <strong>₹300</strong>
                                    </td>

                                    <td>
                                        <strong class="pending-balance">
                                            ₹700
                                        </strong>
                                    </td>

                                    <td>10 Sep 2026</td>

                                    <td>
                                        <span class="pending-fee-status partial">
                                            Partial
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="pending-collect-btn">
                                            <i class="bi bi-cash-coin"></i>
                                            Collect
                                        </button>
                                    </td>

                                </tr>


                                <!-- Student 4 -->
                                <tr>

                                    <td>
                                        <div class="pending-student-info">

                                            <div class="pending-student-avatar">
                                                O
                                            </div>

                                            <div>
                                                <strong>Omar</strong>
                                                <span>Hifz Level 2</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <strong>009</strong>
                                    </td>

                                    <td>September 2026</td>

                                    <td>₹1,000</td>

                                    <td>
                                        <strong>₹0</strong>
                                    </td>

                                    <td>
                                        <strong class="pending-balance">
                                            ₹1,000
                                        </strong>
                                    </td>

                                    <td>10 Sep 2026</td>

                                    <td>
                                        <span class="pending-fee-status overdue">
                                            Overdue
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="pending-collect-btn">
                                            <i class="bi bi-cash-coin"></i>
                                            Collect
                                        </button>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <!-- Footer -->
                    <div class="pending-fees-footer">

                        <span>
                            Showing 1–4 of 22 pending students
                        </span>

                        <button
                            type="button"
                            class="pending-view-all-btn">
                            View All Pending Fees
                            <i class="bi bi-arrow-right"></i>
                        </button>

                    </div>

                </div>

            </section>

        </main>
    </div>

    <!-- ================= COLLECT PAYMENT MODAL ================= -->

    <div
        class="modal fade"
        id="collectPaymentModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content fee-payment-modal">


                <!-- Modal Header -->

                <div class="fee-payment-header">

                    <div>

                        <h3>Collect Payment</h3>

                        <p>
                            Record student monthly fee payment
                        </p>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>


                <!-- Modal Body -->

                <div class="fee-payment-body">


                    <!-- Student Information -->

                    <div class="fee-payment-section">

                        <h4>Student Information</h4>

                        <div class="fee-payment-grid">

                            <div class="fee-payment-group">

                                <label for="paymentStudent">
                                    Student
                                </label>

                                <select id="paymentStudent">

                                    <option value="">
                                        Select student
                                    </option>

                                    <option value="001">
                                        001 - Abdullah
                                    </option>

                                    <option value="002">
                                        002 - Muhammad
                                    </option>

                                    <option value="003">
                                        003 - Ibrahim
                                    </option>

                                    <option value="004">
                                        004 - Yusuf
                                    </option>

                                </select>

                            </div>


                            <div class="fee-payment-group">

                                <label for="paymentMonth">
                                    Fee Month
                                </label>

                                <select id="paymentMonth">

                                    <option value="September 2026">
                                        September 2026
                                    </option>

                                    <option value="August 2026">
                                        August 2026
                                    </option>

                                    <option value="July 2026">
                                        July 2026
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    <!-- Fee Information -->

                    <div class="fee-payment-section">

                        <h4>Fee Information</h4>

                        <div class="fee-payment-grid">


                            <div class="fee-payment-group">

                                <label for="monthlyFee">
                                    Monthly Fee
                                </label>

                                <input
                                    type="number"
                                    id="monthlyFee"
                                    value="1000"
                                    placeholder="Enter monthly fee">

                            </div>


                            <div class="fee-payment-group">

                                <label for="alreadyPaid">
                                    Already Paid
                                </label>

                                <input
                                    type="number"
                                    id="alreadyPaid"
                                    value="0"
                                    placeholder="Already paid amount">

                            </div>


                            <div class="fee-payment-group">

                                <label for="paymentAmount">
                                    Payment Amount
                                </label>

                                <input
                                    type="number"
                                    id="paymentAmount"
                                    placeholder="Enter payment amount">

                            </div>


                            <div class="fee-payment-group">

                                <label for="paymentDate">
                                    Payment Date
                                </label>

                                <input
                                    type="date"
                                    id="paymentDate">

                            </div>

                        </div>

                    </div>


                    <!-- Payment Method -->

                    <div class="fee-payment-section">

                        <h4>Payment Details</h4>

                        <div class="fee-payment-grid">


                            <div class="fee-payment-group">

                                <label for="paymentMethod">
                                    Payment Method
                                </label>

                                <select id="paymentMethod">

                                    <option value="">
                                        Select payment method
                                    </option>

                                    <option value="Cash">
                                        Cash
                                    </option>

                                    <option value="UPI">
                                        UPI
                                    </option>

                                    <option value="Bank Transfer">
                                        Bank Transfer
                                    </option>

                                </select>

                            </div>


                            <div class="fee-payment-group">

                                <label for="paymentReference">
                                    Payment Reference
                                </label>

                                <input
                                    type="text"
                                    id="paymentReference"
                                    placeholder="Example: UPI transaction ID">

                            </div>

                        </div>

                    </div>


                    <!-- Notes -->

                    <div class="fee-payment-group fee-payment-notes">

                        <label for="paymentNotes">
                            Notes
                        </label>

                        <textarea
                            id="paymentNotes"
                            rows="3"
                            placeholder="Enter any additional notes..."></textarea>

                    </div>


                </div>


                <!-- Modal Footer -->

                <div class="fee-payment-footer">

                    <button
                        type="button"
                        class="fee-payment-cancel-btn"
                        data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button
                        type="button"
                        class="fee-payment-save-btn">

                        <i class="bi bi-check-circle"></i>

                        Save Payment

                    </button>

                </div>


            </div>

        </div>

    </div>

    <!-- ================= VIEW PAYMENT MODAL ================= -->

    <div
        class="modal fade"
        id="viewPaymentModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content view-payment-modal">

                <!-- Modal Header -->
                <div class="view-payment-header">

                    <div class="view-payment-title">

                        <div class="view-payment-icon">
                            <i class="bi bi-receipt"></i>
                        </div>

                        <div>
                            <h3>Payment Details</h3>
                            <p>Payment receipt information</p>
                        </div>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>


                <!-- Modal Body -->
                <div class="view-payment-body">

                    <!-- Student Info -->
                    <div class="view-payment-student">

                        <div class="view-payment-avatar">
                            A
                        </div>

                        <div>
                            <h4>Abdullah</h4>
                            <span>Roll No: 001</span>
                            <small>Hifz Level 2</small>
                        </div>

                    </div>


                    <!-- Payment Status -->
                    <div class="view-payment-status-box">

                        <span>Payment Status</span>

                        <strong>
                            <i class="bi bi-check-circle"></i>
                            Paid
                        </strong>

                    </div>


                    <!-- Payment Information -->
                    <div class="view-payment-section">

                        <h4>Payment Information</h4>

                        <div class="view-payment-details">

                            <div class="view-payment-detail-item">
                                <span>Payment ID</span>
                                <strong>PAY001</strong>
                            </div>

                            <div class="view-payment-detail-item">
                                <span>Fee Month</span>
                                <strong>September 2026</strong>
                            </div>

                            <div class="view-payment-detail-item">
                                <span>Monthly Fee</span>
                                <strong>₹1,000</strong>
                            </div>

                            <div class="view-payment-detail-item">
                                <span>Paid Amount</span>
                                <strong>₹1,000</strong>
                            </div>

                            <div class="view-payment-detail-item">
                                <span>Balance</span>
                                <strong>₹0</strong>
                            </div>

                            <div class="view-payment-detail-item">
                                <span>Payment Date</span>
                                <strong>10 Sep 2026</strong>
                            </div>

                        </div>

                    </div>


                    <!-- Payment Method -->
                    <div class="view-payment-section">

                        <h4>Payment Method</h4>

                        <div class="view-payment-method">

                            <div class="view-payment-method-icon">
                                <i class="bi bi-cash"></i>
                            </div>

                            <div>
                                <strong>Cash</strong>
                                <span>Payment received in cash</span>
                            </div>

                        </div>

                    </div>


                    <!-- Reference -->
                    <div class="view-payment-section">

                        <h4>Payment Reference</h4>

                        <div class="view-payment-reference">
                            CASH-PAY001
                        </div>

                    </div>


                    <!-- Notes -->
                    <div class="view-payment-section">

                        <h4>Notes</h4>

                        <div class="view-payment-notes">
                            Monthly fee paid successfully.
                        </div>

                    </div>

                </div>


                <!-- Modal Footer -->
                <div class="view-payment-footer">

                    <button
                        type="button"
                        class="view-payment-close-btn"
                        data-bs-dismiss="modal">
                        Close
                    </button>

                    <button
                        type="button"
                        class="view-payment-print-btn">
                        <i class="bi bi-printer"></i>
                        Print Receipt
                    </button>

                </div>

            </div>

        </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/script.js"></script>
</body>

</html>