<form class="d-inline" action="{{ route('setLocale', $lang) }}" method="post">
    @csrf
    <button type="submit" class="btn p-1 " style=" padding-top: 0.3rem !important;">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="25" height="25" />
    </button>
</form 
