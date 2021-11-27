@extends('dashboard.admin.layouts.app')

   @section('content')

   <!-- BEGIN LOADER -->
   <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

         @include('dashboard.admin.fragments.sidebar')

         <!-- put your content here -->

    </div>
    <!-- END MAIN CONTAINER -->

   @endsection