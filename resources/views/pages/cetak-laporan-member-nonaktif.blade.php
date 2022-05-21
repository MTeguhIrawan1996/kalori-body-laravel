<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Member</title>
    <link rel="stylesheet" href="{{ url('style/laporan.css') }}" media="all" />
</head>

<body>
    <header class="clearfix">
        <div style="text-align: center; font-weight: bold;">
            <img src="" style="height: 110px" ; width="auto">
        </div>
        <br>
        <div id="kop" class="clearfix">
            <div>KALORI BODY FIT</div>
            <div>BANJARMASIN</div>
            <div>KALIMANTAN SELATAN</div>
            <div style="font-size: 10px;">Jalan Banjarmasin Email:bodyfit@gmail.com</div>
        </div>
        <header class="clearfix">
            <h1>Laporan Data Member Nonaktif</h1>
            <div class="kiri" style="text-align:left;">
                <div>Banjarmasin {{ date('d-m-Y') }}</div>
            </div>
            <div class="kanan" style="text-align:right;">
                <div>Data Member Nonaktif</div>
            </div>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Member</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($query as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kode_anggota }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->telp }}</td>
                        <td> @if ($item->tgl_selesai == NULL)
                                VERIFIKASI DATA
                             @elseif ($item->tgl_selesai != NULL)
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->tgl_selesai)->format('d-m-Y') }}
                             @endif </td>
                        <td>{{ $item->status }}</td>
                    </tr>
                        
                    @endforeach                  
                    
            </table>

            <br>
            <br>
            <br>
            <div style="text-align:Right; font-weight: bold;">
                <div>Mengetahui</div>
                <br>
                <br>
                <br>
                <br>
                <div></div>
            </div>

            <script type="text/javascript">
            window.print();
            
            </script>
</body>

</html>