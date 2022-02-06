@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach
@endif

<form action="/contact" method="post" id="contact-form">
    @csrf
    <div>
        <input name="name" type="text" placeholder="Your name">
    </div>
    <div>
        <input name="email" type="email" placeholder="Your email">
    </div>
    <div>
        <textarea name="message"></textarea>
   </div>
   <div>
        <button class="g-recaptcha" 
        data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" 
        data-callback="onSubmit" 
        data-action="submit" 
        type="submit">
            Send message
        </button>
   </div>
</form>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
    function onSubmit(token) {
    	document.getElementById("contact-form").submit();
    }
</script>
