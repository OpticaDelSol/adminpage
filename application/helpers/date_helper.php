<?php 
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

//FUNCION NO DISPONIBLE EN WINDOWS  
function strptime_win($date, $format) { 
    $masks = array( 
      '%d' => '(?P<d>[0-9]{1,2})', 
      '%m' => '(?P<m>[0-9]{1,2})', 
      '%Y' => '(?P<Y>[0-9]{2,4})', 
      '%H' => '(?P<H>[0-9]{2})', 
      '%M' => '(?P<M>[0-9]{2})', 
      '%S' => '(?P<S>[0-9]{2})', 
     // usw.. 
    ); 

    $rexep = "#".strtr(preg_quote($format), $masks)."#"; 
    $out = null;
    if(!preg_match($rexep, $date, $out)) 
    {      
        throw new Exception($rexep. "  ".$date);
        //return false; 
      
    }

    $ret = array( 
      /*"tm_sec"  => (int) $out['S'], 
      "tm_min"  => (int) $out['M'], 
      "tm_hour" => (int) $out['H'], */
      "tm_mday" => (int) $out['d'], 
      "tm_mon"  => $out['m']?$out['m']-1:0, 
      "tm_year" => $out['Y'] > 1900 ? $out['Y'] - 1900 : 0, 
    ); 
    return $ret; 
  } 

if ( ! function_exists('parse_date'))
{
    function parse_date($date, $format = '%d/%m/%Y' )
    {
        if(function_exists('strptime'))
        {
         $parsed = strptime($date , $format);
        }
        else
        {
            $parsed = strptime_win($date , $format);
        }
        
         if(!$parsed)
         {
             throw new Exception('Error parsing date');
         }
         if(is_array($parsed))
         {
                 $y = (int)$parsed['tm_year'] + 1900;

                 $m = (int)$parsed['tm_mon'] + 1;
                 $m = sprintf('%02d', $m);

                 $d = (int)$parsed['tm_mday'];
                 $d = sprintf('%02d', $d);

                 return  $y.'-'.$m.'-'.$d;
        }
       
    }   
}