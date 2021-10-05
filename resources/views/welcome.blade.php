@extends('layouts.main')
@section('title', 'Crud')
@section('content')

<!--============== MAIN ============== -->
<main>
   <!--============== HOME ============== -->
   <section class="container section section__height" id="home">
      <h2 class="section__title">Início</h2>

      <div class="form__data">
         <div class="form__title">Form</div>
         <form action="">
            <div class="form__input">
               <span class="form__label">Nome: </span>
               <input type="text" placeholder="Nome" required>
            </div>

            <div class="form__input">
               <span class="form__label">Sobrenome: </span>
               <input type="text" placeholder="Sobrenome" required>
            </div>
         </form>
      </div>
   </section>

   <!--============== TABELA ============== -->
   <section class="container section section__height" id="table">
      <h2 class="section__title">Tabela</h2>

   </section>
</main>
@endsection