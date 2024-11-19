@component('mail::message')

# {{$nomeSerie}} criada

@image('storage/'.$coverPath)

A série {{$nomeSerie}} com {{$qtdTemporadas}} temporadas e {{$episodiosPorTemporada}} episódios foi criada com sucesso.

Acesse aqui:

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
Ver série
@endcomponent

@endcomponent