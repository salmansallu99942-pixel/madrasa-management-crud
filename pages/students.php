<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students - Darussalam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
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

                <a href="../index.php" class="menu-item">

                    <i class="bi bi-grid"></i>

                    <span>Dashboard</span>

                </a>


                <a href="students.php" class="menu-item active">

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

            <header class="top-navbar">

                <div class="navbar-left">

                    <button class="sidebar-toggle">

                        <i class="bi bi-list"></i>

                    </button>


                    <div>

                        <h5>Students</h5>

                        <p>Manage madrasa students</p>

                    </div>

                </div>


                <div class="navbar-right">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            placeholder="Search...">

                    </div>


                    <button class="icon-button">

                        <i class="bi bi-bell"></i>

                        <span class="notification-dot"></span>

                    </button>


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



            <!-- Students Content -->

            <section class="dashboard-content">


                <!-- Page Header -->

                <div class="section-header">

                    <div>

                        <h2>Students</h2>

                        <p>Manage all madrasa students</p>

                    </div>


                    <button
                        class="quick-add-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#addStudentModal">

                        <i class="bi bi-person-plus"></i>
                        Add Student

                    </button>

                </div>


                <!-- Search & Filter -->

                <div class="student-filter-card">

                    <!-- Search -->

                    <div class="student-search">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="studentSearch"
                            placeholder="Search student name or roll number...">

                    </div>


                    <!-- Hifz Level -->

                    <select id="hifzFilter">

                        <option value="">All Hifz Levels</option>

                        <option value="Hifz Level 1">Hifz Level 1</option>

                        <option value="Hifz Level 2">Hifz Level 2</option>

                        <option value="Hifz Level 3">Hifz Level 3</option>

                        <option value="Revision">Revision</option>

                    </select>


                    <!-- Status -->

                    <select id="statusFilter">

                        <option value="">All Status</option>

                        <option value="Active">Active</option>

                        <option value="Leave">Leave</option>

                        <option value="Inactive">Inactive</option>

                    </select>


                    <!-- Reset -->

                    <button type="button" class="filter-reset">

                        <i class="bi bi-arrow-clockwise"></i>

                        Reset

                    </button>

                </div>

                <div class="students-table-card">

                    <div class="table-header">
                        <div>
                            <h3>All Students</h3>
                            <p>List of all madrasa students</p>
                        </div>

                        <span class="student-count">
                            4 Students
                        </span>
                    </div>

                    <div class="table-responsive">

                        <table class="students-table">

                            <thead>
                                <tr>
                                    <th>Roll No</th>
                                    <th>Student</th>
                                    <th>Hifz Level</th>
                                    <th>Attendance</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>001</td>

                                    <td>
                                        <div class="table-student">
                                            <div class="table-avatar">
                                                A
                                            </div>

                                            <div>
                                                <strong>Abdullah</strong>
                                                <small>Hifz Student</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="level-badge">
                                            Hifz Level 2
                                        </span>
                                    </td>

                                    <td>92%</td>

                                    <td>
                                        <span class="status-badge active">
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="table-action"
                                            data-bs-toggle="modal"
                                            data-bs-target="#viewStudentModal">

                                            <i class="bi bi-eye"></i>

                                        </button>

                                        <button
                                            type="button"
                                            class="table-action"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editStudentModal">

                                            <i class="bi bi-pencil"></i>

                                        </button>

                                        <button
                                            type="button"
                                            class="table-action delete"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteStudentModal">

                                            <i class="bi bi-trash"></i>

                                        </button>
                                    </td>
                                </tr>


                                <tr>
                                    <td>002</td>

                                    <td>
                                        <div class="table-student">
                                            <div class="table-avatar">
                                                M
                                            </div>

                                            <div>
                                                <strong>Muhammad</strong>
                                                <small>Hifz Student</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="level-badge">
                                            Hifz Level 1
                                        </span>
                                    </td>

                                    <td>88%</td>

                                    <td>
                                        <span class="status-badge active">
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <button class="table-action">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button class="table-action">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button class="table-action delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>


                                <tr>
                                    <td>003</td>

                                    <td>
                                        <div class="table-student">
                                            <div class="table-avatar">
                                                I
                                            </div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <small>Revision Student</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="level-badge">
                                            Revision
                                        </span>
                                    </td>

                                    <td>95%</td>

                                    <td>
                                        <span class="status-badge active">
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <button class="table-action">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button class="table-action">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="table-action delete"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteStudentModal">

                                            <i class="bi bi-trash"></i>

                                        </button>
                                    </td>
                                </tr>


                                <tr>
                                    <td>004</td>

                                    <td>
                                        <div class="table-student">
                                            <div class="table-avatar">
                                                Y
                                            </div>

                                            <div>
                                                <strong>Yusuf</strong>
                                                <small>Hifz Student</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="level-badge">
                                            Hifz Level 3
                                        </span>
                                    </td>

                                    <td>76%</td>

                                    <td>
                                        <span class="status-badge leave">
                                            Leave
                                        </span>
                                    </td>

                                    <td>
                                        <button class="table-action">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button class="table-action">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button class="table-action delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                        <!-- Pagination -->

                        <div class="students-pagination">

                            <button class="pagination-btn">
                                <i class="bi bi-chevron-left"></i>
                                Previous
                            </button>

                            <div class="pagination-numbers">

                                <button class="pagination-number active">
                                    1
                                </button>

                                <button class="pagination-number">
                                    2
                                </button>

                                <button class="pagination-number">
                                    3
                                </button>

                                <button class="pagination-number">
                                    4
                                </button>

                                <button class="pagination-number">
                                    5
                                </button>

                            </div>

                            <button class="pagination-btn">
                                Next
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                </div>




            </section>

            <!-- Add Student Modal -->

            <div class="modal fade" id="addStudentModal" tabindex="-1" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">

                        <!-- Modal Header -->

                        <div class="modal-header">

                            <div>
                                <h5 class="modal-title">Add New Student</h5>
                                <small>Enter student details below</small>
                            </div>

                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>

                        </div>


                        <!-- Modal Body -->

                        <div class="modal-body">

                            <form id="addStudentForm">

                                <!-- Roll Number -->

                                <div class="mb-3">

                                    <label for="rollNumber" class="form-label">
                                        Roll Number
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="rollNumber"
                                        placeholder="Enter roll number">

                                </div>


                                <!-- Student Name -->

                                <div class="mb-3">

                                    <label for="studentName" class="form-label">
                                        Student Name
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="studentName"
                                        placeholder="Enter student name">

                                </div>


                                <!-- Hifz Level -->

                                <div class="mb-3">

                                    <label for="studentHifzLevel" class="form-label">
                                        Hifz Level
                                    </label>

                                    <select
                                        class="form-select"
                                        id="studentHifzLevel">

                                        <option value="">
                                            Select Hifz Level
                                        </option>

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

                                </div>


                                <!-- Phone Number -->

                                <div class="mb-3">

                                    <label for="studentPhone" class="form-label">
                                        Phone Number
                                    </label>

                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="studentPhone"
                                        placeholder="Enter phone number">

                                </div>


                                <!-- Joining Date -->

                                <div class="mb-3">

                                    <label for="joiningDate" class="form-label">
                                        Joining Date
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                        id="joiningDate">

                                </div>

                            </form>

                        </div>


                        <!-- Modal Footer -->

                        <div class="modal-footer">

                            <button
                                type="button"
                                class="btn btn-light"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button
                                type="button"
                                class="btn btn-primary"
                                id="addStudentBtn">
                                <i class="bi bi-person-plus"></i>
                                Add Student
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

    <!-- Edit Student Modal -->

    <div class="modal fade" id="editStudentModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <!-- Modal Header -->

                <div class="modal-header">

                    <div>

                        <h5 class="modal-title">
                            Edit Student
                        </h5>

                        <small>
                            Update student details below
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>


                <!-- Modal Body -->

                <div class="modal-body">

                    <form id="editStudentForm">

                        <!-- Roll Number -->

                        <div class="mb-3">

                            <label
                                for="editRollNumber"
                                class="form-label">

                                Roll Number

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="editRollNumber"
                                value="001">

                        </div>


                        <!-- Student Name -->

                        <div class="mb-3">

                            <label
                                for="editStudentName"
                                class="form-label">

                                Student Name

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="editStudentName"
                                value="Abdullah">

                        </div>


                        <!-- Hifz Level -->

                        <div class="mb-3">

                            <label
                                for="editStudentHifzLevel"
                                class="form-label">

                                Hifz Level

                            </label>

                            <select
                                class="form-select"
                                id="editStudentHifzLevel">

                                <option value="Hifz Level 1">
                                    Hifz Level 1
                                </option>

                                <option
                                    value="Hifz Level 2"
                                    selected>

                                    Hifz Level 2

                                </option>

                                <option value="Hifz Level 3">
                                    Hifz Level 3
                                </option>

                                <option value="Revision">
                                    Revision
                                </option>

                            </select>

                        </div>


                        <!-- Phone Number -->

                        <div class="mb-3">

                            <label
                                for="editStudentPhone"
                                class="form-label">

                                Phone Number

                            </label>

                            <input
                                type="tel"
                                class="form-control"
                                id="editStudentPhone"
                                value="9876543210">

                        </div>


                        <!-- Joining Date -->

                        <div class="mb-3">

                            <label
                                for="editJoiningDate"
                                class="form-label">

                                Joining Date

                            </label>

                            <input
                                type="date"
                                class="form-control"
                                id="editJoiningDate"
                                value="2026-06-10">

                        </div>


                        <!-- Status -->

                        <div class="mb-3">

                            <label
                                for="editStudentStatus"
                                class="form-label">

                                Status

                            </label>

                            <select
                                class="form-select"
                                id="editStudentStatus">

                                <option value="Active" selected>
                                    Active
                                </option>

                                <option value="Leave">
                                    Leave
                                </option>

                                <option value="Inactive">
                                    Inactive
                                </option>

                            </select>

                        </div>

                    </form>

                </div>


                <!-- Modal Footer -->

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="button"
                        class="btn btn-primary">

                        <i class="bi bi-check-lg"></i>

                        Save Changes

                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- View Student Modal -->

    <div class="modal fade" id="viewStudentModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content">

                <!-- Profile Header -->

                <div class="student-profile-header">

                    <div class="profile-large-avatar">
                        A
                    </div>

                    <div class="student-profile-name">

                        <h4>Abdullah</h4>

                        <p>Roll No: 001</p>

                        <span class="profile-active-status">
                            Active
                        </span>

                    </div>

                    <button
                        type="button"
                        class="btn-close ms-auto"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>


                <!-- Profile Body -->

                <div class="modal-body">

                    <!-- Basic Information -->

                    <div class="profile-section">

                        <h5>
                            <i class="bi bi-person"></i>
                            Basic Information
                        </h5>

                        <div class="profile-info-grid">

                            <div class="profile-info-item">
                                <span>Student Name</span>
                                <strong>Abdullah</strong>
                            </div>

                            <div class="profile-info-item">
                                <span>Roll Number</span>
                                <strong>001</strong>
                            </div>

                            <div class="profile-info-item">
                                <span>Hifz Level</span>
                                <strong>Hifz Level 2</strong>
                            </div>

                            <div class="profile-info-item">
                                <span>Phone Number</span>
                                <strong>9876543210</strong>
                            </div>

                            <div class="profile-info-item">
                                <span>Joining Date</span>
                                <strong>10 June 2026</strong>
                            </div>

                            <div class="profile-info-item">
                                <span>Status</span>
                                <strong class="text-success">Active</strong>
                            </div>

                        </div>

                    </div>


                    <!-- Attendance -->

                    <div class="profile-section">

                        <h5>
                            <i class="bi bi-calendar-check"></i>
                            Attendance
                        </h5>

                        <div class="profile-stat-grid">

                            <div class="profile-stat">
                                <span>Present</span>
                                <strong>92%</strong>
                            </div>

                            <div class="profile-stat">
                                <span>Absent</span>
                                <strong>5%</strong>
                            </div>

                            <div class="profile-stat">
                                <span>Leave</span>
                                <strong>3%</strong>
                            </div>

                        </div>

                    </div>


                    <!-- Hifz Progress -->

                    <div class="profile-section">

                        <h5>
                            <i class="bi bi-book"></i>
                            Hifz Progress
                        </h5>

                        <div class="profile-progress">

                            <div class="profile-progress-header">
                                <span>Overall Progress</span>
                                <strong>68%</strong>
                            </div>

                            <div class="progress">
                                <div
                                    class="progress-bar"
                                    style="width: 68%;">
                                </div>
                            </div>

                        </div>

                        <div class="profile-progress-details">

                            <div>
                                <span>Completed</span>
                                <strong>20 Juz</strong>
                            </div>

                            <div>
                                <span>Remaining</span>
                                <strong>10 Juz</strong>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Footer -->

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                        Close

                    </button>

                    <button
                        type="button"
                        class="btn btn-primary">

                        <i class="bi bi-pencil"></i>
                        Edit Student

                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- Delete Student Modal -->

    <div
        class="modal fade"
        id="deleteStudentModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-sm">

            <div class="modal-content delete-modal-content">

                <!-- Delete Icon -->

                <div class="delete-modal-body">

                    <div class="delete-icon">

                        <i class="bi bi-trash"></i>

                    </div>


                    <!-- Title -->

                    <h5>
                        Delete Student?
                    </h5>


                    <!-- Message -->

                    <p>
                        Are you sure you want to delete
                        <strong>Abdullah</strong>?
                    </p>

                    <small>
                        This action cannot be undone.
                    </small>

                </div>


                <!-- Buttons -->

                <div class="delete-modal-footer">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="button"
                        class="btn btn-danger">

                        <i class="bi bi-trash"></i>

                        Delete Student

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="../js/script.js"></script>

</body>

</html>