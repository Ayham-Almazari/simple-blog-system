<?php

namespace App\Http\Controllers;

use App\DataTables\BlogsDataTable;
use App\Helpers\AuthHelper;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Spatie\Permission\Models\Role;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogsDataTable $dataTable)
    {
        $pageTitle = trans('global-message.list_form_title',['form' => trans('blogs.title')] );
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
        $headerAction = '<a href="'.route('blogs.create').'" class="btn btn-sm btn-primary" role="button">Add Blog</a>';
        return $dataTable->render('global.datatable', compact('pageTitle','auth_user','assets', 'headerAction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::where('status',1)->get()->pluck('title', 'id');

        return view('blogs.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        Blog::create($request->safe()->all());
        return redirect()->route('blogs.index')->withSuccess(__('message.msg_added',['name' => __('blogs.store')]));

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.form', ['data' => $blog, 'id'=>$blog->id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->validated());
        return redirect()->back()->withSuccess(__('message.msg_updated',['name' => $blog->title]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success',__('global-message.delete_form', ['form' => __('blogs.title')]));

    }
}
