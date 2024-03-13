@if(session('success'))
    <div class="alert alert-success alert-dismissible show fade" id="successAlert">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>x</span>
            </button>
            <p>{{ session('success') }}</p>
        </div>
    </div>

@if(session('error'))
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>x</span>
            </button>
            <p>{{ session('error') }}</p>
        </div>
    </div>
@endif



    <script>
        // Menggunakan JavaScript untuk menyembunyikan notifikasi setelah 5 detik
        setTimeout(function(){
            document.getElementById('successAlert').style.display = 'none';
        }, 5000); // 5000 milidetik = 5 detik
    </script>
@endif


