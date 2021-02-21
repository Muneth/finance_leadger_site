<?php

include_once 'headerblog.php';

?>
    
    <div class="content">
      <h1>Blog</h1>
    </div>
  </header>
  <main>
    <article class="flex-columns">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="image/blog/blog1.jpg" alt="">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-light">
            <h2>Blog Post One</h2>
            <p class="meta">
              <i class="fas fa-user"></i> Posted by <strong>John Doe</strong> | April 19 2020
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eos dolor expedita, illo temporibus
              recusandae aliquam, ut quaerat deserunt quia, cumque inventore deleniti eaque officia repellendus
              exercitationem aperiam qui placeat?</p>
            <a href="post.php" class="btn btn-dark">
              <i class="fas fa-chevron"></i>
              Read More</a>
          </div>
        </div>
      </div>
    </article>

    <article class="flex-columns flex-reverse">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="image/blog/blog2.jpg" alt="">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-dark">
            <h2>Blog Post Two</h2>
            <p class="meta">
              <i class="fas fa-user"></i> Posted by <strong>Muneth SINGH</strong> | April 22 2020
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eos dolor expedita, illo temporibus
              recusandae aliquam, ut quaerat deserunt quia, cumque inventore deleniti eaque officia repellendus
              exercitationem aperiam qui placeat?</p>
            <a href="post.php" class="btn btn-light">
              <i class="fas fa-chevron"></i>
              Read More</a>
          </div>
        </div>
      </div>
    </article>

    <article class="flex-columns">
      <div class="row">
        <div class="column">
          <div class="column-1">
            <img src="image/blog/blog3.jpg" alt="">
          </div>
        </div>
        <div class="column">
          <div class="column-2 bg-light">
            <h2>Blog Post Three</h2>
            <p class="meta">
              <i class="fas fa-user"></i> Posted by <strong>John Doe</strong> | April 25 2020
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eos dolor expedita, illo temporibus
              recusandae aliquam, ut quaerat deserunt quia, cumque inventore deleniti eaque officia repellendus
              exercitationem aperiam qui placeat?</p>
            <a href="post.php" class="btn btn-dark">
              <i class="fas fa-chevron"></i>
              Read More</a>
          </div>
        </div>
      </div>
    </article>
  </main>

<?php

include_once 'footer.php';

?>