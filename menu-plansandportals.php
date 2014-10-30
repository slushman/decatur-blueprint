<div class="sidemenu-container" id="sidemenu-plansandportals">
	<div class="sidemenu-header">
		<div class="sidemenu-logo">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 144 144" enable-background="new 0 0 144 144" xml:space="preserve"><path fill="#ffffff" d="M77.903,59.5l4.378-3.545h-39.09l-12.147,50.1h79.608L99.331,59.361l-3.033,2.547l9.842,40.601H35.556L45.98,59.5H77.903z M71.687,67.25l-4.304,10.26L78.15,74.9L71.687,67.25z M49.922,66.261l-2.333,11.083h13.629l1.028-6.097l-2.995,1.757l-0.284,1.684 h-8.099l1.213-5.769h6.772l4.193-2.431l0.038-0.228H49.922z M57.109,85.594l-1.028,6.111h-8.589l1.287-6.111H57.109z M58.463,94.525 l1.983-11.754H46.49l-2.477,11.754H58.463z M63.719,66.945l-7.167,4.16l-1.87-1.797l-1.86,1.131l3.27,3.459l9.373-5.506 L63.719,66.945z M107.667,50.379l-6.869-8.131l-27.737,23.43l6.869,8.131l15.574-13.156l0.013-0.01l3.423-2.891L107.667,50.379z M112.035,46.689c1.096-0.924,1.232-2.562,0.308-3.656l-3.52-4.17c-0.925-1.092-2.562-1.229-3.657-0.308l-3.033,2.564l6.87,8.132 L112.035,46.689z M139.5,72.002c0,37.277-30.222,67.498-67.5,67.498c-37.279,0-67.5-30.221-67.5-67.498 C4.5,34.722,34.721,4.5,72,4.5C109.278,4.5,139.5,34.722,139.5,72.002 M144,72c0-39.764-32.236-72-72-72S0,32.236,0,72 s32.236,72,72,72S144,111.764,144,72"/></svg>
		</div>
		<h3>Plans and Portals</h3>
	</div><?php 

	if ( has_nav_menu( 'plansandportals' ) ) {
						
		$menu['theme_location']		= 'plansandportals';
		$menu['container'] 			= 'div';
		$menu['container_id']    	= 'menu-plansandportals';
		$menu['container_class'] 	= 'menu nav-plansandportals';
		$menu['menu_id']         	= 'menu-plansandportals-items';
		$menu['menu_class']      	= 'menu-items';
		$menu['depth']           	= 2;
		$menu['fallback_cb']     	= '';

		wp_nav_menu( $menu );

	} ?>
</div><!-- Plans and Portals menu -->