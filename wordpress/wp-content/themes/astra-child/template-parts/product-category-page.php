<?php
/**
 * Shared Product Category Template Component
 *
 * Renders a full-featured, responsive product category page with:
 * - Hero banner with breadcrumb & category badges
 * - Category quick-jump navigation bar
 * - Key highlights & intro section
 * - SKU cards grid with technical specifications
 * - Comprehensive technical comparison table
 * - Private Label / OEM customization banner
 * - Direct RFQ & WhatsApp inquiry section
 * - Cross-category quick links
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

// All 6 categories for cross-navigation
$categories_nav = array(
	'facial-tissues' => array(
		'name' => 'Facial Tissues',
		'url'  => home_url( '/index.php/facial-tissues/' ),
	),
	'paper-napkins'  => array(
		'name' => 'Paper Napkins',
		'url'  => home_url( '/index.php/paper-napkins/' ),
	),
	'paper-towels'   => array(
		'name' => 'Paper Towels',
		'url'  => home_url( '/index.php/paper-towels/' ),
	),
	'toilet-rolls'   => array(
		'name' => 'Toilet Rolls',
		'url'  => home_url( '/index.php/toilet-rolls/' ),
	),
	'kitchen-range'  => array(
		'name' => 'Kitchen Range',
		'url'  => home_url( '/index.php/kitchen-range/' ),
	),
	'hospital-range' => array(
		'name' => 'Hospital Range',
		'url'  => home_url( '/index.php/hospital-range/' ),
	),
);

$cat = isset( $cat_data ) ? $cat_data : array();
$slug = isset( $cat['slug'] ) ? $cat['slug'] : '';
?>

<div class="di-page di-cat-page di-cat-page--<?php echo esc_attr( $slug ); ?>">

	<!-- ===== 1. HERO BANNER ===== -->
	<section class="di-cat-hero">
		<div class="di-container">
			<div class="di-cat-hero__grid">
				<div class="di-cat-hero__content">
					<div class="di-breadcrumbs">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						<span class="di-bc-sep">/</span>
						<a href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>">Products</a>
						<span class="di-bc-sep">/</span>
						<span class="di-bc-current"><?php echo esc_html( $cat['title'] ); ?></span>
					</div>

					<span class="di-cat-hero__tag"><?php echo esc_html( $cat['tag'] ); ?></span>
					<h1 class="di-cat-hero__title"><?php echo esc_html( $cat['hero_title'] ); ?></h1>
					<p class="di-cat-hero__desc"><?php echo esc_html( $cat['hero_desc'] ); ?></p>

					<div class="di-cat-hero__badges">
						<?php if ( ! empty( $cat['hero_badges'] ) ) : ?>
							<?php foreach ( $cat['hero_badges'] as $badge ) : ?>
								<span class="di-cat-hero-pill">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
									<?php echo esc_html( $badge ); ?>
								</span>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>

					<div class="di-cat-hero__actions">
						<a href="#rfq" class="di-btn-red">
							Request Bulk Quotation
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
						<a href="https://wa.me/919696289696?text=Hi%2C%20I%20am%20interested%20in%20<?php echo rawurlencode( $cat['title'] ); ?>%20pricing%20and%20samples." target="_blank" rel="noopener" class="di-btn-whatsapp-cat">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
							Chat on WhatsApp
						</a>
					</div>
				</div>

				<div class="di-cat-hero__media">
					<div class="di-cat-hero-img-box">
						<img src="<?php echo $img( $cat['image'] ); ?>" alt="<?php echo esc_attr( $cat['title'] ); ?>" />
						<div class="di-cat-hero-pill-overlay">
							<span>Manufacturing Guarantee</span>
							<strong>100% Virgin Pulp Available</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== 2. CATEGORY SWITCHER / NAV BAR ===== -->
	<nav class="di-cat-nav-bar" aria-label="Product Categories">
		<div class="di-container">
			<div class="di-cat-nav-pills">
				<a href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>" class="di-cat-nav-pill di-cat-nav-pill--all">
					&larr; All Products Overview
				</a>
				<?php foreach ( $categories_nav as $c_slug => $c_item ) : ?>
					<a href="<?php echo esc_url( $c_item['url'] ); ?>" class="di-cat-nav-pill <?php echo ( $slug === $c_slug ) ? 'is-active' : ''; ?>">
						<?php echo esc_html( $c_item['name'] ); ?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</nav>

	<!-- ===== 3. KEY ATTRIBUTES / WHY CHOOSE US ===== -->
	<section class="di-section di-cat-features-section">
		<div class="di-container">
			<div class="di-section-head di-section-head--center">
				<span class="di-section-tag">ENGINEERED PERFORMANCE</span>
				<h2 class="di-section-title">Why Industry Leaders Choose Daffodil <?php echo esc_html( $cat['title'] ); ?></h2>
				<p class="di-section-desc">Manufactured in high-speed converting facilities with strict quality checks on tensile strength, softness, and microbiological safety.</p>
			</div>

			<div class="di-cat-features-grid">
				<?php if ( ! empty( $cat['features'] ) ) : ?>
					<?php foreach ( $cat['features'] as $feat ) : ?>
						<div class="di-cat-feature-card">
							<div class="di-feature-icon-circle">
								<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
							</div>
							<h3><?php echo esc_html( $feat['title'] ); ?></h3>
							<p><?php echo esc_html( $feat['desc'] ); ?></p>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- ===== 4. FULL SKU PORTFOLIO GRID ===== -->
	<section class="di-section di-cat-skus-section" id="skus">
		<div class="di-container">
			<div class="di-section-head">
				<span class="di-section-tag">STANDARD &amp; COMMERCIAL SKUs</span>
				<h2 class="di-section-title">Available Product Variants &amp; Packaging Formats</h2>
				<p class="di-section-desc">Each product format is crafted to optimize cost-in-use, dispenser compatibility, and user satisfaction.</p>
			</div>

			<div class="di-sku-cards-grid">
				<?php if ( ! empty( $cat['skus'] ) ) : ?>
					<?php foreach ( $cat['skus'] as $sku ) : ?>
						<div class="di-sku-card">
							<div class="di-sku-card__header">
								<span class="di-sku-code"><?php echo esc_html( $sku['code'] ); ?></span>
								<?php if ( ! empty( $sku['badge'] ) ) : ?>
									<span class="di-sku-badge"><?php echo esc_html( $sku['badge'] ); ?></span>
								<?php endif; ?>
							</div>
							<h3 class="di-sku-card__name"><?php echo esc_html( $sku['name'] ); ?></h3>
							<p class="di-sku-card__desc"><?php echo esc_html( $sku['desc'] ); ?></p>

							<div class="di-sku-specs-table">
								<div class="di-sku-spec-row">
									<span class="di-spec-label">Ply Count:</span>
									<span class="di-spec-val"><?php echo esc_html( $sku['ply'] ); ?></span>
								</div>
								<div class="di-sku-spec-row">
									<span class="di-spec-label">Count / Size:</span>
									<span class="di-spec-val"><?php echo esc_html( $sku['sheets'] ); ?></span>
								</div>
								<div class="di-sku-spec-row">
									<span class="di-spec-label">GSM:</span>
									<span class="di-spec-val"><?php echo esc_html( $sku['gsm'] ); ?></span>
								</div>
								<div class="di-sku-spec-row">
									<span class="di-spec-label">Case Pack:</span>
									<span class="di-spec-val"><?php echo esc_html( $sku['packing'] ); ?></span>
								</div>
							</div>

							<div class="di-sku-card__footer">
								<a href="#rfq" class="di-sku-inquire-btn" data-sku="<?php echo esc_attr( $sku['code'] . ' - ' . $sku['name'] ); ?>">
									Inquire This SKU &rarr;
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- ===== 5. TECHNICAL SPECIFICATIONS MATRIX ===== -->
	<?php if ( ! empty( $cat['specs_matrix'] ) ) : ?>
		<section class="di-section di-cat-matrix-section">
			<div class="di-container">
				<div class="di-section-head di-section-head--center">
					<span class="di-section-tag">TECHNICAL DATA SHEET</span>
					<h2 class="di-section-title">Comparative Technical Matrix</h2>
					<p class="di-section-desc">Factory certified parameters conforming to international hygiene tissue manufacturing guidelines.</p>
				</div>

				<div class="di-table-responsive">
					<table class="di-matrix-table">
						<thead>
							<tr>
								<th>Technical Parameter</th>
								<th>Commercial Standard</th>
								<th>Premium / Luxury Grade</th>
								<th>Institutional / AFH Grade</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ( $cat['specs_matrix'] as $row ) : ?>
								<tr>
									<td><strong><?php echo esc_html( $row['param'] ); ?></strong></td>
									<td><?php echo esc_html( $row['commercial'] ); ?></td>
									<td><?php echo esc_html( $row['premium'] ); ?></td>
									<td><?php echo esc_html( $row['institutional'] ); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- ===== 6. PRIVATE LABEL & OEM CAPABILITIES ===== -->
	<section class="di-section di-cat-oem-section">
		<div class="di-container">
			<div class="di-oem-banner">
				<div class="di-oem-banner__content">
					<span class="di-section-tag" style="color:var(--di-orange);">CONTRACT CONVERTING &amp; OEM</span>
					<h2>Custom Manufacturing &amp; Private Label for <?php echo esc_html( $cat['title'] ); ?></h2>
					<p>
						Are you a retail brand, supermarket chain, or hospitality distributor? We manufacture tailored <?php echo esc_html( strtolower( $cat['title'] ) ); ?> matching your exact sheet size, perforation pitch, embossing pattern, and branded packaging requirements.
					</p>

					<div class="di-oem-points">
						<div class="di-oem-point">
							<span class="di-oem-check">&#10003;</span>
							<span>Custom flexo printing &amp; full-color branded box / poly packaging</span>
						</div>
						<div class="di-oem-point">
							<span class="di-oem-check">&#10003;</span>
							<span>Virgin pulp or FSC-certified recycled pulp options</span>
						</div>
						<div class="di-oem-point">
							<span class="di-oem-check">&#10003;</span>
							<span>Container-load export palletizing with moisture-barrier wrapping</span>
						</div>
						<div class="di-oem-point">
							<span class="di-oem-check">&#10003;</span>
							<span>Barcoding, GS1 standards &amp; batch coding compliance</span>
						</div>
					</div>

					<div class="di-oem-actions">
						<a href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=OEM%20Inquiry%20for%20' . rawurlencode( $cat['title'] ) ) ); ?>" class="di-btn-white">
							Discuss Your OEM Requirements &rarr;
						</a>
						<a href="tel:+919696289696" class="di-btn-trans">&#128222; Call Technical Sales: +91 9696289696</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== 7. INSTANT RFQ / INQUIRY SECTION ===== -->
	<section class="di-section di-cat-rfq-section" id="rfq">
		<div class="di-container">
			<div class="di-rfq-grid">
				<div class="di-rfq-info">
					<span class="di-section-tag">DIRECT FACTORY PRICING</span>
					<h2>Request Wholesale Quotation &amp; Samples</h2>
					<p>
						Receive competitive container or truckload pricing, technical product data sheets, and free physical sample swatch kits for your testing.
					</p>

					<div class="di-rfq-contact-cards">
						<div class="di-rfq-card">
							<strong>Direct Hotline</strong>
							<a href="tel:+919696289696">+91 9696289696</a>
						</div>
						<div class="di-rfq-card">
							<strong>Institutional Sales Email</strong>
							<a href="mailto:Agamkals@daffodilindia.net">Agamkals@daffodilindia.net</a>
						</div>
						<div class="di-rfq-card">
							<strong>Manufacturing Plant</strong>
							<span>Plot No. 1, Phase 2, Industrial Area, Gorakhpur, UP 273209</span>
						</div>
					</div>
				</div>

				<div class="di-rfq-form-box">
					<form class="di-form di-cat-rfq-form" id="diCatRfqForm">
						<h3>Submit Quotation Request</h3>
						<p class="di-form-sub">We reply with unit pricing and lead times within 2 business hours.</p>

						<div class="di-form-field">
							<label for="rfq_product">Product Line</label>
							<input type="text" id="rfq_product" name="product" value="<?php echo esc_attr( $cat['title'] ); ?>" readonly style="background:#f1f5f9;" />
						</div>

						<div class="di-form-row--2">
							<div class="di-form-field">
								<label for="rfq_name">Your Name <span class="di-req">*</span></label>
								<input type="text" id="rfq_name" name="name" placeholder="John Doe" required />
							</div>
							<div class="di-form-field">
								<label for="rfq_phone">Phone / WhatsApp <span class="di-req">*</span></label>
								<input type="tel" id="rfq_phone" name="phone" placeholder="+91 98765 43210" required />
							</div>
						</div>

						<div class="di-form-row--2">
							<div class="di-form-field">
								<label for="rfq_email">Work Email <span class="di-req">*</span></label>
								<input type="email" id="rfq_email" name="email" placeholder="john@company.com" required />
							</div>
							<div class="di-form-field">
								<label for="rfq_quantity">Estimated Monthly Volume</label>
								<select id="rfq_quantity" name="quantity">
									<option value="Sample Order">Sample Testing Kit</option>
									<option value="50 - 200 Cases">50 – 200 Cases</option>
									<option value="200 - 500 Cases">200 – 500 Cases</option>
									<option value="Full Truck Load (FTL)">Full Truck Load (FTL)</option>
									<option value="Full Container Load (FCL Export)">Full Container Load (FCL Export)</option>
								</select>
							</div>
						</div>

						<div class="di-form-field">
							<label for="rfq_notes">Specific Requirements / Target SKUs</label>
							<textarea id="rfq_notes" name="notes" rows="3" placeholder="Mention preferred ply, sheet size, branding requirements, or delivery location..."></textarea>
						</div>

						<div class="di-form-submit-row">
							<button type="submit" class="di-btn-submit">
								Request Official Quote &rarr;
							</button>
							<a href="https://wa.me/919696289696?text=Hi%2C%20I%20would%20like%20to%20request%20pricing%20for%20<?php echo rawurlencode( $cat['title'] ); ?>." target="_blank" rel="noopener" class="di-btn-whatsapp-sub">
								Direct WhatsApp
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== 8. EXPLORE OTHER RANGES ===== -->
	<section class="di-section di-cat-other-section">
		<div class="di-container">
			<div class="di-section-head di-section-head--center">
				<span class="di-section-tag">COMPLETE LINEUP</span>
				<h2 class="di-section-title">Explore Other Hygiene Paper Ranges</h2>
			</div>

			<div class="di-other-cats-grid">
				<?php foreach ( $categories_nav as $o_slug => $o_item ) : ?>
					<?php if ( $o_slug !== $slug ) : ?>
						<a href="<?php echo esc_url( $o_item['url'] ); ?>" class="di-other-cat-card">
							<h4><?php echo esc_html( $o_item['name'] ); ?></h4>
							<span>View Range &rarr;</span>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

</div><!-- /.di-cat-page -->

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Auto-fill SKU into RFQ form if user clicks "Inquire This SKU"
	var skuBtns = document.querySelectorAll('.di-sku-inquire-btn');
	var notesInput = document.getElementById('rfq_notes');
	skuBtns.forEach(function(btn) {
		btn.addEventListener('click', function(e) {
			var sku = btn.getAttribute('data-sku');
			if (notesInput && sku) {
				notesInput.value = 'Inquiring specifically for: ' + sku + '\n';
			}
		});
	});

	// RFQ form handler
	var form = document.getElementById('diCatRfqForm');
	if (form) {
		form.addEventListener('submit', function(e) {
			e.preventDefault();
			var name = document.getElementById('rfq_name').value;
			var phone = document.getElementById('rfq_phone').value;
			var email = document.getElementById('rfq_email').value;
			var prod = document.getElementById('rfq_product').value;
			var qty = document.getElementById('rfq_quantity').value;
			var notes = document.getElementById('rfq_notes').value;

			var msg = 'Quotation Request for ' + prod + ':\n' +
				'Name: ' + name + '\n' +
				'Phone: ' + phone + '\n' +
				'Email: ' + email + '\n' +
				'Volume: ' + qty + '\n' +
				'Notes: ' + notes;

			var waUrl = 'https://wa.me/919696289696?text=' + encodeURIComponent(msg);
			alert('Thank you! Redirecting to WhatsApp to send your quotation inquiry directly to our sales team.');
			window.open(waUrl, '_blank');
		});
	}
});
</script>

<?php get_footer(); ?>
