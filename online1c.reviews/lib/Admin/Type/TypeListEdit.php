<?php
/**
 * Created by OOO 1C-SOFT.
 * User: dremin_s
 * Date: 01.03.2017
 */

namespace Online1c\Reviews\Admin\Type;
use DigitalWand\AdminHelper\Helper;

class TypeListEdit extends Helper\AdminEditHelper
{
	protected static $model = '\\Online1c\\Reviews\\TypesTable';

	public static $titlePage = 'Типы отзывов';

}