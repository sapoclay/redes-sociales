<?php

function dc_social_sharing_buttons($content) 
{
	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) { 
		return $content;
	}else{
	       if( is_single() )
		{	
		$plantilla		='
		 <a class="dc-link dc-twitter" href="{twitter}" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>'.
		'<a class="dc-link dc-facebook" href="{facebook}" target="_blank"><i class="fa fa-facebook"></i> Facebook </a>'.
		'<a class="dc-link dc-linkedin" href="{linkedin}" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>'.
		'<a class="dc-link dc-whatsapp" href="{whatsapp}" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp</a>';

		$cad			='';
		$urlArticulo 	= urlencode(get_permalink());
 		$titleArticulo 	= str_replace( ' ', '%20', get_the_title());

		// Urls
		$twitterURL	= 'https://twitter.com/intent/tweet?text='.$titleArticulo.'&amp;url='.$urlArticulo.'&amp;via=entreunosyceros';
		$facebookURL= 'https://www.facebook.com/sharer/sharer.php?u='.$urlArticulo;
		$whatsappURL= 'whatsapp://send?text='.$titleArticulo . ' ' . $urlArticulo;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$urlArticulo.'&amp;title='.$titleArticulo;
 
		$ar_buscar 		= array('{twitter}','{facebook}','{linkedin}','{whatsapp}');
		$ar_reemplazar 	= array($twitterURL,$facebookURL,$linkedInURL,$whatsappURL);

		$cad	.= '<div class="dc-social"><hr/>';
		$cad	.= '<p> <span id="titulo-dc-social">Si te gustó, comparte el artículo:</span</p>';
		$cad	.=  str_replace($ar_buscar, $ar_reemplazar, $plantilla);
		$cad	.= '</div>';

		//$content = $cad.$content; //botones superiores
		$content .= $cad; //botones inferiores

		return $content;
		}
		else
		{
		return $content;
		}
	}
};

add_filter( 'the_content', 'dc_social_sharing_buttons',0);

