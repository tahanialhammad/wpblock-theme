<?php

/**
 * Register block styles.
 */

if (! function_exists('wpblockstheme_block_styles')) :
	/**
	 * Register custom block styles
	 */
	function wpblockstheme_block_styles()
	{

		register_block_style(
			'core/button',
			array(
				'name'         => 'primary-button',
				'label'        => 'Primary button',
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
            	.wp-block-button.is-style-primary-button > .wp-block-button__link:{
                transition: all 0.5s ease-in;
            }
				.wp-block-button.is-style-primary-button > .wp-block-button__link:hover{
                	background: transparant !important;
                    color: var(--wp--preset--color--accent-3) !important;
                    border: 2px sold  var(--wp--preset--color--accent-3) !important;
            }
			',
			)
		);
		register_block_style('core/image', [
			'name' => 'image-mirrored',
			'label' => 'Image Mirrored',
			'inline_style' => '
					 .wp-block-image.is-style-image-mirrored > img{
					transform: scaleX(-1)
					}
				',
		]);

		register_block_style('core/image', [
			'name' => 'scale-image',
			'label' => 'Scale Image',
			'inline_style' => '
					 .wp-block-image.is-style-scale-image{
				   transition: all 1s ease-in;
					}
					 .wp-block-image.is-style-scale-image:hover{
				   transform: scale(1.05)
					}
				',
		]);
		register_block_style('core/heading', [
			'name' => 'custom-heading',
			'label' => 'Custom heading',
			'inline_style' => '
				 .wp-block-heading.is-style-custom-heading::before {
				  content: "";
				  background: var(--wp--preset--color--accent-3) !important;
				  width: 95px;
				  height: 1px;
				  display: inline-block;
					}
				',
		]);

		register_block_style('core/column', [
			'name' => 'custom-column-moved',
			'label' => 'Column to right',
			'inline_style' => '
					 .wp-block-column.is-style-custom-column-moved{
					   margin-inline-start: -60px;
					   margin-inline-end: 60px;
					   z-index: 99;
					}
			  @media screen and (max-width:787px){
					 .wp-block-column.is-style-custom-column-moved{
					   margin-inline-start: auto;
					   margin-inline-end: auto;
					   margin-block-start: -20px;
					   z-index: 99;
					}
		
			  }
				',
		]);

		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __('With arrow', 'twentytwentyfour'),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __('With asterisk', 'twentytwentyfour'),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action('init', 'wpblockstheme_block_styles');
