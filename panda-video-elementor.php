<?php
/**
 * Plugin Name: Panda Video Elementor
 * Description: Adiciona um widget Elementor para vídeos do Panda Video.
 * Version: 1.0
 * Author: Ricardo Christovão da Silva
 * Author URI: https://christovao.com.br/wordpress/plugins/panda-video-elementor
 * Text Domain: panda-video-elementor
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Segurança

// Registra widget só quando Elementor estiver ativo
function register_panda_video_widget( $widgets_manager ) {

    if ( ! class_exists( '\Elementor\Widget_Base' ) ) {
        return;
    }

    class Panda_Video_Widget extends \Elementor\Widget_Base {

        public function get_name() {
            return 'panda_video';
        }

        public function get_title() {
            return 'Panda 
Video';
}

    public function get_icon() {
        return 'eicon-video-camera';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'section_content',
            [ 'label' => 'Configurações do Vídeo' ]
        );

        $this->add_control(
            'video_input',
            [
                'label' => 'Cole o Iframe OU apenas o ID',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => 'Ex: ID (7406c7d8-...) ou iframe completo...',
                'description' => 'Você pode colar só o ID do vídeo OU o iframe inteiro que o widget detecta automaticamente.',
            ]
        );

        $this->add_control(
            'width',
            [
                'label' => 'Largura (px)',
                'type' => 
\Elementor\Controls_Manager::NUMBER,
'default' => 720,
]
);

        $this->add_control(
            'height',
            [
                'label' => 'Altura (px)',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 360,
            ]
        );

        $this->end_controls_section();
    }

    // Função para extrair o ID (suporta iframe completo ou ID puro)
    private function extract_video_id( $input ) {
        if ( empty( $input ) ) return false;

        // Se a pessoa colou o iframe e ele tem id="panda-..."
        if ( preg_match('/id=["\']panda-([a-f0-9\-]+)["\']/i', $input, $matches) ) {
            return $matches[1];
        }

        // Se colou um src com ?v=ID
        if ( preg_match('/[?&]v=([a-f0-9\-]+)/i', $input, $matches) ) {
            return $matches[1];
        }

        // Se colou direto o ID
      
return trim( $input );
}

    protected function render() {
        $settings = $this->get_settings_for_display();
        $width = ! empty($settings['width']) ? intval($settings['width']) : 720;
        $height = ! empty($settings['height']) ? intval($settings['height']) : 360;

        $video_id = $this->extract_video_id( $settings['video_input'] );

        if ( ! empty( $video_id ) ) {
            echo '<iframe 
                id="panda-' . esc_attr($video_id) . '" 
                src="https://player-vz-cac7a4c5-40e.tv.pandavideo.com.br/embed/?v=' . esc_attr($video_id) . '" 
                style="border:none; width:100%; max-width:' . $width . 'px;" 
                allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture" 
                allowfullscreen="true" 
                width="' . $width . '" 
                height="' . $height . '" 
                fetchpriority="high"></iframe>';
        } else {
 
       echo '<div style="padding:12px; background:#f8f8f8; border:1px dashed #ccc; text-align:center;">
                    ⚠️ Cole o ID do vídeo ou o iframe completo do Panda Video
                  </div>';
        }
    }
}

$widgets_manager->register( new \Panda_Video_Widget() );
}
add_action( 'elementor/widgets/register', 'register_panda_video_widget' );