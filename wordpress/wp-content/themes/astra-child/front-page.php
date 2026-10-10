<?php
/**
 * Attractive custom front page — original copy & layout.
 *
 * @package Astra_Child
 */

get_header();

$img = static function ( $file ) {
	return esc_url( di_asset( $file ) );
};

$arrow = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg>';
?>

<main class="di-home">
	<section class="di-hero" aria-label="Hero">
		<div class="di-hero__bg" aria-hidden="true">
			<img src="<?php echo $img( 'Add-a-subheading-9-2000x800.png' ); ?>" alt="" />
			<img src="<?php echo $img( '4-2000x800.png' ); ?>" alt="" />
			<img src="<?php echo $img( '2-2000x800.png' ); ?>" alt="" />
		</div>
		<div class="di-hero__mesh" aria-hidden="true"></div>
		<div class="di-hero__grain" aria-hidden="true"></div>
		<div class="di-hero__inner">
			<span class="di-pill">Crafted in India · Trusted worldwide</span>
			<h1>Ruminate Industries</h1>
			<p>Softness you notice. Strength you can count on — tissue & hygiene for modern living and work.</p>
			<div class="di-actions">
				<a class="di-btn di-btn--copper" href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>">Shop the range <?php echo $arrow; ?></a>
				<a class="di-btn di-btn--line" href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>">Request a quote</a>
			</div>
		</div>
	</section>

	<section class="di-section" style="padding-top:0;padding-bottom:0">
		<div class="di-wrap">
			<div class="di-features di-reveal">
				<article class="di-feature">
					<div class="di-feature__icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l2.2 4.5L19 8.2l-3.5 3.4.8 4.9L12 14.8 7.7 16.5l.8-4.9L5 8.2l4.8-.7L12 3z"/></svg>
					</div>
					<h3>Private label ready</h3>
					<p>Flexible SKUs and packaging so your brand stays front and centre.</p>
				</article>
				<article class="di-feature">
					<div class="di-feature__icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19V5h4v14H4zm6 0V9h4v10h-4zm6 0v-7h4v7h-4z"/></svg>
					</div>
					<h3>High-capacity plant</h3>
					<p>Scale with demand — steady output for retail and institutional orders.</p>
				</article>
				<article class="di-feature">
					<div class="di-feature__icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8"/><path d="M12 8v4l3 2"/></svg>
					</div>
					<h3>On-time delivery</h3>
					<p>Clear timelines and dependable logistics across India and export markets.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="di-section">
		<div class="di-wrap di-about di-reveal">
			<div class="di-about__gallery">
				<figure>
					<img src="<?php echo $img( 'DSC_5830-scaled.jpg' ); ?>" alt="Production floor" />
					<div class="di-float-chip"><strong>1985</strong> roots in quality</div>
				</figure>
				<figure>
					<img src="<?php echo $img( 'DSC_5745-scaled.jpg' ); ?>" alt="Finished products" />
				</figure>
				<figure>
					<img src="<?php echo $img( 'professional-scaled-1.jpg' ); ?>" alt="Team and facility" />
				</figure>
			</div>
			<div>
				<p class="di-label">Who we are</p>
				<h2>Hygiene, elevated.</h2>
				<p class="di-text">We design tissue products that feel refined in the hand and hold up in real-world use — from guest rooms to busy washrooms.</p>
				<p class="di-text">Retail packs, institutional rolls, and kitchen companions come from one partner who understands both shelf appeal and operational pace.</p>
				<p style="margin-top:28px">
					<a class="di-btn di-btn--dark" href="<?php echo esc_url( home_url( '/index.php/about-us/' ) ); ?>">Our story <?php echo $arrow; ?></a>
				</p>
			</div>
		</div>
	</section>

	<section class="di-section di-section--night">
		<div class="di-wrap di-reveal">
			<p class="di-label">By the numbers</p>
			<h2 style="max-width:14ch;margin-bottom:36px">Momentum you can measure</h2>
			<div class="di-stats">
				<div class="di-stat"><strong data-count="40">40+</strong><span>Years of craft</span></div>
				<div class="di-stat"><strong data-count="500">500+</strong><span>Active partners</span></div>
				<div class="di-stat"><strong data-count="10">10+</strong><span>Export markets</span></div>
				<div class="di-stat"><strong data-count="125">125K</strong><span>Dispensers placed</span></div>
			</div>
		</div>
	</section>

	<section class="di-section di-section--foam">
		<div class="di-wrap">
			<div class="di-head-row di-reveal">
				<div>
					<p class="di-label">Collection</p>
					<h2>Find your fit</h2>
				</div>
				<a class="di-btn di-btn--dark" href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>">All products <?php echo $arrow; ?></a>
			</div>
			<div class="di-products di-reveal">
				<?php
				$products = array(
					array( 'Facial Tissues', 'facial-tissues', 'DSC_5745-scaled.jpg', 'Everyday softness for desks and guest amenities.' ),
					array( 'Paper Napkins', 'paper-napkins', 'DSC_5786-1024x1024-1.jpg', 'From casual dining to polished table settings.' ),
					array( 'Toilet Rolls', 'toilet-rolls', 'DSC_5809-1024x1024-1.jpg', 'Home comfort and high-traffic institutional packs.' ),
					array( 'Paper Towels', 'paper-towels', 'DSC_5828-1024x1024-1.jpg', 'Absorbency that keeps washrooms running clean.' ),
					array( 'Kitchen Range', 'kitchen-range', 'DSC_5784-1024x1024-1.jpg', 'Wraps and foils that support busy kitchens.' ),
					array( 'Hospital Range', 'hospital-range', 'healthcare-scaled-1.jpg', 'Hygiene-focused options for care environments.' ),
				);
				foreach ( $products as $p ) :
					?>
					<a class="di-product" href="<?php echo esc_url( home_url( '/index.php/' . $p[1] . '/' ) ); ?>">
						<div class="di-product__media">
							<img src="<?php echo $img( $p[2] ); ?>" alt="<?php echo esc_attr( $p[0] ); ?>" />
						</div>
						<div class="di-product__body">
							<h3><?php echo esc_html( $p[0] ); ?></h3>
							<p><?php echo esc_html( $p[3] ); ?></p>
						</div>
						<span class="di-product__go" aria-hidden="true"><?php echo $arrow; ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="di-section">
		<div class="di-wrap di-reveal">
			<p class="di-label">Why Daffodil</p>
			<h2 style="max-width:16ch;margin-bottom:32px">More than a supplier</h2>
			<div class="di-why">
				<article class="di-why__item">
					<h3>Quality you can feel</h3>
					<p>Careful fibre selection and finishing for softness without sacrificing performance.</p>
				</article>
				<article class="di-why__item">
					<h3>Built for brands</h3>
					<p>Private-label pathways that keep your packaging and positioning consistent.</p>
				</article>
				<article class="di-why__item">
					<h3>Operational calm</h3>
					<p>Predictable lead times so facilities and retailers stay stocked with less stress.</p>
				</article>
				<article class="di-why__item">
					<h3>Thoughtful growth</h3>
					<p>Options that help you move toward smarter, more responsible paper use.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="di-section di-section--foam">
		<div class="di-wrap di-reveal">
			<p class="di-label">Where we show up</p>
			<h2 style="max-width:14ch;margin-bottom:32px">Spaces that stay fresh</h2>
			<div class="di-markets">
				<?php
				$markets = array(
					array( 'Workplaces', 'corporate.jpg', 'Offices that put hygiene on the agenda.' ),
					array( 'Hospitality', 'horeca_1.jpg', 'Hotels and dining where first impressions matter.' ),
					array( 'Healthcare', 'healthcare-scaled-1.jpg', 'Care settings that demand consistency.' ),
					array( 'Travel', 'aviation.jpg', 'Amenity experiences that feel considered.' ),
					array( 'Retail & commerce', 'retail-scaled-1.jpg', 'Shelves and digital carts that need reliable SKUs.' ),
					array( 'Wholesale', 'Ecommerce-scaled.jpg', 'Volume partners who move product fast.' ),
				);
				foreach ( $markets as $m ) :
					?>
					<article class="di-market">
						<img src="<?php echo $img( $m[1] ); ?>" alt="<?php echo esc_attr( $m[0] ); ?>" />
						<div class="di-market__shade"></div>
						<div class="di-market__body">
							<h3><?php echo esc_html( $m[0] ); ?></h3>
							<p><?php echo esc_html( $m[2] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="di-section">
		<div class="di-wrap di-quote di-reveal">
			<blockquote>Better hygiene choices start with a partner who listens — then delivers the right range for your market.</blockquote>
			<a class="di-btn di-btn--copper" href="<?php echo esc_url( home_url( '/index.php/become-a-distributor/' ) ); ?>">Become a partner <?php echo $arrow; ?></a>
		</div>
	</section>

	<section class="di-section di-section--foam" id="contact">
		<div class="di-wrap di-contact di-reveal">
			<div class="di-contact__card">
				<p class="di-label">Contact</p>
				<h2>Let’s talk supply</h2>
				<p>Greater Noida works · Okhla corporate office</p>
				<p><a href="mailto:Agamkals@daffodilindia.net">Agamkals@dword.net</a></p>
				<p><a href="tel:+919696289696">+911234567890</a></p>
				<p style="margin-top:24px">
					<a class="di-btn di-btn--copper" href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>">Open contact page <?php echo $arrow; ?></a>
				</p>
			</div>
			<div class="di-map-wrap">
				<iframe class="di-map" title="Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Y-18%20Okhla%20Industrial%20Area%20phase-2%20New%20Delhi&amp;output=embed"></iframe>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
