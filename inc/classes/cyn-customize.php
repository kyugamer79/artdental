<?php

if ( ! class_exists( 'cyn_customize' ) ) {
	class cyn_customize {
		function __construct() {
			add_action( 'customize_register', [ $this, 'cyn_basic_settings' ] );
		}

		public function cyn_basic_settings( $wp_customize ) {

			$this->cyn_register_panel_general( $wp_customize );

			// $this->cyn_register_panel_demo_2( $wp_customize );

		}

		/**
		 * Summary of cyn_add_control
		 * @param mixed $wp_customize
		 * @param string $section name of section that this control related to
		 * @param string $type 'text' | 'textarea' | 'tel' | 'image' | 'file'
		 * @param string $id name that saved on wp_option table on database
		 * @param string $label 
		 * @param string $description
		 * @return void
		 */
		private function cyn_add_control( $wp_customize, $section, $type, $id, $label, $description = '' ) {
			$wp_customize->add_setting(
				$id,
				[ 'type' => 'option' ]
			);


			if ( $type == "file" ) {
				$wp_customize->add_control(
					new WP_Customize_Upload_Control(
						$wp_customize,
						$id,
						[ 
							'label' => $label,
							'section' => $section,
							'settings' => $id,
							'description' => $description,
						]
					)
				);
			}

			if ( $type != 'file' ) {
				$wp_customize->add_control(
					$id,
					[ 
						'label' => $label,
						'section' => $section,
						'settings' => $id,
						'type' => $type,
						'description' => $description,
					]
				);
			}
		}

		private function cyn_register_panel_general( $wp_customize ) {

			$wp_customize->add_panel(
				'general',
				[ 
					'title' => 'تنظیمات تم - عمومی',
					'priority' => 1
				]
			);


			$wp_customize->add_section(
				'phones',
				[ 
					'title' => 'شماره تلفن ها',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			for ( $i = 1; $i <= 5; $i++ ) {
				$this->cyn_add_control( $wp_customize, 'phones', 'tel', "cyn_phone_number_$i", "شماره تلفن $i" );
			}

			$wp_customize->add_section(
				'social_media',
				[ 
					'title' => 'شبکه های اجتماعی',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			for ( $i = 1; $i <= 10; $i++ ) {
				$this->cyn_add_control( $wp_customize, 'social_media', 'file', "cyn_social_media_img_$i", "تصویر شبکه اجتماعی $i" );
				$this->cyn_add_control( $wp_customize, 'social_media', 'text', "cyn_social_media_url_$i", "لینک شبکه اجتماعی $i" );
			}


			$wp_customize->add_section(
				'address',
				[ 
					'title' => 'آدرس',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control( $wp_customize, 'address', 'textarea', "cyn_address", "آدرس" );

			for ( $i = 1; $i <= 10; $i++ ) {
				$this->cyn_add_control( $wp_customize, 'address', 'file', "cyn_address_img_$i", "تصویر مسیریاب $i" );
				$this->cyn_add_control( $wp_customize, 'address', 'tel', "cyn_address_url_$i", "لینک مسیریاب $i" );
			}


			$wp_customize->add_section(
				'work_hours',
				[ 
					'title' => 'ساعت کاری',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			for ( $i = 1; $i <= 7; $i++ ) {
				$this->cyn_add_control( $wp_customize, 'work_hours', 'text', "cyn_work_hours_$i", "ساعت کاری $i" );
			}

			$wp_customize->add_section(
				'custom_logo',
				[ 
					'title' => 'لوگوی دوم',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control( $wp_customize, 'custom_logo', 'file', "cyn_custom_logo", "لوگو" );


		}






	}
}
