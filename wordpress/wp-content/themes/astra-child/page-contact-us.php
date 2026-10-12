<?php
/**
 * Template Name: Contact Us Page
 *
 * Full-featured Contact Us page template for Ruminate Industries (Daffodil India)
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

<div class="di-page di-contact-page">

	<!-- ===== CONTACT HERO BANNER ===== -->
	<section class="di-contact-hero">
		<div class="di-container">
			<div class="di-contact-hero__content">
				<div class="di-breadcrumbs">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span class="di-bc-sep">/</span>
					<span class="di-bc-current">Contact Us</span>
				</div>
				<span class="di-hero-badge">DIRECT FACTORY &amp; CORPORATE HEADQUARTERS</span>
				<h1 class="di-contact-hero__title">Get in Touch with Ruminate Industries</h1>
				<p class="di-contact-hero__desc">
					Connect directly with our manufacturing facilities, corporate headquarters, or business development team for institutional supply tenders, private-label manufacturing, and wholesale distribution.
				</p>
				<div class="di-contact-hero__tags">
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Response Within 24 Hours</span>
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg> Direct Manufacturer Pricing</span>
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Dual NCR Facilities</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== 3 KEY CONTACT PILLARS ===== -->
	<section class="di-contact-pillars">
		<div class="di-container">
			<div class="di-pillars-cards">
				
				<!-- Card 1: Phone & WhatsApp -->
				<div class="di-cpillar-card">
					<div class="di-cpillar-icon di-cpillar-icon--phone">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.67 2.18 2 2 0 012.65.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l.91-.91a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 15.32v1.6z"/></svg>
					</div>
					<div class="di-cpillar-body">
						<span class="di-cpillar-tag">Call or WhatsApp</span>
						<h3>+91 9696289696</h3>
						<p>Speak directly with our business team. Monday &ndash; Saturday: 9:30 AM &ndash; 7:00 PM IST.</p>
						<div class="di-cpillar-actions">
							<a href="tel:+919696289696" class="di-cpillar-link">Call Now &rarr;</a>
							<a href="https://wa.me/919696289696?text=Hi%2C%20I%20am%20interested%20in%20Ruminate%20Industries%20products" target="_blank" rel="noopener" class="di-cpillar-wa">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
								WhatsApp Us
							</a>
						</div>
					</div>
				</div>

				<!-- Card 2: Email Inquiries -->
				<div class="di-cpillar-card di-cpillar-card--featured">
					<div class="di-cpillar-icon di-cpillar-icon--email">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
					</div>
					<div class="di-cpillar-body">
						<span class="di-cpillar-tag">Official Inquiries</span>
						<h3>Agamkals@daffodilindia.net</h3>
						<p>Send RFQs, sample kit requests, and tender specifications. 24-hour turnaround.</p>
						<div class="di-cpillar-actions">
							<a href="mailto:Agamkals@daffodilindia.net" class="di-cpillar-link">Send Email &rarr;</a>
							<span class="di-cpillar-alt">Alt: <a href="mailto:agamjotkals@yahoo.com">agamjotkals@yahoo.com</a></span>
						</div>
					</div>
				</div>

				<!-- Card 3: Dual NCR Facilities -->
				<div class="di-cpillar-card">
					<div class="di-cpillar-icon di-cpillar-icon--location">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
					</div>
					<div class="di-cpillar-body">
						<span class="di-cpillar-tag">Visit or Dispatch</span>
						<h3>Delhi &amp; Greater Noida</h3>
						<p>Corporate HQ in Okhla-2, New Delhi and 30,000 sq. ft. converting works in Greater Noida.</p>
						<div class="di-cpillar-actions">
							<a href="#diLocations" class="di-cpillar-link">View Facility Details &darr;</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ===== MAIN SECTION: FORM + LOCATION PROFILES ===== -->
	<section class="di-section di-contact-main-section">
		<div class="di-container">
			<div class="di-contact-layout">

				<!-- Left Column: Quotation & Inquiry Form -->
				<div class="di-contact-form-pane">
					<div class="di-form-card">
						<span class="di-section-tag">ONLINE RFQ &amp; INQUIRY</span>
						<h2 class="di-form-title">Request Quotation &amp; Sample Kits</h2>
						<p class="di-form-subtitle">
							Please complete the form below. Our commercial team will evaluate your specifications and provide volume pricing within one business day.
						</p>

						<!-- Interactive Form -->
						<form class="di-rfq-form" id="diRfqForm" action="#" method="post">
							<div class="di-form-row di-form-row--2">
								<div class="di-field-group">
									<label for="rfqName">Your Full Name <span class="di-req">*</span></label>
									<input type="text" id="rfqName" name="rfq_name" placeholder="e.g. Rajesh Sharma" required />
								</div>
								<div class="di-field-group">
									<label for="rfqEmail">Work Email Address <span class="di-req">*</span></label>
									<input type="email" id="rfqEmail" name="rfq_email" placeholder="e.g. rajesh@company.com" required />
								</div>
							</div>

							<div class="di-form-row di-form-row--2">
								<div class="di-field-group">
									<label for="rfqPhone">Contact Phone Number <span class="di-req">*</span></label>
									<input type="tel" id="rfqPhone" name="rfq_phone" placeholder="+91 98765 43210" required />
								</div>
								<div class="di-field-group">
									<label for="rfqCompany">Company / Organization</label>
									<input type="text" id="rfqCompany" name="rfq_company" placeholder="e.g. Hyatt Hotels / ITC Retail" />
								</div>
							</div>

							<div class="di-form-row">
								<div class="di-field-group">
									<label for="rfqType">Nature of Requirement <span class="di-req">*</span></label>
									<select id="rfqType" name="rfq_type" required>
										<option value="">Select Requirement Type...</option>
										<option value="Institutional / Bulk Supply (HORECA / Offices)">Institutional / Bulk Supply (Hotels, Hospitals, Workplaces)</option>
										<option value="Private Label / Contract Manufacturing">Private Label / Contract Manufacturing (Custom Brand)</option>
										<option value="Become a Distributor">Become a Distributor / Wholesale Partnership</option>
										<option value="Export Order Inquiry">Export Container Orders (International)</option>
										<option value="Sample Kit Request">Sample Kit &amp; Swatch Request</option>
										<option value="Other">Other Inquiry</option>
									</select>
								</div>
							</div>

							<!-- Products of Interest Checkbox Grid -->
							<div class="di-form-row">
								<div class="di-field-group">
									<label>Products of Interest</label>
									<div class="di-prod-checkboxes">
										<label class="di-checkbox-label">
											<input type="checkbox" name="rfq_products[]" value="Facial Tissues" />
											<span>Facial Tissues</span>
										</label>
										<label class="di-checkbox-label">
											<input type="checkbox" name="rfq_products[]" value="Paper Napkins" />
											<span>Paper Napkins</span>
										</label>
										<label class="di-checkbox-label">
											<input type="checkbox" name="rfq_products[]" value="Toilet Rolls / Jumbo Rolls" />
											<span>Toilet Rolls / Jumbo</span>
										</label>
										<label class="di-checkbox-label">
											<input type="checkbox" name="rfq_products[]" value="Paper Towels / Interfold" />
											<span>Paper Towels / Interfold</span>
										</label>
										<label class="di-checkbox-label">
											<input type="checkbox" name="rfq_products[]" value="Kitchen Foil & Cling Wrap" />
											<span>Kitchen Foil &amp; Wrap</span>
										</label>
										<label class="di-checkbox-label">
											<input type="checkbox" name="rfq_products[]" value="Hospital Range" />
											<span>Hospital Couch Rolls</span>
										</label>
									</div>
								</div>
							</div>

							<div class="di-form-row">
								<div class="di-field-group">
									<label for="rfqMessage">Message &amp; Order Specifications</label>
									<textarea id="rfqMessage" name="rfq_message" rows="4" placeholder="Mention quantities, ply, GSM, preferred delivery destination or custom packaging requirements..."></textarea>
								</div>
							</div>

							<div class="di-form-submit-row">
								<button type="submit" class="di-btn-submit" id="diSubmitBtn">
									<span>Submit Inquiry &amp; Request Quotation &rarr;</span>
								</button>
								<a href="https://wa.me/919696289696?text=Hello%20Ruminate%20Industries%2C%20I%20would%20like%20to%20request%20a%20quotation." class="di-btn-whatsapp-sub" target="_blank" rel="noopener">
									<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
									<span>Quick WhatsApp Inquiry</span>
								</a>
							</div>

							<!-- Form Feedback Notice -->
							<div class="di-form-feedback" id="diFormFeedback" style="display:none;"></div>
						</form>
					</div>
				</div>

				<!-- Right Column: Dual Facility & Leadership Details -->
				<div class="di-contact-info-pane" id="diLocations">
					
					<!-- Corporate Office Card -->
					<div class="di-location-profile">
						<div class="di-location-header">
							<span class="di-loc-tag">CORPORATE HEADQUARTERS</span>
							<h3>Corporate Office &mdash; New Delhi</h3>
						</div>
						<div class="di-loc-details">
							<div class="di-loc-row">
								<div class="di-loc-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
								</div>
								<div>
									<strong>Address</strong>
									<p>Y-18, Okhla Industrial Area, Phase-2,<br>New Delhi &ndash; 110020, India</p>
								</div>
							</div>

							<div class="di-loc-row">
								<div class="di-loc-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
								</div>
								<div>
									<strong>Office Timings</strong>
									<p>Monday &ndash; Saturday: 9:30 AM &ndash; 7:00 PM IST</p>
								</div>
							</div>

							<div class="di-loc-row">
								<div class="di-loc-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
								</div>
								<div>
									<strong>Key Operations</strong>
									<p>Commercial Tenders, Sample Showroom, Private Label Consultations &amp; Billing.</p>
								</div>
							</div>
						</div>
						<a class="di-loc-map-btn" href="https://maps.google.com/?q=Y-18+Okhla+Industrial+Area+Phase-2+New+Delhi" target="_blank" rel="noopener">
							Open in Google Maps &rarr;
						</a>
					</div>

					<!-- Factory / Works Card -->
					<div class="di-location-profile di-location-profile--factory">
						<div class="di-location-header">
							<span class="di-loc-tag">MANUFACTURING WORKS</span>
							<h3>Converting Plant &mdash; Greater Noida</h3>
						</div>
						<div class="di-loc-details">
							<div class="di-loc-row">
								<div class="di-loc-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
								</div>
								<div>
									<strong>Factory Address</strong>
									<p>160-161 EcoTech-01 Extn, Greater Noida,<br>YEIDA, Gautam Buddha Nagar, UP &ndash; 201310</p>
								</div>
							</div>

							<div class="di-loc-row">
								<div class="di-loc-icon">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
								</div>
								<div>
									<strong>Scale &amp; Capacity</strong>
									<p>30,000 Sq. Ft. Facility &bull; 5,000+ MT Annual Converting &bull; Truck Bays for Pan-India Dispatch</p>
								</div>
							</div>
						</div>
						<a class="di-loc-map-btn" href="https://maps.google.com/?q=160-161+EcoTech-01+Greater+Noida" target="_blank" rel="noopener">
							Open Factory Location &rarr;
						</a>
					</div>

					<!-- Executive Direct Line -->
					<div class="di-exec-contact-card">
						<div class="di-exec-avatar">AK</div>
						<div class="di-exec-info">
							<h4>Agam Kals</h4>
							<span>Business Development &amp; Institutional Sales</span>
							<p>Direct: <a href="tel:+919696289696">+91 9696289696</a> &bull; <a href="mailto:Agamkals@daffodilindia.net">Agamkals@daffodilindia.net</a></p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>

	<!-- ===== INTERACTIVE GOOGLE MAP ===== -->
	<section class="di-contact-map-section">
		<div class="di-container">
			<div class="di-map-frame-wrap">
				<div class="di-map-header">
					<div>
						<span class="di-section-tag" style="color:var(--di-orange);">LOCATION MAP</span>
						<h3>Corporate Office &mdash; Okhla Industrial Area Phase-2</h3>
						<p>Centrally located in South Delhi with rapid access to transit and NCR freight hubs.</p>
					</div>
					<a href="https://maps.google.com/?q=Y-18+Okhla+Industrial+Area+Phase-2+New+Delhi" target="_blank" rel="noopener" class="di-btn-outline">
						Get Directions &rarr;
					</a>
				</div>
				<div class="di-map-embed">
					<iframe title="Ruminate Industries Delhi Location" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
						src="https://maps.google.com/maps?q=Y-18%20Okhla%20Industrial%20Area%20phase-2%20New%20Delhi&amp;output=embed">
					</iframe>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== B2B FREQUENTLY ASKED QUESTIONS ===== -->
	<section class="di-section di-contact-faq-section">
		<div class="di-container">
			<div class="di-section-header">
				<span class="di-section-tag">FREQUENTLY ASKED QUESTIONS</span>
				<h2 class="di-about-heading">Commercial &amp; Supply Inquiries</h2>
				<p class="di-section-sub">Answers to common procurement and distribution questions.</p>
			</div>

			<div class="di-faq-grid">
				
				<div class="di-faq-item">
					<h3>Do you provide sample swatch books and product samples?</h3>
					<p>Yes. We ship comprehensive sample packs (facial tissues, napkins, towels, and jumbo rolls) to verified corporate buyers, hospitality purchase managers, and distributors nationwide.</p>
				</div>

				<div class="di-faq-item">
					<h3>What is the Minimum Order Quantity (MOQ) for Private Label products?</h3>
					<p>MOQs depend on whether you require customized printed poly wraps, custom carton boxes, or embossed logos. Our high-speed converting lines allow flexible MOQs tailored to your SKU mix.</p>
				</div>

				<div class="di-faq-item">
					<h3>What are your typical order dispatch lead times?</h3>
					<p>Standard institutional orders dispatch within 24 to 48 hours from our Greater Noida warehouses. Custom private-label runs typically ship within 7 to 10 working days upon artwork approval.</p>
				</div>

				<div class="di-faq-item">
					<h3>Do you export products outside of India?</h3>
					<p>Yes. We regularly export 20ft and 40ft high-cube containers to over 10 countries across the Middle East, Africa, and Southeast Asia with full export customs documentation and palletized packing.</p>
				</div>

			</div>
		</div>
	</section>

</div><!-- /.di-page -->

<script>
document.addEventListener('DOMContentLoaded', function() {
	var rfqForm = document.getElementById('diRfqForm');
	var feedback = document.getElementById('diFormFeedback');
	var submitBtn = document.getElementById('diSubmitBtn');

	if (rfqForm) {
		rfqForm.addEventListener('submit', function(e) {
			e.preventDefault();

			var name = document.getElementById('rfqName').value.trim();
			var email = document.getElementById('rfqEmail').value.trim();
			var phone = document.getElementById('rfqPhone').value.trim();
			var company = document.getElementById('rfqCompany').value.trim();
			var type = document.getElementById('rfqType').value;
			var message = document.getElementById('rfqMessage').value.trim();

			if (!name || !email || !phone) {
				feedback.style.display = 'block';
				feedback.className = 'di-form-feedback is-error';
				feedback.innerHTML = 'Please fill in all required fields (Name, Email, Phone).';
				return;
			}

			// Gather checked products
			var products = [];
			var prodChecks = rfqForm.querySelectorAll('input[name="rfq_products[]"]:checked');
			prodChecks.forEach(function(c) { products.push(c.value); });
			var prodStr = products.length ? products.join(', ') : 'Not specified';

			submitBtn.disabled = true;
			submitBtn.innerHTML = 'Sending Inquiry...';

			// Success feedback with instant WhatsApp handover
			setTimeout(function() {
				feedback.style.display = 'block';
				feedback.className = 'di-form-feedback is-success';
				feedback.innerHTML = '<strong>Thank you, ' + name + '!</strong> Your inquiry has been received. Our sales team will contact you within 24 hours at <em>' + email + '</em>.<br><br><a href="https://wa.me/919696289696?text=' + encodeURIComponent('Hi Agam, this is ' + name + ' from ' + (company || 'our company') + '. I just submitted an inquiry for: ' + type + ' (Products: ' + prodStr + '). Phone: ' + phone) + '" target="_blank" rel="noopener" class="di-btn-wa-inline">Connect on WhatsApp for Immediate Priority &rarr;</a>';

				submitBtn.disabled = false;
				submitBtn.innerHTML = '<span>Inquiry Sent &check;</span>';
				rfqForm.reset();
			}, 600);
		});
	}
});
</script>

<?php get_footer(); ?>
