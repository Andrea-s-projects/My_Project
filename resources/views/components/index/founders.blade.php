<style>
  .overlay-container {
      position: relative;
      overflow: hidden;
      display: inline-block;
  }
  
  .overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 150px;
      height: 150px;
      opacity: 0;
      transition: .5s ease;
      background-color: rgba(0, 0, 0, 0.5);
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      pointer-events: none; /* Non intercetta gli eventi del mouse quando nascosto */
  }
  
  .overlay-container:hover .overlay {
      opacity: 1;
      pointer-events: auto; /* Abilita gli eventi del mouse quando visibile */
  }
  
  .text {
      color: white;
      font-size: 20px;
  }
  </style>
<div class="container-fluid bg-gradient shadow py-1 mb-2">
  <h1 class="text-center text-pr-color-h1">{{ __('ui.Sviluppatori') }}</h1>
</div>
<div class="container mb-4">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">

      <div class="col-md-3 col-6 position-relative">
          <div class="overlay-container d-flex justify-content-center align-items-center">
              <img src="./img/Andrea.png" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
              <div class="overlay">
                  <div class="text">
                      <h5 class="mt-3">Andrea</h5>
                      <h5 class="mt-1">Jr Full Stack Seveloper</h5>
                      <p><a href="#">Linkedin</a></p>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-3 col-6 position-relative">
        <div class="overlay-container d-flex justify-content-center align-items-center">
            <img src="./img/Marco.png" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
            <div class="overlay">
                <div class="text">
                  <h5 class="mt-3">Marco</h5>
                  <h5 class="mt-1">Jr Full Stack Seveloper</h5>
                  <p><a href="#">Linkedin</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-6 position-relative">
      <div class="overlay-container d-flex justify-content-center align-items-center">
          <img src="./img/Carlo.png" class="rounded-circle img-fluid" alt="Immagine 1" width="150" height="150">
          <div class="overlay">
              <div class="text">
                <h5 class="mt-3">Carlo</h5>
                <h5 class="mt-1">Jr Full Stack Seveloper</h5>
                <p><a href="#">Linkedin</a></p>
              </div>
          </div>
      </div>
  </div>

  <div class="col-md-3 col-6 position-relative">
    <div class="overlay-container d-flex justify-content-center align-items-center">
        <img src="./img/Luigi.png" class="rounded-circle img-fluid " alt="Immagine 1" width="150" height="150">
        <div class="overlay">
            <div class="text">
              <h5 class="mt-3">Luigi</h5>
              <h5 class="mt-1">Jr Full Stack Seveloper</h5>
              <p><a href="#">Linkedin</a></p>
            </div>
        </div>
    </div>
</div>
      <!-- Ripeti per le altre immagini -->
  </div>
</div>