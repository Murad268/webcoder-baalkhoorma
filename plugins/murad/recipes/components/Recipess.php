<?php namespace Murad\Recipes\Components;

use Cms\Classes\ComponentBase;
use Murad\Recipes\Models\RECIPES;

/**
 * Recipess Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Recipess extends ComponentBase
{
    public function onRun()
    {
     
        $sort = $this->param('sort');
        $perPage = 9;


        switch ($sort) {
            case 'a-z':
                $data = RECIPES::orderBy('title', 'asc')->where('is_active', 1)->take($perPage)->get();
                break;
            case 'z-a':
                $data = RECIPES::orderBy('title', 'desc')->where('is_active', 1)->take($perPage)->get();
                break;
            case 'newest':
                $data = RECIPES::orderBy('created_at', 'asc')->where('is_active', 1)->take($perPage)->get();
                break;
            case 'oldest':
                $data = RECIPES::orderBy('created_at', 'desc')->where('is_active', 1)->take($perPage)->get();
                break;
        }
        $this->page['data'] = $data;
        $this->page['page'] = $perPage;
        $this->page['sort'] = $sort;

        $hasButton = $perPage > RECIPES::count();
        $this->page['hasButton'] = !$hasButton;


    }
    public function componentDetails()
    {
        return [
            'name' => 'Recipess Component',
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
                $data = RECIPES::orderBy('title', 'asc')->where('is_active', 1)->skip($page)->take($perPage)->get();;
                break;
            case 'z-a':
                $data = RECIPES::orderBy('title', 'desc')->where('is_active', 1)->skip($page)->take($perPage)->get();;
                break;
            case 'newest':
                $data = RECIPES::orderBy('created_at', 'desc')->where('is_active', 1)->skip($page)->take($perPage)->get();;
                break;
            case 'oldest':
                $data = RECIPES::orderBy('created_at', 'asc')->where('is_active', 1)->skip($page)->take($perPage)->get();;
                break;
        }

        return [
            'html' => $this->renderPartial('recipes::recipes', ['data' => $data]),
            'page' => $newPage,
            'sort' => $sort
        ];
    }



}
