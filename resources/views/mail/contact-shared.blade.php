@component('mail::message')
  # New Contact was shared with you

  User {{ $fromUser }} shared contact {{ $sharedContact }} with you

  @component('mail::button', ['url' => route('contact-shares.index')])
    See here
  @endcomponent

  Thanks,<br>
  {{ config('app.name') }}
@endcomponent
