<?php

// 将路由转换成css类名称
function route_class() {
	return str_replace('.', '-', Route::currentRouteName());
}