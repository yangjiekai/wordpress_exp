<?php
/**
 * Editor CSS Properties Panel Template
 *
 * @author 		WaspThemes
 * @category 	Template
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/* ---------------------------------------------------- */
/* Register YellowPencil Panel							*/
/* ---------------------------------------------------- */
function yp_yellow_penci_bar() {

	$yellow_pencil_uri = yp_get_uri();


	// Get protocol
	$protocol = is_ssl() ? 'https' : 'http';

	// Href
	$hrefA = $_GET['href'];

	// Update protocol.
	if(strstr($hrefA,'://') == true){
		$hrefNew = explode("://",$hrefA);
		$hrefNew = $protocol.'://'.$hrefNew[1];
	}elseif(strstr($hrefA,'://') == false){
		$hrefNew = $protocol.'://'.$hrefA;
	}

	// Page Link
	$hrefNew = esc_url($hrefNew);

	// YP Rand, Not must
	$hrefNew = add_query_arg(array('yp_rand' => rand(136900, 963100)), $hrefNew);

	// Creating LiveLink. Intval filter disabled on yp_page_id because yp using alpa for some page types.
	$liveLink = add_query_arg(array('yp_live_preview' => 'true', 'yp_page_id' => $_GET['yp_page_id'], 'yp_page_type' => trim(strip_tags($_GET['yp_page_type'])), 'yp_rand' => rand(136900, 963100)), $hrefNew);

	// if isset out, set yp_out to live preview
	if(isset($_GET['yp_out'])){
		$liveLink = add_query_arg(array('yp_out' => 'true'), $liveLink);
	}

	$liveLink = str_replace("&#038;", "&amp;", $liveLink);
	$liveLink = str_replace("&#38;", "&amp;", $liveLink);
	
    echo "<div class='yp-select-bar yp-disable-cancel'>
		<div class='yp-editor-top'>
			
			<a href='".$hrefNew."' class='wf-close-btn-link' tabindex='-1'><span data-toggle='tooltip' data-placement='left' title='Close Editor' class='yp-close-btn'></span></a>

			<a class='yp-button yp-save-btn yp-disabled'>Saved</a>

			<a data-toggle='tooltipTopBottom' data-placement='bottom' title='Review Changes' class='yp-button-manage'></a>

			<a target='_blank' data-href='".$liveLink."' data-toggle='tooltipTopBottom' data-placement='bottom' title='Live Preview' class='yp-button-live'></a>
				
			<div class='yp-clear'></div>

		</div>";

		echo "<div class='yp-editor-panel'>";

		echo "<div class='yp-customizing-section'>
				<div class='yp-customizing-inner'>
				<a id='yp-current-page' title='".yp_page_name(true)."'>".yp_page_name(false)." <span class='dashicons dashicons-edit'></span></a>
				<div class='yp-clear'></div>
				<div id='customizing-mode' class='yp-type-menu-link'><span class='type-heading'>".ucfirst(yp_customizing_type())." Customization</span> <span class='dashicons dashicons-arrow-down'></span></div>
				<div id='customizing-type-list'><ul>".yp_customizing_options()."</ul></div>
				</div>
		</div>";		
		
		// Options
		include( WT_PLUGIN_DIR . 'options.php' );

		echo "<div class='yp-panel-no-selection'><div class='starter-notice'><div class='yp-hand'></div><div class='yp-hand-after'></div>Select any element on the page to start making changes.</div></div>";

		echo "<div class='yp-panel-footer'>
			<h3><a tabindex='-1' target='_blank' href='https://yellowpencil.waspthemes.com/documentation/'>Documentation</a> / <a tabindex='-1' target='_blank' href='https://yellowpencil.waspthemes.com/changelog/'>V ".YP_VERSION."</a></h3>
			<span class='dashicons dashicons-admin-collapse yp-panel-hide' data-toggle='tooltip' data-placement='left' title='Hide Panel <span class=\"yp-shortcut-char\">(H)</span>'></span>
		</div>";

		echo "</div>"; // Editor panel
		
	echo "</div>";
	
}