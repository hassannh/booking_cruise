<div class="h-screen w-full bg-white relative flex overflow-hidden">

  <!-- Sidebar -->
  <aside class="h-full w-16 flex flex-col space-y-10 items-center justify-center relative bg-gray-800 text-white">
    
  <!-- Admin -->
    <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
      <a href="<?=URLROOT?>cruiseController/admin"><i class='fa fa-user'></i></a>      
    </div>
  
  <!-- user -->
    <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
      <a href="<?=URLROOT?>usersController/register"><i class="fa fa-user"></i></a>
    </div>

    <!-- Home -->
    <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
      <a href="<?=URLROOT?>pages/home"><i class="fa fa-home"></i></a>
    </div>

    <!-- tickets -->
    <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
      
      <a href="<?=URLROOT?>cruiseController/booking"><i class="fa fa-ticket"></i></a>
    </div>

    <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
     
      <a href="<?=URLROOT?>pages/contact"><i class="fa fa-phone"></i></a>
    </div>
  </aside>

  
 
  <div class="w-full h-full flex flex-col justify-between">
    <!-- Header -->
    <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-gray-800">
      <!-- Informação -->
      <div class="flex flex-shrink-0 items-center space-x-4 text-white">
        

      <button> <a href="<?php echo URLROOT . 'usersController/logOut' ?>">logOut</a> </button>
        <!--logo picture-->
        <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"> <i href="home"><img src="<?php echo URLROOT;?>/public/img/LayCRUISE.png" alt="cruise logo"></i></div>
      </div>

    </header>

    <!-- Main -->
    <main class="max-w-full h-full flex relative overflow-y-hidden">
      <!-- Container -->
      <div class="h-full w-full flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
        <!-- Container -->
        
 