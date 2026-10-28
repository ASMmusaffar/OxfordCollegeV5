# 🎓 Oxford College — Database System (OxfordCollegeV5)

**OxfordCollegeV5** is a full-featured **PHP + MySQL college management system** — the "OXFORD DATABASE SYSTEM". It provides role-based administration for students, staff, batches, and courses, along with academic workflows such as admissions, dropouts, transfers, and task tracking.

> Built with PHP sessions for authentication, a MySQL relational schema, and a weekly-updated admin dashboard. Code by **Musaffar Industries** · © 2023 AS Mohammed Musaffar · MIT License

---

## ✨ Features

- 👥 **Staff & Student Management** — Add, edit, view, and delete detailed student and staff records, including profile photos (upload support).
- 🏫 **Batches & Courses** — Manage course definitions and student batches; enroll students into batches and courses.
- 📉 **Dropout & Transfer Workflows** — Dedicated screens for managing student dropouts and inter-batch/cohort transfers.
- 📝 **Task Tracking** — `tasks.php` module for follow-ups and administrative tasks.
- 🔍 **Search** — Search students/staff across records.
- 🧾 **Authentication & Sessions** — PHP session-based login with a dedicated login engine (`server/login-engin.php`, `server/engine.php`) and in-page message system.
- 🖼️ **File Uploads & Logs** — Student photo uploads under `upload/`, plus an activity log folder.
- 📱 **Progressive Web App Touches** — ships `manifest.json`, `service-worker.js`, and an install-ready UI.

## 🗂️ Key Screens (`server/`)

| Area | Pages |
|------|-------|
| Dashboard | `index.php` (51 KB main admin dashboard), `dashboard` widgets |
| Students | `add-student.php`, `edit-student.php`, `edit-student-target.php`, `view-student.php`, `dropout-student.php`, `transfer-student.php`, `dropouts.php` |
| Staff | `add-staff.php`, `edit-staff.php`, `view-staff.php`, `view-staff-dtls.php` |
| Academics | `new-batch.php`, `edit-batch.php`, `new-course.php`, `edit-course.php`, `view-course.php`, `ccr.php` |
| Auth & System | `login-engin.php`, `engine.php`, `auth.php`, `logout.php`, `ccr.php`, `search.php` |
| Content | `about-us.php`, `timeline.php`, `scholarships.php`, `partnership-program.php`, `privacy.php`, `user-agreement.php` |

## 🗄️ Database

The repository includes a ready-to-load schema dump:

```
server/mrindrs_dsys_oxf13_02.sql
```

Import it into MySQL/MariaDB (`oxford` DB), then set your credentials in `server/dbcon.php`.

## 🚀 Getting Started

### Prerequisites
- **XAMPP / WAMP / LAMP** — Apache + PHP + MySQL(
- **PHP 7.4+** recommended

### Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/ASMmusaffar/OxfordCollegeV5.git
   ```
2. Copy the project into your web root (e.g., `htdocs/OxfordCollegeV5`).
3. Import `server/mrindrs_dsys_oxf13_02.sql` into MySQL.
4. Configure `server/dbcon.php` with your DB host, name, user, and password.
5. Visit `http://localhost/OxfordCollegeV5/` in your browser.

> ⚠️ **Before production:** remove any test credentials (see `server/login.txt`), replace sample data, and harden all database access with prepared statements — raw string interpolation is used in parts of the codebase.

## 🛠️ Tech Stack

- **Backend:** PHP (session-based auth, file uploads, mail-ready extensions)
- **Database:** MySQL / MariaDB
- **Frontend:** HTML, CSS, JavaScript, Bootstrap-style templates (Vristo/auth theme)
- **PWA:** manifest + service worker

## 📄 License

Released under the **MIT License** — © 2023 AS Mohammed Musaffar.
