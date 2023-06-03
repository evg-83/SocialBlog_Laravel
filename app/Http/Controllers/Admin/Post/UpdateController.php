<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();   //запрос
        $post = $this->service->update($data, $post);  //взаимодействие с БД

        return view('admin.post.show', compact('post'));
    }
}
