<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags to set character encoding and make the page responsive on mobile devices -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Daftar Mata Kuliah</title>
    
    <!-- Link to the Bootstrap 4.5.2 CSS for styling the page and making it responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Page title indicating the purpose of the page -->
        <h2>Daftar Mata Kuliah</h2>

        <!-- Table to display the list of courses -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- Table headers describing the course attributes -->
                    <th>Nama Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Durasi (Menit)</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Aksi</th> <!-- Column for action buttons (e.g., delete) -->
                </tr>
            </thead>
            <tbody>
                <!-- Loop through each course in the $courses array and display its details -->
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <!-- Display the course details in each row -->
                        <td><?= $course['course_name']; ?></td>
                        <td><?= $course['credits']; ?></td>
                        <td><?= $course['semester']; ?></td>
                        <td><?= $course['day']; ?></td>
                        <td><?= $course['start_time']; ?></td>
                        <td><?= $course['duration']; ?></td>
                        <td>
                            <!-- Form to delete a course -->
                            <form method="POST" action="/mahasiswa/courses/<?= $course['id']; ?>">
                                <!-- Hidden field to indicate the DELETE method for the form -->
                                <input type="hidden" name="_method" value="DELETE">
                                <!-- Button to submit the form and delete the course -->
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Section to add a new course -->
        <h3>Tambah Mata Kuliah</h3>
        <!-- Form to input new course details -->
        <form method="POST" action="/mahasiswa/courses">
            <!-- Input field for the course name -->
            <div class="form-group">
                <label for="course_name">Nama Mata Kuliah</label>
                <input type="text" name="course_name" id="course_name" class="form-control" required>
            </div>
            <!-- Input field for the number of credits (SKS) -->
            <div class="form-group">
                <label for="credits">SKS</label>
                <input type="number" name="credits" id="credits" class="form-control" required>
            </div>
            <!-- Input field for the semester number -->
            <div class="form-group">
                <label for="credits">Semester</label>
                <input type="number" name="semester" id="semester" class="form-control" required>
            </div>
            <!-- Dropdown menu to select the day of the week for the course -->
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
            <!-- Input field for the start time of the course -->
            <div class="form-group">
                <label for="start_time">Jam Mulai</label>
                <input type="time" name="start_time" id="start_time" class="form-control" required>
            </div>
            <!-- Submit button to add the new course -->
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>