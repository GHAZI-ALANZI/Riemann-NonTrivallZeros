@component('mail::message')
<h1>Riemann Hypothese</h1>
<p>########################</p><br>
##Hi {{ $name }}##,<br>
{{ $senderMessage }} 
Receive your email. I will try quicly answer.
@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent
Thanks for your feedback<br>
Riemann Team@
@endcomponent