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
                            <p>Welcome <strong>{{ auth()->user()->name }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <example-component title="Dashboard">
            @if (session('status'))
                <query-message :success="true" :fail="false" message="{{ session('status') }}"></query-message>
            @endif
            <p>Welcome <strong>{{ auth()->user()->name }}</strong></p>
        </example-component>

    </section>
@endsection
