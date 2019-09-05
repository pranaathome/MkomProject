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
	<title>Formulir Kolokium</title>
</head>

<body>
	<table  cellpadding="0" style="width: 590px;">
		<tbody>
            <tr>
                <td style="width: 90px">Hal</td>
                <td style="width: 10px">:</td>
                <td style="width: 370px">Pengajuan Kolokium S2</td>
                <td></td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>Makalah kolokium 2 berkas</td>
            </tr>
            <tr>
                <td>Kepada Yth</td>
                <td>:</td>
                <td>Ketua Program Studi KOM</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Institut Pertanian Bogor</td>
                <td></td>
            </tr>
		</tbody>
	</table>
	<br>
    <p style="text-align: justify;">
        Dengan hormat,<br>
		Dengan ini diberitahukan bahwa Komisi Pembimbing Mahasiswa Program Pascasarjana S2 :
	</p>
	<table cellpadding="0" style="width: 590px;">
		<tbody>
			<tr>
				<td style="width: 110px">Nama</td>
				<td style="width: 10px">:</td>
				<td style="width: 310px">{{ Auth::user()->nama_mhs }}</td>
			</tr>
			<tr>
				<td>NRP</td>
				<td>:</td>
				<td>{{ Auth::user()->nim }}</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>{{ Auth::user()->prodi }}</td>
			</tr>
			<tr>
				<td>No. Telp/HP</td>
				<td>:</td>
				<td>{{ Auth::user()->judul }}</td>
			</tr>
		</tbody>
	</table>

	<p style="text-align: justify;">
		Akan mengajukan kolokium pada :
    </p>

    <table cellpadding="0" style="width: 590px;">
        <tbody>
            <tr>
                <td style="width: 110px">Hari/Tanggal</td>
                <td style="width: 10px">:</td>
                <td style="width: 310px">{{ Auth::user()->hari_kolo }}, {{ $tanggal_kolo }}</td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td>{{ $waktu_mulai_kolo }} - {{ $waktu_selesai_kolo }}</td>
            </tr>
            <tr>
                <td>Bertempat di</td>
                <td>:</td>
                <td>{{ Auth::user()->tempat }}</td>
            </tr>
        </tbody>
    </table>

	<p style="text-align: justify;">
        Dengan susunan Komisi Pembimbing :
    </p>

    <table cellpadding="0" style="width: 590px;">
        <tbody>
            <tr>
                <td style="width: 110px">Ketua</td>
                <td style="width: 10px">:</td>
                <td style="width: 310px">{{ Auth::user()->ketua->nama_ketua }}</td>
                <td style="width: 310px">{{ Auth::user()->ketua->nip_ketua }}</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>:</td>
                <td>{{ Auth::user()->ketua->anggota->nama_anggota }}</td>
                <td>{{ Auth::user()->ketua->anggota->nip_anggota }}</td>
            </tr>
    </table>

    <p style="text-align: justify;">
        Atas perhatiannya diucapkan terima kasih.
    </p>
	<br>
	<table border="0" style="width: 590px;">
            <tbody>
                <tr>
                    <td style="width: 320px;">Mengetahui, </td>
                    <td >Bogor, {{ $tanggal_now }} </td>
                </tr>
                <tr>
                    <td>Ketua Komisi Pembimbing,</td>
                    <td>Mahasiswa,</td>
                    <tr>
                        <td style="height: 70px"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><u>{{ Auth::user()->ketua->nama_ketua }} </u></td>
                        <td><u>{{ Auth::user()->nama_mhs }}</u></td>
                    </tr>
                    <tr>
                        <td>NIP. {{ Auth::user()->ketua->nip_ketua }}</td>
                        <td>NRP. {{ Auth::user()->nim }}</td>
                    </tr>
                </tr>
            </tbody>
        </table>
        <p style="text-align: justify;">
            <i>
                Catatan: <br>
                Formulir yang sudah diisi harus diserahkan kembali ke sekretariat SATU minggu sebelum kolokium
            </i>
        </p>
</body>
</html>
