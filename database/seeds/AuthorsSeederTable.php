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
    	$lorem="<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
        DB::table('authors')->insert(
	         	[
			        [ 
						'author_name' => '2.1/2 Bạn Tốt', 
						'author_info' => 'Tác giả: <b>2.1/2 Bạn Tốt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'A.J.Hoge', 
						'author_info' => 'Tác giả: <b>A.J.Hoge</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Accototo', 
						'author_info' => 'Tác giả: <b>Accototo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Adam Khoo & Gary Lee', 
						'author_info' => 'Tác giả: <b>Adam Khoo & Gary Lee</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Adam Khoo', 
						'author_info' => 'Tác giả: <b>Adam Khoo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Agatha Christie', 
						'author_info' => 'Tác giả: <b>Agatha Christie</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Akiko Hayashi', 
						'author_info' => 'Tác giả: <b>Akiko Hayashi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alain de Botton', 
						'author_info' => 'Tác giả: <b>Alain de Botton</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alan Phan ', 
						'author_info' => 'Tác giả: <b>Alan Phan </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alan Watts', 
						'author_info' => 'Tác giả: <b>Alan Watts</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Allan & Barbara Pease', 
						'author_info' => 'Tác giả: <b>Allan & Barbara Pease</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Alphabooks biên soạn', 
						'author_info' => 'Tác giả: <b>Alphabooks biên soạn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anagarika Govinda', 
						'author_info' => 'Tác giả: <b>Anagarika Govinda</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Andrea Hirata', 
						'author_info' => 'Tác giả: <b>Andrea Hirata</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Andrew Spooner', 
						'author_info' => 'Tác giả: <b>Andrew Spooner</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anh Nguyễn', 
						'author_info' => 'Tác giả: <b>Anh Nguyễn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anh Thư - Thu Giang', 
						'author_info' => 'Tác giả: <b>Anh Thư - Thu Giang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ann Weil', 
						'author_info' => 'Tác giả: <b>Ann Weil</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anthony Robbins', 
						'author_info' => 'Tác giả: <b>Anthony Robbins</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Anthony Weston', 
						'author_info' => 'Tác giả: <b>Anthony Weston</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Antoine De Saint-Exupéry', 
						'author_info' => 'Tác giả: <b>Antoine De Saint-Exupéry</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Aoyama Gosho', 
						'author_info' => 'Tác giả: <b>Aoyama Gosho</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Arrian', 
						'author_info' => 'Tác giả: <b>Arrian</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Arthur Conan Doyle', 
						'author_info' => 'Tác giả: <b>Arthur Conan Doyle</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Atul Gawande', 
						'author_info' => 'Tác giả: <b>Atul Gawande</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Austin Kleon', 
						'author_info' => 'Tác giả: <b>Austin Kleon</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bách Dương', 
						'author_info' => 'Tác giả: <b>Bách Dương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bạch Trà', 
						'author_info' => 'Tác giả: <b>Bạch Trà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Barbara Pease Allan', 
						'author_info' => 'Tác giả: <b>Barbara Pease Allan</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Betty L Khoo-Kingsley', 
						'author_info' => 'Tác giả: <b>Betty L Khoo-Kingsley</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bill Henderson - Carlos M. Garcia', 
						'author_info' => 'Tác giả: <b>Bill Henderson - Carlos M. Garcia</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bộ Giáo Dục Và Đào Tạo', 
						'author_info' => 'Tác giả: <b>Bộ Giáo Dục Và Đào Tạo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bonnier Fakta Sweden', 
						'author_info' => 'Tác giả: <b>Bonnier Fakta Sweden</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Boris A.Kordemsky', 
						'author_info' => 'Tác giả: <b>Boris A.Kordemsky</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Brad Stone', 
						'author_info' => 'Tác giả: <b>Brad Stone</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Brendan Debbie Gallagher ', 
						'author_info' => 'Tác giả: <b>Brendan Debbie Gallagher </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Brette McWhorter Sember', 
						'author_info' => 'Tác giả: <b>Brette McWhorter Sember</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bruce Bueno de Mesquita', 
						'author_info' => 'Tác giả: <b>Bruce Bueno de Mesquita</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'BS. Đào Xuân Dũng', 
						'author_info' => 'Tác giả: <b>BS. Đào Xuân Dũng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'BS Đỗ Hồng Ngọc', 
						'author_info' => 'Tác giả: <b>BS Đỗ Hồng Ngọc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Phụng', 
						'author_info' => 'Tác giả: <b>Bùi Phụng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Quốc Châu', 
						'author_info' => 'Tác giả: <b>Bùi Quốc Châu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Thị Ánh Tuyết', 
						'author_info' => 'Tác giả: <b>Bùi Thị Ánh Tuyết</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Bùi Văn Vinh', 
						'author_info' => 'Tác giả: <b>Bùi Văn Vinh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Camilo Cruz', 
						'author_info' => 'Tác giả: <b>Camilo Cruz</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cấn Vân Khánh', 
						'author_info' => 'Tác giả: <b>Cấn Vân Khánh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cao Nhuận', 
						'author_info' => 'Tác giả: <b>Cao Nhuận</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Carl-Johan Forssén Ehrlin', 
						'author_info' => 'Tác giả: <b>Carl-Johan Forssén Ehrlin</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Choi Pyong Hee & Go Deuk Seong & Jeong Seong Jin', 
						'author_info' => 'Tác giả: <b>Choi Pyong Hee & Go Deuk Seong & Jeong Seong Jin</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Christine Hà', 
						'author_info' => 'Tác giả: <b>Christine Hà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Chu Đình Tới', 
						'author_info' => 'Tác giả: <b>Chu Đình Tới</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Chu Văn Biên ', 
						'author_info' => 'Tác giả: <b>Chu Văn Biên </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Claire Throp', 
						'author_info' => 'Tác giả: <b>Claire Throp</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cloud Pillow Studio', 
						'author_info' => 'Tác giả: <b>Cloud Pillow Studio</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cố Mạn', 
						'author_info' => 'Tác giả: <b>Cố Mạn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cố Tây Tước', 
						'author_info' => 'Tác giả: <b>Cố Tây Tước</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Cửu Bả Đao', 
						'author_info' => 'Tác giả: <b>Cửu Bả Đao</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'D. T. Suzuki', 
						'author_info' => 'Tác giả: <b>D. T. Suzuki</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đại đức Thích Minh Tông', 
						'author_info' => 'Tác giả: <b>Đại đức Thích Minh Tông</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đại Phát', 
						'author_info' => 'Tác giả: <b>Đại Phát</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dalai Lama', 
						'author_info' => 'Tác giả: <b>Dalai Lama</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dale Carnegie', 
						'author_info' => 'Tác giả: <b>Dale Carnegie</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dan Ariely', 
						'author_info' => 'Tác giả: <b>Dan Ariely</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dan Senor & Saul Singer', 
						'author_info' => 'Tác giả: <b>Dan Senor & Saul Singer</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đặng Hoàng Giang', 
						'author_info' => 'Tác giả: <b>Đặng Hoàng Giang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đặng Hoàng Xa', 
						'author_info' => 'Tác giả: <b>Đặng Hoàng Xa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đặng Minh Châu', 
						'author_info' => 'Tác giả: <b>Đặng Minh Châu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Daniel J. Boorstin', 
						'author_info' => 'Tác giả: <b>Daniel J. Boorstin</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Daniel R. Castro', 
						'author_info' => 'Tác giả: <b>Daniel R. Castro</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đào Duy Anh', 
						'author_info' => 'Tác giả: <b>Đào Duy Anh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đào Trinh Nhất ', 
						'author_info' => 'Tác giả: <b>Đào Trinh Nhất </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Darshani Deane', 
						'author_info' => 'Tác giả: <b>Darshani Deane</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dave Trott', 
						'author_info' => 'Tác giả: <b>Dave Trott</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Denis Gingas Ph.D - Richard Beliveau Ph.D', 
						'author_info' => 'Tác giả: <b>Denis Gingas Ph.D - Richard Beliveau Ph.D</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Địch Quế Dung', 
						'author_info' => 'Tác giả: <b>Địch Quế Dung</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Diệp Lạc Vô Tâm', 
						'author_info' => 'Tác giả: <b>Diệp Lạc Vô Tâm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đinh Công Bảy', 
						'author_info' => 'Tác giả: <b>Đinh Công Bảy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đinh Thị Hương', 
						'author_info' => 'Tác giả: <b>Đinh Thị Hương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Anh Thư - Phạm Hương Thuỷ', 
						'author_info' => 'Tác giả: <b>Đỗ Anh Thư - Phạm Hương Thuỷ</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Hồng Ngọc', 
						'author_info' => 'Tác giả: <b>Đỗ Hồng Ngọc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Mạnh Hà', 
						'author_info' => 'Tác giả: <b>Đỗ Mạnh Hà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đỗ Nhật Nam ', 
						'author_info' => 'Tác giả: <b>Đỗ Nhật Nam </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Doãn Kiến Lợi', 
						'author_info' => 'Tác giả: <b>Doãn Kiến Lợi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đoạn Mạnh Linh - Đào Huyền Trang', 
						'author_info' => 'Tác giả: <b>Đoạn Mạnh Linh - Đào Huyền Trang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đoàn Thị Điểm ', 
						'author_info' => 'Tác giả: <b>Đoàn Thị Điểm </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đới Hiểu Huyên', 
						'author_info' => 'Tác giả: <b>Đới Hiểu Huyên</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Donald J. Trump', 
						'author_info' => 'Tác giả: <b>Donald J. Trump</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Donna M. Genett Ph.D', 
						'author_info' => 'Tác giả: <b>Donna M. Genett Ph.D</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dr. Blair Thomas Spalding', 
						'author_info' => 'Tác giả: <b>Dr. Blair Thomas Spalding</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dr. Mike Goldsmith ', 
						'author_info' => 'Tác giả: <b>Dr. Mike Goldsmith </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dr. Mirriam Stoppard', 
						'author_info' => 'Tác giả: <b>Dr. Mirriam Stoppard</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đức Long', 
						'author_info' => 'Tác giả: <b>Đức Long</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đức Pháp Vương Gyalwang Drukpa', 
						'author_info' => 'Tác giả: <b>Đức Pháp Vương Gyalwang Drukpa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dung Keil', 
						'author_info' => 'Tác giả: <b>Dung Keil</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dương Hương - Hoa Nguyễn', 
						'author_info' => 'Tác giả: <b>Dương Hương - Hoa Nguyễn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dương Linh', 
						'author_info' => 'Tác giả: <b>Dương Linh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Dương Ngọc Hiệp', 
						'author_info' => 'Tác giả: <b>Dương Ngọc Hiệp</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Đường Thất Công Tử', 
						'author_info' => 'Tác giả: <b>Đường Thất Công Tử</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Eiichiro Oda', 
						'author_info' => 'Tác giả: <b>Eiichiro Oda</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Elaine Mazlish', 
						'author_info' => 'Tác giả: <b>Elaine Mazlish</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Elizabeth Raum', 
						'author_info' => 'Tác giả: <b>Elizabeth Raum</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Eran Katz', 
						'author_info' => 'Tác giả: <b>Eran Katz</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ernest Hemingway', 
						'author_info' => 'Tác giả: <b>Ernest Hemingway</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Esther Hicks', 
						'author_info' => 'Tác giả: <b>Esther Hicks</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Foster Cline & Jim Fay', 
						'author_info' => 'Tác giả: <b>Foster Cline & Jim Fay</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Francoize Boucher', 
						'author_info' => 'Tác giả: <b>Francoize Boucher</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Fujita Hioko - Aka Shozo', 
						'author_info' => 'Tác giả: <b>Fujita Hioko - Aka Shozo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gari', 
						'author_info' => 'Tác giả: <b>Gari</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gary Lee', 
						'author_info' => 'Tác giả: <b>Gary Lee</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gary Zukav', 
						'author_info' => 'Tác giả: <b>Gary Zukav</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'George W. Bush', 
						'author_info' => 'Tác giả: <b>George W. Bush</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Geshe Michael Roach', 
						'author_info' => 'Tác giả: <b>Geshe Michael Roach</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gia Đoàn', 
						'author_info' => 'Tác giả: <b>Gia Đoàn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Giản Tư Trung', 
						'author_info' => 'Tác giả: <b>Giản Tư Trung</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Giang Văn Toàn', 
						'author_info' => 'Tác giả: <b>Giang Văn Toàn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Giáo Sư - Bác Sĩ: Hiromi Shinya MD', 
						'author_info' => 'Tác giả: <b>Giáo Sư - Bác Sĩ: Hiromi Shinya MD</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Glenn Doman', 
						'author_info' => 'Tác giả: <b>Glenn Doman</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gosho Aoyama', 
						'author_info' => 'Tác giả: <b>Gosho Aoyama</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Greg allikas & Ned Nash', 
						'author_info' => 'Tác giả: <b>Greg allikas & Ned Nash</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'GS. Cao Huy Đỉnh', 
						'author_info' => 'Tác giả: <b>GS. Cao Huy Đỉnh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Gustave Le Bon', 
						'author_info' => 'Tác giả: <b>Gustave Le Bon</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ha-chu ', 
						'author_info' => 'Tác giả: <b>Ha-chu </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hà Hữu Hải - Đoàn Trí Dũng', 
						'author_info' => 'Tác giả: <b>Hà Hữu Hải - Đoàn Trí Dũng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hà Thành - Trí Việt', 
						'author_info' => 'Tác giả: <b>Hà Thành - Trí Việt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hà Yên - Hoài Phương', 
						'author_info' => 'Tác giả: <b>Hà Yên - Hoài Phương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hachun Lyonnet - Bubu Huong - Mẹ Ong Bông', 
						'author_info' => 'Tác giả: <b>Hachun Lyonnet - Bubu Huong - Mẹ Ong Bông</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hải Đường', 
						'author_info' => 'Tác giả: <b>Hải Đường</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hán Trúc', 
						'author_info' => 'Tác giả: <b>Hán Trúc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Harper Lee ', 
						'author_info' => 'Tác giả: <b>Harper Lee </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hayashi Akiko', 
						'author_info' => 'Tác giả: <b>Hayashi Akiko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hector Malot', 
						'author_info' => 'Tác giả: <b>Hector Malot</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Henry Kissinger', 
						'author_info' => 'Tác giả: <b>Henry Kissinger</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Herbert Rosendorfer', 
						'author_info' => 'Tác giả: <b>Herbert Rosendorfer</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hervé This ', 
						'author_info' => 'Tác giả: <b>Hervé This </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hồ Thị Hải Âu', 
						'author_info' => 'Tác giả: <b>Hồ Thị Hải Âu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hòa thượng Thích Thánh Nghiêm', 
						'author_info' => 'Tác giả: <b>Hòa thượng Thích Thánh Nghiêm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Anh Tú ', 
						'author_info' => 'Tác giả: <b>Hoàng Anh Tú </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Đào - Hương Giang', 
						'author_info' => 'Tác giả: <b>Hoàng Đào - Hương Giang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Đạo Thúy', 
						'author_info' => 'Tác giả: <b>Hoàng Đạo Thúy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Sơn', 
						'author_info' => 'Tác giả: <b>Hoàng Sơn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hoàng Văn Lộc', 
						'author_info' => 'Tác giả: <b>Hoàng Văn Lộc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hứa Nguyện', 
						'author_info' => 'Tác giả: <b>Hứa Nguyện</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Huyền Linh', 
						'author_info' => 'Tác giả: <b>Huyền Linh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Huỳnh Vĩnh Sơn', 
						'author_info' => 'Tác giả: <b>Huỳnh Vĩnh Sơn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ian Stewart', 
						'author_info' => 'Tác giả: <b>Ian Stewart</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ibuka Masaru', 
						'author_info' => 'Tác giả: <b>Ibuka Masaru</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Inamori Kazuo', 
						'author_info' => 'Tác giả: <b>Inamori Kazuo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'J. D. Salinger', 
						'author_info' => 'Tác giả: <b>J. D. Salinger</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jack Canfield ', 
						'author_info' => 'Tác giả: <b>Jack Canfield </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'James Canton', 
						'author_info' => 'Tác giả: <b>James Canton</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'James G. Zumwalt', 
						'author_info' => 'Tác giả: <b>James G. Zumwalt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jamgon Mipham', 
						'author_info' => 'Tác giả: <b>Jamgon Mipham</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jared Diamond', 
						'author_info' => 'Tác giả: <b>Jared Diamond</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jay Conrad Levinson', 
						'author_info' => 'Tác giả: <b>Jay Conrad Levinson</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jay M. Feinman', 
						'author_info' => 'Tác giả: <b>Jay M. Feinman</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jeni Stepanek - Larry Lindner', 
						'author_info' => 'Tác giả: <b>Jeni Stepanek - Larry Lindner</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jocelyn K.Glei', 
						'author_info' => 'Tác giả: <b>Jocelyn K.Glei</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Johanna Basford', 
						'author_info' => 'Tác giả: <b>Johanna Basford</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Blofeld', 
						'author_info' => 'Tác giả: <b>John Blofeld</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Green', 
						'author_info' => 'Tác giả: <b>John Green</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jonas Jonasson ', 
						'author_info' => 'Tác giả: <b>Jonas Jonasson </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jostein Gaarder', 
						'author_info' => 'Tác giả: <b>Jostein Gaarder</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Julia V Taylor', 
						'author_info' => 'Tác giả: <b>Julia V Taylor</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kẩm Nhung', 
						'author_info' => 'Tác giả: <b>Kẩm Nhung</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kamiya - Taeko', 
						'author_info' => 'Tác giả: <b>Kamiya - Taeko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kangawa Joshiko - Yagyu Genichiro', 
						'author_info' => 'Tác giả: <b>Kangawa Joshiko - Yagyu Genichiro</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kate Di Camillo', 
						'author_info' => 'Tác giả: <b>Kate Di Camillo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Katrin Himmler', 
						'author_info' => 'Tác giả: <b>Katrin Himmler</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Katsusuke Serizawa', 
						'author_info' => 'Tác giả: <b>Katsusuke Serizawa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kazumi Yumoto ', 
						'author_info' => 'Tác giả: <b>Kazumi Yumoto </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Keith Ferrazzi', 
						'author_info' => 'Tác giả: <b>Keith Ferrazzi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ken Kesey ', 
						'author_info' => 'Tác giả: <b>Ken Kesey </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Khoa Phan', 
						'author_info' => 'Tác giả: <b>Khoa Phan</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Byung-Kook - Erza F. Vogel', 
						'author_info' => 'Tác giả: <b>Kim Byung-Kook - Erza F. Vogel</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Huggens', 
						'author_info' => 'Tác giả: <b>Kim Huggens</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Oanh', 
						'author_info' => 'Tác giả: <b>Kim Oanh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Woo Choong', 
						'author_info' => 'Tác giả: <b>Kim Woo Choong</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kimura Kyuichi', 
						'author_info' => 'Tác giả: <b>Kimura Kyuichi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kito Aya', 
						'author_info' => 'Tác giả: <b>Kito Aya</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Koike Ryunosuke', 
						'author_info' => 'Tác giả: <b>Koike Ryunosuke</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'KS. Đỗ Mạnh Dũng', 
						'author_info' => 'Tác giả: <b>KS. Đỗ Mạnh Dũng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'KS. Thái Hà - Đặng Mai', 
						'author_info' => 'Tác giả: <b>KS. Thái Hà - Đặng Mai</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ks. Thành Đông - Thanh Hải (biên soạn)', 
						'author_info' => 'Tác giả: <b>Ks. Thành Đông - Thanh Hải (biên soạn)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kuroyanagi Tetsuko', 
						'author_info' => 'Tác giả: <b>Kuroyanagi Tetsuko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'L.G.Alexander', 
						'author_info' => 'Tác giả: <b>L.G.Alexander</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lâm Xuân Nguyệt', 
						'author_info' => 'Tác giả: <b>Lâm Xuân Nguyệt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Larry Berman', 
						'author_info' => 'Tác giả: <b>Larry Berman</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Laurence J.Brahm', 
						'author_info' => 'Tác giả: <b>Laurence J.Brahm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Bích', 
						'author_info' => 'Tác giả: <b>Lê Bích</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Đăng Khương', 
						'author_info' => 'Tác giả: <b>Lê Đăng Khương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Đình Bì. M.A.', 
						'author_info' => 'Tác giả: <b>Lê Đình Bì. M.A.</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Đình Nguyên', 
						'author_info' => 'Tác giả: <b>Lê Đình Nguyên</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Hoài Phương', 
						'author_info' => 'Tác giả: <b>Lê Hoài Phương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Huy Khoa - Lê Hữu Nhân', 
						'author_info' => 'Tác giả: <b>Lê Huy Khoa - Lê Hữu Nhân</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Huy Khoa', 
						'author_info' => 'Tác giả: <b>Lê Huy Khoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Ngọc Bích - Phạm Quang Huy', 
						'author_info' => 'Tác giả: <b>Lê Ngọc Bích - Phạm Quang Huy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Phạm Thành - Nguyễn Thành Sơn', 
						'author_info' => 'Tác giả: <b>Lê Phạm Thành - Nguyễn Thành Sơn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Thành Khôi', 
						'author_info' => 'Tác giả: <b>Lê Thành Khôi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lê Thanh Nhật - Phạm Quang Hiển', 
						'author_info' => 'Tác giả: <b>Lê Thanh Nhật - Phạm Quang Hiển</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Linda Goodman', 
						'author_info' => 'Tác giả: <b>Linda Goodman</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Linh Trang', 
						'author_info' => 'Tác giả: <b>Linh Trang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Linh', 
						'author_info' => 'Tác giả: <b>Linh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lois Lowry', 
						'author_info' => 'Tác giả: <b>Lois Lowry</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lois N.Magner', 
						'author_info' => 'Tác giả: <b>Lois N.Magner</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lois P.Frankel', 
						'author_info' => 'Tác giả: <b>Lois P.Frankel</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lư Tô Vỹ', 
						'author_info' => 'Tác giả: <b>Lư Tô Vỹ</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Luật sư Nguyễn Ngọc Bích', 
						'author_info' => 'Tác giả: <b>Luật sư Nguyễn Ngọc Bích</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lục Trần - Chu Thị Hạnh', 
						'author_info' => 'Tác giả: <b>Lục Trần - Chu Thị Hạnh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Luis Sepulveda', 
						'author_info' => 'Tác giả: <b>Luis Sepulveda</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lý Mẫn', 
						'author_info' => 'Tác giả: <b>Lý Mẫn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lý Tùng', 
						'author_info' => 'Tác giả: <b>Lý Tùng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Lya Luft', 
						'author_info' => 'Tác giả: <b>Lya Luft</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mặc Bảo Phi Bảo', 
						'author_info' => 'Tác giả: <b>Mặc Bảo Phi Bảo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mai Hương - Vĩnh Thắng', 
						'author_info' => 'Tác giả: <b>Mai Hương - Vĩnh Thắng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Makoto Shichida', 
						'author_info' => 'Tác giả: <b>Makoto Shichida</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Malcolm Gladwell ', 
						'author_info' => 'Tác giả: <b>Malcolm Gladwell </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mạnh Linh', 
						'author_info' => 'Tác giả: <b>Mạnh Linh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Márai Sándor', 
						'author_info' => 'Tác giả: <b>Márai Sándor</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Marcia Iwatate - Geeta Mehta - Geeta K. Mehta - Nacasa & Partners', 
						'author_info' => 'Tác giả: <b>Marcia Iwatate - Geeta Mehta - Geeta K. Mehta - Nacasa & Partners</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Margaret Sassé', 
						'author_info' => 'Tác giả: <b>Margaret Sassé</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mary Colson', 
						'author_info' => 'Tác giả: <b>Mary Colson</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Master Sridevi Tố Hải', 
						'author_info' => 'Tác giả: <b>Master Sridevi Tố Hải</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Matt Crossick', 
						'author_info' => 'Tác giả: <b>Matt Crossick</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mẹ Xu-Sim', 
						'author_info' => 'Tác giả: <b>Mẹ Xu-Sim</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Meg Jay', 
						'author_info' => 'Tác giả: <b>Meg Jay</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mèo Mốc ', 
						'author_info' => 'Tác giả: <b>Mèo Mốc </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Bar-Zohar ', 
						'author_info' => 'Tác giả: <b>Michael Bar-Zohar </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Guillen. Ph.D.', 
						'author_info' => 'Tác giả: <b>Michael Guillen. Ph.D.</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Gurian', 
						'author_info' => 'Tác giả: <b>Michael Gurian</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Michael Hurley', 
						'author_info' => 'Tác giả: <b>Michael Hurley</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Cúc', 
						'author_info' => 'Tác giả: <b>Minh Cúc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Đạo', 
						'author_info' => 'Tác giả: <b>Minh Đạo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Mẫn - Du Phong', 
						'author_info' => 'Tác giả: <b>Minh Mẫn - Du Phong</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Minh Niệm', 
						'author_info' => 'Tác giả: <b>Minh Niệm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mitchell Stephens', 
						'author_info' => 'Tác giả: <b>Mitchell Stephens</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mộc Diệp Tử', 
						'author_info' => 'Tác giả: <b>Mộc Diệp Tử</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Mohammed bin Rashid Al Maktoum', 
						'author_info' => 'Tác giả: <b>Mohammed bin Rashid Al Maktoum</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Morris', 
						'author_info' => 'Tác giả: <b>Morris</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Morris & Goscinny ', 
						'author_info' => 'Tác giả: <b>Morris & Goscinny </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'N. Gregory Mankiw', 
						'author_info' => 'Tác giả: <b>N. Gregory Mankiw</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nancy Dickmann', 
						'author_info' => 'Tác giả: <b>Nancy Dickmann</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Naoko Takeuchi', 
						'author_info' => 'Tác giả: <b>Naoko Takeuchi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Napoleon Hill', 
						'author_info' => 'Tác giả: <b>Napoleon Hill</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nghệ Sĩ Ái Vân', 
						'author_info' => 'Tác giả: <b>Nghệ Sĩ Ái Vân</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Huy Hoà', 
						'author_info' => 'Tác giả: <b>Ngô Huy Hoà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Kế Tựu', 
						'author_info' => 'Tác giả: <b>Ngô Kế Tựu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Mục Thiên', 
						'author_info' => 'Tác giả: <b>Ngô Mục Thiên</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngô Quang Trì', 
						'author_info' => 'Tác giả: <b>Ngô Quang Trì</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ngọc Bích - Tường Thụy', 
						'author_info' => 'Tác giả: <b>Ngọc Bích - Tường Thụy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Anh Đức', 
						'author_info' => 'Tác giả: <b>Nguyễn Anh Đức</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Anh Vinh', 
						'author_info' => 'Tác giả: <b>Nguyễn Anh Vinh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Bình Phương', 
						'author_info' => 'Tác giả: <b>Nguyễn Bình Phương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Chấn Hùng', 
						'author_info' => 'Tác giả: <b>Nguyễn Chấn Hùng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Chu Phác', 
						'author_info' => 'Tác giả: <b>Nguyễn Chu Phác</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Đăng Khoa', 
						'author_info' => 'Tác giả: <b>Nguyễn Đăng Khoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Danh Vàn', 
						'author_info' => 'Tác giả: <b>Nguyễn Danh Vàn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Đức Dân', 
						'author_info' => 'Tác giả: <b>Nguyễn Đức Dân</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Đức Hiếu (biên soạn)', 
						'author_info' => 'Tác giả: <b>Nguyễn Đức Hiếu (biên soạn)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hoàng Bảo', 
						'author_info' => 'Tác giả: <b>Nguyễn Hoàng Bảo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Bắc', 
						'author_info' => 'Tác giả: <b>Nguyễn Hữu Bắc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Biển', 
						'author_info' => 'Tác giả: <b>Nguyễn Hữu Biển</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Đức', 
						'author_info' => 'Tác giả: <b>Nguyễn Hữu Đức</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Hữu Hưng (chủ biên)', 
						'author_info' => 'Tác giả: <b>Nguyễn Hữu Hưng (chủ biên)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Khắc Khoái', 
						'author_info' => 'Tác giả: <b>Nguyễn Khắc Khoái</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Khánh Dư ', 
						'author_info' => 'Tác giả: <b>Nguyễn Khánh Dư </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Kim Dân', 
						'author_info' => 'Tác giả: <b>Nguyễn Kim Dân</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Mạnh Hưởng (chủ biên) - Nguyễn Văn Ninh', 
						'author_info' => 'Tác giả: <b>Nguyễn Mạnh Hưởng (chủ biên) - Nguyễn Văn Ninh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Minh Thảo', 
						'author_info' => 'Tác giả: <b>Nguyễn Minh Thảo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Ngọc Duy Trâm', 
						'author_info' => 'Tác giả: <b>Nguyễn Ngọc Duy Trâm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyên Ngọc', 
						'author_info' => 'Tác giả: <b>Nguyên Ngọc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Nhật Ánh', 
						'author_info' => 'Tác giả: <b>Nguyễn Nhật Ánh</b><br>'.$lorem, 
						'author_image' => '/storage/app/author-image/nguyennhatanh.jpg' 
					],
					[ 
						'author_name' => 'Nguyễn Phương Mai', 
						'author_info' => 'Tác giả: <b>Nguyễn Phương Mai</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Quỳnh', 
						'author_info' => 'Tác giả: <b>Nguyễn Quỳnh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Sử', 
						'author_info' => 'Tác giả: <b>Nguyễn Sử</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thanh Tuyên (Chủ biên)', 
						'author_info' => 'Tác giả: <b>Nguyễn Thanh Tuyên (Chủ biên)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Bích Phương (tuyển dịch)', 
						'author_info' => 'Tác giả: <b>Nguyễn Thị Bích Phương (tuyển dịch)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Diệu Thảo', 
						'author_info' => 'Tác giả: <b>Nguyễn Thị Diệu Thảo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Hồng', 
						'author_info' => 'Tác giả: <b>Nguyễn Thị Hồng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Lệ Mỹ - Dương Hương', 
						'author_info' => 'Tác giả: <b>Nguyễn Thị Lệ Mỹ - Dương Hương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Thu Hằng', 
						'author_info' => 'Tác giả: <b>Nguyễn Thị Thu Hằng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Thị Thu Hiền', 
						'author_info' => 'Tác giả: <b>Nguyễn Thị Thu Hiền</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Tôn Nhan - Phú Văn Hẳn', 
						'author_info' => 'Tác giả: <b>Nguyễn Tôn Nhan - Phú Văn Hẳn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Tường Bách', 
						'author_info' => 'Tác giả: <b>Nguyễn Tường Bách</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Hai', 
						'author_info' => 'Tác giả: <b>Nguyễn Văn Hai</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Khỏa (biên dịch)', 
						'author_info' => 'Tác giả: <b>Nguyễn Văn Khỏa (biên dịch)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Trung', 
						'author_info' => 'Tác giả: <b>Nguyễn Văn Trung</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Văn Tuấn ', 
						'author_info' => 'Tác giả: <b>Nguyễn Văn Tuấn </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhà báo Hàn Ni', 
						'author_info' => 'Tác giả: <b>Nhà báo Hàn Ni</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhạc Sĩ Hoài An', 
						'author_info' => 'Tác giả: <b>Nhạc Sĩ Hoài An</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhân Văn Group', 
						'author_info' => 'Tác giả: <b>Nhân Văn Group</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhiều Tác Giả', 
						'author_info' => 'Tác giả: <b>Nhiều Tác Giả</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm biên soạn Thuận Việt', 
						'author_info' => 'Tác giả: <b>Nhóm biên soạn Thuận Việt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm Chuyện Của Nghề', 
						'author_info' => 'Tác giả: <b>Nhóm Chuyện Của Nghề</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm Ezpsychology', 
						'author_info' => 'Tác giả: <b>Nhóm Ezpsychology</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nhóm Trí Thức Việt', 
						'author_info' => 'Tác giả: <b>Nhóm Trí Thức Việt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Niall Ferguson', 
						'author_info' => 'Tác giả: <b>Niall Ferguson</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Niccolo Machiavelli', 
						'author_info' => 'Tác giả: <b>Niccolo Machiavelli</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nick Arnold', 
						'author_info' => 'Tác giả: <b>Nick Arnold</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nick Hunter', 
						'author_info' => 'Tác giả: <b>Nick Hunter</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nick Vujicic', 
						'author_info' => 'Tác giả: <b>Nick Vujicic</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nishi Katsuzo', 
						'author_info' => 'Tác giả: <b>Nishi Katsuzo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'NXB Triết Giang', 
						'author_info' => 'Tác giả: <b>NXB Triết Giang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'One & Yusuke Murata', 
						'author_info' => 'Tác giả: <b>One & Yusuke Murata</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'ONO Eriko', 
						'author_info' => 'Tác giả: <b>ONO Eriko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Osho', 
						'author_info' => 'Tác giả: <b>Osho</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Pam Grout', 
						'author_info' => 'Tác giả: <b>Pam Grout</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Patrick Modiano & Sempé', 
						'author_info' => 'Tác giả: <b>Patrick Modiano & Sempé</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Paula Hawkins', 
						'author_info' => 'Tác giả: <b>Paula Hawkins</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Paulo Coelho ', 
						'author_info' => 'Tác giả: <b>Paulo Coelho </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Peter Kelder', 
						'author_info' => 'Tác giả: <b>Peter Kelder</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'PGS. TS. Đặng Hữu Toàn', 
						'author_info' => 'Tác giả: <b>PGS. TS. Đặng Hữu Toàn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Công Luận', 
						'author_info' => 'Tác giả: <b>Phạm Công Luận</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Hoài Huấn (chủ biên)', 
						'author_info' => 'Tác giả: <b>Phạm Hoài Huấn (chủ biên)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Hữu Cường', 
						'author_info' => 'Tác giả: <b>Phạm Hữu Cường</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Minh Trung', 
						'author_info' => 'Tác giả: <b>Phạm Minh Trung</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Hiển - Phạm Phương Hoa', 
						'author_info' => 'Tác giả: <b>Phạm Quang Hiển - Phạm Phương Hoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Hiển - Phạm Quang Huy', 
						'author_info' => 'Tác giả: <b>Phạm Quang Hiển - Phạm Quang Huy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Lê Cảnh Trung', 
						'author_info' => 'Tác giả: <b>Phạm Quang Huy - Lê Cảnh Trung</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Nguyễn Duy Ngọc', 
						'author_info' => 'Tác giả: <b>Phạm Quang Huy - Nguyễn Duy Ngọc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Nguyễn Trọng Hiếu', 
						'author_info' => 'Tác giả: <b>Phạm Quang Huy - Nguyễn Trọng Hiếu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Phạm Phương Hoa', 
						'author_info' => 'Tác giả: <b>Phạm Quang Huy - Phạm Phương Hoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy - Trần Tường Thụy', 
						'author_info' => 'Tác giả: <b>Phạm Quang Huy - Trần Tường Thụy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Quang Huy', 
						'author_info' => 'Tác giả: <b>Phạm Quang Huy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Thế Long (chủ biên)', 
						'author_info' => 'Tác giả: <b>Phạm Thế Long (chủ biên)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Văn Đông', 
						'author_info' => 'Tác giả: <b>Phạm Văn Đông</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phạm Vũ Ngọc Nga', 
						'author_info' => 'Tác giả: <b>Phạm Vũ Ngọc Nga</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phan Huy Chú ', 
						'author_info' => 'Tác giả: <b>Phan Huy Chú </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phan Thị Hồ Điệp', 
						'author_info' => 'Tác giả: <b>Phan Thị Hồ Điệp</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Pháp Sư Thích Hải Đào', 
						'author_info' => 'Tác giả: <b>Pháp Sư Thích Hải Đào</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Philippe M.F.Peycam', 
						'author_info' => 'Tác giả: <b>Philippe M.F.Peycam</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phoenix Ho', 
						'author_info' => 'Tác giả: <b>Phoenix Ho</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Phương Hoa - Quang Hiển', 
						'author_info' => 'Tác giả: <b>Phương Hoa - Quang Hiển</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Quỳnh Thy', 
						'author_info' => 'Tác giả: <b>Quỳnh Thy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ralph Leighton', 
						'author_info' => 'Tác giả: <b>Ralph Leighton</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Reki Kawahara', 
						'author_info' => 'Tác giả: <b>Reki Kawahara</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Richard Branson', 
						'author_info' => 'Tác giả: <b>Richard Branson</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Richard H. Thaler', 
						'author_info' => 'Tác giả: <b>Richard H. Thaler</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Richard Wiseman ', 
						'author_info' => 'Tác giả: <b>Richard Wiseman </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Rob Eastaway', 
						'author_info' => 'Tác giả: <b>Rob Eastaway</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Ashton', 
						'author_info' => 'Tác giả: <b>Robert Ashton</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Fulghum', 
						'author_info' => 'Tác giả: <b>Robert Fulghum</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Greene', 
						'author_info' => 'Tác giả: <b>Robert Greene</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert T. Kiyosaki', 
						'author_info' => 'Tác giả: <b>Robert T. Kiyosaki</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robin Sharma ', 
						'author_info' => 'Tác giả: <b>Robin Sharma </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Rod Campbell', 
						'author_info' => 'Tác giả: <b>Rod Campbell</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ron Bracey ', 
						'author_info' => 'Tác giả: <b>Ron Bracey </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Rosie Nguyễn', 
						'author_info' => 'Tác giả: <b>Rosie Nguyễn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sara Imas', 
						'author_info' => 'Tác giả: <b>Sara Imas</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sara', 
						'author_info' => 'Tác giả: <b>Sara</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sarah Delmege', 
						'author_info' => 'Tác giả: <b>Sarah Delmege</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Seith M. Siegel', 
						'author_info' => 'Tác giả: <b>Seith M. Siegel</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Seth Godin', 
						'author_info' => 'Tác giả: <b>Seth Godin</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Shinkai Makoto', 
						'author_info' => 'Tác giả: <b>Shinkai Makoto</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Shiv Khera', 
						'author_info' => 'Tác giả: <b>Shiv Khera</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Simon Singh ', 
						'author_info' => 'Tác giả: <b>Simon Singh </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Som Sujeera', 
						'author_info' => 'Tác giả: <b>Som Sujeera</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sơn Nam', 
						'author_info' => 'Tác giả: <b>Sơn Nam</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Song Ji Hye (Daria Song)', 
						'author_info' => 'Tác giả: <b>Song Ji Hye (Daria Song)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sophie Mas - Anne Berest - Audrey Diwan - Caroline de Maigret', 
						'author_info' => 'Tác giả: <b>Sophie Mas - Anne Berest - Audrey Diwan - Caroline de Maigret</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Stephen R Covey', 
						'author_info' => 'Tác giả: <b>Stephen R Covey</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Steven D.Levitt - Stephen J. Dubner', 
						'author_info' => 'Tác giả: <b>Steven D.Levitt - Stephen J. Dubner</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Steven K. Scott ', 
						'author_info' => 'Tác giả: <b>Steven K. Scott </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sugahara Yuko', 
						'author_info' => 'Tác giả: <b>Sugahara Yuko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Susan Curtis - Pat Thomas - Dragana Vilinac', 
						'author_info' => 'Tác giả: <b>Susan Curtis - Pat Thomas - Dragana Vilinac</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Susan L. Shirk', 
						'author_info' => 'Tác giả: <b>Susan L. Shirk</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Swami Vishnu Devananda', 
						'author_info' => 'Tác giả: <b>Swami Vishnu Devananda</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tạ Chí Đại Trường', 
						'author_info' => 'Tác giả: <b>Tạ Chí Đại Trường</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tabata Seiichi Nobe Akiko & Shizawa Sayoko', 
						'author_info' => 'Tác giả: <b>Tabata Seiichi Nobe Akiko & Shizawa Sayoko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Donald J.Trump', 
						'author_info' => 'Tác giả: <b>Donald J.Trump</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Hạ Vũ', 
						'author_info' => 'Tác giả: <b>Hạ Vũ</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Takano Ichigo', 
						'author_info' => 'Tác giả: <b>Takano Ichigo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tammy Strobel', 
						'author_info' => 'Tác giả: <b>Tammy Strobel</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tanith Carey', 
						'author_info' => 'Tác giả: <b>Tanith Carey</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thanh Hà', 
						'author_info' => 'Tác giả: <b>Trần Thanh Hà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thanh Huyền', 
						'author_info' => 'Tác giả: <b>Thanh Huyền</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thảo Xù', 
						'author_info' => 'Tác giả: <b>Thảo Xù</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'The Sakura', 
						'author_info' => 'Tác giả: <b>The Sakura</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'The Windy', 
						'author_info' => 'Tác giả: <b>The Windy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiên Ân', 
						'author_info' => 'Tác giả: <b>Thiên Ân</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiên Kim', 
						'author_info' => 'Tác giả: <b>Thiên Kim</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiền sư Philip Kapleau', 
						'author_info' => 'Tác giả: <b>Thiền sư Philip Kapleau</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thiều Chửu', 
						'author_info' => 'Tác giả: <b>Thiều Chửu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thịnh Nam ', 
						'author_info' => 'Tác giả: <b>Thịnh Nam </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thôi Hiểu Lệ', 
						'author_info' => 'Tác giả: <b>Thôi Hiểu Lệ</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thomas Cathcart & Daniel Klein', 
						'author_info' => 'Tác giả: <b>Thomas Cathcart & Daniel Klein</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thomas Harris', 
						'author_info' => 'Tác giả: <b>Thomas Harris</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ths. Đỗ Đức Trí', 
						'author_info' => 'Tác giả: <b>Ths. Đỗ Đức Trí</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ths. Trần Thị Hoa', 
						'author_info' => 'Tác giả: <b>Ths. Trần Thị Hoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thu Giang - Nguyễn Duy Cần', 
						'author_info' => 'Tác giả: <b>Thu Giang - Nguyễn Duy Cần</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thu Hà', 
						'author_info' => 'Tác giả: <b>Thu Hà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thủy Kiwi - Trà My', 
						'author_info' => 'Tác giả: <b>Thủy Kiwi - Trà My</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Thùy Minh', 
						'author_info' => 'Tác giả: <b>Thùy Minh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tiến sĩ E. Nugroho DVM', 
						'author_info' => 'Tác giả: <b>Tiến sĩ E. Nugroho DVM</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tim Severin', 
						'author_info' => 'Tác giả: <b>Tim Severin</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Timothy Ferriss', 
						'author_info' => 'Tác giả: <b>Timothy Ferriss</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tina Seelig', 
						'author_info' => 'Tác giả: <b>Tina Seelig</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tôn Nữ Thị Ninh', 
						'author_info' => 'Tác giả: <b>Tôn Nữ Thị Ninh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tôn Thất Nguyễn Thiêm', 
						'author_info' => 'Tác giả: <b>Tôn Thất Nguyễn Thiêm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tòng Văn Sinh', 
						'author_info' => 'Tác giả: <b>Tòng Văn Sinh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tony Buổi Sáng', 
						'author_info' => 'Tác giả: <b>Tony Buổi Sáng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tony Buzan', 
						'author_info' => 'Tác giả: <b>Tony Buzan</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tony & Suzanne Mace', 
						'author_info' => 'Tác giả: <b>Tony & Suzanne Mace</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Toyota Kazuhiko', 
						'author_info' => 'Tác giả: <b>Toyota Kazuhiko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trác Nhã', 
						'author_info' => 'Tác giả: <b>Trác Nhã</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trạch Quế Vinh', 
						'author_info' => 'Tác giả: <b>Trạch Quế Vinh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Công Diêu', 
						'author_info' => 'Tác giả: <b>Trần Công Diêu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Đăng Khoa', 
						'author_info' => 'Tác giả: <b>Trần Đăng Khoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Du', 
						'author_info' => 'Tác giả: <b>Trần Du</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Hoài Phương', 
						'author_info' => 'Tác giả: <b>Trần Hoài Phương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Mạnh Tường', 
						'author_info' => 'Tác giả: <b>Trần Mạnh Tường</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Nhật Vy', 
						'author_info' => 'Tác giả: <b>Trần Nhật Vy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Quang Đức', 
						'author_info' => 'Tác giả: <b>Trần Quang Đức</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Hà Giang - Nguyễn Thị Hạnh', 
						'author_info' => 'Tác giả: <b>Trần Thị Hà Giang - Nguyễn Thị Hạnh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Huyên Thảo ', 
						'author_info' => 'Tác giả: <b>Trần Thị Huyên Thảo </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Thanh Liêm', 
						'author_info' => 'Tác giả: <b>Trần Thị Thanh Liêm</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Thị Thùy Trang', 
						'author_info' => 'Tác giả: <b>Trần Thị Thùy Trang</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Tường Thụy - Phạm Phương Hoa', 
						'author_info' => 'Tác giả: <b>Trần Tường Thụy - Phạm Phương Hoa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Tường Thụy - Phạm Quang Hiển', 
						'author_info' => 'Tác giả: <b>Trần Tường Thụy - Phạm Quang Hiển</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trần Văn Oai - Phạm Hồng Vương', 
						'author_info' => 'Tác giả: <b>Trần Văn Oai - Phạm Hồng Vương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Bình', 
						'author_info' => 'Tác giả: <b>Trịnh Bình</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trình Chí Lương', 
						'author_info' => 'Tác giả: <b>Trình Chí Lương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Ngọc Minh', 
						'author_info' => 'Tác giả: <b>Trịnh Ngọc Minh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Văn Quỳnh', 
						'author_info' => 'Tác giả: <b>Trịnh Văn Quỳnh</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trịnh Xuân Thuận', 
						'author_info' => 'Tác giả: <b>Trịnh Xuân Thuận</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Trương Minh Trí - Phạm Quang Huy', 
						'author_info' => 'Tác giả: <b>Trương Minh Trí - Phạm Quang Huy</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS - Bác Sĩ Nguyễn Lan Hải', 
						'author_info' => 'Tác giả: <b>TS - Bác Sĩ Nguyễn Lan Hải</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS. Huỳnh Văn Tòng', 
						'author_info' => 'Tác giả: <b>TS. Huỳnh Văn Tòng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS Michael Newton', 
						'author_info' => 'Tác giả: <b>TS Michael Newton</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS. Phan Quốc Việt', 
						'author_info' => 'Tác giả: <b>TS. Phan Quốc Việt</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'TS. Wendy Mogel ', 
						'author_info' => 'Tác giả: <b>TS. Wendy Mogel </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tsutsui Yoriko - Hayashi Akiko', 
						'author_info' => 'Tác giả: <b>Tsutsui Yoriko - Hayashi Akiko</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tsutsumi Chiharu', 
						'author_info' => 'Tác giả: <b>Tsutsumi Chiharu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Từ Thành Bắc', 
						'author_info' => 'Tác giả: <b>Từ Thành Bắc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tuệ Nghi', 
						'author_info' => 'Tác giả: <b>Tuệ Nghi</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Uyên Bùi - BS. Trí Đoàn', 
						'author_info' => 'Tác giả: <b>Uyên Bùi - BS. Trí Đoàn</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vân Trang (biên soạn)', 
						'author_info' => 'Tác giả: <b>Vân Trang (biên soạn)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Venio Tachibana', 
						'author_info' => 'Tác giả: <b>Venio Tachibana</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Viết Chi - Lâm Trinh (Sưu tầm)', 
						'author_info' => 'Tác giả: <b>Viết Chi - Lâm Trinh (Sưu tầm)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - KS. Nguyễn Việt Thái', 
						'author_info' => 'Tác giả: <b>Việt Chương - KS. Nguyễn Việt Thái</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Lâm Thị Mỹ Hương', 
						'author_info' => 'Tác giả: <b>Việt Chương - Lâm Thị Mỹ Hương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Nguyễn Sô', 
						'author_info' => 'Tác giả: <b>Việt Chương - Nguyễn Sô</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Nguyễn Việt Tiến', 
						'author_info' => 'Tác giả: <b>Việt Chương - Nguyễn Việt Tiến</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương - Phúc Quyên', 
						'author_info' => 'Tác giả: <b>Việt Chương - Phúc Quyên</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Chương', 
						'author_info' => 'Tác giả: <b>Việt Chương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Phương - Thái Hà', 
						'author_info' => 'Tác giả: <b>Việt Phương - Thái Hà</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Việt Thư', 
						'author_info' => 'Tác giả: <b>Việt Thư</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vĩnh Sính', 
						'author_info' => 'Tác giả: <b>Vĩnh Sính</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Violeta Babíc', 
						'author_info' => 'Tác giả: <b>Violeta Babíc</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'VL.COMP ', 
						'author_info' => 'Tác giả: <b>VL.COMP </b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vladimir Nabokov', 
						'author_info' => 'Tác giả: <b>Vladimir Nabokov</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'VL - Comp', 
						'author_info' => 'Tác giả: <b>VL - Comp</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vũ Thị Mai Phương', 
						'author_info' => 'Tác giả: <b>Vũ Thị Mai Phương</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vũ Tiến Cường', 
						'author_info' => 'Tác giả: <b>Vũ Tiến Cường</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Đăng Phong', 
						'author_info' => 'Tác giả: <b>Vương Đăng Phong</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Nguy (chủ biên)', 
						'author_info' => 'Tác giả: <b>Vương Nguy (chủ biên)</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Quyên', 
						'author_info' => 'Tác giả: <b>Vương Quyên</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Vương Trung Hiếu', 
						'author_info' => 'Tác giả: <b>Vương Trung Hiếu</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'WaterPC', 
						'author_info' => 'Tác giả: <b>WaterPC</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Werner M. Busch', 
						'author_info' => 'Tác giả: <b>Werner M. Busch</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'William Ury', 
						'author_info' => 'Tác giả: <b>William Ury</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Williams', 
						'author_info' => 'Tác giả: <b>Williams</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Woo Bo Hyun', 
						'author_info' => 'Tác giả: <b>Woo Bo Hyun</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Xuân Tùng', 
						'author_info' => 'Tác giả: <b>Xuân Tùng</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Yasushi Kitagawa', 
						'author_info' => 'Tác giả: <b>Yasushi Kitagawa</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Yellow Tanabe', 
						'author_info' => 'Tác giả: <b>Yellow Tanabe</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Yukito Ayatsuji', 
						'author_info' => 'Tác giả: <b>Yukito Ayatsuji</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Scott Cochrane', 
						'author_info' => 'Tác giả: <b>Scott Cochrane</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kim Zoller - Kerry Preston', 
						'author_info' => 'Tác giả: <b>Kim Zoller - Kerry Preston</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sandra Fox', 
						'author_info' => 'Tác giả: <b>Sandra Fox</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Young Learners Practice Tests', 
						'author_info' => 'Tác giả: <b>Young Learners Practice Tests</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Emily Bronte', 
						'author_info' => 'Tác giả: <b>Emily Bronte</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Gray - Barbara Annis', 
						'author_info' => 'Tác giả: <b>John Gray - Barbara Annis</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jessica Greenwell - Kimberley Scott', 
						'author_info' => 'Tác giả: <b>Jessica Greenwell - Kimberley Scott</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Malcolm Gladwell', 
						'author_info' => 'Tác giả: <b>Malcolm Gladwell</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Susan Coolidge', 
						'author_info' => 'Tác giả: <b>Susan Coolidge</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Haruki Murakami', 
						'author_info' => 'Tác giả: <b>Haruki Murakami</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jill O Sullivan - Joan Kang Shin', 
						'author_info' => 'Tác giả: <b>Jill O Sullivan - Joan Kang Shin</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Harper Lee', 
						'author_info' => 'Tác giả: <b>Harper Lee</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Collins Maples', 
						'author_info' => 'Tác giả: <b>Collins Maples</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tim Collins - Mary Maples', 
						'author_info' => 'Tác giả: <b>Tim Collins - Mary Maples</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jerome K. Jerome', 
						'author_info' => 'Tác giả: <b>Jerome K. Jerome</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nicholas Sparks', 
						'author_info' => 'Tác giả: <b>Nicholas Sparks</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Robert Louis Stevenson - Dr Tim Middleton - Dr Keith Carabine', 
						'author_info' => 'Tác giả: <b>Robert Louis Stevenson - Dr Tim Middleton - Dr Keith Carabine</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Wes Moore', 
						'author_info' => 'Tác giả: <b>Wes Moore</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Katherine Applegate - Patricia Castelao', 
						'author_info' => 'Tác giả: <b>Katherine Applegate - Patricia Castelao</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Khaled Hosseini', 
						'author_info' => 'Tác giả: <b>Khaled Hosseini</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Suzanne Collins', 
						'author_info' => 'Tác giả: <b>Suzanne Collins</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Victor Hugo', 
						'author_info' => 'Tác giả: <b>Victor Hugo</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Sir Arthur Conan Doyle', 
						'author_info' => 'Tác giả: <b>Sir Arthur Conan Doyle</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Adrian Tinniswood', 
						'author_info' => 'Tác giả: <b>Adrian Tinniswood</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'E. Nesbit', 
						'author_info' => 'Tác giả: <b>E. Nesbit</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Beverly Harzog', 
						'author_info' => 'Tác giả: <b>Beverly Harzog</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Prof Steve Peters', 
						'author_info' => 'Tác giả: <b>Prof Steve Peters</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Paulo Coelho', 
						'author_info' => 'Tác giả: <b>Paulo Coelho</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Karen Blumenthal', 
						'author_info' => 'Tác giả: <b>Karen Blumenthal</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'William Shakespeare', 
						'author_info' => 'Tác giả: <b>William Shakespeare</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Tim Falla - Paul A Davies', 
						'author_info' => 'Tác giả: <b>Tim Falla - Paul A Davies</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'N/A', 
						'author_info' => 'Tác giả: <b>N/A</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ken Wilson - Mike Boyle', 
						'author_info' => 'Tác giả: <b>Ken Wilson - Mike Boyle</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Heather Amery', 
						'author_info' => 'Tác giả: <b>Heather Amery</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'David Bohlke', 
						'author_info' => 'Tác giả: <b>David Bohlke</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jane Austen', 
						'author_info' => 'Tác giả: <b>Jane Austen</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Steve Rohr - Shirley Impellizzeri', 
						'author_info' => 'Tác giả: <b>Steve Rohr - Shirley Impellizzeri</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Ben Jealous - Trabian Shorters - Russell Simmons', 
						'author_info' => 'Tác giả: <b>Ben Jealous - Trabian Shorters - Russell Simmons</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Danielle Steel', 
						'author_info' => 'Tác giả: <b>Danielle Steel</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Eleanor H. Porter', 
						'author_info' => 'Tác giả: <b>Eleanor H. Porter</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jayme Adelson-Goldstein', 
						'author_info' => 'Tác giả: <b>Jayme Adelson-Goldstein</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Jon Hird', 
						'author_info' => 'Tác giả: <b>Jon Hird</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'John Eastwood', 
						'author_info' => 'Tác giả: <b>John Eastwood</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Kate Cory-Wright', 
						'author_info' => 'Tác giả: <b>Kate Cory-Wright</b><br>'.$lorem, 
						'author_image' => null 
					],
					[ 
						'author_name' => 'Nguyễn Ngọc Thuần', 
						'author_info' => 'Tác giả: <b>Nguyễn Ngọc Thuần</b><br>'.$lorem, 
						'author_image' => null 
					]
	         	]
         	);
    }
}
