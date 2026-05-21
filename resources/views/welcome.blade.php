@extends('layouts.app')
@section('content')
    <div id="burbujas-container"></div>

    <section  class="hero">
        <article class="hero-card">
        <header class="hero-header">  
              
            <h1>Hola, mi nombre es Irwin</h1>
            <p> Estudiante de la carrera de ingenieria en sistemas computacionales
                Explora mis proyectos, blog y experimentos.
            </p>
        </header>
         
          <section class="terminal">
                <div class="terminal-header">
                <span></span>
                <span></span>
                <span></span>
          </div>
                <code id="typing"></code><span class="cursor">|</span>
          </section>
        </article>
    </section>
@endsection
