<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darussalam Madrasa Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="app">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand">
                <h3>Darussalam</h3>
                <p>Madrasa Management</p>
            </div>

            <nav class="sidebar-menu">
                <a href="index.php" class="menu-item active">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>

                <a href="pages/students.php" class="menu-item">
                    <i class="bi bi-people"></i>
                    <span>Students</span>
                </a>

                <a href="pages/attendance.php" class="menu-item">
                    <i class="bi bi-calendar-check"></i>
                    <span>Attendance</span>
                </a>

                <a href="pages/hifz.php" class="menu-item">
                    <i class="bi bi-book"></i>
                    <span>Hifz</span>
                </a>

                <a href="pages/results.php" class="menu-item">
                    <i class="bi bi-bar-chart"></i>
                    <span>Results</span>
                </a>

                <a href="pages/fees.php" class="menu-item">
                    <i class="bi bi-cash-stack"></i>
                    <span>Fees & Payments</span>
                </a>

                <a href="pages/results.php" class="menu-item">
                    <i class="bi bi-person-badge"></i>
                    <span>Teachers</span>
                </a>
            </nav>

            <div class="sidebar-bottom">
                <a href="pages/settings.php" class="menu-item">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </div>
        </aside>

        <!-- Main-content -->
        <main class="main-content">
            <!-- Top navbar -->
            <header class="top-navbar">
                <div class="navbar-left">
                    <button class="sidebar-toggle" id="sidebarToggle">
                        <i class="bi bi-list"></i>
                    </button>

                    <div>
                        <h5>Dashboard</h5>
                        <p>Welcome back to Darussalam</p>
                    </div>
                </div>

                <div class="navbar-right">

                    <!-- Search -->
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="search...">
                    </div>

                    <!-- Notifications -->
                    <button class="icon-button" id="notificationButton">
                        <i class="bi bi-bell"></i>
                        <span class="notification-dot"></span>
                    </button>

                    <div class="notification-panel" id="notificationPanel">

                        <div class="notification-header">
                            <h5>Notifications</h5>
                            <span>3 New</span>
                        </div>

                        <div class="notification-item">
                            <i class="bi bi-person-plus"></i>
                            <div>
                                <strong>New Student Added</strong>
                                <small>Abdullah was added to the system.</small>
                            </div>
                        </div>

                        <div class="notification-item">
                            <i class="bi bi-calendar-check"></i>
                            <div>
                                <strong>Attendance Updated</strong>
                                <small>Today's attendance has been updated.</small>
                            </div>
                        </div>

                        <div class="notification-item">
                            <i class="bi bi-cash-stack"></i>
                            <div>
                                <strong>Fee Payment</strong>
                                <small>A fee payment was received.</small>
                            </div>
                        </div>

                    </div>

                    <!-- Profile -->
                    <div class="profile">
                        <div class="profile-avatar">
                            S
                        </div>

                        <div class="profile-info">
                            <strong>Salman</strong>
                            <small>Administrator</small>
                        </div>
                    </div>

                </div>

            </header>

            <!-- DashBoard content -->
            <section class="dashboard-content">


                <div class="section-header">
                    <div>
                        <h2>Overview</h2>
                        <p>Here's what's happening in your madrasa today.</p>
                    </div>

                    <button class="quick-add-btn">
                        <i class="bi bi-plus-lg"></i>
                        Add Student
                    </button>
                </div>


                <!-- Statistics Cards -->

                <div class="stats-grid">

                    <!-- Total Students -->
                    <div class="stat-card">

                        <div class="stat-card-top">
                            <div>
                                <p>
                                <h6>Total Students</h6>
                                </p>
                                <h3>24</h3>
                            </div>

                            <div class="stat-icon students-icon">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>

                        <div class="stat-footer">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i>
                                8.5%
                            </span>

                            <span>from last month</span>
                        </div>

                    </div>


                    <!-- Present Today -->
                    <div class="stat-card">

                        <div class="stat-card-top">
                            <div>
                                <p>Present Today</p>
                                <h3>20</h3>
                            </div>

                            <div class="stat-icon attendance-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                        </div>

                        <div class="stat-footer">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i>
                                87.5%
                            </span>

                            <span>attendance</span>
                        </div>

                    </div>


                    <!-- Absent Today -->
                    <div class="stat-card">

                        <div class="stat-card-top">
                            <div>
                                <p>Absent Today</p>
                                <h3>4</h3>
                            </div>

                            <div class="stat-icon absent-icon">
                                <i class="bi bi-person-x"></i>
                            </div>
                        </div>

                        <div class="stat-footer">
                            <span class="negative">
                                <i class="bi bi-arrow-down"></i>
                                4.2%
                            </span>

                            <span>from yesterday</span>
                        </div>

                    </div>


                    <!-- Teachers -->
                    <div class="stat-card">

                        <div class="stat-card-top">
                            <div>
                                <p>Total Teachers</p>
                                <h3>2</h3>
                            </div>

                            <div class="stat-icon teacher-icon">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        </div>

                        <div class="stat-footer">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i>
                                0
                            </span>

                            <span>new this month</span>
                        </div>

                    </div>

                </div>

                <!-- Dashboard Details -->

                <div class="dashboard-grid">

                    <!-- Attendance Overview -->
                    <div class="dashboard-card">

                        <div class="card-header">
                            <div>
                                <h3>Attendance Overview</h3>
                                <p>Today's student attendance</p>
                            </div>

                            <button class="filter-btn">
                                This Week
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>


                        <div class="attendance-summary">

                            <div class="attendance-circle">
                                <div>
                                    <strong>87%</strong>
                                    <span>Present</span>
                                </div>
                            </div>

                            <div class="attendance-info">

                                <div class="attendance-item">
                                    <span>
                                        <i class="bi bi-circle-fill present-dot"></i>
                                        Present
                                    </span>

                                    <strong>20</strong>
                                </div>

                                <div class="attendance-item">
                                    <span>
                                        <i class="bi bi-circle-fill absent-dot"></i>
                                        Absent
                                    </span>

                                    <strong>4</strong>
                                </div>

                                <div class="attendance-item">
                                    <span>
                                        <i class="bi bi-circle-fill leave-dot"></i>
                                        Leave
                                    </span>

                                    <strong>2</strong>
                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Recent Students -->
                    <div class="dashboard-card">

                        <div class="card-header">
                            <div>
                                <h3>Recent Students</h3>
                                <p>Recently added students</p>
                            </div>

                            <a href="pages/students.php" class="view-all">
                                View All
                            </a>
                        </div>


                        <div class="student-list">

                            <div class="student-item">

                                <div class="student-avatar">
                                    A
                                </div>

                                <div class="student-details">
                                    <strong>Abdullah</strong>
                                    <small>Hifz - Level 2</small>
                                </div>

                                <span class="student-status active-status">
                                    Active
                                </span>

                            </div>


                            <div class="student-item">

                                <div class="student-avatar">
                                    M
                                </div>

                                <div class="student-details">
                                    <strong>Muhammad</strong>
                                    <small>Hifz - Level 1</small>
                                </div>

                                <span class="student-status active-status">
                                    Active
                                </span>

                            </div>


                            <div class="student-item">

                                <div class="student-avatar">
                                    I
                                </div>

                                <div class="student-details">
                                    <strong>Ibrahim</strong>
                                    <small>Revision</small>
                                </div>

                                <span class="student-status active-status">
                                    Active
                                </span>

                            </div>


                            <div class="student-item">

                                <div class="student-avatar">
                                    Y
                                </div>

                                <div class="student-details">
                                    <strong>Yusuf</strong>
                                    <small>Hifz - Level 3</small>
                                </div>

                                <span class="student-status inactive-status">
                                    Leave
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Quick Actions & Hifz Progress -->

                <div class="bottom-grid">

                    <!-- Quick Actions -->
                    <div class="dashboard-card">

                        <div class="card-header">
                            <div>
                                <h3>Quick Actions</h3>
                                <p>Frequently used actions</p>
                            </div>
                        </div>


                        <div class="quick-actions">

                            <a href="pages/students.php" class="action-item">
                                <div class="action-icon student-action">
                                    <i class="bi bi-person-plus"></i>
                                </div>

                                <div>
                                    <strong>Add Student</strong>
                                    <small>Register a new student</small>
                                </div>

                                <i class="bi bi-chevron-right action-arrow"></i>
                            </a>


                            <a href="pages/attendance.php" class="action-item">
                                <div class="action-icon attendance-action">
                                    <i class="bi bi-calendar-check"></i>
                                </div>

                                <div>
                                    <strong>Mark Attendance</strong>
                                    <small>Update today's attendance</small>
                                </div>

                                <i class="bi bi-chevron-right action-arrow"></i>
                            </a>


                            <a href="pages/results.php" class="action-item">
                                <div class="action-icon result-action">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>

                                <div>
                                    <strong>Add Result</strong>
                                    <small>Enter student results</small>
                                </div>

                                <i class="bi bi-chevron-right action-arrow"></i>
                            </a>

                        </div>

                    </div>


                    <!-- Hifz Progress -->
                    <div class="dashboard-card">

                        <div class="card-header">
                            <div>
                                <h3>Hifz Progress</h3>
                                <p>Overall memorization progress</p>
                            </div>

                            <a href="pages/hifz.php" class="view-all">
                                View Details
                            </a>
                        </div>


                        <div class="progress-item">

                            <div class="progress-title">
                                <span>Juz 1 - 5</span>
                                <strong>85%</strong>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 85%;"></div>
                            </div>

                        </div>


                        <div class="progress-item">

                            <div class="progress-title">
                                <span>Juz 6 - 10</span>
                                <strong>68%</strong>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 68%;"></div>
                            </div>

                        </div>


                        <div class="progress-item">

                            <div class="progress-title">
                                <span>Juz 11 - 20</span>
                                <strong>52%</strong>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 52%;"></div>
                            </div>

                        </div>


                        <div class="progress-item">

                            <div class="progress-title">
                                <span>Juz 21 - 30</span>
                                <strong>35%</strong>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 35%;"></div>
                            </div>

                        </div>

                    </div>

                </div>


            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>