<?php

use Illuminate\Database\Seeder;

class CategoriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
	         	[
					[
			            'category_name' =>  'Sách Tiếng Việt ',
			            'parent_id' => 0,
			            'order' => 1
			        ],
					[
			            'category_name' =>  ' Sách Tiếng Anh',
			            'parent_id' => 0,
			            'order' => 2
			        ],
					[
			            'category_name' =>  ' Sách Văn Học',
			            'parent_id' => 1,
			            'order' => 1
			        ],
					[
			            'category_name' =>  'Sách Thiếu Nhi ',
			            'parent_id' => 1,
			            'order' => 2
			        ],
					[
			            'category_name' =>  'Sách Kỹ Năng - Sống Đẹp',
			            'parent_id' => 1,
			            'order' => 3
			        ],
					[
			            'category_name' =>  'Sách Kinh Tế',
			            'parent_id' => 1,
			            'order' => 4
			        ],
					[
			            'category_name' =>  'Sách Nuôi Dạy Con',
			            'parent_id' => 1,
			            'order' => 5
			        ],
					[
			            'category_name' =>  'Sách Tham Khảo',
			            'parent_id' => 1,
			            'order' => 6
			        ],
					[
			            'category_name' =>  'Sách Giáo Khoa',
			            'parent_id' => 1,
			            'order' => 7
			        ],
					[
			            'category_name' =>  'Sách Học Ngoại Ngữ',
			            'parent_id' => 1,
			            'order' => 8
			        ],
					[
			            'category_name' =>  'Từ Điển',
			            'parent_id' => 1,
			            'order' => 9
			        ],
					[
			            'category_name' =>  'Truyện Tranh, Manga, Comic',
			            'parent_id' => 1,
			            'order' => 10
			        ],
					[
			            'category_name' =>  'Giáo Trình Đại Học - Cao Đẳng',
			            'parent_id' => 1,
			            'order' => 11
			        ],
					[
			            'category_name' =>  'Sách Kiến Thức Tổng Hợp',
			            'parent_id' => 1,
			            'order' => 12
			        ],
					[
			            'category_name' =>  'Sách Khoa Học - Kỹ Thuật',
			            'parent_id' => 1,
			            'order' => 13
			        ],
					[
			            'category_name' =>  'Sách Văn Hoá - Địa Lý - Du Lịch',
			            'parent_id' => 1,
			            'order' => 14
			        ],
					[
			            'category_name' =>  'Sách Tôn Giáo - Tâm Linh',
			            'parent_id' => 1,
			            'order' => 15
			        ],
					[
			            'category_name' =>  'Sách Chính Trị - Pháp Lý',
			            'parent_id' => 1,
			            'order' => 16
			        ],
					[
			            'category_name' =>  'Sách Nông - Lâm - Ngư Nghiệp',
			            'parent_id' => 1,
			            'order' => 17
			        ],
					[
			            'category_name' =>  'Sách Công Nghệ Thông Tin',
			            'parent_id' => 1,
			            'order' => 18
			        ],
					[
			            'category_name' =>  'Sách Y Học',
			            'parent_id' => 1,
			            'order' => 19
			        ],
					[
			            'category_name' =>  'Tạp Chí - Catalogue',
			            'parent_id' => 1,
			            'order' => 20
			        ],
					[
			            'category_name' =>  'Sách Thường Thức - Đời Sống',
			            'parent_id' => 1,
			            'order' => 21
			        ],
					[
			            'category_name' =>  'Sách Tâm lý - Giới tính',
			            'parent_id' => 1,
			            'order' => 22
			        ],
					[
			            'category_name' =>  'Foreign Language Learning',
			            'parent_id' => 2,
			            'order' => 1
			        ],
					[
			            'category_name' =>  'Fiction - Literature',
			            'parent_id' => 2,
			            'order' => 2
			        ],
					[
			            'category_name' =>  'Children\'s books',
			            'parent_id' => 2,
			            'order' => 3
			        ],
					[
			            'category_name' =>  'Teens',
			            'parent_id' => 2,
			            'order' => 4
			        ],
					[
			            'category_name' =>  'Memoirs - Biographies',
			            'parent_id' => 2,
			            'order' => 5
			        ],
					[
			            'category_name' =>  'How-to - Self help',
			            'parent_id' => 2,
			            'order' => 6
			        ],
					[
			            'category_name' =>  'Economics',
			            'parent_id' => 2,
			            'order' => 7
			        ],
					[
			            'category_name' =>  'Awarded books',
			            'parent_id' => 2,
			            'order' => 8
			        ],
					[
			            'category_name' =>  'Nature - Humanities',
			            'parent_id' => 2,
			            'order' => 9
			        ],
					[
			            'category_name' =>  'Education - Teaching',
			            'parent_id' => 2,
			            'order' => 10
			        ],
					[
			            'category_name' =>  'Non-fiction - Social sciences',
			            'parent_id' => 2,
			            'order' => 11
			        ],
					[
			            'category_name' =>  'Reference',
			            'parent_id' => 2,
			            'order' => 12
			        ],
					[
			            'category_name' =>  'Magazines',
			            'parent_id' => 2,
			            'order' => 13
			        ]
	         	]
         	);
    }
}
