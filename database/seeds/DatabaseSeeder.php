<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeederTable::class);
        $this->call(CategoriesSeederTable::class);
        $this->call(AuthorsSeederTable::class);
        $this->call(CompaniesSeederTable::class);
        $this->call(BooksSeederTable::class);

        $this->call(PaymentsSeederTable::class);

        $this->call(OrdersSeederTable::class);

        $this->call(OrderDetailsSeederTable::class);

        $this->call(CommentsSeederTable::class);

        $this->call(SlidesSeederTable::class);
        $this->call(SavesSeederTable::class);
    }
}
