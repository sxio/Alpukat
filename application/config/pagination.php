<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pagination Config
 *
 * Just applying codeigniter's standard pagination config with twitter
 * bootstrap stylings
 *
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 * @email		mike@mikefunk.com
 *
 * @file		pagination.php
 * @version		1.3.1
 * @date		03/12/2012
 *
 * Copyright (c) 2011
 */

// --------------------------------------------------------------------------

// $config['pagination']['base_url'] = '';
// $config['pagination']['per_page']             = 2;
$config['pagination']['uri_segment']          = 4;
$config['pagination']['num_links']            = 5;
// $config['pagination']['page_query_string']    = TRUE;
// $config['pagination']['use_page_numbers']     = TRUE;
// $config['pagination']['query_string_segment'] = 'pg';

// $config['pagination']['full_tag_open']     = '<div class="pagination"><ul>';
$config['pagination']['full_tag_open']        = '<ul class="pagination">';
$config['pagination']['full_tag_close']       = '</ul><!--pagination-->';

$config['pagination']['first_link']           = '&laquo;';
$config['pagination']['first_tag_open']       = '<li class="prev page">';
$config['pagination']['first_tag_close']      = '</li>';

$config['pagination']['last_link']            = '&raquo;';
$config['pagination']['last_tag_open']        = '<li class="next page">';
$config['pagination']['last_tag_close']       = '</li>';

$config['pagination']['next_link']            = '&rarr;';
$config['pagination']['next_tag_open']        = '<li class="next page">';
$config['pagination']['next_tag_close']       = '</li>';

$config['pagination']['prev_link']            = '&larr;';
$config['pagination']['prev_tag_open']        = '<li class="prev page">';
$config['pagination']['prev_tag_close']       = '</li>';

$config['pagination']['cur_tag_open']         = '<li class="active"><a href="">';
$config['pagination']['cur_tag_close']        = '</a></li>';

$config['pagination']['num_tag_open']         = '<li class="">';
$config['pagination']['num_tag_close']        = '</li>';

// $config['pagination']['display_pages']     = FALSE;
//
$config['pagination']['anchor_class']         = 'follow_link';

// --------------------------------------------------------------------------

/* End of file pagination.php */
/* Location: ./bookymark/application/config/pagination.php */
?>