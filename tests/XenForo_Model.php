<?php

class XenForo_Model
{
	public static function create($className)
	{
		return new $className;
	}
}