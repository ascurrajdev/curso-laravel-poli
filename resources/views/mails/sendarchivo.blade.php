@component('mail::message')
# Envio de archivos

Tu archivo se ha subido exitosamente: {{$archivo->nombre}}

Gracias,<br>
{{ config('app.name') }}
@endcomponent