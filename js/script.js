// ========================================
// DARUSSALAM MADRASA MANAGEMENT SYSTEM
// Dashboard JavaScript
// ========================================


// ========================================
// 1. SIDEBAR TOGGLE
// ========================================

const sidebarToggle = document.getElementById("sidebarToggle");
const sidebar = document.querySelector(".sidebar");

if (sidebarToggle && sidebar) {

    sidebarToggle.addEventListener("click", function () {

        sidebar.classList.toggle("sidebar-open");

    });

}
// ========================================
// 2. SIDEBAR ACTIVE MENU
// ========================================

const menuItems = document.querySelectorAll(".menu-item");

menuItems.forEach(function (menuItem) {

    menuItem.addEventListener("click", function () {

        menuItems.forEach(function (item) {

            item.classList.remove("active");

        });

        this.classList.add("active");

    });

});
// ========================================
// 3. NOTIFICATION PANEL
// ========================================

const notificationButton = document.getElementById("notificationButton");
const notificationPanel = document.getElementById("notificationPanel");

if (notificationButton && notificationPanel) {

    notificationButton.addEventListener("click", function () {

        notificationPanel.classList.toggle("show");

    });

}
// ========================================
// 4. PROFILE DROPDOWN
// ========================================

const profileButton = document.getElementById("profileButton");
const profileDropdown = document.getElementById("profileDropdown");

if (profileButton && profileDropdown) {

    profileButton.addEventListener("click", function () {

        profileDropdown.classList.toggle("show");

    });

}
const dashboardStudentList = document.getElementById("dashboardStudentList");
// ========================================
// 5. DASHBOARD SEARCH
// ========================================

const dashboardSearch = document.getElementById("dashboardSearch");

if (dashboardSearch && dashboardStudentList) {

    dashboardSearch.addEventListener("input", function () {

        const searchValue = this.value.toLowerCase().trim();

        const studentItems =
            dashboardStudentList.querySelectorAll(".student-item");

        studentItems.forEach(function (student) {

            const studentName =
                student.querySelector("strong").textContent.toLowerCase();

            if (studentName.includes(searchValue)) {

                student.style.display = "flex";

            } else {

                student.style.display = "none";

            }

        });

    });

}
// ========================================
// 6. ADD STUDENT MODAL
// ========================================

const addStudentButton = document.getElementById("addStudentButton");
const dashboardAddStudentModal = document.getElementById("dashboardAddStudentModal");

if (addStudentButton && dashboardAddStudentModal) {

    const addStudentModal = new bootstrap.Modal(dashboardAddStudentModal);

    addStudentButton.addEventListener("click", function () {

        addStudentModal.show();

    });

}
// ========================================
// 7. ADD STUDENT
// ========================================

const dashboardSaveStudent = document.getElementById("dashboardSaveStudent");

const dashboardStudentName = document.getElementById("dashboardStudentName");
const dashboardRollNumber = document.getElementById("dashboardRollNumber");
const dashboardHifzLevel = document.getElementById("dashboardHifzLevel");
const dashboardStudentStatus = document.getElementById("dashboardStudentStatus");


if (
    dashboardSaveStudent &&
    dashboardStudentName &&
    dashboardRollNumber &&
    dashboardHifzLevel &&
    dashboardStudentStatus &&
    dashboardStudentList
) {

    dashboardSaveStudent.addEventListener("click", function () {

        const studentName = dashboardStudentName.value.trim();
        const rollNumber = dashboardRollNumber.value.trim();
        const hifzLevel = dashboardHifzLevel.value;
        const studentStatus = dashboardStudentStatus.value;

        // Validation

        if (studentName === "") {
            alert("Please enter student name.");
            dashboardStudentName.focus();
            return;
        }

        if (rollNumber === "") {
            alert("Please enter roll number.");
            dashboardRollNumber.focus();
            return;
        }

        if (hifzLevel === "") {
            alert("Please select Hifz level.");
            dashboardHifzLevel.focus();
            return;
        }

        if (studentStatus === "") {
            alert("Please select student status.");
            dashboardStudentStatus.focus();
            return;
        }


        // Create new student

        const studentItem = document.createElement("div");

        studentItem.className = "student-item";

        studentItem.innerHTML = `
            <div class="student-avatar">
                ${studentName.charAt(0).toUpperCase()}
            </div>

            <div class="student-details">
                <strong>${studentName}</strong>
                <small>${hifzLevel} • Roll No: ${rollNumber}</small>
            </div>
        `;

        // Save student data to localStorage

        const studentData = {
            name: studentName,
            rollNumber: rollNumber,
            hifzLevel: hifzLevel,
            status: studentStatus
        };

        let students = JSON.parse(localStorage.getItem("dashboardStudents")) || [];

        students.push(studentData);

        localStorage.setItem("dashboardStudents", JSON.stringify(students));


        // Add student to dashboard

        dashboardStudentList.appendChild(studentItem);


        // Clear form

        dashboardStudentName.value = "";
        dashboardRollNumber.value = "";
        dashboardHifzLevel.value = "";
        dashboardStudentStatus.value = "";


        // Close modal

        const modalElement = document.getElementById("dashboardAddStudentModal");

        const modalInstance =
            bootstrap.Modal.getInstance(modalElement);

        if (modalInstance) {

            modalElement.addEventListener("hidden.bs.modal", function () {

                dashboardSaveStudent.blur();

            }, { once: true });

            modalInstance.hide();

        }

        // Success message

        alert("Student added successfully!");

    });

}
// ========================================
// 8. LOAD SAVED STUDENTS
// ========================================

