@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora! Precisamos apenas que você valide o seu e-mail </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail para você com o link de validação
                        </div>
                    @endif
                    Antes de continuar, por favor verifique o seu e-mail recebeu o link de validação.
                    Caso não tenha recebido o link de validação
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">clique aqui para solicitar o reenvio</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
