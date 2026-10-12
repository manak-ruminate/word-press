<?php
/**
 * Template Name: Toilet Rolls Range
 *
 * Dedicated product category template for Toilet Rolls
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_data = array(
	'slug'        => 'toilet-rolls',
	'tag'         => 'CATEGORY 04 / BATHROOM & SANITARY HYGIENE',
	'title'       => 'Toilet Rolls',
	'hero_title'  => 'Plush, Rapidly-Dissolving Toilet Rolls & Bath Tissue',
	'hero_desc'   => 'Gentle on skin yet 100% plumbing and septic safe. Manufactured with precision perforations and tight-wound cores. From household luxury 3-ply rolls to high-capacity commercial Jumbo Roll Tissue (JRT).',
	'image'       => 'DSC_5809-1024x1024-1.jpg',
	'hero_badges' => array(
		'100% Septic & Sewer Safe (Rapid Dissolve)',
		'Standard Household & Commercial JRT Formats',
		'Clean Easy-Tear Precision Perforations',
		'Ultra-Plush Feather-Soft Embossing',
	),
	'features'    => array(
		array(
			'title' => 'Fast-Breakdown Sewer Safety',
			'desc'  => 'Engineered with quick-dispersing cellulose that disintegrates within seconds of flushing, completely preventing plumbing blockages.',
		),
		array(
			'title' => 'Plump Cushion Embossing',
			'desc'  => 'Micro-cushion surface structure provides enhanced thickness, superior absorption, and comforting softness.',
		),
		array(
			'title' => 'Accurate Sheet Count Guarantee',
			'desc'  => 'Calibrated automated winders ensure honest sheet counts and consistent roll diameter with zero core collapse.',
		),
		array(
			'title' => 'Versatile Packaging Options',
			'desc'  => 'Individually wrapped paper bands for luxury hotels, shrink-wrapped 4/6/12 retail packs, or bulk industrial master cartons.',
		),
	),
	'skus'        => array(
		array(
			'code'    => 'TR-350P',
			'name'    => 'Luxury 3-Ply Bathroom Tissue',
			'desc'    => 'Flagship 3-ply ultra-soft toilet roll with delicate floral embossing. Designed for luxury residences and boutique hotels.',
			'ply'     => '3-Ply Ultra Soft',
			'sheets'  => '350 Sheets / Roll',
			'gsm'     => '3×15 GSM (45 GSM Total)',
			'packing' => '48 Rolls / Master Carton',
			'badge'   => '3-Ply Luxury',
		),
		array(
			'code'    => 'JRT',
			'name'    => 'Jumbo Roll Tissue (Commercial Bath Roll)',
			'desc'    => 'Massive 300-meter and 500-meter jumbo rolls for high-traffic washrooms in malls, airports, and universities.',
			'ply'     => '2-Ply Commercial',
			'sheets'  => '300 / 500 Meters Continuous',
			'gsm'     => '2×15.5 GSM',
			'packing' => '12 Rolls / Case',
			'badge'   => 'High Capacity',
		),
		array(
			'code'    => 'TR-100',
			'name'    => 'Everyday 2-Ply Household Roll',
			'desc'    => 'Reliable 100-gram household bath tissue offering an exceptional balance of softness, strength, and value.',
			'ply'     => '2-Ply Virgin Pulp',
			'sheets'  => '220 Sheets / Roll',
			'gsm'     => '2×15.0 GSM',
			'packing' => '60 Rolls / Carton',
			'badge'   => 'Everyday Choice',
		),
		array(
			'code'    => 'TR-INST',
			'name'    => 'Institutional AFH Bulk Pack',
			'desc'    => 'Individually wrapped or unwrapped hygiene rolls for institutional facilities, guest houses, and clinics.',
			'ply'     => '2-Ply Standard',
			'sheets'  => '180 – 200 Sheets / Roll',
			'gsm'     => '2×14.5 GSM',
			'packing' => '72 / 96 Rolls / Carton',
			'badge'   => 'Institutional',
		),
		array(
			'code'    => 'TR-6PACK & TR-10+2',
			'name'    => 'Retail Value Consumer Multipacks',
			'desc'    => 'Eye-catching printed polyethylene consumer packs with easy-carry handles for supermarket and retail distribution.',
			'ply'     => '2-Ply Consumer',
			'sheets'  => '200 Sheets / Roll',
			'gsm'     => '2×15.0 GSM',
			'packing' => '6 Packs / 12 Packs (Case of 72 rolls)',
			'badge'   => 'Retail Value',
		),
		array(
			'code'    => 'TR-76',
			'name'    => 'Mini Jumbo / Coreless High Efficiency',
			'desc'    => 'Compact coreless roll eliminating cardboard tube waste while packing 2× more paper into standard wall dispensers.',
			'ply'     => '2-Ply Coreless',
			'sheets'  => '150 Meters / Roll',
			'gsm'     => '2×15.5 GSM',
			'packing' => '24 Rolls / Master Carton',
			'badge'   => 'Coreless Eco',
		),
	),
	'specs_matrix' => array(
		array(
			'param'         => 'Core Diameter',
			'commercial'    => '42 mm Standard Core',
			'premium'       => '45 mm Heavy-Wall Embossed Core',
			'institutional' => '76 mm (JRT) / Coreless',
		),
		array(
			'param'         => 'Flush Dispersibility Time',
			'commercial'    => '< 45 seconds',
			'premium'       => '< 35 seconds',
			'institutional' => '< 50 seconds',
		),
		array(
			'param'         => 'Sheet Dimensions',
			'commercial'    => '100 mm × 110 mm',
			'premium'       => '100 mm × 115 mm',
			'institutional' => '95 mm × 100 mm / Continuous',
		),
		array(
			'param'         => 'Perforation Tensile',
			'commercial'    => 'Clean, snag-free tear',
			'premium'       => 'Micro-laser precision perforation',
			'institutional' => 'Standard industrial perforation',
		),
	),
);

include get_stylesheet_directory() . '/template-parts/product-category-page.php';
