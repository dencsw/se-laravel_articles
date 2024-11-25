<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tag;
class TagCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tag:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Возвращает количество статей, привязанных к тегу по идентификатору';


    /**
     * Execute the console command.
     */
    public function handle()
    {
       
        $tagId = $this->argument('id');

        // ищем тег по id
        $tag = Tag::find($tagId);

        if (!$tag) {
            // Если не найден, исключение
            $this->error("Тег с идентификатором {$tagId} не найден.");
            return;
        }

        // Статьи, привязанных к тегу
        $articleCount = $tag->articles()->count();

        // Вывод 
        $this->info("Количество статей, привязанных к тегу с id [{$tagId}]: {$articleCount}");
    
    }
}
