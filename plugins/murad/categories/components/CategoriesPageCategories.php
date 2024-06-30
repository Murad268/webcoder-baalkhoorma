<?php

namespace Murad\Categories\Components;

use Cms\Classes\ComponentBase;
use Murad\Categories\Models\Categories;
use Murad\Products\Models\Products;

/**
 * CategoriesPageCategories Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CategoriesPageCategories extends ComponentBase
{
    
    
    public function indexMy($slug) {
            
$selectedCategory = Categories::where('slug', $slug)->first();
$selectedCategories = Categories::where('parent_id', $selectedCategory->id)->get();
$filter = $this->param('filter');
$perPage = 1;

// Seçili kategorinin tüm alt kategorilerini al
$allSubCategories = Categories::where('parent_id', $selectedCategory->id)->pluck('id');

// Tüm alt kategorilerin ürünlerini getir
$selectedProducts = Products::orderByDesc('created_at')
    ->whereIn('category_id', $allSubCategories)
    ->orWhere('category_id', $selectedCategory->id) // Include products from the selected category as well
    ->where('is_active', 1);

// Apply additional filters if provided


$selectedProducts = $selectedProducts->take($perPage)->get();
return $selectedProducts ;
    }
    
    
    
    
    
    
public function onRun()
{
    $slug = $this->param('slug');

    $selectedCategory = Categories::where('slug', $slug)->first();
    if (!$selectedCategory) {
        // Handle the case where the category is not found
        return;
    }

    $selectedCategories = Categories::where('parent_id', $selectedCategory->id)->get();
    $filter = $this->param('filter');
    $perPage = 1;

    // Get all subcategory IDs
    $allSubCategories = Categories::where('parent_id', $selectedCategory->id)->pluck('id');

    // Get products from the selected category and its subcategories
    $selectedProductsQuery = Products::orderByDesc('created_at')
        ->where(function ($query) use ($allSubCategories, $selectedCategory) {
            $query->whereIn('category_id', $allSubCategories)
                  ->orWhere('category_id', $selectedCategory->id);
        })
        ->where('is_active', 1);

    // Apply additional filters if provided
    if ($filter) {
        // Add filter logic here if needed
    }

    $selectedProducts = $selectedProductsQuery->get()->filter(function ($product) {
        return $product->status != 1;
    });

    // Convert collection to array if needed for debugging
    // $selectedProductsArray = $selectedProducts->toArray();
    // dd($selectedProductsArray);

    $this->page['selectedCategories'] = $selectedCategories;
    $this->page['selectedProducts'] = $selectedProducts;
    $this->page['slug'] = $slug;
    $this->page['page'] = $perPage;
}


    public function componentDetails()
    {
        return [
            'name' => 'CategoriesPageCategories Component',
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



  

    public function onLoadMore() {
    $filter = post('filter');
    $page = post('page');
    $perPage = 4;
    $newPage = $page + $perPage;
    $slug = $this->param('slug');
    $selectedCategory = Categories::where('slug', $slug)->first();
       if ($selectedCategory) {
                // Get the ID of the selected category
                $selectedCategoryId = $selectedCategory->id;

                // Get all subcategories IDs for the selected category
               $allSubCategories = Categories::where('parent_id', $selectedCategory->id)->pluck('id');

                // Fetch products for the selected category and its subcategories
                $selectedProducts = Products::orderByDesc('created_at')
                    ->where('is_active', 1)
                  ->whereIn('category_id', $allSubCategories)
    ->orWhere('category_id', $selectedCategory->id)
                    ->skip($page)
                    ->take($perPage)
                    ->get();
                    
    // if ($filter) {
    //     if ($filter == 'all') {
    //         // Retrieve the category for the selected slug
    //         $selectedCategory = Categories::where('slug', $filter)->first();

    //         // Check if the category exists
    //         if ($selectedCategory) {
    //             // Get the ID of the selected category
    //             $selectedCategoryId = $selectedCategory->id;

    //             // Get all subcategories IDs for the selected category
    //             $subcategoryIds = Categories::where('parent_id', $selectedCategoryId)->pluck('id');

    //             // Include the selected category ID in the list
    //             $subcategoryIds[] = $selectedCategoryId;

    //             // Fetch products for the selected category and its subcategories
    //             $selectedProducts = Products::orderByDesc('created_at')
    //                 ->where('is_active', 1)
    //                 ->whereIn('category_id', $subcategoryIds)
    //                 ->skip($page)
    //                 ->take($perPage)
    //                 ->get();
    //         } else {
    //             // Handle the case where the category does not exist
    //             // You may set $selectedProducts to an empty array or handle it as needed
    //             $selectedProducts = [];
    //         }
    //     } else {
    //         // If a specific category is selected, fetch products for that category only
    //         $filterId = Categories::where('slug', $filter)->first()->id;
    //         $selectedProducts = Products::orderByDesc('created_at')
    //             ->where('is_active', 1)
    //             ->where('category_id', $filterId)
    //             ->skip($page)
    //             ->take($perPage)
    //             ->get();
    //     }
    // } else {
    //     // If no filter is applied, fetch products for all categories
    //     $selectedProducts = Products::orderByDesc('created_at')
    //         ->where('is_active', 1)
    //         ->skip($page)
    //         ->take($perPage)
    //         ->get();
    // }


    
    
    
    
    return [
        'html' => $this->renderPartial('categoriespagecategories', ['selectedProducts' => $selectedProducts]),
        'page' => $newPage
    ];
}



}}
