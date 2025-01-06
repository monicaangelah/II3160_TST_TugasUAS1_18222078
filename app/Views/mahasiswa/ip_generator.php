<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Generator</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>IP Generator</h2>

        <!-- Form to generate IP (Indeks Prestasi) -->
        <form method="POST" action="/mahasiswa/ip-generator/generate">
            <!-- Table displaying courses and grading options -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Perkiraan Indeks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course): ?>
                        <tr>
                            <td><?= esc($course['course_name']) ?></td>
                            <td><?= esc($course['credits']) ?></td>
                            <td>
                                <!-- Select dropdown for entering grades -->
                                <select name="grades[<?= $course['id'] ?>]" class="form-select" required>
                                    <option value="" disabled selected>Masukkan Indeks</option>
                                    <option value="4">A</option>
                                    <option value="3.5">AB</option>
                                    <option value="3">B</option>
                                    <option value="2.5">BC</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D</option>
                                    <option value="1">E</option>
                                </select>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Submit button to calculate IP -->
            <button type="submit" class="btn btn-primary">Hitung IP</button>
        </form>
    </div>
</body>
</html>