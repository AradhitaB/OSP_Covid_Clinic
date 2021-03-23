
    <div class="container footer">
      <hr>
      <footer>
        
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </li>';
                }
        ?>
        </p>
        <p align="right">
        <a href="www.vtop.vit.ac.in">OSP PROJECT REVIEW 1</a> - <?php echo date('Y'); ?>
        </nav>
    </p>
      </footer>
    </div>
  </body>
</html>
