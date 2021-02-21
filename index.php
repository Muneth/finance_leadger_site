<?php

include_once 'header.php';

?>

    <div class="content">
    <?php
    if (isset($_SESSION["useruid"])) {
      echo "<h2>Hello there " . $_SESSION["useruid"] . "</h2>";
      
    }
    ?>
      <h1>The Sky Is The Limit</h1>
      <p>We provide world class financial assistance</p>
      <a href="#about" class="btn"><i class="fas fa-chevron-right"></i> Read more</a>
    </div>
  </header>
  <main>
    <!-- About: Icons -->
    <section id="about" class="icons bg-light">
      <div class="flex-items">
        <div>
          <i class="fas fa-university fa-2x"></i>
          <div>
            <h3>Investment Banking</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, ad.</p>
          </div>
        </div>
        <div>
          <i class="fas fa-book-reader fa-2x"></i>
          <div>
            <h3>Portfolio Manager</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, ad.</p>
          </div>
        </div>
        <div>
          <i class="fas fa-pencil-alt fa-2x"></i>
          <div>
            <h3>Tax & Custodial</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, ad.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- About: Solutions -->
    <section class="solutions flex-columns">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="image/home/people.jpg" alt="">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-primary">
            <h4>What you are looking for</h4>
            <h2>We provide bespoke solutions</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eos dolor expedita, illo temporibus
              recusandae aliquam, ut quaerat deserunt quia, cumque inventore deleniti eaque officia repellendus
              exercitationem aperiam qui placeat?</p>
            <a href="#" class="btn btn-outline">
              <i class="fas fa-chevron"></i>
              Read More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Cases -->
    <section id="cases" class="cases flex-grid section-padding">
      <header class="section-header">
        <h4>This is what we Do</h4>
        <h2>Business Cases</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.</p>
      </header>
      <div class="row">
        <div class="column">
          <a href="image/cases/cases1.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases1.jpg" alt="">
          </a>
          <a href="image/cases/cases2.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases2.jpg" alt="">
          </a>
        </div>
        <div class="column">
          <a href="image/cases/cases3.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases3.jpg" alt="">
          </a>
          <a href="image/cases/cases4.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases4.jpg" alt="">
          </a>
        </div>
        <div class="column">
          <a href="image/cases/cases5.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases5.jpg" alt="">
          </a>
          <a href="image/cases/cases6.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases6.jpg" alt="">
          </a>
        </div>
        <div class="column">
          <a href="image/cases/cases7.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases7.jpg" alt="">
          </a>
          <a href="image/cases/cases8.jpg" data-lightbox="cases"
            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.">
            <img src="image/cases/cases8.jpg" alt="">
          </a>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="blog flex-columns flex-reverse">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="image/home/blog.jpg" alt="">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-secondary">
            <h4>April 16 2020</h4>
            <h2>Blog Post One</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eos dolor expedita, illo temporibus
              recusandae aliquam, ut quaerat deserunt quia, cumque inventore deleniti eaque officia repellendus
              exercitationem aperiam qui placeat?</p>
            <a href="blog.php" class="btn btn-outline">
              <i class="fas fa-chevron"></i>
              Read Our Blog</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Teams -->
    <section id="team" class="team section-padding">
      <header class="section-header">
        <h4>Who we are</h4>
        <h2>Our Proffessional Team</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ratione.</p>
      </header>
      <div class="flex-items">
        <div>
          <img src="image/team/person1.jpg" alt="">
          <h4>John Doe</h4>
          <p>President</p>
        </div>
        <div>
          <img src="image/team/person2.jpg" alt="">
          <h4>Jane Doe</h4>
          <p>Vice President</p>
        </div>
        <div>
          <img src="image/team/person3.jpg" alt="">
          <h4>Steve Smith</h4>
          <p>Marketing Head</p>
        </div>
      </div>
    </section>

    <!-- Contact Section
    <section id="contact" class="contact flex-columns">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="image/home/contact.jpg" alt="">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-light">
            <h2>Request CallBack</h2>
            <form action="" class="callback-form">
              <div class="form-control">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Enter name">
              </div>
              <div class="form-control">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Enter email">
              </div>
              <div class="form-control">
                <label for="phone"></label>
                <input type="text" name="phone" id="phone" placeholder="Enter phone">
              </div>
              <input type="submit" value="Send" id="submit" class="btn">
            </form>
          </div>
        </div>
      </div>
    </section> -->
  </main>

<?php 

include_once 'footer.php';

?>