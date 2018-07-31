<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SupportDatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoryTableSeeder::class);
        $this->call(TicketStatusTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(LocationGroupTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(MachineTypeTableSeeder::class);
        $this->call(MachineTableSeeder::class);
        $this->call(MachineLogTableSeeder::class);
        $this->call(MachineNoteTableSeeder::class);
        $this->call(MachineNoteAttachmentTableSeeder::class);
        $this->call(SoftwareCategoryTableSeeder::class);
        $this->call(SoftwareTableSeeder::class);
        $this->call(SoftwareInstalledTableSeeder::class);
        $this->call(TicketAttachmentTableSeeder::class);
        $this->call(TicketCommentAttachmentTableSeeder::class);
        $this->call(TicketLogTableSeeder::class);
        $this->call(TicketWorkerTableSeeder::class);
    }
}