if (dashboardStudentList) {

    const savedStudents =
        JSON.parse(localStorage.getItem("dashboardStudents")) || [];

    savedStudents.forEach(function (student) {

        const studentItem = document.createElement("div");

        studentItem.className = "student-item";

        studentItem.innerHTML = `
            <div class="student-avatar">
                ${student.name.charAt(0).toUpperCase()}
            </div>

            <div class="student-details">
                <strong>${student.name}</strong>
                <small>${student.hifzLevel} • Roll No: ${student.rollNumber}</small>
            </div>
        `;

        dashboardStudentList.appendChild(studentItem);

    });

}
// ========================================
// 9. DASHBOARD STATISTICS CARDS
// ========================================

const totalStudentsCount =
    document.getElementById("totalStudentsCount");

const presentTodayCount =
    document.getElementById("presentTodayCount");

const absentTodayCount =
    document.getElementById("absentTodayCount");

const totalTeachersCount =
    document.getElementById("totalTeachersCount");


// ----------------------------------------
// TOTAL STUDENTS
// ----------------------------------------

if (totalStudentsCount) {

    const savedStudents =
        JSON.parse(localStorage.getItem("dashboardStudents")) || [];

    /*
        For now, keep the existing dashboard
        value if no saved student data exists.

        Later, Students page data will become
        the main source for this number.
    */

    if (savedStudents.length > 0) {

        const baseStudents = 24;

        totalStudentsCount.textContent =
            baseStudents + savedStudents.length;

    }
}


// ----------------------------------------
// PRESENT TODAY
// ----------------------------------------

if (presentTodayCount) {

    const savedAttendance =
        JSON.parse(localStorage.getItem("attendanceData"));

    if (savedAttendance) {

        presentTodayCount.textContent =
            savedAttendance.present || 0;

    }
}


// ----------------------------------------
// ABSENT TODAY
// ----------------------------------------

if (absentTodayCount) {

    const savedAttendance =
        JSON.parse(localStorage.getItem("attendanceData"));

    if (savedAttendance) {

        absentTodayCount.textContent =
            savedAttendance.absent || 0;

    }
}


// ----------------------------------------
// TOTAL TEACHERS
// ----------------------------------------

if (totalTeachersCount) {

    const savedTeachers =
        JSON.parse(localStorage.getItem("teachersData"));

    if (savedTeachers) {

        totalTeachersCount.textContent =
            savedTeachers.length;

    }
}


// ========================================
// DASHBOARD - ATTENDANCE SYNC
// ========================================

const savedAttendance =
    localStorage.getItem("attendanceData");


if (
    savedAttendance &&
    presentTodayCount &&
    absentTodayCount
) {

    const attendanceData =
        JSON.parse(savedAttendance);


    const records =
        attendanceData.records || [];


    let presentCount = 0;
    let absentCount = 0;


    records.forEach(function (record) {

        if (record.status === "Present") {
            presentCount++;
        }

        if (record.status === "Absent") {
            absentCount++;
        }

    });


    presentTodayCount.textContent =
        presentCount;

    absentTodayCount.textContent =
        absentCount;

}
// ========================================
// ATTENDANCE - STEP 1
// INDIVIDUAL ATTENDANCE SELECTION
// ========================================

const attendanceTableBody =
    document.getElementById("attendanceTableBody");

if (attendanceTableBody) {

    const attendanceButtons =
        attendanceTableBody.querySelectorAll(".attendance-option");

    attendanceButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            const currentRow =
                this.closest("tr");

            const rowButtons =
                currentRow.querySelectorAll(".attendance-option");

            // Remove previous selection
            rowButtons.forEach(function (item) {
                item.classList.remove("selected");
            });

            // Select clicked button
            this.classList.add("selected");

        });

    });

}
// ========================================
// ATTENDANCE - STEP 2
// DYNAMIC ATTENDANCE SUMMARY
// ========================================

const attendanceTotalStudents =
    document.getElementById("attendanceTotalStudents");

const attendancePresentCount =
    document.getElementById("attendancePresentCount");

const attendanceAbsentCount =
    document.getElementById("attendanceAbsentCount");

const attendanceLeaveCount =
    document.getElementById("attendanceLeaveCount");

