<?php
namespace App\Libs;
use Illuminate\Support\Facades\Input;

class PaginationCustom{
	
	static $totalItems;					// Tổng số phần tử
	static $totalItemsPerPage		= 12;	// Tổng số phần tử xuất hiện trên một trang
	static $pageRange				= 5;	// Số trang xuất hiện
	static $totalPage;						// Tổng số trang
	static $currentPage			= 1;	// Trang hiện tại

	
	public function __construct($totalItems=1, $totalItemsPerPage = 12, $pageRange = 10, $currentPage = 1){
	}
	
	public static function showPagination($totalItems=1, $totalItemsPerPage = 12, $pageRange = 10, $currentPage = 1){

		SELF::$totalItems			= $totalItems;
		SELF::$totalItemsPerPage	= $totalItemsPerPage;
		
		if($pageRange %2 == 0) $pageRange = $pageRange + 1;
		
		SELF::$pageRange			= $pageRange;
		SELF::$currentPage			= Input::get('page',1);
		SELF::$totalPage			= ceil($totalItems/$totalItemsPerPage);


		// Pagination
		$paginationHTML = '';
		$listPages='';
		if(SELF::$totalPage > 1){
			$start 	= '<li class="disabled"><a href="#!">Start</a></li>';
			$prev 	= '<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';
			if(SELF::$currentPage > 1){
				$start 	= '<li class="waves-effect"><a href="?page=1">Start</a></li>';
				$prev 	= '<li class="waves-effect"><a href="?page='.(SELF::$currentPage-1).'"><i class="material-icons">chevron_left</i></a></li>';
			}
		
			$next 	= '<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
			$end 	= '<li class="disabled"><a href="#!">End</a></li>';
			if(SELF::$currentPage < SELF::$totalPage){
				$next 	= '<li class="waves-effect"><a href="?page='.(SELF::$currentPage+1).'"><i class="material-icons">chevron_right</i></a></li>';
				$end 	= '<li class="waves-effect"><a href="?page='.SELF::$totalPage.'">End</a></li>';
			}
		
			if(SELF::$pageRange < SELF::$totalPage){
				if(SELF::$currentPage == 1){
					$startPage 	= 1;
					$endPage 	= SELF::$pageRange;
				}else if(SELF::$currentPage == SELF::$totalPage){
					$startPage		= SELF::$totalPage - SELF::$pageRange + 1;
					$endPage		= SELF::$totalPage;
				}else{
					$startPage		= SELF::$currentPage - (SELF::$pageRange-1)/2;
					$endPage		= SELF::$currentPage + (SELF::$pageRange-1)/2;
		
					if($startPage < 1){
						$endPage	= $endPage + 1;
						$startPage = 1;
					}
		
					if($endPage > SELF::$totalPage){
						$endPage	= SELF::$totalPage;
						$startPage 	= $endPage - SELF::$pageRange + 1;
					}
				}
			}else{
				$startPage		= 1;
				$endPage		= SELF::$totalPage;
			}
		
			for($i = $startPage; $i <= $endPage; $i++){
				if($i == SELF::$currentPage) {
					$listPages .= '<li class="active"><a href="#!">'.$i.'</a></li>';
				}else{
					$listPages .= '<li class="waves-effect"><a href="?page='.$i.'">'.$i.'</a></li>';
				}
			}
		
			$paginationHTML = '<ul class="pagination">' . $start . $prev . $listPages . $next . $end . '</ul>';
		}
		return $paginationHTML;
	}
}