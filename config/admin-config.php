<?php

return [
  /*
   * --------------------------------------------------------------------------
   * Define configuration groups
   * --------------------------------------------------------------------------
   * Each configuration group will be rendered as a TAB page
   */
  'admin_config_groups' => [
    'general' => 'General',
    'site' => 'Site',
    'admin' => 'Administrator'
  ],
  /**
   * --------------------------------------------------------------------------
   * Define configuration items
   * --------------------------------------------------------------------------
   * access：config('sample') config('sample.value')
   */
  'general' => [
    'site_name' => ['Site Name'],
    'address' => ['Address'],
    'phone' => ['Phone Number'],
    'email' => ['Email'],
    'contact_des' => ['Contact Description'],
    'facebookFP' => ['Facebook Fanpage'],
    'zalo' => ['Zalo'],
    'site_logo' => ['Site Logo', 'type' => 'image'],
    'logo' => ['Logo', 'type' => 'image'],

  ],
  'site' => [

  ],
  'admin' => [

  ]
];