if (
    attendanceTableBody &&
    attendanceTotalStudents &&
    attendancePresentCount &&
    attendanceAbsentCount &&
    attendanceLeaveCount
) {

    function updateAttendanceSummary() {

        const attendanceRows =
            attendanceTableBody.querySelectorAll("tr");

        let presentCount = 0;
        let absentCount = 0;
        let leaveCount = 0;

        attendanceRows.forEach(function (row) {

            const selectedButton =
                row.querySelector(".attendance-option.selected");

            if (!selectedButton) {
                return;
            }

            if (selectedButton.classList.contains("present")) {
                presentCount++;
            }

            if (selectedButton.classList.contains("absent")) {
                absentCount++;
            }

            if (selectedButton.classList.contains("leave")) {
                leaveCount++;
            }

        });

        attendanceTotalStudents.textContent =
            attendanceRows.length;

        attendancePresentCount.textContent =
            presentCount;

        attendanceAbsentCount.textContent =
            absentCount;

        attendanceLeaveCount.textContent =
            leaveCount;
    }


    const attendanceButtons =
        attendanceTableBody.querySelectorAll(".attendance-option");

    attendanceButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            updateAttendanceSummary();

        });

    });


    updateAttendanceSummary();

}
// ========================================
// ATTENDANCE - STEP 3
// QUICK ACTIONS
// ========================================

const quickPresentButton =
    document.querySelector(".quick-present-btn");

const quickAbsentButton =
    document.querySelector(".quick-absent-btn");

const quickResetButton =
    document.querySelector(".quick-reset-btn");

if (
    attendanceTableBody &&
    quickPresentButton &&
    quickAbsentButton &&
    quickResetButton
) {

    // MARK ALL PRESENT
    quickPresentButton.addEventListener("click", function () {

        const attendanceRows =
            attendanceTableBody.querySelectorAll("tr");

        attendanceRows.forEach(function (row) {

            const presentButton =
                row.querySelector(".attendance-option.present");

            const rowButtons =
                row.querySelectorAll(".attendance-option");

            rowButtons.forEach(function (button) {
                button.classList.remove("selected");
            });

            if (presentButton) {
                presentButton.classList.add("selected");
            }

        });

        updateAttendanceSummary();
    });


    // MARK ALL ABSENT
    quickAbsentButton.addEventListener("click", function () {

        const attendanceRows =
            attendanceTableBody.querySelectorAll("tr");

        attendanceRows.forEach(function (row) {

            const absentButton =
                row.querySelector(".attendance-option.absent");

            const rowButtons =
                row.querySelectorAll(".attendance-option");

            rowButtons.forEach(function (button) {
                button.classList.remove("selected");
            });

            if (absentButton) {
                absentButton.classList.add("selected");
            }

        });

        updateAttendanceSummary();
    });


    // RESET ALL ATTENDANCE
    quickResetButton.addEventListener("click", function () {

        const attendanceButtons =
            attendanceTableBody.querySelectorAll(".attendance-option");

        attendanceButtons.forEach(function (button) {
            button.classList.remove("selected");
        });

        updateAttendanceSummary();
    });

}



// ========================================
// ATTENDANCE - STEP 7
// COMBINED FILTERS
// ========================================

const attendanceSearch = document.getElementById("attendanceSearch");
const attendanceLevelFilter = document.getElementById("attendanceLevelFilter");
const attendanceStatusFilter = document.getElementById("attendanceStatusFilter");
const attendanceFilterReset = document.querySelector(".attendance-filter-reset");


function filterAttendanceStudents() {

    if (!attendanceTableBody) {
        return;
    }

    const searchValue =
        attendanceSearch
            ? attendanceSearch.value.toLowerCase().trim()
            : "";

    const selectedLevel =
        attendanceLevelFilter
            ? attendanceLevelFilter.value.toLowerCase().trim()
            : "";

    const selectedStatus =
        attendanceStatusFilter
            ? attendanceStatusFilter.value.toLowerCase().trim()
            : "";


    const attendanceRows =
        attendanceTableBody.querySelectorAll("tr");


    attendanceRows.forEach(function (row) {

        // SEARCH
        const rowText =
            row.textContent.toLowerCase();

        const matchesSearch =
            searchValue === "" ||
            rowText.includes(searchValue);


        // HIFZ LEVEL
        const matchesLevel =
            selectedLevel === "" ||
            rowText.includes(selectedLevel);


        // STATUS
        let matchesStatus = true;

        if (selectedStatus !== "") {

            const selectedButton =
                row.querySelector(
                    ".attendance-option.selected"
                );

            if (!selectedButton) {

                matchesStatus = false;

            } else {

                const studentStatus =
                    selectedButton.textContent
                        .toLowerCase()
                        .trim();

                matchesStatus =
                    studentStatus === selectedStatus;
            }
        }


        // FINAL RESULT
        if (
            matchesSearch &&
            matchesLevel &&
            matchesStatus
        ) {

            row.style.setProperty(
                "display",
                "table-row",
                "important"
            );

        } else {

            row.style.setProperty(
                "display",
                "none",
                "important"
            );

        }

    });

}


// SEARCH
if (attendanceSearch) {

    attendanceSearch.addEventListener(
        "input",
        filterAttendanceStudents
    );

}


// HIFZ LEVEL
if (attendanceLevelFilter) {

    attendanceLevelFilter.addEventListener(
        "change",
        filterAttendanceStudents
    );

}


