<?php 


$content =" Lorem ipsum dolor, sit rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrramet consectetur adipisicing elit. Eaque, at soluta! Cupiditate soluta laborum mollitia obcaecati quas labore quidem culpa!";

$wordwrap = wordwrap($content,26,"\n",true);

echo $wordwrap;