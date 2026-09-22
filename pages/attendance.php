<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - Darussalam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="dashboard-wrapper">

        <!--sidebar -->
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

                <a href="attendance.php" class="menu-item active">
                    <i class="bi bi-calendar-check"></i>
                    <span>Attendance</span>
                </a>

                <a href="hifz.php" class="menu-item">
                    <i class="bi bi-book"></i>
                    <span>Hifz</span>
                </a>

                <a href="results.php" class="menu-item">
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


        <!-- Main Content -->
        <main class="main-content">

            <!-- Top-navbar -->
            <div class="top-navbar">
                <div>
                    <h4>Attendance</h4>
                    <p>Manage daily student attendance</p>
                </div>
            </div>

            <!-- Attendance Content -->
            <section class="content-section">

                <!--Page Header-->
                <div class="section-header">
                    <div>
                        <h2>Daily attendance</h2>
                        <p>Mark and manage student attendance</p>
                    </div>

                    <button type="button" class="quick-add-btn">
                        <i class="bi bi-person-plus"></i>Add Student
                    </button>
                </div>

                <!-- Date Card -->
                <div class="attendance-date-card">

                    <div class="attendance-date-info">
                        <i class="bi bi-calendar3"></i>

                        <div>
                            <span>Attendance Date</span>
                            <strong>22 september 2026</strong>
                        </div>

                    </div>

                    <div class="attendance-date-actions">
                        <button type="button" class="attendance-date-btn">
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <button type="button" class="attendance-date-btn">Today</button>
                        <button type="button" class="attendance-date-btn">
                            <i class="bi bi-chevron-right"></i>
                        </button>

                    </div>

                </div>

                <!-- Attendance Summary -->
                <div class="attendance-summary-cards">

                    <div class="attendance-summary-card">
                        <div class="attendance-summary-icon total">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <span>Total Students</span>
                            <strong>120</strong>
                        </div>
                    </div>

                    <div class="attendance-summary-card">
                        <div class="attendance-summary-icon present">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div>
                            <span>Present</span>
                            <strong>105</strong>
                        </div>
                    </div>

                    <div class="attendance-summary-card">
                        <div class="attendance-summary-icon absent">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <div>
                            <span>Absent</span>
                            <strong>10</strong>
                        </div>
                    </div>

                    <div class="attendance-summary-card">
                        <div class="attendance-summary-icon leave">
                            <i class="bi bi-calendar-minus"></i>
                        </div>
                        <div>
                            <span>Leave</span>
                            <strong>5</strong>
                        </div>
                    </div>

                </div>

                <!-- Attendance Filter Bar -->
                <div class="attendance-filter-card">

                    <div class="attendance-search">
                        <i class="bi bi-search"></i>
                        <input
                            type="text"
                            id="attendanceSearch"
                            placeholder="Search student name or roll number...">
                    </div>

                    <select id="attendanceLevelFilter">
                        <option value="">All Hifz Levels</option>
                        <option value="Hifz Level 1">Hifz Level 1</option>
                        <option value="Hifz Level 2">Hifz Level 2</option>
                        <option value="Hifz Level 3">Hifz Level 3</option>
                        <option value="Revision">Revision</option>
                    </select>

                    <select id="attendanceStatusFilter">
                        <option value="">All Status</option>
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                        <option value="Leave">Leave</option>
                    </select>

                    <button type="button" class="attendance-filter-reset">
                        <i class="bi bi-arrow-clockwise"></i>
                        Reset
                    </button>

                </div>

                <!-- Attendance Quick Actions -->
                <div class="attendance-quick-actions">

                    <div class="quick-actions-info">
                        <h3>Quick Attendance</h3>
                        <p>Quickly mark attendance for all students</p>
                    </div>

                    <div class="quick-actions-buttons">

                        <button type="button" class="quick-present-btn">
                            <i class="bi bi-check2-all"></i>
                            Mark All Present
                        </button>

                        <button type="button" class="quick-absent-btn">
                            <i class="bi bi-x-circle"></i>
                            Mark All Absent
                        </button>

                        <button type="button" class="quick-reset-btn">
                            <i class="bi bi-arrow-clockwise"></i>
                            Reset
                        </button>

                    </div>

                </div>

                <!-- Student Attendance Table -->
                <div class="attendance-table-card">

                    <div class="attendance-table-header">
                        <div>
                            <h3>Student Attendance</h3>
                            <p>Mark attendance for all students</p>
                        </div>

                        <span class="attendance-student-count">
                            120 Students
                        </span>
                    </div>

                    <div class="table-responsive">
                        <table class="attendance-table">

                            <thead>
                                <tr>
                                    <th>ROLL NO</th>
                                    <th>STUDENT</th>
                                    <th>HIFZ LEVEL</th>
                                    <th>ATTENDANCE</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- Student 1 -->
                                <tr>
                                    <td>001</td>

                                    <td>
                                        <div class="attendance-student">
                                            <div class="attendance-avatar">A</div>

                                            <div>
                                                <strong>Abdullah</strong>
                                                <small>Student ID: STD001</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="attendance-level">
                                            Hifz Level 2
                                        </span>
                                    </td>

                                    <td>
                                        <div class="attendance-options">

                                            <button type="button" class="attendance-option present">
                                                <i class="bi bi-check"></i>
                                                Present
                                            </button>

                                            <button type="button" class="attendance-option absent">
                                                <i class="bi bi-x"></i>
                                                Absent
                                            </button>

                                            <button type="button" class="attendance-option leave">
                                                <i class="bi bi-dash"></i>
                                                Leave
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                                <!-- Student 2 -->
                                <tr>
                                    <td>002</td>

                                    <td>
                                        <div class="attendance-student">
                                            <div class="attendance-avatar">M</div>

                                            <div>
                                                <strong>Muhammad</strong>
                                                <small>Student ID: STD002</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="attendance-level">
                                            Hifz Level 1
                                        </span>
                                    </td>

                                    <td>
                                        <div class="attendance-options">

                                            <button type="button" class="attendance-option present">
                                                <i class="bi bi-check"></i>
                                                Present
                                            </button>

                                            <button type="button" class="attendance-option absent">
                                                <i class="bi bi-x"></i>
                                                Absent
                                            </button>

                                            <button type="button" class="attendance-option leave">
                                                <i class="bi bi-dash"></i>
                                                Leave
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                                <!-- Student 3 -->
                                <tr>
                                    <td>003</td>

                                    <td>
                                        <div class="attendance-student">
                                            <div class="attendance-avatar">I</div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <small>Student ID: STD003</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="attendance-level">
                                            Revision
                                        </span>
                                    </td>

                                    <td>
                                        <div class="attendance-options">

                                            <button type="button" class="attendance-option present">
                                                <i class="bi bi-check"></i>
                                                Present
                                            </button>

                                            <button type="button" class="attendance-option absent">
                                                <i class="bi bi-x"></i>
                                                Absent
                                            </button>

                                            <button type="button" class="attendance-option leave">
                                                <i class="bi bi-dash"></i>
                                                Leave
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                                <!-- Student 4 -->
                                <tr>
                                    <td>004</td>

                                    <td>
                                        <div class="attendance-student">
                                            <div class="attendance-avatar">Y</div>

                                            <div>
                                                <strong>Yusuf</strong>
                                                <small>Student ID: STD004</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="attendance-level">
                                            Hifz Level 3
                                        </span>
                                    </td>

                                    <td>
                                        <div class="attendance-options">

                                            <button type="button" class="attendance-option present">
                                                <i class="bi bi-check"></i>
                                                Present
                                            </button>

                                            <button type="button" class="attendance-option absent">
                                                <i class="bi bi-x"></i>
                                                Absent
                                            </button>

                                            <button type="button" class="attendance-option leave">
                                                <i class="bi bi-dash"></i>
                                                Leave
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                    <!-- Attendance Actions -->
                    <div class="attendance-table-footer">

                        <div>
                            <span>4 of 120 students shown</span>
                        </div>

                        <div class="attendance-actions">

                            <button type="button" class="attendance-reset-btn">
                                <i class="bi bi-arrow-clockwise"></i>
                                Reset
                            </button>

                            <button type="button" class="attendance-save-btn">
                                <i class="bi bi-check2-circle"></i>
                                Save Attendance
                            </button>

                        </div>

                    </div>

                </div>

                <!-- Attendance History -->

                <div class="attendance-history-card">

                    <div class="attendance-history-header">

                        <div>
                            <h3>Attendance History</h3>
                            <p>View previous attendance records</p>
                        </div>

                        <button type="button" class="attendance-history-filter">
                            <i class="bi bi-calendar3"></i>
                            This Month
                        </button>

                    </div>


                    <div class="table-responsive">

                        <table class="attendance-history-table">

                            <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>DAY</th>
                                    <th>PRESENT</th>
                                    <th>ABSENT</th>
                                    <th>LEAVE</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>22 Sep 2026</td>
                                    <td>Tuesday</td>
                                    <td>
                                        <span class="history-present">115</span>
                                    </td>
                                    <td>
                                        <span class="history-absent">4</span>
                                    </td>
                                    <td>
                                        <span class="history-leave">1</span>
                                    </td>
                                    <td>
                                        <span class="history-status saved">
                                            Saved
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>21 Sep 2026</td>
                                    <td>Monday</td>
                                    <td>
                                        <span class="history-present">112</span>
                                    </td>
                                    <td>
                                        <span class="history-absent">6</span>
                                    </td>
                                    <td>
                                        <span class="history-leave">2</span>
                                    </td>
                                    <td>
                                        <span class="history-status saved">
                                            Saved
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>20 Sep 2026</td>
                                    <td>Sunday</td>
                                    <td>
                                        <span class="history-present">118</span>
                                    </td>
                                    <td>
                                        <span class="history-absent">1</span>
                                    </td>
                                    <td>
                                        <span class="history-leave">1</span>
                                    </td>
                                    <td>
                                        <span class="history-status saved">
                                            Saved
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>19 Sep 2026</td>
                                    <td>Saturday</td>
                                    <td>
                                        <span class="history-present">110</span>
                                    </td>
                                    <td>
                                        <span class="history-absent">7</span>
                                    </td>
                                    <td>
                                        <span class="history-leave">3</span>
                                    </td>
                                    <td>
                                        <span class="history-status saved">
                                            Saved
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>
            </section>
        </main>
    </div>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>