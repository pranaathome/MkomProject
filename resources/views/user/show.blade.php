@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Detail Mahasiswa</h2>

        <table class="table table-striped">
            <tr>
                <th>Nama</th>
                <td>{{ !empty(Auth::user()->nama_mhs) ? Auth::user()->nama_mhs : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ !empty(Auth::user()->nim) ? Auth::user()->nim : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{ !empty(Auth::user()->prodi) ? Auth::user()->prodi : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ !empty(Auth::user()->no_telp) ? Auth::user()->no_telp : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Judul</th>
                <td>{{ !empty(Auth::user()->judul) ? Auth::user()->judul : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Dosen Pembimbing</th>
                <td>{{ !empty(Auth::user()->ketua->nama_ketua) ? Auth::user()->ketua->nama_ketua : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Hari Kolokium</th>
                <td>{{ !empty(Auth::user()->hari_kolo) ? Auth::user()->hari_kolo : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Hari Sidang</th>
                <td>{{ !empty(Auth::user()->hari_sidang) ? Auth::user()->hari_sidang : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Tanggal Kolokium</th>
                <td>
                    @if ((Auth::user()->tanggal_kolo != '0000-00-00'))
                        {{ date('d-m-Y', strtotime(Auth::user()->tanggal_kolo)) }}
                    @else
                        {{ 'Data Belum Diisi' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Waktu Mulai Kolokium</th>
                <td>{{ !empty(Auth::user()->waktu_mulai_kolo) ? date('H:i', strtotime(Auth::user()->waktu_mulai_kolo)) : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Waktu Selesai Kolokium</th>
                <td>{{ !empty(Auth::user()->waktu_selesai_kolo) ? date('H:i', strtotime(Auth::user()->waktu_selesai_kolo)) : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Tanggal Sidang</th>
                <td>
                    @if ((Auth::user()->tanggal_sidang != '0000-00-00'))
                        {{ date('d-m-Y', strtotime(Auth::user()->tanggal_sidang)) }}
                    @else
                        {{ 'Data Belum Diisi' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Waktu Mulai Sidang</th>
                <td>{{ !empty(Auth::user()->waktu_mulai_sidang) ? date('H:i', strtotime(Auth::user()->waktu_mulai_sidang)) : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Waktu Selesai Sidang</th>
                <td>{{ !empty(Auth::user()->waktu_selesai_sidang) ? date('H:i', strtotime(Auth::user()->waktu_selesai_sidang)) : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Tanggal Terbit Surat Permohonan Data</th>
                <td>
                    @if ((Auth::user()->terbit_penelitian != '0000-00-00'))
                        {{ date('d-m-Y', strtotime(Auth::user()->terbit_penelitian)) }}
                    @else
                        {{ 'Data Belum Diisi' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Tanggal Terbit Surat Undangan Kolokium</th>
                <td>
                    @if ((Auth::user()->terbit_kolo != '0000-00-00'))
                        {{ date('d-m-Y', strtotime(Auth::user()->terbit_kolo)) }}
                    @else
                        {{ 'Data Belum Diisi' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Penerima Surat Permohonan Data</th>
                <td>{{ !empty(Auth::user()->penerima) ? Auth::user()->penerima : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Maksud Surat Permohonan Data</th>
                <td>{{ !empty(Auth::user()->tujuan) ? Auth::user()->tujuan : 'Data belum diisi' }}</td>
            </tr>
            <tr>
                <th>Tempat (admin)</th>
                <td>{{ !empty(Auth::user()->tempat) ? Auth::user()->tempat : 'Data belum diisi' }}</td>
            </tr>
        </table>
    </div>
@endsection
