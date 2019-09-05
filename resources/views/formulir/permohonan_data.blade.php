<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style type="text/css">
  @page {
    size: 8.27in 11.69in;

    margin-top: 1in;
    margin-left: 1in;
    margin-right: 1in;
    margin-bottom: 1in;
}
  h4 {
    font-family: times new roman;
    font-size: 12pt;
}
  th {
    font-family: times new roman;
    font-size: 12pt;
}
  td {
    font-family: times new roman;
    font-size: 12pt;
}
  p {
    font-family: times new roman;
    font-size: 12pt;

}
</style>
	<title>Surat Permohonan Data Penelitian</title>
</head>

<body>
	<table  cellpadding="0" style="width: 590px;">
		<tbody>
            <tr>
                <td style="width: 90px">Nomor</td>
                <td style="width: 10px">:</td>
                <td style="width: 370px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/IT3.F7.6/PP.05/2019</td>
                <td style="width: 160px">{{ $terbit_penelitian }}</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>--</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:</td>
                <td>Permohonan Data Penelitian</td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 20px"></td>
            </tr>
            <tr>
                <td>Kepada Yth</td>
                <td>:</td>
                <td>{{ Auth::user()->penerima }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>di Tempat</td>
                <td></td>
            </tr>
		</tbody>
	</table>
	<br>
    <p style="text-align: justify;">
        Dengan hormat,<br>
		Bersama ini kami informasikan bahwa mahasiswa berikut :
	</p>
	<table cellpadding="0" style="width: 590px;">
		<tbody>
			<tr>
                <td style="width: 40px"></td>
				<td style="width: 110px">Nama</td>
				<td style="width: 10px">:</td>
				<td style="width: 310px">{{ Auth::user()->nama_mhs }}</td>
			</tr>
			<tr>
                <td></td>
				<td>NIM</td>
				<td>:</td>
				<td>{{ Auth::user()->nim }}</td>
			</tr>
		</tbody>
	</table>

	<p style="text-align: justify;">
		adalah mahasiswa Program Pascasarjana Ilmu Komputer, Departemen Ilmu Komputer, Fakultas Matematika dan Ilmu Pengetahuan Alam, Institut Pertanian Bogor. Mahasiswa yang bersangkutan akan melaksanakan penelitian tugas akhir (Tesis) dengan topik:
    </p>
    <p style="text-align: center;">
        <strong>"{{ Auth::user()->judul }}"</strong>
    </p>
    <p style="text-align: justify;">
        Sebagai ketua Komisi Pembimbing adalah {{ Auth::user()->ketua->nama_ketua }} dan anggota {{ Auth::user()->ketua->anggota->nama_anggota }}, untuk keperluan penelitian tersebut mahasiswa yang bersangkutan bermaksud {{ Auth::user()->tujuan }} dalam rangka melaksanakan penelitian tugas akhir (Tesis).
        <br>
        Besar harapan kami kiranya Bapak/Ibu mengizinkan mahasiswa yang bersangkutan untuk melaksanakan kegiatan tersebut. Demikian permohonan ini kami sampaikan, atas perhatian dan kerja sama yang diberikan kami ucapkan terima kasih.
    </p>
	<br>
	<table border="0" style="width: 590px;">
        <tbody>
            <tr>
                <td style="width: 320px;">Mengetahui: </td>
            </tr>
            <tr>
                <td>Wakil Dekan Bidang Akademik dan Kemahasiswaan</td>
                <td>Ketua,</td>
                <tr>
                    <td style="height: 70px"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><u>Prof. Dr. Dra. Purwantiningsih, MS</u></td>
                    <td><u>Prof. Dr. Ir. Agus Buono, M.Si, M.Kom</u></td>
                </tr>
                <tr>
                    <td>NIP. 19631217 198803 2 002</td>
                    <td>NIP. 19660702 199302 1 001</td>
                </tr>
            </tr>
        </tbody>
    </table>

    <p style="text-align: justify;">
        Tembusan: <br>
        1. Mahasiswa ybs: {{ Auth::user()->nama_mhs }} <br>
        2. Ketua Komisi Pembimbing: {{ Auth::user()->ketua->nama_ketua }} <br>
        3. Anggota Komisi Pembimbing: {{ Auth::user()->ketua->anggota->nama_anggota }}
    </p>
</body>
</html>
