<div class="container">
<header class="d-flex justify-content-center py-3">
  <ul class="nav nav-pills">
    <li class="nav-item"><a href="/PhpOnlineStore/index.php/" class="nav-link active" aria-current="page">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="/PhpOnlineStore/about.php/" class="nav-link">About</a></li>
    <!-- <i class="fas fa-shopping-cart"></i> Cart -->
    
    <?php if($_COOKIE['user'] == 'Yes'): ?>
      <a class="btn btn-outline-primary" href="/PhpOnlineStore/auth.php/">Cabinet</a>
    <?php else: ?>
      <a class="btn btn-outline-primary" href="/PhpOnlineStore/auth.php/">Sign up</a>
    <?php endif; ?>
    <a href="/PhpOnlineStore/cart.php/" class="btn btn-outline-primary" style="margin-left: 20px;">
      <i class="fas fa-shopping-cart"></i> Cart
      <?php

        if (isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span id=\"cart_count\" class=\"text-warning\">$count</span>";
        }else{
            echo "<span id=\"cart_count\" class=\"text-warning\">0</span>";
        }

      ?>
    </a>
  </ul>
</header>
</div>
