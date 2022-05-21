<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cetak Card Member</title>
    <link rel="stylesheet" href="{{ url('style/laporan.css') }}" media="all" />
</head>
<body>
<div id="wrapper" class="page-dashboard">
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
          <div class="dashboard-content text-center">
          <div class="card mt-4">
              <h5 class="card-header bg-success">BODY FIT GYM</h5>
                  <div class="card-body">
                    <h5 class="card-title">Kartu Member</h5>
                    <div class="row">
                    <div class="col-12">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nomor Anggota</div>
                              <div class="product-subtitle">
                                 {{ Auth::user()->status == 'NONAKTIF' || Auth::user()->status == NULL ? 'Belum diverifikasi' : Auth::user()->kode_anggota }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->name }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                              <div class="product-title">Tanggal Berkahir Membership</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->tgl_selesai == 0 || Auth::user()->tgl_selesai == NULL ? 'Belum diverifikasi' : Auth::user()->tgl_selesai }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->alamat }}
                              </div>
                            </div>
                          </div>                  
                    </div>                    
                  </div>
                </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script type="text/javascript">
            window.print();
            
            </script>

</body>


</html>