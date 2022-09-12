<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Todos;

class AddTodosFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:todos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $todos = Http::get('http://jsonplaceholder.typicode.com/todos');
        
        foreach ($todos->json() as $todo){
            Todos::create([
                'title' => $todo['title'],
                'completed' => $todo['completed']  
            ]);
        }
    }
}
