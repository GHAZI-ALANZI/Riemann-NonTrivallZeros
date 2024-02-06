@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}<br>
########################################<br>
Subject: 'feedback' <br>
########################################<br>
Message:<br> {{ $mess }}


Riemann Team@
@endcomponent