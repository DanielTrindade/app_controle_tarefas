@component('mail::message')
# {{$tarefa}}

data limite de conclusão: {{$data_limite_conclusao}}

@component('mail::button', ['url' => ''])
Clique aqui para ver a tarefa
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
