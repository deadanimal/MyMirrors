<?php

use App\Http\Controllers\MirrorController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {


    Route::get('/channels', [MirrorController::class, 'channel_list']);
    Route::get('/channels/{id}', [MirrorController::class, 'channel_view']);
    Route::post('/channels', [MirrorController::class, 'channel_create']);
    Route::put('/channels/{channel_id}/follow', [MirrorController::class, 'channel_follow']); 
    Route::put('/channels/{channel_id}/unfollow', [MirrorController::class, 'channel_unfollow']); 

    Route::get('/mirrors', [MirrorController::class, 'mirror_list']);
    Route::get('/mirrors/{id}', [MirrorController::class, 'mirror_view']);
    Route::post('/mirrors', [MirrorController::class, 'mirror_create']);
    Route::put('/mirrors/{mirror_id}/join', [MirrorController::class, 'mirror_join']);    
    Route::put('/mirrors/{mirror_id}/like', [MirrorController::class, 'mirror_like']);    
    Route::put('/mirrors/{mirror_id}/dislike', [MirrorController::class, 'mirror_dislike']);    
    Route::post('/mirrors/{mirror_id}/comments', [MirrorController::class, 'mirror_comment_create']);
    Route::post('/mirrors/{mirror_id}/comments/{comment_id}', [MirrorController::class, 'mirror_comment_reply']);
    Route::put('/mirrors/{mirror_id}/comments/{comment_id}/like', [MirrorController::class, 'mirror_comment_like']);
    Route::put('/mirrors/{mirror_id}/comments/{comment_id}/dislike', [MirrorController::class, 'mirror_comment_dislike']);
    Route::put('/mirrors/{mirror_id}/personalise', [MirrorController::class, 'mirror_personalise']);    
    Route::post('/mirrors/{mirror_id}/products', [MirrorController::class, 'mirror_product_add']);    
    Route::put('/mirrors/{mirror_id}/products/{product_id}', [MirrorController::class, 'mirror_product_update']);    
    
    Route::get('/mirror-broadcasts', [MirrorController::class, 'mirror_broadcast_list']);
    Route::get('/mirror-broadcasts/{id}', [MirrorController::class, 'mirror_broadcast_view']);
    Route::post('/mirror-broadcasts', [MirrorController::class, 'mirror_broadcast_create']);
    Route::put('/mirror-broadcasts/{mirror_broadcast_id}/join', [MirrorController::class, 'mirror_broadcast_join']);    

    Route::get('/mirror-lives', [MirrorController::class, 'mirror_live_list']);
    Route::get('/mirror-lives/{id}', [MirrorController::class, 'mirror_live_view']);
    Route::post('/mirror-lives', [MirrorController::class, 'mirror_live_create']);
    Route::put('/mirror-lives/{mirror_live_id}/join', [MirrorController::class, 'mirror_live_join']);      
    
});
