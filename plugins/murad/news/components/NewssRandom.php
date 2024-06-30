<?php namespace Murad\News\Components;

use Cms\Classes\ComponentBase;
use Murad\News\Models\News;

/**
 * NewssRandom Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class NewssRandom extends ComponentBase
{
    public function onRun()
    {
        $slug = $this->param('slug');
        $datas = News::orderByDesc('created_at')->where('slug', '!=', $slug)->paginate(3);
        $this->page['data'] = $datas;
    }

    public function componentDetails()
    {
        return [
            'name' => 'NewssRandom Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
