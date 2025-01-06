const data = {
    labels: [1, 2, 3], // Semester
    datasets: [{
        label: 'Grafik Perkembangan IP',
        data: [3.75, 3.50, 3.80], // IP tiap semester
        borderColor: 'blue',
        backgroundColor: 'rgba(0, 0, 255, 0.2)',
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        maintainAspectRatio: false, // Mengizinkan grafik untuk disesuaikan ukurannya
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Grafik Perkembangan IP Mahasiswa'
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Semester'
                },
            },
            y: {
                title: {
                    display: true,
                    text: 'Indeks Prestasi'
                },
                suggestedMin: 0,
                suggestedMax: 4
            }
        }
    }
};

// Pastikan ID canvas yang sama
const ctx = document.getElementById('grafikIP').getContext('2d');
new Chart(ctx, config);

fetch(`/mahasiswa/grafik-ip/${studentId}`) // Ganti dengan dynamic student ID
    .then(response => response.json())
    .then(result => {
        if (result.status === 'success') {
            const data = result.data;

            const labels = data.map(item => `Semester ${item.semester}`);
            const ipValues = data.map(item => item.ip);

            const config = {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Grafik Perkembangan IP',
                        data: ipValues,
                        borderColor: 'blue',
                        backgroundColor: 'rgba(0, 0, 255, 0.2)',
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Grafik Perkembangan IP Mahasiswa'
                        }
                    }
                }
            };

            const ctx = document.getElementById('grafikIP').getContext('2d');
            new Chart(ctx, config);
        } else {
            console.error('Error:', result.message);
        }
    })
    .catch(error => console.error('Error:', error));

