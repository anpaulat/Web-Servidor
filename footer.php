<footer>
		<div id="icon-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 card-icon">
						<div class="card-icon-body">
							<i style="color: #c6202e" class="piizalian-icon- piizalian-icon-frame"></i>
							<h3>Free shipping</h3>
							<p class="descricaoImagens">Sign up for updates and get free shipping in your pizzas</p>
						</div>
					</div>

					<div class="col-md-3 card-icon">
						<div class="card-icon-body">
							<i style="color: #c6202e" class="piizalian-icon- piizalian-icon-clock-1"></i>
							<h3>30 Minutes Delivery</h3>
							<p class="descricaoImagens">Everything you oder will be quickly delivered to your door</p>
						</div>
					</div>

					<div class="col-md-3 card-icon">
						<div class="card-icon-body">
							<i style="color: #c6202e" class="piizalian-icon- piizalian-icon-delivery"></i>
							<h3>Best Quality Guarantee</h3>
							<p class="descricaoImagens">Pizzaloka is an international chain of family restaurants</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div id="news-area">
			<div class="container">
				<div class="column">
					<div class="col-md-12">
						<h3 class="news-title">SUBSCRIBE TO NEWSLETTER</h3>
					</div>
					<p class="news-text">Subscribe to receive our weekly Hot Promotion every Monday!</p>
					<form action="">
						<input type="email" class="form-control" id="email-input" name="email" placeholder="Yor e-mail adress">
						<input type="submit" id="news-btn" value="sign up">
					</form>
				</div>
			</div>
		</div>

		<div id="copy-area">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="logo">
							<a href="#">
							</a>
						</div>
					</div>

					<div class="col-md-12 footer-end">
						<span>Copyright © 2020 <a href="#" style="color:#c6202e">Pizzallian</a>. All Rights Reserved</span>
						<span>570 8th Ave, New York, NY 10018 United States</span>
						<span>Contact: Call and Order: +1 718-904-4450</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <?php
        if(isset($_SESSION['mensagem'])){
        ?>
            <script>
                alert('<?php echo $_SESSION["mensagem"]?>');
            </script>  
        <?php  
            unset($_SESSION["mensagem"]);
        }
    ?>
</body>

</html>