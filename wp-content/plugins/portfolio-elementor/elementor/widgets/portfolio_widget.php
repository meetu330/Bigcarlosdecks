<?php

namespace Powerfolio\Widgets;

use  Elementor\Widget_Base ;
use  Elementor\Controls_Manager ;
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed directly
/**
 *
 * @since 1.0.0
 */
class ELPT_Portfolio_Widget extends Widget_Base
{
    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'elpug';
    }
    
    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return __( 'Elementor Portfolio', 'powerfolio' );
    }
    
    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-elementor-square';
    }
    
    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return [ 'elpug-elements' ];
    }
    
    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends()
    {
        return [ 'elpug' ];
    }
    
    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls()
    {
        $this->start_controls_section( 'section_content', [
            'label' => __( 'Portfolio Settings', 'powerfolio' ),
        ] );
        $this->add_control( 'postsperpage', [
            'label'   => __( 'Number of projects to show', 'powerfolio' ),
            'type'    => Controls_Manager::NUMBER,
            'default' => 12,
            'min'     => 1,
            'max'     => 90,
            'step'    => 1,
        ] );
        // END - PRO Version Snippet
        $showfilter_description = '';
        $this->add_control( 'showfilter', [
            'label'       => __( 'Show category filter?', 'powerfolio' ),
            'description' => $showfilter_description,
            'type'        => Controls_Manager::SELECT,
            'default'     => 'no',
            'options'     => [
            'yes' => __( 'Yes', 'powerfolio' ),
            'no'  => __( 'No', 'powerfolio' ),
        ],
        ] );
        // END - PRO Version Snippet
        $margin_description = '';
        $this->add_control( 'margin', [
            'label'       => __( 'Use item margin?', 'powerfolio' ),
            'description' => $margin_description,
            'type'        => Controls_Manager::SELECT,
            'default'     => 'yes',
            'options'     => [
            'yes' => __( 'Yes', 'powerfolio' ),
            'no'  => __( 'No', 'powerfolio' ),
        ],
        ] );
        $this->add_control( 'columns', [
            'label'   => __( 'Number of columns', 'powerfolio' ),
            'type'    => Controls_Manager::SELECT,
            'default' => '3',
            'options' => [
            '2' => __( 'Two Columns', 'powerfolio' ),
            '3' => __( 'Three Columns', 'powerfolio' ),
            '4' => __( 'Four Columns', 'powerfolio' ),
        ],
        ] );
        $style_options = array(
            'masonry' => __( 'Masonry', 'powerfolio' ),
            'box'     => __( 'Boxes', 'powerfolio' ),
        );
        $description = __( 'Upgrade your plan to get access to the special grids. Our exclusive feature! <a href="https://checkout.freemius.com/mode/dialog/plugin/7226/plan/12571/">CLICK TO UPGRADE</a>', 'powerfolio' );
        // END - PRO Version Snippet
        $this->add_control( 'style', [
            'label'       => __( 'Grid Style', 'powerfolio' ),
            'type'        => Controls_Manager::SELECT,
            'default'     => 'box',
            'description' => $description,
            'options'     => $style_options,
        ] );
        // END - PRO Version Snippet
        $this->add_control( 'linkto', [
            'label'   => __( 'Each project links to', 'powerfolio' ),
            'type'    => Controls_Manager::SELECT,
            'default' => 'project',
            'options' => [
            'image'   => __( 'Featured Image into Lightbox', 'powerfolio' ),
            'project' => __( 'Project Details Page', 'powerfolio' ),
        ],
        ] );
        // END - PRO Version Snippet
        //Upgrade message for free version
        if ( pe_fs()->is_not_paying() ) {
            $this->add_control( 'Upgrade_note', [
                'label'           => '',
                'type'            => \Elementor\Controls_Manager::RAW_HTML,
                'raw'             => get_upgrade_message(),
                'content_classes' => 'your-class',
            ] );
        }
        //==========================================================================================
        $this->end_controls_section();
        $this->start_controls_section( 'section_item_description', [
            'label' => __( 'Item', 'powerfolio' ),
            'tab'   => Controls_Manager::TAB_STYLE,
        ] );
        //Hover: Background color
        $this->add_group_control( \Elementor\Group_Control_Background::get_type(), [
            'name'     => 'bgcolor',
            'label'    => __( 'Hover: Background Color', 'powerfolio' ),
            'types'    => [ 'classic', 'gradient' ],
            'selector' => '{{WRAPPER}} .portfolio-item-infos-wrapper',
        ] );
        if ( pe_fs()->is_not_paying() ) {
            $this->add_control( 'Upgrade_note2', [
                'label'           => '',
                'type'            => \Elementor\Controls_Manager::RAW_HTML,
                'raw'             => get_upgrade_message(),
                'content_classes' => 'your-class',
            ] );
        }
        // END - PRO Version Snippets
        $this->end_controls_section();
        $this->start_controls_section( 'section_style', [
            'label' => __( 'Filter', 'powerfolio' ),
            'tab'   => Controls_Manager::TAB_STYLE,
        ] );
        if ( pe_fs()->is_not_paying() ) {
            $this->add_control( 'Upgrade_note3', [
                'label'           => '',
                'type'            => \Elementor\Controls_Manager::RAW_HTML,
                'raw'             => get_upgrade_message(),
                'content_classes' => 'your-class',
            ] );
        }
        // END - PRO Version Snippets
        $this->end_controls_section();
    }
    
    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings();
        ?>			

		<?php 
        //echo do_shortcode('[elemenfolio postsperpage="'.$settings['postsperpage'] .'" showfilter="'.$settings['showfilter'].'" style="'.$settings['style'].'" margin="'.$settings['margin'].'" columns="'.$settings['columns'].'" linkto="'.$settings['linkto'].'"]');
        ?>
		
		<?php 
        echo  do_shortcode( '[powerfolio hover="simple" postsperpage="' . $settings['postsperpage'] . '" showfilter="' . $settings['showfilter'] . '" style="' . $settings['style'] . '" margin="' . $settings['margin'] . '" columns="' . $settings['columns'] . '" linkto="' . $settings['linkto'] . '"]' ) ;
        ?>		

		<?php 
        wp_reset_postdata();
        ?>		

		<?php 
    }

}