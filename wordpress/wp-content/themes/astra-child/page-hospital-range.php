<?php
/**
 * Template Name: Hospital Range
 *
 * Dedicated product category template for Hospital Range
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_data = array(
	'slug'        => 'hospital-range',
	'tag'         => 'CATEGORY 06 / HEALTHCARE & CLINICAL SANITATION',
	'title'       => 'Hospital Range',
	'hero_title'  => 'Medical-Grade Examination Paper & Clinical Wipes',
	'hero_desc'   => 'Strictly certified hygiene products for hospitals, multispecialty clinics, diagnostic laboratories, and patient care centers where sterility, cross-contamination control, and lint-free purity are critical.',
	'image'       => 'healthcare-scaled-1.jpg',
	'hero_badges' => array(
		'Medical Grade Hypoallergenic Purity',
		'Continuous Perforated Couch Paper (50cm & 60cm)',
		'Fluid Barrier Poly-Backed Examination Sheets',
		'Non-Toxic Chlorine-Free Manufacturing',
	),
	'features'    => array(
		array(
			'title' => 'Cross-Infection Prevention',
			'desc'  => 'Disposable single-use examination paper creates an impenetrable biological barrier between patients and clinical couches.',
		),
		array(
			'title' => 'Lint-Free Hypoallergenic Purity',
			'desc'  => 'Manufactured without optical brighteners, dyes, or synthetic fragrances to safeguard sensitive, allergy-prone patient skin.',
		),
		array(
			'title' => 'High Wet-Tensile Integrity',
			'desc'  => 'Engineered with high burst pressure so bed rolls do not tear or shift under patient movement during ultrasound or physical exams.',
		),
		array(
			'title' => 'Fluid Absorption with Optional Poly-Back',
			'desc'  => 'Available with absorbent pure cellulose top layer and waterproof polyethylene backing to stop clinical fluid seep-through.',
		),
	),
	'skus'        => array(
		array(
			'code'    => 'Medical Couch Rolls',
			'name'    => 'Continuous Perforated Couch Paper',
			'desc'    => 'Standard 50 cm & 60 cm width couch paper rolls with precision 50 cm perforations. Easy dispenser roll change for examination beds.',
			'ply'     => '1-Ply / 2-Ply Pure Cellulose',
			'sheets'  => '50 cm Width × 50 / 100 Meters Length',
			'gsm'     => '36 – 40 GSM High Density',
			'packing' => '12 Rolls / Poly-Wrapped Carton',
			'badge'   => 'Clinical Essential',
		),
		array(
			'code'    => 'Examination Sheets',
			'name'    => 'Hygienic Disposable Bed Sheets',
			'desc'    => 'Pre-cut medical bed covers tailored for inpatient hospital beds, day-care surgical stretchers, and diagnostic scanning tables.',
			'ply'     => '2-Ply Pure Pulp + Poly Barrier',
			'sheets'  => '80 cm × 200 cm (Custom Sizes)',
			'gsm'     => '42 GSM Fluid-Resistant',
			'packing' => '100 Sheets / Pack (5 Packs/Case)',
			'badge'   => 'Barrier Tech',
		),
		array(
			'code'    => 'Patient Wipes',
			'name'    => 'Hypoallergenic Soft Touch Patient Wipes',
			'desc'    => 'Extra-delicate dry wipes for nursing care, patient bathing, cosmetic dermatology clinics, and infant nursery hygiene.',
			'ply'     => '2-Ply / 4-Ply Airlaid Touch',
			'sheets'  => '30×30 cm (100 wipes/sleeve)',
			'gsm'     => '50 GSM Plush Cotton-Feel',
			'packing' => '20 Sleeves / Case (2,000 wipes)',
			'badge'   => 'Ultra Gentle',
		),
		array(
			'code'    => 'Clinical Hand Towels',
			'name'    => 'Sterile Scrub & Hand Drying Towels',
			'desc'    => 'Microbiologically tested M-Fold hand towels for surgeon scrubbing bays, dental treatment rooms, and cleanrooms.',
			'ply'     => '2-Ply Sterilized Cellulose',
			'sheets'  => '100 Towels / Sleeve (21×24 cm)',
			'gsm'     => '2×20 GSM (40 GSM Total)',
			'packing' => '20 Sleeves / Case (2,000 towels)',
			'badge'   => 'Sterile Scrub',
		),
		array(
			'code'    => 'Dental Bibs',
			'name'    => 'Poly-Laminated Dental & Patient Bibs',
			'desc'    => '2-Ply absorbent paper laminated with 1-ply waterproof polyethylene film. Protects patient clothing from water and medication drips.',
			'ply'     => '2-Ply Tissue + 1-Ply PE Film',
			'sheets'  => '33 cm × 45 cm (500 pcs/box)',
			'gsm'     => 'Combined 48 GSM',
			'packing' => '1,000 Bibs / Master Carton',
			'badge'   => 'Dental Grade',
		),
		array(
			'code'    => 'Sanitary Disposal Rolls',
			'name'    => 'Heavy Sterilization & Lab Rolls',
			'desc'    => 'Sterilized continuous roll paper for diagnostic centrifuges, pathology bench tops, and clinical biohazard prep areas.',
			'ply'     => '2-Ply Heavy Absorbent',
			'sheets'  => '25 cm Width × 100 Meters',
			'gsm'     => '44 GSM Heavy Lab Spec',
			'packing' => '12 Rolls / Case',
			'badge'   => 'Diagnostic Lab',
		),
	),
	'specs_matrix' => array(
		array(
			'param'         => 'Microbiological Cleanliness',
			'commercial'    => 'Standard Hygiene ISO 9001',
			'premium'       => 'Hospital Grade ISO 13485 Standards',
			'institutional' => 'Microbiologically Tested & Safe',
		),
		array(
			'param'         => 'Latex & Heavy Metal Content',
			'commercial'    => '100% Latex-Free',
			'premium'       => '100% Hypoallergenic & Chemical Free',
			'institutional' => 'Latex & Fragrance Free',
		),
		array(
			'param'         => 'Cross-Infection Barrier',
			'commercial'    => 'Mechanical Barrier (Cellulose)',
			'premium'       => 'Liquid Barrier (Poly Laminated)',
			'institutional' => 'High Wet Tensile Shield',
		),
		array(
			'param'         => 'Disposal & Biodegradability',
			'commercial'    => 'Biodegradable (Dry Paper)',
			'premium'       => 'Clinical Waste Compliant',
			'institutional' => 'Eco-Incineration Safe',
		),
	),
);

include get_stylesheet_directory() . '/template-parts/product-category-page.php';
