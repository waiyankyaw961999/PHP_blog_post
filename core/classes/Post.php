<?php

class Post
{
    public static function all()
    {
        $data = DB::table('articles')->orderBy('id', 'DESC')->paginate(2);
        foreach ($data['data'] as $k => $d) {
            $data['data'][$k]->comment_count = DB::table('article_comments')->where('article_id', $d->id)->count();
            $data['data'][$k]->like_count = DB::table('article_likes')->where('article_id', $d->id)->count();
        }
        return $data;
    }

    public static function detail($slug)
    {
        $data = DB::table('articles')->where('slug', $slug)->getOne();

        $data->languages = DB::raw("SELECT article_id,language_id,languages.name from article_language
LEFT JOIN languages on languages.id = article_language.language_id where article_id={$data->id}")->getOne();

        $data->comments = DB::table('article_comments')->where('article_id', $data->id)->getOne();
        $data->category = DB::table('category')->where('id', $data->category_id)->getOne();
        $data->comment_count = DB::table('article_comments')->where('article_id', $data->id)->count();
        $data->like_count = DB::table('article_likes')->where('article_id', $data->id)->count();
        return $data;
    }
}