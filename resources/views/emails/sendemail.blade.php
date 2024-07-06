<!DOCTYPE html>
<html>
<head>
    <title>Certificate Expiring Soon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        .certificate-list {
            margin-top: 20px;
        }
        .certificate-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .certificate-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Sertifikat yang Akan Berakhir</h1>
        <p>Dear User,</p>
        <p>Berikut adalah daftar sertifikat yang akan berakhir dalam waktu dekat:</p>

        <div class="certificate-list">
            @foreach ($allExpiredCertif as $certificate)
                <div class="certificate-item">
                    <h3>{{ $certificate->title }}</h3>
                    <p>Tanggal Kadaluarsa: <strong>{{ \Carbon\Carbon::parse($certificate->end_date)->format('d M Y') }}</strong></p>
                    <p>Sisa Hari: <strong>{{$certificate->days_until_expiry * -1}}</strong> hari</p>
                </div>
            @endforeach
        </div>

        <p>Mohon segera melakukan tindakan yang diperlukan untuk memperbarui atau mengganti sertifikat sebelum kedaluwarsa.</p>

        <p>Terima kasih,</p>
        <p>PT TEKNOLOGI</p>
    </div>
</body>
</html>
