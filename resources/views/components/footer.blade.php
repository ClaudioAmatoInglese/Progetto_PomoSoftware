<!-- Footer -->
<footer class="text-center">
  <!-- Grid container -->
  <div class="container-fluid text-center justify-content-center align-items-center coloreFooter pb-5">
    <!-- Section: Form -->
    <section class="row text-center justify-content-center align-items-center pt-5">
      <!--Grid row-->
      <div class="row d-flex justify-content-around">
        <!--Grid column-->
        <div class="col-md-5 col-12">
          <!-- Email input -->
          <div data-mdb-input-init class="mb-4">
            <form action="{{ route('contact.store') }}" method="POST">
              @csrf
              <p class="pt-2 primario textShadow3">
                <strong>{{__('ui.Footer1')}}</strong>
              </p>
              <input type="email" id="form5Example24" class="form-control" name="email" required>
              <button data-mdb-ripple-init type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-2">
                {{__('ui.Invia')}}
              </button>        
            </form>
          </div>
        </div>
        @auth
        @if(Auth::user()->is_revisor == 0)
        <div class="col-md-5 col-12">
          <h5 class="primario textShadow3 sottotitolo">{{__('ui.Footer2')}}</h5>
          <p class="primario textShadow3 sottotitolo">{{__('ui.Footer2.2')}}</p>
          <a href="{{ route('become.revisor') }}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-2">{{__('ui.Footer2.3')}}</a>
        </div>
        @endif
        @endauth
        @guest
        <div class="col-md-5 col-12">
          <h5 class="primario textShadow3 sottotitolo">{{__('ui.Footer2')}}</h5>
          <p class="primario textShadow3 sottotitolo">{{__('ui.Footer2.1')}}</p>
          <a href="{{route('login')}}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-2">{{__('ui.Accedi')}}</a>
        </div>
        @endguest
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