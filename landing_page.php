<?php $id = $_GET['wheeler_id']; ?>
<?php
// print_r($id);
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php"
?>

<div class="content">
  <div class="wrapper py-4"  id= "wrapper-1">
  <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 my-1 px-4 rounded-full" href="index.php">
  Back
</a>
      <div class="landing-parent my-4">
        

      <!-- bharat start -->
      <div class="max-w-sm rounded overflow-hidden shadow-lg  my-auto bg-white mx-auto">
  <img class="mx-auto my-auto h-32 w-2/3" src= <?php 
          if($id == "2"){ echo "./images/mukul_two_wheeler.jpg";} else if($id == "3"){ echo "./images/Threewheeler.jpg";}else{ echo "./images/mukul_four_wheeler.jpg";}?> alt="card image" height="50px" width="150px">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?php 
          if($id == "2"){ echo "Two-Wheeler";} else if($id == "3"){ echo "Three Wheeler";}else{ echo "Four Wheeler";}?></div>
    <p class="text-gray-700 text-base">
    <?php 
          if($id == "2"){ echo "Two-Wheeler <br>Starting Price from 49  &#x20B9;";} else if($id == "3"){ echo "Three Wheeler <br>Starting Price from 249  &#x20B9;";}else{ echo "Four Wheeler <br>Starting Price from 549  &#x20B9;";}?>   
  </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
</div>
      <!-- bharat ends -->
        <!-- <div class="my-1"></div> -->
        <div><p class="font-mono text-white">
          </p></div>
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-4 pb-4 my-4">
              <h1 class="landing-head">Booking Information</h1>
              <div class="mb-2">
          <label class="block text-gray-700 font-bold mb-2" for="Pick up Address">
            Name<span class="text-red-400 text-xl">*</span>
          </label>
          <input class="text-xs shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Enter your name" type="text" placeholder="Enter your name">
        </div>
        <div class="mb-2">
          <label class="block text-gray-700 font-bold mb-2" for="Pick up Address">
            Phone Number<span class="text-red-400 text-xl">*</span>
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Phone Number" type="text" placeholder="Enter your phone number" maxlength="10">
        </div>
        <div class="mb-2">
        <fieldset>
                <legend class="block text-gray-700 text-sm font-bold mb-2">Select City<span class="text-red-400 text-xl">*</span></legend>
                <select name="" id="" class="text-sm">
                  <option value="1">Delhi NCR</option>
                  <option value="2">Noida</option>
                  <option value="3">Gurugram</option>
                  <option value="3">Faridabad</option>
                </select>
              </fieldset>
        </div>
        <div class="mb-2">
          <label class="block text-gray-700 font-bold mb-2" for="Pick up Address">
            Pickup Address<span class="text-red-400 text-xl">*</span>
          </label>
          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-base" id="Pickup Adress" type="text" placeholder="Enter pickup address" rows="3"></textarea>
        </div>
        <div class="mb-2">

          <label class="block text-gray-700 font-bold mb-2" for="Pick up Address">
            Drop Address<span class="text-red-400 text-xl">*</span>
          </label>
          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Enter drop Adress" type="text" placeholder="Enter drop address" rows="3"></textarea>
        </div>
        <div class="mb-2">
          <label class="block text-gray-700 font-bold mb-2" for="Pick up Address">
            Email Address (Optional)
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Enter your email adress" type="text" placeholder="Enter your email address">
        </div>
        <div class="flex items-center justify-end">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Get Estimate
          </button>
          </a>
        </div>
  </form>
        </div>
      </div>
  </div>
</div>



<script>
$(document).ready(function(){


$("#cross").click(function () {
      $('#menu-overlay').removeClass("active")
    })
    $(".hamburger").click(function () {
      $('#menu-overlay').addClass("active")
    });
  });
</script>
<?php
        include ABSPATH . "/templates/footer.php"
    ?>