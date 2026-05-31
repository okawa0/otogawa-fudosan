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
