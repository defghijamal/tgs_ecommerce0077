<!-- resources/views/payment.blade.php -->
@include('fragment.alert')
<section id="payment" class="payment">
    <div class="container">
        @if (Auth::check())
            <h2>Pembayaran untuk {{ $course->nama_kursus }}</h2>
            <p>Harga: Rp{{ number_format($course->harga, 0, ',', '.') }}</p>

            <form action="{{ route('payment.process', $course->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Bayar</button>
            </form>
            
        @else
            <h2>Anda harus login untuk melakukan pembayaran.</h2>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        @endif
    </div>
</section>