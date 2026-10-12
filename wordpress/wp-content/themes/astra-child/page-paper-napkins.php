<?php
/**
 * Template Name: Paper Napkins Range
 *
 * Dedicated product category template for Paper Napkins
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_data = array(
	'slug'        => 'paper-napkins',
	'tag'         => 'CATEGORY 02 / DINING & BANQUET HYGIENE',
	'title'       => 'Paper Napkins',
	'hero_title'  => 'Premium Dining & Dispenser Paper Napkins',
	'hero_desc'   => 'From 5-star hotel banquet table settings to high-turnover quick service restaurants (QSR) and catering. Available with bespoke multi-color flexo logo branding, deep border embossing, and natural eco kraft.',
	'image'       => 'DSC_5786-1024x1024-1.jpg',
	'hero_badges' => array(
		'Food-Grade Certified & Non-Toxic Inks',
		'1/4 Fold, 1/8 Book Fold & Dispenser Fold',
		'Custom Logo Printing Up to 4 Colors',
		'High Wet-Strength & Cloth-Like Drape',
	),
	'features'    => array(
		array(
			'title' => 'Cloth-Like Luxurious Hand Feel',
			'desc'  => 'Our deep point-to-point and border embossing replicates fine linen drape while delivering single-use hygiene convenience.',
		),
		array(
			'title' => 'Food-Contact Safe Inks',
			'desc'  => 'Custom branded logo printing utilizes odorless, heavy-metal-free, water-based food grade flexographic inks.',
		),
		array(
			'title' => 'High Wet Absorption & Grease Resistance',
			'desc'  => 'Absorbs gravy spills and dining grease without disintegrating or leaving messy paper lint on guest fingers.',
		),
		array(
			'title' => 'Eco-Friendly Kraft & Virgin Options',
			'desc'  => 'Available in crisp ultra-white virgin tissue or 100% natural unbleached brown kraft for sustainability-minded brands.',
		),
	),
	'skus'        => array(
		array(
			'code'    => 'PN DINNER',
			'name'    => 'Luxury Banquet Dinner Napkins',
			'desc'    => 'Large format 40×40 cm & 33×33 cm 2-ply dinner napkin with 1/8 book fold or 1/4 quarter fold. The premier choice for fine dining & hotels.',
			'ply'     => '2-Ply / 3-Ply Virgin',
			'sheets'  => '40×40 cm / 33×33 cm (100 pcs/pack)',
			'gsm'     => '18.0 GSM per ply',
			'packing' => '20 Packs / Master Carton (2,000 pcs)',
			'badge'   => 'Fine Dining',
		),
		array(
			'code'    => 'PN 30X30 2PLY',
			'name'    => 'Everyday Table Napkins',
			'desc'    => 'Standard 30×30 cm dining table napkin offering ideal absorbency and practical footprint for casual dining & cafes.',
			'ply'     => '2-Ply Soft Touch',
			'sheets'  => '30×30 cm (100 pcs/pack)',
			'gsm'     => '16.5 GSM per ply',
			'packing' => '24 Packs / Master Carton (2,400 pcs)',
			'badge'   => 'Bestseller',
		),
		array(
			'code'    => 'PN VELVET',
			'name'    => 'Velvet Touch Plush Embossed',
			'desc'    => 'Specialty micro-embossed napkin with cloud-soft texture and rich tactile presence. Designed for weddings and luxury events.',
			'ply'     => '2-Ply Velvet',
			'sheets'  => '33×33 cm (50 pcs/pack)',
			'gsm'     => '19.0 GSM per ply',
			'packing' => '30 Packs / Master Carton',
			'badge'   => 'Luxury Drape',
		),
		array(
			'code'    => 'PN-VALUE',
			'name'    => 'High-Volume Dispenser Napkins',
			'desc'    => 'Interfolded counter and tabletop dispenser napkin engineered for one-at-a-time pull to cut consumption in food courts.',
			'ply'     => '1-Ply High Wet Strength',
			'sheets'  => '27×30 cm (250 pcs/sleeve)',
			'gsm'     => '17.0 GSM',
			'packing' => '24 Sleeves / Master Carton (6,000 pcs)',
			'badge'   => 'Cost-in-Use',
		),
		array(
			'code'    => 'PN-ECO',
			'name'    => 'Natural Unbleached Brown Kraft',
			'desc'    => '100% natural, chlorine-free kraft pulp napkin. Provides rustic organic appeal and verifiable eco-credentials.',
			'ply'     => '1-Ply & 2-Ply Kraft',
			'sheets'  => '30×30 cm (100 pcs/pack)',
			'gsm'     => '18.0 GSM',
			'packing' => '24 Packs / Master Carton',
			'badge'   => 'Eco-Friendly',
		),
		array(
			'code'    => 'PN-PARTY PACK',
			'name'    => 'Retail Party Pack & Cocktail Napkins',
			'desc'    => 'Square 25×25 cm cocktail beverage napkins and colorful consumer packs for bar counters, caterers, and retail stores.',
			'ply'     => '2-Ply Beverage',
			'sheets'  => '25×25 cm (50 / 100 pcs/pack)',
			'gsm'     => '17.5 GSM per ply',
			'packing' => '40 Packs / Master Carton',
			'badge'   => 'Cocktail / Bar',
		),
	),
	'specs_matrix' => array(
		array(
			'param'         => 'Sheet Dimensions Available',
			'commercial'    => '27×30 cm & 30×30 cm',
			'premium'       => '33×33 cm & 40×40 cm',
			'institutional' => '25×30 cm Dispenser Interfold',
		),
		array(
			'param'         => 'Basis Weight (GSM)',
			'commercial'    => '16.0 – 17.0 GSM',
			'premium'       => '18.0 – 19.5 GSM',
			'institutional' => '16.5 GSM (Single-Ply)',
		),
		array(
			'param'         => 'Embossing Pattern',
			'commercial'    => 'Perimeter Border Emboss',
			'premium'       => 'Full Surface Micro-Pin / Floral',
			'institutional' => 'High Grip Dispenser Texture',
		),
		array(
			'param'         => 'Ink Certification',
			'commercial'    => 'Food Contact Certified',
			'premium'       => 'Heavy Metal Free Food Grade',
			'institutional' => 'Natural / Plain White',
		),
	),
);

include get_stylesheet_directory() . '/template-parts/product-category-page.php';
