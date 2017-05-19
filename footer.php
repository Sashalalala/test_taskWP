<footer class="footer">
	<?php 
		$theme_options = get_option('lorem_options');
	?>
		<div class="page-width contacts-container" id="contacts">
			<div class="contacts-header">
				Contacts
			</div>
			
			<div class="contacts-wrap">
				<div class="contacts-with-map">
					<div id="map"></div>

					<div class="contacts">
						<a href="mailto:<?php echo $theme_options['contact_email']; ?>" class="contact-email" ><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $theme_options['contact_email']; ?></a>
						<a href="tel:<?php echo $theme_options['contact_phone']; ?>" class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $theme_options['contact_phone']; ?></a>
						<a href="https:<?php echo $theme_options['contact_site']; ?>" class="contact-fb"><i class="fa fa-facebook-official" aria-hidden="true"></i><?php echo $theme_options['contact_site']; ?></a>
					</div>

				</div>

				<form class="contact-form" onsubmit="sendForm(this)" method="POST" id="contactForm" action="javascript:void(null);">

					<div class="form-header">
						Lorem ipsum dolor sit amet
					</div>
					<div class="inputs-wrap">
						<label class="input-label">
							<input type="text" placeholder="NAME *" name="name" id="name" oninput="isEmpty(this);">
						</label>

						<label class="input-label">
							<input type="tel" placeholder="PHONE *" name="phone" id="phone" oninput="isEmpty(this);">
						</label>

						<label class="input-label">
							<textarea class="message-texarea" name="message" id="message" placeholder="MESSAGE *" oninput="isEmpty(this);"></textarea>
						</label>
					</div>
					<div class="send-button">
						<span class="send-status unvisible" id="sendStatus"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Сообщение не оправлено</span>
						<button type="submit" class="default-button">Send</button>
					</div>

				</form>
			</div>
		</div>
		<section class="copyright">
			© 2016 Lorem ipsum copywrite
		</section>
		
	</footer>
	<script>
      function initMap() {
        var acc = {lat: 50.42713857, lng: 30.50882484};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: acc,
        });
        var marker = new google.maps.Marker({
          position: acc,
          map: map,
          icon: '<?php echo esc_url( get_template_directory_uri() ); ?>/image/marker.png'
        });
      }
    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6-9wGoo6sXu3FunRXlczQBpwErfdKjOA&callback=initMap"></script>

<?php wp_footer(); ?>

</body>
</html>