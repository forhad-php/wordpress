  /**
   * Excerpt max charlength. Don't fragement the word.
   *
   * @param int $charlength Recive a integer value for limited word.
   * @return void
   */
  function wpps_excerpt_max_charlength( $charlength ) {
    $excerpt   = get_the_excerpt();
    $extension = '[...]';
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
      $subex   = mb_substr( $excerpt, 0, $charlength - mb_strlen( $extension ) );
      $exwords = explode( ' ', $subex );
      $excut   = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
      if ( $excut < 0 ) {
        echo mb_substr( $subex, 0, $excut );
      } else {
        echo $subex;
      }
				echo $extension;
			} else {
				echo $excerpt;
			}
		}
    
    
    
    // Calling..
    wpps_excerpt_max_charlength( 26 );
