<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteStat;
use App\Models\VisitorComment;
use App\Models\Testimonial;

class CounterController extends Controller
{
    /**
     * Increment visitor counter
     */
    public function incrementVisitor()
    {
        $count = SiteStat::incrementValue('visitors');
        return response()->json(['success' => true, 'count' => $count]);
    }

    /**
     * Toggle like
     */
    public function toggleLike(Request $request)
    {
        $action = $request->input('action', 'like'); // 'like' or 'unlike'
        
        if ($action === 'like') {
            $count = SiteStat::incrementValue('likes');
        } else {
            $currentCount = SiteStat::getValue('likes');
            $count = max(0, $currentCount - 1);
            SiteStat::setValue('likes', $count);
        }
        
        return response()->json(['success' => true, 'count' => $count]);
    }

    /**
     * Add comment
     */
    public function addComment(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'comment' => 'required|string|max:1000'
        ]);

        $comment = VisitorComment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'ip_address' => $request->ip()
        ]);

        // Increment comment counter
        $commentCount = SiteStat::incrementValue('comments');

        return response()->json([
            'success' => true,
            'comment' => [
                'id' => $comment->id,
                'name' => $comment->display_name,
                'comment' => $comment->comment,
                'time_ago' => $comment->time_ago
            ],
            'total_comments' => $commentCount
        ]);
    }

    /**
     * Get recent comments
     */
    public function getComments()
    {
        $comments = VisitorComment::approved()->recent(5)->get();
        
        return response()->json([
            'success' => true,
            'comments' => $comments->map(function($comment) {
                return [
                    'id' => $comment->id,
                    'name' => $comment->display_name,
                    'comment' => $comment->comment,
                    'time_ago' => $comment->time_ago
                ];
            })
        ]);
    }

    /**
     * Get all stats
     */
    public function getStats()
    {
        $stats = [
            'visitors' => SiteStat::getValue('visitors', 15420),
            'likes' => SiteStat::getValue('likes', 8924),
            'comments' => SiteStat::getValue('comments', 3247),
            'satisfaction' => SiteStat::getValue('satisfaction', 98)
        ];

        return response()->json(['success' => true, 'stats' => $stats]);
    }

    /**
     * Get testimonials for carousel
     */
    public function getTestimonials()
    {
        $testimonials = Testimonial::active()->ordered()->get();
        
        return response()->json([
            'success' => true,
            'testimonials' => $testimonials
        ]);
    }
}
