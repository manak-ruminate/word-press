<?php
/**
 * Template Name: Facial Tissues Range
 *
 * Dedicated product category template for Facial Tissues
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_data = array(
	'slug'        => 'facial-tissues',
	'tag'         => 'CATEGORY 01 / FACIAL HYGIENE',
	'title'       => 'Facial Tissues',
	'hero_title'  => 'Ultra-Soft, Skin-Friendly Facial Tissues',
	'hero_desc'   => 'Engineered with 100% pure virgin wood pulp for delicate facial touch, soothing softness, and high wet strength. Designed for luxury hospitality guest rooms, corporate workspaces, and FMCG retail distribution.',
	'image'       => 'DSC_5745-scaled.jpg',
	'hero_badges' => array(
		'100% Virgin Softwood Pulp',
		'Dermatologically Tested & Hypoallergenic',
		'Optical Brightener Free (OBA-Free)',
		'Private Label Box Branding Available',
	),
	'features'    => array(
		array(
			'title' => 'Ultra-Gentle on Sensitive Skin',
			'desc'  => 'Formulated with ultra-fine fibers and lotion-compatible finishing that prevents skin irritation even during cold and allergy seasons.',
		),
		array(
			'title' => 'Lint-Free & Dust-Controlled',
			'desc'  => 'Advanced dedusting technology ensures zero particle fallout on spectacle lenses, vanity mirrors, or dark suits.',
		),
		array(
			'title' => 'High Tensile 2-Ply & 3-Ply Strength',
			'desc'  => 'Embossed micro-bonds lock plies together so tissues do not shred or tear under moisture during facial cleansing.',
		),
		array(
			'title' => 'Interleaved V-Fold Dispensing',
			'desc'  => 'Smooth one-sheet-at-a-time pop-up delivery prevents cross-contamination and reduces wasted pulls.',
		),
	),
	'skus'        => array(
		array(
			'code'    => 'FT-Gold',
			'name'    => 'Luxury Gold Series Box',
			'desc'    => 'Flagship luxury flat box with gold foil stamping for 5-star hotel rooms, executive suites, and premium retail shelves.',
			'ply'     => '2-Ply / 3-Ply Virgin',
			'sheets'  => '100 / 200 Pulls (20×20 cm)',
			'gsm'     => '14.5 GSM per ply',
			'packing' => '48 Boxes / Master Carton',
			'badge'   => 'Bestseller',
		),
		array(
			'code'    => 'FT-Silky',
			'name'    => 'Silky Touch Lotion Box',
			'desc'    => 'Enriched with soothing micro-emollients for maximum velvety softness, tailored for cosmetic vanity care.',
			'ply'     => '2-Ply Ultra-Soft',
			'sheets'  => '150 Pulls (20×21 cm)',
			'gsm'     => '14.0 GSM per ply',
			'packing' => '48 Boxes / Master Carton',
			'badge'   => 'Ultra Soft',
		),
		array(
			'code'    => 'FT-INST',
			'name'    => 'Institutional Economy Series',
			'desc'    => 'Cost-optimized white dispenser carton built for airlines, hospitals, IT parks, and corporate office desks.',
			'ply'     => '2-Ply Pure Pulp',
			'sheets'  => '100 Pulls (19×20 cm)',
			'gsm'     => '13.5 GSM per ply',
			'packing' => '72 Boxes / Master Carton',
			'badge'   => 'Institutional',
		),
		array(
			'code'    => 'FT-Extra Soft',
			'name'    => 'Family Pack Flat Box',
			'desc'    => 'Everyday household tissue pack combining generous 200 sheet capacity with gentle everyday affordability.',
			'ply'     => '2-Ply Everyday',
			'sheets'  => '200 Pulls (20×20 cm)',
			'gsm'     => '14.0 GSM per ply',
			'packing' => '36 Boxes / Master Carton',
			'badge'   => 'Family Value',
		),
		array(
			'code'    => 'FT-IMP NEW',
			'name'    => 'Export-Grade Boutique Cube Box',
			'desc'    => 'Modern compact cube format with small footprint. Favored for vehicle cup holders, nightstands, and boutique salons.',
			'ply'     => '2-Ply Luxury',
			'sheets'  => '80 Pulls (20×20 cm)',
			'gsm'     => '15.0 GSM per ply',
			'packing' => '48 Cubes / Master Carton',
			'badge'   => 'Cube Format',
		),
		array(
			'code'    => 'FT-LARGE IMP',
			'name'    => 'Executive High-Capacity Series',
			'desc'    => 'Extra-large format tissue sheet offering substantial hand feel and maximum absorbency for VIP boardrooms.',
			'ply'     => '3-Ply Premium',
			'sheets'  => '250 Pulls (21×22 cm)',
			'gsm'     => '15.0 GSM per ply',
			'packing' => '24 Boxes / Master Carton',
			'badge'   => 'VIP Grade',
		),
	),
	'specs_matrix' => array(
		array(
			'param'         => 'Base Fiber Composition',
			'commercial'    => '100% Virgin Bleached Pulp',
			'premium'       => '100% Premium Softwood Virgin Pulp',
			'institutional' => '100% Pure Virgin / Clean Select',
		),
		array(
			'param'         => 'Basis Weight (GSM)',
			'commercial'    => '13.5 GSM per ply',
			'premium'       => '14.5 – 15.0 GSM per ply',
			'institutional' => '13.0 – 13.5 GSM per ply',
		),
		array(
			'param'         => 'Tensile Strength (MD / CD)',
			'commercial'    => '≥ 1.8 N / ≥ 0.9 N',
			'premium'       => '≥ 2.2 N / ≥ 1.2 N',
			'institutional' => '≥ 1.7 N / ≥ 0.8 N',
		),
		array(
			'param'         => 'Water Absorbency Speed',
			'commercial'    => '< 3.0 seconds',
			'premium'       => '< 2.0 seconds',
			'institutional' => '< 3.5 seconds',
		),
		array(
			'param'         => 'Brightness / Whiteness',
			'commercial'    => '86% – 88%',
			'premium'       => '90% – 92%',
			'institutional' => '84% – 86%',
		),
	),
);

include get_stylesheet_directory() . '/template-parts/product-category-page.php';
