<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Pembayaran</title>
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
            <h1>Laporan Data Pembayaran</h1>
            <div class="kiri" style="text-align:left;">
                <div>Banjarmasin {{ date('d-m-Y') }}</div>
            </div>
            <div class="kanan" style="text-align:right;">
                <div>Data Pembayaran</div>
                <div>Periode
                    
                </div>
            </div>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Member</th>
                        <th>Nama</th>                        
                        <th>Tanggal Bayar</th>
                        <th>Status</th>
                        <th>Jumlah</th>
                    </tr>
                    @foreach ($query as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user->kode_anggota }}</td>
                        <td>{{ $item->user->name }}</td>
                       
                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tgl_bayar)->format('d-m-Y') }}</td>
                        <td>{{ $item->status_pembayaran }}</td>
                        <td>{{ $item->total_bayar }}</td>
                        
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