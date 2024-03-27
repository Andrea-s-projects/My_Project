<footer class="footer shadow-lg ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 links_footer">
                <h3 class="footer-section-title">{{__('ui.Contatti')}}</h3>
                <p><i class="fas fa-map-marker-alt icons "></i> <a href="" class="text-decoration-none">Via Example 123, 00100 Città, Italia</a></p>
                <p><i class="fas fa-envelope icons"></i> <a href="" class=" text-decoration-none">info@presto.com</a></p>
                <p><i class="fas fa-phone icons"></i> <a href="" class="text-decoration-none">+00 123 456789</a></p>
            </div>
            <div class="col-md-6">
                <h3 class="footer-section-title">{{__('ui.Link Utili')}}</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('revisor.become') }}">{{__('ui.LavoraConNoi')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="footer-section-title">{{__('ui.Seguici')}}</h3>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">&copy; {{ date('Y') }} Aulab - The Avengers</p>
            </div>
        </div>
    </div>
</footer>
