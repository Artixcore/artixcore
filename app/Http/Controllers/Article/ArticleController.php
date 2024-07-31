<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArtixcorePhoto;
use App\Models\ArtixcoreVideo;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function articlestore(Request $request)
    {
        $content = new Article();
        $content->number = "A" . uniqid();
        $content->title = $request->title;
        $content->article_type = $request->article_type;
        $content->author_id = Auth::user()->id;
        // $content->article_url = $request->article_url;
        $content->subject = $request->subject;
        $content->short_desc = $request->short_desc;
        // $content->content = $request->content;

        // Handle primary image upload
        if ($request->hasFile('primary_image')) {
            if ($content->primaryImage) {
                // Delete the existing image
                Storage::disk('public')->delete($content->primaryImage->image_file);
                $content->primaryImage->delete();
            }

            // Get the original file name
            $originalName = $request->file('primary_image')->getClientOriginalName();
            // Store the image with the original name
            $imagePathaa = $request->file('primary_image')->storeAs('images', $originalName, 'public');

            $content->primary_image = $imagePathaa;
        }

        // Handle additional image upload
        if ($request->hasFile('image')) {
            if ($content->image) {
                // Delete the existing image
                Storage::disk('public')->delete($content->image->image_file);
                $content->image->delete();
            }

            // Get the original file name
            $originalName = $request->file('image')->getClientOriginalName();
            // Store the image with the original name
            $imagePath = $request->file('image')->storeAs('images', $originalName, 'public');

            // Create new image record
            $image = ArtixcorePhoto::create([
                'user_id' => Auth::user()->id,
                'number' => "p". uniqid(),
                'image_for' => 'article',
                'image_from' => 'article_form',
                'image_title' => $originalName,
                'image_file' =>  $imagePath, // Save the original file name
            ]);
            $content->image_id = $image->id;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            if ($content->video) {
                // Delete the existing video
                Storage::disk('public')->delete($content->video->video_file);
                $content->video->delete();
            }

            // Get the original file name
            $originalName = $request->file('video')->getClientOriginalName();
            // Store the video with the original name
            $videoPath = $request->file('video')->storeAs('videos', $originalName, 'public');

            // Create new video record
            $video = ArtixcoreVideo::create([
                'user_id' => Auth::user()->id,
                'number' => "V". uniqid(),
                'video_for' => 'article',
                'video_from' => 'article_form',
                'video_title' => $originalName,
                'video_file' =>  $videoPath,// Save the original file name
            ]);
            $content->video_id = $video->id;
        }

        // Save the article
        $content->save();

        return back()->with('success', 'Article updated successfully.');
    }


    public function articleupdate(Request $request, Article $content)
    {
        $content->title = $request->title;
        $content->article_type = $request->article_type;
        $content->author_id = Auth::user()->id;
        $content->content_url = $request->content_url;
        $content->subject = $request->subject;
        $content->short_desc = $request->short_desc;
        $content->content = $request->content;

        // Handle primary image upload
        if ($request->hasFile('primary_image')) {
            if ($content->primaryImage) {
                // Delete the existing image
                Storage::disk('public')->delete($content->primaryImage->image_file);
                $content->primaryImage->delete();
            }

            // Get the original file name
            $originalName = $request->file('primary_image')->getClientOriginalName();
            // Store the image with the original name
            $imagePathss = $request->file('primary_image')->storeAs('images', $originalName, 'public');

            $content->primary_image = $imagePathss;
        }

        // Handle additional image upload
        if ($request->hasFile('image')) {
            if ($content->image) {
                // Delete the existing image
                Storage::disk('public')->delete($content->image->image_file);
                $content->image->delete();
            }

            // Get the original file name
            $originalName = $request->file('image')->getClientOriginalName();
            // Store the image with the original name
            $imagePath = $request->file('image')->storeAs('images', $originalName, 'public');

            // Create new image record
            $image = ArtixcorePhoto::create([
                'user_id' => Auth::user()->id,
                'number' => $request->number,
                'image_for' => 'article',
                'image_from' => 'article_form',
                'image_title' => $request->title,
                'image_file' => $originalName // Save the original file name
            ]);
            $content->image_id = $image->id;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            if ($content->video) {
                // Delete the existing video
                Storage::disk('public')->delete($content->video->video_file);
                $content->video->delete();
            }

            // Get the original file name
            $originalName = $request->file('video')->getClientOriginalName();
            // Store the video with the original name
            $videoPath = $request->file('video')->storeAs('videos', $originalName, 'public');

            // Create new video record
            $video = ArtixcoreVideo::create([
                'user_id' => Auth::user()->id,
                'number' => $request->number,
                'video_for' => 'article',
                'video_from' => 'article_form',
                'video_title' => $request->title,
                'video_file' => $originalName // Save the original file name
            ]);
            $content->video_id = $video->id;
        }

        // Save the article
        $content->save();

        return back()->with('success', 'Article updated successfully.');
    }

    public function articledestroy($id)
    {
        // Find the article or fail
        $article = Article::findOrFail($id);

        // Delete associated images if any
        if ($article->primaryImage) {
            Storage::disk('public')->delete($article->primaryImage->image_file);
            $article->primaryImage->delete();
        }

        if ($article->image) {
            Storage::disk('public')->delete($article->image->image_file);
            $article->image->delete();
        }

        // Delete associated video if any
        if ($article->video) {
            Storage::disk('public')->delete($article->video->video_file);
            $article->video->delete();
        }

        // Finally, delete the article itself
        $article->delete();

        // Redirect back with success message
        return back()->with('success', 'Article deleted successfully.');
    }
}
