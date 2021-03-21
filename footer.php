	<style>
		.container_footer{
			background-color: #7d8787;
			color: white;
			border-top-left-radius: 10;
			border-top-right-radius: 10;
			text-shadow: 2px 2px #ff0000;
		}
	</style>
    <div class="container_footer">
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
