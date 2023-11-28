@extends('layouts.app')
@section('main')
 <!-- home section starts -->
 <section class="home">
      <h3>HI THERE !</h3>
      <h1>I'M <span>Ismail Hossain</span></h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.Dolores, modi
        quia vero natus eum nesciunt assumendaLorem ipsum dolor sit amet. Lorem
        ipsum dolor sit amet.
      </p>
      <a href="{{url('/about')}}"
        ><button class="btn">about me <i class="fas fa-user"></i></button
      ></a>
    </section>

    <!-- home section end -->
    @endsection