// STATUS
if (attendanceStatusFilter) {

    attendanceStatusFilter.addEventListener(
        "change",
        filterAttendanceStudents
    );

}


// RESET FILTERS
if (attendanceFilterReset) {

    attendanceFilterReset.addEventListener(
        "click",
        function () {

            if (attendanceSearch) {
                attendanceSearch.value = "";
            }

            if (attendanceLevelFilter) {
                attendanceLevelFilter.value = "";
            }

            if (attendanceStatusFilter) {
                attendanceStatusFilter.value = "";
            }

            filterAttendanceStudents();

        }
    );

}
// ========================================
// ATTENDANCE - STEP 8
// DATE NAVIGATION
// ========================================
const attendanceDate = document.getElementById("attendanceDate");
const previousDateBtn = document.getElementById("previousDateBtn");
const todayDateBtn = document.getElementById("todayDateBtn");
const nextDateBtn = document.getElementById("nextDateBtn");

if (
    attendanceDate &&
    previousDateBtn &&
    todayDateBtn &&
    nextDateBtn
) {
    // Starting attendance date
    let selectedAttendanceDate =
        new Date(2026, 8, 22);

    // Format date
    function formatAttendanceDate(date) {

        const options = {
            day: "numeric",
            month: "long",
            year: "numeric"
        };

        return date.toLocaleDateString(
            "en-GB",
            options
        );

    }

    // Update date on screen
    function updateAttendanceDate() {

        attendanceDate.textContent =
            formatAttendanceDate(
                selectedAttendanceDate
            );

    }

    // PREVIOUS DATE
    previousDateBtn.addEventListener(
        "click",
        function () {

            selectedAttendanceDate.setDate(
                selectedAttendanceDate.getDate() - 1
            );

            updateAttendanceDate();

        }
    );

    // TODAY
    todayDateBtn.addEventListener(
        "click",
        function () {

            selectedAttendanceDate =
                new Date();

            updateAttendanceDate();

        }
    );

    // NEXT DATE
    nextDateBtn.addEventListener(
        "click",
        function () {

            selectedAttendanceDate.setDate(
                selectedAttendanceDate.getDate() + 1
            );

            updateAttendanceDate();

        }
    );

    // Show initial date
    updateAttendanceDate();

}
// ========================================
// ATTENDANCE - STEP 9
// SAVE ATTENDANCE
// ========================================

const saveAttendanceBtn =
    document.getElementById("saveAttendanceBtn");


if (saveAttendanceBtn && attendanceTableBody) {

    saveAttendanceBtn.addEventListener(
        "click",
        function () {

            const attendanceRows =
                attendanceTableBody.querySelectorAll("tr");

            const attendanceRecords = [];


            attendanceRows.forEach(function (row) {

                const rollNumber =
                    row.getAttribute("data-roll");

                const studentName =
                    row.cells[1]
                        ? row.cells[1].textContent.trim()
                        : "";

                const selectedButton =
                    row.querySelector(
                        ".attendance-option.selected"
                    );


                if (!selectedButton) {
                    return;
                }


                let status = "";


                if (
                    selectedButton.classList.contains(
                        "present"
                    )
                ) {
                    status = "Present";
                }

                else if (
                    selectedButton.classList.contains(
                        "absent"
                    )
                ) {
                    status = "Absent";
                }

                else if (
                    selectedButton.classList.contains(
                        "leave"
                    )
                ) {
                    status = "Leave";
                }


                attendanceRecords.push({
                    roll: rollNumber,
                    name: studentName,
                    status: status
                });

            });


            // Get selected attendance date
            const selectedDate =
                attendanceDate.textContent.trim();


            // Create complete attendance data
            const attendanceData = {

                date: selectedDate,

                records: attendanceRecords

            };


            // Save to localStorage
            localStorage.setItem(
                "attendanceData",
                JSON.stringify(attendanceData)
            );


            alert(
                "Attendance saved successfully!"
            );

        }
    );

}
// ========================================
// ATTENDANCE - STEP 9.1
// LOAD SAVED ATTENDANCE
// ========================================

if (attendanceTableBody) {

    const savedAttendance =
        localStorage.getItem("attendanceData");


    if (savedAttendance) {

        const attendanceData =
            JSON.parse(savedAttendance);


        const savedRecords =
            attendanceData.records || [];


        const attendanceRows =
            attendanceTableBody.querySelectorAll("tr");


        attendanceRows.forEach(function (row) {

            const rollNumber =
                row.getAttribute("data-roll");


            const savedStudent =
                savedRecords.find(function (record) {

                    return record.roll === rollNumber;

                });


            if (!savedStudent) {
                return;
            }


            const rowButtons =
                row.querySelectorAll(".attendance-option");


            rowButtons.forEach(function (button) {

                button.classList.remove("selected");

            });


            if (savedStudent.status === "Present") {

                const presentButton =
                    row.querySelector(
                        ".attendance-option.present"
                    );

                if (presentButton) {
                    presentButton.classList.add("selected");
                }

            }


            if (savedStudent.status === "Absent") {

                const absentButton =
                    row.querySelector(
                        ".attendance-option.absent"
                    );

                if (absentButton) {
                    absentButton.classList.add("selected");
                }

            }


            if (savedStudent.status === "Leave") {

                const leaveButton =
                    row.querySelector(
                        ".attendance-option.leave"
                    );

                if (leaveButton) {
                    leaveButton.classList.add("selected");
                }

            }

        });


        // Update summary after loading saved attendance
        if (typeof updateAttendanceSummary === "function") {
            updateAttendanceSummary();
        }

    }

}
// ========================================
// ATTENDANCE - STEP 10
// DYNAMIC ATTENDANCE HISTORY
// ========================================

