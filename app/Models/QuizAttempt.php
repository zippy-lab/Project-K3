<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'student_name',
        'score',
        'correct_count',
        'incorrect_count',
        'total_questions',
        'xp_earned',
        'passed',
        'answers',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'passed' => 'boolean',
        'answers' => 'array',
        'score' => 'integer',
        'correct_count' => 'integer',
        'incorrect_count' => 'integer',
        'total_questions' => 'integer',
        'xp_earned' => 'integer',
    ];
}
