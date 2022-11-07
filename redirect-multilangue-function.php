
 <?php

/**
	 * UM hook
	 *
	 * @type filter
	 * @title um_get_core_page_filter
	 * @description Change UM core page URL
	 * @input_vars
	 * [{"var":"$url","type":"string","desc":"UM Page URL"},
	 * {"var":"$slug","type":"string","desc":"UM Page slug"},
	 * {"var":"$updated","type":"bool","desc":"Additional parameter"}]
	 * @change_log
	 * ["Since: 2.0"]
	 * @usage add_filter( 'um_get_core_page_filter', 'function_name', 10, 3 );
	 * @example
	 * */
	 
	 add_filter( 'um_get_core_page_filter', 'my_core_page_url', 12, 3 );
	 
	 function my_core_page_url( $url, $slug, $updated ) {
	  
	      if(pll_current_language() == 'ar' )
	     {
	         if($slug=="login")
	         {
	             if($url==get_site_url().'/login/'){
	                 return get_site_url().'/login-ar';
	             }
	             else
	             {
	                 return  add_query_arg('redirect_to',urlencode_deep(  $url ) ,get_site_url().'/login-ar'); 
	             }
	               
	         }
	          if($slug=="register")
	         {
	               return get_site_url().'/register-ar'; 
	         }
            if($slug=="password-reset")
	         {
	               return get_site_url().'/password-reset-ar'; 
	         }
	         
	         
	      
	     }
	     else
	     
	     {
	          return $url;
	     }
	  }
	  