const attendanceHistoryTableBody =
    document.getElementById(
        "attendanceHistoryTableBody"
    );


if (attendanceHistoryTableBody) {

    const savedAttendance =
        localStorage.getItem("attendanceData");

    if (savedAttendance) {
        const attendanceData =
            JSON.parse(savedAttendance);

        const records =
            attendanceData.records || [];

        // Count attendance status
        let presentCount = 0;
        let absentCount = 0;
        let leaveCount = 0;

        records.forEach(function (record) {

            if (record.status === "Present") {
                presentCount++;
            }
            if (record.status === "Absent") {
                absentCount++;
            }
            if (record.status === "Leave") {
                leaveCount++;
            }

        });

        // Get saved date
        const savedDate =
            attendanceData.date;

        // Convert date for display
        const historyDate =
            new Date(savedDate);

        const formattedDate =
            historyDate.toLocaleDateString(
                "en-GB",
                {
                    day: "2-digit",
                    month: "short",
                    year: "numeric"
                }
            );

        const dayName =
            historyDate.toLocaleDateString(
                "en-GB",
                {
                    weekday: "long"
                }
            );

        // Create history row
        attendanceHistoryTableBody.innerHTML = `
            <tr>
                <td>${formattedDate}</td>
                <td>${dayName}</td>
                <td>
                    <span class="history-present">
                        ${presentCount}
                    </span>
                </td>
                <td>
                    <span class="history-absent">
                        ${absentCount}
                    </span>
                </td>
                <td>
                    <span class="history-leave">
                        ${leaveCount}
                    </span>
                </td>
                <td>
                    <span class="history-status saved">
                        Saved
                    </span>
                </td>
            </tr>
        `;

    }

}

// ========================================
// STUDENTS PAGE
// ========================================

// Student Data
let students = [
    {
        roll: "001",
        name: "Abdullah",
        hifzLevel: "Hifz Level 2",
        attendance: 92,
        status: "Active",
        phone: "9876543210",
        joiningDate: "2026-06-10"
    },
    {
        roll: "002",
        name: "Muhammad",
        hifzLevel: "Hifz Level 1",
        attendance: 88,
        status: "Active",
        phone: "9876543211",
        joiningDate: "2026-06-12"
    },
    {
        roll: "003",
        name: "Ibrahim",
        hifzLevel: "Revision",
        attendance: 95,
        status: "Active",
        phone: "9876543212",
        joiningDate: "2026-06-15"
    },
    {
        roll: "004",
        name: "Yusuf",
        hifzLevel: "Hifz Level 3",
        attendance: 76,
        status: "Leave",
        phone: "9876543213",
        joiningDate: "2026-06-18"
    }
];


// ========================================
// STUDENTS LOCAL STORAGE
// ========================================

const studentsTableBody = document.getElementById("studentsTableBody");
const studentCount = document.getElementById("studentCount");

let currentStudentPage = 1;
const studentsPerPage = 5;

const studentsPreBtn = document.getElementById("studentsPreBtn");
const studentsPaginationNumbers = document.getElementById("studentsPaginationNumbers");
const studentNextBtn = document.getElementById("studentNextBtn");


// Load students from localStorage
function loadStudentsData() {

    const savedStudents = localStorage.getItem("studentsData");

    if (savedStudents) {
        students = JSON.parse(savedStudents);
    } else {
        localStorage.setItem("studentsData", JSON.stringify(students));
    }

}


// Save students to localStorage
function saveStudentsData() {

    localStorage.setItem("studentsData", JSON.stringify(students));

}

// ========================================
// STUDENTS PAGINATION
// ========================================

function getTotalStudentPages() {

    return Math.ceil(
        students.length / studentsPerPage
    );

}
// ========================================
// RENDER PAGINATION NUMBERS
// ========================================

function renderStudentPagination() {

    if (!studentsPaginationNumbers) {
        return;
    }

    const totalPages =
        getTotalStudentPages();

    studentsPaginationNumbers.innerHTML = "";

    for (let page = 1; page <= totalPages; page++) {

        const pageButton =
            document.createElement("button");

        pageButton.type = "button";

        pageButton.className =
            "pagination-number";

        pageButton.textContent =
            page;

        if (page === currentStudentPage) {
            pageButton.classList.add("active");
        }

        pageButton.addEventListener("click", function () {

            currentStudentPage = page;
            renderStudentPagination();
            renderStudentsTable();

        });

        studentsPaginationNumbers.appendChild(pageButton);
    }
}
// ========================================
// STUDENT PAGINATION - NEXT BUTTON
// ========================================

