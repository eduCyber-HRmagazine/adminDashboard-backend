<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryArticleRequest;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = ArticleCategory::Query();
        if ($search = Request()->catergory) {
            $query->where("subCategory", "LIKE", "%$search%");
        }
        $categories = $query->get();

        return view("Admin.article.allCategory", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.article.addCategory");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryArticleRequest $request)
    {
        try {
            $data = $this->prepareData($request);
            ArticleCategory::create($data);

            return redirect()
                ->route('admin.articleCategories.index')
                ->with(['messages' => json_encode(['success' => ['Category created Successfully']])]);
        } catch (\Throwable $exception) {
            return redirect()
                ->route('admin.articleCategories.index')
                ->with(['messages' => json_encode(['error' => ['Error creating category: ' . $exception->getMessage()]])]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryArticleRequest $request, $slug)
    {
        try {
            $categoryArticle = ArticleCategory::where("slug", $slug)->first();

            if(!$categoryArticle || !$categoryArticle->canModified) {
                throw new \Exception('Category Cannot be modified');
            }

            $data = $this->prepareData($request);
            $categoryArticle->update($data);

            return redirect()
                ->route('admin.articleCategories.index')
                ->with(['messages' => json_encode(['success' => ['Category updated Successfully']])]);
        } catch (\Throwable $exception) {
            return redirect()
                ->route('admin.articleCategories.index')
                ->with(['messages' => json_encode(['error' => ['Error updating category: ' . $exception->getMessage()]])]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        try {
            $categoryArticle = ArticleCategory::where('slug', $slug)->first();

            if(!$categoryArticle->canModified) {
                throw new \Exception('Category Cannot be deleted');
            }

            $categoryArticle->delete();

            return redirect()
                ->route('admin.articleCategories.index')
                ->with(['messages' => json_encode(['success' => ['Category deleted Successfully']])]);
        } catch (\Throwable $exception) {
            return redirect()
                ->route('admin.articleCategories.index')
                ->with(['messages' => json_encode(['error' => ['Error deleting category: ' . $exception->getMessage()]])]);
        }
    }

    private function prepareData($request): array
    {
        return [
            "articleCategoryName" => $request["articleCategoryName"],
            "subCategory" => $request["subCategory"],
            "hasComments" => isset($request['hasComments']),
            "hasSource" => isset($request['hasSource']),
            "hasYoutubeLink" => isset($request['hasYoutubeLink']),
            "hasAuthor" => isset($request['hasAuthor']),
            "canModified" => 1,
        ];
    }
}
