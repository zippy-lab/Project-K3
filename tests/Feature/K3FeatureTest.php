<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class K3FeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Uji pemuatan halaman utama K3 Software Engineering.
     */
    public function test_k3_home_page_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('K3 dalam Lingkungan');
        $response->assertSee('Software Engineering');
        $response->assertSee('Ergonomi di Depan Komputer');
    }

    /**
     * Uji endpoint pengumpulan kuis K3 dan validasi skor di backend.
     */
    public function test_quiz_can_be_submitted_and_evaluated(): void
    {
        // Berikan semua jawaban benar
        $answers = [
            0 => 1,
            1 => 1,
            2 => 1,
            3 => 1,
            4 => 3,
            5 => [0, 2, 3],
            6 => 1,
            7 => 1,
            8 => 2,
            9 => 1,
            10 => 1,
            11 => 1,
            12 => 1,
            13 => 1,
            14 => 2,
        ];

        $response = $this->postJson(route('k3.quiz.submit'), [
            'student_name' => 'Ahmad Siswa PPLG',
            'answers' => $answers,
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'score' => 100,
            'correct_count' => 15,
            'incorrect_count' => 0,
            'unanswered_count' => 0,
            'passed' => true,
        ]);

        $this->assertDatabaseHas('quiz_attempts', [
            'student_name' => 'Ahmad Siswa PPLG',
            'score' => 100,
            'correct_count' => 15,
            'passed' => 1,
        ]);
    }

    /**
     * Uji kasus kuis dengan jawaban sebagian kosong atau salah.
     */
    public function test_quiz_handles_partial_and_incorrect_answers(): void
    {
        // Hanya jawab 1 soal yang benar
        $answers = [
            0 => 1,
            1 => 0, // salah
        ];

        $response = $this->postJson(route('k3.quiz.submit'), [
            'student_name' => 'Budi',
            'answers' => $answers,
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'correct_count' => 1,
            'passed' => false,
        ]);

        $this->assertDatabaseCount('quiz_attempts', 1);
    }
}