if (studentNextBtn) {

    studentNextBtn.addEventListener("click", function() {

        const totalPages =
            getTotalStudentPages();

        if (currentStudentPage < totalPages) {

            currentStudentPage++;

            renderStudentPagination();

            renderStudentsTable();
        }

    });

}
// ========================================
// STUDENT PAGINATION - PREVIOUS BUTTON
// ========================================

if (studentsPreBtn) {

    studentsPreBtn.addEventListener("click", function() {

        if (currentStudentPage > 1) {

            currentStudentPage--;

            renderStudentPagination();

            renderStudentsTable();
        }

    });

}
// ========================================
// RENDER STUDENTS TABLE
// ========================================

function renderStudentsTable() {

    if (!studentsTableBody) {
        return;
    }

    // Sort students by roll number
    students.sort(function (a, b) {
        return Number(a.roll) - Number(b.roll);
    });

    const startIndex =
        (currentStudentPage - 1) * studentsPerPage;

    const endIndex =
        startIndex + studentsPerPage;

    const paginatedStudents =
        students.slice(startIndex, endIndex);

    studentsTableBody.innerHTML = "";
    paginatedStudents.forEach(function (student) {
        const row = document.createElement("tr");

        row.innerHTML = `
            <td>
                <div class="table-student">
                    <div class="table-avatar">
                        ${student.name.charAt(0)}
                    </div>

                    <div>
                        <strong>${student.name}</strong>
                        <small>Roll No: ${student.roll}</small>
                    </div>
                </div>
            </td>

            <td>${student.roll}</td>

            <td>
                <span class="level-badge">
                    ${student.hifzLevel}
                </span>
            </td>

            <td>${student.attendance}%</td>

            <td>
                <span class="status-badge ${student.status.toLowerCase()}">
                    ${student.status}
                </span>
            </td>

            <td>
                <div class="table-actions">

                    <button
                        type="button"
                        class="table-action view-student-btn"
                        data-roll="${student.roll}"
                        title="View Student">
                        <i class="bi bi-eye"></i>
                    </button>

                    <button
                        type="button"
                        class="table-action edit-student-btn"
                        data-roll="${student.roll}"
                        title="Edit Student">
                        <i class="bi bi-pencil"></i>
                    </button>

                    <button
                        type="button"
                        class="table-action delete-student-btn"
                        data-roll="${student.roll}"
                        title="Delete Student">
                        <i class="bi bi-trash"></i>
                    </button>

                </div>
            </td>
        `;
        studentsTableBody.appendChild(row);
    });

    // Update student count
    if (studentCount) {
        studentCount.textContent =
            `${students.length} Students`;

    }

}
// ========================================
// INITIALIZE STUDENTS PAGE
// ========================================
loadStudentsData();
renderStudentsTable();
renderStudentPagination();

// ========================================
// RENDER FILTERED STUDENTS
// ========================================

function renderFilteredStudents(filteredStudents) {

    if (!studentsTableBody) {
        return;
    }

    // Sort filtered students by roll number
    filteredStudents.sort(function (a, b) {
        return Number(a.roll) - Number(b.roll);
    });

    studentsTableBody.innerHTML = "";

    filteredStudents.forEach(function (student) {

        const row = document.createElement("tr");

        row.innerHTML = `
            <td>
                <div class="table-student">

                    <div class="table-avatar">
                        ${student.name.charAt(0)}
                    </div>

                    <div>
                        <strong>${student.name}</strong>
                        <small>Roll No: ${student.roll}</small>
                    </div>

                </div>
            </td>

            <td>${student.roll}</td>

            <td>
                <span class="level-badge">
                    ${student.hifzLevel}
                </span>
            </td>

            <td>${student.attendance}%</td>

            <td>
                <span class="status-badge ${student.status.toLowerCase()}">
                    ${student.status}
                </span>
            </td>

            <td>
                <div class="table-actions">

                    <button
                        type="button"
                        class="table-action view-student-btn"
                        data-roll="${student.roll}"
                        title="View Student">
                        <i class="bi bi-eye"></i>
                    </button>

                    <button
                        type="button"
                        class="table-action edit-student-btn"
                        data-roll="${student.roll}"
                        title="Edit Student">
                        <i class="bi bi-pencil"></i>
                    </button>

                    <button
                        type="button"
                        class="table-action delete-student-btn"
                        data-roll="${student.roll}"
                        title="Delete Student">
                        <i class="bi bi-trash"></i>
                    </button>

                </div>
            </td>
        `;

        studentsTableBody.appendChild(row);

    });


    // Update count
    if (studentCount) {

        studentCount.textContent =
            `${filteredStudents.length} Students`;

    }

}

// ========================================
// STUDENT FILTERS
// ========================================

const studentSearch = document.getElementById("studentSearch");
const hifzFilter = document.getElementById("hifzFilter");
const statusFilter = document.getElementById("statusFilter");
const resetFilterBtn = document.querySelector(".filter-reset");

// ========================================
// FILTER STUDENTS
// ========================================

