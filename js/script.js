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
// ==========================================
// STUDENTS PAGE - DATA SOURCE
// ==========================================

const studentsTableBody =
    document.getElementById("studentsTableBody");

if (studentsTableBody) {

    let studentsData =
        JSON.parse(localStorage.getItem("studentsData"));

    if (!studentsData) {

        studentsData = [];

        localStorage.setItem(
            "studentsData",
            JSON.stringify(studentsData)
        );
    }
}


// ========================================
// 12. STUDENTS PAGE SEARCH + FILTER
// ========================================

const studentSearch = document.getElementById("studentSearch");
const hifzFilter = document.getElementById("hifzFilter");
const statusFilter = document.getElementById("statusFilter");
const studentCount = document.getElementById("studentCount");
let currentPage = 1;
const studentsPerPage = 10;

// ==========================================
// STUDENTS PAGE - RENDER STUDENTS
// WITH PAGINATION
// ==========================================

function renderStudentsTable() {

    if (!studentsTableBody) {
        return;
    }

    const studentsData =
        JSON.parse(
            localStorage.getItem("studentsData")
        ) || [];

    // Clear table
    studentsTableBody.innerHTML = "";

    // Calculate pagination
    const totalStudents =
        studentsData.length;

    const totalPages =
        Math.ceil(
            totalStudents / studentsPerPage
        );

    // Keep current page valid
    if (currentPage > totalPages && totalPages > 0) {
        currentPage = totalPages;
    }

    if (totalPages === 0) {
        currentPage = 1;
    }

    // Start and end index
    const startIndex =
        (currentPage - 1) *
        studentsPerPage;

    const endIndex =
        startIndex +
        studentsPerPage;

    // Students for current page
    const currentStudents =
        studentsData.slice(
            startIndex,
            endIndex
        );

    // Create table rows
    currentStudents.forEach(function (student) {

        const newRow =
            document.createElement("tr");

        const firstLetter =
            student.name
                .charAt(0)
                .toUpperCase();

        newRow.innerHTML = `
    < td > ${ student.roll }</td >

            <td>
                <div class="table-student">

                    <div class="table-avatar">
                        ${firstLetter}
                    </div>

                    <div>
                        <strong>${student.name}</strong>
                        <small>Hifz Student</small>
                    </div>

                </div>
            </td>

            <td>
                <span class="level-badge">
                    ${student.hifzLevel}
                </span>
            </td>

            <td>
                ${student.attendance}
            </td>

            <td>
                <span class="status-badge active">
                    ${student.status}
                </span>
            </td>

            <td>

                <button
                    type="button"
                    class="table-action">
                    <i class="bi bi-eye"></i>
                </button>

                <button
                    type="button"
                    class="table-action">
                    <i class="bi bi-pencil"></i>
                </button>

                <button
                    type="button"
                    class="table-action delete"
                    data-roll="${student.roll}">
                    <i class="bi bi-trash"></i>
                </button>

            </td>
`;

        studentsTableBody.appendChild(newRow);
    });

    // Update student count
    if (studentCount) {

        studentCount.textContent =
            totalStudents +
            (
                totalStudents === 1
                    ? " Student"
                    : " Students"
            );
    }
}



if (
    studentSearch &&
    studentsTableBody &&
    hifzFilter &&
    statusFilter
) {

    function filterStudents() {

        const searchValue =
            studentSearch.value.toLowerCase().trim();

        const selectedHifz =
            hifzFilter.value.toLowerCase();

        const selectedStatus =
            statusFilter.value.toLowerCase();

        const studentRows =
            studentsTableBody.querySelectorAll("tr");


        studentRows.forEach(function (row) {

            const rowText =
                row.textContent.toLowerCase();

            const matchesSearch =
                rowText.includes(searchValue);

            const matchesHifz =
                selectedHifz === "" ||
                rowText.includes(selectedHifz);

            const matchesStatus =
                selectedStatus === "" ||
                rowText.includes(selectedStatus);

            if (
                matchesSearch &&
                matchesHifz &&
                matchesStatus
            ) {

                row.style.display = "";

            } else {

                row.style.display = "none";

            }

        });
        if (studentCount) {

            const visibleStudents =
                Array.from(studentRows).filter(function (row) {

                    return row.style.display !== "none";

                }).length;

            studentCount.textContent =
                visibleStudents +
                (visibleStudents === 1 ? " Student" : " Students");

        }

    }


    studentSearch.addEventListener(
        "input",
        filterStudents
    );

    hifzFilter.addEventListener(
        "change",
        filterStudents
    );

    statusFilter.addEventListener(
        "change",
        filterStudents
    );

}

