@component('mail::message')
# Solicitud de contización para proyecto/asesoria

<h3>Nombre del proyecto: {{ $data['NombreProy'] }}</h3>
<h3>Nombre del solicitante: {{ $data['NombrePer'] }}</h3>
<br>
<h3>Descripción</h3>
<p>{{ $data['Comentario'] }}</p>

@endcomponent
