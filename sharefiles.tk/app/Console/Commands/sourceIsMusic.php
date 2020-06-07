<?php

namespace App\Console\Commands;

use App\File;
use App\Library\GenerateName;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class sourceIsMusic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'source:music {request}';

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
     * @return mixed
     */
    public function handle()
    {
        $request = $this->argument('request');

        $music = $request->file;

        $fileExtention = $music->getClientOriginalExtension();

        $file_name = GenerateName::GenerateName();
        try {
            $file = new File();
            $file->user_id = Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $music->storeAs('/music', $file->file_name, 'public');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