// ==========================================
// STUDENTS PAGE - PAGINATION CONTROLS
// ==========================================

const studentsPrevBtn =
    document.getElementById("studentsPrevBtn");

const studentsNextBtn =
    document.getElementById("studentsNextBtn");

const studentsPaginationNumbers =
    document.getElementById(
        "studentsPaginationNumbers"
    );


// Create pagination buttons
function updateStudentsPagination() {

    if (!studentsPaginationNumbers) {
        return;
    }

    const studentsData =
        JSON.parse(
            localStorage.getItem("studentsData")
        ) || [];

    const totalStudents =
        studentsData.length;

    const totalPages =
        Math.ceil(
            totalStudents / studentsPerPage
        );

    studentsPaginationNumbers.innerHTML = "";


    // No students
    if (totalPages === 0) {

        if (studentsPrevBtn) {
            studentsPrevBtn.disabled = true;
        }

        if (studentsNextBtn) {
            studentsNextBtn.disabled = true;
        }

        return;
    }


    // Create page numbers
    for (
        let page = 1;
        page <= totalPages;
        page++
    ) {

        const pageButton =
            document.createElement("button");

        pageButton.type = "button";

        pageButton.className =
            "pagination-number";

        pageButton.textContent = page;


        if (page === currentPage) {
            pageButton.classList.add("active");
        }


        pageButton.addEventListener(
            "click",
            function () {

                currentPage = page;

                renderStudentsTable();

                updateStudentsPagination();

            }
        );


        studentsPaginationNumbers.appendChild(
            pageButton
        );
    }


    // Previous button
    if (studentsPrevBtn) {

        studentsPrevBtn.disabled =
            currentPage === 1;

        studentsPrevBtn.onclick =
            function () {

                if (currentPage > 1) {

                    currentPage--;

                    renderStudentsTable();

                    updateStudentsPagination();
                }
            };
    }


    // Next button
    if (studentsNextBtn) {

        studentsNextBtn.disabled =
            currentPage === totalPages;

        studentsNextBtn.onclick =
            function () {

                if (
                    currentPage < totalPages
                ) {

                    currentPage++;

                    renderStudentsTable();

                    updateStudentsPagination();
                }
            };
    }
}


// Initial pagination
updateStudentsPagination();


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
// ==========================================
// STUDENTS PAGE - ADD STUDENT
// ==========================================

const addStudentForm = document.getElementById("addStudentForm");
const addStudentBtn = document.getElementById("addStudentBtn");

if (
    addStudentForm &&
    addStudentBtn &&
    studentsTableBody &&
    studentCount
) {

    addStudentBtn.addEventListener("click", function () {

        // Get form values
        const rollNumber = document.getElementById("rollNumber").value.trim();
        const studentName = document.getElementById("studentName").value.trim();
        const hifzLevel = document.getElementById("studentHifzLevel").value;
        const studentPhone = document.getElementById("studentPhone").value.trim();
        const joiningDate = document.getElementById("joiningDate").value;

        // Check required fields
        if (
            rollNumber === "" ||
            studentName === "" ||
            hifzLevel === "" ||
            studentPhone === "" ||
            joiningDate === ""
        ) {
            alert("Please fill all student details.");
            return;
        }

        // Check duplicate roll number
        const existingRows = studentsTableBody.querySelectorAll("tr");
        let rollExists = false;
        existingRows.forEach(function (row) {

            const existingRoll =
                row.cells[0]
                    ? row.cells[0].textContent.trim()
                    : "";

            if (existingRoll === rollNumber) {
                rollExists = true;
            }
        });

        if (rollExists) {
            alert("This roll number already exists.");
            return;
        }

        // Create new row
        const newRow = document.createElement("tr");
        newRow.setAttribute("data-roll", rollNumber);
        const firstLetter = studentName.charAt(0).toUpperCase();

        newRow.innerHTML = `
            <td>${rollNumber}</td>

            <td>
                <div class="table-student">
                    <div class="table-avatar">
                        ${firstLetter}
                    </div>

                    <div>
                        <strong>${studentName}</strong>
                        <small>Hifz Student</small>
                    </div>
                </div>
            </td>

            <td>
                <span class="level-badge">
                    ${hifzLevel}
                </span>
            </td>

            <td>0%</td>

            <td>
                <span class="status-badge active">
                    Active
                </span>
            </td>

            <td>
                <button
                    type="button"
                    class="table-action">
                    <i class="bi bi-eye"></i>
                </button>

                <button
                    type="button"
                    class="table-action">
                    <i class="bi bi-pencil"></i>
                </button>

                <button
                    type="button"
                    class="table-action delete"
                    data-roll="${rollNumber}">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        `;

        studentsTableBody.appendChild(newRow);

        // Update student count
        const totalStudents = studentsTableBody.querySelectorAll("tr").length;

        studentCount.textContent =
            totalStudents + " Students";

        // Save student information
        const newStudent = {
            roll: rollNumber,
            name: studentName,
            hifzLevel: hifzLevel,
            phone: studentPhone,
            joiningDate: joiningDate,
            attendance: "0%",
            status: "Active"
        };

        let savedStudents =
            JSON.parse(
                localStorage.getItem("studentsData")
            ) || [];

        savedStudents.push(newStudent);

        localStorage.setItem(
            "studentsData",
            JSON.stringify(savedStudents)
        );

        // Clear form
        addStudentForm.reset();

        // Close Bootstrap modal
        const modalElement =
            document.getElementById("addStudentModal");

        const modalInstance =
            bootstrap.Modal.getInstance(modalElement);

        if (modalInstance) {

            modalElement.addEventListener(
                "hidden.bs.modal",
                function () {
                    document.activeElement.blur();
                },
                { once: true }
            );

            modalInstance.hide();
        }
    });
}

