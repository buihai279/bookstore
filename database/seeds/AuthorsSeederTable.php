<?php

use Illuminate\Database\Seeder;

class AuthorsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert(
	         	[
			        [ 
						'author_name' => '2.1/2 Bạn Tốt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'A.J.Hoge', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Accototo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Adam Khoo & Gary Lee', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Adam Khoo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Agatha Christie', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Akiko Hayashi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alain de Botton', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alan Phan ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alan Watts', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Allan & Barbara Pease', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alphabooks biên soạn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anagarika Govinda', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Andrea Hirata', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Andrew Spooner', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anh Nguyễn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anh Thư - Thu Giang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ann Weil', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anthony Robbins', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anthony Weston', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Antoine De Saint-Exupéry', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Aoyama Gosho', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Arrian', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Arthur Conan Doyle', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Atul Gawande', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Austin Kleon', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bách Dương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bạch Trà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Barbara Pease Allan', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Betty L Khoo-Kingsley', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bill Henderson - Carlos M. Garcia', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bộ Giáo Dục Và Đào Tạo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bonnier Fakta Sweden', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Boris A.Kordemsky', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Brad Stone', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Brendan Debbie Gallagher ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Brette McWhorter Sember', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bruce Bueno de Mesquita', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'BS. Đào Xuân Dũng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'BS Đỗ Hồng Ngọc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Phụng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Quốc Châu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Thị Ánh Tuyết', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Văn Vinh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Camilo Cruz', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cấn Vân Khánh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cao Nhuận', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Carl-Johan Forssén Ehrlin', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Choi Pyong Hee & Go Deuk Seong & Jeong Seong Jin', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Christine Hà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Chu Đình Tới', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Chu Văn Biên ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Claire Throp', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cloud Pillow Studio', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cố Mạn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cố Tây Tước', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cửu Bả Đao', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'D. T. Suzuki', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đại đức Thích Minh Tông', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đại Phát', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dalai Lama', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dale Carnegie', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dan Ariely', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dan Senor & Saul Singer', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đặng Hoàng Giang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đặng Hoàng Xa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đặng Minh Châu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Daniel J. Boorstin', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Daniel R. Castro', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đào Duy Anh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đào Trinh Nhất ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Darshani Deane', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dave Trott', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Denis Gingas Ph.D - Richard Beliveau Ph.D', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Địch Quế Dung', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Diệp Lạc Vô Tâm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đinh Công Bảy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đinh Thị Hương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Anh Thư - Phạm Hương Thuỷ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Hồng Ngọc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Mạnh Hà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Nhật Nam ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Doãn Kiến Lợi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đoạn Mạnh Linh - Đào Huyền Trang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đoàn Thị Điểm ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đới Hiểu Huyên', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Donald J. Trump', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Donna M. Genett Ph.D', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dr. Blair Thomas Spalding', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dr. Mike Goldsmith ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dr. Mirriam Stoppard', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đức Long', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đức Pháp Vương Gyalwang Drukpa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dung Keil', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dương Hương - Hoa Nguyễn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dương Linh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dương Ngọc Hiệp', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đường Thất Công Tử', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Eiichiro Oda', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Elaine Mazlish', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Elizabeth Raum', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Eran Katz', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ernest Hemingway', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Esther Hicks', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Foster Cline & Jim Fay', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Francoize Boucher', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Fujita Hioko - Aka Shozo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gari', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gary Lee', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gary Zukav', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'George W. Bush', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Geshe Michael Roach', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gia Đoàn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Giản Tư Trung', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Giang Văn Toàn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Giáo Sư - Bác Sĩ: Hiromi Shinya MD', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Glenn Doman', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gosho Aoyama', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Greg allikas & Ned Nash', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'GS. Cao Huy Đỉnh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gustave Le Bon', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ha-chu ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hà Hữu Hải - Đoàn Trí Dũng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hà Thành - Trí Việt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hà Yên - Hoài Phương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hachun Lyonnet - Bubu Huong - Mẹ Ong Bông', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hải Đường', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hán Trúc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Harper Lee ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hayashi Akiko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hector Malot', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Henry Kissinger', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Herbert Rosendorfer', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hervé This ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hồ Thị Hải Âu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hòa thượng Thích Thánh Nghiêm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Anh Tú ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Đào - Hương Giang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Đạo Thúy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Sơn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Văn Lộc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hứa Nguyện', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Huyền Linh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Huỳnh Vĩnh Sơn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ian Stewart', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ibuka Masaru', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Inamori Kazuo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'J. D. Salinger', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jack Canfield ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'James Canton', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'James G. Zumwalt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jamgon Mipham', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jared Diamond', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jay Conrad Levinson', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jay M. Feinman', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jeni Stepanek - Larry Lindner', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jocelyn K.Glei', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Johanna Basford', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Blofeld', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Green', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jonas Jonasson ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jostein Gaarder', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Julia V Taylor', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kẩm Nhung', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kamiya - Taeko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kangawa Joshiko - Yagyu Genichiro', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kate Di Camillo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Katrin Himmler', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Katsusuke Serizawa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kazumi Yumoto ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Keith Ferrazzi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ken Kesey ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Khoa Phan', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Byung-Kook - Erza F. Vogel', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Huggens', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Oanh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Woo Choong', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kimura Kyuichi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kito Aya', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Koike Ryunosuke', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'KS. Đỗ Mạnh Dũng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'KS. Thái Hà - Đặng Mai', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ks. Thành Đông - Thanh Hải (biên soạn)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kuroyanagi Tetsuko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'L.G.Alexander', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lâm Xuân Nguyệt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Larry Berman', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Laurence J.Brahm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Bích', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Đăng Khương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Đình Bì. M.A.', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Đình Nguyên', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Hoài Phương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Huy Khoa - Lê Hữu Nhân', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Huy Khoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Ngọc Bích - Phạm Quang Huy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Phạm Thành - Nguyễn Thành Sơn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Thành Khôi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Thanh Nhật - Phạm Quang Hiển', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Linda Goodman', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Linh Trang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Linh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lois Lowry', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lois N.Magner', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lois P.Frankel', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lư Tô Vỹ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Luật sư Nguyễn Ngọc Bích', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lục Trần - Chu Thị Hạnh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Luis Sepulveda', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lý Mẫn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lý Tùng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lya Luft', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mặc Bảo Phi Bảo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mai Hương - Vĩnh Thắng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Makoto Shichida', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Malcolm Gladwell ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mạnh Linh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Márai Sándor', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Marcia Iwatate - Geeta Mehta - Geeta K. Mehta - Nacasa & Partners', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Margaret Sassé', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mary Colson', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Master Sridevi Tố Hải', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Matt Crossick', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mẹ Xu-Sim', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Meg Jay', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mèo Mốc ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Bar-Zohar ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Guillen. Ph.D.', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Gurian', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Hurley', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Cúc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Đạo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Mẫn - Du Phong', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Niệm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mitchell Stephens', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mộc Diệp Tử', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mohammed bin Rashid Al Maktoum', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Morris', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Morris & Goscinny ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'N. Gregory Mankiw', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nancy Dickmann', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Naoko Takeuchi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Napoleon Hill', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nghệ Sĩ Ái Vân', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Huy Hoà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Kế Tựu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Mục Thiên', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Quang Trì', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngọc Bích - Tường Thụy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Anh Đức', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Anh Vinh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Bình Phương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Chấn Hùng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Chu Phác', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Đăng Khoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Danh Vàn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Đức Dân', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Đức Hiếu (biên soạn)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hoàng Bảo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Bắc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Biển', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Đức', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Hưng (chủ biên)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Khắc Khoái', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Khánh Dư ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Kim Dân', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Mạnh Hưởng (chủ biên) - Nguyễn Văn Ninh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Minh Thảo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Ngọc Duy Trâm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyên Ngọc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Nhật Ánh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Phương Mai', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Quỳnh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Sử', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thanh Tuyên (Chủ biên)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Bích Phương (tuyển dịch)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Diệu Thảo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Hồng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Lệ Mỹ - Dương Hương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Thu Hằng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Thu Hiền', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Tôn Nhan - Phú Văn Hẳn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Tường Bách', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Hai', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Khỏa (biên dịch)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Trung', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Tuấn ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhà báo Hàn Ni', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhạc Sĩ Hoài An', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhân Văn Group', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhiều Tác Giả', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm biên soạn Thuận Việt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm Chuyện Của Nghề', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm Ezpsychology', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm Trí Thức Việt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Niall Ferguson', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Niccolo Machiavelli', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nick Arnold', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nick Hunter', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nick Vujicic', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nishi Katsuzo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'NXB Triết Giang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'One & Yusuke Murata', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'ONO Eriko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Osho', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Pam Grout', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Patrick Modiano & Sempé', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Paula Hawkins', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Paulo Coelho ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Peter Kelder', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'PGS. TS. Đặng Hữu Toàn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Công Luận', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Hoài Huấn (chủ biên)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Hữu Cường', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Minh Trung', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Hiển - Phạm Phương Hoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Hiển - Phạm Quang Huy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Lê Cảnh Trung', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Nguyễn Duy Ngọc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Nguyễn Trọng Hiếu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Phạm Phương Hoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Trần Tường Thụy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Thế Long (chủ biên)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Văn Đông', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Vũ Ngọc Nga', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phan Huy Chú ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phan Thị Hồ Điệp', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Pháp Sư Thích Hải Đào', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Philippe M.F.Peycam', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phoenix Ho', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phương Hoa - Quang Hiển', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Quỳnh Thy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ralph Leighton', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Reki Kawahara', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Richard Branson', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Richard H. Thaler', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Richard Wiseman ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Rob Eastaway', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Ashton', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Fulghum', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Greene', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert T. Kiyosaki', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robin Sharma ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Rod Campbell', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ron Bracey ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Rosie Nguyễn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sara Imas', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sara', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sarah Delmege', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Seith M. Siegel', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Seth Godin', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Shinkai Makoto', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Shiv Khera', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Simon Singh ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Som Sujeera', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sơn Nam', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Song Ji Hye (Daria Song)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sophie Mas - Anne Berest - Audrey Diwan - Caroline de Maigret', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Stephen R Covey', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Steven D.Levitt - Stephen J. Dubner', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Steven K. Scott ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sugahara Yuko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Susan Curtis - Pat Thomas - Dragana Vilinac', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Susan L. Shirk', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Swami Vishnu Devananda', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tạ Chí Đại Trường', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tabata Seiichi Nobe Akiko & Shizawa Sayoko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Donald J.Trump', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hạ Vũ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Takano Ichigo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tammy Strobel', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tanith Carey', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thanh Hà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thanh Huyền', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thảo Xù', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'The Sakura', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'The Windy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiên Ân', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiên Kim', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiền sư Philip Kapleau', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiều Chửu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thịnh Nam ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thôi Hiểu Lệ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thomas Cathcart & Daniel Klein', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thomas Harris', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ths. Đỗ Đức Trí', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ths. Trần Thị Hoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thu Giang - Nguyễn Duy Cần', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thu Hà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thủy Kiwi - Trà My', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thùy Minh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tiến sĩ E. Nugroho DVM', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tim Severin', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Timothy Ferriss', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tina Seelig', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tôn Nữ Thị Ninh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tôn Thất Nguyễn Thiêm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tòng Văn Sinh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tony Buổi Sáng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tony Buzan', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tony & Suzanne Mace', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Toyota Kazuhiko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trác Nhã', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trạch Quế Vinh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Công Diêu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Đăng Khoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Du', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Hoài Phương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Mạnh Tường', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Nhật Vy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Quang Đức', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Hà Giang - Nguyễn Thị Hạnh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Huyên Thảo ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Thanh Liêm', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Thùy Trang', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Tường Thụy - Phạm Phương Hoa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Tường Thụy - Phạm Quang Hiển', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Văn Oai - Phạm Hồng Vương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Bình', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trình Chí Lương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Ngọc Minh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Văn Quỳnh', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Xuân Thuận', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trương Minh Trí - Phạm Quang Huy', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS - Bác Sĩ Nguyễn Lan Hải', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS. Huỳnh Văn Tòng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS Michael Newton', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS. Phan Quốc Việt', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS. Wendy Mogel ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tsutsui Yoriko - Hayashi Akiko', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tsutsumi Chiharu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Từ Thành Bắc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tuệ Nghi', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Uyên Bùi - BS. Trí Đoàn', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vân Trang (biên soạn)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Venio Tachibana', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Viết Chi - Lâm Trinh (Sưu tầm)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - KS. Nguyễn Việt Thái', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Lâm Thị Mỹ Hương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Nguyễn Sô', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Nguyễn Việt Tiến', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Phúc Quyên', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Phương - Thái Hà', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Thư', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vĩnh Sính', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Violeta Babíc', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'VL.COMP ', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vladimir Nabokov', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'VL - Comp', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vũ Thị Mai Phương', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vũ Tiến Cường', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Đăng Phong', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Nguy (chủ biên)', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Quyên', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Trung Hiếu', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'WaterPC', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Werner M. Busch', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'William Ury', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Williams', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Woo Bo Hyun', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Xuân Tùng', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Yasushi Kitagawa', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Yellow Tanabe', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Yukito Ayatsuji', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Scott Cochrane', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Zoller - Kerry Preston', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sandra Fox', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Young Learners Practice Tests', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Emily Bronte', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Gray - Barbara Annis', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jessica Greenwell - Kimberley Scott', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Malcolm Gladwell', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Susan Coolidge', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Haruki Murakami', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jill O Sullivan - Joan Kang Shin', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Harper Lee', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Collins Maples', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tim Collins - Mary Maples', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jerome K. Jerome', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nicholas Sparks', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Louis Stevenson - Dr Tim Middleton - Dr Keith Carabine', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Wes Moore', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Katherine Applegate - Patricia Castelao', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Khaled Hosseini', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Suzanne Collins', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Victor Hugo', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sir Arthur Conan Doyle', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Adrian Tinniswood', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'E. Nesbit', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Beverly Harzog', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Prof Steve Peters', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Paulo Coelho', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Karen Blumenthal', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'William Shakespeare', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tim Falla - Paul A Davies', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'N/A', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ken Wilson - Mike Boyle', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Heather Amery', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'David Bohlke', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jane Austen', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Steve Rohr - Shirley Impellizzeri', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ben Jealous - Trabian Shorters - Russell Simmons', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Danielle Steel', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Eleanor H. Porter', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jayme Adelson-Goldstein', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jon Hird', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Eastwood', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kate Cory-Wright', 
						'author_info' => str_random(10), 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Ngọc Thuần', 
						'author_info' => str_random(10), 
						'author_image' => null 
					]
	         	]
         	);
    }
}
