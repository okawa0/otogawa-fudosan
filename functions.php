<?php
/**
 * Theme functions for Okazaki Fudosan.
 *
 * @package sample-fudosan
 */

function sample_fudosan_asset_version( $relative_path ) {
	$path = get_stylesheet_directory() . $relative_path;

	if ( file_exists( $path ) ) {
		return filemtime( $path );
	}

	return wp_get_theme()->get( 'Version' );
}

function sample_fudosan_enqueue_assets() {
	$theme_uri = get_stylesheet_directory_uri();

	wp_enqueue_style(
		'sample-fudosan-main',
		$theme_uri . '/assets/css/main.css',
		array(),
		sample_fudosan_asset_version( '/assets/css/main.css' )
	);

	wp_enqueue_script(
		'sample-fudosan-main',
		$theme_uri . '/assets/js/main.js',
		array(),
		sample_fudosan_asset_version( '/assets/js/main.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'sample_fudosan_enqueue_assets' );

remove_action( 'wp_head', 'wp_site_icon', 99 );

function sample_fudosan_print_site_icons() {
	$webp_icon_path = '/assets/images/favicon-v2.webp';
	$png_icon_path  = '/assets/images/favicon-v2.png';
	$webp_icon_url  = add_query_arg(
		'ver',
		sample_fudosan_asset_version( $webp_icon_path ),
		get_stylesheet_directory_uri() . $webp_icon_path
	);
	$png_icon_url   = add_query_arg(
		'ver',
		sample_fudosan_asset_version( $png_icon_path ),
		get_stylesheet_directory_uri() . $png_icon_path
	);
	?>
	<link rel="icon" href="<?php echo esc_url( $webp_icon_url ); ?>" type="image/webp">
	<link rel="icon" href="<?php echo esc_url( $png_icon_url ); ?>" type="image/png">
	<link rel="apple-touch-icon" href="<?php echo esc_url( $png_icon_url ); ?>">
	<?php
}
add_action( 'wp_head', 'sample_fudosan_print_site_icons', 20 );

function sample_fudosan_print_critical_css() {
	?>
	<style id="sample-fudosan-critical-css">
		:root{--text-heading:#102a4b;--text-dark:#0e1d32;--bg-page:#f6fbfd;--bg-card:#fff;--text-base:#2d4157;--primary:#123b6f;--primary-dark:#0c2d56;--secondary:#38b7c7;--secondary-bright:#9fe8ef;--border:#d4e9ee;--text-muted:#5f7488;--font-serif:"Shippori Mincho",serif;--font-sans:"Noto Sans JP",system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif}*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}body{font-family:var(--font-sans);font-size:15px;line-height:1.75;color:var(--text-base);background:var(--bg-page);-webkit-font-smoothing:antialiased}img,svg,video{display:block;max-width:100%;height:auto}a{color:var(--text-heading);text-decoration:none}ul,ol{list-style:none}.wrap{max-width:1180px;margin:0 auto;padding:0 16px}@media(min-width:768px){.wrap{padding:0 24px}}.topbar{background:var(--primary-dark);color:#eaf7fb;font-size:11px;border-bottom:1px solid hsla(0,0%,100%,.14)}.topbar .wrap{display:flex;justify-content:space-between;align-items:center;padding:6px 16px;flex-wrap:wrap;gap:8px}.topbar__biz{display:none;letter-spacing:.05em}.topbar__biz-highlight,.topbar__tel-link{color:var(--secondary-bright)}.topbar__tel{display:flex;align-items:center;gap:14px}.topbar__tel-label{color:rgba(234,247,251,.78)}.topbar__tel-link{font-weight:700;font-size:14px;letter-spacing:.04em}.site-header{border-bottom:1px solid var(--border);position:sticky;top:0;z-index:50;background:rgba(255,254,248,.97)}.site-header .wrap{display:flex;align-items:center;justify-content:space-between;padding:12px 16px;gap:16px}.logo{display:flex;align-items:center;gap:14px}.logo__mark{width:30px}.logo__name{font-family:var(--font-serif);font-size:18px;font-weight:700;color:var(--text-heading);letter-spacing:.08em;line-height:1.1}.logo__sub{font-size:10px;color:var(--text-muted);letter-spacing:.18em;margin-top:2px}.cta-header{background:var(--secondary-bright);color:var(--text-dark);padding:8px 14px;font-weight:700;font-size:12px;letter-spacing:.06em;border:1px solid var(--secondary)}.site-nav{background:#fff;border-top:1px solid var(--border);border-bottom:2px solid var(--border);box-shadow:0 2px 8px rgba(0,0,0,.06)}.site-nav__list{display:flex;max-width:1180px;margin:0 auto;padding:0;flex-wrap:wrap}.site-nav__item{flex:1 1 50%}.site-nav__link{display:block;color:#333;text-align:center;padding:11px 6px;font-size:12px;letter-spacing:.08em;font-weight:500;border-right:1px solid rgba(0,0,0,.08);border-bottom:1px solid rgba(0,0,0,.08);position:relative}.site-nav__link.active{color:var(--primary);font-weight:700}.site-nav__link.active::after{content:"";position:absolute;left:0;right:0;bottom:0;height:3px;background:var(--primary)}.hero{position:relative;background:linear-gradient(120deg,#f7fcfd 0%,#edf8fb 58%,#e3f5f8 100%);color:var(--text-base);overflow:hidden;border-bottom:4px solid var(--secondary-bright)}.hero__bg{position:absolute;inset:0;z-index:0;overflow:hidden}.hero__bg img{width:100%;height:100%;object-fit:cover;object-position:center}.hero .wrap{display:grid;grid-template-columns:1fr;gap:32px;padding:36px 16px;align-items:center;position:relative;z-index:2}.hero__content{background:rgba(255,255,255,.94);border:1px solid rgba(18,59,111,.12);padding:22px 18px}.hero__eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:12px;letter-spacing:.3em;color:var(--primary);margin-bottom:18px;font-weight:500}.hero__title{font-family:var(--font-serif);font-size:clamp(16px,5.6vw,46px);line-height:1.4;letter-spacing:.04em;font-weight:800;margin-bottom:20px;color:var(--primary);white-space:nowrap}.hero__accent{color:var(--secondary)}.hero__small{font-size:clamp(11px,3.4vw,28px);display:block;margin-top:8px;font-weight:600;color:#28405c;white-space:nowrap}.hero__lead{font-size:14px;line-height:1.95;color:#28405c;margin-bottom:28px;max-width:520px}.hero__actions{display:flex;gap:12px;flex-wrap:wrap}.btn{display:inline-block;padding:13px 28px;font-size:14px;letter-spacing:.08em;font-weight:500;border:1px solid;cursor:pointer}.btn-primary{background:var(--secondary-bright);color:var(--text-dark);border-color:var(--secondary);font-weight:700}.btn-ghost{background:transparent;color:var(--primary);border-color:var(--primary)}@media(min-width:768px){.topbar{font-size:12px}.topbar .wrap,.site-header .wrap{padding-left:24px;padding-right:24px}.topbar__biz{display:block}.logo__name{font-size:22px}.logo__sub{font-size:11px}.cta-header{padding:10px 22px;font-size:14px}.site-nav__list{padding:0 24px}.site-nav__item{flex:1 1 auto}.site-nav__link{padding:13px 12px;font-size:13.5px;border-bottom:0}.hero__lead{font-size:15.5px}}@media(min-width:1025px){.hero .wrap{grid-template-columns:1.4fr 1fr;gap:48px;padding:64px 24px}.hero__content{padding:34px 36px;max-width:690px}}
			.property[hidden]{display:none}
		</style>
	<?php
}
add_action( 'wp_head', 'sample_fudosan_print_critical_css', 1 );

function sample_fudosan_preload_main_stylesheet( $html, $handle, $href, $media ) {
	if ( 'sample-fudosan-main' !== $handle ) {
		return $html;
	}

	$media = $media ? $media : 'all';

	return sprintf(
		'<link rel="preload" id="%1$s-css" href="%2$s" as="style" media="%3$s" onload="this.onload=null;this.rel=\'stylesheet\'"><noscript>%4$s</noscript>' . "\n",
		esc_attr( $handle ),
		esc_url( $href ),
		esc_attr( $media ),
		$html
	);
}
add_filter( 'style_loader_tag', 'sample_fudosan_preload_main_stylesheet', 10, 4 );


function sample_fudosan_register_property_post_type() {
	register_post_type(
		'property',
		array(
			'labels'       => array(
				'name'          => '物件情報',
				'singular_name' => '物件情報',
				'add_new_item'  => '物件を追加',
				'edit_item'     => '物件を編集',
				'menu_name'     => '物件情報',
			),
			'public'       => true,
			'has_archive'  => false,
			'menu_icon'    => 'dashicons-admin-home',
			'show_in_rest' => true,
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'rewrite'      => array( 'slug' => 'property' ),
		)
	);

	register_taxonomy(
		'property_type',
		'property',
		array(
			'labels'            => array(
				'name'          => '物件種別',
				'singular_name' => '物件種別',
				'menu_name'     => '物件種別',
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array( 'slug' => 'property-type' ),
		)
	);
}
add_action( 'init', 'sample_fudosan_register_property_post_type' );

function sample_fudosan_add_theme_supports() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'sample_fudosan_add_theme_supports' );

function sample_fudosan_insert_default_property_types() {
	foreach ( array( '戸建て', '土地', '賃貸' ) as $term_name ) {
		if ( ! term_exists( $term_name, 'property_type' ) ) {
			wp_insert_term( $term_name, 'property_type' );
		}
	}
}
add_action( 'init', 'sample_fudosan_insert_default_property_types', 20 );

function sample_fudosan_add_property_meta_box() {
	add_meta_box(
		'sample_fudosan_property_details',
		'物件詳細',
		'sample_fudosan_render_property_meta_box',
		'property',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'sample_fudosan_add_property_meta_box' );

function sample_fudosan_get_property_meta_fields() {
	return array(
		'address'  => array(
			'label' => '所在地',
			'type'  => 'text',
			'help'  => '例：岡崎市中央町ひかり台',
		),
		'price'    => array(
			'label' => '価格',
			'type'  => 'number',
			'step'  => '0.1',
			'help'  => '売買は万円、賃貸は万円/月で入力します。',
		),
		'is_rent'  => array(
			'label' => '賃貸物件',
			'type'  => 'checkbox',
			'help'  => 'チェックすると価格の単位が「万円/月」になります。',
		),
		'layout'   => array(
			'label' => '間取り',
			'type'  => 'text',
			'help'  => '例：4DK、2LDK、事務所',
		),
		'area'     => array(
			'label' => '面積',
			'type'  => 'text',
			'help'  => '例：建物98㎡／土地180㎡、土地220㎡',
		),
		'year'     => array(
			'label' => '築年数',
			'type'  => 'text',
			'help'  => '例：築22年、新築、-',
		),
		'featured' => array(
			'label' => 'おすすめ表示',
			'type'  => 'checkbox',
			'help'  => 'トップの「新着・おすすめ物件」に表示します。',
		),
	);
}

function sample_fudosan_render_property_meta_box( $post ) {
	wp_nonce_field( 'sample_fudosan_save_property_meta', 'sample_fudosan_property_nonce' );

	foreach ( sample_fudosan_get_property_meta_fields() as $key => $field ) {
		$value = get_post_meta( $post->ID, '_property_' . $key, true );
		?>
		<p>
			<label for="property-<?php echo esc_attr( $key ); ?>"><strong><?php echo esc_html( $field['label'] ); ?></strong></label><br>
			<?php if ( 'checkbox' === $field['type'] ) : ?>
				<label>
					<input
						type="checkbox"
						id="property-<?php echo esc_attr( $key ); ?>"
						name="property_meta[<?php echo esc_attr( $key ); ?>]"
						value="1"
						<?php checked( $value, '1' ); ?>
					>
					<?php echo esc_html( $field['help'] ); ?>
				</label>
			<?php else : ?>
				<input
					type="<?php echo esc_attr( $field['type'] ); ?>"
					id="property-<?php echo esc_attr( $key ); ?>"
					name="property_meta[<?php echo esc_attr( $key ); ?>]"
					value="<?php echo esc_attr( $value ); ?>"
					<?php echo isset( $field['step'] ) ? 'step="' . esc_attr( $field['step'] ) . '"' : ''; ?>
					style="width:100%;max-width:520px;"
				>
				<span style="display:block;color:#666;font-size:12px;margin-top:4px;"><?php echo esc_html( $field['help'] ); ?></span>
			<?php endif; ?>
		</p>
		<?php
	}
}

function sample_fudosan_save_property_meta( $post_id ) {
	if (
		! isset( $_POST['sample_fudosan_property_nonce'] )
		|| ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sample_fudosan_property_nonce'] ) ), 'sample_fudosan_save_property_meta' )
	) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$posted = isset( $_POST['property_meta'] ) && is_array( $_POST['property_meta'] ) ? wp_unslash( $_POST['property_meta'] ) : array();

	foreach ( sample_fudosan_get_property_meta_fields() as $key => $field ) {
		$meta_key = '_property_' . $key;

		if ( 'checkbox' === $field['type'] ) {
			update_post_meta( $post_id, $meta_key, isset( $posted[ $key ] ) ? '1' : '' );
			continue;
		}

		$value = isset( $posted[ $key ] ) ? sanitize_text_field( $posted[ $key ] ) : '';
		update_post_meta( $post_id, $meta_key, $value );
	}
}
add_action( 'save_post_property', 'sample_fudosan_save_property_meta' );

function sample_fudosan_get_property_type_name( $post_id ) {
	$terms = get_the_terms( $post_id, 'property_type' );

	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
		return $terms[0]->name;
	}

	return '物件';
}

function sample_fudosan_render_property_card( $post_id ) {
	$type    = sample_fudosan_get_property_type_name( $post_id );
	$address = get_post_meta( $post_id, '_property_address', true );
	$price   = get_post_meta( $post_id, '_property_price', true );
	$is_rent = '1' === get_post_meta( $post_id, '_property_is_rent', true );
	$layout  = get_post_meta( $post_id, '_property_layout', true );
	$area    = get_post_meta( $post_id, '_property_area', true );
	$area_parts = explode( '／', $area );
	$year    = get_post_meta( $post_id, '_property_year', true );
	$classes = array( 'property__tag' );

	if ( '土地' === $type ) {
		$classes[] = 'property__tag--land';
	} elseif ( '賃貸' === $type ) {
		$classes[] = 'property__tag--rent';
	}
	?>
	<article
		class="property"
		data-type="<?php echo esc_attr( $type ); ?>"
		data-title="<?php echo esc_attr( get_the_title( $post_id ) ); ?>"
		data-address="<?php echo esc_attr( $address ); ?>"
		data-price="<?php echo esc_attr( $price ); ?>"
		data-rent="<?php echo $is_rent ? '1' : '0'; ?>"
	>
		<div class="property__img">
			<span class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>"><?php echo esc_html( $type ); ?></span>
			<?php if ( has_post_thumbnail( $post_id ) ) : ?>
				<?php echo get_the_post_thumbnail( $post_id, 'medium_large', array( 'class' => 'property__thumb' ) ); ?>
			<?php else : ?>
				<span class="property__img-icon">○</span>
			<?php endif; ?>
		</div>
		<div class="property__body">
			<h4 class="property__title"><?php echo esc_html( get_the_title( $post_id ) ); ?></h4>
			<div class="property__addr"><?php echo esc_html( $address ); ?></div>
			<div class="property__price">
				<?php echo esc_html( $price ? number_format_i18n( (float) $price, floor( (float) $price ) === (float) $price ? 0 : 1 ) : '-' ); ?>
				<span class="property__price-unit"><?php echo $is_rent ? '万円/月' : '万円'; ?></span>
			</div>
			<div class="property__spec">
				<div class="property__spec-item">間取<strong class="property__spec-value"><?php echo esc_html( $layout ? $layout : '-' ); ?></strong></div>
				<div class="property__spec-item">面積<strong class="property__spec-value" style="font-size:11px"><?php echo esc_html( $area ? $area_parts[0] : '-' ); ?></strong></div>
				<div class="property__spec-item">築年<strong class="property__spec-value"><?php echo esc_html( $year ? $year : '-' ); ?></strong></div>
			</div>
			<div class="property__actions">
				<a href="tel:0000000000" class="property__action-link property__tel-btn">電話する</a>
				<a href="#" class="property__action-link property__mail-btn" onclick="navTo('contact');return false">メール</a>
			</div>
		</div>
	</article>
	<?php
}

function my_theme_setup()
{
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_theme_setup');
