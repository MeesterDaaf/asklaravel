<?php

namespace App\Http\Controllers;

use App\Models\ScoreboardQuestion;
use App\Http\Requests\StoreScoreboardQuestionRequest;
use App\Http\Requests\UpdateScoreboardQuestionRequest;

class ScoreboardQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScoreboardQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScoreboardQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScoreboardQuestion  $scoreboardQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ScoreboardQuestion $scoreboardQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScoreboardQuestion  $scoreboardQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ScoreboardQuestion $scoreboardQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScoreboardQuestionRequest  $request
     * @param  \App\Models\ScoreboardQuestion  $scoreboardQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScoreboardQuestionRequest $request, ScoreboardQuestion $scoreboardQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScoreboardQuestion  $scoreboardQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScoreboardQuestion $scoreboardQuestion)
    {
        //
    }
}