function filterStudents() {

    const searchValue =
        studentSearch ? studentSearch.value.toLowerCase().trim() : "";

    const selectedHifz =
        hifzFilter ? hifzFilter.value : "";

    const selectedStatus =
        statusFilter ? statusFilter.value : "";

    const filteredStudents = students.filter(function (student) {

        const matchesSearch =
            student.name.toLowerCase().includes(searchValue) ||
            student.roll.toLowerCase().includes(searchValue);

        const matchesHifz =
            selectedHifz === "" ||
            student.hifzLevel === selectedHifz;

        const matchesStatus =
            selectedStatus === "" ||
            student.status === selectedStatus;

        return matchesSearch && matchesHifz && matchesStatus;

    });


    renderFilteredStudents(filteredStudents);

}
// ========================================
// FILTER EVENTS
// ========================================

if (studentSearch) {

    studentSearch.addEventListener("input", function () {

        filterStudents();

    });

}


if (hifzFilter) {

    hifzFilter.addEventListener("change", function () {

        filterStudents();

    });

}
// Status filter

if (statusFilter) {

    statusFilter.addEventListener("change", function () {

        filterStudents();

    });

}
if (resetFilterBtn) {

    resetFilterBtn.addEventListener("click", function () {

        studentSearch.value = "";
        hifzFilter.value = "";
        statusFilter.value = "";

        filterStudents();

    });

}
// ========================================
// VIEW STUDENT
// ========================================

const viewStudentModal =
    document.getElementById("viewStudentModal");


document.addEventListener("click", function (event) {

    const viewButton =
        event.target.closest(".view-student-btn");

    if (!viewButton) {
        return;
    }

    const rollNumber =
        viewButton.getAttribute("data-roll");

    const student =
        students.find(function (student) {
            return student.roll === rollNumber;
        });

    if (!student) {
        return;
    }

    // Fill student profile details

    document.getElementById("viewStudentAvatar").textContent =
        student.name.charAt(0);

    document.getElementById("viewStudentName").textContent =
        student.name;

    document.getElementById("viewStudentRoll").textContent =
        student.roll;

    document.getElementById("viewStudentStatus").textContent =
        student.status;


    // Basic Information

    document.getElementById("viewInfoName").textContent =
        student.name;

    document.getElementById("viewInfoRoll").textContent =
        student.roll;

    document.getElementById("viewInfoHifz").textContent =
        student.hifzLevel;

    document.getElementById("viewInfoPhone").textContent =
        student.phone;

    document.getElementById("viewInfoJoiningDate").textContent =
        student.joiningDate;

    document.getElementById("viewInfoStatus").textContent =
        student.status;


    // Attendance

    document.getElementById("viewAttendancePresent").textContent =
        student.attendance + "%";


    // Open View Student Modal

    if (viewStudentModal) {

        const modal =
            new bootstrap.Modal(viewStudentModal);

        modal.show();

    }
});
// ========================================
// EDIT STUDENT - OPEN MODAL
// ========================================

const editStudentModal =
    document.getElementById("editStudentModal");

const editRollNumberInput =
    document.getElementById("editRollNumber");

const editStudentNameInput =
    document.getElementById("editStudentName");

const editStudentHifzLevelInput =
    document.getElementById("editStudentHifzLevel");

const editStudentPhoneInput =
    document.getElementById("editStudentPhone");

const editJoiningDateInput =
    document.getElementById("editJoiningDate");

const editStudentStatusInput =
    document.getElementById("editStudentStatus");


document.addEventListener("click", function (event) {

    const editButton =
        event.target.closest(".edit-student-btn");

    if (!editButton) {
        return;
    }

    const rollNumber =
        editButton.getAttribute("data-roll");

    const student =
        students.find(function (student) {
            return student.roll === rollNumber;
        });

    if (!student) {
        return;
    }

    // Fill existing student details

    editRollNumberInput.value =
        student.roll;

    editStudentNameInput.value =
        student.name;

    editStudentHifzLevelInput.value =
        student.hifzLevel;

    editStudentPhoneInput.value =
        student.phone;

    editJoiningDateInput.value =
        student.joiningDate;

    editStudentStatusInput.value =
        student.status;


    // Open Edit Student Modal

    if (editStudentModal) {

        const modal =
            new bootstrap.Modal(editStudentModal);

        modal.show();

    }

});
// ========================================
// EDIT STUDENT - SAVE CHANGES
// ========================================

const editStudentForm =
    document.getElementById("editStudentForm");

const saveEditStudentBtn =
    document.getElementById("saveEditStudentBtn");


