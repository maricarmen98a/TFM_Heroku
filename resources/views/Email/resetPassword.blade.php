@component('mail::message')
<h2>Mensaje para restablecer la contraseña del usuario</h2> 
Para poder restablecer o cambiar su contraseña, haga clic en Cambiar contraseña.
@component('mail::button', ['url' => 'https://nimble-stroopwafel-709e5b.netlify.app/change-password?token='.$token])
Cambiar contraseña
@endcomponent
Muchas gracias,<br>
el equipo de {{ config('app.name') }}
@endcomponent