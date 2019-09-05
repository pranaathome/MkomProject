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
                <td style="width: 160px">{{ $terbit_kolo }}</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>1 (satu) Lembar</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:</td>
                <td>Undangan Kolokium Program Magister</td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 20px"></td>
            </tr>
            <tr>
                <td>Kepada Yth</td>
                <td>:</td>
                <td>Komisi Pembimbing Mahasiswa a.n {{ Auth::user()->nama_mhs }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>1. {{ Auth::user()->ketua->nama_ketua }}</td>
                <td>(Ketua)</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2. {{ Auth::user()->ketua->anggota->nama_anggota }}</td>
                <td>(Anggota)</td>
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
        Bersama ini kami mengundang bapak/ibu untuk hadir pada kolokium atas nama {{ Auth::user()->nama_mhs }},  NRP. {{ Auth::user()->nim }} dari Program Studi Ilmu Komputer yang akan dilaksanakan pada:
	</p>
	<table cellpadding="0" style="width: 590px;">
        <tbody>
            <tr>
                <td style="width: 40px"></td>
                <td style="width: 110px">Hari</td>
                <td style="width: 10px">:</td>
                <td style="width: 310px">{{ Auth::user()->hari_kolo }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $tanggal_kolo }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pukul</td>
                <td>:</td>
                <td>{{ $waktu_mulai_kolo }} - {{ $waktu_selesai_kolo }} WIB</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat</td>
                <td>:</td>
                <td>{{ Auth::user()->tempat }}</td>
            </tr>
        </tbody>
    </table>

	<p style="text-align: justify;">
        Demikian undangan ini kami sampaikan, atas perhatian dan kehadiran bapak/ibu tepat pada waktunya kami ucapkan terima kasih.
    </p>
	<br>
	<table border="0" style="width: 590px;">
        <tbody>
            <tr>
                <td style="width: 300px;text-align: right;"> </td>
                <td>Ketua Program Studi,</td>
            </tr>
            <tr>
                <td style="height: 70px"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><u>Dr. Imas S. Sitanggang, S.Si, M.Kom</u></td>
            </tr>
            <tr>
                <td></td>
                <td>NIP. 19750130 199802 2 001</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: justify;">
        Tembusan: <br>
        1. Mahasiswa ybs: {{ Auth::user()->nama_mhs }} <br>
        2. Arsip <br>
    </p>
</body>
</html>
