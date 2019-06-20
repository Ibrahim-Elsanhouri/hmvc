<?php 
function buildPrefix(string $moduleName , string $type){
return   
config($moduleName.'.prefix.'.$type , config('module.prefix.'.$type)).'/'.config($moduleName.'.prefix.module-name');
}