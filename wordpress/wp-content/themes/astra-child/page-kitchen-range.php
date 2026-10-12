<?php
/**
 * Template Name: Kitchen Range
 *
 * Dedicated product category template for Kitchen Range
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_data = array(
	'slug'        => 'kitchen-range',
	'tag'         => 'CATEGORY 05 / CULINARY & FOOD PREPARATION HYGIENE',
	'title'       => 'Kitchen Range',
	'hero_title'  => 'Heavy-Duty Kitchen Towels, Cling Films & Food Foils',
	'hero_desc'   => 'Food-grade certified paper and packaging solutions for commercial hotel kitchens, bakeries, cloud kitchens, and home culinary enthusiasts. Ultra-absorbent grease towels and heavy-gauge aluminium wraps.',
	'image'       => 'DSC_5784-1024x1024-1.jpg',
	'hero_badges' => array(
		'100% Food Contact Safe & FDA Compliant',
		'Absorbs 4× Its Weight in Oil & Water',
		'Heavy-Gauge 11 – 18 Micron Aluminium Foil',
		'Anti-Fog Breathable Food-Grade Cling Film',
	),
	'features'    => array(
		array(
			'title' => 'Deep Oil & Grease Extraction',
			'desc'  => 'Capillary pocket embossing rapidly lifts hot oil from deep-fried foods without adhering to crispy batters or leaving soggy residue.',
		),
		array(
			'title' => 'Heavy Wet-Strength Scrubbing Power',
			'desc'  => 'Reinforced fiber web allows wet scrubbing on stainless steel counters, greasy stove tops, and non-stick pans without shredding.',
		),
		array(
			'title' => 'Microwave & Heat Tolerant',
			'desc'  => 'Paper towels are certified safe for microwave food reheating and grease splatters without any toxic chemical leaching.',
		),
		array(
			'title' => 'Commercial Cutter Box Packaging',
			'desc'  => 'Cling films and aluminium foils feature heavy-duty slide-cutter cartons for fast, safe, and tangle-free sheet slicing in bustling kitchens.',
		),
	),
	'skus'        => array(
		array(
			'code'    => 'KT-IMP',
			'name'    => 'Giant Kitchen Towel Roll (2-Ply)',
			'desc'    => 'Extra-large jumbo roll with 100 deep-embossed sheets. The go-to roll for busy residential and commercial cooking spaces.',
			'ply'     => '2-Ply Heavy Embossed',
			'sheets'  => '100 Sheets / Giant Roll (22×23 cm)',
			'gsm'     => '2×21 GSM (42 GSM Total)',
			'packing' => '24 Rolls / Master Carton',
			'badge'   => 'Bestseller',
		),
		array(
			'code'    => 'KT-4PLY',
			'name'    => 'Heavy-Duty 4-Ply Scrubbing Towel',
			'desc'    => 'Industrial culinary towel boasting extreme wet-strength. Replaces cloth rags for wiping grease, grills, and raw prep surfaces.',
			'ply'     => '4-Ply Industrial Strength',
			'sheets'  => '60 Giant Sheets / Roll',
			'gsm'     => '4×18 GSM (72 GSM Total)',
			'packing' => '18 Rolls / Case',
			'badge'   => '4-Ply Power',
		),
		array(
			'code'    => 'KT-3P',
			'name'    => 'Consumer Kitchen Trio Pack',
			'desc'    => 'Convenient 3-roll consumer retail pack wrapped in vibrant moisture-resistant poly film with carry handle.',
			'ply'     => '2-Ply Consumer',
			'sheets'  => '60 Sheets / Roll (3 Rolls/Pack)',
			'gsm'     => '2×20 GSM',
			'packing' => '12 Packs (36 Rolls / Case)',
			'badge'   => 'Retail Pack',
		),
		array(
			'code'    => 'CF-100MTR',
			'name'    => 'Commercial Food Cling Film (100M)',
			'desc'    => 'Professional food-grade cling film with superior stretch and seal. Keeps sliced fruits, doughs, and prepped ingredients fresh.',
			'ply'     => 'Food Grade PE / PVC',
			'sheets'  => '300 mm Width × 100 Meters Length',
			'gsm'     => '10 Micron High Stretch',
			'packing' => '12 Rolls / Cutter Box Case',
			'badge'   => 'Chef Grade',
		),
		array(
			'code'    => 'CF-IMP FOOD WRAP',
			'name'    => 'Master Wrap Food Film (300M)',
			'desc'    => 'Heavy commercial cling wrap with slide cutter for high-throughput restaurant kitchens, butcheries, and catering services.',
			'ply'     => 'Commercial Stretch Film',
			'sheets'  => '450 mm Width × 300 Meters',
			'gsm'     => '11 Micron High Clarity',
			'packing' => '6 Rolls / Heavy Cutter Case',
			'badge'   => '300M Master',
		),
		array(
			'code'    => 'AF-1KG & AF-9MTR',
			'name'    => 'Heavy-Gauge Aluminium Foil Rolls',
			'desc'    => 'Pure aluminium food foil for baking, grilling, wrapping, and hot delivery packaging. Temperature resistant from -40°C to +220°C.',
			'ply'     => 'Pure Aluminium (99.5%)',
			'sheets'  => '1 Kg Master Roll / 9M & 18M Consumer Rolls',
			'gsm'     => '11 – 18 Micron Thickness',
			'packing' => '24 Consumer Rolls / 6 Master Rolls',
			'badge'   => 'Heat Resistant',
		),
	),
	'specs_matrix' => array(
		array(
			'param'         => 'Oil Absorbency Capacity',
			'commercial'    => '≥ 350% by dry weight',
			'premium'       => '≥ 450% by dry weight',
			'institutional' => '≥ 380% by dry weight',
		),
		array(
			'param'         => 'Wet Scrub Resistance',
			'commercial'    => 'Excellent (Zero Lint)',
			'premium'       => 'Superior 4-Ply Reinforced',
			'institutional' => 'Standard Industrial Duty',
		),
		array(
			'param'         => 'Food Safety Compliance',
			'commercial'    => 'FSSAI & FDA Food Safe',
			'premium'       => '100% Non-Toxic & Chlorine Free',
			'institutional' => 'Certified Food Contact Safe',
		),
		array(
			'param'         => 'Foil / Film Temperature Range',
			'commercial'    => '-20°C to +120°C (Film)',
			'premium'       => '-40°C to +220°C (Foil)',
			'institutional' => 'Freezer & Oven Safe (Foil)',
		),
	),
);

include get_stylesheet_directory() . '/template-parts/product-category-page.php';
