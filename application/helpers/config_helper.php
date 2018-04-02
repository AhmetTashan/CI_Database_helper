<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('db_name'))
{
    function table( $table_name, $row = 'tablo' )
    {
        $CI =& get_instance();
        $CI->config->load('table_config');

        if ( ( $table_name != '' ) AND ( !empty($table_name) ) )
        {
            if( !is_array( $table_name ) )
            {
                if ( $row != 'tablo' )
                {
                    return $CI->config->item( $table_name )['tablo'].'.'.$CI->config->item( $table_name )[$row];
                } else {
                    return $CI->config->item( $table_name )[$row];
                }
            } else {
                $data = '';
                for ($i=0; $i < count($table_name); $i++)
                {
                    if ( is_array( $table_name[$i] ) )
                    {
                        if ( isset( $table_name[$i][0] ) AND isset( $table_name[$i][1] ) )
                        {
                            if ( !isset( $table_name[$i][2] ) AND empty( $table_name[$i][2] ) )
                            {
                                $data .= $CI->config->item( $table_name[$i][0] )['tablo'].'.'.$CI->config->item( $table_name[$i][0] )[$table_name[$i][1]];
                            } else {
                                $data .= $CI->config->item( $table_name[$i][0] )['tablo'].'.'.$CI->config->item( $table_name[$i][0] )[$table_name[$i][1]].' AS '.$table_name[$i][2];
                            }
                            $data .= ', ';
                        }
                    }
                }
                return $data;
            }
        }
    }
}
