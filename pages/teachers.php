<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers - Darussalam</title>
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


                <a href="hifz.php" class="menu-item">
                    <i class="bi bi-book"></i>
                    <span>Hifz</span>
                </a>


                <a href="results.php" class="menu-item">
                    <i class="bi bi-bar-chart"></i>
                    <span>Results</span>
                </a>

                <a href="teachers.php" class="menu-item active">
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
                    <h4>Teachers</h4>
                    <p>Manage madrasa teachers and staff</p>
                </div>

            </div>

            <!-- Page Content -->
            <section class="content-section">
                <!-- Teachers Page Header -->

                <div class="teachers-page-header">

                    <div class="teachers-heading-box">

                        <h2>Teachers & Staff</h2>
                        <p>Manage madrasa teachers and staff information</p>

                    </div>


                    <button type="button" class="teachers-add-btn" data-bs-toggle="modal" data-bs-target="#addTeacherModal">
                        <i class="bi bi-person-plus"></i> Add Teacher
                    </button>

                </div>

                <!-- Teacher Summary Cards -->

                <div class="teachers-summary-cards">

                    <!-- Total Teachers -->
                    <div class="teachers-summary-card">

                        <div class="teachers-summary-icon total">
                            <i class="bi bi-people"></i>
                        </div>

                        <div>
                            <span>Total Teachers</span>
                            <strong>12</strong>
                        </div>

                    </div>

                    <!-- Active Teachers -->
                    <div class="teachers-summary-card">

                        <div class="teachers-summary-icon active">
                            <i class="bi bi-person-check"></i>
                        </div>

                        <div>
                            <span>Active</span>
                            <strong>10</strong>
                        </div>

                    </div>

                    <!-- On Leave -->
                    <div class="teachers-summary-card">

                        <div class="teachers-summary-icon leave">
                            <i class="bi bi-person-dash"></i>
                        </div>

                        <div>
                            <span>On Leave</span>
                            <strong>2</strong>
                        </div>

                    </div>

                    <!-- Experience -->
                    <div class="teachers-summary-card">

                        <div class="teachers-summary-icon experience">
                            <i class="bi bi-award"></i>
                        </div>

                        <div>
                            <span>Experienced</span>
                            <strong>8</strong>
                        </div>

                    </div>

                </div>

                <!-- Teachers Search & Filter -->

                <div class="teachers-filter-card">

                    <!-- Search -->
                    <div class="teachers-search-box">

                        <i class="bi bi-search"></i>
                        <input type="text" id="teacherSearch" placeholder="Search teacher name or ID...">

                    </div>

                    <!-- Role / Subject Filter -->
                    <select id="teacherRoleFilter">

                        <option value="">All Roles</option>
                        <option value="Hifz Usthad"> Hifz Usthad </option>
                        <option value="Tajweed Usthad">Tajweed Usthad</option>
                        <option value="Islamic Studies">Islamic Studies </option>
                        <option value="Arabic Teacher">Arabic Teacher</option>

                    </select>

                    <!-- Status Filter -->
                    <select id="teacherStatusFilter">

                        <option value="">All Status</option>
                        <option value="Active"> Active </option>
                        <option value="On Leave"> On Leave</option>
                        <option value="Inactive"> Inactive </option>

                    </select>

                    <!-- Reset -->
                    <button type="button" class="teachers-filter-reset">
                        <i class="bi bi-arrow-clockwise"></i> Reset
                    </button>

                </div>

                <!-- Teachers Table -->

                <div class="teachers-table-card">

                    <!-- Table Header -->

                    <div class="teachers-table-header">

                        <div>
                            <h3>Teachers List</h3>
                            <p>All madrasa teachers and staff</p>
                        </div>

                        <span class="teachers-count">
                            12 Teachers
                        </span>

                    </div>


                    <!-- Table -->

                    <div class="table-responsive">

                        <table class="teachers-table">

                            <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Teacher</th>

                                    <th>Role / Subject</th>

                                    <th>Phone</th>

                                    <th>Joining Date</th>

                                    <th>Status</th>

                                    <th>Actions</th>

                                </tr>

                            </thead>


                            <tbody>

                                <!-- Teacher 1 -->

                                <tr>

                                    <td>
                                        <strong>T001</strong>
                                    </td>

                                    <td>

                                        <div class="teacher-info">

                                            <div class="teacher-avatar">
                                                A
                                            </div>

                                            <div>
                                                <strong>Abdullah</strong>
                                                <span>Hifz Department</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        Hifz Usthad
                                    </td>

                                    <td>
                                        98765 43210
                                    </td>

                                    <td>
                                        12 Jun 2023
                                    </td>

                                    <td>

                                        <span class="teacher-status active">
                                            Active
                                        </span>

                                    </td>

                                    <td>

                                        <div class="teacher-action-buttons">

                                            <button
                                                type="button"
                                                class="teacher-action-btn view"
                                                title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn edit"
                                                title="Edit"
                                                data-bs-toogle="modal"
                                                data-bs-target="#editTeacherModal">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn delete"
                                                title="Delete"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteTeacherModal">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>


                                <!-- Teacher 2 -->

                                <tr>

                                    <td>
                                        <strong>T002</strong>
                                    </td>

                                    <td>

                                        <div class="teacher-info">

                                            <div class="teacher-avatar">
                                                U
                                            </div>

                                            <div>
                                                <strong>Umar</strong>
                                                <span>Tajweed Department</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        Tajweed Usthad
                                    </td>

                                    <td>
                                        98765 12345
                                    </td>

                                    <td>
                                        05 Jan 2024
                                    </td>

                                    <td>

                                        <span class="teacher-status active">
                                            Active
                                        </span>

                                    </td>

                                    <td>

                                        <div class="teacher-action-buttons">

                                            <button
                                                type="button"
                                                class="teacher-action-btn view"
                                                title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn edit"
                                                title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn delete"
                                                title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>


                                <!-- Teacher 3 -->

                                <tr>

                                    <td>
                                        <strong>T003</strong>
                                    </td>

                                    <td>

                                        <div class="teacher-info">

                                            <div class="teacher-avatar">
                                                I
                                            </div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <span>Islamic Studies</span>
                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        Islamic Studies
                                    </td>

                                    <td>
                                        98765 67890
                                    </td>

                                    <td>
                                        18 Aug 2022
                                    </td>

                                    <td>

                                        <span class="teacher-status active">
                                            Active
                                        </span>

                                    </td>

                                    <td>

                                        <div class="teacher-action-buttons">

                                            <button
                                                type="button"
                                                class="teacher-action-btn view"
                                                title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn edit"
                                                title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn delete"
                                                title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>


                                <!-- Teacher 4 -->

                                <tr>
                                    <td>
                                        <strong>T004</strong>
                                    </td>

                                    <td>
                                        <div class="teacher-info">

                                            <div class="teacher-avatar">
                                                Y
                                            </div>

                                            <div>
                                                <strong>Yusuf</strong>
                                                <span>Arabic Department</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        Arabic Teacher
                                    </td>

                                    <td>
                                        98765 24680
                                    </td>

                                    <td>
                                        10 Mar 2025
                                    </td>

                                    <td>

                                        <span class="teacher-status leave">
                                            On Leave
                                        </span>

                                    </td>

                                    <td>
                                        <div class="teacher-action-buttons">

                                            <button
                                                type="button"
                                                class="teacher-action-btn view"
                                                title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn edit"
                                                title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="teacher-action-btn delete"
                                                title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Table Footer -->
                    <!-- Teachers Pagination -->

                    <div class="teachers-table-footer">

                        <span>
                            Showing 1–4 of 12 teachers
                        </span>


                        <div class="teachers-pagination">

                            <button
                                type="button"
                                class="teachers-pagination-btn"
                                disabled>
                                <i class="bi bi-chevron-left"></i>
                                Previous
                            </button>


                            <button
                                type="button"
                                class="teachers-pagination-number active">
                                1
                            </button>

                            <button
                                type="button"
                                class="teachers-pagination-number">
                                2
                            </button>

                            <button
                                type="button"
                                class="teachers-pagination-number">
                                3
                            </button>


                            <button
                                type="button"
                                class="teachers-pagination-btn">
                                Next
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

                <!-- View Teacher Modal -->

                <div
                    class="modal fade"
                    id="viewTeacherModal"
                    tabindex="-1"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content teacher-view-modal">

                            <!-- Modal Header -->

                            <div class="teacher-modal-header">

                                <div class="teacher-modal-profile">

                                    <div class="teacher-modal-avatar">
                                        A
                                    </div>

                                    <div>

                                        <h3>Abdullah</h3>

                                        <p>
                                            Teacher ID: T001
                                        </p>

                                    </div>

                                </div>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                            </div>


                            <!-- Modal Body -->

                            <div class="teacher-modal-body">

                                <!-- Status -->

                                <div class="teacher-modal-status">

                                    <span class="teacher-status active">
                                        Active
                                    </span>

                                    <span>
                                        Hifz Department
                                    </span>

                                </div>


                                <!-- Teacher Details -->

                                <div class="teacher-details-section">

                                    <h4>Teacher Information</h4>

                                    <div class="teacher-details-grid">

                                        <div class="teacher-detail-item">

                                            <span>Role / Subject</span>

                                            <strong>Hifz Usthad</strong>

                                        </div>


                                        <div class="teacher-detail-item">

                                            <span>Phone</span>

                                            <strong>98765 43210</strong>

                                        </div>


                                        <div class="teacher-detail-item">

                                            <span>Joining Date</span>

                                            <strong>12 June 2023</strong>

                                        </div>


                                        <div class="teacher-detail-item">

                                            <span>Experience</span>

                                            <strong>3 Years</strong>

                                        </div>


                                        <div class="teacher-detail-item">

                                            <span>Qualification</span>

                                            <strong>Hifz & Aalim</strong>

                                        </div>


                                        <div class="teacher-detail-item">

                                            <span>Department</span>

                                            <strong>Hifz</strong>

                                        </div>

                                    </div>

                                </div>


                                <!-- Address -->

                                <div class="teacher-address-section">

                                    <h4>Address</h4>

                                    <p>
                                        12, Madrasa Street, Coimbatore, Tamil Nadu
                                    </p>

                                </div>

                            </div>


                            <!-- Modal Footer -->

                            <div class="teacher-modal-footer">

                                <button
                                    type="button"
                                    class="teacher-modal-close-btn"
                                    data-bs-dismiss="modal">
                                    Close
                                </button>

                                <button
                                    type="button"
                                    class="teacher-modal-edit-btn">
                                    <i class="bi bi-pencil"></i>
                                    Edit Teacher
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Add Teacher Modal -->

                <div
                    class="modal fade"
                    id="addTeacherModal"
                    tabindex="-1"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered modal-lg">

                        <div class="modal-content teacher-form-modal">

                            <!-- Modal Header -->

                            <div class="teacher-form-header">

                                <div>
                                    <h3>Add New Teacher</h3>

                                    <p>
                                        Enter teacher and staff information
                                    </p>
                                </div>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                            </div>


                            <!-- Modal Body -->

                            <div class="teacher-form-body">

                                <div class="teacher-form-grid">

                                    <!-- Teacher Name -->

                                    <div class="teacher-form-group">

                                        <label for="teacherName">
                                            Teacher Name
                                        </label>

                                        <input
                                            type="text"
                                            id="teacherName"
                                            placeholder="Enter teacher name">

                                    </div>


                                    <!-- Teacher ID -->

                                    <div class="teacher-form-group">

                                        <label for="teacherId">
                                            Teacher ID
                                        </label>

                                        <input
                                            type="text"
                                            id="teacherId"
                                            placeholder="Example: T005">

                                    </div>


                                    <!-- Role -->

                                    <div class="teacher-form-group">

                                        <label for="teacherRole">
                                            Role / Subject
                                        </label>

                                        <select id="teacherRole">

                                            <option value="">
                                                Select role
                                            </option>

                                            <option value="Hifz Usthad">
                                                Hifz Usthad
                                            </option>

                                            <option value="Tajweed Usthad">
                                                Tajweed Usthad
                                            </option>

                                            <option value="Islamic Studies">
                                                Islamic Studies
                                            </option>

                                            <option value="Arabic Teacher">
                                                Arabic Teacher
                                            </option>

                                        </select>

                                    </div>


                                    <!-- Phone -->

                                    <div class="teacher-form-group">

                                        <label for="teacherPhone">
                                            Phone Number
                                        </label>

                                        <input
                                            type="tel"
                                            id="teacherPhone"
                                            placeholder="Enter phone number">

                                    </div>


                                    <!-- Joining Date -->

                                    <div class="teacher-form-group">

                                        <label for="teacherJoiningDate">
                                            Joining Date
                                        </label>

                                        <input
                                            type="date"
                                            id="teacherJoiningDate">

                                    </div>


                                    <!-- Status -->

                                    <div class="teacher-form-group">

                                        <label for="teacherStatus">
                                            Status
                                        </label>

                                        <select id="teacherStatus">

                                            <option value="Active">
                                                Active
                                            </option>

                                            <option value="On Leave">
                                                On Leave
                                            </option>

                                            <option value="Inactive">
                                                Inactive
                                            </option>

                                        </select>

                                    </div>


                                    <!-- Qualification -->

                                    <div class="teacher-form-group">

                                        <label for="teacherQualification">
                                            Qualification
                                        </label>

                                        <input
                                            type="text"
                                            id="teacherQualification"
                                            placeholder="Example: Hifz & Aalim">

                                    </div>


                                    <!-- Experience -->

                                    <div class="teacher-form-group">

                                        <label for="teacherExperience">
                                            Experience
                                        </label>

                                        <input
                                            type="text"
                                            id="teacherExperience"
                                            placeholder="Example: 3 Years">

                                    </div>

                                </div>


                                <!-- Address -->

                                <div class="teacher-form-group teacher-address-input">

                                    <label for="teacherAddress">
                                        Address
                                    </label>

                                    <textarea
                                        id="teacherAddress"
                                        rows="3"
                                        placeholder="Enter teacher address"></textarea>

                                </div>

                            </div>


                            <!-- Modal Footer -->

                            <div class="teacher-form-footer">

                                <button
                                    type="button"
                                    class="teacher-form-cancel-btn"
                                    data-bs-dismiss="modal">
                                    Cancel
                                </button>

                                <button
                                    type="button"
                                    class="teacher-form-save-btn">
                                    <i class="bi bi-check-circle"></i>
                                    Save Teacher
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Edit Teacher Modal -->
                <div
                    class="modal fade"
                    id="editTeacherModal"
                    tabindex="-1"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered modal-lg">

                        <div class="modal-content teacher-form-modal">

                            <!-- Modal Header -->
                            <div class="teacher-form-header">

                                <div>

                                    <h3>Edit Teacher</h3>
                                    <p>Update teacher and staff information</p>

                                </div>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>

                            <!-- Modal Body -->
                            <div class="teacher-form-body">

                                <div class="teacher-form-grid">

                                    <!-- Teacher Name -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherName">Teacher Name</label>
                                        <input type="text" id="editTeacherName" value="Abdullah">

                                    </div>

                                    <!-- Teacher ID -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherId">Teacher ID </label>
                                        <input type="text" id="editTeacherId" value="T001">

                                    </div>

                                    <!-- Role -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherRole"> Role / Subject </label>

                                        <select id="editTeacherRole">

                                            <option value="">Select role</option>
                                            <option value="Hifz Usthad" selected> Hifz Usthad </option>
                                            <option value="Tajweed Usthad"> Tajweed Usthad</option>
                                            <option value="Islamic Studies"> Islamic Studies</option>
                                            <option value="Arabic Teacher">Arabic Teacher</option>

                                        </select>

                                    </div>

                                    <!-- Phone -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherPhone">Phone Number</label>
                                        <input type="tel" id="editTeacherPhone" value="98765 43210">

                                    </div>

                                    <!-- Joining Date -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherJoiningDate" Joining Date</label>
                                            <input type="date" id="editTeacherJoiningDate" value="2023-06-12">

                                    </div>

                                    <!-- Status -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherStatus">Status</label>

                                        <select id="editTeacherStatus">

                                            <option value="Active" selected>Active</option>
                                            <option value="On Leave">On Leave </option>
                                            <option value="Inactive">Inactive</option>

                                        </select>

                                    </div>

                                    <!-- Qualification -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherQualification">Qualification</label>
                                        <input type="text" id="editTeacherQualification" value="Hifz & Aalim">

                                    </div>

                                    <!-- Experience -->
                                    <div class="teacher-form-group">

                                        <label for="editTeacherExperience">
                                            Experience
                                        </label>

                                        <input
                                            type="text"
                                            id="editTeacherExperience"
                                            value="3 Years">

                                    </div>

                                </div>

                                <!-- Address -->
                                <div class="teacher-form-group teacher-address-input">

                                    <label for="editTeacherAddress">Address</label>
                                    <textarea id="editTeacherAddress" rows="3">12, Madrasa Street, Coimbatore, Tamil Nadu</textarea>

                                </div>

                            </div>

                            <!-- Modal Footer -->
                            <div class="teacher-form-footer">

                                <button type="button" class="teacher-form-cancel-btn" data-bs-dismiss="modal">Cancel </button>
                                <button type="button" class="teacher-form-save-btn">
                                    <i class="bi bi-check-circle"></i> Update Teacher </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Delete Teacher Confirmation Modal -->

                <div
                    class="modal fade"
                    id="deleteTeacherModal"
                    tabindex="-1"
                    aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content delete-teacher-modal">

                            <!-- Modal Body -->

                            <div class="delete-teacher-body">

                                <!-- Warning Icon -->

                                <div class="delete-teacher-icon">

                                    <i class="bi bi-trash"></i>

                                </div>


                                <!-- Message -->

                                <h3>Delete Teacher?</h3>

                                <p>
                                    Are you sure you want to delete
                                    <strong>Abdullah</strong>?
                                </p>

                                <span class="delete-teacher-warning">
                                    This action cannot be undone.
                                </span>

                            </div>


                            <!-- Modal Footer -->

                            <div class="delete-teacher-footer">

                                <button
                                    type="button"
                                    class="delete-teacher-cancel-btn"
                                    data-bs-dismiss="modal">
                                    Cancel
                                </button>

                                <button
                                    type="button"
                                    class="delete-teacher-confirm-btn">
                                    <i class="bi bi-trash"></i>
                                    Delete Teacher
                                </button>

                            </div>

                        </div>

                    </div>

                </div>
            </section>

        </main>

    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script.js"></script>
</body>

</html>