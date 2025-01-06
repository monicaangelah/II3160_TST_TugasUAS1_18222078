<link rel="stylesheet" href="/css/style.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>

    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Container for the dashboard page -->
    <div class="container mt-5">
        <!-- Main Heading -->
        <h1 class="text-center">Dashboard Mahasiswa</h1>

        <!-- Card with student data -->
        <div class="card mt-4">
            <div class="card-body">
                <h3>Selamat Datang, <?= esc($nama) ?>!</h3>
                <p>NIM: <?= esc($nim) ?></p>
                <p>Semester: <?= esc($semester) ?></p>
            </div>
        </div>

        <!-- Menu section -->
        <div class="mt-4">
            <h3>Menu</h3>
            <div class="list-group">
                <!-- Navigation links for the student dashboard -->
                <!-- <a href="/mahasiswa/profil/<?= $nim ?>" class="list-group-item list-group-item-action">Data Pribadi</a> -->
                <a href="/mahasiswa/courses" class="list-group-item list-group-item-action">Input Daftar Mata Kuliah</a>
                <a href="/mahasiswa/mata-kuliah" class="list-group-item list-group-item-action">Pendaftaran Mata Kuliah</a>
                <a href="/mahasiswa/ip-generator" class="list-group-item list-group-item-action">IP Generator</a>
                <!-- <a href="/mahasiswa/jadwal-kuliah/<?= $nim ?>" class="list-group-item list-group-item-action">Jadwal Kuliah</a> -->
            </div>
        </div>
    </div>

    <!-- Logout button -->
    <div class="logout-container mt-4">
        <a href="<?= base_url('logout'); ?>" class="btn btn-danger logout-btn">Logout</a>
    </div>

    <!-- Add Bootstrap JS (needed for certain components like dropdowns and modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>