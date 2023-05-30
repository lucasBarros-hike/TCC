<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\ChatPost;
use App\Models\ForumPost;
use App\Models\ForumAnswer;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Lucas Barros',
            'email' => 'lucas.barros104@etec.sp.gov.br',
            'password' => '1234'
        ]);

        $user2 = User::create([
            'name' => 'Amanda Santos',
            'email' => 'amanda.santos72@etec.sp.gov.br',
            'password' => '1234'
        ]);

        $user3 = User::create([
            'name' => 'João Batista',
            'email' => 'joao.batista14@etec.sp.gov.br',
            'password' => '1234'
        ]);

        ForumPost::create([
            'user_id' => $user1->id,
            'question' => 'Como centralizo uma div?',
            'subject' => 'CSS'
        ]);

        ForumPost::create([
            'user_id' => $user2->id,
            'question' => 'Como crio uma função?',
            'subject' => 'JavaScript'
        ]);

        ForumPost::create([
            'user_id' => $user3->id,
            'question' => 'Como programo em Laravel?',
            'subject' => 'PHP'
        ]);

        ForumPost::create([
            'user_id' => $user1->id,
            'question' => 'Como crio formulários?',
            'subject' => 'HTML'
        ]);

        ChatPost::create([
            'user_id' => $user3->id,
            'message' => 'Boa noite, pessoal. Estou com dificuldades em flexbox numa atividade. Alguém pode me ajudar?',
            'subject' => 'Programação Web'
        ]);

        ChatPost::create([
            'user_id' => $user2->id,
            'message' => 'Boa noite, João. Se conseguir, poste sua dúvida no fórum, vamos responder por lá.',
            'subject' => 'Programação Web'
        ]);
    }
}
