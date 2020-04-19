@extends('layouts.app')

@section('content')
    <section class="section is-fullheight">
        <div class="container">
            <div class="columns is-multiline">
                <div class="card column is-half is-offset-one-quarter">
                    <header class="card-header">
                        <h1 class="card-header-title">
                            Dashboard
                        </h1>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            @if (session('status'))
                                <article class="message is-success">
                                    <div class="message-body">
                                        {{ session('status') }}
                                    </div>
                                </article>
                            @endif
                            <p>Willkommen <strong>{{ auth()->user()->name }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
