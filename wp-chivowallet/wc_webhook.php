public function __construct() {

	$this->id = 'chivo'; 
	$this->icon = ''; 
	$this->has_fields = true;
	$this->method_title = 'Chivo wallet Gateway';
	$this->method_description = 'Chivo Wallet Payments'; 

	
	$this->supports = array(
		'products'
	);


	$this->init_form_fields();

	$this->init_settings();
	$this->title = $this->get_option( 'title' );
	$this->description = $this->get_option( 'description' );
	$this->enabled = $this->get_option( 'enabled' );
	$this->testmode = 'yes' === $this->get_option( 'testmode' );
	$this->private_key = $this->testmode ? $this->get_option( 'test_private_key' ) : $this->get_option( 'private_key' );
	$this->publishable_key = $this->testmode ? $this->get_option( 'test_publishable_key' ) : $this->get_option( 'publishable_key' );


	add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );

	add_action( 'wp_enqueue_scripts', array( $this, 'payment_scripts' ) );
	
	
	// add_action( 'woocommerce_api_{webhook name}', array( $this, 'webhook' ) );
 }