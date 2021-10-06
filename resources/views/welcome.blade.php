@extends('layouts.main')
@section('title', 'Crud')
@section('content')

<!--============== MAIN ============== -->
<main>
   <!--============== HOME ============== -->
   <section class="container section section__height" id="home">
      <h2 class="section__title">Início</h2>
      <div class="l-form">
         @if(isset ($edit))
         <form action="/update{{ $edit->id }}" class="form__edit" method="POST">
            @method('PUT')
         @else
         <form action="/user" class="form" method="POST">
         @endif
            @csrf
            <h1 class="form__title">@if(isset($edit))Editar @else Formulário @endif</h1>

            <div class="form__div">
               <input type="text" class="form__input" placeholder=" " id="nome" name="nome" value="{{ $edit -> nome ?? ''}}">
               <label for="" class="form__label">Nome</label>
            </div>

            <div class="form__div">
               <input type="text" class="form__input" placeholder=" " id="sobrenome" name="sobrenome" value="{{ $edit -> sobrenome ?? ''}}">
               <label for="" class="form__label">Sobrenome</label>
            </div>

            <input type="submit" class="form__button" value="@if(isset($edit))Editar @else Cadastrar @endif">
         </form>
      </div>
      
   </section>

   <!--============== TABELA ============== -->
   <section class="container section section__height" id="table">
      <h2 class="section__title">Tabela</h2>

      <div class="table__box">
         <div class="table__row table__head">
            <div class="table__cell first__cell">
               <p>Nome</p>
            </div>

            <div class="table__cell">
               <p>Sobrenome</p>
            </div>

            <div class="table__cell">
               <p>Editar</p>
            </div>
         </div>

         @foreach($user as $user)
         <div class="table__row">
            <div class="table__cell first__cell">
               <p>{{ $user -> nome }}</p>
            </div>

            <div class="table__cell">
               <p>{{ $user -> sobrenome }}</p>
            </div>

            <div class="table__cell last__cell">
               <div class="button__status">
                  <!-- Botão Editar -->
                  <a href="/edit{{ $user -> id }}" class="button__edit">Editar</a>

                  <!-- Botão Excluir -->
                  <form action="/delete{{ $user -> id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="button__excluir">Excluir</button>
                  </form>
                  
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</main>
@endsection