@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="direccion" class="col-md-4 col-form-label text-md-end">Direcci??n</label>

                                <div class="col-md-6">
                                    <textarea id="direccion" rows="3" class="form-control" name="direccion"></textarea>
                                </div>

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="telefono" class="col-md-4 col-form-label text-md-end">Tel??fono</label>

                                <div class="col-md-6">
                                    <input type="text" id="telefono" rows="3" class="form-control"
                                        name="telefono">
                                </div>


                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="tipo_usuario" class="col-md-4 col-form-label text-md-end">Tipo de
                                    usuario</label>

                                <div class="col-md-6">
                                    <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                                        <option value="profesional">Profesional</option>
                                        <option value="empresa">Empresa</option>
                                    </select>
                                </div>

                                @error('tipo_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="documento_unico"
                                    class="col-md-4 col-form-label text-md-end document_unico_form">Documento ??nico
                                    <br>
                                    (DUI
                                    o
                                    NIT)</label>

                                <div class="col-md-6">
                                    <input type="text" id="documento_unico" rows="3"
                                        class="form-control document_unico_form" name="documento_unico">
                                </div>

                                @error('documento_unico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="genero" class="col-md-4 col-form-label text-md-end genero_form">G??nero</label>

                                <div class="col-md-6 genero_form">
                                    <select name="genero" id="genero" class="form-control genero_form">
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select>
                                </div>

                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="nombre_categoria" class="col-md-4 col-form-label text-md-end">Categor??as</label>

                                <div class="col-md-6">
                                    <select name="nombre_categoria" id="nombre_categoria" class="form-control">
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->nombre_categoria }}">
                                                {{ $categoria->nombre_categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('nombre_categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.getElementById('tipo_usuario').addEventListener('change', (e) => {
            const tipo = e.target.value
            const documento = document.querySelectorAll('.document_unico_form')
            const genero = document.querySelectorAll('.genero_form')
            console.log(documento)
            if (tipo == 'empresa') {
                documento.forEach(el => el.style.display = 'none')
                genero.forEach(el => el.style.display = 'none')
            } else {
                documento.forEach(el => el.style.display = 'block')
                genero.forEach(el => el.style.display = 'block')
            }

        });
    </script>
@endsection
