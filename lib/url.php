<?php
/**
* Returns the string
*
* @param array
* @param string
* @return string
*/
function getUrlParams($url,$param){
    $arr=parse_url($url);
    $params = convertUrlQuery($arr['query']);
   return $params[$param];
}

/** 
 * Returns the url query as associative array 
 * 
 * @param    string    query 
 * @return    array    params 
 */ 
function convertUrlQuery($query)
{ 
    $queryParts = explode('&', $query); 
    
    $params = array(); 
    foreach ($queryParts as $param) 
    { 
        $item = explode('=', $param); 
        $params[$item[0]] = $item[1]; 
    } 
    
    return $params; 
}

function getUrlQuery($array_query)
{
    $tmp = array();
    foreach($array_query as $k=>$param)
    {
        $tmp[] = $k.'='.$param;
    }
    $params = implode('&',$tmp);
    return $params;
}

