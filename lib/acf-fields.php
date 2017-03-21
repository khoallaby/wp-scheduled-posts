<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_schedule-posts',
		'title' => 'Schedule posts',
		'fields' => array (
			array (
				'key' => 'field_56733126d16e6',
				'label' => 'Date',
				'name' => 'schedule_date',
				'type' => 'checkbox',
				'choices' => array (
					'Sunday' => 'Sunday',
					'Monday' => 'Monday',
					'Tuesday' => 'Tuesday',
					'Wednesday' => 'Wednesday',
					'Thursday' => 'Thursday',
					'Friday' => 'Friday',
					'Saturday' => 'Saturday',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_567332bf566aa',
				'label' => 'Time Start',
				'name' => 'schedule_time_start',
				'type' => 'date_time_picker',
				'show_date' => 'false',
				'date_format' => 'm/d/y',
				'time_format' => 'HH:mm:ss',
				'show_week_number' => 'false',
				'picker' => 'select',
				'save_as_timestamp' => 'false',
				'get_as_timestamp' => 'false',
			),
			array (
				'key' => 'field_5673358bd6271',
				'label' => 'Time End',
				'name' => 'schedule_time_end',
				'type' => 'date_time_picker',
				'show_date' => 'false',
				'date_format' => 'm/d/y',
				'time_format' => 'HH:mm:ss',
				'show_week_number' => 'false',
				'picker' => 'select',
				'save_as_timestamp' => 'false',
				'get_as_timestamp' => 'false',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
