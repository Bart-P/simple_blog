<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);                           
defined('SITE_ROOT') ? null : define('SITE_ROOT',                                   
  DS . 'opt'      . DS . 'lampp'          . DS . 'htdocs' .                       
  DS . 'projects' . DS . 'simple_blog');                                  
                                                                                  
defined('FRONT_INCLUDES') ? null : define('FRONT_INCLUDES',                         
  SITE_ROOT . DS . 'includes');                                                   
                                                                                  
defined('FRONT_IMAGES') ? null : define('FRONT_IMAGES',                         
  SITE_ROOT . DS . 'assets' . DS . 'img');                                                   

defined('ADMIN_CLASSES') ? null : define('ADMIN_CLASSES',                         
  SITE_ROOT . DS . 'admin' . DS . 'classes');                                                   

require_once ADMIN_CLASSES . DS . 'Config.php';                                          
require_once ADMIN_CLASSES . DS . 'Core.php';                                            
require_once ADMIN_CLASSES . DS . 'Query.php';                                            
require_once ADMIN_CLASSES . DS . 'Page.php';                                            
require_once ADMIN_CLASSES . DS . 'Post.php';                                            

/*
defined('ADMIN_INCLUDES') ? null : define('ADMIN_INCLUDES',                         
  SITE_ROOT . 'admin' . DS . 'includes' . DS);                                    
                                                                                  
defined('ADMIN_CLASSES') ? null : define('ADMIN_CLASSES',                           
  SITE_ROOT . 'admin' . DS . 'classes' . DS);                                     
                                                                                  
require_once ADMIN_INCLUDES . 'functions.php';                                      
                                                                                  
require_once ADMIN_CLASSES . 'config.php';                                          
require_once ADMIN_CLASSES . 'core.php';                                            
require_once ADMIN_CLASSES . 'helper.php';                                          
require_once ADMIN_CLASSES . 'user.php';                                            
require_once ADMIN_CLASSES . 'photo.php';                                           
require_once ADMIN_CLASSES . 'session.php';                                         
require_once ADMIN_CLASSES . 'comments.php';                                        
require_once ADMIN_CLASSES . 'pagination.php';     
 */
