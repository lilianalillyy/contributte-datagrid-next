<?php declare(strict_types = 1);

namespace Contributte\Datagrid\Traits;

use Nette\Utils\Html;
use Contributte\Datagrid\Datagrid;

trait TButtonTryAddIcon
{

	public function tryAddIcon(Html $el, ?string $iconString, string $name): void
	{
		if ($iconString !== null) {
			$iconClass = '';

			foreach (explode(' ', $iconString) as $icon) {
				$iconClass .= ' ' . Datagrid::$iconPrefix . $icon;
			}

			$el->addHtml(Html::el('span')->setAttribute('class', trim($iconClass)));

			if (mb_strlen($name) > 1) {
				$el->addHtml('&nbsp;');
			}
		}
	}

}
