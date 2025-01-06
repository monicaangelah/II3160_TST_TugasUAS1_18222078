<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title for the course input page -->
    <title>Input Daftar Mata Kuliah</title>
    
    <!-- Including Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Main container for the course management form -->
    <div class="container mt-5">
        <!-- Heading for the page -->
        <h2>Daftar Mata Kuliah</h2>
        
        <!-- Table to display the list of courses -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Durasi (Menit)</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <td><?= $course['course_name']; ?></td>
                        <td><?= $course['day']; ?></td>
                        <td><?= $course['start_time']; ?></td>
                        <td><?= $course['duration']; ?></td>
                        <td><?= $course['credits']; ?></td>
                        <td><?= $course['semester']; ?></td>
                        <td>
                            <!-- Form for deleting the course -->
                            <form method="POST" action="/mahasiswa/courses/<?= $course['id']; ?>">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Section to add a new course -->
        <h3>Tambah Mata Kuliah</h3>
        <form method="POST" action="/mahasiswa/courses">
            <!-- Input for course name -->
            <div class="form-group">
                <label for="course_name">Nama Mata Kuliah</label>
                <input type="text" name="course_name" id="course_name" class="form-control" required>
            </div>
            
            <!-- Input for credits -->
            <div class="form-group">
                <label for="credits">SKS</label>
                <input type="number" name="credits" id="credits" class="form-control" required>
            </div>
            
            <!-- Input for semester -->
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" name="semester" id="semester" class="form-control" required>
            </div>
            
            <!-- Dropdown for days of the week -->
            <div class="form-group">
                <label for="day">Hari</label>
                <select name="day" id="day" class="form-control" required>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            
            <!-- Input for start time -->
            <div class="form-group">
                <label for="start_time">Jam Mulai</label>
                <input type="time" name="start_time" id="start_time" class="form-control" required>
            </div>
            
            <!-- Submit button for adding a new course -->
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>