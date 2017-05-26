<?php

use Illuminate\Database\Seeder;

class CompaniesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$lorem=" <h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
    	DB::table('companies')->insert(
	        [
	        	
				[
					'company_name' =>  'First News - Trí Việt',
					'company_info' => 'Công ty phát hành sách: <b>First News - Trí Việt</b>'.$lorem,
					'company_image' => '/storage/app/company-image/fn.jpg'
					 
				],
				[
					'company_name' =>  'Công ty Văn hóa Hương Trang',
					'company_info' => 'Công ty phát hành sách: <b>Công ty Văn hóa Hương Trang</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Skybooks',
					'company_info' => 'Công ty phát hành sách: <b>Skybooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Người Trẻ Việt',
					'company_info' => 'Công ty phát hành sách: <b>Người Trẻ Việt</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Quảng Văn',
					'company_info' => 'Công ty phát hành sách: <b>Quảng Văn</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'NXB Trẻ',
					'company_info' => 'Công ty phát hành sách: <b>NXB Trẻ</b>'.$lorem,
					'company_image' => '/storage/app/company-image/tre.png'
				],
				[
					'company_name' =>  'Limbooks',
					'company_info' => 'Công ty phát hành sách: <b>Limbooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Đinh Tị',
					'company_info' => 'Công ty phát hành sách: <b>Đinh Tị</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Alphabooks',
					'company_info' => 'Công ty phát hành sách: <b>Alphabooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'DT Books',
					'company_info' => 'Công ty phát hành sách: <b>DT Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'NXB Tổng Hợp',
					'company_info' => 'Công ty phát hành sách: <b>NXB Tổng Hợp</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty CP Văn Hóa Nhân Văn',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty CP Văn Hóa Nhân Văn</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty TNHH Thương Mại STK',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty TNHH Thương Mại STK</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'MCBooks',
					'company_info' => 'Công ty phát hành sách: <b>MCBooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Minh Long',
					'company_info' => 'Công ty phát hành sách: <b>Minh Long</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Thái Hà',
					'company_info' => 'Công ty phát hành sách: <b>Thái Hà</b>'.$lorem,
					'company_image' => '/storage/app/company-image/logo-thai-ha.jpg'
				],
				[
					'company_name' =>  'Nhã Nam',
					'company_info' => 'Công ty phát hành sách: <b>Nhã Nam</b>'.$lorem,
					'company_image' => '/storage/app/company-image/nhanam.jpg'
				],
				[
					'company_name' =>  'Nhà sách Minh Thắng',
					'company_info' => 'Công ty phát hành sách: <b>Nhà sách Minh Thắng</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Đông Nam',
					'company_info' => 'Công ty phát hành sách: <b>Đông Nam</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Phương Nam',
					'company_info' => 'Công ty phát hành sách: <b>Phương Nam</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'NXB Chính Trị Quốc Gia',
					'company_info' => 'Công ty phát hành sách: <b>NXB Chính Trị Quốc Gia</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Báo Sinh Viên VN - Hoa Học Trò',
					'company_info' => 'Công ty phát hành sách: <b>Báo Sinh Viên VN - Hoa Học Trò</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'T.pot Journal',
					'company_info' => 'Công ty phát hành sách: <b>T.pot Journal</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'TGM Books',
					'company_info' => 'Công ty phát hành sách: <b>TGM Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Megabook',
					'company_info' => 'Công ty phát hành sách: <b>Megabook</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  '1980 Books',
					'company_info' => 'Công ty phát hành sách: <b>1980 Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Văn Lang',
					'company_info' => 'Công ty phát hành sách: <b>Văn Lang</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty Sách Thời Đại',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty Sách Thời Đại</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Phụ Nữ',
					'company_info' => 'Công ty phát hành sách: <b>Phụ Nữ</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Tôi Tự Làm',
					'company_info' => 'Công ty phát hành sách: <b>Tôi Tự Làm</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà Xuất Bản Kim Đồng',
					'company_info' => 'Công ty phát hành sách: <b>Nhà Xuất Bản Kim Đồng</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Đông A',
					'company_info' => 'Công ty phát hành sách: <b>Đông A</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Khang Việt Book',
					'company_info' => 'Công ty phát hành sách: <b>Khang Việt Book</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty Cồ Phần Sách & Thiết Bị Giáo Dục Miền Nam',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty Cồ Phần Sách & Thiết Bị Giáo Dục Miền Nam</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Phương Thu',
					'company_info' => 'Công ty phát hành sách: <b>Phương Thu</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Lantabra',
					'company_info' => 'Công ty phát hành sách: <b>Lantabra</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Huy Hoang Bookstore',
					'company_info' => 'Công ty phát hành sách: <b>Huy Hoang Bookstore</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'CÔNG TY TNHH MTV TRÍ TUỆ',
					'company_info' => 'Công ty phát hành sách: <b>CÔNG TY TNHH MTV TRÍ TUỆ</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhân Trí Việt',
					'company_info' => 'Công ty phát hành sách: <b>Nhân Trí Việt</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Trí Việt',
					'company_info' => 'Công ty phát hành sách: <b>Trí Việt</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Sài Gòn Tiến Thịnh',
					'company_info' => 'Công ty phát hành sách: <b>Sài Gòn Tiến Thịnh</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Bloom Books',
					'company_info' => 'Công ty phát hành sách: <b>Bloom Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà Sách Hồng Ngọc',
					'company_info' => 'Công ty phát hành sách: <b>Nhà Sách Hồng Ngọc</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Lê Đình Thuyên',
					'company_info' => 'Công ty phát hành sách: <b>Lê Đình Thuyên</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'IPM',
					'company_info' => 'Công ty phát hành sách: <b>IPM</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Minhchaubooks',
					'company_info' => 'Công ty phát hành sách: <b>Minhchaubooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'TKBooks',
					'company_info' => 'Công ty phát hành sách: <b>TKBooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà sách Đống Đa',
					'company_info' => 'Công ty phát hành sách: <b>Nhà sách Đống Đa</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'SP book',
					'company_info' => 'Công ty phát hành sách: <b>SP book</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Oxford University Press',
					'company_info' => 'Công ty phát hành sách: <b>Oxford University Press</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Sky Mommy',
					'company_info' => 'Công ty phát hành sách: <b>Sky Mommy</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Tinh Hoa.Net',
					'company_info' => 'Công ty phát hành sách: <b>Tinh Hoa.Net</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Cẩm Phong Books',
					'company_info' => 'Công ty phát hành sách: <b>Cẩm Phong Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà sách lao động',
					'company_info' => 'Công ty phát hành sách: <b>Nhà sách lao động</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'SachVietCo',
					'company_info' => 'Công ty phát hành sách: <b>SachVietCo</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'WeCreate',
					'company_info' => 'Công ty phát hành sách: <b>WeCreate</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công ty Văn Hóa Hương Trang',
					'company_info' => 'Công ty phát hành sách: <b>Công ty Văn Hóa Hương Trang</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà sách Thăng Long',
					'company_info' => 'Công ty phát hành sách: <b>Nhà sách Thăng Long</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Saigon Books',
					'company_info' => 'Công ty phát hành sách: <b>Saigon Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty TNHH Giáo Dục & Đào Tạo Ngôi Sao Xanh',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty TNHH Giáo Dục & Đào Tạo Ngôi Sao Xanh</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Văn Việt',
					'company_info' => 'Công ty phát hành sách: <b>Văn Việt</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà sách Thị Nghè',
					'company_info' => 'Công ty phát hành sách: <b>Nhà sách Thị Nghè</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty Cổ Phần Tri thức Văn Hóa Sách Việt Nam',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty Cổ Phần Tri thức Văn Hóa Sách Việt Nam</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'CÔNG TY CỔ PHẦN SÁCH TRÍ THỨC VIỆT',
					'company_info' => 'Công ty phát hành sách: <b>CÔNG TY CỔ PHẦN SÁCH TRÍ THỨC VIỆT</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Drukpa Viet Nam',
					'company_info' => 'Công ty phát hành sách: <b>Drukpa Viet Nam</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Viện Nghiên Cứu Phát Triển Giáo Dục Ired',
					'company_info' => 'Công ty phát hành sách: <b>Viện Nghiên Cứu Phát Triển Giáo Dục Ired</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Mintbooks',
					'company_info' => 'Công ty phát hành sách: <b>Mintbooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Minh Châu Books',
					'company_info' => 'Công ty phát hành sách: <b>Minh Châu Books</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Bách Việt',
					'company_info' => 'Công ty phát hành sách: <b>Bách Việt</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Việt Thư',
					'company_info' => 'Công ty phát hành sách: <b>Việt Thư</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Cơ Sở Tạp Chí - Thời Trang Kim Thúy',
					'company_info' => 'Công ty phát hành sách: <b>Cơ Sở Tạp Chí - Thời Trang Kim Thúy</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'CTY TNHH VĂN HÓA ĐÔNG TÂY',
					'company_info' => 'Công ty phát hành sách: <b>CTY TNHH VĂN HÓA ĐÔNG TÂY</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Phúc Minh Book',
					'company_info' => 'Công ty phát hành sách: <b>Phúc Minh Book</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Công Ty TNHH TM - DV Chính Thông',
					'company_info' => 'Công ty phát hành sách: <b>Công Ty TNHH TM - DV Chính Thông</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'I Love Cookbooks',
					'company_info' => 'Công ty phát hành sách: <b>I Love Cookbooks</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Nhà sách Minh Trí',
					'company_info' => 'Công ty phát hành sách: <b>Nhà sách Minh Trí</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Ngòi Bút Việt',
					'company_info' => 'Công ty phát hành sách: <b>Ngòi Bút Việt</b>'.$lorem,
					'company_image' => null
				],
				[
					'company_name' =>  'Văn LangCool',
					'company_info' => 'Công ty phát hành sách: <b>Văn LangCool</b>'.$lorem,
					'company_image' => null
				]
	        ]
        );
    }
}