// ==========================================
// STUDENTS PAGE - DELETE STUDENT
// ==========================================
let selectedStudentRoll = null;
let selectedStudentRow = null;

// Trash button click
if (studentsTableBody) {

    studentsTableBody.addEventListener("click", function (event) {

        const deleteButton = event.target.closest(".table-action.delete");

        if (!deleteButton) {
            return;
        }

        selectedStudentRoll = deleteButton.getAttribute("data-roll");
        console.log("Trash data-roll:",
            selectedStudentRoll
        )
        selectedStudentRow = deleteButton.closest("tr");



        if (!selectedStudentRoll || !selectedStudentRow) {
            return;
        }

        const studentName =
            selectedStudentRow.cells[1]
                .textContent
                .trim();

        // Put student name inside delete modal
        const deleteModal = document.getElementById("deleteStudentModal");
        const message = deleteModal.querySelector("p strong");

        if (message) {
            message.textContent = studentName;
        }

        const modal = bootstrap.Modal.getOrCreateInstance(
            deleteModal
        );

        modal.show();
    });
}

// ==========================================
// CONFIRM DELETE BUTTON
// ==========================================

const confirmDeleteStudentBtn =
    document.getElementById("confirmDeleteStudentBtn");

if (confirmDeleteStudentBtn) {

    console.log("Delete button found");

    confirmDeleteStudentBtn.addEventListener(
        "click",
        function () {

            console.log("delete clicked");

            console.log(
                "Selected Roll:",
                selectedStudentRoll
            );

            if (
                !selectedStudentRoll ||
                !selectedStudentRow
            ) {
                return;
            }

            let studentsData =
                JSON.parse(
                    localStorage.getItem("studentsData")
                ) || [];

            studentsData =
                studentsData.filter(function (student) {

                    return String(student.roll) !==
                        String(selectedStudentRoll);

                });

            localStorage.setItem(
                "studentsData",
                JSON.stringify(studentsData)
            );

            // Remove row from table
            selectedStudentRow.remove();

            // Update student count
            if (studentCount) {

                const remainingStudents =
                    studentsTableBody.querySelectorAll("tr").length;

                studentCount.textContent =
                    remainingStudents +
                    (
                        remainingStudents === 1
                            ? " Student"
                            : " Students"
                    );
            }

            // Close delete modal
            const deleteModalElement =
                document.getElementById(
                    "deleteStudentModal"
                );

            const deleteModal =
                bootstrap.Modal.getInstance(
                    deleteModalElement
                );

            if (deleteModal) {

                deleteModalElement.addEventListener(
                    "hidden.bs.modal",
                    function () {

                        if (document.activeElement) {
                            document.activeElement.blur();
                        }

                    },
                    { once: true }
                );

                deleteModal.hide();
            }

            // Reset selected student
            selectedStudentRoll = null;
            selectedStudentRow = null;

        }
    );
}