if (saveEditStudentBtn) {

    saveEditStudentBtn.addEventListener("click", function () {

        const oldRollNumber =
            editRollNumberInput.value.trim();

        const studentName =
            editStudentNameInput.value.trim();

        const hifzLevel =
            editStudentHifzLevelInput.value;

        const phone =
            editStudentPhoneInput.value.trim();

        const joiningDate =
            editJoiningDateInput.value;

        const status =
            editStudentStatusInput.value;


        // Find student

        const student =
            students.find(function (student) {
                return student.roll === oldRollNumber;
            });


        if (!student) {
            alert("Student not found.");
            return;
        }


        // Update student details

        student.name =
            studentName;

        student.hifzLevel =
            hifzLevel;

        student.phone =
            phone;

        student.joiningDate =
            joiningDate;

        student.status =
            status;


        // Save updated data

        saveStudentsData();


        // Refresh table

        renderStudentsTable();


        // Close modal

        if (editStudentModal) {

            const modal =
                bootstrap.Modal.getInstance(editStudentModal);

            if (modal) {
                modal.hide();
            }

        }


        alert("Student details updated successfully!");

    });

}
// ========================================
// DELETE STUDENT
// ========================================
let studentToDeleteRoll = null;
// ========================================
// DELETE STUDENT - OPEN MODAL
// ========================================

const deleteStudentModal =
    document.getElementById("deleteStudentModal");

const deleteStudentName =
    document.getElementById("deleteStudentName");


document.addEventListener("click", function (event) {

    const deleteButton =
        event.target.closest(".delete-student-btn");


    if (!deleteButton) {
        return;
    }


    const rollNumber =
        deleteButton.getAttribute("data-roll");
    studentToDeleteRoll = rollNumber;


    const student =
        students.find(function (student) {
            return student.roll === rollNumber;
        });


    if (!student) {
        return;
    }


    // Show student name in delete confirmation

    deleteStudentName.textContent =
        student.name;


    // Open Delete Student Modal

    if (deleteStudentModal) {

        const modal =
            new bootstrap.Modal(deleteStudentModal);

        modal.show();

    }

});
// ========================================
// DELETE STUDENT - CONFIRM DELETE
// ========================================

const confirmDeleteStudentBtn =
    document.getElementById("confirmDeleteStudentBtn");


if (confirmDeleteStudentBtn) {

    confirmDeleteStudentBtn.addEventListener("click", function () {

        if (!studentToDeleteRoll) {
            return;
        }


        // Find student index

        const studentIndex =
            students.findIndex(function (student) {
                return student.roll === studentToDeleteRoll;
            });


        if (studentIndex === -1) {
            return;
        }


        // Remove student from array

        students.splice(studentIndex, 1);


        // Save updated students

        saveStudentsData();


        // Refresh table

        renderStudentsTable();


        // Close delete modal

        if (deleteStudentModal) {

            const modal =
                bootstrap.Modal.getInstance(deleteStudentModal);

            if (modal) {
                modal.hide();
            }

        }


        // Reset selected student

        studentToDeleteRoll = null;


        alert("Student deleted successfully!");

    });

}
// ========================================
// SEARCH EVENT
// ========================================
if (studentSearch) {

    studentSearch.addEventListener("input", function () {

        filterStudents();

    });

}
// ========================================
// HIFZ FILTER EVENT
// ========================================
if (hifzFilter) {

    hifzFilter.addEventListener("change", function () {

        filterStudents();

    });

}
// ========================================
// CHECK DUPLICATE ROLL NUMBER
// ========================================

function isRollNumberExists(rollNumber) {

    return students.some(function (student) {

        return student.roll === rollNumber;

    });

}

// ========================================
// ADD STUDENT FORM
// ========================================

const addStudentForm = document.getElementById("addStudentForm");
const rollNumberInput = document.getElementById("rollNumber");
const studentNameInput = document.getElementById("studentName");
const studentHifzLevelInput = document.getElementById("studentHifzLevel");
const studentPhoneInput = document.getElementById("studentPhone");
const joiningDateInput = document.getElementById("joiningDate");
const addStudentBtn = document.getElementById("addStudentBtn");

// ========================================
// ADD STUDENT SUBMIT
// ========================================

if (addStudentForm) {

    addStudentForm.addEventListener("submit", function (event) {

        event.preventDefault();

        const rollNumber = rollNumberInput.value.trim();
        const studentName = studentNameInput.value.trim();
        const hifzLevel = studentHifzLevelInput.value;
        const phone = studentPhoneInput.value.trim();
        const joiningDate = joiningDateInput.value;


        // Check 3-digit roll number
        if (!/^\d{3,}$/.test(rollNumber)) {

            alert("Roll number must contain at least 3 digits.");

            rollNumberInput.focus();

            return;
        }


        // Check duplicate roll number
        if (isRollNumberExists(rollNumber)) {

            alert(
                `Roll number ${rollNumber} has already been assigned.`
            );

            rollNumberInput.focus();

            return;
        }


        // Create new student
        const newStudent = {

            roll: rollNumber,
            name: studentName,
            hifzLevel: hifzLevel,
            attendance: 0,
            status: "Active",
            phone: phone,
            joiningDate: joiningDate

        };


        // Add student to array
        students.push(newStudent);


        // Save to localStorage
        saveStudentsData();


        // Render updated table
        renderStudentsTable();


        // Reset form
        addStudentForm.reset();


        // Close modal
        const addStudentModal =
            document.getElementById("addStudentModal");

        const modal =
            bootstrap.Modal.getInstance(addStudentModal);

        if (modal) {
            modal.hide();
        }


        alert("Student added successfully!");

    });

}