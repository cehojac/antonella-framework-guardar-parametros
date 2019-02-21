<?php

namespace PCP;

class Config
{
   
    /*
    * Plugins option
    * storage in database the option value
    * Array ('option_name'=>'default value')
    * @example ["example_data" => 'foo',]
    * @return void
    */
    public $plugin_options=[

        'valor1'=>'',
        
        'valor2'=>'algun valor',
        
        'valor3'=>['pera','manzana'], //inclusive puedes guardar arrays
        
        ];
        
    /**
    * Language Option
    * define a unique word for translate call
    */
    public $language_name='antonella';
    /**
    * Plugin text prefix
    * define a unique word for this plugin
    */
    public $plugin_prefix='ch_nella';
    /**
    * POST data process
    * get the post data and execute the function
    * @example ['post_data'=>'PCP::function']
    */
    public $post=[
        "guardar_parametros"=> __NAMESPACE__."\ParametrosController::GuardarParametros"
    ];
    /**
    * GET data process
    * get the get data and execute the function
    * @example ['get_data'=>'PCP::function']
    */
    public $get=[];
    /**
    * add_filter data functions
    * @input array
    * @example ['body_class','PCP::function',10,2]
    * @example ['body_class',['PCP','function'],10,2]
    */
    public $add_filter=[];
    /**
    * add_action data functions
    * @input array
    * @example ['body_class','PCP::function',10,2]
    * @example ['body_class',['PCP','function'],10,2]
    */
    public $add_action=[];
    /**
    * add custom shortcodes
    * @input array
    * @example [['example','PCP\ExampleController::example_shortcode']]
    */
    public $shortcodes=[
        ['example','PCP\ExampleController::example_shortcode']
    ];
    /**
    * Dashboard
    * @reference: https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
    */
    public $dashboard=[
        [
        'slug'      => '',
        'name'      => '',
        'function'  => '',
        'callback'  => '',
        'args'      => '',
        ]

    ];
    /**
    * Files for use in Dashboard
    */
    public $files_dashboard=[];

    /*
    * Plugin menu
    * set your menu option here
    */
   
    public $plugin_menu=[
            [
            
            "path" => ["page"],
            "name" => "Guardar Parámetros",
            "function" => __NAMESPACE__."\ParametrosController::MostrarMenu",
            "icon" => "antonella-icon.png",
            "slug" => "guardar-parametros",
            
            ]
    ];
    
    public $post_types =[
        [
            'singular'      => '',
            'plural'        => '',
            'slug'          => '',
            'translate'     => false,
            'position'      => 4,
            'taxonomy'      =>['category'],
            'image'         =>'',
        ],

    ];
    
    }
