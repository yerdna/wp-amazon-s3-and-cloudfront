<?php

namespace DeliciousBrains\WP_Offload_Media\Providers\Delivery;

class Linode_S3_CDN extends Delivery_Provider {

	/**
	 * Which storage providers does the delivery provider support, empty means all.
	 *
	 * @var array
	 */
	protected static $supported_storage_providers = array(
		'linode',
	);

	/**
	 * @var string
	 */
	protected static $provider_name = 'Linode';

	/**
	 * @var string
	 */
	protected static $provider_short_name = 'Linode';

	/**
	 * Used in filters and settings.
	 *
	 * @var string
	 */
	protected static $provider_key_name = 'linode';

	/**
	 * @var string
	 */
	protected static $service_name = 'Linode CDN';

	/**
	 * @var string
	 */
	protected static $service_short_name = 'Linode CDN';

	/**
	 * Used in filters and settings.
	 *
	 * @var string
	 */
	protected static $service_key_name = 'linode-cdn';

	/**
	 * Optional override of "Provider Name" + "Service Name" for friendly name for service.
	 *
	 * @var string
	 */
	protected static $provider_service_name = 'Linode CDN';

	/**
	 * The slug for the service's quick start guide doc.
	 *
	 * @var string
	 */
	protected static $provider_service_quick_start_slug = 'linode-cdn-setup';

	/**
	 * @var string
	 * @TODO: Fix this
	 */
	protected $default_domain = 'cdn.linodeobjects.com';

	/**
	 * @var string
	 */
	protected $console_url = 'https://cloud.linode.com/object-storage/buckets/';

	/**
	 * @var string
	 */
	protected $console_url_prefix_param = '?path=';

	/**
	 * Get the link to the provider's console.
	 *
	 * @param string $bucket
	 * @param string $prefix
	 * @param string $region
	 *
	 * @return string
	 *
	 * @TODO: Fix the below
	 * NOTE: DigitalOcean Spaces CDN is tied to the Space and does not have a separate means of access.
	 */
	public function get_console_url( string $bucket = '', string $prefix = '', string $region = '' ): string {
		return $this->as3cf->get_storage_provider()->get_console_url( $bucket, $prefix, $region );
	}

	/**
	 * Title to be shown for provider's console link.
	 *
	 * @return string
	 */
	public static function get_console_title(): string {
		return _x( 'Control Panel', 'Provider console link text', 'amazon-s3-and-cloudfront' );
	}
}
