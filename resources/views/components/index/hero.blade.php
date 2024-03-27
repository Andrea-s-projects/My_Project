<div class="container-fluid p-0" style="position:relative;">
    <x-error />
    <div style="position: relative;">
        <div>
            <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
                style="width:100%;height:auto;aspect-ratio:16/8;max-height:auto;">
            <div id="animated-content" style="opacity: 0; transform: translate(-100%, -50%); transition: opacity 1s ease-in-out, transform 1s ease-in-out; position: absolute; top: 12vw; left: 23vw; text-align: center; color: rgb(255, 0, 0); max-width: 90%;">
                <h1 style="margin-bottom: 1.5vw; font-size: 3vw; color:#5337a1;" class="madimi-one-regular">
                    {{ __('ui.Herotitle1') }}<br>
                    {{ __('ui.Herotitle2') }}
                </h1>
                <p style="font-size: 1vw; color:#6a50af;" class="madimi-one-regular">
                    {{ __('ui.Herotitle3') }}
                    {{ __('ui.Herotitle4') }}<br>
                    {{ __('ui.Herotitle5') }}<br>
                    {{ __('ui.Herotitle6') }}
                </p>
            </div>
        
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var animatedContent = document.getElementById('animated-content');
                    var observer = new IntersectionObserver(function(entries) {
                        if(entries[0].isIntersecting === true) {
                            animatedContent.style.opacity = '1';
                            animatedContent.style.transform = 'translate(-50%, -50%)';
                        }
                    }, { threshold: [0] });
        
                    observer.observe(animatedContent);
                });
            </script>
        
            @auth
                <div id="new-announcement-btn" style="opacity: 0; transform: translate(-100%, -50%); transition: opacity 1s ease-in-out, transform 1s ease-in-out; position:absolute; top:43%; left:11%;">
                    <a class="btn text-uppercase btn-ctaa" aria-current="page" href="{{ route('announcements.create') }}"
                        style="font-size: 0.8vw; padding: 1vw 2vw;">{{ __('ui.NuovoAnnuncio') }}</a>
                </div>
        
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var newAnnouncementBtn = document.getElementById('new-announcement-btn');
                        var observer = new IntersectionObserver(function(entries) {
                            if(entries[0].isIntersecting === true) {
                                newAnnouncementBtn.style.opacity = '1';
                                newAnnouncementBtn.style.transform = 'translateY(-50%) translateX(50%)';
                            }
                        }, { threshold: [0] });
        
                        observer.observe(newAnnouncementBtn);
                    });
                </script>
            @endauth
        </div>
    </div>
</div>
