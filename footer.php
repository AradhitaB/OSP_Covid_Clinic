	<style>
		.container_footer{
			background-color: #7d8787;
			color: white;
			border-top-left-radius: 10;
			border-top-right-radius: 10;
			text-shadow: 1px 1px #000000;
			line-height: 1.25;
			padding: 10px 20px;
		}
		a{
			color: white;
		}
		a:hover{
			color: black;
		}
	</style>
    <div class="container_footer">
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php"><u>Staff Login</u></a>
                  </li>';
                }
        ?>
        </p>
        <p align="right">
        <a href="www.vtop.vit.ac.in"><u>OSP PROJECT REVIEW 1</u></a> - <?php echo date('Y'); ?>
        </nav>
		</p>
      </footer>
    </div>
  </body>
</html>
