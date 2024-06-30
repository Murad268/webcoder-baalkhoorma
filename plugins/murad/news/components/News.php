<?php

namespace Murad\News\Components;

use Cms\Classes\ComponentBase;
use Murad\News\Models\News as ModelsNews;


/**
 * News Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class News extends ComponentBase
{
    public function onRun()
    {
        $sort = $this->param('sort');
        $perPage = 9;


        switch ($sort) {
            case 'a-z':
                $data = ModelsNews::orderBy('title', 'asc')->where('is_active', 1)->take($perPage)->get();
                break;
            case 'z-a':
                $data = ModelsNews::orderBy('title', 'desc')->where('is_active', 1)->take($perPage)->get();
                break;
            case 'newest':
                $data = ModelsNews::orderBy('created_at', 'asc')->where('is_active', 1)->take($perPage)->get();
                break;
            case 'oldest':
                $data = ModelsNews::orderBy('created_at', 'desc')->where('is_active', 1)->take($perPage)->get();
                break;
        }


        $this->page['data'] = $data;
        $this->page['page'] = $perPage;
        $hasButton = $perPage >= ModelsNews::count();
        $this->page['hasButton'] = !$hasButton;
    }

    public function componentDetails()
    {
        return [
            'name' => 'News Component',
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
    public function onLoadMore()
    {
        $page = post('page', 1);
        $perPage = 4;
        $newPage = $page + $perPage;
        $sort = $this->param('sort');

        switch ($sort) {
            case 'a-z':
                $data = ModelsNews::orderBy('title', 'asc')->where('is_active', 1)->skip($page)->take($perPage)->get();;
                break;
            case 'z-a':
                $data = ModelsNews::orderBy('title', 'desc')->where('is_active', 1)->skip($page)->take($perPage)->get();
                break;
            case 'newest':
                $data = ModelsNews::orderBy('created_at', 'desc')->where('is_active', 1)->skip($page)->take($perPage)->get();
                break;
            case 'oldest':
                $data = ModelsNews::orderBy('created_at', 'asc')->where('is_active', 1)->skip($page)->take($perPage)->get();
                break;
        }

        return [
            'html' => $this->renderPartial('news::news', ['data' => $data]),
            'page' => $newPage
        ];
    }




}
