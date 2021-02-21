<footer class="footer bg-dark">
    <div class="social">
      <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
      <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
      <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
    <p>Copyright &copy;2020 - Edgeledger</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="js/lightbox.min.js"></script>

  <script>
    const navbar = document.getElementById('navbar');
    let scrolled = false;

    window.onscroll = function () {
      if (window.pageYOffset > 100) {
        navbar.classList.remove('top');
        if (!scrolled) {
          navbar.style.transform = 'translatey(-70px)';
        }
        setTimeout(function () {
          navbar.style.transform = 'translatey(0)';
          scrolled = true
        }, 200);
      } else {
        navbar.classList.add('top');
        scrolled = false;
      }
    };


    // Smooth Scrolling
    $('#navbar a, .btn').on('click', function (e) {
      if (this.hash !== '') {
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate(
          {
            scrollTop: $(hash).offset().top - 100,
          },
          800
        );
      }
    });
  </script>
</body>

</html>