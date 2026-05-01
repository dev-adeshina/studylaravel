<div class="mt-5 space-y-3 text-sm text-white/70">
    <p class="contact-text">
        <span class="font-semibold contact-title">Office Address</span>
        <br />

        @if($officeAddress)
        {{ $officeAddress }}
        @endif
    </p>
    <p class="contact-text">
        <span class="font-semibold contact-title">Phone</span>
        <br />
        + @if($phoneNumber)
        {{ $phoneNumber }}
        @endif

    </p>
    <p class="contact-text">
        <span class="font-semibold contact-title">Email</span>
        <br />
        @if($email)
        {{ $email }}
        @endif

    </p>
</div>