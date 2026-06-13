<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Rekomendasi Opsi PA - TI</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; color: #333; }
        .box { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 850px; margin: auto; }
        h1, h2, h3 { color: #2c3e50; }
        select, button { padding: 10px; font-size: 16px; border-radius: 4px; }
        select { width: 65%; border: 1px solid #ccc; }
        button { background-color: #2ecc71; color: white; border: none; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #27ae60; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #34495e; color: white; }
        .alert { background: #e8f8f5; border-left: 5px solid #2ecc71; padding: 15px; margin-top: 20px; }
        .tree { font-family: monospace; background: #2c3e50; color: #58d68d; padding: 15px; border-radius: 5px; white-space: pre-wrap; }
    </style>
</head>
<body>

<div class="box">
    <h1>Sistem Rekomendasi Peminatan Proyek Akhir (PA)</h1>
    <p><em>Implementasi Matematika Diskrit Berbasis Framework Laravel & Database MySQL</em></p>
    <hr>

    <form action="{{ url('/') }}" method="GET">
        <label for="mahasiswa_id"><strong>Pilih Mahasiswa dari Database:</strong></label><br><br>
        <select name="mahasiswa_id" id="mahasiswa_id">
            <option value="">-- Cari Nama/NIM Mahasiswa --</option>
            @foreach($daftarMahasiswa as $mhs)
                <option value="{{ $mhs->id }}" {{ request('mahasiswa_id') == $mhs->id ? 'selected' : '' }}>
                    NIM {{ $mhs->nim }} - {{ $mhs->nama }}
                </option>
            @endforeach
        </select>
        <button type="submit">Hitung Analisis</button>
    </form>

    @if($mahasiswaTerpilih && $analisis)
        <h2>Hasil Rekomendasi: {{ $mahasiswaTerpilih->nama }}</h2>

        <h3>1. Matriks Hasil Relasi Nilai Akhir</h3>
        <table>
            <thead>
                <tr>
                    <th>Opsi Rumpun Proyek Akhir (PA)</th>
                    <th>Skor Bobot Nilai (Rerata Kurikulum Riil)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Software Engineering (RPL)</td><td><b>{{ $analisis['skor']['Software'] }}</b></td></tr>
                <tr><td>Infrastruktur Jaringan (Network)</td><td><b>{{ $analisis['skor']['Jaringan'] }}</b></td></tr>
                <tr><td>Multimedia & Game Development</td><td><b>{{ $analisis['skor']['Multimedia'] }}</b></td></tr>
            </tbody>
        </table>

        <div class="alert">
            <h3>🎯 Rekomendasi Utama: Rumpun {{ $analisis['rekomendasi'] }}</h3>
            <p><strong>Alasan Pengambilan Keputusan:</strong> {{ $analisis['alasan'] }} (Nilai Akhir Kesiapan: {{ $analisis['skor_final'] }})</p>
        </div>

        <h3>2. Alur Penelusuran Graf Pohon Keputusan (Decision Tree)</h3>
        <div class="tree">Root Node: Input Transkrip Riil Sem 1-4 (NIM: {{ $mahasiswaTerpilih->nim }})
 └── [Komparasi Kriteria Relasi Rumpun]
      ├── Bobot Software   : {{ $analisis['skor']['Software'] }}
      ├── Bobot Jaringan   : {{ $analisis['skor']['Jaringan'] }}
      └── Bobot Multimedia : {{ $analisis['skor']['Multimedia'] }}
           └── Leaf Node (Kesimpulan): 🌿 <b>Rekomendasi Ke Opsi {{ $analisis['rekomendasi'] }}</b></div>

        <h3>3. Penerapan Kombinatorika Kelompok Belajar</h3>
        <p>Berdasarkan rumus kombinasi $C(4, 2) = 6$, berikut adalah kemungkinan pasangan variasi susunan kelompok bimbingan/peer-review proposal bersama rekan mahasiswa lainnya:</p>
        <ul>
            @foreach($analisis['kombinasi'] as $index => $kelompok)
                <li>Kelompok Alternatif {{ $index + 1 }}: <strong>[{{ $mahasiswaTerpilih->nama }}, {{ implode(', ', $kelompok) }}]</strong></li>
            @endforeach
        </ul>
    @endif
</div>

</body>
</html>
