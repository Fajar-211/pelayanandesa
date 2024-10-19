<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .header, .footer {
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>
<body>
    <header class="header">
        <h2>Surat Pengantar</h2>
        <p style="margin-top: 10px; margin-bottom: 10px; text-align: right">{{ \Carbon\Carbon::parse($surat->createdAt)->translatedFormat('l, j F Y') }}</p>
    </header>

    <table>
        <thead>
            <tr>
                <td width="50">Perihal</td>
                <td width="10">:</td>
                <td>{{ $surat->keperluan }}</td>
            </tr>
        </thead>
    </table>

    <p>Kepada Yth.</p>
    <p>Bapak/Ibu Kepala RT/RW Desa</p>
    <p>Dengan Hormat,</p>
    <p>Yang bertanda tangan di bawah ini, Saya lampirkan surat pengantar ini untuk keperluan {{ $surat->keperluan }}. Saya berharap Bapak/Ibu dapat memberikan bantuan dan dukungan yang diperlukan. Atas perhatian dan kerjasamanya, saya ucapkan terima kasih.</p>

    <table>
        <thead>
            <tr>
                <td width="50">Nama</td>
                <td width="10">:</td>
                <td>{{ $surat->nama }}</td>
            </tr>
            <tr>
                <td width="50">NIK</td>
                <td width="10">:</td>
                <td>{{ $surat->nik }}</td>
            </tr>
            <tr>
                <td width="50">Nomer KK</td>
                <td width="10">:</td>
                <td>{{ $surat->nokk }}</td>
            </tr>
            <tr>
                <td width="50">Keperluan</td>
                <td width="10">:</td>
                <td>{{ $surat->keperluan }}</td>
            </tr>
        </thead>
    </table>

    <footer>
        <div class="signature">
            <p>Bapak/Ibu Kepala RT/RW Desa</p>
            <img style="width: 150px;" src="{{ public_path('images/signature.jpg') }}" alt="signature">
            <p>{{ \Carbon\Carbon::parse($surat->createdAt)->translatedFormat('l, j F Y') }}</p>
        </div>
    </footer>

</body>
</html>