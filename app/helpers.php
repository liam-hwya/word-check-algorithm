<?php

function highlightWords($content, $keyword)
 {
    if(is_array($keyword)){
        foreach ( $keyword as $word )
        {
            $content = str_ireplace($word, '<span class="highlight">'.$word.'</span>', $content);
        }
    } else {
        $content = str_ireplace($keyword, '<span class="highlight">'.$keyword.'</span>', $content);        
    }
    return $content;
}
?>