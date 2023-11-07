<?php

const SERVER_NAME = 'localhost';
const USER_NAME = 'root';
const PASSWORD = '';
const DATABASE = 'locatordev';

$connect = mysqli_connect(SERVER_NAME,USER_NAME,PASSWORD,DATABASE);


if (mysqli_connect_errno()) {
    echo "Database connection failed.";
}


    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php";
?>
<div class="content">
  <div class="wrapper mimg2" id= "wrapper-1">  
    <div class="frontbox2 sky-opac w-2/5">
      <h1 class="heading" style="margin-top:70vh">Contact Us</h1>
      <span class="tagline">
      Follow us given for business related information or to stay connected with us. You can contact us through the information given below or you can meet us directly through the locations.
      </span>
</div>
  </div>
  <div class="wrapper flex justify-center bg-gray-100 mx-40  my-10">
      <!-- ---------------------------------------------------------------- -->
      <form class="w-full max-w-lg" id="contactform">
        <h1 class="font-extrabold text-center my-10 text-3xl font-sans">Leave us a Message</h1>
  <div class="flex flex-wrap mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
        Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="name" id="name" type="text" placeholder="Your name">
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
        Email
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="email" id="email" type="text" placeholder="@gmail.com">
    </div>
  </div>

  <div class="flex flex-wrap mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Mobile">
        Mobile No.
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="phone" id="phone" type="text" placeholder="Number" maxlength="10">
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Subject">
        Subject      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="subject" id="subject" type="text" placeholder="Subject">
    </div>
  </div>

  <div class="flex flex-wrap mx-3 mb-6">
    <div class="w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Message">
        Message
      </label>
      <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="msg" id="msg" type="text" placeholder="Place here query here" rows="3"></textarea>
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    </div>
    <button class="sky w-2/5 content-center justify-center hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" id="submit">
    Send a Message
</button>
  </div>

</form>
      <!-- ---------------------------------------------------------------- -->
  </div>

  <h1 class="font-extrabold text-center text-3xl font-sans">Connect With Us for More Information</h1>
<p class="top mb-5">Follow us given for business related information or to stay connected with us. You can contact us through the information given below or you can meet us directly through the locations.</p>

<div class="justify-center flex gap-x-10">
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<i class="fa-solid fa-address-card fa-2xl" style="color: #213c5f;"></i>    
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Contact Us Anytime</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Whatsapp:+91-8447263946</p>
</a>

<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<i class="fa-solid fa-location-crosshairs fa-2xl"></i>    
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Our Location</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">04, Bhogal Lane, Jangpura, Near Arya Samaj Mandir Jangpura, South East Delhi , Delhi-110014,</p>
</a>

<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<i class="fa-solid fa-envelope fa-2xl"></i>    
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Support Overall</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">info@locatortransport.com</p>
</a>

</div>

<br>
<br>

<br>
<br>
<br>
<br>
<?php
include ABSPATH . "/templates/footer.php";
?>
<script>
    $(document).ready(function(){
        $("#dropdown-list").hide();
    $(".main-dropdown").click(function(){
      $(".main-dropdown + #dropdown-list").toggle("fast" );
    });
    $("#cross").click(function () {
      $('#menu-overlay').removeClass("active")
    })
    $(".hamburger").click(function () {
      $('#menu-overlay').addClass("active")
    });
  });


  $("document").ready(function(){
  $("#submit").on('click',function(e){
            e.preventDefault();
        
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var subject = $("#subject").val();
            var msg = $("#msg").val();
            $.ajax({
                url:'Backend/BKcontact.php',
                type:'POST',
                data:{
                        u_name:name,
                        u_email:email,
                        u_phone:phone,
                        u_subject:subject,
                        u_msg:msg,
                    },

                success:function(data){
                        if(data ==1)
                        {
                            alert("Your Query successfully received");
                            $("#contactform").trigger("reset");
                        }else{
                            alert("data not saved!");
                        }
                    }
            });
          });
        });
          
</script>