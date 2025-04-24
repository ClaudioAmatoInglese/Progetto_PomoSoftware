<!-- Footer -->
<footer class="text-center">
    <!-- Grid container -->
    <div class="container-fluid text-center justify-content-center align-items-center coloreFooter pb-5">
      <!-- Section: Form -->
      <section class="row text-center justify-content-center align-items-center pt-5">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div data-mdb-input-init class="mb-4">
                <form action="{{ route('contact.store') }}" method="POST">
                  @csrf
                  <p class="pt-2 primario textShadow3">
                    <strong>Vuoi lavorare con noi? Inviaci il tuo contatto email:</strong>
                  </p>
                  <input type="email" id="form5Example24" class="form-control" name="email" required>
                  <button data-mdb-ripple-init type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-2">
                    Invia
                  </button>        
                </form>
                <div class="">
                  <h5>Vuoi diventare revisore?</h5>
                  <p>Cliccando il bottone sottostante farai richiesta al nostro admin</p>
                  <a href="{{ route('become.revisor') }}" class="btn btn-success">diventa revisore</a>
                </div>
              </div>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase terziario bordoScritte2">G. Michelini</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <a class="noDecor primario textShadow3" href="#!">JAVA Oriented</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase terziario bordoScritte2">N. Luciani</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a class="noDecor primario textShadow3" href="#!">JAVA Oriented</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase terziario bordoScritte2">F. P. Guccione</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a class="noDecor primario textShadow3" href="#!">ReactJS Oriented</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase terziario bordoScritte2">C. A. Inglese</h5>
  
            <ul class="list-unstyled mb-0 ">
              <li>
                <a class="primario noDecor textShadow3" href="#!">ReactJS Oriented</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3 linearGradient">
      © 2025 Copyright:
      <a class="extra bordoScritte2" href="https://mdbootstrap.com/">Pomo-Software.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->