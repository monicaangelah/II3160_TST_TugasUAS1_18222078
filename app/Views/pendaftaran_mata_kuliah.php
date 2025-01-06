<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character encoding for the document to UTF-8 and make the page responsive on different devices -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mata Kuliah</title>

    <!-- Link to the Bootstrap 5 CSS to style the page -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Page Title -->
        <h1>Pendaftaran Mata Kuliah</h1>

        <!-- Display flash messages if there are any success or error messages from the server -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php elseif (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <!-- Table to display the list of available courses -->
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <!-- Table headers to describe the course attributes -->
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Aksi</th> <!-- Action buttons (select and cancel) -->
                </tr>
            </thead>
            <tbody>
                <!-- Loop through the $courses array and display the details of each course -->
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <!-- Display the details of each course -->
                        <td><?= esc($course['id']) ?></td>
                        <td><?= esc($course['course_name']) ?></td>
                        <td><?= esc($course['day']) ?></td>
                        <td><?= esc($course['start_time']) ?></td>
                        <td><?= esc($course['credits']) ?></td>
                        <td><?= esc($course['semester']) ?></td>
                        <td>
                            <!-- Form to select a course -->
                            <form method="POST" action="/mahasiswa/mata-kuliah/pilih" style="display:inline;">
                                <!-- Hidden input to send the course ID and semester -->
                                <input type="hidden" name="course_id" value="<?= esc($course['id']) ?>">
                                <input type="hidden" name="semester" value="<?= esc($course['semester']) ?>">
                                <!-- Submit button to select the course -->
                                <button type="submit" class="btn btn-success btn-sm">Pilih</button>
                            </form>

                            <!-- Form to cancel a course selection -->
                            <form method="POST" action="/mahasiswa/mata-kuliah/batal" style="display:inline;">
                                <!-- Hidden input to send the course ID for cancellation -->
                                <input type="hidden" name="course_id" value="<?= esc($course['id']) ?>">
                                <!-- Submit button to cancel the course selection -->
                                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>