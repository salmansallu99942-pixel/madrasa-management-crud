<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hifz - Darussalam</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>

    <div class="dashboard-wrapper">

        <!-- Sidebar -->

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


                <a href="hifz.php" class="menu-item active">
                    <i class="bi bi-book"></i>
                    <span>Hifz</span>
                </a>


                <a href="results.php" class="menu-item">
                    <i class="bi bi-bar-chart"></i>
                    <span>Results</span>
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


        <!-- Main Content -->

        <main class="main-content">

            <!-- Top Navbar -->

            <div class="top-navbar">

                <div>

                    <h4>Hifz</h4>

                    <p>Manage student Quran memorization progress</p>

                </div>

            </div>
            <!-- Page Content -->

            <section class="content-section">

                <!-- Hifz Summary Cards -->

                <div class="hifz-summary-cards">

                    <div class="hifz-summary-card">

                        <div class="hifz-summary-icon students">
                            <i class="bi bi-people"></i>
                        </div>

                        <div>
                            <span>Total Students</span>
                            <strong>120</strong>
                        </div>

                    </div>


                    <div class="hifz-summary-card">

                        <div class="hifz-summary-icon completed">
                            <i class="bi bi-check-circle"></i>
                        </div>

                        <div>
                            <span>Completed</span>
                            <strong>35</strong>
                        </div>

                    </div>


                    <div class="hifz-summary-card">

                        <div class="hifz-summary-icon progress">
                            <i class="bi bi-book"></i>
                        </div>

                        <div>
                            <span>In Progress</span>
                            <strong>70</strong>
                        </div>

                    </div>


                    <div class="hifz-summary-card">

                        <div class="hifz-summary-icon revision">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>

                        <div>
                            <span>Revision</span>
                            <strong>15</strong>
                        </div>

                    </div>

                </div>

                <!-- Hifz Search & Filter -->

                <div class="hifz-filter-card">

                    <div class="hifz-search">
                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="hifzSearch"
                            placeholder="Search student name or roll number...">
                    </div>


                    <select id="hifzLevelFilter">

                        <option value="">All Hifz Levels</option>

                        <option value="Hifz Level 1">
                            Hifz Level 1
                        </option>

                        <option value="Hifz Level 2">
                            Hifz Level 2
                        </option>

                        <option value="Hifz Level 3">
                            Hifz Level 3
                        </option>

                        <option value="Revision">
                            Revision
                        </option>

                    </select>


                    <select id="hifzStatusFilter">

                        <option value="">All Status</option>

                        <option value="Completed">
                            Completed
                        </option>

                        <option value="In Progress">
                            In Progress
                        </option>

                        <option value="Revision">
                            Revision
                        </option>

                    </select>


                    <button
                        type="button"
                        class="hifz-filter-reset">
                        <i class="bi bi-arrow-clockwise"></i>
                        Reset
                    </button>

                </div>

                <!-- Hifz Student Progress Table -->

                <div class="hifz-table-card">

                    <div class="hifz-table-header">

                        <div>
                            <h3>Student Hifz Progress</h3>
                            <p>Track Quran memorization progress of students</p>
                        </div>

                        <span class="hifz-student-count">
                            120 Students
                        </span>

                    </div>


                    <div class="table-responsive">

                        <table class="hifz-table">

                            <thead>

                                <tr>
                                    <th>ROLL NO</th>
                                    <th>STUDENT</th>
                                    <th>HIFZ LEVEL</th>
                                    <th>CURRENT JUZ</th>
                                    <th>PROGRESS</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>


                            <tbody>

                                <!-- Student 1 -->

                                <tr>

                                    <td>001</td>

                                    <td>

                                        <div class="hifz-student">

                                            <div class="hifz-avatar">
                                                A
                                            </div>

                                            <div>

                                                <strong>Abdullah</strong>

                                                <small>
                                                    Student ID: STD001
                                                </small>

                                            </div>

                                        </div>

                                    </td>


                                    <td>
                                        <span class="hifz-level">
                                            Hifz Level 2
                                        </span>
                                    </td>


                                    <td>
                                        Juz 8
                                    </td>


                                    <td>

                                        <div class="hifz-progress">

                                            <div class="hifz-progress-bar">

                                                <div
                                                    class="hifz-progress-fill"
                                                    style="width: 80%;">
                                                </div>

                                            </div>

                                            <span>80%</span>

                                        </div>

                                    </td>


                                    <td>

                                        <span class="hifz-status in-progress">
                                            In Progress
                                        </span>

                                    </td>

                                    <td>
                                        <button type="button" class="hifz-view-progress-btn">
                                            <i class="bi bi-eye"></i>
                                            View Progress
                                        </button>
                                    </td>

                                </tr>


                                <!-- Student 2 -->

                                <tr>

                                    <td>002</td>

                                    <td>

                                        <div class="hifz-student">

                                            <div class="hifz-avatar">
                                                M
                                            </div>

                                            <div>

                                                <strong>Muhammad</strong>

                                                <small>
                                                    Student ID: STD002
                                                </small>

                                            </div>

                                        </div>

                                    </td>


                                    <td>
                                        <span class="hifz-level">
                                            Hifz Level 1
                                        </span>
                                    </td>


                                    <td>
                                        Juz 4
                                    </td>


                                    <td>

                                        <div class="hifz-progress">

                                            <div class="hifz-progress-bar">

                                                <div
                                                    class="hifz-progress-fill"
                                                    style="width: 60%;">
                                                </div>

                                            </div>

                                            <span>60%</span>

                                        </div>

                                    </td>


                                    <td>

                                        <span class="hifz-status in-progress">
                                            In Progress
                                        </span>

                                    </td>

                                    <td>
                                        <button type="button" class="hifz-view-progress-btn">
                                            <i class="bi bi-eye"></i>
                                            View Progress
                                        </button>
                                    </td>

                                </tr>


                                <!-- Student 3 -->

                                <tr>

                                    <td>003</td>

                                    <td>

                                        <div class="hifz-student">

                                            <div class="hifz-avatar">
                                                I
                                            </div>

                                            <div>

                                                <strong>Ibrahim</strong>

                                                <small>
                                                    Student ID: STD003
                                                </small>

                                            </div>

                                        </div>

                                    </td>


                                    <td>
                                        <span class="hifz-level">
                                            Revision
                                        </span>
                                    </td>


                                    <td>
                                        Juz 20
                                    </td>


                                    <td>

                                        <div class="hifz-progress">

                                            <div class="hifz-progress-bar">

                                                <div
                                                    class="hifz-progress-fill"
                                                    style="width: 90%;">
                                                </div>

                                            </div>

                                            <span>90%</span>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="hifz-status revision">Revision</span>
                                    </td>

                                    <td>
                                        <button type="button" class="hifz-view-progress-btn">
                                            <i class="bi bi-eye"></i>
                                            View Progress
                                        </button>
                                    </td>

                                </tr>


                                <!-- Student 4 -->

                                <tr>

                                    <td>004</td>

                                    <td>

                                        <div class="hifz-student">

                                            <div class="hifz-avatar">
                                                Y
                                            </div>

                                            <div>

                                                <strong>Yusuf</strong>

                                                <small>
                                                    Student ID: STD004
                                                </small>

                                            </div>

                                        </div>

                                    </td>


                                    <td>
                                        <span class="hifz-level">
                                            Hifz Level 3
                                        </span>
                                    </td>


                                    <td>
                                        Juz 15
                                    </td>


                                    <td>

                                        <div class="hifz-progress">

                                            <div class="hifz-progress-bar">

                                                <div
                                                    class="hifz-progress-fill"
                                                    style="width: 100%;">
                                                </div>

                                            </div>

                                            <span>100%</span>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="hifz-status completed">Completed</span>
                                    </td>

                                    <td>
                                        <button type="button" class="hifz-view-progress-btn">
                                            <i class="bi bi-eye"></i>
                                            View Progress
                                        </button>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <div class="hifz-table-footer">

                        <span>
                            4 of 120 students shown
                        </span>

                        <button type="button" class="hifz-view-all">
                            View All Students
                            <i class="bi bi-arrow-right"></i>
                        </button>

                    </div>

                </div>

                <!-- Student Quran Progress -->

                <div class="quran-progress-card">

                    <div class="quran-progress-header">

                        <div>
                            <h3>Student Quran Progress</h3>
                            <p>Track memorization progress for each Juz</p>
                        </div>

                        <div class="quran-student-info">
                            <strong>Abdullah</strong>
                            <span>Overall Progress: 98%</span>
                        </div>

                    </div>


                    <div class="juz-grid">

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 1</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 2</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 3</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 4</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 5</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 6</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 7</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 8</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 9</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 10</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 11</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 12</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 13</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 14</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 15</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 16</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 17</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 18</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 19</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 20</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 21</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 22</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 23</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 24</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 25</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 26</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 27</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 28</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 29</span>
                                <strong>100%</strong>
                            </div>
                            <div class="juz-bar">
                                <div class="juz-fill" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="juz-progress-item">
                            <div class="juz-info">
                                <span>Juz 30</span>
                                <strong>49%</strong>
                            </div>
                            <div class="juz-bar">
                                <div
                                    class="juz-fill"
                                    style="width: 49%;">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/script.js"></script>
</body>

</html>