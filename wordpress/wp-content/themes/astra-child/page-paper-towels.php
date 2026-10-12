<?php
/**
 * Template Name: Paper Towels Range
 *
 * Dedicated product category template for Paper Towels
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_data = array(
	'slug'        => 'paper-towels',
	'tag'         => 'CATEGORY 03 / HAND DRYING & WASHROOM AFH',
	'title'       => 'Paper Towels',
	'hero_title'  => 'High-Absorbency Commercial Paper Towels',
	'hero_desc'   => 'Heavy-duty wet strength hand drying solutions for commercial offices, airports, manufacturing plants, and healthcare facilities. Universal dispenser compatible with rapid water absorption channels.',
	'image'       => 'DSC_5828-1024x1024-1.jpg',
	'hero_badges' => array(
		'1-Sheet-1-Dry Absorbency Tech',
		'M-Fold, C-Fold & Hardwound Roll (HRT)',
		'Universal Commercial Dispenser Compatible',
		'Heavy-Duty Wet Strength Resin Formulated',
	),
	'features'    => array(
		array(
			'title' => 'One-Sheet-One-Dry Efficiency',
			'desc'  => 'Engineered capillary air pockets absorb hand moisture in under 2 seconds, cutting restroom towel usage by up to 35%.',
		),
		array(
			'title' => 'Superior Wet Tensile Integrity',
			'desc'  => 'Formulated with specialized wet-strength agents so sheets will not tear, pill, or leave soggy fragments on wet hands.',
		),
		array(
			'title' => 'Universal Dispenser Fitment',
			'desc'  => 'Standardized folding dimensions guarantee jam-free dispensing in all leading Kimberly-Clark, Tork, and generic stainless steel dispensers.',
		),
		array(
			'title' => 'Hygienic Touch-Free Delivery',
			'desc'  => 'Interleaved folding presents only the next sheet to the user, eliminating cross-contamination from dispenser surfaces.',
		),
	),
	'skus'        => array(
		array(
			'code'    => 'MF-100',
			'name'    => 'Standard Multi-Fold (M-Fold) Towels',
			'desc'    => 'Our most popular commercial hand towel. 2-ply embossed interfold delivering reliable drying in corporate washrooms.',
			'ply'     => '2-Ply Pure Cellulose',
			'sheets'  => '100 Sheets / Sleeve (21×22 cm)',
			'gsm'     => '2×18 GSM (36 GSM Total)',
			'packing' => '20 Sleeves / Case (2,000 towels)',
			'badge'   => 'Bestseller',
		),
		array(
			'code'    => 'MF-150',
			'name'    => 'High-Capacity M-Fold Economy Sleeve',
			'desc'    => 'High-count 150-sheet sleeve minimizing washroom maintenance refill frequency in busy transit hubs and shopping centers.',
			'ply'     => '1-Ply / 2-Ply Hybrid',
			'sheets'  => '150 Sheets / Sleeve (21×21 cm)',
			'gsm'     => '38 GSM Single-Ply / 34 GSM 2-Ply',
			'packing' => '16 Sleeves / Case (2,400 towels)',
			'badge'   => 'High Volume',
		),
		array(
			'code'    => 'MF-125',
			'name'    => 'Executive Touch M-Fold Ultra White',
			'desc'    => 'Ultra-bright 92% whiteness premium hand towel with diamond waffle embossing for luxury executive restrooms and medical clinics.',
			'ply'     => '2-Ply Luxury Virgin',
			'sheets'  => '125 Sheets / Sleeve (21×23 cm)',
			'gsm'     => '2×20 GSM (40 GSM Total)',
			'packing' => '20 Sleeves / Case (2,500 towels)',
			'badge'   => 'Executive',
		),
		array(
			'code'    => 'HRT',
			'name'    => 'Hardwound Roll Towel (Continuous Roll)',
			'desc'    => 'Continuous high-capacity roll towel designed for automatic sensor dispensers and manual pull-lever mechanisms.',
			'ply'     => '1-Ply Heavy Duty',
			'sheets'  => '200 mm Roll Width × 150 / 300 Meters',
			'gsm'     => '40 – 42 GSM',
			'packing' => '6 Rolls / Master Carton',
			'badge'   => 'Continuous Roll',
		),
		array(
			'code'    => 'C-FOLD',
			'name'    => 'Traditional C-Fold Hand Towels',
			'desc'    => 'Heavy-gauge folded towel where sheets are stacked side by side. Extra broad drying surface for industrial workshops.',
			'ply'     => '1-Ply Heavy Absorbent',
			'sheets'  => '150 Sheets / Sleeve (24×33 cm)',
			'gsm'     => '42 GSM Heavy Weight',
			'packing' => '16 Sleeves / Case (2,400 towels)',
			'badge'   => 'Heavy Duty',
		),
	),
	'specs_matrix' => array(
		array(
			'param'         => 'Dispenser Standard',
			'commercial'    => 'Universal Multi-Fold Dispenser',
			'premium'       => 'Executive Slim-Fold / M-Fold',
			'institutional' => 'Automatic Sensor / Lever HRT',
		),
		array(
			'param'         => 'Total Grammage (GSM)',
			'commercial'    => '36.0 – 38.0 GSM',
			'premium'       => '40.0 – 42.0 GSM',
			'institutional' => '38.0 – 40.0 GSM',
		),
		array(
			'param'         => 'Water Absorption Time',
			'commercial'    => '< 2.5 seconds',
			'premium'       => '< 1.8 seconds',
			'institutional' => '< 3.0 seconds',
		),
		array(
			'param'         => 'Wet Tensile Strength (MD)',
			'commercial'    => '≥ 3.5 N',
			'premium'       => '≥ 4.5 N',
			'institutional' => '≥ 3.2 N',
		),
	),
);

include get_stylesheet_directory() . '/template-parts/product-category-page.php';
