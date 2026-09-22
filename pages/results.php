<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - Darussalam</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="dashboard-wrapper">


        <!-- ================================
         Sidebar
     ================================ -->

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


                <a href="results.php" class="menu-item active">
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
        <!-- ================================
         Main Content
    ================================= -->

        <main class="main-content">
            <!-- Top Navbar -->
            <div class="top-navbar">

                <div>

                    <h4>Results</h4>

                    <p>Manage student examination results</p>

                </div>

            </div>
            <!-- Page Content -->
            <section class="content-section">
                <!-- Results Page Header -->

                <div class="section-header">

                    <div>

                        <h2>Student Results</h2>

                        <p>Manage and track student examination results</p>

                    </div>


                    <button
                        type="button"
                        class="quick-add-btn">

                        <i class="bi bi-plus-circle"></i>

                        Add Result

                    </button>

                </div>

                <!-- Result Summary Cards -->

                <div class="results-summary-cards">

                    <div class="results-summary-card">

                        <div class="results-summary-icon total">
                            <i class="bi bi-people"></i>
                        </div>

                        <div>
                            <span>Total Students</span>
                            <strong>120</strong>
                        </div>

                    </div>


                    <div class="results-summary-card">

                        <div class="results-summary-icon passed">
                            <i class="bi bi-check-circle"></i>
                        </div>

                        <div>
                            <span>Passed</span>
                            <strong>105</strong>
                        </div>

                    </div>


                    <div class="results-summary-card">

                        <div class="results-summary-icon failed">
                            <i class="bi bi-x-circle"></i>
                        </div>

                        <div>
                            <span>Failed</span>
                            <strong>10</strong>
                        </div>

                    </div>


                    <div class="results-summary-card">

                        <div class="results-summary-icon average">
                            <i class="bi bi-bar-chart"></i>
                        </div>

                        <div>
                            <span>Average Percentage</span>
                            <strong>82%</strong>
                        </div>

                    </div>

                </div>

                <!-- Results Search & Filter -->

                <div class="results-filter-card">

                    <div class="results-search-box">

                        <i class="bi bi-search"></i>
                        <input type="text" id="resultSearch" placeholder="Search student name or roll number...">

                    </div>

                    <select id="resultLevelFilter">

                        <option value="">All Hifz Levels</option>
                        <option value="Hifz Level 1"> Hifz Level 1</option>
                        <option value="Hifz Level 2"> Hifz Level 2</option>
                        <option value="Hifz Level 3">Hifz Level 3</option>
                        <option value="Revision">Revision</option>

                    </select>

                    <select id="resultStatusFilter">

                        <option value="">All Results</option>
                        <option value="Passed">Passed</option>
                        <option value="Failed">Failed</option>

                    </select>

                    <button type="button" class="results-filter-reset">
                        <i class="bi bi-arrow-clockwise"></i>
                        Reset
                    </button>

                </div>

                <!-- Student Results Table -->

                <div class="results-table-card">

                    <div class="results-table-header">

                        <div>
                            <h3>Student Results</h3>
                            <p>View and manage examination results</p>
                        </div>

                        <button type="button" class="results-export-btn">
                            <i class="bi bi-download"></i>
                            Export
                        </button>

                    </div>


                    <div class="table-responsive">

                        <table class="results-table">

                            <thead>
                                <tr>
                                    <th>ROLL NO</th>
                                    <th>STUDENT</th>
                                    <th>HIFZ LEVEL</th>
                                    <th>QURAN</th>
                                    <th>TAJWEED</th>
                                    <th>ISLAMIC STUDIES</th>
                                    <th>TOTAL</th>
                                    <th>PERCENTAGE</th>
                                    <th>GRADE</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>


                            <tbody>

                                <tr>

                                    <td>001</td>

                                    <td>
                                        <div class="result-student">
                                            <div class="result-avatar">A</div>

                                            <div>
                                                <strong>Abdullah</strong>
                                                <span>Hifz Student</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>Hifz Level 2</td>

                                    <td>92</td>

                                    <td>88</td>

                                    <td>90</td>

                                    <td><strong>270 / 300</strong></td>

                                    <td>90%</td>

                                    <td>
                                        <span class="result-grade grade-a">
                                            A
                                        </span>
                                    </td>

                                    <td>
                                        <span class="result-status status-passed">
                                            Passed
                                        </span>
                                    </td>

                                    <td>
                                        <div class="result-actions">

                                            <button
                                                type="button"
                                                class="result-view-btn"
                                                title="View Result">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="result-edit-btn"
                                                title="Edit Result">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="result-delete-btn"
                                                title="Delete Result">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>
                                    </td>

                                </tr>


                                <tr>

                                    <td>002</td>

                                    <td>
                                        <div class="result-student">
                                            <div class="result-avatar">M</div>

                                            <div>
                                                <strong>Muhammad</strong>
                                                <span>Hifz Student</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>Hifz Level 1</td>

                                    <td>85</td>

                                    <td>82</td>

                                    <td>88</td>

                                    <td><strong>255 / 300</strong></td>

                                    <td>85%</td>

                                    <td>
                                        <span class="result-grade grade-a">
                                            A
                                        </span>
                                    </td>

                                    <td>
                                        <span class="result-status status-passed">
                                            Passed
                                        </span>
                                    </td>

                                    <td>
                                        <div class="result-actions">

                                            <button type="button" class="result-view-btn">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button type="button" class="result-edit-btn">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button type="button" class="result-delete-btn">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>
                                    </td>

                                </tr>


                                <tr>

                                    <td>003</td>

                                    <td>
                                        <div class="result-student">
                                            <div class="result-avatar">I</div>

                                            <div>
                                                <strong>Ibrahim</strong>
                                                <span>Hifz Student</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>Revision</td>

                                    <td>96</td>

                                    <td>94</td>

                                    <td>95</td>

                                    <td><strong>285 / 300</strong></td>

                                    <td>95%</td>

                                    <td>
                                        <span class="result-grade grade-a-plus">
                                            A+
                                        </span>
                                    </td>

                                    <td>
                                        <span class="result-status status-passed">
                                            Passed
                                        </span>
                                    </td>

                                    <td>
                                        <div class="result-actions">

                                            <button type="button" class="result-view-btn">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button type="button" class="result-edit-btn">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button type="button" class="result-delete-btn">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>
                                    </td>

                                </tr>


                                <tr>

                                    <td>004</td>

                                    <td>
                                        <div class="result-student">
                                            <div class="result-avatar">Y</div>

                                            <div>
                                                <strong>Yusuf</strong>
                                                <span>Hifz Student</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>Hifz Level 3</td>

                                    <td>62</td>

                                    <td>58</td>

                                    <td>65</td>

                                    <td><strong>185 / 300</strong></td>

                                    <td>62%</td>

                                    <td>
                                        <span class="result-grade grade-c">
                                            C
                                        </span>
                                    </td>

                                    <td>
                                        <span class="result-status status-failed">
                                            Failed
                                        </span>
                                    </td>

                                    <td>
                                        <div class="result-actions">

                                            <button type="button" class="result-view-btn">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <button type="button" class="result-edit-btn">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button type="button" class="result-delete-btn">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <div class="results-table-footer">

                        <span>Showing 1–4 of 120 students</span>


                        <div class="results-pagination">

                            <button type="button" class="pagination-btn pagination-prev"><i class="bi bi-chevron-left"></i> Previous </button>
                            <button type="button" class="pagination-number active">1</button>
                            <button type="button" class="pagination-number">2</button>
                            <button type="button" class="pagination-number"> 3 </button>

                            <span class="pagination-dots"> ...</span>

                            <button type="button" class="pagination-number">30</button>
                            <button type="button"class="pagination-btn pagination-next">Next<i class="bi bi-chevron-right"></i></button>

                        </div>

                    </div>




                    <!-- View Result Modal -->

                    <div
                        class="modal fade"
                        id="viewResultModal"
                        tabindex="-1"
                        aria-hidden="true">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content result-view-modal">

                                <!-- Modal Header -->

                                <div class="result-modal-header">

                                    <div class="result-modal-student">

                                        <div class="result-modal-avatar">
                                            A
                                        </div>

                                        <div>
                                            <h4>Abdullah</h4>
                                            <p>Roll No: 001 • Hifz Level 2</p>
                                        </div>

                                    </div>

                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>


                                <!-- Result Summary -->

                                <div class="result-modal-summary">

                                    <div>
                                        <span>Total Marks</span>
                                        <strong>270 / 300</strong>
                                    </div>

                                    <div>
                                        <span>Percentage</span>
                                        <strong>90%</strong>
                                    </div>

                                    <div>
                                        <span>Grade</span>
                                        <strong>A</strong>
                                    </div>

                                    <div>
                                        <span>Status</span>
                                        <strong class="modal-passed">
                                            Passed
                                        </strong>
                                    </div>

                                </div>


                                <!-- Subject Results -->

                                <div class="result-subject-section">

                                    <h5>Subject Results</h5>

                                    <div class="result-subject-list">

                                        <div class="result-subject-row">

                                            <span>
                                                <i class="bi bi-book"></i>
                                                Quran
                                            </span>

                                            <strong>92 / 100</strong>

                                        </div>


                                        <div class="result-subject-row">

                                            <span>
                                                <i class="bi bi-mic"></i>
                                                Tajweed
                                            </span>

                                            <strong>88 / 100</strong>

                                        </div>


                                        <div class="result-subject-row">

                                            <span>
                                                <i class="bi bi-moon-stars"></i>
                                                Islamic Studies
                                            </span>

                                            <strong>90 / 100</strong>

                                        </div>

                                    </div>

                                </div>


                                <!-- Modal Footer -->

                                <div class="result-modal-footer">

                                    <span>
                                        Examination Result
                                    </span>

                                    <button
                                        type="button"
                                        class="result-print-btn">
                                        <i class="bi bi-printer"></i>
                                        Print Result
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Add Result Modal -->

                    <div
                        class="modal fade"
                        id="addResultModal"
                        tabindex="-1"
                        aria-hidden="true">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content result-form-modal">

                                <!-- Modal Header -->

                                <div class="result-form-header">

                                    <div>
                                        <h4>Add Student Result</h4>
                                        <p>Enter examination marks for the student</p>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>


                                <!-- Form -->

                                <div class="result-form-body">

                                    <div class="result-form-grid">

                                        <!-- Student -->

                                        <div class="result-form-group">

                                            <label for="resultStudent">
                                                Student
                                            </label>

                                            <select id="resultStudent">

                                                <option value="">
                                                    Select Student
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


                                        <!-- Exam -->

                                        <div class="result-form-group">

                                            <label for="resultExam">
                                                Examination
                                            </label>

                                            <select id="resultExam">

                                                <option value="">
                                                    Select Examination
                                                </option>

                                                <option value="Monthly Test">
                                                    Monthly Test
                                                </option>

                                                <option value="Quarterly Exam">
                                                    Quarterly Exam
                                                </option>

                                                <option value="Half Yearly Exam">
                                                    Half Yearly Exam
                                                </option>

                                                <option value="Annual Exam">
                                                    Annual Exam
                                                </option>

                                            </select>

                                        </div>

                                    </div>


                                    <!-- Marks -->

                                    <div class="result-marks-section">

                                        <h5>Subject Marks</h5>

                                        <div class="result-marks-grid">

                                            <div class="result-form-group">

                                                <label for="quranMarks">
                                                    Quran
                                                </label>

                                                <input
                                                    type="number"
                                                    id="quranMarks"
                                                    min="0"
                                                    max="100"
                                                    placeholder="0 - 100">

                                            </div>


                                            <div class="result-form-group">

                                                <label for="tajweedMarks">
                                                    Tajweed
                                                </label>

                                                <input
                                                    type="number"
                                                    id="tajweedMarks"
                                                    min="0"
                                                    max="100"
                                                    placeholder="0 - 100">

                                            </div>


                                            <div class="result-form-group">

                                                <label for="islamicMarks">
                                                    Islamic Studies
                                                </label>

                                                <input
                                                    type="number"
                                                    id="islamicMarks"
                                                    min="0"
                                                    max="100"
                                                    placeholder="0 - 100">

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Remarks -->

                                    <div class="result-form-group">

                                        <label for="resultRemarks">
                                            Remarks
                                        </label>

                                        <textarea
                                            id="resultRemarks"
                                            rows="3"
                                            placeholder="Enter remarks..."></textarea>

                                    </div>

                                </div>


                                <!-- Footer -->

                                <div class="result-form-footer">

                                    <button
                                        type="button"
                                        class="result-cancel-btn"
                                        data-bs-dismiss="modal">
                                        Cancel
                                    </button>

                                    <button
                                        type="button"
                                        class="result-save-btn">
                                        <i class="bi bi-check-lg"></i>
                                        Save Result
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Edit Result Modal -->

                    <div
                        class="modal fade"
                        id="editResultModal"
                        tabindex="-1"
                        aria-hidden="true">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content result-form-modal">

                                <!-- Header -->

                                <div class="result-form-header">

                                    <div>
                                        <h4>Edit Student Result</h4>
                                        <p>Update examination marks and result details</p>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>


                                <!-- Body -->

                                <div class="result-form-body">

                                    <div class="result-form-grid">

                                        <!-- Student -->

                                        <div class="result-form-group">

                                            <label for="editResultStudent">
                                                Student
                                            </label>

                                            <select id="editResultStudent">

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


                                        <!-- Examination -->

                                        <div class="result-form-group">

                                            <label for="editResultExam">
                                                Examination
                                            </label>

                                            <select id="editResultExam">

                                                <option value="Monthly Test">
                                                    Monthly Test
                                                </option>

                                                <option value="Quarterly Exam">
                                                    Quarterly Exam
                                                </option>

                                                <option value="Half Yearly Exam">
                                                    Half Yearly Exam
                                                </option>

                                                <option value="Annual Exam">
                                                    Annual Exam
                                                </option>

                                            </select>

                                        </div>

                                    </div>


                                    <!-- Marks -->

                                    <div class="result-marks-section">

                                        <h5>Subject Marks</h5>

                                        <div class="result-marks-grid">

                                            <div class="result-form-group">

                                                <label for="editQuranMarks">
                                                    Quran
                                                </label>

                                                <input
                                                    type="number"
                                                    id="editQuranMarks"
                                                    min="0"
                                                    max="100"
                                                    value="92">

                                            </div>


                                            <div class="result-form-group">

                                                <label for="editTajweedMarks">
                                                    Tajweed
                                                </label>

                                                <input
                                                    type="number"
                                                    id="editTajweedMarks"
                                                    min="0"
                                                    max="100"
                                                    value="88">

                                            </div>


                                            <div class="result-form-group">

                                                <label for="editIslamicMarks">
                                                    Islamic Studies
                                                </label>

                                                <input
                                                    type="number"
                                                    id="editIslamicMarks"
                                                    min="0"
                                                    max="100"
                                                    value="90">

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Remarks -->

                                    <div class="result-form-group">

                                        <label for="editResultRemarks">
                                            Remarks
                                        </label>

                                        <textarea
                                            id="editResultRemarks"
                                            rows="3"
                                            placeholder="Enter remarks...">Good performance</textarea>

                                    </div>

                                </div>


                                <!-- Footer -->

                                <div class="result-form-footer">

                                    <button
                                        type="button"
                                        class="result-cancel-btn"
                                        data-bs-dismiss="modal">
                                        Cancel
                                    </button>

                                    <button
                                        type="button"
                                        class="result-save-btn">
                                        <i class="bi bi-check-lg"></i>
                                        Update Result
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Delete Result Confirmation Modal -->

                    <div
                        class="modal fade"
                        id="deleteResultModal"
                        tabindex="-1"
                        aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content delete-result-modal">

                                <div class="delete-result-body">

                                    <!-- Warning Icon -->

                                    <div class="delete-result-icon">
                                        <i class="bi bi-trash3"></i>
                                    </div>


                                    <!-- Message -->

                                    <h4>Delete Result?</h4>

                                    <p>
                                        Are you sure you want to delete the result
                                        of <strong>Abdullah</strong>?
                                    </p>

                                    <span class="delete-warning-text">
                                        This action cannot be undone.
                                    </span>

                                </div>


                                <!-- Footer -->

                                <div class="delete-result-footer">

                                    <button
                                        type="button"
                                        class="delete-cancel-btn"
                                        data-bs-dismiss="modal">
                                        Cancel
                                    </button>

                                    <button
                                        type="button"
                                        class="delete-confirm-btn">
                                        <i class="bi bi-trash3"></i>
                                        Delete Result
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