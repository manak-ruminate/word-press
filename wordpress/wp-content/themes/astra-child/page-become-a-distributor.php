<?php
/**
 * Template Name: Become A Distributor
 *
 * Dedicated template matching https://daffodilindia.net/become-a-distributor
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$img = static function ( $file ) {
	return esc_url( di_asset( $file ) );
};
?>

<div class="di-page di-distributor-page">

	<!-- ===== 1. COVER HERO BANNER (MATCHING LIVE SITE) ===== -->
	<section class="di-dist-cover-banner" style="background-image: url('<?php echo $img( 'Untitled-design.png' ); ?>');">
		<div class="di-dist-cover-overlay"></div>
		<div class="di-container di-dist-cover-container">
			<div class="di-breadcrumbs di-breadcrumbs--light">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="di-bc-sep">/</span>
				<span class="di-bc-current">Become a Distributor</span>
			</div>
			<h1 class="di-dist-cover-title">Become our successful partner!</h1>
			<p class="di-dist-cover-sub">Join Daffodil India's fast-growing distributor network across retail, institutional, and export markets.</p>
		</div>
	</section>

	<!-- ===== 2. MAIN 2-COLUMN SECTION: FORM + DISTRIBUTOR IMAGE ===== -->
	<section class="di-section di-dist-main-section">
		<div class="di-container">
			<div class="di-dist-split-grid">
				
				<!-- Left Column: Distributor Form (Matching Ninja Forms from live site) -->
				<div class="di-dist-form-col">
					<div class="di-dist-form-wrapper">
						<span class="di-section-tag">PARTNERSHIP ENQUIRY</span>
						<h2 class="di-dist-form-heading">Distributor Application</h2>
						<p class="di-dist-form-sub">Please fill in your company details below. Our Channel Director will contact you within 24 business hours.</p>

						<form class="di-dist-live-form" id="diLiveDistForm">
							<div class="di-dist-field">
								<label for="dist_name" class="screen-reader-text">Name</label>
								<input type="text" id="dist_name" name="dist_name" placeholder="Name" required />
							</div>

							<div class="di-dist-field">
								<label for="dist_company" class="screen-reader-text">Company Name</label>
								<input type="text" id="dist_company" name="dist_company" placeholder="Company Name" required />
							</div>

							<div class="di-dist-field">
								<label for="dist_designation" class="screen-reader-text">Designation</label>
								<input type="text" id="dist_designation" name="dist_designation" placeholder="Designation" required />
							</div>

							<div class="di-dist-field">
								<label for="dist_email" class="screen-reader-text">Email</label>
								<input type="email" id="dist_email" name="dist_email" placeholder="Email" required />
							</div>

							<div class="di-dist-field">
								<label for="dist_phone" class="screen-reader-text">Phone</label>
								<input type="tel" id="dist_phone" name="dist_phone" placeholder="Phone" required />
							</div>

							<div class="di-dist-field">
								<label for="dist_role" class="screen-reader-text">Business Category / Role</label>
								<select id="dist_role" name="dist_role" required>
									<option value="" disabled selected>Select Business Category / Role</option>
									<option value="importer">Importer</option>
									<option value="local-distributor">Local Distributor</option>
									<option value="importer-and-local-distributor">Importer and Local Distributor</option>
									<option value="other">Other</option>
								</select>
							</div>

							<div class="di-dist-field">
								<label for="dist_volume" class="screen-reader-text">Annual Import / Distribution Volume</label>
								<select id="dist_volume" name="dist_volume" required>
									<option value="" disabled selected>Annual Import / Distribution Volume</option>
									<option value="importer-of-10-40-containers-per-year">Importer of 10 - 40 containers per year</option>
									<option value="importer-of-40-70-containers-per-year">Importer of 40 - 70 containers per year</option>
									<option value="importer-of-70-100-containers-per-year">Importer of 70 - 100 containers per year</option>
									<option value="importer-of-100-containers-per-year">Importer of 100+ containers per year</option>
								</select>
							</div>

							<div class="di-dist-submit-row">
								<button type="submit" class="di-dist-submit-btn" id="distSubmitBtn">
									Submit
								</button>
								<a href="https://wa.me/919696289696?text=Hi%2C%20I%20am%20interested%20in%20becoming%20a%20distributor%20for%20Daffodil%20India." target="_blank" rel="noopener" class="di-dist-wa-btn">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
									Chat on WhatsApp
								</a>
							</div>
						</form>
					</div>
				</div>

				<!-- Right Column: Distributor Image (Matching live site distributor.avif) -->
				<div class="di-dist-img-col">
					<div class="di-dist-img-card">
						<img src="<?php echo $img( 'distributor.avif' ); ?>" alt="Become A Distributor - Daffodil India" class="di-dist-hero-img" />
						<div class="di-dist-img-caption">
							<h4>Direct Factory Backing</h4>
							<p>Partnering with distributors across North India &amp; global export destinations.</p>
						</div>
					</div>

					<!-- Quick Contact Info Pill Box -->
					<div class="di-dist-contact-pill-box">
						<div class="di-dist-cpill">
							<span class="di-cpill-icon">&#128222;</span>
							<div>
								<strong>Direct Helpline</strong>
								<a href="tel:+919696289696">+91 9696289696</a>
							</div>
						</div>
						<div class="di-dist-cpill">
							<span class="di-cpill-icon">&#9993;</span>
							<div>
								<strong>Distribution Desk</strong>
								<a href="mailto:Agamkals@daffodilindia.net">Agamkals@daffodilindia.net</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ===== 3. DISTRIBUTOR ADVANTAGES SECTION ===== -->
	<section class="di-section di-dist-perks-section">
		<div class="di-container">
			<div class="di-section-head di-section-head--center">
				<span class="di-section-tag">DEALER ADVANTAGES</span>
				<h2 class="di-section-title">Why Partner with Daffodil India?</h2>
				<p class="di-section-desc">Reliable production capacity, competitive margins, and complete institutional &amp; retail product range.</p>
			</div>

			<div class="di-pillars-cards">
				<div class="di-pillar-card">
					<div class="di-pillar-icon">&#128176;</div>
					<h3>Direct Factory Margins</h3>
					<p>Zero intermediary margins ensure high profitability for regional stockists and wholesale dealers.</p>
				</div>
				<div class="di-pillar-card">
					<div class="di-pillar-icon">&#128737;</div>
					<h3>Territory Protection</h3>
					<p>Dedicated distribution territory rights preventing price cannibalization and securing client retention.</p>
				</div>
				<div class="di-pillar-card">
					<div class="di-pillar-icon">&#9881;</div>
					<h3>Zero Supply Stockouts</h3>
					<p>High-volume converting plant in Gorakhpur, UP delivers steady uninterrupted product supply year-round.</p>
				</div>
				<div class="di-pillar-card">
					<div class="di-pillar-icon">&#128218;</div>
					<h3>Marketing &amp; Sample Kits</h3>
					<p>Physical sample swatch kits, high-res digital assets, and branded promotional collateral for client presentations.</p>
				</div>
			</div>
		</div>
	</section>

</div><!-- /.di-distributor-page -->

<script>
document.addEventListener('DOMContentLoaded', function() {
	var form = document.getElementById('diLiveDistForm');
	if (form) {
		form.addEventListener('submit', function(e) {
			e.preventDefault();
			var name = document.getElementById('dist_name').value.trim();
			var comp = document.getElementById('dist_company').value.trim();
			var desig = document.getElementById('dist_designation').value.trim();
			var email = document.getElementById('dist_email').value.trim();
			var phone = document.getElementById('dist_phone').value.trim();
			var roleEl = document.getElementById('dist_role');
			var role = roleEl ? roleEl.options[roleEl.selectedIndex].text : '';
			var volEl = document.getElementById('dist_volume');
			var vol = volEl ? volEl.options[volEl.selectedIndex].text : '';

			var msg = 'Distributor Application for Daffodil India:\n' +
				'Name: ' + name + '\n' +
				'Company: ' + comp + '\n' +
				'Designation: ' + desig + '\n' +
				'Email: ' + email + '\n' +
				'Phone: ' + phone + '\n' +
				'Role: ' + role + '\n' +
				'Volume: ' + vol;

			var waUrl = 'https://wa.me/919696289696?text=' + encodeURIComponent(msg);
			alert('Thank you for applying! Redirecting to WhatsApp to send your application directly to our Channel Director.');
			window.open(waUrl, '_blank');
		});
	}
});
</script>

<?php get_footer(); ?>
