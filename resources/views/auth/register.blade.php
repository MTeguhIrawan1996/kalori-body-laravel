@extends('layouts.auth')

@section('content')
<!-- Page Content -->
  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <h2>
              Mulai Untuk Hidup Sehat
            </h2>
            <form method="POST" action="{{ route('register') }}" class="mt-3">
              @csrf
              <div class="form-group">
                <label>Full Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" v-model="name" required autocomplete="name" aria-describedby="nameHelp" autofocus>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" v-model="email" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Konfirmasi Password</label>
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Usia</label>
                <input id="usia" type="number" class="form-control @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" v-model="usia" required autocomplete="usia" aria-describedby="nameHelp" autofocus>
                @error('usia')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Alamat</label>
               <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" v-model="alamat" required autocomplete="alamat" aria-describedby="nameHelp" autofocus>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

              <button type="submit" class="btn btn-success btn-block mt-4">
                Sign Up Now
              </button>
              <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">
                Back to Sign In
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')

  <script src="/vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>
  <script>
    // Vue.use(Toasted);

    // var register = new Vue({
    //   el: "#register",
    //   mounted() {
    //     AOS.init();
    //     this.$toasted.error(
    //       "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
    //         position: "top-center",
    //         className: "rounded",
    //         duration: 1000,
    //       }
    //     );
    //   },
    //   data: {
    //     name: "Angga Hazza Sett",
    //     email: "kamujagoan@bwa.id",
    //     password: "",
    //     is_store_open: true,
    //     store_name: "",
    //   },
    // });
  </script>
@endpush
