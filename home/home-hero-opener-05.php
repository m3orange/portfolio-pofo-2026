

<div id="pagetop"></div>




<section id="home-hero-opener" class="p-0 full-screen position-relative wow" style="visibility: visible; background-color: #0b0119 !important;">     

<div id="random-bg-container-03">
  <div class="video-background-container">
    <div class="video-background-content">
      <div class="container h-100">
        <div class="row h-100 m-0 p-0">
          <div class="col col-12 d-flex justify-content-center flex-column text-left text-md-start">
            <div class="home-hero-text-block-02">
                <div class="col col-12 sm-margin-20px-bottom">
                  <h1>I'm a senior product designer with a passion for <span class="serif-emphasis">human-centered design, technology and usability.</span></h1>
                </div>
                <div class="col col-12">
                  <h2>I’m seeking a position in <span class="serif-emphasis">product design or UX engineering.</span></h2>
                </div>
            </div>
          </div><!-- cols-->
        </div><!-- row-->
      </div>
    </div>
  </div>
</div>



      <div class="blurred-panel-behind">
        <!-- <div class="animated-gradient-test-01"></div> -->
      </div>


  <div class="home-grid-top">
        <div class="text-block-01">M. Architecture • MFA Design</div>
        <div class="text-block-02">hello@michellemunoz.info</div>
  </div>

    <div class="home-grid-bottom">

      <div class="container">

        <div class="col col-12 col-md-6 col-left">San Juan, Puerto Rico</div>
        <div class="col col-12 col-md-6 col-right">18º28’00 N, 066º06’51 W</div>

      </div>

    </div>

    <div class="home-big-m">
      <img class="word-01" src="<?= BASE_URL ?>images/munoz-logo-symbol-only.svg" />
    </div>

    <!-- <div class="home-big-words">
      <img class="word-01" src="<?= BASE_URL ?>home/home-big-words-slab-01.svg" />
    </div> -->

  </section>

    <script>
          // 1. Store your image URLs in an array
        const images = [
          '<?= BASE_URL ?>home-bg-images/random-bg-img-01.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-02.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-03.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-04.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-05.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-06.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-07.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-08.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-09.jpg',
          '<?= BASE_URL ?>home-bg-images/random-bg-img-10.jpg',
        ];



        // 2. Define the randomization function
        function setRandomBackground() {
        // Generate a random index based on array length
        const randomIndex = Math.floor(Math.random() * images.length);

        // Select the target element
        const container = document.getElementById('random-bg-container-03');

        // Apply the random image using CSS template literals
        container.style.backgroundImage = `url('${images[randomIndex]}')`;
        }

        // 3. Execute the function on page load
        window.onload = setRandomBackground;

    </script>
  


          
    